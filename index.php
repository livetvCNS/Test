<?php
include('simple_html_dom.php');
$html = file_get_html("https://nationsgeo.com/time/asia/mm/naypyidaw/");
$list = [] ;
$data = $html->find("#liveclock " ,0);
$date = $html->find(".fs-3" , 0);
 $time1 = $data->find("span" , 0)->plaintext;
 $time2 = $data->find("span" , 2)->plaintext;
 $time3 = $data->find("span" , 4)->plaintext;
 $time4 = $data->find("span" , 5)->plaintext;
       
    $list[] = [
        "time" => $time1.":".$time2.":".$time3." ".$time4,
        "date" => $date->plaintext,

    ];

echo(json_encode($list , JSON_PRETTY_PRINT));

?>
