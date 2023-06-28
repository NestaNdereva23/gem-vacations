<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gem Vacations</title>

   <!-- swiper css link -->
   <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">
   <!-- custom css file link -->
   <link rel="stylesheet" href="css/home.css">
</head>
<body bgcolor="grey">




<!-- header section starts -->

      <section class="header">
            <a href="home.php" class="logo">Gem Vacations</a>

      <nav class="navbar">
            <a href="admin.php">admin</a>
            <a href="home.php">home</a> 
            <a href="registered_users.php">registered users</a> 

</section>
    


<!-- header section ends -->


<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is book_db
$database = 'book_db';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM book_form ORDER BY name DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->



<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>registered users</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Gem Vacations Registered Users</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>location</th>
                <th>guests</th>
                <th>arrivals</th>
                <th>leaving</th>
                <th>price</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['name'];?></td>
                
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['location'];?></td>
                <td><?php echo $rows['guests'];?></td>
                <td><?php echo $rows['arrivals'];?></td>
                <td><?php echo $rows['leaving'];?></td>
                <td><?php echo $rows['price'];?></td>

            </tr>
            <?php
                }
            ?>
        </table>
    </section>



</body>
 
</html>