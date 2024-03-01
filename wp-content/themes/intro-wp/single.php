
<?php /* Template page about*/ ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= dw_asset('theme.css') ?>">
    <title>Article</title>
</head>
<body>
<?php if (have_posts()) : while (have_posts()):the_post(); // Ouverture de the loop?>
    <main class="post">
        <header class="post_header">
            <h1 class ="post_title"><?= get_the_title(); ?></h1>
        </header>
        <section class="post_intro">
            <h2 class = 'sro'></h2>
            <?= get_the_content(); ?>
        </section>
    </main>
<?php endwhile; endif; // Fermeture de the loop?>
</body>
</html>