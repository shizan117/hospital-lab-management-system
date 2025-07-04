<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'specialty', 'qualification', 'status', 'description', 'image', 'doctors_category_id'];

    public function category()
    {
        return $this->belongsTo(DoctorsCategory::class, 'doctors_category_id');
    }
}
