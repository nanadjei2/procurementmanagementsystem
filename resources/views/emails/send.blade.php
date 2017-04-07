<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p class="lead">Please sir you have a feedback from Procurement Management System (PMS)</p>
    <div class="mail">
        <p>{{ Request::input('subject') }}</p>
        
        <p>
          {{ Request::input('$message') }}
        </p>
    </div>
  </body>
</html>
