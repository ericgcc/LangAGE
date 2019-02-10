<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Exports\RatingsExport;
use Maatwebsite\Excel\Facades\Excel;


class DownloadController extends Controller
{
    public function index(){
        $isAdmin = User::where('id', '=', Auth::id())->pluck('is_admin');
        if($isAdmin[0] === 1) return view("pages.download");
        else return redirect()->action('RatingController@index');
    }

    public function export(){
        $isAdmin = User::where('id', '=', Auth::id())->pluck('is_admin');
        if($isAdmin[0] === 1) return Excel::download(new RatingsExport, 'resultats.xlsx');
        else return redirect()->action('RatingController@index');
    }
}
