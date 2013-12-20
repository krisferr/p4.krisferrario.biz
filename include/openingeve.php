<div class=opening>
    <h4>Opening Sentance</h4>
        
        <p>
            <em>Officiant:</em>
            
            
            <?php
                    
                    $opening = array("Let my prayer be set forth in your sight as incense, the lifting 
                                        up of my hands as the evening sacrifice.    Psalm 141:2",
                                        
                                        "Grace to you and peace from God our Father and from the 
                                        Lord Jesus Christ.    Philippians 1:2",
                                        
                                        "Worship the Lord in the beauty of his holiness; let the whole earth 
                                        tremble before him.    Psalm 96:9",
                                        
                                        "Yours is the day, O God, yours also the night; you established 
                                        the moon and the sun. You fixed all the boundaries of the 
                                        earth; you made both summer and winter.    Psalm 74:15,16",
                                        
                                        "I will bless the Lord who gives me counsel; my heart teaches 
                                        me, night after night. I have set the Lord always before me; 
                                        because he is at my right hand, I shall not fall.    Psalm 16:7,8",
                                        
                                        "Seek him who made the Pleiades and Orion, and turns deep 
                                        darkness into the morning, and darkens the day into night; 
                                        who calls for the waters of the sea and pours them out upon 
                                        the surface of the earth: The Lord is his name.    Amos 5:8",
                                        
                                        "If I say, \"Surely the darkness will cover me, and the light 
                                        around me turn to night,\" darkness is not dark to you, O 
                                        Lord; the night is as bright as the day; darkness and light to 
                                        you are both alike.    Psalm 139:10,11",
                                        
                                        "Jesus said, \"I am the light of the world; whoever follows me 
                                        will not walk in darkness, but will have the light of life.\" 
                                        John 8:12");
                $rand_keys = array_rand($opening);
                echo $opening[$rand_keys] . "\n";
            ?>
        </p>
</div>






