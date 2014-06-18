<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Colegio</title>
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/estilos.css')}}
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">APLICATIVO WEB</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              
            </div>
            <div class="form-group">
             
            </div>
            
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>


    <div class="jumbotron">
      <div class="container">
        @yield('jumbotrom')
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-4">
          @yield('contentL')
        </div>

        <div class="col-md-4">
          @yield('contentC')
        </div>

        <div class="col-md-4">
          @yield('contentR')
        </div>
      </div>
      <hr>
      <footer>
        <p>&copy; APLICATIVO WEB 2014</p>
      </footer>

    </div> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{ HTML::script('js/bootstrap.min.js') }}
  </body>
</html>
