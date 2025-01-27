<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    use HasFactory;

    // Velden die massaal ingevuld mogen worden
    protected $fillable = ['id', 'name'];
}
