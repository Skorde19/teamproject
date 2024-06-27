<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit();
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">College Portal</a>
        <div class="ml-auto">
            <span class="navbar-text">Welcome, <?php echo $user['email']; ?></span>
            <a href="logout.php" class="btn btn-danger ml-2">Logout</a>
        </div>
    </nav>

    <div class="container mt-5">
        <?php if ($user['role'] == 'admin') : ?>
            <h1>Admin Dashboard</h1>
            <a href="add_material.php" class="btn btn-primary">Add Study Material</a>
        <?php else : ?>
            <h1>Student Dashboard</h1>
            <p>Here you can find your study materials</p>
        <?php endif; ?>
    </div>

    <div class="container mt-5">
    <?php if ($user['role'] == 'admin') : ?>
        <h1>Admin Dashboard</h1>
        <a href="add_material.php" class="btn btn-primary">Add Study Material</a>
    <?php else : ?>
        <h1>Student Dashboard</h1>
        <div class="form-group">
            <label for="semester">Semester</label>
            <select class="form-control" id="semester" name="semester" onchange="updateSubjects()">
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="3">Semester 6</option>
                <option value="4">Semester 7</option>
                <option value="5">Semester 8</option>


    <!-- Add Bootstrap JS files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
