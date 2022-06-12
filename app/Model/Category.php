<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    protected $table ='category';
    
    protected $fillable = [
        'title','type','status',
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = [];
}
