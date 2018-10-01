
CREATE TABLE `sysparam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groups` varchar(255)  NULL,
  `key` varchar(255)  NULL,
  `value` varchar(255)  NULL,
  `long_value` text,
  `order_param` int(11)  NULL,
  `status` varchar(255) DEFAULT NULL,
  `_created_by` varchar(255) DEFAULT NULL,
  `_updated_by` varchar(255) DEFAULT NULL,
  `_created_time` datetime  NULL,
  `_updated_time` datetime  NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `photo` varchar(255)  NULL,
  `username` varchar(255)  NULL,
  `email` varchar(255)  NULL,
  `normalized_username` varchar(255)  NULL,
  `password` varchar(255)  NULL,
  `birthday` date  NULL,
  `gender` varchar(10)  NULL,
  `address` varchar(255)  NULL,
  `mobile_phone` varchar(255)  NULL,
  `role` varchar(255)  NULL,
  `_created_by` varchar(255) DEFAULT NULL,
  `_updated_by` varchar(255) DEFAULT NULL,
  `_created_time` datetime DEFAULT NULL,
  `_updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `_created_by` varchar(255) DEFAULT NULL,
  `_updated_by` varchar(255) DEFAULT NULL,
  `_created_time` datetime DEFAULT NULL,
  `_updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role_previleges`
--

CREATE TABLE `role_previleges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rule` varchar(255) NOT NULL,
  `_created_by` varchar(255) DEFAULT NULL,
  `_updated_by` varchar(255) DEFAULT NULL,
  `_created_time` datetime DEFAULT NULL,
  `_updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `previleges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(255) DEFAULT NULL,
  `submodule` varchar(255) DEFAULT NULL,
  `ordering` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `_created_by` varchar(255) DEFAULT NULL,
  `_updated_by` varchar(255) DEFAULT NULL,
  `_created_time` datetime DEFAULT NULL,
  `_updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `audit_trail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `method` varchar(50) DEFAULT NULL,
  `data` TEXT DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `_created_by` varchar(255) DEFAULT NULL,
  `_updated_by` varchar(255) DEFAULT NULL,
  `_created_time` datetime DEFAULT NULL,
  `_updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255)  NULL,
  `ktp` varchar(255)  NULL,
  `file2` varchar(255)  NULL,
  `file` varchar(255)  NULL,
  `dropdown` varchar(10)  NULL,
  `select` varchar(10)  NULL,
  `role` varchar(255)  NULL,
  `role2` varchar(255)  NULL,
  `user` varchar(10)  NULL,
  `user1` varchar(10)  NULL,
  `testdate` date  NULL,
  `testdate2` date  NULL,
  `testdate3` date  NULL,
  `testdate4` datetime  NULL,
  `sysparam` varchar(10)  NULL,
  `_created_by` varchar(255) DEFAULT NULL,
  `_updated_by` varchar(255) DEFAULT NULL,
  `_created_time` datetime DEFAULT NULL,
  `_updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
