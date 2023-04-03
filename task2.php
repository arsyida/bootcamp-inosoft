<?php
class BangunDatar {
    public $luas;
    public $keliling;

    public function area() {}
    public function circumference() {}
    public function enlarge($scale) {}
    public function shrink($scale) {}
}

class Lingkaran extends BangunDatar {
    public $jariJari;

    public function area() {
        $this->luas = 3.14 * pow($this->jariJari, 2);
        return $this->luas;
    }

    public function circumference() {
        $this->keliling = 3.14 * (2 * $this->jariJari);
        return $this->keliling;
    }

    public function enlarge($scale) {
        $this->jariJari *= $scale;
    }

    public function shrink($scale) {
        $this->jariJari /= $scale;
    }
}

class Persegi extends BangunDatar {
    public $sisi;

    public function area() {
        $this->luas = pow($this->sisi, 2);
        return $this->luas;
    }

    public function circumference() {
        $this->keliling = 4 * $this->sisi;
        return $this->keliling;
    }

    public function enlarge($scale) {
        $this->sisi *= $scale;
    }

    public function shrink($scale) {
        $this->sisi /= $scale;
    }
}

class PersegiPanjang extends BangunDatar {
    public $panjang;
    public $lebar;

    public function area() {
        $this->luas = $this->panjang * $this->lebar;
        return $this->luas;
    }

    public function circumference() {
        $this->keliling = 2 * ($this->panjang + $this->lebar);
        return $this->keliling;
    }

    public function enlarge($scale) {
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale) {
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }
}

class Descriptor {
    public static function describe(BangunDatar $bangunDatar) {
        $className = get_class($bangunDatar);
        $luas = $bangunDatar->area();
        $keliling = $bangunDatar->circumference();
        echo "Bangun datar ini adalah $className yang memiliki luas $luas dan keliling $keliling\n";
    }
}

$lingkaran = new Lingkaran();
$lingkaran->jariJari = 8;
Descriptor::describe($lingkaran);

$persegi = new Persegi();
$persegi->sisi = 10;
Descriptor::describe($persegi); 
$persegiPanjang = new PersegiPanjang();
$persegiPanjang->panjang = 8;
$persegiPanjang->lebar = 5;
Descriptor::describe($persegiPanjang);