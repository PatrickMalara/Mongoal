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
    <title>Goals</title>

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
        <div style="background-color: white; padding: 1rem; border-radius: 5px; text-align: center;" class="mb-5">
		    <input id="dateOfGoals" type="month" onchange="getGoals()" style="font-size: 30px; margin-bottom: 15px; border: none;">
            <div class="progress">
                <div id="progessBar" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
        </div>
        
        <div style="background-color: white; padding: 1rem; border-radius: 5px; text-align: center;" class="mb-5">
            <div class="row">
                <div class="col-sm-12 col-md-4 create-goal-form">
                    Title: <input id="createGoalTitle" type="text" name="goalTitle"  size="80%" style="width: 80%">
                </div>
                <div class="col-sm-12 col-md-4 create-goal-form">
                    Total: 0 / <input id="createGoalOutOf" type="number" name="outOf" style="width: 30%"> 
                </div>
                <div class="col-sm-12 col-md-4 create-goal-form">
                    <input type="button" id="createGoal" value="Create Goal" class="btn btn-primary" style="height: 35px; margin: 1px;">
                </div>

            </div>

	    </div>	

        <div style="background-color: white; padding: 1rem; border-radius: 5px;" class="mb-5">
            <table class="table table-hover">
                <tbody id="gTable">
			    </tbody>
		    </table>
	    </div>	

		<!-- Modal -->
		<div class="modal fade" id="GoalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Goal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p id="modalGoalId" style="display:none;"></p>
					Goal Name: <input id="modalTitle" type="text" name="modalTitle" value="" class="mg-2">
					<br /><br />
					Progress: <input id="modalCurr" type="number" name="modalCurr">
					<br /><br />
					Total: <input id="modalOutOf" type="number" name="modalOutOff">
					<br /><br />
					Month: <input id="modalMonth" type="month" name="modalMonth">
				</div>
				<div class="modal-footer">
					<button type="button" onclick="editGoal(true)" class="btn btn-danger" data-dismiss="modal">Delete</button>
					<button type="button" onclick="editGoal(false)" class="btn btn-primary" data-dismiss="modal">Save changes</button>
				</div>
				</div>
			</div>
		</div>


		<footer class="mt-5 pt-5 ">
            <h6>Developed by Patrick Malara</h6>
		</footer>

    	
	</div>
			  

    <script src="javascript/goals.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
