* install php 7.4 <br />
* install symfony 5.4 <br />
* composer install <br />
* npm install <br />
* brew install rabbitmq <br />
* export PATH=$PATH:/usr/local/opt/rabbitmq/sbin <br />
* brew services start rabbitmq <br />

// This will start queuing the links to rabbitMQ <br />
* php bin/console publisher 9400 <br />

// These will start consuming the links in rabbitMQ <br />
* php bin/console worker 9500 <br />
* php bin/console worker 9600 <br />
* php bin/console worker 9700 <br />
* php bin/console worker 9800 <br />

## Admin :User :
email: admin@user.com
password: admin
## Mod User:
email: moderator@user.com
password: moderator (edited) 

<img width="1390" alt="Screenshot 2022-12-05 at 3 06 04 PM (1)" src="https://user-images.githubusercontent.com/4498754/205616392-7c53d3af-bdbb-4879-bc29-3fa7d9620fde.png">
<img width="1390" alt="Screenshot 2022-12-05 at 3 04 34 PM (1)" src="https://user-images.githubusercontent.com/4498754/205616424-1f91d3e3-8ad8-486c-83d8-5bd72c3db933.png">
<img width="1390" alt="Screenshot 2022-12-05 at 3 05 40 PM (1)" src="https://user-images.githubusercontent.com/4498754/205616435-4d9d15ca-eb40-4252-be8e-a336b8702c0b.png">
