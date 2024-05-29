<?php

namespace App\Livewire;

use App\Models\Website as ModelsWebsite;
use Livewire\Component;

class Website extends Component
{


    public $website;

    public $domain;
    public $selectDomain = false;
    public $domain_checkbox = false;
    public $domain_amount;


    public $webHost;
    public $select_webHost = false;
    public $webHost_checkbox = false;
    public $webHost_amount;


    public $webPage = 0;
    public $select_webPage = false;
    public $webPage_checkbox = false;
    public $webPage_amount;


    public $email = 0;
    public $select_email = false;
    public $email_checkbox = false;
    public $email_amount;




    public $ssl;
    public $ssl_amount;
    public $ssl_checkbox = false;


    public $enquiry_form;
    public $enquiry_form_amount;
    public $enquiry_form_checkbox = false;


    public $security_backup;
    public $security_backup_amount;
    public $security_backup_checkboxt;


    public $image_quality;
    public $image_quality_amount;
    public $image_quality_checkbox= false;


    public $content_writting;
    public $content_writting_amount;
    public $content_writting_checkbox = false;

    public $value_webPage = 0; // Initial value
    public $value_email = 0; // Initial value


    public $itemCount = 0;
    public $totalPrice = 0;

    public function decrement_webPage()
    {

        if ($this->webPage_checkbox) {
            if ($this->value_webPage > 1) {
                $this->value_webPage--;
            } else {
                $this->value_webPage = 1;
            }

            $this->webPage_amount = $this->website->web_page * $this->value_webPage;
        } else {
            $this->select_email = false;
            $this->email_amount = 0;
        }
    }

    public function increment_webPage()
    {


        if ($this->webPage_checkbox) {


            $this->value_webPage++;

            $this->webPage_amount = $this->website->web_page * $this->value_webPage;

        } else {

            $this->select_email = false;
            $this->email_amount = 0;
        }
        // dd($this->webPage);
    }

    public function decrement_email()
    {
        if ($this->email_checkbox) {
            if ($this->value_email > 1) {
                $this->value_email--;
            } else {
                $this->value_email = 1;
            }
            $this->email_amount = $this->website->email * $this->value_email;
        } else {
            $this->select_email = false;
            $this->email_amount = 0;
        }
    }
    public function increment_email()
    {
        if ($this->email_checkbox) {


            $this->value_email++;
            $this->email_amount = $this->website->email * $this->value_email;
            // dd($this->webPage);
        } else {
            $this->select_email = false;
            $this->email_amount = 0;
        }
    }



    public function mount()
    {
        $this->website = ModelsWebsite::first();
    }



    public function select_domain()
    {
        if ($this->domain_checkbox) {
            $this->itemCount++;
            $this->selectDomain = true;
            $this->domain_amount = $this->website->domain * $this->domain;
        } else {
            $this->itemCount--;
            $this->selectDomain = false;
            $this->domain_amount = 0;
        }
    }

    public function domain_func()
    {
        $this->domain_amount = $this->website->domain * $this->domain;
    }


    public function select_web_host()
    {
        if ($this->webHost_checkbox) {

            $this->itemCount++;
            $this->select_webHost = true;
            $this->webHost_amount = $this->website->web_hosting * $this->webHost;
        } else {
            $this->itemCount--;
            $this->select_webHost = false;
            $this->webHost_amount = 0;
        }
    }

    public function web_host()
    {
        $this->webHost_amount = $this->website->web_hosting * $this->webHost;
    }


    public function select_web_page()
    {

        // dd($this->webPage);
        if ($this->webPage_checkbox) {

            $this->itemCount++;
            $this->select_webPage = true;
            $this->webPage_amount = $this->website->web_page * $this->value_webPage;
        } else {

            $this->itemCount--;
            $this->select_webPage = false;
            $this->webPage_amount = 0;
            $this->value_webPage = 0;
        }
    }


    public function select_email_checkbox()
    {

        // dd($this->webPage);
        if ($this->email_checkbox) {

            $this->itemCount++;
            $this->select_email = true;
            $this->email_amount = $this->website->email * $this->value_email;
        } else {
            $this->itemCount--;
            $this->select_email = false;
            $this->email_amount = 0;
            $this->value_email = 0;
        }
    }


    public function select_ssl_checkbox()
    {
        if ($this->ssl_checkbox) {
            $this->itemCount++;
            $this->ssl_amount = $this->website->ssl;
        } else {
            $this->itemCount--;
            $this->ssl_amount = 0;
        }
    }

    public function select_enquiry_form_checkbox()
    {
        if ($this->enquiry_form_checkbox) {
            $this->itemCount++;
            $this->enquiry_form_amount = $this->website->enquiry_form;
        } else {
            $this->itemCount--;
            $this->enquiry_form_amount = 0;
        }
    }

    public function select_security_backup_checkbox()
    {
        if ($this->security_backup_checkboxt) {
            $this->itemCount++;
            $this->security_backup_amount = $this->website->security_backup;
        } else {
            $this->itemCount--;
            $this->security_backup_amount = 0;
        }
    }

    public function select_hd_quality_images_checkbox()
    {
        if ($this->image_quality_checkbox) {
            $this->itemCount++;
            $this->image_quality_amount = $this->website->hd_quality_images;
        } else {
            $this->itemCount--;
            $this->image_quality_amount = 0;
        }
    }
    public function select_content_writing_checkbox()
    {
        if ($this->content_writting_checkbox) {
            $this->itemCount++;
            $this->content_writting_amount = $this->website->content_writing;
        } else {
            $this->itemCount--;
            $this->content_writting_amount = 0;
        }
    }









    public function render()
    {
        return view('livewire.website');
    }
}
