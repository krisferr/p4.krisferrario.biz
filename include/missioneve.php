<div id=mission>
    
        <?php
            $mission=array("<p>O God and Father of all, whom the whole heavens adore:<br>
                            Let the whole earth also worship you, all nations obey you, <br>
                            all tongues confess and bless you, and men and women <br>
                            everywhere love you and serve you in peace; through Jesus <br>
                            Christ our Lord. <em>Amen.</em><br></p>",
            
                            "<p>Keep watch, dear Lord, with those who work, or watch, or <br>
                            weep this night, and give your angels charge over those who <br>
                            sleep. Tend the sick, Lord Christ; give rest to the weary, bless <br>
                            the dying, soothe the suffering, pity the afflicted, shield the <br>
                            joyous; and all for your love's sake. <em>Amen.</em><br></p>",
             
                            "<p>O God, you manifest in your servants the signs of your <br>
                            presence: Send forth upon us the spirit of love, that in <br>
                            companionship with one another your abounding grace may <br>
                            increase among us; through Jesus Christ our Lord. <em>Amen.</em><br></p>");
            
            
            $rand_keys = array_rand($mission);
            echo $mission[$rand_keys] . "\n";
            
        ?>
    <br>
    <h5>Here may be sung a <a href=http://www.oremus.org/hymnal/82.html>hymn or anthem.</a></h5>
</div> 