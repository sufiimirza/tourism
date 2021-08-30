<?php
require '../../include/db_conn.php';
page_protect();

if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM article WHERE article_id=$id");

    $n = mysqli_fetch_array($record);
    $rname = $n['article_name'];
    $link = $n['article_link'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
                        $id=$_GET['article_id'];
                        $sql="Select * from article Where article_id='$id'";
                        $res=mysqli_query($con, $sql);
        
                            if($res){
                                        $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                
                                    }
                        // $link=$row['article_link'];


                        ?>
<iframe src="<?php echo $row['article_link']; ?>" width="98%" height="700px">
</iframe>
</body>
</html>
