<?php

class Plant {
    public $title;
    protected $color;
    public $season;

    public function __construct($title, $color, $season)
    {
        $this->title = $title;
        $this->color = $color;
        $this->season = $season;

    }

    private function someCalculation()
    {
    }


}


class Rosa extends Plant{

    public function anothericCalc()
    {
        $this->color = 'Anith';
    }

}

$rosa = new Rosa('Rosa', 'Red', 'spring');
$plant = new Plant('Tulpan', 'Purple', 'spring');

echo $plant->title;
















//class Person
//{
//    public $name = 'Viktor';
//
//    public $age = 20;
//
//    public $isMarried = true;
//
//    public function sayHello()
//    {
//        if ($this->name == "Viktor"){
//            echo "\nHello Viktor!";
//        }
//        else {
//            echo "\nHello my friends!";
//        }
//    }
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//    public function getAge()
//    {
//        return $this->age;
//    }
//}
//
//$person = new Person();
//$person2 = new Person();
//$person3 = new Person();
//
//
//$person2->setName("Vovka");
//$person3->setName("Vladik");
////echo $person->age;
//echo $person->name;
//echo $person2->name;
//echo $person3->name;
//
//
//echo $person->age;
//$person->setAge(25);
//echo $person->age;
//
//echo $person->getAge();
//echo $person->getName();
//
//class Dog2 {
//    public $name = 'Собака';
//    public $age = 0;
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getAge()
//    {
//       return $this->age;
//    }
//
//    public function setName($newName)
//    {
//        $this->name = $newName;
//    }
//
//    public function setAge($newAge)
//    {
//        $this->age = $newAge;
//    }
//}
//
//$dog2 = new Dog2();
//
//echo $dog2->getName();
//$dog2->setName("Бобик");
//echo $dog2->getName();
//echo $dog2->getAge();
//$dog2->setAge(25);
//echo $dog2->getAge();
//
//class Cat
//{
//    public $name = "Кошка";
//    public $age = 5;
//
//    public function setAge($newAge)
//    {
//        $this->age = $newAge;
//    }
//    public function setName($newName)
//    {
//        $this->name = $newName;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//}
//
//$cat = new Cat();
//
//echo $cat->getName();
//$cat->setName("Морожка");
//echo $cat->getName();
//echo $cat->getAge();
//$cat->setAge(10);
//echo $cat->getAge();


//$person2->sayHello();
//$person->sayHello();
//$person3->sayHello();
//$person->name = "Ivan";
//$person->sayHello();
//
//
//
//class Dog
//{
//    public $name = "GavGaV";
//
//    public function sayName()
//    {
//        echo $this->name;
//    }
//}
//
//
//$dog1 = new Dog();
//
//$dog1->sayName();
//
//
//
//
//
//
//
//


//abstract class Person
//{
////    public $name, $age, $job;
//
//    public function sayHello()
//    {
//        echo 'hello';
//    }
//
//    public static $name;
//
//    public static function sum($a, $b)
//    {
//        echo $a + $b;
//    }
//    public static function setName($name): void
//    {
//        self::$name = $name;
//    }
//    public function __construct($name, $age, $job)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->job = $job;
//    }
//}

//Person::sum(10,20);
//Person::setName('Vasya');
//echo Person::$name;

//class Developer extends Person
//{
//    public $timPerWeek;
//
//    public function __construct($name, $age, $job, $timPerWeek)
//    {   $this->timPerWeek = $timPerWeek;
//        parent::__construct($name, $age, $job);
//    }
//}
//
//$developer = new Developer('Viktoria',18,'backend','20');
//echo $developer->name;


//class Developer extends Person
//{
//    public $timPerWeek;
//    public function work()
//    {
//        echo 'developer is working';
//    }
//
//    public function __construct($name, $age, $job, $timPerWeek)
//    {
//        parent::__construct($name, $age, $job);
//        $this->timPerWeek = $timPerWeek;
//    }
//}
//
//class Manager extends Person
//{
//    public function work()
//    {
//        echo 'manager is working';
//    }
//}

//$manager = new Manager('Martin', 21, 'manager');
//$manager2 = new Manager('Nikita', 25, 'jun-manager');
//$developer = new Developer('Nikita', 25, 'developer', 20);
//echo $developer->timPerWeek;


//echo $manager->name;
//echo $manager2->name;
//$manager->work();
//$manager->sayHello();

//}class Person {
//    public $name = "Степан";
//    public $age = 20;
//    public $hobby = 'Sport';
//    public $isMarried = "Yes";
//
//    public function __construct($name, $age, $hobby)
//    {
////        echo "CONSTRUCTOR";
//        $this->name = $name;
//        $this->age = $age;
//        $this->hobby = $hobby;
//    }
//
//}

//$person = new Person('Viktor', 20, 'football');


//echo $person->name;
//echo $person->age;
//echo $person->hobby;

//class Shaurma
//{
//    public $main;
//    public $sauce;
//    public function __construct($main, $sauce)
//    {
//        $this->main = $main;
//        $this->sauce = $sauce;
//
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getMain()
//    {
//        return $this->main;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getSauce()
//    {
//        return $this->sauce;
//    }
//}
//
//$point1 = new Shaurma('chiken', 'mayonnaise');

//echo $point1->main;
//echo $point1->getMain();
//echo $point1->getSauce();


//class Shaurma2 {
//    public $name;
////    public $product = [
////        'main' => "kitchen",
////        'sup' => 'chees',
////    ];
//
//    public function __construct($product)
//    {
//        foreach ($product as $key => $item) {
//            echo $key, $item;
//        }
//    }
//}
//
//public $product = [
//    'main' => "kitchen",
//    'sup' => 'chees',
//];
//
//$point2 = new Shaurma2();


//
//
//function sayHello()
//{
//    echo 'hello';
//
//}
//
//function sayName($name)
//{
//    echo $name;
//}
//
//function getSum($a, $b)
//{
//    echo "Hello getSum \n";
//    $sum = $a + $b;
//    return 100;
//}
//
//function getDouble($number)
//{
//    $number *= $number;
//    echo $number . "";
//    return $number;
//}
//
//function sayFIO($name, $middle_name, $surname)
//{
//    echo $surname . $name . $middle_name;
//}

//sayHello();

//sayName("\nStepan \n");
//
//
//double(5);
//
//sayFIO(" Степан ", "Геннадьевич", " Баткевич");
//
//
//$result = getSum(55, 10);
//echo $result + 35;
//
//
//
//
//getDouble(100);
//

//$person = [
//    'name' => "Stepan",
//    'age' => 20,
//    'hobby' => "Footbool",
//    'is_married' => true,
//    "pet" => 'dog',
//    'pet_name' =>"Serega"
//];
//
//$person['hobby2'] = 'swimming'; // добавление хоббии
//
//unset($person['hobby2']); // удаление хобби
//
//$person['hobby'] = 'gym';  изменение хобби

//print_r($person);
//
//$person2 = [
//  'name' => "Stepan",
//  'age' => 23,
//  'hobby' => "Football",
//  'ismarried' => true,
//  'pet' => 'dog',
//  'pet_name' => 'Serega',
//];
//
//print_r($person2);


//$name = "Stepan";
//$age = 23;
//$hobby = "Footbool";
//$isMarried = true;
//$pet = "dog";
//$petName = "Serega";
//
//print_r($person['name']);


//echo $name . "\n";
//echo $age. "\n";
//echo $hobby. "\n";
//echo $isMarried. "\n";
//echo $pet. "\n";
//echo $petName. "\n";
//

//$person3 = [
//    'name' => 'Косясик',
//    'age' => 21,
//    'hobby' => "IT",
//    'is_married' => true,
//    'pet' => 'cat',
//    'pet_name' => 'Bober',
//];


//    $persons = [$person1 = ['name' => "Stepan",
//    'age' => 20,
//    'hobby' => "Footbool",
//    'is_married' => true,
//    "pet" => 'dog',
//    'pet_name' => "Serega",
//    'cars' => ['jugil', 'lambo', 'volga'],],
//    $person2 = ['name' => "IVAN",
//        'age' => 23,
//        'hobby' => "Football",
//        'ismarried' => true,
//        'pet' => 'dog',
//        'pet_name' => 'Serega',],
//    $person3 = ['name' => 'Косясик',
//        'age' => 21,
//        'hobby' => "IT",
//        'is_married' => true,
//        'pet' => 'cat',
//        'pet_name' => 'Bober',]
//    ,
//];


//foreach ($persons as $person){
//    echo print_r($person['name']);


//}
//    echo $key . ": ";
//    echo $item . "\n";
//}


//
//print_r($person3);

//$name2 = "Колясик";
//$age2 = 21;
//$hobby2 = "IT";
//$isMarried2 = true;
//$pet2 = "cat";
//$petName2 = "Bober";
//
//echo $name2 . "\n";
//echo $age2 . "\n";
//echo $hobby2 . "\n";
//echo $isMarried2 . "\n";
//echo $pet2 . "\n";
//echo $petName2 . "\n";
//

//$person4 = [
//    'name' => 'Сергей',
//    'age' => '25',
//    'hobby' => 'IT-backend',
//    'is_married' => true,
//    'pet' => 'Рыбка',
//    'pet_name' => "Лола",
//];
//
//print_r($person4);

//$name3 = "Сергей";
//$age3 = 25;
//$hobby3 = "IT-backend";
//$isMarried3 = true;
//$pet3 = "Рыбка";
//$petName3 = "Лола";
//
//echo $name3 . "\n";
//echo $age3 . "\n";
//echo $hobby3 . "\n";
//echo $isMarried3 . "\n";
//echo $pet3 . "\n";
//echo $petName3 . "\n";
//
//
//$person5 = [
//    'name' => 'Лера',
//    'age' => 32,
//    'hobby' => 'Дизайнер',
//    'is_married' => false,
//    'pet' => 'cat',
//    'pet_name' => 'Лиса',
//];
//
//print_r($person4);
//
//$person6 = [
//    'name' => 'Джон Сина',
//    'age' => 50,
//    'hobby' => 'Медийник',
//    'is_married' => true,
//    'pet' => 'null',
//    'pet_name' => 'null',
//    'adress' => 'USA',
//    'many' => 'BIG MANY'
//];
//
//print_r($person5);
//
//$person7= [
//    'name' => 'Lolik',
//    'age' => 5,
//    'hobby' => 'Дед-сад',
//    'is_married' => true,
//    'pet' => '',
//    'pet_name' => '',
//    'address' => 'Magadan',
//    'friends' => 'low',
//];
//
//print_r($person6);

//$person8 = [
//    'name' => 'LeanJe',
//    'age' => 32,
//    'hobby' => 'Музыка',
//    'address' => 'Москва',
//    'friends' => 'high',
//];

//$massiv_perason = [
//    $person5 = [
//        'name' => 'Лера',
//        'age' => 32,
//        'hobby' => 'Дизайнер',
//        'is_married' => false,
//        'pet' => 'cat',
//        'pet_name' => 'Лиса',
//    ],
//    $person6 = [
//        'name' => 'Джон Сина',
//        'age' => 50,
//        'hobby' => 'Медийник',
//        'is_married' => true,
//        'pet' => 'null',
//        'pet_name' => 'null',
//        'adress' => 'USA',
//        'many' => 'BIG MANY'
//    ],
//    $person7= [
//        'name' => 'Lolik',
//        'age' => 5,
//        'hobby' => 'Дед-сад',
//        'is_married' => false,
//        'pet' => '',
//        'pet_name' => '',
//        'address' => 'Magadan',
//        'friends' => 'low',
//    ],
//    $person8 = [
//        'name' => 'LeanJe',
//        'age' => 32,
//        'is_married' => false,
//        'hobby' => 'Музыка',
//        'address' => 'Москва',
//        'friends' => 'high',
//    ]
//];

//foreach ($massiv_perason as $item) {
////    echo print_r(($item), true);
//    echo print_r($item['name'], true) . "\n";
//}

//foreach ($massiv_perason as $item) {
////    echo print_r(($item), true);
//    echo print_r($item['age'], true) . "\n";
//}

//$name = "Boris";
//$age = 30;
//$flat = '20';

// ==
// ===
// && и
// || или
// ! не
// > < >= <=

//if ($name == 'Boris1'){
//    echo "Yes";
//}
//else {
//    echo "No";
//}

//if ($flat === 20 || $flat == 20) {
//    echo "Yes";
//} else {
//    echo "No";
//}


//foreach ($massiv_perason as $item){
//    if (print_r($item['is_married'] == true, true)){
//        echo print_r($item['name']) . " Молодец \n";
//    }
//    else {
//        echo print_r($item['name'] . " Плохо! \n", true);
//    }
//
//    foreach ($massiv_perason as $item){
//        echo print_r($item['is_married'];
//    if (print_r($item['is_married'])){
//        echo print_r($item['name']) . " Молодец \n";
//    }
//    else {
//        echo print_r($item['name'] . " Плохо! \n", true);
//    }
//    if (echo print_r($item['is_married'])){
//        echo "Molodes \n" ;
//    }
//    else {
//        echo "Ne molodes \n ";
//    }
//}


//print_r($person7);

//foreach ($person7 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//foreach ($person as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//foreach ($person2 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//foreach ($person3 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($person4 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($person5 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($person6 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($person7 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($person8 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}


//$name4 = "Лера";
//$age4 = 32;
//$hobby4 = "Дизайнер";
//$isMarried4 = false;
//$pet4 = "cat";
//$petName4 = "Лиса";
//
//echo $name4 . "\n";
//echo $age4 . "\n";
//echo $hobby4 . "\n";
//echo $isMarried4 . "\n";
//echo $pet4 . "\n";
//echo $petName4 . "\n";
//


//foreach ($person as $key => $item){
//    echo $key . ": ";
//    echo $item . "\n";
//}
//


//$new_person = [
//    'name' => 'Stepan-IT',
//    'age' => '23',
//    'city' => 'Novosibirs',
//    'create' => 'php-code',
//];

//foreach ($new_person as $key => $item){
//    echo $key . ": ";
//    echo $item . "\n";
//}
