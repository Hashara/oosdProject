<?php

function dnd($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function sanitize($dirty){
    return htmlentities($dirty,ENT_QUOTES,'UTF-8');
    
}

 function currentUser($type)
{
    if($type=="Counselors"){
        return Counselors::currentLoggedInUser();
    }else if ($type=="Students"){
        return Students::currentLoggedInUser();
    }
   
}

function posted_values($post)
{
    $clean_ary=[];
    foreach($post as $key=>$value){
        $clean_ary[$key]=sanitize($value);
    }return $clean_ary;
}