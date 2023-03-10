<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\platform;
use App\Models\supplier;
use DB;
use View;
use Redirect;

class TTopup extends Controller
{
    public function lihatdata()
    {
        $dropdownplatform = platform::select('Idplatform','Namaplatform')->get();
        $dropdownsupplier = supplier::select('Idsupplier','Namasupplier')->get();
        $data = DB::table('topup')->get();
        return View::make('ttopup',compact('dropdownsupplier','dropdownplatform'))->with('topup', $data);
    }

    public function prosestambahdata()
    {
        $data=array(
            'idtopup'=>request()->get('idtopup'),
            'idsupplier'=>request()->get('idsupplier'),
            'namasupplier'=>request()->get('namasupplier'),
            'idplatform'=>request()->get('idplatform'),
            'namaplatform'=>request()->get('namaplatform'),
            'nominal'=>request()->get('nominal'),
            'jumlah'=>request()->get('jumlah'),
            'harga'=>request()->get('harga'),
            'tanggaltopup'=>request()->get('tanggaltopup')
        );
        DB::table('topup')->insert($data);
        return Redirect::to('/ttopup');
    }

    public function editdata($id)
    {
        $data = DB::table('topup')->where('Idtopup','=',$id)->get();
        return View::make('formeditttopup')->with('topup', $data);
    }


    public function hapusdata($id)
    {
        DB::table('topup')->where('idtopup','=',$id)->delete();
        return Redirect::to('/ttopup');
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
