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
<body class="container w-50">
    <h1 class="text-center mt-4">Password Generator</h1>    
    <hr class="mb-4">
    <?php 
    $userNumber = 0;
    $alert = '';

    if (empty($_GET['password_length'])){
        $alert = '<div class="alert alert-primary w-75 m-auto mb-4 text-center fs-5 " role="alert">Nessun parametro valido inserito!</div>';
    } else {
        $generatedPassword = randomPassword($_GET['password_length']);
        $alert = '<div class="alert alert-success w-75 m-auto mb-4 text-center fs-5" role="alert">Password Generata:<br> '. $generatedPassword .'</div>';
    }

    function randomPassword(int $charNumber):string {
        // Lettere Maiuscole
        $lettersUppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        // Lettere Minuscole
        $lettersLowercase = 'abcdefghijklmnopqrstuvwxyz';
        
        // Numeri
        $numbers = '0123456789';

        // Simboli
        $symbols = '`-=~!@#$%^&*()_+,./<>?;:[]{}\|';

        // Variabile per la password generata
        $genChars = '';

        $chars = $lettersUppercase .= $lettersLowercase .= $numbers .= $symbols;
        $charsLength = strlen($chars);

        for($i = 0; $i < $charNumber; $i++){
            $randChar = $chars[rand(0, $charsLength - 1)];
            $genChars .= $randChar;
        }

        return $genChars;
    }

    ?>
    
    <?php
    echo $alert;
    ?>

    <div class="card w-75 m-auto">
        <div class="card-header p-2">
            <h3 class="card-title text-center m-0">Genera una password sicura</h3>
        </div>
        <div class="card-body">
            <form class="mb-0" method="GET">
                <div class="d-flex justify-content-around align-items-center">
                    <div class="form-floating mb-3">
                      <input type="number" class="form-control" id="passwordLength" placeholder="Inserire un numero" name="password_length" value=<?php echo $userNumber; ?>>
                      <label for="passwordLength">Lunghezza Password</label>
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