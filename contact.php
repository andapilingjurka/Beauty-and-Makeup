<?php
include "include/header_white.php";
?>

<?php
if (isset($_POST['send'])) {
    kontakti(
        $_POST['name'],
        $_POST['surname'],
        $_POST['email'],
        $_POST['phonenumber'],
        $_POST['message']
    );
}
?>

<?php
if (!isset($_SESSION['client'])) {
    header("Location:forms.php");
    exit(); 
}
?>


<body>
    <div class="contact-form">

        <div class="image-contact" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
             <img src="images/contact.png" alt="Image">
        </div>

        <form method="POST" id="send" action="" name="send" class="contactus-form" 
            data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <h1>Have some questions?</h1>
            <div>
                <input type="text" placeholder="Name" name="name">
            </div>
            <div>
                <input type="text" placeholder="Surname" name="surname">
            </div>
            <div>
                <input type="email" placeholder="Email" name="email">
            </div>
            <div>
                <input type="text" placeholder="Phone number" name="phonenumber">
            </div>
            <div>
                <textarea placeholder="Message" rows="7" name="message"></textarea>
            </div>
            <button type="submit" class="btn" id="send" name="send">Send Message</button>
        </form>

    </div>
</body>



<script>
    /*//////////////////Validimi //////////////////////*/

    $(document).ready(function () {
        $('form[name="send"]').validate({
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
                phonenumber: {
                    required: true,
                    digits: true,
                },
                message: {
                    required: true
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
                phonenumber: {
                    required: "Please provide a phone number",
                    digits: "Please enter only digits",
                },
                message: {
                    required: "Please write a message",
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



