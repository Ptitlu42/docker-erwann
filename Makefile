dev: 
	@echo Clone project... && git clone git@gitlab.com:docusland-courses/php/sample-laravel.git
	@echo Change directory... && cd sample-laravel
	@echo Create .env && cp .env/example .env
	@echo Install dependencies...  && composer update && composer install
	@echo Starting Docker containers... && docker compose up -d --remove-orphans
	@echo Compiling assets... && npm run dev
	@echo Run migration and seeders... && docker exec -it laravel php artisan migrate:fresh --seed