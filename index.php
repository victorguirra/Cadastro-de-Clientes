<html>

    <head>

        <meta charset="UTF-8">
        <title>Cadastro do Clientes</title>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <style>

            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }

            body{
                font-family:'Oswald', sans-serif;
            }

            .wrapper{
                width:100%;
                height:100vh;
                display:flex;
                justify-content:center;
            }

            .wrapperListClient{
                background-color:#ff1493;
                width:50%;
            }

            .wrapperInfoClients{
                display:flex;
                flex-direction:row;
                align-items:center;
                justify-content:space-around;
                margin-top:20px;
            }

            .wrapperEspecificInfo{
                background-color:#2690e7;
                width:15%;
            }

        </style>

    </head>

    <body>

        <div class="wrapper">

            <div class="wrapperListClient">

                <h1>Meus Clientes</h1>

                <?php
                    require_once 'import.php';
                ?>

            </div>

        </div>

    </body>

</html>