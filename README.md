
### Arquivos separados por pastas das questões de 1 a 9.

1) Em um pacote de 5 bolas de tênis, apenas uma delas é mais leve que as outras. Detalhe um
algoritmo para descobrir a bola mais leve utilizando apenas 2 vezes uma balança de dois
pratos**.
**O mecanismo dessa balança funciona da seguinte forma: caso você ponha um objeto no prato
da esquerda que seja mais pesado que o objeto do prato da direita, o lado esquerdo ficará mais
baixo que o lado da direita. Caso os objetos sejam de pesos iguais, a balança ficará em equilíbrio,
ou seja, não haverá nenhum movimento dos pratos.

2) 35 estudantes estrangeiros vieram ao Brasil. 16 visitaram Manaus; 16 visitaram S. Paulo e
11 visitaram Salvador. Desses estudantes, 5 visitaram Manaus e Salvador e, desses 5, 3
visitaram também São Paulo. O número de estudantes que visitaram Manaus ou São Paulo
foi:

3) Considerando as seguintes tabelas:
- TB_ESTADO contendo os campos id(number PK), nome_estado(varchar)
- TB_CIDADE contendo os campos id(number PK), id_estado(number FK para
TB_ESTADO) e nome_cidade(varchar)
Construa uma query que retorne o nome dos estados que contenham mais de 100 cidades.

4) As funções de grupo do Oracle PL/SQL operam em conjuntos de linhas para
fornecer um resultado por grupo. Sobre a utilização destas funções, considere:
I. SELECT MAX(salario), MIN(salario), SUM(salario) FROM empregados WHERE cargo LIKE
'VEND%';
II. SELECT MIN(nome), MAX(nome) FROM empregados;
III. SELECT VARIANCE(nome), STDDEV(cargo) FROM empregados WHERE EmpregadoID='1090';
IV. SELECT COUNT(DISTINCT(DepartamentoID)) FROM empregados;
Considerando-se que um banco de dados esteja aberto, em condições ideais e que existam as
tabelas e campos citados e necessários para a correta execução das instruções, as funções de
grupo estão utilizadas corretamente APENAS em
A) I, II e IV.
B) II e III.
C) I.
D) III e IV.
E) I e IV.
5) Considerando a seguinte tabela:
- TB_MENU contendo os campos id(number PK), id_menu_pai(number FK para
TB_MENU), nome_menu(varchar)
Considere como raiz os menus com id_menu_pai = NULL.

Construa uma query que percorra em árvore (utilize CONNECT BY) que retorne os menus
listando nome e o nível do menu na árvore.
Caso não conheça CONNECT BY, descreva o algoritmo de um método recursivo para que
escreva na tela do usuário o nome e o nível do menu na árvore. Considere já haver um objeto
para conexão ao banco de dados ou um Model que acesse a tabela.

6) Defina uma classe e assinatura dos métodos necessários para se manipular um Pilha de
números inteiros.

7) Utilizando a classe acima, e considerando que os métodos acima foram implementados,
crie uma função que retorne a quantidade de ocorrências de um número inteiro na Pilha.

8) Descreva a utilização de 2 Padrões de Projeto (Design Pattern):

9) Descreva abaixo quais os tipos de framework PHP você conhece e quais já teve experiência
no desenvolvimento.
