@extends('template.default')

@section('title','my view')
@section('content')
<h1>My view</h1>
<?php
    echo "My view Content";
    echo "<br>";
    echo "Line 2";
    ?>
    <br>
    <?php
    $myval = "Hello PHP";
    ?>
    <br>
    <?php
    echo $myval;
    $myarry = array(1,2,3,4,5);
    echo $myarry[0];
    ?>
    <?php
        $myarry4 = [
            "name" => "john",
            "age" => 30,
            "city" => "New York",
            0,1
    ];
    print_r($myarry4);
    foreach($myarry4 as $key => $value){
        echo "<br>key: " . $key . ", value: " . $value;
    }

    foreach($myarry4 as $value){
        echo "<br>value: " . $value;
    }

    $myval = "A";
    $myVal = "F";
    for($i=0; $i<10; $i++){
        echo $myval++;
        echo "<br>";
    }

    function myFunction() {
        return "My function called";
    }

    echo mYfUnCtIoN();
    echo "<br>";

    $a = 10;
    if($a <10) {
        echo "a<10";
    }
    else

    if ($a==10) {
        echo "a=10";
    }
    else {
        echo "a>10";
    }
    ?>
@endsection
