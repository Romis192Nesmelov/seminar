<?php

namespace App\Http\Controllers;

use SimpleXMLElement;

class SettingsController extends Controller
{
    private Object $xml;

    public function __construct()
    {
        $this->xml = simplexml_load_file(base_path(env('SETTINGS_XML')));
    }

    public function getSettings(): SimpleXMLElement
    {
        return $this->xml;
    }

}
