<?php
class MyClass
{
    public $pub = 'Public';
    protected $pro = 'Protected';
    private $priv = 'Private';

    function printHello()
    {
        echo $this->pub."\n";// 1
        echo $this->pro."\n";// 2
        echo $this->priv."\n";// 3
    }
}

$obj = new MyClass();
echo $obj->pub."\n"; // 4
echo $obj->pro."\n"; // 5
echo $obj->priv."\n"; // 6
$obj->printHello();

class MyClass2 extends MyClass
{

    function printHello()
    {
        echo $this->pub."\n"; // 7
        echo $this->pro."\n"; // 8
        echo $this->priv."\n"; // 9
    }
}

echo("--- MyClass2 ---\n");
$obj2 = new MyClass2();
echo $obj2->pub."\n"; // 10
echo $obj2->pro."\n"; // 11
echo $obj2->priv."\n"; // 12
$obj2->printHello(); // Shows Public, Protected, Undefined
?>
