# Mobile_system
Project mobile_system is made with Laravel Framework. It contains information about phones, brands, models and years of release.

## Installation
To deploy this project you need to have XAMPP and a couple more steps.

First, the httpd-vhosts .conf file should be edited. The path to this file is `...\xampp\apache\conf\extra`. Its recomended to use the full directory path.
```bash
<VirtualHost *:80>
    DocumentRoot "...\xampp\htdocs\nameOfFolder"
    ServerName serverName.com
    <Directory "...\xampp\htdocs\nameOfFolder">
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order Deny,Allow
        Allow from all
        Require all granted
    </Directory>
</VirtualHost>
```
After that, we need to update the hosts file in directory `...\Windows\System32\drivers\etc` (this is for Windows). Its important to run your text redactor as an admin. 
```bash
127.0.0.1 serverName.com
```
## Screenshots
![my-phoneIndexScr](https://user-images.githubusercontent.com/85744016/175363487-80202d1b-e439-4ccb-9b43-087eb3327330.png)
![my-phoneBrandsScr](https://user-images.githubusercontent.com/85744016/175363535-631f70d4-5710-425d-9159-93ba3b1991e6.png)
![my-phoneModelsScr](https://user-images.githubusercontent.com/85744016/175363547-6341cc87-15c3-45ac-8fc6-f5b9bf2ba454.png)
![my-phonePhonesScr](https://user-images.githubusercontent.com/85744016/175363562-9620cc69-1c94-438a-8e25-dfe41a0b22bc.png)
![my-phonePhoneScr](https://user-images.githubusercontent.com/85744016/175363566-142b66e7-e50a-437d-873a-a057319e07c3.png)


# Components

## Models

* Brand
* Phonemodel<br />
Model is a key word so it cannot be used. Has `belongsTo()` relation with Brand, since many models can belong to one brand, but a model cannot belong to many brands.
* Phone<br />
Has `belongsTo()` relations with Brand and Phonemodel. One phone can have only one brand and only one model. Many phones can belong to one brand and to one model. 

## Controllers

* IndexController
* BrandController
* PhonemodelController
* PhoneController
* CrudController

## View
* layouts<br />
`@yield` is used to define a section in a layout and is constantly used to get content from a child page unto a master page.<br />
 
* index<br />
`@extends` lets you "extend" a template, which defines its own sections.<br />
`@section` inject content layout from extended blade layout and display in child blade.
 
## Routes
From web.php is set the route for each view, as well as the controllers and their functions.

# Administrative panel 
Backpack is used for all CRUD operations. Backpack is accessible via URL link /admin.

# Future improvements
* Filter search.
* "Order by" functionality.
