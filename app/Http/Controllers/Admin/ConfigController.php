<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request) {
        $url = $request->url();
        $method = $request->$method();

        return view('config');
    }

    public function info() {
        echo 'Configurações INFO 1';
    }

    public function permissoes() {
        echo 'Configurações Permissões';
    }
}
