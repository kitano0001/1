<?php
class User{
    public $name;
    public $hp;
    public $attack;
    public $defense;
    public $role;


    public function displayStatus(){
        echo"名前：".$this->name."<br>";
        echo"体力：".$this->hp."<br>";
        echo"攻撃力：".$this->attack."<br>";
        echo"防衛力：".$this->defense."<br>";
        echo"役職：".$this->role."<br>";
    }
}

    class Hero extends User{

        public $equipment;
        public function displayEquipment() {
            echo"Heroの装備は".$this->equipment."です"."<br>";
        }

        function attack() {
            echo$this->name."の攻撃"."<br>";
        }

    }

    class Enemy extends User{
        public $magic;
        public function displayMagicType(){
            echo$this->name."は".$this->magic."魔法使いです"."<br>";
        }
    }

    $hero = new Hero();
    $hero->name ="ヒーロー";
    $hero->hp = 100;
    $hero->attack = 30;
    $hero->equipment = "勇者の剣";
    
    $enemy = new Enemy();
    $enemy->name = "魔術師";
    $enemy->hp = 100;
    $enemy->attack = 30;
    $enemy->magic = "炎";

    $hero ->displayStatus();
    $enemy->displayStatus();
echo"------------------------<br>";
    $enemy->displayMagicType();
echo"-----------------------<br>";
    $hero->displayEquipment();
    $hero->attack();






?>
