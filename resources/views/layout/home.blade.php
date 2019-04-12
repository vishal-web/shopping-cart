<!DOCTYPE html>
<html>
<head> 
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<title>@yield('title')</title>

	<style type="text/css">
		body {
			font-family: 'Roboto Slab', serif;
		}

		.wrapper .banner {
			height: 300px;
			border: 1px solid #ccc;
		}

		.category-box .box:not(:last-child) {
			/*margin-right: 4px;*/
		}
		
		.category-box .box {
			height: 180px;
			margin-bottom: 10px;
			width: 20%; 
			border: 1px solid #ccc; 
			float: left;
		}



		.category-box .box .box-img-wrapper {
			height: 150px;
		}
		.category-box .box .box-title {
			height: 30px;
			text-align: center;
			background-color: #3f3939;
			padding: 5px 0;
			color: #fff;
		}

		@media (max-width: 767px) {
			.wrapper .banner {
				height: 100px;
				border: 1px solid #ccc;
			}	

			.category-box .box .box-img-wrapper {
				height: 100px;
			}
			.category-box .box .box-title {
				height: 30px;
				text-align: center;
				background-color: #3f3939;
				padding: 5px 0;
				color: #fff;
			}	


			.category-box .box {
				height: 130px;
				margin-bottom: 10px;
				width: 50%; 
				border: 1px solid #ccc; 
				float: left;
			}
		}

	</style>
</head>
<body>
	<div class="wrapper">

		@include('common.topbar')

		<div class="container-fluid">
			<div class="row">
				<div class="left-side-wrapper">		
					@include('common.sidebar-nav')
				</div>

				<div class="right-side-wrapper"> </div>
	 			
		 			<div class="col-md-9">
		 				<h3>HomePage Banner</h3>
		 				<div class="banner">

		 				</div>
		 			</div>
		 			<div class="col-md-9">
		 				<h3>Books Categories</h3>
		 				<div class="category-box">

		 					@for ($i = 0; $i < 5; $i++)
		 					    <div class="box">
		 					    	<div class="box-img-wrapper"></div>
		 					    	<div class="box-title">
		 					    		Books Title Name
		 					    	</div>
		 					    </div>
		 					@endfor 
		 					 
		 				</div>
		 			</div>
	 			</div>
	 		</div>
		</div>
	</div>
</body>
</html>