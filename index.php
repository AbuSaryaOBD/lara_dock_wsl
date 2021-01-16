<?php
header("refresh: 0; https://oceancodeit.com/obada/public/");
echo '<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .loader {
            border: 15px solid #e5e5e5;
            border-radius: 50%;
            border-top: 15px solid #3498db;
            border-bottom: 15px solid #3498db;
            width: 15vh;
            height: 15vh;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-color: #e5e5e5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loader"></div>
    </div>
</body>

</html>';
?>