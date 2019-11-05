<?php
$consumer_all = array( 
					array( "name" => "canon_ciis-consumer", 
    					   "title" => "CANON U.S.A.",
                           "tagline"    => "An animated experience.",
                           "summary" => "A series of one-minute animations helps<br/>consumers understand new products. ",
	                       "overview" => "Canon Information & Imaging Solutions (CIIS) is developing new solutions that streamline business processes. One series is Forms and Print Services for Salesforce." ,
	                       "challenge" => "To rapidly reach and educate prospective customers online.",
	                        "solution" => "It’s not easy to show how business processes and imaging technology come together to solve a problem. But animations did the trick for CIIS. Collega developed a series of one-minute animated modules that each depict a specific business challenge solved by CIIS’s Forms and Print Services for Salesforce.",
						              "isVideoSlideshow" => true, //need this for video slideshow
                          "numOfSlides" => 2,
                          "videoLinks" => array("http://player.vimeo.com/video/65661256?api=1", "http://player.vimeo.com/video/65659832?api=1"),
                          "view_project" => null, //if this is null no view project will be rendered
               ), 
				    array( "name" => "canon_gen-consumer", 
    					   "title" => "CANON U.S.A.",
                           "tagline"    => "A GENUINE difference.",
                           "summary" => "A three-minute video helps consumers understand<br/>why Canon supplies truly stand out.",
	                       "overview" => "Canon, renowned for superior quality, manufactures a comprehensive range of multifunction devices, printers, and networked office systems. To optimize their performance, Canon has developed GENUINE toner, parts, and supplies." ,
	                       "challenge" => "To help distributors and consumers recognize the importance of using Canon GENUINE supplies.",
	                       "solution" => "We generally don’t take the time to understand what keeps our office systems in top form.<p class='secondaryParagraph'>But in only three minutes, Collega was able to communicate why GENUINE products ensure that Canon devices deliver standout quality and performance.</p><p class='secondaryParagraph'>The module provides an overview of how Canon devices and supplies work together, and how to identify true GENUINE products.<p>",
						             "isVideoSlideshow" => true, //need this for video slideshow
                         "numOfSlides" => 1,
                         "videoLinks" => array("http://player.vimeo.com/video/57549248?api=1"),
                         "view_project" => null,
               ), 
				    array( "name" => "canon_prisma-consumer", 
    					   "title" => "CANON U.S.A.",
                           "tagline"    => "All in sync.",
                           "summary" => "A campaign offers consumers<br/>many ways to understand a new product.",
	                       "overview" => "Canon and Océ, newly merged companies, have combined their technologies to enhance digital production printing and workflow efficiency. Now users can boost production with the unique benefits of one integrated system." ,
	                       "challenge" => "To develop marketing materials for the Canon and PRISMAsync product lineup that help consumers quickly understand product features and benefits.",
	                       "solution" => "For commercial printers seeking outstanding performance and profits, Canon needs to offer both the big picture and the details.<p class='secondaryParagraph'>Collega developed a site, Streamlining Productivity, which uses videos to succinctly present overviews of the PRISMAsync and Canon press technologies as well as product details.</p><p class='secondaryParagraph'>To further support marketing efforts, we developed a series of brochures with a related look-and-feel. Information, both words and visuals, was structured to be quickly scannable.</p>",
                         "isVideoSlideshow" => false,
                         "numOfSlides" => 4,
                         "view_project" => "http://www.collega.us/ftp/clients/canon/oce-prismasync-controller-platform-html", //adding a view project link will render it
                         "view_project_tag" => "Canon Océ PrismaSync", //need this if you have a view_project link
						   ) 
				);
for ($row = 0; $row < count($consumer_all); $row++){
	echo '<div class="client" id="'.$consumer_all[$row]["name"].'">
      <a href="#" class="close">&nbsp;</a>
			<div class="container expand-client client-banner">
        <img src="img/banner_con_'.$consumer_all[$row]["name"].'.jpg" width="420" height="200" class="banner-img"/>
				<div class="client-area">
				<h5>'.$consumer_all[$row]["title"].'</h5>
				<h3>'.$consumer_all[$row]["tagline"].'</h3>
				<p>'.$consumer_all[$row]["summary"].'</p>
			</div>
			<div class="open">&nbsp;</div>
            
			<!-- begin expanded area content -->
          <div class="explore" style="margin-left:0;width:928px;"> 
            <div class="content">
              <ul>
                <li>
                  <h4>Overview</h4>
                  <p>'.$consumer_all[$row]["overview"].'</p>
                </li>
                <li>
                  <h4>Challenge</h4>
                  <p>'.$consumer_all[$row]["challenge"].'</p>
                </li>
                <li>
                  <h4>Solution</h4>
				  <p>'.$consumer_all[$row]["solution"].'</p>
                </li>
              </ul>';
              if(isset($consumer_all[$row]["view_project"])){
                echo '<div class="view-project">
                  <p>View project:<a href="'.$consumer_all[$row]["view_project"].'" target="_blank">'.$consumer_all[$row]["view_project_tag"].'</a></p>
                 </div>';
              }
             
            
            echo '</div> <!-- end content left -->
            <div class="visual" style="margin-left:0;">
             <!-- <a href="#" class="close">&nbsp;</a> -->';
              if($consumer_all[$row]["isVideoSlideshow"]){
               echo '<div class="pics client-gallery" style="left:-20px;"> ';
                  //add videos
                  for ($vlink = 0; $vlink < count($consumer_all[$row]["videoLinks"]); $vlink++){
                      $currIndex= $vlink+1;
                      echo '<iframe class="vFrames" id="vFrame'.$currIndex.'" src='.$consumer_all[$row]["videoLinks"][$vlink].' width="600" height="344" frameborder="0"></iframe>';
                   }
                   echo '</div>';
                   if(count($consumer_all[$row]["videoLinks"]) > 1){
                       echo '<ul id="pager-'.$consumer_all[$row]["name"].'" class="vThumbs" style="position:relative;left:-20px;">';
                      //thumbnails added
                      for ($tlink = 0; $tlink < count($consumer_all[$row]["videoLinks"]); $tlink++){
                          $thumbIndex= $tlink+1;
                          echo' <li class="thumb'.$thumbIndex.'"> <a href="#"><img src="media/consumer/'.$consumer_all[$row]["name"].'/thumb_'.$thumbIndex.'.jpg"/></a> </li> ';
                      }
                    echo'</ul>';
                  }
              }
              else{
                echo '
              <div class="pics client-gallery">';
              for ($slideRow = 0; $slideRow < $consumer_all[$row]["numOfSlides"]; $slideRow++){
                   $slideIdx = $slideRow + 1;
                   echo '<img src="img/client/'.$consumer_all[$row]["name"].'/slide_'.$slideIdx.'.jpg"/> ';
              	}
             echo' </div>
              <ul id="pager-'.$consumer_all[$row]["name"].'">';
               for ($thumbRow = 0; $thumbRow < $consumer_all[$row]["numOfSlides"]; $thumbRow++){
                   $thumbIdx = $thumbRow + 1;

                   if($thumbIdx == 1){
                      echo' <li class="activeSlide"> <a href="#"><img src="img/client/'.$consumer_all[$row]["name"].'/thumb_'.$thumbIdx.'.jpg"/></a> </li>';
                    }
                   else{
                      echo' <li> <a href="#"><img src="img/client/'.$consumer_all[$row]["name"].'/thumb_'.$thumbIdx.'.jpg"/></a> </li>';
                   }
                }
              echo'</ul>';
            }
            echo '</div><!-- end visual right -->
        </div>            <!-- end expanded area content --> 
      </div>
    </div>';
	
			
}
?>