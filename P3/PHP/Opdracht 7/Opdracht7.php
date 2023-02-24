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

			if ($choice == "1") {
				$sql = "UPDATE poll SET stem1 = stem1 + 1";
			} elseif ($choice == "2") {
				$sql = "UPDATE poll SET stem2 = stem2 + 1";
			} elseif ($choice == "3") {
				$sql = "UPDATE poll SET stem3 = stem3 + 1";
			} elseif ($choice == "4") {
				$sql = "UPDATE poll SET stem4 = stem4 + 1";
			}

			mysqli_query($conn, $sql);
		}

		$sql = "SELECT stem1, stem2, stem3, stem4 FROM poll";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<h2>Poll Results</h2>";
			echo "<table>";
			echo "<tr><th>Choice</th><th>Count</th></tr>";
			$row = mysqli_fetch_assoc($result);
			echo "<tr><td>1</td><td>" . $row["stem1"] . "</td></tr>";
			echo "<tr><td>2</td><td>" . $row["stem2"] . "</td></tr>";
			echo "<tr><td>3</td><td>" . $row["stem3"] . "</td></tr>";
			echo "<tr><td>4</td><td>" . $row["stem4"] . "</td></tr>";
			echo "</table>";
		} else {
			echo "No results found.";
		}

		$conn = null;
	?>
</body>
</html>
