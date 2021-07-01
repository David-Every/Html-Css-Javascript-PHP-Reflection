<?php
include "inc/header.php";
?>
<div>
<div>
   <?php echo '<a href = "index.php"><strong> Home </strong></a> / How can we help you?' ; ?>
</div>
<div>
    <strong>Call us on:</strong>
    <p>
        Wymondham office:
        <a href = "tel:00000 00 00 00"></a>
    </p>
    <p>
        Gorlston office:
        <a href = "tel:00000 00 00 00"></a>
    </p>
    <p>
        <strong>Email us on:</strong>
        <a href = "mailto:sales@netmatters.com"></a>
    </p>
    <div>
        <strong>Business hours:</strong>

        <strong>Monday - Friday 07:00 - 18:00</strong>

        <strong>Email us on:</strong>
    </div>

    <div>
        <p class = "q-text">Out of hours IT Support</p>

        <p>
            Netmatters IT are offering an Out of Hours 
            service for Emergency and Critical tasks.
        </p>
        <p>
            <strong>Monday - Friday 18:00 - 22:00</strong>
            <strong>Saturday 08:00 - 16:00</strong>
            <strong>Sunday 10:00 - 18:00</strong>
        </p>
        <p>
            To log a critical task, you will need to call our
            main line number and select Option 2 to leave an 
            Out of Hours voicemail. A technician will contact
            you on the number provided within 45 minutes of 
            your call.
        </p>
    </div>
    <div class = "conForm">
        <form id ="contact">
            <span class = "top">
                <div class ="inp">
                    <label for ="name">Your Name<small>*</small></label>
                    <input type="text" name ="name"/>
                </div>
                <div class ="inp">
                    <label for ="email">Your Email<small>*</small></label>
                    <input type="email" name ="email"/>
                </div>
            </span>
            <span class =  "bottom">
                <div class ="inp">
                    <label for ="tel">Your Telephone Number<small>*</small></label>
                    <input type="tel" name ="tel"/>
                </div>
                <div class ="inp">
                    <label for ="sub">Subject<small>*</small></label>
                    <input type="text" name ="sub"/>
                </div>
            </span>
            <div class ="inp">
                <label for ="msg">Message<small>*</small></label>
                <textarea name ="msg">
                </textarea>
            </div>
            <input type="checkbox" name="check">
            <label for ="check"> 	
                Please tick this box if you wish to receive 
                marketing information from us. Please see our Privacy Policy for more 
                information on how we use your data
            </label>
            <input type ="button" value ="SEND ENQUIRY">
        </form>
    </div>

<!-- <img src = "img/offices/cambridge.jpg"> -->
<?php
    $address = json_decode(file_get_contents("addresses.json"));
    echo '<div id ="addWrapper">';
    foreach($address->collection->addresses as $add){
        echo '<div class ="off_Add">';
            echo '<img class = "addImg" src="' . $add->Image . '">';
            echo '<div class = "theAdd">';
                echo '<a href =' . $add->Link . '><h2>' . $add->Office .'</h2></a>';
                echo '<p>' . $add->Address .'</p>';
                echo '<p>' . $add->Post_code .'</p>';
                echo '<a href = tel:' . $add->Tel . '>' .$add->Tel. '</a><br>';
                echo '<a href = "#">View More</a>';
            echo '</div>';
        echo '</div>';
        // echo '<iframe src=' . $add->Map . '></iframe>';


    }
    echo '</div>';

?>

<?php
include "inc/footer.php";
?>

</body>
</html>
