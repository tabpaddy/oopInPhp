<?php
class Calc{
    //propertirs
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int$num1, int$num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculator() {
        //method to calculate the calte the num for us
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 +  $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 -  $this->num2;
                return $result;
                break;
            case 'Div':
                $result = $this->num1 /  $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 *  $this->num2;
                return $result;
                break;
            
            default:
               echo "Error";
                break;
        }
    }
}


?>