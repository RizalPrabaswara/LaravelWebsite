<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;


class MSupplierController extends Controller
{
    public function lihatdata()
    {
        $data = DB::table('supplier')->get();
        return View::make('msupplier')->with('supplier', $data);
    }

    public function prosestambahdata()
    {
        $data=array(
            'idsupplier'=>request()->get('idsupplier'),
            'namasupplier'=>request()->get('namasupplier'),
            'notelepon'=>request()->get('notelepon'),
            'namabarang'=>request()->get('namabarang'),
            'harga'=>request()->get('harga'),
        );
        DB::table('supplier')->insert($data);
        return Redirect::to('/home');
    }

    public function editdata($id)
    {
        $data = DB::table('supplier')->where('idsupplier','=',$id)->first();
        return View::make('formeditmsupplier')->with('supplier', $data);
    }

    public function proseseditdata()
    {
        $data=array(
            'namasupplier'=>request()->get('namasupplier'),
            'notelepon'=>request()->get('notelepon'),
            'namabarang'=>request()->get('namabarang'),
            'harga'=>request()->get('harga'),
        );
        DB::table('supplier')->where('idsupplier','=',request()->get('idsupplier'))->update($data);
        return Redirect::to('/home');
    }

    public function hapusdata($id)
    {
        DB::table('supplier')->where('idsupplier','=',$id)->delete();
        return Redirect::to('/home');
    }
}
