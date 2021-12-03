<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $this->renderSection("title") ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link href="<?=base_url()?>/assets/css/adminstyle.css" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

  <?= $this->renderSection("bodycontent") ?>

</div>
<!--**********************************
Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<script src="<?=base_url()?>/assets/plugins/common/common.min.js"></script>
<script src="<?=base_url()?>/assets/js/custom.min.js"></script>
<script src="<?=base_url()?>/assets/js/settings.js"></script>
<script src="<?=base_url()?>/assets/js/gleek.js"></script>
<script src="<?=base_url()?>/assets/js/styleSwitcher.js"></script>

</body>
</html>
