<?php


?>




<section>

    <div class="form" style="display:flex; align-items:center; justify-content:center; margin-top:10rem;">
                    

    <form action="action.php" method="POST">

            <input type="text" name="name" placeholder="name">
            <span><?php echo $nameerror; ?></span> <br>
            <br>
            <input type="text" name="phone" placeholder="phone">
            <span><?php echo $phoneerror; ?></span> <br>
            <br>
            <input type="text" name="email" placeholder="email">
            <span><?php echo $emailerror; ?></span> <br>
            <br>
            <input type="text" name="subject" placeholder="subject">
            
            <br>
            <br>

            <textarea name="msg"id="" cols="30" rows="10" placeholder="write a message"></textarea>
            

            <br>
            <br>

            <input type="submit" name="submit" value="Submit">
            
        </form>
    </div>
</section>