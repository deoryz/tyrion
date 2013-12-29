<?php

class m131209_062851_first_table extends CDbMigration
{
	public function up()
	{



		// buat tabel AuthAssignment
		$this->execute("DROP TABLE IF EXISTS `AuthAssignment`;");
		$this->execute('
			CREATE TABLE IF NOT EXISTS `AuthAssignment` (
			  `itemname` varchar(64) NOT NULL,
			  `userid` varchar(64) NOT NULL,
			  `bizrule` text,
			  `data` text,
			  PRIMARY KEY (`itemname`,`userid`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;
		');	

		// buat tabel AuthItem
		$this->execute("DROP TABLE IF EXISTS `AuthItem`;");
		$this->execute('
			CREATE TABLE IF NOT EXISTS `AuthItem` (
			  `name` varchar(64) NOT NULL,
			  `type` int(11) NOT NULL,
			  `description` text,
			  `bizrule` text,
			  `data` text,
			  PRIMARY KEY (`name`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;
		');	

		// buat tabel AuthItemChild
		$this->execute("DROP TABLE IF EXISTS `AuthItemChild`;");
		$this->execute('
			CREATE TABLE IF NOT EXISTS `AuthItemChild` (
			  `parent` varchar(64) NOT NULL,
			  `child` varchar(64) NOT NULL,
			  PRIMARY KEY (`parent`,`child`),
			  KEY `child` (`child`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;
		');	

		// buat tabel log
		$this->execute("DROP TABLE IF EXISTS `log`;");
		$this->execute('
			CREATE TABLE `log` (
				`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
				`user_id` INT NOT NULL, 
				`desc` TEXT NOT NULL, 
				`before` TEXT NOT NULL, 
				`after` TEXT NOT NULL, 
				`time` TIMESTAMP NOT NULL
			) ENGINE = InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;			
		');	

		// buat tabel user
		$this->execute("DROP TABLE IF EXISTS `user`;");
		$this->execute('
			CREATE TABLE IF NOT EXISTS `user` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `group_id` int NOT NULL,
			  `user` varchar(100) NOT NULL,
			  `email` varchar(100) NOT NULL,
			  `pass` varchar(100) NOT NULL,
			  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			  `sts` int(11) NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
		');	
		// dump tabel user
		$this->execute("
			INSERT INTO `user` (`id`, `user`, `group_id`, `email`, `pass`, `last_login`, `sts`) VALUES
			(1, 'root', 1, 'deo@markdesign.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0000-00-00 00:00:00', 1),
			(2, 'admin', 1, 'deoryzpandu@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0000-00-00 00:00:00', 1);
		");	

		// buat tabel user_group
		$this->execute("DROP TABLE IF EXISTS `user_group`;");
		$this->execute('
			CREATE TABLE IF NOT EXISTS `user_group` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `name` varchar(100) NOT NULL,
			  `label` varchar(100) NOT NULL,
			  `date_update` TIMESTAMP NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;
		');	
		// dump tabel user_group
		$this->execute("
			INSERT INTO `user_group` (`id`, `name`, `label`, `date_update`) VALUES
			(1, 'administrator', 'Administrator', NOW());
		");	

		// buat tabel setting
		$this->execute("DROP TABLE IF EXISTS `setting`;");
		$this->execute("
			CREATE TABLE IF NOT EXISTS `setting` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `name` varchar(256) NOT NULL,
			  `value` text NOT NULL,
			  `type` varchar(100) NOT NULL,
			  `hide` int(11) NOT NULL,
			  `group` varchar(100) NOT NULL,
			  `dual_language` enum('n','y') NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		");	
		$this->execute("
			INSERT INTO `setting` (`id`, `name`, `value`, `type`, `hide`, `group`, `dual_language`) VALUES
			(NULL, 'title', '', 'text', 0, 'setting', 'y'),
			(NULL, 'keywords', '', 'text', 0, 'setting', 'y'),
			(NULL, 'description', '', 'textarea', 0, 'setting', 'y'),
			(NULL, 'email', '', 'text', 0, 'setting', 'n'),
			(NULL, 'address1', '', 'textarea', 0, 'setting', 'n'),
			(NULL, 'phone', '', 'text', 0, 'setting', 'n'),
			(NULL, 'fax', '', 'text', 0, 'setting', 'n'),
			(NULL, 'facebook', 'http://www.facebook.com/', 'text', 1, 'setting', 'n'),
			(NULL, 'twitter', 'http://www.twitter.com/', 'text', 1, 'setting', 'n');
		");

		// buat tabel setting_description
		$this->execute("DROP TABLE IF EXISTS `setting_description`;");
		$this->execute("
			CREATE TABLE IF NOT EXISTS `setting_description` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `setting_id` int(11) NOT NULL,
			  `language_id` int(11) NOT NULL,
			  `value` text NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		");	

	}

	public function down()
	{
		echo "m131118_062851_first_table does not support migration down.\n";
		return false;
	}

}