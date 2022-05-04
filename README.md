# OpenSwoole HTTP Example
Example of a HTTP PHP server with OpenSwoole

If you found this useful, you're welcome to support me on [Patreon](https://www.patreon.com/pbiswell) or buy me a coffee here:

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/V7V84X6JM) 

## Introduction

>This is a template for a basic HTTP PHP server with OpenSwoole.

>The aim is for a fast, free, secure, configurable, and easy-to-use HTTP PHP server with OpenSwoole, where anyone can build their webserver from this template. More features, security, and examples will be added as the project progresses.

>Only webpages listed in the configuration can be accessed, so to enable a new page you just add it to the **$pages** array. In the future, regular expressions will be added. You can follow the configuration instructions below. I wouldn't recommend using this exact code on a public-facing server, unless you have made necessary modifications and checks for security.

>Please follow the installation instructions below to get started.

## Installation & Usage

>This assumes you already have OpenSwoole installed. If not, follow the installation instructions [here](https://github.com/openswoole/swoole-src).

1. Clone the repo with the following command

    ```git clone https://github.com/pbiswell/openswoole-http-example```

2. Enter the directory

    ```cd openswoole-http-example```

3. Run the server

    ```php server.php```

4. Visit the server with your internet browser
    
    Default: [http://127.0.0.1:9501/](http://127.0.0.1:9501/)

5. Close the server when done (Usually CTRL+C)

## Configuration

### Example Pages

- inc/index.php
    > Lists all available pages in the config

- inc/redirect.php
    > Redirects to this repository

- inc/json.php
    > Outputs example JSON with the correct content type

- inc/text.php
    > Outputs example text in the correct content type

- inc/get.php
    > Lists all GET variables  
      Try this link:  
      http://127.0.0.1:9501/get?foo=bar&hello=world

- inc/post.php
    > Lists all POST variables  
    You need to POST to this page to see the list

- inc/info.php
    > Displays PHP info

- inc/404.php
    > Displays 404 error page

## Features

- Fast HTTP PHP webserver with OpenSwoole
- Add custom pages
- Multiple example pages
- Fix $_GET, $_POST, $_FILES
- Fix visitor CloudFlare IP address
- Strict browsing - visitors can only access allowed pages

## To Do

- Regex for page matching
- Server configuration options
- More CloudFlare and other CDN options
- Serve images
- Add database (SQL, MySQL, SQLite) examples
- Add HTTP client examples

## See Also

Official OpenSwoole website:

https://openswoole.com/

Official OpenSwoole GitHub repository:

https://github.com/openswoole/swoole-src

## Donate

You can support me at the links below. Any donations go towards improving this project and other similar ones, and an uncontrollable caffeine addiction.

https://ko-fi.com/pbiswell

https://www.patreon.com/pbiswell