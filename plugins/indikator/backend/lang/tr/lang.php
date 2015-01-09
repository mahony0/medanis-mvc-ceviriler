<?php

return [
    'plugin' => [
        'name' => 'Widget Modülü',
        'description' => 'Arkaplan için yeni özellikler ve widgetler.',
        'author' => 'Medanis Bilişim'
    ],
    'settings' => [
        'sidebar_description' => 'Sol kısayol bloğunda açıklamaları gizle.',
        'focus_searchfield' => 'Otomatik olarak arama alanına odaklan.',
        'comment' => 'Sadece Ayarlar sayfalarında çalışır.'
    ],
    'widgets' => [
        'system' => [
            'label' => 'Sistem Durumu',
            'webpage' => 'Websayfası',
            'updates' => 'Güncellemeler',
            'plugins' => 'Eklentiler',
            'themes' => 'Temalar'
        ],
        'version' => [
            'label' => 'Versiyonlar',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'label' => 'Kayıtlar',
            'access' => 'Erişim',
            'event' => 'Olay',
            'request' => 'İstek',
            'total' => 'Toplam'
        ],
        'admins' => [
            'label' => 'Yöneticiler',
            'users' => 'Kullanıcılar',
            'groups' => 'Gruplar',
            'login' => 'Son giriş'
        ],
        'logins' => [
            'label' => 'Son girişler'
        ],
        'server' => [
            'label' => 'Server bilgisi',
            'host' => 'Sunucu',
            'ip' => 'IP adresi',
            'os' => 'İşletim sistemi'
        ],
        'php' => [
            'label' => 'PHP ayarları',
            'upload_limit' => 'Yükleme limiti',
            'memory_limit' => 'Hafıza limiti',
            'timezone' => 'Zaman dilimi'
        ],
        'rss' => [
            'label' => 'RSS görüntüleyici',
            'error' => 'URL adresi yanlış veya',
            'refresh' => 'sayfayı yenile'
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
        'access' => 'Girişleri göster',
        'event' => 'Olayı göster',
        'request' => 'İsteği göster',
        'total' => 'Toplamı göster',
        'users' => 'Kullanıcıları göster',
        'groups' => 'Grupları göster',
        'login' => 'Son girişi göster',
        'logins' => 'Giriş sayısını göster',
        'url' => 'URL adresini göster',
        'ip' => 'IP Adresini göster',
        'os' => 'İşletim sistemini göster',
        'upload_limit' => 'Dosya yükleme boyutu limitini göster',
        'memory_limit' => 'Hafıza limitini göster',
        'timezone' => 'Zaman dilimini göster',
        'rss_title' => 'RSS Adresi',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Haber sayısı',
        'date' => 'Tarihi göster',
        'description' => 'Tanımı göster'
    ]
];
