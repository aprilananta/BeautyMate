create schema pemweb_projekakhir

create table pemweb.akun(
	user varchar (10),
	password varchar (10)
)

select * from pemweb.akun

ALTER TABLE pemweb.akun
CHANGE COLUMN `user` `username` VARCHAR(10);