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

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $http = Http::attach(
            'name', $request->name
        );

        if ($request->hasFile('image')) {
            $http = $http->attach(
                'image',
                file_get_contents($request->file('image')->getRealPath()),
                $request->file('image')->getClientOriginalName(),
                ['Content-Type' => $request->file('image')->getClientMimeType()]
            );
        }

        $response = $http->post($url . '/areas');

        return redirect()->route('areas.index')->with('success', 'Área registrada correctamente');
    }

    public function removeImage($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/areas/' . $id . '/image');

        return redirect()->route('areas.index')->with('success', 'Imagen eliminada');
    }
}
