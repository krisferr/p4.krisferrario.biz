<?php if($user): ?>
	<h3 id=greeting>Hello, <a href="/users/profile"><?=$user->first_name;?></a>!</h3>
	

<?php else: ?>
	<h3 id=greeting>
		Hello, Guest!<br>
		<a href="/users/signup">Please registar</a>
		or <a href="/users/login">Log In</a>
	</h3>
	
<?php endif; ?>

<div id=menu>
		<br><br><h1>Welcome to Daily Prayer</h1><br>
		
		<h2>Date:</h2>
			<input type="text" id="datepicker" value="<?php //echo $date; ?>"><br><br>
		
		<h2>Select a Service:</h2><br>
			<h2> From <em>The Book of Common Prayer (1979)</em></h2>
			<form style="display: inline" action="/services/morning" method="get">
				<button>Morning Prayer</button>
			</form>
			<form style="display: inline" action="/services/evening" method="get">
				<button>Evening Prayer</button>
			</form>
			<form style="display: inline" action="/services/compline" method="get">
				<button>Compline</button>
			</form><br>
			
			<form style="display: inline" action="/services/whyprayer" method="get">
				<button>Why Prayer?</button>
			</form>
</div>
			
			