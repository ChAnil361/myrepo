@extends('project.home')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
<center>
<div style="width:80%" class="responsive">

<h1>Customer List</h1>
<table id="example" class="table  table-striped table-bordered " style="width:100%">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">current_bal</th>
      <th>View</th>
    </tr>
  </thead>
  <tbody>
@foreach($list as $row)


    <tr>
     <th scope="row"><a href="{{route('customer_page',['id'=>$row->id])}}">{{$row->id}}</a></th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->current_bal}}</td>
      <td><a href="{{route('customer_page',['id'=>$row->id])}}"> <input type="submit" class="btn btn-success" value="View" />
         </a></td>
    </tr>
    
  

 
@endforeach
</tbody>
</table></div></center>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection