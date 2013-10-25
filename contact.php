<?php include('includes/header.php'); ?>
<body>

	<nav>
		<ul class="transition-background-only">
			<li class="nav column1"><a href="index.php">Intro</a></li>
			<li class="nav column2"><a href="advanced.php">Advanced</a></li>				
		</ul>
	</nav>
<div class="wrapper">
<header>

	<h1>Cascading Style Sheets</h1>

</header>

<div class="main-content full-width">

<div class="contact">

<h1>Have a Question?</h1>
<p class="fontsizing">
Drop me an email and I'll be happy to help!
</p>




<form method="post" name="formcheck" onsubmit="return formCheck(this);" action="http://class.richfinelli.com/formmail.php">    
   <fieldset>



		<label for="realname">Name:</label>
			 
			<input class="realname" name="realname" class="form_text" size="40" tabindex="1" type="text" autocapitalize="on" autocorrect="off" placeholder="Type your name here!" required/>

		<label for="email">Email:</label>
		
			<input class="email" name="email" class="form_text" size="40" tabindex="2" type="email" autocapitalize="off" autocorrect="off" placeholder="Type your email here!" required/>

		<label for="website">Website: (optional)</label>
		
			<input class="website" name="website" class="form_text" size="40" tabindex="3" type="url" autocapitalize="off" autocorrect="off" placeholder="Type your website here!"/>
     
		<label for="question">Question:</label>
    
			<textarea class="question" name="question" rows="8" class="form_text" tabindex="4" type="text" autocapitalize="on" autocorrect="on" placeholder="Please type your question here!"></textarea>



        <input type="submit" value="Send" tabindex="5" />
        
        <input type="hidden" name="recipients" value="rich.finellizmheM7yahoo.com" />
        <input type="hidden" name="good_url" value="http://class.richfinelli.com/thankyou.php" />
        <input type="hidden" name="subject" value="Student Question from the Advanced CSS Class!" />
   </fieldset>   
</form>

</div><!-- //end#contact// -->

</div><!-- //end#main-content// -->

</div><!-- //end#wrapper// -->

<?php include('includes/footer.php'); ?>