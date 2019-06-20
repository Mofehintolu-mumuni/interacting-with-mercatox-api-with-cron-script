<?php

class hydrogen{
    
    function hydro(){
    
    $get = file_get_contents("https://mercatox.com/public/json24full");

$decode = json_decode($get,true);

$val = $decode["pairs"]["HYDRO_BTC"]["last"];
return $val;

    }


 function format_number($number){
        
        $formatted_number = number_format($number);
        return $formatted_number;
    }

function bitcoin(){
    $get_bitcoin_value = file_get_contents("https://api.coinmarketcap.com/v1/ticker/bitcoin/");

$decode_bitcoin = json_decode($get_bitcoin_value,true);

$bitcoin_value = $decode_bitcoin[0]["price_usd"];
return $bitcoin_value;
    }

    function prices(){
    $variable_price = $this->hydro();
    $b_value = ceil($this->bitcoin());
    $volume = 222222; 
    $array = array($variable_price,$b_value,$volume);
    return $array;
    }
    
    
   
    function sms_send_price()
    {
        $array = $this->prices();
        $d_rate = 360;
        $amount = $array[0] * $array[2];
        $main = $array[1]* $amount;
        $total = ceil($d_rate * $main);
        return $total;
    }
   

    
    
    function getprice()
    {
        $array = $this->prices();
        $d_rate = 360;
        $amount = $array[0] * $array[2];
        $main = $array[1]* $amount;
        $total = ceil($d_rate * $main);
        echo $this->format_number($total);
    }


    
    }


?>
