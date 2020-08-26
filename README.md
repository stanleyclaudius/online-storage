## Website Features

**Online Storage** is a storage to store your local document online, anywhere, and everytime. Document can only be a text file, microsoft word, excel, powerpoint file, image, pdf file. Application features:

- Upload document
- Trash document
- Starred document
- Restore trash document
- Download document online
- Limit of 10 GB file size

## Pre-requisite that you must know

- Command Prompt basic including how to stop a running command (CTRL + C), changing directory (cd **file_location**)
- Database knowledge
- Laravel basic
- HTML, CSS, JS

## Setup Guide After Clone

1. Open your clone result project at your code editor, then create a new file name **.env** at your root folder or in this project, the root folder is **online-storage**, if you don't change the folder name, then you can make a new file at that folder name **.env**.

2. After creating **.env** file, you can open **.env.example** file at your clone result project, then copy everything to the **.env** file that you created before.

3. After copying everything to your **.env** file, you should change value of your database setting, by changing **DB_CONNECTION**, **DB_HOST**, **DB_PORT**, **DB_DATABASE**, **DB_USERNAME**, and **DB_PASSWORD** value to your database configuration. At default state, the database configuration from your copy result from **.env.example** file, will assumed that you used **MySQL** database, if you use **MySQL** database, then you only need to change (at your **.env** file) **DB_DATABASE** value become your **DATABASE NAME FOR THIS PROJECT**, **DB_USERNAME** value become your **DATABASE USERNAME**, and **DB_PASSWORD** value become your **DATABASE PASSWORD**. If you use other database beside **MySQL**, then you should change every database configuration at **.env** file.

4. Note that .env file may not contain space as a value, e.g. DB_DATABASE=MY DATABASE, this will error because .env file may not contain space at value, if you wish to use space then you should use a quotation mark between the value for example DB_DATABASE="MY DATABASE" or without space.

5. Now the configuration is done, so next thing is you need to create a database for this project using your prefer database service, the database name should be the same as the **DB_DATABASE value** at your **.env** file that you create at step 3.

6. Now we need to install all package using composer, write `composer install` at your **Command Prompt** or **Terminal** at root folder of this project, in this project the root folder is **online-storage** if you don't change it. If you don't have composer install in your computer, [click here](https://getcomposer.org/download/) to download composer.

7. After create database for this project, now you should create the table, in **Laravel**, there is a function call artisan, so all you need to do to create the table is open up your **Command Prompt** at your laptop  or if you use mac than open **Terminal**, after you open it, change the current directory to your project location until the root file, in this case, the root file is **online-storage**, so you just need to change your directory until **online-shop**, after that you need to write `php artisan migrate` at your **Command Prompt** or your **Terminal**.

8. Last step, is to generate APP_KEY, type `php artisan key:generate` at your command prompt or terminal pointing at your root file directory.

9. Now your application is ready to use, type `php artisan serve` at your command prompt or terminal then open in your browser, and the url will be `127.0.0.1:8000`.

10. FYI : This project is created using TailwindCSS framework for the frontend.

## Project purpose
This project is created for **Educational Purpose**, any similarity to other application is not deliberate.

## Thank You
Thanks for cloning this project, if you wish to add new feature or fixed some bug that you found, you can create a pull request for me in this project. Thanks for your time looking at this project. Stay Code Stay Awesome!