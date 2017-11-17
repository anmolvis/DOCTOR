<!DOCTYPE html>
<head>
<title>Carewell Hospital| dignosis</title>
<link href="doctor.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
    <nav>
        <h1>CareWell Hospital</h1>
        <ul id="nav">
            <li><a class="homered" href="landingpage.php">Home</a></li>   
            <li><a class="homeblack" href="login.html">Schedule An Appointment</a></li>
            <li><a class="homeblack" href="#">Quick Enquiry</a></li>
            <li><a class="homeblack" href="#">About Us</a></li>
            <li><a class="homeblack" href="#">Search Here</a></li>
            
            </ul>
        </nav>
    </header>
    <div style="margin-top:62px;">
    <div id="doc">
    <h1>FIND A DOCTOR</h1>
    </div>
       
    </div>
    <table>
    <tr
    </table>
    </body>
    <?php
    $conn = mysqli_connect("localhost","root","123","ost");
    $res=mysqli_query($conn, "SELECT * FROM doctors");
    echo "<table border=1 row style='margin: 50px 0 0 350px'>"; 
    while($row=mysqli_fetch_array($res))
    {
        $img=$row["image"];
        $name=$row["Name"];
        $spe=$row["Specialist"];$age=$row['Age'];$qua=$row['Qualifications'];$exp=$row['Experience'];$id=$row['id'];
        echo "<tr>";
        echo "<td><img src='$img' height='150' width='200'></td><td>Doctor ID: <b>$id</b><br>Name: <b>$name</b><br>Speciality: <b>$spe</b><br>Age: <b>$age</b><br>Qualification: <b>$qua</b><br>Year of Experience: <b>$exp</b></td></tr>";
        
        
        
    }
    echo "</table>";
    ?>
