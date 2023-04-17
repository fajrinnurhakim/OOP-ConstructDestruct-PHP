<?php
class Motor
{
    public $merkMotor;

    public function __construct($merk)
    {
        $this->merkMotor = $merk;        
    }

    public function cetakMerk()
    {
        return $this->merkMotor;
    }
}

$motor1 = new Motor("Yamaha YZR 1");

echo $motor1->cetakMerk();

?>