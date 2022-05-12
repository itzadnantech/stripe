<?php

namespace App\Controllers;

class StripeAuth extends BaseController
{
    public function index()
    {
        $this->load->view('authentication');
    }
}
