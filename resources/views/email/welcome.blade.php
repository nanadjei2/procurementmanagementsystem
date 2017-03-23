<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p class="lead">Please sir you have a feedback from Japed</p>
    <div class="mail">
        <p>{{ Input::get('subject') }}</p>
        <p>
        <div class="lead">Subject: {{ Input::get('email') }}</div>
        </p>
        <p>
        <div class="lead">Name: {{ Input::get('name') }}</div>
        </p>
        <p>
          {{ Input::get('message') }}
        </p>
    </div>
  </body>
</html>
