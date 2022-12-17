<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory,Sluggable;
    
    protected $guarded = ['id'];
    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters){


        // 1. cara ke 1
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%'.$filters['search'].'%')
        //         ->orwhere('body', 'like', '%'.$filters['search'].'%');

        // }
        
        // 2. cara ke 2 (lebih simpe)
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {

                $query->where('title', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%')
                             ->orwhereHas('author', function($query) use($search){
                                $query->where('name','like','%'. $search . '%');
                             });                         
             });
         });

        
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });

        // 1. versi callback
        // $query->when($filters['author'] ?? false,function($query,$author){
        //     return $query->whereHas('author',function($query) use($author){
        //         $query->where('username',$author);
        //     });
        // });
        
        // 2. versi arrow function
        $query->when($filters['author'] ?? false,fn($query,$author) =>
            $query->whereHas('author',fn($query) =>
                $query->where('username',$author)
            )
        );

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
    
    // jika tidak function tidak sesuai model maka haru deklarasikan user_idnya
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
