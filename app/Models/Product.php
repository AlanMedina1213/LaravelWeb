<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // En tu modelo Product
protected $fillable = ['name', 'detail'];

    //protected $fillable = [
        //'attribute1',
        //'attribute2',
        // Add other attributes as needed
        //'_token', // Add the _token attribute to allow mass assignment
    //];
}
