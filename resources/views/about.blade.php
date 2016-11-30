@extends('layouts.app')

@section('content')
<div class="contact">
		<div class="container">
			<div class="contact-main">
				<h3>About Us</h3>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="about-textarea">
							<label for="author" class="col-md-3">AUTHOR:</label>
							<p id="author" class="col-md-7">Jerry Wang</p>
							<label for="email" class="col-md-3">E-MAIL:</label>
							<p id="email" class="col-md-7">WJerry0227@gmail.com</p>
							<label for="intro" class="col-md-3">INTRODUCTION:</label>
							<p id="intro" class="col-md-7">This web page is homework of web lesson. The copyright is under the Nanjing University Software Engineering. And the resource of the html,css are collected from <a href="http://www.cssmoban.com/">http://www.cssmoban.com/</a></p>
							<label for="techni" class="col-md-3">TECHNIQUE:</label>
							<p id="techni" class="col-md-7">The web is built on Laravel frame. And the database of this web is sqlite.</p>
							<label for="state" class="col-md-3">STATEMENT:</label>
							<p id="techni" class="col-md-7">All resources in the station are for learning and reference only, do not use for commercial purposes, otherwise all the consequences will be borne by you!</p>
						</div>
					</div>
				</div>
				<br />
				<br />
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="contact-textarea">
							<form>
								<h3>Contact Us</h3>
								<h4 align="center">You are welcome to give us some suggestion!</h4>
								<input type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"/>
								<input type="text" value="Second Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Second Name';}"/>
								<input type="text" value="Email Id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Id';}"/>
								<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
								<input type="submit" value="SUBMIT" >
								<input type="reset" value="CLEAR" >
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>


<!-- //contact -->
@endsection