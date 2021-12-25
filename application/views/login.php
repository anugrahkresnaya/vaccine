<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-secondary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
						<form action="" method="post" class="needs-validation" novalidate>
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">LOGIN</h2>
              <p class="text-white-50 mb-5">Masukkan Username dan Password</p>
							<?php if($this->session->flashdata('salah_login')):?>
								<div class="alert alert-danger" role="alert">
									Username atau Password yang dimasukkan salah!
								</div>
							<?php endif ?>
              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="username" class="form-control form-control-lg" required />
                <label class="form-label" for="username">Username</label>
								<div class="invalid-feedback">
									Anda belum memasukan username
								</div>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                <label class="form-label" for="password">Password</label>
								<div class="invalid-feedback">
									Anda belum memasukan password
								</div>
              </div>

              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

              <button class="btn btn-outline-light btn-lg px-5 fw-bold" name="login" type="submit">Login</button>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>
						</form>
            <!-- <div>
              <p class="mb-0">Don't have an account? <a href="<?=base_url('home/register')?>" class="text-white-50 fw-bold">Sign Up</a></p>
            </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
