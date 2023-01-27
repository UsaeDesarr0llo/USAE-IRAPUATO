<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use Illuminate\Routing\Controller as controller;


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
    public function avisos()
    {
        $images = Imagen::paginate(3);
        return View('welcome', compact('images'));
    }
}
