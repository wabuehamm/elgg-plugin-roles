<?php

/**
 * ELGG plugin descriptor.
 * 
 * Please check out http://learn.elgg.org/en/stable/guides/plugins.html#elgg-plugin-php for details
 */

return [
    'bootstrap' =>  Wabue\Roles\Bootstrap::class,
    'entities' => [
        // Register custom entities here
    ],
    'actions' => [
        // Register custom actions here
    ],
    'routes' => [
        // Register custom routes here
    ],
    'widgets' => [
        // Register custom widgets here
    ],
    'user_settings' => [
        // Register user settings for your plugin here
    ],
    'views' => [
        // Alias third party vendor paths here
    ],
    'hooks' => [
        // Register plugin hooks here (http://learn.elgg.org/en/stable/guides/hooks-list.html)
    ],
    'events' => [
        // Register event handlers here (http://learn.elgg.org/en/stable/guides/events-list.html)
    ]
];