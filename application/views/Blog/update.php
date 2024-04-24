<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Cartoon theme CSS -->
  <style>
    body {
      background-color: #F7E7CE; /* Light beige */
      font-family: 'Comic Sans MS', cursive, sans-serif;
    }
    .container {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- <?php   print_r($data); ?>
    <?php print_r($data[0]->user_id)?> -->
    
    <h2>Edit Information</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" class="form-control" id="id" name="id"  value="<?php  echo $data[0]->user_id; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php  echo $data[0]->uname; ?>" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" name="age" value="<?php  echo $data[0]->agee; ?>" placeholder="Enter Age">
      </div>
      <input type="submit" class="btn btn-primary" name="update">
    </form>
  </div>

  <!-- Bootstrap JS and jQuery (for form validation) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
