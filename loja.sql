-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 19/03/2017 às 00:04
-- Versão do servidor: 10.1.19-MariaDB
-- Versão do PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `views` int(11) NOT NULL,
  `img_dest` varchar(200) NOT NULL,
  `slug_dest` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`id`, `titulo`, `slug`, `views`, `img_dest`, `slug_dest`) VALUES
(1, 'Informática', 'informatica', 0, '0', '0'),
(2, 'Telefonia', 'telefonia', 0, '0', '0'),
(3, 'Tv e Áudio', 'tv_e_audio', 0, '0', '0'),
(4, 'Eletrodomésticos', 'eletrodomesticos', 0, '0', '0'),
(5, 'Esporte e Lazer', 'esporte_e_lazer', 0, '0', '0');

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja_cliente`
--

CREATE TABLE `loja_cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja_pedidos`
--

CREATE TABLE `loja_pedidos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja_produtos`
--

CREATE TABLE `loja_produtos` (
  `id` int(11) NOT NULL,
  `img_padrao` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `sub_categoria` varchar(200) NOT NULL,
  `valor_anterior` decimal(10,2) NOT NULL,
  `valor_atual` decimal(10,2) NOT NULL,
  `descricao` text NOT NULL,
  `estoque` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `max_parcela` int(11) NOT NULL,
  `frete_gratis` tinyint(1) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `peso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `loja_produtos`
--

INSERT INTO `loja_produtos` (`id`, `img_padrao`, `titulo`, `slug`, `categoria`, `sub_categoria`, `valor_anterior`, `valor_atual`, `descricao`, `estoque`, `data`, `max_parcela`, `frete_gratis`, `marca`, `peso`) VALUES
(1, 'img-01.jpg', 'Smartphone Motorola Moto G 4 Play Dtv Preto Tela 5" Android™ 6.0.1 Marshmallow Câm 8Mp Dualchip 16Gb', 'teste', 'telefonia', 'smatphones', '515.30', '300.85', 'Escova Magica Alisadora Elétrica Lcd ¨ 230°C ¨ - ¨ Bivolt ¨ Hair Straightener ¨ Pronta Entrega ¨ A Escova Elétrica Alisadora 230ºC Lcd É Um Produto De Última Geração Que Vai Desembaraçar E Alisar Seus Cabelos De Forma Mais Eficiente, Rápida E Versátil. Escova Elétrica Alisadora 230ºC Lcd Pode Ser Usada Da Mesma Forma Que Você Faz Todos Os Dias Ao Se Pentear, Basta Ligar A Escova E Pronto - Cabelos Lisos Em Segundos!!! Com A Escova Elétrica Alisadora 230ºC Lcd Você Pode Escolher Facilmente A Temperatura Utilizando Os Botões De Controle, Visualizando No Display. Você Nunca Mais Irá Perder Seu Tempo Com Baixa Temperatura Ou Se Queimar Com A Temperatura Muito Alta!! Escova Elétrica Alisadora 230ºC Lcd Não Danifica Os Fios E Garante Cabelos Lisos, Com Aparência Natural. Escova Elétrica Alisadora 230ºC Lcd É A Opção Ideal Para Os Que Estão Insatisfeitos Com Os Cachos E Frizz. Proporciona Cabelos Lisos O Tempo Todo E Grande Versatilidade Para O Seu Dia-A-Dia. Sua Utilização É Muito Fácil E Pode Ser Comparada Ao Que Você Fas Todos Os Dias Quando Vai Se Pentear, Com Exceção De Que Agora Somente Terá De Ligar A Escova E Pronto - Cabelos Lisos Em Segundos!!!! Já Pensou Nisso? Seus Botões De Aumentar E Disminuir Temperatura Ajudam No Processo De Alisamento. Seu Design Com Display Para Visualização De Temperatura Dá Precissão Para Un Acabamento Liso Perfeito. Não Danifica Os Fios E Garante Cabelos Lisos, Com Ar De Natural. Diâmetro Da Chapa Térmica: Variável, De 21 A 30 Mm Temperatura Da Chapa: De 60 A 230ºC Tempo De Aquecimento: 30-45 Segundos Tempo Para Alisamento: 5 Segundos Voltagem: De 110v A 220v ( Bivolt ) Comprimento Do Fio: 2,30m Cores Disponíveis No Momento: Rosa Todas as informações divulgadas são de responsabilidade do fabricante/fornecedor. Imagens Meramente Ilustrativas. Ao apresentar sintomas de alergia, pare o uso e consulte seu médico.', 100, '2016-12-23 11:27:23', 10, 0, 'Motorola', 0.2),
(2, 'img-02.jpg', 'Este é um produto teste', 'este_e_um_produto_teste', 'telefonia', 'android', '30.25', '15.30', 'kjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjnkjhlkdfnvlkmfdlkmvkfbnkdfjn', 100, '2016-12-28 00:00:00', 5, 1, 'teste', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja_produtos_pedidos`
--

CREATE TABLE `loja_produtos_pedidos` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja_slide`
--

CREATE TABLE `loja_slide` (
  `id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `lo_sub_categorias`
--

CREATE TABLE `lo_sub_categorias` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `lo_sub_categorias`
--

INSERT INTO `lo_sub_categorias` (`id`, `id_categoria`, `titulo`, `slug`, `views`) VALUES
(1, 1, 'Notebooks', 'notebooks', 0),
(2, 1, 'Desktop', 'desktop', 0),
(3, 1, 'Tablets', 'tablets', 0),
(4, 1, '2 em 1', '2_em_1', 0),
(5, 1, 'Monitores', 'monitores', 0),
(6, 1, 'Impressão e Imagem', 'impressao_e_magem', 0),
(7, 1, 'All in one', 'all_in_one', 0),
(8, 1, 'Suprimentos', 'suprimentos', 0),
(9, 1, 'HD Externo', 'hd_externo', 0),
(10, 1, 'Acessórios', 'acessorios', 0),
(11, 2, 'Lançamentos', 'lancamentos', 0),
(12, 2, 'Smatphones', 'smatphones', 0),
(13, 2, 'iPhones', 'iphones', 0),
(14, 2, 'Android', 'android', 0),
(15, 2, 'Windows Phone', 'windows_phone', 0),
(16, 2, 'Celulares', 'celulares', 0),
(17, 2, 'Acessórios', 'acessorios', 0),
(18, 2, 'Telefones Fixos', 'telefones_fixos', 0),
(19, 3, 'Smart Tv', 'smart_tv', 0),
(20, 3, 'Tv LED', 'tv_led', 0),
(21, 3, 'Tv Ultra HD / 4K', 'tv_ultra_hd_4k', 0),
(22, 3, 'Tv Monitor', 'tv_monitor', 0),
(23, 3, 'Home Theater', 'home_theater', 0),
(24, 3, 'Mini-System', 'mini_system', 0),
(25, 3, 'Vitrola / Toca-Discos', 'vitrola_toca_discos', 0),
(26, 3, 'Caixa de Som', 'caixa_de_som', 0),
(27, 3, 'Áudio', 'audio', 0),
(28, 3, 'DVD e Blu-Ray Player', 'dvd_e_blu_ray_player', 0),
(29, 4, 'Geladeira', 'geladeira', 0),
(30, 4, 'Máquina de Lavar', 'maquina_de_lavar', 0),
(31, 4, 'Fogão', 'fogao', 0),
(32, 4, 'Microondas', 'microondas', 0),
(33, 4, 'Forno', 'forno', 0),
(34, 4, 'Ar Condicionado', 'ar_condicionado', 0),
(35, 4, 'Lava e Seca', 'lava_e_seca', 0),
(36, 4, 'Climatizador', 'climatizador', 0),
(37, 4, 'Cooktop', 'cooktop', 0),
(38, 4, 'Secadoras', 'secadoras', 0),
(39, 5, 'Bicicletas', 'bicicletas', 0),
(40, 5, 'Fitness', 'fitness', 0),
(41, 5, 'Tiro Esportivo', 'tiro_esportivo', 0),
(42, 5, 'Monitores Cardíacos', 'monitores_cardiacos', 0),
(43, 5, 'Jogos', 'jogos', 0),
(44, 5, 'Patins', 'patins', 0),
(45, 5, 'Marcas Exclusivas', 'marcas_exclusivas', 0),
(46, 5, 'Suplementos', 'suplementos', 0),
(47, 5, 'Mochila, Malas e Bolsas', 'mochila_malas_e_bolsas', 0),
(48, 5, 'Corrida', 'corrida', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `loja_cliente`
--
ALTER TABLE `loja_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `loja_pedidos`
--
ALTER TABLE `loja_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `loja_produtos`
--
ALTER TABLE `loja_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `loja_produtos_pedidos`
--
ALTER TABLE `loja_produtos_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `loja_slide`
--
ALTER TABLE `loja_slide`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lo_sub_categorias`
--
ALTER TABLE `lo_sub_categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `loja_cliente`
--
ALTER TABLE `loja_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `loja_pedidos`
--
ALTER TABLE `loja_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `loja_produtos`
--
ALTER TABLE `loja_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `loja_produtos_pedidos`
--
ALTER TABLE `loja_produtos_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `loja_slide`
--
ALTER TABLE `loja_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `lo_sub_categorias`
--
ALTER TABLE `lo_sub_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
