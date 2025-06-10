<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Doctor;
use App\Models\Backend\DoctorsCategory;
use Illuminate\Http\Request;

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
            'experience' => 'required|integer',
            'description' => 'required|string',
            'doctors_category_id' => 'nullable|exists:doctors_categories,id',

            'image' => 'nullable|image',
        ]);

        $doctorData = $request->only([
            'name',
            'specialty',
            'qualification',
            'experience',
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
            'experience' => 'required|integer',
            'description' => 'required|string',
            'doctors_category_id' => 'nullable|exists:doctors_categories,id',
            'image' => 'nullable|image|max:2048', // max 2MB
        ]);

        $doctorData = $request->only([
            'name',
            'specialty',
            'qualification',
            'experience',
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
        $categories = DoctorsCategory::all();
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
}
