<?php

$time1 = $_POST['time1'];
$time2 = $_POST['time2'];
$golsTime1 = $_POST['gols1'];
$golsTime2 = $_POST['gols2'];

if (!empty($_POST['gols1']) && !empty($_POST['gols2']) && !empty($_POST['time1']) && !empty($_POST['time2'])) {
    if($golsTime1>$golsTime2){
        echo"$time1 Venceu!!!";

    }else if($golsTime2>$golsTime1){
        echo"$time2 Venceu!!!";
        
    }else {
        echo"$time1 e $time2 Empataram!!!";
    }
}else {
    echo "Preencha os dados!!!";
}



?>
