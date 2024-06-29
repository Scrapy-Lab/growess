<?php

namespace App\Livewire;

use App\Models\Banner;
use App\Models\Service;
use Livewire\Component;

class HomeBanner extends Component
{


    public $banner;
    public $services;
    public $colors;

    public function mount(){

        $this->banner = Banner::where(function ($query) {
            $query->whereNull('time_from')->orWhere('time_from', '<=', now());
            $query->whereNull('time_to')->orWhere('time_to', '>=', now());

        })->where('is_visible', 1)->orderBy('time_from', 'desc')->first();

        $this->services = Service::all();

        $this->colors = ['#f29900','#1e8e3e','#1667d0','#c7241d'];
    }

    public function render()
    {
        return view('livewire.home-banner');
    }
}
