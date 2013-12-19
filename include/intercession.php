<h4>Prayers of Intercession</h4>


<?php

//To provide variety the two Prayers of Intercession rotate every other day (by using even and odd numbers).

//Use Prayer A on Odd numbered days
if (date("d")%2==1)
{
    $intercession="<p><em>Officiant: </em>    Show us your mercy, O Lord;</p>
    <p><em>People:</em><strong>    And grant us your salvation.</strong></p> 
    <p><em>Officiant: </em>    Clothe your ministers with righteousness;</p> 
    <p><em>People:</em><strong>    Let your people sing with joy.</strong></p> 
    <p><em>Officiant: </em>.    Give peace, O Lord, in all the world;</p> 
    <p><em>People:</em><strong>    For only in you can we live in safety.</strong></p>
    </br></br>
    <p><em>Officiant: </em>    Lord, keep this nation under your care;</p> 
    <p><em>People:</em><strong>    And guide us in the way of justice and truth.</strong></p> 
    <p><em>Officiant: </em>    Let your way be known upon earth;</p> 
    <p><em>People:</em><strong>    Your saving health among all nations.</strong></p> 
    <p><em>Officiant: </em>.    Let not the needy, O Lord, be forgotten;</p> 
    <p><em>People:</em><strong>    Nor the hope of the poor be taken away.</strong></p> 
    <p><em>Officiant: </em>    Create in us clean hearts, O God;</p>
    <p><em>People:</em><strong>    And sustain us with your Holy Spirit.</strong></p>";
}

//Use Prayer B on Even numbered days
elseif (date("d")%2==0)
{
    $intercession="<p><em>Officiant: </em>    Save your people, Lord, and bless your inheritance;</p> 
<p><em>People:</em><strong>    Govern them and uphold them, now and always.</strong></p> 
<p><em>Officiant: </em>    Day by day we bless you;</p> 
<p><em>People:</em><strong>    We praise your name for ever.</strong></p> 
<p><em>Officiant: </em>    Lord, keep us from all sin today;</p> 
<p><em>People:</em><strong>    Have mercy upon us, Lord, have mercy.</strong></p> 
<p><em>Officiant: </em>    Lord, show us your love and mercy;</p> 
<p><em>People:</em><strong>    For we put our trust in you.</strong></p> 
<p><em>Officiant: </em>    In you, Lord, is our hope;</p> 
<p><em>People:</em><strong>    And we shall never hope in vain.</strong></p>";

}

echo $intercession;

?>