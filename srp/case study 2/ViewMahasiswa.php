<?php


class ViewMahasiswa {
    public function showMahasiswa(Mahasiswa $mhs) {
        echo "NIM: " . $mhs->getNim() . ", Nama: " . $mhs->getNama() . "\n";
    }
}

?>