<?php


echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo filter_id("float") ."<br>" ; //259

$val ="on1";

if(filter_var($val,FILTER_VALIDATE_BOOL)){
    echo "This Is True";
} else{
    echo "This Is False";
}