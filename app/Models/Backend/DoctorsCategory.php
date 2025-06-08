<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // Relationship with Doctor
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
