<?PHP exit('���洴�� - https://addon.dismall.com/?@68363.developer');?>	
<a name="comment_anchor_$comment[cid]"></a>
<dl id="comment_{$comment[cid]}_li" class="pbm cl biaoqicn_p_wzpl">
	<div class="biaoqicn_p_userimg">
		<!--{if !empty($comment['uid'])}--><a href="home.php?mod=space&uid=$comment[uid]" title="{$comment[username]}" target="blank"><!--{avatar($comment[uid],small)}--></a><!--{else}--><!--{avatar(0,small)}--><!--{/if}-->
	</div>
	<dt class="biaoqicn_p_wzv_tx">
		<span class="y xw0">
			<!--{if !isset($_G[makehtml])}--><a href="javascript:;" onclick="portal_comment_requote($comment[cid], '$article[aid]');" class="xg1">{lang quote}</a> <!--{/if}-->
			<!--{if ($_G['group']['allowmanagearticle'] || $_G['uid'] == $comment['uid']) && $_G['groupid'] != 7 && !$article['idtype']}-->
			<a href="portal.php?mod=portalcp&ac=comment&op=edit&cid=$comment[cid]" id="c_$comment[cid]_edit" onclick="showWindow(this.id, this.href, 'get', 0);" class="xg1">{lang edit}</a>
			<a href="portal.php?mod=portalcp&ac=comment&op=delete&cid=$comment[cid]" id="c_$comment[cid]_delete" onclick="showWindow(this.id, this.href, 'get', 0);" class="xg1">{lang delete}</a>
			<!--{/if}-->
		</span>
	<!--{if !empty($comment['uid'])}-->
		<a href="home.php?mod=space&uid=$comment[uid]" class="xi2 xw1 yhm" c="1">$comment[username]</a>
	<!--{else}-->
		<a class="xi2 xw1 yhm">{lang guest}</a>
	<!--{/if}-->
		<span class="xg1 xw0"><!--{date($comment[dateline])}--></span>
	<!--{if $comment[status] == 1}--><b class="xg1 xw0"> ({lang moderate_need})</b><!--{/if}-->
	</dt>
	<dd><!--{if $_G[adminid] == 1 || $comment[uid] == $_G[uid] || $comment[status] != 1}-->$comment[message]<!--{else}-->{lang moderate_not_validate}<!--{/if}--></dd>
</dl>