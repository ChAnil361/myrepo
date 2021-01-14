<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\ttable;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\View\Components\navbar;

class CustomerController extends Controller
{
   
    function show(){
        $list=Customer::all();
     return view('project.ShowCustomerList',compact('list'));
    }
    function view($id){
        $cdata=Customer::find($id);
        $cname=Customer::all();
        
        return view('project.ctable')->with('cdata',$cdata)->with('cname',$cname);
    }
function update(Request $req){
    //dd($req->all());
if(!session()->has('msg'))
{
    return redirect()->route('show');
}    
session()->forget('msg');
    //dd($req->all());
    $cname=$req->cname;
    $pos=strpos($cname,'-');
    $receiver_id=substr($cname,0,$pos);
    //dd($receiver_id);
    $receiver_name=substr($cname,$pos+1);
    //dd($receiver_name);
    $senderid=$req->sender_id;
    $current_bal=$req->balance;
    $update_bal=$current_bal-$req->transfer;
    $Receiver_intial=Customer::find($receiver_id);
    $Receiver_intial_bal=$Receiver_intial->current_bal;
    

    $query1=Customer::Where('id',$senderid)->update(['current_bal'=>$update_bal]);

    $bal_enquery=Customer::find($receiver_id);
    $intial_bal=$bal_enquery->current_bal;
     //dd($intial_bal);
    $query2=Customer::Where('id',$receiver_id)->update(['current_bal'=>$intial_bal+$req->transfer]);

//debit transaction
    $table=new ttable();
    $table->id=$senderid;
    $table->Receiver_name=$cname;
    $table->Bcurrent_bal=$req->balance;
    $table->credit='--';
    $table->transfer_money=$req->transfer;
    $table->Acurrent_bal=$update_bal;
    $table->save();

    //credit transaction

//dd($Receiver_intial_bal);
    $table=new ttable();
    $table->id=$receiver_id;
    $table->Receiver_name=$senderid;
    $table->Bcurrent_bal=$Receiver_intial_bal;

    $table->credit=$req->transfer;

    $table->transfer_money='--';
    $table->Acurrent_bal=$Receiver_intial_bal+$req->transfer;
    $table->save();





    
if($query1==true and $query1==true){
    return view('project.statuspage')->with('receiver_id',$receiver_id)->with('transfer',$req->transfer)->with('receiver_name',$receiver_name);
}
else{
    echo "please try again";
}

     


}


function showtransaction(Request $req){
    $tdetails=ttable::find($req);
    //dd($tdetails);
    return view('project.transactiondetails')->with('tdetails',$tdetails)->with('id',$req->id);
}



function tshow(){
    $tdetails=ttable::all();
    return view('project.All_transactions')->with('tdetails',$tdetails);
}

}