<!DOCTYPE html>
<html>
<head>
   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Octopus CMS - Installation</title>
  	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="system/install/install.css">
   	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>

<?php if (count($system_errors) > 0) { ?>
<div id="requirements">
  <table class="table table-hover">
  <thead>
    <th>System Requirement</th>
    <th>Solution</th>
  </thead>
  <tbody>
  <?php foreach($system_errors as $req): ?>
    <tr>
      <td style="vertical-align: middle;text-align: left;width: 300px;"><?php echo $req[0]; ?></td>
      <td style="vertical-align: middle;">
        <?php 
          foreach($req[1] as $cond) 
            echo "<pre>{$cond}</pre>";
        ?>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
  </table>
</div>
<?php } ?>


<?php /* First section, welcome */ ?>
<a name="top"></a>
 <div class="site-wrapper">

      <div class="site-wrapper-inner" style="background: #34495e">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Octopus CMS</h3>
              <ul class="nav masthead-nav">
                <li><a href="#top">System requirements <?php if(count($system_errors) == 0): ?><img class="checked" src="https://cdn2.iconfinder.com/data/icons/bwpx/icons/symbol_check.gif" alt=""><?php endif; ?></a></li>
                <li><a href="#database">Database <?php if($database != "none"): ?><img class="checked" src="https://cdn2.iconfinder.com/data/icons/bwpx/icons/symbol_check.gif" alt=""><?php endif; ?></a></li>
                <li><a href="#site_setup">Site setup <?php if($site == "ready"): ?><img class="checked" src="https://cdn2.iconfinder.com/data/icons/bwpx/icons/symbol_check.gif" alt=""><?php endif; ?></a></a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Hello, your system is ready to go..</h1>
            <p class="lead">Your system meets all of the requirements for a successful installation. Head over to the next section to install your database.</p>
            <p class="lead">
              <a href="#database" class="btn btn-lg btn-default">Install database</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Content Management System <a href="http://getoctopus.com">Octopus</a>, version <a href="https://github.com/kjellberg/octopus"><?php echo octopus_version . ' ' . octopus_version_name; ?></a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

<?php 

if (count($system_errors) > 0 ) 
{
  echo footer();
  die();
}
/* second section, databse mySQL */ 
?>
<a name="database"></a>
<div class="site-wrapper">

  <?php if($database == 'none'): ?>
  <div class="site-wrapper-inner" style="background: #2980b9">

    <div class="box">

      <?php if (isset($db_status)): ?>
        <pre><?php echo $db_status; ?></pre>
      <?php endif; ?>
      <form role="form" method="post">

        <div class="form-group">
          <label for="inputDriver">Database driver</label>
          <input type="text" class="form-control" name="driver" value="mysql" disabled="disabled">
        </div>

        <div class="form-group">
          <label for="inputHostname">Hostname/IP</label>
          <input type="text" class="form-control" name="hostname" value="127.0.0.1">
        </div>
        
        <div class="form-group">
          <label for="inputDb">Database</label>
          <input type="text" class="form-control" name="database" value="octopus">
        </div>    

        <div class="form-group">
          <label for="inputUser">mySQL username</label>
          <input type="text" class="form-control" name="username" placeholder="username">
        </div>
        
        <div class="form-group">
          <label for="inputUser">mySQL password</label>
          <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        
        <button name="admin" value="mysql" type="submit" class="btn btn-default">Test database</button>
      </form>
    </div>
  </div>


<?php else: ?>
   <div class="site-wrapper-inner" style="background: #27ae60;">
    <div class="cover-container">
      <div class="inner cover">
        <h1 class="cover-heading">Ping? Pong! Connected!</h1>
        <p class="lead">Yippie, your config files were created. Continue setting up your site by clicking the big flat button BELLOW.</p>
        <p class="lead">
          <a href="#site_setup" class="btn btn-lg btn-default">Go to Site setup</a>
        </p>
      </div>
    </div>
   </div>
<?php endif; ?>

</div>



<?php 

/* third section, site_setup */ 
?>
<a name="site_setup"></a>
<div class="site-wrapper">

  <div class="site-wrapper-inner" style="background: #2980b9">

    <div class="box">

      <?php if ($site == 'install'): ?>
      <form role="form" method="post">

        <div class="form-group">
          <label for="inputDriver">Your site url</label>
          <input type="text" class="form-control" name="site_url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
        </div>

        <button name="admin" value="site" type="submit" class="btn btn-default">Finish installation</button>
      </form>

    <?php else: ?>
      <h1>Your site is ready..</h1>
      <p>What are you waiting for? Go over to the database section and connect to your database. Then you'll be up and running!
    <?php endif; ?>

    </div>
  </div>


</div>


<?php echo footer(); ?>
<?php
function footer() { ?>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script>

  </script>
</body>
</html>
<?php } ?>