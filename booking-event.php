<?php
include("header.php");
include("connection.php");
$result = mysqli_query($conn, "SELECT * FROM book");//selecting data form book table from the data

?>

<div class="booking-view">
    <h2>Booking Inbox</h2>
    
    <table>
        <tr>
            <th><strong>NO</strong></th>
            <th><strong>event_name</strong></th>
            <th><strong>location</strong></th>
            <th><strong>phone_number</strong></th>
        </tr>
        <?php
            $i =1;
            while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
        ?>
       
        <?php
        echo" </td>";
        echo "<td align=center>&nbsp;" . $i . "</td>";
        echo "<td align=center>&nbsp;" . $row['event_name'] . "</td>";
        echo "<td align=center>&nbsp;" . $row['location'] . "</td>";
        echo "<td align=center>&nbsp;" . $row['phone_number'] . "</td>";
        echo "</tr>&nbsp;";
        $i++;
        }
        
        ?>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>

        </tr>
    </table>
</div>