
<?php 
interfaceShop {
	function getFullDescription();
	function getDeliverPrice();
	function getDiscount();
}
trait Construct {
	function __construct($name, $type, $price, $title){
		parent::__construct($name, $price, $title);
		$this->type = $type;
	}	
} 
class Product implements Shop {
	
 protected $value = 10;
 public function __construct($name, $price, $title){
    $this->name = $name;
    $this->price = $price;
    $this->title = $title;	
    }
	
 function getDiscount(){
		if ($this->weight) {
			if ($this->weight > 10) {
				return round($this->price -($this->price * $this->value / 100) );
			}else{
				return $this->price;
			}
			
		}elseif($this->weight == null){
			return round($this->price -($this->price * $this->value / 100) );
		}
	}
		function getDeliverPrice(){
			if($this->getDiscount() == $this->price){
				return "250 руб.";
			}else{
				return "300 руб.";
			}
		 } 
  function getFullDescription(){
	echo "{$this->name} {$this->type} цена  {$this->getDiscount()} руб.  <br/> {$this->title}  <br/> цена доставки {$this->getDeliverPrice()}";
				}  
				
			}
class bookShop extends Product {

  public $type;
  use Construct;

}
		echo "<hr />";
		$book = new bookShop("Книга ", "Все о правах человека ", "185 руб  ", "Сделано в России" );
		$book -> getFullDescription();
		echo "<hr />";
			echo "<hr />";
			$book1 = new bookShop("Книга ", "Хочу все знать", " 156 руб  ", "Сделано в России");
			$book1 -> getFullDescription();
			
			
			echo "<hr />";
			
			
class window extends Product {

  public $type;
  use Construct;

}
	echo "<hr />";
	$window1 = new window("окно", "с двумя камерами", "7000  ", "Сделан в России" );
	$window1 -> getFullDescription();
	echo "<hr />";
	echo "<hr />";
	$window2 = new  window("окно", "с тремя камерами", "9000 ", "Сделан в России");
	$window2 -> getFullDescription();
	
echo "<hr />";


class gvozd extends Product {

	public $weight;
	use Construct;
	
 function __construct($name, $weight, $price, $title){
    parent::__construct($name, $price, $title);
	$this->weight = $weight;
		
   }	

echo "<hr />";
$gvozd1 = new gvozd("гвозди (3 кг) ", "3 кг ", "345  ", "Сделан в России" );
$gvozd1 -> getFullDescription();
echo "<hr />";
echo "<hr />";
$gvozd2  = new gvozd("гвозди (5 кг) ", "5 кг ", "440  ", "Сделан в России");
$gvozd2 -> getFullDescription();

echo "<hr />";
?>


Наследование — это хорошо зарекомендовавший себя принцип программирования, и PHP использует этот принцип <br /> в своей объектной модели. Этот принцип повлияет на то, как многие классы и объекты связаны друг с другом.<br />
Абстрактный класс — это «заготовка» класса: реализовано большинство методов (включая внутренние), кроме<br /> нескольких. Эти несколько нереализованных методов вполне могут быть внутренними методами класса,<br /> они лишь уточняют детали имплементации. Абстрактный класс — средство для повторного использования кода, средство, чтобы указать, какой метод обязан быть перекрыт для завершения написания класса.<br />
<br /><br />
Интерфейс же — это своего рода контракт: интерфейсы используются в определениях чтобы указать, что объект<br />, который будет использован на самом деле, должен реализовывать (для входных параметров) или будет <br />гарантированно реализовывать (для выходных параметров) набор методов и (что намного важнее!) иметь <br />определённую семантику. Интерфейс вполне может быть и пустым, тем не менее, имплементировать <br />интерфейс означает поддерживать данную семантику.

 
