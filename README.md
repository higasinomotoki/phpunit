# phpunit_test

https://qiita.com/kiyo27/items/f1cf2665efc01e281045

```
docker build . -t php:composer

// docker起動コマンド
docker run -it --rm -v $(pwd):/var/www php:composer /bin/bash

// phpunitインストール
composer install

// テストプログラム実行
vendor/bin/phpunit test.php
