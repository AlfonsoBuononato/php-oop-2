

<?php 


class PcShop {
    //ATTRIBUTI
    public $marca;
    public $modello;
    public $immagine;
    public $processore;
    public $sistemaOperativo;
    public $prezzo;
    public $premium;

    //CONSTRUCT

    public function __construct($_marca, $_modello, $_img, $_processore, $_sistemaOperativo, $_prezzo, $_premium){
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->immagine = $_img;
        $this->processore = $_processore;
        $this->sistemaOperativo = $_sistemaOperativo;
        $this->prezzo = $_prezzo;
        $this->premium = $_premium;
    }

    //METHODS

}

/* CLASS EREDITATA */
class PcShopSconto extends PcShop {
    //ATTRIBUTI
    public $sconto;

    //CONSTRUCT
    public function __construct($_marca, $_modello, $_img, $_processore, $_sistemaOperativo, $_prezzo, $_premium, $_sconto){
        parent:: __construct($_marca, $_modello, $_img, $_processore, $_sistemaOperativo, $_prezzo, $_premium, $_sconto);
        $this->sconto = $_sconto;
    }

    public function sconto(){
        if($this->prezzo > 1500){
            $this->sconto = 20;
            $this->prezzo = $this->prezzo - (($this->prezzo * $this->sconto) / 100);
            return $this->prezzo;
        } else if($this->prezzo > 1000){
            $this->sconto = 10;
            $this->prezzo = $this->prezzo - (($this->prezzo * $this->sconto) / 100);
        } else{
            $this->sconto = 0;
            $this->prezzo = $this->prezzo - (($this->prezzo * $this->sconto) / 100);
            return $this->prezzo;
        }
    }
}

/* INSTANZE */

/* PC PREZZO PIENO */
$msi = new PcShop("msi", "prestige", "https://www.notebookcheck.it/uploads/tx_nbc2/4_zu_3_evo14.jpg", "intel", "windows", "1200", true);
$msi2 = new PcShop("msi", "creator", "https://images-na.ssl-images-amazon.com/images/I/71yPmX4kj4L._AC_SX450_.jpg", "intel", "windows", "2200", false);
$hp = new PcShop("hp", "elitebook", "https://www.notebookcheck.it/uploads/tx_nbc2/4zu3_HP_Elitebook_840_G5.jpg", "intel", "windows", "1600", false);

$arrayPc = [];
array_push($arrayPc, $msi, $msi2, $hp);

/* PC SCONTATI */
$apple = new PcShopSconto("apple", "macbook air", "https://www.notebookcheck.it/uploads/tx_nbc2/air13teaser.jpg", "m1", "ios", "1200", true, " ");
$asus = new PcShopSconto("asus", "zenbook", "https://images.eprice.it/nobrand/0/hres/357/209613357/DAM209613357-17-78f2652c-f6ee-4dca-b6d0-1939acc0a663.jpg", "intel", "windows", "1700", true, " ");
$acer = new PcShopSconto("acer", "nitro", "https://s3.eu-central-1.amazonaws.com/static2.euronics.it/immagini/img-catalogo-converted/full/212000170_2.jpg", "intel", "windows", "1099", false, " ");

$arrayPcSconto = [];
array_push($arrayPcSconto, $apple, $asus, $acer);
foreach($arrayPcSconto as $sconto){
    $sconto->sconto();
}
?>