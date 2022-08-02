@extends('legal/mainNoDiv') @section('container')
  <div class="content-wrapper">

  <section class="wrapper bg-blue-legal">
      <div class="container pt-17 pb-12 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3 text-white">Login</h1>

          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-10">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
            <div class="card">
              <div class="card-body p-11 text-center">
                <h2 class="mb-3 text-start">Welcome Back</h2>
                <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
                <form class="text-start mb-3">
                  <div class="form-floating mb-4">
                    <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                    <label for="loginEmail">Email</label>
                  </div>
                  <div class="form-floating password-field mb-4">
                    <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                    <label for="loginPassword">Password</label>
                  </div>
                  <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</a>
                </form>
                <!-- /form -->
                <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                <p class="mb-0">Don't have an account? <a href="signup.html" class="hover">Sign up</a></p>
                
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  @endsection