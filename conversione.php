<?php

$yaml = file_get_contents('file.yaml');
$data = yaml_parse($yaml);

$json = json_encode($data);
file_put_contents('file.json', $json);

?>