<?php
// Variabile per la password generata
$generatedPassword = '';

// GET PARAMS    
$uppercaseFilter = isset($_GET['uppercase']);
$lowercaseFilter = isset($_GET['lowercase']);
$numbersFilter = isset($_GET['numbers']);
$symbolsFilter = isset($_GET['symbols']);

if (!empty($_GET['password_length']) && $_GET['password_length'] >= 5) {

    // Lettere Maiuscole
    $lettersUppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Lettere Minuscole
    $lettersLowercase = 'abcdefghijklmnopqrstuvwxyz';

    // Numeri
    $charsNumbers = '0123456789';

    // Simboli
    $charsSymbols = '`-=~!@#$%^&*()_+,./<>?;:[]{}\|';



    // Varibile per i caratteri consentiti da GET PARAMS
    $chars = '';

    // Varibile per il messaggio se non sono settati Chars
    $message = '';

    if ($uppercaseFilter) $chars .= $lettersUppercase;
    if ($lowercaseFilter) $chars .= $lettersLowercase;
    if ($numbersFilter) $chars .= $charsNumbers;
    if ($symbolsFilter) $chars .= $charsSymbols;


    $charsLength = strlen($chars);

    for ($i = 0; $i < $_GET['password_length']; $i++) {
        $randPosition = rand(0, $charsLength - 1);
        $randChar = substr($chars, $randPosition, 1);
        $generatedPassword .= $randChar;
    }
}
