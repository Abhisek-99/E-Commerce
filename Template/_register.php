<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: white;
        }

        .container {
            width: 400px;
            padding: 2rem;
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            color: #333;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            outline: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group label {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            padding: 0 5px;
            color: #666;
            font-size: 0.9rem;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group input:not(:placeholder-shown) {
            border-color: #2196f3;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: 0;
            font-size: 0.8rem;
            color: #2196f3;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin: 1.5rem 0;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
        }

        .checkbox-group label {
            color: #666;
            font-size: 0.9rem;
        }

        .checkbox-group a {
            color: #333;
            text-decoration: none;
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            color: white;
            background: linear-gradient(to right, #4ade80, #60a5fa);
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        button:hover {
            transform: translateY(-1px);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
        }

        .login-link a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SIGN UP TO CONTINUE</h1>
        <form>
            <div class="form-group">
                <input type="text" id="name" placeholder=" ">
                <label for="name">Your Name</label>
            </div>

            <div class="form-group">
                <input type="email" id="email" placeholder=" ">
                <label for="email">Your Email</label>
            </div>

            <div class="form-group">
                <input type="password" id="password" placeholder=" ">
                <label for="password">Password</label>
            </div>

            <div class="form-group">
                <input type="password" id="repeat-password" placeholder=" ">
                <label for="repeat-password">Repeat your password</label>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="terms">
                <label for="terms">I agree all statements in <a href="#">Terms of service</a></label>
            </div>

            <button type="submit">REGISTER</button>

            <div class="login-link">
                Already have an account? <a href="./_login.php">Sign in</a>
            </div>
        </form>
    </div>
</body>
</html>