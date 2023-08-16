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
    public function add(Request $req)
    {
       
        try{

            if($req->id != null){
                $pricingCard =  Pricing::find($req->id);
                $pricingCard->price_card_name = $req->pCardName;
                $pricingCard->price_card_amount = $req->pCardAmount;
                $pricingCard->price_card_duration = $req->pCardDuration;
                $pricingCard->price_card_offer = $req->pCardOffer;
                $pricingCard->price_card_detail = $req->pCardDetail1;
                $pricingCard->update();
        
            }else{
                $pricingCard =  new Pricing;
                $pricingCard->price_card_name = $req->pCardName;
                $pricingCard->price_card_amount = $req->pCardAmount;
                $pricingCard->price_card_duration = $req->pCardDuration;
                $pricingCard->price_card_offer = $req->pCardOffer;
                $pricingCard->price_card_detail = $req->pCardDetail1;
                $pricingCard->save();
        
            }
           
            if($pricingCard->id != null)  {
                return ['response'=>'success'];
            }else{
                return ['response'=>'fail'];
            }
        }
        catch(Exception $e){
            return ['response'=>$e];
        }
        
      
    }
    public function edit($id)
    {
        
        $pricing = DB::table('pricing')->where('id',$id)->first();
       
        if($pricing->id != null )
        {
        return ['data' =>'success',
                "price_card_name" => $pricing->price_card_name,
                "price_card_amount"=>$pricing->price_card_amount,
                "price_card_duration"=>$pricing->price_card_duration,
                "price_card_offer"=>$pricing->price_card_offer,
                "price_card_detail"=>$pricing->price_card_detail,
                "id"=>$id,           
            ];

        }else{
            return ['data' =>'fail'];
        }        
    }
    
    public function delete($id)
    {
        
        $pricing = DB::table('pricing')->where('id',$id)->delete();

        return ['data' =>'success'];
        
    }
    
}
