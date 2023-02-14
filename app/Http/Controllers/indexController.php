<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as controller;
use App\Models\Imagen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class indexController extends controller
{
   
    public function home()
    {
        return view('index');
    }
    public function directores()
    {
        $pdfD1 = DB::select('select id, imagen from directors where id = 1');
        $pdfD2 = DB::select('select id, imagen from directors where id = 2');
        $pdfD3 = DB::select('select id, imagen from directors where id = 3');
        $pdfD4 = DB::select('select id, imagen from directors where id = 4');
        $pdfD5 = DB::select('select id, imagen from directors where id = 5');
        $pdfD6 = DB::select('select id, imagen from directors where id = 6');
        $pdfD7 = DB::select('select id, imagen from directors where id = 7');
        $pdfD8 = DB::select('select id, imagen from directors where id = 8');
        $pdfD9 = DB::select('select id, imagen from directors where id = 9');
        $pdfD10 = DB::select('select id, imagen from directors where id = 10');
        $pdfD11 = DB::select('select id, imagen from directors where id = 11');
        $pdfD12 = DB::select('select id, imagen from directors where id = 12');
        $pdfD13 = DB::select('select id, imagen from directors where id = 13');
        return view('directores', compact('pdfD1', 'pdfD2', 'pdfD3', 'pdfD4', 'pdfD5', 'pdfD6', 'pdfD7', 'pdfD8', 'pdfD9', 'pdfD10', 'pdfD11', 'pdfD12', 'pdfD13'));
    }

    public function update(){
        
        return view('directores');
    }
    public function docentes()
    {
        $pdfDoc1 = DB::select('select id, imagen from docents where id = 1');
        $pdfDoc2 = DB::select('select id, imagen from docents where id = 2');
        $pdfDoc3 = DB::select('select id, imagen from docents where id = 3');
        $pdfDoc4 = DB::select('select id, imagen from docents where id = 4');
        $pdfDoc5 = DB::select('select id, imagen from docents where id = 5');
        $pdfDoc6 = DB::select('select id, imagen from docents where id = 6');
        $pdfDoc7 = DB::select('select id, imagen from docents where id = 7');
        return view('docentes', compact('pdfDoc1', 'pdfDoc2', 'pdfDoc3', 'pdfDoc4', 'pdfDoc5', 'pdfDoc6', 'pdfDoc7'));
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
        $pdfE1 = DB::select('select id, imagen from doce_plazae where id = 1');
        $pdfE2 = DB::select('select id, imagen from doce_plazae where id = 2');
        $pdfE3 = DB::select('select id, imagen from doce_plazae where id = 3');
        $pdfE4 = DB::select('select id, imagen from doce_plazae where id = 4');
        $pdfE5 = DB::select('select id, imagen from doce_plazae where id = 5');
        $pdfE6 = DB::select('select id, imagen from doce_plazae where id = 6');
        $pdfE7 = DB::select('select id, imagen from doce_plazae where id = 7');
        return view('plazaEstatal', compact('pdfE1', 'pdfE2', 'pdfE3', 'pdfE4', 'pdfE5', 'pdfE6', 'pdfE7'));
    }
    public function plazaEstatalPersonal()
    {
        return view('plazaEstatalpersonalapoyo');
    }
    public function plazaFederal()
    {
        $pdfF1 = DB::select('select id, imagen from doce_plazaf where id = 1');
        $pdfF2 = DB::select('select id, imagen from doce_plazaf where id = 2');
        $pdfF3 = DB::select('select id, imagen from doce_plazaf where id = 3');
        $pdfF4 = DB::select('select id, imagen from doce_plazaf where id = 4');
        $pdfF5 = DB::select('select id, imagen from doce_plazaf where id = 5');
        $pdfF6 = DB::select('select id, imagen from doce_plazaf where id = 6');
        $pdfF7 = DB::select('select id, imagen from doce_plazaf where id = 7');
        $pdfF8 = DB::select('select id, imagen from doce_plazaf where id = 8');
        $pdfF9 = DB::select('select id, imagen from doce_plazaf where id = 9');
        return view('plazaFederal', compact('pdfF1', 'pdfF2', 'pdfF3', 'pdfF4', 'pdfF5', 'pdfF6', 'pdfF7', 'pdfF9'));
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
