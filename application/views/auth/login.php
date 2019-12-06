
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
					<a href="<?= base_url() ?>home">
						<span class="login100-form-title p-b-2">
							<i class="zmdi zmdi-font"></i>
						</span>
					</a>
					<span class="login100-form-title p-b-48">
						Welcome
					</span>
				 <?= $this->session->flashdata('message'); ?>
 
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                    <div class="form-group ">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                           <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                         <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
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
							Don’t have an account?
						</span>
						<a class="txt2 text-primary" href="<?= base_url('auth/'); ?>registration">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
