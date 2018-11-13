# Auth
Auth :: A user login and registration system made with PHP, MySQL, HTML, CSS and Bootstrap 4

- Download the project and upload to your local server (htdocs folder in XAMPP)
- Create a new database of your choice, default is "authdb2018"

- Set the connection strings for your new database in the folder model/database-query.php as follows:

$connection = [

	'hostname' => 'localhost',     // it is always localhost
	'database' => 'authdb2018',    // the exact name of your new database
	'username' => 'root',          // the username of your database...default is root
	'password' => ''               // the password
];

- Open phpmyadmin (localhost/phpmyadmin), select your new databse and click "SQL" tab above
- Open the file "authdb2018.sql", copy all it's content, paste in the phpmyadmin textarea, click on "Go"
- Your database shoud now contain the table named "users"

Now the downloaded files are extracted to your htdocs folder,

- Test your app by accessing localhost. You should see the login form right a way.

- Please, comment or create a new GitHub issue everything didn't work well for you. I will provide you with some assistance.


Thank you
