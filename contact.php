<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css"/>
    <script src="form.js"></script>

    <title>2021 Virtual Music Festival</title>

  </head>

  <body>
    <nav>
      <ul class="topnav">
      <li><a class="active" href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="product.php">PRODUCT</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="reg.php">SING UP</a></li>
        <li><a href="log.php">LOG IN</a></li>
        <li><a href="order.php">ORDER</a></li>
      </ul>
    </nav>

    <!-- The H1 + main image Section -->
    <div id="container">
      <div class="home-section" id="heading-section">
        <h1>Online Grocery Store</h1>
      </div>

  </body>

<body>
  <!-- The Contact Section -->
      <div class="home-section" id="contact">
        <h2>CONTACT</h2>
        <h3>WRITE SOMETING</h3>

        <div class="wrapper">
          <div id="error_message"></div>
            <form id="myform" onsubmit="return validate();">
              <div class="input_field">
                <input type="text" placeholder="Name" id="name">
              </div>
              <div class="input_field">
                <input type="text" placeholder="Subject" id="subject">
              </div>
              <div class="input_field">
                <input type="text" placeholder="Email" id="email">
              </div>
              <div class="input_field">
                <textarea placeholder="Message" id="message"></textarea>
              </div>
              <div class="btn">
                <input type="submit">
              </div>
            </form>
          </div>
          
        </div>

<!-- The Footer Section -->
<footer>
  <p>Powered by me</p>
</footer>

</body>
</html>