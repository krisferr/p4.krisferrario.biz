<h4>Prayers of Intercession</h4>


    <?php
    
        //To provide variety the two Prayers of Intercession rotate every other day (by using even and odd numbers).
        
            //Use Prayer A on Even numbered days
            if (date("d")%2==0)
            {
                $intercession="<p><em>Officiant: </em>    Show us your mercy, O Lord;</p>
                <p><em>People:</em><strong>    And grant us your salvation.</strong></p> 
                <p><em>Officiant: </em>    Clothe your ministers with righteousness;</p> 
                <p><em>People:</em><strong>    Let your people sing with joy.</strong></p> 
                <p><em>Officiant: </em>.    Give peace, O Lord, in all the world;</p> 
                <p><em>People:</em><strong>    For only in you can we live in safety.</strong></p>
                <br><br>
                <p><em>Officiant: </em>    Lord, keep this nation under your care;</p> 
                <p><em>People:</em><strong>    And guide us in the way of justice and truth.</strong></p> 
                <p><em>Officiant: </em>    Let your way be known upon earth;</p> 
                <p><em>People:</em><strong>    Your saving health among all nations.</strong></p> 
                <p><em>Officiant: </em>.    Let not the needy, O Lord, be forgotten;</p> 
                <p><em>People:</em><strong>    Nor the hope of the poor be taken away.</strong></p> 
                <p><em>Officiant: </em>    Create in us clean hearts, O God;</p>
                <p><em>People:</em><strong>    And sustain us with your Holy Spirit.</strong></p>";
            }
            
            //Use Prayer B on Odd numbered days
            elseif (date("d")%2==1)
            {
                $intercession="<p>That this evening may be holy, good, and peaceful,<br>
                                <strong>We entreat you, O Lord.</strong></p><br>

                                <p>That your holy angels may lead us in paths of peace and <br>
                                goodwill, <br>
                                <strong>We entreat you, O Lord.</strong></p><br>

                                <p>That we may be pardoned and forgiven for our sins <br>
                                and offenses, <br>
                                <strong>We entreat you, O Lord.</strong></p><br>

                                <p>That there may be peace to your Church and to the whole <br>
                                world, <br>
                                <strong>We entreat you, O Lord.</strong></p><br>

                                <p>That we may depart this life in your faith and fear,<br> 
                                and not be condemned before the great judgment seat <br>
                                of Christ, <br>
                                <strong>We entreat you, O Lord.</strong></p><br>

                                <p>That we may be bound together by your Holy Spirit in<br> 
                                the communion of [________ and] all your saints, <br>
                                entrusting one another and all our life to Christ, <br>
                                <strong>We entreat you, O Lord.</strong><br></p><br>";
            
            }
    
        echo $intercession;
    
    ?>

