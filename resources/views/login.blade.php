<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-4">
                    <div class="card-header bg-primary">
                        <strong class="text-center d-block text-white">Login</strong>
                    </div>
                    @if(session()->has('success'))
                      <script>
                        swal({
                              title: "Selamat!",
                              text: "Akun anda berhasil dibuat!",
                              icon: "success",
                            });
                      </script>
                      </div>
                    @endif
                    @if(session()->has('login_gagal'))
                      <script>
                        swal({
                              title: "Login Gagal!",
                              text: "Silahkan ulangi!",
                              icon: "error",
                            });
                      </script>
                      </div>
                    @endif
                    @if(session()->has('failed'))
                      <script>
                        swal({
                              title: "Kesalahan!",
                              text: "Silahkan login dahulu!",
                              icon: "warning",
                            });
                      </script>
                      </div>
                    @endif
                    <div class="card-body">
                        <form action="/ceklogin" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email"
                                  class="form-control" name="email" required>
                              </div>
                              <div class="form-group">
                                <label for="">Password</label>
                                <input type="password"
                                  class="form-control" name="password" required>
                              </div>
                              <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Login">
                              </div>
                              <small>Belum punya akun ?<a href="/register"> Register</a></small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>