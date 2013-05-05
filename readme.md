░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░████░░░░░██░░░░░████░░░████░░░░░░██░░░░████░░░░
░░█░░░█░░░█░░█░░░█░░░░█░░█░░░█░░░░█░░█░░░█░░░█░░░
░░█░░░█░░█░░░░█░░█░░░░░░░█░░░░█░░█░░░░█░░█░░░░█░░
░░████░░░██████░░█░░███░░█░░░░█░░██████░░█░░░░█░░
░░█░░░█░░█░░░░█░░█░░░░█░░█░░░░█░░█░░░░█░░█░░░░█░░
░░█░░░█░░█░░░░█░░█░░░░█░░█░░░█░░░█░░░░█░░█░░░█░░░
░░████░░░█░░░░█░░░████░░░████░░░░█░░░░█░░████░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ A PHP based MVC
Shout-out to DB-webb & Lydia

Downloading Bagdad

Bagdad is available on github. You can either download Bagdad trough https://github.com/bag-dad/Bagdad or clone the project using the git bash.

    git clone git://github.com/bag-dad/Bagdad.git

Installing / initiating Bagdad

First off you'll have to open up the .htaccess file located in Bagdads root folder. 
You will find something like this:

	RewriteBase /~fepe12/phpmvc/Bagdad/

You will need to change the path to where you've chosen to install Bagdad.

Bagdad is using a database to store data like blog-posts and guestbook-posts etc. In order for Bagdad to work as intended you will have to make the data folder writeable.
This can be achieved by the following commando:

    cd Bagdad; chmod 777 site/data

You might have to make the database file .ht.sqlite writeable with chmod 666 aswell.

Initiating the Bagdad modules

You should now be able to view the MVC in your browser, before doing anything else you should initiate the modules. Do this by pointing your browser to /module/install.
The modules should now be fully functional and ready to use. 
By installing the modules you also create two logins.
root:root and doe:doe, go ahead and try them out.


Here are some useful tips to get you started.

Let's introduce ourselves to the config file, located in the /site folder. Here you can change things as the page title, the navbar, which stylesheet to use, disable debug messages and so on...

To change the page title simply locate 'header' => 'Bagdad', at the end of the file and change it to your liking, the same method is applicable for changing the slogan etc.

To customimze the .css to your liking go to site/themes/mytheme and start messing with the style.css.

If you're not a blog-dude and don't like to post pictures of yourself doing the "duckface", you could remove this from your navbar. 

This can be achieved by locating $ba->config['menus'] and modify it to your liking, same goes for the guestbook & "mypage".

If you wishh to change the sites logo, go to site/themes/mytheme. Once you're done importing your logo, make sure it's specified in the config file.



