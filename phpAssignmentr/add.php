<?php
include("connection.php");

$database = new Db_connection();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $interests = $_POST['interests'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    // Insert data into the database
    $database->create($name, $email, $interests, $age, $gender, $country);

    // Redirect back to view.php after adding record
    header("Location: view.php?msg1=insert");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscriber Portal - Add Subscriber</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1 class="logo">Subscriber Portal - Add Subscriber</h1>
      <?php include("global_header.php"); ?>
    </div>
  </header>
  <main>
    <div class="container">
      <h2>Add New Subscriber</h2>
      <form action="add.php" method="POST">
        <div class="field">
          <label class="label">Name:</label>
          <div class="control">
            <input type="text" class="input" name="name" placeholder="Enter name" required="">
          </div>
        </div>
        <div class="field">
          <label class="label">Email:</label>
          <div class="control">
            <input type="email" class="input" name="email" placeholder="Enter email" required="">
          </div>
        </div>
        <div class="field">
          <label class="label">Interests:</label>
          <div class="control">
            <input type="text" class="input" name="interests" placeholder="Enter interests">
          </div>
        </div>
        <div class="field">
          <label class="label">Age:</label>
          <div class="control">
            <input type="number" class="input" name="age" placeholder="Enter age">
          </div>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="country">Country:</label>
          <select id="country" name="country">
            <option value="">Select a country</option>
            <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AR">Argentina</option>
            <option value="AU">Australia</option>
            <option value="BR">Brazil</option>
            <option value="CA">Canada</option>
            <option value="CN">China</option>
            <option value="EG">Egypt</option>
            <option value="FR">France</option>
            <option value="DE">Germany</option>
            <option value="IN">India</option>
            <option value="IT">Italy</option>
            <option value="JP">Japan</option>
            <option value="MX">Mexico</option>
            <option value="RU">Russia</option>
            <option value="ZA">South Africa</option>
            <option value="ES">Spain</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
          </select>
        </div>
       
        <div class="field">
          <div class="control">
            <button type="submit" name="submit" class="button is-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </main>
  <footer>
    <p>@Anuj 2023 Subscriber Portal. All rights reserved.</p>
  </footer>
</body>
</html>
