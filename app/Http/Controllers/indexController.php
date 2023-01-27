<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as controller;
use App\Models\Imagen;



class indexController extends controller
{
   
    public function home()
    {
        $images = Imagen::all();
        return view('index');
    }
    public function directores()
    {
        return view('directores');
    }
    public function docentes()
    {
        return view('docentes');
    }
    public function personalApoyo()
    {
        return view('personalApoyo');
    }
    public function personalUSAE()
    {
        return view('personalUSAE');
    }
    public function plazaEstatal()
    {
        return view('plazaEstatal');
    }
    public function plazaEstatalPersonal()
    {
        return view('plazaEstatalpersonalapoyo');
    }
    public function plazaFederal()
    {
        return view('plazaFederal');
    }
    public function plazaFederalPersonal()
    {
        return view('plazaFederalpersonalapoyo');
    }
    public function AI()
    {
        return view('personalUSAE.AI');
    }
    public function EA()
    {
        return view('personalUSAE.EA');
    }
    public function INF()
    {
        return view('personalUSAE.INF');
    }
    public function PDPD()
    {
        return view('personalUSAE.PDPD');
    }
    public function PL()
    {
        return view('personalUSAE.PL');
    }
    public function SP(){
        return view('personalUSAE.SP');
    }

   public function avisos(){
        $images = Imagen::paginate(3);
        return View('welcome', compact('images'));
    //$images = Imagen::all();
    /* $images = Imagen::join("Imagen.imagen", "=", "Imagen.id")
    ->select("Imagen.id","Imagen.imagen")
    ->where("Imagen.id", "=", $id)
    ->first(); */
    //$imagenes = DB::table('imagens')->get();
        //return view('welcome', compact('images'));
       // $images = DB::select('select * from Imagen where  = $id');
       // return view('/welcome', ['imagenes' => $images]);
       /* $imagenes = DB::table('Imagen')->get();
 
        return view('welcome', ['Imagen' => $imagenes]); */
        /* $imagen = 'SELECT * FROM Imagen';
        $imagenes = DB::select($imagen);
        return $imagenes; */
   }
}

//php artisan view:clear
//php artisan make:auth

