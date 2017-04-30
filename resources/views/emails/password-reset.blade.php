<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <p class="lead"></p>
    <div class="mail">
        <p>You are almost done...</p>
        
        <div class="form-group">
            <a class="btn btn-success" href="{{ url('password-reset', $token) }}">Click here to reset your password</a> 
        </div>
    </div>
  </body>
</html>
