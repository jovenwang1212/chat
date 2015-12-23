drop database if exists d_customer_service;
create database d_customer_service;

use d_customer_service;

drop table if exists hx_user;
create table hx_user(
	U_Id int(11) not null auto_increment,
	`U_Type` int(11) DEFAULT NULL,
	 `U_UserName` varchar(64) DEFAULT NULL,
	 `U_PassWord` varchar(64) DEFAULT NULL,
	`U_Agent` int(11) DEFAULT NULL,
	primary key(U_Id)
)engine=InnoDB default charset=utf8;
insert into hx_user values(null,1,'sam','332532dcfaa1cbf61e2a266bd723612c',0);
insert into hx_user values(null,1,'luke','202cb962ac59075b964b07152d234b70',1);
insert into hx_user values(null,1,'peter','202cb962ac59075b964b07152d234b70',1);
insert into hx_user values(null,1,'alex','202cb962ac59075b964b07152d234b70',1);
insert into hx_user values(null,1,'tony','202cb962ac59075b964b07152d234b70',1);
insert into hx_user values(null,1,'jack','202cb962ac59075b964b07152d234b70',1);

drop table if exists hx_message;
create table hx_message(
	m_id int(11) not null auto_increment,
	content text default "",
	from_id int(11),
	to_id int(11),
	from_name varchar(64) default "",
	to_name	add_time varchar(11),
	primary key(m_id)
);
 