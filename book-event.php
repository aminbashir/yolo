<?php
include('header.php');
include("connection.php"); 
 if(isset($_POST['submit'])) {
 $book_sql="INSERT INTO book (event_name, location, phone_number) VALUES ('$_POST[event_name]','$_POST[location]','$_POST[phone_number]')";
 mysqli_query($conn, $book_sql);
echo("<script>alert('event booked successfully')</script>");
 }
            ?>
<!-- book event form -->
<main>
    <form action="book-event.php" method="POST">
        <h1>BOOK EVENT</h1>
        <div>
            <label for="event name">Event Name</label>
            <input type="text" id="name" name="event_name" placeholder="Please enter the event name.." required>
        </div>
        <div>
            <label for="location">location</label>
            <input type="text" id="location" name="location" placeholder="Please enter your location.." required>
        </div>
        <div>
            <label for="Phone Number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Please enter your phone number.." required>
        </div>
        <button type="submit" name="submit">book event</button>
        
    </form>
</main>
<!--  -->
<?php include('footer.php')?>

