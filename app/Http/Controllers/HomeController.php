<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Director;
use App\Models\Docente;
use App\Models\DocePlazaE;
use App\Models\DocePlazaF;
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
        return view('Personal');
    }

    /**
    * Show the application dashboard.
    * Docente
    * @return \Illuminate\http\Response
    */
    public function Docente()
    {
        $datos = Docente::paginate(5);
        return View('Docente', compact('datos'));
    }

    public function createDocentes()
    {
        return view('createDocentes');
    }

    public function InsertarDoce(Request $request)
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

        Docente::create($images);
        return redirect()->route('Docente');

    }

    public function actualizarDoce(Request $request, Docente $pdfDoce)
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
        $pdfDoce->update($prod);
        return redirect()->route('Docente');
    }

    public function editardoc(Docente $pdfDoce)
    {
        return view('editarDocentes', compact('pdfDoce'));
    }

    /**
    * Show the application dashboard.
    * DOCENTES PLAZA ESTATAL
    * @return \Illuminate\http\Response
    */
    public function docenPlazaestatal()
    {
        $datos = DocePlazaE::paginate(5);
        return View('docenPlazaestatal', compact('datos'));

    }

    public function createDocePlazae()
    {
        return view('createDocePlazae');
    }

    public function InsertDocePlae(Request $request)
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

        DocePlazaE::create($images);
        return redirect()->route('docenPlazaestatal');

    }

    public function actualizarDocePlae(Request $request, DocePlazaE $pdfDoce)
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
        $pdfDoce->update($prod);
        return redirect()->route('docenPlazaestatal');
    }

    public function editardocPlae(DocePlazaE $pdfDoce)
    {
        return view('editarDocePlazae', compact('pdfDoce'));
    }

    /**
    * Show the application dashboard.
    * DOCENTES PLAZA FEDERAL
    * @return \Illuminate\http\Response
    */

    public function docenPlazafederal()
    {
        $datos = DocePlazaF::paginate(5);
        return View('docenPlazafederal', compact('datos'));

    }

    public function createDocePlazaf()
    {
        return view('createDocePlazaf');
    }

    public function InsertDocePlaf(Request $request)
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

        DocePlazaF::create($images);
        return redirect()->route('docenPlazafederal');

    }

    public function actualizarDocePlaf(Request $request, DocePlazaF $pdfDoce)
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
        $pdfDoce->update($prod);
        return redirect()->route('docenPlazafederal');
    }

    public function editardocPlaf(DocePlazaF $pdfDoce)
    {
        return view('editarDocePlazaf', compact('pdfDoce'));
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\http\Response
    */
    public function Director()
    {
        $datos = Director::paginate(5);
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

