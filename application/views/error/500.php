<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width" />
  <title>Page Not Found
</title>
  <?php echo Jade\Dumper::_html(HTML::style('http://fonts.googleapis.com/css?family=Telex')); ?>
  <?php echo Jade\Dumper::_html(Basset::show('website.css')); ?>
</head>
<body>
  <?php echo Jade\Dumper::_html(View::make('partials.topnav')); ?>
  <div class="container">
    <h2>Server Error.</h2>
    <p class="lead">Hmmmm, something went wrong. We'll try to fix it. Contact us if you have an urgent issue.</p>
  </div>
</body>
</html>