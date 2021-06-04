<!-- Descrizione
-   Crea e modellizza classi per gestire i prodotti di uno shop; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
-   Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
-   Eseguire poi degli output istanziando oggetti delle varie classi.
BONUS
Gestite eventuali eccezioni (exception) che si possono verificare (es: parametro errato passato a un metodo per settare l'età di un utente). -->
<?php 
require_once __DIR__ . "/element/prodotti.php";
require_once __DIR__ . "/element/utenti.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>PC SHOP</h1>
    <div class="container">
        <h2>PC</h2>
        <?php foreach($arrayPc as $pc) {?>
            <ul>
                <li><img src="<?php echo $pc->immagine ?>" alt=""></li>
                <li><?php echo "MARCA PC: " . " " . $pc->marca ?></li>
                <li><?php echo "MODELLO: " . " " . $pc->modello ?></li>
                <li><?php echo "PROCESSORE: " . " " . $pc->processore ?></li>
                <li><?php echo "SISTEMA OPERATIVO: " . " " . $pc->sistemaOperativo ?></li>
                <li><?php echo "PREZZO: " . " " . $pc->prezzo ?></li>
                <li><?php echo $pc->premium === true && $utente1->vip === true ? "SCONTO VIP: " . " " . $utente1->vipSconto  : "SCONTO VIP: pc non soggetto a sconto vip o l' utente non è in possesso di un account vip" ?></li>
            </ul>
        <?php } ?>
    </div>
    <div class="container">
        <h2>PC IN OFFERTA</h2>
        <?php foreach($arrayPcSconto as $pcSconto) { ?>
        <ul>
        <li><img src="<?php echo $pcSconto->immagine ?>" alt=""></li>
            <li><?php echo "MARCA PC: " . " " . $pcSconto->marca ?></li>
            <li><?php echo "MODELLO: " . " " . $pcSconto->modello ?></li>
            <li><?php echo "PROCESSORE: " . " " . $pcSconto->processore ?></li>
            <li><?php echo "SISTEMA OPERATIVO: " . " " . $pcSconto->sistemaOperativo ?></li>
            <li><?php echo "PREZZO: " . " " . $pcSconto->prezzo ?></li>
            <li><?php echo $pcSconto->premium === true && $utente1->vip === true ? "SCONTO VIP: " . " " . $utente1->vipSconto : "SCONTO VIP: pc non soggetto a sconto vip o l' utente non è in possesso di un account vip" ?></li>
        </ul>
        <?php } ?>
    </div>
</body>
</html>