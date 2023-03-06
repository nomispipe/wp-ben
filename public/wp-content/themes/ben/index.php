<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>B³ Bäckerei</title>
    <link rel='stylesheet' href='./style.css'>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"> 
</head>

<body>
    <header>
       
        <nav>
            <h1><a class="home" href="/">B³</a></h1>
                <button id="hamburger" class="closed desktop-hidden">
                <span class="line-1"></span>
                <span class="line-2"></span>
            </button>
          
            <ul>
                <li><a href="#intro">Philosophie</a></li>
                <li><a href="#workshops">Workshops</a></li>
                <li><a href="#jobs">Jobs</a></li>
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

    <main>
        <section id="intro">
            <h2>B³ IS OUR WAY</h2>
            <div class="grid">
                <div class ="wrapper-image">
                    <h3>B¹ - Brot</h3>
                    <p>Begonnen hat alles vor 6000 Jahren, im heutigen Ägypten wurde das aller erste Brot gebacken. </p>
                    </div>
                <img class="grid-image" src="./images/hero.jpg" alt="Brote im Regal"/>
               
               
                
                <img class="grid-image mobile-hidden" src="./images/hero.jpg" alt="Brote im Regal"/>
                <div class ="wrapper-image">
                    <h3>B² - Bäcker</h3>
                    <p>Ohne unsere Bäckermeister wären wir nicht wo wir heute sind, darum sind uns Mitarbeiter genauso wichtig wie unsere Kunden, das schmeckt man auch raus. </p>
                    </div>
                    <img class="grid-image desktop-hidden" src="./images/hero.jpg" alt="Brote im Regal"/>
                <div class ="wrapper-image">
                    <h3>B³ - Ben</h3>
                    <p>Nicht vor 6000 Jahren aber vor 16 Jahren hat Ben seinen Traum realisiert seine eigene Bäckerei, und mit genauso viel Begeisterung wird er uns die nächsten 6000 Jahre bebacken. </p>
                    </div>
                <img class="grid-image" src="./images/hero.jpg" alt="Brote im Regal"/>
                
        </div>
        </section>
        <section id="workshop">
           <h2>Lerne Backen bei B³</h2>
           <div class="grid">
            <div class="wrapper-text">
                <p>
                    Egal ob Profi oder Anfänger, Ben nimmt sich für euch Zeit und macht euch in kürzester Zeit zum Bäckermeister.
                </p>
                <a href="/">buche jetzt</a>
            </div>
            <img class="grid-image" src="./images/hero.jpg" alt="Brote im Regal"/>

           </div>
        </section>
        <section id="jobs">
            <h2>Lerne Backen bei B³</h2>
           <div class="grid">
            <img class="grid-image" src="./images/hero.jpg" alt="Brote im Regal"/>
            <div class="wrapper-text">
                <p>
                    Dann werde Teil von B³, und mach dein Hobby zum Beruf. Täglich neue Herausforderungen, gratis Backwaren für daheim und viele weitere Boni warten auf dich. 
                </p>
                <a href="/">bewerben</a>
            </div>
                

           </div>
        </section>
    </main>

    <footer>
        <ul>
            <li class="bold">B³ - Home</li>
            <li>Stadtplatz 3</li> 
            <li>5020 Salzburg</li>  
            <li>home@b3.a</li> 
            <li>+43 664 123 34 09</li> 
        </ul>
        <ul>
            <li class="bold">B³ - Sky</li>
            <li>Skylane 3</li> 
            <li>5020 Salzburg</li>  
            <li>sky@b3.at</li> 
            <li>+43 664 123 34 09</li> 
        </ul>
        <ul>
            <li class="bold">B³ - Rust</li>
            <li>Gewerbepark 3</li> 
            <li>5020 Salzburg</li>  
            <li>rust@b3.at</li> 
            <li>+43 664 123 34 09</li> 
        </ul>

    </footer>
    <script src='./main.js'></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            MainNav.init();
        });
    </script>
</body>

</html>