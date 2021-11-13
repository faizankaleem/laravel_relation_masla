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
		<div class="col-lg-2 text-center">

		</div>

        <div class="col-lg-7 text-center">
            <h1>One To One Relation</h1>
        </div>

        <div class="col-lg-2 text-center">
            <a href="{{url('main_page')}}" class ="btn btn-lg btn-primary lnk">Home Page</a>
        </div>
        <div class="col-lg-1 text-center">

        </div>
	</div>

</div>


<div class="container">
	<div class="row">

		<div class="card">
			<div class="card-header">

            </div>

            <div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Emp Id</th>
							<th>Employee Name</th>
							<th>Comp Id</th>
							<th>Company Name</th>
						</tr>
					</thead>
					<tbody>

						<tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->company->id}}</td>
                            <td>{{$data->company->name}}</td>

						</tr>

					</tbody>
				</table>
			</div>

            <div class="card-footer">

            </div>


		</div>
	</div>

</div>


</body>
</html>
