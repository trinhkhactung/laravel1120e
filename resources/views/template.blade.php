<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Laravel</title>
    <style>
    	h1{
    		color: green;
    	}
    </style>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<h1>Hello, world!</h1>
  				<p>Name: {{ $name }}</p>
  				<p>Age: {{ $age }}</p>
  				<p>Addres: {{ $addres }}</p>
  				{{ 'Xin chao lop PHP1120E' }}
  				{!! '<h1>Hello PHP1120E</h1>' !!}

  				<p>
  					Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Deleniti sequi aperiam tenetur esse quibusdam quod modi ipsum, sapiente quis magni nostrum animi corrupti? Ratione animi dicta architecto beatae hic fugiat.
  				</p>

  				@for($i = 1; $i< 10; $i++)
  					{!! $i.' Vòng lặp for balde <br>' !!}
  				@endfor


  				<?php 
  					echo "Xin chao!";
  					$number = 10;
  				?>

  				@if($number < 10)
  					<h1>Trường hợp 1</h1>
  				@elseif($number > 10)
  					<h1>Trường hợp 2</h1>
  				@else
  					<h1>Trường hợp 3</h1>
  				@endif

  				@php
  					echo 'Hello World';
  				@endphp
  			</div>
  		</div>
  	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    	
    </script>
  </body>
</html>