<?php
namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;




use App\Models\Image;
use App\Models\TypeBien;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $selectedType = $request->input('types', 'all');

        // Filter biens based on the selected type
        $biens = Bien::when($selectedType != 'all', function ($query) use ($selectedType) {
            $query->where('type', $selectedType);
        })->get();

        // No need to fetch types from another table
        $types = Bien::select('type')->distinct()->get();

        return view('welcome', compact('biens', 'types', 'selectedType'));
    }

}
