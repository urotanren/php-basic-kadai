<?php
    class Food{
        private $name;
        private $price;

        // public function show_price(){
        //     echo $this->price . '<br>';
        // }

        public function set_price(int $price){
            $this->price = $price;
        }
        public function show_price(){
            echo $this->price . '<br>';
        }

        public function __construct(string $name, int $price){
            $this->name =$name;
            $this->price =$price;
        }
    }

    $food = new Food('potato',250);
    print_r($food);
    

    echo '<br>';

    class Animal{
        private $name;
        private $height;
        private $weight;

        // public function show_height(){
        //     echo $this->height . '<br>';
        // }

        public function set_height(int $height){
            $this->height = $height;
        }
        public function show_height(){
            echo $this->height . '<br>';
        }

        public function __construct(string $name, int $height, int $weight){
            $this->name =$name;
            $this->height =$height;
            $this->weight =$weight;
        }
    }

    $animal = new Animal('dog',60,5000);
    print_r($animal)

    // $apple = new Food();
    // $dog = new Animal();

    // $apple->set_price(250);
    // $dog->set_height(60);

    // $apple->show_price();
    // $dog->show_height();
?>
