<?php

  //Penjumlahan
  function tambah($n1,$n2){
    $hasil = $n1 + $n2;
    echo 'hasil dari Penjumlahan ' . $n1 . ' dan ' . $n2. ' adalah '. $hasil ."<br>";
  }
    tambah(10,12);

  //pengurangan
  function kurang($n1,$n2){
    $hasil = $n1 - $n2;
    echo 'hasil dari pengurangan ' . $n1 . ' dan ' . $n2. ' adalah '. $hasil ."<br>";
  }
  kurang(12,10);

  //pengkalian
  function kali($n1,$n2){
    $hasil = $n1 * $n2;
    echo 'hasil dari perkalian ' . $n1 . ' dan ' . $n2. ' adalah '. $hasil ."<br>";

  }
  kali(10,12);

  //pembagian
  function bagi($n1,$n2){
    $hasil = $n1 / $n2;
    echo 'hasil dari pembagian ' . $n1 . ' dan ' . $n2. ' adalah '. $hasil ."<br>";
  }
  bagi(10,2);


  //modulo
  function modulo($n1,$n2){
    $hasil = $n1 % $n2;
    echo 'sisa hasil pembagian ' . $n1 . ' dan ' . $n2. ' adalah '. $hasil ."<br>";

  }
  modulo(11,2);




 ?>
