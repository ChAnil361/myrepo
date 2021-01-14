<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
<head>
<title>Banking Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Online Banking ..</title>
<link rel="stylesheet" href="{{asset('/storage/style.css') }}" />

<script type="text/javascript">
function ctck()
{
var sds = document.getElementById("dum");

}
</script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->



   <!--<link rel="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">-->

   <!--<link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">-->
<!--
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">-->





<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<style>

body{
    background-color:#2B1B17;

     }

     @if(Route::currentRouteName() =='customer_page' or Route::current()->getName()=='transaction_all' or Route::current()->getName()=='showtransactions' )

     body{
    background-color:white;

     }

 @endif    
     #content1{
        background-color:white;

     }
</style>
</head>

<body>
@yield('header')
@yield('navbar')
@yield('content')
@yield('table')
@yield('footer')
<script type="text/javascript">
document.onload = ctck();
</script>

</body>
</html>