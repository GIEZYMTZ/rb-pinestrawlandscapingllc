<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ./quote.html");
    exit;
}

function clean($value) {
    return htmlspecialchars(trim($value ?? ""), ENT_QUOTES, "UTF-8");
}

$full_name    = clean($_POST["full_name"] ?? "");
$email        = clean($_POST["email"] ?? "");
$phone_number = clean($_POST["phone_number"] ?? "");
$zip_code     = clean($_POST["zip_code"] ?? "");
$message_text = clean($_POST["message"] ?? "");
$services     = $_POST["services"] ?? [];

if (!is_array($services)) {
    $services = [];
}

$clean_services = array_map(function ($service) {
    return htmlspecialchars(trim($service), ENT_QUOTES, "UTF-8");
}, $services);

$services_list = !empty($clean_services)
    ? implode(", ", $clean_services)
    : "No services selected";

/*
|--------------------------------------------------------------------------
| CAMBIA SOLO ESTO PARA PROBAR
|--------------------------------------------------------------------------
| $to_email   = tu correo personal para recibir pruebas
| $from_email = un correo REAL creado en el dominio del hosting
|
| Ejemplo:
| $to_email   = "tuprueba@gmail.com";
| $from_email = "quotes@tudominio.com";
|--------------------------------------------------------------------------
*/

$to_email   = "jr.carlos.arcm@gmail.com";
$from_email = "no_repoly@rb-pinestrawlandscapingllc.com";
$from_name  = "R&B Pine Straw Landscaping Website";

$subject = "New Quote Request - R&B Pine Straw Landscaping";

$headers  = "From: {$from_name} <{$from_email}>\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$body = "
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      color: #1f1f1f;
      padding: 24px;
      margin: 0;
    }
    .wrapper {
      max-width: 700px;
      margin: 0 auto;
      background: #ffffff;
      border: 1px solid #e5e5e5;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.06);
    }
    .header {
      background: #234b17;
      color: #ffffff;
      padding: 24px;
    }
    .header h1 {
      margin: 0;
      font-size: 24px;
    }
    .content {
      padding: 24px;
    }
    .intro {
      margin: 0 0 20px;
      line-height: 1.7;
      color: #444;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      text-align: left;
      padding: 12px 14px;
      border-bottom: 1px solid #ececec;
      vertical-align: top;
    }
    th {
      width: 180px;
      background: #fafafa;
      color: #222;
    }
    .footer {
      padding: 18px 24px;
      background: #fafafa;
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class='wrapper'>
    <div class='header'>
      <h1>New Quote Request</h1>
    </div>

    <div class='content'>
      <p class='intro'>
        A new quote request was submitted through the website. Review the details below and follow up with the customer as soon as possible.
      </p>

      <table>
        <tr>
          <th>Full Name</th>
          <td>{$full_name}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{$email}</td>
        </tr>
        <tr>
          <th>Phone Number</th>
          <td>{$phone_number}</td>
        </tr>
        <tr>
          <th>Zip Code</th>
          <td>{$zip_code}</td>
        </tr>
        <tr>
          <th>Services</th>
          <td>{$services_list}</td>
        </tr>
        <tr>
          <th>Message</th>
          <td>{$message_text}</td>
        </tr>
      </table>
    </div>

    <div class='footer'>
      This message was sent automatically from the R&B Pine Straw Landscaping website quote form.
    </div>
  </div>
</body>
</html>
";

$sent = mail($to_email, $subject, $body, $headers);

if ($sent) {
    header("Location: ./quote.html?status=success");
    exit;
} else {
    header("Location: ./quote.html?status=error");
    exit;
}
?>