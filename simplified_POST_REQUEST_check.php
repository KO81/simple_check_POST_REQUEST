<?php

// simplified POST and REQUEST check
// just paste in the right before POST or REQUEST statemant.

$arr=('all the bad words array');

function is_function($what){
  if(function_exists($what)||class_exists($what,false)){
    return true;
  };return false;
};

function array_in_string($str, array $arr){
  foreach($arr as $arr_value){
    if(stripos($str,$arr_value)!==false||is_function($str))return true;
  };return false;
};

foreach($_POST as $key => $value){
  if(array_in_string($key,$Bad_)&&in_string($value,$Bad_)){
    http_response_code(401);die();
    // or whatever u like
    };
};

?>
