<div class="row">
    <div class="col-xs-12">
        <img src="/images/american-flag-banner.jpg" class="img-responsive" style="margin: 0 auto 10px auto;" alt="American Flag Banner" /> 
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body"> 
        <p>“Freedom isnt’t Free” So with your help we can give back.</p>

        <p>Waterfowlers for Warriors is a Non-Profit 501(c)(3) Organization  that has come together; To Honor and 
Thank our Veterans, Wounded and Fallen Soldiers and their families. Through Events, Sponsorships and 
Donations we are able to provide funds to disperse and to help Improve their Quality of life and to 
provide outdoor Recreational Activities. We are an all-volunteer based group which no one receives any 
compensation for their time put forth. We try and keep all funds raised in the state of Michigan however 
we sometimes reach out to Veterans and Active Duty personnel outside of the state. With continued 
growth we will be in need of adding chapters in other states allowing us to further help Veterans outside 
of Michigan.  Our fund raisers each year include a Wild Game Dinner of 350 people , Golf Outing with 
144 participants and this year an Off Shore Boat Poker Run which with hopes of 50 to100 boats and 
some 400 to 1000 people . Our final event is an expense paid Patriot Duck Hunt and weekend of fun and 
camaraderie for 8 to 10 Disabled  Veterans with over 40% disability and some to 100%. We feel because 
of all they have done to keep us safe and free we want to give a little back. We are always in need of 
Sponsors and Donations and very much like the support of local people to get involved and help show 
appreciation.</p>

<p>Main Events Each Year,  Follow us to get information on all events that may come up or be added.</p>
    </div>
</div>

<?php
foreach($events as $event) {
    echo("<div class='panel panel-default'>");
        echo("<div class='panel-body'>");
            echo("<h3 class='no-space-top'>" . $event->name . "</h3>");
            echo($event->description);
        echo("</div>");
    echo("</div>");
}
?>