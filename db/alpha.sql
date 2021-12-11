CREATE DATABASE alpha;
USE alpha;

CREATE TABLE `llaves` (
  `Id` int(11) NOT NULL,
  `captcha` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `llaves` (`Id`, `captcha`) VALUES
(1, '678080');


CREATE TABLE `users` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`firstname`, `middlename`, `lastname`, `birthdate`, `username`, `password`) VALUES
('Vanesa', 'Asdasd', 'Usuario', '2001-01-01', 'vanesa', '21a6cafaf0e9b0080692d699c1538d0dfa42b47a'),
('wil', 'wilasd', 'wilasd', '2000-01-01', 'wil', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

ALTER TABLE `llaves`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

ALTER TABLE `llaves`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;