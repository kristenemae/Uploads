<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Image Upload</title>
</head>

   
<body>
    <div class = "container-fluid mt-5 mb-5">
    <div class = "row">
    <div class = col-md-3>asfsg</div>
        <div class = "col-md-6 page-wrapper bg-gra-01 p-t-180 p-b-100" me>
            <div class = "card " ></div>
                <h1 class="text-center mb-4">Upload your BEST photos</h1>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <div class="card p-2">
                    <input type="file" name="imageToUpload[]" multiple>
                    </div>              
                    <button class="btn btn-light mt-2 mb-2" type="submit">
                         <i class="fas fa-arrow-circle-up"></i> Upload
                    </button>
                </form>
        </div>        
    <div class = col-md-3>sfagwg</div>
    </div>
    </div>
    </div>
</body>
</html>