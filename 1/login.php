<div class="main-wrapper">
  <div class="login-wrapper">

			<div class="cube">
        <div class="innercube description">
          <h2>Don't have an account?</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <button class="btn btn-primary" onclick="move();">Sign up</button>
        </div>
    	</div>
      <!-- CUBE  -->
    	<div class="cube">
        <div class="innercube description">
          <h2>Have an account?</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
          <button class="btn btn-primary" onclick="move()">Login</button>
        </div>
			</div>
			
			<!-- LOGIN -->

		<div class="login-form white-bg">
			<div class="login">
				<div class="innercube">

				<?php	include 'login.includes.php'; ?>

					<h2 class="inline">Login</h2>
					<img class="inline" src="img/logo.png" alt="Magebit logo" />
					<hr class="hr-short">

					<form action="" method="POST">
					
						<div class="form-group">
							<input type="text" id="email" name="email" class="form-control" placeholder="Email*" />
							<img src="img/ic_mail.png" alt="mail icon" />
						</div>
						<hr>

						<div class="form-group">
							<input type="password" id="password" name="password" class="form-control" placeholder="Password*"/>
							<img src="img/ic_lock.png" alt="mail icon" />
						</div>
						<hr>

						<button type="submit" name="login" class="btn btn-warning"> Login</button>

					</form>
				</div>
			</div>

			<!-- REGISTER -->


			<div class="signup-form display-none">
				<div class="innercube">

					<h2 class="inline">Sign up</h2>
					<img class="inline" src="img/logo.png" alt="Magebit logo" />
					<hr class="hr-short">

					<?php	include 'register.includes.php'; ?>

					<form action="" method="POST">
						<div class="form-group">
							<input type="text" id="name" name="name" class="form-control" placeholder="Name*" />
							<img src="img/ic_user.png" alt="user icon" />
						</div>
						<hr>

						<div class="form-group">
							<input type="text" id="email" name="email" class="form-control"  placeholder="Email*" />
							<img src="img/ic_mail.png" alt="mail icon" />
						</div>
						<hr>

						<div class="form-group">
							<input type="password" id="password" name="password" class="form-control" placeholder="Password*" />
							<img src="img/ic_lock.png" alt="mail icon" />
						</div>
						<hr>

						<button type="submit" name="register" class="btn btn-warning">Submit</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
