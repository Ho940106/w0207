<?php

class Game {

    private $member = [];
    public function takepart(Animal $animal){

        $this->member[] = $animal;

    }

    public function warmup(){
        foreach($this->member as $v){
            $v -> warmup();
        }
    }

    public function start(){
        if($this->member[0]->speed > $this->member[1]->speed){
            echo $this->member[0]->name . "Win! ";
        } else if($this->member[0]->speed < $this->member[1]->speed){
            echo $this->member[1]->name . "Win! ";
        } else {
            echo "Draw";
        }
    }

    public function report(){
        foreach($this->member as $v)
        {
            echo $v->name . " ". $v->speed. "</br>";
        }
    }
}


?>