create database laboratorio;
use laboratorio;

create table labs (
id_lab int primary key auto_increment not null,
nr_lab int(10) not null,
id_reserva int not null
);

create table professores (
id_professor int primary key auto_increment not null,
nm_professor varchar(100) not null,
ds_email varchar(100),
ds_matricula char(6)
);

create table turmas (
id_turma int primary key auto_increment not null,
nm_turma varchar(100) not null,
ds_turma varchar(100) not null,
id_reserva int not null
);

create table reserva (
id_reserva int primary key auto_increment not null,
id_professor int not null,
hr_horaio datetime,
hr_saida datetime,
id_turma int not null,
id_lab int not null ,
ds_reserva enum('livre','reservado') default('livre'),
foreign key (id_professor) references professores (id_professor),
foreign key (id_turma) references turmas (id_turma),
foreign key (id_lab) references labs (id_lab)
);


-- tabelas associativas

