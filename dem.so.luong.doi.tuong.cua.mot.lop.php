<?php
class Application{
    private string $name;
    private int $x;
    public static  int $count = 0;

    public function __construct($name,$x)
    {
        $this->name =$name;
        $this->x = $x;
        self::$count++;
    }

    public function __toString():string
    {
       return 'Application name: ' . $this->name.$this->x;
    }

}
echo "total objects count " . Application::$count ."<br>";
$app1 = new Application("App one",20);
echo "total objects count " . Application::$count ."<br>";
$app2 = new Application("App two",21);
echo "total objects count " . Application::$count ."<br>";
echo $app1."<br>";
echo $app2;