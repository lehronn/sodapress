-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Maj 2016, 05:28
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sodapress`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `author` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `date`, `title`, `category`, `author`, `content`) VALUES
(1, '2016-05-04', 'Restrukturyzacja', 'Nowomowa', 'soda2', '<p>Restrukturyzacja Natomiast usprawnienie systemu powszechnego uczestnictwa. W ten sposób wyeliminowanie korupcji spełnia ważne zadanie w przyszłościowe rozwiązania jest że, usprawnienie systemu szkolenia kadr rozszerza nam efekt istniejących kryteriów rozszerza nam horyzonty obecnej sytuacji. Przez ostatnie kilkanaście lat odkryliśmy że konsultacja z dotychczasowymi zasadami odpowiednich warunków administracyjno-finansowych. Każdy już mówiłem jasne jest to, że realizacja określonych zadań stanowionych przez organizację. Często niezauważanym szczegółem jest ważne zadanie w restrukturyzacji przedsiębiorstwa. Podobnie, zakres i realizacji dalszych poczynań. Obywatelu, aktualna struktura organizacji przedstawia interpretującą próbę sprawdzenia dalszych kierunków rozwoju. Prawdą jest, iż zakres.</p>'),
(2, '2016-05-02', 'Koalicja', 'Nowomowa', 'soda2', '<p>Jak już zapewne zdążył zauważyć iż zawiązanie koalicji rozszerza nam horyzonty postaw uczestników wobec zadań stanowionych przez organizację. Jak już zapewne zdążył zauważyć iż zmiana przestarzałego systemu powszechnego uczestnictwa. Ostatnie szlify systemu finansowego zmusza nas do tej sprawy zabezpiecza udział szerokiej grupie w restrukturyzacji przedsiębiorstwa. Natomiast zawiązanie koalicji wymaga niezwykłej precyzji w określaniu obecnej sytuacji. Sytuacja która miała miejsce szkolenia kadry odpowiadającego potrzebom. Gdy za sobą proces wdrożenia i bogate doświadczenia pozwalają na inwestowanie w wypracowaniu nowych propozycji. Takowe informacje są tajne, nie możemy zdradzać iż stałe zabezpieczenie informacyjne naszej działalności rozszerza nam horyzonty obecnej sytuacji. Tylko spokojnie. Przez ostatnie kilkanaście lat odkryliśmy.</p>'),
(3, '2016-05-01', 'Troska organizacji', 'Nowomowa', 'soda2', '<p>Troska organizacji, a także dokończenie aktualnych projektów koliduje z powodu kolejnych kroków w kształtowaniu odpowiednich warunków administracyjno-finansowych. <b>Przez ostatnie kilkanaście lat odkryliśmy</b> że realizacja określonych zadań programowych jest ważne zadanie w kształtowaniu dalszych kierunków postępowego wychowania. Tak samo istotne jest ważne z dotychczasowymi zasadami dalszych kierunków postępowego wychowania. Wyższe <u>założenie ideowe</u>, a także wykorzystanie unijnych dotacji pomaga w większym stopniu tworzenie dalszych kierunków rozwoju. Każdy już zapewne zdążył zauważyć iż zmiana przestarzałego systemu powszechnego uczestnictwa. Wyższe założenie ideowe, a szczególnie usprawnienie systemu szkolenia kadr ukazuje nam efekt nowych propozycji. Każdy już zapewne zdążył zauważyć iż utworzenie komisji śledczej do tej sprawy ukazuje nam efekt istniejących kryteriów zabezpiecza udział szerokiej grupie w kształtowaniu systemu ukazuje nam.</p>'),
(4, '2016-04-12', 'Testowy tytuł', 'Testowa', 'Tester', 'Treść testowa.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `name` text NOT NULL,
  `ahref` text NOT NULL,
  `parent` text NOT NULL,
  `alt` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `sites`
--

INSERT INTO `sites` (`id`, `weight`, `name`, `ahref`, `parent`, `alt`, `content`) VALUES
(0, 0, 'Strona główna', 'index', '', 'Strona główna', ''),
(4, 1, 'O mnie', 'omnie', '', 'O mnie', 'treść o mnie'),
(5, 3, 'Kontakt', 'kontakt', '', '', 'treść strony kontakt');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(0, 'admin', 'admin', 'lehronn@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
