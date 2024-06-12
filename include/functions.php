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


/*Funksionet per Klient */
function merrKlient(){
    global $dbconn;
    $sql = "SELECT * FROM clients";
    return mysqli_query($dbconn, $sql);
}

function merrKlientId($clientid){
    global $dbconn;
    $sql = "SELECT * FROM clients WHERE clientid=$clientid";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}

function shtoKlient($name, $surname, $email, $password){
    global $dbconn;
    $sql = "INSERT INTO clients(name, surname, email, password)";
    $sql .= " VALUES ('$name','$surname', '$email','$password')";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        $_SESSION['message']="Client added successfully!";
        header("Location:dashboard_client.php");
    } else {
        echo "Client was not added successfully!";
    }
}

function modifikoKlient($clientid, $name, $surname, $email, $password){
    global $dbconn;
    $sql = "UPDATE clients SET name='$name',surname='$surname', email='$email',";
    $sql .= "password='$password' WHERE clientid=$clientid";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        $_SESSION['message']="Client modified successfully!";
        header("Location: dashboard_client.php");
    } else {
        echo "The client was not successfully modified!";
    }
}

function fshijKlient($clientid){
    global $dbconn;
    $sql = "DELETE FROM clients WHERE clientid=$clientid";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        $_SESSION['message']="Client deleted successfully!";
        header("Location: dashboard_client.php");
    } else {
        echo "The client was not successfully deleted!";
    }
}



/*Funksionet per Kontaktin */

function kontakti($name, $surname,$email,$phonenumber,$message)
{
    global $dbconn;
    $sql = "INSERT INTO contact(name,surname,email,phonenumber,message) VALUES ('$name','$surname','$email','$phonenumber','$message')";
    $result = mysqli_query($dbconn, $sql);
    header("Location: contact.php");
}

function merrKontakti(){
    global $dbconn;
    $sql = "SELECT * FROM contact";
    return mysqli_query($dbconn, $sql);
}

function merrKontaktiId($contactid){
    global $dbconn;
    $sql = "SELECT * FROM contact WHERE contactid=$contactid";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}

function fshijKontakti($contactid){
    global $dbconn;
    $sql = "DELETE FROM contact WHERE contactid=$contactid";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        $_SESSION['message']="Message deleted successfully!";
        header("Location: dashboard_contact.php");
    } else {
        echo "The message was not successfully deleted!";
    }
}


?>


