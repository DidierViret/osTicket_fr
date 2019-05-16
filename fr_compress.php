
<?php
// Script de création du fichier fr.phar, à utiliser en local
try {
    $phar = new Phar('fr_new.phar', 0, 'fr_new.phar');
    $phar->buildFromDirectory('fr_decompressed');
} catch (Exception $e) {
    echo $e.message;
}
?>