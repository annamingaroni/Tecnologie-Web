-- phpMyAdmin SQL Dump
-- https://www.phpmyadmin.net/


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecnologie_web`
--

-- tabella `carrello`.

CREATE TABLE `carrello` (
  `ID` int(11) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `product_1` int(11) NOT NULL,
  `product_2` int(11) NOT NULL,
  `product_3` int(11) NOT NULL,
  `product_4` int(11) NOT NULL,
  `product_5` int(11) NOT NULL,
  `product_6` int(11) NOT NULL,
  `product_7` int(11) NOT NULL,
  `product_8` int(11) NOT NULL,
  `product_9` int(11) NOT NULL,
  `product_10` int(11) NOT NULL,
  `stored_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- dati per la tabella `carrello`.

INSERT INTO `carrello` (`ID`, `Mail`, `product_1`, `product_2`, `product_3`, `product_4`, `product_5`, `product_6`, `product_7`, `product_8`, `product_9`, `product_10`, `stored_product`) VALUES
(1, 'cliente@cliente.cliente', 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(2, 'cliente2@cliente2.cliente2', 7, 18, 9, 0, 0, 0, 0, 0, 0, 0, 3),
(3, 'cliente3@cliente3.cliente3', 1, 2, 16, 0, 0, 0, 0, 0, 0, 0, 3);

-- tabella `notificheclient`.

CREATE TABLE `notificheclient` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `vistada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- dati per la tabella `notificheclient`.

INSERT INTO `notificheclient` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `vistada`) VALUES
(1, 'Messaggio per clienti', 'Da admin a tutti i clienti', 0, 'cliente@cliente.cliente'),
(2, 'esempio notifica', 'messaggio', 0, 'cliente2@cliente2.cliente2');

-- tabella `notificheadmin`.

CREATE TABLE `notificheadmin` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `vistada` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- dati per la tabella `notificheadmin`.

INSERT INTO `notificheadmin` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `vistada`, `mail`) VALUES
(1, 'SOLDOUT', 'Un prodotto è Soldout', 0, 'org@org.org', 'org@org.org');

-- tabella `contact`.

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  `Robot` varchar(5) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- dati per la tabella `contact`.

INSERT INTO `contact` (`ID`, `name`, `Mail`, `Comment`, `Robot`, `Data`) VALUES
(1, 'Contatto', '', 'Testo del messaggio', 'no', '2021-01-18 09:06:29');

-- tabella `product`.

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `p_name` varchar(75) NOT NULL,
  `p_descr` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `num_max` int(250) NOT NULL,
  `n_Buy` int(250) NOT NULL,
  `soldout` int(3) NOT NULL,
  `no_admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- dati per la tabella `product`.

INSERT INTO `product` (`ID`, `image`, `p_name`, `p_descr`, `price`, `admin`, `num_max`, `n_Buy`, `soldout`, `no_admin`) VALUES
(1, 'img/ar_brillantBar.jpg', 'BRILLANT BAR', 'ADDITIVO AUTOASCIUGANTE E BRILLANTANTE PER MACCHINE LAVABAR', '5.50', 'org@org.org', '200', 20, 0, 0),
(2, 'img/az_ammorbidente.jpg', 'G-31 AMMORBIDENTE', 'AMMORBIDENTE PROFUMATO PER IL BUCATO A MANO E IN LAVATRICE • Rende il bucato morbido e profumato • Facilita la stiratura • Ravviva i colori', '10.90', 'org2@org2.org2', '200', 10, 0, 0),
(3, 'img/bl_antischiuma.jpg', 'ANTISCHIUMA', 'ABBATTITORE DI SCHIUMA CONCENTRATO • Abbattitore di schiuma • Prodotto molto attivo • Impiegato con macchina lavasciuga e lavamoquettes ad iniezione/estrazione', '20.90', 'org3@org3.org3', '200', 15, 0, 0),
(4, 'img/ar_brillaStovil.jpg', 'BRILLA STOVIL', 'DETERGENTE LIQUIDO BRILLANTANTE LAVASTOVIGLIE', '5.90', 'org@org.org', '200', 100, 0, 0),
(5, 'img/ar_progressPiatti.jpg', 'PROGRESS PIATTI', 'DETERGENTE SUPERCONCENTRATO AZIONE SANIFICANTE', '6.90', 'org@org.org', '200', 150, 0, 0),
(6, 'img/ar_factotum.jpg', 'G-9 FACTOTUM', 'SGRASSANTE AD ALTA EFFICACIA INDICATO PER LA PULIZIA DI TUTTE LE SUPERFICI A CONTATTO CON GLI ALIMENTI', '5.50', 'org@org.org', '200', 170, 0, 0),
(7, 'img/bl_superCento.jpg', 'G-10 SUPER CENTO', 'DETERGENTE NEUTRO ANTISCIVOLO A RESIDUO LUCIDO • Detergente liquido a schiuma frenata, ad azione sgrassante per pavimenti, piastrelle e superfici dure. • Sgrassa a fondo e igienizza.', '27.00', 'org3@org3.org3', '200', 45, 0, 0),
(8, 'img/bl_lavapavimentiMelaVerde.jpg', 'G-7 LAVAPAVIMENTI ALLA MELA VERDE', 'DETERGENTE SANIFICANTE PER PAVIMENTI, PIASTRELLE E TUTTE LE SUPERFICI DURE. IDEALE IN AMBIENTI DI SOGGIORNO, HOTEL, RISTORANTI, BAR, COMUNITÀ', '5.50', 'org3@org3.org3', '200', 150, 0, 0),
(9, 'img/ar_leyponPiatti.jpg', 'G-12 LEYPON PIATTI', 'DETERGENTE LIQUIDO DERMOPROTETTIVO NEUTRO PER IL LAVAGGIO MANUALE DELLE STOVIGLIE', '8.90', 'org@org.org', '200', 50, 0, 0),
(10, 'img/ar_stovelMaticForte.jpg', 'G-19 STOVEL MATIC FORTE', 'DETERGENTE PER IL LAVAGGIO IN AUTOMATICO DELLE STOVIGLIE CON ACQUE A DUREZZA SUPERIORE A 85°F', '5.50', 'org@org.org', '200', 150, 0, 0),
(11, 'img/ar_stovelMaticExtra.jpg', 'STOVEL MATIC EXTRA', 'DETERGENTE PER IL LAVAGGIO AUTOMATICO DELLE STOVIGLIE. SUPER ATTIVO • Alta concentrazione e Potere Sequestrante • Non schiumogeno • Adatto a qualsiasi durezza dell’acqua', '5.70', 'org@org.org', '200', 150, 0, 0),
(12, 'img/az_clearLavatriceLiquido.jpg', 'CLEAR LAVATRICE LIQUIDO', 'DETERSIVO LIQUIDO PER BUCATO A MANO E IN LAVATRICE. SENZA FOSFATI • Adatto per ogni tipo di tessuto • Attivo su tutti i tipi di sporco • Non altera i colori', '4.20', 'org2@org2.org2', '200', 170, 0, 0),
(13, 'img/az_newLan.jpg', 'G-30 NEW LAN', 'DETERSIVO LIQUIDO PER LANA E TESSUTI DELICATI: LAVAGGIO A MANO E IN LAVATRICE • Lava delicatamente i tessuti di lana e seta, cotone, nylon • Non infeltrisce il tessuto', '4.90', 'org2@org2.org2', '200', 70, 0, 0),
(14, 'img/bl_cloroFresh.jpg', 'CLORO FRESH', 'COMPRESSE IGIENIZZANTI EFFERVESCENTI A BASE DI CLORO ISOCIANURATO PER OGNI TIPO DI SANIFICAZIONE', '5.60', 'org3@org3.org3', '200', 150, 0, 0),
(15, 'img/bl_deosanClor.jpg', 'DEOSAN CLOR', 'DETERGENTE IGIENIZZANTE PROFUMATO A BASE DI CLOROATTIVO • Ottima azione pulente e igienizzante • Basso livello di schiuma • Effetto smacchiante', '7.90', 'org3@org3.org3', '200', 150, 0, 0),
(16, 'img/ar_brillantante.jpg', 'G-20 IL BRILLANTANTE', 'BRILLANTANTE ACIDO SPECIFICO PER ACQUE DURE • Particolarmente efficace in presenza di acque dure e molto dure • Conserva (‘originale brillantezza delle stoviglie • Non è abrasivo', '5.60', 'org@org.org', '200', 150, 0, 0),
(17, 'img/ar_calMatic.jpg', 'G-21 CAL MATIC', 'DISINCROSTANTE ACIDO PER LA RIMOZIONE DEI RESIDUI CALCAREI • Anticorrosivo sui metalli • Elimina tutti i depositi calcarei • Mantiene in perfetta efficienza le macchine lavatrici e lavastoviglie', '8.90', 'org@org.org', '200', 170, 0, 0),
(18, 'img/ar_decal.jpg', 'DECAL', 'DETERGENTE DISINCROSTANTE ACIDO PER PAVIMENTI • Sicura e completa rimozione di incrostazioni calcaree e minerali • Non intacca i metalli • Rapidità dell’azione disincrostante e pulente.', '8.90', 'org@org.org', '200', 160, 0, 0),
(19, 'img/ar_grillGFKTamponato.jpg', 'G-8 GRILL G.F.K. TAMPONATO', 'SGRASSANTE ALCALINO PER FORNI, FORNELLI E PIASTRE DI COTTURA • Elimina i grassi carbonizzati da forni, grill e piastre di cottura • Prodotto viscoso per garantire una migliore aderenza', '5.90', 'org@org.org', '200', 50, 0, 0),
(20, 'img/ar_lampoos.jpg', 'G-15 LAMPOOS PROFESSIONAL', 'DETERGENTE DISINCROSTANTE ACIDO • Formulato con acidi organici • Non corrode le superfici • Ideale per la pulizia dei servizi igienici', '7.60', 'org@org.org', '200', 120, 0, 0),
(21, 'img/bl_germisan.jpg', 'G-2 GERMISAN', 'DETERGENTE IGIENIZZANTE DISINCROSTANTE PER BAGNI • Lascia l’ambiente gradevolmente profumato • Per pulire e rendere brillanti le superfici dure della stanza da bagno • Elimina tutti i residui d’origine calcarea e saponosi', '25.00', 'org3@org3.org3', '200', 140, 0, 0),
(22, 'img/bl_multiuso.jpg', 'MULTIUSO professionale', 'DETERGENTE MULTIUSO PER LA PULIZIA DI ARREDI E VETRI • Rapida pulizia di arredi e superfici lavabili • Indicato per vetri e specchi • Pulizia efficace, senza residui nè striature', '3.30', 'org3@org3.org3', '200', 150, 0, 0),
(23, 'img/bl_pino.jpg', 'G-7 PINO', 'DETERGENTE SUPER CONCENTRATO AD EFFETTO BRILLANTE PER TUTTI I PAVIMENTI LUCIDI • Detergente neutro profumato ad altissima concentrazione • Esalta riflessi e luminosità di tutti i pavimenti lucidi', '8.50', 'org3@org3.org3', '200', 170, 0, 0),
(24, 'img/bl_sanambiente.jpg', 'G-5 SANAMBIENTE', 'DETERGENTE DEODORANTE LIQUIDO FELCE E BALSAMICO • Effetto deodorante gradevole e di lunga durata • Non lascia aloni ne residui', '5.00', 'org3@org3.org3', '200', 180, 0, 0),
(25, 'img/bl_sterily.jpg', 'G-43 STERILY', 'DETERGENTE SANITIZZANTE PRONTO ALL’USO PER SUPERFICI AD USO ALIMENTARE • Igienizza eliminando ogni tipo di sporco da tutti i piani di lavoro • Prodotto pronto all’uso e facile da utilizzare', '2.30', 'org3@org3.org3', '200', 195, 0, 0),
(26, 'img/ro_DUSManiRosa.jpg', 'DUS Mani Rosa', 'LAVAMANI PROFUMATO • Prodotto cosmetico • Dermatologicamente testato • Consente una veloce pulizia delle mani', '5.30', 'org@org.org', '200', 185, 0, 0),
(27, 'img/ro_DUSManiSanificante.jpg', 'DUS Mani sanificante', 'LAVAMANI IGIENIZZANTE CON ANTIBATTERICO • Prodotto cosmetico • Dermatologicamente testato • Indicato per aree alimentari (Formula HACCP) • Per ambito ospedaliero, medico e in comunità', '6.30', 'org@org.org', '200', 150, 0, 0),
(28, 'img/ro_DUSManiViso.jpg', 'DUS Mani e Viso', 'CREMA LAVAMANI DELICATA • Prodotto cosmetico • Dermatologicamente testato • Per la frequente pulizia delle mani • Estremamente gentile sulla pelle', '5.30', 'org@org.org', '200', 180, 0, 0);

-- tabella `clientlogin`.

CREATE TABLE `clientlogin` (
  `ID` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- dati per la tabella `clientlogin`.

INSERT INTO `clientlogin` (`ID`, `name`, `Mail`, `Password`, `data`) VALUES
(1, 'cliente', 'cliente@cliente.cliente', 'd94019fd760a71edf11844bb5c601a4de95aacaf', '2021-01-02 08:44:19'),
(2, 'cliente2', 'cliente2@cliente2.cliente2', 'd94019fd760a71edf11844bb5c601a4de95aacaf', '2021-01-02 08:44:45'),
(3, 'cliente3', 'cliente3@cliente3.cliente3', 'd94019fd760a71edf11844bb5c601a4de95aacaf', '2021-01-02 08:45:05');

-- tabella `adminlogin`.

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- dati per la tabella `adminlogin`.

INSERT INTO `adminlogin` (`ID`, `name`, `Mail`, `Password`, `data`) VALUES
(1, 'organizzatore', 'org@org.org', 'd23b5987504c1b3de484bf2e47c76f75abb794d3', '2021-01-02 08:45:26'),
(2, 'organizzatore2', 'org2@org2.org2', 'd23b5987504c1b3de484bf2e47c76f75abb794d3', '2021-01-02 08:45:55'),
(3, 'organizzatore3', 'org3@org3.org3', 'd23b5987504c1b3de484bf2e47c76f75abb794d3', '2021-01-02 08:46:14');

-- tabella `product_q_info`.

CREATE TABLE `product_q_info` (
  `ID` int(100) NOT NULL,
  `mail` varchar(75) NOT NULL,
  `product_id` int(100) NOT NULL,
  `numero` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- dati per la tabella `product_q_info`.

INSERT INTO `product_q_info` (`ID`, `mail`, `product_id`, `numero`) VALUES
(1, 'cliente2@cliente2.cliente2', 1, 4),
(2, 'cliente2@cliente2.cliente2', 3, 8),
(3, 'cliente3@cliente3.cliente3', 2, 3),
(4, 'cliente@cliente.cliente', 2, 3);

-- tabella `ordinati`.

CREATE TABLE `ordinati` (
  `ID` int(11) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `product_1` int(11) NOT NULL,
  `product_2` int(11) NOT NULL,
  `product_3` int(11) NOT NULL,
  `product_4` int(11) NOT NULL,
  `product_5` int(11) NOT NULL,
  `product_6` int(11) NOT NULL,
  `product_7` int(11) NOT NULL,
  `product_8` int(11) NOT NULL,
  `product_9` int(11) NOT NULL,
  `product_10` int(11) NOT NULL,
  `numero_p_1` int(100) NOT NULL,
  `numero_p_2` int(100) NOT NULL,
  `numero_p_3` int(100) NOT NULL,
  `numero_p_4` int(100) NOT NULL,
  `numero_p_5` int(100) NOT NULL,
  `numero_p_6` int(100) NOT NULL,
  `numero_p_7` int(100) NOT NULL,
  `numero_p_8` int(100) NOT NULL,
  `numero_p_9` int(100) NOT NULL,
  `numero_p_10` int(100) NOT NULL,
  `stored_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- dati per la tabella `ordinati`.

INSERT INTO `ordinati` (`ID`, `Mail`, `product_1`, `product_2`, `product_3`, `product_4`, `product_5`, `product_6`, `product_7`, `product_8`, `product_9`, `product_10`, `numero_p_1`, `numero_p_2`, `numero_p_3`, `numero_p_4`, `numero_p_5`, `numero_p_6`, `numero_p_7`, `numero_p_8`, `numero_p_9`, `numero_p_10`, `stored_product`) VALUES
(1, 'cliente@cliente.cliente', 5, 7, 8, 2, 0, 0, 0, 0, 0, 0, 1, 2, 1, 3, 0, 0, 0, 0, 0, 0, 4),
(2, 'cliente2@cliente2.cliente2', 1, 3, 4, 0, 0, 0, 0, 0, 0, 0, 1, 4, 3, 0, 0, 0, 0, 0, 0, 0, 3),
(3, 'cliente3@cliente3.cliente3', 1, 2, 3, 5, 6, 4, 0, 0, 0, 0, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 6);

-- Indici per le tabelle `carrello`.
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`ID`);

-- Indici per le tabelle `notificheclient`.

ALTER TABLE `notificheclient`
  ADD PRIMARY KEY (`comment_id`);

-- Indici per le tabelle `notificheadmin`.

ALTER TABLE `notificheadmin`
  ADD PRIMARY KEY (`comment_id`);

-- Indici per le tabelle `contact`.

ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

-- Indici per le tabelle `product`.

ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

-- Indici per le tabelle `clientlogin`.

ALTER TABLE `clientlogin`
  ADD PRIMARY KEY (`ID`);

-- Indici per le tabelle `adminlogin`.

ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

-- Indici per le tabelle `product_q_info`.

ALTER TABLE `product_q_info`
  ADD PRIMARY KEY (`ID`);

-- Indici per le tabelle `ordinati`.

ALTER TABLE `ordinati`
  ADD PRIMARY KEY (`ID`);

-- AUTO_INCREMENT per la tabella `carrello`.

ALTER TABLE `carrello`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT per la tabella `notificheclient`.

ALTER TABLE `notificheclient`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- AUTO_INCREMENT per la tabella `notificheadmin`.

ALTER TABLE `notificheadmin`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- AUTO_INCREMENT per la tabella `contact`.

ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- AUTO_INCREMENT per la tabella `product`.

ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

-- AUTO_INCREMENT per la tabella `clientlogin`.

ALTER TABLE `clientlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT per la tabella `adminlogin`.

ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT per la tabella `product_q_info`.

ALTER TABLE `product_q_info`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

-- AUTO_INCREMENT per la tabella `ordinati`.

ALTER TABLE `ordinati`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
