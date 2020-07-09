<?php
    require_once 'upload.php';
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
            }

            .formWrapper{
                width:50%;
                display:flex;
                flex-direction:column;
                padding-top:50px;
            }
            
            h1{
                background-color:#1e6262;
                color:#fff;
                padding:10px 0;
                text-align:center;
                width:50%;
                border-top-left-radius:25px;
                border-bottom-right-radius:25px;
            }

            form{
                width:100%;
                margin-top:50px;
            }

            .formGroup{
                display:flex;
                flex-direction:column;
                margin-bottom:40px;
            }

            input{
                border:none;
                border-bottom:3px solid #3d6cb9;
                padding:10px;
                margin-top:5px;
            }

            button{
                background-color:#3d6cb9;
                color:#fff;
                border:none;
                width:50%;
                padding:12px;
                border-radius:7px;
                cursor:pointer;
                transition:0.4s;
            }

            button:hover{
                background-color:#1e6262;
                padding:15px;
            }

        </style>

    </head>

    <body>

        <div class="wrapper">

            <div class="formWrapper">

                <h1>Cadastrar Novo Cliente</h1>

                <form action="" method="POST">

                    <div class="formGroup">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="formGroup">
                        <label for="age">Idade:</label>
                        <input type="number" name="age" id="age" required max-lenght="3">
                    </div>

                    <div class="formGroup">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="formGroup">
                        <label for="telephone">Telefone:</label>
                        <input type="text" name="telephone" id="telephone" required>
                    </div>

                    <button type="submit" name="addClient">Adicionar Cliente</button>
                    
                </form>

            </div>

        </div>

    </body>

</html>