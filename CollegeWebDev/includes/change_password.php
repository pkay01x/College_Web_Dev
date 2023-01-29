<?php include('server.php') ?>
<section id="main" class="wrapper style2">
<div class="title"> Change Your Passowrd Here ! </div>
<div class="container">
<div class="row aln-center">
							<div class="col-6 col-12-medium">
									<section class="box">
										<form action="" method="post">
										<div>
												<?php  if (count($errors_cpassword) > 0) : ?>
												<div class="alert show" role="alert">
												<div class="alert danger-alert">
												<?php foreach ($errors_cpassword as $error_cpassword) : ?>
  												 <h3><?php echo $error_cpassword ?></h3>
												<a class="close">&times;</a>
												</div>
												</div>
  												<?php endforeach ?>
												<?php  endif ?>
										</div>

												<div class="col-6 col-12-small">
													<input type="password" name="current_password" id="password" placeholder="Current Passowrd" required/>
												</div>
												<hr>
												<div class="col-6 col-12-small">
													<input type="password" name="new_password" id="password" placeholder="New Password" requried/>
												</div>
												<div class="col-6 col-12-small">
													<input type="password" name="confirm_new_password" id="password" placeholder="Confirm New Password" requried/>
												</div>
												<br>
											<div class="row aln-center col-12-small">
											<ul>
											<ul class="actions">
									
														<li><input type="submit" class="style3" name="change_password" value="Change Password" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
											</ul>
										</form>
									</div>
									</section>
							</div>
</section>