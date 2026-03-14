-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2015 at 06:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `category` varchar(90) NOT NULL,
  `details` mediumtext NOT NULL,
  `createddate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `username`, `category`, `details`, `createddate`) VALUES
(1, 'mohanraj', '1', '\r\nGateway clinic is the ''center of excellence'' for gastroenterology, laparoscopic surgery, Hepatobiliary- pancreatic surgery, colorectal surgery, endoscopy- diagnostic and therapeutic, endoscopic gynaecological surgery and bariatric surgery. Patients are managed by well experienced surgeons, anesthesiologists, gynecologists, gastroenterologists, endocrine specialists, cardiologists, pulmonologists and other supportive medical team and paramedical staffs.\r\n\r\nPatients will be benefited by the vast experienced doctors who are trained in managing all complicated medical and surgical problems. This centre has got the well stocked teaching materials, videos and training facilities for the younger surgeons to get benefited.\r\n\r\nDr. K. Sendhil kumar delivers new energy and excellence to his patients by his years of experience in gastro surgery and new techniques and technologies equipped at highly advanced endo and laparoscopy centre " Gateway Clinics ".\r\n\r\nIn keeping with our philosophy a multidisciplinary approach to the investigation and management of gastro intestinal disorders is served by an endoscopy unit that incorporates the use of state of art Endoscopic technology.\r\n\r\nA special attraction is brought by our emphasis on " DAY CARE SURGERY " for pathologies of appendix, Uterus, Ovaries, Gall bladder, Inguinal and abdominal Hernias, Piles, anal fissure and fistula problems. It wins the advantages of less than 24 hrs of hospital stay (early discharge), less pain and blood loss, immediate return to normal activity.\r\n\r\nInstallation of various latest equipments like harmonic scalpel, vessel sealing device, High definition cameras, and staplers adds up the reputation of Day care surgery for patients comfort.\r\n\r\nWe, at Gateway clinic specialize in the investigation and management of all forms of gastrointestinal diseases to ensure that the provision of care for our patients is of the highest caliber with improved quality of life.\r\n\r\n', '2015-02-27'),
(2, '', '2', '<div class="welocme" style="padding: 50px 10px 35px; color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;"><div class="container" style="width: 1170px; margin-right: auto; margin-left: auto;"><div class="row-fluid" style="width: 1170px;"><div class="span12" style="float: left; min-height: 30px; margin-left: 0px; width: 1170px; box-sizing: border-box;"><div class="span9" style="float: left; min-height: 30px; margin-left: 30px; width: 869.984375px; box-sizing: border-box;"><h4 class="ali4" style="margin: 0px; font-family: MyWebFont2; color: inherit; text-rendering: optimizeLegibility; font-size: 23px; text-align: center; letter-spacing: 1px; padding-bottom: 20px;"><br></h4><ul class="ali11" style="padding: 0px; margin: 0px 0px 10px 25px; list-style-image: url(http://localhost/doctorweb/images/bul2.png);"><li style="line-height: 24px;">5Days Intensive Laparoscopy Training Programme.</li><li style="line-height: 24px;">Handling of laparoscopy Instruments and Ergonomic Principles</li><li style="line-height: 24px;">Personal Tution for Theoritical and Practical Aspects of Laprosocopy.</li><li style="line-height: 24px;">Hands on Training on</li><ol class="ali13" style="padding: 0px; margin: 0px 0px 0px 25px;"><li style="line-height: 24px;">Endotrainer Modules</li><li style="line-height: 24px;">Live Animal tissue</li><ul class="ali12" style="padding: 0px; margin: 0px 0px 0px 25px; list-style-image: url(http://localhost/doctorweb/images/bul3.png);"><li style="line-height: 24px;">Best Stepwise Training Method.</li><li style="line-height: 24px;">Training on Porcine Tissue and Trainer.</li><li style="line-height: 24px;">Tips and Tricks in Laparoscopy Surgery by Experts.</li><li style="line-height: 24px;">Self Paced and Flexible Programme.</li><li style="line-height: 24px;">Developement of</li><ol class="ali13" style="padding: 0px; margin: 0px 0px 0px 25px;"><li style="line-height: 24px;">Port Placement Techniques / Insufflation.</li><li style="line-height: 24px;">Camera and Scope Manipulation.</li><li style="line-height: 24px;">Hand eye Co-ordination.</li><li style="line-height: 24px;">Manual Dexterity.</li><li style="line-height: 24px;">Depth Perception.</li></ol></ul></ol></ul><ul class="ali11" style="padding: 0px; margin: 0px 0px 10px 25px; list-style-image: url(http://localhost/doctorweb/images/bul2.png);"><li style="line-height: 24px;">Understanding the Newer Energy Sources in Laparoscopy.</li>Which? When? Where?<li style="line-height: 24px;">Knowledge of Bites &amp; KNOTS.</li><li style="line-height: 24px;">Handling of Needle Intracorporeally.</li><li style="line-height: 24px;">Ligating a Bleeding Vessel.</li><ol class="ali13" style="padding: 0px; margin: 0px 0px 0px 25px;"><li style="line-height: 24px;">Clip application</li><li style="line-height: 24px;">Structuring</li><li style="line-height: 24px;">Electrocautery Operation Theatre.</li></ol></ul><ul class="ali11" style="padding: 0px; margin: 0px 0px 10px 25px; list-style-image: url(http://localhost/doctorweb/images/bul2.png);"><li style="line-height: 24px;">Avoiding CBD Injury in Laparoscopy Cholecystectomy</li><li style="line-height: 24px;">Performing Laparoscopy Appendectomy, Laparoscopy Cholecysectomy in Porcine Model.</li><li style="line-height: 24px;">Retrieval of the Specimen Do''s &amp; Dont''s.</li><li style="line-height: 24px;">Feast of watching Live Surgery in Operation Theater by Experts.</li></ul></div></div></div></div></div><div class="footer" style="padding: 10px 10px 20px; color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 153, 0);"><div class="container" style="width: 1170px; margin-right: auto; margin-left: auto;"><div class="row-fluid" style="width: 1170px;"><div class="span12" style="float: left; min-height: 30px; margin-left: 0px; width: 1170px; box-sizing: border-box;"><div class="span3" style="float: left; min-height: 30px; margin-left: 0px; width: 270px; box-sizing: border-box;"><div class="new" style="padding-top: 10px; padding-bottom: 20px;"></div></div></div></div></div></div>', '2015-05-03'),
(6, '', '3', '<h4 class="ali4" style="margin: 0px; font-family: MyWebFont2; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; font-size: 23px; text-align: center; letter-spacing: 1px; padding-bottom: 20px; background-color: rgb(255, 255, 255);">Under Constructions</h4>', '2015-05-03'),
(7, '', '4', '<h4 class="ali4" style="margin: 0px; font-family: MyWebFont2; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; font-size: 23px; text-align: center; letter-spacing: 1px; padding-bottom: 20px; background-color: rgb(255, 255, 255);">Newsletter</h4><div style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><a href="http://localhost/doctorweb/images/newsletter.pdf" target="_blank" style="color: rgb(0, 0, 0); text-decoration: none;"><img src="http://localhost/doctorweb/images/newsletter.jpg" class="img-polaroid lft-img-margin pull-left img-width-200" style="height: auto; max-width: 100%; vertical-align: middle; border: 1px solid rgba(0, 0, 0, 0.2); padding: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.0980392) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.0980392) 0px 1px 3px; float: left; margin: 0px 15px 0px 0px;"></a><img src="http://localhost/doctorweb/images/new3.gif" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"><h5 style="margin: 10px 0px; font-family: inherit; color: inherit; text-rendering: optimizeLegibility; font-size: 14px;">Newsletter April 2015</h5><div><br></div></div>', '2015-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `aboutuscat`
--

CREATE TABLE IF NOT EXISTS `aboutuscat` (
  `id` int(12) NOT NULL,
  `category` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutuscat`
--

INSERT INTO `aboutuscat` (`id`, `category`) VALUES
(1, 'Facilities'),
(2, 'Course Offer'),
(3, 'Slide Atlas'),
(4, 'News Letter');

-- --------------------------------------------------------

--
-- Table structure for table `aboutusdet`
--

CREATE TABLE IF NOT EXISTS `aboutusdet` (
  `id` int(12) NOT NULL,
  `details` mediumtext NOT NULL,
  `status` varchar(90) NOT NULL,
  `createddate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutusdet`
--

INSERT INTO `aboutusdet` (`id`, `details`, `status`, `createddate`) VALUES
(1, 'Gateway clinic is the ''center of excellence'' for gastroenterology, laparoscopic surgery, Hepatobiliary- pancreatic surgery, colorectal surgery, endoscopy- diagnostic and therapeutic, endoscopic gynaecological surgery and bariatric surgery. Patients are managed by well experienced surgeons, anesthesiologists, gynecologists, gastroenterologists, endocrine specialists, cardiologists, pulmonologists and other supportive medical team and paramedical staffs.', '', '2015-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `image` varchar(90) NOT NULL,
  `createddate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `username`, `image`, `createddate`) VALUES
(14, 'mohanraj', 'thumbs1/banner24.jpg', '2015-05-03'),
(15, 'mohanraj', 'thumbs1/banner33.jpg', '2015-05-03'),
(16, 'mohanraj', 'thumbs1/banner42.jpg', '2015-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(12) NOT NULL,
  `category` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Social Services');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(12) NOT NULL,
  `category` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Facilitiess');

-- --------------------------------------------------------

--
-- Table structure for table `common`
--

CREATE TABLE IF NOT EXISTS `common` (
  `id` int(12) NOT NULL,
  `category` varchar(90) NOT NULL,
  `image` varchar(90) NOT NULL,
  `filesize` varchar(90) NOT NULL,
  `details` mediumtext NOT NULL,
  `createddate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `common`
--

INSERT INTO `common` (`id`, `category`, `image`, `filesize`, `details`, `createddate`) VALUES
(18, '1', '', '$', '<font color="#0066cc">ssasaassas55555555555555555</font>', '2015-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `commoncategory`
--

CREATE TABLE IF NOT EXISTS `commoncategory` (
  `id` int(12) NOT NULL,
  `category` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commoncategory`
--

INSERT INTO `commoncategory` (`id`, `category`) VALUES
(1, 'Basic doctor');

-- --------------------------------------------------------

--
-- Table structure for table `doctordet`
--

CREATE TABLE IF NOT EXISTS `doctordet` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `category` varchar(90) NOT NULL,
  `image` varchar(90) NOT NULL,
  `details` mediumtext NOT NULL,
  `createddate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctordet`
--

INSERT INTO `doctordet` (`id`, `username`, `category`, `image`, `details`, `createddate`) VALUES
(1, 'mohanraj', 'Weight Loss Surgerys', 'thumbs/pro41.jpg', 'Welcossme to gateway clinics, the centre of excellence for the treatment of all gastrointestinal, hepato-biliary, colorectal and other abdominal problems. This centre is situated in the heart of Coimbatore city which is easily accessible by all modes of transportation.\r\n\r\nCoimbatore was once called as tex-city because of its popular textile industries. Now the city is very popular for clinics, hospitals, and other medical facilities and hence called as medi-city. Due to its close proximity to the hill stations like Ooty and Kodaikanal and also to ''God s Own Country - Kerala'' the city is a major destination medical tourism.\r\n\r\n', '2015-05-03'),
(2, 'mohanraj', 'Diagnostic&Therapeutic Endoscopy', 'thumbs/pro32.jpg', 'Severe coronary artery disease and acute or recent heart attack\r\nUncontrolled high or low blood pressure\r\nShock\r\nMassive upper GI bleeding\r\nAcute peritonitis (inflammation of certain tissues in your abdomen)\r\nInjuries of the cervical spine\r\nPerforation of organs of the upper GI tract\r\nA history of respiratory distress\r\nSevere coagulopathy, a disease in which you continue bleeding because of inadequate clotting in your blood\r\nRecent upper GI tract surgery\r\nLong-standing and stable inflammatory bowel diseases (except for watching cancers)\r\nChronic irritable bowel syndrome\r\nAcute and self-limiting diarrhea\r\nBloody or tarry stools with a clear source of the bleeding\r\nPregnancy in second or third trimester\r\nHistory of severe chronic obstructive pulmonary disease\r\nRecent colon surgery or past surgery of your abdomen or pelvis resulting in internal adhesions\r\nAcute diverticulitis\r\nTear in a blood vessel in your abdomen\r\nSudden colon inflammation\r\nAcute inflammation of the sac that lines your abdomen\r\nNoncorrectable coagulopathy, a disease in which you continue bleeding due to inadequate clotting factors in your blood\r\nMassive gastrointestinal bleeding', '2015-05-03'),
(3, 'mohanraj', 'Cancer Surgery', 'thumbs/pro22.jpg', '\r\nSurgery is commonly used for cancer as a treatment and to diagnose or learn more about the cancer.\r\nDifferent types of surgery are used depending on the type of cancer, where it is located, and the goals of surgery. Some types are also less invasive and have a shorter recovery time.\r\nWhere you have surgery and if or how long you need to stay in the hospital afterwards depends on the type of surgery you will have and how much time it will take to recover.\r\nSurgery is the removal of the tumor and surrounding tissue during an operation. A doctor who specializes in treating cancer using surgery is called a surgical oncologist. Surgery is the oldest type of cancer therapy and remains an effective treatment for many types of cancer today. The goals of surgery vary. It is often used to remove all or some of the cancerous tissue after diagnosis. However, it can also be used to diagnose cancer, find out where the cancer is located, whether it has spread, and whether it is affecting the functions of other organs in the body. In addition, surgery can be helpful to restore the body''s appearance or function or to relieve side effects.\r\n\r\n', '2015-05-03'),
(4, 'mohanraj', 'Daycare Surgery', 'thumbs/pro5.jpg', 'Outpatient surgery, also known as ambulatory surgery, same-day surgery, day case, or day surgery, is surgery that does not require an overnight hospital stay. The term â€œoutpatientâ€ arises from the fact that surgery patients may go home and do not need an overnight hospital bed. The purpose of outpatient surgery is to keep hospital costs down, as well as saving the patient time that would otherwise be wasted in the hospital.\r\n\r\nOutpatient surgery has grown in popularity due to the rise in outpatient surgery centers and improved technology. Outpatient surgery centers often allow patients to get medical surgery and cosmetic surgery done in much more luxurious settings than a state hospital and are often preferred by patients for minor surgical procedures. Improved technology has also increased the frequency of outpatient surgery procedures. With shorter medical procedure duration and fewer complications it makes sense to let patients go home sooner. About 65% of all surgical procedures are done on an outpatient basis.[citation needed]\r\n\r\nPatients should check with their doctor for all information covering preparation for outpatient procedures. Complications related to surgery occur less than 1% of the time in outpatient settings.[citation needed] However, in terms of patient safety, non-hospital settings are not as regulated as hospitals are. Patients should inquire about all ambulatory clinics, surgical centers, and physicians'' offices to make sure they meet s\r\n', '2015-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `doctorgallery`
--

CREATE TABLE IF NOT EXISTS `doctorgallery` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `title` varchar(90) NOT NULL,
  `image` varchar(90) NOT NULL,
  `createddate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorgallery`
--

INSERT INTO `doctorgallery` (`id`, `username`, `title`, `image`, `createddate`) VALUES
(7, 'mohanraj', '', 'thumbs5/e1.png', '2015-05-03'),
(8, 'mohanraj', '', 'thumbs5/e21.png', '2015-05-03'),
(9, 'mohanraj', '', 'thumbs5/e31.png', '2015-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `name` varchar(90) NOT NULL,
  `filename` varchar(90) NOT NULL,
  `filesize` varchar(90) NOT NULL,
  `createdon` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `username`, `name`, `filename`, `filesize`, `createdon`) VALUES
(2, 'mohanraj', 'Natarajan', 'pro.jpg.jpg', '76308', '2015-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `mainind`
--

CREATE TABLE IF NOT EXISTS `mainind` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `title` varchar(90) NOT NULL,
  `details` mediumtext NOT NULL,
  `image` varchar(90) NOT NULL,
  `createddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE IF NOT EXISTS `medical` (
  `id` int(12) NOT NULL,
  `image` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`id`, `image`) VALUES
(12, 'thumbs1/port2.jpg'),
(13, 'thumbs1/port3.jpg'),
(14, 'thumbs1/port4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicalbanner`
--

CREATE TABLE IF NOT EXISTS `medicalbanner` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `image` varchar(90) NOT NULL,
  `createddate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalbanner`
--

INSERT INTO `medicalbanner` (`id`, `username`, `image`, `createddate`) VALUES
(19, 'mohanraj', 'thumbs1/me11.jpg', '2015-05-09'),
(20, 'mohanraj', 'thumbs1/me21.jpg', '2015-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(12) NOT NULL,
  `firstname` varchar(90) NOT NULL,
  `lastname` varchar(90) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'mohanraj', 'nataraj', 'mohanraj', 'mohanraj'),
(2, 'mohanraj', 'mohanraj', 'doctoradmin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `title` varchar(90) NOT NULL,
  `image` varchar(30) NOT NULL,
  `filesize` varchar(90) NOT NULL,
  `image2` varchar(90) NOT NULL,
  `createddate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `username`, `title`, `image`, `filesize`, `image2`, `createddate`) VALUES
(5, 'doctoradmin', 'aaas', '100000', '', '1431262850.pdf', '2015-05-10'),
(6, 'doctoradmin', 'asasa', '25', '', '1431263207.pdf', '2015-05-10'),
(7, 'DFD', 'DFFD', '40', 'DFFD', 'DFFD', '2015-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `sercatdet`
--

CREATE TABLE IF NOT EXISTS `sercatdet` (
  `id` int(12) NOT NULL,
  `id1` int(12) NOT NULL,
  `image` varchar(90) NOT NULL,
  `filesize` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sercatdet`
--

INSERT INTO `sercatdet` (`id`, `id1`, `image`, `filesize`) VALUES
(1, 15, '01430646992.png', '238403'),
(2, 15, '11430646992.png', '247347'),
(3, 15, '21430646992.png', '243499'),
(4, 15, '31430646992.png', '218895');

-- --------------------------------------------------------

--
-- Table structure for table `servicecategory`
--

CREATE TABLE IF NOT EXISTS `servicecategory` (
  `id` int(12) NOT NULL,
  `category` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicecategory`
--

INSERT INTO `servicecategory` (`id`, `category`) VALUES
(2, 'Appendix');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(12) NOT NULL,
  `category` varchar(90) NOT NULL,
  `image` varchar(90) NOT NULL,
  `filesize` varchar(90) NOT NULL,
  `details` mediumtext NOT NULL,
  `createddate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category`, `image`, `filesize`, `details`, `createddate`) VALUES
(16, '2', '', '$', '<p align="justify" style="margin: 0px 0px 10px; font-family: MyWebFont2; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">he appendix is a small, tube-like organ attached to the first part of the large intestine, also called the colon. It is located in the lower right area of the abdomen. It has no known function. A blockage inside of the appendix causes appendicitis. The blockage leads to increased pressure, problems with blood flow and inflammation. If the blockage is not treated, the appendix can break open and leak infection into the body.</p><h4 style="margin: 10px 0px; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; font-size: 17.5px; background-color: rgb(255, 255, 255);">Symptoms may include</h4><ul class="ali11" style="padding: 0px; margin: 0px 0px 10px 25px; list-style-image: url(http://localhost/doctorweb/images/bul2.png); color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><li style="line-height: 24px;">Pain and/or swelling in the abdomen</li><li style="line-height: 24px;">Loss of appetite</li><li style="line-height: 24px;">Nausea and vomiting</li><li style="line-height: 24px;">Constipation or diarrhea</li><li style="line-height: 24px;">Inability to pass gas</li><li style="line-height: 24px;">Low fever</li></ul><p align="justify" style="margin: 0px 0px 10px; font-family: MyWebFont2; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Not everyone with appendicitis has all these symptoms.</p><p align="justify" style="margin: 0px 0px 10px; font-family: MyWebFont2; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Appendicitis is a medical emergency. Treatment almost always involves removing the appendix. Anyone can get appendicitis. It happens most often to people between the ages of 10 and 30.</p><br style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><h4 style="margin: 10px 0px; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; font-size: 17.5px; background-color: rgb(255, 255, 255);">LAPAROSCOPIC APPENDECTOMY :</h4><p align="justify" style="margin: 0px 0px 10px; font-family: MyWebFont2; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">In the laparoscopic technique, several small incisions are made in the abdomen. In one incision a laparoscope is inserted. The laparoscope has a tiny lens to which a TV camera is attached. The appendectomy is performed by the surgeon while looking at the TV monitor. Small instruments are inserted in the other incisions and used to to remove the appendix. No stitches placed which needs removal.</p><br style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><div class="row-fluid" style="width: 869.984375px; color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><div class="span3" style="float: left; min-height: 30px; margin-left: 0px; width: 200.765625px; box-sizing: border-box;"><h5 class="new4" style="margin: 10px 0px; font-family: inherit; color: inherit; text-rendering: optimizeLegibility; font-size: 14px; text-align: center;">Surgical incision</h5><img src="http://localhost/doctorweb/images/surg_incision.jpg" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"></div><div class="span3" style="float: left; min-height: 30px; margin-left: 22.296875px; width: 200.765625px; box-sizing: border-box;"><h5 class="new4" style="margin: 10px 0px; font-family: inherit; color: inherit; text-rendering: optimizeLegibility; font-size: 14px; text-align: center;">Laparoscopic incisions</h5><img src="http://localhost/doctorweb/images/lap_incision.jpg" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"></div></div><br style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><div class="gallery" style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><ul class="thumbnails" style="padding: 0px; margin: 0px 0px 10px; list-style: none;"><li class="span4" style="float: left; min-height: 30px; margin-left: 0px; width: 275.109375px; margin-bottom: 20px; display: block; box-sizing: border-box;"><a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="http://localhost/doctorweb/images/appendixb.png" style="color: rgb(0, 0, 0); text-decoration: none; display: block; padding: 4px; border: 1px solid rgb(221, 221, 221); border-radius: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;"><div class="overlay-zoom" style="cursor: pointer; width: 265.109375px; height: 197px; position: relative; transition: all 0.1s ease-in-out; -webkit-transition: all 0.1s ease-in-out; z-index: 90;"><img src="http://localhost/doctorweb/images/appendixb.png" alt="" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"><div class="zoom-icon" style="position: absolute; width: inherit; height: inherit; opacity: 0; z-index: 100; top: 0px; transition: all 0.4s ease-in-out; -webkit-transition: all 0.4s ease-in-out; -webkit-transform: scale(0); transform: scale(0); -webkit-backface-visibility: hidden; background-image: url(http://localhost/doctorweb/assets/img/overlay-icon.png); background-color: rgb(0, 0, 0); background-position: 50% 50%; background-repeat: no-repeat;"></div></div></a></li><li class="span4" style="float: left; min-height: 30px; margin-left: 22.296875px; width: 275.109375px; margin-bottom: 20px; display: block; box-sizing: border-box;"><a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="http://localhost/doctorweb/images/appendixb1.png" style="color: rgb(0, 0, 0); text-decoration: none; display: block; padding: 4px; border: 1px solid rgb(221, 221, 221); border-radius: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;"><div class="overlay-zoom" style="cursor: pointer; width: 265.109375px; height: 199px; position: relative; transition: all 0.1s ease-in-out; -webkit-transition: all 0.1s ease-in-out; z-index: 90;"><img src="http://localhost/doctorweb/images/appendixb1.png" alt="" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"><div class="zoom-icon" style="position: absolute; width: inherit; height: inherit; opacity: 0; z-index: 100; top: 0px; transition: all 0.4s ease-in-out; -webkit-transition: all 0.4s ease-in-out; -webkit-transform: scale(0); transform: scale(0); -webkit-backface-visibility: hidden; background-image: url(http://localhost/doctorweb/assets/img/overlay-icon.png); background-color: rgb(0, 0, 0); background-position: 50% 50%; background-repeat: no-repeat;"></div></div></a></li><li class="span4" style="float: left; min-height: 30px; margin-left: 22.296875px; width: 275.109375px; margin-bottom: 20px; display: block; box-sizing: border-box;"><a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="http://localhost/doctorweb/images/appendixb2.png" style="color: rgb(0, 0, 0); text-decoration: none; display: block; padding: 4px; border: 1px solid rgb(221, 221, 221); border-radius: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;"><div class="overlay-zoom" style="cursor: pointer; width: 265.109375px; height: 199px; position: relative; transition: all 0.1s ease-in-out; -webkit-transition: all 0.1s ease-in-out; z-index: 90;"><img src="http://localhost/doctorweb/images/appendixb2.png" alt="" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"><div class="zoom-icon" style="position: absolute; width: inherit; height: inherit; opacity: 0; z-index: 100; top: 0px; transition: all 0.4s ease-in-out; -webkit-transition: all 0.4s ease-in-out; -webkit-transform: scale(0); transform: scale(0); -webkit-backface-visibility: hidden; background-image: url(http://localhost/doctorweb/assets/img/overlay-icon.png); background-color: rgb(0, 0, 0); background-position: 50% 50%; background-repeat: no-repeat;"></div></div></a></li></ul><ul class="thumbnails" style="padding: 0px; margin: 0px 0px 10px; list-style: none;"><li class="span4" style="float: left; min-height: 30px; margin-left: 0px; width: 275.109375px; margin-bottom: 20px; display: block; box-sizing: border-box;"><a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="http://localhost/doctorweb/images/appendixb3.png" style="color: rgb(0, 0, 0); text-decoration: none; display: block; padding: 4px; border: 1px solid rgb(221, 221, 221); border-radius: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;"><div class="overlay-zoom" style="cursor: pointer; width: 265.109375px; height: 199px; position: relative; transition: all 0.1s ease-in-out; -webkit-transition: all 0.1s ease-in-out; z-index: 90;"><img src="http://localhost/doctorweb/images/appendixb3.png" alt="" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"></div></a></li></ul></div>', '2015-05-03'),
(17, '2', '', '$', '<p align="justify" style="margin: 0px 0px 10px; font-family: MyWebFont2; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">he appendix is a small, tube-like organ attached to the first part of the large intestine, also called the colon. It is located in the lower right area of the abdomen. It has no known function. A blockage inside of the appendix causes appendicitis. The blockage leads to increased pressure, problems with blood flow and inflammation. If the blockage is not treated, the appendix can break open and leak infection into the body.</p><h4 style="margin: 10px 0px; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; font-size: 17.5px; background-color: rgb(255, 255, 255);">Symptoms may include</h4><ul class="ali11" style="padding: 0px; margin: 0px 0px 10px 25px; list-style-image: url(http://localhost/doctorweb/images/bul2.png); color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><li style="line-height: 24px;">Pain and/or swelling in the abdomen</li><li style="line-height: 24px;">Loss of appetite</li><li style="line-height: 24px;">Nausea and vomiting</li><li style="line-height: 24px;">Constipation or diarrhea</li><li style="line-height: 24px;">Inability to pass gas</li><li style="line-height: 24px;">Low fever</li></ul><p align="justify" style="margin: 0px 0px 10px; font-family: MyWebFont2; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Not everyone with appendicitis has all these symptoms.</p><p align="justify" style="margin: 0px 0px 10px; font-family: MyWebFont2; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Appendicitis is a medical emergency. Treatment almost always involves removing the appendix. Anyone can get appendicitis. It happens most often to people between the ages of 10 and 30.</p><br style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><h4 style="margin: 10px 0px; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; font-size: 17.5px; background-color: rgb(255, 255, 255);">LAPAROSCOPIC APPENDECTOMY :</h4><p align="justify" style="margin: 0px 0px 10px; font-family: MyWebFont2; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">In the laparoscopic technique, several small incisions are made in the abdomen. In one incision a laparoscope is inserted. The laparoscope has a tiny lens to which a TV camera is attached. The appendectomy is performed by the surgeon while looking at the TV monitor. Small instruments are inserted in the other incisions and used to to remove the appendix. No stitches placed which needs removal.</p><br style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><div class="row-fluid" style="width: 869.984375px; color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><div class="span3" style="float: left; min-height: 30px; margin-left: 0px; width: 200.765625px; box-sizing: border-box;"><h5 class="new4" style="margin: 10px 0px; font-family: inherit; color: inherit; text-rendering: optimizeLegibility; font-size: 14px; text-align: center;">Surgical incision</h5><img src="http://localhost/doctorweb/images/surg_incision.jpg" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"></div><div class="span3" style="float: left; min-height: 30px; margin-left: 22.296875px; width: 200.765625px; box-sizing: border-box;"><h5 class="new4" style="margin: 10px 0px; font-family: inherit; color: inherit; text-rendering: optimizeLegibility; font-size: 14px; text-align: center;">Laparoscopic incisions</h5><img src="http://localhost/doctorweb/images/lap_incision.jpg" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"></div></div><br style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><div class="gallery" style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);"><ul class="thumbnails" style="padding: 0px; margin: 0px 0px 10px; list-style: none;"><li class="span4" style="float: left; min-height: 30px; margin-left: 0px; width: 275.109375px; margin-bottom: 20px; display: block; box-sizing: border-box;"><a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="http://localhost/doctorweb/images/appendixb.png" style="color: rgb(0, 0, 0); text-decoration: none; display: block; padding: 4px; border: 1px solid rgb(221, 221, 221); border-radius: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;"><div class="overlay-zoom" style="cursor: pointer; width: 265.109375px; height: 197px; position: relative; transition: all 0.1s ease-in-out; -webkit-transition: all 0.1s ease-in-out; z-index: 90;"><img src="http://localhost/doctorweb/images/appendixb.png" alt="" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"><div class="zoom-icon" style="position: absolute; width: inherit; height: inherit; opacity: 0; z-index: 100; top: 0px; transition: all 0.4s ease-in-out; -webkit-transition: all 0.4s ease-in-out; -webkit-transform: scale(0); transform: scale(0); -webkit-backface-visibility: hidden; background-image: url(http://localhost/doctorweb/assets/img/overlay-icon.png); background-color: rgb(0, 0, 0); background-position: 50% 50%; background-repeat: no-repeat;"></div></div></a></li><li class="span4" style="float: left; min-height: 30px; margin-left: 22.296875px; width: 275.109375px; margin-bottom: 20px; display: block; box-sizing: border-box;"><a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="http://localhost/doctorweb/images/appendixb1.png" style="color: rgb(0, 0, 0); text-decoration: none; display: block; padding: 4px; border: 1px solid rgb(221, 221, 221); border-radius: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;"><div class="overlay-zoom" style="cursor: pointer; width: 265.109375px; height: 199px; position: relative; transition: all 0.1s ease-in-out; -webkit-transition: all 0.1s ease-in-out; z-index: 90;"><img src="http://localhost/doctorweb/images/appendixb1.png" alt="" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"><div class="zoom-icon" style="position: absolute; width: inherit; height: inherit; opacity: 0; z-index: 100; top: 0px; transition: all 0.4s ease-in-out; -webkit-transition: all 0.4s ease-in-out; -webkit-transform: scale(0); transform: scale(0); -webkit-backface-visibility: hidden; background-image: url(http://localhost/doctorweb/assets/img/overlay-icon.png); background-color: rgb(0, 0, 0); background-position: 50% 50%; background-repeat: no-repeat;"></div></div></a></li><li class="span4" style="float: left; min-height: 30px; margin-left: 22.296875px; width: 275.109375px; margin-bottom: 20px; display: block; box-sizing: border-box;"><a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="http://localhost/doctorweb/images/appendixb2.png" style="color: rgb(0, 0, 0); text-decoration: none; display: block; padding: 4px; border: 1px solid rgb(221, 221, 221); border-radius: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;"><div class="overlay-zoom" style="cursor: pointer; width: 265.109375px; height: 199px; position: relative; transition: all 0.1s ease-in-out; -webkit-transition: all 0.1s ease-in-out; z-index: 90;"><img src="http://localhost/doctorweb/images/appendixb2.png" alt="" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"><div class="zoom-icon" style="position: absolute; width: inherit; height: inherit; opacity: 0; z-index: 100; top: 0px; transition: all 0.4s ease-in-out; -webkit-transition: all 0.4s ease-in-out; -webkit-transform: scale(0); transform: scale(0); -webkit-backface-visibility: hidden; background-image: url(http://localhost/doctorweb/assets/img/overlay-icon.png); background-color: rgb(0, 0, 0); background-position: 50% 50%; background-repeat: no-repeat;"></div></div></a></li></ul><ul class="thumbnails" style="padding: 0px; margin: 0px 0px 10px; list-style: none;"><li class="span4" style="float: left; min-height: 30px; margin-left: 0px; width: 275.109375px; margin-bottom: 20px; display: block; box-sizing: border-box;"><a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="http://localhost/doctorweb/images/appendixb3.png" style="color: rgb(0, 0, 0); text-decoration: none; display: block; padding: 4px; border: 1px solid rgb(221, 221, 221); border-radius: 4px; -webkit-box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; box-shadow: rgba(0, 0, 0, 0.054902) 0px 1px 3px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;"><div class="overlay-zoom" style="cursor: pointer; width: 265.109375px; height: 199px; position: relative; transition: all 0.1s ease-in-out; -webkit-transition: all 0.1s ease-in-out; z-index: 90;"><img src="http://localhost/doctorweb/images/appendixb3.png" alt="" style="height: auto; max-width: 100%; vertical-align: middle; border: 0px;"></div></a></li></ul></div>', '2015-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `surgery`
--

CREATE TABLE IF NOT EXISTS `surgery` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `title` varchar(90) NOT NULL,
  `image` varchar(90) NOT NULL,
  `details` mediumtext NOT NULL,
  `createddate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surgery`
--

INSERT INTO `surgery` (`id`, `username`, `title`, `image`, `details`, `createddate`) VALUES
(4, 'mohanraj', 'Canurgerycer S', 'image9/pro21.jpg', '\r\nuploadWe are hiring people from freshers to experienced, kindly fill the basic details & our recruiters will get in touch with you regarding the offers & jobs we have with our client. We hire candidates across India.\r\nPlease check on the roles mentioned above.We are hiring people from freshers to experienced, kindly fill the basic details & our recruiters will get in touch with you regarding the offers & jobs we have with our client. We hire candidates across India.\r\nPlease check on the roles mentioned above.We are hiring people from freshers to experienced, kindly fill the basic details & our recruiters will get in touch with you regarding the offers & jobs we have with our client. We hire candidates across India.\r\nPlease check on the roles mentioned above.We are hiring people from freshers to experienced, kindly fill the basic details & our recruiters will get in touch with you regarding the offers & jobs we have with our client. We hire candidates across India.\r\nPlease check on the roles mentioned above.', '2015-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `videogallery`
--

CREATE TABLE IF NOT EXISTS `videogallery` (
  `id` int(12) NOT NULL,
  `username` varchar(90) NOT NULL,
  `name` varchar(90) NOT NULL,
  `video` varchar(90) NOT NULL,
  `createddate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videogallery`
--

INSERT INTO `videogallery` (`id`, `username`, `name`, `video`, `createddate`) VALUES
(2, 'mohanraj', 'GYM NATIONs', 'https://www.youtube.com/watch?v=o5eaK9qlsFw', '2015-01-28 05:55:06'),
(3, 'mohanraj', 'mohanraj', 'https://www.youtube.com/embed/vqiABPHh1sA', '2015-02-07 15:18:24'),
(4, 'mohanraj', 'gabru', 'https://www.youtube.com/embed/GJC7pPuSw_M', '2015-02-07 15:20:01'),
(5, 'mohanraj', 'Honey Singh', 'https://www.youtube.com/embed/7gDLZCr6Uns', '2015-02-07 15:21:00'),
(6, 'mohanraj', 'Khan Address', 'https://www.youtube.com/embed/1DErHh-dafM', '2015-02-07 15:22:07'),
(7, 'mohanraj', '', '', '2015-05-03 12:24:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutuscat`
--
ALTER TABLE `aboutuscat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutusdet`
--
ALTER TABLE `aboutusdet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common`
--
ALTER TABLE `common`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commoncategory`
--
ALTER TABLE `commoncategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctordet`
--
ALTER TABLE `doctordet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorgallery`
--
ALTER TABLE `doctorgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainind`
--
ALTER TABLE `mainind`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalbanner`
--
ALTER TABLE `medicalbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sercatdet`
--
ALTER TABLE `sercatdet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicecategory`
--
ALTER TABLE `servicecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgery`
--
ALTER TABLE `surgery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `aboutuscat`
--
ALTER TABLE `aboutuscat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `aboutusdet`
--
ALTER TABLE `aboutusdet`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `common`
--
ALTER TABLE `common`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `commoncategory`
--
ALTER TABLE `commoncategory`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doctordet`
--
ALTER TABLE `doctordet`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doctorgallery`
--
ALTER TABLE `doctorgallery`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mainind`
--
ALTER TABLE `mainind`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `medicalbanner`
--
ALTER TABLE `medicalbanner`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sercatdet`
--
ALTER TABLE `sercatdet`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `servicecategory`
--
ALTER TABLE `servicecategory`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `surgery`
--
ALTER TABLE `surgery`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
