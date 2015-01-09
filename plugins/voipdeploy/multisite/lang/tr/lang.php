<?php
return [
'details' => [

'title' => 'Multisite',
'description' => 'Sistemin çoklu site ekleyebilme özelliğini yönetebilirsiniz',
'description2' => 'Tema bağları için multisite alanadı yönetimi',
'problem' => 'Multisite eklenti tabloları bulunaması, eklentiyi yeniden yükleyin.'

],

'controller' => [
'settings' => 'Ayarlar',
'confirm' => 'Emin misiniz?',
'new-bind' => 'Alt site oluştur',
'delete' => 'Sil',
'clear-cache' => 'Önbelleği temizle',
'create-bind' => 'Alt site oluştur',
'edit-bind' => 'Alt siteyi düzenle',
'create' => 'Oluştur',
'create-and-close' => 'Oluştur ve Kapat',
'cancel' => 'Vazgeç',
'return' => 'Ayarlar listesine dön',
'creating' => 'Ayar oluşturuluyor...',
'or' => 'veya',
'save' => 'kaydet',
'saving' => 'Kaydediliyor ...',
'save-and-close' => 'Kaydet ve Kapat',
'save-delete' => 'Kaydı Sil'
],

'domain' => [
'label' => 'Temanın bağlanacağı site',
'comment' => 'Tam URL olmalıdır, örneğin: http://medanis.com.tr',
'theme-label' => 'Tema',
'theme-comment' => 'Bu alanadı için tema seçin',
'protect-label' => 'Bu alanadında backendi koru',
'protect-comment' => 'yorum: Eğer bu alan adından yönetim kısmına girişi yasaklamak istiyorsanız, HTTP 401, kullanım /hata sayfasını kullanın'
],

'flash' => [
'cache-clear' => 'Multisite önbelleği temizlendi.',
'db-error' => 'Multisite eklenti tabloları bulunamadı, eklentiyi yeniden yükleyin.'

],
'tables' => [
'domain' => 'Alanadı',
'theme' => 'Tema',
'protected' => 'Korunuyor mu?'

]
];
