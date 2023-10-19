<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index() {
        $path = storage_path() . "/app/public/product.json";
        $phones = json_decode(file_get_contents($path), true);
        return view('welcome', compact('phones'));
    }
}
