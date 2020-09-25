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
    <title>Writing Prompts</title>

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
        <div class="prompts">
            <br>
            <h1>Writing Prompts to Plan an Ideal Future</h1>
            <button id="save" class="btn btn-primary">Save</button>
            <br>
            <br>
            <h3>One Thing You Could Do Better</h3>
            <p>If you could choose only one thing that you could do better, what would it be?
            <br>Think and write for at least two minutes, then move on.</p>
            <textarea name="prompt1" id="prompt1" rows="10" cols="80"></textarea>
            <br>
            <h3>Things to Learn About</h3>
            <p>What would you like to learn more about, in the next six months? Two years? Five years?
            <br>Think and write for at least two minutes, then move on.</p>
            <textarea name="prompt2" id="prompt2" rows="10" cols="80"></textarea>
            <br>
            <h3>Improve Your Habits</h3>
            <p>
            What habits would you like to improve?
            
                <br>- At school?
                <br>- At work?
                <br>- With friends and family?
                <br>- For your health?
                <br>- With regards to smoking/alcohol/drug use?
            <br><br>
            Think and write for at least two minutes, then move on.
            </p>
            <textarea name="prompt3" id="prompt3" rows="10" cols="80"></textarea>
            <br>
            <h3>Your Social Life in the Future</h3>
            <p>Friends and associates are an important part of a meaningful, productive life. Take a moment to consider your social network. Think about the friends you might want to have, and the connections you might want to make. It is perfectly reasonable to choose friends and associates who are good for you. Describe your ideal social life.
            <br>Think and write for at least two minutes, then move on.</p>
            <textarea name="prompt4" id="prompt4" rows="10" cols="80"></textarea>
            <br>
            <h3>Your Leisure Activity in the Future</h3>
            <p style="text-align:left;">Take a moment to consider the activities you would like to pursue outside of obligations such as work, family and school. The activities you choose should be worthwhile and personally meaningful.
            <br><br> Without a plan, people often default to whatever is easiest, such as television watching, and waste their private time. If you waste 4 hours a day, which is not uncommon, then you are wasting 1400 hours a year. That is equivalent to 35 40-hour work weeks, which is almost as much as the typical individual spends at his or her job every year.
            <br><br> If your time is worth $25 per hour, then you are wasting time worth $35,000 per year. Over a 50-year period, that is $1.8 million dollars, not counting interest or any increase in the value of your time as you develop.
            <br><br> Describe what your leisure life would be like, if it was set up to be genuinely productive and enjoyable.
            <br><br> Think and write for at least two minutes, then move on.</p>
            <textarea name="prompt5" id="prompt5" rows="10" cols="80"></textarea>
            <br>
            <h3>Your Family Life in the Future</h3>
            <p>Take a moment to consider your home and family life. Peaceful, harmonious family life provides people with a sense of belonging, support for their ambitions, and reciprocal purpose. Describe what your ideal family would be like. You can write about your parents and siblings, or about your plans for your own partner, or about your children, if any – or about all of these. What kind of partner would be good for you? How could you improve your relationship with your parents or siblings?
            <br>Think and write for at least two minutes, then move on.</p>
            <textarea name="prompt6" id="prompt6" rows="10" cols="80"></textarea>
            <br>
            <h3>Your Career in the Future</h3>
            <p>Much of what people find engaging in life is related to their careers. A good career provides security, status, interest, and the possibility of contributing to the community. Take a moment to consider your school or work careers, or both. Where do you want to be in six months? Two years? Five years? Why? What are you trying to accomplish?
            <br>Think and write for at least two minutes, then move on.</p>
            <textarea name="prompt7" id="prompt7" rows="10" cols="80"></textarea>
            <h3>Qualities You Admire</h3>
            <p>People you automatically admire have qualities that you would like to possess or imitate. Identifying those qualities can help you determine who it is that you want to be. Take a moment to think about the two or three people you most admire. Who are they? Which qualities do they possess that you wish you had?
            <br> Think and write for at least two minutes, then move on.</p>
            <textarea name="prompt8" id="prompt8" rows="10" cols="80"></textarea>
            <h2>The Ideal Future</h3>
            <p style="text-align:left;">
            Now you have written briefly about your future, and have had some time to consider more specific issues. This step gives you the chance to integrate all the things that you have just thought and wrote about.

            <br> Close your eyes. Daydream, if you can, and imagine your ideal future:

            <br>- Who do you want to be?
            <br>- What do you want to do?
            <br>- Where do you want to end up?
            <br>- Why do you want these things?
            <br>- How do you plan to achieve your goals?
            <br>- When will you put your plans into action?
            
            <br><br>Write about the ideal future that you have just imagined for 15 minutes. Write continuously and try not to stop while you are writing. Don't worry about spelling or grammar. You will have an opportunity to fix your mistakes later.

            <br><br>Dream while you write, and don't stop. Write at least until the 15 minutes have passed. Be ambitious. Imagine a life that you would regard as honourable, exciting, productive, creative and decent.

            <br><br>Remember, you are writing only for yourself. Choose goals that you want to pursue for your own private reasons, not because someone else thinks that those goals are important. You don't want to live someone else's life. Include your deepest thoughts and feelings about all your personal goals.
            </p>
            <textarea name="prompt9" id="prompt9" rows="10" cols="80"></textarea>
            <h3>A Future to Avoid</h3>
            <p style="text-align:left;">
            You have now written about the future you would like to have. Clearly defining your future can help reduce the uncertainty in your life, and reduce the amount of negative emotion that you chronically experience, in consequence. This is good for your confidence and for your health. Having well-defined goals also increases your chances of experiencing positive emotion, as people experience most of their hope and joy and curiosity and engagement as a consequence of pursuing valued goals (and not, as people generally think, by attaining them).

            <br><br>It can also be very useful to deeply imagine the future you would like to avoid. You probably know people who have made very bad decisions, and who end up with a life that nobody would want. You also likely have weaknesses yourself. If you let those get out of control, then you might also end up with a miserable, painful life. Most people know how their life could go downhill if they let it.

            <br><br>Spend some time, now, thinking about what your life would be like if you failed to define or pursue your goals, if you let your bad habits get out of control, and if you ended up miserable, resentful and bitter. Imagine your life three to five years down the road, if you failed to stay on the path you know you should be on. Use your imagination. Draw on your knowledge of the anxiety and pain you have experienced in the past, when you have betrayed yourself.

            <br><br>Think about the people you know who have made bad decisions or remained indecisive, or who chronically deceive themselves or other people, or who let cynicism and anger dominate their lives. Where do you not want to be?

            <br><br>Dream while you write, and don't stop. Write at least until the 15 minutes have passed. Let yourself form a very clear picture of the undesirable future.
            </p>
            <textarea name="prompt10" id="prompt10" rows="10" cols="80"></textarea>
            <br>
        </div>

        <footer class="mt-5 pt-5 ">
            <h6>Developed by Patrick Malara</h6>
		</footer>

    	
	</div>
			  

    <script src="javascript/writings.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
