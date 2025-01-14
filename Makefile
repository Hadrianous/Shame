init:
	symfony console doctrine:schema:update --env=test --force

start:
	symfony server:start

stop:
	symfony server:stop