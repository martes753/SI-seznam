<?php

/**
 * Description of seznam
 *
 * @author Marťin Šimon <martes753@seznam.cz>
 * @version 1.0
 * @package Si
 */
class seznam {

    /**
     * Zde se ukládejí jednotlivé údaje v seznamu.
     * @var array 
     */
    private $polozky = array();

    /**
     * Zde se uloží typ zadaného seznamu
     * @var string 
     */
    private $type;

    /**
     * Konstruktor třídy který uloží typ seznamu.
     * @param string $type
     */
    function __construct($type) {
        $this->type = $type;
    }

    /**
     * Přidá položku do seznamu.
     * @param string $text
     */
    function pridej_polozku($text) {
        $this->polozky[] = $text;
    }

    /**
     * Vygeneruje tabulku a vrátí jí.
     * @return string
     */
    function __toString() {
        $vrat = "";
        $vrat .= "<" . $this->type . ">";
        for ($i = 0; $i < count($this->polozky); $i++) {
            $vrat .= "<li>";
            $vrat .= $this->polozky[$i];
            $vrat .= "</li>";
        }
        $vrat .= "</" . $this->type . ">";
        return $vrat;
    }

}
