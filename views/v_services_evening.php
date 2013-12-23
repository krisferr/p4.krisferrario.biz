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

    
<div id=evening>
<h1>Evening Prayer</h1>

    <h2> <?php echo date("l, F j, Y") ?></h2>
    <h2>The Season of <?=$season ?></h2>
    
    <?=$opening;?>
    <br>
    <?=$confession;?>
    <br>
    <?=$invitatory;?>
    <br>
    <br>
    <?=$light;?>
    <br>
    <br>
    <?=$psalm;?>
    <br>	    
    <h4>The Lessons</h4>
    
        <p>The New Testament Lesson
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=ESV', '">';?> (ESV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NRSV', '">';?>(NRSV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NIV', '">';?> (NIV)</a>
        </p>
        
        <p><em>Reader:</em> The Word of the Lord.</p> 
        <p><em>People:</em><strong> Thanks be to God.</strong></p>
        <br><br>
        <?=$magnificat;?>
        <br><br>
        <?=$nunc;?>
        <br><br>
        <?=$creed;?>
        <br><br>
        <?=$lp;?>
        <br><br>
        <?=$intercession;?>
        <br><br>
        <?=$collect;?>
        <br><br>
	<?=$mission;?>
        <br><br>
        <?=$thanksgiving;?>
        <br><br>
	<?=$closing;?>

</div>