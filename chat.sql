CREATE DATABASE ass9;

CREATE TABLE chatbox (
     id INT NOT NULL AUTO_INCREMENT ,
     username VARCHAR(255) NOT NULL ,
     msg VARCHAR(255) NOT NULL ,
     tym TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
     PRIMARY KEY (id));

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spSelectEverything`()
    NO SQL
SELECT * FROM chatbox$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spLimit`()
    NO SQL
SELECT * FROM chatbox 
ORDER BY id DESC
LIMIT 10$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsert`(IN `uname` TEXT, IN `message` TEXT)
    NO SQL
INSERT INTO chatbox  (id,username, msg, tym) values (DEFAULT,uname,message,DEFAULT)$$
DELIMITER ;