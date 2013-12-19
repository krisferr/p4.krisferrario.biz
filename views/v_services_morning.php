<div id=menu>
    <?php //echo $date
    
    
    //require('../includes/inc.php');
    
    
    ?>
    
    
    
<h1>Morning Prayer</h1>
    <h2> <?php //echo date("l, F j, Y", mktime($date)) ?></h2>
    <h2>The Season of<?php //echo $season ?></h2>
    
    <?php  //$opening src='include/opening'; ?>
    <?php if(isset($opening)) echo $opening; else echo "blah"?>
    
    
    <?php if(isset($confession)) echo $confession;?>
        
    
    <h4>The Invitatory and Psalter</h4>

        <h5>All stand</h5>
        
            <p><em>Officiant:</em>    Lord, open our lips.</p> 
            <p><em>People:</em>      And our mouth shall proclaim your praise.</p> 
        
            <p><em>Officiant and People:</em> Glory to the Father, and to the Son, and to the Holy Spirit: as 
            it was in the beginning, is now, and will be for ever. <em>Amen. Alleluia.</em></p>
            
        
        <h4>The Psalm or Psalms Appointed</h4>
        
            <p><?php echo '<a href="http://www.esvbible.org/devotions/bcp/', urlencode(date('Y-m-d')), '">';?>The First Psalm</a></p>
            #http://bookofcommonprayer.net/psalter.php#
        
            <p>Glory to the Father, and to the Son, and to the Holy Spirit: *</br> 
            as it was in the beginning, is now, and will be for ever. Amen.</p>
    
    <h4>The Lessons</h4>
    
        <p>The Old Testament Lesson
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=ESV', '">';?> (ESV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NRSV', '">';?>(NRSV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NIV', '">';?> (NIV)</a>
        </p>
        
        <p><em>Reader:</em> The Word of the Lord.</p> 
        <p><em>People:</em><strong> Thanks be to God.</strong></p>
        
        <?php echo file_get_contents('/../v_services_canticle', FILE_USE_INCLUDE_PATH);?>
        
        <p>The Gospel
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=ESV', '">';?> (ESV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NRSV', '">';?>(NRSV)</a>
            <?php echo '<a href="http://www.biblegateway.com/reading-plans/bcp-daily-office/', urlencode(date('Y')),'/', urlencode(date('m')), '/', urlencode(date('d')),'?version=NIV', '">';?> (NIV)</a>
        </p>
        
        <p><em>Reader:</em> The Word of the Lord.</p> 
        <p><em>People:</em><strong> Thanks be to God.</strong></p>
        
        <?php echo file_get_contents('/../v_services_canticle', FILE_USE_INCLUDE_PATH);?>
   
    
    <creed
    
    <h4></h4>
