<?php
function e(){
    echo "This is e() \n";
};
function f(){
    echo "This is f()  \n";
    return e;
};
function g(){
    echo "This is g() \n";
    return f;
};

g();
echo "</br>";
echo "*********** \n";
echo "</br>";
g() ();
echo "</br>";
echo "************ \n";
echo "</br>";
g() () ();
