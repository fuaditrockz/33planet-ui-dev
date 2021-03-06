<!--************************************
		Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout">
	<!--************************************
			Login Register Start
	*************************************-->
	<div class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="row">
				<div id="tg-content" class="tg-content">
					<form class="tg-themeform tg-formlogin-register">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<div class="tg-heading">
								<h2>Register As</h2>
							</div>
							<fieldset>
								<ul class="tg-tabnav" role="tablist">
									<li role="presentation" class="active">
										<a href="#regularuser" data-toggle="tab">
											<span class="lnr lnr-user"></span>
											<div class="tg-navcontent">
												<h3>Regular User</h3>
												<span>Register As Tourist</span>
											</div>
										</a>
									</li>
									<li role="presentation">
										<a href="#company" data-toggle="tab">
											<span class="lnr lnr-briefcase"></span>
											<div class="tg-navcontent">
												<h3>Host(Alien)</h3>
												<span>Register As Guide Provider</span>
											</div>
										</a>
									</li>
								</ul>
								<div class="tg-themetabcontent tab-content">
									<div class="tab-pane active fade in" id="regularuser">
										<div class="form-group">
											<div class="tg-registeras">
												<span>Already have an account?<a href="#"> Login Now</a></span>
											</div>
										</div>
										<div class="form-group">
											<input type="text" name="text" class="form-control" placeholder="Your Name">
										</div>
										<div class="form-group">
											<span class="tg-select">
												<select>
													<option>Gender</option>
													<option>Male</option>
													<option>Female</option>
												</select>
											</span>
										</div>
										<div class="form-group">
											<input type="text" name="text" class="form-control" placeholder="Mobile">
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" name="retype-password" class="form-control" placeholder="Retype Password">
										</div>
										<div class="form-group">
											<img src="images/teleport/teleport2.png" alt="image description">
										</div>
										<div class="form-group">
											<div class="tg-checkbox">
												<input type="checkbox" id="terms">
												<label for="terms">I have read the <a href="#">Terms &amp; Conditions</a> and accept them</label>
											</div>
										</div>
										<button class="tg-btn" type="submit">Register Now</button>
										<ul class="tg-socialicons tg-socialsharewithtext">
											<li class="tg-facebook">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-facebook-f"></i>
														<span>facebook</span>
													</em>
												</a>
											</li>
											<li class="tg-twitter">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-twitter"></i>
														<span>twitter</span>
													</em>
												</a>
											</li>
											<li class="tg-linkedin">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-linkedin"></i>
														<span>linkdin</span>
													</em>
												</a>
											</li>
											<li class="tg-googleplus">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-google-plus"></i>
														<span>googl+</span>
													</em>
												</a>
											</li>
											<li class="tg-tumblr">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-tumblr"></i>
														<span>tumblr</span>
													</em>
												</a>
											</li>
											<li class="tg-vimeo">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-vimeo"></i>
														<span>vimeo</span>
													</em>
												</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane fade in" id="company">
										<div class="form-group">
											<div class="tg-registeras">
												<span>Register As:</span>
												<div class="tg-radio">
													<input type="radio" id="business" name="register" checked>
													<label for="business">Tourism Business</label>
												</div>
												<div class="tg-radio">
													<input type="radio" id="professional" name="register">
													<label for="professional">Pro Traveler/Local Guide</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<span class="tg-select">
												<select>
													<option>Tourism Category</option>
													<option>Room Service</option>
													<option>Travel Package</option>
													<option>Travel Guide</option>
													<option>Tourism Ticket</option>
												</select>
											</span>
										</div>
										<div class="form-group">
											<span class="tg-select">
												<select>
													<option>Tourism Sub Category</option>
													<option>Tourism Sub Category</option>
													<option>Tourism Sub Category</option>
													<option>Tourism Sub Category</option>
													<option>Tourism Sub Category</option>
												</select>
											</span>
										</div>
										<div class="form-group">
											<input type="text" name="text" class="form-control" placeholder="First Name">
										</div>
										<div class="form-group">
											<input type="text" name="text" class="form-control" placeholder="Last Name">
										</div>
										<div class="form-group tg-inputwithicon">
											<input type="text" name="geolocation" class="form-control" placeholder="Geo Location">
											<i class="fa fa-crosshairs tg-icon"></i>
											<i class="fa fa-angle-down tg-icon"></i>
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" name="retype-password" class="form-control" placeholder="Retype Password">
										</div>
										<div class="form-group">
											<img src="images/teleport/teleport2.png" alt="image description">
										</div>
										<div class="form-group">
											<div class="tg-checkbox">
												<input type="checkbox" id="conditions">
												<label for="conditions">I have read the <a href="#">Terms &amp; Conditions</a> and accept them</label>
											</div>
										</div>
										<button class="tg-btn" type="submit">Register Now</button>
										<ul class="tg-socialicons tg-socialsharewithtext">
											<li class="tg-facebook">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-facebook-f"></i>
														<span>facebook</span>
													</em>
												</a>
											</li>
											<li class="tg-twitter">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-twitter"></i>
														<span>twitter</span>
													</em>
												</a>
											</li>
											<li class="tg-linkedin">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-linkedin"></i>
														<span>linkdin</span>
													</em>
												</a>
											</li>
											<li class="tg-googleplus">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-google-plus"></i>
														<span>googl+</span>
													</em>
												</a>
											</li>
											<li class="tg-tumblr">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-tumblr"></i>
														<span>tumblr</span>
													</em>
												</a>
											</li>
											<li class="tg-vimeo">
												<a class="tg-roundicontext" href="javascript:void(0);">
													<em class="tg-usericonholder">
														<i class="fa fa-vimeo"></i>
														<span>vimeo</span>
													</em>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="tg-loginarea">
								<div class="tg-bordertitle">
									<h3>Login Now</h3>
								</div>
								<fieldset>
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
									</div>
									<a class="tg-btnforgotpass" href="#">Forgot your password?</a>
								</fieldset>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Login Register End
	*************************************-->
</main>