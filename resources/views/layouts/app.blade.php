<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plot Vanderline</title>

     
    
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >

     
    </head>
        <body >
          <nav class="navbar navbar-expand-lg navbar-light  bg-primary">
            <div>
           <a href="/"> <img src="data:image/jpeg;base64,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" alt="" style="width: 40px"> </a>
            </div>
            <a href="/" class="navbar-brand mr-auto" href=""> Plot Vanderline </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href=""> Accueil</a>     
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('audit')}}"> Audit</a>     
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('prestation')}}"> Prestations</a>     
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('maintenance')}}"> Maintenance </a>     
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('formation')}}"> Formation</a>     
                                    </li>
                                  
                    </ul>
               <a href="{{route('contact.form')}}">     <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Contact </button> </a>
                </div>
          </nav>
         
          <div>
              @yield('content')
          </div>
      
       



    </body>
</html>