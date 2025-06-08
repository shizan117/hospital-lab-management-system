<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'specialty', 'qualification', 'experience', 'description', 'image', 'doctors_category_id'];

    public function DoctorsCategory()
    {
        return $this->belongsTo(DoctorsCategory::class, 'doctors_category_id');
    }



}
