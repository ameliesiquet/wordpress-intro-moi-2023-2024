<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= dw_asset('theme.css') ?>">
    <!-- <script src="<?= dw_asset('script.js') ?>"></script> --->
    <title>Document</title>
</head>
<body>
<h1><?= get_bloginfo('name') ?></h1>
<main class="page">
    <div class="page_content">
        <?php if (have_posts()) : while (have_posts()):the_post(); // Ouverture de the loop ?>
        <h1>
            <?= get_the_title(); ?>
        </h1>
            <?= get_the_content(); ?>
        <?php endwhile; endif; // Fermeture de the loop?>
    </div>
</main>
</body>
</html>