# VM for PHP Cert Class

## PHP 7.1 installation from source
* These packages had to be installed on top of a basic Ubuntu 18.04 VM:
```
sudo apt-get install mysql-server gcc libmysqlclient-dev libxml2-dev
```
* Here are the configure options used:
```
./configure --with-libxml-dir=/usr/lib/x86_64-linux-gnu \
            --enable-intl \
            --enable-mbstring \
            --with-pdo-mysql=/usr \
            --enable-soap
```
* `/usr/local/lib/php.ini` settings:
```
error_reporting = E_ALL | E_STRICT
display_errors = On
display_startup_errors = On
html_errors = On
```

## Sample Quiz Question Code:
```
php_cert/
├── mock_1
├── mock_2
└── mock_final
```

