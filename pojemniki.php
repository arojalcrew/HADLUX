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
    <title>HADLUX - Do jakich pojemników wrzucać odpady?</title>
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
                    <a class="dropdown-item jakich active" href="pojemniki.php"><i class="fa-solid fa-dumpster fa-shake"></i>&nbsp;<b>DO JAKICH POJEMNIKÓW WRZUCAĆ ODPADY?</b></a>
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
      <header class="page-header tabele gradient">
        <div class="container hidden text-center">
          <div class="row align-items-center justify-content-center">
            <div class="col"><h2 class="p-5"><i class="fa-solid fa-dumpster fa-shake"></i>&nbsp;<b>DO JAKICH POJEMNIKÓW WRZUCAĆ ODPADY?</b></h2></div>  
          </div>
        </div>
        <div class="container hidden text-center">
            <div class="row align-items-center">
              <div class="col"><img src="plastik.png" alt="" class="img-fluid"></div>
                <div class="col">
                    <table class="table table-warning table-bordered border-dark align-middle">
                        <thead>
                          <tr>
                            <th scope="col" colspan="2">ODPADY I TWORZYWA SZTUCZNE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="bg-success">WRZUCAJ</th>
                            <th class="bg-danger">NIE WRZUCAJ</th>
                          </tr>
                          <tr>
                            <td>odkręcone i zgniecione plastikowe butelki po napojach</td>
                            <td>butelek i pojemników z zawartością</td>
                          </tr>
                          <tr>
                            <td>nakrętki</td>
                            <td>plastikowych zabawek</td>
                          </tr>
                          <tr>
                            <td>plastikowe opakowania po produktach spożywczych</td>
                            <td>opakowań po lekach i zużytych artykułów medycznych</td>
                          </tr>
                          <tr>
                            <td>opakowania wielomateriałowe (np. kartony po mleku i sokach)</td>
                            <td>opakowań po olejach silnikowych</td>
                          </tr>
                          <tr>
                            <td>opakowania po środkach czystości (np. proszkach do prania), kosmetykach (np. szamponach, paście do zębów) itp.</td>
                            <td>części samochodowych</td>
                          </tr>
                          <tr>
                            <td>plastikowe torby, worki, reklamówki, inne folie</td>
                            <td>zużytych baterii i akumulatorów</td>
                          </tr>
                          <tr>
                            <td>aluminiowe puszki po napojach i sokach</td>
                            <td>puszek i pojemników po farbach i lakierach</td>
                          </tr>
                          <tr>
                            <td>puszki po konserwach</td>
                            <td class="" rowspan="4">zużytego sprzętu elektronicznego i AGD</td>
                          </tr>
                          <tr>
                            <td>folię aluminiową</td>
                          </tr>
                          <tr>
                            <td>metale kolorowe</td>
                          </tr>
                          <tr>
                            <td>kapsle, zakrętki od słoików</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <div class="container hidden text-center">
            <div class="row align-items-center">
              <div class="col"><img src="papier.png" alt="" class="img-fluid"></div>
                <div class="col">
                    <table class="table table-primary table-bordered border-dark align-middle">
                        <thead>
                          <tr>
                            <th scope="col" colspan="2">PAPIER</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="bg-success">WRZUCAJ</th>
                            <th class="bg-danger">NIE WRZUCAJ</th>
                          </tr>
                          <tr>
                            <td>opakowania z papieru, karton, tekturę (także falistą)</td>
                            <td>ręczników papierowych i zużytych chusteczek higienicznych</td>
                          </tr>
                          <tr>
                            <td>katalogi, ulotki, prospekty</td>
                            <td>papieru lakierowanego i powleczonego folią</td>
                          </tr>
                          <tr>
                            <td>gazety i czasopisma</td>
                            <td>papieru zatłuszczonego lub mocno zabrudzonego</td>
                          </tr>
                          <tr>
                            <td>papier szkolny i biurowy, zadrukowane kartki</td>
                            <td>kartonów po mleku i napojach</td>
                          </tr>
                          <tr>
                            <td>zeszyty i książki</td>
                            <td>papierowych worków po nawozach, cemencie i innych materiałach budowlanych tapet</td>
                          </tr>
                          <tr>
                            <td>papier pakowy</td>
                            <td>pieluch jednorazowych i innych materiałów higienicznych</td>
                          </tr>
                          <tr>
                            <td rowspan="2">torby i worki papierowe</td>
                            <td>zatłuszczonych jednorazowych opakowań z papieru i naczyń jednorazowych</td>
                          </tr>
                          <tr>
                            <td>ubrań</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <div class="container hidden text-center">
            <div class="row align-items-center">
              <div class="col"><img src="szklo.png" alt="" class="img-fluid"></div>
                <div class="col">
                    <table class="table table-success table-bordered border-dark align-middle">
                        <thead>
                          <tr>
                            <th scope="col" colspan="2">SZKŁO</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="bg-success">WRZUCAJ</th>
                            <th class="bg-danger">NIE WRZUCAJ</th>
                          </tr>
                          <tr>
                            <td>butelki i słoiki po napojach i żywności (w tym butelki po napojach alkoholowych i olejach roślinnych)</td>
                            <td>ceramiki, doniczek, porcelany, fajansu, kryształów</td>
                          </tr>
                          <tr>
                            <td rowspan="10">szklane opakowania po kosmetykach (jeżeli nie są wykonane z trwale połączonych kilku surowców)</td>
                            <td>szkła okularowego</td>
                          </tr>
                          <tr>
                            <td>szkła żaroodpornego</td>
                          </tr>
                          <tr>
                            <td>zniczy z zawartością wosku</td>
                          </tr>
                          <tr>
                            <td>żarówek i świetlówek</td>
                          </tr>
                          <tr>
                            <td>reflektorów</td>
                          </tr>
                          <tr>
                            <td>opakowań po lekach, rozpuszczalnikach, olejach silnikowych</td>
                          </tr>
                          <tr>
                            <td>luster</td>
                          </tr>
                          <tr>
                            <td>szyb okiennych i zbrojonych</td>
                          </tr>
                          <tr>
                            <td>monitorów i lamp telewizyjnych</td>
                          </tr>
                          <tr>
                            <td>termometrów i strzykawek</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <div class="container hidden text-center">
            <div class="row align-items-center">
              <div class="col"><img src="biodegradowalne.png" alt="" class="img-fluid"></div>
                <div class="col">
                    <table id="biodegradowalne" class="table table-bordered border-dark align-middle">
                        <thead>
                          <tr>
                            <th scope="col" colspan="2">ODPADY BIODEGRADOWALNE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="bg-success">WRZUCAJ</th>
                            <th class="bg-danger">NIE WRZUCAJ</th>
                          </tr>
                          <tr>
                            <td>odpadki warzywne i owocowe (w tym obierki itp.)</td>
                            <td>kości zwierząt</td>
                          </tr>
                          <tr>
                            <td>gałęzie drzew i krzewów</td>
                            <td>oleju jadalnego</td>
                          </tr>
                          <tr>
                            <td>skoszoną trawę, liście, kwiaty</td>
                            <td>odchodów zwierząt</td>
                          </tr>
                          <tr>
                            <td>trociny i korę drzew</td>
                            <td>popiołu z węgla kamiennego</td>
                          </tr>
                          <tr>
                            <td>niezaimpregnowane drewno</td>
                            <td>leków</td>
                          </tr>
                          <tr>
                            <td rowspan="4">resztki jedzenia</td>
                            <td>drewna impregnowanego</td>
                          </tr>
                          <tr>
                            <td>płyt wiórowych i pilśniowych MDF</td>
                          </tr>
                          <tr>
                            <td>ziemi i kamieni</td>
                          </tr>
                          <tr>
                            <td>innych odpadów komunalnych (w tym niebezpiecznych)</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <div class="container p-5 hidden text-center">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <table class="table bg-secondary table-bordered border-dark align-middle">
                        <thead>
                          <tr>
                            <th scope="col" colspan="2">ODPADY ZMIESZANE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Do pojemnika z odpadami zmieszanymi należy wrzucać wszystko to, czego nie można odzyskać w procesie recyklingu, z wyłączeniem odpadów niebezpiecznych.</td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary text-light">Powrót</a>    
                </div>
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