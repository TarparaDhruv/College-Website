-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2016 at 12:50 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `clg_admin`
--

CREATE TABLE IF NOT EXISTS `clg_admin` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_admin`
--

INSERT INTO `clg_admin` (`email`, `pass`) VALUES
('jdv@admin.com', 'jdvadmin');

-- --------------------------------------------------------

--
-- Table structure for table `clg_article`
--

CREATE TABLE IF NOT EXISTS `clg_article` (
  `article_id` int(11) NOT NULL,
  `article_maintitle` varchar(100) NOT NULL,
  `article_subtitle` varchar(100) NOT NULL,
  `article_article` varchar(2000) NOT NULL,
  `article_publishdate` date NOT NULL,
  `article_authorname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clg_article_addon_img`
--

CREATE TABLE IF NOT EXISTS `clg_article_addon_img` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clg_article_addon_link`
--

CREATE TABLE IF NOT EXISTS `clg_article_addon_link` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clg_department`
--

CREATE TABLE IF NOT EXISTS `clg_department` (
  `id` int(11) NOT NULL,
  `branch_code` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `info1` varchar(10000) NOT NULL,
  `info2` varchar(10000) NOT NULL,
  `info3` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_department`
--

INSERT INTO `clg_department` (`id`, `branch_code`, `branch_name`, `info1`, `info2`, `info3`) VALUES
(1, 16, 'Information Technology', 'The Department of Information Technology, in Dr. S. & S. S. Ghandhy College of Engineering and Technology, Surat was started in the year 1969. The course duration is of 6 semesters and the intake capacity is of 60 students per year. The college is administered by Directorate of Technical Education, Gujarat, Gandhinagar and is affiliated with Gujarat Technological University (GTU).', 'In early 2014, the department was shifted to its new building specially allotted to Information Technology Building of the college. The new building has the facility of separate laboratories for Project lab, DBMS lab, Operating System lab, Programming lab and Networking lab each having 25 personal computers with latest configurations. Apart from this it has a Multimedia room as well as good facilitates class rooms and R.O water cooler system.', 'The 6th semester students have undertaken project work as a part of their curricular activity. Frequent Seminars and expert lectures are also planned for making the students aware of latest developments and industrial practices. The students of the department are actively involved in the Seven Strand activities, which include Academics, Research and Entrepreneurship, Hospitality and Mess, Training and Placement.'),
(2, 6, 'Civil Engineering ', 'Since 1955, Government offered this course in this institute with the mission to provide skilled and technically qualified character and builder of nation. Initially approved intake was 60. Now after implementing shift pattern in 2008, previous sanctioned intake is termed as morning shift intake. And in evening shift, the approved intake is 60. So in-total departmental intake is 120. Department consists of various laboratories like, Surveying, Transportation engineering, Fluid mechanics, Environmental Engineering, etc. ', 'Department have five numbers of classrooms and a big drawing hall for academic purpose. Also multimedia-room is with department. Department is actively participated in all activity initiated at college level and allotted by higher authorities. Department is taking students to study-visit out-side the campus like visit to Railway station, Railway yard, Water Treatment Plant, Waste water treatment plant, Ukai Dam-site, Meteorological Department , Sardar Sarovar yojna, Hot-mix plant, Drip Irrigation system plant, on-going Bridge construction site, Building-Construction site,  etc. The duration of this course is of three year having six semesters. At the end of each semester, students have to submit their term-wrok. And in fifth and sixth semester, students have to done a project comprising all fundamentals of basic civil engineering and represent it to the external examiner.', ''),
(3, 29, 'Textile Manufacturing Technology\r\n', 'The Department of Textile Manufacturing Technology (DTMT), in Dr. S. & S. S. Ghandhy College of Engineering and Technology, Surat was started in the year 1969. The course duration is of 7 semesters and the intake capacity is of 30 students per year. The college is administered by Directorate of Technical Education, Gujarat, Gandhinagar and is affiliated with Gujarat Technological University (GTU).', 'In early 2014, the department will be shifted to its new building specially allotted to the Textile Departments of the college, namely, Department of Textile Manufacturing Technology and Department of Textile Processing Technology. The new building has the facility of separate laboratories for Spinning, Weaving, Knitting, Testing and Fabric Structure. Apart from this it has a Computer laboratory as well as a Seminar hall.', 'The 6th semester students have undertaken project work of making models as a part of their curricular activity. The 7th semester students are sent for industrial training of 6 months to enhance their practical knowledge. Frequent industrial visits and expert lectures are also planned for making the students aware of latest developments and industrial practices. The students of the department are actively involved in the Seven Strand activities, which include Academics, Research and Entrepreneurship, Hospitality and Mess, Training and Placement.'),
(4, 28, 'Textile Processing Technology', '	Textile industries are considered as one of the oldest & core industries among all. They also contributes major share in the economy of our nation. Looking to the present scenario of fashion & technical textile industries, which is the most flourishing area of textile industries. An ample of job opportunities is available for the students of this branch. This sector contributes on a large scale to national & global markets in the field of synthetic fibre-fabric processing. Surat is a City of textiles and is famous for Synthetic Sarees & Dress Materials. About 500 Textile Processing units are working in Surat and surrounding and daily average processing 50,000 meters of different textile verities in each unit. Day by day modernization is coming in textile industries & therefore to full fill the requirement of technical People are essential. ', '	In Dr. S & S.S. Ghandhy College Textile processing course is running from 1969 by the reorganization of western region committee of technical education and it provides technocrats for Textile Industries. Textile processing technology is the branch of mixture of science & technology. This involves basic concepts of pure chemistry & chemical technology. The student of this discipline learns about various concepts like identification & testing of textile fibres, wet processing of textile fibres, technical textiles, quality & process control, etc as major along with the basic engineering courses in broad sense. Textile Processing Course is having seven Semesters in which six semesters for Class room Study & Practical Work and seventh semester is Industrial Training. Textile processing department also arranged industrial visit for practical knowledge of students.', ''),
(5, 9, 'Electrical Engineering', 'Current Intake:- 60+60 ( Morning + Evening)', '', ''),
(6, 19, 'Mechanical Engineering', 'The institute was started with civil engineering branch in 1955. Later, in 1958 mechanical engineering branch was established. Today institute have 180 students admission in mechanical engineering every year. Out of these 180, 120 students are in I-shift and 60 students are in II-shift. Institute is affiliated with GUJARAT TECHNOLOGICAL UNIVERSITY (GTU) since 2008 before that courses were governed by TECHNICAL EDUCATION BOARD GHANDHINAGAR, GUJARAT. Today the administration of the institute is governed by Commissionorate of Technical Education Gandhinagar. ', 'Department have well established lab facilities for practical performance which provide better understanding of basic and fundamental concept of engineering and machine maintenance as well. Department possess fluid lab, measurement lab, thermal lab, computer lab, industrial engineering lab.  \r\nWe have well established workshop, having latest machine tool which provide atmosphere of industry which helps in cultivating industrial discipline and safety among students.\r\n', ''),
(7, 21, 'Metallurgy', 'Established in 1966, the department of Metallurgy of Dr. S. & S. S. Ghandhy College of Engineering and Technology in Surat, South Gujarat. The department strives hard in order to fulfil the growing global demands of skilled human resource in the field of metals. The annual intake for Diploma is 60 students. Additionally, the students from ITI are given the lateral entry in second year annually.', '', ''),
(8, 24, 'Power Electronics ', 'Since 1984, Government of Gujarat has\r\noffered 03 Year Power electronics course\r\nfor the under graduate students with an\r\nintake of 20 seats. Being\r\nmultidisciplinary branch no of intake\r\nwere increased from 20 to 30 and 30 to\r\n60 from 1990 to 2001 respectively.\r\nDepartment has established various\r\nlaboratories like power electronics lab,\r\nbasic electronics lab, instrumentation lab,\r\ncomputer lab, project lab etc along with\r\nmodern instruments for the laboratory\r\nexperiments in the emerging world of\r\npower electronics and research work.\r\nDepartment offered six months industrial\r\ntraining program along with project to\r\nfinal year students in various industries\r\nlike ESSAR, KRIBHKO, NTPC, RELIANCE, L & T,HIREL, INDUCTOTHERM, ELECTROTHERM etc.\r\nDepartment has well qualified and experienced staff having M.E./M.Tech degree.', 'EPdowuceart iEolne cwtrhonicihcs pirso av iduensi qtuhee ckonuorswel eodfgfeer eodf bPyo wvaerri o(uelse cIItTrisc, pStoawteesr )a, nEdle Fctorroenigicns Uannidv eCrsointiterso la ts yHstiegmhesr. aPnodw edr iestnrgibinuetieornin go fd eeallesc twriicth ptohwe esrt atwich ialen dE rloectatrtoinngic ps odweearl se qwuiitphm ethnet fostru tdhye ogfe naedravtainocne, dt rasnolsimd issstiaotne sSeommiec oonf dtuhcet oimr ppoorwtaenr td aesvpiceecsts aonfd p coiwrceur itesl efcotrr oPnoicwse irs ceonnevregrys isoanv intog ,m peoewt etrh qeu daelistiyr eidm pcoronvteroml eonbtj,e HctVivDeCs. ientcd uwsittrhia hl igpho lplurtoidounc. tIivni tyb rainefd w imellp reodvuecmaetendt oafn qdu awlietlyl intr athinee pdr opcoewsse rc oenletrcotlr oinndicuss terniegsi naneedr rwedourkc tiaosn aonf electrical, electronics, instrumentation and control engineer.', ''),
(9, 1001, 'General Department', 'General Department of the institute consists of lecturers of English, Maths, Physics and Chemistry subjects. Science is the foundation of all technical courses. The Basic aim of teaching science and mathematics is to develop the habit of scientific inquiry and ability to establish the cause and effect relationship. English is very much essential for technical students as it develops communication skills in them and helps them to keep pace with the fast changing modern world. Thus good foundation in General department subjects will help the students in their self development, to cope up with continuous flow of innovations.', 'General Department has physics and chemistry laboratory with basic experimental facilities. The department enthusiastically participate in all the programmes/activities like YOGA day celebration, Swachchh bharat mission etc. In 1 & 2 semester, Students submit their basic Physics related projects like electric bell, robot from toy car, metal scanner, various energy conservation models etc. at the end of their semester.', ''),
(10, 2, 'Automobile Engineering', 'Automobile engineering department is one of the oldest departments of this premier institute since 1955. The diploma automobile engineering course is approved by All India council for technical education, New Delhi and this course is affiliated to Gujarat Technological university-Ahmedabad. At the time of commencement of the course, the intake capacity of students was 30 and now currently it is 60.  Duration of course is six semesters (including one full term industrial training which is offered   in fifth semester). ', 'The department is having four well-ventilated classrooms with sitting facility for approx. 210 students in total. The department is also having one seminar room. Faculties of department arrange many lecturers using multimedia projector. The department is having five well equipped laboratories as tabulated under.', ''),
(11, 1002, 'Administrative Department', '', '', ''),
(12, 1000, 'Applied Mechanics', 'Applied Mechanics Department undertakes academic work of some of the subjects of Civil, Mechanical, Automobile and Metallurgical Engineering.  Department has vastly experienced faculties and supporting staff.  Department has fully equipped laboratories for Applied Mechanics, Strength of Material, Soil Engineering and Concrete Technology. ', 'Applied Mechanics laboratory is equipped with Screw Jack, Wheel and axial, force polygon apparatus, etc. Strength of Material laboratory is equipped with Compression Testing Machine, Universal Tensile Testing Machine, Izod and Charpy Impact Testing Machine, Hardness Testing Machine, etc. Soil engineering laboratory is equipped with necessary equipments required for testing of soil such as Liquid limit apparatus, Hot air oven, varies sieves, Permeability apparatus, Shear test apparatus. Concrete laboratory is equipped with Compression Testing Machine, Vibrating table, Slump test apparatus, Flakiness and elongation index test apparatus, etc.', 'Department also regularly organize subject related Industrial visit for students of Civil Engineering and also organized Expert lectures. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `clg_downloads`
--

CREATE TABLE IF NOT EXISTS `clg_downloads` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clg_faculty`
--

CREATE TABLE IF NOT EXISTS `clg_faculty` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch_code` int(2) NOT NULL,
  `post` varchar(15) NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `ocontact` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile_img` varchar(2000) NOT NULL,
  `birthdate` date NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_faculty`
--

INSERT INTO `clg_faculty` (`id`, `fname`, `mname`, `lname`, `email`, `branch_code`, `post`, `qualification`, `contact`, `ocontact`, `gender`, `profile_img`, `birthdate`, `start_date`) VALUES
(1, 'Dhaval', 'Rajendrakumar', 'Gandhi', 'dhavalgandhi88@gmail.com', 16, 'HOD', 'B.E.', '0000000000', '', 'Mr.', '1.jpeg', '1988-02-06', '2011-05-25'),
(2, 'Bhavini', 'Satishbhai', 'Patel', 'bhavini8226@gmail.com', 16, 'Lecturer', 'B.E.', '0000000000', '', 'Mrs.', '2.jpeg', '1982-09-26', '2008-09-23'),
(3, 'Mitul', 'Rajeshbhai', 'Patel', 'mitulpatel3979@gmail.com', 16, 'Lecturer', 'B.E.', '9033990063', '', 'Mr.', '3.jpeg', '1991-04-22', '2012-06-10'),
(4, 'Mahesh', 'Becharbhai', 'Raghvani', 'raghvani.mahesh@gmail.com', 16, 'Lecturer', 'B.E.', '9909150390', '', 'Mr.', '4.jpeg', '1991-07-15', '2013-05-03'),
(5, 'Suhani', 'Maheshbhai', 'Chauhan', 'suhanichauhan1991@gmail.com', 16, 'Lecturer', 'B.E.', '9825108121', '', 'Ms.', '5.jpeg', '1991-09-23', '2013-06-03'),
(6, 'Kunal', 'Subhash', 'Patil', 'kunalpatil7121993@gmail.com', 16, 'Lab Assistant', 'B.E.', '9913739583', '', 'Mr.', '6.jpeg', '1993-07-12', '2013-12-17'),
(7, 'Kiran', 'surendrakumar', 'gupta', 'kg15@rediffmail.com', 16, 'Lab Assistant', 'B.E.', '0000000000', '', 'Ms.', '', '1973-11-15', '1997-12-24'),
(8, 'Nirmalaben', 'a', 'Patel', '', 16, 'Peon', 'H.S.C.', '0000000000', '', 'Mrs.', '', '1111-01-01', '1111-01-01'),
(9, 'SHAILENDRAKUMAR', 'MAGANBHAI', 'MISTRY', 'shail_mistry@yahoo.co.in', 6, 'HOD', 'M.E.', '9824380303', '', 'Mr.', '9.', '1974-12-19', '2016-01-07'),
(10, 'BHARATSINH', 'JAMALSINH', 'MAHIDA', '', 6, 'HOD', 'M.E.', '9427884949', '', 'Mr.', '10.', '1968-01-14', '2012-10-03'),
(11, 'ANILBHAI', 'BHAGUBHAI', 'PATEL', '', 6, 'Lecturer', 'M.E.', '9427168969', '', 'Mr.', '11.', '1961-11-10', '2016-01-20'),
(12, 'SUNIL', 'DOULATRAM', 'KAKWANI', 'kakwanisunil@gmail.com', 6, 'Lecturer', 'M.E.', '9898882245', '', 'Mr.', '12.', '1968-11-28', '2013-12-10'),
(13, 'DIPAKBHAI', 'PRAFULCHANDRA', 'RAO', 'dipakrao50@yahoo.com', 6, 'Lecturer', 'M.E.', '9426141067', '', 'Mr.', '13.', '1967-07-27', '2011-09-27'),
(14, 'DHARMENDRA', 'VASANTBHAI', 'JARIWALA', 'dv_jariwala@yahoo.com', 6, 'Lecturer', 'B.E.', '8460311274', '', 'Mr.', '14.', '1971-06-09', '2010-07-08'),
(15, 'FIROZ', 'HANIFBHAI', 'MANDAVIYA', 'firoz.mandaviya@gmail.com', 6, 'Lecturer', 'M.E.', '9904236232', '', 'Mr.', '15.', '1985-12-11', '2011-05-30'),
(16, 'SUDHIR', 'BALDEVBHAI', 'PRAJAPATI', 'sbprajapati.eng@gmail.com', 6, 'Lecturer', 'B.E.', '7383372869', '', 'Mr.', '16.', '1990-01-04', '2015-09-15'),
(17, 'BHAVIN', 'JITENDRABHAI', 'KAPADIA', 'bhavinkap@gmail.com', 6, 'Lecturer', 'M.E.', '9909785197', '', 'Mr.', '17.', '1985-05-08', '2015-09-19'),
(18, 'MAHENDRA', 'JIVABHAI', 'PATEL', 'mjmeet@yahoo.com', 6, 'Lecturer', 'B.E.', '9426114938', '', 'Mr.', '18.', '1966-06-01', '2011-07-04'),
(19, 'GOPALBHAI', 'SAMJUBHAI', 'VAGHASIYA', 'gopal.vaghasia@yahoo.com', 6, 'HOD', 'B.E.', '9427130808', '', 'Mr.', '19.', '1966-05-01', '2016-01-08'),
(20, 'JIGNESH', 'MULJIBHAI', 'VALA', 'vala13512@gmail.com', 6, 'Lecturer', 'B.E.', '7878594775', '', 'Mr.', '20.', '1986-02-08', '2013-03-05'),
(21, 'ALOK', 'RAMENDRA', 'TIWARI', 'alok080s@live.in', 6, 'Lecturer', 'B.E.', '8469091810', '', 'Mr.', '21.', '1990-04-05', '2013-03-08'),
(22, 'PRATIK', 'VINODLAL', 'MEHTA', 'mehtapratik18@gmail.com', 6, 'Lecturer', 'B.E.', '9724070423', '', 'Mr.', '22.', '1991-07-18', '2013-10-25'),
(23, 'SAGAR', 'MOHANBHAI', 'GAVANDE', 'er.sagargavande10@gmail.com', 6, 'Lecturer', 'B.E.', '9924245462', '', 'Mr.', '23.', '1991-10-20', '2014-10-22'),
(24, 'BHARATBHAI', 'RAVJIBHAI', 'PATEL', '', 6, 'Lab Assistant', 'B.E.', '9428822098', '', 'Mr.', '24.', '1970-01-01', '1995-07-14'),
(25, 'CHETANKUMAR', 'NAGINDAS', 'RANA', '', 6, 'Lab Assistant', 'B.E.', '9408766393', '', 'Mr.', '25.', '1975-03-14', '1997-01-29'),
(26, 'Dipal', 'Hareshbhai', 'Panchal', 'dipalpanchal23@gmail.com', 29, 'HOD', 'B.E.', '9925243289', '', 'Mr.', '26.png', '1988-01-23', '2014-11-19'),
(27, 'Mital', 'Shankerlal', 'Bhadigar', 'mitalbhadigar@yahoo.com', 29, 'Lecturer', 'B.E.', '9909884263', '', 'Ms.', '27.png', '1973-12-20', '2014-01-18'),
(28, 'Chetan', 'Dakubhai', 'Nakrani', 'chetannakrani@yahoo.com', 29, 'Lecturer', 'B.E.', '9374758561', '', 'Mr.', '28.png', '1985-05-15', '2015-09-10'),
(29, 'Hiren', 'Jitendrakumar', 'Jaiswal', 'hirenjaiswal@yahoo.com', 29, 'Lecturer', 'M.E.', '9909009308', '', 'Mr.', '29.png', '1986-04-18', '2015-09-16'),
(30, 'Dilip', 'Gulabbhai', 'Desai', 'desaidg@rediffmail.com', 29, 'Lecturer', 'B.E.', '9825898067', '', 'Mr.', '30.png', '1958-07-07', '1983-03-25'),
(31, 'RAMESHBHAI', 'GIRDHARBHAI', 'PATEL', 'rameshg.patel@yahoo.co.in', 28, 'In Ch1arge HOD', 'M.E.', '9428409912', '', 'Mr.', '31.png', '1963-02-14', '1996-06-27'),
(32, 'RIDDHISH', 'MAHADEVBHAI', 'PANDYA', 'ridpandya@gmail.com', 28, 'Lecturer', 'M.E.', '9428409925', '', 'Mr.', '32.png', '1978-12-25', '2007-01-20'),
(33, 'MITESH', 'SHAHSHIKANTBHAI', 'SHAH', 'jalaram_42@yahoo.com', 28, 'Lecturer', 'B.E.', '9737732233', '', 'Mr.', '33.png', '1985-07-11', '2015-09-29'),
(34, 'DHAVAL', 'DHANESHCHANDRA', 'VYAS', 'ddvyas4edu@gmail.com', 28, 'Lecturer', 'B.E.', '9879479424', '', 'Mr.', '34.png', '1983-09-11', '2015-03-09'),
(35, 'PAVAN', 'DHANSUKHLAL', 'PANWALA', 'pavan.panwala@hotmail.com', 28, 'Lecturer', 'B.E.', '7228864465', '', 'Mr.', '35.png', '1983-12-26', '2015-10-09'),
(36, 'BHARAT', 'HIMMATBHAI', 'VYAS', 'bhvyas211160@rediffmail.com', 28, 'Lab Assistant', 'B.E.', '9925709700', '', 'Mr.', '36.png', '1960-11-21', '1983-01-20'),
(37, 'CHATURBHAI', 'SHIVABHAI', 'SOLANKI', '', 28, 'Peon', 'B.E.', '9687935940', '', 'Mr.', '37.png', '1956-05-25', '1979-02-11'),
(38, 'SUNITA', 'ANIL', 'DHAWAN', 'sntdhawan@gmail.com', 9, 'HOD', 'M.E.', '9428409936', '', 'Mrs.', '38.png', '1968-08-13', '1994-03-03'),
(39, 'KRISHNA', 'SURESHBHAI', 'DAVE', 'ksd1751972@yahoo.com', 9, 'Lecturer', 'M.E.', '9925016346', '', 'Mrs.', '39.png', '1972-05-17', '1995-06-07'),
(40, 'FARZANA', 'YAKUB', 'MUNSHI', 'munshify@yahoo.co.in', 9, 'Lecturer', 'B.E.', '9825335093', '', 'Mrs.', '40.png', '1973-12-23', '1997-02-21'),
(42, 'BRIJESH', 'RAMJIBHAI', 'TANDEL', 'tanbrij@yahoo.co.in', 9, 'Lecturer', 'M.E.', '9824777824', '', 'Mr.', '41.png', '1978-12-04', '2001-03-27'),
(43, 'PARUL', 'KARSHANBHAI', 'JAGANI', 'parulmp@gmail.com', 9, 'Lecturer', 'M.E.', '9033104049', '', 'Ms.', '43.png', '1972-07-10', '2011-02-05'),
(44, 'PARULA', 'RAMNIKBHAI', 'AGHERA', 'parulaa79@gmail.com', 9, 'Lecturer', 'M.E.', '9998223375', '', 'Ms.', '44.png', '1979-07-31', '2008-04-08'),
(45, 'CHETAN', 'DIPAKBHAI', 'CHAUDHARI', 'cdchaudhariee@gmail.com', 9, 'Lecturer', 'B.E.', '9033160985', '', 'Mr.', '45.png', '1991-10-23', '2015-12-15'),
(46, 'TALSIBHAI', 'DHANJIBHAI', 'PATEL', 'tulsidpatel@yahoo.com', 9, 'Lecturer', 'B.E.', '7600059717', '', 'Mr.', '46.png', '1959-11-30', '1987-03-18'),
(47, 'HIRAL', 'MAYANKKUMAR', 'SHAH', 'hiralshah781@gmail.com', 9, 'Lecturer', 'B.E.', '9228266962', '', 'Mrs.', '47.png', '1981-07-06', '2008-08-08'),
(48, 'GHANSHYAM', 'RAMESHBHAI', 'PRAJAPATI', 'ghanshyamp518@gmail.com', 9, 'Lecturer', 'B.E.', '9510466210', '', 'Mr.', '48.png', '1990-10-10', '2012-04-10'),
(49, 'DARSHAN', 'PRAKASHCHANDRA', 'MITHAIWALA', 'darshanmithaiwala@gmail.com', 9, 'Lecturer', 'B.E.', '9638556249', '', 'Mr.', '49.png', '1991-10-22', '2013-10-22'),
(50, 'RAVIBHAI', 'NAVALBHAI', 'GAMIT', 'ravigamit22@gmail.com', 9, 'Lecturer', 'B.E.', '9924455653', '', 'Mr.', '50.png', '1992-07-18', '2013-10-23'),
(51, 'KISHAN', 'HASMUKHBHAI', 'PATEL', 'iamkishanpatel@gmail.com', 9, 'Lecturer', 'B.E.', '9898965690', '', 'Mr.', '51.png', '1990-05-12', '2013-10-23'),
(52, 'DHRUTI', 'PRAVINSINH', 'PATEL', 'dcvl143@gmail.com', 9, 'Lab Assistant', 'B.E.', '9712952074', '', 'Mrs.', '52.png', '1984-10-29', '2014-02-24'),
(53, 'MAHESH', 'PUNJYABHAI', 'PATEL', 'mppatel3663@gmail.com', 9, 'Lab Assistant', 'B.E.', '9712783118', '', 'Mr.', '53.png', '1961-05-25', '1981-11-27'),
(54, 'DILIP', 'TIDABHAI', 'KASHIPARA', 'dtk_kashipara@yahoo.com', 9, 'Lab Assistant', 'B.E.', '9426131931', '', 'Mr.', '54.png', '1959-12-22', '1985-01-25'),
(55, 'DIPAK', 'KALIDAS', 'DHODIYA', 'dipakdhodiya2803@gmail.com', 9, 'Peon', 'B.E.', '9426831613', '', 'Mr.', '55.', '1971-03-28', '1995-06-22'),
(56, 'NAGJIBHAI', 'ARJANBHAI', 'SANGANI', 'nasangani@yahoo.in', 19, 'HOD', 'M.E.', '9427462880', '', 'Mr.', '56.png', '1969-06-01', '1991-11-04'),
(57, 'BHIKHALAL', 'JIVARAJBHAI', 'SONANI', 'bjsonani@yahoo.com', 19, 'HOD', 'M.E.', '9428409933', '', 'Mr.', '57.png', '1969-05-18', '1992-05-08'),
(58, 'MAHESHBHAI', 'AMBALAL', 'PRAJAPATI', 'map403@yahoo.com', 19, 'Lecturer', 'B.E.', '9427304927', '', 'Mr.', '58.png', '1970-01-15', '1994-07-19'),
(59, 'CHETAN', 'BHAGAVANBHAI', 'VAGHANI', 'cbv_2008@yahoo.com', 19, 'Lecturer', 'M.E.', '9925575965', '', 'Mr.', '59.png', '1975-07-09', '1998-07-13'),
(60, 'MOHAMMADTAUSIF', 'NASIRUDDIN', 'ANSARI', 'tausifansari1986@gmail.com', 19, 'Lecturer', 'B.E.', '9998295245', '', 'Mr.', '60.png', '1986-01-24', '2011-05-19'),
(61, 'AMARKUMAR', 'RAJESHBHAI', 'SHAH', 'amar_er1@yahoo.co.in', 19, 'Lecturer', 'B.E.', '8460431541', '', 'Mr.', '61.png', '1978-10-18', '2011-01-31'),
(62, 'ATUL', 'SHANTILAL', 'SHAH', 'asshah97@rediffmail.com', 19, 'Lecturer', 'Ph.D.', '9428409876', '', 'Dr.', '62.png', '1961-06-09', '2013-12-10'),
(63, 'PIYUSH', 'LALJIBHAI', 'BHOGAYATA', 'pl_bhogayata@yahoo.co.in', 19, 'Lecturer', 'M.E.', '9925044210', '', 'Mr.', '63.png', '1982-02-12', '2011-05-24'),
(64, 'ASHISHKUMAR', 'DIPAKKUMAR', 'DHANGAR', 'ashisdhangar@gmail.com', 19, 'Lecturer', 'M.E.', '9428147866', '', 'Mr.', '64.', '1981-10-09', '2007-08-31'),
(65, 'RITABEN', 'SANJAYKUMAR', 'PATEL', 'rita_sanjay.patel@yahoo.com', 19, 'Lecturer', 'M.E.', '9898322992', '', 'Mrs.', '65.png', '1973-05-30', '1998-07-13'),
(66, 'BHAVESH', 'NANUBHAI', 'PATEL', 'bhaveshmoksh77@yahoo.com', 19, 'Lecturer', 'M.E.', '9879235543', '', 'Mr.', '66.png', '1977-10-18', '2004-08-28'),
(67, 'DILIPBHAI', 'DAHYABHAI', 'PATEL', 'dilip_1905@yahoo.co.in', 19, 'Lecturer', 'B.E.', '9429276954', '', 'Mr.', '67.png', '1982-05-19', '2008-10-04'),
(68, 'JIGNESH', 'JIVARAJBHAI', 'GOPANI', 'jignesh.j.gopani@gmail.com', 19, 'Lecturer', 'B.E.', '8866834003', '', 'Mr.', '68.png', '1991-10-16', '2013-10-22'),
(69, 'BHAVESHKUMAR', 'DAMJIBHAI', 'SHANKAR', 'shankar8484bme@gmail.com', 19, 'Lecturer', 'B.E.', '9712008946', '', 'Mr.', '69.png', '1990-09-01', '2013-03-04'),
(70, 'VISHAL', 'LAXMANBHAI', 'MIYANI', 'miyanivishal007@gmail.com', 19, 'Lecturer', 'B.E.', '9913388031', '', 'Mr.', '70.png', '1991-05-15', '2013-03-04'),
(71, 'KETANKUMAR', 'HASMUKHBHAI', 'PATEL', 'ketanpatel469@gmail.com', 19, 'Lecturer', 'B.E.', '8866360687', '', 'Mr.', '71.png', '1991-12-23', '2013-03-04'),
(72, 'JAGDISHBHAI', 'HANSRAJBHAI', 'RAMANI', 'ramanijagdish11@gmail.com', 19, 'Lecturer', 'B.E.', '9924622914', '', 'Mr.', '72.png', '1993-03-26', '2013-03-06'),
(73, 'AXESHKUMAR', 'DILIPBHAI', 'PATEL', 'er.axeshpatel@gmail.com', 19, 'Lecturer', 'B.E.', '9662288077', '', 'Mr.', '73.png', '1991-12-23', '2013-03-05'),
(74, 'KARUNESH', 'DHANSUKHLAL', 'CHAUDHARI', 'kd9806@gmail.com', 19, 'Lecturer', 'B.E.', '9879055906', '', 'Mr.', '74.png', '1986-08-04', '2015-09-14'),
(75, 'VIMALKUMAR', 'PRAVINCHANDRA', 'PALSANAWALA', 'vppalsanawala@rediffmail.com', 19, 'Lecturer', 'M.E.', '9824703832', '', 'Mr.', '75.png', '1979-01-09', '2005-03-01'),
(76, 'BHARATKUMAR', 'BHIMJIBHAI', 'BELADIYA', 'bharat52313@gmail.com', 19, 'Lecturer', 'M.E.', '9427121133', '', 'Mr.', '76.png', '1974-07-03', '2005-02-28'),
(77, 'MOHAMMED', 'SUHAIL', 'SHAIKH', 'er.suhailshaikh@gmail.com', 19, 'Lecturer', 'B.E.', '7405374151', '', 'Mr.', '77.png', '1990-03-10', '2013-03-04'),
(78, 'RUPALBEN', 'DURLABHBHAI', 'SURTI', 'rupalsurtissg@gmail.com', 19, 'Lab Assistant', 'B.E.', '9574419000', '', 'Mrs.', '78.png', '1982-06-29', '2013-12-13'),
(79, 'SATISHBHAI', 'GANGARAM', 'SOLANKI', '', 19, 'Peon', 'B.E.', '', '', 'Mr.', '79.png', '1958-05-25', '1981-02-03'),
(80, 'CHINTAN', 'CHAMPAKBHAI', 'VORA', 'ccvora89@gmail.com', 19, 'Lecturer', 'B.E.', '9662112865', '', 'Mr.', '80.png', '1989-11-14', '2013-03-06'),
(81, 'CHANDRESH', 'MAGANBHAI', 'VASOYA', 'chandreshvasoya@gmail.com', 19, 'Lab Assistant', 'B.E.', '9687600740', '', 'Mr.', '81.', '1986-06-17', '2013-11-08'),
(82, 'ANKUR', 'ARUNBHAI', 'PATEL', 'ankur.2599@gmail.com', 19, 'Lecturer', 'B.E.', '9724330157', '', 'Mr.', '82.', '1990-04-25', '2012-10-09'),
(83, 'HIMANSHU', 'a', 'CHAUDHARI', '', 19, 'Lecturer', 'M.E.', '8238664797', '', 'Mr.', '83.', '2016-01-01', '2016-01-01'),
(84, 'BHIKHABHAI', 'a', 'PRAJAPATI', '', 19, 'Peon', 'B.E.', '', '', 'Mr.', '84.', '2016-01-01', '2016-01-01'),
(85, 'BINDU', 'HITESH', 'GOYAL', 'bindugoyal07@yahoo.com', 21, 'HOD', 'M.E.', '9428409947', '', 'Mrs.', '85.png', '1969-11-16', '1994-06-29'),
(86, 'SURESHBHAI', 'FOGATBHAI', 'PARMAR', 'sfparmar14@gmail.com', 21, 'Lecturer', 'M.E.', '9586267773', '', 'Mr.', '86.png', '1978-02-14', '2010-10-29'),
(87, 'SONAM', 'MUKESHKUMAR', 'PATEL', 'smp22789@yahoo.com', 21, 'Lecturer', 'M.E.', '9904138938', '', 'Mrs.', '87.png', '1989-07-22', '2015-07-23'),
(88, 'KEYUR', 'VINODCHANDRA', 'PANCHAL', 'keyurvpanchal@gmail.com', 21, 'Lecturer', 'B.E.', '9924317128', '', 'Mr.', '88.png', '1990-02-28', '2013-04-03'),
(89, 'URVI', 'VIJAYBHAI', 'LAD', 'urvihprajapati@gmail.com', 21, 'Lecturer', 'B.E.', '9974755913', '', 'Ms.', '89.png', '1991-05-15', '2013-02-03'),
(90, 'Kalpaj', 'Jagdirshchandra', 'Dhimar', 'kjdhimar@yahoo.com', 24, 'HOD', 'M.E.', '9913123759', '', 'Mr.', '90.jpeg', '1969-07-14', '1992-11-12'),
(91, 'Sunil', 'Amrutlal', 'Patel', 'patel_sunil5@gtu.edu.in', 24, 'Lecturer', 'M.E.', '9898073753', '', 'Mr.', '91.jpeg', '1985-08-03', '2009-08-13'),
(92, 'Vinodbhai', 'Natubhai', 'Makwana', 'makwana_vinodbhai@gtu.edu.in', 24, 'Lecturer', 'M.E.', '9427386784', '', 'Mr.', '92.jpeg', '1979-10-08', '2010-06-03'),
(93, 'Shailesh', 'Laljibhai', 'Dhoriyani', 'shailesh_pwe@yahoo.co.in', 24, 'Lecturer', 'B.E.', '9913776990', '', 'Mr.', '93.png', '1986-05-06', '2012-02-01'),
(94, 'Jayshree', 'Maheshkumar', 'Patel', 'jmp_sai@yahoo.com', 24, 'Lecturer', 'B.E.', '9426879374', '', 'Mrs.', '94.jpeg', '1963-10-26', '1987-09-17'),
(95, 'Mehulkumar', 'Setabhai', 'Domda', 'mehuldomda1023@gmail.com', 21, 'Lab Assistant', 'B.E.', '9727032628', '', 'Mr.', '95.jpeg', '1991-06-12', '2013-12-18'),
(96, 'Rajeshbhai', 'Bhagubhai', 'Patel', '', 24, 'Peon', 'B.E.', '9638740545', '', 'Mr.', '96.jpeg', '1978-08-10', '1999-04-23'),
(97, 'KIRITBHAI', 'KANTIBHAI', 'PATEL', 'kirit_k_patel1000@yahoo.co.in', 1000, 'HOD', 'M.E.', '9426853412', '', 'Mr.', '97.jpeg', '1961-06-01', '1989-05-01'),
(98, 'CHANDRESH', 'HARIPRASAD', 'BHATT', 'chbhatt_2001@yahoo.com', 1000, 'Lecturer', 'M.E.', '9426856030', '', 'Mr.', '98.jpeg', '1968-07-07', '1991-08-20'),
(99, 'VIKASH', 'ARUNKUMAR', 'JHA', 'vikasurmi@yahoo.co.in', 1000, 'Lecturer', 'M.E.', '9586393151', '', 'Mr.', '99.bmp', '1969-06-02', '1996-05-24'),
(100, 'DIPALI', 'NILANGKUMAR', 'GAYWALA', 'dipaligaywala@ymail.com', 1000, 'Lecturer', 'M.E.', '9428451959', '', 'Mrs.', '100.jpeg', '1974-12-22', '2005-03-03'),
(101, 'JITENDRA', 'DHIRAJLAL', 'VAGHELA', 'VAGHELA_JITENDRA@gtu.edu.in', 1000, 'Lecturer', 'B.E.', '9408716136', '', 'Mr.', '101.bmp', '1977-10-10', '2005-03-01'),
(102, 'JAYMIN', 'AMRUTBHAI', 'PATEL', 'jayminpatel8811@gmail.com', 1000, 'Lecturer', 'M.E.', '9428576021', '', 'Mr.', '102.jpeg', '1991-02-13', '2015-07-14'),
(103, 'AASHISH', 'HARISHKUMAR', 'SONI', 'soni_ashish@gtu.edu.in', 1000, 'Lecturer', 'M.E.', '9408478886', '', 'Mr.', '103.jpeg', '1985-06-17', '2016-02-24'),
(104, 'DHRUVKUMAR', 'BHARATKUMAR', 'PARTIWALA', 'dhruv6001@gmail.com', 1000, 'Lecturer', 'M.E.', '9824500979', '', 'Mr.', '104.jpeg', '1991-11-11', '2016-02-26'),
(105, 'FALGUNI', 'THAKORBHAI', 'RATHOD', 'fagurathod2007@gmail.com', 1000, 'Lecturer', 'M.E.', '8469480689', '', 'Mrs.', '105.jpeg', '1986-07-19', '2016-03-01'),
(106, 'ANILKUMAR', 'MOHANBHAI', 'MAKWANA', 'anilmakwana69@yahoo.com', 1000, 'Lab Assistant', 'S.S.C.', '9428409850', '', 'Mr.', '106.', '1969-10-25', '1992-09-19'),
(107, 'MAHESH', 'LALLUBHAI', 'JOSHI', '', 1000, 'Peon', 'S.S.C.', '9925754394', '', 'Mr.', '107.', '1970-05-13', '1997-01-31'),
(108, 'JAYENDRA', 'CHANDRAVADAN', 'JOSHI', 'joshi_jayendra@yahoo.co.in', 1001, 'Lecturer', 'M.E.', '9427577198', '', 'Mr.', '108.png', '1974-04-16', '1999-11-19'),
(109, 'NIRMAL', 'MANSIGHBHAI', 'CHAUDHARI', 'nirmal849c@gmail.com', 1001, 'Lecturer', 'M.E.', '9979987145', '', 'Mrs.', '109.png', '1984-09-07', '2011-12-05'),
(110, 'PURVI', 'HARSUKHBHAI', 'PATEL', 'pikah29@gmail.com', 1001, 'Lecturer', 'M.E.', '9909987683', '', 'Mrs.', '110.png', '1985-02-09', '2014-08-19'),
(111, 'TARUNKUMAR', 'MOHANBHAI', 'PATEL', 'tarunjadu@gmail.com', 1001, 'Lecturer', 'M.E.', '7383551763', '', 'Mr.', '111.png', '1990-11-15', '2014-11-12'),
(112, 'GAURANGKUMAR', 'SHIVABHAI', 'PATEL', 'goru16686@gmail.com', 1001, 'Lecturer', 'Ph.D.', '9909986859', '', 'Dr.', '112.png', '1986-06-16', '2015-01-23'),
(113, 'DOLI', 'RAMESHCHANDRA', 'MODI', 'dolimodi2912@gmail.com', 1001, 'Lecturer', 'M.E.', '9725788555', '', 'Mrs.', '113.png', '1985-12-29', '2013-10-22'),
(114, 'JINAL', 'JATINBHAI', 'SHAH', 'jinal.shah1291@yahoo.com', 1001, 'Lecturer', 'M.E.', '9727796902', '', 'Mrs.', '114.png', '1990-12-06', '2013-10-22'),
(115, 'GEETABEN', 'SARADBHAI', 'NAIK', '', 1001, 'Lecturer', 'S.S.C.', '8469795496', '', 'Mrs.', '115.', '1956-10-12', '2013-11-07'),
(117, 'VASU', 'ARUN', 'KANABAR', 'officessg612@gmail.com', 1002, 'Head Clerk', 'M.Com', '', '', 'Mr.', '116.png', '1965-06-02', '1986-07-26'),
(118, 'PRAKASH', 'NATVARLAL', 'GANDHI', 'officessg612@gmail.com', 1002, 'Accountant', 'M.Com', '', '', 'Mr.', '118.png', '1961-07-23', '1982-09-17'),
(119, 'NARENDRA', 'BALSHANKAR', 'TRIVEDI', 'officessg612@gmail.com', 1002, 'Sr. Clerk', 'B.Com', '', '', 'Mr.', '119.png', '1964-10-09', '1983-09-14'),
(120, 'JANTIBHAI', 'NATHUBHAI', 'PATEL', 'officessg612@gmail.com', 1002, 'Sr. Clerk', 'S.S.C.', '', '', 'Mr.', '120.png', '1960-06-15', '1981-07-18'),
(121, 'VARSHABEN', 'THAKORBHAI', 'DESAI', 'officessg612@gmail.com', 1002, 'Sr. Clerk', 'B.Com', '', '', 'Mrs.', '121.', '1960-04-28', '1984-08-31'),
(122, 'BELABEN', 'GUNVANTRAI', 'BHAVSAR', 'officessg612@gmail.com', 1002, 'Sr. Clerk', 'B.Com', '', '', 'Mrs.', '122.', '1970-05-08', '1990-06-19'),
(123, 'VIJAYBHAI', 'CHHAGANBHAI', 'PARMAR', 'officessg612@gmail.com', 1002, 'Sr. Clerk', 'S.S.C.', '', '', 'Mr.', '123.png', '1967-07-06', '1987-03-23'),
(124, 'DIPAK', 'DHANSUKHBHAI', 'BARODIYA', 'officessg612@gmail.com', 1002, 'Sr. Clerk', 'H.S.C', '', '', 'Mr.', '124.png', '1963-03-11', '1997-03-21'),
(125, 'AMISHA', 'DEVENDRA', 'PANCHAL', 'officessg612@gmail.com', 1002, 'Sr. Clerk', 'B.A.', '0000000000', '', 'Mrs.', '125.', '1980-12-17', '2001-08-06'),
(126, 'RITA', 'HITESH', 'CHAUDHARI', 'officessg612@gmail.com', 1002, 'Jr. Clerk', 'M.A.', '', '', 'Mrs.', '126.', '1983-05-18', '2005-09-23'),
(127, 'KISHOR', 'DANABHAI', 'PARMAR', 'officessg612@gmail.com', 1002, 'Jr. Clerk', 'H.S.C', '', '', 'Mr.', '127.png', '1985-09-10', '2015-09-10'),
(128, 'KANTIBHAI', 'PARSOTTAMBHAI', 'PATEL', 'officessg612@gmail.com', 1002, 'Store Keeper', 'B.Com', '', '', 'Mr.', '128.', '1965-02-12', '1996-09-01'),
(129, 'NAVINCHANDRA', 'JERAMBHAI', 'CHAUDHARI', 'officessg612@gmail.com', 1002, 'Librarian', 'B.A', '', '', 'Mr.', '129.', '1968-09-01', '1998-09-02'),
(130, 'HITESHBHAI', 'BHIKHABHAI', 'PATEL', 'officessg612@gmail.com', 1002, 'Peon', 'S.S.C.', '', '', 'Mr.', '130.png', '1973-12-14', '1995-06-08'),
(131, 'KISHOR', 'V', 'SURTI', '', 1002, 'Peon', 'S.S.C.', '', '', 'Mr.', '131.png', '1975-08-04', '1995-09-07'),
(132, 'DAXA', 'JASHVANTBHAI', 'CHAUHAN', '', 1002, 'Peon', 'S.S.C.', '', '', 'Mrs.', '132.', '1980-02-18', '1995-11-16'),
(133, 'JAYESH', 'RAMUBHAI', 'LAD', '', 1002, 'Hamaal', 'S.S.C.', '', '', 'Mr.', '133.png', '1971-09-02', '1997-01-28'),
(134, 'JAMUBHAI', 'BHAGUBHAI', 'PATEL', '', 1002, 'Hamaal', 'S.S.C.', '', '', 'Mr.', '134.png', '1962-11-05', '1983-03-07'),
(135, 'JANABHAI', 'H', 'CHAUDHARI', '', 1002, 'Hamaal', 'S.S.C.', '', '', 'Mr.', '135.', '1974-06-07', '1997-02-01'),
(136, 'SNEHAL', 'KANAIYALAL', 'GANATRA', 'snehalganatra@hotmail.com', 2, 'HOD', 'M.E.', '9426154440', '', 'Mr.', '136.png', '1969-01-03', '1995-07-08'),
(137, 'Sweety', 'Snehalkumar', 'Ganatra', 'sweetyganatra@hotmail.com', 2, 'Lecturer', 'M.E.', '9898597800', '', 'Mrs.', '137.png', '1972-08-15', '1995-07-24'),
(138, 'MALINI', 'NITINKUMAR', 'VIBHAKAR', 'mpp3668@hotmail.com', 2, 'Lecturer', 'M.E.', '9428868859', '', 'Mrs.', '138.png', '1968-03-06', '1996-01-22'),
(139, 'Supriti', 'Subrato', 'Maitra', 'supritimaitra@gmail.com', 2, 'Lecturer', 'B.E.', '9510491347', '', 'Mrs.', '139.png', '1983-09-30', '2015-11-09'),
(140, 'Rameshbhai', 'Jadavbhai', 'Ladumor', 'rameshladumor123@gmail.com', 2, 'Lecturer', 'M.E.', '9978049072', '', 'Mr.', '140.png', '1989-05-01', '2015-11-09'),
(141, 'KIRANKUMAR', 'VAJUBHAI', 'JADAV', 'erkiranjadav2005@gmail.com', 2, 'Lecturer', 'B.E.', '9727712005', '', 'Mr.', '141.png', '1989-06-21', '2015-09-15'),
(142, 'Shrikant', 'Kishorkumar', 'Modi', 'skmodi85@gmail.com', 2, 'Lecturer', 'B.E.', '7600059794', '', 'Mr.', '142.png', '1985-11-19', '2015-11-09'),
(143, 'Nirali', 'Dilipkumar', 'Desai', 'dniralim@gmail.com', 2, 'Lab Assistant', 'Diploma', '9429270208', '', 'Mrs.', '143.png', '1983-05-18', '2013-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `clg_gallery`
--

CREATE TABLE IF NOT EXISTS `clg_gallery` (
  `id` int(11) NOT NULL,
  `branch_code` int(10) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_gallery`
--

INSERT INTO `clg_gallery` (`id`, `branch_code`, `path`, `publish_date`) VALUES
(1, 29, 'image001.jpg', '2016-01-01'),
(2, 29, 'image003.jpg', '2016-01-01'),
(3, 29, 'image005.jpg', '2015-01-01'),
(4, 29, 'image007.jpg', '2015-01-01'),
(5, 29, 'image009.jpg', '2015-01-01'),
(6, 28, '1 (1).jpg', '2015-01-01'),
(7, 28, '1 (2).jpg', '2015-01-01'),
(8, 28, '1 (10).jpg', '2015-01-01'),
(9, 28, '1 (7).jpg', '2015-01-01'),
(10, 28, '1 (6).jpg', '2015-01-01'),
(11, 19, 'mech (1).png', '2015-01-01'),
(12, 19, 'mech (2).png', '2015-01-01'),
(13, 19, 'mech (3).png', '2015-12-01'),
(14, 21, 'metal (1).jpg', '2015-01-01'),
(15, 21, 'metal (2).jpg', '2015-01-01'),
(16, 21, 'metal (3).jpg', '2015-01-01'),
(17, 21, 'metal (4).jpg', '2015-01-01'),
(18, 21, 'metal (6).jpg', '2015-01-01'),
(19, 21, 'metal (7).jpg', '2015-01-01'),
(20, 2, 'Auto (1).jpg', '2015-01-01'),
(21, 2, 'Auto (2).jpg', '2016-01-01'),
(22, 2, 'Auto (3).jpg', '2015-01-01'),
(23, 16, 'IT (1).jpg', '2015-01-01'),
(24, 16, 'IT (2).jpg', '2015-01-01'),
(25, 16, 'IT (3).jpg', '2015-01-01'),
(26, 16, 'IT (4).jpg', '2015-01-01'),
(27, 16, 'IT (5).jpg', '2015-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `clg_ncc`
--

CREATE TABLE IF NOT EXISTS `clg_ncc` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `img_title` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_ncc`
--

INSERT INTO `clg_ncc` (`id`, `path`, `img_title`) VALUES
(1, '1.jpg', '1'),
(2, '2.jpg', '2'),
(3, '3.jpg', '3'),
(4, '4.jpg', '4'),
(5, '5.jpg', '5'),
(7, '7.jpg', '7'),
(15, '15.JPG', 'hfhg');

-- --------------------------------------------------------

--
-- Table structure for table `clg_placement`
--

CREATE TABLE IF NOT EXISTS `clg_placement` (
  `id` int(11) NOT NULL,
  `cp_name` varchar(1000) NOT NULL,
  `date` varchar(50) NOT NULL,
  `eligible_branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clg_recruited`
--

CREATE TABLE IF NOT EXISTS `clg_recruited` (
  `id` int(11) NOT NULL,
  `cp_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `studentselected` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clg_article`
--
ALTER TABLE `clg_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `clg_article_addon_img`
--
ALTER TABLE `clg_article_addon_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_article_addon_link`
--
ALTER TABLE `clg_article_addon_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_department`
--
ALTER TABLE `clg_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_downloads`
--
ALTER TABLE `clg_downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_faculty`
--
ALTER TABLE `clg_faculty`
  ADD PRIMARY KEY (`id`), ADD KEY `qualification` (`qualification`);

--
-- Indexes for table `clg_gallery`
--
ALTER TABLE `clg_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_ncc`
--
ALTER TABLE `clg_ncc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_placement`
--
ALTER TABLE `clg_placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_recruited`
--
ALTER TABLE `clg_recruited`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clg_article`
--
ALTER TABLE `clg_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clg_article_addon_img`
--
ALTER TABLE `clg_article_addon_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clg_article_addon_link`
--
ALTER TABLE `clg_article_addon_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clg_department`
--
ALTER TABLE `clg_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `clg_downloads`
--
ALTER TABLE `clg_downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clg_faculty`
--
ALTER TABLE `clg_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `clg_gallery`
--
ALTER TABLE `clg_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `clg_ncc`
--
ALTER TABLE `clg_ncc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `clg_placement`
--
ALTER TABLE `clg_placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clg_recruited`
--
ALTER TABLE `clg_recruited`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
