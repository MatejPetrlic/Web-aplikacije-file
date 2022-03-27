<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak1</title>
</head>
<body>
    <?php
    /*
    tekst zadatka:

    Potrebno je napraviti php dokument u kojemu se trebaju nalaziti varijable koje sadrže vrijednosti brojeva iz priloženog teksta. 
    Nakon toga treba napraviti ispis cijelog teksta u kojemu se umjesto brojeva nalaze php varijable, a izlaz treba biti isti kao i 
    priloženi tekst.
    Tekst:

    Silvije Strahimir Kranjčević rođen je 1865. godine u Senju, pod Nehajem. 
    Djed mu je bio rodom iz otočke pukovnije a otac mu Špiro rođen je u Senju. 
    Kranjčević je rođen u obitelji gradskoga činovnika Spiridiona (Špire) (1814. - 1885.) 
    i Marije (rođ. Marković) (1832. - 1880.)
    */

    $godinaRodjenja = 1865;
    $spiridionRodjenje = 1814;
    $spiridionSmrt = 1885;
    $marijaRodnjenje = 1832;
    $marijaSmrt = 1880;

    echo "Silvije Strahimir Kranjčević rođen je ".$godinaRodjenja.". godine u Senju, pod Nehajem. 
    Djed mu je bio rodom iz otočke pukovnije a otac mu Špiro rođen je u Senju. 
    Kranjčević je rođen u obitelji gradskoga činovnika Spiridiona (Špire) (".$spiridionRodjenje.". - ".$spiridionSmrt.".) 
    i Marije (rođ. Marković) (".$marijaRodnjenje.". - ".$marijaSmrt.".)";
    
    ?>
</body>
</html>