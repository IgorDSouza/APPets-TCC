<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appets</title>
   @stack('links')
  </head>
  <body>
    @session_start();
    @yield('content')
   
   

@if(session('tutor')!=null )                  
<script> document.getElementById("loginNav").style.display = "none";</script>
<script> document.getElementById("tutorNav").style.display = "block";</script>


 @endif
  @stack('scripts');
  </body>
</html>