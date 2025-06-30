<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffCategory extends Model
{
    protected $fillable = ['name'];

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

}
