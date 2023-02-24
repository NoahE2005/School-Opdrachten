<!DOCTYPE html>
<html>
<head>
	<title>Radio Button Form</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
		th {
			background-color: lightgray;
		}
	</style>
</head>
<body>
	<form method="post">
		<label for="1">1</label>
		<input type="radio" name="choice" value="1">
        <br>

		<label for="2">2</label>
		<input type="radio" name="choice" value="2">
        <br>

		<label for="3">3</label>
		<input type="radio" name="choice" value="3">
        <br>

		<label for="4">4</label>
		<input type="radio" name="choice" value="4">
        <br>
		<input type="submit">
	</form>

	<?php
		// Connect to the database
		$conn = mysqli_connect("localhost", "root", "", "schoool");

		// Check if the form has been submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Get the selected choice from the form
			$choice = $_POST["choice"];

			// Insert the choice into the database
			$sql = "INSERT INTO poll (choice) VALUES ('$choice')";
			mysqli_query($conn, $sql);
		}

		// Display a table of the poll results
		$sql = "SELECT choice, COUNT(*) AS count FROM poll GROUP BY choice";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<h2>Poll Results</h2>";
			echo "<table>";
			echo "<tr><th>Choice</th><th>Count</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>" . $row["choice"] . "</td><td>" . $row["count"] . "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "No results found.";
		}

		// Close the database connection
		mysqli_close($conn);
	?>
</body>
</html>
