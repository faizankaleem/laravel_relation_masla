<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--  thats how we link the css sheet in our project  -->

    <link rel="stylesheet" type="text/css" href="css/style.css">




</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>Laravel Relations</h1>
		</div>
	</div>

</div>


<div class="container">
	<div class="row">
		<div class="col-lg-2">

			<a href="{{url('one_to_one_route')}}">One To One </a>
		</div>
		<div class="col-lg-2">
			<a href="{{url('One_to_many_route')}}">One To Many  </a>
		</div>
		<div class="col-lg-2">
			<a href="{{url('many_to_many_route')}}">Many To Many</a>
		</div>
		<div class="col-lg-2">
			<a href="">One To One Inverse</a>
		</div>
		<div class="col-lg-2">
			<a href="">One To Many Inverse</a>
		</div>

	</div>

</div>


</body>
</html>
