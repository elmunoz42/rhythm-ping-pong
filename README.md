# PHP Rhythmic Ping Pong

#### _A webpage that returns numbers and ping pong with rhythm, 13 February 2017_

#### By _**Erica Wright & Carlos Munoz Kampff**_

## Description

A webpage that returns numbers and ping pong with rhythm.

## Setup/Installation Requirements

1. _Fork and clone this repository from_ [gitHub](https://github.com/elmunoz42/rhythm-ping-pong.git).
2. Run `composer install --prefer-source --no-interaction` from project root
3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac).
4. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| 1) Count to 2 | 2 | 1, 2 |
| 2) Count to 3 but return "Ping!" for 3 |  3 | 1,2,"Ping!"|
| 3) Count to 5 but return "Ping!" for 3 and "Pong!" for 5 |  5 | 1,2,"Ping!",4,"Pong!"|
| 4) Count to 15 but return "Ping!" for 3 and multiples and "Pong!" for 5 and multiples and "Ping-Pong!" for 15 | 15| 1,2,"Ping!",4,"Pong!", "Ping!", 7, 8, "Ping!","Pong!",11,"Ping!",13,14,"Ping-Pong!"|



## Known Bugs

No known bugs.

## Support and contact details

Please contact ericaw21@gmail.com or elmunoz42@gmail.com with questions or concerns.

## Technologies Used

* _HTML_
* _CSS_
* _Bootstrap_
* _PHP_
* _Silex_
* _Twig_
* _Composer_

## License

*MIT license*

Copyright (c) 2017 {**Erica Wright & Carlos Munoz Kampff**} All Rights Reserved.
