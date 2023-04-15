create database DoAnCNWEB character set utf8mb4;
use DoAnCNWEB;
create table Khoa(
	makhoa varchar(50) primary key,
    tenkhoa varchar(100)
);
insert into Khoa values ("CNTT","Công nghệ thông tin và truyền thông"),("NN","Ngoại ngữ"), ("TS", "Thủy sản"),("KT","Kinh tế");
create table Sinhvien(
	mssv varchar(10) not null unique primary key,
    hoten varchar(50) not null, 
    sdt int not null ,
    ngaysinh date,
    email varchar(40),
    makhoa varchar(50),
    FOREIGN KEY (makhoa) REFERENCES Khoa(makhoa)
);
create table nguoidung(
	taikhoan varchar(50),
    pass varchar(50)
);

insert into  nguoidung values ("admin","admin"); 

create table Sach(
	masach varchar(50) not null primary key,
    tensach varchar(100) not null,
    tacgia varchar(100) not null,
    theloai varchar(50) not null,
    nxb varchar(50) not null,
    url text 
);
insert into  Sach values ("TL1","Cây Cam Ngọt Của Tôi","José Mauro de Vasconcelos","Tâm Lí", "Nhà Xuất Bản Hội Nhà Văn", "../img/sach1.jpg"); 
insert into  Sach values ("TT1","Ghi Chép Pháp Y – Những Cái Chết Bí Ẩn","Lưu Hiểu Huy","Trinh Thám", "	Nhà Xuất Bản Thanh Niên", "../img/sach1.jpg"); 
insert into  Sach values ("TC1","Càng Bình Tĩnh Càng Hạnh Phúc","Vãn Tình","Tình cảm", "Nhà Xuất Bản Thế Giới", "../img/sach3.jpg"); 
create table Muon(
	id int primary key auto_increment,
	masach varchar(50),
    FOREIGN KEY (masach) REFERENCES Sach(masach),
    mssv varchar(50),
    FOREIGN KEY (mssv) REFERENCES Sinhvien(mssv),
    ngaymuon date,
    thoihan int
);

