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
        $pdfD1 = DB::select('select id_documento, documento from documento where id_documento = 1');
        $pdfD2 = DB::select('select id_documento, documento from documento where id_documento = 2');
        $pdfD3 = DB::select('select id_documento, documento from documento where id_documento = 3');
        $pdfD4 = DB::select('select id_documento, documento from documento where id_documento = 4');
        $pdfD5 = DB::select('select id_documento, documento from documento where id_documento = 5');
        $pdfD6 = DB::select('select id_documento, documento from documento where id_documento = 6');
        $pdfD7 = DB::select('select id_documento, documento from documento where id_documento = 7');
        $pdfD8 = DB::select('select id_documento, documento from documento where id_documento = 8');
        $pdfD9 = DB::select('select id_documento, documento from documento where id_documento = 9');
        $pdfD10 = DB::select('select id_documento, documento from documento where id_documento = 10');
        $pdfD11 = DB::select('select id_documento, documento from documento where id_documento = 11');
        $pdfD12 = DB::select('select id_documento, documento from documento where id_documento = 12');
        $pdfD13 = DB::select('select id_documento, documento from documento where id_documento = 13');
        return view('directores', compact('pdfD1', 'pdfD2', 'pdfD3', 'pdfD4', 'pdfD5', 'pdfD6', 'pdfD7', 'pdfD8', 'pdfD9', 'pdfD10', 'pdfD11', 'pdfD12', 'pdfD13'));
    }

    public function update(){
        
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
