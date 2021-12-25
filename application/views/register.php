<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-secondary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
              <p class="text-white-50 mb-5">Masukkan Username dan Password</p>

							<div class="form-outline form-white mb-4">
                <input type="text" name="name" class="form-control form-control-lg" />
                <label class="form-label" for="text">Nama Lengkap</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" name="email" class="form-control form-control-lg" />
                <label class="form-label"  for="text">Email Address</label>
              </div>

							<div class="form-group row">
								<div class="form-outline form-white col-sm-6 mb-3 mb-sm-0">
									<input type="password" name="password1" id="typePasswordX" class="form-control form-control-lg" />
									<label class="form-label" for="typePasswordX">Password</label>
								</div>

								<div class="form-outline form-white col-sm-6">
									<input type="password" name="password2" id="typePasswordX" class="form-control form-control-lg" />
									<label class="form-label" for="typePasswordX">Confirm Password</label>
								</div>
							</div>

              <button class="btn btn-outline-light btn-lg px-5 fw-bold mt-3" type="submit">Sign Up</button>
            </div>
						<p class="mb-0">Already have an account? <a href="<?=base_url('home/login')?>" class="text-white-50 fw-bold">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
