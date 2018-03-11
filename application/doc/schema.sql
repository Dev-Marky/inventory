create database scool_inventory;
use scool_inventory;

create table items(
  id integer not null primary key auto_increment,
  code varchar(255),
  name varchar(255),
  description varchar(255),
  price double,
  cost double
);

create table users(
  id integer not null primary key auto_increment,
  name varchar(255),
  password varchar(255),
  salt varchar(255),
  email varchar(255)
);

create table companies(
  id integer not null primary key auto_increment,
  name varchar(255),
  address varchar(255),
  phone varchar(255),
  tin varchar(255),
  email varchar(255)
);

alter table companies add user_id integer;

alter table items add company_id integer;

create table customers(
  id integer not null primary key auto_increment,
  name varchar(255),
  address varchar(255),
  phone varchar(255),
  email varchar(255)
);

alter table customers add company_id integer;
