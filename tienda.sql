create table productos(
    id_producto integer primary key autoincrement,
    producto varchar(100) not null,
    precio integer not null,
    existencia integer not null
);
insert into productos(producto,precio,existencia) values ("iphone 7","6.000.00",16);
