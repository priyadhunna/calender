UPDATE mysql.user SET Password=PASSWORD('shashwat') WHERE User='root';
FLUSH PRIVILEGES;