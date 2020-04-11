<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Declaratie</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            #nume, #prenume, #zi, #luna, #an, #adresa, #scop, #data, #semnatura,
            #mers-munca, #cumparaturi, #medic, #ingrijire, #sala {
                position:absolute;
                font-family:Arial;
                white-space: nowrap; 
            }
            #semnatura{top: 764px; left: 482px;}
            #data{ top: 813px; left: 205px;}
            #scop{ 
                top: 343px;
                left: 78px;
                width: 615px;
                height: 20px;
                background: #f1f4fd;
                border: none;
                font-family: Arial;
                font-size: 1.1em;
            }
            #adresa{ top: 212px; left: 205px;}
            #nume{ left: 208px; top: 149px;}
            #an{ top: 181px; left: 313px; }
            #prenume{ left: 429px; top: 149px;}
            #luna{top: 181px;left: 259px;}
            #zi{top: 181px; left: 204px;}
            #sala{top: 577px;left: 112px;}
            #ingrijire{left: 112px;height: 1075px;}
            #medic{left: 112px;top: 518px;}
            #cumparaturi{left: 112px;top: 477px;}
            #mers-munca{left: 112px;top: 439px;}
            ::-webkit-input-placeholder { /* Edge */
            color: black;
            }

            :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: black;
            }
            ::placeholder {
                color: black;
            }

        </style>
    </head>
    <body>
        <div id="nume">Nume</div>
        <div id="prenume">Prenume</div>
        <div id="zi">25</div>
        <div id="luna">02</div>
        <div id="an">1976</div>
        <div id="adresa"> Str. Strazilor Bucuresti</div>
        <input type="text" id="scop" placeholder="acasa, loc de munca">

        <input type="radio" id="ingrijire" name="destinatie">
        <input type="radio" id="medic" name="destinatie">
        <input type="radio" id="cumparaturi" name="destinatie">
        <input type="radio" id="mers-munca" name="destinatie" checked>

        <div id="data"><?=date("d/m/Y")?></div>
        <img id="semnatura" src="./semnatura.png" width="150">

        <img src="./declaratie.JPG" alt="declaratie">

    </body>
</html>