<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['name', 'position', 'description', 'image', 'staff_category_id'];

    public function category()
    {
        return $this->belongsTo(StaffCategory::class, 'staff_category_id');
    }
}
