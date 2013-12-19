
    <h4>The Invitatory and Psalter</h4>
            </br>
            <h5>All stand</h5>
            </br>
                <p><em>Officiant:</em>    Lord, open our lips.</p> 
                <p><em>People:</em>      And our mouth shall proclaim your praise.</p> 
            
                <p><em>Officiant and People:</em> Glory to the Father, and to the Son, and to the Holy Spirit: as 
                it was in the beginning, is now, and will be for ever. <em>Amen. Alleluia.</em></p>
                </br></br>
<div id=psalm>   
    <h4><em>Venite</em>  &nbsp;&nbsp;&nbsp;&nbsp;   Psalm 95:1-7</h4>
    
    <p>Come, let us sing to the Lord; * </br>
        &nbsp;&nbsp;&nbsp;&nbsp;let us shout for joy to the Rock of our salvation. </br>
    Let us come before his presence with thanksgiving * </br>
        &nbsp;&nbsp;&nbsp;&nbsp;and raise a loud shout to him with psalms.</br></p>
    
    <p>For the Lord is a great God, * </br>
        &nbsp;&nbsp;&nbsp;&nbsp;and a great King above all gods. </br>
    In his hand are the caverns of the earth, * </br>
        &nbsp;&nbsp;&nbsp;&nbsp;and the heights of the hills are his also. </br>
    The sea is his, for he made it, * </br>
        &nbsp;&nbsp;&nbsp;&nbsp;and his hands have molded the dry land.</br> </p>
    
    <p>Come, let us bow down, and bend the knee, * </br>
        &nbsp;&nbsp;&nbsp;&nbsp;and kneel before the Lord our Maker. </br>
    For he is our God, </br>
    and we are the people of his pasture and the sheep of his hand. * </br>
        &nbsp;&nbsp;&nbsp;&nbsp;Oh, that today you would hearken to his voice!</br></p>
    
    <p>Glory to the Father, and to the Son, and to the Holy Spirit: *</br> 
        &nbsp;&nbsp;&nbsp;&nbsp;as it was in the beginning, is now, and will be for ever. Amen.</br></p>
        </br></br>
</div>
          <h4>The Psalm or Psalms Appointed</h4>
                <?php 
                    $num=1;
                    for ($i = 1; $i <= 30; $i++) 
                    {
                        if (date("d")==$i)
                        {
                            $psalm1=$num;
                            $num=$num+5;
                        }
                        
                        else
                        {
                            $num=$num+5;
                        }
                    }
                    $psalm2=$psalm1+1;
                    $psalm3=$psalm2+1;
                ?>
                
            
                <p><?php echo '<a href="http://bookofcommonprayer.net/psalter.php#', urlencode($psalm1), '">';?>The First Psalm</a></p>
                <p><?php echo '<a href="http://bookofcommonprayer.net/psalter.php#', urlencode($psalm2), '">';?>The Second Psalm</a></p>
                <p><?php echo '<a href="http://bookofcommonprayer.net/psalter.php#', urlencode($psalm3), '">';?>The Third Psalm</a></p>
                <p>Glory to the Father, and to the Son, and to the Holy Spirit: *</br> 
                    &nbsp;&nbsp;&nbsp;&nbsp;as it was in the beginning, is now, and will be for ever. Amen.</br></p>