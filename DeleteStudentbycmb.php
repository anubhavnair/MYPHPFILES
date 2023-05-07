<html>

<body>

  <?php
  if (isset($_REQUEST["status"])) {

    if ($_REQUEST["status"] == 1) {
      echo ("<h2>Data Has Been Deleted</h2>");
    }
  }

  ?>



  <form action="delstudent.php">

    <b>Select Student Name</b><select name="combobox" id="">

      <option value="0">Select Student Name</option>
      <?php

      $con = mysqli_connect("127.0.0.1", "root", "");
      mysqli_select_db($con, "college");
      $result = mysqli_query($con, "select * from student");
      while ($row = mysqli_fetch_array($result)) {
        $x = $row["sid"];
        echo ("<option value='$x'>");
        echo ($row['sname']);
        echo ("</option>");
      }
      ?>


    </select>
    <input type="submit" value="Confirm">
  </form>
</body>

</html>