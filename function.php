<?php
    function checkFileType($file){
        $allowed = array('jpeg','jpg', 'png');
        $fileExt = explode("/",$file);
        return in_array(end($fileExt),$allowed) ? true : false;
    }


    function checkSize($file){
        return ($file <= 10000000) ? true : false;
    }

    function checkFileExists($file){
        return (!file_exists($file)) ? true : false;
    }

    function changeDirectory($file,$target){
        return move_uploaded_file($file,$target);
    }
?>