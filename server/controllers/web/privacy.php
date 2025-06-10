<?php

class privacy extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['menu_active'] = 'Privacy Policy';
        $this->loadView('privacy-policy', @$data);
      
    }
}
