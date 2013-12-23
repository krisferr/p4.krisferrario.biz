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

    <div id=users>
        <h2> Log In</h2>
        
        
        <form method='POST' action='/users/p_login'>
            
            Email<br>
            <input type='text' name='email'>
        
            <br><br>
        
            Password<br>
            <input type='password' name='password'>
        
            <br><br>
        
            <input type='submit' id='submit' value='Log in'>
        
        </form>
    </div>
      