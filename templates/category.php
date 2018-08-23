<?php namespace ProcessWire;
// Get Pages if Has Categories 
$posts = page()->opt['blog_p']->children("categories=$page, limit=16");?>

<div id='content-body' class="category grid" pw-prepend>

<?php foreach ($posts as $post): ?>

<article class='col-6_sm-12'>

    <a href="<?=$post->url?>">

        <h3><?=$post->title?></h3>

        <?=imgDemo($post,['demo' => true,'random' => true]);?>

    </a>

    <?=$post->render('body','txt-small')?>

    <div class="entry-footer m-1">

        <?php wireIncludeFile('inc/_entry-footer',
        [
            'item' => $post,

        ]);?>
        
    </div>

</article>

<?php endforeach;

// Basic Pagination + custom CSS class 'grid'
echo basicPagination($posts, 'container grid');?>

</div><!-- /#content-body -->