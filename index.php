<html>
    <head>
    <link rel="stylesheet" href="center.css">
    </head>
    <body>
        <?php
            setcookie("admin", "false");

            $admin = $_COOKIE["admin"];
        ?>
        <center>
            <div class="container">
                <?php
                    if($admin == "true"){
                        setcookie("chave", "QWNIYUNURntSM0lfRE9fQzBPS0lFfQ==");
                        ?>
                        <h1 class="box">Bem Vindo Admin!</h1>
                        <?php
                    }
                    else{
                        ?>
                        <h1 class="box">Bem Vindo Convidado!</h1>
                        <?php
                    }
                ?>
            </div>
        </center>
    </body>
</html>