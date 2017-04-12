<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p class="lead"></p>
    <div class="mail">
        <p>{{ Request::input('subject') }}</p>
        
        <p>
          {{ Request::input('$message') }}
        </p>
    </div>
  </body>
</html>
