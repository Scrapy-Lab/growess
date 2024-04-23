<?php

namespace App\Livewire;

use App\Models\Service as ModelsService;
use App\Models\SubService;
use Livewire\Component;

class Service extends Component
{

    public $services;
    public $modalTitle = '';
    public $subModalTitle = '';
    public $sub_services = [];
    public $products = [];
    // public $colors;

    public function mount()
    {


        $this->services = ModelsService::all();

        // $this->colors = ['#f29900','#1e8e3e','#1667d0','#c7241d'];
    }

    public function sub_service(ModelsService $service)
    {

        $this->modalTitle =    $service->name;
        $this->sub_services = $service->sub_services;

        // dd($this->sub_services);

    }

    public function service_products(SubService $sub_service)
    {
        // dd('asdasdasd');
        $this->subModalTitle =  $sub_service->name;
        $this->products = $sub_service->products;
        // dd($this->products);

    }


    public function render()
    {
        return view('livewire.service');
    }
}
