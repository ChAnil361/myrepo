@extends('project.index')
@section('header')
@parent
@endsection

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
<center>
<div style="background-color:white" class="responsive">
 
<h1>Customer List</h1>
<table id="example" class="table  table-striped table-bordered " style="width:100%">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">current_bal</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($list as $row)


    <tr>
     <th scope="row"><a href="{{route('customer_page',['id'=>$row->id])}}">{{$row->id}}</a></th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->current_bal}}</td>
      <td><a href="{{route('customer_page',['id'=>$row->id])}}"> <input type="submit" class="btn btn-success" value="View&Transfer " />
         </a></td>
    </tr>
    
  

 
@endforeach
</tbody>
</table>
<form action="{{route('transaction_all')}}" method="post">
@csrf
<input  type="hidden" value="112" name="hid">
<input type="submit" name="submit" class="btn btn-primary" value="Show All Transactions">
  </form>
</div></center>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection
 