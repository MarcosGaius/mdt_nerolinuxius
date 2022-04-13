<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="MDT means Mobile Data Terminal!">
        <meta name="author" content="coda">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://kit.fontawesome.com/3db78193d1.js" crossorigin="anonymous"></script>
        <title>MDT running on Nero Linuxius</title>
    </head>
    <body>
        <div class="startup">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh;">
                <img src="https://i.imgur.com/d8DMpW7.png" class="img-fluid">
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <div class="login d-flex align-items-center" style="display: none !important;">
            <div class="container d-flex flex-column justify-content-center" style="min-height: 80vh;">
                <div class="row justify-content-center">
                    <img src="images/logo1.png" class="img-fluid mb-4 mt-5 col-10 col-lg-4 col-xl-4 col-xxl-6">
                </div>
                <div class="texto-login row justify-content-center">
                    <div class="col-6 col-lg-3 py-2 m-2 bg-body" id="login-text"></div>
                </div>
                <div class="texto-login row justify-content-center">
                    <div class="col-6 col-lg-3 py-2 m-2 bg-body" id="pass-text"><span>Senha</span></div>
                </div>
                <div class="row justify-content-center">
                    <button type="button" onclick="loadDashboardfromMenu();" class="btn btn-warning col-5 col-lg-2 m-2 fw-bold">Acessar sistema</button>
                </div>
                <div class="text-center text-white mt-auto" id="rdm-quotes"></div>
            </div>
        </div>

        <div class="main-content vh-100 d-flex flex-column" style="display: none !important;"><div class="header"></div><div class="body d-flex flex-grow-1"></div></div>    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>