<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<title>World Database Lookup</title>

		<!-- you can modify this as needed or to your preference -->
		<link href="world.css" type="text/css" rel="stylesheet" />

		<!-- you write this -->
		<script src="world.js" type="text/javascript"></script>
	</head>

	<body>
		<header>
			<h1>World Database Lookup</h1>
		</header>

		<main>
			<div id="controls">
				<label for="country">Country:</label>
				<input id="country" type="search" name="country" placeholder="Enter country name" />
				<!--lookup country wise-->
				<button id="showdataCounrtyWise" type="button" value="Submit">lookup country wise</button>
				<button id="showdataCityWise" type="button" value="Submit">lookup city wise</button>
			</div>
			
			<div id="resultCounrtyWise">
				<!-- countries will appear here -->
			</div>
	
		</main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="world.js">
</script>
	</body>
</html>