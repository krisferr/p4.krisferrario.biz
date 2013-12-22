<div class=opening>
    <h4>Opening Sentance</h4>
        
        <p>
            <em>Officiant:</em>
            
            
            <?php
                    //Advent
                    if (date('m')==12 and date('d') <= 24)
                    {
                        $opening = array("Watch , for you know not when the master of the house 
                                                will come, in the evening, or at midnight, or at cockcrow, or 
                                                in the morning; lest he come suddenly and find you asleep. 
                                                Mark 13:35, 36",
                
                                                "In the wilderness prepare the way of the Lord, make straight 
                                                in the desert a highway for our God.    Isaiah 40:3", 
                                                
                                                "The glory of the Lord shall be revealed, and all flesh shall see 
                                                it together.    Isaiah 40:5 ");
                    }
                    //Christmas
                    elseif (((date('m')==12) and (date('d') >= 25)) or (date('z')<= 4))
                    {
                        $opening= array("Behold, I bring you good news of a great joy, which will come 
                                                to all the people; for unto you is born this day in the city of 
                                                David, a Savior, who is Christ the Lord.    Luke 2:10, 11", 
                                                
                                                "Behold, the dwelling of God is with mankind. He will dwell 
                                                with them, and they shall be his people, and God himself will 
                                                be with them, and be their God.    Revelation 21:3");
                    }
                        $rand_keys = array_rand($opening);
                echo $opening[$rand_keys] . "\n";
            ?>
        </p>
</div>