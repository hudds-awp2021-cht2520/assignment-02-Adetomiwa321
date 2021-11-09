# Project Title - SneakStore
## Project Description
The application is a sneaker store which essentially provides users with an alternative and user-friendly app for them to interact with. 
The main goal of the application is to allow users to create a registered account and then able to login with account created. Then, they now have access to products, and they can log out after viewing the products. 

### Technologies used within the creation of the application 
- **[Laravel, Vs Code, git-bash, PHP, Node Js, Xampp, Github, MySql.]**

### Features used within the creation of the application
- **[I have implemented the use of the create, read, update and delete function, I have also added user authentication which require the use of login to enter the website. I have also made use of databases with CRUD operations on storing in the database. ]**
- **[I have included the feature of linking together the user and products table together and this can be identified by the user id on products table.]**
- **[I have used the “php artisan migrate” command to create multiple migrations when needed to get data into the tables of the database.]**


## Project Installation 
Open the development environment which would host PHP and MySQL and ensure that the packages are able to run. Also ensuring that you can run a webserver on your computer:
Within the development environment, launch the terminal and copy this command to install composer”  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"  “


- **[You can then start your instance web server and then open the terminal and run this command to launch the git-bash terminal. From the root of your project “E:/git/git-bash.exe”.**
- **[Then run this command in the terminal “php composer.phar”]**
- **[Clone the git repository using the command “git clone git@github.com:hudds-awp2021-cht2520/assignment-01-Adetomiwa321.git”]**
- **[To switch to the repo folder, use this command “cd assignment-01-Adetomiwa321”]**
- **[From here you would install Laravel using the command “../../composer.phar create-project laravel/laravel .”]**
- **[From the control panel, configure the webserver to point at the /public directory.]**

## Setting up the database
- **[From your MySQL instance, you can create a new user account.]**
- **[Creating a new user account with a username and a password.]**
- **[Ensuring you select ‘Create database with same name and grant all privileges’.]**
- **[Then click ‘Go’. ]**
- **[In the server terminal execute the following command “mysql -u exe -p exe”. This says login into MySql as a user exe created in your database and connect to the database exe created with the same name. Then fill in the password with the one created for the user account.]**
- **[With the code editor you can edit the .env file make changes so that the db_database, db_username and db_password so that it matches the details for the account set up on MySql. ]**

## Installing dev tools node.js and npm 
- **[Go to https://nodejs.org/dist/latest-v16.x/ and download the file called node-v16.11.0-win-x64.zip.]**
- **[Unzip the contents of the file to E:\node\, where your USB stick is mounted at drive D:.]**
- **[From the development environment terminal, add node to your path with this command (where your USB drive is mapped at drive letter E:): “set PATH=D:\node;%PATH%”]**
- **[Run this command from the git-bash command line: “node -v” and then: “npm -v”, this would display the version numbers of both packages.]**
- **[When you have generated controllers and edited the CRUD data in the controller you can then use this command to build your asset. From the root of your project in git-bash use this command “npm run dev”]**
- **[If this fails try deleting node_modules and package.lock then run: “npm install”, Then: “npm run dev”]**

## Project Usage
Create – this function is used within the website when the admin is logged in and they can create a new item within the website. Using the ‘add a new product’ button this allows for adding new information to be inserted into the site.
 ![image](https://user-images.githubusercontent.com/83648547/141021208-44cbc183-c892-4b71-ad1e-8b0f36c2c6a1.png)

 ![image](https://user-images.githubusercontent.com/83648547/141021298-ea0d98e7-3b88-4065-960a-a2de708b6e29.png)

  
Read – this function is used within the app to get the details of a particular item and enhance the details of the item and its other description. 
![image](https://user-images.githubusercontent.com/83648547/141021361-32604c40-5b98-4708-a08f-b154019e460d.png)
 
Update – this function is used to update the products displayed by editing a newly created products which shows the edit page and the current details which can then be edited and updated into another item.
 ![image](https://user-images.githubusercontent.com/83648547/141021403-ce3d24b6-e5f6-40bb-9fa6-5030456185b8.png)

 ![image](https://user-images.githubusercontent.com/83648547/141021441-b34fab00-73e1-495a-b272-d142f458053b.png)

 

Delete – this function is used to delete a product unwanted from the product page and then removing this from the website.
 ![image](https://user-images.githubusercontent.com/83648547/141021483-caeb547d-3fc4-415c-ac9c-9ebac7af529f.png)
 
Login – this function on the site requires the user to use the correct login details to enter the site. The user will be prompted to enter details into this page if they haven’t already. 
 ![image](https://user-images.githubusercontent.com/83648547/141021526-eb95034b-3a4e-4ffc-bba9-2ef817a9dc5f.png)

 ![image](https://user-images.githubusercontent.com/83648547/141021557-be3bae9b-869f-4e86-9660-b7d93a028f26.png)
 
 ![image](https://user-images.githubusercontent.com/83648547/141021588-e84a7050-979e-4cc2-9767-27992e7ee191.png)
 
Logout – this function would enable the user to logout of the site and be redirected to the login page with a prompt message referring to them logout. And then prompted to login again.
 ![image](https://user-images.githubusercontent.com/83648547/141021627-bef20824-3b22-4a75-9245-1121f646029d.png)
 
Registration – this function would enable the user to create a new user with information to be used within the login page to ensure they are a registered user. They will be prompted to fill in all the fields with information.
![image](https://user-images.githubusercontent.com/83648547/141021670-5d229216-b47c-408f-bd96-31bb4084bc00.png)
 
## Project testing 
I have run tests on the get function of the CRUD operations. 
The code “php artisan test” can be used to run test, this was used to run the get function within my application. This then ensured the get function which retrieves the products within my application was working.
![image](https://user-images.githubusercontent.com/83648547/141021732-7500c415-1abb-4a14-8e68-43e4552e91c0.png)
 

## Running php artisan commands
- **[php artisan make:migration create_visitors_table – this allows the user to create a database migration which can be filled in with data that can be seen on the MySql database.]**
- **[php artisan migrate – this command can be used to after creating new migrations to ensure that they all run and then you can specify which ones to run if they haven’t. this will create a database table with schema made within the “create_visitors_table” migration. ]**
- **[php artisan migrate:refresh – this allows for the refresh of migrations and edits out deleted migrations and ensure you have a clean database.]**
- **[php artisan make:model Visitor – this will generate a model called visitor]**
- **[php artisan make:controller VisitorController --resource --model=Visitor – this will generate a new controller which will include the CRUD operations for the user to input data on how it would work.]**
- **[php artisan db:seed – this enables you to seed the database with data which you have created and creating relations within the database.]**

## Future Improvements 
For further improvement to the website, I would have created a separate JSON file to input the data into the database.
I would also have created more tables to and ensure there are more columns within them to increase complexity of the site.
I would have completed more test on the project and ensure the controllers and other CRUD functions are working. 


