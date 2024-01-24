<!DOCTYPE html>
<html>
<head>
    <title>EMS Demo </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
     <script src="https://kit.fontawesome.com/b767388630.js" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
             
            margin: 0;
            font-size: .9rem;
            font-weight: 4
            00;
            line-height: 1.6;
            color: #212529;
            text-align: left;
        
            /*background-color: #f5f8fa;*/
            background-color: #17a2b8;
        
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .avatar {
          vertical-align: center;
          width: 70px;
          height: 70px;
          border-radius: 50%;
        }
        
    </style>
</head>
<body style="">
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">EMS </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Office Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('userlogin') }}">Employee Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Office Admin Registration</a>
                    </li>

               

                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
  
        </div>
    </div>
</nav>


 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
<script >
setTimeout(() => {
  document.location.reload();
}, 3000);
  var tc = new Date();
            var hour = tc.getHours();
            var min = tc.getMinutes();
             
console.log(hour);
    document.getElementById('cdi').innerHTML = "logging in";
    const url = "http://localhost:8000/api/timelogin";
     const payload = {
         'loginthrs' : hour,
         'logintmin' : min
     };

console.log(JSON.stringify( payload ));
    const other_params = {
        headers : { "content-type" : "application/json ",'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        body :JSON.stringify(payload),
        method : "POST"
    };

    fetch(url, other_params)
        .then(function(response) {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("Could not reach the API: " + response.statusText);
            }
        }).then(function(data) {
            document.getElementById("message").innerHTML = data.encoded;
        }).catch(function(error) {
            document.getElementById("message").innerHTML = error.message;
        });
    return true;
           }       
       </script>               
       <script>
        function btnlogoutcheck(){
            if(document.getElementById('clf').value=='1'){
         //   document.getElementById('c').style.display="none";
            document.getElementById('clf').value=='0'
            document.getElementById('clf').innerHTML='logout';
             }
        else if(document.getElementById('clf').value=='0'){
             document.getElementById('clf').value=='1'
            document.getElementById('clf').innerHTML='login';
            document.getElementById('clf').style.background-color='#007bff';
             }
             else{}

    var hourslable=document.getElementById('hrhour');
      var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var totalSeconds = 0;
setInterval(setTime, 1000);

function setTime() {
  ++totalSeconds;
  secondsLabel.innerHTML = pad(totalSeconds % 60);
  minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
  hourslable.innerHTML = pad(parseInt(totalSeconds /3600));
}

function pad(val) {
  var valString = val + "";
  if (valString.length < 2) {
    return "0" + valString;
  } else {
    return valString;
  }
}
</script>

@yield('content')
     
</body>
</html>