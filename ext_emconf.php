<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Markdown',
    'description' => 'Markdown, https://parsedown.org/',
    'version' => '1.7.4',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
    ],
    'state' => 'stable',
    'author' => 'Bill.Dagou',
    'author_email' => 'billdagou@gmail.com',
    'autoload' => [
        'classmap' => [
            'Classes',
            'Resources/Private/Parsedown',
        ],
    ],
];