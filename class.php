<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>admin</title>
</head>
<body>

<p>Автомобили</p>
<hr/>


<?php 
class Car
{
	public $make;
	public $model;
	public $color;
	
	public function setParam($valueMake, $valueModel, $valueColor)
	{
		$this->make = $valueMake;
		$this->model = $valueModel;
		$this->color = $valueColor;
	}

	public function getParam()
	{
    echo "Марка:". " " .$this->make . "<br/>" ;
    echo "Модель:". " " .$this->model. "<br/>";
    echo "Цвет:". " " .$this->color. "<br/>" . "<br/>";
	}
		
}

$lada = new Car;
echo $lada-> setParam("Лада", "2114", "черная");
echo $lada->getParam();


$prior= new Car;

echo $prior-> setParam("Лада", "priora", "белая");
echo $prior->getParam();

?>


<p>Телевизоры</p>
<hr/>


<?php

class tv
{	
	public $model;
	public $cool
	public function setParam( $valueModel, $valueCool)
	{
	$this->model = $valueModel;
	$this->cool = $valueCool;
	}
public function getParam()
{
		   
			echo "Модель:". " " .$this->model. "<br/>";
			echo "Качество:". " " .$this->cool. "<br/>" . "<br/>";
			}
		}

		$tv1 = new tv;
		echo $tv1-> setParam("Samsung", "FullHD");
		echo $tv1->getParam();


		$tv2 = new tv;

		echo $tv2-> setParam("квн", "Плохое");
		echo $tv2->getParam();

?>

 
<p>Шариковая ручка</p>
<hr/>

<?php 

class pen
			{
	public $pen;
	public $type;
    public function setParam( $valuePen, $valueType){
$this->pen = $valuePen;
$this->type = $valueType;
				}
    public function getParam()
				{
   echo "Цвет:". " " .$this->pen. "<br/>";
				echo "Тип:". " " .$this->type. "<br/>" . "<br/>";
				}
			}

			$pen_1 = new pen;
			echo $pen_1-> setParam("черная", "Автоматическая");
			echo $pen_1->getParam();


			$pen_1pen2 = new pen;

			echo $pen_1pen2-> setParam("Синий", " Не автоматичсекая");
			echo $pen_1pen2->getParam();

?>

<p>Утка</p>
<hr/>


<?php
class duck
			{
		public $color;
		public $type;

		public function setParam( $valueColor, $valueType)
		{
		$this->color = $valueColor;
		$this->type = $valueType;
		}
   public function getParam()
	{
	 echo "Цвет :". " " .$this->color. "<br/>";
	 echo "Тип:". " " .$this->type. "<br/>" . "<br/>";
    }
	 }
    
	$duck1 = new duck;
	echo $duck1-> setParam("желтая", "резиновая");
    echo $duck1->getParam();

	$duck2 = new duck;

	echo $duck2-> setParam("коричневая", "Дикая");
	echo $duck2->getParam();

?>


<p>Товар</p>
<hr/>

<?php
class item
{
						
public $name;
public $price;
public function setParam( $valueName, $valuePrice)
{
							
	$this->name = $valueName;
	$this->price = $valuePrice;
}

public function getParam()
	{
	 echo "Название товара :". " " .$this->name. "<br/>";
	 echo "Цена". " " .$this->price. "<br/>" . "<br/>";
	}
}

$item1 = new item;
echo $item1-> setParam("Творог", "60 руб.");
echo $item1->getParam();


$item2 = new item;

echo $item2-> setParam("Каша гречнивая", "18 руб.");
echo $item2->getParam();
?>

</body>
</html>

Плюсы и минусы
	<hr/>
<br />
