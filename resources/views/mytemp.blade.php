<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') CRUD APP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		 <div class="row">
		 	 <div class="col-12">
		 	 	<header class="jumbotron" style="background: red;color: white;padding: 10px;text-align: center;margin-top: 10px;">
					 <h1>Students Data</h1>
				</header> 
		 	 </div>
		 </div>
	</div>
	<div class="container">
		<div class="row">
			 <div class="col-12">
			    <section style="margin-top: 10px;">
			    	@yield('mainarea')
			    </section>
			 </div>
		</div>
	</div>
	<div class="container-fluid">
		 <div class="row">
		 	 <div class="col-12">
		 	 	<footer class="jumbotron" style="margin-top: 20px;background: red;color: white;padding: 20px; text-align: center;">
		 	 		copyright &copy; 2023
		 	 	</footer>
		 	 </div>
		 </div>
	</div>
    
</body>
</html>