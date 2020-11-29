create table productos(
    id_producto integer primary key autoincrement,
    producto varchar(100) not null,
    precio integer not null,
    existencia integer not null
);
insert into productos(producto,precio,existencia) values ("IPHONE 7",6000,16);
