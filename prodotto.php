<?php

class Prodotto {
    public $marca;

    public $modello;

    public $taglia;

    public $categoria;

    public $prezzo;

    public function __construct($_marca, $_modello) {
        $this->marca = $_marca;
        $this->modello = $_modello;
    }

    //funzione che ritorna un array con le informazioni utili dell'oggetto da stampare
    public function getInfoData() {
        return [
            'marca' => $this->marca,
            'modello' => $this->modello,
            'taglia' => $this->taglia,
            'categoria' => $this->categoria,
            'prezzo' => $this->prezzo,
        ];
    }
}  

?>