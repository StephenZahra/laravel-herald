<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class HeraldController extends Controller
{
    /**
     * Render the Livewire component directly.
     *
     * This method is simplified since the data loading and UI updates are now handled by the Livewire component.
     */
    public function index()
    {
        // No need to load data here; the Livewire component handles it.
        return view('herald'); // A simple view that includes the parent Livewire component.
    }

    /**
     * This function sends a request to the url sent in the request and sends the response to the view that is being rendered
     * in the main page
     *
     * @param SendRequest $request
     * @return RedirectResponse
     */
    public function send(SendRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $resp = Http::send($data['type'], $data['url'])->body();

        session()->flash('data', $data);

        return redirect()->route('herald')->with('resp', $resp);
    }
}
