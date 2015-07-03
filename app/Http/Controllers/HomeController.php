<?php
/**
 * by vitalikaz (03/07/15 15:17)
 */

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('home');
    }
}