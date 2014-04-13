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
        <div class="art-list">
                <div class="cl art-title">
                    <h2 class="fl">
                        <a href="#">屌丝想入非非了</a>
                    </h2>
                    <div class="fr gray">
                        <div class="fl art-writer">
                            <a href="#">
                                <i class="nv-sprites fl inline-block"></i>
                                admin
                            </a>
                        </div>
                        <div class="fr art-create-time">
                            59分钟前
                        </div>
                    </div>
                </div>
                <div class="art-content">
                    <p>
                        有老师闯红灯，交警拦住，老师说：“拜托，我教课要迟到了。”
                    </p>
                    <p>
                        有老师闯红灯，交警拦住，老师说：“拜托，我教课要迟到了。”
                    </p>
                    <div class="listpic">
                        <a href="#">
                            <img src="img/art_pic.jpg" width="448" height="543" />
                        </a>
                    </div>
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
                <div class="cl page-list-control">
                    <a href="#" class="sprites fl prev-joke">上一页</a>
                    <a href="#" class="sprites fl next-joke">下一条笑话</a>
                </div>
            </div>

            <div class="hot-joke-list">
                <ul class="cl">
                    <li>
                        <div class="thumbnails">
                            <a href="#" target="_blank">
                                <img src="img/list1.jpg" height="130" width="185" />
                                <p>这还是我们的男厕所吗？</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnails">
                            <a href="#" target="_blank">
                                <img src="img/list2.jpg" height="130" width="185" />
                                <p>这是让达尔打出去的么？</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnails">
                            <a href="#" target="_blank">
                                <img src="img/list3.jpg" height="130" width="185" />
                                <p>又一波搞笑内涵图来袭</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnails">
                            <a href="#" target="_blank">
                                <img src="img/list4.jpg" height="130" width="185" />
                                <p>各种内涵搞笑根本停不下来</p>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="thumbnails">
                            <a href="#" target="_blank">
                                <img src="img/list5.jpg" height="130" width="185" />
                                <p>搞笑内涵无极限</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnails">
                            <a href="#" target="_blank">
                                <img src="img/list6.jpg" height="130" width="185" />
                                <p>地球上咋这么多二缺神货？</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        <?php get_sidebar(); ?>
    </div>
    <div class="footer">
        <?php include (TEMPLATEPATH . '/copyright.php'); ?>
    </div>
</div>
</body>
</html>
