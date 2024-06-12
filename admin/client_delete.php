<?php
include "../include/sidebar.php";
?> 

<section id="content" class="box">
           
        <?php
            if (isset($_GET['kid'])) {
                $clientid = $_GET['kid'];
                $client = merrKlientId($clientid);
                $name = $client['name'];
                $surname = $client['surname'];
                $email = $client['email'];
                $password = $client['password'];
            }
                if(isset($_POST['delete'])){
                     fshijKlient($clientid);
                }
                    
        ?>
        
        <form method="post" id="client" class="box forma-modifikim">
            <legend>Form for deleting clients</legend>
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
                <label class="form-label">Password:</label>
                <input disabled type="password" name="password" id="password" value="<?php if(!empty($password)) echo $password; ?>" class="form-input"><br />
            </fieldset>
            <input type="submit" name="delete" value="Delete" class="form-submit-delete">

            <a href="dashboard_client.php" class="cancel-btn">Cancel</a>
    </form>

 </section>