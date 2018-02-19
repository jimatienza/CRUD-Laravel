# CRUD-Laravel
Simple CRUD App in Laravel

Installation Guide

Prerequisites 

Install XAMPP 

Install a IDE(Sublime,PHPSTORM,Etc) 

Install Composer

Install Git

1.Run Git go to the directory of xampp/htdocs and enter this 'composer create-project --prefer-dist laravel/laravel yourprojectname 
  5.2.29'. Wait for it to finish and then paste all project files from github into the project you created. 

2.Run XAMPP and start the apache and mysql 

3.Go to a browser and go to localhost/phpmyadmin and create a database 

4.Open the project in an IDE and open the .env file and find the DB_DATABASE in the file and replace its value to the name of the database you created then change DB_USERNAME value to root and the DB_PASSWORD value to none(as in nothing)

5.Then type php artisan migrate

6.Create virtual host. For Mac Follow the tutorial => https://www.youtube.com/watch?v=wRq7dxvCR7U 

7.And for Windows => Go to c:\xampp\apache\conf\extra open httpd-vhosts.confthen include this there.
   
   <VirtualHost *:80>
    
   DocumentRoot "c:/xampp/htdocs"
   
   ServerName localhost
   
  </VirtualHost>

  <//VirtualHost *:80>(remove the other slash)
    
   DocumentRoot "c:/xampp/htdocs/yourproject/public"
    
   ServerName urlyouwant.com
   
  <//VirtualHost>(remove the other slash)

8.Then go now to c:\Windows\System32\drivers\etc open host and include this

      127.0.0.1         localhost
      
      127.0.0.1         urlyouwant.com
9.Save and restart xampp

10.Now open a browser and go to the url you created. And its done

Author Jimwell Atienza

Acknowledgments Thank you for all the tutorials that i watched and help me
