<?php
      

      for ($NilaiAwal=1; $NilaiAwal <= 10; $NilaiAwal++){
        if($NilaiAwal == 1 || $NilaiAwal == 3) {
          echo"Buku No $NilaiAwal Anda sedang dipinjam <br/>";
        }else if($NilaiAwal == 5 || $NilaiAwal == 8){
          echo"Buku No $NilaiAwal Tidak Tersedia <br/>";
        }else{
          echo"Buku No $NilaiAwal Tersedia <br/>";
        }
      }
    
    
?>
    
