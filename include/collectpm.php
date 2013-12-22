<?php

    if(date("w")==6)
    {
        $collect=       "<h4>A Collect for Saturdays</h4>
        
                        <p>We give you thanks, O God, for revealing your Son Jesus <br>
                        Christ to us by the light of his resurrection: Grant that as we <br>
                        sing your glory at the close of this day, our joy may abound<br>
                        in the morning as we celebrate the Paschal mystery; through<br>
                        Jesus Christ our Lord. Amen.</p>";
                        
         echo $collect . "\n";           
    }
    
    else
    {
        $collect= array("<p>Be our light in the darkness, O Lord, and in your great mercy <br>
                        defend us from all perils and dangers of this night; for the<br>
                        love of your only Son, our Savior Jesus Christ. Amen.</p>",
                        
                        "<p>Be present, O merciful God, and protect us through the hours<br>
                        of this night, so that we who are wearied by the changes and<br>
                        chances of this life may rest in your eternal changelessness; <br>
                        through Jesus Christ our Lord. Amen.</p>",
                        
                        "<p>Look down, O Lord, from your heavenly throne, and<br>
                        illumine this night with your celestial brightness; that by<br>
                        night as by day your people may glorify your holy Name;<br>
                        through Jesus Christ our Lord. Amen.</p>",
                        
                        "<p>Visit this place, O Lord, and drive far from it all snares of the <br>
                        enemy; let your holy angels dwell with us to preserve us in<br>
                        peace; and let your blessing be upon us always; through Jesus <br>
                        Christ our Lord. Amen.</p>");
        
            $rand_keys = array_rand($collect);
            echo $collect[$rand_keys] . "\n";
    }


?>



