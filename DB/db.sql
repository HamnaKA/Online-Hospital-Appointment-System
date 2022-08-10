/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.12-log : Database - db_hospitalapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_hospitalapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `tb_booking` */

DROP TABLE IF EXISTS `tb_booking`;

CREATE TABLE `tb_booking` (
  `b_id` int(30) NOT NULL AUTO_INCREMENT,
  `p_id` int(40) DEFAULT NULL,
  `d_id` int(40) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `app_no` varchar(40) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_booking` */

insert  into `tb_booking`(`b_id`,`p_id`,`d_id`,`date`,`time`,`app_no`,`status`) values (1,1,0,NULL,'00:20:19',NULL,'please wait'),(2,1,0,NULL,'00:20:19',NULL,'please wait'),(3,1,0,'2019-09-22',NULL,NULL,'please wait'),(4,1,0,'2019-09-24',NULL,NULL,'please wait'),(5,1,1,'2019-09-21','11:15:00','kari123','accepted'),(6,1,3,'2019-09-24',NULL,NULL,'please wait'),(7,1,1,'2019-09-29','12:30:00','kar124','accepted');

/*Table structure for table `tb_doctor` */

DROP TABLE IF EXISTS `tb_doctor`;

CREATE TABLE `tb_doctor` (
  `d_id` int(30) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `quali` varchar(30) DEFAULT NULL,
  `depart` varchar(30) DEFAULT NULL,
  `lice_id` varchar(30) DEFAULT NULL,
  `h_id` int(30) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `holiday` varchar(30) DEFAULT NULL,
  `stime` time DEFAULT NULL,
  `etime` time DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_doctor` */

insert  into `tb_doctor`(`d_id`,`fname`,`lname`,`gender`,`quali`,`depart`,`lice_id`,`h_id`,`location`,`holiday`,`stime`,`etime`,`phone`,`username`) values (1,'aneej','V','male','msc','cardiology','aneej123',1,'kochi','Wednesday','09:00:00','17:00:00','9633507770','ani@gmail.com'),(2,'manu','m','male','msc','cardiology','manu123',1,'kaloor','Friday','10:00:00','18:00:00','9633507770','manu@gmail.com'),(3,'aby','vargese','male','msc','ortho','aby123',1,'kaloor','Thursday','11:00:00','19:00:00','8606784596','aby@gmail.com'),(4,'Nihal','k.a','male','mbbs','nefrology','fdef12',4,'kodungallur','Friday','00:00:00','12:00:00','9567896364','hamna123ammu@gmail.com'),(5,'henna','ka','female','mbbs','ENT','aby123',4,'kodungallur','Tuesday','00:59:00','22:01:00','4567890','hamna456ammu@gmail.com');

/*Table structure for table `tb_feedback` */

DROP TABLE IF EXISTS `tb_feedback`;

CREATE TABLE `tb_feedback` (
  `f_id` int(30) NOT NULL AUTO_INCREMENT,
  `p_id` int(40) DEFAULT NULL,
  `feedback` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_feedback` */

insert  into `tb_feedback`(`f_id`,`p_id`,`feedback`) values (1,1,'ghgjg');

/*Table structure for table `tb_hospital` */

DROP TABLE IF EXISTS `tb_hospital`;

CREATE TABLE `tb_hospital` (
  `h_id` int(30) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_hospital` */

insert  into `tb_hospital`(`h_id`,`h_name`) values (1,'Little Flower'),(2,'ESI'),(3,'medicity'),(4,'medicare');

/*Table structure for table `tb_login` */

DROP TABLE IF EXISTS `tb_login`;

CREATE TABLE `tb_login` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `usertype` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_login` */

insert  into `tb_login`(`id`,`username`,`password`,`usertype`) values (1,'admin@gmail.com','admin','admin'),(2,'ani@gmail.com','ani','doctor'),(3,'kari@gmail.com','kari','patient'),(4,'shilpa@gmail.com','shilpa','patient'),(5,'manu@gmail.com','manu','doctor'),(6,'aby@gmail.com','aby','doctor'),(7,'hamna123ammu@gmail.com','hamnammu','doctor'),(8,'hamn11a123ammu@gmail.com','hamnaammu','patient'),(9,'hamna456ammu@gmail.com','hamna','doctor');

/*Table structure for table `tb_medicine` */

DROP TABLE IF EXISTS `tb_medicine`;

CREATE TABLE `tb_medicine` (
  `m_id` int(30) NOT NULL AUTO_INCREMENT,
  `d_id` int(40) DEFAULT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `m_des` varchar(50) DEFAULT NULL,
  `m_rate` int(50) DEFAULT NULL,
  `m_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_medicine` */

insert  into `tb_medicine`(`m_id`,`d_id`,`m_name`,`m_des`,`m_rate`,`m_img`) values (1,1,'trymol','img/Doc1.docx',100,'img/164621135-pencil-wallpapers.jpg'),(2,1,'dolo','img/Doc1.docx',50,'img/164621135-pencil-wallpapers.jpg'),(4,1,'mefthalin','img/LAKHOTIA COMPUTER CENTER.docx',10,'img/1111 MGU.png');

/*Table structure for table `tb_patient` */

DROP TABLE IF EXISTS `tb_patient`;

CREATE TABLE `tb_patient` (
  `p_id` int(30) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `locality` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_patient` */

insert  into `tb_patient`(`p_id`,`fname`,`lname`,`gender`,`dob`,`address`,`locality`,`town`,`district`,`phone`,`username`) values (1,'Karishma','R','female','1994-10-25','v/432a','eloor','kalamasserry','Ernakulam','9876543212','kari@gmail.com'),(2,'Shilpa','Viju','female','2019-09-03','v/432a','kochi','gffh','Patthanamthitta','1236547895','shilpa@gmail.com'),(3,'hamna','k.a','female','1999-11-08','edd','kodungallur','kodungalur','Thrissur','9961473093','hamn11a123ammu@gmail.com');

/*Table structure for table `tbl_user_registration` */

DROP TABLE IF EXISTS `tbl_user_registration`;

CREATE TABLE `tbl_user_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `dist` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user_registration` */

insert  into `tbl_user_registration`(`id`,`fname`,`mname`,`lname`,`address`,`dob`,`dist`,`place`,`email`,`status`) values (1,'krishna','priya','pp','N.parur','2000-01-17','Ekm','koottukad','krishnapriyapp2000@gmail.com',1),(2,'gopala','krishnan','ou','parur','1998-01-09','Ekm','parur','g98k@gmail.com',1),(3,'anil','kumar','mm','N.parur','1999-08-22','Ekm','N.parur','anil@gmail.com',1),(4,'sree','kumar','ou','kodungalur','1998-04-13','tcr','kodungalur','sreek@gmail.com',1),(5,'hari','krishna','kk','Paravoor ','1997-08-11','Ekm','N.parur','harik@gmail.com',1),(6,'Gopalakrishnan','OU','','Oduvessril H VP.Thuruth','1998-01-09','Ekm','N.paravor','gopuz@gmail.com',1),(7,'Vyshnavi','R','Nair','Thacheril House','2019-07-30','tcr','Koratty','vyshnavirnair88@gmail.com',1),(8,'Unni','krishnan','bb','VP Thuruth','1988-11-30','Ekm','N.Parur','unni@gmail.com',1),(9,'ninnu','','45hhh','ytyg','1996-05-17','Ekm','paravur','may@gmail.com',1),(10,'kuttan','m','m','manhjg','1991-04-17','Ekm','varap','kutt@gmail.com',1),(11,'Chinmaya','Thomas ','T','Kodungalur','1996-02-25','Thrissur','Kodungalur','chinmaya@gmail.com',1),(12,'manu','krish','mm','fkufjug','2000-06-04','Ekm','paravur','manu@gmail.com',1),(15,'Gopala','krishnan','OU','oduvesseril vp thuruth','1998-01-09','Ekm','chendamangalam','gopz@gmail.com',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
