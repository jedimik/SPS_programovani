<?php
session_start();

// 1D asociativni pole
$_SESSION['pondeli']="Bylo Velikonocni pondeli";
$_SESSION['utery']="To venku snezelo.";


if(isset($_POST['Send']))
{
    //Asociativni pole
    // kazdy klic bude jako Prvni_Hodnota, Druha_hodnota, Treti_hodnota...
    // ke kazdemu klici bude jako value(hodnota) z textoveho pole

    $pole=array("Prvni_hodnota" => $_POST['value0'],
                "Druha_hodnota" => $_POST['value1'],
                "Treti_hodnota" => $_POST['value2'],
                "Crvta_hodnota" => $_POST['value3'],
                "Pata_hodnota" => $_POST['value4']
    );
    // 2D Asociativni pole
    $_SESSION['pole'] = $pole;

    /*
    $_SESSION['pole']=array("Prvni_hodnota" => $_POST['value0'],
                            "Druha_hodnota" => $_POST['value1'],
                            "Treti_hodnota" => $_POST['value2'],
                            "Crvta_hodnota" => $_POST['value3'],
                            "Pata_hodnota" => $_POST['value4'] );
    */ 

}






?>