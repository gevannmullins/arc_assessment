CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `reset` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

CREATE TABLE IF NOT EXISTS `users_inactive` (
  `verCode` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

CREATE TABLE IF NOT EXISTS `users_logged` (
  `id` int(11) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `users_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- Consumers
CREATE TABLE IF NOT EXISTS `consumer_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `updated` varchar(255) NOT NULL DEFAULT '',
  `deleted` varchar(255) NOT NULL DEFAULT '',
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

INSERT INTO `users` (`username`, `password`, `email`, `date`, ``) VALUES
('admin', '$2y$12$BceelUtGHk7Mb1kvec5m0e1OqmQN435TKLiQzkBW/c/i3BV1vEBwa', 'admin@admin.com', '2019-09-03', 0);

INSERT INTO `consumer_info` (`full_name`, `id_number`, `email_address`, `mobile_number`, `created`, `updated`, `deleted`, `active`) VALUES
('Andrew Hunt', '10016488375', 'andrew@hunt.com', '0781234567', '2018-08-14', '', '0', 1),
('David Thomas', '10016488375', 'david@thomas.com', '0781234567', '2018-08-14', '', '0', 1),
('V. Anton Spraul', '10016488375', 'vanton@spraul.com', '0781234567', '2018-08-14', '', '0', 1),
('Neal Ford', '10016488375', 'neal@ford.com', '0781234567', '2018-08-14', '', '0', 1),
('Rosemary Wallner', '10016488375', 'rosemary@wallner.com', '0781234567', '2018-08-14', '', '0', 1),
('Shelly Nielsen', '10016488375', 'shelly@nielsen.com', '0781234567', '2018-08-14', '', '0', 1),
('Bruce Jackson', '10016488375', 'bruce@jackson.com', '0781234567', '2018-08-14', '', '0', 1),
('Paul Vickers', '10016488375', 'paul@vickers.com', '0781234567', '2018-08-14', '', '0', 1),
('Sorin Cerin', '10016488375', 'sorin@cerin.com', '0781234567', '2018-08-14', '', '0', 1),
('Bahaudin Ghulam Mujtaba', '10016488375', 'bahaudinghulam@mujtaba.com', '0781234567', '2018-08-14', '', '0', 1),
('Sayed Tayeb Jawad', '10016488375', 'sayedtayeb@jawad.com', '0781234567', '2018-08-14', '', '0', 1),
('Erinn Banting', '10016488375', 'erinn@banting.com', '0781234567', '2018-08-14', '', '0', 1),
('Meredith L. Runion', '10016488375', 'meredithl@runion.com', '0781234567', '2018-08-14', '', '1', 1),
('Moira Weigel', '10016488375', 'moira@weigel.com', '0781234567', '2018-08-14', '', '0', 1);
