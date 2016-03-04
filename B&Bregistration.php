<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">





<head>
    <meta charset="UTF-8">
    <title>Property Registration</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>

    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>


</head>

<div class='container'>
<header>
    <section class="right">
        <div class="left">
            <a href="Home.php"><img src = "assets/b&blogotransparent.png" id="img"></a>


        </div>

        <?

            if ($_SESSION["user"] != null) {
            echo "<p id='loginText'>Currently signed in as: " . $_SESSION["user"];
            echo "    not you?</p><button id='logout()' onclick='logout()'>LOGOUT</button>";
            }else{
            echo "<p id='loginText'>currently not logged in!";
            }


            ?> <script>
            function logout() {
                window.location = "http://thebbhubdotcom.azurewebsites.net/home.php?value=logout";
            }
        </script>
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
    </section>


</header>
<hr width="100%" align="left" size="1" color="#d3d3d3">
<body>

<main>

    <form>

        <table class="table1">
            <tr><td colspan="2">List your Property!</td></tr>
            <tr><td class="small">* Required Fields</td></tr>

            <tr>
                <td><label for="bbname">B&B Name: *</label></td>
                <td><input id="bbname" type="text" class="inputform" name="bbname" placeholder="Enter your B&B Name" required /></td>
            </tr>
            <tr><td>
                <label for="address">Address: *</label></td>
                <td><input id="address" type="text" class="inputform" name="address" placeholder=" Enter first line of your address" size="30" maxlength="50" required /></td>
            </tr>

            <tr><td>
                <label for="address2">Address Line 2: *</label></td>
                <td><input id="address2" type="text" class="inputform" name="address2" placeholder=" Enter second line of your address" size="30" maxlength="50" required /></td>
            </tr>

            <tr><td>
                <label for="city">City: *</label></td>
                <td><input id="city" type="text" class="inputform" name="city" placeholder="Enter City" size="30" maxlength="50" required /></td>
            </tr>


            <tr><td>
                <label for="telephone">Telephone: *</label></td>
                <td><input id="telephone" type="text" class="inputform" name="telephone" placeholder=" Enter your telephone number" size="20" maxlength="20" required /></td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email: *</label></td>
                <td><input id="email" type="text" class="inputform" name="email" placeholder="email" size="30" maxlength="50" required /></td>
            </tr>




            <tr><td>
                <label for="bbdescription">B&B Description: *</label></td>
                <td><input id="bbdescription" type="text" class="inputform" name="bbdescription" placeholder=" Enter a description of your B&B" size="30" maxlength="50" required /></td>
            </tr>

            <tr><td>
                <label for="roomdescription">Room Description: *</label></td>
                <td><input id="roomdescription" type="text" class="inputform" name="roomdescription" placeholder=" Enter a description of your rooms" size="30" maxlength="50" required /></td>
            </tr>
            <tr><td>
                <label for="price">Price: *</label></td>
                <td><input id="price" type="text" class="inputform" name="price" placeholder="Enter the price per night" required /></td>
            </tr>
            <tr><td>
                <label for="checkin">Check-in time: *</label></td>
                <td><input id="checkin" type="text" class="inputform" name="check-in" placeholder="Enter the check-in time" required /></td>
            </tr>

            <tr><td>
                <label for="checkout">Check-out time: *</label></td>
                <td><input id="checkout" type="text" class="inputform" name="check-out" placeholder="Enter the check-out time" required /></td>
            </tr>

            <tr><td>
                <label for="picture">Upload a picture: *</label></td>
                <td><input id="picture" type="text" class="inputform" name="picture" required /></td>
            </tr>

            <tr><td>
                <label  for="pets">Pets Allowed: *</label></td>
                <td><select id="pets" class="inputform" name="title">
                    <option value="">Select Yes or No</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
                </td>
            </tr>
            <tr><td></td>
                <td><p align="right" ><input id="submit" type="submit" value="Submit" class="submit" /></p></td>
            </tr>
        </table></form>

    <div class="right2">


        <table class="table2">
            <tr><td colspan="2"><p>Message Board - advertisements - user info</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 1</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 2</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 3</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 4</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 5</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 6</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 7</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 8</p></td></tr>
            <tr class="tr2"><td class="t2"><p>row 9</p></td></tr>







        </table>
    </div>


</main>
</div>
</body>
    <div class="foot">
        <footer>

            <p>Copyright. Team D Solutions.</p>
        </footer></div>

</html>