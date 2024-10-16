<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{


    //
    public function home()
    {
        return inertia('Frontend/Pages/Home');
    }
    //infosoluces
    public function infosoluces()
    {
        return inertia('Frontend/Pages/Infosoluces');
    }

    //services
    public function services()
    {
        return inertia('Frontend/Pages/Services');
    }


    public function references()
    {
        return inertia('Frontend/Pages/References');
    }


    public function contact()
    {
        return inertia('Frontend/Pages/Contact');
    }


    public function detailreference()
    {
        return inertia('Frontend/Pages/DetailReference');
    }


    public function detailservice()
    {
        return inertia('Frontend/Pages/DetailService');
    }
}
