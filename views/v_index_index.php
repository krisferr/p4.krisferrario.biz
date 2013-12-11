<?php if($user): ?>
	<h2>Hello, <?=$user->first_name;?>!</h2>
	

<?php else: ?>
<div id=features>
		<h1>Daily Prayer</h1>
		
		<h3>Date:</h3>
			<input type="text" id="datepicker"></br>
		
		<h2>Select a Service:</h2>
			<h3>1979 US Book of Common Prayer</h3>
			<input type='radio' name='service' id='morning' checked>
			<label for 'morning'>Morning Prayer</label></br>
			
			<input type='radio' name='service' id='evening'>
			<label for 'evening'>Evening Prayer</label></br>
			
			<input type='radio' name='service' id='compline'>
			<label for 'compline'>Compline</label></br>
			
			
			<h3>Common Worship (Church of England)</h3>
			<input type='radio' name='service' id='cw-am' disabled>
			<label for 'cw-am'>Morning Prayer</label></br>
			
			<input type='radio' name='service' id='cw-pm' disabled>
			<label for 'cw-pm'>Evening Prayer</label></br>
			
			<input type='radio' name='service' id='night' disabled>
			<label for 'night'>Night Prayer</label>
			
			
		<!-- Button -->
		<input type='button' id='select' value='Next'>
		</br></br></br>	
		
		
	</div>
	
	
	<div id=display>
		
		</br></br></br></br></br></br></br></br></br></br></br></br>
		</br></br></br></br></br></br></br></br></br></br></br></br>
		</br></br></br></br></br></br></br></br></br></br></br>
	</div>
	
	
	<script src="js/compline.js"></script>
<?php endif; ?>