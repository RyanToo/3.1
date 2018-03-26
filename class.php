<?php 

interface FirstInterFace{
	public function getPar();	
}

class Object implements FirstInterFace
 {
  public $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
public function getPar(){
		$info =  "{$this->name}";
		    return $info;
	}
	
  }


 ?>
<p>Автомобили</p>
<hr/>


<?php 
class Car extends Object
{
	public $marka;
	public $color;

	public function __construct($name, $marka, $color)
	{
		parent::__construct($name);
		$this->marka = $marka;
		 $this->color = $color;
	}

	public function getPar()
	{
		$info = parent::getPar();
		$info .= "{$this->marka} "."{$this->color}". "<br/>";
		return $info;

	}
}

$a = new Car("bmv", "X6", "Черный");
echo $audi->getPar();

$rr = new Car("rollRous", "fantom", "белый");
echo $honda->getPar();

?>


<p>Телевизоры</p>
<hr/>


<?php

class tv extends Object
{
	
	public $quality;

	public function __construct($name, $quality)
		{
			parent::__construct($name);
			$this->quality = $quality;
		}

	public function getParam()
			{
				$info = parent::getPar();
				$info .= "{$this->quality}". "<br/>";
				return $info;
		   
			}
}

$tv1 = new Tv("samsung", "HD");
echo $tv1->getPar();

$tv2 = new Tv("samsung", "FullHD");
echo $tv2->getPar();

 ?>

 
 <p>Шариковая ручка</p>
<hr/>


<?php 

class Pen extends Object
{
	
	public $inkColor;
	
	public function __construct($name, $col)
	{
		parent::__construct($name);
		$this->inkColor = $col;
	}

	public function getPar()
	{
		$info = parent::getPar();
		$info .= "{$this->inkColor}". "<br/>";
		return $info;
    }
}

$pen1 = new Pen("Шариковая ручка ", "черная");
echo $pen1->getPar();

$pen2 = new Pen("Шариковая ручка", "синяя");
echo $pen2->getPar();

 ?>

 <p>Утка</p>
<hr/>


<?php

class duck extends Object
{
	
	public $color;
	
	public function __construct($name, $color)
	{
		parent::__construct($name);
		$this->color = $color;
	}

	public function getPar()
	{
		$info = parent::getPar();
		$info .= "{$this->color}". "<br/>";
		return $info;
   
    
	}
}

$duck1 = new duck("резиновая", "желтая");
echo $duck1->getPar();

$duck2 = new duck("Дикая", "коричневая");
echo $duck2->getPar();

 ?>


 <p>Товар</p>
<hr/>


<?php
class Item extends Object
{
	public $price;

	public function __construct($name, $price)
	{
		parent::__construct($name);
		$this->price = $price;
	}

	public function getParam()
	{
		$info = parent::getParam();
		$info .= "{$this->price}". "<br/>";
		return $info;
    }
}

$item1 = new Item("творог", "47 руб.");
echo $item1->getPar();


$item2 = new Item("Греча", "18 руб.");
echo $item2->getPar();

 ?>