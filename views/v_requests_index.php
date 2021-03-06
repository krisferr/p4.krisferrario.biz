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
    <h2> See Prayer Requests</h2>
    <br>
    <br>
    <br>
    
    
    <?php foreach($requests as $request): ?>
    
    <article>
	<div id=request>
	    <h3><?=$request['first_name']?> <?=$request['last_name']?> requests prayer for:</h3>
	
	    <p class= view> <?=$request['content']?></p>
	
	    <time datetime="<?=Time::display($request['created'],'Y-m-d G:i')?>">
		<?=Time::display($request['created'])?>
	    </time>
	    
	    <aside>
		    <!-- For those posts owned by this user id provide option to delete post-->
		    <?php if ($request['request_user_id'] == $user->user_id): ?>   
			<button class=change onclick=location.href="/requests/delete/<?=$request['request_id']?>">Delete</button>
			<button class=change onclick=location.href="/requests/edit/<?=$request['request_id']?>">Edit</button>
			<button class="answered" type="button">Pray Answered</button>
			<button class="urgent" type="button">Urgent!</button>
		    <? endif; ?>
			<button class="praying" type="button">I'm Praying<div id="counter">0</div></button>
	    </aside>  
	</div>
    </article>
    <br>
    
    <?php endforeach; ?>
    
</div>