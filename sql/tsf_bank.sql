SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Arpan Seal', 'arpanseal1234@gmail.com', 99999999),
(2, 'Ayan Deb', 'ayan@gmail.com', 50000),
(3, 'Bikash Sen', 'bik@gmail.com', 30000),
(4, 'Shouvik Samadder', 'samadder@gmail.com', 40000),
(5, 'Ishani Seal', 'seal@gmail.com', 50000),
(6, 'Manish Shee', 'mshee@gmail.com', 40000),
(7, 'Shirshak Banerjee', 'banerjee@gmail.com', 30000),
(8, 'Anay Panja', 'panja@gmail.com', 50000),
(9, 'Anirban Biswas', 'biswas@gmail.com', 40000),
(10, 'Bhaskar Panja', 'timon@gmail.com', 30000),
(11, 'Rohit Biswas', 'tubai@gmail.com', 50000);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;
