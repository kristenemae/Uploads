<?php
    include_once("function.php");
    $file= $_FILES['imageToUpload'];
    //echo"<pre>",print_r($file),"</pre>";
    $fileName= $file['name'];
    $fileType= $file['type'];
    $fileTmpname= $file['tmp_name'];
    $fileSize= $file['size'];
    $dir = "uploads/";

    foreach($fileName as $index => $name){
        if(checkFileType($fileType[$index])){
           if(checkSize($fileSize[$index])){
               $targetDir = $dir .basename($fileName[$index]);
                if(checkFileExists($targetDir)){
                    if(changeDirectory($fileTmpname[$index],$targetDir)){
                        echo "Image/s successfully uploaded ",$fileName[$index],"<br>";
                        //echo "<img scr='uploads/".$file['name'][$index]."'>";
                    }else{
                        echo "Uploading Failed.";
                    }
                }else{
                    echo "File already exist.";
                }
            }else{
                echo "File too large.";
            }
        }else{
            echo "File type not allowed.";
        }
    }

    //scan "uploads" folder and display them accordingly
    $folder = "uploads";
    $results = scandir('uploads');
    foreach ($results as $result) {
        if ($result === '.' or $result === '..') continue;

        if (is_file($folder . '/' . $result)) {
            echo '
                <div class="col-md-3">
                    <img src="'.$folder . '/' . $result.'" alt="..." style="width:250px; height:auto;">
                </div>';
        }
    }

?>