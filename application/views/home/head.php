<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Trusted People Search" />
    <meta name="author" content="Poputrust" />
    <meta name="keywords" content="Find People, Search People, Get Person Details, Get Person Full Details,
          Search for person, Detact person, Personal Information, Trusted People Search,
          Trusted People Search In US, Trusted People Search In America, Local Trusted People Search,
          Local Search, Poputrust, Poputrust.com, Eric Melin, Online Person Details, Criminal Reports,
          Health Reports, FINRA">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title><?php echo $page_title;?></title>
    <!--Favicon-->
    <link rel="icon" href="<?php echo base_url('assets/custom/images/Poputrust_favicon_92x92.png'); ?>">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url('assets/theme/css/bootstrap.css'); ?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/theme/css/font-awesome.css'); ?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('assets/theme/css/style.css'); ?>" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
    if (!empty($paginatedSearch)) {
        if ($prev == "") {

            echo "<link rel='next' href='".$next . "' />";
        } else if ($prev != '' && $next != '') {
            echo "<link rel='next' href='" .$next. "' />";
            echo "<link rel='prev' href='" .$prev . "' />";
        } else {
            echo "<link rel='prev' href='" . $prev . "' />";
        }
    }
    ?>
    
    <meta name="google-site-verification" content="IDH3XsHokgIrjna_VMXDJ8vcycOEbqZpNHZVo6oTYik" />
</head>