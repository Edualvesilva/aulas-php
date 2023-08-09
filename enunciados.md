## Exercício 05 - Funções

- Crie duas variáveis para representar as notas de um aluno
- Calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado)

**Desafios:**

1. Use duas **funções**: uma para isolar a lógica de cálculo da média, e outra para isolar a lógica de verificação da situação do aluno.
2. Use recursos do CSS para formatar em vermelho caso reprovado, e azul caso aprovado.

**Desafio dos Desafios mais desafiadores**

Adapte o exercício para que funcione com uma lista (array) de 5 alunos.

---
## Exercício 06 (na pasta site)
1. Adicione uma página de **Contato** ao site
2. Mostre no rodapé a **data** e **hora atual** usando programação PHP.

**Desafio**: programe um script PHP que permita identificar qual página está aberta no momento, e partir disso personalize o título de acordo com a página. 

Exemplos:
- Está na index.php? Então mostre no `title`: Página Inicial - Site PHP
- Está na cursos.php?	Então mostre no `title`: Cursos - Site PHP
- Está na duvidas.php?	Então mostre no `title`: Dúvidas - Site PHP
- Está na contato.php?	Então mostre no `title`: Contato - Site PHP

## Exercício 07
Crie um formulário HTML para simulação do cadastro de produtos com os campos:

- Nome do produto (campo de texto)
- Fabricante (use um `select` de opções com pelo menos 4 nomes de fabricantes) - 

**Atenção!** _Você deve criar um array PHP contendo o nome dos 4 fabricantes, e fazer com que as opções do `select` sejam carregadas a partir dos dados do array._

- Preço (campo de número configurado com valor mínimo de 100 e máximo de 10000, e suporte à 2 casas decimais para os centavos)

- Disponibilidade (campo `radio`, com as opções **sim** e **não**)

- Descrição (área de texto)

### Orientações gerais:

1. Faça a programação de processamento do formulário considerando o envio/recebimento via **POST**
2. É possível fazer tudo no mesmo arquivo (formulário e processamento/exibição tudo junto) ou em arquivos separados (formulário em um, processamento/exibição em outro). **Você escolhe.**
3. Os campos **nome** e **preço** devem ser obrigatórios (tanto no back-end quanto no front-end)
4. Utilize filtros de sanitização de dados para todos os campos

Caso sobre tempo, utilize livremente o CSS (ou Bootstrap) para melhorar a aparência.
