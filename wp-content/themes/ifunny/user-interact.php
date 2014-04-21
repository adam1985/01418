<div class="cl art-footer">
    <div class="fl user-interact" id="user-interact">
        <div class="fl digg" id="digg-box">
            <a class="fl digg-up" data-post-id="<?php the_ID(); ?>" data-poll-type="poll_good" href="javascript:void(null)">
                <p class="sprites">
                    <?php echo get_post_meta(get_the_ID(), 'poll_good', true); ?>
                </p>
            </a>
            <a class="fl digg-down" data-post-id="<?php the_ID(); ?>" data-poll-type="poll_bad" href="javascript:void(null)">
                <p class="sprites">
                    <?php echo get_post_meta(get_the_ID(), 'poll_bad', true); ?>
                </p>
            </a>
        </div>
        <div class="fr baidu-share">
            <div class="bdsharebuttonbox" data-tag="share_1">
                <a class="bds_mshare" data-cmd="mshare"></a>
                <a class="bds_weixin" data-cmd="weixin"></a>
                <a class="bds_qzone" data-cmd="qzone"></a>
                <a class="bds_tsina" data-cmd="tsina"></a>
                <a class="bds_baidu" data-cmd="baidu"></a>
                <a class="bds_renren" data-cmd="renren"></a>
                <a class="bds_tqq" data-cmd="tqq"></a>
                <a class="bds_more" data-cmd="more">更多</a>
                <a class="bds_count" data-cmd="count"></a>
            </div>
        </div>
    </div>
    <div class="fr user-comment">

    </div>
</div>
<script>
    window._bd_share_config = {
        common : {
            bdText : '自定义分享内容', 
            bdDesc : '自定义分享摘要',
            bdUrl : '自定义分享url地址',   
            bdPic : '自定义分享图片',
            bdMini : 3,
            onBeforeClick : function(cmd,config){
                console.log(cmd, config);
            }
        },
        share : [{
            "bdSize" : 24
        }],
        slide : [{     
            bdImg : 0,
            bdPos : "right",
            bdTop : 100
        }],
        image : [{
            viewType : 'list',
            viewPos : 'top',
            viewColor : 'black',
            viewSize : '16',
            viewList : ['weixin', 'qzone','tsina','huaban','tqq','renren']
        }],
        selectShare : [{
            "bdselectMiniList" : ['weixin', 'qzone','tqq','kaixin001','bdxc','tqf']
        }]
    }
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>