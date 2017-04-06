<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p class="lead">Please sir you have a feedback from Japed</p>
    <div class="mail">
        <p>{{ Request::input('subject') }}</p>
        <p>
        <div class="lead">Subject: {{ Request::input('email') }}</div>
        </p>
        <p>
          {{ Request::input('$message') }}
        </p>
    </div>
  </body>
</html>
