<?php

namespace App\Livewire;

use App\Models\Service as ModelsService;
use App\Models\SubService;
use Carbon\Carbon;
use Livewire\Component;

class Service extends Component
{

    public $services;
    public $modalTitle = '';
    public $subModalTitle = '';
    public $sub_services = [];
    public $products = [];
    public int $amount = 0;
    public  $day = 0;
    public  $custom_date;
    public int $grand_total = 0;
    public int $service_charge = 135;
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

    public function fixedAmount($amount)
    {
        $this->amount = $amount;
        // dd( $this->amount);

        if ($this->day != 0 && $this->amount != 0) {
            // $this->service_charge = $this->service_charge * $this->day;

            $this->grand_total =  $this->day * $this->amount;
        }
        // dd($this->amount);
    }


    public function customAmount()
    {
        // $this->amount = $amount;
        // dd( $this->amount);

        if ($this->day != 0 && $this->amount != 0) {
            // $this->service_charge = $this->service_charge * $this->day;

            $this->grand_total =  $this->day * $this->amount;
        }
        // dd($this->amount);
    }


    public function customDate()
    {
        // $this->amount = $amount;
        // dd( $this->amount);


        // Given date as a string (example)
        $givenDate = $this->custom_date;

        // Convert the given date to a Carbon instance
        $givenDateCarbon = Carbon::parse($givenDate)->startOfDay();

        // Get the current date as a Carbon instance
        $currentDateCarbon = Carbon::now()->startOfDay();;

        // Calculate the difference
        $differenceInDays = $currentDateCarbon->diffInDays($givenDateCarbon);

        // If you need the difference in a human-readable format
        // $humanReadableDifference = $currentDateCarbon->diffForHumans($givenDateCarbon);

        $this->day = $differenceInDays;
        // dd($differenceInDays);

        if ($this->day != 0 && $this->amount != 0) {
            // $this->service_charge = $this->service_charge * $this->day;

            $this->grand_total =  $this->day * $this->amount;
        }
        // dd($this->amount);
    }


    public function fixedDays($day)
    {
        $this->day = $day;


        // dd($this->service_charge, $this->day);


        if ($this->day != 0 && $this->amount != 0) {
            // $this->service_charge = $this->service_charge * $this->day;

            $this->grand_total =  $this->day * $this->amount;
        }

        $this->custom_date = "";

        // dd($this->day);
    }


    public function render()
    {
        return view('livewire.service');
    }
}
