@extends('project.layoutpage')
@section('content')


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<center> <h2>Transaction Details </h2>
<div style="width:80%">
<?php $count=1 ?>
<!--<table id="example" class="table table-striped table-bordered" style="width:80%">-->
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>S NO</th>

 <th>Sender Account No</th>
 <th>Receiver Account No-Name</th>
 <th>Current Balance</th>
 <th>Credit</th>
 <th>Debit</th>
 <th>Available Balance</th>
 <th>Time</th>
 </thead>
 </tr>
 @foreach($tdetails as $row)
 <tr>
 <td>{{$count++}}</td>
 <td>{{$row->id}}</td>
 <td>{{$row->Receiver_name}}</td>
 <td>{{$row->Bcurrent_bal}}</td>
 <td>{{$row->credit}}</td>
 <td>{{$row->transfer_money}}</td>
 <td>{{$row->Acurrent_bal}}</td>
 <td>{{$row->updated_at}}</td>
 </tr>
 @endforeach
 </table>
 <button type="button" class="btn btn-success" onClick="window.print()">Print</button>
 <a href="{{route('customer_page',[$_GET['id']])}}"><button type="button" class="btn btn-success">Back</button></a>
   </div>
</center>
@endsection