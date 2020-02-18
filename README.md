# Internal System Flatorm
## SET UP
1. docker-compose build
2. docker-compose up -d
3. docker-compose exec php cp .env.example .env
4. docker-compose exec php composer install
5. docker-compose exec nodejs npm install
6. docker-compose exec php php artisan key:generate
7. docker-compose exec php php artisan migrate
8. docker-compose exec php php artisan db:seed
9. docker-compose exec php php artisan config:cache

## CONFIG
- Open file hosts and add "127.0.0.1 is-flatform.local" into it.
