<?php
namespace Bitfumes\Contact;
class ContactServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/views","contact");
    }

    public function register(){

    }
}
