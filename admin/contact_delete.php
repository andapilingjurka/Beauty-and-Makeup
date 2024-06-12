<?php
include "../include/sidebar.php";
?> 

<section id="content" class="box">
           
        <?php
                    
            if (isset($_GET['kid'])) {
                $contactid = $_GET['kid'];
                $contact = merrKontaktiId($contactid);
                $name = $contact['name'];
                $surname = $contact['surname'];
                $email = $contact['email'];
                $phonenumber = $contact['phonenumber'];
                $message = $contact['message'];
            }
                if(isset($_POST['delete'])){
                     fshijKontakti($contactid);
                }
                    
        ?>
        
        <form method="post" id="contact" class="box forma-modifikim">
            <legend>Form for deleting messages</legend>
            <fieldset class="form-group">
                <label class="form-label">Name:</label>
                <input disabled type="text" name="name" id="name" value="<?php if(!empty($name)) echo $name; ?>" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Surname:</label>
                <input disabled type="text" name="surname" id="surname" value="<?php if(!empty($surname)) echo $surname; ?>" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Email:</label>
                <input disabled type="email" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Phone Number:</label>
                <input disabled type="text" name="phonenumber" id="phonenumber" value="<?php if(!empty($phonenumber)) echo $phonenumber; ?>" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Messages:</label>
                <textarea disabled rows="4" name="message" class="form-input"><?php if (!empty($message)) echo $message; ?></textarea>
            </fieldset>
            <input type="submit" name="delete" value="Delete" class="form-submit-delete">

            <a href="dashboard_contact.php" class="cancel-btn">Cancel</a>
    </form>

 </section>