# tp-sf-devops 
Jules LAURENT 
Théo SCHMIDT


[![Build Status](https://travis-ci.org/JulesAaelio/tp-sf-devops.svg?branch=master)](https://travis-ci.org/JulesAaelio/tp-sf-devops)


## Installation (dev & test only)
```
docker-compose up --build -d 
docker-compose exec php php bin/console 
docker-compose exec php php bin/console doctrine:schema:create
```

Connect to http://localhost:8080
