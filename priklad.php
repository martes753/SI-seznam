<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'seznam.php';
        $seznam = new seznam("ul"); // zadáme typ seznamu ( odrážky )
        $seznam->pridej_polozku("test1"); // zadáme data do seznamu
        $seznam->pridej_polozku("test2");
        $seznam->pridej_polozku("Dalsi polozka seznamu");
        echo $seznam; // vypíšeme seznam
        
        $seznam = new seznam("ol"); // zadáme typ seznamu ( číslovaný )
        $seznam->pridej_polozku("test1");// zadáme data do seznamu
        $seznam->pridej_polozku("test2");
        $seznam->pridej_polozku("Dalsi polozka seznamu");
        echo $seznam; // vypíšeme seznam
        ?>
    </body>
</html>
