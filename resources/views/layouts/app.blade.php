<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      @yield('content');

    </div>
    <footer id="footer" class="text-center">
      <span class="text-muted">Copyright {{now()->year}} &copy; Patricio Quezada</span>
    </footer>
  </body>
</html>
