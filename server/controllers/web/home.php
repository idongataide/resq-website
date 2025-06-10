<?php

class home extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {    
        $data['page_title'] = 'RESQ';
        $data['menu_active'] = 'index';

        $this->renderView('index', @$data);
    }

}
