<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // گرفتن داده‌های فرم
    $name    = $_POST['name'];
    $subject = $_POST['subject'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    // ایمیل مدیر (ایمیل خودت)
    $to = "alihha1377880@gmail.com";

    // موضوع و متن ایمیل
    $mail_subject = "پیام جدید از فرم تماس با ما: $subject";
    $body = "نام: $name\nایمیل: $email\nموضوع: $subject\n\nپیام:\n$message";
    $headers = "From: $email";

    // ارسال ایمیل
    mail($to, $mail_subject, $body, $headers);

    // انتقال به صفحه موفقیت
    header("Location: contact-success.html");
    exit();
}
?>