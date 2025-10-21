init:
	symfony console doctrine:schema:update --env=dev --force

start:
	symfony server:start

stop:
	symfony server:stop