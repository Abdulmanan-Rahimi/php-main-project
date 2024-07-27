
<?php


function dd($data) {
    die('<pre>' . var_export($data, true) . '</pre>');
}        



function get_data($data_file) {
    $file_address = './database/' . $data_file . '.json';
    $file = fopen($file_address, 'r+');
    $database = fread($file, filesize($file_address));
    fclose($file);


    return json_decode($database, true);
}

?>