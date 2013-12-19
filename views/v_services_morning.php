<?php if($user): ?>
	<h3 id=greeting>Hello, <a href="/users/profile"><?=$user->first_name;?></a>!</h3>
	

<?php else: ?>
	<h3 id=greeting>
		Hello, Guest!</br>
		<a href="/users/signup">Please registar</a>
		or <a href="/users/login">Log In</a>
	</h3>
	
<?php endif; ?>

    
<div id=morning>
<h1>Morning Prayer</h1>

    <h2> <?php echo date("l, F j, Y")//, mktime($date)) ?></h2>
    <h2>The Season of<?php //echo $season ?></h2>
    
    <?=$opening;?>
    </br>
    <?=$confession;?>
    </br>
    <?=$psalm;?>
    </br>	    
    </br>
    <h4>The Lessons</h4>
    
        <p>The Old Testament Lesson
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=ESV', '">';?> (ESV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NRSV', '">';?>(NRSV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NIV', '">';?> (NIV)</a>
        </p>
        
        <p><em>Reader:</em> The Word of the Lord.</p> 
        <p><em>People:</em><strong> Thanks be to God.</strong></p>
        </br></br>
        <?=$canticle1;?>
        </br></br>
        <p>The Gospel
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=ESV', '">';?> (ESV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NRSV', '">';?>(NRSV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NIV', '">';?> (NIV)</a>
        </p>
        
        <p><em>Reader:</em> The Word of the Lord.</p> 
        <p><em>People:</em><strong> Thanks be to God.</strong></p>
        </br></br>
        <?=$canticle2;?>
        </br></br>
        <?=$creed;?>
        </br></br>
        <?=$lp;?>
        </br></br>
        <?=$intercession;?>
        </br></br>
        <?=$collect;?>
        </br></br>
	<?=$mission;?>
        </br></br>
        <?=$thanksgiving;?>
        </br></br>
	<?=$closing;?>

</div>