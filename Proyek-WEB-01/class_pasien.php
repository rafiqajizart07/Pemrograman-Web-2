<?php
    class bmiPasien {
        public $tgl,
            $kode,
            $nama,
            $berat,
            $tinggi,
            $umur,
            $jenisKelamin;
            
        public function hasilBMI() {
            return "<b>
                    Tanggal Periksa : $this->tgl <br><br>
                    Kode Pasien : $this->kode <br><br>
                    Nama : $this->nama <br><br>
                    Berat Badan : $this->berat <br><br> 
                    Tinggi Badan : $this->tinggi <br><br>
                    Umur : $this->umur <br><br>
                    Jenis Kelamin : $this->jenisKelamin
                    </b>"; 
        }
        public function statusBMI($BMI) {
            if ($BMI < 18.5) {
                return "<td>Kekurangan Berat Badan</td>";
            }
            else if ($BMI >= 18.5 && $BMI <= 23.9) {
                return "<td>Normal (ideal)</td>";
            }
            else if ($BMI >= 24.0 && $BMI <= 26.9) {
                return "<td>Kelebihan Berat Badan</td>";
            }
            else {
                return "<td>Kegemukan (Obesitas)</td>";
            }
        }
    }
    if (isset($_GET["nama__lengkap"])) {
        $bmi = new bmiPasien;
        $bmi->tgl = $_GET['tgl__'];
        $bmi->kode = $_GET['kode__'];
        $bmi->nama = $_GET["nama__lengkap"];
        $bmi->berat = $_GET["berat__"];
        $bmi->tinggi = $_GET["tinggi__"];
        $bmi->umur = $_GET["umur__"];
        $bmi->jenisKelamin = $_GET["jenis__kelamin"];
    }
    
    $pasien1 = ['tgl'=>$bmi->tgl,'kode'=>$bmi->kode,'nama'=> $bmi->nama, 'kelamin'=> $bmi->jenisKelamin, 'umur'=>$bmi->umur, 'berat'=>$bmi->berat, 'tinggi'=>$bmi->tinggi];

    $ar_pasien = [$pasien1];
?>