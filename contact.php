<?php
include_once 'includes/portfolio-header.php';
?>

		  
		 <div class="container">
		 <h1 class="jumbotron">Contact Me</h1>
		 <form action="/" role="form">
		 <div class="form-group">

		 	<fieldset>
		 		<label style="" class="lead">Your Info</label>
				 
					 <div class="row">
			 			<div class="col-lg-5 form-group">
			 				<label for="name" class="control-label">Name:</label>
							<input type="text" id="name" class="form-control">
						</div>
			 			<div class="col-lg-4 form-group">
			 				<label for="name" class="control-label">Email:</label>
							<input type="text" id="email" class="form-control">
						</div>
						<div class="col-lg-3 form-group">
			 				<label for="name" class="control-label">Phone:</label>
							<input type="text" id="phone" class="form-control">
						</div>
					</div>
					<div class="row">
					
						<div class="col-lg-6 checkbox-inline">
					<label for="bestcontact" class="control-label">How do you prefer to be contacted?</label>
						<label class="radio-inline"><input type="radio" name="bestcontact" value="email">Email</label>
						<label class="radio-inline"><input type="radio" name="bestcontact" value="phone">Phone</label>
						<label class="radio-inline"><input type="radio" name="bestcontact" value="other">Other</label>
						</div>
					</div>
			</fieldset>
			<div class="row">
				<div class="col-lg-12 form-group"></div>
			</div>

<fieldset>
<label style="" class="lead">Your Message</label>
<div class="form-group">
<label for="subject" class="control-label">Subject</label>
<input type="text" class="form-control"></div>
					<div class="row">
					<div class="col-lg-12 form-group">
					<label for="info" class="control-label">Enter your comments, queries, or suggestions.</label>
				<textarea name="info" id="" class="form-control"></textarea>
				</div>
				</div>
				</fieldset>
							<div class="row">
				<div class="col-lg-12 form-group"></div>
			</div>
		  <button type="submit" class="btn btn-primary">Get in Touch</button>

					</div>
	
</div>

	<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	  </body>
	</html>
