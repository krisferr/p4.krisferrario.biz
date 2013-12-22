<div id=mission>
    
        <?php
                $mission=array("<p>Keep watch, dear Lord, with those who work, or watch, or <br>
                                weep this night, and give your angels charge over those who <br>
                                sleep. Tend the sick, Lord Christ; give rest to the weary, bless <br>
                                the dying, soothe the suffering, pity the afflicted, shield the <br>
                                joyous; and all for your love's sake. <em>Amen.</em></p>",



                                "<p>O God, your unfailing providence sustains the world we live<br>
                                in and the life we live: Watch over those, both night and day, <br>
                                who work while others sleep, and grant that we may never<br>
                                forget that our common life depends upon each other's toil;<br>
                                through Jesus Christ our Lord. <em>Amen.</em></p>");

                $rand_keys = array_rand($mission);
                echo $mission[$rand_keys] . "\n";
            
        ?>