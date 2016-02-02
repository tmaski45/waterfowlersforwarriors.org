<div class="alert alert-success" role="alert">
    Dinner tickets can be purchased
    <a href="/store" class="alert-link">here</a>
    .
</div>

<div class="row"> 
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="images/FB_IMG_1454118424629.jpg" alt="American Heros" class="w100" />
                
                <p class="space-top"><b>OUR MISSION STATEMENT:</b></p>
                <p>To Honor and Thank our Veterans,
                Wounded and Fallen Soldiers
                and their families. Through Events,
                Sponsorships and Donations we
                are able to provide funds to disperse
                and to help Improve their
                Quality of life and to provide outdoor
                Recreational Activities.</p>
            </div>
        </div>
    </div> 
    
    <div class="col-sm-4 text-center">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=164454333715067";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        <div class="fb-page" data-href="https://www.facebook.com/waterfowlersforwarriors" data-tabs="timeline" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/waterfowlersforwarriors">
                    <a href="https://www.facebook.com/waterfowlersforwarriors">Waterfowler&#039;s for Warrior&#039;s</a>
                </blockquote>
            </div>
        </div>

        <div class="panel panel-default space-top">
            <div class="panel-body text-left">
                <h4>
                    <b>Upcoming Events:</b>
                </h4>

                <?php
                    foreach($events as $event) {
                        echo("<div class='row'>");
                        echo("<div class='col-xs-8'>");
                        echo($event->name);
                        echo("</div>");
                        echo("<div class='col-xs-4 text-right'>");
                        echo($event->date);
                        echo("</div>");
                        echo("</div>");
                    }
                ?>
            </div>
        </div>

        <div class="panel panel-default"> 
            <div class="panel-body">
                <img class="img-responsive" src="/images/branches.jpg" />
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">    
        <div class="panel panel-default">
            <div class="panel-body">
                <h4><b>A special thanks to:</b></h4>

                <img src="/images/linwood-beach-marina-logo.jpg" style="width:100%;" class="space-bottom" alt="Linwood beach marina" />
            </div>
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <h4><b>Sponsors:</b></h4>

                <div class="row space-bottom">
                    <div class="col-sm-6 col-xs-6">
                                                <img src="/images/H-Care_LOGO.gif"style="max-height:100px;" class="img-responsive margin-center" alt="Cabelas" />

                    </div>

                    <div class="col-sm-6 col-xs-6">
                        <img src="/images/logo_original.jpg" style="max-height:100px;" class="img-responsive margin-center" alt="Franks Great Outdoors" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <img src="/images/glastender-logo_rgb.jpg"style="max-height:100px;" class="img-responsive margin-center" alt="Cabelas" />
                    </div>
 
                    <div class="col-sm-6 col-xs-6">
                        <img src="/images/logo.gif" style="max-height:100px;" class="img-responsive margin-center" alt="Burt Watson" />
                    </div>
                </div>
                
                <div class="row" style="margin-top:10px;">
                    <div class="col-sm-6 col-xs-6">
                                                <img src="/images/Americinn_logo.jpg" style="max-height:100px;" class="img-responsive margin-center" alt="gander mountain" />

                    </div>

                    <div class="col-sm-6 col-xs-6">
                        <img src="/images/FMA-100LogoNew.jpg" style="max-height:100px;" class="img-responsive margin-center" alt="Burt Watson" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <h4><b>Organizations that we support:</b></h4>
        
        <div class="row">
            <div class="col-sm-6">
                <img src="/images/fwsf-logo.jpg" class="img-responsive space-bottom" alt="The fallen and wounded soldiers fund" />
            </div>
            
            <div class="col-sm-6">
                <img src="/images/waterfowlers-group.jpg" class="img-responsive space-bottom" alt="Waterfowlers group" />
            </div>
        </div>
    </div>
</div>

<div class="row"> 
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="/images/map.gif" class="img-responsive space-bottom" alt="Waterfowlers map" />
            </div>
        </div>
    </div>
</div>