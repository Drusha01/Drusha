<?php 
    // fetching data
    $query = "select * from tblsubjects
    LEFT JOIN tblsyllabus
    ON tblsyllabus.subject_id = tblsubjects.subject_id;";
    $result = mysqli_query($dbc,$query);

?>