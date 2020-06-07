<?php
$object = new Tiger();
echo "Tiger have ...<br>";
echo "Fur: " . $object->fur . "<br>";
echo "Stripes: " . $object->strip . "<br>";

class wildcat{
    public $fur;
    function __construct()
    {
        $this->fur = "true";
    }
}
class Tiger extends wildcat {
    public $strip;
    function __construct()
    {
        parent::__construct();
        $this->strip = "true";
    }
}