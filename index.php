<?php
    $conn = new mysqli("localhost", "root", "", "landingpagedb");
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $send = $_POST['send'];

        $sql = "INSERT INTO myuser (name, email)Values('$name','$email')";
        if($conn->query($sql) === TRUE){
            echo'<center style="font-size:30px; color:green;">Obrigado por se inscrever!</center>';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" />
        <title>SeuBoné</title>
    </head>
    <body>
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                        <span class="sr-only">Botão Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"></a><img src="img/bone1.png" alt="logo">
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="#">Início</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Depoimentos</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <form action="" method="POST">
            <div id="home">
                <div class="landing-text">
                    <h1>Já escolheu</br>o Seu Boné?</h1>
                    <h3>Inscreva-se já e tenha em primeira mão</br>
                    as atualizações da semana e todas novidades</br>
                    dos nossos bonés personalizados!</h3>

                    <div class="form-group">
                        <input type="text" name= "name" class="form-control" aria-describedby="nameHelp" placeholder="Escreva seu nome">  
                        <br>
                        <input type="email" name= "email" class="form-control" aria-describedby="emailHelp" placeholder="Escreva seu melhor email">
                        <br>
                        <button class="btn btn-default btn-lg btn-success" name="send">Inscrever-se</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="img/esperto.png" alt="">
                    </div>
                    <div class="col-sm-6 text-center">
                        <h2>Tudo sobre bonés.</h2>
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam.
                        </p>
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam.Sed ut perspiciatis 
                            unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam. totam rem aperiam.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                        <h4>Detone com o Trucker</h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="img/trucker.png" alt="trucker" class="image-responsive">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                        <h4>Se destaque com o Aba Reta</h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="img/abareta.png" alt="abareta" class="image-responsive">
                    </div>
                </div>
            </div>
        </div>

        <div id="fixed"><img></div>

        <div class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <h4>Algumas informações interessantes...</h4>
                        <br>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo.Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo.
                        </p>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam.Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo.Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo.
                        </p>
                        <br>
                        <h4>... além disso...</h4>
                        <br>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam.Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo.Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                            explicabo.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <img class="resizeff" src="img/bg_sun.jpg">
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Fale com a gente</h3>
                    <br>
                    <h4>Nosso endereço e contatos estão aqui.</h4>
                </div>
                <div class="col-sm-4">
                    <h3>Conecte-se</h3>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-whatsapp"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
                <div class="col-sm-4">
                    <img src="img/bone_icon.png" class="icon">
                </div>
            </div>
        </footer>
    </body>
</html>