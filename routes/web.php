<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Historia;
use App\Http\Controllers\HistoriaFamosaController;

Route::get('/principal', function () {
    return view('principal');
})->name('principal');




Route::get('/historiasfamosas', [HistoriaFamosaController::class, 'index'])->name('historiasfamosas');


Route::get('/historias', function (Request $request) {
    $query = Historia::query();

    if ($request->filled('buscar')) {
        $query->where('titulo', 'like', '%' . $request->buscar . '%')
              ->orWhere('contenido', 'like', '%' . $request->buscar . '%');
    }

    $historias = $query->latest()->paginate(5);

    return view('historias', compact('historias'));
})->name('historias');


Route::post('/historias', function (Request $request) {
    $request->validate([
        'titulo' => 'required|string|max:255',
        'contenido' => 'required|string',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
    ]);

    $nombreImagen = null;

    if ($request->hasFile('imagen')) {
        $nombreImagen = time() . '_' . $request->file('imagen')->getClientOriginalName();
        $request->file('imagen')->move(public_path('images'), $nombreImagen);
    }

    Historia::create([
        'titulo' => $request->titulo,
        'contenido' => $request->contenido,
        'imagen' => $nombreImagen,
    ]);

    return redirect()->route('historias')->with('success', '¡Historia publicada con éxito!');
})->name('historias.store');


Route::delete('/historias/{id}', function ($id) {
    $historia = Historia::findOrFail($id);

    if ($historia->imagen) {
        $rutaImagen = public_path('images/' . $historia->imagen);
        if (file_exists($rutaImagen)) {
            unlink($rutaImagen);  
        }
    }

    $historia->delete();

    return redirect()->route('historias')->with('success', 'Historia eliminada correctamente.');
})->name('historias.destroy');







