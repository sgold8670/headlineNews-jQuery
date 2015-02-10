<!DOCTYPE html>
<html lang="en">
<head>
   <title>Headline News</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
   <link rel="stylesheet" href="style.css">
    <!--jQuery, linked from a CDN-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
   <script src="js/scripts.js"></script>
   <script src="js/events.js"></script>
</head>

<body>
<div id="heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h1>Watercooler News</h1>
                <p>The Latest News For Those On The Go</p>
            </div><!-- col-xs-12 -->
        </div><!-- row -->
    </div><!-- end of container-fluid -->
</div><!-- end of heading -->

<div id="loading"></div>
<ul id="info"></ul><!-- data goes here -->

<div class="container">
    <div class="navbar navbar-fixed-bottom"><!-- used for sticky footer -->
        <div id="menu"> 
          <div class="row">
              <a href="#" class="active"><div class="col-xs-4" ><div id="news"><span class="glyphicon glyphicon-info-sign"></span><h4>News</h4></div></div></a>
              <a href="#"><div class="col-xs-4"> <div id="sports"><span class="glyphicon glyphicon-bullhorn"></span><h4>Sports</h4></div> </div></a>
              <a href="#"><div class="col-xs-4"><div id="entertainment"><span class="glyphicon glyphicon-camera"></span><h4>Entertainment</h4></div></div></a>
          </div>
        </div><!-- menu -->
    </div><!-- end of navbar -->
</div><!-- end of container-fluid -->


</body>
</html>