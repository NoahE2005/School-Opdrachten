<!DOCTYPE html>
<html>
<head>
	<title>Poll</title>
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
		<input type="radio" name="choice" value="1" required>
        <br>

		<label for="2">2</label>
		<input type="radio" name="choice" value="2" required>
        <br>

		<label for="3">3</label>
		<input type="radio" name="choice" value="3" required>
        <br>

		<label for="4">4</label>
		<input type="radio" name="choice" value="4" required> 
        <br>
		<input type="submit">
	</form>

	<?php
    $name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schoool";
		$conn = mysqli_connect($name, $username, $password, $dbname);

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$choice = $_POST["choice"];

			$sql = "INSERT INTO poll (choice) VALUES ('$choice')";
			mysqli_query($conn, $sql);
		}

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

		mysqli_close($conn);
	?>
</body>
</html>
