<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AreasController extends Controller
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

        $areas = $this->fetchDataFromApi($url . '/areas');

        return view('areas.index', compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/areas', [
            'name' => $request->name,
        ]);

        return redirect()->route('areas.index');
    }
}
