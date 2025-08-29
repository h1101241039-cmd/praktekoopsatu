<?php
class persegiPanjang {
    public $panjang;
    public $lebar;

    public function __construct($p, $l) {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>






