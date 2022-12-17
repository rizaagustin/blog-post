<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // filed id yg di jaga, agar tidak error saat menggunakan artisan tinker
    protected $guarded = ['id'];

    public function posts(){

        return $this->hasMany(Post::class);

    }
}
