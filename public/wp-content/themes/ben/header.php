
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>B³ Bäckerei</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"> 

    <?php wp_head(); ?>
</head>

<body>  
<?php wp_body_open(); ?>    
    <header>
       
        <nav>
            <h1><a class="home" href="/">B³</a></h1>
                <button id="hamburger" class="closed desktop-hidden">
                <span class="line-1"></span>
                <span class="line-2"></span>
            </button>
          
            <ul>
                <li><a href="#intro">Philosophie</a></li>
                <li><a href="/?page_id=28">Workshops</a></li>
                <li><a href="/?page_id=16">Jobs</a></li>
            </ul>
        </nav>
        <div class="hero">
            <img src="./images/hero.jpg" alt="Brote im Regal"/>
            <div class="hero-text">
                <h1>B³ Bäckerei</h1>
                <p>Brot-Bäcker-Ben</p>
            </div>
           
        </div>
    </header>