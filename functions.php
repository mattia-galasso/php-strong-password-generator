<?php
    // Avvio la sessione
    session_start();

    
    $userNumber = 0;
    $generatedPassword = '';
    $alert = '';

    // GET PARAMS    
    $uppercaseFilter = isset($_GET['uppercase']);
    $lowercaseFilter = isset($_GET['lowercase']);
    $numbersFilter = isset($_GET['numbers']);
    $symbolsFilter = isset($_GET['symbols']);
    
    if (!$uppercaseFilter && !$lowercaseFilter && !$numbersFilter && !$symbolsFilter) {
        $alert = "Inserito parametro automatico 'Lettere Minuscole' data l'assenza di filtri impostati!";
    } 
    
    if (!empty($_GET['password_length'])) {
        $generatedPassword = randomPassword($_GET['password_length'],$uppercaseFilter, $lowercaseFilter, $numbersFilter, $symbolsFilter);
    }
    
    // SESSION Password Generata
    $_SESSION['password'] = $generatedPassword;
        
    function randomPassword(int $charNumber,bool $uppercase,bool $lowercase,bool $numbers,bool $symbols):string {


        // Lettere Maiuscole
        $lettersUppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        // Lettere Minuscole
        $lettersLowercase = 'abcdefghijklmnopqrstuvwxyz';
        
        // Numeri
        $charsNumbers = '0123456789';

        // Simboli
        $charsSymbols = '`-=~!@#$%^&*()_+,./<>?;:[]{}\|';

        // Variabile per la password generata
        $genChars = '';

        // Varibile per i caratteri consentiti da GET PARAMS
        $chars = '';

        if ($uppercase) $chars .= $lettersUppercase;
        if ($lowercase) $chars .= $lettersLowercase;
        if ($numbers) $chars .= $charsNumbers;
        if ($symbols) $chars .= $charsSymbols;
        if (!$uppercase && !$lowercase && !$numbers && !$symbols) $chars .= $lettersLowercase;

        $charsLength = strlen($chars);

        for($i = 0; $i < $charNumber; $i++){
            $randChar = $chars[rand(0, $charsLength - 1)];
            $genChars .= $randChar;
        }

        return $genChars;
    }
?>