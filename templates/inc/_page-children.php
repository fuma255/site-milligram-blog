<?php namespace ProcessWire;

// Show Home page Children
        echo pageChildren(pages(1),
                [
                    'limit'=> 12,
                //  'random' => true
            ]
        );

    // Get Categories
        echo catTag(pages()->get('/categories/'), 
            [
                // 'txt' => __('Categories'),
                'limit' => 9,
                'random' => true // Randomize Items
            ] 
        );

    // Get Tags     
        echo catTag(pages()->get('/tags/'), 
            [
                // 'txt' => __('Tags'),
                'limit' => 8,
                'ul_cl' => 'grid', // Element <ul class='grid'
                'li_cl' => 'col', // Element <li class='col'
                'class' => 'button button-outline', // Element <a class='button button-outline',
                'random' => true // Randomize Items
            ] 
);