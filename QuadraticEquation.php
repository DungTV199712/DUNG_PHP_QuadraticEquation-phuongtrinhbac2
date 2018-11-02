<?php
class QuadraticEquation
{

    private $number1;
    private $number2;
    private $number3;
    public function __construct($number1,$number2,$number3)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->number3 = $number3;
    }
    public function getNumber1()
    {
        return $this->number1;
    }
    public function getNumber2()
    {
        return $this->number2;
    }
    public function getNumber3()
    {
        return $this->number3;
    }
    public function delta()
    {
        return ($this->number2 ** 2) - (4 * $this->number1 * $this->number3);
    }
//    public function getDiscriminant()
//    {
//        return $this->delta();
//    }
    public function getRoot1()
    {
        if ($this->delta() < 0){
            return 0;
        }
        return (-$this->number2 + pow($this->delta(),0.5))/(2 * $this->number1);
    }
    public function getRoot2()
    {
        if ($this->delta() < 0){
            return 0;
        }
        return (-$this->number2 - pow($this->delta(),0.5))/(2 * $this->number1);
    }
    public function getRoot3()
    {
        if ($this->delta() == 0) {
            return (-($this->number2) / (2 * $this->number1));
        }
        return (-($this->number2) / (2 * $this->number1));
    }
    function check()
    {
        if ($this->delta() > 0) {
            echo $this->getRoot1() . ' and ';
            echo $this->getRoot2();
        } elseif ($this->delta() == 0){
            echo $this->getRoot3();
        } else
            echo 'The equation has no roots';
    }
}
$quadraticEquation = new QuadraticEquation(1,4,3);
$quadraticEquation->check();