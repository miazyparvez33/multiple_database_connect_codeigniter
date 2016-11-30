# multiple_database_connect_codeigniter

Sometimes we need to use two or multiple database for a single site. If you need to connect to more than one database simultaneously. codeigniter provide an easy handy feature to connect multiple database. for this we need to add some config of databases and load the db instance. we need to set only PCONNECT(persistent connection) to set TRUE/FALSE. Below we will see how to connect multiple databse in codeigniter with direct loading db object in controller/model and how to connect multiple database in codeigniter using library.

1. set your database configuration :- go to “application/config/database.php” and add below code (add your db settings) i am adding database.php file here.

2.Using library :- create a library file in “application/libraries/multipledb.php” (change file name as you want) as i am adding multidb.php you can find it here.

3.Using direct load db instance :- after set configuration we need to only load and use database objects.like that in view file as i am loding

4.how to load library in model/controller and view you can find here in model-controlle_view.php
