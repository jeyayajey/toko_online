<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login</title>
    <style>
        .bg-image-vertical {
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
        }

        @media (min-width: 1025px) {
        .h-custom-2 {
        height: 100%;
        }
        }

    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
              <form action="proses_login.php" method="post">
      
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in Pelanggan</h3>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="username" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example18">username</label>
                  </div>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example28">password</label>
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <p>Don't have an account? <a href="register_pelanggan.php" class="link-info">Register here</a></p>

      
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="https://i.pinimg.com/originals/15/7c/25/157c252aa4be35ecca71ff97920dfa90.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>
</body>
</html>