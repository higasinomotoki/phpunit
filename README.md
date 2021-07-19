# phpunit_test

https://qiita.com/kiyo27/items/f1cf2665efc01e281045

```
docker build . -t php:composer

docker run -it --rm -v $(pwd):/var/www php:composer /bin/bash

composer install

vendor/bin/phpunit test.php
