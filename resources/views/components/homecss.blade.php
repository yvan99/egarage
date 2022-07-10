<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>{{env("APP_NAME")}}</title>
    <!-- Meta Data        -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0 shrink-to-fit=no" />
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

    <link rel="stylesheet" type="text/css" href="../homepage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/datatable.min.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/datatablebutton.min.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/css/fontawesome.min.css" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <script src="../homepage/js/jquery.js"></script>

    {{-- GOOGLE MAP API --}}
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_GEOCODE_API')}}&libraries=places">
    </script>

</head>
