This is a Laravel Workbench Package.

**Other prequisites:**
* git
* composer
* local webserver OR php 5.4+

Note: if you have php5.4, you can use:

	$ cd ~/myapp/public
	$ php -S localhost:8000

<!-- Assume your name is "Bill" and your Package will be named "MyApp" -->

**Get Started**.
Assuming you now have a working local webserver, move to the root directory of your web projects.  You are about to create a folder, but don't do it yet.

For example, this might be simply "cd ~/" 
or "/var/www/" in linux,
or maybe "/home/bill/"
or "C:/xampp/htdocs" in windows.

Now, you can fork this entire project directly on github, or follow the directions below to recreate it from scratch on your own.  The end result should be similar.

***From Scratch***
From the CLI, run this command:

    composer create-project laravel/laravel your-project-name --prefer-dist

***Recommended:***
* bower
* grunt
Just as composer solves dependency management issues for php, so do Bower and Grunt for javascript and assets (and perhaps more).  You can use bower to install things like bootstrap or angular.  Installing bower would require you to have node.js installed locally.  I was originally opposed to this idea, but have come to understand it's usefulness.  You dont NEED it, but if you're not using it, you are likely reinventing the wheel in ways you don't need to. 

http://bower.io/#installing-bower

    npm install -g bower
    
    bower install bootstrap
    bower install angular



