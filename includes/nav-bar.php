<div class="nano">
	<div class="nano-content">
		<nav id="menu" class="nav-main" role="navigation">

			<ul class="nav nav-main">
				<li>
					<a class="nav-link" href="dashboard.php">
						<i class="fa fa-home" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Employees</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="add-employees.php">
								<i class="fa fa-plus-square" aria-hidden="true"></i>
								Add Employee
							</a>
						</li>
						<li>
							<a class="nav-link" href="view-employees.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								View Employees
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Farmers</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="add-farmer.php">
								<i class="fa fa-plus-square" aria-hidden="true"></i>
								Add Farmer
							</a>
						</li>
						<li>
							<a class="nav-link" href="view-farmer.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								View Framers
							</a>
						</li>
					</ul>
				</li>


				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						<span>Manage Products</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="add-product.php">
								<i class="fa fa-plus-square" aria-hidden="true"></i>
								Add Product
							</a>
						</li>
						<li>
							<a class="nav-link" href="view-products.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								View Products
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fa fa-calculator" aria-hidden="true"></i>
						<span>Daily Sales</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="add-sales.php">
								<i class="fa fa-plus-square" aria-hidden="true"></i>
								Add Sales
							</a>
						</li>
						<li>
							<a class="nav-link" href="view-sales.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								Sales Details
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fa fa-calculator" aria-hidden="true"></i>
						<span>Payments</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="add-payment.php">
								<i class="fa fa-plus-square" aria-hidden="true"></i>
								Add Payments
							</a>
						</li>
						<li>
							<a class="nav-link" href="view-payment.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								Payment Details
							</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="nav-link" href="<?php echo $_SERVER['PHP_SELF'] . "?lo"; ?>">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>LogOut</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>