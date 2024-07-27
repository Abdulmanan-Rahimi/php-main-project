<?php


require('./functions.php');

$setting = get_data('setting');
$posts = get_data('posts');

// dd($posts);




?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="<?= $setting['description'] ?>">
        <meta name="keyword" content="<?= $setting['keywords'] ?>">
        <meta name="author" content="<?= $setting['author'] ?>">

        <title><?= $setting['title'] ?></title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <!-- <link rel="stylesheet" href="./assets/css/panel.css"> -->
    </head>
    
    <body>
        <main>
        <?php   require('./parts/header.php'); ?>
        <?php   require('./parts/navbar.php'); ?>
        
        <section id="content">
                <?php   require('./parts/sidebar.php'); ?>
              
                <div id="articles">
                <?php foreach($posts as $post): ?>
                    <article>
                        <div class="caption">
                            <h3><?= $post['title'] ?></h3>
                            <ul>
                                <li>Date: <span>2020-05-15</span></li>
                                <li>Views: <span>1526 view</span></li>
                            </ul>
                            <p>
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
                            </p>
                            <a href="#">More...</a>
                        </div>
                        <div class="image">
                            <img src="./assets/images/gitmag.jpg" alt="This is a post">
                        </div>
                        <div class="clearfix"></div>
                    </article>
                    <?php endforeach ?>
                </div>
                <div class="clearfix"></div>
            </section>
           <!-- <?php  require('./parts/footer.php'); ?> -->
            <?php require('./parts/footer.php') ?>
        </main>
    </body>
</html>