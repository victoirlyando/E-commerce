

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
        <!-- <link rel="icon" type="image/svg+xml" href="/favicon.svg" /> -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
        <!-- <link href="output.css" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="login.css">
        <title>Login / Register - Ujang Electronik Center</title>
    </head>
    <body>
        <div class="container">
        <div class="login">
            <h1>Ujang Center</h1>
            <form action="login.php" method="post" name="form_input">
                <input type="text" name="username" placeholder=" Masukkan Username">
                <input type="password" name="password" placeholder=" Masukkan Password">
                <span class="eye">
                    <i id="eye1" class="fa-solid fa-eye"></i>
                </span><br>
                <input type="checkbox" id="ingat">
                <label for="ingat">Remember Me</label><br><br>
                <button type="submit" name="input" value="LOGIN">LOGIN</button>
                <hr color="black">
                
                
            </form>
            <a href="userregister.php">SIGN UP</a>

        </div>
    </div>
</body>
</html>