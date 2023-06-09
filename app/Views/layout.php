<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">


    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>

</head>

<body>
    <?= $this->include('navbar') ?>


    <main role="main" class="container">
        <?= $this->renderSection('content') ?>
    </main>
    <script src='bootstrap-5.1.3/js/bootsrap.min.js'></script>
    <script src="jquery.min.js"></script>

</body>

</html>