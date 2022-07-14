--Autor
insert into autor(id,nome) values (1,"JK Rowling");
insert into autor(id,nome) values (2,"Stephen Hawking");
insert into autor(id,nome) values (3,"Carlos Drummond de Andrade");
insert into autor(id,nome) values (4,"Stephen King");
insert into autor(id,nome) values (5,"William Shakespeare");
insert into autor(id,nome) values (6,"Clarice Lispector");
insert into autor(id,nome) values (7,"John Green");
insert into autor(id,nome) values (8,"Rick Riordan");
insert into autor(id,nome) values (9,"Cora Coralina");
insert into autor(id,nome) values (10,"Stephen Chbosky");

--Aluno
insert into aluno(nome,endereço, telefone, id, idade, cpf) values ("Lucas", "Rua 07, bairro Tanhaçu, n 75", 99652314, 2,"15 anos", "089.952.335-98");
insert into aluno(nome,endereço, telefone, id, idade, cpf) values ("Fernando", "Rua 09, bairro Limoeiro, n 58", 99823364, 3,"15 anos", "090.953.336-99");
insert into aluno(nome,endereço, telefone, id, idade, cpf) values ("Franklin", "Rua 15, bairro Maria DB, n 785", 81554696, 4,"16 anos", "090.953.336-99");
insert into aluno(nome,endereço, telefone, id, idade, cpf) values ("Pablo", "Rua 51, bairro MySql, n 112", 91452536, 5,"22 anos", "091.954.337-00");
insert into aluno(nome,endereço, telefone, id, idade, cpf) values ("Leandro", "Rua 77, bairro Pyhton, n 956", 81590380, 6,"21 anos", "092.955.338-01");

--Categoria
insert into categoria(id, nome) values (1, "Ficção");
insert into categoria(id, nome) values (2, "Romance");
insert into categoria(id, nome) values (3, "Infantil");
insert into categoria(id, nome) values (4, "Ação e aventura");
insert into categoria(id, nome) values (5, "Thriller e Suspense");

--Devolução
insert into devolucao (id, idemprestimo, datadevolucao) values (01, 1, '2022/05/15');
insert into devolucao (id, idemprestimo, datadevolucao) values (02, 2, '2022/06/10');
insert into devolucao (id, idemprestimo, datadevolucao) values (03, 3, '2022/10/29');
insert into devolucao (id, idemprestimo, datadevolucao) values (04, 4, '2022/10/10');
insert into devolucao (id, idemprestimo, datadevolucao) values (05, 5, '2022/10/08');

--Emprestimo
insert indo emprestimo(id, idusuario, dataemprestimo) values(0, 1, '2022-05-15');
insert indo emprestimo(id, idusuario, dataemprestimo) values(1, 2, '2022-05-15');
insert indo emprestimo(id, idusuario, dataemprestimo) values(2, 3, '2022-05-15');
insert indo emprestimo(id, idusuario, dataemprestimo) values(3, 4, '2022-05-15');
insert indo emprestimo(id, idusuario, dataemprestimo) values(4, 5, '2022-05-15');

 --Livro
insert into livro (id, idautor, idcategoria, nome, publicacao, descricao, quantidade) values (01, 2,1, "A Teoria de Tudo: A Origem e o Destino do Universo", "2002", "Buracos negros,Big Bang,princípio de tudo", 10);
insert into livro (id, idautor, idcategoria,nome, publicacao, descricao, quantidade) values (02, 1,4, "Harry Potter e a Pedra Filosofal", "1997", "Garoto bruxo, hogwarts", 12);
insert into livro (id, idautor, idcategoria,nome, publicacao, descricao, quantidade) values (03, 3, 2, " Alguma poesia", "2002", "Grandes poesias", 10);
insert into livro (id, idautor, idcategoria,nome, publicacao, descricao, quantidade) values (04, 7, 2, "A Culpa É das Estrelas", "2012", " O sexto romance de John Green", 08);
insert into livro (id, idautor, idcategoria,nome, publicacao, descricao, quantidade) values (05, 5,2, "Hamlet", "1602", " A tragédia de Hamlet, príncipe da Dinamarca", 05);
insert into livro (id, idautor, idcategoria,nome, publicacao, descricao, quantidade) values (06,6,2, "A Hora da Estrela", "1977", "Romance literário da escritora brasileira Clarice Lispector", 12);
insert into livro (id, idautor, idcategoria,nome, publicacao, descricao, quantidade) values (07, 4,5, "It - A Coisa", "1986", "um romance de terror do autor estadunidense Stephen King", 20);
insert into livro (id, idautor, idcategoria,nome, publicacao, descricao, quantidade) values (08, 9,2,"As Cocadas", "2020", "um dos últimos trabalhos de Cora Coralina", 05);

--Usuario 
insert into usuario(id, nome, cpf, endereco, telefone, email) values (01, "Lucas Afonso", "885.443-996.42", "Rua 07, bairro tanhçu, n 75", "999641520","lucas123@gmail.com";
insert into usuario(id, nome, cpf, endereco, telefone, email) values (02, "Leandro Brito", "886.444-997.43", "Rua 09, bairro pirajá, n 76", "99102364","leo123@gmail.com";
insert into usuario(id, nome, cpf, endereco, telefone, email) values (03, "Franklin Mateus", "885.445-997.44", "Rua 10, bairro tanhçu, n 74", "999615324","frank123@gmail.com";
insert into usuario(id, nome, cpf, endereco, telefone, email) values (04, "Fernando Fernandes", "812.441-999.45", "Rua B, bairro bento, n 77", "999646541","fernando123@gmail.com";
insert into usuario(id, nome, cpf, endereco, telefone, email) values (05, "Pablo Vinicius", "896.412-976.85", "Rua brejo, bairro tanhçu, n 99", "999641770","pablo123@gmail.com";
