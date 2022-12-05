 install php 7.4 <br />
 install symfony 5.4 <br />
 composer install <br />
 npm install <br />
 brew install rabbitmq <br />
 export PATH=$PATH:/usr/local/opt/rabbitmq/sbin <br />
 brew services start rabbitmq <br />

// This will start queuing the links to rabbitMQ <br />
 php bin/console publisher 9400 <br />

// These will start consuming the links in rabbitMQ <br />
 php bin/console worker 9500 <br />
 php bin/console worker 9600 <br />
 php bin/console worker 9700 <br />
 php bin/console worker 9800 <br />
