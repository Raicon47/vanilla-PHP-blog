<?php
 include('../path.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangul - Dashboard</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/bootstrap.min.css' ?>">
</head>
<body>


<nav class="navbar bg-dark p-4">
    <a href="dashboard.php" class="navbar-brand text-warning">DASHBOARD</a>
    <a href="posts/index.php" class="nav-item text-light">Create Post</a>
    <a href="topics/index.php" class="nav-item text-light">Create Topics</a>
    <a href="#0" class="nav-item btn btn-danger">Logout</a>
</nav>


