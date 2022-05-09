<?php
    session_start();
    ob_start();
    if(isset($_POST["message2"])) {
        echo "Mesajınız: ";
        echo  $_POST["message2"];
        echo "<br>";
        echo "E-postanız: ";
        echo  $_POST["email2"];
        echo "<br>";
        echo "Adınız: ";
        echo  $_POST["name2"];
        echo "<br>";
        echo "Cinsiyetiniz: ";
        echo  $_POST["gender2"];
    } else {
        echo "
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0\" crossorigin=\"anonymous\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8\" crossorigin=\"anonymous\"></script>
        
        <body class=\"container justify-content-center\">
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6 text-center\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"container\">
                                <h3 class=\"display-5 text-center\">Mesajını Bırak</h3>
                                <form action=\"iletisim.php\" method=\"POST\">
                                    <div class=\"mb-3 row\">
                                        <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">E-posta</label>
                                        <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"staticEmail\" name=\"email2\" required>
                                        </div>
                                    </div>
                                    <div class=\"mb-3 row\">
                                        <label for=\"name\" class=\"col-sm-2 col-form-label\">Ad-Soyad</label>
                                        <div class=\"col-sm-10\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name2\" required>
                                        </div>
                                    </div>
                                    <div class=\"mb-3 row\">
                                        <label for=\"gender\">Cinsiyet</label>
                                        <select id=\"gender\" name=\"gender2\" class=\"form-control\" required>
                                        <option value=\"kadin\">Kadın</option>
                                        <option value=\"erkek\">Erkek</option>
                                        </select>
                                    </div>
                                    <div class=\"mb-3 row\">
                                        <label for=\"message\" class=\"col-sm-2 col-form-label\">Mesaj</label>
                                        <div class=\"col-sm-10\">
                                        <textarea class=\"form-control\" id=\"message\" name=\"message2\" required></textarea>
                                        </div>
                                    </div>
                                    <div class=\"col-auto text-center\">
                                        <button type=\"submit\" class=\"btn btn-primary mb-3\">Gönder</button>
                                    </div>
                                    <div class=\"col-auto text-center\">
                                        <a href=\"iletisim.php\">Temizle</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <body>";
    }
    ob_end_flush();
    ?>