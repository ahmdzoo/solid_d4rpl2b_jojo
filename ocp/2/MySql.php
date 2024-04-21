<?php
include_once("DBMS.php");

class MySql extends DBMS {
    public function createConnection(): void {
        echo "Koneksi MySQL berhasil dibuat.\n";
    }
}
?>