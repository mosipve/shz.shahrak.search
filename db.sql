/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.5-10.1.16-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `town` (
	`id` double ,
	`company_name` blob ,
	`berand` blob ,
	`addres` blob ,
	`tel` blob ,
	`kroki` blob ,
	`pic` blob 
); 
insert into `town` (`id`, `company_name`, `berand`, `addres`, `tel`, `kroki`, `pic`) values('3','هومن درب','الما','فلکه اول . بلوار نوبنياد . خيابان 2400','09178099891 \r\n07137742925 ',NULL,NULL);
insert into `town` (`id`, `company_name`, `berand`, `addres`, `tel`, `kroki`, `pic`) values('4','مديريت','شهرک صنعتي','پس از فلکه اول','774',NULL,NULL);
insert into `town` (`id`, `company_name`, `berand`, `addres`, `tel`, `kroki`, `pic`) values('5','شيراز بام','بام شيراز','فلکه سوم . خيابان 90','342',NULL,NULL);
insert into `town` (`id`, `company_name`, `berand`, `addres`, `tel`, `kroki`, `pic`) values('6','تست','سيستم','آدرس','321321321',NULL,NULL);
