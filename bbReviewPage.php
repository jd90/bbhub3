<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>

    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>


</head>

<div class='container'>
    <header>
        <section class="right">
            <div class="left">
                <a href="Home.php"><img src ="assets/b&blogotransparent.png" id="img"></a>


            </div>
            <div class="rightside">
                <?php
                if ($_SESSION["user"] != null) {
                    echo "<p id='loginText'>Currently signed in as: " . $_SESSION["user"];
                    echo "    not you?</p><button id='logout()' onclick='logout()'>LOGOUT</button>";
                }else{
                    echo "<p id='loginText'>currently not logged in";
                }

                ?>
            </div>
            <script>
                function logout() {
                    window.location = "http://thebbhubdotcom.azurewebsites.net/home.php?value=logout";
                }
            </script>
        </section>



    </header>

    <div class="nav">
        <nav>
            <ul class="moveright">

                <!--<li><a href="B&Bregistration.html">Help</a></li>-->
                <li><a href="OwnerRegistration.php">Register</a></li>
                <!-- <li><a href="B&Bregistration.html">Register</a></li> -->
                <li><a href="OwnerSignIn.php">Owner's Page</a></li>
                <li><a href="Home.php">Search</a></li>


            </ul>

        </nav>
    </div>





    <body>
    <main>

        <?php
        /**
         * Created by PhpStorm.
         * User: 9540730
         * Date: 25/02/2016
         * Time: 13:45
         */


        if($_POST['bbname']!= null) {
            $owneremail = $_SESSION['user'];
            //$ownerid= $_POST['ownerid'];   [ownerid] '".$ownerid."',
            $bbname = $_POST['bbname'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];

            $bbdescription = $_POST['bbdescription'];
            $roomdescription = $_POST['roomdescription'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $pets = $_POST['pets'];


            $conn = new PDO ("sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {
                $st1 = "INSERT INTO [B&B] ([bbname], [address], [city], [telephone], [email]) VALUES ('" . $bbname . "', '" . $address . "', '" . $city . "', '" . $telephone . "', '" . $owneremail . "')";
                $conn->exec($st1);

            } catch (PDOException $e) {
                print"$e";
            }

        }


        ?>

        <table class="table1">
            <?php
            $email = $_SESSION['user'];
            $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            try{
                $st = $conn-> query("SELECT * FROM [B&B] WHERE [email] = '$email'");
                foreach($st->fetchAll() as $row) {
                    $newhtml =
                        <<<NEWHTML
                        <tr>
                   <td>{$row[city]}</td>
                    <td>{$row[bbname]}</td>
                    <td>{$row[address]}</td>
                    <td>{$row[email]}</td>
            </tr>
NEWHTML;

                    print($newhtml);
                }
                echo "Here are the B&Bs listed under your ownership:";
            }
            catch(PDOException $e)
            {print"$e";}
            ?>

            </table>

    </main>


</body><div class="foot">
    <footer>

        <p>Copyright. Team D Solutions.</p>
    </footer></div>
</html>