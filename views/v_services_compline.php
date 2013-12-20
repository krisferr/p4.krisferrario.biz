<?php if($user): ?>
	<h3 id=greeting>Hello, <a href="/users/profile"><?=$user->first_name;?></a>!</h3>
	

<?php else: ?>
	<h3 id=greeting>
		Hello, Guest!<br>
		<a href="/users/signup">Please registar</a>
		or <a href="/users/login">Log In</a>
	</h3>
	
<?php endif; ?>

<div id=compline>

<h1>An Order for Compline</h1>
<h2> <?php echo date("l, F j, Y")//, mktime($date)) ?></h2>
<h2>The Season of<?php //echo $season ?></h2>

<br><br>
<h5>The Officiant begins</h5>

<p>The Lord Almighty grant us a peaceful night and a perfect
end. <em>Amen.</em></p>
<br><br>
<p><em>Officiant:</em>    Our help is in the Name of the Lord;</p>
<p><em>People:</em>       <strong>The maker of heaven and earth.</strong></p>
<br><br>
<h5>The Officiant may then say</h5>
<br>
<p>Let us confess our sins to God.</p>
<br>
<p><em>Officiant and People:</em></h5>
<div class=confession>
<p>Almighty God, our heavenly Father:<br>
We have sinned against you,<br>
through our own fault,<br>
in thought, and word, and deed,<br>
and in what we have left undone.<br>
For the sake of your Son our Lord Jesus Christ,<br>
forgive us all our offenses;<br>
and grant that we may serve you<br>
in newness of life,<br>
to the glory of your Name. Amen.</p>
 
<br>
<p><em>Officiant:</em> May the Almighty God grant us forgiveness of all our sins, <br>
and the grace and comfort of the Holy Spirit. <em>Amen.</em></p>
<br><br>
<p><em>Officiant:</em> O God, make speed to save us.</p>
<br>
<p><em>People:</em>    <strong>O Lord, make haste to help us.</strong></p>
<br>
<p><em>Officiant and People:</em></p>
<p><strong>Glory to the Father, and to the Son, and to the Holy Spirit: as <br>
it was in the beginning, is now, and will be for ever. Amen.</strong></p>

<br><br>
<?=$psalm?>
<br><br>
<?=$reading?>
<br><br>

<p><em>Officiant:</em>     Into your hands, O Lord, I commend my spirit;</p>
<p><em>People:</em>    <strong>For you have redeemed me, O Lord, O God of truth.</strong></p>
<p><em>Officiant:</em>     Keep us, O Lord, as the apple of your eye;</p>
<p><em>People:</em>    <strong>Hide us under the shadow of your wings.</strong></p>
<br><br>
<p>Lord, have mercy.<br>
<strong>Christ, have mercy.</strong><br>
Lord, have mercy.</p>
<br><br>
<?=$lp?>
<br><br>

<p><em>Officiant:</em>    Lord, hear our prayer; </p>
<p><em>People:</em>    <strong>And let our cry come to you.</strong></p> 
<p><em>Officiant:</em>    Let us pray.</p>
<br><br>

<?=$collect?>
<br><br>
<?=$sleep?>
<br><br>

<div class=canticle>
<p>Guide us waking, O Lord, and guard us sleeping; that awake<br>
we may watch with Christ, and asleep we may rest in peace.</p><br>
<br>
<h4>The Song of Simeon </h4><br>
<p>Lord, you now have set your servant free *<br>
   to go in peace as you have promised;</p><br>

<p>For these eyes of mine have seen the Savior, *<br>
   whom you have prepared for all the world to see:</p><br>

<p>A Light to enlighten the nations, *<br>
   and the glory of your people Israel.</p><br>

<p>Glory to the Father, and to the Son, and to the Holy Spirit: * <br>
   as it was in the beginning, is now, and will be for ever. Amen.</p><br>
<br>
<p>Guide us waking, O Lord, and guard us sleeping; that awake<br>
we may watch with Christ, and asleep we may rest in peace.<p><br>
</div>
<br><br>
<p><em>Officiant:</em>    Let us bless the Lord. </p>
<p><em>People:</em>    <strong>Thanks be to God.</strong></p>
<br><br>
<p><em>The Officiant concludes</em></p>

<p>The almighty and merciful Lord, Father, Son, and Holy Spirit, <br>
bless us and keep us. <em>Amen.</em></p>