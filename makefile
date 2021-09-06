CONTAINER_NAME=app-console

dev/local:
	docker-compose up -d && \
	docker exec -it ${CONTAINER_NAME} composer install -v

psalm:
	docker exec -it ${CONTAINER_NAME} ./vendor/bin/psalm --show-info=true

phpinsights:
	docker exec -it ${CONTAINER_NAME} ./vendor/bin/phpinsights

composer:
	docker-compose up -d & docker exec -it ${CONTAINER_NAME} composer
