<?php

namespace App\Livewire;

use Livewire\Component;

class SampleWebDesign extends Component
{

    public $static = true;
    public $dynamic = false;
    public $brochure = false;
    public $ecom = false;


    public function web_type($type){


        if($type == 'static'){

            $this->dynamic = false;
            $this->static= true;
            $this->brochure = false;
            $this->ecom = false;
        }elseif($type == 'dynamic'){
            $this->dynamic = true;
            $this->static= false;
            $this->brochure = false;

            $this->ecom = false;
        }elseif($type == 'brochure'){
            $this->dynamic = false;
            $this->static= false;
            $this->brochure = true;

            $this->ecom = false;
        }elseif($type == 'ecom'){
            $this->dynamic = false;
            $this->static= false;
            $this->brochure = false;

            $this->ecom = true;
        }




    }
    public function render()
    {
        return view('livewire.sample-web-design');
    }
}
