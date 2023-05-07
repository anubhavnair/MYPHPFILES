<html>

<body>
    <h1>Student List</h1>

    <?php

    $Con = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($Con, "college");

    $Student_data_table_student = mysqli_query($Con, "select *from student  ");
    //    $data=mysqli_fetch_array($Student_data_table_student);
    //    $data=mysqli_fetch_array($ Student_data_table_student);


    if(isset($_REQUEST["status"])){

        if($_REQUEST["status"]==1){
            echo("<h2>Data Has Been Deleted</h2>");
        }
    }
    



    
    echo ("<table border='1'cellspacing='0'>");

    echo("<tr>");

        echo("<th> Student Id </th> ");
        echo("<th> Student Name </th> ");
        echo("<th> Student Address </th> ");
        echo("<th> Student Mobile Number </th> ");
        echo("<th>Status</th>");

    echo("</tr>");

    while ($data = mysqli_fetch_array($Student_data_table_student)) {

        echo ("<tr>");


        echo("<td>");
        echo($data["sid"]);
        echo("</td>");
        echo("<td>");
        echo($data["sname"]." ");
        echo("</td>");



        echo("<td>");
        echo($data["saddress"]." ");
        echo("</td>");

        echo("<td>");
        echo($data["smobile"]);
        echo("</td>");
       echo("<td>");
        $x=$data["sid"];
        echo("<a href='deleteStudent.php?studid=$x' target='_self'>Delete</a>");

       echo("</td>");

        echo("</tr>");


    }

    echo ("</table>");

    ?>
</body>

</html>