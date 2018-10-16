install: 
	composer install
init:
	composer run-script phpcs -- --standard=PSR2 src bin