<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/asset/bower_components/bootstrap/docs/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/asset/bower_components/bootstrap/docs/assets/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/asset/css/master.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="span12 text-center">
                <h1><?php print $_ENV['site_name']; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="span3">
                <?php print @$left; ?>
            </div>
            <div class="span6">
                <?php print $content; ?>
            </div>
            <div class="span3">
                <?php print @$right; ?>
            </div>
        </div>
    </div>
    <script src="/asset/bower_components/bootstrap/docs/assets/js/jquery.js"></script>
    <script src="/asset/bower_components/bootstrap/docs/assets/js/bootstrap.js"></script>
</body>
</html>
