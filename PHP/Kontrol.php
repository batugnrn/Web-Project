<?php 

    if (($_POST["email"] == "g201210059@sakarya.edu.tr") and ($_POST["password"] == "g201210059"))
    {
        $yazi = "HOŞGELDİNİZ G201210059 !!";
    
    header("Refresh: 2; ../HTML/Main.html");                               
    }                            
    else 
    {
        $yazi = "Kullancı Adı veya Şifre Yanlış.<br>!!!TEKRAR DENEYİN!!!";
    header("Refresh: 1; ../HTML/Login.html");
    
    }
                                    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hakkında</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\CSS\Main.css">
        <link rel="stylesheet" type="text/css" href="..\CSS\bootstrap.min.css">
        <script src="JS\bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        />
    </head>
    <body class="bg-secondary bg-opacity-10">
        <nav class="navbar navbar-expand-lg navbar-dark renklendirme-main fixed-top">
            <div class="container-fluid">
                <a class="navbar text-decoration-none text-white h1" href="Main.html">TEKİRDAĞ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav h2">
                        <li class="nav-item">
                            <a class="nav-link" href="Main.html#hakkında"><i class="fa-solid fa-circle-info"></i> Hakkımda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Main.html#sehrim"><i class="fa-solid fa-tree-city"></i> Şehrim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Main.html#iletisim"><i class="fa-solid fa-file-signature"></i> İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="..\HTML\Login.html"><i class="fa-solid fa-right-from-bracket"></i> Login</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <div id="login">
            <br><br><br>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="../PHP/Kontrol.php" method="post">
                                <br><br><br>
                                <h3 class="text-center text-info">HOŞGELDİNİZ</h3><br><br>
                                <div class="form-group">
                                    <label for="email" class="text-info">Kullanıcı Adı:</label><br>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email 'abc@sakarya.edu.tr'" required="required">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <label for="password" class="text-info">Şifre:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Şifre '***'" required="required">
                                </div>
                                <div class="form-group">
                                    <br><br>
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Gönder" >
                                </div>
                                
                            </form>
                            <div><br><br>
                                <?php
                                        echo($yazi);
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>