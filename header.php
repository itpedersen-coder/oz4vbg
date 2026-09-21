<?php

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>EDR-Viborg OZ4VBG</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Snow in december -->
        <?php
         $current_month = date('n');
         if ($current_month == 12)
         {
            ?>
            <script src="https://app.embed.im/snow.js" defer></script>
            <?
            }
        ?>

        <style>
            body {

                background-image: url('../../gp.jpg');
                background-size: cover;
                background-position: top;
                background-repeat: no-repeat;

            }
            div.transbox {
                margin-left: 4%;
                margin-right: 4%;
                margin-bottom: 2%;
                background-color: #999999;
                border: 1px solid black;
                opacity: 0.70;
                color: #000000;
            }
            div.transbox_solid {
                margin-left: 4%;
                margin-right: 4%;
                margin-bottom: 2%;
                background-color: #999999;
                border: 1px solid black;
                opacity: 1.00;
                color: #000000;
            }
            div.transbox p {
                margin: 10%;
                font-weight: bold;
                color: #000000;
            }
            .link {
                color: #050366;
                font-size: medium;
            }
            .center {
                margin: auto;
                padding: 10px;
                }
            .row {
                display: flex;
            }

            .column {
                flex: 1; /* Lige bredde */
                padding: 20px;
                border: 0px solid #ccc;
            }

        /* 🔻 Deaktiver layout ved smalle skærme (fx under 600px) */
            @media (max-width: 600px) {
                .row {
                    flex-direction: column; /* Skift fra række til kolonne */
                }
            }


        </style>
    </head>
    <body>
<?


?>
