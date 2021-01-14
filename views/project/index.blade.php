@extends('project.layoutpage')
@section('header')

<div id="top_links" style="background-image:url('storage/bg_img.jpg')">
  

<div id="header" style="background:white;">
   
	<img src="{{asset('/storage/Spark_bank.jpg')}}" width="180" /><h1 style="color:black;margin:-110px;padding-left:280px;padding-top:30px;">Spark Banking System</h1>   
    
</div> 
<script>
function show1(){
document.myform.submit();
}
    </script>
<div id="navigation" style="margin-top:-140px;">
    <ul>
    <li><a href="{{route('home')}}">HOME</a></li>
    
    @if(Route::current()->getName() == 'home')
    <li><a href="#">NEW CUSTOMER</a></li>
    <li><a href="{{route('services')}}">SERVICES</a></li>
    @endif
    @if(($k=Route::current()->getName()) == 'show')
    <form name="myform" method="post" action="{{route('transaction_all')}}" >
        @csrf
    <li><a href="#" onClick="show1()" style="color:red">Show_Transactions</a></li>
</form>
    @endif
    <li><a href="#">CONTACT</a></li>
    <li><a href="#">HELP</a></li>
    
    <li><a href="#footer_copyright">ABOUT US</a></li>
    </ul>
</div> 

@endsection

@section('content')
<div style="background-color:white;">
<center><img src="{{asset('storage/view_bank_img.webp')}}" width="20%" /></center>
<a href="{{route('show')}}"><button style="width:15%;height:95%;margin-left:400px;margin-top:10px;" class="btn btn-primary">View All Customers</button></a>
<marquee><span style="color:red">Note:</span> If you want transfer money Please click on View All Customer button..... </marquee>
</div>
<table cellpadding="0" cellspacing="0" id="content1"><tr align="justify">
	<td class="con" valign="top">
    	<div id="heade1"><h1 style="color:black">Results</h1></div>
        <p>This is  Global Business bank which is under business and finance category for your website design.</p>
    </td>
    
    <td class="con" valign="top">
    	<div id="heade2"><h1 style="color:black">Opportunities</h1></div>
        <p> These Global Business bank would be idle for building a successful online businesses.
</p>
    </td>
    
    <td class="con" valign="top">
    	<div id="heade3"><h1 style="color:black">Solutions</h1></div>
        <p>There are various categories like Art, Finance, Nature, Night club, Communication, Computer, Music, Religious, Fashion, Holiday, Travel, Health, Medicine. This free Global Business bank .<br>
        
        These   are user friendly.
        
    </td>
</tr></table>

<table style="width:897px; background:#FFFFFF; margin:0 auto;"><tr align="justify">
	<td width="299" valign="top" style="border-right:#666666 1px dotted;">
    	<div id="services"><h1>Services</h1><br>
		    <ul>
        	<li><a href="#">24/7 days Available</a></li>
            <li><a href="#">My Help line number:12XXX </a></li>
            <li><a href="#">Provide Sms for each transaction </a></li>
            </ul>
			
       </div>
	</td>
    
    <td width="299" valign="top">
    	<div id="welcome" style="border-right:#666666 1px dotted;"><h1>Welcome</h1><br>
    	    <center><img src="images/globe_10.gif" alt="business" width="196" height="106"></center><br>
		    <p>Each people plan </p>
	    	
	    </div>      
    </td>
    
    <td width="299" valign="top">
   	  <div id="news"><h1>News &amp; Events</h1><br>
      	<div class="img"><img src="images/globe_12.gif" alt="Business"></div>
        <h2>Jan. 01, 2021.</h2>
        <p>New Branch  is open.</p><br>
        <div class="img"><img src="images/globe_16.gif" alt="Business"></div>
        <h2>Jan. 06, 2021.</h2>
        <p>All Loans are approved</p>
      
      </div>
        	
     </td>
</tr></table>

@endsection

@section('footer')

<div id="footer_copyright"  style="background-color:black;margin-top:2px;">
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright: Spark Bank
      </div>
 </div>
</div>

@endsection