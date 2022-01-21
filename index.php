<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php echo "Welcome to CI/CD Pipeline using docker and jenkins !!"; ?>
<br/><br/>
<?php $dir = "uploads/*.png";
//get the list of all files with .jpg extension in the directory and safe it in an array named $images
$images = glob( $dir );

//extract only the name of the file without the extension and save in an array named $find
foreach( $images as $image ):
    echo "<p><img src='" . $image . "' /></p>";
endforeach;
?>
</body>
</html>
