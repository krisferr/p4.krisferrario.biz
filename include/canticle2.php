<div class=canticle>

    <?php
        $easter = date("z", easter_date(date("Y")));
    
        if (date("z")>=date("z", $easter)-46 and date("z")<=date("z", $easter)-1)     
        {
                $canticle2 = "<h4>2 A Song of Praise &nbsp;&nbsp;&nbsp;&nbsp;<em>Benedictus es, Domine</em></h4><br>
                <p>Song of the Three Young Men, 29-34</p>
                <p>Glory to you, Lord God of our fathers;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;you are worthy of praise; glory to you.<br>
                Glory to you for the radiance of your holy Name;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;we will praise you and highly exalt you for ever.<br>
                Glory to you in the splendor of your temple;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;on the throne of your majesty, glory to you.<br>
                Glory to you, seated between the Cherubim;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;we will praise you and highly exalt you for ever.<br>
                Glory to you, beholding the depths;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;in the high vault of heaven, glory to you.<br>
                Glory to the Father, and to the Son, and to the Holy Spirit;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;we will praise you and highly exalt you for ever.</p>";
        }     
             
             
             
        else
        {
                $canticle2 = "<h4>7 We Praise You, O God <em>&nbsp;&nbsp;&nbsp;&nbsp;Te Deum Laudamus</em></h4><br>
                <p>We praise you, O God, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;we acclaim you as Lord; <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;all creation worships you, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;the Father everlasting. <br>
                To you all angels, all the powers of heaven, <br>
                The cherubim and seraphim, sing in endless praise: <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Holy, Holy, Holy, Lord God of power and might, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;heaven and earth are full of your glory.<br></p> 
                <p>The glorious company of apostles praise you. <br>
                The noble fellowship of prophets praise you. <br>
                The white-robed army of martyrs praise you. <br>
                Throughout the world the holy Church acclaims you: <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Father, of majesty unbounded, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;your true and only Son, worthy of all praise, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;the Holy Spirit, advocate and guide.<br></p> 
                <p>You, Christ, are the king of glory, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;the eternal Son of the Father. <br>
                When you took our flesh to set us free <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;you humbly chose the Virgin's womb. <br>
                You overcame the sting of death <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;and opened the kingdom of heaven to all believers. <br>
                You are seated at God's right hand in glory. <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;We believe that you will come to be our judge. <br>
                Come then, Lord, and help your people, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;bought with the price of your own blood, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;and bring us with your saints <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;to glory everlasting. <br>
                Save your people, Lord, and bless your inheritance; <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;govern and uphold them now and always.<br>
                Day by day we bless you; <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;we praise your name forever.<br>
                Keep us today, Lord, from all sin; <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;have mercy on us, Lord, have mercy.<br>
                Lord, show us your love and mercy,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;for we have put our trust in you.<br>
                In you, Lord, is our hope,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;let us never be put to shame.<br></p>";
        }
        
        echo $canticle2;
    
    ?>

</div>