
<section class="wrapper style1" id="main">
<div class="title"> New Here ? SignUp Now !! </div>
<div class="container">
<div class="row aln-center">
							<div class="col-6 col-12-medium">
									<section>
										<form action="" method="post">
											<div class="row gtr-50">
												<?php  if (count($errors) > 0) : ?>
												<div class="alert show" role="alert">
												<div class="alert danger-alert">
												<?php foreach ($errors as $error) : ?>
  												 <h3><?php echo $error ?></h3>
												<a class="close">&times;</a>
												</div>
												</div>
  												<?php endforeach ?>
												<?php  endif ?>

												<div class="col-6 col-12-small">
													<input type="text" name="signup_name" id="contact-name" placeholder="Name" required />
												</div>
												<div class="col-6 col-12-small">
													<input type="text" name="signup_email" id="contact-email" placeholder="Email" required />
												</div>
												<div class="col-12">
													<input type="password" name="signup_password" placeholder="Password" />
													</div>
												<div class="col-12">
													<input type="password" name="signup_confirm_password" placeholder="Confirm Password" />
												</div>
												<div class="col-12">
													<input type="text" name="p_number" placeholder="Phone No." required/>
												</div>
												<div class="col-12">
													<?php include 'flag.php' ?>
												</div>
												<hr>
											<div class="row aln-center col-12">
											<ul>
											<ul class="actions">
														<li><input type="submit" class="style3" value="SignUp" name="signup" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
											</ul>
											</ul>
											</div>
										</form>
									</section>
							</div>
</div>
</section>