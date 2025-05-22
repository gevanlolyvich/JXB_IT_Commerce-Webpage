<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        return view('pages.product.index');
    }
    public function hris()
    {

        return view('pages.product.hris');
    }
    public function crm()
    {

        return view('pages.product.crm');
    }
    public function finance()
    {

        return view('pages.product.finance');
    }
    public function itm()
    {

        return view('pages.product.it');
    }
}

