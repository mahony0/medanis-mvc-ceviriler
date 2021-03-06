<?php

return [
    'plugin' => [
        'name' => 'Metin Editörleri',
        'description' => 'Metin Editorünüzü CMS ve diğer Kod Editörüne ekleyin'
    ],
    'settings' => [
        'label' => 'Metin Editörleri',
        'description' => 'Metin editör tercihlerini bu bölümden yapılandırabilirsiniz.'
    ],
    'widget' => [
        'label' => 'Wysiwyg',
        'name' => 'Metin Editörleri',
        'description' => 'Kullanıcının seçtiği bir metin editörü oluşturur',
    ],
    'form' => [
        'settings' => [
            'select_editor' => 'Editör seç',
            'editor_width' => 'Editör Genişliği',
            'editor_height' => 'Editör Yüksekliği'
        ],
        'page' => [
            'label' => 'Sayfa için kullanım',
            'comment' => 'Sayfa düzenleme bölümünde Metin editörü kullanın'
        ],
        'content' => [
            'label' => 'İçerik için kullanım',
            'comment' => 'İçerik düzenleme bölümünde Metin editörü kullanın'
        ],
        'partial' => [
            'label' => 'Parça metinler için kullanım',
            'comment' => 'Parça metinler için Metin editörü kullanın'
        ],
        'layout' => [
            'label' => 'Şablonlar için kullanım',
            'comment' => 'Şablon düzenleme bölümünde Metin editörü kullanın'
        ],
        'others' => [
            'label' => 'Diğer modüller için kullanım',
            'comment' => '(Sayfa, Parça metinler, Şablonlar, İçerik) dışındaki tüm eklentiler için de seçilen Metin Editörünü kullan'
        ],
        'problog' => [
            'label' => 'Radiantweb Problog için kullanım',
            'comment' => 'Radientweb Problog modülünde gönderi editörü olarak seçilen Metin editörünü kullan'
        ],
        'proevent' => [
            'label' => 'Radiantweb ProEvents için kullanım',
            'comment' => 'Radiantweb ProEvents modülünde gönderi editörü olarak seçilen Metin editörünü kullan'
        ],
        'spages' => [
            'label' => 'Sabit sayfalar için kullanım',
            'comment' => 'Sabit sayfalar modülünde gönderi editörü olarak seçilen Metin editörünü kullan'
        ],
        'blog' => [
            'label' => 'Blog için kullanım',
            'comment' => 'Blog modülünde gönderi editörü olarak seçilen Metin editörünü kullan'
        ],
        'apages' => [
            'label' => 'Autumn Sayfalar için kullanım',
            'comment' => 'Autumn Sayfalar modülünde gönderi editörü olarak seçilen Metin editörünü kullan'
        ],
        'tab' => [
            'settings' => 'Ayarlar',
            'content' => 'İçerik'
        ]
    ]
];
