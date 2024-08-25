
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assingment</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
// -- Header --
include_once 'partial\header.php';
//-- Navbar --
include_once 'partial\navBar.php';
//-- Sliders --
include_once 'partial\slides.php';
?>    
<!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Main Content Area</h2>
                <p>This is where your main content will go.</p>
            </div>
        </div>
    </div>



<!-- Footer -->
<?php include_once 'partial\footer.php';?>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>