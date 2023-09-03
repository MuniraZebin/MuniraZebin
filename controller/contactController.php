<?php
require "../smtpController.php";

$name = $email = $phone = $message = "";
$isValid = true;
$phoneReg = '/^(\+?880|0)1[3456789]\d{8}$/';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_ADD_SLASHES);
        return $data;
    }

    $name = test($_POST["name"]);
    $email = test($_POST["email"]);
    $phone = test($_POST["phone"]);
    $subject = test($_POST["subject"]);
    $msg = test($_POST["message"]);

    if ($name == "" || $email == "" || $msg == "" || $subject == "") {
        $isValid = false;
    }

    if ($isValid) {
        smtp_mailer("munirazebin229@gmail.com", $name . " sent new message from your website", "Title: " . $subject . "<br><br>" . $msg . "<br><br>Phone no: " . $phone . "<br>Email: " . $email);
        setcookie("error", "<span style='color: rgb(243, 59, 120); font-size: large;'> Message Sent... </span>", time() + 1, "/");
        header("location: ../contact");
    } else {
        setcookie("error", "<span style='color: red; font-size: large;'> Please input properly! </span>", time() + 1, "/");
        header("location: ../contact");
    }
}
