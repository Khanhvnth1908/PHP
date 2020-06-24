<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <header>
      <a href="index.html" class="header-brand">mmtuts</a>
      <nav>
        <ul>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="about.html">About me</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="cases.php" class="header-cases">Cases</a>
      </nav>
    </header>
    <main>
        <?php
        require_once "login.php";
        $connection = new mysqli($hn,$un,$pw,$db);
        if ($connection->connect_errno)die("Fatal Error");


        $query = "select * from images";
        $result = $connection->query($query);
        if (!$result)die("Fatal Error");

        $rows = $result->num_rows;
        ?>

<!--   -->
      <section class="cases-links">
        <div class="wrapper">
          <h2>Cases</h2>
           <?php
           for ($j = 0;$j<$rows;$j++){
               $row = $result->fetch_array(MYSQLI_NUM);
               echo " <a href=\"case1.html\">
                <div class=\"cases-link\">
                    <div class=\"img-link\">
                        <img src=\"./image/$row[3]\" alt=\"\" width=\"100%\" height=\"100%\">
                    </div>
                    <p>$row[1]</p>
                    <span>$row[2]</span>
                </div>
            </a>";
           }
           ?>
          </a>

        </div>
      </section>

    </main>
    <div class="wrapper">
      <footer>
        <ul class="footer-links-main">
          <li><a href="#">Home</a></li>
          <li><a href="#">Cases</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="footer-links-cases">
          <li><p>Latest cases</p></li>
          <li><a href="#">MALING SHAOLIN - WEB DEVELOPMENT</a></li>
          <li><a href="#">EXCELLENTO - WEB DEVELOPMENT, SEO</a></li>
          <li><a href="#">MMTUTS - YOUTUBE CHANNEL</a></li>
          <li><a href="#">WELTEC - VIDEO PRODUCTION</a></li>
        </ul>
        <div class="footer-sm">
          <a href="#">
            <img src="img/youtube-symbol.png" alt="youtube icon">
          </a>
          <a href="#">
            <img src="img/twitter-logo-button.png" alt="youtube icon">
          </a>
          <a href="#">
            <img src="img/facebook-logo-button.png" alt="youtube icon">
          </a>
        </div>
      </footer>
    </div>
  </body>
</html>
