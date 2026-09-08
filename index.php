<?php
$num =10;
if($num >10){
    var_dump('bigger');
}

if($num >10){
    var_dump('bigger');
} else {
    var_dump('lesser');
}

if($num >10){
    var_dump('bigger');
} else if($num <10){
    var_dump('lesser');
} else{
    var_dump('equal');
}

$day = (int) date('w');
$day = intval (date('w'));
var_dump($day);
if($day === 0){
    var_dump('sunday');
} else if($day === 1){
    var_dump('monday');
}else if($day === 2){
    var_dump('tuesday');
}else if($day === 3){
    var_dump('wednesday');
}else if($day === 4){
    var_dump('thursday');
}else if($day === 5){
    var_dump('friday');
}else if($day === 6){
    var_dump('saturday');
}else {
    var_dump('weird day');
}

switch($day){
    case 0:
        var_dump('sunday');
        break;
    case 1:
        var_dump('monday');
        break;
    case 2:
        var_dump('tuesday');
        break;
    case 3:
        var_dump('wednesday');
        break;
    case 4:
        var_dump('thursday');
        break;
    case 5:
        var_dump('friday');
        break;
    case 6:
        var_dump('saturday');
        break;
    default:
    var_dump('weirdday');
}
