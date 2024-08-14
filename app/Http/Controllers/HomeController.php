<?php

namespace App\Http\Controllers;


use App\Models\Bien;
use Illuminate\Http\Request;




use App\Models\Image;
use App\Models\TypeBien;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

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
    public function index(Request $request)
    {
        $selectedType = $request->input('types', 'all');

        // Filter biens based on the selected type
        $biens = Bien::when($selectedType != 'all', function ($query) use ($selectedType) {
            $query->where('type', $selectedType);
        })->get();

        // No need to fetch types from another table
        $types = Bien::select('type')->distinct()->get();

        return view('home', compact('biens', 'types', 'selectedType'));
    }

}
