<?php
// Script de décompression du fichier fr.phar, à utiliser en local
try {
    $phar = new Phar('fr.phar');
    $phar->extractTo('./fr_decompressed');
} catch (Exception $e) {
    echo $e.message;
}
?>