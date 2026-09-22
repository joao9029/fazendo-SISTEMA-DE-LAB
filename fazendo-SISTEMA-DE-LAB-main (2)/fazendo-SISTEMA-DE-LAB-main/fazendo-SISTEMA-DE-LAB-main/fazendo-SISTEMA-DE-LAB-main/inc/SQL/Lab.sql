create database laboratorio;
use laboratorio;

create table labs (
  id_lab int primary key auto_increment not null,
  nr_lab int not null
);

create table professores (
  id_professor int primary key auto_increment not null,
  nm_professor varchar(100) not null,
  ds_email varchar(100),
  ds_matricula varchar(20)
);

create table turmas (
  id_turma int primary key auto_increment not null,
  nm_turma varchar(100) not null,
  ds_turma varchar(100)
);

create table reserva (
  id_reserva int primary key auto_increment not null,
  id_professor int not null,
  id_turma int not null,
  id_lab int not null,
  hr_inicio datetime not null,
  hr_saida datetime not null,
  ds_reserva enum('livre','reservado') default 'livre' not null,
  foreign key (id_professor) references professores (id_professor),
  foreign key (id_turma) references turmas (id_turma),
  foreign key (id_lab) references labs (id_lab)
);

insert into labs (nr_lab) values 
(1),
(2),
(3),
(4),
(5);

insert into professores (nm_professor, ds_email, ds_matricula) values 
('joão silva', 'joao.silva@email.com', '12345'),
('maria oliveira', 'maria.oliveira@email.com', '67890'),
('carlos souza', 'carlos.souza@email.com', '11223'),
('ana costa', 'ana.costa@email.com', '44556');

insert into turmas (nm_turma, ds_turma) values 
('1º ano a', 'turma do primeiro ano a'),
('2º ano b', 'turma do segundo ano b'),
('3º ano c', 'turma do terceiro ano c'),
('técnico em informática', 'turma do curso técnico');

insert into reserva (id_professor, id_turma, id_lab, hr_inicio, hr_saida, ds_reserva) values 
(1, 1, 1, '2026-09-23 08:00:00', '2026-09-23 10:00:00', 'reservado'),
(2, 2, 2, '2026-09-23 10:00:00', '2026-09-23 12:00:00', 'reservado'),
(3, 3, 3, '2026-09-24 14:00:00', '2026-09-24 16:00:00', 'reservado'),
(1, 4, 1, '2026-09-25 08:00:00', '2026-09-25 11:00:00', 'livre');
