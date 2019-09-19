<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/styles.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
</head>

<div class="container-fluid" id="header">
    <div class="row">
        <!-- Logo -->
        <div class="col-lg-6">
            <a href="/">
                <img class="logo img-responsive" src="img/mi-patio-logo-white-drop.png" />
            </a>
        </div>

        <!-- Phone number and reservation button -->
        <div class="request-button col-lg-6">
            <h2 class="display-4"><a href="tel:985-370-0006">(985) 370-0006</a></h2>
            <a href="/reservations">
                <img class="img-responsive" src="img/reservation-button.png" />
            </a>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- Links -->
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
      
            <!-- Menu Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false">
                Menu
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/appetizers">Appetizers</a>
                    <a class="dropdown-item" href="/soups">Soups</a>
                    <a class="dropdown-item" href="/salads">Salads</a>
                    <a class="dropdown-item" href="/a-la-carte">A La Carte</a>
                    <a class="dropdown-item" href="/lunch">Lunch</a>
                    <a class="dropdown-item" href="/dinner">Dinner</a>
                </div>
            </li>

            <!-- Specials Link -->
            <li class="nav-item">
                <a class="nav-link" href="/specials">Specials</a>
            </li>

            <!-- Events Link -->
            <li class="nav-item">
                <a class="nav-link" href="/events">Events</a>
            </li>

            <!-- Gallery Link -->
            <li class="nav-item">
                <a class="nav-link" href="/gallery">Gallery</a>
            </li>

            <!-- Job Applications Link -->
            <li class="nav-item">
                <a class="nav-link" href="/about-us">Apply For Us</a>
            </li>

            <!-- Contact Us Link -->
            <li class="nav-item">
                <a class="nav-link" href="/contact-us">Contact Us</a>
            </li>
        </ul>
    </nav>
</div>

<!-- Javascript -->
<script>
    $('.dropdown-toggle').dropdown();
</script>