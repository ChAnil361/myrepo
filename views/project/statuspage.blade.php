
<html>
  <head>
     </head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card table-responsive-sm">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">{{$transfer}}</i>
      </div>
        <h1>Transaction Success</h1> 
        <center>
<table class="table" width="100%">
<tr>
<th>Receiver ID</th>

<td>{{$receiver_id}}</td>
</tr><tr>
<th>Receiver Name</th>
<td>{{$receiver_name}}</td>
</tr><tr>
<th>Transaction id</th>
<td>50220XXXX</td>
</tr> 
         
         
         </table>
         
<button type="button" class="btn btn-success" onClick="window.print()">Print</button>

  <a href="{{route('show')}}"><button type="button" class="btn btn-secondary">Back</button></a>

         </center>
      </div>
    </body>
</html>