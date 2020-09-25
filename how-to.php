<?php
session_start();

include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How To</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-white mb-5">
        <a class="navbar-brand mb-0 h1" href="goals.php">
		<!-- <img src="imgs/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
    		Mongoal
		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
              
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
			  <a class="nav-link" href="goals.php">Goals</a>
            </li>
            <li class="nav-item">
				<a class="nav-link" href="writings.php">Writing Prompts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="how-to.php">How-to</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Logout</a>
			</li>
          </ul>
          
        </div>
    </nav>



	<div class="container">
		<br>

    <div class="prompts">
        <h1>How To Use This Application</h1>

        <p>This application is heavily inspired by Dr. Jordan Peterson, in fact the whole writing prompts page is entirely his work.<p> 
        <p>The goals page is basically a regular todo app or goal app; however, the intended workflow is as follows.<p>
        <br>
        <p>The goals are meant to be based off these questions by Peterson:</p>
        <ol>
            <li>1. Do you have a circle of friends, including at least one or two people that you can really talk to?</li>
            <li>2. Do you have a close, intimate, romantic relationship?</li>
            <li>3. Do you have a meaningful job, or educational path, or serious personal interest (or some combination thereof)?</li>
            <li>4. Have you avoided problems with drugs or alcohol?</li>
            <li>5. Do you have a realistic, meaningful plan for the future?</li>
            <li>6. Are you in good physical health?</li>
            <li>7. Do you have at least a necessary minimum of economic resources?</li>
        </ol>
        
        <p>If the answer to all or even most of these questions is "no," then you are not so much existentially desperate as you are lacking those elements that are necessary to standard human life. You should then plan to change your situation so that "yes" becomes the appropriate answer.</p>
        <br>
        <hr>
        <br>
        <h5>Some “Rules”:</h5>
        <p>These rules are not enforced by the application however, they are meant to be followed as strictly by the use as they can.</p>
        <p>If one of your goals is to complete your Communications Essay. The goal you write should not be “Complete Communication Essay”. It should instead be a series of goals:</p>
        <p>-	Read Reading for Communications Essay (0/( number of readings ))</p>
        <p>-	Notes based off the Readings for the Communications Essay (0/1)</p>
        <p>-	Compile Communication Notes coherently (0/ 2)</p>
        <p>-	Write First Draft of Communications Essay (0/4) I have this as 4 to increase how productive this goal is when completed</p>
        <p>-	Edit First Draft of Communications Essay (0/2)</p>
        <p>-	Complete Finishing Touches of Communications Essay (0/1)</p>
        <p>-	Hand in Communications Essay (0/1)</p>
        <p>You see what I mean?</p>

        <hr>
        <br>
        <h5>Some app functionality that may be missed</h5>
        <br>
        <img src="imgs/changeMonth.png" alt="">
        <img src="imgs/hoverandclick.png" style="width: 100%; padding: 10px;" alt="">
        <img src="imgs/edit.png" alt="">
    </div>

		<footer class="mt-5 pt-5 ">
            <h6>Developed by Patrick Malara</h6>
		</footer>
		    	
	</div>
		

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
