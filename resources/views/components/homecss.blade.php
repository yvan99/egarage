<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>E-Garage Smart Ranking</title>
    <!-- Meta Data        -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0 shrink-to-fit=no" />
    <!-- Favicons-->
    <link rel="shortcut icon" href="../homepage/images/favicon.png" type="image/png" />

    <!-- bootstrap grid-->
    <link rel="stylesheet" type="text/css" href="../homepage/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/splide.min.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/splide-core.min.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/nouislider.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/select2.min.css" />
    <!-- Theme style-->
    <link rel="stylesheet" type="text/css" href="../homepage/css/theme-style.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/theme-style-home-two.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/url.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/rtl.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    @toastr_css
</head>
<style>
    /* Card Styles */

    .carte-sl {
        border-radius: 8px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .carte-image img {
        max-height: 100%;
        max-width: 100%;
        border-radius: 8px 8px 0px 0;
    }

    .carte-action {
        position: relative;
        float: right;
        margin-top: -25px;
        margin-right: 20px;
        z-index: 2;
        color: #E26D5C;
        background: #fff;
        border-radius: 100%;
        padding: 15px;
        font-size: 15px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
    }

    .carte-action:hover {
        color: #fff;
        background: #E26D5C;
        -webkit-animation: pulse 1.5s infinite;
    }

    .carte-heading {
        font-size: 18px;
        font-weight: bold;
        background: #fff;
        padding: 10px 15px;
    }

    .carte-text {
        padding: 10px 15px;
        background: #fff;
        font-size: 14px;
        color: #636262;
    }

    .carte-button {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: #ffc107;
        color: rgb(18, 17, 17);
        border-radius: 0 0 8px 8px;
    }

    .carte-button:hover {
        text-decoration: none;
        background-color: #1D3461;
        color: #fff;

    }


    @-webkit-keyframes pulse {
        0% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }

        70% {
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
        }

        100% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
        }
    }
    .order-card {
            color: #fff;
        }

        .bg-c-dark {
            background: linear-gradient(45deg, #16181a, #1e1e1f);
        }

        .bg-c-blue {
            background: linear-gradient(45deg, #4099ff, #73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg, #2ed8b6, #59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg, #FFB64D, #ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg, #FF5370, #ff869a);
        }


        .carte {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            border: none;
            margin-bottom: 30px;
            max-width: 250px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .carte .carte-block {
            padding: 25px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }


</style>
