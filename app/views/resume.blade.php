@extends ('layouts.master')

@section ('content')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">

<div id="background" class="container" align="center">
	<h1>James' Resumé</h1>
		<div class="row">
			<div class="col-lg-12">
				<img src="img/me.jpg" class="img-circle">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#experience">Experience</button>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#education">Education</button>
			</div>
		</div>
		<div class="modal fade" id="experience" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Experience</h4>
		      </div>
		      <div class="modal-body">
		        <p>	Aug-07 - Present: Chester’s Hamburger Company - Veteran Cashier/Server</br> 
					<br>•	working in a team environment towards ensuring customer satisfaction together</br> 
					<br>•	training new hires</br> 
					<br>•	delegating duties to other employees</br> 
					<br></br> 

					<br>December ’11 - May ’12 : BBVA Compass at The Vineyard - Branch Associate</br> 
					<br>•	Primary Customer service representative</br> 
					<br>•	learning and applying banking rules and regulations on a daily basis, ensuring transactions were compliant with banking policy</br> 
					<br></br> 

					<br>Oct ‘05 - Aug ‘07:  Ice Center at NorthWoods - Concessions Lead </br> 
					<br>•	closing leader and ensured the team worked efficient and together</br> 
					<br>•	audit the daily cash drawers </br> 
					<br>•	working as a party coordinator</br> 
					<br>•	Manager no longer works for the company</br>
					<br></br>
					</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


		<div class="modal fade" id="education" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Education</h4>
		      </div>
		      <div class="modal-body">
		        <p><br>Education: 
					<br>2013 - Present	Texas A&M University - San Antonio   San Antonio, TX</br> 
						<br>•	Current Junior in Business Management, with concentration in Human Resources. </br>      
						<br>•	Group projects are due every semester, working with different personalities trying to work for a common goal. </br> 
						<br>•	Online courses with different computer programs help with multitasking between work and school.</br> 
						<br></br>
					<br>2006 – Present   	 San Antonio College     San Antonio, TX</br> 
						<br>•	Completed 60 hours, towards an Associates in Business Administratio</br> </p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
</div>

@stop