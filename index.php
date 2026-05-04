<?php

require_once './functions.php';

session_start();

if ($generatedPassword != '') {
    header("Location: ./result.php");

    // SESSION Password
    $_SESSION['password'] = $generatedPassword;
}
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

<body class="container w-75">
    <h1 class="text-center mt-4">Password Generator</h1>
    <hr class="mb-4">
    <div class="card w-75 m-auto">
        <div class="card-header p-2">
            <h3 class="card-title text-center m-0">Genera una password sicura</h3>
        </div>
        <div class="card-body">
            <form class="mb-0" method="GET" action="">
                <div class="d-flex justify-content-around mt-3 mb-5">
                    <div class="mb-3">
                        <label for="passwordLength" class="form-label fw-bold">Lunghezza Password</label>
                        <input type="number" class="form-control" id="passwordLength" placeholder="Inserire un numero" name="password_length" min="5">
                    </div>
                    <div class="d-flex justify-content-center gap-4">
                        <p class="fw-bold">Caratteri Password:</p>
                        <div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="filterUppercase" name="uppercase" checked>
                                <label class="form-check-label" for="filterUppercase">Lettere Maiuscole</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="filterLowercase" name="lowercase">
                                <label class="form-check-label" for="filterLowercase">Lettere Minuscole</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="filterNumbers" name="numbers">
                                <label class="form-check-label" for="filterNumbers">Numeri</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="filterSymbols" name="symbols">
                                <label class="form-check-label" for="filterSymbols">Simboli</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-4 mt-2">
                    <button type="submit" class="btn btn-primary">Genera</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>