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
        </section>
</header>

<div class="nav">

    <nav>



        <ul class="moveright">

            <!--<li><a href="B&Bregistration.html">Help</a></li>-->
            <li><a href="B&Bregistration.php">Register</a></li>
            <!-- <li><a href="B&Bregistration.html">Register</a></li> -->
            <li><a href="OwnerSignIn.php">Owner's Page</a></li>
            <li><a href="Home.php">Search</a></li>


        </ul>

    </nav>



</div>
<hr width="100%" align="left" size="1" color="#d3d3d3">

<body>
<main>


    <h4>take this out later...</h4>
    <div class="main">
        <h3 class="pagetitle" >Here are your search results...</h3>

    <?php
    $city = $_POST['location'];
    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    try{
        $st = $conn-> query("SELECT * FROM [B&B] WHERE [city] = '$city'");


        foreach($st->fetchAll() as $row) {
            $newhtml =
                <<<NEWHTML
                    <div class="table1">
    <p>According to our database, your search of: <strong>{$row[city]}</strong> has returned the following results: </p>
    <p><strong>{$row[city]}</strong></p>
    <p><strong>{$row[bbname]}</strong></p>
    <p><strong>{$row[address]}</strong></p>
    <p><strong>{$row[email]}</strong></p>




    <p><a href="Customerinfo.html"><input type="submit" value="BOOK" /></a></p>



</div>
NEWHTML;
            print($newhtml);
        }
    }
    catch(PDOException $e)
    {print"$e";}
    ?>
</div>
</main>
<div class="foot">
    <footer>

        <p>Copyright. Team D Solutions.</p>
    </footer></div>
</body>
</div>
</html>