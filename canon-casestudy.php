<?php
echo ' <div class="casestudy-content"><a class="close" href="javascript:parent.$.fancybox.close();" style="top:-9px;right:0;">&nbsp;</a><div class="client">CANON U.S.A</div><div class="span4" style="margin-left:0;"><span class="casestudy-arrow">&nbsp;</span><h2>imageRUNNER ADVANCE<h2 class="nextline">Branding Campaign</h2>
<p style="width:281px;">Canon’s next-generation imageRUNNER ADVANCE Series seamlessly integrates a range of technologies to streamline work.</p>
<p style="width:281px;">Collega’s challenge was to help prospective users quickly and easily understand the impressive range of the series’ new features. We created a “simply advanced” marketing campaign—from tagline to sales collateral.</p>
<p style="width:281px;">The tagline, Simply advanced, reinforces the user-friendly, high-tech qualities of these devices. For emphasis and quick recognition, there is an icon for each key feature. And the editorial and visual treatment pops product benefits, is quick-to-read, and connects to today’s dynamic workplace.</p>
</div><div class="span7" style="margin-left:46px;padding:60px 0;">
<div class="span4"><h4 style="width:485px;">Components</h4>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="180">Tagline</td><td width="180">Product Brochures</td><td width="121">Sales Presentation</td>
</tr>
<tr>
<td width="180">Icons</td><td width="128">Specification Sheets</td><td width="54">&nbsp;</td>
</tr>
<tr>
<td width="180">Overview Brochure</td width="180"> <td width="121">Statement Stuffers</td> 
</tr>
</table>
<div class="intro-art-canon">&nbsp;</div>
</div>
</div>


<ul id="canon-casestudy-slideshow" class="casestudy-slideshow" style="clear:both;">
<li><img src="img/casestudy/canon/slide_1.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/canon/slide_2.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/canon/slide_3.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/canon/slide_4.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/canon/slide_5.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/canon/slide_6.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/canon/slide_7.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/canon/slide_8.jpg" width="908" height="541"/></li>
</ul>
<span id="prev-area">
	<span id="prev-control">&nbsp;</span>
</span>
<span id="next-area">
	<span id="next-control">&nbsp;</span>
</span>
<div id="pager-num">&nbsp;</div>
</div>
';

echo '<script type="text/javascript">
	

	function onAfter(curr,next,opts) {
	var caption =  (opts.currSlide + 1) + " / " + opts.slideCount;
	$("#pager-num").html(caption);
	} 

	
	//slideshows in casestudies
		   	 $("#canon-casestudy-slideshow").cycle({
					pageEvent: "mouseover",
					pause: 1,
					prev:   "#prev-control", 
    				next:   "#next-control",
    				after: onAfter,
    				timeout: 5000,
    				
			});

		
		$("#prev-area").hover(function(){ 
				$(this).children("span").fadeTo("slow",1)
			}, function(){  // mouseout 
				$(this).children("span").fadeTo("slow",0)
			}
		 );
		$("#next-area").hover(function(){ 
					$(this).children("span").fadeTo("slow",1)
			}, function(){  // mouseout 
				$(this).children("span").fadeTo("slow",0)
			}
		 );
   
		
</script>';
?>