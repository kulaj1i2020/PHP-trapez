<?php
function trapez($a,$b,$h)
{
    if($a>0 && $b>0 && $h>0){
    return (($a+$b)*$h)/2;}
    else {
        return "błędne dane";
    }
}

print (trapez(3,4,5));

?>