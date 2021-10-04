# Installation Web Interface

## Requirment

- Php >= 7.3 (Recomended Php 8.0)
- Composer

## Installation Instruction

- git clone https://github.com/anandadwipra/ecanteen.git && cd ecanteen/src
- composer install
- copy .env.example to .env and configure your database
- php artisan key:generate ( Generate key)
- php artisan database:refresh ( Migration and Seeder )
- php artisan storage:link ( Make syslimk )
