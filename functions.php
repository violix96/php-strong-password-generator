<?php
// funzione per generare la password 
function generatePassword($length)
{
    // stringa che contiene tutti i caratteri che vogliamo includere nella password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+<>?';

    //variabile $password come stringa vuota
    $password = '';

    // calcolo dell'indice massimo valido per accedere alla stringa dei caratteri
    $maxIndex = strlen($characters) - 1;

    // ciclo per generare la password
    for ($i = 0; $i < $length; $i++) {
        // genera un numero casuale tra 0 e l'indice massimo
        $randomIndex = rand(0, $maxIndex);

        // aggiunta del carattere corrispondente all'indice casuale alla password
        $password .= $characters[$randomIndex];
    }

    // return della password generata
    return $password;
}
