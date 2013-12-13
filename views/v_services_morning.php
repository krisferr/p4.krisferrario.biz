<div id=menu>
    <?php //echo $date ?>

<h1>Morning Prayer</h1>
    <?php echo file_get_contents('/../v_services_opening_sentance', FILE_USE_INCLUDE_PATH);?>
    
    
    <h4>The Invitatory and Psalter</h4>

        <h5>All stand</h5></br>
        
            <p><em>Officiant:</em>    Lord, open our lips.</p> 
            <p><em>People:</em>      And our mouth shall proclaim your praise.</p> 
        
            <p><em>Officiant and People:</em> Glory to the Father, and to the Son, and to the Holy Spirit: as 
            it was in the beginning, is now, and will be for ever. <em>Amen. Alleluia.</em></p>
            
        
        <h4>The Psalm or Psalms Appointed</h4>
        
            <p><?php echo '<a href="http://www.esvbible.org/devotions/bcp/', urlencode(date('Y-m-d')), '">';?>The First Psalm</a></p>
        
            <p>Glory to the Father, and to the Son, and to the Holy Spirit: *</br> 
            as it was in the beginning, is now, and will be for ever. Amen.</p>
    
    <h4>The Lessons</h4>
    
        <p><?php echo '<a href="http://www.esvbible.org/devotions/bcp/', urlencode(date('Y-m-d')), '">';?>The Old Testament Lesson</a></p>
        
        <p>The Word of the Lord.</p> 
        <p><strong>Thanks be to God.</strong></p>
        
        <p><?php echo '<a href="http://www.esvbible.org/devotions/bcp/', urlencode(date('Y-m-d')), '">';?>The Gospel</a></p>
        
        <p>The Word of the Lord.</p> 
        <p><strong>Thanks be to God.</strong></p>
        
        
    <h4>A Canticle</h4>
    
    <h4>The Apostles' Creed</h4>

    <p><em>Officiant and People together, all standing</em></p>
    
    <p>I believe in God, the Father almighty,</br> 
            &nbsp;&nbsp;&nbsp;&nbsp;creator of heaven and earth;</br> 
    I believe in Jesus Christ, his only Son, our Lord.</br> 
            &nbsp;&nbsp;&nbsp;&nbsp;He was conceived by the power of the Holy Spirit</br> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and born of the Virgin Mary.</br> 
            &nbsp;&nbsp;&nbsp;&nbsp;He suffered under Pontius Pilate,</br> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;was crucified, died, and was buried.</br>  
            &nbsp;&nbsp;&nbsp;&nbsp;He descended to the dead.</br>  
            &nbsp;&nbsp;&nbsp;&nbsp;On the third day he rose again.</br>  
            &nbsp;&nbsp;&nbsp;&nbsp;He ascended into heaven,</br> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and is seated at the right hand of the Father.</br> 
            &nbsp;&nbsp;&nbsp;&nbsp;He will come again to judge the living and the dead.</br> 
    I believe in the Holy Spirit,</br> 
            &nbsp;&nbsp;&nbsp;&nbsp;the holy catholic Church,</br> 
            &nbsp;&nbsp;&nbsp;&nbsp;the communion of saints,</br> 
            &nbsp;&nbsp;&nbsp;&nbsp;the forgiveness of sins</br>
            &nbsp;&nbsp;&nbsp;&nbsp;the resurrection of the body,</br> 
            &nbsp;&nbsp;&nbsp;&nbsp;and the life everlasting. Amen.</p>
    
    <h4></h4>
