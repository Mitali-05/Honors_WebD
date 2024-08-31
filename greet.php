<?php

$time = date("h:i A");

if($time >= '02:00 AM' && $time <= '11:00 AM'){
    $Greet = "Good Morning";
}else if($time >= '11:01 AM'&& $time <= '04:00 PM'){
    $Greet = "Good Afternoon";
}else if($time >= '04:01 PM'&& $time <= '09:00 PM'){
    $Greet = "Good Evening";
}else{
    $Greet = "Good Night";
}

include "views/greet.view.php";

