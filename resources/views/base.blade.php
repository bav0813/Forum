<!doctype html>
<html>
<head>
    <meta charset="utf-8">
  	
<meta name="_token" content="{{csrf_token()}}" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">--}}

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
     <link href="{{ asset('css/main.css') }} " rel="stylesheet" />
  
<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet"> 

</head>
    <body>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 

<!--       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<nav class="navbar navbar-expand-sm">
    <div class="container-fluid" id="navbarr">
        <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/school(1).png"></a>
    
            
        </div>
  <ul class="nav navbar-nav navbar-center">
    <h1 id='sch'>Школы Киева</h1>
      </ul>

        <ul class="nav navbar-nav navbar-right">
           @if (Auth::check() && Auth::user()->is_admin)
            <li class="nav-item"><a class="nav-link" href="/admin/dashboard">{{Auth::user()->name}}{{'@'}}ADMIN</a></li>
            <li class="nav-item"><a class="nav-link" href="/logout"><span class="fa fa-log-out"></span> Logout</a></li>
            @elseif (Auth::check ())
            <li class="nav-item"><a class="nav-link" href="#">{{Auth::user()->name}}</a></li>
            <li class="nav-item"><a class="nav-link" href="/logout"><span class="fa fa-log-out"></span> Logout</a></li>
            @else 

             <li class="nav-item"><a class="nav-link" href="/register"><span class="fa fa-user"></span>Register </a></li> 
            <li class="nav-item"><a class="nav-link" href="/login"><span class="fa fa-log-in"></span> Login</a></li>
      @endif 

        </ul> 
      
      
      
     

    </div>
</nav>
<!--       <hr class="header_hr">
 -->
<!--              <img id="back" src={{ asset('img/RE.jpg') }} />
 -->




   <div class="poshuk">
       <form class="form-search" method="get" action="search">
           <input type="text" name="search" class="input-medium search-query">
           <button type="submit" class="btn poiskbtn">Найти</button>
       </form>
   </div>

      
@yield('content')
      
      
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
 <script src=""></script>




</body>
</head>
</html>