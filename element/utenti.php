<?php 

trait funzioneVip{
    public function funzioneVip(){
        if($this->vip == true){
            $this->vipSconto = "10%";
        } else{
            $this->vipSconto = "clicca qui se ancora non sei in possesso di un account vip!!!";
        }
    }
}

class Utente {

    use FunzioneVip;
    //ATTRIBUTI
    public $vip;
    public $vipSconto;

    //CONSTRUCT
    public function __construct($_vip = "non definito", $_vipSconto){
        $this->vip = $_vip;
        $this->vipSconto = $_vipSconto;
    }
    //METHODS
}



/* INSTANZE */
$utente1 = new Utente(true, " ");
$utente2 = new Utente(false, " ");
$utente1->funzioneVip();
$utente2->funzioneVip();

?>