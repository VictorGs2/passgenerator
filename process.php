<?php
$alphabetUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$alphabetLower = "abcdefghijklmnopqrstuvwxyz";
$digits = "0123456789";
$types = [];
$randstring = '';
$teste = $_POST['type1'];

if (isset($randstring) && isset($_POST['passlength'])) {
    $passlength = $_POST['passlength'];
    if (isset($_POST['type1'])) {
        $typeNumber = $_POST['type1'];
        if ($typeNumber == 'number') {
            $types[] = $digits;
        }
    }
    if (isset($_POST['type2'])) {
        $typelowercase = $_POST['type2'];
        if ($typelowercase == 'lowercase') {
            $types[] = $alphabetLower;
        }
    }
    if (isset($_POST['type3'])) {
        $typeuppercase = $_POST['type3'];
        if ($typeuppercase == 'uppercase') {
            $types[] = $alphabetUpper;
        }
    }
    for ($i = 1; $i <= $passlength; $i++) {
        // Pega um dos elementos do array TYPES randomicamente
        $randType = $types[rand(0, count($types) - 1)];
        // var_dump($randType);
        $randstring .= $randType[rand(0, strlen($randType) - 1)];
    }
}
?>