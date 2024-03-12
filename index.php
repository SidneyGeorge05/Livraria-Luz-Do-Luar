<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livraria Luz do Luar</title>
  <link rel="shortcut icon" href="images/logoIcone.png">
  <!-- CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Awesome Icon Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link type="text/css" rel="stylesheet" href="css/estilo.css">
</head>

<body>
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="images/LogoLivraria.png" id="logolivraria"></a>

      <form class="d-flex w-50" style="height: 50px">
        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
        <button class="btn btn-outline-success" id="botaobusca" type="submit" style="width: 60px; height: 50px;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg></button>
      </form>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
       
      <span class="navbar-toggler-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" style="margin-left: -2px; margin-top: -3px"fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
      </span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Selecione a categoria<br>de livros que deseje</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="cookieLivro.php?slcCategoria=1" style="font-size: 23px;">Romance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cookieLivro.php?slcCategoria=2" style="font-size: 23px;">Suspense</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cookieLivro.php?slcCategoria=3" style="font-size: 23px;">HQ's/Graphic Novels</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sua conta
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="#">Entre</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#" style="color: purple;">Novo aqui? Cadastre-se!</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>


  <!--nav class="navbar navbar-expand-lg" style="width: 130px; left: 1040px; top: -63px;">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 23px; color:white; font-weight:bold">
                    Sua conta</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Faca login</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#" style="color: purple;"> Novo aqui? Cadastre-se já!</a></li>
                    </ul>
                </li>
              </ul>
            </nav>

  <nav class="navbar navbar-light" style="left: 1220px; width: 70px; top: -135px; border-radius:5%">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="width: 95px; background-color: rgb(206, 157, 235);">
        <span class="navbar-toggler-icon" style="padding: 25px 30px;top: -115px;">img src="images/lupa2.png"</span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Selecione a categoria <br> de livros que deseje</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="cookieLivro.php?slcCategoria=1" style="font-size: 23px;">Romance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cookieLivro.php?slcCategoria=2" style="font-size: 23px;">Suspense</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cookieLivro.php?slcCategoria=3" style="font-size: 23px;">HQ's/Graphic Novels</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  </nav-->

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carroselIMG_1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/carroselIMG_2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/carroselIMG_3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
    
  <?php
  if (isset($_COOKIE['codCookie'])) { //Modo CATEGORIA 1
    if ($_COOKIE['codCookie'] == 1) {
      echo ('
      <div class="container-fluid">
      <div class="row" >
          <div class="col-sm">
            <div class="card text-center mx-auto">
                  <img src="images/livroROM_1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">O morro dos ventos uivantes</h5>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <p class="card-text">R$ 13,55</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroROM_2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Amor em Manhattan - Livro 1</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <p class="card-text">R$ 22,00</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroROM_3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Todo esse tempo</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <p class="card-text">R$ 25,88</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroROM_4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Fascínio da nobreza</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <i class="fa fa-star-half-full" style="color:orange"></i>
                      <p class="card-text">R$ 22,55</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroROM_5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Eu e esse meu coração</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <i class="fa fa-star-half-full" style="color:orange"></i>
                      <p class="card-text">R$ 28,85</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
      </div>

  </div>
  <br>
  <div class="container-fluid">
      <div class="row" >
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroSUS_1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">A volta do parafuso (edição de bolso)</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <p class="card-text">R$ 28,00</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroSUS_2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Misery: Louca obsessão</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <p class="card-text">R$ 24,35</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroSUS_3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Não conte a ninguém</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <i class="fa fa-star-half-full" style="color:orange"></i>
                      <span class="fa fa-star"></span>
                      <p class="card-text">R$ 15,00</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroSUS_4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">As Musas</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <p class="card-text">R$ 26,40</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroSUS_5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">A corrente</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <p class="card-text">R$ 22,20</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
      </div>

  </div>
  <br>
  <div class="container-fluid">
      <div class="row" >
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroGN_1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Persépolis - Completo</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <p class="card-text">R$ 42,19</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroGN_2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">1984 (Edição em quadrinhos)</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <p class="card-text">R$ 45,88</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroGN_3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Paul Está Morto – Quando Os Beatles Perderam Mccartney</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <i class="fa fa-star-half-full" style="color:orange"></i>
                      <span class="fa fa-star"></span>
                      <p class="card-text">R$ 40,00</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroGN_4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">O Meu Pé de Laranja Lima: Quadrinhos</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <i class="fa fa-star-half-full" style="color:orange"></i>
                      <p class="card-text">R$ 34,31</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card text-center mx-auto">
                  <img src="images/livroGN_5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Turma da Mônica: Lições (Graphic MSP)</h5>
                      <span class="fa fa-star checked" ></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <p class="card-text">R$ 55,00</p>
                      <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                  </div>
              </div>
          </div>
      </div>

  </div>
                ');
    } else if ($_COOKIE['codCookie'] == 2) { //Modo CATEGORIA 2
      echo ('
            <div class="container-fluid">
            <div class="row" >
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroSUS_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">A volta do parafuso (edição de bolso)</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <p class="card-text">R$ 28,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroSUS_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Misery: Louca obsessão</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <p class="card-text">R$ 24,35</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroSUS_3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Não conte a ninguém</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <i class="fa fa-star-half-full" style="color:orange"></i>
                            <span class="fa fa-star"></span>
                            <p class="card-text">R$ 15,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroSUS_4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">As Musas</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p class="card-text">R$ 26,40</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroSUS_5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">A corrente</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p class="card-text">R$ 22,20</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-sm">
                        <div class="card text-center mx-auto">
                            <img src="images/livroROM_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">O morro dos ventos uivantes</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p class="card-text">R$ 13,55</p>
                                <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card text-center mx-auto">
                            <img src="images/livroROM_2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Amor em Manhattan - Livro 1</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <p class="card-text">R$ 22,00</p>
                                <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card text-center mx-auto">
                            <img src="images/livroROM_3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Todo esse tempo</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <p class="card-text">R$ 25,88</p>
                                <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card text-center mx-auto">
                            <img src="images/livroROM_4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Fascínio da nobreza</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <i class="fa fa-star-half-full" style="color:orange"></i>
                                <p class="card-text">R$ 22,55</p>
                                <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card text-center mx-auto">
                            <img src="images/livroROM_5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eu e esse meu coração</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <i class="fa fa-star-half-full" style="color:orange"></i>
                                <p class="card-text">R$ 28,85</p>
                                <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row" >
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroGN_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Persépolis - Completo</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <p class="card-text">R$ 42,19</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroGN_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1984 (Edição em quadrinhos)</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <p class="card-text">R$ 45,88</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroGN_3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Paul Está Morto – Quando Os Beatles Perderam Mccartney</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <<i class="fa fa-star-half-full" style="color:orange"></i>
                            <span class="fa fa-star"></span>
                            <p class="card-text">R$ 40,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroGN_4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">O Meu Pé de Laranja Lima: Quadrinhos</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <i class="fa fa-star-half-full" style="color:orange"></i>
                            <p class="card-text">R$ 34,31</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center mx-auto">
                        <img src="images/livroGN_5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Turma da Mônica: Lições (Graphic MSP)</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <p class="card-text">R$ 55,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
                ');
    } else if ($_COOKIE['codCookie'] == 3) { //Modo CATEGORIA 3
      echo ('
              
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroGN_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Persépolis - Completo</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 42,19</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroGN_2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">1984 (Edição em quadrinhos)</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 45,88</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroGN_3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paul Está Morto – Quando Os Beatles Perderam Mccartney</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <i class="fa fa-star-half-full" style="color:orange"></i>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 40,00</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroGN_4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">O Meu Pé de Laranja Lima: Quadrinhos</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <i class="fa fa-star-half-full" style="color:orange"></i>
                    <p class="card-text">R$ 34,31</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroGN_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Turma da Mônica: Lições (Graphic MSP)</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 55,00</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
    </div>

</div>



<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroROM_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">O morro dos ventos uivantes</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 13,55</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroROM_2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Amor em Manhattan - Livro 1</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 22,00</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroROM_3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Todo esse tempo</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 25,88</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroROM_4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fascínio da nobreza</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <i class="fa fa-star-half-full" style="color:orange"></i>
                    <p class="card-text">R$ 22,55</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroROM_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Eu e esse meu coração</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <i class="fa fa-star-half-full" style="color:orange"></i>
                    <p class="card-text">R$ 28,85</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
    </div>

</div>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroSUS_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">A volta do parafuso (edição de bolso)</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 28,00</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroSUS_2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Misery: Louca obsessão</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 24,35</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroSUS_3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Não conte a ninguém</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <i class="fa fa-star-half-full" style="color:orange"></i>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 15,00</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroSUS_4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">As Musas</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 26,40</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
                <img src="images/livroSUS_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">A corrente</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 22,20</p>
                    <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                </div>
            </div>
        </div>
    </div>

</div>
                ');
    }
  } else { //Modo PADRÃO
    echo ('
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroSUS_2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Misery: Louca obsessão</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 24,35</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <br>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroROM_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">O morro dos ventos uivantes</h5>
                            <span class="fa fa-star checked" ></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <p class="card-text">R$ 13,55</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroGN_4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">O Meu Pé de Laranja Lima: Quadrinhos</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <i class="fa fa-star-half-full" style="color:orange"></i>
                    <p class="card-text">R$ 34,31</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroROM_5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Eu e esse meu coração</h5>
                            <span class="fa fa-star checked" ></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <i class="fa fa-star-half-full" style="color:orange"></i>
                            <p class="card-text">R$ 28,85</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroSUS_3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Não conte a ninguém</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <i class="fa fa-star-half-full" style="color:orange"></i>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 15,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
    </div>

<br>
    <div class="row">
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroGN_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Turma da Mônica: Lições (Graphic MSP)</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 55,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroGN_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Persépolis - Completo</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 42,19</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroROM_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Amor em Manhattan - Livro 1</h5>
                            <span class="fa fa-star checked" ></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <p class="card-text">R$ 22,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroSUS_4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">As Musas</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 26,40</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroGN_3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paul Está Morto – Quando Os Beatles Perderam Mccartney</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <i class="fa fa-star-half-full" style="color:orange"></i>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 40,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
    </div>

<br>
    <div class="row">
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroROM_4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Fascínio da nobreza</h5>
                              <span class="fa fa-star checked" ></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <i class="fa fa-star-half-full" style="color:orange"></i>
                            <p class="card-text">R$ 22,55</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroROM_3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Todo esse tempo</h5>
                            <span class="fa fa-star checked" ></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p class="card-text">R$ 25,88</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroGN_2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">1984 (Edição em quadrinhos)</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 45,88</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroSUS_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">A corrente</h5>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p class="card-text">R$ 22,20</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
        <div class="col-sm">
            <div class="card text-center mx-auto">
            <img src="images/livroSUS_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">A volta do parafuso (edição de bolso)</h5>
                    <span class="fa fa-star checked" mx-auto></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">R$ 28,00</p>
                            <a class="btn btn-primary" href="#" role="button">Compre Agora!</a>
                        </div>
                </div>
        </div>
    </div>

</div> 
            ');
  }
  ?>

  <br>
  <div id="Linha"></div>
  <footer class="Rodape">
    <center>
      <div class="logoRodape">
        <img src="images/LogoLivraria.png" style="left: 35px; height: 140px; width: 350px;">
        <br>
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" style="cursor: pointer;">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="cursor: pointer;">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" style="cursor: pointer;">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16" style="cursor: pointer;">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
        </svg>
      </div>
    </center>
    <div class="copyright">
      <center>
        <img src="images/Logo oficial Buffet.png" width="65vh" height="65vh" style=" margin: 0; right: 35px;">
        <p style="color: white;">www.luzdoluarlivraria.com.br <br>
          Este site foi criado como trabalho para a matéria de PW II (Programação Web II), pelo aluno Sidney George
          no 2º MTEC - DS.
          <br> Livraria Luz do Luar | © Copyright 2022 - Todos os direitos reservados.
        </p>
      </center>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>