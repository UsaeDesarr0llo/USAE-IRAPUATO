<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use App\Models\Thesis;
use App\Models\ThesisFile;
use Illuminate\Support\Facades\Storage;
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
        $theses = Thesis::all();
        return view('Director')->with('theses',$theses);
    }

    public function stor(Request $request){

        $max_code = Thesis::select(
            DB::raw(' (IFNULL(MAX(RIGHT(thesis_code,7)),0)) AS number_max')
        )->first();

        $year = date('Y');
        $code = 'DOC'.$year.'-'.str_pad($max_code->number_max +1, 7, "0", STR_PAD_LEFT);

        $thesis = Thesis::create([
            'thesis_code' => $code,
            'title' => $request->input('title'),
            'state' => ($request->input('state')?$request->input('state'):0)
        ]);

        $file = $request->file('file');

        if($file){
            $filename = $file->getClientOriginalName();
            $foo = \File::extension($filename);
            if($foo == 'pdf'){
                $route_file = $code.DIRECTORY_SEPARATOR.date('Ymdhmi').'.'.$foo;
                Storage::disk('public')->put($route_file,\File::get($file));
                ThesisFile::create([
                    'thesis_id' => $thesis->id,
                    'url' => $route_file,
                    'name' => $filename
                ]);
                return response()->json(['response' => [
                        'msg' => 'Registro Completado',
                        ]
                    ], 201);
            }else{
                return response()->json(['response' => [
                    'msg' => 'Solo Archivos PDF',
                    ]
                ], 201);
            }
        }

    }
    public function urlfile($thesis_id){
        $file = ThesisFile::where('thesis_id',$thesis_id)->where('state',1)->first();
        return response()->json(['response' => [
            'url' => $file->url,
            'name' => $file->name,
            ]
        ], 201);
    }

    public function updat(Request $request){
        $id = $request->input('thesis_id');
        $code = $request->input('thesis_code');
        Thesis::where('id',$id)->update([
            'title' => $request->input('title'),
            'state' => ($request->input('state')?$request->input('state'):0)
        ]);

        ThesisFile::where('thesis_id',$id)->update(['state'=>0]);

        $file = $request->file('file');
        if($file){
            $filename = $file->getClientOriginalName();
            $foo = \File::extension($filename);
            if($foo == 'pdf'){
                $route_file = $code.DIRECTORY_SEPARATOR.date('Ymdhmi').'.'.$foo;
                Storage::disk('public')->put($route_file,\File::get($file));
                ThesisFile::create([
                    'thesis_id' => $id,
                    'url' => $route_file,
                    'name' => $filename
                ]);
                return response()->json(['response' => [
                        'msg' => 'Se actualizo Correctamente',
                        ]
                    ], 201);
            }else{
                return response()->json(['response' => [
                    'msg' => 'Solo Archivos PDF',
                    ]
                ], 201);
            }
        }

    }

    public function destro($id){
        Thesis::where('id',$id)->delete();
        return response()->json(['response' => [
            'msg' => 'Eliminado correctamnete',
            ]
        ], 201);
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
    public function avisos()
    {
        $images = Imagen::paginate(5);
        return View('avisos', compact('images'));
    }
}