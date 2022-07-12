-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 23, 2022 la 11:13 PM
-- Versiune server: 10.4.22-MariaDB
-- Versiune PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `summer_school`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Admin` char(20) NOT NULL,
  `Parola` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `admin`
--

INSERT INTO `admin` (`ID`, `Admin`, `Parola`) VALUES
(1, 'admin', 'parola');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `calendar`
--

CREATE TABLE `calendar` (
  `ID` int(11) NOT NULL,
  `DataInceput` char(10) NOT NULL,
  `DataFinal` char(10) NOT NULL,
  `ZiInceput` char(10) NOT NULL,
  `ZiFinal` char(10) NOT NULL,
  `OraInceput` char(10) NOT NULL,
  `OraFinal` char(10) NOT NULL,
  `Curs` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `calendar`
--

INSERT INTO `calendar` (`ID`, `DataInceput`, `DataFinal`, `ZiInceput`, `ZiFinal`, `OraInceput`, `OraFinal`, `Curs`) VALUES
(1, '2022-06-27', '2022-07-15', 'Luni', 'Vineri', '10:00', '14:00', 'Data Science with Python'),
(2, '2022-06-20', '2022-07-08', 'Luni', 'Joi', '09:00', '15:00', 'Programare in Java'),
(3, '2022-06-27', '2022-07-17', 'Miercuri', 'Vineri', '12:00', '16:00', 'B.D.M. and Analysis in the Linux Enviroment'),
(4, '2022-07-11', '2022-07-08', 'Marti', 'Vineri', '10:30', '15:00', 'Machine Learning'),
(5, '2022-07-04', '2022-07-29', 'Luni', 'Vineri', '09:00', '12:00', 'Tehnologii Web'),
(6, '2022-07-04', '2022-07-22', 'Marti', 'Joi', '10:00', '14:00', 'Engleza pentru programare');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cursuri`
--

CREATE TABLE `cursuri` (
  `ID` int(10) NOT NULL,
  `DenumireCurs` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `cursuri`
--

INSERT INTO `cursuri` (`ID`, `DenumireCurs`) VALUES
(1, 'Data Science with Python'),
(2, 'Programare in Java'),
(3, 'Big Data Management and Analysis in the Linux Environment'),
(4, 'Machine Learning'),
(5, 'Tehnologii Web'),
(6, 'Engleza pentru programare');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `noutati`
--

CREATE TABLE `noutati` (
  `ID` int(10) NOT NULL,
  `Descriere` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `noutati`
--

INSERT INTO `noutati` (`ID`, `Descriere`) VALUES
(1, 'Trainer nou! Un nou trainer s-a alaturat echipei! Savulescu Maria, profesoara de engleza!'),
(2, 'Aqua Park! Vara acesta, in cadrul Scolii noatre, se va deschide un Aqua Park, unde elevii se pot relaxa in zilele calduroase.');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `organizatori`
--

CREATE TABLE `organizatori` (
  `ID` int(10) NOT NULL,
  `Nume` char(40) NOT NULL,
  `Prenume` char(40) NOT NULL,
  `Email` char(40) DEFAULT NULL,
  `Telefon` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `organizatori`
--

INSERT INTO `organizatori` (`ID`, `Nume`, `Prenume`, `Email`, `Telefon`) VALUES
(1, 'Curteanu', 'Gabriel', 'curteanu.gabriel.q9y@student.ucv.ro', '0726797283'),
(2, 'Gabroveanu', 'Mihai', 'mihaiug@central.ucv.ro', '0251413728'),
(3, 'Vultureanu - Albisi', 'Alexandra', 'albisi.alexandra@yahoo.com', '0765221434');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Nume` char(50) NOT NULL,
  `Prenume` char(50) NOT NULL,
  `Curs` char(150) NOT NULL,
  `Email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `student`
--

INSERT INTO `student` (`ID`, `Nume`, `Prenume`, `Curs`, `Email`) VALUES
(18, 'Curteanu', 'Gabriel', 'Tehnologii Web', 'gabicurteanu100@gmail.com'),
(19, 'Ivan', 'Mihaela', 'Data Science with Python', 'mihaivv12@yahoo.com');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `traineri`
--

CREATE TABLE `traineri` (
  `ID` int(10) NOT NULL,
  `Nume` char(40) NOT NULL,
  `Prenume` char(40) NOT NULL,
  `Email` char(40) DEFAULT NULL,
  `Telefon` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `traineri`
--

INSERT INTO `traineri` (`ID`, `Nume`, `Prenume`, `Email`, `Telefon`) VALUES
(1, 'Tudor', 'Irina', 'tudor.iris@gmail.com', '0255513727'),
(2, 'Popirlan', 'Claudiu - Ionut', 'popirlan@gmail.com', '0254457728'),
(3, 'Stancu', 'Mihai', 'mihaissss@yahoo.com', '051416575/4102'),
(4, 'Stoean', 'Ruxandra', 'rstoean@inf.ucv.ro', '0256613729'),
(5, 'Gabroveanu', 'Mihai', 'mihaiug@central.ucv.ro', '0251413728'),
(6, 'Savulescu', 'Maria', 'mariasavu@inf.ucv.ro', '0251466543');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `cursuri`
--
ALTER TABLE `cursuri`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `noutati`
--
ALTER TABLE `noutati`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `organizatori`
--
ALTER TABLE `organizatori`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `traineri`
--
ALTER TABLE `traineri`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `calendar`
--
ALTER TABLE `calendar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `cursuri`
--
ALTER TABLE `cursuri`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pentru tabele `noutati`
--
ALTER TABLE `noutati`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `organizatori`
--
ALTER TABLE `organizatori`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pentru tabele `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pentru tabele `traineri`
--
ALTER TABLE `traineri`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
