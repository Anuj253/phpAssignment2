<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscriber Portal - Edit Subscriber</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1 class="logo">Subscriber Portal - Edit Subscriber</h1>
      <?php include("global_header.php"); ?>
    </div>
  </header>
  <main>
    <div class="container">
      <h2>Edit Subscriber</h2>
      <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
          <label class="form-label">Name:</label>
          <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required="">
        </div>
        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required="">
        </div>
        <div class="mb-3">
          <label class="form-label">Interests:</label>
          <input type="text" class="form-control" name="interests" value="<?php echo $row['interests']; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Age:</label>
          <input type="number" class="form-control" name="age" value="<?php echo $row['age']; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Gender:</label>
          <input type="text" class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Country:</label>
          <input type="text" class="form-control" name="country" value="<?php echo $row['country']; ?>">
        </div>
        <div class="mb-3">
          <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </main>
  <footer>
    <div class="container">
      <p>@Anuj 2023 Subscriber Portal. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
