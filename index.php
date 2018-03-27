<!--
Моё понятие инкапсуляции - упрощение работы с кодом и объектами , возможность модификации отдельных объектов,
сокрытие внутренних процессов.
-->

<?php

class Car
{
    private $color = 'white';
    private $wheelCount = 4;

    public function repaint($newColor)
    {
        $this->color = $newColor;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setWheelCount($number)
    {
        $this->wheelCount = $number;
    }
}

$car1 = new Car;
$car1->repaint('green');
$car2 = new Car;
$car2->setWheelCount(3);

class TV
{
    private $size;
    private $isSmart;
    private $price;

    public function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function __construct($size, $isSmart, $price)
    {
        $this->size = $size;
        $this->isSmart = $isSmart;
        $this->price = $price;
    }
}

$tv1 = new TV(40, true, 10);
$tv1->setPrice(5);
$tv2 = new TV(50, false, 7);
$tv2->setPrice(5);

class Pen
{
    private $color = 'blue';
    private $capacity = 10;

    public function replace($newColor)
    {
        $this->color = $newColor;
        $this->capacity = 10;
    }

    public function write()
    {
        if ($this->capacity === 0) {
            echo 'У вас закончились чернила';
            exit;
        }
        $this->capacity--;
    }
}

$pen1 = new Pen;
$pen1->replace('black');
$pen2 = new Pen;
$pen2->write();
$pen2->replace('red');

class Duck
{
    private $gender;
    private $weight;
    private $wings = 2;
    private $alive = true;

    public function shootWing()
    {
        $this->wings--;
    }

    public function shoot()
    {
        $this->alive = false;
    }

    public function __construct($gender, $weight)
    {
        $this->gender = $gender;
        $this->weight = $weight;
    }
}

$duck1 = new Duck('Селезень', 2);
$duck1->shoot();
$duck2 = new Duck('Утка', 2);
$duck2->shootWing();

class Goods
{
    private $name;
    private $price;
    private $discount = 0;

    public function declareSale($discount)
    {
        $this->discount = $discount;
        $newPrice = $this->price - ($this->price * $this->discount / 100);
        return $newPrice;
    }

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$commodity1 = new Goods('Печенье', 50);
$commodity1->declareSale(10);
$commodity2 = new Goods('Лимонад', 105);

class News
{
    private $headline;
    private $text;

    public function __construct($array, $id)
    {
        $this->headline = $array[$id][0];
        $this->text = $array[$id][1];
    }

    public function printNews()
    {
        echo '<h3>' . $this->headline . '</h3>';
        echo '<p>' . $this->text . '</p>';
    }
}

$newsArray = [
    ['Заголовок', 'Новость'],
    ['Заголовок', 'Новость'],
    ['Заголовок', 'Новость'],
    ['Заголовок', 'Новость']
];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
<?php
foreach ($newsArray as $id => $newsItem) {
    $item = new News($newsArray, $id);
    $item->printNews();
}
?>
</body>
</html>
