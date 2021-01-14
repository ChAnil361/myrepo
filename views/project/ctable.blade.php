 @extends('project.layoutpage')

 @section('navbar')
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<center>
 
 <div  style="margin-top:40px ">
<a href="{{route('show')  }}">Back</a>
<table id="example" class="table table-striped table-bordered" style="width:50%;">
        <tr>
         <th class="text-center">Customer ID</td>
         <td  class="text-center">{{$cdata->id}}</td>
         </tr><tr>
         <th class="text-center">Customer Name</th>
         <td class="text-center">{{$cdata->name}}</td>
         </tr class="text-center"><tr>
         <th class="text-center">Email</th>
         <td class="text-center">{{$cdata->email}}</td></tr><tr>
         <th class="text-center">Current balance</th>
         <td class="text-center">{{$cdata->current_bal}}</td>
         </tr>
         </table>


         
<div class="container">
  <!-- Trigger the modal with a button -->
  <center>
  <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal">Transfer Money</button>

        <a href="{{route('showtransactions',['id'=>$cdata->id])}}"><button type="button" class="btn btn-success">Show Transctions</button></center></a>
</center>
</div>

  </div>
  </center>
          <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
/*
$(document).ready(function() {
    $('#example').DataTable( {
      "dom": '<"pull-left"f><"pull-bottom"l>tip',
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );*/
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 



 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>-->
<script>
function myfunction(){

     var transfer=document.myform.transfer.value;
     var current_bal=document.myform.balance.value;
     var current_bal1=parseInt(current_bal);
     var transfer1=parseInt(transfer);
     var cname=document.myform.cname.value;
     var pos=cname.indexOf('-');
     var receiver_id=cname.substring(0,pos);
     var sender_id=document.myform.sender_id.value;
 if(isNaN(transfer))
{
  alert("please Enter Valid Ammount");
  return false;
}
else if(transfer.length==0)
{
  alert('please Enter Amount');
}
else if(current_bal1 < transfer1)
{
  alert("insufficent balance Your Balance is"+current_bal);
  return false;
}
else if(receiver_id==sender_id)
{
  alert("cannot transfer same Account");
  return false;
}
 else if(current_bal<=transfer){

   var v=confirm("Are you confirm to tranfer "+ transfer +" /-"+" To "+ cname);
   if(v==true){
     return true;

   }
   else{
     return false;
   }
 }
}

</script>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="text-align:center">Transfer Money</h3>
        </div>
        <div class="modal-body">
        <center>
        <table>
          <form name="myform" method="post" action="{{route('dbupdation')}}" >
          {{session()->put('msg','this is msg')}}
        <input type="hidden" name="sender_id"  value="{{$cdata->id}}" />
          @csrf
          <tr>
          <th><b>Select Customer :</b></th>

          <td><select class="form-control" id="exampleFormControlSelect1" name="cname">
          @foreach($cname as $row)
          @if($row->id!=$cdata->id)
          <option>{{$row->id}}-{{$row->name}}</option>
          @endif
          @endforeach
          </select></td></tr><tr>
          <th><br>Current balance :</th><td> <b><br><center> {{$cdata->current_bal}}</center></b></td></tr><tr>
          
          <input type="hidden" value="{{$cdata->current_bal}}" name="balance">
          <br>
          <th><br>Transfer Amount <span style="color:red">*</span>:</th><td> <br> <input type="text" class="form-control" name="transfer" required></td></tr><tr>
          <th></th><td>
          <br>
          <input type="submit" class="btn btn-success" onClick="return(myfunction())" name="submit" value="Transfer" >
          </td></tr>
          </form>
</table>
          </center>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection
 