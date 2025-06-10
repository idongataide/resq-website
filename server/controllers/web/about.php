<?php

class about extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'About Us';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tls.lifevantagenigeria.com/api/stories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
                // 'Cache-Control: no-cache',
            ],
    
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
    
        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        
        $data['stories'] = $decodedResponse['data'] ?? [];
        $this->loadView('about-us', @$data);
    }

    public function leadership()
    {
        $data['page_title'] = 'Leadership';
        $this->loadView('leadership', @$data);
    }

}
