<?php include('server.php') ?>
<section id="main" class="wrapper style2">
<div class="title"> LogIn </div>
<div class="container">
<div class="row aln-center">
							<div class="col-6 col-12-medium">
								<!-- Contact Form -->
									<section class="box">
										<form action="" method="post">
										<div>
												<?php  if (count($errors_login) > 0) : ?>
												<div class="alert show" role="alert">
												<div class="alert danger-alert">
												<?php foreach ($errors_login as $error_login) : ?>
  												 <h3><?php echo $error_login ?></h3>
												<a class="close">&times;</a>
												</div>
												</div>
  												<?php endforeach ?>
												<?php  endif ?>
										</div>

												<div class="col-6 col-12-small">
													<input type="text" name="login_email" id="contact-email" placeholder="Email" required/>
												</div>
												<hr>
												<div class="col-6 col-12-small">
													<input type="password" name="login_password" id="password" placeholder="Password" requried/>
												</div>
												<br>
											<div class="row aln-center col-12-small">
											<ul>
											<ul class="actions">
									
														<li><input type="submit" class="style3" name="login" value="Login" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
											</ul>
										</form>
									</div>
									</section>
							</div>
</section>