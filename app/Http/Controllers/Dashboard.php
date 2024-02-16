<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Dashboard extends Controller
{
    public function index(){

        $estoque = Stock::all();

        $ultimaData = Carbon::now()->subDay()->toDateString();

       $ultimosDados = Stock::whereDate('created_at', '=', $ultimaData)->get();

        return view('dashboard', compact('estoque', 'ultimosDados'));
        // return redirect()->route('login');
    }

    public function deleteMultiples(Request $request){
        $idsDeexclusão = $request->input('checkbox');

        // Stock::destroy($idsDeexclusão);
        // return redirect()->back()->with('success', 'Registros deletados com sucesso');

        dd($idsDeexclusão);


      
    }
}
