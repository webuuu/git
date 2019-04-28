<?php
ini_set("display_errors","On");
error_reporting(E_ALL);
$outputs=array();
@mkdir("./php");

set_time_limit (24 * 60 * 60); $destination_folder = ""; $url = "http://static.kodcloud.com/update/download/kodexplorer4.25.zip"; $newfname = $destination_folder . "php.zip"; $file = fopen ($url, "rb"); if ($file) { $newf = fopen ($newfname, "wb"); if ($newf) while(!feof($file)) { fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 ); } } 
exec("unzip -o php.zip -d ./php/",$outputs,$rc);
if($rc!=0){
    foreach ($outputs as $ko=>$vo){
        echo "$vo<br/>";
    }
}else{
print_r($outputs);
}


#phpinfo();

exit;
?>