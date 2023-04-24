SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `idno` varchar(10) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `course` varchar(25) DEFAULT NULL,
  `level` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `student` (`id`, `idno`, `lastname`, `firstname`, `course`, `level`) VALUES
(1, '0001', 'durano', 'dennis', 'bscpe', '4'),
(2, '0002', 'foxtrot', 'golf', 'bscs', '2'),
(5, '0003', 'india', 'papa', 'bsit', '3'),
(6, '0005', 'quebec', 'sierra', 'bsis', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `dob`   varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `user` (`id`, `fname`,`lname`,`dob`,`email`,`username`,`password`) VALUES
(1, 'Christ Rile', 'Parinasan', '09/13/2001','parinasanrile@mail.com', 'christrile','christ'),
(2, 'Rhyll', 'Neri', '04/20/2001', 'raelneri@mail.com', 'raelestate','rhyll'),
(3, 'Dominic', 'Taboada', '04/20/2002','domstaboada@mail.com', 'domsdoms321','dominic'),
(4, 'Daryll', 'Talaba', '04/20/2000', 'darylltalabal@mail.com', 'daryllbongga321','daryll'),
(5, 'Aldebaran', 'Laway', '09/14/2000', 'aldelaway@mail.com', 'naysay3r', 'bahoaldy'),

ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idno` (`idno`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
 

ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;