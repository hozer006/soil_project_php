<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        

<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "soil";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "select * from station";
    $result = mysqli_query($conn, $sql);

   if($result -> num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["stt_id"]. " - Name: " . $row["stt_name"];
      }
   }




?>