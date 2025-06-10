<?php

class faqs extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['menu_active'] = 'faq';
        $this->loadView('faqs', @$data);
    }
}
