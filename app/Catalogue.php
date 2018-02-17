<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    //
    protected $fillable = ['title','author','genre','library_section','is_borrowed'];
}
