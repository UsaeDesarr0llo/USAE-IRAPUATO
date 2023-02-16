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
        $pdf1 = DB::select('select id, pdf from prestaciones_estatals where id = 1');
        $pdf2 = DB::select('select id, pdf from prestaciones_estatals where id = 2');
        $pdf3 = DB::select('select id, pdf from prestaciones_estatals where id = 3');
        $pdf4 = DB::select('select id, pdf from prestaciones_estatals where id = 4');
        $pdf5 = DB::select('select id, pdf from prestaciones_estatals where id = 5');
        $pdf6 = DB::select('select id, pdf from prestaciones_estatals where id = 6');
        $pdf7 = DB::select('select id, pdf from prestaciones_estatals where id = 7');
        $pdf8 = DB::select('select id, pdf from prestaciones_estatals where id = 8');
        $pdf9 = DB::select('select id, pdf from prestaciones_estatals where id = 9');
        $pdf10 = DB::select('select id, pdf from prestaciones_estatals where id = 10');
        $pdf11 = DB::select('select id, pdf from prestaciones_estatals where id = 11');
        $pdf12 = DB::select('select id, pdf from prestaciones_estatals where id = 12');
        return view('plazaEstatalpersonalapoyo', compact('pdf1','pdf2','pdf3','pdf4','pdf5','pdf6','pdf7','pdf8','pdf9','pdf10','pdf11','pdf12'));
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
        return view('plazaFederal', compact('pdfF1', 'pdfF2', 'pdfF3', 'pdfF4', 'pdfF5', 'pdfF6', 'pdfF7', 'pdfF8', 'pdfF9'));
    }
    public function plazaFederalPersonal()
    {
        $pdfDo1 = DB::select('select id, pdf from prestaciones_federals where id = 1');
        $pdfDo2 = DB::select('select id, pdf from prestaciones_federals where id = 2');
        $pdfDo3 = DB::select('select id, pdf from prestaciones_federals where id = 3');
        $pdfDo4 = DB::select('select id, pdf from prestaciones_federals where id = 4');
        $pdfDo5 = DB::select('select id, pdf from prestaciones_federals where id = 5');
        $pdfDo6 = DB::select('select id, pdf from prestaciones_federals where id = 6');
        $pdfDo7 = DB::select('select id, pdf from prestaciones_federals where id = 7');
        $pdfDo8 = DB::select('select id, pdf from prestaciones_federals where id = 8');
        $pdfDo9 = DB::select('select id, pdf from prestaciones_federals where id = 9');
        $pdfDo10 = DB::select('select id, pdf from prestaciones_federals where id = 10');
        $pdfDo11 = DB::select('select id, pdf from prestaciones_federals where id = 11');
        $pdfDo12 = DB::select('select id, pdf from prestaciones_federals where id = 12');
        return view('plazaFederalpersonalapoyo', compact('pdfDo1','pdfDo2','pdfDo3','pdfDo4','pdfDo5','pdfDo6','pdfDo7','pdfDo8','pdfDo9','pdfDo10','pdfDo11','pdfDo12'));
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
