<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        .form-container {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .form-field {
            margin-bottom: 15px;
        }

        .form-field input {
            width: 100%;
            padding: 10px;
        }

        .form-field .btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Login Page</h1>
    <div class="form-container">
        <form action="login.php" method="POST">
            <div class="form-field">
                <input type="text" placeholder="Username" name="idpengguna" required/>
            </div>

            <div class="form-field">
                <input type="password" placeholder="Password" name="katalaluan" required/>
            </div>

            <div class="form-field">
                <button class="btn" type="submit">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>
