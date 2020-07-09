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
                width:60%;
            }

            .wrapperInfoClients{
                display:flex;
                flex-direction:row;
                align-items:center;
                justify-content:space-around;
                margin-top:20px;
            }

            table{
                width:100%;
            }

            thead{
                width:80%;
            }
            
            th{
                width:25%;
                margin-bottom:5px;
                
            }

            tbody{
                display:flex;
                flex-direction:column;
            }

            tr{
                display:flex;
                flex-direction:row;
                border-bottom: 2px solid #1e6262;
            }
            td{
                width:15%;
                display:flex;
                align-items:center;
                justify-content:center;
                margin-left:10px;
                margin-right:10px;
                margin-top:20px;
                margin-bottom:10px;
                
            }

            #editData{
                border:none;
                background-color:#482ff7;
                color:#fff;
                width:60%;
                border-radius:7px;
                padding:10px 0;
                cursor:pointer;
                transition: 0.3s;
            }

            #editData:hover{
                background-color:#2f54f7;
            }

            #deleteData{
                border:none;
                background-color:#ff304f;
                color:#fff;
                width:60%;
                border-radius:7px;
                padding:10px 0;
                cursor:pointer;
                transition: 0.3s;
            }

            #deleteData:hover{
                background-color:#ab0a0a;
            }

            #addNewClient{
                border:none;
                margin-top:30px;
                background-color:#2d767f;
                width:45%;
                border-radius:8px;
                padding:15px 0;
                cursor:pointer;
                transition:0.4s;
                
            }

            #addNewClient:hover{
                background-color:#1e6262;
                padding:20px 0;
            }

            a{
                text-decoration:none;
                color:#fff;
            }

        </style>

    </head>

    <body>

        <div class="wrapper">

            <div class="wrapperListClient">

                <h1>Meus Clientes</h1>

                <div class="wrapperInfoClients">

                    <table>

                        <thead>

                            <tr>

                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th></th>
                                <th></th>

                            <tr>

                        </thead>

                        <tbody>

                            <?php
                            require_once 'import.php';
                            ?>

                        </tbody>

                    </table>

                </div>      

                <button id="addNewClient">

                    <a href="addNewClient/index.php">Adicionar Novo Cliente</a>

                </button>

            </div>

        </div>

    </body>

</html>