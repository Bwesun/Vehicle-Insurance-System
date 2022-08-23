CREATE TABLE `admin` (
  `id` int(3) NOT NULL auto_increment,
  `username` varchar(15) NOT NULL,
  `password` varchar(14) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`id`, `username`, `password`) VALUES 
(1, 'admin', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `claim`
-- 

CREATE TABLE `claim` (
  `id` int(4) NOT NULL auto_increment,
  `fullname` varchar(20) NOT NULL,
  `occupation` varchar(15) NOT NULL,
  `address` varchar(15) NOT NULL,
  `d_name` varchar(15) NOT NULL,
  `d_occupation` varchar(15) NOT NULL,
  `d_dob` varchar(15) NOT NULL,
  `d_address` varchar(500) NOT NULL,
  `d_license_no` varchar(15) NOT NULL,
  `d_license_exp` varchar(15) NOT NULL,
  `v_regnum` varchar(15) NOT NULL,
  `v_make` varchar(15) NOT NULL,
  `v_sitting_capacity` varchar(3) NOT NULL,
  `v_ownership` varchar(15) NOT NULL,
  `v_cover_provided` varchar(15) NOT NULL,
  `vehicle_use` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `claim`
-- 

INSERT INTO `claim` (`id`, `fullname`, `occupation`, `address`, `d_name`, `d_occupation`, `d_dob`, `d_address`, `d_license_no`, `d_license_exp`, `v_regnum`, `v_make`, `v_sitting_capacity`, `v_ownership`, `v_cover_provided`, `vehicle_use`) VALUES 
(1, 'Matur Innocent Joshu', 'Student', 'Address Address', 'Joshua Selman', 'Civil servant', '2020-02-03', 'Address Address Address Address ', '4191', '15th May, 2021', '777727', 'Toyota', '14', 'Self', 'Nil', 'Trading');

-- --------------------------------------------------------

-- 
-- Table structure for table `policy`
-- 

CREATE TABLE `policy` (
  `id` int(3) NOT NULL auto_increment,
  `trans_id` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_id` int(4) NOT NULL,
  `duration` varchar(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ref_id` varchar(10) NOT NULL,
  `vehicle_regnum` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `policy`
-- 

INSERT INTO `policy` (`id`, `trans_id`, `name`, `email`, `user_id`, `duration`, `status`, `ref_id`, `vehicle_regnum`) VALUES 
(1, '9688656', 'Akpah Emmanuel', 'blessing@gmail.com', 1, '4', 'Approved', '6113753', '688968698'),
(2, '865658', 'Stephen Bukar Msheli', 'altukry@gmail.com', 1, '6', 'pending', '5442320', '091239833312'),
(3, '9688656', 'Stephen Bukar Msheli', 'step@gmail.com', 1, '3', 'Approved', '0680943', '091239833312');

-- --------------------------------------------------------

-- 
-- Table structure for table `proposal`
-- 

CREATE TABLE `proposal` (
  `id` int(3) NOT NULL auto_increment,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `occupation` varchar(15) NOT NULL,
  `address` varchar(500) NOT NULL,
  `make` varchar(15) NOT NULL,
  `model` varchar(14) NOT NULL,
  `capacity` varchar(3) NOT NULL,
  `no_of_seat` varchar(3) NOT NULL,
  `value` varchar(9) NOT NULL,
  `use_of_vehicle` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `proposal`
-- 

INSERT INTO `proposal` (`id`, `firstname`, `lastname`, `occupation`, `address`, `make`, `model`, `capacity`, `no_of_seat`, `value`, `use_of_vehicle`, `email`, `user_id`) VALUES 
(1, 'Innocent', 'Matur', 'Student', 'Jushi waje, near gidan sarkin noma', 'Toyota', 'Sienna LE', '8', '8', '2,000,000', 'Trading', 'maturinnocent@gmail.com', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(4) NOT NULL auto_increment,
  `fullname` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `occupation` varchar(15) NOT NULL,
  `address` varchar(500) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `fullname`, `phone`, `email`, `occupation`, `address`, `username`, `password`) VALUES 
(1, 'Matur Innocent Joshua', '08144529253', 'maturinnocent@gmail.com', 'Student', 'jushi waje', 'Innocent', '1111');
