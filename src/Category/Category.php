<?php


namespace Sailwork\Commerce\Category;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    protected $guarded = [];

    protected $fillable = ['name', 'slug', 'description', 'is_active'];

}
