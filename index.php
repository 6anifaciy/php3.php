<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Животные</title>

</head>

<body>

    <?php
    class Animal
    {
        public $weight;
        public $age;
        public $color;

        public function __construct($weight, $age, $color)
        {
            $this->weight = $weight;
            $this->age = $age;
            $this->color = $color;
        }

        public function displayInfo()
        {
            echo "<p>Вес: {$this->weight} кг, Возраст: {$this->age} лет, Окрас: {$this->color}</p>";
        }
    }

    class Lion extends Animal
    {
        public $maneLength;

        public function __construct($weight, $age, $color, $maneLength)
        {
            parent::__construct($weight, $age, $color);
            $this->maneLength = $maneLength;
        }

        public function roar()
        {
            echo "<p class='unique'>Лев с длиной гривы {$this->maneLength} см издаёт мощный рёв!</p>";
        }
    }


    class Rabbit extends Animal
    {
        public $earLength;

        public function __construct($weight, $age, $color, $earLength)
        {
            parent::__construct($weight, $age, $color);
            $this->earLength = $earLength;
        }

        public function jump()
        {
            echo "<p class='unique'>Кролик с ушами длиной {$this->earLength} см высоко прыгает!</p>";
        }
    }


    class Wolf extends Animal
    {
        public $packSize;

        public function __construct($weight, $age, $color, $packSize)
        {
            parent::__construct($weight, $age, $color);
            $this->packSize = $packSize;
        }

        public function howl()
        {
            echo "<p class='unique'>Волк из стаи, состоящей из {$this->packSize} волков, воет на луну!</p>";
        }
    }


    $lion = new Lion(190, 5, 'золотистый', 25);
    $rabbit = new Rabbit(3, 2, 'белый', 10);
    $wolf = new Wolf(50, 4, 'серый', 8);

    echo "<div class='animal'><h2>Лев</h2>";
    $lion->displayInfo();
    $lion->roar();
    echo "</div>";

    echo "<div class='animal'><h2>Кролик</h2>";
    $rabbit->displayInfo();
    $rabbit->jump();
    echo "</div>";

    echo "<div class='animal'><h2>Волк</h2>";
    $wolf->displayInfo();
    $wolf->howl();
    echo "</div>";
    ?>

</body>

</html>