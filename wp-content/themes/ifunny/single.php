<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php wp_title(''); ?></title>
    <?php include (TEMPLATEPATH . '/link.php'); ?>
<body>
<div class="warpper">
    <?php include (TEMPLATEPATH . '/header2.php'); ?>
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
                            <?php the_title(); ?>
                        </h2>
                        <div class="fr gray">
                            <div class="fl art-writer">
                                <a href="javascript:void(null)">
                                    <i class="nv-sprites fl inline-block"></i>
                                    <?php the_author(); ?>
                                </a>
                            </div>
                            <div class="fr art-create-time">
                                <?php the_time('G:i'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="art-content">
                        <?php the_content('阅读更多') ?>
                    </div>
                    <div class="cl art-footer">
                        <div class="fl user-interact" id="user-interact">
                            <div class="fl digg">
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

                            </div>
                        </div>
                        <div class="fr user-comment">
                        </div>
                    </div>
                    <div class="cl page-list-control">
                        <?php
                            $prev_post = get_previous_post();
                            if (!empty( $prev_post )): ?>
                              <a title="<?php echo $prev_post->post_title; ?>" class="sprites fl prev-joke" href="<?php echo get_permalink( $prev_post->ID ); ?>">
                                上一条
                            </a>
                        
                        <?php endif; ?>

                        <?php
                            $next_post = get_next_post();
                            if (!empty( $next_post )): ?>
                              <a title="<?php echo $next_post->post_title; ?>"  class="sprites fl next-joke" href="<?php echo get_permalink( $next_post->ID ); ?>">
                                下一条笑话
                              </a>

                        <?php endif; ?>


                    </div>
                </div>

            <?php            
                    endwhile;
                endif;
            ?>

            
            <div class="hot-joke-list">
                <ul class="cl">
                  <?php hots_posts(); ?>
                </ul>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <div class="footer">
        <?php include (TEMPLATEPATH . '/copyright.php'); ?>
    </div>
</div>
</body>
</html>
