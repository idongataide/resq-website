<?php

class terms extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['menu_active'] = 'Terms and Condtion';
        $this->loadView('terms-condition', @$data);
      
    }
}
