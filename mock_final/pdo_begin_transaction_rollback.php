<?php
// Database connection params
$host     = 'localhost';
$database = 'zend';
$user     = 'test';
$password = 'password';

// Open connection
try {

	// Database connect -- use one of the two statements below
	// $dsn = 	'mysql:host=' . $host . ';dbname=' . $database';
	$dsn = 	'mysql:host=' . $host . ';dbname=' . $database . ';unix_socket=/var/run/mysqld/mysqld.sock';

	// NOTE: using 'names4' instead of 'names' as in the slide
	// test code ----------------------------------------------
	$pdo = new PDO(	$dsn, $user, $password);
    $sql = "INSERT INTO names4 (name, email) "
         . "VALUES ('demi', 'demi@example.com')";
    $pdo->beginTransaction();
    $pdo->query($sql);
    $stmt = $pdo->query("SELECT COUNT(*) FROM names4");
    $count1 = $stmt->fetchColumn();
    $pdo->rollBack();
    $stmt = $pdo->query("SELECT COUNT(*) FROM names4");
    $count2 = $stmt->fetchColumn();
	// test code ----------------------------------------------

    // assuming table uses InnoDB
	echo "\n1: $count1";    // 4
	echo "\n2: $count2";    // 3

} catch (PDOException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}

// SQL to create database table for this question:
/*

CREATE TABLE IF NOT EXISTS `names4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

INSERT INTO `names4` (`id`, `name`, `email`) VALUES
(1, 'anna', 'anna@example.com'),
(2, 'betty', 'betty@example.com'),
(3, 'clara', 'clara@example.com');

 */
?>
