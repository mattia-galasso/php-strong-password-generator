<?php
    // Avvio la sessione
    session_start();
    
    ?>

<?php 
    $userNumber = 0;
    $generatedPassword = '';
    if (!empty($_GET['password_length'])) {
        $generatedPassword = randomPassword($_GET['password_length']);
    }
        
    $_SESSION['password'] = $generatedPassword;
        
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