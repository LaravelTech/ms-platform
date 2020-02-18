drop database if exists is_flatform;
create database is_flatform default character set utf8;

GRANT ALL PRIVILEGES ON `is_flatform`.* TO 'is_flatform'@'%' IDENTIFIED BY 'root';
