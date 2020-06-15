we need to add composer 
so first open your shell in the folder "MonProjet" and write the 4 next command
	1- php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
	2- php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
if you receive this message "installer verified" that means its okay
	
	3-php composer-setup.php
	4-php -r "unlink('composer-setup.php');"

next create a folder "carbon" with the command "mkdir carbon"
after go into this folder with "cd carbon/"
then lets write this command "composer require nesbot/carbon"

and it's done
