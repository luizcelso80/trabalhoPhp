CREATE TABLE estagio
(

	alu_id								INTEGER			NOT NULL AUTO_INCREMENT,
	alu_nome							VARCHAR(50),
	alu_ra								VARCHAR(10),
	alu_celular							VARCHAR(30),
	alu_email							VARCHAR(100),
	alu_anoturma						INTEGER,
	alu_trabalha 						CHAR(1) DEFAULT 'N',						
	alu_empresa 						VARCHAR(50),
	alu_dt_trabalha						DATE,
	alu_carteira 						CHAR(1) DEFAULT 'N',
	alu_dt_carteira						DATE,
	alu_declaracao_empresa 				CHAR(1) DEFAULT 'N',
	alu_dt_declaracao_empresa			DATE,
	alu_convenio 						CHAR(1) DEFAULT 'N',
	alu_dt_convenio						DATE,
	alu_compromisso 					CHAR(1) DEFAULT 'N',
	alu_dt_compromisso 					DATE,
	alu_relatorio 						CHAR(1) DEFAULT 'N',
	alu_dt_relatorio					DATE,
	alu_declaracao_fib_impressa			CHAR(1) DEFAULT 'N',
	alu_declaracao_fib_data				DATE,
	alu_pendencia						CHAR(1) DEFAULT 'S',
	PRIMARY KEY(alu_id)

);