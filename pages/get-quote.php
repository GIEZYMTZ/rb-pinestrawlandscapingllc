<!DOCTYPE html>
<html>
<head>
    <title>Get quote</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="description" content="With over 10 years of experience in lawn maintenance and landscaping solutions to make your garden a welcoming place,  we provide high-quality, professional landscaping services in Lexington, SC and surrounding areas">
    <link rel="canonical" href="https://djdeleonlandscapingand-irrigationllc.com">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css?v=0703202601234">
</head>
<body>
    <nav>
        <!-- <div id="phone-nav"></div> -->
        <a href="tel:+18033970449" class="btn-nav-phone">&#9742;</a>
        <div id="logo">
            <a href="/index.html" style="margin-top: 0px; margin-left: 0px;">
                <img src="/img/favicon1.png" alt="" width="150px" height="auto">
            </a>
        </div>
        <ul>
            <a class="btn-nav-phone" onclick="openNav()">&#9776;</a>
            <li><a class="hidden" href="/index.html#services">Services</a></li>
            <li><a class="hidden" href="/index.html#about-us">About us</a></li>
            <li><a class="hidden" href="#">Rewiews</a></li>
            <li><a class="hidden" href="/index.html#location">Service areas</a></li>
            <li><a class="active hidden" href="#">Get Quote</a></li>
        </ul>
        <!-- Este menu solo aparece cuando se abre la pagina en dispositivos pequeños(smartphone) -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/index.html">Home</a>
            <a href="/index.html#services" onclick="closeNav()">Services</a>
            <a href="/index.html#about-us" onclick="closeNav()">About us</a>
            <a href="#"  onclick="closeNav()">Rewiews</a>
            <a href="/index.html#location" onclick="closeNav()">Service areas</a>
            <a href="#">Get quote</a>
        </div>
    </nav>
    <!-- Formulario para solicitar un presupuesto, se envia a get_quote.php para procesar la informacion y enviar el correo electronico -->
    <div class="container">
        <div class="container-fluid">
            <div id="sectionGetQuote" class="row">
                <div class="col-md-6">
                    <form target="_top" id="formgetquote" action="/html/get-quote.php" method="POST" class="row g-3"
                        style="
          margin-left: auto; 
          margin-right: auto;
          padding: 15px;
          border: 1px solid rgb(216, 210, 210);
          border-radius: 5px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          background-color: rgb(255, 255, 255);">
                        <div class="col-md-6">
                            <input type="text" name="full name" class="form-control" placeholder="Full name"
                                aria-label="full name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email Addres"
                                aria-label="Email Addres" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="zip code" class="form-control" placeholder="Zip code"
                                aria-label="Zip code" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="Phone number" class="form-control" placeholder="Phone number"
                                aria-label="Phone number" required>
                        </div>
                        <div class="col-12" style="font-size:1.1rem">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Service1" value="LAWN CARE RESIDENCIAL"
                                    id="service1">
                                <label class="form-check-label" for="service1">
                                    LAWN CARE RESIDENCIAL
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Service2"
                                    value="LAWN CARE COMERCIAL" id="service2">
                                <label class="form-check-label" for="service2">
                                    LAWN CARE COMERCIAL
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Service3" value="HARDSCAPING"
                                    id="service3">
                                <label class="form-check-label" for="service3">
                                    HARDSCAPING
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Service4" value="IRRIGATION"
                                    id="service4">
                                <label class="form-check-label" for="service4">
                                    IRRIGATION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Service5" value="DRIAN SOLUTION"
                                    id="service5">
                                <label class="form-check-label" for="service5">
                                    DRAIN SOLUTION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Service6" value="SOD INSTALLATION"
                                    id="service6">
                                <label class="form-check-label" for="service6">
                                    SOD INSTALLATION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Service7" value="LANDSCAPING DESIGN"
                                    id="service7">
                                <label class="form-check-label" for="service7">
                                    LANDSCAPING DESIGN
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="Message" placeholder="Leave a comment here"
                                    id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Describe your needs or questions</label>
                            </div>
                        </div>
                        <div class="col-12" style="text-align: end;">
                            <button class="btn btn-primary"
                                style="background-color: rgb(26, 100, 142); border-color: rgb(26, 100, 142);color: aliceblue; font-weight:600 ;"
                                type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6" style="display: flex; text-align: center;align-items: center">
                    <div>
                        <p>It's a pleasure to help you</p>
                        <h1 style="font-size: 2.7rem; color:rgb(26, 100, 142);">Get a free estimate</h1>
                        <p>Send us your contact information and select the service you want to receive a quote for. In
                            the text area
                            you can write additional information</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <div id="pay-method">
        <p>We offer various payment methods such as: <b>Cash</b>    -   <b>Zelle</b>     -       <b>Check</b></p>
    </div>
    <footer>
        <div class="footer-content">
            <img src="/img/logo-completo2.png" alt="" width="250px">
            <div class="schedule">
                <h2>Schedule</h2>
                <p>Mon - Fri 7am to 5pm <br>Sat 7pm to 2pm<br>Sun Closed</p>
            </div>
            <div class="contact">
                <h3>Do you have any questions?</h3>
                <p>It'll be apleasure chatting with you by Whats or email. if you prefer call me</p>
                <!-- <a style="font-size: 15px;" href="https://wa.me/014046307964">Send me a message  <i class="material-icons" style="font-size:20px;color:rgb(83, 83, 83)">chat</i></a> -->
                <button onclick="document.location='https://wa.me/+18033970449'"
                    style="font-size:15px; background-color: rgb(167, 233, 165);">WhatsApp <i class="material-icons"
                        style="font-size: 22px;">chat</i></button>
                <button onclick="document.location='mailto:dj.deleons.landscaping@gmail.com'"><i class="material-icons"
                        style="font-size: 20px;">email</i></button>
                <button onclick="document.location='tel:+18033970449'"><i class="material-icons"
                        style="font-size: 20px;">call</i></button>
            </div>
        </div>
        <hr>
        <p style="font-size:1rem">©2026 DJ de Leon landscaping & irrigation llc . All rights reserved. Powered by <a
                href="www.desarrolladoreswebmexa.com">DesarrolladoresWebMexa</a></p>
    </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
    <!--Muestra y oculta el menu lateral cuando se abre la pagina en dispositivos pequeños(smartphone)  -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

    </script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Email configuration
    $from = "DJ de Leon Website <MyWebSite@mywebsite.com>";
    $to = "dj.deleons.landscaping@gmail.com";
    $subject = "Cliente desea una cotización de DJ de Leon landscaping & irrigation llc";
    $headers = "From: $from\r\n";
    $headers .= "Cc: giezy3d@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Start building the HTML message
    $message = "<html><head><style> table {border-collapse: collapse;width:100%} td, th {border-bottom: 2px solid #bfc3c9; text-align: left; padding: 8px;} th {background-color: #1660a7;color: white} tr:nth-child(even) {background-color: #bfc3c9;}</style></head><body>";
    $message .= "Revisa la información de contacto que proporcionó desde el sitio web y comunicate lo antes posible.";
    $message .= "<h2>Detalles de la cotización</h2>";
    $message .= "<table cellpadding='5' cellspacing='0'>";
    $message .= "<tr><th>Campo</th><th>Valor</th></tr>";

    // Loop through POST data
    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            // Handle checkboxes (only include selected ones)
            $selectedValues = array_filter($value, function ($v) {
                return $v === 'on';
            });
            if (!empty($selectedValues)) {
                $message .= "<tr><td>". htmlspecialchars($key) . "</td><td>" . implode(", ", array_keys($selectedValues)) . "</td></tr>";
            }
        } else {
            // Add other inputs
            $message .= "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }
    }

    $message .= "</table>";
    $message .= "</body></html>";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
    echo "<script>
    alert('The form has been sent correctly, We will contact you as soon as possible');
    </script>";
} else {
    echo "<script>alert('It was not possible sending the form, you can contact us at 803-397-0449');</script>";
}
}
?>
<!-- Este script impide que el form se reenvia al recargar la pagina. -->
<script>history.replaceState(null,null,location.pathname)</script>
</body>

</html>