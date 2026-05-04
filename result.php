<?php

session_start();

$password = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- BOOTSTRAP ICONS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- BOOTSTRAP SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>

</head>
<!-- data-bs-theme="dark" -->

<body class="container w-50">
    <h1 class="text-center mt-4">Password Generator</h1>
    <hr class="mb-4">
    <div class="alert alert-success m-auto mb-4 text-center fs-5" role="alert">
        Password Generata:<br>
        <?php echo $_SESSION['password']; ?>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <a href="./index.php" class="btn btn-primary ">Torna alla Home</a>
    </div>
</body>

</html>