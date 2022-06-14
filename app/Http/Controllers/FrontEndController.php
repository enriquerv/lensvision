<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
    	$active = 'index';
    	$title = 'INICIO';
    	return view('index', compact('active', 'title'));
    }

    public function us()
    {
        $active = 'us';
        $title = 'NOSOTROS';
        return view('us', compact('active', 'title'));
    }

    public function services()
    {
        $active = 'services';
        $title = 'SERVICIOS';
        return view('services', compact('active', 'title'));
    }

    public function contact()
    {
        $active = 'contact';
        $title = 'CONTACTO';
        return view('contact', compact('active', 'title'));
    }
}
