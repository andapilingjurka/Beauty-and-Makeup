<?php
include "../include/sidebar.php";
?> 

<section id="content" class="box">
    
        <?php
        if (isset($_POST['add'])) {
            shtoKlient(
                $_POST['name'],
                $_POST['surname'],
                $_POST['email'],
                $_POST['password']
            );
        }
        ?>
       <form method="post" id="client" name="add" class="box forma-modifikim">
            <legend>Form for adding clients</legend>
            <fieldset class="form-group">
                <label class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Surname:</label>
                <input type="text" name="surname" id="surname" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-input"><br />
            </fieldset>
            <input type="submit" name="add" value="Save" class="form-submit-add">

            <a href="dashboard_client.php" class="cancel-btn">Cancel</a>
        </form>
    </section>



    <script>
    /*//////////////////Validimi //////////////////////*/

    $(document).ready(function () {
        $('form[name="add"]').validate({
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

