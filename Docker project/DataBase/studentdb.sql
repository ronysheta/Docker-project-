use Students;
create table StudentInfo(
studentID int primary key,
Nmae varchar(50) not null,
age int not null,
CGPA  float
);

insert into StudentInfo(studentID,Nmae,age,CGPA)
values(22010347,"Samaa Ayman Mohamed Shawky Turky",19,3.5703);

insert into StudentInfo(studentID,Nmae,age,CGPA)
values(22010095,"Roma Magdy Fawzy",20,3.5782);

insert into StudentInfo(studentID,Nmae,age,CGPA)
values(22011662,"Rowaina abdelsalam sheta",19,3.6407);

insert into StudentInfo(studentID,Nmae,age,CGPA)
values(22011458,"Lujain baher mohamed ",20,3.5062);

insert into StudentInfo(studentID,Nmae,age,CGPA)
values(22010374,"Farah Khaled Mohamed Mohamed",20,3.6535);

CREATE USER 'root'@'%' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON Students.* TO 'root'@'%';
FLUSH PRIVILEGES;