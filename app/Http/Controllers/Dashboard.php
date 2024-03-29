<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Dashboard extends Controller
{
    public function index(){

        $estoque = Stock::all();

        $barrasInteiras = $estoque->where('tamanho', '6,00' );

        // L009 branca ----------------------
        $l009B = $estoque
        ->where('perfil', 'L-009')
        ->where('cor', 'branco')
        ->where('tamanho', '6,00');

        // l013 branca------------------
        $l013B = $estoque
        ->where('perfil', 'L-013')
        ->where('cor', 'branco')
        ->where('tamanho', '6,00');

         // 4576 branc------------------
         $regua = $estoque
         ->where('perfil', 'TUB-4576')
         ->where('cor', 'branco')
         ->where('tamanho', '6,00');
        
      
        

      




    
        return view('dashboard',
         compact('estoque', 'barrasInteiras', 'l009B', 'l013B', 'regua'));
        // return redirect()->route('login');
    }

    public function deleteMultiples(Request $request){
        $idsDeexclusão = $request->input('checkbox');

        // Stock::destroy($idsDeexclusão);
        // return redirect()->back()->with('success', 'Registros deletados com sucesso');

        dd($idsDeexclusão);


      
    }
}
