<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class Categorycontent extends Component
{
    public $count = 8;
    public $sort_by = 'rating';
    public $sort = 'DESC';
    public $theme = 'Semua';
    public $location = 'Semua';
    public $min = null;
    public $max = null;
    public $pages = 'sekitarsaya';
    protected $queryString = ['pages'];

    public $category;
    public $searched='';

    public function mount($category){
        $this->category=Category::where('slug', $category)->first();
    }

    public function render(Request $request){
        // Search
        if($request->search){
            $this->searched = $request->search;
        }

        // Category
        $query = Product::where('category', $this->category->name)
                        ->where('name', 'LIKE', '%' . $this->searched . '%');
         // Theme
        if ($this->theme!='Semua'){
            $query = $query->where('theme', $this->theme);
        }
        // Location
        if ($this->location!='Semua'){
            $query = $query->whereHas('Vendor', function ($q){
                $q->where('address', $this->location);
            });
        }
        // Min price
        if ($this->min!=null){
            $query = $query->where('price', '>=', $this->min);
        }
        // Max price
        if ($this->max!=null){
            $query = $query->where('price', '<=', $this->max);
        }
        // Sort
        $products = $query->orderBy($this->sort_by, $this->sort)->take($this->count)->get();
        $total_products = $query->count();

        return view('livewire.categorycontent', [
            'total_products'=>$total_products,
            'products'=>$products,
            'categories'=>Category::all(),
        ])->extends('layouts.main', [
            'title'=>$this->category->name,
            'searched'=>$this->searched,
        ])->section('content');
    }

    public function load(){
        $this->count += 8;
    }

    public function sort(){
        if ($this->sort === 'DESC'){
            $this->sort = 'ASC';
        } else {
            $this->sort = 'DESC';
        }
    }

    public function sort_by($sort_by){
        if ($sort_by==='review'){
            $this->sort_by = 'review';
            $this->sort = 'DESC';
        } elseif ($sort_by==='rating'){
            $this->sort_by = 'rating';
            $this->sort = 'DESC';
        } elseif ($sort_by==='highest_price'){
            $this->sort_by = 'price';
            $this->sort = 'DESC';
        } elseif ($sort_by==='lowest_price'){
            $this->sort_by = 'price';
            $this->sort = 'ASC';
        }
    }

    public function pages($pages){
        if ($pages==='sekitarsaya'){
            $this->pages = 'sekitarsaya';
        } elseif ($pages==='terbaru'){
            $this->pages = 'terbaru';
        } elseif ($pages==='populer'){
            $this->pages = 'populer';
        } elseif ($pages==='specialoffer'){
            $this->pages = 'specialoffer';
        }
    }
}
