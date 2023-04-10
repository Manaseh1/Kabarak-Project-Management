-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 04:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `stud_reg_no` varchar(100) NOT NULL,
  `approval` varchar(100) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `stud_reg_no`, `approval`, `comments`) VALUES
(6, 'inte/mg/2277/05/18', 'on', '123'),
(7, 'inte/mg/2277/05/18', 'on', 'You have done good keep it up'),
(8, 'inte/mg/2277/05/18', 'Approved', 'You may go forth'),
(9, 'CS/MG/145/09/20', 'Approved', 'I like that you are doing good work continue with the same spirit'),
(10, 'group-hs/MG/001/09/20', 'Approved', 'Continue with the same'),
(11, 'group-hs/MG/001/09/20', 'on', 'Halleluhya praise the one who set me free'),
(12, 'CS/MG/0873/09/20', 'Approved', 'Good morning Mr Kipkerich continue with the same spirit'),
(13, 'group-hs/MG/001/09/20', 'Disapproved', 'Hello you have not followed the right guidelines please redo this papaer'),
(14, 'CS/MG/111/09/20', 'Approved', 'You have done a good job on your concept paper keep up the good job'),
(15, 'inte/mg/2277/05/18', 'Disapproved', 'This project has been done before'),
(16, 'group4-CS/MG/0696/09/20', 'Approved', 'Good job on the concept paper');

-- --------------------------------------------------------

--
-- Table structure for table `project_progress`
--

CREATE TABLE `project_progress` (
  `id` int(11) NOT NULL,
  `step` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `stud_name` varchar(100) NOT NULL,
  `stud_reg_no` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_progress`
--

INSERT INTO `project_progress` (`id`, `step`, `file_path`, `stud_name`, `stud_reg_no`, `Date`) VALUES
(1, '1', 'uploads/6427e3bfb673f3.07098068.pdf', 'vincent bett', 'inte/mg/2277/05/18', '2023-04-01 07:56:47'),
(2, '1', 'uploads/6427fe0fbdd006.63980670.png', 'Naruto', 'CS/MG/145/09/20', '2023-04-01 09:49:03'),
(3, '5', 'uploads/6428b7bc764b95.42861099.png', 'vincent bett', 'inte/mg/2277/05/18', '2023-04-01 23:01:16'),
(4, '1', 'uploads/642979af1060e3.57590515.pdf', 'Kipkerich', 'CS/MG/0873/09/20', '2023-04-02 12:48:47'),
(5, '2', 'uploads/64297a72174342.93587443.pdf', 'Kipkerich', 'CS/MG/0873/09/20', '2023-04-02 12:52:02'),
(6, '1', 'uploads/642a60f33a3116.73126582.docx', 'Rosebell', 'CS/MG/111/09/20', '2023-04-03 05:15:31'),
(7, '1', 'uploads/642bed4cf01044.74024129.docx', 'Njoroge Robert', 'CS/MG/0694/02/20', '2023-04-04 09:27:00'),
(8, '1', 'uploads/642bed7fdca191.92167125.pdf', 'Njoroge Robert', 'CS/MG/0694/02/20', '2023-04-04 09:27:27'),
(9, '1', 'uploads/642bed80dc6454.69071871.pdf', 'Njoroge Robert', 'CS/MG/0694/02/20', '2023-04-04 09:27:28'),
(10, '2', 'uploads/642bed959732e6.87489841.pdf', 'Njoroge Robert', 'CS/MG/0694/02/20', '2023-04-04 09:27:49'),
(11, '1', 'uploads/642bee0e802503.85823487.pdf', 'Njoroge Robert', 'CS/MG/0694/02/20', '2023-04-04 09:29:50'),
(12, '1', 'uploads/642bee5b516499.99965183.pdf', 'Njoroge Robert', 'CS/MG/0694/02/20', '2023-04-04 09:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `project_title`
--

CREATE TABLE `project_title` (
  `id` int(11) NOT NULL,
  `stud_reg_no` varchar(100) NOT NULL,
  `project-title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team_project_progress`
--

CREATE TABLE `team_project_progress` (
  `id` int(11) NOT NULL,
  `step` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `group_id` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_project_progress`
--

INSERT INTO `team_project_progress` (`id`, `step`, `file_path`, `group_name`, `group_id`, `date`) VALUES
(1, '1', 'uploads/6429d4b3142392.68010413.docx', 'Group1', 'group-hs/MG/001/09/20', '2023-04-02 19:17:07'),
(2, '3', 'uploads/642a6060446a40.87584631.docx', 'Group2', 'group3-CS/MG/0866/09/20', '2023-04-03 05:13:04'),
(3, '1', 'uploads/642bf43ac5ee11.23102499.pdf', 'Group3', 'CS/MG/112/09/20', '2023-04-04 09:56:12'),
(4, '1', 'uploads/642bf75c6e51c1.56800996.pdf', 'Group4', 'group4-CS/MG/0696/09/20', '2023-04-04 10:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `role` enum('lecturer','student','group','') NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `reg_no`, `user_email`, `role`, `password`) VALUES
(1, 'Manaseh ', 'stud-CS/MG/0696/09/20', 'manasehnjoroge7@gmail.com', 'student', '$2y$10$/0OQCvqL8U/N9lXJaqr'),
(2, 'Manaseh ', 'lec-CS/MG/0696/09/20', 'hello@gmail.com', 'lecturer', '$2y$10$O.Ef3iJBApKQ0/VX63n'),
(3, 'Denarius', 'group-hs/MG/0696/09/20', 'denarius@gmail.com', 'student', '$2y$10$xqoZEMiX6OkRxObvzh7'),
(4, 'Kelvin', 'stud-CS/MG/123/09/20', 'kelvin@gmail.com', 'student', '$2y$10$oHYmDBxGPgORcyJOYyy'),
(5, 'DR.Ndirangu', 'lec-CS/MG/216/09/20', 'dirag@gmail.com', 'lecturer', '$2y$10$qj5EXX3AV0Ra0OHR2i/'),
(6, 'Cretin', 'stud-CS/MG/0686/09/20', 'cretin@gmail.com', 'group', '$2y$10$LOPH4ltgPYFfI4hQksZ'),
(7, 'data', 'data', 'data@gmail.com', 'student', 'data'),
(8, 'aaa', 'aaaa', 'a@gmail.com', 'lecturer', '$2y$10$UbImoNa5FctQKt3YxA/RCeYzONP53JmRFHTBqpA7uT0Vzc1uxrkwK'),
(9, 'shas', 'shas', 'shas@gmail.com', 'group', 'shas123'),
(10, 'vincent bett', 'inte/mg/2277/05/18', 'vincent@gmail.com', 'student', '$2y$10$qOKmI7JbckScB3h04BAou.cjGOMSAFHNxV2dAhLzBVIxgsy4VT4ge'),
(11, 'Bonney', 'EDA/MG/2426/09/19', 'bonney@gmail.com', 'student', '$2y$10$QHf2Bio4gj2OSZQAOEBSAOT47HVRejhln5XEj5pgrOxUNGQaKiRPu'),
(12, 'Wajackoyah', 'FG/MG/0696/09/20', 'wajacks@gmail.com', 'student', '$2y$10$TEmiA2Z2yBM/pYbxJnTtyOkdtS/UJ.Eb2ZgyX3IuSzBfDVfmZfYsW'),
(13, 'nelly', 'CS/MG/0612/09/22', 'nelly@gmail.com', 'student', '$2y$10$JKfn265a92moYEaGp2AjT.3h6HixyPV2QCQzFzJ67vUetbhJZSRCa'),
(14, 'Wajackoh', 'CS/MG/001/09/20', 'sharonjaw@gmail.com', 'student', '$2y$10$no6CBMPM3Wkc4ObZB3Rc4eeYJz6/GcI.ixiHYsqNmSipEqoRO6sa2'),
(15, 'Lorraine Wambiru', 'CS/MG/686/09/20', 'Lorraine@gmail.com', 'student', '$2y$10$MDfqqiHQrNQcBVZktLwjBuz3tVAzDXLhXFJ.g7Y/CO/yp8LRYLMXS'),
(16, 'khalid', 'CS/MG/045/09/20', 'khalid@gmail.com', 'student', '$2y$10$muVjcqgkAla8tGDciC7mg.xf9VonTY0J9/ywSbnIckzGwkWJIBgIy'),
(17, 'Kent', 'CS/MG/002/09/20', 'kent@gmail.com', 'student', '$2y$10$YXsr.8Rm5OgM/5H1xvt8mOF46A5sL29Znzcwh2sDbhhTtLwlTSay.'),
(18, 'student_project', 'stud-CS/MG/023/09/20', 'stud@gmail.com', 'student', '$2y$10$sLgGSAD/RZeTdDTBdzf3x.UYuUUGuUa4G7AhYpP9diIZJn6RPCjH2'),
(19, 'Jacob', 'CS/MG/0872/09/20', 'kipkerich@gmail.com', 'student', '$2y$10$W5QYpH.3epDsxxJBQRKT1.eisb37g/Me07pEcfZAh8Sas2uf3Y5OS'),
(20, 'Naruto', 'CS/MG/145/09/20', 'naruto@gmail.com', 'student', '$2y$10$2JxQqYwWGKdmtAnQzncA3umwEysxhe/vVs6qALN4SZ/AmWGMzvhZC'),
(21, 'luckygold', 'lec/MG/0966/09/20', 'star@gmail.com', 'lecturer', '$2y$10$CmfRA/Q7PBA/m93UigkUKOUmOJMpMjMCHo2qQswzzMhQGN1P4o/Gy'),
(22, 'Group1', 'group-hs/MG/001/09/20', 'enamel@gmail.com', 'group', '$2y$10$XCvwQYSwBHmpmzxchjIW1O6fUBr8C02CW9Q9UeMKEb36gu32cRexi'),
(23, 'Kellen', 'CS/MG/001/08/20', 'kellen@gmail.com', 'student', '$2y$10$yW/zMOc99FmEG/d0DEbCW.HZbZeD1C7BZsvnR5U.do/mtucctu2KS'),
(24, 'Kipkerich', 'CS/MG/0873/09/20', 'jkipkerich@kabarak.ac.ke', 'student', '$2y$10$/mq/3UsXv9mubFxh77v1zeSh4inqJbDJ.4u/mAge8NKkRW/slg3TC'),
(25, 'Njoroge Kiriamiti', 'Lec-LC/MG/0610/09/20', 'njoro@gmail.com', 'lecturer', '$2y$10$zjl83n99y/r73mtVkWk1UO5eup6Xo2Ljd9G7BVmkUZAnpBALoBKhW'),
(26, 'Group2', 'group3-CS/MG/0866/09/20', 'health@gmail.com', 'group', '$2y$10$muVVc9QxNLwpneaL0N6xyO3a9DMhCDr9KmthpIVKT.6ht1vl2CO7.'),
(27, 'Rosebell', 'CS/MG/111/09/20', 'rose@gmail.com', 'student', '$2y$10$vEW2iv0iadG/fSuDusjBk.nvIp0QUrYyHLERytTh6yDUENvsyN9Su'),
(28, 'John Doe', 'CS/MG/122/09/20', 'johndoe@gmail.com', 'lecturer', '$2y$10$dGdbH.F1lj193ISgkvlsWuS/pGEv9ByFiEp8x0190F61.VNOYmDCC'),
(29, 'Ilambo', 'lec-CS/mg/0898/09/20', 'ilambo@gmail.com', 'lecturer', '$2y$10$0SzhlJB9P8c7soI5e9FP1OTkOz3uc7TbfADR9j08diTTGtZvxYDIq'),
(30, 'Gideonn', 'CS/MG/0691/02/20', 'manasehnjoroge9@gmail.com', 'student', '$2y$10$cQMArqHsygjOvI6cfTY3VOeiZO3oA3xKoyhUbImbtkrjE9nR2UU0a'),
(31, 'Njoroge Robert', 'CS/MG/0694/02/20', 'njoroge@gmail.com', 'student', '$2y$10$YcK2YlE5C4yzn0Z35UuPdufxQZr1SrUiQecbuh1SfE7u6DzUFkebq'),
(32, 'Group3', 'CS/MG/112/09/20', 'group3@gmail.com', 'group', '$2y$10$QglZJgmUFVPxS2RBS85szu7O9B5YX.f0Bws8WW7wPgDbkhJf3Avie'),
(33, 'Group4', 'group4-CS/MG/0696/09/20', 'group4@gmail.com', 'group', '$2y$10$s93PjmCrjTQGV9oamI8RlORP1Wsqp0y0rMbJqgUrxqb/D5pKHqU9q'),
(34, 'Denarius', 'CS/MG/0689/09/20', 'manasehnjoroge89@gmail.com', 'lecturer', '$2y$10$l1sQLXgI9xAKXc6wB15V4egsPUHt6gMr7msbMrgSo9uVEQraB8mou');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_progress`
--
ALTER TABLE `project_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_title`
--
ALTER TABLE `project_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_project_progress`
--
ALTER TABLE `team_project_progress`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `project_progress`
--
ALTER TABLE `project_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project_title`
--
ALTER TABLE `project_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_project_progress`
--
ALTER TABLE `team_project_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
