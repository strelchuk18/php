<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <form method="post" action="bd.php">
	    <div class="col-sm-10">
				<div class="form-group label-floating">
	      	<label class="control-label">First name</label>
	        <input type="text" class="form-control" name="first_name" required>
	      </div>
	     	<div class="form-group label-floating">
	      	<label class="control-label">Last name</label>
	        <input type="text" class="form-control" name="last_name" required>
	      </div>
	      <div class="form-group label-floating">
	      	<label class="control-label">Email</label>
	      	<input type="text" class="form-control" name="email" required>
	      </div>
	      <button id="bsub" type="submit" class="btn btn-primary btn-round" name="submit">Отправить</button>
	    </div>
		</form>
  </body>
</html>
