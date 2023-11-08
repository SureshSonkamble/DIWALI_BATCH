<?php
$rno=$_POST['rno'];
$nm=$_POST['nm'];
$m=$_POST['mar'];
$h=$_POST['hin'];
$e=$_POST['eng'];
$mat=$_POST['mat'];
$s=$_POST['sci'];
$his=$_POST['his'];

echo $rno."<br>";
echo $nm."<br>";
echo $m."<br>";
echo $h."<br>";
echo $e."<br>";
echo $mat."<br>";
echo $s."<br>";
echo $his."<br>";

$ttl=$m+$h+$e+$mat+$s+$his;
echo "Total Marks:".$ttl."<br>";
$per=$ttl/6;
echo "Percentage(%):=".$per."<br>";
$gd="";
if($per>=75){
    $gd="O";
}else 
if($per<75 && $per>=60){
    $gd= "A";
}
else 
if($per<60 && $per>=50){
    $gd= "B";
}
else 
if($per<50 && $per>=40){
    $gd= "C";
}else{
    $gd= "FAILS";
}

echo "Grade:=".$gd;



?>