drop database if exists hr_internal;
create database hr_internal default character set utf8;

GRANT ALL PRIVILEGES ON `hr_internal`.* TO 'hr_internal'@'%' IDENTIFIED BY 'root';
