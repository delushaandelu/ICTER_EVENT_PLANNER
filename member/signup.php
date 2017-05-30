<html>
    <head>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        #form{
            margin-top:8%;
            margin-left:20%;
            margin-right:20%;
        }
    </style>
    </head>
    <body>
        <?php
            include('base/nav.php');
        ?>    
<div id="form">
<form  method="POST" action="classsignup.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="fullname" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputFile">UserName</label>
    <input type="text" class="form-control" name="username" >
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Password</label>
    <input type="password" class="form-control" name="password" >
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Agree
    </label>
  </div>
  <button type="submit" name="signup" class="btn btn-primary">Submit</button>
</form>
</div>

    </body>
    </html>