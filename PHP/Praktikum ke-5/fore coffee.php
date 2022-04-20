<?php

class Teko {
    protected $volume;
    protected $hargaSegelas;
    private static $volumeGelas = 250;
    public $namaMinuman;

    public function __construct ($vol) {
        $this->volume = $vol;
    }

    public static function getVolume () {
        echo self::$volumeGelas;
    }

    protected function ambilSegelas() {
        $this->volume = $this->volume - self::$volumeGelas;
    }

    public function isi ($vol) {
        $this->volume = $vol;
    }
}

class Minuman extends Teko {
    private $dompet;

    public function __construct (Int $harga, String $nama, Int $vol) {
        parent::isi($vol);
        $this->hargaSegelas = $harga;
        $this->namaMinuman = $nama;
    }

    public function beliSegelas ($uang) {
        if ($uang < $this->hargaSegelas) {
            echo "Maaf, uang anda tidak mencukupi.";
        } else {
            parent::ambilSegelas();
            $this->dompet += $uang;
            echo "Silahkan minum.";
        }
    }

    public function cekVolDispenser () {
        echo "\n" . $this->volume;
    }

    public function cekDuit () {
        echo "\n" . $this->dompet;
    }

    public function __destruct () {
        echo "\n Selamat datang di fore coffee " . $this->namaMinuman;
    }
}

$kopken = new Minuman(15000, "fore coffee", 300000);
$kopken->beliSegelas(30000);
$kopken->cekVolDispenser(); // atau
Dispenser::getVolume();
