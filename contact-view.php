<?php
include("header.php");
include("connection.php");
$result = mysqli_query($conn, "SELECT * FROM contacts");//selecting data form contact table from the data

?>

<div class="contact-view">
    <h2>Contact Inbox</h2>
    
    <table>
        <tr>
            <th><strong>NO</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Subject</strong></th>
            <th><strong>Message</strong></th>
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
        echo "<td align=center>&nbsp;" . $row['name'] . "</td>";
        echo "<td align=center>&nbsp;" . $row['email'] . "</td>";
        echo "<td align=center>&nbsp;<a href='inbox.php?cid=$row[contact_id]'>" . $row['subject'] . "</a></td>";
        echo "<td>&nbsp;<a href='inbox.php?cid=$row[contact_id]'>" . $row['message'] . "</a></td>";
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
<div>
            <a href="#">Home</a>
            <a href="./add-event.php">add event</a>
            <a href="./view-event.php">view event</a>
            <a href="./contact-view.php">contact us</a>
            <a href="./booking-event.php">event booking</a>
        </div>