<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add syllabus</title>
</head>
<body>
    <?php 
    include_once("../dbConnection/mysqlconfig_connection.php");
    print_r($_POST);
    if(isset($_POST['submit'])){
        $code = $_POST['code'];
        $author = $_POST['author'];
        $subject = $_POST['subject'];
        if(empty($code) || empty($author)){
            if(empty($code)){
                echo "<font color = 'red'> Syllabus Code field is empty</font><br>";
            }
            if(empty($author)){
                echo "<font color = 'red'> Syllabus Author field is empty</font><br>";
            }
            echo "<br><a href='javascript:self.history.back()'>Go Back</a>";
        }else{
            $query = "insert into tblsyllabus (subject_id,syllabus_code,syllabus_author) VALUES(
                '$subject','$author','$code'
            );";
            $result = mysqli_query($dbc,$query);
            echo "<font color='green'>Data added Successfully</font><br>";
            echo "<a a href='../index.php'>View Result</a>";
        }

    }

    ?>
</body>
</html>