<?php

namespace Sailwork\Commerce\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{

    protected $table = 'product_types';

    protected $fillable = [
        'name',
        'slug',
        'is_active'
    ];

    /**
     * Change the current Status
     * @return bool
     */
    public function changeStatus()
    {
        $this->is_active = !$this->is_active;
        return $this->save();
    }

    protected $guarded = [];
}
