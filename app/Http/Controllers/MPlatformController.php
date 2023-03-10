<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;

class MPlatformController extends Controller
{
    public function lihatdata()
    {
        $data = DB::table('platform')->get();
        return View::make('mplatform')->with('platform', $data);
    }

    public function prosestambahdata()
    {
        $data=array(
            'idplatform'=>request()->get('idplatform'),
            'namaplatform'=>request()->get('namaplatform'),
            'device'=>request()->get('device'),
            'pengembang'=>request()->get('pengembang'),
        );
        DB::table('platform')->insert($data);
        return Redirect::to('/home');
    }

    public function editdata($id)
    {
        $data = DB::table('platform')->where('idplatform','=',$id)->first();
        return View::make('formeditmplatform')->with('platform', $data);
    }

    public function proseseditdata()
    {
        $data=array(
            'namaplatform'=>request()->get('namaplatform'),
            'device'=>request()->get('device'),
            'pengembang'=>request()->get('pengembang'),
        );
        DB::table('platform')->where('idplatform','=',request()->get('idplatform'))->update($data);
        return Redirect::to('/home');
    }

    public function hapusdata($id)
    {
        DB::table('platform')->where('idplatform','=',$id)->delete();
        return Redirect::to('/home');
    }
}
