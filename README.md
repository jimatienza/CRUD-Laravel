# CRUD-Laravel
Simple CRUD App in Laravel

Installation Guide

Prerequisites 

Install XAMPP 

Install a IDE(Sublime,PHPSTORM,Etc) 

Install Composer

Install Git

1.Paste the project on htdocs folder of XAMPP 

2.Run XAMPP and start the apache and mysql 

3.Go to a browser and go to localhost/phpmyadmin and create a database 

4.Open the project in an IDE and edit the .env.example file to .env and find the DB_DATABASE in the file and replace its value and to the name of the database you created then change DB_USERNAME value to root and the DB_PASSWORD value to none(as in nothing)

5.run git and access the address of the project from the htdocs. Type "composer install" 

6.Then type php artisan migrate

7.Create virtual host. Go to c:\xampp\apache\conf\extra open httpd-vhosts.conf

8.then include this there.
   
   <VirtualHost *:80>
    
   DocumentRoot "c:/xampp/htdocs"
   
   ServerName localhost
   
  </VirtualHost>

  <//VirtualHost *:80>(remove the other slash)
    
   DocumentRoot "c:/xampp/htdocs/yourproject/public"
    
   ServerName urlyouwant.com
   
  <//VirtualHost>(remove the other slash)

9.Then go now to c:\Windows\System32\drivers\etc open host and include this

      127.0.0.1         localhost
      
      127.0.0.1         urlyouwant.com

10.Save and restart xampp

11.Now open a browser and go to the url you created. And its done

Author Jimwell Atienza

Acknowledgments Thank you for all the tutorials that i watched and help me
