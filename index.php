<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <?php include dirname(__FILE__) . '/blocks/shared/head.php' ?><!-- ./head -->
    </head>
    <body>
        <?php include dirname(__FILE__) . '/blocks/shared/header.php' ?><!-- ./header -->
        <section id="main">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <section id="mainbody" class="col-xs-12 col-md-8">
                            <?php include dirname(__FILE__) . '/blocks/modules/showcase.php' ?><!-- ./showcase -->
                            <?php include dirname(__FILE__) . '/blocks/modules/programs.php' ?><!-- ./programs -->
                            <?php include dirname(__FILE__) . '/blocks/modules/news-digest.php' ?><!-- ./news-digest -->
                            <?php // include dirname(__FILE__) . '/blocks/modules/news-lists.php' ?><!-- ./news-lists -->
                            <?php include dirname(__FILE__) . '/blocks/modules/media.php' ?><!-- ./media -->
                            <?php include dirname(__FILE__) . '/blocks/modules/utility.php' ?><!-- ./utility -->
                        </section>
                        <aside id="sidebar" class="col-xs-12 col-md-4">
                            <?php include dirname(__FILE__) . '/blocks/modules/sidebar/latest.php' ?><!-- ./latest -->
                            <?php include dirname(__FILE__) . '/blocks/modules/sidebar/bulletin.php' ?><!-- ./bulletin -->
                            <?php include dirname(__FILE__) . '/blocks/modules/sidebar/sharings.php' ?><!-- ./sharings -->
                            <?php include dirname(__FILE__) . '/blocks/modules/sidebar/most-viewed.php' ?><!-- ./most-viewed -->
                            <?php include dirname(__FILE__) . '/blocks/modules/sidebar/apps.php' ?><!-- ./apps -->
                            <?php include dirname(__FILE__) . '/blocks/modules/sidebar/articles.php' ?><!-- ./articles -->
                            <?php include dirname(__FILE__) . '/blocks/modules/sidebar/poll.php' ?><!-- ./poll -->
                            <?php include dirname(__FILE__) . '/blocks/modules/sidebar/banners.php' ?><!-- ./banners -->
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <?php include dirname(__FILE__) . '/blocks/shared/footer.php' ?><!-- ./footer -->
    </body>
</html>
