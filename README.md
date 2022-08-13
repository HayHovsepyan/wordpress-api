						WordPress
WordPress is an Open Source software system for the creation of dynamic websites and blogs without any programming or design knowledge.
This project is designed to run WordPress on Linux OS. Install docker on your computer. Then create a new network bridge with the name 'wpress'. Also, create a new volume with the name 'dbfile' to make data persistent.
Finally, install docker-compose on your computer (find all instructions on the official docker page. https://www.docker.com) and start Wodpress with 'docker-compose up' command.
Use http://127.0.0.1/api/getname/index.php" URL of API  to get detailed information about registered users. Data in API is represented in JSON format.
You can test the functionality of API with the http://127.0.0.1/index.html page.

