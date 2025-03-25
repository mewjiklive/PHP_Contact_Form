<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="font-family: cursive">
        <h1 class="text-center text-danger" style="font-family: bold">Bootstrap Form</h1>
        <form action="getFormData.php" method="post">
         <div class="form-group">
          <label>Username</label>
          <input type="text" placeholder="Enter Username" class="form-control" name="username">
         </div>
         <div class="form-group">
          <label>E-Mail</label>
          <input type="email" placeholder="Enter E-Mail" class="form-control" name="email">
         </div>
         <div class="form-group">
          <label>Concern</label>
          <input type="text" placeholder="Write Your Concern Here" class="form-control" name="concern">
         </div>
         <div class="text-center">
          <button class="btn btn-success">Submit</button>
         </div>
        </form>
    </div>
</body>
</html>