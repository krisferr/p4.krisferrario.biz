<?php if($user): ?>
	<h3 id=greeting>Hello, <a href="/users/profile"><?=$user->first_name;?></a>!<br>
	<a href="/users/logout"> Logout</a></h3>
	

<?php else: ?>
	<h3 id=greeting>
		Hello, Guest!<br>
		<a href="/users/signup">Please registar</a>
		or <a href="/users/login">Log In</a>
	</h3>
	
<?php endif; ?>

    <nav>
                    <menu>
                            <?php if($user): ?>
                                    <li><a href="/users/profile"> My Prayer Profile</a></li>
                                    <li><a href="/requests/share">Share a Prayer Request</a></li>
                                    <li><a href="/requests/"> See Other's Requests</a></li>
                                    <li><a href="/requests/users"> Follow Others</a></li>
                            <?php else: ?>
                                    <li><a href="/users/signup">Sign Up</a></li>
                                    <li><a href="/users/login">Login</a></li>
                            <?php endif; ?>
                            
                            
                    </menu>
    </nav>
    
<div id=requests>
    
<h2>Share a Prayer Request</h2>


<form method='post' action='/requests/p_share'>

    <textarea rows="8" cols= "77" name='content'></textarea>
    
    
    <br><br>
    
    
    <input type='Submit' value='Share'>

</form>
</div>

