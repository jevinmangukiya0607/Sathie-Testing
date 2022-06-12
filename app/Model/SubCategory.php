<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class SubCategory extends Model
{
    protected $table ='sub_category';
    
    protected $fillable = [
        'title','status','category_id',
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = [];
}
