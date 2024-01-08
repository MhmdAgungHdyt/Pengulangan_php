<?php
  echo"Nama Lengkap : Mohammad Agung Hidayat <br />";
  echo"Kelas : X RPL 1 <br />";
  

  $Nharian = (95*30/100);
     echo "Nilai Harian : ";
      echo $Nharian;
      echo "<br />";


  $Nuts = (80*30/100);
     echo "Nilai UTS :";
      echo $Nuts;
      echo "<br />";


  $Nuas = (89*40/100);
     echo "Nilai UAS : ";
      echo $Nuas;
      echo "<br />";


  $Nakhir = $Nharian + $Nuts + $Nuas;
     echo "Nilai AKHIR : ";
      echo $Nakhir;
      echo "<br />";

  if($Nakhir >= 85 && $Nakhir <= 100){
         echo"Predikat nilai = A";
}else if ($Nakhir >= 75 && $Nakhir <= 84){
    echo"Predikat nilai = B";
}else if ($Nakhir >= 60 && $Nakhir <= 70){
    echo"Predikat nilai = C";
}else if ($Nakhir >= 50 && $Nakhir <= 59){
    echo"Predikat nilai = D";
}else if ($Nakhir >= 0 && $Nakhir <= 49){
    echo"Predikat nilai = E";
} else {
    echo "Nilai Anda NOT FOUND";
}




















      
?>