<?php 

@include 'components/connect.php';

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo-1-300x140.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styl.css">
    <title>HADLUX - Strona główna</title>
</head>
<body>
    <div class="loader"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand text_logo" href="#"><img id="logo" src="logo-1-300x140.png" alt=""><b>HADLUX <small>Sp. z o.o.</small></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-address-card fa-beat"></i> &nbsp;<b>O FIRMIE</b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="oferta.php"><i class="fa-brands fa-buffer"></i> &nbsp;<b>OFERTA</b></a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i> &nbsp;<b>AKTUALNOŚCI</b>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="news.php"><i class="fa-solid fa-signs-post"></i>&nbsp;<b>NAJNOWSZE POSTY</b></a>
                    <a class="dropdown-item" href="harmonogramy.php"><i class="fa-solid fa-calendar-days"></i>&nbsp;<b>HARMONOGRAMY</b></a>
                    <a class="dropdown-item" href="przetargi.php"><i class="fa-solid fa-hand"></i>&nbsp;<b>PRZETARGI</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php"><i class="fa-solid fa-address-book"></i> &nbsp;<b>KONTAKT</b></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-recycle"></i> &nbsp;<b>JAK SEGREGOWAĆ ODPADY</b>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item jakich" href="pojemniki.php"><i class="fa-solid fa-dumpster"></i>&nbsp;<b>DO JAKICH POJEMNIKÓW WRZUCAĆ ODPADY?</b></a>
                    <a class="dropdown-item jakich" href="symbole.php"><i class="fa-regular fa-circle-question"></i>&nbsp;<b>CO OZNACZAJĄ SYMBOLE NA OPAKOWANIACH?</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pszok.php"><i class="fa-solid fa-book"></i> &nbsp;<b>REGULAMIN PSZOK</b></a>
                </li>
              </ul>
              <a href="https://bip.hadlux.sobotka.pl/" target="_blank"><img id="bip" src="480px-Logo_BIP_uproszczone.svg.png" width="50" class="mr-2" alt=""></a>
              <form class="form-inline d-flex my-2 my-lg-0" method="POST" action="search.php">
                <input id="search search_box" class="form-control mr-sm-2 form-control-sm szukaj" type="text" action="search.php" placeholder="SZUKAJ" name="search_box" aria-label="Search">
                <button id="search" class="btn btn-outline-success" type="submit" name="search_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
              </div>
        </div>
      </nav>
      <header class="page-header gradient" id="back">
        <div class="container-fluid p-5">
            <div class="row align-items-center justify-content-center">
              <div class="md-2"><img data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Środowisko ponad wszystko!" id="earth" class="img-fluid d-none d-sm-none d-md-none d-lg-block byc_moze hidden" src="earth.png" alt=""></div>
                <div class="col-md-4">
                    <h2 class="byc_moze hidden"><i class="fa-solid fa-address-card fa-beat"></i><b> O FIRMIE</b></h2>
                    <p class="byc_moze hidden">Zakład Usług Komunalnych HADLUX Sp. z o. o. w Sobótce rozpoczął swoją działalność 1 września 1993 r. Umowę Spółki zawarli Wspólnicy: 
                        – Gmina i Miasto Sobótka z 64 % udziałem,
                        – Pracownicy ze zlikwidowanego ZBMiUK z 26 % udziałem 
                        kapitału zakładowego Spółki.
                    </p>
                    <a href="#more" class="btn btn-primary text-light byc_moze hidden">Czytaj więcej</a>
                    <a href="#location" class="btn btn-warning text-light m-2 byc_moze hidden">Lokalizacja</a>
                </div>
                <div class="col-md-6"><img id="auta" class="rounded-pill img-fluid m-2 byc_moze hidden" width="900" src="auta_hadlux-1-1024x409.jpg" alt=""></div>
              </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L20,26.7C40,21,80,11,120,48C160,85,200,171,240,186.7C280,203,320,149,360,144C400,139,440,181,480,213.3C520,245,560,267,600,245.3C640,224,680,160,720,149.3C760,139,800,181,840,213.3C880,245,920,267,960,256C1000,245,1040,203,1080,154.7C1120,107,1160,53,1200,37.3C1240,21,1280,43,1320,69.3C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>      
    </header>
    <div class="container-fluid text-center"><h1 class="byc_moze hidden"><b>Być może zainteresuje cię również:</b></h1></div>
    <div class="container-fluid mt-5">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-4 text-center byc_moze hidden">
          <a href="pojemniki.php" class="text-decoration-none">
            <h4 id="kosze_tekst" class="mb-5 mt-5"><b>Do jakich pojemników wrzucać odpady?</b></h4>
            <img class="img-fluid o_firmie" width="400" id="kosze" src="kosze.png" alt="">
          </a>
        </div>
        <div class="col-12 col-md-4 text-center byc_moze hidden">
          <a href="harmonogramy.php" class="text-decoration-none">
            <h4 id="kosze_tekst" class="mb-5 mt-5"><b>Harmonogram wywozu odpadów</b></h4>
            <img class="img-fluid o_firmie" width="270" id="kosze" src="schedule.png" alt="">
          </a>
        </div>
        <div class="col-12 col-md-4 text-center byc_moze hidden">
          <a href="symbole.php" class="text-decoration-none">
            <h4 id="kosze_tekst" class="mb-5 mt-5"><b>Co oznaczają symbole na opakowaniach?</b></h4>
            <img src="symbols.png " id="kosze" width="310" height="287px" alt="" class="img-fluid o_firmie">
          </a>
        </div>
      </div>
    </div>
    <section class="page-header gradient">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L20,26.7C40,21,80,11,120,48C160,85,200,171,240,186.7C280,203,320,149,360,144C400,139,440,181,480,213.3C520,245,560,267,600,245.3C640,224,680,160,720,149.3C760,139,800,181,840,213.3C880,245,920,267,960,256C1000,245,1040,203,1080,154.7C1120,107,1160,53,1200,37.3C1240,21,1280,43,1320,69.3C1360,96,1400,128,1420,144L1440,160L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>
        <div class="container-fluid p-5">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
              <h2 id="more" class="byc_moze hidden"><b>POCZĄTKI FIRMY</b></h2>
              <p class="byc_moze hidden">Kapitał zakładowy w chwili założenia wynosił: 9.000,00 zł i dzielił się po 100,00 zł każdy. Spółka została zarejestrowana w Sądzie Rejonowym dla Wrocławia – Fabrycznej pod nr 4127. 
                Przedmiotem działalności Spółki w momencie zarejestrowania było:
              </p>
                <ul class="byc_moze hidden">
                  <li>wywóz i unieszkodliwianie nieczystości stałych,</li>
                  <li>eksploatacja wysypiska komunalnego, </li>
                  <li>letnie i zimowe utrzymanie ulic i chodników,</li>
                  <li>utrzymanie cmentarza komunalnego,</li>
                  <li>prowadzenie usług pogrzebowych, </li>
                  <li>świadczenie usług transportowych i sprzętowych,</li>
                  <li>sprzedaż pojemników na nieczystości stałe oraz sprzedaż utensyli pogrzebowych.</li>
                </ul>
                <p class="byc_moze hidden">
                Działalność swoją Spółka rozpoczęła w składzie 23-osobowym w tym:
                – administracja: 3 osoby,
                – robotnicy: 20 osób. 
                Dla realizacji statutowych działalności Spółka wynajmowała od Gminy nieruchomość zabudowaną tj. obecną bazę o pow. 5.646 m2, pomieszczenia biurowo – warsztatowe oraz 20 jednostek sprzętowo- transportowych z obowiązkiem ponoszenia wszelkich kosztów związanych z ich eksploatacją i remontami.
              </p>
              <a href="#today" class="btn btn-primary text-light byc_moze hidden">Firma dzisiaj</a>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L20,26.7C40,21,80,11,120,48C160,85,200,171,240,186.7C280,203,320,149,360,144C400,139,440,181,480,213.3C520,245,560,267,600,245.3C640,224,680,160,720,149.3C760,139,800,181,840,213.3C880,245,920,267,960,256C1000,245,1040,203,1080,154.7C1120,107,1160,53,1200,37.3C1240,21,1280,43,1320,69.3C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>    
    </section>
    <div id="location" class="container-fluid text-center"><h1 class="byc_moze hidden"><b>Nasza lokalizacja:</b></h1></div>
    <div class="container-fluid mt-5 hidden">
      <div class="row align-items-center justify-content-center lokalizacja">
      <iframe class="byc_moze hidden" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10065.283198169249!2d16.746786!3d50.89928!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc9f8ef434e95%3A0xcf2493c8743125d2!2sHadlux%20Sp.%20z%20o.o.%20Zak%C5%82ad%20us%C5%82ug%20komunalnych!5e0!3m2!1spl!2spl!4v1680015233054!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <section class="page-header gradient">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L20,26.7C40,21,80,11,120,48C160,85,200,171,240,186.7C280,203,320,149,360,144C400,139,440,181,480,213.3C520,245,560,267,600,245.3C640,224,680,160,720,149.3C760,139,800,181,840,213.3C880,245,920,267,960,256C1000,245,1040,203,1080,154.7C1120,107,1160,53,1200,37.3C1240,21,1280,43,1320,69.3C1360,96,1400,128,1420,144L1440,160L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>
        <div class="container-fluid p-5">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
              <h2 id="today" class="byc_moze hidden"><b>FIRMA DZISIAJ</b></h2>
              <p class="byc_moze hidden">Spółka zgodnie z ustawą o Krajowym Rejestrze Sądowym w dniu 30.01.2002 r. została zarejestrowana w KRS pod nr 0000085788. Wcześniejsza rejestracja Spółki dokonana była w Sądzie Rejonowym dla Wrocławia Fabrycznej VI Wydział Gospodarczy Rejestrowy pod nr 4127. Siedziba Spółki mieści się w Sobótce przy ul. Warszawskiej 4.
                Kapitał zakładowy Spółki wynosi: 925,500,00 zł.
                Władzami Spółki są:
              </p>
                <ul class="byc_moze hidden">
                  <li>Zgromadzenie Wspólników,</li>
                  <li>Rada Nadzorcza (wybierana co 3 lata),</li>
                  <li>Zarząd Spółki (wybierany co 3 lata.</li>
                </ul>
                <p class="byc_moze hidden">
                Prezesem Zarządu Spółki jest Pan Eugeniusz Leśniak.
                Funkcję Głównego Księgowego z uprawnieniami Prokurenta pełni Pani Monika Jackowicz.
                Stan zatrudnienia Spółki na dzień dzisiejszy wynosi  do 39 osób w tym:
                – administracja – personel techniczny: 7 osób,
                – pozostali pracownicy: 32 osoby. 
                Organem nadzoru jest Rada Nadzorcza w składzie 3-osobowym.
                W skład Rady Nadzorczej obecnie wchodzą:
              </p>
                <ul class="byc_moze hidden">
                  <li>Pan Grzegorz Dutka – Przewodniczący,</li>
                  <li>Pani Lucyna Stelmaszak – Górka – Zastępca Przewodniczącego,</li>
                  <li>Pan Tomasz Giedziński – Członek,</li>
                  <li> Pan Marcin Osiecki – Członek.</li>
                </ul>
                <p class="byc_moze hidden">Do kompetencji Rady Nadzorczej Należy:</p>
                <ul class="byc_moze hidden">
                  <li>Nadzorowanie działalności Spółki,</li>
                  <li>Coroczne badanie sprawozdania Zarządu, bilansu oraz rachunku zysków i strat,</li>
                  <li>Badanie sprawozdania Zarządu, co do podziału zysków i pokrycia strat oraz składanie corocznego sprawozdania z tego zakresu jak również prowadzonych kontroli,</li>
                  <li>Opiniowanie spraw przedkładanych przez Zarząd Zgromadzeniu Wspólników,</li>
                  <li>Rozpatrywanie sporów między Zarządem a Wspólnikami,</li>
                  <li>Wybór Zarządu.</li>
                </ul>
              <a href="#" class="btn btn-primary text-light byc_moze hidden">Powrót</a>
            </div>
          </div>
        </div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L20,26.7C40,21,80,11,120,48C160,85,200,171,240,186.7C280,203,320,149,360,144C400,139,440,181,480,213.3C520,245,560,267,600,245.3C640,224,680,160,720,149.3C760,139,800,181,840,213.3C880,245,920,267,960,256C1000,245,1040,203,1080,154.7C1120,107,1160,53,1200,37.3C1240,21,1280,43,1320,69.3C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>    
        
    </section>
    <footer class="gradient">Stronę wykonał: <b>Arkadiusz Wojtuń</b></footer>
    
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/28cf679e4b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>