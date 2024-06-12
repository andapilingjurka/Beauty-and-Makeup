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

    if (isset($_POST['edit'])) {

        modifikoKlient(
            $clientid,
            $_POST['name'],
            $_POST['surname'],
            $_POST['email'],
            $_POST['password']
        );
    }

    ?>
   <form method="post" id="client"  name="edit" class="box forma-modifikim">
        <legend>Form for editing clients</legend>
        <fieldset class="form-group">
            <label class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-input" value="<?php if (!empty($name)) echo $name; ?>"><br />
        </fieldset>
        <fieldset class="form-group">
            <label class="form-label">Surname:</label>
            <input type="text" name="surname" id="surname" class="form-input" value="<?php if (!empty($surname)) echo $surname; ?>"><br />
        </fieldset>
        <fieldset class="form-group">
            <label class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-input" value="<?php if (!empty($email)) echo $email; ?>"><br />
        </fieldset>
        <fieldset class="form-group">
            <label class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-input" value="<?php if (!empty($password)) echo $password; ?>"><br />
        </fieldset>
        <input type="submit" name="edit" value="Edit" class="form-submit-edit">

        <a href="dashboard_client.php" class="cancel-btn">Cancel</a>
    </form>

</section>



<script>
    /*//////////////////Validimi //////////////////////*/

    $(document).ready(function () {
        $('form[name="edit"]').validate({
            rules: {
                name: {
                    required: true,
                },
                surname: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5,
                },
            },
            messages: {
                name: {
                    required: "Please provide a name",
                },
                surname: {
                    required: "Please provide a surname",
                },
                email: {
                    required: "Please provide an email",
                    email: "Please enter a valid email address",
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                },
            },    

                errorClass: "error-message",
                errorElement: "div",
                errorPlacement: function (error, element) {
                    error.appendTo(element.parent());
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass(errorClass).addClass(validClass);
                }
        });
    });
</script>

<style>
    .error-message {
        color: red;
        font-size: 12px;
        font-weight:bold;

    }
</style>



