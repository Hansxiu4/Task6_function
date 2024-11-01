<!-- ///==== PHP Function ===\\\ -->
<?php
function tampilkan_nama(){
    echo "Nama saya suka ngoding";
}

tampilkan_nama();
?>


<br><br>



<!-- ///=== String Fnction===\\\ -->
<?php
    $nama = "muhammad raden iqbal hafidz fauzi";
    echo $nama;
    echo '<br/>';
    echo strtoupper($nama);
    echo '<br/>';
    echo ucwords($nama);
    echo '<br/>';
    echo lcfirst($nama);
    echo '<br/>';
    echo strtolower($nama);
?>



<br><br>


<!-- ///=== Fungsi Void ===\\\ -->
<?php
    function salam($nama){
        echo "<h2>Assalamu'alaikum".strtoupper($nama)."</h2>";
    }

    salam("ali");
    salam("fadli");
    salam("");

?>


<br><br>


<!-- ///=== Fungsi return value ===\\\ -->
<?php
    function jumlah($a , $b){
        return $a + $b;
    }

    echo '$a + $b = '.jumlah(2,8);
?>


<br><br>


<!-- ///=== Membuat Fungsi ===\\\ -->
<?php
    function perkenalan(){
        echo "Assalamualaikum, ";
        echo "Perkenalkan, nama saya Bedu<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    perkenalan();

    echo "<hr/>";

    perkenalan();
?>


<br><br>


<!-- ///=== Membuat Fungsi ===\\\ -->
<?php
    // function perkenalan($nama, $salam){
    //     echo $salam.",";
    //     echo "Perkenalkan, nama saya ".$nama."<br/>."
    //     echo "Senang berkenalan dengan anda<br/>";
    // }

    // perkenalan("Usro", "Hai");

    // echo"<hr/>";

    // $saya = "Bedu";
    // $ucapanSalam = "Selamat Pagi";

    // perkenalan($saya, $ucapansalam);
//  ?>


<!-- ///=== Membuat fungsi ===\\\ -->
 <?php
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.",";
        echo "Perkenalkan nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    perkenalan("Jarwo", "Hi");

    echo "<hr>";

    $saya = "Bambang";
    $ucapanSalam = "Selamat pagi";

    perkenalan($saya);
 ?>


<br><br>


<!-- ///=== Membuat fungsi ===\\\ -->
<?php
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $tahun_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah ". hitungUmur(2003, 2022) ."tahun";
 ?>


<br><br>


<!-- ///=== Membuat fungsi ===\\\ -->
<?php
    function hitungUmur($thn_lahir, $tahun_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.",";
        echo "perkenalkan, nama saya ".$nama."<br/>";

        echo "saya berusia ". hitungUmur(1994, 2015) ."tahun<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    perkenalan("Ardianta");

?>


<br><br>


<!-- ///===  ===\\\ -->
<?php

    function faktorial($angka) {
        if ($angka < 2) {
            return 1;
        } else {
            return ($angka * faktorial($angka-1));
        }
    }

    echo "faktorial 5 adalah ". faktorial(5);

?>


<!-- ///=== Variable local Function ===\\\ -->
<?php
    function pangkatDua($a){
        $a = $a * $a;
    }
    $a = 20;
    echo 'Sebelum Nilai $a :'.$a;
    pangkatDua($a);
    echo '<br/>Sesudah Nilai $a :'.$a;
 ?>


<!-- ///=== Variable Global Function ===\\\ -->
<?php
    function pangkatDua($a){
        global $a;
        $a = $a * $a;
    }
    $a = 20;
    echo 'Sebelum Nilai $a :'.$a;
    pangkatDua($a);
    echo '<br/>Sesudah Nilai $a : '.$a;
?>


<br><br>


///=== Login Form – Fungsi Validasi ===\\\
<?php
function otentikasi($uname,$pass){

    if($uname=="admin"&& $pass=="123456"){
        return true;
    }else{
        return false;
    }
}
?>
