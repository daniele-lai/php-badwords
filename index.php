<?php 
    //Creo una variabile con il paragrafo
    $text = "Per non svegliare nessuno Giacomo decise di muoversi nell'oscurità, era assetato e in cerca di un bicchiere d'acqua. Calpestò un mattoncino lego di suo figlio e esclamò: 'Ohibò che dolore atroce, non sistema mai i suoi giochi quella piccola sacca di merda'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>
    <!-- Visualizzo a schermo il paragrafo con la sostituzione passata con Get -->
    <p><?php echo str_replace($_GET['badword'], '***', $text); ?></p>
    <!-- Visualizzo la relativa lunghezza del paragrafo -->
    <p>La lunghezza della stringa è: <?php echo strlen($text) ?> caratteri</p>
</body>
</html>