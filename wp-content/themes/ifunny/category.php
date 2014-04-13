<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php wp_title(''); ?></title>
    <?php include (TEMPLATEPATH . '/link.php'); ?>
<body>
<div class="warpper">
    <?php include (TEMPLATEPATH . '/top.php'); ?>
    <?php include (TEMPLATEPATH . '/header1.php'); ?>
    <div class="cl container">
        <div class="fl article">

            <?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
            ?>
                <div class="art-list">
                    <div class="cl art-title">
                        <h2 class="fl">
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </h2>
                        <div class="fr gray">
                            <div class="fl art-writer">
                                <a href="javascript:void(null)">
                                    <i class="nv-sprites fl inline-block"></i>
                                    <?php the_author() ?>
                                </a>
                            </div>
                            <div class="fr art-create-time">
                                <?php the_date() ?>
                            </div>
                        </div>
                    </div>
                    <div class="art-content">
                        <?php the_content() ?>
                    </div>
                    <div class="cl art-footer">
                        <div class="fl user-interact">
                            <div class="fl digg">
                                <a class="fl digg-up" href="#">
                                    <p class="sprites">11</p>
                                </a>
                                <a class="fl digg-down" href="#">
                                    <p class="sprites">11</p>
                                </a>
                            </div>
                            <div class="fr baidu-share">

                            </div>
                        </div>
                        <div class="fr user-comment">

                        </div>
                    </div>
                </div>
            
            <?php            
                    endwhile;
                endif;
            ?>
            <div class="page-list">
                <?php pagination($query_string); ?> 
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <div class="footer">
        <?php include (TEMPLATEPATH . '/flink.php'); ?>
        <?php include (TEMPLATEPATH . '/copyright.php'); ?>
    </div>
</div>
</body>
</html>
