<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> index </title>

    <link rel="stylesheet" type="text/css" href="essay.css">


</head>

<?php

  if(!empty($_FILES['uploaded_file']))
  {
    $folder = "uploads/";
    $path = basename( $_FILES['uploaded_file']['name']);
    $fullpath = $folder. $path;
      
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  $path. " has been uploaded";
        echo $fullpath;
            
    } else{
        echo "There was an error uploading the file, please try again!";
    }
    
  }
?>


<body>

    <div id="main">

        <div>
            <form enctype="multipart/form-data" action="upload.php" method="POST">
                <p>Upload your file</p>
                <input type="file" name="uploaded_file"></input><br />
                <input type="submit" value="Upload"></input>
            </form>
            <img id="image" src="<?php echo $fullpath ?>">
        </div>

        <div id="frontpage">
            Images become a reflection of an ever-forming world, that cannot be stabilised.
            <img src="s.jpg" alt="jhn" style="width:80%;margin-bottom:80px;margin-top:10px;">
            It’s a reflection of you and me,
            <img src="1.jpg" alt="jhn" style="width:80%;margin-top:10px;margin-bottom:10px;">
            <img src="12.jpg" alt="jhn" style="width:80%;margin-bottom:10px;">
            <img src="1original.jpg" alt="jhn" style="width:60%;margin-bottom:80px;">
            a reflection that cannot be caught on cameras
            <img src="13.jpg" alt="jhn" style="width:80%;margin-top:10px;margin-bottom:10px;">
            <img src="14.jpg" alt="jhn" style="width:80%;margin-bottom:80px;">
            or mirrors,
            <img src="2concrete.jpg" alt="jhn" style="width:60%;margin-top:10px;margin-bottom:80px;">
            that cannot be fixated in any material,
            <img src="15.jpg" alt="jhn" style="width:80%;margin-top:10px;margin-bottom:10px;">
            <img src="16.jpg" alt="jhn" style="width:80%;margin-bottom:10px;">
            <img src="3sand.jpg" alt="jhn" style="width:60%;margin-bottom:80px;">
            not in your screen
            <img src="17.jpg" alt="jhn" style="width:80%;margin-top:10px;margin-bottom:30px;">
            not in mine.
            <img src="18.jpg" alt="jhn" style="width:80%;margin-top:10px;margin-bottom:10px;">
            <img src="4poppy%20seed%20roll.jpg" alt="jhn" style="width:60%;margin-bottom:80px;">
            It keeps growing
            <a href="https://drive.google.com/drive/folders/12pvNW3PMjnvO0hTNHU44BTjYPOFWPJBt">
                <img src="Screenshot%202018-12-03%20at%2000.36.51.png" alt="jhn" style="width:60%;margin-top:10px;margin-bottom:100px;">
            </a>

        </div>


        <div id="header">
            <div id="header01"> ARENA OF MEANINGS <br/>


            </div>


        </div>




    </div>



</body>




</html>
