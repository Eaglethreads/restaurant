<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restraunt</title>
    <link rel="stylesheet" href="booktable.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class="bg">
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">About</a></li>
                <li><a href="index.html">Menu</a></li>
                <li><a href="index.html">Testimonial</a></li>
                <li><a href="index.html">Contact</a></li>
                <li><a href="booktable.html">Reseravtion</a></li>
            </ul>
            <h1 class="logo">Urban Spice Kitchen</h1>
        </div>
    </nav>  
    <section class="banner">
        <h2>BOOK YOUR TABLE NOW</h2>
        <DIV CLASS="card-container">
            <div class="card-img"><!--img here --></div>
            <div class="card-content">
                <h3>Reservation</h3>
                <?php
$SERVER = 'localhost';
$username = 'root';
$password = '';
$dbname = 'reservation';

// Establish a connection to the database
$conn = mysqli_connect($SERVER, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $day = mysqli_real_escape_string($conn, $_POST['day']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $numPerson = mysqli_real_escape_string($conn, $_POST['numPerson']);

    // Your SQL query to insert data into the database
    $sql = "INSERT INTO details (day, time, name, number, numPerson) 
            VALUES ('$day', '$time', '$name', '$number', '$numPerson')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // If the query is successful, display a success message
        echo "<script>alert('Booking successful!');</script>";
    } else {
        // If the query fails, display an error message
        echo "<script>alert('Booking failed. " . mysqli_error($conn) . "');</script>";
    }
}

// Close the database connection
mysqli_close($conn);
?>


                <form action="" method="post">
                    <div class="form-row">
                        <select name="day">
                            <option value="day-select">Select Day</option>
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                        </select>
                        <input  type="time" id="appt" name="time" min="09:00" max="21:00" required />

                        
                    </div>

                    <div class="form-row">
                        <input name="name" type="text" placeholder="full name">
                        <input name="number" type="tel" placeholder="Phone Number" maxlength="10">
                    </div>
                    <div class="form-row">
                        <input name="numPerson" type="number" placeholder="How Many Persons?" min="1">
                        <input type="submit" value="BOOK TABLE">
                    </div>

                </form>
            </div>
        </DIV>
    </section>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Menu</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Testimonial</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Reservation</a></li>
        </ul>
      </footer>
</body>

</html>