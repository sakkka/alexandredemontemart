
<?php
    $page = "Contact";
    $description = "Alexandre de Montemart - Photograph - Contact page";

    include('./includes/header.php');
?>

	<div class="container">
		<div class="contact row">
			<div class="info col-lg-5 col-sm-12">
				<h1>Contact</h1>
				<p><span>Address : </span><br/>5 rue des Beaux Arts <br/>75006 Paris <br/> France</p>
				<p><span>Phone : </span><br/>+33 06 00 00 00 00</p>
				<p><span>Email : </span><br/> mortemart@gmail.com</p>
			</div>

			<div class="col-lg-6 col-md-7 col-sm-12">
				<form id="formulaire" method="post" action="./contact.php">
					<input type="text" name="name" id="name" placeholder="Name *" required/>
					<input type="email" name="email" id="email" placeholder="Email Address *" required/>
					<input type="text" name="subject" id="subject" placeholder="Subject *" required/>
					<textarea name="message" placeholder="Message *" rows="10" cols="47" required></textarea>
					<button type="submit" name="submit" value="submit">Send</button>
				</form>	
			</div>
		</div>
	</div>

<?php
    include('./includes/footer.php');
?>