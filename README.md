# sic
Steps to install:

1- After cloning the project, apply the command "composer update", to download dependencies.

2- Using .env.example create an .env file and configure the database: connection type, database name, username and password.

3- Create the database with the previous configuration.

4- Apply the command for migrations "php artisan migrate".

5- To start, register a user on the system and then log on.

Note: If you want to use the password reset, you must configure the mail server data in the .env file.