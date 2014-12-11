@extends ('layouts.master')

@section ('content')

<div align="center">
	<h1>James' Resumé</h1>
		<div class="row">
			<div class="col-lg-12">
				<img src="img/me.jpg" class="img-circle" height="400px">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#experience">Experience</button>
				<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#education">Education</button>
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
		        	Aug-07 - Present: Chester’s Hamburger Company - Veteran Cashier/Server<br> 
					<ul>
					    <li>working in a team environment towards company and customer satisfaction</li>
					    <li>training new hires</li>
					    <li>delegating duties to other employees</li>
					</ul>

					December ’11 - May ’12 : BBVA Compass at The Vineyard - Branch Associate<br> 
					<ul>
					    <li>Primary Customer service representative</li>
					    <li>learning and applying banking rules and regulations on a daily basis,<br>ensuring transactions were compliant with banking policy</li>
					</ul>
					<br>

					<br>Oct ‘05 - Aug ‘07:  Ice Center at NorthWoods - Concessions Lead </br> 
					<ul>
					    <li>closing team leader: ensured team worked efficiently and together</li>
					    <li>audit the daily cash drawers</li>
					    <li>party coordinator bringing clients in for private parties</li>
					</ul>
			  </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
					<br>2013 - Present | Texas A&M University - San Antonio | San Antonio, TX</br> 
						<ul>
						    <li>Current Junior in Business Management, with concentration in Human Resources.</li>
						    <li>Group projects are due every semester, working with different personalities trying to work for a common goal.</li>
						    <li>Online courses with different computer programs help with multitasking between work and school.</li>
						</ul>

					<br>2006 – Present | San Antonio College | San Antonio, TX</br> 
						<ul>
						    <li>Completed 60 hours, towards an Associates in Business Administration</li>
						</ul>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
</div>

@stop