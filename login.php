<?php
    $kullanici = "b211210386@sakarya.edu.tr";
    $parola = "b211210386";
    session_start();
    ob_start();
    if(isset($_POST["username"])) {
        if (($_POST["username"]==$kullanici) and ($_POST["password"]==$parola)) {
            $_SESSION["login"]="true";
            $_SESSION["user"]=$kullanici;
            $_SESSION["pass"]=$parola;
            header("Location:girisbasarili.php");
        } else {
            echo "Kullanıcı Adı veya Şifre Yanlış.<br>";
            echo "Giriş sayfasına yönlendiriliyorsunuz.";
            header("Refresh: 2; url=login.php");
        }
    } else {
        echo "
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0\" crossorigin=\"anonymous\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8\" crossorigin=\"anonymous\"></script>
        
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"container\">
                    <h3 class=\"display-5 text-center\">Giriş Yap</h3>
                    <form action=\"login.php\" method=\"POST\">
                        <div class=\"mb-3 row\">
                            <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">Kullanıcı Adı</label>
                            <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"username\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Şifre</label>
                            <div class=\"col-sm-10\">
                            <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\">
                            </div>
                        </div>
                        <div class=\"col-auto text-center\">
                            <button type=\"submit\" class=\"btn btn-primary mb-3\">Giriş Yap</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>";
    }
    ob_end_flush();
    ?>

