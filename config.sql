
CREATE DATABASE IF NOT EXISTS `holywind_db_test` ;
USE `holywind_db_test`;

CREATE TABLE IF NOT EXISTS `order` (
  `email` varchar(50) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=625 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `order` (`email`, `user_id`, `id`) VALUES
	('testcreateorder', 94, 1);

CREATE TABLE IF NOT EXISTS `orderline` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `order_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=635 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `orderline` (`id`, `product_id`, `order_id`, `quantity`, `user_id`) VALUES
	(1, 1, 1, 2, 94);

CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `product` (`id`, `name`, `price`, `description`, `quantity`, `img`) VALUES
	(1, 'Cabrinha FX 10m2 2020', 900.00, 'freestyle', '50', 'fx.png'),
	(2, 'Cabrinha drifter 12m2 2020', 950.00, 'freeride', '49', 'drifter.png'),
	(3, 'Cabrinha moto 11m2 2020', 850.00, 'debutant', '48', 'moto.png');

CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=626 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `user` (`id`, `pseudo`, `password`, `email`) VALUES
	(1, 'dcTgRqFaRE', '7jqNWHMuY0', 'TXljPNjXKj@gmail.com'),
	(2, 'qbWUqTlHve', 'dBnPzdUIXa', 'YuKcZTfRPf@gmail.com'),
	(3, 'aa', 'aa', 'aa@gmail.com'),
	(5, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@gmail.com'),
	(6, 'RZCXNYattd', 'j8Etfv7nSt', 'JffHbygSWj@gmail.com'),
	(7, 'FKYiDNxAaU', 's12SJdctAW', 'OnZnNUXbAd@gmail.com'),
	(8, 'xiNDjJDmor', 'pjsxfDINkP', 'zetUWXaeMH@gmail.com'),
	(9, 'kZrsETiXbb', 'v8ZYxzor21', 'aSLgufKOtQ@gmail.com'),
	(10, 'vJWQIQfKQR', 'Uupe6XEubW', 'SrShFsMoIG@gmail.com'),
	(11, 'weySnxtTGk', 'Le6blZvH1d', 'EJiiHIyovF@gmail.com'),
	(12, 'FtVGmKIwjf', '6KJnGSK7PZ', 'xXXWXGRgCG@gmail.com'),
	(13, 'LwTclKzyFY', 'SiINsoQZWt', 'XBzBhWAcLD@gmail.com'),
	(14, 'SrCxIDEGac', '73Q7emkXBz', 'grtskQYPha@gmail.com'),
	(15, 'OXffsmDGju', 'idJavpduIo', 'QxPefJFWcI@gmail.com'),
	(16, 'EFqZRWMxCj', 'Gm9pVgIwNQ', 'ZKsCgOxWww@gmail.com'),
	(17, 'ryqUKJdOWp', '3g4TgRZpZ6', 'LwAShARoJq@gmail.com'),
	(18, 'waoDiwBezp', 'b0hA09EcZn', 'rjBTmlsCjG@gmail.com'),
	(19, 'trSmmjuxhX', 'lQpdFdPmWv', 'rKnisxoyHs@gmail.com'),
	(20, 'JgHUduCZeb', 'IeCwf8VRhG', 'pjjlWpQTwS@gmail.com'),
	(21, 'NRNyYEfRNY', 'YIk4lpBw7O', 'TCQvGKMiCj@gmail.com'),
	(22, 'WviWMQKTyl', 'OF5ynLOOVu', 'acRFKznrVC@gmail.com'),
	(23, 'IsqHvSYcDT', 'W8x4n1ENWg', 'OVwQAMFAgJ@gmail.com'),
	(24, 'xskmeETXqm', 'UdAl5vLnqL', 'pYUGpRFCcX@gmail.com'),
	(25, 'wUVMrdysih', 'loiFl3KSlH', 'ewoWwtpgfZ@gmail.com'),
	(26, 'aItCwYDtEN', 'kiauug2Csi', 'CCuCiPImxi@gmail.com'),
	(27, 'yocgkgbXJj', 'ldXNYFKqpY', 'uupiLLwyVX@gmail.com'),
	(28, 'ELtEesZZOC', 'Vfy7jf84hQ', 'gbtXbxpCfC@gmail.com'),
	(29, 'cMxbgUxaTj', '283AYfeFGJ', 'NHisiqsrPp@gmail.com'),
	(30, 'vEgpjfbkHK', 'dI9txRgaDy', 'efANYsNHnt@gmail.com'),
	(31, 'kdKNrlAGnb', 'dcBp0mlvV8', 'qtJvQrwOJS@gmail.com'),
	(32, 'TELizaYMwk', 'KbOYVCNhzB', 'OZnYyHZYex@gmail.com'),
	(33, 'OOwkJfvrDj', 'AOey5nB5ZW', 'IXmrkqqySW@gmail.com'),
	(34, 'MdaOsSbhqV', 'okeraRf8R3', 'UgAnVjNORK@gmail.com'),
	(35, 'CwhKfBjeIb', 'pmEo4RUs4n', 'qGZfMtdVUc@gmail.com'),
	(36, 'kwIWUtMvTc', 'pjRGCgn23f', 'TdbeNXKyzy@gmail.com'),
	(37, 'waVwomteLW', 'V4R98tdu8r', 'lRwCbjZSfr@gmail.com'),
	(38, 'owbLqBWlgE', 'snsYESgCOC', 'FGCSrxaniD@gmail.com'),
	(39, 'rknLvXNMyw', 'dvMwywleXN', 'OvrfqWWibS@gmail.com'),
	(40, 'UPNQgNiUpR', 'k9JT0RoqQo', 'QpEImlslmz@gmail.com'),
	(41, 'xCHQRxCSMy', 'hskKM2R0tw', 'HfjuCdljlj@gmail.com'),
	(42, 'cYZlBbkMsG', '5XoMrJbb8V', 'jFyJSCDhQr@gmail.com'),
	(43, 'fEsEwmfjvr', 'UWObh4H3dj', 'MeVCZqMmaO@gmail.com'),
	(44, 'jXekOtmhRA', 'C9fOoyXLc0', 'NwdwEgvhPz@gmail.com'),
	(45, 'bLJiTzrBCL', 'vlVO5AkrjH', 'EgYBxayIFk@gmail.com'),
	(46, 'MJpHYMSeqT', '2q1BYqGBN6', 'WIJRLrvDTS@gmail.com'),
	(47, 'DONXOarljD', 'oIGJ7VZ9qW', 'kXvVRkTKST@gmail.com'),
	(48, 'PnefQiLsXE', 'mjoII0cgNe', 'dTZicePZmd@gmail.com'),
	(49, 'SnNIVitqcE', 'wQrPzmo8o4', 'GEWBHUTrhp@gmail.com'),
	(50, 'WSkOuIRngj', 'gzwtO2kcRn', 'xiyRkZcKop@gmail.com'),
	(51, 'nVSAwiGLtx', 'J0NcbN8jU4', 'xQJMhuLwRh@gmail.com'),
	(52, 'mwWGrkGRbO', 'dmBzTUy754', 'nJOIVcCErT@gmail.com'),
	(53, 'UQdiiHbnxm', '1JUhQgNSqq', 'vHyBRTYiII@gmail.com'),
	(54, 'EEGxcHxWJx', 'INVXFq4gLx', 'wAEKLKlOmf@gmail.com'),
	(55, 'tddunxyhIH', 'pSQ8bEt04Y', 'JezgwPPYli@gmail.com'),
	(56, 'NmpzOxLorv', 'DDvbNInoOw', 'ZZUBrcMSKH@gmail.com'),
	(57, 'BgPGSlLbGD', 'LPUWpwrdNu', 'VzDKzlYssl@gmail.com'),
	(58, 'HMNpLStMmK', 'RuPYTbvk3q', 'aKboKDvNDx@gmail.com'),
	(582, 'cbKbDRQduC', 'N2NAhNsC7C', 'NmgiOXLDHJ@gmail.com'),
	(583, 'JsmlpLkmVJ', 'l4gDpJ921x', 'bWDhSGGSyG@gmail.com'),
	(598, 'YnVZFCkEJh', 'XEiL0kCXuX', 'NHMDZFoGaQ@gmail.com'),
	(599, 'EUMwofsmcv', 'X1gpaSXXQA', 'xjOidMGRXk@gmail.com'),
	(600, 'yxMTflCnDb', 'pkScIDQ25k', 'cMZYmvLeIE@gmail.com'),
	(601, 'KugpqjrEav', 'aN3m13uVIB', 'mTqzLenIhJ@gmail.com'),
	(602, 'tOBGtStkMJ', 'QwHB7DR5B1', 'tCNostIDhe@gmail.com'),
	(604, 'MTZtZFIdtH', 'x3nBpgtA04', 'yhATpwetfA@gmail.com'),
	(605, 'tmmWTbnglg', 'keWcINQhbJ', 'mWHCdDROnM@gmail.com'),
	(606, 'PfvzpYiMrL', 'QsklqoEtWt', 'brPEJscixP@gmail.com'),
	(616, 'zoLnRFXUJc', 'cGE7rVX467', 'PYJuJFLRMN@gmail.com'),
	(617, 'yVcEdgqUYj', '77y76YrYfQ', 'gozCNRlddy@gmail.com'),
	(618, 'MQyFfuSSde', 'JNXSP3HVlT', 'zVCkdEgAGf@gmail.com'),
	(619, 'TmJXfeZhhn', '9pg0938FTO', 'gDHqBxtDrK@gmail.com'),
	(620, 'mTojrPNOst', 'sas9Bj6zmo', 'OISBzDjTFF@gmail.com'),
	(621, 'iPQzLJQXbz', 'QQROrTSRdB', 'MpTGodUGWY@gmail.com'),
	(622, 'zIqoyqCwLC', 'eRCmTtqxVQ', 'HgqWHFszqb@gmail.com'),
	(623, 'fro', 'a924a6bad2bca34c9fa59916cdca897b0c9433ba', 'fro@gmail.com'),
	(624, 'yjmpduEhGF', 'yRXz4N9CC5', 'jVzNFJobam@gmail.com'),
	(625, 'Ixe', '1HqRIt63Uz', 'HtmXozVcyT@gmail.com');
