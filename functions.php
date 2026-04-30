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