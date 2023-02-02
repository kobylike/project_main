<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table='posts';

    // protected $primaryKey='id';

    // protected $fillables=['user_id','category_id','slug','title','image_path','body'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function comments(){

        return $this->hasMany(Comment::class,'post_id','id');
    }




}
