<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cameron extends Model
{
    use HasFactory;
    protected $fillable=['name','description','price','image','image_a','image_b','image_c','quantity','categoryID','post'];
}
