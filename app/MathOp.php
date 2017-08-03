<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MathOp
 *
 * @author sergio
 */
namespace App;

class MathOp {
    //put your code here
    public function Plus($num1, $num2){
        return $num1+$num2;
    }
    public function Minus($num1, $num2){
        return $num1-$num2;
    }
    public function Multiplication($num1, $num2){
        return $num1*$num2;
    }
    public function Between($num1, $num2){
        if($num1==0)
            return "NA";
        return $num1 / $num2;
    }
}
