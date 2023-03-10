<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game;
use App\Models\supplier;
use DB;
use View;
use Redirect;

class TTransaksi extends Controller
{
    public function lihatdata()
    {
        $dropdowngame = game::select('Idgame','Namagame')->get();
        $dropdownsupplier = supplier::select('Idsupplier','Namasupplier')->get();
        $data = DB::table('transaksi')->get();
        return View::make('tgame',compact('dropdowngame','dropdownsupplier'))->with('transaksi', $data);
    }

    public function prosestambahdata()
    {
        $data=array(
            'idtransaksi'=>request()->get('idtransaksi'),
            'idgame'=>request()->get('idgame'),
            'namagame'=>request()->get('namagame'),
            'idsupplier'=>request()->get('idsupplier'),
            'namasupplier'=>request()->get('namasupplier'),
            'harga'=>request()->get('harga'),
            'jumlah'=>request()->get('jumlah'),
            'tanggaltransaksi'=>request()->get('tanggaltransaksi')
        );
        DB::table('transaksi')->insert($data);
        return Redirect::to('/ttransaksi');
    }

    public function editdata($id)
    {
        $data = DB::table('transaksi')->where('Idtransaksi','=',$id)->get();
        return View::make('formeditttransaksi')->with('transaksi', $data);
    }


    public function hapusdata($id)
    {
        DB::table('transaksi')->where('idtransaksi','=',$id)->delete();
        return Redirect::to('/ttransaksi');
    }

      // public function proseseditdata($id)
    // {
    //     $data=array(
    //         'idgame'=>request()->get('idgame'),
    //         'namagame'=>request()->get('namagame'),
    //         'idsupplier'=>request()->get('idsupplier'),
    //         'namasupplier'=>request()->get('namasupplier'),
    //         'harga'=>request()->get('harga'),
    //         'jumlah'=>request()->get('jumlah'),
    //         'tanggaltransaksi'=>request()->get('tanggaltransaksi')
    //     );
    //     DB::table('transaksi')->where('Idtransaksi','=',request()->get($id))->update($data);
    //     return Redirect::to('/ttransaksi');
    // }
}
