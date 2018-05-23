# tasksymfony
Just A task in Symfony 4
by Eric Zeidan

To execute
===========
first:
$ composer update

then: 
$ php -S 127.0.0.1:8001 -t public

go to browser and visit http://127.0.0.1:8001

know issues:
============
.env file some times get missing
just create one an add

APP_ENV=dev

# customize this line!
DATABASE_URL="mysql://root:@127.0.0.1:3306/tasksymfony"

with your database conection details

Database Backup for testing in folder SQL_SCRIPT
