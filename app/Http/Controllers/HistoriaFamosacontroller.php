<?php 



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaFamosa;

class HistoriaFamosaController extends Controller
{
    public function index()
    {
        $historias = HistoriaFamosa::orderBy('created_at', 'desc')->get();
        return view('historiasfamosas', compact('historias'));
    }
}
