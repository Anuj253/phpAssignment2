<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscriber Portal</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Subscriber Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://georgianatilac.com/our-people/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://georgianatilac.com/contact/">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <h2>Enter Your Information</h2>
      <form class="subscriber-form" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="interests" class="form-label">Interests:</label>
          <textarea class="form-control" id="interests" name="interests" required></textarea>
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age:</label>
          <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Gender:</label>
          <select class="form-control" id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="country" class="form-label">Country:</label>
          <select class="form-control" id="country" name="country">
            <option value="">Select a country</option>
            <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <!-- Add more options here -->
          </select>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
      </form>
      <a href="view.php" class="btn btn-primary mt-3">View Database</a>
    </div>
  </main>
  <footer>
    <div class="container">
      <p>@Anuj 2023 Subscriber Portal. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $interests = $_POST['interests'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $database->create($name, $email, $interests, $age, $gender, $country);
}
