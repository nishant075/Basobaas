<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title></title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="script.css">


</head>

<body>

	<div class="container">
		<div class="row d-flex justify-content-center">

			<div class="table-responsive">
				<table class="table-striped  table-bordered text">
					<thead class="bg-dark text-white">
						<tr>
							<th class="py-3 text-white">id</th>
							<th class="py-3 text-white">purpose</th>
							<th class="py-3 text-white">address</th>
							<th class="py-3 text-white">city</th>
							<th class="py-3 text-white">ward</th>
							<th class="py-3 text-white">area</th>
							<th class="py-3 text-white">measure</th>
							<th class="py-3 text-white">built area</th>
							<th class="py-3 text-white">built measure</th>
							<th class="py-3 text-white">built year</th>
							<th class="py-3 text-white">floors</th>
							<th class="py-3 text-white">kitchen</th>
							<th class="py-3 text-white">bedroom</th>
							<th class="py-3 text-white">bathroom</th>
							<th class="py-3 text-white">parking</th>
							<th class="py-3 text-white">living room</th>
							<th class="py-3 text-white">title</th>
							<th class="py-3 text-white">description</th>
							<th class="py-3 text-white">price</th>
							<th class="py-3 text-white">ownername</th>
							<th class="py-3 text-white">ownernumber</th>

							<th class="py-3 text-white">pic</th>
						</tr>
					</thead>
					<tbody>
						<?php
						session_start();
						$dbcon = mysqli_connect("localhost", "root", "", "roomkhoji");

						$selectquery = "select * from radioin";
						$query = mysqli_query($dbcon, $selectquery);
						// $result = mysqli_fetch_array($query);

						while ($result = mysqli_fetch_array($query)) {
						?>

							<tr>
								<td> <?php echo $result['id']; ?></td>
								<td> <?php echo $result['purpose']; ?></td>
								<td> <?php echo $result['address']; ?></td>
								<td> <?php echo $result['city']; ?></td>
								<td> <?php echo $result['ward']; ?></td>
								<td> <?php echo $result['area']; ?></td>
								<td> <?php echo $result['measure']; ?></td>
								<td> <?php echo $result['builtarea']; ?></td>
								<td> <?php echo $result['builtmeasure']; ?></td>
								<td> <?php echo $result['builtyear']; ?></td>
								<td> <?php echo $result['floors']; ?></td>
								<td> <?php echo $result['kitchen']; ?></td>
								<td> <?php echo $result['bedroom']; ?></td>
								<td> <?php echo $result['bathroom']; ?></td>
								<td> <?php echo $result['parking']; ?></td>
								<td> <?php echo $result['living_room']; ?></td>
								<td> <?php echo $result['title']; ?></td>
								<td> <?php echo $result['description']; ?></td>
								<td> <?php echo $result['price']; ?></td>
								<td> <?php echo $result['ownername']; ?></td>
								<td> <?php echo $result['ownernumber']; ?></td>
								<td> <img src="User/<?php echo $result['pic'];  ?>" width="100" height="60"></td>
							</tr>


						<?php
						}


						?>







					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>

</body>

</html>