<?php
$anon_class_obj = new class{
    public  $greeting  = 'hello';
    public  $id = 754;
    const SETT = 'some configuration';
    public function getValue(){
        return 'Some return value';
    }
    public function getValueWithArg($strl){
        return 'return value is ' .$strl;
    }
};

echo '<br>';
echo $anon_class_obj ->greeting;
echo '<br>';
echo $anon_class_obj ->id;
echo '<br>';
echo $anon_class_obj::SETT;
echo '<br>';
echo  $anon_class_obj->getValue();
echo '<br>';
echo  $anon_class_obj->getValueWithArg('Aptech');
echo '<br>';
echo '<br>';
