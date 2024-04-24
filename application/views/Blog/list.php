<!DOCTYPE html>
<html lang="en">

 
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
        <title>List</title>
    
        <link href="index.css" rel="stylesheet">
      </head>

      <style>
        .bg-mynav {
  background-color: #2c3e50;
}

body {
  font-size: 1.25rem;
  background-color: #f6f8fa;
}

td {
    line-height: 3rem;
}
      </style>
      <body>
        
        <nav class="navbar navbar-dark bg-mynav">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">My list</a>
          </div>
        </nav>
    
        <div class="container">
          <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight"><h2>Users</div>
            <div class="p-2 bd-highlight">
              <a href="insert"><button type="button" class="btn btn-secondary" onclick="showUserCreateBox()">Create</button></a>
            </div>
          </div>
          
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Age</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody id="mytable">
  <?php foreach($data as $res): ?>
    <tr>
      <td><?php echo $res->user_id; ?></td>    
      <td><?php echo $res->uname ?></td> 
      <td><?php echo $res->agee ?></td>     
      <td><button><a href="">edit</a></button></td>
      <td><button><a href="">delete</a></button></td>     
    </tr>
  <?php endforeach; ?>
</tbody>
            </table>
          </div>
        </div>
    
        <script src="index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      </body>
    </html>
</body>
</html>