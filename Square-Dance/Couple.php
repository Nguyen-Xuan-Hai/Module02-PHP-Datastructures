<?php


class Couple
{
    public function __construct()
    {
    }
    function pairing($listOne,$listTwo){
        $pair = array();
        if (count($listOne) != 0 && count($listTwo) != 0){
            $man = $listOne->shift();
            $woman = $listTwo->shift();
            array_push($pair,$man->name);
            array_push($pair,$woman->name);
        }else{
            array_push($pair,"mot trong hai dnah sach chua co nguoi");
        }
        return $pair;
    }
    function wait($listOne,$listTwo){
        $number = count($listOne) - count($listTwo);
        return "Wait pairing" .abs($number);
    }
}