<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: bisque;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container h2 {
            margin-top: 0;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
            margin-right: 1rem;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error-message, .success-message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        .error-message {
            background-color: #ffcccc;
            color: #cc0000;
        }
        .success-message {
            background-color: #ccffcc;
            color: #006600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <?php if(isset($error_message)) { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>
        <?php if(isset($success_message)) { ?>
            <div class="success-message"><?php echo $success_message; ?></div>
        <?php } ?>
        <form method="post" action="login.html">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <button type="submit">Reset Password</button>
            </div>
        </form>
    </div>
</body>
</html>
