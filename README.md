# kabuwata

## first

#### Rootログインとポートだけ変えておく

```
$ sudo vi /etc/ssh/sshd_config
```

#### sshのkey

```
$ cd ~/.ssh/ && ssh-keygen -t rsa
```

必要に応じてssh登録

#### clone

```
//apt-getのinstallが必要だったりする
$ sudo apt-get update
$ sudo apt-get install git
```

```
$ mkdir ~/workspace && cd ~/workspace/
$ git clone git@github.com:akiyoshi-sasaki/kabuwata.git
```

```
$ cd
$ git clone git@github.com:akiyoshi-sasaki/others.git
// othersのREADMEに書いてあることやる
$ cp ~/others/.bashrc ~
$ chmod a+x ~/others/gitsub/.git-prompt.sh
$ source ~/others/gitsub/.git-prompt.sh

$ source .bashrc
```

## nginx & php-fpm

https://qiita.com/akiyoshi_sasaki/items/714dcd322c78bafaa1fb

```
$ sudo apt-get install php7.0-fpm
$ sudo apt-get install php7.0
$ sudo apt-get install nginx
//以下が必要な時もある
$ sudo vi /etc/php/7.0/cli/php.ini
//`tension=php_curl.dll`のコメントアウトを外す
$ sudo apt-get install php-curl
```

## twitter

まずtiwtterのdeveloperツールから4つのkeyを取得
https://apps.twitter.com/

twitter-apiの使い方
https://cre8cre8.com/python/twitter-api.htm

#### openssl & php_curl

```
//以下が必要な時もある
$ sudo vi /etc/php/7.0/cli/php.ini
//`tension=php_curl.dll`のコメントアウトを外す
$ sudo apt-get install php-curl
```
 
