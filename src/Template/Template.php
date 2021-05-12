<?php

namespace Sailwork\Commerce\Template;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $guarded = [];

    protected $table = 'templates';

    protected $fillable = ['name', 'slug', 'description', 'is_active'];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'is_active' => 'boolean',
    ];
}
