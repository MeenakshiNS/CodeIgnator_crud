<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Name and Age</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #FEE9E7; /* Light peach background */
    }
    .card {
      background-color: #FFC107; /* Yellow card background */
      border-radius: 20px;
    }
    .card-header {
      background-color: #FF5722; /* Orange header background */
      color: white;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
    }
    .btn-primary {
      background-color: #03A9F4; /* Blue button background */
      border-color: #03A9F4;
    }
    .btn-primary:hover {
      background-color: #0288D1; /* Darker blue hover color */
      border-color: #0288D1;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Add Name and Age
        </div>
        <div class="card-body">
          <form action="" method="post" id="addForm">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="age">Age:</label>
              <input type="number" class="form-control" id="age" name="age"required>
            </div>
            <input type="submit" name="add" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
