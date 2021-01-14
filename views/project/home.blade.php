@extends('Layout.layoutpage')
@section('navbar')
<div>

<nav class="navbar navbar-inverse " style="top:-1; ">
  <div class="container-fluid ">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Banking Site</a>
    </div>
    <ul class="nav navbar-nav"  >
      <li class="active"><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('show')}}" ><b>View All customers</b></a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">About</a></li>


    </ul>
    <form class="navbar-form navbar-left" action="#">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</div>

@endsection