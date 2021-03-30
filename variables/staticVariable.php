<?php
    //sample 1
    function counter(){
        $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }
    //here the value gets initialize after after again
    counter();
    counter();
    counter();
    counter(); 

    //sample 2

    print "<h1>Static variable</h1>";

    function static_counter(){
        static $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }

    static_counter();
    static_counter();
    static_counter();
    static_counter();


?>