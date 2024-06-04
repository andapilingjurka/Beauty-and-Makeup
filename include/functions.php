<?php
session_start();
$dbconn;
dbConnection();

/*Funksioni per Lidhjen me databaze */
function dbConnection(){
    global $dbconn;
    $dbconn=mysqli_connect("localhost",'root','','beautyandmakeuptest');
    if(!$dbconn){
        die("Deshtoi lidhja me DB".mysqli_error($dbconn));
    }
}

/*Funksioni per SignUp*/
function signup($name, $surname, $email, $password)
{
    global $dbconn;
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO clients(name, surname, email, password) VALUES ('$name', '$surname', '$email', '$hashedPassword')";
    $result = mysqli_query($dbconn, $sql);
      header("Location: ./forms.php");
}

/*Funksioni per Login */
function login($email, $password)
{
    global $dbconn;
    $sql = "SELECT * FROM clients WHERE email='$email'";
    $result = mysqli_query($dbconn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $clientData = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $clientData['password'])) {
            echo "Password verified successfully.<br>";
            $client = array();
            $client['clientid'] = $clientData['clientid'];
            $client['namesurname'] = $clientData['name'] . " " . $clientData['surname'];
            $client['role'] = $clientData['role'];
            $_SESSION['client'] = $client;
            header("Location: ./home.php");
        } else {
            // echo "Your password is incorrect!";
        }
    } else {
        // echo "Your email is incorrect!";
    }
}
?>
