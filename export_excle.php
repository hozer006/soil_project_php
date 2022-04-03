<?php
include('connection.php');
$output = '';
    if(isset($_POST["export_excel"])) {
        $query = mysqli_query($db, "SELECT * FROM `soil_velues` ORDER BY stt_id DESC");
        if(mysqli_num_rows( $query)) {
            $output .='
                <table class="table" border="1"> 
                    <tr>
                        <th> Dates </th>
                        <th> Times </th>
                        <th> Soil_Humid </th>
                        <th> Soil_EC </th>
                        <th> Soil_N </th>
                        <th> Soil_P </th>
                        <th> Soil_K </th>
                    </tr>
            ';
            while($row = mysqli_fetch_array($query)) {
                $output .='
                    <tr>
                        <td> '.$row["dates"].' </td>
                        <td> '.$row["times"].' </td>
                        <td> '.$row["soil_Humid"].' </td>
                        <td> '.$row["soil_EC"].' </td>
                        <td> '.$row["soil_N"].' </td>
                        <td> '.$row["soil_P"].' </td>
                        <td> '.$row["soil_K"].' </td>
                    </tr>
                
                ';
            }
            $output .= '</table>';
            header('Content-Type:application/xls');
            header('Content-Disposition:attachment;filename=report.xls');
            echo $output;
        }
    }

?>