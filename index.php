<?php
// Tillfälliga restauranger.
// Senare hämtar vi restaurangerna från MySQL-databasen.

$restaurants = [
    [
        "id" => 1,
        "name" => "Bella Italia",
        "location" => "Stockholm",
        "description" => "Upplev autentisk italiensk mat.",
        "image" => "images/italian.jpg"
    ],
    [
        "id" => 2,
        "name" => "Sushi House",
        "location" => "Södertälje",
        "description" => "Färsk sushi och japanska specialiteter.",
        "image" => "images/sushi.jpg"
    ],
    [
        "id" => 3,
        "name" => "Steak House",
        "location" => "Stockholm",
        "description" => "Kött av högsta kvalitet.",
        "image" => "images/steak.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant Booking | Boka ditt bord</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header>
        <nav class="navbar">

            <div class="logo">
                <h2>RestaurantBooking</h2>
            </div>

            <ul class="nav-links">
                <li><a href="index.php">Hem</a></li>
                <li><a href="#restaurants">Restauranger</a></li>
                <li><a href="mybookings.php">Mina bokningar</a></li>
                <li><a href="login.php" class="login-btn">Logga in</a></li>
            </ul>

        </nav>
    </header>


    <!-- HERO SECTION -->
    <section class="hero">

        <div class="hero-content">

            <h1>Hitta och boka din nästa restaurangupplevelse</h1>

            <p>
                Upptäck fantastiska restauranger och boka ditt bord
                snabbt och enkelt.
            </p>

            <!-- SEARCH BAR -->
            <form action="#restaurants" method="GET" class="search-box">

                <input
                    type="text"
                    id="searchInput"
                    name="search"
                    placeholder="Sök efter restaurang..."
                >

                <button type="submit">Sök restaurang</button>

            </form>

        </div>

    </section>


    <!-- RESTAURANTS SECTION -->
    <section class="restaurants" id="restaurants">

        <h2>Populära restauranger</h2>

        <p class="section-description">
            Utforska våra restauranger och hitta din favorit.
        </p>

        <div class="restaurant-container">

            <?php foreach ($restaurants as $restaurant): ?>

                <div class="restaurant-card">

                    <img
                        src="<?php echo htmlspecialchars($restaurant['image']); ?>"
                        alt="<?php echo htmlspecialchars($restaurant['name']); ?>"
                    >

                    <div class="restaurant-info">

                        <h3>
                            <?php echo htmlspecialchars($restaurant['name']); ?>
                        </h3>

                        <p class="location">
                            <?php echo htmlspecialchars($restaurant['location']); ?>
                        </p>

                        <p>
                            <?php echo htmlspecialchars($restaurant['description']); ?>
                        </p>

                        <a
                            href="booking.php?restaurant_id=<?php echo $restaurant['id']; ?>"
                            class="book-btn"
                        >
                            Boka bord
                        </a>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <div class="footer-content">

            <h3>RestaurantBooking</h3>

            <p>
                Din enkla väg till fantastiska restaurangupplevelser.
            </p>

            <p>
                © <?php echo date("Y"); ?> RestaurantBooking.
                Alla rättigheter förbehållna.
            </p>

        </div>

    </footer>

    <script src="js/script.js"></script>

</body>
</html>