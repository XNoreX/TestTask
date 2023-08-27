1).The first step is to transfer the files from the repository to the "localhost" folder, which is located in the "Domains" folder in the path where your Open Server is installed.

2).Next, log in to phpMyAdmin with your credentials and create a database (any name), then import the file "create_db.sql" into your newly created database.

3).The next step is to configure the file "db_connect.php " along the way: domains\localhost\components\modules
Enter your credentials there.

4).To import JSON data into a database in a browser, follow the path "http://localhost/components/modules/load_data.php ", after that, the number of imported posts and comments will be displayed.

5).On the main page "http://localhost " you can search by comment.
