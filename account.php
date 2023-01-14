<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="account.css" rel="stylesheet" />
    <link href="cssphp.css" rel="stylesheet" />
</head>

<body>

    <main>
        <div class="body">
            <?php
            // form login
            $conn = new mysqli('localhost', 'root', '', 'websitefgear');

            if (isset($_POST['login'])) {

                $lgusername = $_POST['lgusername'];
                $lgpassword = $_POST['lgpassword'];

                if (!empty($lgusername) && !empty($lgpassword)) {
                    try {
                        $cmd = mysqli_query($conn, "select * from account where userName = '$lgusername' and passWord = '$lgpassword'");
                        if (mysqli_num_rows($cmd) > 0) {
                            echo "Login succeeded~!" . "<br>";
                            echo "<a class= 'server' href = 'fgear.php'>Back to HomePage</a>";
                        } else {
                            echo "Incorrect account or password~!" . "<br>";
                            echo "<a class='server' href = 'login.html'>Back to previous page</a>";
                        }
                    } catch (Exception $e) {
                        echo "Error~!" . "<br>";
                        echo "<a class='server' href = 'login.html'>Back to previous page</a>";
                    }
                } else {
                    echo "Please enter full imformation~!" . "<br>";
                    echo "<a class='server' href = 'login.html'>Back to previous page</a>";
                }
            }



            //form register
            if (isset($_POST['register'])) {

                $regUsername = $_POST['regUsername'];
                $regPassword = $_POST['regPassword'];
                $regPhoneNumber = $_POST['regPhoneNumber'];
                $regEmail = $_POST['regEmail'];

                if (!empty($regUsername) && !empty($regPassword) && !empty($regPhoneNumber) && !empty($regEmail)) {

                    if ($_POST['regrRepassword'] != $regPassword) {
                        echo "Re-enter the password does not match~!";
                    } else {
                        try {
                            $cmd = mysqli_query($conn, "insert into account (userName, passWord, phoneNumber, email) values ('$regUsername', '$regPassword', $regPhoneNumber, '$regEmail')");
                            if ($cmd == true) {
                                echo "Successful account registration~!" . "<br>";
                                echo "<a class='server' href='login.html'>Login</a>";
                            } else {
                                echo "Regitation failed!";
                            }
                        } catch (Exception) {
                            echo "Account already exists~!" . "<br>";
                            echo "
                            <a class='server' href = 'register.html'>Back to previous page</a>
                            ";
                        }
                    }
                } else {
                    echo "Please enter full imformation~!" . "<br>";
                    echo "<a class='server' href = 'register.html'>Back to previous page</a>";
                }
            }

            ?>
        </div>
    </main>

</body>

</html>