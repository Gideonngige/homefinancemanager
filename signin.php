<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="signin.css">
    <title>sign</title>
</head>
<body>
    <div class="container">
        <div class="inner-container">
            <h2>Sign In</h2><hr>
            <form action="signin.php" method="post">
                <label>Email</label><br>
                <input type="email" name="email" class="form-control" placeholder="e.g johndoe@example.com" /><br>
                <label>Password</label><br>
                <input type="password" name="password" class="form-control" placeholder="your password" /><br>
                <a href="">Do not have an account? Sign up here</a><br>
                <input type="submit" class="btn btn-warning" value="Sign In" />
            </form>

        </div>
    </div>
    
</body>
</html>