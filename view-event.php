<?php include('header.php') ?>


<!-- body content -->
<main>
    <!-- php code -->
    <?php
        // sql statement to retrieve data
        $sql = "SELECT * FROM event";
        // query our sql statement
        $events = mysqli_query($conn, $sql);
        // check if table is empty
        if(mysqli_num_rows($events) > 0){
            // loop through each row
            while ($row = mysqli_fetch_assoc($events)) {
                $name = $row['name'];
                $image = $row['image'];
                $price = $row['price'];
                $desc = $row['description'];
                $day = $row['day'];
                $time = $row['time'];
                // display in out html document
    ?>
    <!-- end of php code -->
    <div class="card">
        <!-- img -->
        <div class="image">
            <img src="<?php echo $image ?>" alt="<?php echo $name ?>"/>
        </div>
        <div class="body">
           <div class="title">
               <h1><?php echo $name?></h1>
               <h2 class="secondary">Ksh.<?php echo $price?></h2>
           </div>
           <div class="content">
               <p><?php echo $desc ?></p>
           </div>
           <div class="title">
           <h1><?php echo $day?></h1>
           <h2><?php echo $time?></h2>
            </div>
          <button onclick="window.location.href='book-event.php'">book-event</button>
        </div>
    </div>
    <!-- php code -->
    <?php
            }
        }else{
                echo "empty list of event";
        }
    ?>
    <!-- end of php code -->
</main>
<!-- end of body content -->
<?php include('footer.php') ?>
