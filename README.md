## PHP Boilerplate

Bu başlangıç yapısını derslerde birlikte oluşturmaya başladık.

## Kurulum

Bu boilerplate'i kurmak için yapmanız gereken öncelikle repoyu kopyalamak.

```
git clone https://github.com/tayfunerbilen/php-boilerplate.git .
```
Daha sonra ilgili dizin içinde paketleri yüklemek

```
composer install
```

Ve `.env.example.php` dosyasını `.env.php` olarak değiştirip kendi ayarlarınızı belirtmek.

Artık veritabanınızı oluşturup kodlamaya başlayabilirsiniz.

## Paket Listesi

- [x] Routing yapısı için --> [izniburak/php-router](https://github.com/izniburak/php-router)
- [x] Template engine için --> [jenssegers/blade](https://github.com/jenssegers/blade)
- [x] Validasyon işlemleri için --> [vlucas/valitron](https://github.com/vlucas/valitron)
- [x] Hata gösterimleri için --> [filp/whoops](https://github.com/filp/whoops)
- [x] Ayarlar için --> [arrilot/dotenv-php](https://github.com/arrilot/dotenv-php)
- [x] Veritabanı işlemleri için --> [illuminate/database](https://github.com/illuminate/database)
- [ ] Tarih işlemleri için --> [briannesbitt/Carbon](https://github.com/briannesbitt/Carbon)
- [ ] Oturum yönetimi için --> [auraphp/Aura.Session](https://github.com/auraphp/Aura.Session)
- [ ] Dosya ve resim işlemleri için --> [verot/class.upload.php](https://packagist.org/packages/verot/class.upload.php)

Not: Paket listesine henüz eklenmedik paketler olabilir, videolarda ekledikçe güncelleyeceğim.