<?php if($user): ?>
	<h3>Hello, <?=$user->first_name;?>!</h3>
	

<?php else: ?>
	<h3>
		Hello, Guest!</br>
		<a href="/users/signup">Please registar</a></br>
		or <a href="/users/login">Log In</a></br>
	</h3>
	
<?php endif; ?>

<div id=menu>
		</br></br><h1>Welcome to Daily Prayer</h1></br>
		
		<h2>Date:</h2>
			<input type="text" id="datepicker"></br></br>
		
		<h2>Select a Service:</h2></br>
			<h2> From <em>The Book of Common Prayer (1979)</em>:</h2>
			<form style="display: inline" action="/services/us_morning" method="get">
				<button>Morning Prayer</button>
			</form>
			<form style="display: inline" action="/services/us_evening" method="get">
				<button>Evening Prayer</button>
			</form>
			<form style="display: inline" action="/services/us_compline" method="get">
				<button>Compline</button></br>
			</form></br>
			<h2> From <em>Common Worship</em>:</h2>
			<form style="display: inline" action="/services/uk_morning" method="get">
				<button>Morning Prayer</button>
			</form>
			<form style="display: inline" action="/services/uk_evening" method="get">
				<button>Evening Prayer</button>
			</form>
			<form style="display: inline" action="/services/uk_night" method="get">
				<button>Night Prayer</button>
			</form>
			
			