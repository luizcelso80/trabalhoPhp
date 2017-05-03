# trabalhoPhp
- Tabela: estagio
alu_id integer not null auto_increment
alu_nome varchar(50)
alu_ra varchar(10)
alu_celular varchar(30)
alu_email varchar(100)
alu_anoturma integer
alu_trabalha char(1) default 'N'
alu_empresa varchar(50)
alu_dt_trabalha date
alu_carteira char(1) default 'N'
alu_dt_carteira date
alu_declaracao_empresa char(1) default 'N'
alu_dt_declaracao_empresa date
alu_convenio char(1) default 'N'
alu_dt_convenio date
alu_compromisso char(1) default 'N'
alu_dt_compromisso date
alu_relatorio char(1), default 'N'
alu_dt_relatorio date
alu_declaracao_fib_impressa char(1), default 'N'
alu_declaracao_fib_data date
alu_pendencia char(1), default 'N'

-> Quando alu_trabalha for igual a 'S', o campo alu_pendencia passará
para 'S' somente quando os campos: alu_carteira,
alu_declaracao_empresa e alu_relatorio estiverem com o conteúdo 'N'.

-> Quando alu_trabalha for igual a 'N', o campo alu_pendencia passará
para 'S' somente quando os campos: alu_convenio, alu_compromisso
e alu_relatorio estiverem com o conteúdo 'S'.

Será necessário montar um problema em PHP usando uma base de
dados MySQL. O programa deverá permitir as operações de Inclusão,
Alteração e Exclusão.


Gestão de Estágio

Uma listagem de todos os alunos, com os seguintes filtros:
1. Declaração Entregue (S/N) -> utilizar o campo
alu_declaracao_fib_impressa igual a S ou N. Quando for S quer dizer
que foi entregue.
2. Alunos com Pendência (S/N) -> utilizar o campo alu_pendencia igual
a S ou N. Quando for igual a S está com pendência.
Ordenar pelo Nome do Aluno.
As listagens devem permitir exportar para o Excel ou gerar PDF.
O programa também precisará gerar uma declaração conforme modelo
no formato PDF.
