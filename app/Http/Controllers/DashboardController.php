<?php

namespace App\Http\Controllers;

use App\Models\voucher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){

        $search = null;

        if(request('search')){
            $search = voucher::where('nama_voucher', 'like', '%'. request('search') . '%')->orWhere('kategori', 'like', '%' . request('search') . '%')->get();
        }
        return view('dashboard', [
            'search' => $search,
        ]);
    }
}
