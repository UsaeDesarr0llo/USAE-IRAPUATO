<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use Illuminate\Support\Facades\DB;

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
        return view('Director');
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
}