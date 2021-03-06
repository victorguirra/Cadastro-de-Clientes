<?php
    require_once 'delete.php';
?>

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
                align-items:center;
            }

            .wrapperConfirm{
                width:60%;
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
            }
            
            h1{
                color:#281336;
            }

            img{
                width:40%;
                margin-top:10px;
                margin-bottom:20px;
            }

            .wrapperButtons{
                display:flex;
                flex-direction:row;
                align-items:center;
                justify-content:space-around;
                width:50%;
            }

            #yesConfirm{
                width:45%;
                border: none;
                background-color:#37bf8b;
                color:#fff;
                font-weight:bold;
                padding:15px 0;
                border-radius:7px;
                cursor:pointer;
                transition:0.4s;
            }

            #yesConfirm:hover{
                padding:20px 0;
                background-color:#00a79d;
            }

            #noConfirm{
                width:45%;
                border: none;
                background-color:#fd0054;
                color:#fff;
                font-weight:bold;
                padding:15px 0;
                border-radius:7px;
                cursor:pointer;
                transition:0.4s;
            }

            #noConfirm:hover{
                padding:20px 0;
                background-color:#a80038;
            }

            a{
                text-decoration:none;
                color:#fff;
            }

        </style>

    </head>

    <body>

        <div class="wrapper">

            <div class="wrapperConfirm">

                <h2>Tem certeza que deseja excluir os dados deste cliente?</h2>

                <img src="delete.png" alt="Delete Data">

                <form class="wrapperButtons" action="" method="POST">

                    <input type="hidden" name="id">

                    <button id="yesConfirm" name="yesConfirm">Sim</button>

                    <button id="noConfirm" name="noConfirm">

                        <a href="../index.php">Não</a>

                    </button>

                </form>

            </div>

        </div>

    </body>

</html>