<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;

class MGameController extends Controller
{
    public function lihatdata()
    {
        $data = DB::table('game')->get();
        return View::make('mgame')->with('game', $data);
    }

    public function prosestambahdata()
    {
        $data=array(
            'idgame'=>request()->get('idgame'),
            'namagame'=>request()->get('namagame'),
            'genre'=>request()->get('genre'),
            'tahunrilis'=>request()->get('tahunrilis'),
            'deskripsi'=>request()->get('deskripsi')
        );
        DB::table('game')->insert($data);
        return Redirect::to('/home');
    }

    public function editdata($id)
    {
        $data = DB::table('game')->where('idgame','=',$id)->first();
        return View::make('formeditmgame')->with('game', $data);
    }

    public function proseseditdata()
    {
        $data=array(
            'namagame'=>request()->get('namagame'),
            'genre'=>request()->get('genre'),
            'tahunrilis'=>request()->get('tahunrilis'),
            'deskripsi'=>request()->get('deskripsi')
        );
        DB::table('game')->where('idgame','=',request()->get('idgame'))->update($data);
        return Redirect::to('/home');
    }

    public function hapusdata($id)
    {
        DB::table('game')->where('Idgame','=',$id)->delete();
        return Redirect::to('/home');
    }
}
