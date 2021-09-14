<?php

$var =1;


class Chuvak{
    function me(){
        echo "!";
    }
};
echo "Ла-ла-ла {$var} !!!";//ввести переменную в строку и подставить в переменную
echo "Ла {$Chuvak->me}";
// конструктор дочернего класса, использующий родительский метод

public function __ construct(
    string $title,
    string $firstName,
    string $mainName,
    float $price,
    int $playLength
    ) {
    parent::__ construct(
    $title,
    $firstName,
    $mainName,
    $price
    ) ;
    $this->playLength = $playLength;
    };


    


?>