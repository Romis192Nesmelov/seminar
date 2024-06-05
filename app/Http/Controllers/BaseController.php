<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class BaseController extends Controller
{
    public function index(SettingsController $settings): View
    {
        return view('home',[
            'menu' => ['about_project','targets','certificates','our_experts','faq','contacts'],
            'settings' => $settings->getSettings()
        ]);
    }
}
