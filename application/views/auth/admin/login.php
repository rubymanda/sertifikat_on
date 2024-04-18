

<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg- col-md-7 d-flex flex-column mx-lg-auto mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <?= $this->session->flashdata('message'); ?>
                  <p class="mb-0">Enter your Username and password to sign in</p>
                </div>
                <div class="card-body">
                  <!-- <form role="form"> -->
                    <form class="user" method="POST" action="<?= base_url('auth_admin/login');?>">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" aria-label="Username" required>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password" required>
                    </div>
                    <!-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div> -->
                    <br>
                    <div class="text-center">
                      <button class="btn btn-primary d-grid w-100">Sign up</button>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>

  </main>
  