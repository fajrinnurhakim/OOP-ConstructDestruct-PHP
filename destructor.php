<?php

class Motor
{
    public function mulai(){
        echo "mulai...";
    }
    public function __destruct()
    {
        echo "selesai..";
    }
}

$motor = new Motor();
$motor -> mulai();
?>