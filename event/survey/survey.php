<?php
	$page_title = "Event Evaluation Survey";
	include_once('../includes/header.php');
?>
 <div class="row">
        <div class="col s12 m10 l10 push-l1 push-m1 z-depth-4">
            <div class="card">
<div class="row">
    <form class="col s12">
		<div class="row">
			<div class="input-field col s6">
				<input id="firstName" type="text" class="validate">
				<label for="firstName">First Name</label>
			</div>
			<div class="input-field col s6">
				<input id="lastName" type="text" class="validate">
				<label for="lastName">Last Name</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="email" type="email" class="validate">
				<label for="email">Email</label>
			</div>
		</div>
		<div class="sheader e0i0t1">			
			<div class="imgwrapper">
				<h1>Event Evaluation Survey</h1>		
			</div>
		</div>
		<div class="squestion">
			<div class="squestiontitle">
				<h3>1.</h3>
				<p>How did you hear about this event?</p>
			</div>
			<div class="squestioninput">
				<ul>
					<li><label class="choice"><input type="radio"/> Invitation</label></li>
					<li><label class="choice"><input type="radio"/> Employer</label></li>
					<li><label class="choice"><input type="radio"/> Media</label></li>
					<li><label class="choice"><input type="radio"/> Word of mouth</label></li>
					<li><label class="choice"><input type="radio"/> Other, please specify</label><input type="text" class="inputtext" size="40"></li>
				</ul>
			</div>
		</div>
		<div class="squestion">
			<div class="squestiontitle">
				<h3>2.</h3>
				<p>Overall how would you rate the event?</p>
			</div>
			<div class="squestioninput">
				<ul>
					<li><label class="choice"><input type="radio"/> Excellent</label></li>
					<li><label class="choice"><input type="radio"/> Good</label></li>
					<li><label class="choice"><input type="radio"/> Very good</label></li>
					<li><label class="choice"><input type="radio"/> Fair</label></li>
					<li><label class="choice"><input type="radio"/> Poor</label></li>
				</ul>
			</div>
		</div>


		<div class="squestion">
			<div class="squestiontitle">
				<h3>3.</h3>
				<p>Please rate the following aspects of the event:</p>
			</div>
			<div class="squestioninput">
				<div class="input-matrix">
					<table>
						<tr class="col">
							<th class="empty"></th>
							<th>Poor</th>
							<th>Fair</th>
							<th>Good</th>
							<th>Very good</th>
							<th>Excellent</th>
						</tr>
						<tr class="row">
							<th>Cost</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
						<tr class="row">
							<th>Schedule</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
						<tr class="row">
							<th>Registration process</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
						<tr class="row">
							<th>Speakers</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
						<tr class="row">
							<th>Programme</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
						<tr class="row">
							<th>Location</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
						<tr class="row">
							<th>Parking</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
						<tr class="row">
							<th>Transportation</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
						<tr class="row">
							<th>Food</th>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
							<td><label><input type="radio"/></label></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div>
			<div class="squestion">
				<div class="squestiontitle">
					<h3>4.</h3>
					<p>Overall, how satisfied are you with the event?</p>
				</div>
				<div class="squestioninput">
					<ul>
						<li><label class="choice"><input type="radio"/> Very satisfied</li>
						<li><label class="choice"><input type="radio"/> Satisfied</li>
						<li><label class="choice"><input type="radio"/> Neutral</li>
						<li><label class="choice"><input type="radio"/> Dissatisfied</li>
						<li><label class="choice"><input type="radio"/> Very dissatisfied</li>
					</ul>
				</div>
			</div>


			<div class="squestion">
				<div class="squestiontitle">
					<h3>5.</h3>
					<p>Would you recommend the event to friends or colleagues?</p>
				</div>
				<div class="squestioninput">
					<ul>
						<li><label class="choice"><input type="radio"/> Definitely</li>
						<li><label class="choice"><input type="radio"/> Probably</li>
						<li><label class="choice"><input type="radio"/> Not sure</li>
						<li><label class="choice"><input type="radio"/> Probably not</li>
						<li><label class="choice"><input type="radio"/> Definitely not</li>
					</ul>
				</div>
			</div>


			<div class="squestion">
				<div class="squestiontitle">
					<h3>6.</h3>
					<p>What did you like most about the event?</p>
				</div>
				<div class="squestioninput">
					<textarea class="input-paragraph-medium"></textarea>
				</div>
			</div>


			<div class="squestion">
				<div class="squestiontitle">
					<h3>7.</h3>
					<p>What did you like least about the event?</p>
				</div>
				<div class="squestioninput">
					<textarea class="input-paragraph-medium"></textarea>
				</div>
			</div>

			<div class="squestion">
				<div class="squestiontitle">
					<h3>8.</h3>
					<p>Would you like to recommend any speakers for next year's conference?</p>
				</div>
				<div class="squestioninput">
					<textarea class="input-paragraph-medium"></textarea>
				</div>
			</div>

			<div class="squestion">
				<div class="squestiontitle">
					<h3>9.</h3>
					<p>What other recommendations would you make to improve the event?</p>
				</div>
				<div class="squestioninput">
					<textarea class="input-paragraph-medium"></textarea>
				</div>
			</div>

			
			<div class="cboth"></div>
			
			<p class="snav"><input type="button" value="Submit" class="outputbutton" onclick="parent.location='/surveys/event-evaluation/'"/></p>
		</div>
	</form>
</div>
            </div></div></div>