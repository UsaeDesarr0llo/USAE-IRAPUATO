<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Director;
use App\Models\Personal;
use App\Models\prestacionesEstatal;
use App\Models\prestacionesFederal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('home');
    }

        /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function avisos()
    {
        $images = Imagen::paginate(5);
        return View('avisos', compact('images'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\http\Response
     */
    public function create()
    {
        return view('create');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|mimes:png,jpg,webp|max:3024'
        ]);
        $images = $request->all();

        if($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis').".". $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $images['imagen'] = "$imagenProducto";
        }

        Imagen::create($images);
        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagen $images)
    {
        return view('edit', compact('images'));
    }

         /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imagen $images)
    {
        $request->validate([
            'imagen' => 'required|image|mimes:png,jpg,webp|max:3024'
        ]);


        $prod = $request->all();
         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['imagen'] = "$imagenProducto";
         }else{
            unset($prod['imagen']);
         }
        $images->update($prod);
        return redirect()->route('avisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imagen $images)
    {
        $images->delete();
      
        return redirect()->route('home')
                        ->with('success','Product deleted successfully');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function Personal()
    {
        $dato = Personal::paginate(5);
        return View('Personal', compact('dato'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function createPersonal()
    {
        return view('createPersonal');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function Inserta(Request $request)
    {

        $request->validate([
            'pdf' => 'required|file|mimes:pdf,xlsx,docx,csv|max:2048'
        ]);
        $dato = $request->all();

        if($imagen = $request->file('pdf')) {
            $rutaGuardarImg = 'Archivos/';
            $imagenProducto = date('YmdHis').".". $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $dato['pdf'] = "$imagenProducto";
        }

        Personal::create($dato);
        return redirect()->route('Personal');

    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function edita(Personal $dato)
    {
        return view('editarPersonal', compact('dato'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function actualiza(Request $request, Personal $dato)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf,xlsx,docx,csv|max:2048'
        ]);


        $prod = $request->all();
         if($imagen = $request->file('pdf')){
            $rutaGuardarImg = 'Archivos/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['pdf'] = "$imagenProducto";
         }else{
            unset($prod['pdf']);
         }
        $dato->update($prod);
        return redirect()->route('Personal');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function prestacionesEstatal()
    {
        $date = prestacionesEstatal::paginate(12);
        return view('prestacionesEstatal', compact('date'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function createprestacionesEstatal()
    {
        return view('createprestacionesEstatal');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function Inserte(Request $request)
    {

        $request->validate([
            'pdf' => 'required|file|mimes:pdf,xlsx,docx,csv|max:2048'
        ]);
        $date = $request->all();

        if($imagen = $request->file('pdf')) {
            $rutaGuardarImg = 'Archivos/';
            $imagenProducto = date('YmdHis').".". $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $date['pdf'] = "$imagenProducto";
        }

        prestacionesEstatal::create($date);
        return redirect()->route('prestacionesEstatal');

    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function edite(prestacionesEstatal $date)
    {
        return view('editarprestacionesEstatal', compact('date'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function actualize(Request $request, prestacionesEstatal $date)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf,xlsx,docx,csv|max:2048'
        ]);


        $prod = $request->all();
         if($imagen = $request->file('pdf')){
            $rutaGuardarImg = 'Archivos/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['pdf'] = "$imagenProducto";
         }else{
            unset($prod['pdf']);
         }
        $date->update($prod);
        return redirect()->route('prestacionesEstatal');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function prestacionesFederal()
    {
        $dat = prestacionesFederal::paginate(12);
        return view('prestacionesFederal', compact('dat'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function createprestacionesFederal()
    {
        return view('createprestacionesFederal');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function Inserto(Request $request)
    {

        $request->validate([
            'pdf' => 'required|file|mimes:pdf,xlsx,docx,csv|max:2048'
        ]);
        $dat = $request->all();

        if($imagen = $request->file('pdf')) {
            $rutaGuardarImg = 'Archivos/';
            $imagenProducto = date('YmdHis').".". $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $dat['pdf'] = "$imagenProducto";
        }

        prestacionesFederal::create($dat);
        return redirect()->route('prestacionesFederal');

    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function edito(prestacionesFederal $dat)
    {
        return view('editarprestacionesFederal', compact('dat'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function actualizo(Request $request, prestacionesFederal $dat)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf,xlsx,docx,csv|max:2048'
        ]);


        $prod = $request->all();
         if($imagen = $request->file('pdf')){
            $rutaGuardarImg = 'Archivos/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['pdf'] = "$imagenProducto";
         }else{
            unset($prod['pdf']);
         }
        $dat->update($prod);
        return redirect()->route('prestacionesFederal');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function Docente()
    {
        return view('Docente');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function Director()
    {
        $datos = Director::paginate(13);
        return View('Director', compact('datos'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function createDirector()
    {
        return view('createDirector');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function Insertar(Request $request)
    {

        $request->validate([
            'imagen' => 'required|file|mimes:pdf,xlsx,docx,csv|max:2048'
        ]);
        $images = $request->all();

        if($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'Archivos/';
            $imagenProducto = date('YmdHis').".". $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $images['imagen'] = "$imagenProducto";
        }

        Director::create($images);
        return redirect()->route('Director');

    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function editar(Director $datos)
    {
        return view('editarDirector', compact('datos'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function actualizar(Request $request, Director $datos)
    {
        $request->validate([
            'imagen' => 'required|file|mimes:pdf,xlsx,docx,csv|max:2048'
        ]);


        $prod = $request->all();
         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'Archivos/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['imagen'] = "$imagenProducto";
         }else{
            unset($prod['imagen']);
         }
        $datos->update($prod);
        return redirect()->route('Director');
    }
}