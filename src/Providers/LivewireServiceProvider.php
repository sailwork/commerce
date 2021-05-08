<?php

namespace Sailwork\Commerce\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Sailwork\Commerce\Http\Livewire\Catalog\ProductTypeList;

class LivewireServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('catalog-product-type-list', ProductTypeList::class);
    }
}
