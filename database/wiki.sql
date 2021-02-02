-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Lut 2021, 11:45
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wiki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name_pl` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name_eng` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `food`
--

INSERT INTO `food` (`id`, `name_pl`, `name_eng`) VALUES
(1, 'Jabłko', 'Apple'),
(2, 'Banan', 'Banana'),
(3, 'Gruszka', 'Pear'),
(4, 'Pomidor', 'Tomato'),
(5, 'Brokuł', 'Broccoli'),
(6, 'Chleb pszenny', 'Wheat bread'),
(7, 'Chleb rzytni', 'Rye bread'),
(8, 'Gorzka czekolada', 'Dark chocolate'),
(9, 'Mleko', 'Milk'),
(10, 'Serek Waniliowy Amelia', 'Vanilla cream cheese Amelia'),
(11, 'Sok pomarańczowy', 'Orange Juice'),
(12, 'Skittles', 'Skittles'),
(13, 'Haribo', 'Haribo'),
(14, 'Pomarańcza', 'Orange'),
(15, 'Majonez Winiary', 'Winiary Mayonnaise'),
(16, 'Coca Cola', 'Coca Cola'),
(17, 'Toffifee', 'Toffifee'),
(18, 'Masło', 'Butter'),
(19, 'Nutella', 'Nutella'),
(20, 'Arbuz', 'Watermelon'),
(21, 'Baton Mars', 'Chocolate bar Mars'),
(22, 'Brzoskwinia', 'Peach'),
(23, 'Malina', 'Raspberry'),
(24, 'Truskawka', 'Strawberry'),
(25, 'Jagoda', 'blueberry'),
(26, 'Borówka', 'Bilberry'),
(27, 'Agrest', 'Gooseberry'),
(28, 'Ananas', 'Pineapple'),
(29, 'Poziomka', 'Wild strawberry'),
(30, 'Grejpfrut', 'Grapefruit'),
(31, 'Winogrona', 'Grapes'),
(32, 'Kalafior', 'Cauliflower'),
(33, 'Sałata', 'Lettuce'),
(34, 'Kapusta', 'Cabbage'),
(35, 'Cebula', 'Onion'),
(36, 'Burak', 'Beetroot'),
(37, 'Ziemniak', 'Potato'),
(38, 'Marchewka', 'Carrot'),
(39, 'Czosnek', 'Garlic'),
(40, 'Pietruszka', 'Parsley'),
(41, 'Rzodkiweka', 'Radish'),
(42, 'Pieczarka', 'Champignon mushroom'),
(43, 'Kukurydza', 'Corn'),
(44, 'Fasola', 'Been'),
(45, 'Ogórek', 'Cucumber'),
(46, 'Dynia', 'Pumpkin'),
(47, 'Jajo', 'Egg'),
(48, 'Ketchup Pudliszki', 'Pudliszki Ketchup'),
(49, 'Awokado', 'Avokado'),
(50, 'Cytryna', 'Lemon');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nutritions`
--

CREATE TABLE `nutritions` (
  `id` int(11) NOT NULL,
  `kcal100G` float DEFAULT NULL,
  `proteins100G` float DEFAULT NULL,
  `carbohydrates100G` float DEFAULT NULL,
  `sugarsInIt100G` float DEFAULT NULL,
  `fats100G` float DEFAULT NULL,
  `saturatedFats100G` float DEFAULT NULL,
  `fiber100G` float DEFAULT NULL,
  `salt100G` float DEFAULT NULL,
  `kcalPiece` float DEFAULT NULL,
  `proteinsPiece` float DEFAULT NULL,
  `carbohydratesPiece` float DEFAULT NULL,
  `sugarsInItPiece` float DEFAULT NULL,
  `fatsPiece` float DEFAULT NULL,
  `saturatedFatsPiece` float DEFAULT NULL,
  `fiberPiece` float DEFAULT NULL,
  `saltPiece` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `nutritions`
--

INSERT INTO `nutritions` (`id`, `kcal100G`, `proteins100G`, `carbohydrates100G`, `sugarsInIt100G`, `fats100G`, `saturatedFats100G`, `fiber100G`, `salt100G`, `kcalPiece`, `proteinsPiece`, `carbohydratesPiece`, `sugarsInItPiece`, `fatsPiece`, `saturatedFatsPiece`, `fiberPiece`, `saltPiece`) VALUES
(2, 89, 1.09, 22.8, 12.2, 0.33, 0.112, 2.6, 0, 112, 1.37, 28.8, 15.4, 0.416, 0.141, 3.28, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `nutritions`
--
ALTER TABLE `nutritions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT dla tabeli `nutritions`
--
ALTER TABLE `nutritions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
