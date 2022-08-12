-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2022 às 18:49
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unilancer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisof`
--

CREATE TABLE `avisof` (
  `codigo_aviso` int(11) NOT NULL,
  `mensagem_aviso` varchar(255) NOT NULL,
  `data_aviso` date NOT NULL,
  `codigo_funcionario` int(11) DEFAULT NULL,
  `codigo_caixaf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisop`
--

CREATE TABLE `avisop` (
  `codigo_aviso` int(11) NOT NULL,
  `mensagem_aviso` varchar(255) NOT NULL,
  `data_aviso` date NOT NULL,
  `codigo_parceiro` int(11) DEFAULT NULL,
  `codigo_caixaf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixaf`
--

CREATE TABLE `caixaf` (
  `codigo_caixaf` int(11) NOT NULL,
  `codigo_funcionario` int(11) NOT NULL,
  `datainicio_caixaf` date NOT NULL,
  `mensagem_caixaf` varchar(255) NOT NULL,
  `status_caixaf` varchar(10) NOT NULL,
  `codigo_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixap`
--

CREATE TABLE `caixap` (
  `codigo_caixap` int(11) NOT NULL,
  `codigo_parceiro` int(11) NOT NULL,
  `datainicio_caixap` date NOT NULL,
  `mensagem_caixap` varchar(255) NOT NULL,
  `status_caixap` varchar(10) NOT NULL,
  `codigo_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamadof`
--

CREATE TABLE `chamadof` (
  `codigo_chamadof` int(11) NOT NULL,
  `mensagem_chamadof` varchar(255) NOT NULL,
  `data_chamadof` date NOT NULL,
  `codigo_funcionario` int(11) NOT NULL,
  `codigo_chamadohf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamadohf`
--

CREATE TABLE `chamadohf` (
  `codigo_chamadohf` int(11) NOT NULL,
  `codigo_funcionario` int(11) NOT NULL,
  `codigo_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamadohp`
--

CREATE TABLE `chamadohp` (
  `codigo_chamadohp` int(11) NOT NULL,
  `datainicio_chamadohp` date NOT NULL,
  `codigo_parceiro` int(11) NOT NULL,
  `codigo_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamadop`
--

CREATE TABLE `chamadop` (
  `codigo_chamadop` int(11) NOT NULL,
  `mensagem_chamadop` varchar(255) NOT NULL,
  `data_chamadop` date NOT NULL,
  `codigo_parceiro` int(11) NOT NULL,
  `codigo_chamadohp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `sobrenome_cliente` varchar(50) NOT NULL,
  `cpf_cliente` char(14) NOT NULL,
  `nascimento_cliente` date NOT NULL,
  `endereco_cliente` varchar(50) NOT NULL,
  `numero_cliente` int(6) NOT NULL,
  `cidade_cliente` varchar(50) NOT NULL,
  `cep_cliente` char(9) NOT NULL,
  `complemento_cliente` varchar(255) NOT NULL,
  `uf_cliente` varchar(50) NOT NULL,
  `nacionalidade_cliente` varchar(50) DEFAULT NULL,
  `usuario_cliente` varchar(50) NOT NULL,
  `senha_cliente` varchar(50) NOT NULL,
  `obs_cliente` varchar(255) DEFAULT NULL,
  `status_cliente` varchar(10) DEFAULT NULL,
  `datacadastro_cliente` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dataexcluircadastro_cliente` date DEFAULT NULL,
  `bairro_cliente` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `celular_cliente` char(15) DEFAULT NULL,
  `img_cliente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `codigo_contas` int(11) NOT NULL,
  `local_contas` varchar(50) NOT NULL,
  `tipo_contas` varchar(20) NOT NULL,
  `valor_contas` decimal(10,2) NOT NULL,
  `data_contas` date NOT NULL,
  `status_contas` varchar(10) NOT NULL,
  `obs_contas` varchar(255) DEFAULT NULL,
  `descricao_contas` varchar(50) NOT NULL,
  `dados_conta` varchar(50) NOT NULL,
  `codigo_funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `codigo_contrato` int(11) NOT NULL,
  `razaosocial_contrato` varchar(50) NOT NULL,
  `cnpjoucpfcontratado_contrato` char(18) NOT NULL,
  `endereçocontratado_contrato` varchar(50) NOT NULL,
  `pessoacontratada_contrato` varchar(50) NOT NULL,
  `nacionalidade_contrato` varchar(50) NOT NULL,
  `profissaocontratado_contrato` varchar(50) NOT NULL,
  `nomecontratante_contrato` varchar(50) NOT NULL,
  `cnpjoucpfcontratante_contrato` char(18) NOT NULL,
  `endereçocontratante_contrato` varchar(50) NOT NULL,
  `nacionalidadecontratante_contrato` varchar(50) NOT NULL,
  `valorserviço_contrato` decimal(10,2) NOT NULL,
  `comissão_contrato` decimal(10,2) NOT NULL,
  `prazo_contrato` date NOT NULL,
  `codigo_funcionario` int(11) DEFAULT NULL,
  `codigo_parceiro` int(11) DEFAULT NULL,
  `codigo_prestador` int(11) DEFAULT NULL,
  `codigo_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `codigo_departamento` int(11) NOT NULL,
  `nome_departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`codigo_departamento`, `nome_departamento`) VALUES
(1, 'departamento1'),
(2, 'diretoria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionalidade`
--

CREATE TABLE `funcionalidade` (
  `codigo_funcionalidade` int(11) NOT NULL,
  `codigo_funcionario` int(11) NOT NULL,
  `entradadecaixa_funcionalidade` tinyint(1) NOT NULL,
  `saidadecaixa_funcionalidade` tinyint(1) NOT NULL,
  `avisos_funcionalidade` tinyint(1) NOT NULL,
  `gerenciamento_funcionalidade` tinyint(1) NOT NULL,
  `gcompras_funcionalidade` tinyint(1) NOT NULL,
  `gcadastramento_funcionalidade` tinyint(1) NOT NULL,
  `gclientes_funcionalidade` tinyint(1) NOT NULL,
  `gafiliados_funcionalidade` tinyint(1) NOT NULL,
  `chamado_funcionalidade` tinyint(1) NOT NULL,
  `fluxodecaixa_funcionalidade` tinyint(1) NOT NULL,
  `entrada_funcionalidade` tinyint(1) NOT NULL,
  `saida_funcionalidade` tinyint(1) NOT NULL,
  `pagos_funcionalidade` tinyint(1) NOT NULL,
  `devedores_funcionalidade` tinyint(1) NOT NULL,
  `reclamacoes_funcionalidade` tinyint(1) NOT NULL,
  `vistas_funcionalidade` tinyint(1) NOT NULL,
  `pendentes_funcionalidade` tinyint(1) NOT NULL,
  `respondidas_funcionalidade` tinyint(1) NOT NULL,
  `classificadas_funcionalidade` tinyint(1) NOT NULL,
  `cadastrof_funcionalidade` tinyint(1) NOT NULL,
  `folhapagamento_funcionalidade` tinyint(1) NOT NULL,
  `folhapagos_funcionalidade` tinyint(1) NOT NULL,
  `naopagos_funcionalidade` tinyint(1) NOT NULL,
  `arevisar_funcionalidade` tinyint(1) NOT NULL,
  `ferias_funcionalidade` tinyint(1) NOT NULL,
  `folhadeponto_funcionalidade` tinyint(1) NOT NULL,
  `contratos_funcionalidade` tinyint(1) NOT NULL,
  `cfuncionarios_funcionalidade` tinyint(1) NOT NULL,
  `cclientes_funcionalidade` tinyint(1) NOT NULL,
  `cafiliados_funcionalidade` tinyint(1) NOT NULL,
  `configuracoes_funcionalidade` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `codigo_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(50) NOT NULL,
  `rg_funcionario` char(12) NOT NULL,
  `numerodois_funcionario` char(15) DEFAULT NULL,
  `cep_funcionario` char(9) NOT NULL,
  `sobrenome_funcionario` varchar(50) NOT NULL,
  `endereco_funcionario` varchar(50) NOT NULL,
  `complemento_funcionario` varchar(50) NOT NULL,
  `sexo_funcionario` varchar(50) NOT NULL,
  `cpf_funcionario` char(14) NOT NULL,
  `nascimento_funcionario` date NOT NULL,
  `cidade_funcionario` varchar(50) NOT NULL,
  `uf_funcionario` char(2) NOT NULL,
  `nacionalidade_funcionario` varchar(50) NOT NULL,
  `usuario_funcionario` varchar(50) NOT NULL,
  `senha_funcionario` varchar(50) NOT NULL,
  `obs_funcionario` varchar(255) NOT NULL,
  `status_funcionario` varchar(10) NOT NULL,
  `iniciocontrato_funcionario` date NOT NULL,
  `bairro_funcionario` varchar(50) NOT NULL,
  `email_funcionario` varchar(50) NOT NULL,
  `celular_funcionario` varchar(14) NOT NULL,
  `remuneracao_funcionario` decimal(10,2) NOT NULL,
  `cpfdenpendente_funcionario` char(14) DEFAULT NULL,
  `nascimentodependente_funcionario` date DEFAULT NULL,
  `codigo_departamento` int(11) NOT NULL,
  `numero_funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`codigo_funcionario`, `nome_funcionario`, `rg_funcionario`, `numerodois_funcionario`, `cep_funcionario`, `sobrenome_funcionario`, `endereco_funcionario`, `complemento_funcionario`, `sexo_funcionario`, `cpf_funcionario`, `nascimento_funcionario`, `cidade_funcionario`, `uf_funcionario`, `nacionalidade_funcionario`, `usuario_funcionario`, `senha_funcionario`, `obs_funcionario`, `status_funcionario`, `iniciocontrato_funcionario`, `bairro_funcionario`, `email_funcionario`, `celular_funcionario`, `remuneracao_funcionario`, `cpfdenpendente_funcionario`, `nascimentodependente_funcionario`, `codigo_departamento`, `numero_funcionario`) VALUES
(2, 'Victor', '45.545.454-5', '(11) 54865-6535', '07110-000', 'Matheus', 'Rua Luiz Faccini', 'nenhum', 'Masculino', '545.545.646-46', '2000-02-01', 'Guarulhos', 'SP', 'Brasileiro', 'victor1', '123', 'sem obs', 'Ativo', '2021-12-22', 'Centro', 'vaicorinthians@gmail.com', '(11) 11112-212', '2000000.00', '121.213.233-12', '2010-02-23', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiro`
--

CREATE TABLE `parceiro` (
  `id_parceiro` int(11) NOT NULL,
  `nome_parceiro` varchar(20) NOT NULL,
  `cnpj_parceiro` char(18) NOT NULL,
  `area_parceiro` varchar(20) NOT NULL,
  `email_parceiro` varchar(50) NOT NULL,
  `nacionalidade_parceiro` varchar(255) NOT NULL,
  `celular_parceiro` varchar(15) NOT NULL,
  `datacadastro_parceiro` date NOT NULL,
  `excluircadastro_parceiro` date DEFAULT NULL,
  `status_parceiro` varchar(10) NOT NULL,
  `obs_parceiro` varchar(255) DEFAULT NULL,
  `cep_parceiro` char(9) NOT NULL,
  `endereco_parceiro` varchar(50) NOT NULL,
  `numero_parceiro` varchar(50) NOT NULL,
  `complemento_parceiro` varchar(50) NOT NULL,
  `cidade_parceiro` varchar(50) NOT NULL,
  `uf_parceiro` varchar(50) NOT NULL,
  `bairro_parceiro` varchar(50) NOT NULL,
  `login_parceiro` varchar(20) NOT NULL,
  `senha_parceiro` varchar(20) NOT NULL,
  `img_parceiro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parceiro`
--

INSERT INTO `parceiro` (`id_parceiro`, `nome_parceiro`, `cnpj_parceiro`, `area_parceiro`, `email_parceiro`, `nacionalidade_parceiro`, `celular_parceiro`, `datacadastro_parceiro`, `excluircadastro_parceiro`, `status_parceiro`, `obs_parceiro`, `cep_parceiro`, `endereco_parceiro`, `numero_parceiro`, `complemento_parceiro`, `cidade_parceiro`, `uf_parceiro`, `bairro_parceiro`, `login_parceiro`, `senha_parceiro`, `img_parceiro`) VALUES
(1, 'as', 'as', 'as', 'as', 'as', '', '0000-00-00', NULL, '', NULL, '', '', '', '', '', '', '', '', '', ''),
(3, 'a', 'a', 'a', 'a', '', 'a', '2022-05-03', '0000-00-00', '312', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prestador`
--

CREATE TABLE `prestador` (
  `datacadastro_prestador` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_prestador` int(11) NOT NULL,
  `nome_prestador` varchar(50) NOT NULL,
  `sobrenome_prestador` varchar(50) NOT NULL,
  `img_prestador` varchar(50) NOT NULL,
  `email_prestador` varchar(50) NOT NULL,
  `cpfnj_prestador` varchar(18) NOT NULL,
  `nacionalidade_prestador` varchar(50) NOT NULL,
  `cidade_prestador` varchar(50) NOT NULL,
  `uf_prestador` varchar(10) NOT NULL,
  `endereco_prestador` varchar(50) NOT NULL,
  `bairro_prestador` varchar(50) NOT NULL,
  `cep_prestador` varchar(9) NOT NULL,
  `numero_prestador` varchar(3) NOT NULL,
  `complemento_prestador` varchar(50) NOT NULL,
  `celular_prestador` varchar(13) NOT NULL,
  `login_prestador` varchar(15) NOT NULL,
  `senha_prestador` varchar(8) NOT NULL,
  `obs_prestador` varchar(255) DEFAULT NULL,
  `status_prestador` varchar(255) DEFAULT NULL,
  `id_parceiro` int(11) DEFAULT NULL,
  `terminocontrato_prestador` date DEFAULT NULL,
  `atuacao_prestador` varchar(50) NOT NULL,
  `recomendacoes_prestador` int(11) DEFAULT NULL,
  `descricao_prestador` varchar(255) NOT NULL,
  `avaliacoes_prestador` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prestador`
--

INSERT INTO `prestador` (`datacadastro_prestador`, `id_prestador`, `nome_prestador`, `sobrenome_prestador`, `img_prestador`, `email_prestador`, `cpfnj_prestador`, `nacionalidade_prestador`, `cidade_prestador`, `uf_prestador`, `endereco_prestador`, `bairro_prestador`, `cep_prestador`, `numero_prestador`, `complemento_prestador`, `celular_prestador`, `login_prestador`, `senha_prestador`, `obs_prestador`, `status_prestador`, `id_parceiro`, `terminocontrato_prestador`, `atuacao_prestador`, `recomendacoes_prestador`, `descricao_prestador`, `avaliacoes_prestador`) VALUES
('2022-06-06 20:05:03', 8, 'juninho', 'dantas', 'Y8srRtA0_400x400.jpg', 'juninho@gmail.com', '123.123.123-12', 'italiano', 'sei la', 'it', 'rua das massas', 'macarão', '123123', '11', '213', '1111111', 'junin', '123', '', NULL, 1, NULL, 'pintor', NULL, '123', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avisof`
--
ALTER TABLE `avisof`
  ADD PRIMARY KEY (`codigo_aviso`),
  ADD KEY `codigo_funcionario` (`codigo_funcionario`),
  ADD KEY `codigo_caixaf` (`codigo_caixaf`);

--
-- Índices para tabela `avisop`
--
ALTER TABLE `avisop`
  ADD PRIMARY KEY (`codigo_aviso`),
  ADD KEY `codigo_parceiro` (`codigo_parceiro`),
  ADD KEY `codigo_caixaf` (`codigo_caixaf`);

--
-- Índices para tabela `caixaf`
--
ALTER TABLE `caixaf`
  ADD PRIMARY KEY (`codigo_caixaf`),
  ADD KEY `codigo_departamento` (`codigo_departamento`);

--
-- Índices para tabela `caixap`
--
ALTER TABLE `caixap`
  ADD PRIMARY KEY (`codigo_caixap`),
  ADD KEY `codigo_parceiro` (`codigo_parceiro`),
  ADD KEY `codigo_departamento` (`codigo_departamento`);

--
-- Índices para tabela `chamadof`
--
ALTER TABLE `chamadof`
  ADD PRIMARY KEY (`codigo_chamadof`),
  ADD KEY `codigo_funcionario` (`codigo_funcionario`),
  ADD KEY `codigo_chamadohf` (`codigo_chamadohf`);

--
-- Índices para tabela `chamadohf`
--
ALTER TABLE `chamadohf`
  ADD PRIMARY KEY (`codigo_chamadohf`),
  ADD KEY `codigo_funcionario` (`codigo_funcionario`),
  ADD KEY `codigo_departamento` (`codigo_departamento`);

--
-- Índices para tabela `chamadohp`
--
ALTER TABLE `chamadohp`
  ADD PRIMARY KEY (`codigo_chamadohp`),
  ADD KEY `codigo_departamento` (`codigo_departamento`),
  ADD KEY `codigo_parceiro` (`codigo_parceiro`);

--
-- Índices para tabela `chamadop`
--
ALTER TABLE `chamadop`
  ADD PRIMARY KEY (`codigo_chamadop`),
  ADD KEY `codigo_parceiro` (`codigo_parceiro`),
  ADD KEY `codigo_chamadohp` (`codigo_chamadohp`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cpf_cliente` (`cpf_cliente`),
  ADD UNIQUE KEY `usuario_cliente` (`usuario_cliente`);

--
-- Índices para tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`codigo_contas`),
  ADD KEY `codigo_funcionario` (`codigo_funcionario`);

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD UNIQUE KEY `cnpjoucpfcontratado_contrato` (`cnpjoucpfcontratado_contrato`),
  ADD UNIQUE KEY `cnpjoucpfcontratante_contrato` (`cnpjoucpfcontratante_contrato`),
  ADD KEY `codigo_funcionario` (`codigo_funcionario`),
  ADD KEY `codigo_parceiro` (`codigo_parceiro`),
  ADD KEY `codigo_prestador` (`codigo_prestador`),
  ADD KEY `codigo_cliente` (`codigo_cliente`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codigo_departamento`);

--
-- Índices para tabela `funcionalidade`
--
ALTER TABLE `funcionalidade`
  ADD PRIMARY KEY (`codigo_funcionalidade`),
  ADD KEY `codigo_funcionario` (`codigo_funcionario`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`codigo_funcionario`),
  ADD UNIQUE KEY `cpf_funcionario` (`cpf_funcionario`),
  ADD UNIQUE KEY `senha_funcionario` (`senha_funcionario`),
  ADD UNIQUE KEY `cpfdenpendente_funcionario` (`cpfdenpendente_funcionario`),
  ADD KEY `codigo_departamento` (`codigo_departamento`);

--
-- Índices para tabela `parceiro`
--
ALTER TABLE `parceiro`
  ADD PRIMARY KEY (`id_parceiro`),
  ADD UNIQUE KEY `cnpj_parceiro` (`cnpj_parceiro`),
  ADD UNIQUE KEY `email_parceiro` (`email_parceiro`),
  ADD UNIQUE KEY `celular_parceiro` (`celular_parceiro`);

--
-- Índices para tabela `prestador`
--
ALTER TABLE `prestador`
  ADD PRIMARY KEY (`id_prestador`),
  ADD UNIQUE KEY `email_prestador` (`email_prestador`),
  ADD UNIQUE KEY `usuario_prestador` (`login_prestador`),
  ADD KEY `id_parceiro` (`id_parceiro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avisof`
--
ALTER TABLE `avisof`
  MODIFY `codigo_aviso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avisop`
--
ALTER TABLE `avisop`
  MODIFY `codigo_aviso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `caixaf`
--
ALTER TABLE `caixaf`
  MODIFY `codigo_caixaf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `caixap`
--
ALTER TABLE `caixap`
  MODIFY `codigo_caixap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chamadof`
--
ALTER TABLE `chamadof`
  MODIFY `codigo_chamadof` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chamadohf`
--
ALTER TABLE `chamadohf`
  MODIFY `codigo_chamadohf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chamadohp`
--
ALTER TABLE `chamadohp`
  MODIFY `codigo_chamadohp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chamadop`
--
ALTER TABLE `chamadop`
  MODIFY `codigo_chamadop` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contas`
--
ALTER TABLE `contas`
  MODIFY `codigo_contas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `codigo_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionalidade`
--
ALTER TABLE `funcionalidade`
  MODIFY `codigo_funcionalidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `codigo_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `parceiro`
--
ALTER TABLE `parceiro`
  MODIFY `id_parceiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `prestador`
--
ALTER TABLE `prestador`
  MODIFY `id_prestador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avisof`
--
ALTER TABLE `avisof`
  ADD CONSTRAINT `avisof_ibfk_1` FOREIGN KEY (`codigo_funcionario`) REFERENCES `funcionario` (`codigo_funcionario`),
  ADD CONSTRAINT `avisof_ibfk_2` FOREIGN KEY (`codigo_caixaf`) REFERENCES `caixaf` (`codigo_caixaf`);

--
-- Limitadores para a tabela `avisop`
--
ALTER TABLE `avisop`
  ADD CONSTRAINT `avisop_ibfk_1` FOREIGN KEY (`codigo_parceiro`) REFERENCES `parceiro` (`id_parceiro`),
  ADD CONSTRAINT `avisop_ibfk_2` FOREIGN KEY (`codigo_caixaf`) REFERENCES `caixaf` (`codigo_caixaf`);

--
-- Limitadores para a tabela `caixaf`
--
ALTER TABLE `caixaf`
  ADD CONSTRAINT `caixaf_ibfk_1` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamento` (`codigo_departamento`);

--
-- Limitadores para a tabela `caixap`
--
ALTER TABLE `caixap`
  ADD CONSTRAINT `caixap_ibfk_1` FOREIGN KEY (`codigo_parceiro`) REFERENCES `parceiro` (`id_parceiro`),
  ADD CONSTRAINT `caixap_ibfk_2` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamento` (`codigo_departamento`);

--
-- Limitadores para a tabela `chamadof`
--
ALTER TABLE `chamadof`
  ADD CONSTRAINT `chamadof_ibfk_1` FOREIGN KEY (`codigo_funcionario`) REFERENCES `funcionario` (`codigo_funcionario`),
  ADD CONSTRAINT `chamadof_ibfk_2` FOREIGN KEY (`codigo_chamadohf`) REFERENCES `chamadohf` (`codigo_chamadohf`);

--
-- Limitadores para a tabela `chamadohf`
--
ALTER TABLE `chamadohf`
  ADD CONSTRAINT `chamadohf_ibfk_1` FOREIGN KEY (`codigo_funcionario`) REFERENCES `funcionario` (`codigo_funcionario`),
  ADD CONSTRAINT `chamadohf_ibfk_2` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamento` (`codigo_departamento`);

--
-- Limitadores para a tabela `chamadohp`
--
ALTER TABLE `chamadohp`
  ADD CONSTRAINT `chamadohp_ibfk_1` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamento` (`codigo_departamento`),
  ADD CONSTRAINT `chamadohp_ibfk_2` FOREIGN KEY (`codigo_parceiro`) REFERENCES `parceiro` (`id_parceiro`);

--
-- Limitadores para a tabela `chamadop`
--
ALTER TABLE `chamadop`
  ADD CONSTRAINT `chamadop_ibfk_1` FOREIGN KEY (`codigo_parceiro`) REFERENCES `parceiro` (`id_parceiro`),
  ADD CONSTRAINT `chamadop_ibfk_2` FOREIGN KEY (`codigo_chamadohp`) REFERENCES `chamadohp` (`codigo_chamadohp`);

--
-- Limitadores para a tabela `contas`
--
ALTER TABLE `contas`
  ADD CONSTRAINT `contas_ibfk_1` FOREIGN KEY (`codigo_funcionario`) REFERENCES `funcionario` (`codigo_funcionario`);

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`codigo_funcionario`) REFERENCES `funcionario` (`codigo_funcionario`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`codigo_parceiro`) REFERENCES `parceiro` (`id_parceiro`),
  ADD CONSTRAINT `contrato_ibfk_3` FOREIGN KEY (`codigo_prestador`) REFERENCES `prestador` (`id_prestador`),
  ADD CONSTRAINT `contrato_ibfk_4` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Limitadores para a tabela `funcionalidade`
--
ALTER TABLE `funcionalidade`
  ADD CONSTRAINT `funcionalidade_ibfk_1` FOREIGN KEY (`codigo_funcionario`) REFERENCES `funcionario` (`codigo_funcionario`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamento` (`codigo_departamento`);

--
-- Limitadores para a tabela `prestador`
--
ALTER TABLE `prestador`
  ADD CONSTRAINT `prestador_ibfk_1` FOREIGN KEY (`id_parceiro`) REFERENCES `parceiro` (`id_parceiro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
