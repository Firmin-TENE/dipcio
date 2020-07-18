<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./assets/css/styleConnexion.css">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="main-container">
    <img src="" alt="">
    <div class="srouce"><a title="ucac" href="www.ucac.cm"><h1>Bienvenue sur la plateforme de gestion des documents à certifier à l'UPAC</h1></a></div>
        <div class="form-container">

            <div class="form-body login">
              
                <h2 class="title">CONNEXION</h2>

                <form method="post" action="" class="the-form" id="form-login">

                    <label for="email">Pseudo</label>
                    <input type="text" name="username" id="username" placeholder="Entrer votre pseudo">

                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="Entervotre mot de passe">

                    <input type="submit" value="Se connecter">

                </form>

            </div><!-- FORM BODY-->


        </div><!-- FORM CONTAINER -->
    </div>

    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>

