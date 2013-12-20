<?php if($user): ?>
	<h3 id=greeting>Hello, <a href="/users/profile"><?=$user->first_name;?></a>!</h3>


<?php else: ?>
	<h3 id=greeting>
		Hello, Guest!<br>
		<a href="/users/signup">Please registar</a>
		or <a href="/users/login">Log In</a>
	</h3>
	
<?php endif; ?>



<div id=video>
			<iframe width="640" height="480" src="//www.youtube.com/embed/T6PMAU4FjXU" allowfullscreen></iframe>
			
</div>


