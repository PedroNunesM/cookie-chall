<html>
    <head>

    </head>
    <body>
        <?php
            setcookie("admin", "false");

            $admin = $_COOKIE["admin"];
        ?>
        <center>
            <?php
                if($admin == "true"){
                    setcookie("chave", "QWNIYUNURntSM0lfRE9fQzBPS0lFfQ==");
                    ?>
                    <h1>Bem Vindo Admin!</h1>
                    <?php
                }
                else{
                    ?>
                    <h1>Bem Vindo Convidado!</h1>
                    <?php
                }
            ?>
        </center>
    </body>
</html>