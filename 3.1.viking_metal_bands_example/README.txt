Please modify the login credentials at the top of the code in index.php.  Plug in your_warehouse_username, your_warehouse_password, and your_warehouse_database_name:

	$cxn = new mysqli("warehouse", "your_warehouse_username", "your_warehouse_password", "your_warehouse_database_name");


Running PHP code:
* Your computer most likely does not have a PHP interpreter installed.
* So you cannot view PHP-powered web pages served by your computer.
* i6 does have a PHP interpreter.
* So you can view PHP-powered web pages served by i6.
* In other words, upload this entire folder to i6 into your public_html folder.
* Then view the index.php page from the web browser at http://i6.cims.nyu.edu/~yourNetID/viking_metal_bands/

A few caveats:
* This example code assumes you have a MySQL table named favorite_viking_metal_bands with data in it in your database.
* Instructions for setting up this table: http://knowledge.kitchen/MySQL_table_operations
* Instructions for importing data into this table: http://knowledge.kitchen/MySQL_row_operations#Importing_data_from_a_file_into_rows

