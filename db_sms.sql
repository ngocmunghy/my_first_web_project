create table login(
	email varchar(100) not null,
	password varchar(50) not null,
	name varchar(50) not null,
	address varchar(100) not null,
	primary key(email)
);

insert into login values ('admin@gmail.com','123456','Ngoc Mung','Hung Yen');

create table sinhvien(
	masv int auto_increment,
	name varchar(80) not null,
	age int not null check (age >= 18),
	address varchar(200),
	primary key(masv)
);

insert into sinhvien values (1,'Nam A','18','Hung Yen');
insert into sinhvien values (2,'Nam B','18','Hung Yen');
insert into sinhvien values (3,'Nam C','18','Hung Yen');
insert into sinhvien values (4,'Nam D','18','Hung Yen');
insert into sinhvien values (5,'Nam E','18','Hung Yen');
insert into sinhvien values (6,'Nam F','18','Hung Yen');

create table giaovien(
	magv int auto_increment,
	name varchar(80) not null,
	age int not null check (age >= 18),
	address varchar(200),
	primary key(magv)
);

insert into giaovien values (1,'Hung A','30','Ha Noi');
insert into giaovien values (2,'Hung B','30','Ha Noi');
insert into giaovien values (3,'Hung C','30','Ha Noi');
insert into giaovien values (4,'Hung D','30','Ha Noi');

create table monhoc(
	mamh varchar(20) not null,
	tenmh varchar(50) not null,
	tinchi int not null check (tinchi > 0),
	primary key(mamh)
);

insert into monhoc values ('MH001','Toan roi rac',3);
insert into monhoc values ('MH002','CSDL',3);
insert into monhoc values ('MH003','Xac suat thong ke',2);
insert into monhoc values ('MH004','Vat ly',2);

create table lop(
	malop varchar(20) not null,
	mamh varchar(20) not null,
	magv int not null,
	primary key(malop),
	foreign key(mamh) references monhoc(mamh) on delete cascade,
	foreign key(magv) references giaovien(magv) on delete cascade
);

insert into lop values ('L001','MH003','2');
insert into lop values ('L002','MH002','1');
insert into lop values ('L003','MH004','4');
insert into lop values ('L004','MH001','3');


create table sinhvienlop(
	masv int not null,
	malop varchar(20) not null,
	diem double check (diem between 0 and 10),
	primary key(masv, malop),
	foreign key(masv) references sinhvien(masv) on delete cascade,
	foreign key(malop) references lop(malop) on delete cascade
);

insert into SinhVienLop values (1,'L001',6);
insert into SinhVienLop values (1,'L002',8);
insert into SinhVienLop values (1,'L004',7);

insert into SinhVienLop values (2,'L002',9);
insert into SinhVienLop values (2,'L003',8);
insert into SinhVienLop values (2,'L004',7);

insert into SinhVienLop values (3,'L001',6);
insert into SinhVienLop values (3,'L002',4);
insert into SinhVienLop values (3,'L003',5);

insert into SinhVienLop values (4,'L001',8);
insert into SinhVienLop values (4,'L003',10);
insert into SinhVienLop values (4,'L004',9);

