<div id=mission>
    <h4>The Collect for Mission</h4>
    
        <?php
                $mission=array("<p>Almighty and everlasting God, by whose Spirit the whole <br>
                                body of thy faithful people is governed and sanctified: <br>
                                Receive our supplications and prayers which we offer before <br>
                                you for all members of your holy Church, that in their <br>
                                vocation and ministry they may truly and devoutly serve you; <br>
                                through our Lord and Savior Jesus Christ. <em>Amen.</em><br></p>",
                                
                                "<p>O God, you have made of one blood all the peoples of the <br>
                                earth, and sent your blessed Son to preach peace to those <br>
                                who are far off and to those who are near: Grant that people <br>
                                everywhere may seek after you and find you; bring the <br>
                                nations into your fold; pour out your Spirit upon all flesh; <br>
                                and hasten the coming of your kingdom; through Jesus <br>
                                Christ our Lord. <em>Amen.</em><br></p>",
                                 
                                "<p>Lord Jesus Christ, you stretched out your arms of love on <br>
                                the hard wood of the cross that everyone might come within <br>
                                the reach of your saving embrace: So clothe us in your Spirit <br>
                                that we, reaching forth our hands in love, may bring those <br>
                                who do not know you to the knowledge and love of you; for <br>
                                the honor of your Name. <em>Amen.</em><br></p>");
                
                
                $rand_keys = array_rand($mission);
                echo $mission[$rand_keys] . "\n";
            
        ?>
    <br>
    <h5>Here may be sung a <a href=http://www.oremus.org/hymnal/82.html>hymn or anthem.</a></h5>
</div>