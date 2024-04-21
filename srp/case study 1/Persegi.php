<?php
class Persegi {
    public $sisi;

    function __construct(int $sisi){
        $this->sisi=$sisi;
    }

    function getSisi(): int {
        return $this->sisi;
    }
}

?>
