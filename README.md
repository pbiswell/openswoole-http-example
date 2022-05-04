# OpenSwoole HTTP Example
Examples of a HTTP server with OpenSwoole

If you found this useful, you're welcome to support me on [Patreon](https://www.patreon.com/pbiswell) or buy me a coffee here:

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/V7V84X6JM) 

## Introduction

>This is just a basic HTTP server with OpenSwoole, however I will make this more advanced over time. I wouldn't recommend using this exact code on a public-facing server, unless you have made necessary modifications and checks for security.

>Only webpages listed in the configuration can be accessed, so to enable a new page you just add it to the **$pages** array. In the future, regular expressions will be added.

## Installation & Usage

>Assumes you already have OpenSwoole installed. If not, follow the installation instructions [here](https://github.com/openswoole/swoole-src).

1. Clone the repo with the following command

    ```git clone https://github.com/pbiswell/openswoole-http-example```

2. Enter the directory

    ```cd openswoole-http-example```

3. Run the server

    ```php server.php```

4. Visit the server with your internet browser
    
    Default: [http://127.0.0.1:9501/](http://127.0.0.1:9501/)

5. Close the server when done (Usually CTRL+C)

## Features

- Fast HTTP webserver with OpenSwoole
- Add custom pages
- Multiple example pages
- Fix GET, POST, FILES
- Fix visitor CloudFlare IP address
- Strict browsing - visitors can only access allowed pages

## To Do

- Regex for page matching
- Server configuration options
- More CloudFlare and other CDN options
- Serve images

## See Also

Official OpenSwoole website:

https://openswoole.com/

Official OpenSwoole GitHub repository:

https://github.com/openswoole/swoole-src

## Donate

You can support me at the links below.

https://ko-fi.com/pbiswell

https://www.patreon.com/pbiswell