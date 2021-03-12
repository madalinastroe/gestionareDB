CREATE TABLE Furnizori(
idf varchar(20),
numef varchar(20),
stare double,
oras varchar(20)
);

CREATE TABLE Componente(
idc varchar(20),
numec varchar(20),
culoare varchar(20),
masa double,
oras varchar(20)
);

CREATE TABLE Proiecte(
idp varchar(20),
numep varchar(20),
oras varchar(20)

);

CREATE TABLE Livrari(
idf varchar(20),
idc varchar(20),
idp varchar(20),
cantitate double

);


INSERT INTO Furnizori
VALUES('F1','Dan','0','Cluj');
INSERT INTO Furnizori
VALUES('F2','Ionica','0','Dej');
INSERT INTO Furnizori
VALUES('F3','Alina','0','Bucuresti');
INSERT INTO Furnizori
VALUES('F4','Stefana','0','Severin');
INSERT INTO Furnizori
VALUES('F5','Dorin','0','Bistrita');
INSERT INTO Furnizori
VALUES('F001','Marcel','0','Honolulu');


INSERT INTO COMPONENTE
VALUES('C1','piulita','gri',120,'Bucuresti');
INSERT INTO COMPONENTE
VALUES('C2','surub','rosu',80,'Cluj');
INSERT INTO COMPONENTE
VALUES('C3','dalta','galben',800,'Oradea');
INSERT INTO COMPONENTE
VALUES('C4','ciocan','negru',1500,'Deva');
INSERT INTO COMPONENTE
VALUES('C5','sarma','verde',2000,'Timisoara');
INSERT INTO COMPONENTE
VALUES('C6','ac','gri',150,'Cluj-Napoca');
INSERT INTO COMPONENTE
VALUES('C7','ata','rosu',500,'Cluj-Napoca');
INSERT INTO COMPONENTE
VALUES('C12','cutie','maro',5,'Las vegas');


INSERT INTO PROIECTE
VALUES('P1','Manhattan','Timisoara');
INSERT INTO PROIECTE
VALUES('P2','Proiect2','Craiova');
INSERT INTO PROIECTE
VALUES('P3','Proiect3','Bucuresti');
INSERT INTO PROIECTE
VALUES('P4','Proiect4','Oradea');
INSERT INTO PROIECTE
VALUES('P5','Dark','Cluj');
INSERT INTO PROIECTE
VALUES('P6','Proiectut','Bistrita');
INSERT INTO PROIECTE
VALUES('P7','ProjectInBistrita','Bistrita');
INSERT INTO PROIECTE
VALUES('P9','Flexi','Honolulu');
INSERT INTO PROIECTE
VALUES('P010','social','Honolulu');


INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F1','C1','P2',850);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F5','C1','P2',400);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F4','C2','P4',80);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F3','C3','P3',600);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F2','C3','P2',150);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F1','C2','P6',860);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F4','C4','P7',1230);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F001','C4','P9',10);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F4','C12','P3',180);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F5','C12','P1',9);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F5','C12','P2',200);
INSERT INTO LIVRARI(idf,idc,idp,cantitate)
VALUES('F001','C3','P010',80);

alter table Furnizori add constraint pk_idf primary key (idf);
alter table Componente add constraint pk_idc primary key (idc);
alter table Proiecte add constraint pk_idp primary key (idp);

alter table Livrari add constraint fk_idf foreign key (idf) references Furnizori(idf);
alter table Livrari add constraint fk_idc foreign key(idc) references Componente(idc);
alter table Livrari add constraint fk_idp foreign key(idp) references Proiecte(idp);


ALTER TABLE Componente
ADD CONSTRAINT colors CHECK(culoare IN ('rosu','portocaliu','galben','verde','albastru','maro','gri','negru'));
ALTER TABLE Proiecte
ADD CONSTRAINT orasVerifica CHECK(oras!='Dej' OR numep like '%special%');