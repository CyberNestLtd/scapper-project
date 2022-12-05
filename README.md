 install php 7.4
 install symfony 5.4
 composer install
 npm install
 brew install rabbitmq
 export PATH=$PATH:/usr/local/opt/rabbitmq/sbin
 brew services start rabbitmq

// This will start queuing the links to rabbitMQ
 php bin/console publisher 9400

// These will start consuming the links in rabbitMQ
 php bin/console worker 9500
 php bin/console worker 9600
 php bin/console worker 9700
 php bin/console worker 9800
