<?PHP exit('标奇创意 - https://addon.dismall.com/?@68363.developer');?>	
<!--{subtemplate common/header}-->
<script type="text/javascript" src="$_G['style']['styleimgdir']/js/jquery.superslide.2.1.3.js"></script>
<script type="text/javascript" src="$_G['style']['styleimgdir']/js/jquery.loadmore.js"></script>
<script type="text/javascript" src="$_G['style']['styleimgdir']/js/jquery.left.fixd.js" type="text/javascript"></script>
<style id="diy_style" type="text/css"></style>

<div class="wp">
	<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div class="mail cl">
     <div class="biaoqi_left_main">
          <div class="biaoqi_left_box fixd_box cl">
                <!--[diy=biaoqicn_b_left_list]--><div id="biaoqicn_b_left_list" class="area"></div><!--[/diy]--> 			    
	      </div>
	      <script type="text/javascript">
               jQuery(window).load(function(){
                    jQuery(".fixd_box").fasten({ topSpacing: 82,bottomSpacing: 560 });
               });
          </script>
     </div>

     <div class="main-center cl">
          <div class="biaoqi_founs cl">
               <!--[diy=biaoqicn_b_diy2]--><div id="biaoqicn_b_diy2" class="area"></div><!--[/diy]-->
          </div> 
<script type="text/javascript">				
     jQuery(".biaoqi_founs").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });				
	 jQuery(".biaoqi_founs").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"mouseover"});	
</script>

          <div class="biaoqicn_zx_box cl">
	           <div class="biaoqi_p_news_tab">
		            <ul>
			            <li><a href="javascript:;">船埔风情</a></li>
			            <li><a href="javascript:;">南阳山区</a></li>
			            <li><a href="javascript:;">普宁资讯</a></li>
			            <li><a href="javascript:;"></a>摄影美图</li>	
		            </ul>
	           </div>
	           <div class="biaoqicn_z_content">
                    <div id="biaoqicn_z_tz_c_1" class="biaoqicn_b_aiv cl" style="display:block;">
                         <!--[diy=biaoqicn_b_diy4]--><div id="biaoqicn_b_diy4" class="area"></div><!--[/diy]-->
                    </div>
		            <div id="biaoqicn_z_tz_c_2" class="biaoqicn_b_aiv cl" style="display:none;">
                         <!--[diy=biaoqicn_b_diy4a]--><div id="biaoqicn_b_diy4a" class="area"></div><!--[/diy]-->
		            </div>
                    <div id="biaoqicn_z_tz_c_3" class="biaoqicn_b_aiv cl" style="display:none;">
                         <!--[diy=biaoqicn_b_diy4b]--><div id="biaoqicn_b_diy4b" class="area"></div><!--[/diy]-->
                    </div>
                    <div id="biaoqicn_z_tz_c_4" class="biaoqicn_b_aiv cl" style="display:none;">
                         <!--[diy=biaoqicn_b_diy4c]--><div id="biaoqicn_b_diy4c" class="area"></div><!--[/diy]-->
                    </div>
	           </div>
          </div> 
<script type="text/javascript">
     jQuery(".biaoqicn_zx_box").slide({ titCell:".biaoqi_p_news_tab li", mainCell:".biaoqicn_z_content", effect:"fold", pnLoop:false });
</script>
</div> 


<div class="main-right cl"> 
     <div class="biaoqi_hotdoc"><!--[diy=biaoqicn_b_hotdoc]--><div id="biaoqicn_b_hotdoc" class="area"></div><!--[/diy]--></div>
     <div class="main-right-box cl"><!--[diy=biaoqicn_b_diy5]--><div id="biaoqicn_b_diy5" class="area"></div><!--[/diy]--></div>
     <div class="main-right-box cl"><!--[diy=biaoqicn_b_diy9]--><div id="biaoqicn_b_diy9" class="area"></div><!--[/diy]--></div>
     <div class="main-right-box fixd_right_box cl"><!--[diy=biaoqicn_b_diy8]--><div id="biaoqicn_b_diy8" class="area"></div><!--[/diy]--></div>
	 <div class="main-right-box cl"><!--[diy=biaoqicn_b_diy6]--><div id="biaoqicn_b_diy6" class="area"></div><!--[/diy]--></div>
     <div class="main-right-box cl"><!--[diy=biaoqicn_b_diy7]--><div id="biaoqicn_b_diy7" class="area"></div><!--[/diy]--></div>
     <div class="main-right-box friendLink biaoqi_fixd_right cl">
          <div class="main-right-p15">
               <h2 class="main-right-tit"><span>友情链接</span></h2> 
               <!--{eval $slides = DB::fetch_all("select * FROM " . DB::table("common_friendlink"). " LIMIT4 ");}-->
               <div class="link-content">
                    <ul>
                        <!--{loop $slides $slide}-->
	                        <li class="item"><a href="$slide[url]" target="_blank">$slide[name]</a></li>	
                        <!--{/loop}-->
                    </ul>
               </div>
          </div>
      </div>
 </div> 

</div> 
<!--{subtemplate common/footerp}-->
