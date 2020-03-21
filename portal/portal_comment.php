<?PHP exit('标奇创意 - https://addon.dismall.com/?@68363.developer');?>	
<div id="comment" class="bm" style="border: 0;">
	<div class="bm_h cl" style=" padding: 5px 0;">
		<h3 class="z">{lang latest_comment}(<!--{if $data[commentnum]}-->$data[commentnum]<!--{else}-->0<!--{/if}-->)</h3>
	</div>
	<div id="comment_ul" class="bm_c">
		<!--{if !$data[htmlmade]}-->
			<form id="cform" name="cform" action="$form_url" method="post" autocomplete="off">
				<div class="tedt">
					<div class="area">
						<textarea name="message" rows="3" placeholder="我来说两句..." class="pt" id="message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></textarea>
					</div>
				</div>
				<!--{if !empty($topicid) }-->
					<input type="hidden" name="referer" value="$topicurl#comment" />
					<input type="hidden" name="topicid" value="$topicid">
				<!--{else}-->
					<input type="hidden" name="portal_referer" value="$viewurl#comment">
					<input type="hidden" name="referer" value="$viewurl#comment" />
					<input type="hidden" name="id" value="$data[id]" />
					<input type="hidden" name="idtype" value="$data[idtype]" />
					<input type="hidden" name="aid" value="$aid">
				<!--{/if}-->
				<input type="hidden" name="formhash" value="{FORMHASH}">
				<input type="hidden" name="replysubmit" value="true">
				<input type="hidden" name="commentsubmit" value="true" />
				<div class="biaoqicn_ptn cl">				
					<!--{if !empty($pricount)}--><span class="z biaoqicn_wtg">{lang hide_portal_comment}</span><!--{/if}-->
					<button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="pn y"><strong>{lang comment}</strong></button>
				<!--{if $secqaacheck || $seccodecheck}-->
					<!--{block sectpl}--><sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div><!--{/block}-->
					<div class="biaoqicn_p_wzvsec"><!--{subtemplate common/seccheck}--></div>
				<!--{/if}-->
				</div>
			</form>
		<!--{/if}-->
		<!--{loop $commentlist $comment}-->
		<!--{template portal/comment_li}-->
		<!--{if !empty($aimgs[$comment[cid]])}-->
			<script type="text/javascript" reload="1">aimgcount[{$comment[cid]}] = [<!--{echo implode(',', $aimgs[$comment[cid]]);}-->];attachimgshow($comment[cid]);</script>
		<!--{/if}-->
		<!--{/loop}-->
	</div>
</div>