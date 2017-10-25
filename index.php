<?php include("header.php");?>

    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<div class="row" style="background:url(training-in-a-school-classroom.jpg); no-repeat; background-size:cover; opacity:.7;">

<div class="container" id="container">

    <div class="pull-right" style=" padding-top:100px; padding-bottom:200px; padding-right:200px;">
        <h3 class="lead" style="color:#FFF; background-color:#000; padding-top:5px; padding-bottom:5px;">For Registered Student</h3>

        <form  class="form-group-lg" role="form" action="login.php" method="post">

                <label class="control-label" for="user_id" style="color:black"> UserId </label>
                <input class="form-control" type="text"  id="user_id" name="user_id" placeholder="UserId" required>

                <label class="control-label" for="email" style="color:black"> Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Email" required></br>

                <input type="submit" class="btn btn-primary form-control" value="Login" name="submit">



            <h6 style="color:black"><b>Don't have an account yet? Sign up <u><a href="membership.php" style="color:darkblue"> here</a></u> </b></h6>
        </form>
    </div>
</div>
    </div>






<?php include ("footer.php");?>