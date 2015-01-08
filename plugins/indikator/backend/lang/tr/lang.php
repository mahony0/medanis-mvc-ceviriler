<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'New features and widgets for backend.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'sidebar_description' => 'Hide descriptions in slidebar.',
        'focus_searchfield' => 'Focus search field automatically.',
        'comment' => 'It only works on Settings pages.'
    ],
    'widgets' => [
        'system' => [
            'label' => 'System status plus',
            'webpage' => 'Webpage',
            'updates' => 'Updates',
            'plugins' => 'Plugins',
            'themes' => 'Themes'
        ],
        'version' => [
            'label' => 'Versions',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'label' => 'Logs',
            'access' => 'Access',
            'event' => 'Event',
            'request' => 'Request',
            'total' => 'Total'
        ],
        'admins' => [
            'label' => 'Administrators',
            'users' => 'Users',
            'groups' => 'Groups',
            'login' => 'Last login'
        ],
        'logins' => [
            'label' => 'Last logins'
        ],
        'server' => [
            'label' => 'Server info',
            'host' => 'Host',
            'ip' => 'IP address',
            'os' => 'Operation system'
        ],
        'php' => [
            'label' => 'PHP settings',
            'upload_limit' => 'Upload limit',
            'memory_limit' => 'Memory limit',
            'timezone' => 'Timezone'
        ],
        'rss' => [
            'label' => 'RSS viewer',
            'error' => 'The URL address is incorrect or',
            'refresh' => 'refresh page'
        ]
    ],
    'properties' => [
        'webpage' => 'Websayfasını Göster',
        'updates' => 'Güncellemeleri Göster',
        'plugins' => 'Eklentileri Göster',
        'themes' => 'Temaları Göster',
        'cms' => 'CSMS Versiyonunu Göster',
        'php' => 'PHP Versiyonunu Göster',
        'gd' => 'GD Versiyonunu Göster',
        'access' => 'Show access',
        'event' => 'Show event',
        'request' => 'Show request',
        'total' => 'Show total',
        'users' => 'Kullanıcıları göster',
        'groups' => 'Grupları göster',
        'login' => 'Son girişi göster',
        'logins' => 'Giriş sayısını göster',
        'url' => 'URL adresini göster',
        'ip' => 'IP Adresini göster',
        'os' => 'Show operation system',
        'upload_limit' => 'Show upload limit',
        'memory_limit' => 'Show memory limit',
        'timezone' => 'Show timezone',
        'rss_title' => 'RSS url',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Number of news',
        'date' => 'Show date',
        'description' => 'Show description'
    ]
];
