<div id=closing>
    <p>
                <em>Officiant:</em><br>
        
        <?php
        
            $closing=array("The grace of our Lord Jesus Christ, and the love of God, and <br>
            the fellowship of the Holy Spirit, be with us all evermore. <em>Amen.<br>
            2 Corinthians 13:14</em><br>",
        
            "May the God of hope fill us with all joy and peace in<br>
            believing through the power of the Holy Spirit. <em>Amen.<br>
            Romans 15:13</em><br>",
            
            "Glory to God whose power, working in us, can do infinitely<br>
            more than we can ask or imagine: Glory to him from<br>
            generation to generation in the Church, and in Christ Jesus<br>
            forever and ever. <em>Amen.
            Ephesians 3:20-21</em><br>");
            
            if (date("d")%3==0)
            {
                echo $closing[0];
            }
            
            elseif (date("d")%3==1)
            {
                echo $closing[1];
            }
            
            elseif (date("d")%3==2)
            {
                echo $closing[2];
            }
        ?>
        
    </p>
</div>