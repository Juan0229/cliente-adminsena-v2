<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    // Metodo privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');

        $computers = $this->fetchDataFromApi($url . '/computers');

        return view('computers.index', compact('computers'));
    }

    public function create()
    {
        return view('computers.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/computers', [
            'number' => $request->number,
            'brand'  => $request->brand,
        ]);

        return redirect()->route('computers.index');
    }
}
