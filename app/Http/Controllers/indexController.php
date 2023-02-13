<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as controller;
use App\Models\Contador;
use App\Models\Imagen;
use Illuminate\Support\Facades\DB;



class indexController extends controller
{
   
    public function home()
    {
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

        $img1 = DB::select('select id, imagen from imagens where id = 1');
        $img2 = DB::select('select id, imagen from imagens where id = 2');
        $img3 = DB::select('select id, imagen from imagens where id = 3');
        $img4 = DB::select('select id, imagen from imagens where id = 4');
        $img5 = DB::select('select id, imagen from imagens where id = 5');

        return View('welcome', compact('img1', 'img2', 'img3', 'img4', 'img5'));
   }
}
