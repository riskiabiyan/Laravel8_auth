<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


    <div class="container-fluid">
      <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
          <img src="https://sayyidahnuraruni.files.wordpress.com/2015/04/logo-baru-uty-putih2.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Dashboard
        </a>
      </nav>

     <div class="row mt-4 d-flex justify-content-center">
      <div class="col-lg-4">
        <a class="btn btn-warning" href="/login" role="button">Kembali ke Login</a>
      </div>
      <div class="col-lg-4">
        <a class="btn btn-info" href="/register" role="button">Kembali ke Register</a>
      </div>
      <div class="col-lg-4">

        <form action="/logout" method="POST">
          @csrf
          <button class="btn btn-danger">Logout</button>
        </form>
        
      </div>
     </div>
      
        
     

    </div>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>