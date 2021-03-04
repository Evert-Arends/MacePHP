<?php

class test_controller extends EmmaController
{
    public function init()
    {

    }

    public function index()
    {
        print_r('DIED');
        die();
        $this->page();
    }

    public function page($page = "index")
    {
        Loader::view("home/" . $page . ".php");
    }
}