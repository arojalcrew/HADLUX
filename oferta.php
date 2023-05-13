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
    <title>HADLUX - Oferta</title>
</head>
<body>
    <div class="loader"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand text_logo" href="index.php"><img id="logo" src="logo-1-300x140.png" alt=""><b>HADLUX <small>Sp. z o.o.</small></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-address-card"></i> &nbsp;<b>O FIRMIE</b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item active" href="#"><i class="fa-brands fa-buffer fa-beat-fade"></i> &nbsp;<b>OFERTA</b></a>
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
                <input id="search" class="form-control mr-sm-2 form-control-sm szukaj" type="text" action="search.php" placeholder="SZUKAJ" name="search_box" aria-label="Search">
                <button id="search" class="btn btn-outline-success" type="submit" name="search_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
              </div>
        </div>
      </nav>
      <header class="page-header gradient">
        <div class="container-fluid p-5 text-center offer">
            <h2 class="byc_moze hidden"><i class="fa-brands fa-buffer fa-beat-fade"></i> <b>OFERTA</b></h2>
            <h3 class="byc_moze hidden m-3"><b>PRZEDMIOT DZIAŁALNOŚCI SPÓŁKI W CHWILI OBECNEJ:</b></h3>
        </div>
        <div class="container-fluid justify-content-center">
            <div class="row">
                <div class="col m-4 byc_moze hidden">
                  <div class="card h-100 bg-success">
                    <img src="oferta_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body byc_moze">
                        <p class="card-text">Prowadzenie Selektywnego Zbierania i Odbierania Odpadów Komunalnych, Odpadów Wielkogabarytowych, Zużytego Sprzętu Elektrycznego i Elektronicznego (RTV, AGD) z Gospodarstw Domowych i od Podmiotów Prowadzących Działalność Gospodarczą na terenach:</p>
                        <h5 class="card-title"><ul>
                            <li>Miasta i Gminy Sobótka</li>
                          </ul></h5>
                    </div>
                  </div>
                </div>
                <div class="col m-4 byc_moze hidden">
                  <div class="card h-100 bg-success">
                    <img id="oferta_2" src="oferta_2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Prowadzenie Składowiska Komunalnego dla Miasta i Gminy Sobótka – obecnie:</p>
                      <h5 class="card-title"><ul>
                        <li>Stacja Przeładunkowa Zmiesznych Niesegregowanych Odpadów Komunalnych,</li>
                        <li>Zaplecze do Selektywnej Zbiórki Odpadów,</li>
                        <li>Dobrowolny Punkt Gromadzenia Odpadów,</li>
                      </ul></h5>
                    </div>
                  </div>
                </div>
                <div class="col m-4 byc_moze hidden">
                  <div class="card h-100 bg-success">
                    <img src="oferta_3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Całoroczne Letnie i Zimowe Oczyszczanie Ulic, Placów i Chodników</p>
                    </div>
                  </div>
                </div>
                <div class="col m-4 byc_moze hidden">
                    <div class="card h-100 bg-success">
                        <img src="" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Prowadzenie Akcji Zimowej</p>
                      </div>
                    </div>
                </div>
                  <div class="col m-4 byc_moze hidden">
                    <div class="card h-100 bg-success">
                      <img src="" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Utrzymanie i Pielęgnacja Terenów Zieleni Miejskiej</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col m-4 byc_moze hidden">
                <div class="card h-100 bg-success">
                    <img src="" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Utrzymanie Cmentarza Komunalnego przy ul.Słonecznej w Sobótce</p>
                  </div>
                </div>
            </div>
              <div class="col m-4 byc_moze hidden">
                <div class="card h-100 bg-success">
                  <img src="" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Usługi Transportowe i Sprzętowe:</p>
                    <h5 class="card-title"><ul>
                        <li>Dowozy Dzieci do Szkół Autobusami,</li>
                        <li>Wynajem Sprzętu do Prac Ziemno – Budowlanych (Fadroma Ł-200;
                            koparko-ładowarka Ostrówek; podnośnik koszowy do 18 m wysięgu)</li>
                    </ul></h5>
                  </div>
                </div>
              </div>
              <div class="col m-4 byc_moze hidden">
                <div class="card h-100 bg-success">
                  <img src="" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Inne usługi, jak:</p>
                    <h5 class="card-title"><ul>
                        <li>Oznakowanie Pionowe i Poziome na Drogach Miejskich i Gminnych (posiadamy malowarkę),</li>
                        <li>Drobne Remonty i Naprawy Niespecjalistyczne Dróg i ich Nawierzchni,</li>
                        <li>Drobne Remonty i Naprawy Urządzeń Małej Architektury,</li>
                        <li>Wycinka, Przycinka Drzew z Podnośnika z Uprawnioną Ekipą,</li>
                        <li>Sprzedaż Pojemników na Nieczystości Stałe,</li>
                        <li>Selektywna Zbiórka Odpadów (do worków oraz kontenerów).</li>
                    </ul></h5>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-primary text-light m-4">Powrót</a>
          </div>
              
        </div>
        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L20,26.7C40,21,80,11,120,48C160,85,200,171,240,186.7C280,203,320,149,360,144C400,139,440,181,480,213.3C520,245,560,267,600,245.3C640,224,680,160,720,149.3C760,139,800,181,840,213.3C880,245,920,267,960,256C1000,245,1040,203,1080,154.7C1120,107,1160,53,1200,37.3C1240,21,1280,43,1320,69.3C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>      
    </header>
    <footer class="gradient">Stronę wykonał: <b>Arkadiusz Wojtuń</b></footer>
    
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/28cf679e4b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>