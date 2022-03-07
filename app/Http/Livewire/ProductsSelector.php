<?php

namespace App\Http\Livewire;

use App\Entities\Product;
use Livewire\Component;

class ProductsSelector extends Component
{
    public $products;
    protected $listeners = ['VendorSelected'];

    public function mount()
    {
        if(auth()->user()->userable::TYPE == 'admin')
            $this->products = collect();
        if(auth()->user()->userable::TYPE == 'vendor')
            $this->products = Product::withoutAuction()->withVendor(auth()->user()->userable->vendor->id)->get();
    }

    public function render()
    {
        return view('livewire.products-selector');
    }

    public function VendorSelected($vendor_id)
    {
        $this->products = Product::where('vendor_id',$vendor_id)->get();
    }
}
