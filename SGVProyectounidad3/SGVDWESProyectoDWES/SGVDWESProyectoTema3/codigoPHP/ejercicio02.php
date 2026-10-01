<!DOCTYPE html>
<html lang="es">
    <!--
    Autor: Santiago González Vicente
    Fecha Modificacion: 2026-09-28
    Descripcion: Indice DAW2
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--       <link rel="shortcut icon" type="image/jpg" href="webroot/favicon/favicon.ico">-->
        <title>Santiago González Vicente</title>
    </head>
    <body>
        <?php
        $partesHTMLBasicas = <<< EOT
        head: title,style,link, meta
        Body: header, h1, h2, h3, h4, p, footer
        EOT;
        echo "<h4>"+print_r($partesHTMLBasicas)+"</h4>";
        ?>
    </body>
</html>
