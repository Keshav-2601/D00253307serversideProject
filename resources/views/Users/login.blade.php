<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    /* Reset default styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Container styles */
    .container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
    }

    /* Form styles */
    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="password"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 16px;
    }

    /* Adjust button styles */
    button {
        background-color: green;
        color: white;
        /* Changed text color to white for better contrast */
        border: none;
        border-radius: 4px;
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        /* Smooth hover effect */
    }

    button:hover {
        background-color: lightgrey;
        /* Darker green on hover */
    }

    /* Additional styles for checkbox and forgot password link */
    .cancel-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 16px;
    }

    .cancelbtn {
        background-color: green;
        color: black;
        border: none;
        border-radius: 4px;
        padding: 8px;
        cursor: pointer;
    }

    .Loginbtn {
        background-color: green;
        color: black;
        border: none;
        border-radius: 4px;
        padding: 8px;
        cursor: pointer;
        position: relative;
        top: -10px;
    }

    .psw a {
        text-decoration: none;
        color: #007bff;
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="action_page.php" method="post">
            <label for="username">Username</label>
            <input id="username" type="Text" placeholder="username" />
            <label for="Password">Password</label>
            <input id="Password" type="Password" />
            <button type="button" class="Loginbtn">Login</button>
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </form>
    </div>
</body>
</html>