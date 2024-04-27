<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!--Links-->
<link rel="stylesheet" href="assets/css/index.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
        <form action="condition.php" method="post">
          <span>
              <input class="balloon" id="state" name="username" type="text"/><label for="state">Username</label>
          </span>
          <span>
              <input class="balloon" id="planet" type="password" name="pass"/><label for="planet">Password</label>
          </span>
          <button class="btn btn-primary" type="Submit" name="submit">Log In</button>
        </form>
    </div>
  </div>
</section>
</body>
</html>

