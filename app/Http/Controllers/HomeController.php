<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['ads' => Auth::user()->ads()->latest()->get()]);
    }

    public function showAddAdForm()
    {
        return view('ad_add');
    }

    public function storeAd(Request $request)
    {
        Auth::user()->ads()->create([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
        ]);
        return redirect()->route('home');
    }

    public function showEditAdForm(Ad $ad)
    {
        return view('ad_edit', ['ad' => $ad]);
    }

    public function updateAd(Request $request, Ad $ad)
    {
        $ad->fill([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
        ]);
        $ad->save();
        return redirect()->route('home');
    }

    public function showDeleteAdForm(Ad $ad)
    {
        return view('ad_delete', ['ad' => $ad]);
    }

    public function deleteAd(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('home');
    }
}
