
alter table users add username varchar(255);
alter table users add email varchar(255);

create table companies(
  id integer not null primary key auto_increment,
  name varchar(255),
  address varchar(255),
  phone varchar(255),
  tin varchar(255),
  email varchar(255)
);

alter table companies add user_id integer;

alter table customers add company_id integer;

create table vendors(
  id integer not null primary key auto_increment,
  company_id integer,
  name varchar(255),
  address varchar(255),
  phone varchar(255),
  email varchar(255)
);

alter table items drop column selling_price;

create table bills(
  id integer not null primary key auto_increment,
  date datetime,
  customer_id integer
);

create table bill_items(
  id integer not null primary key auto_increment,
  bill_id integer,
  quantity double,
  amount double
);
