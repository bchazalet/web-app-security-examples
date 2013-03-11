CREATE DATABASE xssexample;
CREATE TABLE comments (
  id bigint not null,
  name varchar(255),
  content varchar(500), 
  PRIMARY KEY(id)
);

INSERT INTO comments VALUES(1, "Boris", "This is a safe test");

/* CREATE sqli user
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, CREATE TEMPORARY TABLES, LOCK TABLES ON xssiexample.* TO 'xss'@'localhost' IDENTIFIED BY 'xss';
*/
