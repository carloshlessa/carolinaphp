
<?php
	$title = 'Services';
    include 'templates/header.php';
    include 'templates/navigation.php';
?>

<div class="container  pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/services.jpg" class="img-fluid">
			<h2 class="text-uppercase d-none d-md-block">Services</h2>
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<main class="col-lg-8 main-content">
			<h2 class="d-md-none d-block text-uppercase text-center">Services</h2>

			<div id="services" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header py-2" role="tab" id="service_1">
						<h3 class="mb-0">
							<a data-toggle="collapse" data-parent="#services" href="#service_1desc" aria-expanded="true" aria-controls="service_1desc">Service 1</a>
						</h3>
					</div>
					<div id="service_1desc" class="collapse show" role="tabpanel" aria-labelledby="service_1">
						<div class="card-block">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header py-2" role="tab" id="service_2">
						<h3 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#services" href="#service_2desc" aria-expanded="false" aria-controls="service_2desc">Service 2</a>
						</h3>
					</div>
					<div id="service_2desc" class="collapse" role="tabpanel" aria-labelledby="service_2">
						<div class="card-block">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header py-2" role="tab" id="service_3">
						<h3 class="mb-0">
							<a class="collaped" data-toggle="collapse" data-parent="#services" href="#service_3desc" aria-expanded="false" aria-controls="service_3desc">Service 3</a>
						</h3>
					</div>
					<div id="service_3desc" class="collapse" role="tabpanel" aria-labelledby="service_3">
						<div class="card-block">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				
			</div>
		</main>
		<aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar hours p-3">
                
            </div>
        </aside>
	</div>
</div>


<?php
    include 'templates/footer.php';
?> 