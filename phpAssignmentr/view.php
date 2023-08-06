<?php
include("connection.php");

$database = new Db_connection();
$res = $database->read();

// Delete record from table
if (isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
  $deleteId = $_GET['deleteId'];
  $database->delete($deleteId);
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscriber Portal - View</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Subscriber Portal - View</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="add.php">Add</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <h2>Subscriber List</h2>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Interests</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($res && mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['interests'] . "</td>";
              echo "<td>" . $row['age'] . "</td>";
              echo "<td>" . $row['gender'] . "</td>";
              echo "<td>" . $row['country'] . "</td>";
              echo "<td><a class='btn btn-primary' href='edit.php?editId=" . $row['id'] . "'>Edit</a></td>";
              echo "<td><a class='btn btn-danger' href='view.php?deleteId=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a></td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='9'>No subscribers found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>
  <footer>
    <div class="container">
      <p>@Anuj 2023 Subscriber Portal. All rights reserved.</p>
    </div>
  </footer>
  
  <!-- Include Bootstrap JavaScript and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
