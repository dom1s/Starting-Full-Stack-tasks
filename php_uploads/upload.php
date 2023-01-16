<?php

var_dump($_FILES);

define('UPLOAD_DIR', dirname(__DIR__) . '/uploads');

for ($i = 0; $i < count($_FILES['some-file-name'][0]['tmp_name']); $i++){
    move_uploaded_file($_FILES['some-file-name'][0]['tmp_name'][$i], UPLOAD_DIR . '/' . $_FILES['some-file-name'][0]['name'][$i]);
}