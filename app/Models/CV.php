<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;
    protected $table = 'cvs';
    protected $fillable = ['nom', 'ecole','formation','experienceas','descriptionas','photo','file','approuve'];


}
