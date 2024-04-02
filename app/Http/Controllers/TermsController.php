<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        return view('policies.terms');
    }
    public function privacy()
    {
       return view('policies.privacy');
    }
    public function faq()
    {
       return view('policies.faq'); 
    }
}
