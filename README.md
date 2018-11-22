# $tockUp

<b> Instructions to get started </b>

1. Execute the following SQL query to create the users table inside your MySQL database. <br>
  CREATE TABLE users (
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      username VARCHAR(50) NOT NULL UNIQUE, 
      password VARCHAR(255) NOT NULL, 
      created_at DATETIME DEFAULT CURRENT_TIMESTAMP 
  ); 
  <br>
2. To create the database, run config.php on your browser <br>
3. To begin exploring $tockUp, open 'register.php' on your browser <br> <br> <br>

Contributors:
Aishwarya: PES1201700872 <br>
Anagha: PES1201700301 <br>
Sharanya: PES1201700218
