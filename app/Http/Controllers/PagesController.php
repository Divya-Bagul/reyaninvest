<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;
use Redirect,Response,DB,Config;
use Datatables;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;


use App\Models\Pricing;

class PagesController extends Controller
{
    //
    public function index(UsersDataTable $dataTable)
    {
        $pricing = Pricing::all();
        $stocklist = DB::table('stocklist')->Paginate(10);

        return view('welcome',compact('pricing','stocklist'));
    }
    // public function delete($id)
    // {
        
    //     $users = DB::table('users')->where('id',$id)->delete();
    //     return ['data' =>'success'];
        
    // }
    
}
