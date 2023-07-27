<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;
use App\Models\Pricing;

use Redirect,Response,DB,Config;
use Datatables;
use App\DataTables\PricingDataTable;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    //
    public function index(PricingDataTable $dataTable)
    {
      
        return $dataTable->render('admin.Price.index');
    }
    public function delete($id)
    {
        
        $users = DB::table('pricing')->where('id',$id)->delete();
        return ['data' =>'success'];
        
    }
    
}
