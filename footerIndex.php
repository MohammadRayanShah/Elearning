	<!-- Start copyright Section  -->
		<div class="container-copyright">
			<p >Copyright <i class="far fa-copyright"></i> 2021 || Designed by Mohammad Rayan Shah || <a href="" data-bs-toggle="modal" data-bs-target="#AdminLgnModal"> Admin Login</a><p>
		</div>
		<!-- End copyright Section  -->
		<!-- Start Student Registration modal -->
		
				<!-- Start Student Registration modal -->
				 <!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="StuRegModal" tabindex="-1" aria-labelledby="StuRegModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="StuRegModalLabel">Sign Up!</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<!-- Start Student registration Form -->
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="StuName" class="form-label"><i class="fas fa-user"></i> <b>Name</b></label>
										<input type="text" class="form-control" id="StuName" aria-describedby="emailHelp" placeholder="Name">
									</div>
									<div class="form-group">
										<label for="StuEmail" class="form-label"><i class="fas fa-envelope"></i> <b>Email</b></label>
										<input type="email" class="form-control" id="StuEmail" aria-describedby="emailHelp" placeholder="Email">
										<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
									</div>
									<div class="form-group">
										<label for="StuPassword" class="form-label"><i class="fas fa-key"></i>  <b>New Password</b></label>
										<input type="password" class="form-control" id="StuPassword"placeholder="Password">
										
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">Sign Up</button>
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</form>
							</div>
							<!-- End Student registration Form -->
						</div>
					</div>
				</div>
				<!-- End Student Registration modal -->

		<!-- End Student Registration modal -->
		<!-- Start Student Login modal -->
		<!-- Start Student Login modal -->
				 <!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="StuLgnModal" tabindex="-1" aria-labelledby="StuLgnModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="StuLgnModalLabel">Login</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<!-- Start Student Login Form -->
							<div class="modal-body">
								<form id="StuLgnForm">
									<div class="form-group">
										<label for="StuLgnEmail" class="form-label"><i class="fas fa-envelope"></i> <b>Email</b></label>
										<input type="email" class="form-control" id="StuLgnEmail" aria-describedby="emailHelp" placeholder="Email" name="StuLgnEmail">
									</div>
									<div class="form-group">
										<label for="StuLgnPassword" class="form-label"><i class="fas fa-key"></i>  <b>Password</b></label>
										<input type="password" class="form-control" id="StuLgnPassword"placeholder="Password" name="StuLgnPassword">
										
										<div class="modal-footer">
											<button type="submit" id="StuLgnBtn"class="btn btn-primary">Login</button>
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</form>
							</div>
							<!-- End Student Login Form -->
						</div>
					</div>
				</div>
				<!-- End Student Login modal -->

		<!-- End Student Login modal -->
		<!-- Start Admin Login modal -->
		
				<!-- Start Admin Login modal -->
				 <!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="AdminLgnModal" tabindex="-1" aria-labelledby="AdminLgnModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="AdminLgnModalLabel">Login</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<!-- Start Admin Login Form -->
							<div class="modal-body">
								<form id="AdminLgnForm">
									<div class="form-group">
										<label for="AdminLgnEmail" class="form-label"><i class="fas fa-envelope"></i> <b>Email</b></label>
										<input type="email" class="form-control" id="AdminLgnEmail" aria-describedby="emailHelp" placeholder="Email" name="AdminLgnEmail">
									</div>
									<div class="form-group">
										<label for="AdminLgnPassword" class="form-label"><i class="fas fa-key"></i>  <b>Password</b></label>
										<input type="password" class="form-control" id="AdminLgnPassword"placeholder="Password" name="AdminLgnPassword">
										
										<div class="modal-footer">
											<button type="submit" id="AdminLgnBtn"class="btn btn-primary">Login</button>
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</form>
							</div>
							<!-- End Admin Login Form -->
						</div>
					</div>
				</div>
				<!-- End Admin Login modal -->

		<!-- End Admin Login modal -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/all.min.js"></script>
	</body>
</html>