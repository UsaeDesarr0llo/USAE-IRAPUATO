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
        $pdfDoc1 = DB::select('select id, imagen from directors where id = 1');
        $pdfDoc2 = DB::select('select id, imagen from directors where id = 2');
        $pdfDoc3 = DB::select('select id, imagen from directors where id = 3');
        $pdfDoc4 = DB::select('select id, imagen from directors where id = 4');
        $pdfDoc5 = DB::select('select id, imagen from directors where id = 5');
        $pdfDoc6 = DB::select('select id, imagen from directors where id = 6');
        $pdfDoc7 = DB::select('select id, imagen from directors where id = 7');
        $pdfDoc8 = DB::select('select id, imagen from directors where id = 8');
        $pdfDoc9 = DB::select('select id, imagen from directors where id = 9');
        $pdfDoc10 = DB::select('select id, imagen from directors where id = 10');
        $pdfDoc11 = DB::select('select id, imagen from directors where id = 11');
        $pdfDoc12 = DB::select('select id, imagen from directors where id = 12');
        $pdfDoc13 = DB::select('select id, imagen from directors where id = 13');
        return view('directores', compact('pdfDoc1','pdfDoc2','pdfDoc3','pdfDoc4','pdfDoc5','pdfDoc6','pdfDoc7','pdfDoc8','pdfDoc9','pdfDoc10','pdfDoc11','pdfDoc12','pdfDoc13'));
    }
    public function docentes()
    {
        return view('docentes');
    }
    public function personalApoyo()
    {
        $pdfDo1 = DB::select('select id, pdf from personals where id = 1');
        $pdfDo2 = DB::select('select id, pdf from personals where id = 2');
        $pdfDo3 = DB::select('select id, pdf from personals where id = 3');
        $pdfDo4 = DB::select('select id, pdf from personals where id = 4');
        $pdfDo5 = DB::select('select id, pdf from personals where id = 5');
        return view('personalApoyo', compact('pdfDo1','pdfDo2','pdfDo3','pdfDo4','pdfDo5'));
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
