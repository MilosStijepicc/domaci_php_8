<?php


    $automobili = [
        "Zastava" => [
            "model" => "Yugo 55",
            "godiste" => 1995
        ],
        "Renault" => [
            "model" => "Megane RS",
            "godiste" => 2014
        ],
        "Toyota" => [
            "model" => "Rav4",
            "godiste" => 2021
        ]
    ];

    $godina = date("Y");
    foreach($automobili as $marka => $auto){
        $godiste = $godina - $auto["godiste"];
        $status = "";
        if($godiste <= 5){
            $status = "nov auto.";
        }
        if($godiste >= 6 and $godiste <= 10){
            $status = "noviji auto.";
        }
        if($godiste >= 11 and $godiste <= 19){
            $status = "star auto.";
        }
        if($godiste >= 20){
        $status = "old timer.";
    }
    echo "$marka {$auto['model']} je $status";
    echo "<br>";
}


?>