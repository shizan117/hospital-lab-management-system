<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Doctor;
use App\Models\Backend\DoctorsCategory;
use App\Models\Backend\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function doctors()
    {
        $doctors = Doctor::orderBy('created_at', 'desc')->get();
        return view('backend.pages.doctors.index', compact('doctors'));

    }

    public function createDoctor()
    {
        $categories = DoctorsCategory::all();
        return view('backend.pages.doctors.create', compact('categories'));
    }

    public function storeDoctor(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'description' => 'required|string',
            'doctors_category_id' => 'nullable|exists:doctors_categories,id',

            'image' => 'nullable|image',
        ]);

        $doctorData = $request->only([
            'name',
            'specialty',
            'qualification',

            'description',
            'doctors_category_id'
        ]);

        if ($request->hasFile('image')) {
            $imageName = 'doctor_'.time() . '.' . $request->image->extension();
            $request->image->move(public_path('frontend_assets/img'), $imageName);
            $doctorData['image'] = $imageName;
        }

        Doctor::create($doctorData);

        return redirect()->route('admin.doctors')->with('success', 'Doctor created successfully.');
    }

    public function editDoctor($id)
    {
        // Find the doctor by id or fail (404 if not found)
        $doctor = Doctor::findOrFail($id);

        // Get all categories to populate the select dropdown
        $categories = DoctorsCategory::all();

        // Return the edit view with doctor and categories data
        return view('backend.pages.doctors.edit', compact('doctor', 'categories'));
    }
    public function updateDoctor(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',

            'description' => 'required|string',
            'doctors_category_id' => 'nullable|exists:doctors_categories,id',
            'image' => 'nullable|image|max:2048', // max 2MB
        ]);

        $doctorData = $request->only([
            'name',
            'specialty',
            'qualification',
            'description',
            'doctors_category_id'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the previous image if exists
            $oldImagePath = public_path('frontend_assets/img/' . $doctor->image);
            if (!empty($doctor->image) && file_exists($oldImagePath)) {
                @unlink($oldImagePath);
            }

            // Upload the new image
            $imageName = 'doctor_'.time() . '.' . $request->image->extension();
            $request->image->move(public_path('frontend_assets/img'), $imageName);
            $doctorData['image'] = $imageName;
        }

        $doctor->update($doctorData);

        return redirect()->route('admin.doctors')->with('success', 'Doctor updated successfully.');
    }
    public function toggleDoctorStatus($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->status = $doctor->status ? 0 : 1;
        $doctor->save();

        $statusText = $doctor->status ? 'Active' : 'Inactive';

        return redirect()->back()->with('success', "Doctor is now {$statusText}.");
    }



    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);

        // Full path to the image
        $imagePath = public_path('frontend_assets/img/' . $doctor->image);

        // Delete image if it exists
        if (!empty($doctor->image) && file_exists($imagePath)) {
            @unlink($imagePath); // Suppresses error if file can't be deleted
        }

        // Delete doctor record from DB
        $doctor->delete();

        // Redirect back with success message
        return redirect()->route('admin.doctors')->with('success', 'Doctor and image deleted successfully.');
    }



    public function doctorsCategories()
    {
        $categories = DoctorsCategory::orderBy('updated_at', 'desc')->get();

        return view('backend.pages.doctors.doctors_categories', compact('categories'));
    }

    public function saveDoctorCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'id' => 'nullable|integer', // Optional ID for updates
        ]);

        if ($request->id) {
            // Update existing category
            $category = DoctorsCategory::findOrFail($request->id);
            $category->update([
                'name' => $request->name
            ]);
            $message = 'Category updated successfully!';
        } else {
            // Create new category
            DoctorsCategory::create([
                'name' => $request->name
            ]);
            $message = 'Category added successfully!';
        }

        return redirect()->route('admin.doctors_categories')->with('success', $message);
    }

    public function destroyDoctorCategory($id)
    {
        $category = DoctorsCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.doctors_categories')->with('success', 'Category deleted successfully!');
    }

    public function adminSettings()
    {
        $roles = Role::all(); // Fetch all roles from the DB
        return view('backend.pages.settings.index', compact('roles'));
    }
     public function selectUser()
        {
            $users = User::all();
            return view('backend.pages.settings.Setup_Role_Permission.users', compact('users'));
        }
// Show form for a single user
    public function assignPermissionsToUser($userId)
    {
        $user = User::findOrFail($userId);
        $roles = Role::all();
        $allUsers = User::where('id', '!=', $userId)->get(); // for dropdown copy-from

        return view('backend.pages.settings.Setup_Role_Permission.set_permission', compact('user', 'roles', 'allUsers'));
    }


// Store updated permissions
    public function savePermissionsForUser(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $roleIds = $request->input('role_ids', []);
        $user->role_ids = json_encode(array_map('intval', $roleIds)); // ensure it's int
        $user->save();

        return redirect()->back()->with('success', 'Permissions updated for user.');
    }



    public function setRolePermission()
    {
        $roles = Role::all();;
        $users = User::all(); // You may filter this as needed
        return view('backend.pages.settings.Setup_Role_Permission.set_permission', compact('roles', 'users'));
    }

    public function storeRolePermission(Request $request, $roleId)
    {
        $selectedUserIds = $request->input('user_ids', []); // array of user IDs that should have this role

        $allUsers = User::all(); // or apply filters if needed

        foreach ($allUsers as $user) {
            $existingRoles = json_decode($user->role_ids ?? '[]', true);

            // Ensure it's always an array
            if (!is_array($existingRoles)) {
                $existingRoles = [];
            }

            // If this user was selected in the form
            if (in_array($user->id, $selectedUserIds)) {
                if (!in_array($roleId, $existingRoles)) {
                    $existingRoles[] = $roleId; // Add role
                }
            } else {
                // Remove role if unchecked
                $existingRoles = array_filter($existingRoles, function ($r) use ($roleId) {
                    return $r != $roleId;
                });
            }

            // Save updated role_ids JSON
            $user->role_ids = json_encode(array_values($existingRoles)); // reindex to avoid gaps
            $user->save();
        }

        return redirect()->back()->with('success', 'Permissions updated successfully.');
    }





    // staff task
    public function staffIndex()
    {
        $users = User::all();
        return view('backend.pages.settings.staff.index', compact('users'));
    }

    public function staffCreate()
    {
        return view('backend.pages.settings.staff.create');
    }

    public function staffStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.staff.index')->with('success', 'Staff created successfully.');
    }

    public function staffEdit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.pages.settings.staff.edit', compact('user'));
    }

    public function staffUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('admin.staff.index')->with('success', 'Staff updated successfully.');
    }

    public function staffDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.staff.index')->with('success', 'Staff deleted successfully.');
    }

}
