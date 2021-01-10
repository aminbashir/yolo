<?php include('header.php')?>
<!-- new event form -->
<main>
    <form action="./includes/new.inc.php" method="POST">
        <h1>ADD NEW EVENT</h1>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" />
        </div>
        <div>
            <label for="image">image url</label>
            <input type="text" id="image" name="image" />
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" id="price" name="price" />
        </div>

       
        <div>
            <label for="description">description</label>
            <textarea name="description" id="description" maxlength="255"></textarea>
        </div>

        <div>
            <label for="day">day</label>
            <input type="text" id="day" name="day" />
        </div>
        <div>
            <label for="time">time</label>
            <input type="text" id="time" name="time" />
        </div>
        
        <button type="submit" name="submit_event">add event</button>
        
    </form>
</main>
<!--  -->
<?php include('footer.php')?>
