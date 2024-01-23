
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="asetlog/css/style.css">

	</head>
  
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
			
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(asetlog/images/DMSS.png);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Log In</h3>
			      		</div>
								<div class="w-100">
								</div>
			      	</div>
              @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('loginError')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
							<form action="/login" method="post">
                @csrf
			      	<div class="form-group mb-3">
			      			<label class="label" for="email">Email</label>
			      			<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" autofocus required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Log In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			          
										</label>
									</div>
									<div class="w-50 text-md-right">
					
									</div>
		            </div>
		          </form>
		         
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="asetlog/js/jquery.min.js"></script>
  <script src="asetlog/js/popper.js"></script>
  <script src="asetlog/js/bootstrap.min.js"></script>
  <script src="asetlog/js/main.js"></script>

	</body>
</html>





