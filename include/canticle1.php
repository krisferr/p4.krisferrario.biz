<head>
    
    <script src="../controllers/c_season"></script>
    
</head>

<div class=canticle>
    <?php
    
        require('./controllers/c_season.php');
        
        if (date("z")>=359 or date("z") <= 4)        
        {
    
                $canticle1 = "<h4>16 The Song of Zechariah &nbsp;&nbsp;&nbsp;&nbsp;<em>Benedictus Dominus Deus</em></h4><br> 
                          <p>Luke 1: 68-79</p><br>
                
                <p>Blessed be the Lord, the God of Israel; * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;he has come to his people and set them free. <br>
                He has raised up for us a mighty savior, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;born of the house of his servant David. <br>
                Through his holy prophets he promised of old, <br>
                that he would save us from our enemies, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;from the hands of all who hate us. <br>
                He promised to show mercy to our fathers * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;and to remember his holy covenant. <br>
                This was the oath he swore to our father Abraham, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;to set us free from the hands of our enemies, <br>
                Free to worship him without fear, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;holy and righteous in his sight <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;all the days of our life.<br></p>
                
                <p>You, my child, shall be called the prophet of the Most High, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;for you will go before the Lord to prepare his way, <br>
                To give his people knowledge of salvation * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;by the forgiveness of their sins. <br>
                In the tender compassion of our God * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;the dawn from on high shall break upon us, <br>
                To shine on those who dwell in darkness and the <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shadow of death, * <br> 
                    &nbsp;&nbsp;&nbsp;&nbsp;and to guide our feet into the way of peace.</p>
                
                <p>Glory to the Father, and to the Son, and to the Holy Spirit: * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;as it was in the beginning, is now, and will be for ever. Amen.<br> </p>";
        }
            
            
        else
        {        
                $canticle1 = "<h4>11    The Third Song of Isaiah   &nbsp;&nbsp;&nbsp;&nbsp; <em>Surge, illuminare</em></h4><br> 
                          <p>Isaiah 60:1-3, 11a, 14c, 18-19</p><br>
                
                <p>Arise, shine, for your light has come, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;and the glory of the Lord has dawned upon you. <br>
                For behold, darkness covers the land; * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;deep gloom enshrouds the peoples. <br>
                But over you the Lord will rise, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;and his glory will appear upon you. <br>
                Nations will stream to your light, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;and kings to the brightness of your dawning. <br>
                Your gates will always be open; * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;by day or night they will never be shut. <br>
                They will call you, The City of the Lord, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;The Zion of the Holy One of Israel. <br>
                Violence will no more be heard in your land, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;ruin or destruction within your borders. <br>
                You will call your walls, Salvation, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;and all your portals, Praise. <br>
                The sun will no more be your light by day; * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;by night you will not need the brightness of the moon. <br>
                The Lord will be your everlasting light, * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;and your God will be your glory.<br></p>
                
                <p>Glory to the Father, and to the Son, and to the Holy Spirit: * <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;as it was in the beginning, is now, and will be for ever. Amen.</p>";
        }
    
        echo $canticle1;
    ?>
        

</div>
