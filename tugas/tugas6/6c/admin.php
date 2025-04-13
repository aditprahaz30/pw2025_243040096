<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: cadetblue;
        }

        .container {
            background: rgba(255, 255, 255, .2);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, .2);
            color: white;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .logout-btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            background: #ff4b5c;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            transition: .3s;
        }

        .logout-btn:hover {
            background: #df4251;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang, Admin!</h1>
        <a href="?logout=true" class="logout-btn">Logout</a>
    </div>
    <?php
    session_start();

    if (!isset($_SESSION["admin"])) {
        header("Location: login.php");
        exit;
    }

    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: login.php");
        exit;
    }
    ?>
</body>

</html>