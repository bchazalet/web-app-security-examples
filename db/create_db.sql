CREATE DATABASE sqliexample;
CREATE TABLE user (
  id bigint not null,
  name varchar(255),
  surname varchar(255),
  email varchar(255),
  address varchar(255),
  password varchar(255),
  PRIMARY KEY(id)
);

INSERT INTO user VALUES(1, "Rachel", "Green", "rachel.green@gmail.com", "London, UK", "5f4dcc3b5aa765d61d8327deb882cf99");
INSERT INTO user VALUES(2, "Zinedine", "Zidane", "zz@gmail.com", "London, UK", "f25a2fc72690b780b2a14e140ef6a9e0");
INSERT INTO user VALUES(3, "Roger", "Rabbit.", "roger@gmail.com", "London, UK", "ab4f63f9ac65152575886860dde480a1");
INSERT INTO user VALUES(4, "Bob", "Anderson", "bob@gmail.com", "London, UK", "d0763edaa9d9bd2a9516280e9044d885");
INSERT INTO user VALUES(5, "Basile", "Boli", "basile@gmail.com", "London, UK", "d8578edf8458ce06fbc5bb76a58c5ca4");

/* CREATE sqli user
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, CREATE TEMPORARY TABLES, LOCK TABLES ON sqliexample.* TO 'sqli'@'localhost' IDENTIFIED BY 'sqli';
*/
