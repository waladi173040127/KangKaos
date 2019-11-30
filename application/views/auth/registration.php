
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<a href="<?= base_url() ?>home">
						<span class="login100-form-title p-b-2">
							<i class="zmdi zmdi-font"></i>
						</span>
					</a>
					<span class="login100-form-title p-b-48">
						<h5>Create an Account!</h5>
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" id="name" data-validate = "The Name field is required.">
						<span class="focus-input100" data-placeholder="Full Name"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email Adress"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Repeat password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Repeat Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register Accounts 
							</button>
						</div>
					</div>
					<hr>
					<div class="text-center p-t-1">
						<h6>
							<a class="txt2" href="<?= base_url('auth/'); ?>forgetPassword">
							Forgot Password?
							</a>
						</h6>
						<span class="txt1">
							Already have an account? 
						</span>

						<a class="txt2" href="<?= base_url(); ?>auth">
							Login!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
