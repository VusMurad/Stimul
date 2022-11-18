-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Kas 2022, 22:06:49
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `main`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `acca`
--

CREATE TABLE `acca` (
  `ac_id` int(11) NOT NULL,
  `ac_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ac_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ac_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ac_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ac_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ac_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ac_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac_price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ac_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ac_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ac_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `acca`
--

INSERT INTO `acca` (`ac_id`, `ac_name`, `ac_name_eng`, `ac_name_ru`, `ac_description`, `ac_description_eng`, `ac_description_ru`, `ac_create_date`, `ac_update_date`, `ac_price`, `ac_category`, `ac_status`, `ac_img`, `ac_img_ext`) VALUES
(2, 'ACCA Fundamental mərhələ', '.', '.', 'ACCA (The Association of Chartered Certified Accountants - İmtiyazlı Sertifikatlaşdırılmış Mühasiblər Assosiyasiyası) - dünyada ən geniş yayılmış beynəlxalq professional assosiyasiyadır. Bu assosiyasiyada 170 ölkədən 432 000 tələbə və 154 000 üzv qeydiyyatdadır.\r\n\r\nOnun məqsədi dünya üzrə mühasibatlıq, maliyyə və idarəetmə sahəsində uğurlu karyera qurmaq istəyən tələbkar, qabiliyyətli və ambisiyalı insanlar üçün ən yüksək səviyyəli kvalifikasiyalar təklif etməkdir.\r\n\r\nACCA ən yüksək professionallıq, etika və  idarəetmə standartlarına nail olmaq və bu standartları təbliğ etmək, həmçinin ictimai marağın artırılması üçün çalışır. ACCA təşkilatının reputasiyası 100 ildən artıq mühasibatlıq və maliyyə sahəsində kvalifikasiyaların təmin edilməsinə əsaslanır.', '.', '.', '', '', '160', 'Course', 'Active', 'acca.jpg', '.jpg'),
(3, 'ACCA Professional mərhələ', '.', '.', 'ACCA (The Association of Chartered Certified Accountants - İmtiyazlı Sertifikatlaşdırılmış Mühasiblər Assosiyasiyası) - dünyada ən geniş yayılmış beynəlxalq professional assosiyasiyadır. Bu assosiyasiyada 170 ölkədən 432 000 tələbə və 154 000 üzv qeydiyyatdadır.\r\n\r\nOnun məqsədi dünya üzrə mühasibatlıq, maliyyə və idarəetmə sahəsində uğurlu karyera qurmaq istəyən tələbkar, qabiliyyətli və ambisiyalı insanlar üçün ən yüksək səviyyəli kvalifikasiyalar təklif etməkdir.\r\n\r\nACCA ən yüksək professionallıq, etika və  idarəetmə standartlarına nail olmaq və bu standartları təbliğ etmək, həmçinin ictimai marağın artırılması üçün çalışır. ACCA təşkilatının reputasiyası 100 ildən artıq mühasibatlıq və maliyyə sahəsində kvalifikasiyaların təmin edilməsinə əsaslanır.\r\n\r\n Hal-hazırda Azərbaycanlı ACCA tələbə və üzvləri ölkənin iri yerli və xarici şirkətlərində, maliyyə və audit müəssisələrində çalışırlar.', '.', '.', '', '', '170', 'Course', 'Active', 'acca2.jpg', '.jpg'),
(4, 'DipIFR', '.', '.', 'ACCA (The Association of Chartered Certified Accountants - İmtiyazlı Sertifikatlaşdırılmış Mühasiblər Assosiyasiyası) - dünyada ən geniş yayılmış beynəlxalq professional assosiyasiyadır. Bu assosiyasiyada 170 ölkədən 432 000 tələbə və 154 000 üzv qeydiyyatdadır.\r\n\r\nOnun məqsədi dünya üzrə mühasibatlıq, maliyyə və idarəetmə sahəsində uğurlu karyera qurmaq istəyən tələbkar, qabiliyyətli və ambisiyalı insanlar üçün ən yüksək səviyyəli kvalifikasiyalar təklif etməkdir.\r\n\r\nACCA ən yüksək professionallıq, etika və  idarəetmə standartlarına nail olmaq və bu standartları təbliğ etmək, həmçinin ictimai marağın artırılması üçün çalışır. ACCA təşkilatının reputasiyası 100 ildən artıq mühasibatlıq və maliyyə sahəsində kvalifikasiyaların təmin edilməsinə əsaslanır.\r\n\r\n Hal-hazırda Azərbaycanlı ACCA tələbə və üzvləri ölkənin iri yerli və xarici şirkətlərində, maliyyə və audit müəssisələrində çalışırlar.', '.', '.', '', '', '150', 'Course', 'Active', 'accadiplfr.png', '.png'),
(5, 'CIA', '.', '.', 'CIA - Sertifikatlı Daxili Auditor sertifikatı daxili auditorlar üçün dünyada tanınmış beynəlxalq sertifikatdır.\r\n\r\nCIA-nin ixtisas hazırlığı proqramı ilə əldə edilmiş bilik və bacarıqlar beynəlxalq və yerli şirkətlərin daxili audit mütəxəssisləri üçün standartdır.\r\n\r\nCIA şəhadətnaməsi yüksək peşəkarlıq səviyyəsini təsdiqləyir və daxili auditora müvəffəqiyyətli bir karyera qurmaq üçün böyük şans verir.\r\n\r\nÖyrənmə proqramı sizin biliklərinizi sistemləşdirməyə, daxili nəzarət, risklərin idarə edilməsi və korporativ idarəetmədə praktiki bacarıqlar qazanmağa imkan verir.\r\n\r\nƏldə edilən hərtərəfli bilik, bacarıq və üsullar müxtəlif təşkilatlarda və biznes mühitlərində tətbiq oluna bilər.', '.', '.', '', '2022-09-18 17:37:40', '170', 'Course', 'Active', 'cia.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ad_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ad_category` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`ad_id`, `ad_name`, `ad_username`, `ad_password`, `ad_category`) VALUES
(1, 'vus', 'vus', '202cb962ac59075b964b07152d234b70', '[admin]'),
(2, '', '[vusale]', '202cb962ac59075b964b07152d234b70', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `all_courses`
--

CREATE TABLE `all_courses` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_name_eng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_name_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_description_eng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_description_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_creator_id` int(11) NOT NULL,
  `a_create_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_updater_id` int(11) NOT NULL,
  `a_update_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `all_courses`
--

INSERT INTO `all_courses` (`a_id`, `a_name`, `a_name_eng`, `a_name_ru`, `a_category`, `a_description`, `a_description_eng`, `a_description_ru`, `a_status`, `a_creator_id`, `a_create_date`, `a_updater_id`, `a_update_date`) VALUES
(9, 'Xarici dil kursları', 'Foreign language courses', 'Курсы иностранных языков', 'Health', 'Kursumuzda ingilis, rus alman dilləri və bir çox dillər tədris edilməkdədir.', 'English, Russian, German and many other languages are taught in our course.', 'На нашем курсе преподаются английский, русский, немецкий и многие другие языки.', 'Active', 0, '', 0, ''),
(15, 'Xaricdə təhsil', 'Studying in abroad', 'Учеба за границей', 'Course', 'Türkiyədə, Amerikada və digər ölkələrdə təhsil almaq imkanı...', 'The opportunity to study in Turkey, America and other countries...', 'Возможность учиться в Турции, Америке и других странах...', 'Active', 0, '', 0, ''),
(16, 'Tərcümə', 'Translation', 'Перевод', 'Service', 'Sinxron. ardıcıl və yazılı tərcümə xidmətləri...', 'Synchronous. consecutive and written translation services...', 'Синхронный. услуги последовательного и письменного перевода...', 'Active', 0, '', 0, ''),
(17, 'TOEFL, IELTS, SAT, GMAT', 'TOEFL, IELTS, SAT, GMAT', 'TOEFL, IELTS, SAT, GMAT', 'Course', 'Miqrasiya, iş və təhsil üçün xarici dil kursları...', 'Foreign language courses for migration, work and study...', 'Курсы иностранных языков для миграции, работы и учебы...', 'Active', 0, '', 0, ''),
(18, 'Dizayn kursları', 'Design courses', 'Курсы дизайна', 'Course', 'Ən yeni modelləşdirmə və vizualizasiya texnologiyalardan istifadə edərək üç ölçülü görüntülərin yaradılması.', 'Creation of three-dimensional images using the latest modeling and visualization technologies.', 'Создание трехмерных изображений с использованием новейших технологий моделирования и визуализации.', 'Active', 0, '', 0, ''),
(19, 'Komputer kursları', '.', '.', 'Course', 'Web proqramlaşdırma, MS office kimi kurslarda təhsil ala bilərsiniz.', '.', '.', 'Active', 0, '', 0, ''),
(20, 'Xarici dil kursları', 'ş', 'ş', 'Course', 'ş', 'm', 'ç', 'Deactive', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `colleagues`
--

CREATE TABLE `colleagues` (
  `cl_id` int(11) NOT NULL,
  `cl_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cl_name_eng` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cl_name_ru` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cl_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cl_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cl_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cl_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cl_img_ext` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cl_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cl_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `colleagues`
--

INSERT INTO `colleagues` (`cl_id`, `cl_name`, `cl_name_eng`, `cl_name_ru`, `cl_description`, `cl_description_eng`, `cl_description_ru`, `cl_img`, `cl_img_ext`, `cl_create_date`, `cl_update_date`) VALUES
(2, 'Tural Abbaslı', '/', '/', '2007-ci ildə Azərbaycan Memarlıq və İnşaat Universitetini İqtisadiyyat və İdarəetmə sahəsi üzrə fərqlənmə diplomu ilə bitirmiş və 2010-cu ildə eyni universitetdə fərqlənmə ilə magistr dərəcəsinə yiyələnmişdir.\r\n\r\n2004-2007-ci illərdə müxtəlif media orqanlarında çalışmışdır. 2008-ci ildən yerli turizm şirkətlərində marketinq kommunikasiyaları üzrə menecer kimi fəaliyyətə başlamış, daha sonra 2009-2017-ci illərdə Azərbaycanın aparıcı şirkətləri olan «Mətanət A» Şirkəti, \"Veysəloğlu\" MMC, \"BSC Konsaltinq və Autsorsinq\" MMC-də Marketinq Kommunikasiyaları Departament direktoru kimi fəaliyyət göstərmişdir. Marketinq kommunikasiyaları sahəsi üzrə Türkiyədə müxtəlif təlim və seminarların iştirakçısı olmuş Tural Abbaslı, eyni zamanda 2016-cı ildən marketinq kommunikasiyaları mərkəzi kimi fəaliyyət göstərən \"COMUNİCAL\" MMC-nin təsisçisi və direktorudur. ', '/', '/', 'turalabbasli.jpg', '.jpg', '2022-09-14 20:36:21', ''),
(3, 'Əyyub Qarabağlı', '.', '.', 'Əyyub Qarabağlı 2004 - 2008 -ci illərdə UNEC “Ümumi İqtisadiyyat” fakultəsini bitirib. Daha sonra İstanbul Dövlət Universiteti (MsC) -də magistr təhsili almışdır. \r\n\r\nGürcüstan-Avropa Marketinq Assosasiyasının və Azərbayan Marketinq Assosasiyasının üzvüdür.\r\n\r\nAzərbaycanda keçirilən “Marketing Summit 2017” , “Marketing Summit 2018” və “Marketingguide Azerbaijan” beynəlxalq tədbirlərinin təşkilat komitəsinin sədri olmuşdur.\r\n\r\nBir çox şirkətlərin biznes konsultantı, eyni zamanda çox sayda biznes təlimlərdə təlimçi kimi fəaliyyət göstərib.\r\n\r\n10 ildən çox təcrübə ilə bir sıra markaların ölkəmizdə və ölkəmizdən kənarda konsaltinq xidmətini davam etdirir.\r\n\r\n“Easymark” konsaltinq şirkətinin təsisçisi və direktorudur.\r\n\r\nƏyyub müəllim Marketinq və Satış üzrə ekspert, konsultant, biznes təlimçidir.', '.', '.', 'eyyubqarabaqli.png', '.png', '2022-09-14 20:46:07', ''),
(4, 'Seymur Quliyev ', '.', '.', 'Seymur Quliyev – Marketing. 2005-2010 – cu illərdə Qafqaz Universitetinin Biznesin İdarə edilməsi fakultəsini bitirib. 2011-2012 – ci illərdə Stirling universitetində Marketing Elmləri ixtisası üzrə magistr dərəcəsinə yiyələnib. 2013 – cü ildən Bakı Mühəndislik Universitetində Marketing üzrə Elmlər namizədidir. 2008-2010 – cu illərdə AzMarketing MMC – də Marketing Menecer, 2010-2011 – ci illərdə “Mətanət A” şirkətində Marketinq Tədqiqat Meneceri, həmçinin 2011 – ci ildə “Mətanət A” şirkətində Marketinq Araşdırma Şöbəsinin müdiri kimi çalışıb. 2012 – ci ildən SOCAR-da İxracat marketinqi üzrə mütəxəssis kimi çalışır. Bununla yanaşı ADNSU, BMU, UNEC, AU universitetlərində Marketing, Menecment, MBA proqramı üzrə dərslər keçmişdir.', '.', '.', 'seymurquliyev.jpg', '.jpg', '2022-09-14 20:47:15', ''),
(5, 'İlahə Xəlilova', '.', '.', 'İlahə Xəlilova 2002 – 2011-ci illərdə “B&M” MMC-də baş mühasib kimi fəaliyyət göstərib. 2007-ci ildə BKM-də mühasib və mühasibat uçotunun tədrisi üzrə müəllim kimi çalışıb.  Hazırda müxtəlif Müəsisələrin mühasibat uçotunu aparır, sərbəst mühasibdir. 2009-cu ildən indiyə kimi STİMUL Education & Consulting-də Milli Mühasibatlıq və  1C Mühasibatlıq proqramını  tədris edir.', '.', '.', 'ilahexelilova.jpg', '.jpg', '2022-09-14 20:50:14', ''),
(6, 'Vidadi Baxışov', 'ş', 'ş', 'Vidadi Baxışov (Yerli və Beynəlxalq əhəmiyyətli layihələrin rəhbəri) Vidadi Baxışov 1985-ci ildə Azərbaycan Dövlət Universitetini bitirmişdir. Rusiya, Almaniya, Finlandiya və s. xarici ölkələrdə İdarəetmə - Menecment üzrə ixtisasartırmalar keçmiş, Beynəlxalq konfransların iştirakçısı və məruzəçisi olmuşdur. O, 1996-cı ildən Azərbaycanda yaradılan yeni idarəetmə sisteminin qurucularındandır. Vidadi müəllim media, bank, istehsal, xidmət, maliyyə və digər sektorda fəaliyyət göstərən şirkətlərin, Dövlət qrumlarının tam yeni idarəetmə proqramlarını işləyib hazırlamaq üzrə professional təcrübəyə malikdir. Göstərdiyi xidmətlərə görə prezidentimiz cənab İlham Əliyev tərəfindən Azərbaycan Respublikasının TƏRƏQQİ medalı ilə təltif olunmuşdur.', '.', '.', 'vidadibaxisov.jpg', '.jpg', '2022-09-14 20:55:17', '2022-09-22 00:04:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `compcourse`
--

CREATE TABLE `compcourse` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_name_eng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_name_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `c_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `c_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `c_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_price` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `c_category` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `c_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_img_ext` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `compcourse`
--

INSERT INTO `compcourse` (`c_id`, `c_name`, `c_name_eng`, `c_name_ru`, `c_description`, `c_description_eng`, `c_description_ru`, `c_create_date`, `c_update_date`, `c_price`, `c_category`, `c_status`, `c_img`, `c_img_ext`) VALUES
(3, 'MS Office Proqramları', 'MS Office Programs', 'Программы MS Office', 'STİMUL Education & Consulting peşəkarlığını artırmaq istəyən mühasibləri, auditorları, menecerləri, satış şöbəsinin əməkdaşlarını, həmçinin Microsoft Ofis proqramlarının istifadəsi vacib olan peşələrdə çalışan və ya çalışmaq istəyən hər kəsi kurslarımızda iştiraka dəvət edir.\r\n\r\nTədris istəyə uyğun, seçim əsasında fərdi və qrupda olmaqla təşkil olunur. Dərs günləri və dərs saatlarını tələbə özü seçə bilir.\r\n\r\nTədris etdiyimiz Microsoft Ofis proqramlarına aşağıdakı proqramlar daxildir:\r\n\r\nMicrosoft Windows – əməliyyat sistemi\r\nMicrosoft Office Word — mətn prosessoru. Müxtəlif sənədlərin hazırlanmasında və redaktəsində istifadə (yazı işləri) edilir. Hazırda dünyada ən populyar proqram hesab olunur.\r\nMicrosoft Office Excel — cədvəl prosessoru. Əsasən  hesablama işləri aparmaq və müxtəlif məqsədli elektron cədvəllər qurmaq üçün nəzərdə tutlmuş proqramdır\r\nMicrosoft Office Outlook — şəxsi kommunikator. Proqrama daxildir: təqvim, tapşırıqlar planı, elektron poçt, ünvanlar kitabçası.\r\nMicrosoft Office PowerPoint — bu proqram vasitəsilə slaydlar yaradılır. Həmçinin hesabatlar, tezislər, təqdimatlar bu proqram vasitəsilə edilir.\r\nMüəllimlərimiz bu sahənin peşəkar mütəxəssisləridir. Dərslərimizin yüksək səviyyədə tədris olunduğuna əmin olmağınız üçün faktiki dərslərimizin hər hansı birində ödənişsiz şəkildə iştirak edib daha sonra qərar verə bilərsiniz.\r\n\r\n', 'STIMUL Education & Consulting invites everyone who wants to improve their professionalism, working in the fields of accounting, audit, management, trade, etc. In all areas, the work is not complete without the Microsoft Office program.\r\n\r\nMicrosoft Office includes the following programs:\r\n\r\nOperating system Microsoft Windows;\r\nMicrosoft Office Word is a word processor. Used to create and edit various documents. Currently considered the most popular software in the world.\r\nMicrosoft Office Excel - table processor. This program is primarily designed to calculate and create tables with different target values.\r\nMicrosoft Office Outlook is a personal communicator. The program includes: a calendar, a task plan, an email, an address book.\r\nMicrosoft Office PowerPoint - the program for creating slides. Also with the help of this program, reports, abstracts, presentations are created.\r\nOur teachers are professionals in this field. In order to ensure the quality of our teaching, everyone can use a trial version of the lesson lasting 1 hour.\r\n\r\n', 'STIMUL Education & Consulting приглашает всех желающих повысить свой профессионализм, работающих в сферах бухгалтерии, аудита, менеджмента, торговли и т.д. Во всех сферах работа не обходится без программы Мicrosoft Office.\r\n\r\nMicrosoft Office включает следующие программы:\r\n\r\nОперационная система Microsoft Windows;\r\nMicrosoft Office Word - текстовый процессор. Используется для создания и редактирования различных документов. В настоящее время считается самым популярным программным обеспечением в мире.\r\nMicrosoft Office Excel - процессор таблиц. Это программа предназначена в первую очередь для вычисления и создания таблиц с разными целевыми значениями.\r\nMicrosoft Office Outlook - это персональный коммуникатор. Программа включает в себя: календарь, план задач, электронную почту, адресную книгу.\r\nMicrosoft Office PowerPoint - программа создания слайдов. Также с помощью данной программы создаются отчеты, тезисы, презентации.\r\nНаши преподаватели являются профессионалами в данной области. Для того, чтобы убедиться в качестве нашего преподавания, каждый может использовать пробную версию урока длительностью в 1 час.\r\n\r\n', '', '', '80', 'Course', 'Active', 'msoffice.jpg', '.jpg'),
(4, 'Qrafik Dizayn kursları', 'Graphic Design Courses', 'Курсы графического дизайна', 'STİMUL Corel Draw, Adobe Photoshop, Adobe İllustrator, Adobe İnDesign  və digər proqramları mükəmməl səviyyədə öyrənmək istəyən, qrafik dizayner peşəsini seçmək istəyən və ya biliyini artırmaq istəyən qrafik dizaynerləri, həmçinin bu sahə üzrə yüksək səviyyədə nəzəri və praktik biliklər əldə etmək istəyənləri standart və professional paket formasında təqdim olunan qrafik dizayn kurslarında iştiraka dəvət edir.\r\nCorel Draw qrafik dizaynların əsas növlərini, Afişa, Loqo, Broşur, Vizit kart və s. hazırlamağı bacaracarmaq üçün tövsiyyə olunur. Bundan başqa, müxtəlif foto-montaj, şəkillər üzərində dəyişikliklər və s. bu kimi əməliyyatları yerinə yetirə bilmək üçün Corel Draw-nu öyrənmək məsləhət görülür.\r\n\r\nAdobe Photoshop çox funksiyalı qrafik redaktor proqramıdır. Əsasən, raster təsvirləriylə işləyir, ancaq bəzi vektor alətlərinə də malikdir.\r\n\r\nAdobe Illustrator vektor şəkillər hazırlamaq üçün işinizə yaraya biləcək proqramdır. Logo, eskiz, tipoqrafiya, veb üçün illustrasiyalar hazırlaya bilərsiniz.\r\n\r\nAdobe InDesign proqramı Adobe firmasının yaratdığı, çoxşaxəli dizayn proqramıdır. Firma daxilində bu proqram K2 (Quark Killer) olaraq da adlandırılır. Mətbuat, tablet cihazlar və başqa ekranlarda səhifələrin dizayn edilməsi üçün geniş istifadə edilir.\r\n\r\nDərslər fərdi və kiçik qruplarda olmaqla sırf praktik əsaslarla tədris olunduğu üçün bu kursu bitirərək rahatlıqla qrafik dizayner olaraq çalışa biləcəksiniz.\r\n\r\n', 'STIMUL invites to the courses courses Corel Draw, Adobe Photoshop, Adobe Illustrator, Adobe InDesign and others who want to study these programs at the highest level, those who are just going to start the professional activities of the \"graphic designer\", as well as those who want to gain practical experience in the data programs.\r\n\r\nCorel Draw provides the ability to create basic types of graphic tools, such as a banner, logo, brochure, business card, billboard, etc. In addition, it is recommended to study Corel Draw for performing operations such as various photomontage, editing photos, etc.\r\n\r\nAdobe Photoshop - a multifunctional program of the graphic editor. It mainly works with raster drawings, but also has some vector tools.\r\n\r\nAdobe Illustrator is a program that can create a vector for your images. You can create logos, sketches, pictures for a website, etc.\r\n\r\nAdobe InDesign is a multifaceted design program created by Adobe. Inside the company, this software is also called K2 (Quark Killer). Used to design the design of any printed or online publications.\r\n\r\nSince classes are taught on a practical basis individually and in small groups, you can easily work as a graphic designer after completing this course.\r\n\r\n', 'СТИМУЛ приглашает на курсы программ Corel Draw, Adobe Photoshop, Adobe Illustrator, Adobe InDesign и др. всех желающих изучить данные программы на высшем уровне, тех, кто только собирается начать профессиональную деятельность \"график-дизайнера\", а также желающих получить практический опыт в данных программах.\r\n\r\nCorel Draw предоставляет возможность создания основных типов графических инструментов, таких как баннер, логотип, брошюра, визитная карточка, афиша и т. д. Кроме того, рекомендуется изучение Corel Draw для выполнения таких операций, как различный фотомонтаж, редактирование фотографий и т. д.\r\n\r\nAdobe Photoshop - многофункциональная программа графического редактора. Она в основном работает с растровыми рисунками, но также имеет некоторые векторные инструменты.\r\n\r\nAdobe Illustrator - это программа, которая может создавать вектор для ваших изображений. Вы можете создавать логотипы, эскизы, картинки для веб-сайта и т.д.\r\n\r\nAdobe InDesign - это многогранная дизайнерская программа, созданная Adobe. Внутри фирмы это программное обеспечение также называется K2 (Quark Killer). Используется для проектирования дизайна любых печатных или Интернет-изданий.\r\n\r\nПоскольку занятия преподаются на практической основе индивидуально и в небольших группах, вы можете легко работать графическим дизайнером, пройдя этот курс.\r\n\r\n', '', '', '150', 'Course', 'Active', 'graphicDesignTips2.png', '.png'),
(5, 'Web Dizayn kursları', 'Web Design Courses', 'Курсы веб-дизайна', 'STİMUL Education & Consulting WEB-DİZAYN proqramlarına il boyu tələbə qəbulunu davam etdirir. Tədris paketinə aşğıdakı proqramlar daxildir:  Java \r\nScript; \r\nCSS; \r\nHTML; \r\nPHP; \r\nMySQL, və  digər proqramlar. \r\nDərslər Web proqramlaşdırma üzrə professional mütəxəssislər tərəfindən fərdi və qrupda olmaqla (saat 09:00-21:30-dək) tədris olunur.  Qrupda 4-6 nəfər olmaqla aylıq ödəniş 130AZN-dir. Fərdi dərslər də təşkil edirik. Dərslərimizin keyfiyyəti ilə tanış ola bilməyiniz üçün faktiki dərslərimizdə ödənişsiz olaraq iştirak edə bilmək imkanı yaratmışıq. ', 'STIMUL Education & Consulting continues its annual admission to the WEB-design programs. The training package includes the following programs:\r\n\r\nJava Script;\r\nCSS;\r\nHTML;\r\nPHP;\r\nMySQL and others.\r\nClasses are conducted by professional specialists in web programming, both individually and in groups.\r\n\r\nThe monthly payment in the group (2-4 people) is 125 AZN. We also organize individual lessons. You have the opportunity to freely participate in our trial lessons so that you can see the quality of our teaching.', 'STIMUL Education & Consulting продолжает ежегодный прием в программы WEB-дизайна. Учебный пакет включает следующие программы:\r\n\r\nJava Script;\r\nCSS;\r\nHTML;\r\nPHP;\r\nMySQL и др.\r\nЗанятия проводятся профессиональными специалистами по веб-программированию как индивидуально, так и в группах.\r\n\r\nЕжемесячная оплата в группе (2-4 человека) составляет 125 AZN. Мы также организуем индивидуальные занятия. У Вас есть возможность свободно участвовать в наших пробных уроках, чтобы вы могли убедиться в качестве нашего преподавания.', '', '', '130', 'Course', 'Active', 'Web-design-trends.jpg', '.jpg'),
(6, '3D Dizayn kursları', '3D Design Courses', 'Курсы 3D-дизайна', 'STİMUL memarlıq, dizayn, mühəndislik sahəsində çalışmaq istəyənləri və bu sahə üzrə təcrübəsini artırmaq istəyən şəxsləri standart və professional paket olmaqla AutoCad və 3D Max proqramlarını öyrənməyə dəvət edir.\r\n\r\nAutodesk AutoCAD — Autodesk şirkətinin hazırladığı proqram olub maşınqayırma, tikinti və digər mühəndislik layhələrinin işlənməsində tətbiq olunur. Bu proqram sadə cizgidən başlayaraq 3D modellərin qurulmasına (2-ölçülü və 3-ölçülü həndəsi obyektlərin yaradılmasına) qədər işləri yerinə yetirməyə imkan verir. Bu proqram təminatını bir çox xırdalıqlara qədər düşünülüb və tam şəkildə bir tikinti layihəsi hazırlamağa imkan verir. Bu kursda siz adı çəkilən proqram təminatı barədə maksimum bilik əldə edib, gələcəkdə müxtəlif şirkətlərdə yüksək maaşla çalışa bilərsiniz.\r\n\r\nAutodesk 3D Max (keçmiş 3D Studio MAX) - Autodesk Media and Entertainment tərəfindən hazırlanan modelləşdirmə, animasiya və renderinq proqramıdır. Bu proqramdan videooyun yaradıcıları, televiziya kommersiyası studiyaları, memarlıq vizuallaşdıranlar tərəfindən tez-tez istifadə edilir. Bundan həmçinin film effektləri və film pre-vizuallaşdırması üçün də istifadə olunur.\r\n\r\nArchiCAD – avtomatlaşdırılmış layihələndirmə sisteminin Macarıstanın Graphisoft  firması  tərəfindən  yaradılmış qrafik  proqram paketidir. Memarlıq- inşaat  konstruksiyalarının, eləcə  də  landşaft,  mebel və s. elementlərin layihələndirilməsi üçün nəzərdə tutulmuşdur.\r\n\r\nProqramda  iş  zamanı  «virtual  bina»  konsepsiyasından istifadə edilir. İşin mahiyyətinə görə  ArchiCAD real binanın həqiqi ölçülərə əsasən yerinə yetirilmiş və kompüterin yaddaşında  mövcud olan modelindən ibarətdir.\r\n\r\nArchiCAD memarlıq-dizayner layihələrinin işlənib hazırlanmasını təmin edən proqramdır. İşin  istənilən mərhələsində layihələndirilən binanı üçölçülü şəkildə, kəsikdə, perspektivdə görmək olar. ArchiCADda eyni zamanda həm layihənin yaradılması üzərində işləmək, həm də müvafiq tikinti sənədlərini tərtib etmək olar, belə ki, proqramda layihələndirilən bina haqqında bütün  informasiya: planlar, perspektivlər, kəsiklər, lazımi tikinti materiallarının siyahısı, həmçinin iş prosesində layihəçi tərəfindən edilən düzəlişlər qorunub saxlanılır.\r\n\r\n', 'STIMUL invites everyone who wants to work in the field of architecture, design, technology, as well as those wishing to obtain practical skills.\r\n\r\nAutoCad is an automated design and drawing system developed by Autodesk for use in engineering, construction, architecture and other industries. The program includes two-dimensional and three-dimensional design, which allows you to use elementary graphic primitives to get more complex objects.\r\n\r\nAutodesk 3ds Max (formerly 3D Studio MAX) is a full-featured professional software system for creating and editing 3D graphics and animations, also developed by Autodesk. Contains the most up-to-date tools for artists and multimedia professionals.\r\n\r\nArchiCAD is a software package for architects based on the Information Modeling (BIM) technology created by Graphisoft. Designed for the design of architectural and building structures and solutions, as well as elements of the landscape, furniture, etc.\r\n\r\nIn the process of working in the program, the concept of a \"virtual building\" works. The essence of the work is that ArchiCAD is a real model of the building, based on the real existing computer memory.\r\n\r\nArchiCAD is a program that provides the creation of architectural projects. The developed design at any stage of the work can be seen in a three-dimensional, cross-section. In ArchiCAD it is also possible to build the appropriate construction documents: plans, prospects, reducing the list of necessary construction materials and adjustments made by the designer in the process.', 'STIMUL приглашает всех желающих работать в сфере архитектуры, дизайна, техники, а также желающих получить  практические навыки.\r\n\r\nAutoCad – это система автоматизированного проектирования и черчения, разработанная компанией Autodesk для применения в машиностроении, строительстве, архитектуре и других отраслях промышленности. Программа включает в себя двумерное и трехмерное проектирование, что позволяет использовать элементарные графические примитивы для получения более сложных объектов.\r\n\r\nAutodesk 3ds Max (ранее 3D Studio MAX) — полнофункциональная профессиональная программная система для создания и редактирования трёхмерной графики и анимации, также разработанная компанией Autodesk. Содержит самые современные средства для художников и специалистов в области мультимедиа.\r\n\r\nArchiCAD — программный пакет для архитекторов, основанный на технологии информационного моделирования (Building Information Modeling - BIM),созданный фирмой Graphisoft. Предназначен для проектирования архитектурно-строительных конструкций и решений, а также элементов ландшафта, мебели и т. п.\r\n\r\nВ процессе работы в программе работает концепция \"виртуального здания\". Суть работы заключается в том, что ArchiCAD - это реальная модель здания, основанная на реальной существующей памяти компьютера.\r\n\r\nArchiCAD - это программа, которая предоставляет создание архитектурных проектов. Разработанный проект на любом этапе работы можно увидеть в трехмерном, поперечном разрезе. В ArchiCAD также возможно строить соответствующие строительные документы: планы, перспективы, сокращения, список необходимых строительных материалов и корректировки, сделанные дизайнером в процессе работы.\r\n\r\n', '', '', '150', 'Course', 'Active', '3d1.jpg', '.jpg'),
(7, 'Oracle kursları', 'Java, Oracle, CISCO', 'Java, Oracle, CISCO', 'STİMUL “ORACLE Database 11g: SQL, PL/SQL, OCA, OCP” kurslarında iştirak üçün il boyu qəbulu davam etdirir.\r\n\r\nORACLE öyrənməyə yeni başlayanlar ilk öncə Oracle SQL kurslarına başlamalıdırlar. Oracle Database 11g: SQL Fundamentals mərhələni keçmiş tələbələr \"Oracle database 11g: Administration Fundamentals\" mərhələsinə başlaya bilərlər.\r\n\r\nDərslər fərdi və kiçik qruplarda olmaqla həftədə 2 dəfə, hər dərs 1 saat yarım tədris olunur. \r\n\r\nTəlimçilər: Şöhrət Mayılov (Oracle expert), Vüqar Baxşıyev (Oracle 11g Certified Master)\r\n\r\nAşağıdakı Oracle kurslarını təklif edirik.\r\n\r\nOracle database 11g: Administration Fundamentals I\r\nOracle database 11g: Administration Fundamentals II\r\nOracle database 11g: Administration Workshop I\r\n​Oracle database 11g: Administration Workshop II\r\nOracle SQL Fundamentals\r\nOracle PL/SQL əsasları\r\n​Oracle database 11g: Advanced PL/SQL\r\nAdvanced Oracle SQL\r\nOracle 11g: RAC and GRİD İnfrastructure Administration Accelerated Release', 'STIMUL continues the annual admission to the courses \"ORACLE Database 11g: SQL, PL / SQL, OCA, OCP\".\r\n\r\nBeginners in ORACLE should first start the Oracle SQL course. Those who have completed the main course \"Oracle Database 11g: SQL Fundamentals\" can start training on the course \"Oracle Database 11g: Administration Fundamentals\".\r\n\r\nClasses are held individually and in small groups, twice a week (lesson - an hour and a half).\r\n\r\nTrainers: Shohrat Mayilov (Oracle Expert), Vugar Bakhshiev (Oracle 11g Certified Master)\r\n\r\nWe offer the following Oracle courses:\r\n\r\nOracle database 11g: Administration Fundamentals I\r\nOracle database 11g: Administration Fundamentals II\r\nOracle database 11g: Administration Workshop I\r\nOracle database 11g: Administration Workshop II\r\nOracle SQL Fundamentals\r\nOracle PL / SQL (basics)\r\nOracle database 11g: Advanced PL / SQL\r\nAdvanced Oracle SQL\r\nOracle 11g: RAC and GRİD Infrastructure Administration Accelerated Release', 'STIMUL продолжает ежегодный прием на курсы \"ORACLE Database 11g: SQL, PL/SQL, OCA, OCP\".\r\n\r\nНовички в ORACLE должны сначала начать курс Oracle SQL. Прошедшие основной курс \"Oracle Database 11g: SQL Fundamentals\", могут начать обучение по курсу «Oracle Database 11g: Administration Fundamentals».\r\n\r\nЗанятия проводятся индивидуально и небольшими группами, два раза в неделю (урок - полтора часа).\r\n\r\nТренеры: Шохрат Майылов (Oracle Expert), Вугар Бахшиев (Oracle 11g Certified Master)\r\n\r\nМы предлагаем следующие курсы Oracle:\r\n\r\nOracle database 11g: Administration Fundamentals I\r\nOracle database 11g: Administration Fundamentals II\r\nOracle database 11g: Administration Workshop I\r\n​Oracle database 11g: Administration Workshop II\r\nOracle SQL Fundamentals\r\nOracle PL/SQL (основы)\r\n​Oracle database 11g: Advanced PL/SQL\r\nAdvanced Oracle SQL\r\nOracle 11g: RAC and GRİD Infrastructure Administration Accelerated Release', '', '2022-09-18 17:12:29', '170', 'Course', 'Active', 'oracle_cloud_width-880.png', '.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customers`
--

CREATE TABLE `customers` (
  `cs_id` int(11) NOT NULL,
  `cs_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cs_name_eng` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cs_name_ru` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cs_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cs_img_ext` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cs_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cs_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `customers`
--

INSERT INTO `customers` (`cs_id`, `cs_name`, `cs_name_eng`, `cs_name_ru`, `cs_img`, `cs_img_ext`, `cs_create_date`, `cs_update_date`) VALUES
(3, '”Kapital Bank” ASC', '.', '.', 'kapital.jpg', '.jpg', '2022-09-13 20:55:14', ''),
(4, 'AZFEN Birgə Müəssisəsi', '.', '.', 'azfen.jpg', '.jpg', '2022-09-13 20:56:13', ''),
(5, '“BankStandart” QSC', '.', '.', 'bankstandart.jpg', '.jpg', '2022-09-13 20:58:04', ''),
(6, '”XalqBank” ASC', '.', '.', 'calqbank.jpg', '.jpg', '2022-09-13 20:58:49', ''),
(7, '“SOCAR” Neft Şirkəti', '.', '.', 'socar.jpg', '.jpg', '2022-09-13 20:59:38', ''),
(8, '“Silk Way” Aviaşirkəti MMC', '.', '.', 'silkway.jpg', '.jpg', '2022-09-13 21:00:39', '2022-09-22 00:04:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `design`
--

CREATE TABLE `design` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `d_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `d_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `d_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `d_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `d_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `d_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `d_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `d_price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `d_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `d_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `d_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `d_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `design`
--

INSERT INTO `design` (`d_id`, `d_name`, `d_name_eng`, `d_name_ru`, `d_description`, `d_description_eng`, `d_description_ru`, `d_create_date`, `d_update_date`, `d_price`, `d_category`, `d_status`, `d_img`, `d_img_ext`) VALUES
(2, 'Web dizayn kursları', '.', '.', 'Dərslər Web proqramlaşdırma üzrə professional mütəxəssislər tərəfindən fərdi və qrupda olmaqla (saat 09:00-21:30-dək) tədris olunur.\r\n\r\nQrupda 2-4 nəfər olmaqla aylıq ödəniş 125AZN-dir. Fərdi dərslər də təşkil edirik. Dərslərimizin keyfiyyəti ilə tanış ola bilməyiniz üçün faktiki dərslərimizdə ödənişsiz olaraq iştirak edə bilmək imkanı yaratmışıq. Dərs günləri və dərs saatlarını tələbələr özləri seçə bilirlər.', '.', '.', '', '', '130', 'Course', 'Active', 'webdesign.jpg', '.jpg'),
(3, 'Corel Draw kursları', '.', '.', 'CorelDRAW — Bir çox dizayner və rəssam tərəfindən vektor qrafikasının emal edilməsi üçün istifadə edilən proqramlardan biridir. Qrafik dizayner kimi çalışmaq istəyənlər ilk öncə COREL DRAW  proqramını öyrənməlidir.\r\n\r\nBu tətbiq reklam agentliklərində və poliqrafiya sahəsində çalışan təşkilatlarda işlədilən proqramların siyahısında ön sıralardadır.\r\n\r\nÇünki bu sahənin əsas istiqamətlərini əhatə edən Afişa, Loqo, Broşur, Vizit kart, jurnal, kitab üzlüklərin, digər reklam vasitələrinin və sənədlərin emalı bu proqramsız mükəmməl dizayn etmək mümkün deyil.\r\n\r\n Anlaşılan interfeys və çox saylı funksiyalar bu proqramı yalnız yeni istifadəçilər üçün deyil, həmdə peşəkar dizaynerlər üçün əlverişli edir.', '.', '.', '', '', '150', 'Course', 'Active', 'dtp-coreldraw.jpg', '.jpg'),
(4, 'Adobe Photoshop kursları', '.', '.', 'Adobe Photoshop proqramı həm həvəskarlar, həm də mütəxəssislər tərəfindən istifadə olunan peşəkar bir proqramdır. Mac və Windows platformasını dəstəkləməsi, həmçinin effektiv interfeys və zəngin alətlər çubuğuna malik olması Adobe Photoshop proqramını əksər dizaynerlərin seçimi edib.\r\n\r\nVeb-dizaynerlərdən fotoqraflara qədər qrafika tələb olunan hər bir sahədə istifadə olunur. Adobe Photoshop ilə edə biləcəyiniz yalnız sizin təsəvvürünüz ilə məhdudlaşır.\r\n\r\nAdobe Photoshop kursu hal-hazırda dizayner, veb dizayner və fotoqraf kimi çalışan və ya gələcəkdə dizayner olmağı planlaşdıran şəxslər üçündür.\r\n\r\nPhotoshop kursu həftədə 3 dəfə 1 saat və ya 2 dəfə 1.5 saat olmaqla 2 aya tədris edilir.\r\n\r\n Dərslər 2-4 nəfərlik qruplarla və ya fərdi qaydada keçirilir. Müəllimlər bu sahədə illərlə təcrübəsi və praktiki biliyi mükəmməl olan mütəxəssislərdir. ', '.', '.', '', '', '150', 'Course', 'Active', '1-1.png', '.png'),
(5, 'AutoCad kursları', '.', '.', 'AutoCAD kursları layihə və konstruktor sənədlərinin işlənmə proseslərini avtomatlaşdırma imkanlarını öyrənmək üçün nəzərdə tutulmuşdur.\r\n\r\nAutoCAD proqramı müxtəlif detalların, mebellərin, inşaat proyektlərinin çertyojlarını və modellərini hazırlamaq üçün istifadə olunur. Bu, daxili interyer obyektləri – stollar, stullar, kreslolar və s., yaxud müxtəlif mexanizmlərin layihələri (təyyarənin sadə bolt və qaykalardan başlayaraq tam yığım cizgisi), həmçinin elektrik sxem maketlərin hazırlanması ola bilər.\r\n\r\nAutoCad kursu peşəkarlıqlarını artırmaq istəyən mühəndislər, dizaynerlər və memarlar üçün və həmçinin gələcəkdə bu peşə üzrə karyera qurmaq istəyənlər üçün nəzərdə tutulub.\r\n\r\nAutoCad kursu həftədə 3 dəfə 1 saat və ya 2 dəfə 1.5 saat olmaqla 2 aya tədris edilir. Dərslər 2-6 nəfərlik qruplarla və ya fərdi qaydada keçirilir.Müəllimlər bu sahədə illərlə təcrübəsi və praktiki biliyi mükəmməl olan mütəxəssislərdir. ', '.', '.', '', '', '140', 'Course', 'Active', 'autocad.jpg', '.jpg'),
(6, '3D Max kursları', '.', '.', '3D Max kursunda memarlar, inşaat mühəndisləri, landşaft dizaynerlər, texniklər, peşə litseyi mezunları, 3D rəssamlar, animatorlar və gələcəkdə bu istiqamətdə karyerasını qurmaq istəyənlər iştirak edə bilərlər.\r\n\r\n3D Max kursu həftədə 3 dəfə 1 saat və ya 2 dəfə 1.5 saat olmaqla 2 aya tədris edilir.\r\n\r\n Dərslər 2-3 nəfərlik qruplarla və ya fərdi qaydada keçirilir. Müəllimlər bu sahədə illərlə təcrübəsi və praktiki biliyi mükəmməl olan mütəxəssislərdir. ', '.', '.', '', '2022-09-18 17:43:20', '180', 'Course', 'Active', '3d-max.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `g_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `g_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `g_img` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `g_img_ext` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `g_create_date` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `g_update_date` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_name`, `g_name_eng`, `g_name_ru`, `g_img`, `g_img_ext`, `g_create_date`, `g_update_date`) VALUES
(4, '1', '1', '1', '1.jpg', '.jpg', '2022-10-23 19:56:13', ''),
(5, 'z', 'z', 'z', '2.jpg', '.jpg', '2022-10-23 19:57:14', ''),
(6, '3', '3', '3', '3.jpg', '.jpg', '2022-10-23 20:13:05', ''),
(7, '4', '4', '4', '4.jpg', '.jpg', '2022-10-23 20:13:18', ''),
(8, '5', '5', '5', '5.jpg', '.jpg', '2022-10-23 20:13:30', ''),
(9, '6', '6', '6', '6.jpg', '.jpg', '2022-10-23 20:13:42', ''),
(10, '7', '7', '7', '7.jpg', '.jpg', '2022-10-23 20:13:53', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `languages`
--

CREATE TABLE `languages` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name_eng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `l_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `l_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_img_ext` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `languages`
--

INSERT INTO `languages` (`l_id`, `l_name`, `l_name_eng`, `l_name_ru`, `l_description`, `l_description_eng`, `l_description_ru`, `l_create_date`, `l_update_date`, `l_price`, `l_category`, `l_status`, `l_img`, `l_img_ext`) VALUES
(26, 'İngilis Dili Kursları', '.', '.', '.', '.', '.', '', '', '85', 'Course', 'Active', 'bridge.jpg', '.jpg'),
(27, 'Rus dili kursları', '.', '.', '.', '.', '.', '', '', '75', 'Course', 'Active', 'russian.jpg', '.jpg'),
(29, 'Alman dili kursları', ' German language courses', 'Курсы иностранных языков', 'STIMUL приглашает всех желающих изучать немецкий язык на идеальном уровне!\r\n\r\nЕсли вы желаете отлично владеть немецким языком и хотите удивить собеседника чистой речью, а также понимать немецкие газеты, радио и телевидение, так же, как и свой родной язык, мы рады вам помочь!\r\n\r\nОбучение на немецком языке начинается с уровня А1 и заканчивается уровнем С1. Занятия проводятся индивидуально и в небольших группах, 2 раза в неделю по полтора часа, или 3 раза в неделю по 1 часу.\r\n\r\nКурсы основаны на специальных программах и материалах CD / DVD с использованием самых современных методологий. При выборе программы учитывается цель студента и его время.', 'STIMUL invites everyone who wants to learn German at the ideal level!\r\n\r\nIf you want to master German perfectly and want to surprise the interlocutor with clean speech, as well as understand German newspapers, radio and television, just like your native language, we are happy to help you!\r\n\r\nTraining in German starts at level A1 and ends at C1 level. Classes are held individually and in small groups, 2 times a week for an hour and a half, or 3 times a week for 1 hour.\r\n\r\nThe courses are based on special programs and CD / DVD materials using the most modern methodologies. When choosing a program, the student\'s goal and time are taken into account.', 'STİMUL arzu edən hər kəsi ALMAN Dilini ən mükəmməl səviyyədə öyrənməyə dəvət edir! \r\nƏgər Siz də Almanca danışıq dilini mükəmməl şəkildə mənimsəyərək, hər hansı bir almanla qarşılaşanda onu səlis nitqinizlə təəccübləndirmək, bununla yanaşı almanca qəzetləri, radionu, televiziya verilişlərini ana dilimizdəki kimi tam anlamaq istəyirsinizsə bu zaman biz sizə xidmət göstərməyə şad olarıq!\r\n\r\nKursda Alman dilinin tədrisi A1 səviyyəsindən başlayaraq C1 səviyyəsi daxil olmaqla təşkil olunur. Dərslər istəkdən asılı olaraq fərdi və kiçik qruplarda olmaqla həftədə 2 dəfə hər dərs 1 saat yarım və ya həftədə 3 dəfə, hər dərs 1 saat olmaqla tədris olunur.\r\n\r\nKurslar ən müasir metodikalardan istifadə etməklə xüsusi proqramlar və CD/DVD materiallar əsasında keçirilir. Proqram seçilərkən tələbənin başlanğıc bilik səviyyəsi, sərbəst vaxtı və dili öyrənməkdə məqsədi nəzərə alınır. Məşğələlər tələbənin seçiminə əsasən fərdi və kiçik qruplar şəklində keçirilir.', '', '', '85', 'Course', 'Active', 'germany13.jpg', '.jpg'),
(30, 'İspan dili kursları', 'Spanish language courses', 'Курсы испанского языка', 'STİMUL Education & Consulting İSPAN Dilinində mükəmməl danışmaq bacarığına yiyələnmək istəyən hər kəsi yeni başlayan ispan dili qruplarında iştiraka dəvət edir.\r\n\r\nKursun Proqramı 6 səviyyədən ibarətdir:\r\n\r\n1. A1 – Beginner level (Başlanğıc Səviyyə)\r\n2. A2 – Elementary level (Elementar Səviyyə)\r\n3. B1 – Pre-Intermediate level (Aşağı Orta Səviyyə)\r\n4. B2 - Intermediate level (Orta Səviyyə)\r\n5. C1 – Upper Intermediate level (yüksək orta Səviyyə)\r\n6. C2 – Advanced level (Mükəmməl səviyyə)\r\n\r\nHər səviyyənin proqramı 2 ay olsa da, tələbənin dil öyrənmə qabiliyyətindən və bu dili öyrənmək üçün ayıracağı vaxtdan asılı olaraq bu müddət arta və ya azala bilir.\r\n\r\nProqrama əsasən dərslər həftədə 3 dəfə, hər dərs 1 saat və ya həftədə 2 dəfə hər dərs 1 saat yarım olmaqla təşkil olunur. Dərslər fərdi və ya qrupda olmaqla tədris olunur.', 'STIMUL Education & Consulting invites everyone to learn Spanish.\r\n\r\nThe program of the course consists of 6 levels:\r\n\r\n1. A1 - Initial level;\r\n\r\n2. A2 - Elementary level;\r\n\r\n3. B1 - Level below the average;\r\n\r\n4. B2 - Average level;\r\n\r\n5. C1 - High average level;\r\n\r\n6. C2 - Advanced level.\r\n\r\nMost often, each level is one and a half to two months, but depending on the ability and inclination to learn foreign languages, this period can both decrease and decrease.\r\n\r\nClasses are held individually and in small groups, 2 times a week for an hour and a half, or 3 times a week for 1 hour.', 'STIMUL Education & Consulting приглашает всех желающих изучить испанский язык.\r\n\r\nПрограмма курса состоит из 6 уровней:\r\n\r\n1. A1 – Начальный уровень;\r\n\r\n2. A2 - Элементарный уровень;\r\n\r\n3. B1 - Уровень ниже среднего;\r\n\r\n4. B2 - Средний уровень;\r\n\r\n5. C1 - Высокий средний уровень;\r\n\r\n6. C2 - Продвинутый уровень.\r\n\r\nЧаще всего каждый уровень составляет полтора-два месяца, но в зависимости от способностей и склонностей к изучению иностранных языков, данный период может как уменьшиться, так и сократиться.\r\n\r\nЗанятия проводятся индивидуально и в небольших группах, 2 раза в неделю по полтора часа, или 3 раза в неделю по 1 часу.', '', '', '80', 'Course', 'Active', 'spain.jpg', '.jpg'),
(31, 'Fransız dili kursları', 'French language courses', 'Курсы французского языка', 'STİMUL Education & Consulting FRANSIZ dilində mükəmməl danışmaq, yazmaq, oxumaq, dinləmək bacarığına yiyələnmək istəyən hər kəsi fərdi və kiçik qruplarda (2-4 nəfər iştirakçı) olmaqla tədris olunan kurslarda iştiraka dəvət edir.\r\n\r\nKursun Proqramı 6 səviyyədən ibarətdir:\r\n\r\n1. A1 – Beginner level (Başlanğıc Səviyyə)\r\n2. A2 – Elementary level (Elementar Səviyyə)\r\n3. B1 – Pre-Intermediate level (Aşağı Orta Səviyyə)\r\n4. B2 - Intermediate level (Orta Səviyyə)\r\n5. C1 – Upper Intermediate level (yüksək orta Səviyyə)\r\n6. C2 – Advanced level (Mükəmməl səviyyə)\r\n\r\nHər səviyyənin proqramı 2 ay olsa da, tələbənin dil öyrənmə qabiliyyətindən və bu dili öyrənmək üçün ayıracağı vaxtdan asılı olaraq bu müddət arta və ya azala bilir\r\n.\r\nProqrama əsasən dərslər həftədə 3 dəfə, hər dərs 1 saat və ya həftədə 2 dəfə hər dərs 1 saat yarım olmaqla təşkil olunur.\r\n\r\nQEYD: Dərslər fransız dili müəllimliyi üzrə təhsil almış, bu sahə üzrə 5 ildən çox iş təcrübəsi olan peşakar müəllimlər tərəfindən tədris olunur.', 'STIMUL Education & Consulting invites all those interested in speaking, writing, reading, listening, speaking in FRENCH in individual and small groups (2-4 participants).\r\n\r\nThe course program consists of 6 levels:\r\n\r\n1. A1 - Beginner level\r\n2. A2 - Elementary level\r\n3. B1 - Pre-Intermediate level\r\n4. B2 - Intermediate level\r\n5. C1 - Upper Intermediate level (high average)\r\n6. C2 - Advanced level\r\n\r\nAlthough the level of each level is 2 months, this term can either increase or decrease depending on the language learning ability and the time it takes to study it.\r\n.\r\nLessons are organized three times a week, each lesson is 1 hour or 2 times a week, each lesson is 1 hour.\r\n\r\nNOTE: Lessons are taught by French language teachers who are trained by professional teachers with more than 5 years of experience in the field.\r\n\r\n', 'STIMUL Education & Consulting приглашает желающих изучать французский язык.\r\n\r\nПрограмма курса состоит из 6 уровней:\r\n\r\n1. A1 – Начальный уровень;\r\n\r\n2. A2 - Элементарный уровень;\r\n\r\n3. B1 - Уровень ниже среднего;\r\n\r\n4. B2 - Средний уровень;\r\n\r\n5. C1 - Высокий средний уровень;\r\n\r\n6. C2 - Продвинутый уровень.\r\n\r\nЧаще всего каждый уровень составляет полтора-два месяца, но в зависимости от способностей и склонностей к изучению иностранных языков, данный период может как уменьшиться, так и сократиться.\r\n\r\nЗанятия проводятся индивидуально и в небольших группах, 2 раза в неделю по полтора часа, или 3 раза в неделю по 1 часу.\r\n\r\nПРИМЕЧАНИЕ: Уроки преподаются преподавателями французского языка, которые имеют опыт работы более 5 лет.\r\n\r\n', '', '', '70', 'Course', 'Active', 'france.png', '.png'),
(32, 'İtalyan dili kursları', 'Italian language courses', 'Курсы итальянского языка', 'STİMUL Education & Consulting İtalyan dilində mükəmməl danışmaq bacarığına yiyələnmək istəyən hər kəsi qrup və ya fərdi dərslərdə iştiraka dəvət edir.\r\n\r\nKursun Proqramı 6 səviyyədən ibarətdir:\r\n\r\n1. A1 – Başlanğıc Səviyyə\r\n2. A2 – Elementar Səviyyə\r\n3. B1 – Aşağı Orta Səviyyə\r\n4. B2 – Orta Səviyyə\r\n5. C1 – Yüksək orta Səviyyə\r\n6. C2 – Mükəmməl Səviyyə\r\n\r\nHər səviyyənin proqramı 2 ay olsa da, tələbənin dil öyrənmə qabiliyyətindən və bu dili öyrənmək üçün ayıracağı vaxtdan asılı olaraq bu müddət arta və ya azala bilir.\r\n\r\nProqrama əsasən dərslər həftədə 3 dəfə, hər dərs 1 saat və ya həftədə 2 dəfə hər dərs 1 saat yarım olmaqla təşkil olunur. Dərslər fərdi və ya qrupda olmaqla tədris olunur.\r\n\r\nQEYD: Dərslər İtalyan dili müəllimliyi üzrə təhsil almış peşakar müəllimlər tərəfindən tədris olunur. Sınaq dərslərimizdə ödənişsiz olaraq iştirak edərək müəllimlərimizi də tanımaq imkanı yaratmışıq.', 'STIMUL Education & Consulting invites all those who want to learn the ability to speak Italian in their new Spanish language groups.\r\n\r\nThe course program consists of 6 levels:\r\n\r\n1. A1 - Beginner level\r\n2. A2 - Elementary level\r\n3. B1 - Pre-Intermediate level\r\n4. B2 - Intermediate level\r\n5. C1 - Upper Intermediate level (high average)\r\n6. C2 - Advanced level\r\n\r\nAlthough each level has a program of 2 months, this can increase or decrease depending on the language learning ability and the time it takes to study the language.\r\n\r\nLessons are organized three times a week, each lesson is 1 hour or 2 times a week, each lesson is 1 hour. Classes are taught individually or in groups.\r\n\r\nNOTE: Lessons are taught by a trained teacher of Italian language teaching.', 'STIMUL Education & Consulting приглашает всех желающих изучать итальянский язык.\r\n\r\nПрограмма курса состоит из 6 уровней:\r\n\r\n1. A1 – Начальный уровень;\r\n\r\n2. A2 - Элементарный уровень;\r\n\r\n3. B1 - Уровень ниже среднего;\r\n\r\n4. B2 - Средний уровень;\r\n\r\n5. C1 - Высокий средний уровень;\r\n\r\n6. C2 - Продвинутый уровень.\r\n\r\nЧаще всего каждый уровень составляет полтора-два месяца, но в зависимости от способностей и склонностей к изучению иностранных языков, данный период может как уменьшиться, так и сократиться.\r\n\r\nЗанятия проводятся индивидуально и в небольших группах, 2 раза в неделю по полтора часа, или 3 раза в неделю по 1 часу.', '', '', '85', 'Course', 'Active', 'italy.jpg', '.jpg'),
(33, 'Koreya dili kurslari', 'Korean language courses', 'Курсы корейского языка', 'Koreya dili (한국어, 조선어 Hangugeo, Chosŏnŏ) kurslarımıza qeydiyyat başladı.\r\n\r\nKoreya dili kurslarımız fərdi və kiçik qruplarda olmaqla əsasən həftədə 3 dəfə hər dərs 1 saat və ya həftədə 2 dəfə hər dərs 1 saat yarım olmaqla tədris olunur.\r\n\r\nKoreya dili tərkibcə altı dialektə bölünür: şimal-şərqi, şimal-qərbi, mərkəzi, cənub-şərqi, şərq-qərbi və, nəhayət, Çedcudo adasmda işlənən dialekt.\r\n\r\nTarixən yazısı 1446-cı ildən bu yana məlumdur. Çin yazı sisteminə əsaslanan Han qul-yazısıdır. Koreya dilinin fonoloji sistemi 40 fonemdən ibarətdir. Bunlardan 19-u samit, 21-i isə sait fonemlərdir. Koreya dili nominativ quruluşlu aqqlütinativ dillərdən hesab olunur.\r\n\r\nKoreyaca yüksək, orta və alçaq xitab şəkli olmaq üzrə 3 xitabla danışılan və əlifbası olan bir dildir. Koreya dilində insanlara xitab çox önəmlidir. Məsələn böyüklərə alçaq dillə xitab böyük sayqısızlıqdır.', 'Registration for our Korean language courses has started. Korean courses are held three times a week for an hour or twice for half an hour in small groups or individually.\r\n\r\nKorean language intentionally divided into six dialects: northern-east, northern-west, central, southern-east, eastern-west and at last the dialect used in Chedchudo island.\r\n\r\nHistorically its written language is known since 1446. It is based on the Khan-qul writing system of China. Korean language phoneme system consists of 40 phonemes. 19 of them are consonants, 21 are vowels. Korean language is considered to be agglutinative language with nominative structure.\r\n\r\nKorean is a language which has an alphabet and three types of salutation: high, middle and low. Appealing to people is very important in Korean language, so it is very impolite to appeal to the elders in a low salutation.', 'Наши курсы корейского языка преподаются индивидуально и в небольших группах, в основном 3 раза в неделю, каждый урок длится 1 час или 2 раза в неделю по полтора часа\r\n\r\nКорейский язык делится на шесть диалектов: северо-восточный, северо-западный, центральный, юго-восточный, восточно-западный и, наконец, диалект чидудо.\r\n\r\nИстория известна с 1446 года. Хан - это рабское письмо, основанное на китайской письменности. Корейская фонологическая система состоит из 40 фонем. Из них 19 согласных и 21 гласных. Корейский язык считается номинативной структурой среди агглюнативных языков.\r\n\r\nВ корейском языке, который имеет свой алфавит, существует три уровня обращений: низкий, средний и высокий.\r\n\r\nКорейский - это язык, на котором говорят и в алфавитном порядке, с 3 фразами, высокий, средний и низкий. В корейском языке обращение к людям является очень важным фактором. Например, в корейском языке обращение к пожилым людям на низком уровне это большое неуважение.', '', '2022-11-12 23:26:36', '80', 'Course', 'Active', 'koreaa.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `prepearing`
--

CREATE TABLE `prepearing` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pr_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pr_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pr_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pr_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pr_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pr_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pr_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pr_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pr_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pr_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pr_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pr_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `prepearing`
--

INSERT INTO `prepearing` (`pr_id`, `pr_name`, `pr_name_eng`, `pr_name_ru`, `pr_description`, `pr_description_eng`, `pr_description_ru`, `pr_create_date`, `pr_update_date`, `pr_price`, `pr_category`, `pr_status`, `pr_img`, `pr_img_ext`) VALUES
(3, 'Şahmat kursları', '.', '. ', 'Bu gün şahmat intellekt səviyyəsinin yüksəldiməsi üçün ən məşhur vasitə hesab olunur.\r\n\r\nÜmumiyyətlə, şahmatı 3 yaşından tədris etmək mümkündür. Sadəcə olaraq bu uşağın daxili imkanlarından asılıdır. Buna baxmayaraq tədrisin öz metodları var. Bu metodlar təbii ki, yaş quruplarından asılıdır. Yəni böyük yaş qruplarında bu sırf şahmat haqqında, taxta haqqında anlayışlar, lövhə üzərində fiqurların yerləşməsi, onların gedişləri öyrənilir. Amma kiçik yaş qurupunda bu əyləncəli xarakter daşıyır. Məsələn, müxtəlif fiqurların şəkillərinin çəkilməsi, müxtəlif rəngləmə prosesləri və.s. Müəyyən müddətdən sonra uşaqlar artıq buna ciddi bir idman növü kimi yanaşırlar.\r\n\r\nŞahmat dərsləri kiçik qrupla ( 2-4 nəfər) və ya fərdi şəkildə həftədə 2 dəfə tədris olunur. \r\n\r\nŞahmat dərnəyinə qəbul 4-5 yaşdan aparılır.', '.', '.', '', '', '70', 'Course', 'Active', 'chess1.jpg', '.jpg'),
(4, 'Rəssamlıq kursları', '.', '.', 'Müəyyən müddət ərzində, siz akvarel, tutqun sulu boya (quaş), akril və yağlı boyalar və s. ilə rəsm çəkməyi öyrənəcksiniz. Kurslarımıza qatılaraq, siz valehedici boya dünyasına daxil olacaq, qeyri-adi fantaziyalarınızı kağızda əks etdirəcək, müxtəlif sərgilərdə, müsabiqələrdə iştirak edəcək, bununla da öz əsərlərinizi digər insanlara nümayiş etdirmək imkanı əldə edəcəksiniz.', '.', '.', '', '', '70', 'Course', 'Active', 'painting.jpg', '.jpg'),
(5, 'Liseylərə hazırlıq', '.', '.', 'STİMULUS İnkişaf Mərkəzində I və IV siniflər üçün həm azərbaycan, həm də rus bölməsinə Liseylərə hazırlıq proqramına qeydiyyat aparılır.\r\n\r\nKeçirilən məşğələlər Təhsil Nazirliyinin proqramı və müəllimlərimizin fərdi proqramı vasitəsilə həyata keçirilir.', '.', '.', '', '', '90', 'Course', 'Active', 'lisey.jpg', '.jpg'),
(6, 'İbtidai sinif hazırlığı', '.', '.', 'Övladlarını günün tələbləri səviyyəsində yetişdirmək istəyən valideyinlərin nəzərinə:\r\n\r\nUşaqlarınızın məntiq və təfəkkürünü inkişaf etdirmək, rabitəli nitqini formalaşdırmaq, əylənərək düşünmək bacarığını artırmaq, lüğət ehtiyatını zənginləşdirmək, nitq mədəniyyətinin inkişafını, fiziki və psixi inkişafın formalaşmasını istəyirsinizsə, sizi yeni təhsil islahatı olan KURRİKULUM üsulu ilə 1-ci sinfə hazırlıq kurslarına dəvət edirik.\r\n\r\nHəmçinin İbtidai sinif hazırlığı kurslarımıza ana dili, riyaziyyat, məntiq, həyat bilgisi və s. daxildir', '.', '.', '', '', '80', 'Course', 'Active', 'ibtidai.jpg', '.jpg'),
(7, 'Müəllimlərin işə qəbulu', '.', '.     ', 'Dərslərimiz fərdi və kiçik qruplarda olmaqla hər bir fənn həftədə 2 dəfə hər dərs 1 saat yarım tədris olunur. Dərslərimizin keyfiyyətinə tam zəmanət veririk.', '.', '.', '', '2022-10-18 23:05:01', '130', 'Course', 'Active', 'new_teacher2.jpeg', '.jpeg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `psychology`
--

CREATE TABLE `psychology` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `p_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `p_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `p_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `p_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `p_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `p_hours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `psychology`
--

INSERT INTO `psychology` (`p_id`, `p_name`, `p_name_eng`, `p_name_ru`, `p_description`, `p_description_eng`, `p_description_ru`, `p_hours`, `p_location`, `p_price`, `p_category`, `p_status`, `p_img`, `p_img_ext`, `p_create_date`, `p_update_date`) VALUES
(3, 'Biznes psixologiyası', 'Business psychology', 'Бизнес-психология', 'Biznes psixologiyası sahibkarlıq uğurunun ən yaxşı təməlidir.Əgər siz biznesinizin psixologiyasını idarə etsəniz, daha çox müştərilər cəlb edəcək, kadrların səmərəliliyini artıracaq və komandanı motivasiya edərək böyük hədəflərə nail olacaqsınız.Bu gün əksər sahibkarlar üçün psixologiya əhəmiyyətli mövzular siyahısında ən altda yerləşir.Biznes strategiyalarında tətbiq olunan innovativ psixologiya real və təsirli uğur qazandırır.\r\n\r\nPsixologiya biznesin ən mühüm sahələrində müştərilərin cəlb edilməsində, müqavilələrin bağlanması üçün danışıqların aparılmasında, satışda, marketinqdə və bir çox digər sahələrdə möcüzəvi və gizli alətdir.', 'Business psychology is the best basis for entrepreneurial success. If you master the psychology of your business, you will be able to attract more customers, improve the efficiency of staff, motivate your team and achieve huge goals. Today, for most entrepreneurs, psychology is at the bottom of the list of important topics. Innovative psychology, applied to business strategies, produces tangible, real success.\r\n\r\nPsychology in the game in the most important areas of business is a miraculous and secret pledge of attracting customers, negotiating contracts, expanding and growing, selling, marketing and much more.', 'Бизнес-психология', '', '', '100', 'Course', 'Active', 'business.jpg', '.jpg', '', ''),
(4, 'Menecment psixologiyası', 'Management psychology', 'Психология управления', 'İdarəetmədə uğur qazanmaq üçün fərdi və qrup davranışını və münasibətlərini formalaşdıran amilləri bilmək lazımdır.\r\n\r\nMenecerlər öz davranışlarına nəzarət etməli və həmçinin digərlərinin düşüncələrini və fikirlərini də anlamalıdırlar.\r\n\r\nBu kurs, insanların bu və ya digər şeyi nə üçün etdiyini anlamaq üçün alətlər və konsepsiyalar təqdim edir.\r\n\r\nSosial psixologiyaya əsaslanan bu kurs davranışlara həmçinin insanın öz davranışına fokuslanır.\r\n\r\nKurs sizə özünüzü və digərlərini necə effektiv idarə etməyin prinsiplərini və çərçivələrini öyrədəcək.', 'Success in management requires an understanding of the factors that shape individual and group behavior and attitudes.\r\n\r\nManagers should monitor their behavior, as well as understand the thoughts and beliefs of others.\r\n\r\nThis course provides tools and concepts to understand why people are doing this or that thing.\r\n\r\nThis course, based on social psychology, focuses on behavior, including one\'s own behavior. The course will acquaint you with the framework and principles aimed at more effective management of yourself and others.', 'Успех в управлении требует понимания факторов, формирующих индивидуальное и групповое поведение и отношение. Менеджеры должны следить за своим поведением, а также понимать мысли и убеждения других. Этот курс дает инструменты и концепции для осознания того, почему люди занимаются именно тем или иным делом.\r\n\r\nЭтот курс, основанный на социальной психологии, фокусируется на поведении, включая собственное поведение человека. Курс ознакомит Вас с рамками и принципами, направленными на более эффективное управление собой и другими.', '', '', '100', 'Course', 'Active', 'HR-psychology.jpg', '.jpg', '', ''),
(5, 'Ailə psixologiyası', 'Family psychology', 'Семейная психология', 'Bəzi valideynlər “ideal ünsiyyətlə ideal valideyinlik arasında nə əlaqə ola bilər?” deyə düşünürlər. Hətta belə valideynlər valideynlik “rollarına” o qədər köklənirlər ki, həyat yoldaşları ilə ünsiyyətlərini ikinci plana keçirirlər. Halbuki yaxşı valideyn olmaq üçün, ilk növbədə yaxşı həyat yoldaşı olmaq lazımdır. Uşaqlarla münasibətdə heç bir problem yaşamayan, ancaq həyat yoldaşları ilə münasibətdə ciddi problemlərlə üz-üzə qalan çox valideynlər var. Belə valideynlərin uşaqları valideynləri ilə “yaxşı vaxt keçirsələr də” ata-anaları arasındakı gərginlikdən də öz paylarını alırlar.', 'Some parents ask themselves \"what is the connection between ideal communication and the ability to be ideal parents?\" Some parents are so much involved in the role of motherhood or paternity, that communication with the spouse recedes into the background. To be good parents, it\'s enough to be a good married couple. There are many parents who do not have any problems with children, but at the same time serious problems in the relationship between themselves. The children of such parents, in spite of the fact that they have a good time with their parents, are partly in a tense situation between mother and father. ', 'Некоторые родители задаются вопросом «какова же связь между идеальным общением и умением быть идеальными родителями?» Некоторые родители настолько входят в роль материнства или отцовства, что общение с супругом отходит на второй план. Чтобы быть хорошими родителями, достаточно быть хорошей семейной парой. Есть множество родителей, у которых нет никаких проблем с детьми, но при этом серьезные проблемы в отношениях между собой. Дети таких родителей, несмотря на то, что они хорошо проводят время с родителями, отчасти находятся в напряженной ситуации между матерью и отцом. ', '', '', '120', 'Course', 'Active', 'fam.jpg', '.jpg', '', ''),
(6, 'Uşaq psixologiyası', '.', '.', 'Uşaq Psixologiyası ilə bağlı müraciətlərin sayının artması ilə əlaqədar olaraq biz bu kursu keçirməyə başladıq.Valideynlər uşaqlarının psixoloji inkişafı üçün bizim psixoloqların xidmətlərindən istifadə edə bilərlər.Həmçinin siz bizim psixoloqları evinizə dəvət edə bilərsiniz.', '.', '.', '', '', '90', 'Course', 'Active', 'child.jpg', '.jpg', '', ''),
(7, 'Sosial psixologiya', '.', '.', 'Sosial psixologiya -  bir insanın cəmiyyətdə və müxtəlif qruplarda davranışını, başqalarını idrak etmək, onlarla ünsiyyət qurmaq və onlara təsirini öyrənməyə həsr olunmuş psixologiyanın bir bölməsidir.\r\n\r\nSosial psixologiyanın əsaslarını bilmək insanın psixoloji cəhətdən düzgün öyrədilməsi və fərdlə insan arasında qarşılıqlı əlaqə yaratmaq üçün çox vacibdir.', '.', '.', '', '', '110', 'Course', 'Active', 'sosial.jpeg', '.jpeg', '', ''),
(8, 'Psixoterapiya', '.', '.  ', 'Psixoterapiya konsepsiyasını həm psixiatriya, həm də psixoloji cəhətdən fərqləndirmək lazımdır. Psixoterapiya psixiatrik müalicənin bir növü və ya tərkib hissəsi ola bilər ( psixiatriyaya aid olan dərsliklərdə təsvir olunur), lakin psixiatrik müalicə tez-tez onunla məhdudlaşmır (və ya bəzi hallarda, məsələn, kəskin psixozda ümumiyyətlə yalnız tibbi müalicəyə salınır). Psixoloq həmçinin psixoterapevt ola bilər (məsələn, kurslara qatılaraq müvafiq ixtisasları əldə edir).\r\n', '.', '.', '', '', '130', 'Course', 'Active', 'individualnaya-psihoterapiya.jpg', '.jpg', '', '2022-09-18 17:22:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `students`
--

CREATE TABLE `students` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `st_name_eng` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `st_name_ru` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `st_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `st_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `st_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `st_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `st_img_ext` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `st_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `st_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `students`
--

INSERT INTO `students` (`st_id`, `st_name`, `st_name_eng`, `st_name_ru`, `st_description`, `st_description_eng`, `st_description_ru`, `st_img`, `st_img_ext`, `st_create_date`, `st_update_date`) VALUES
(3, 'Zəhra Hüseynova', '.', '.', ' STİMUL kursuna və bütün işçilərinə ayrıvca təşəkkürümü bildirirəm. Hər şey üçün çox sağolun!', '.', '.', 'zahra.jpg', '.jpg', '2022-09-17 23:37:20', ''),
(4, 'Araz Musayev', ',', ',', ' \"STİMUL\"da 1C Mühasibatlıq proqramının tədrisi ilə əlaqədar aldığım biliyə görə bütün STİMUL kollektivinə və müəlliməm İlahə xanıma təşəkkür edirəm', ',', ',', 'arazmusayev.jpg', '.jpg', '2022-09-17 23:55:47', ''),
(5, 'Ləman Sadıqova', ',', ', ', 'Stimulda Milli Mühasibatlıq və 1C Mühasibatlıq kurslarında aldığım biliyə, öyrəndiklərimə görə müəlliməm İlahə xanıma və STİMUL rəhbərliyinə təşəkkür edirəm!', '.', '.', 'lamansadigova1.jpg', '.jpg', '2022-09-17 23:58:02', '2022-09-18 00:00:29'),
(6, 'Gülçin İbadova', ',', ',', 'HR təlimi keçdim. Hər şeyə görə çox sağolun! Çox razı qaldım kursunuzdan. Sevinc xanıma ayrı bir təşəkkür! Onun sayəsində çox şey öyrəndim. Sizə işlərinizdə müvəffəqiyyətlər arzulayıram! Bir daha təşəkkürlər!', ',', '.', 'gulcinibadova.jpg', '.jpg', '2022-09-18 00:07:30', ''),
(7, 'Leyla Məhərrəmzadə', '.', '.', 'Stimul kollektivinə təşəkkür edirəm. Xoş qarşılama, geniş və əhatəli məlumatlandırdığınız üçün təşəkkürlər. Ayrılıqda mənə MS office proqramlarını öyrədən Zibeydə müəlliməmə də xüsusi təşəkkürlər.', '.', '.', 'leyla.jpeg', '.jpeg', '2022-09-18 00:13:13', ''),
(8, 'Orxan Ağayev', '.', '.', '3 ay müddətində \"STİMUL Education & Consulting\" də Web design kursunu bitirdim. STİMUL kursunun rəhbərliyinə, müəllimlərinə və ən əsas da Rza müəllimə böyük təşəkkürlərimi bildirirəm. Hər şeyə görə çox sağolun!', '.', '.', 'orkhanagaev.jpg', '.jpg', '2022-09-18 00:15:23', ''),
(9, 'Sona Ələkbərzadə', ',', '.   ', 'Mən Ələkbərzadə Sona 3 ay ərzində ofis proqramları kursundan keçdim.Dərslər çox aydın başa salınır.Stimul kurslarını seçdiyim üçün çox məmnunam.Hər şey üçün müəlliməmə və Stimul kurslarına təşəkkürlər.,', ',', '.', 'sonaalakbarzade.jpg', '.jpg', '2022-09-18 00:17:06', '2022-09-22 00:06:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `studyabrd`
--

CREATE TABLE `studyabrd` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `s_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `s_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `s_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `s_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `s_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `s_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_category` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `s_status` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `s_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_img_ext` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `studyabrd`
--

INSERT INTO `studyabrd` (`s_id`, `s_name`, `s_name_eng`, `s_name_ru`, `s_description`, `s_description_eng`, `s_description_ru`, `s_create_date`, `s_update_date`, `s_price`, `s_category`, `s_status`, `s_img`, `s_img_ext`) VALUES
(3, 'Türkiyədə təhsil', '.', '.', 'STİMUL - Türkiyənin Dövlət Universitetlərinə heç bir imtahan vermədən yalnız ATTESTATLA 100% Qəbul olmağı təklif edir. \r\n\r\nTürkiyəni Azərbaycandan olan tələbələr üçün cəlbedici edən təhsil və yaşam xərclərinin aşağı olması, adət-ənənələrimizin, mədəniyyətimizin, incəsənətimizin və ən əsası dilimizin çox yaxın olmasıdır.\r\n\r\nQardaş ölkə Türkiyədə təhsil bütün pillələrdə yüksək səviyyədə olduğuna görə hər il 10 minlərlə xarici tələbə burada təhsil alır.\r\n\r\nTürkiyədə bakalavr, magistr və doktoranturaya qəbullar təklif edirik. Təhsilinizi həm əyani həmdə qiyabi ala bilərsiniz.', '/', '/', '', '', '2000', 'Service', 'Active', 'turkiye.jpg', '.jpg'),
(4, 'ABŞ - da təhsil', '.', '.', 'Amerika Birləşmiş ştatları beynəlxalq tələbə axınları üzrə dünyada birinci yer tutur.Təhsil və həyat təcrübələrini genişləndirmək üçün Amerikanı seçən tələbələrin sayı 800000-dən çoxdur.\r\n\r\nDünyanın ən reytinqli universitetlərinin burada yerləşməsi beynəlxalq tələbələrin bu ölkəyə gəlmələrinin əsas səbəbidir. ABŞ həmçinin texnoloji,tədqiqat üsulları,ən müasir avadanlıqlarla təchiz olunmuş universitetləri ilə tanınır.Burada təhsil alan tələbələr dünyaca məhşur tədqiqatçılar , professorlarla birbaşa əlaqədədirlər.Tələbələrin oxuyarkən işləmək şansı da var.Amerika şirkətləri müxtəlif mədəniyyətlərlə körpü yaratmaq üçün layiqli beynəlxalq tələbələri işlə təmin edirlər.\r\n\r\nAmerikaya təhsil almağa gələn hər bir tələbə, ilk növbədə, beynəlxalq səviyyəli diplom əldə etmək istəyir.Amerikada təhsil tək diplom deyil, həm də, cəzbedici karyera perspektivləri imkanları, o, cümlədən qiymətsiz həyat təcrübəsi qarşınızda açır.', ',', ',', '', '', '4000', 'Service', 'Active', 'usa1.jpg', '.jpg'),
(5, 'İngiltərədə dil kursları', '.', '.', 'İngilis dilini öz vətənində öyrənin.\r\n\r\nLondonun tam mərkəz bölgəsində yerləşən Marbel Arch məktəb şəhərciyimiz Hyde Park və Piccadilly sirki daxil olmaqla, demək olar ki bütün əsas obyektlərə yaxın məsafədə yerləşir. Maliyyə və biznes sahəsi hesab olunan City- yə isə avtobusla 5-10 dəqiqə kimi qısa müddətdə çatmaq mümkündür.\r\n\r\nBiz Londonla yanaşı Böyük Britaniyanın (BB) digər nəhəng şəhərlərində də fəaliyyət göstəririk.', '.', '.', '', '', '1500', 'Service', 'Active', 'london.jpg', '.jpg'),
(6, 'Ukraynada təhsil', ',', ',', 'Ukraynada ali təhsil tam ümumi orta təhsil əsasında həyata keçirilir. Bundan başqa, kiçik mütəxəssislər hazırlayan ali təhsil müəssisələrinə ümumi baza orta təhsilli şəxslər qəbul edilə bilərlər.\r\n\r\nUkrayna universitetləri çox güclü akademik kadra malikdir. Bir tələbəyə düşən professor sayı avropanın çox ölkələrindən yüksəkdir. Ukrayna universitetləri Lissabon müqaviləsinə görə Avropa Şurasına daxil olan ölkələrdə və Təhsil Nazirliyi tərəfindən tanınır. Bu müqaviləyə əsasən tələbələrin avropanın digər ölkələrinə də transfer olmaq imkanları vardır.', '.', '.', '', '', '/', 'Service', 'Active', 'ukraine.jpg', '.jpg'),
(7, 'Rusiyada təhsil', '.', '.', 'STİMUL Education & Consulting Rusiyada Federasiyasının Dövlət və Özəl Universitetlərinə yalnız Attestatla qəbul elan edir!\r\n\r\nRusiya Federasiyasının Dövlət və Özəl Universitetlərinə qəbul üçün, sədəcə, ümumtəhsil haqqında attestatın olması kifayətdir. Onu da qeyd etmək istərdik ki, rus dilini kifayət qədər yaxşı bilməyən tələbələr və valideyinlər heç də ümidsizliyə qapılmasınlar. Universitetinin nəzdində xaricdən gələn tələbələr üçün bir illik hazırlıq kursları var. Həmin hazırlıq kurslarını bitirən tələbələr universitetin birinci kursunda təhsilini davam etdirmə imkanı əldə edir.\r\n\r\nQəbulla bağlı ətraflı məlumat üçün çəkinmədən bizimlə əlaqə saxlaya bilərsiniz:', '.', '.', '', '2022-09-22 00:03:24', '1500', 'Service', 'Active', 'russian.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `toefl`
--

CREATE TABLE `toefl` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `t_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `t_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `t_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `t_category` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `t_status` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `t_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_img_ext` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `toefl`
--

INSERT INTO `toefl` (`t_id`, `t_name`, `t_name_eng`, `t_name_ru`, `t_description`, `t_description_eng`, `t_description_ru`, `t_create_date`, `t_update_date`, `t_price`, `t_category`, `t_status`, `t_img`, `t_img_ext`) VALUES
(2, 'IELTS kursları', '.', '.', 'IELTS (The International English Language Testing System) imtahanı ingilis dili biliyinin beynəlxalq səviyyədə yoxlanılması – dil biliyi səviyyəsini təsdiq etmək üçün işlənib hazırlanmış qiymətləndirmə sistemidir.\r\n\r\nBu imtahan Böyük Britaniya, Avstraliya, Kanada, ABŞ, Yeni Zelandiyanın bir çox universitet, hökumət təşkilatları, eləcə də Avstriya, Almaniya, Fransa, İrlandiya, Hollandiya, İsveçrə, Niderland, İsrail, Honkonq, Cənubi Afrikanın tədris müəssisələri tərəfindən tanınmışdır.\r\n\r\nIELTS imtahanı Amerika, Avropa, Asiya, Avstraliya, Yeni Zelandiya, Cənubi Afrikanın kollec və universitetlərində təhsil almaq, Böyük Britaniya, Kanada, Avstraliya, Yeni Zelandiyaya immiqrasiya, xaricdə işə düzəlmək üçün lazımdır.  \r\n\r\nIELTS testi bütün dil vərdişlərini yoxlayır – dilin başa düşülməsi, danışıq dili, oxu və yazı. Oxumaq və yazmaq üçün tapşırıqlar “Akademik” təhsil modulu və “Ümumi təyinat” modulu arasında seçim zərurətini nəzərdə tutur. ', '.', '.', '', '', '150', 'Course', 'Active', 'ieltss.jpg', '.jpg'),
(3, 'TOEFL kursları', '/', '/', 'TOEFL (Test of English as a Foreign Language). TOEFL testi ABŞ, yaxud Kanada ali təhsil ocaqlarında oxumağa hazırlaşan, MBA proqramlarına daxil olmaq istəyən şəxslər, və işəgötürənləri TOEFL üzrə biliyi məcburi işəgötürmə şərti kimi irəli sürən şəxslər üçün nəzərdə tutulmuşdur.\r\nTOEFL test sistemi verilən cavablar arasında düzgün cavabın seçilməsini tələb edən müxtəlif növ suallardan ibarətdir.\r\n\r\nTOEFL iBT (internet-based version of the TOEFL) — TOEFL beynəlxalq imtahanının yeni internet – versiyasıdır. \r\n\r\n Testin yeni formatı dil bilgisinin dörd növü üçün nəzərdə tutulmuşdur: şifahi danışıq, oxunan mətnin başa düşülməsi, dinləməklə şifahi nitqin başa düşülməsi və yazı: Reading, Listening, Writing & Speaking\r\n\r\nTestin ümumi davametmə müddəti  təxminən dörd saatdır. TOEFL iBT-də testin əvvəlki versiyasından tapşırıqlar, eləcə də ümumiləşdirmə prinsipi üzrə tərtib edilmiş və bir  neçə dil vərdişlərinə toxunan yeni tapşırıqlar verilir.\r\n\r\nSpeaking (şifahi nitq) yeni bölməsində qulaqcıq və mikrofon vasitəsilə yerinə yetirilməsi lazım olan 6 tapşırıq verilir. Writing bölməsi genişləndirilmiş və essenin oxunmuş mətn və ona verilən şərh əsasında yazıldığı ümumiləşdirilmiş tapşırıqlardan  ibarətdir. Test zamanı qeydlərin edilməsinə icazə verilir.\r\n\r\nTOEFL beynəlxalq sertifikatı 2 il müddətində etibarlıdır.', '/', '/', '', '', '140', 'Course', 'Active', 'toefl.jpg', '.jpg'),
(4, 'GMAT kursları', '/', '/', 'GMAT (Graduate Management Admission Test) – biznes və menecment sahəsində təkmilləşmək məqsədilə biznes məktəblərə, MBA proqramlarına daxil olmaq istəyən şəxslərin analitik yazı, kəmiyyət, şifahi və oxuma bacarıqlarını qiymətləndirən bir testdir.', '/', '/', '', '', '160', 'Course', 'Active', 'Online-GMAT-Exam.png', '.png'),
(5, 'GRE kursları', '.', '.', 'GRE (Graduate Record Examinations) – ABŞ universitetlərində və digər beynəlxalq universitetlərdə (həmçinin Kanadada və Avstraliyada) magistratura və doktoranturaya qəbul olmaq üçün verilməsi zəruri olan testdir. Əsasən dəqiq fənlər üzrə təhsil almaq istəyənlər üçün nəzərdə tutulub.', '.', '.', '', '2022-09-18 17:30:59', '150', 'Course', 'Active', 'gre.png', '.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `training`
--

CREATE TABLE `training` (
  `trg_id` int(11) NOT NULL,
  `trg_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `trg_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `trg_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `trg_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `trg_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `trg_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `trg_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trg_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trg_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trg_category` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `trg_status` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `trg_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trg_img_ext` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `training`
--

INSERT INTO `training` (`trg_id`, `trg_name`, `trg_name_eng`, `trg_name_ru`, `trg_description`, `trg_description_eng`, `trg_description_ru`, `trg_create_date`, `trg_update_date`, `trg_price`, `trg_category`, `trg_status`, `trg_img`, `trg_img_ext`) VALUES
(2, 'Biznes', '.', '.', 'Beynəlxalq Biznes və İqtisadi əlaqələr   (1 ay - 12 saat)\r\n\r\nBeynəlxalq Biznes   (1 ay - 16 saat)\r\n\r\nBiznesin İdarə olunması (baza)  (1 ay - 16 saat)\r\n\r\nBiznesin idarə olunması (professional)  (3 ay - 48 saat)\r\n\r\nElektron biznes və elektron kommersiya layihələrinin  idarə olunması  (1 ay - 16 saat)\r\n\r\nQiymətli kağızlar bazarı   (1 ay - 12 saat)\r\n\r\nİqtisadiyyatın dövlət tənzimlənməsi  (1 ay - 16 saat)\r\n\r\nBiznes plan  (1 ay - 12 saat)', '.', '.', '', '', '50', 'Service', 'Active', 'business.jpeg', '.jpeg'),
(3, 'Psixologiya', ',', ',', 'Uşaqlar üçün psixoloji xidmətlərimizə Autizm sindromu (Asperger, Rett sindromu, Atipik autizm), Daun sindromu, Davranış pozuntusu, Əqli gerilik, Psixi inkişafın ləngiməsi, Hiperaktivlik, Serebral iflic, Uşaq qorxuları, utancaqlıq, komplekslər, özünəqapanma, ünsiyyət çətinliyi, sosial adaptasiya,  Bacı-qardaş qısqanclığı, Aqressivlik, İnadkarlıq, Dırnaq yemə, barmaq əmmə, Altını islatma, Diqqət dağınıqlığı, yaddaş, təsəvvür zəifliyi, Təfəkkür, qavrama problemləri, Məktəb və bağça fobiyası daxildir.\r\n\r\nBöyüklər üçün fərdi psixoloji konsultasiyalarımıza Stress, Gərginlik, Aqressiya, Depressiya, Yaş böhranı, Həyəcanlar, Özgüvən çatışmamazlığı, özünəinamsızlıq, Özünəqapanma, tənhalığa meyllilik, Sosial adaptasiya, sosial ünsiyyət problemi, Fobiyalar, Obsessiv-kompulsiv pozuntular və s. daxildir.', ',', ',', '', '', '100', 'Service', 'Active', 'psychology.jpeg', '.jpeg'),
(4, 'Risk Menecment', ',', ',', 'Risk Menecment - “Riskin İdarə edilməsi” təlimi\r\n\r\nTəlimin dili: Azərbaycan və Rus dili\r\n\r\nKursun Müddəti: 16 saat\r\n\r\nXidmət haqqı: 300 AZN\r\n\r\nTəlimin başlama tarixi qrup iştirakçılarının istəyi ilə üəyyənləşdiriləcək.\r\n\r\nTəlim risklərin müəyyən edilməsi və müxtəlif növ risklərin peşəkarlıqla idarə edilməsini istəyənlər üçün nəzərdə tutulub.\r\n\r\n ', ',', ',', '', '', '89', 'Service', 'Active', 'risc.jpg', '.jpg'),
(5, 'Nitq Mədəniyyəti', '.', '. ', 'Səsin xoşuna gəlmir? Danışarkən fikrini izah etməkdə çətinlik çəkirsən? Özünə güvənmirsən? İş sahəsində əldə etmək istədiyiniz uğurun sənin danışıq mədəniyyətindən nə qədər asılı olduğunu bilirsənmi? Danışarkən jest və mimikalardan düzgün istifadə etməklə daha inandırıcı olmağın sirrlərini öyrənmək istəyirsənmi? Onda bizə müraciət edin! Təşkil etdiyimiz diksiya kurslarında siz mükəmməl danışıq qabiliyyətinə və dolğun səs imkanlarına malik olacaqsınız. Bundan istifadə edərək gələcəkdə siz iş yerinizdə və başqaları ilə münasibətdə bir çox üstüklüklər qazanacaqsınız. Radio və ya televiziya aparıcısı, müxbir olmaq istəyənlər üçün xüsusi məşğələlərimiz var.', '.', '.', '', '2022-09-18 18:09:28', '90', 'Service', 'Active', 'speech.jpg', '.jpg'),
(6, 'Loqistika və Satınalma', '.', '.', 'Əksər şirkətlərin uğur və ya uğursuzluğunun mühüm hissəsi onun Loqistikasının necə qrulmasından asılıdır. Satınalma və Anbar Loqistikasının qüsursuz qurulması üçün peşəkarlar yetişdirmək bizim işimizdir.\r\n\r\n\"Loqistika\" təlimində iştirak etməklə Logistik proses və prosedurlarını, Daşınma növləri və onların müsbət və mənfi cəhətlərini, Satınalmanın şirkət daxilində rolu və satınalma prosesinin mərhələlərini, Satınalma metodlarını, Satınalma kontrakt növləri PO və FA \"Contracts\" fərqləri və izahını, Gömrük sənədləri formalarını, Praktik iş, real proseslərin qurulması və analizi ilə yanaşı Anbar və Satınalma Loqistikasına aid digər vacib məqamları da öyrənmiş olacaqsız.', '.', '.', '', '', '120', 'Service', 'Active', 'log.jpg', '.jpg'),
(7, '“Reklam və PR” təlimi', '.', '.     ', 'Reklam — insanların hər hansı bir məhsulu almağına, xidmətdən istifadə etməyinə təsir etməkdə istifadə olunan məlumatlandırma vasitəsi.Reklam qəzet, websaytlar, radio, bilbord və s. kimi vasitələrlə ötürülə bilər. Bir qayda olaraq reklam məhsulun və ya xidmətin adı və bu məhsul və ya xidmətin alıcıya necə faydalı olacağı barədə məlumatları özündə saxlayır. Reklam bir çox hallarda potensial alıcıları hər hansı bir markanın məhsul və ya xidmətlərindən istifadə etməyə inandırmağa cəhd göstərir. \r\n\r\nİctimaiyyətlə əlaqələr və ya PR, piar (ing. PR – public relations) — insanın, şirkətin, ictimai hərəkatın, partiyanın, qeyri hökumət təşkilatının və s. ictimai informasiyanın verilməsi və onunla əməkdaşlığa əsaslanan irəliyə hərəkəti üzrə kompleks tədbirlərdir. Biznesdə ictimaiyyətlə əlaqələr – marketinq kommunikasiyalarının növlərindən biridir. İctimaiyyətlə əlaqələr BTL-tədbirlərin tərkib hissəsidir. PR anlayışı təbliğat və reklam terminləri ilə sıx əlaqədardır.', '.', '.', '', '2022-09-25 19:31:47', '130', 'Service', 'Active', 'reklam.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `translation`
--

CREATE TABLE `translation` (
  `tr_id` int(11) NOT NULL,
  `tr_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tr_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tr_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tr_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tr_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tr_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tr_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tr_category` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tr_status` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tr_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_img_ext` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `translation`
--

INSERT INTO `translation` (`tr_id`, `tr_name`, `tr_name_eng`, `tr_name_ru`, `tr_description`, `tr_description_eng`, `tr_description_ru`, `tr_create_date`, `tr_update_date`, `tr_price`, `tr_category`, `tr_status`, `tr_img`, `tr_img_ext`) VALUES
(2, 'Sinxron tərcümə', '.', '.', 'STİMUL sizə böyük məmnuniyyətlə istənilən mövzunun tərkibində şifahi, yazılı, tam keyfiyyətli tərcümə xidmətini, eləcə də xarici qonaqların dilçilik təminatını təklif edirik. Mərkəz 25-ə yaxın dil üzrə yazılı və şifahi tərcümə xidməti təklif edir.\r\n\r\nBu tərcümə növündə tərcüməçi danışan şəxslə eyni vaxtda danışır. Bu tərcümə növünün üstünlükləri yalnız bir neçə dilə tərcümə edildikdə istifadə olunur. Beləliklə, sinxron tərcümə 2 və daha artıq dildə danışılan böyük beynəlxalq konfranslar və görüşlər üçün ən yaxşı seçimdir.', '.', '.', '', '', '50', 'Service', 'Active', 'translation11.png', '.png'),
(3, 'Ardıcıl tərcümə', '.', '.', 'STİMUL NN” MMC sizə böyük məmnuniyyətlə istənilən mövzuda şifahi, yazılı, tam keyfiyyətli tərcümə xidmətini, eləcə də xarici qonaqların dilçilik təminatını təklif edir. Mərkəz 25-ə yaxın dil üzrə yazılı və şifahi tərcümə xidməti göstərir. Şirkət sifarişin  vaxtında keyfiyyətlə yerinə yetirilməsinə təminat verir. Mərkəzimizlə əməkdaşlığın müqabilində siz geniş xidmət növlərinin, yüksək keyfiyyətin, verilən sifarişlərin operativ yerinə yetirilməsinin şahidi olacaqsınız.\r\n\r\nSistematik tərcümə şifahi tərcümənin geniş yayılmış növüdür. Tərcüməçi dinləyicilərə öz fikrini çatdırması üçün danışan şəxs hər deyiləndən sonra fasilə edir. Bu növ tərcümələr əsasən biznes danışıqlarında, press konfranslarda, təqdimatlarda işgüzar görüşlərdə və s. istifadə edilir.', '.', '.', '', '', '40', 'Service', 'Active', 'tr2.jpg', '.jpg'),
(4, 'Yazılı tərcümə', '..', '.', '“STİMUL NN” MMC sizə böyük məmnuniyyətlə istənilən mövzunun tərkibində şifahi, yazılı, tam keyfiyyətli tərcümə xidmətini, eləcə də xarici qonaqların dilçilik təminatını təklif edirik.\r\n\r\nMərkəz 25-ə yaxın dil üzrə yazılı və şifahi tərcümə xidməti təklif edir. Şirkət sifarişin lazım olan vaxtda keyfiyyətlə yerinə yetirilməsinə təminat verir. Mərkəzimizlə əməkdaşlığın müqabilində siz geniş xidmət növlərinin, yüksək keyfiyyətin, verilən sifarişlərin operativ yerinə yetirilməsinin şahidi olacaqsınız.\r\nBizim kompaniyanın əsas tapşırığı qısa müddət ərzində keyfiyyətli tərcüməni işləyib hazırlamaqdır.', '.', '.', '', '2022-09-22 00:01:25', '50', 'Service', 'Active', 'tr3.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_message`
--

CREATE TABLE `user_message` (
  `us_id` int(11) NOT NULL,
  `us_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `us_subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `us_select` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `us_message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `us_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `user_message`
--

INSERT INTO `user_message` (`us_id`, `us_name`, `us_surname`, `us_email`, `us_phone`, `us_subject`, `us_select`, `us_message`, `us_create_date`) VALUES
(3, 'sdlkfslfjl', 'lkjlsfkjdkl', 'muradlivusale02@gmail.com', 'dfsldjflskdj', 'lksdjfldj', 'closed', 'fhjjkhsfksdhjfjdk', '2022-10-16 19:08:27'),
(4, 'ksdfjldjs', 'n', 'n', 'n', 'n', 'private', '', '2022-10-17 23:41:43'),
(5, '1', '1', 'muradlivusale02@gmail.com', '6546465454', '5464654', 'private', 'kjdfksdhjf', '2022-10-23 20:18:56'),
(6, 'ldksfjlskdj', 'lkfjgldkfj', 'lkjglkj', 'LKJGLDFKJ', 'LKDGJLDFKJG', 'closed', 'ldfkgjldfkgj', '2022-10-23 20:19:58'),
(7, 'Solmaz', ' Dadaşova', 'solmzd334@gmail.com', '123456789q', '456', 'group', 'ldksfjlsdkjflskdj', '2022-10-23 21:10:56'),
(8, 'dfk;k', ';lfgk;lk', 'kdfgjlk@', 'KJDGFLKJ', 'LKJGFLDKJ', 'private', 'SKSDFJL\r\n', '2022-11-12 22:19:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yos`
--

CREATE TABLE `yos` (
  `y_id` int(11) NOT NULL,
  `y_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `y_name_eng` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `y_name_ru` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `y_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `y_description_eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  `y_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `y_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `y_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `y_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `y_category` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `y_status` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `y_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `y_img_ext` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `yos`
--

INSERT INTO `yos` (`y_id`, `y_name`, `y_name_eng`, `y_name_ru`, `y_description`, `y_description_eng`, `y_description_ru`, `y_create_date`, `y_update_date`, `y_price`, `y_category`, `y_status`, `y_img`, `y_img_ext`) VALUES
(2, 'TYS kursları', '.', '.', 'TYS (Türkçe Yeterlik Sınavı)  - Türkcəni xarici dil olaraq öyrənənlərin dil biliklərinin yoxlanılması və bilik səviyyəsini təsdiq etmək üçün Yunus Emre İnstitutu tərəfindən işlənib hazırlanmış qiymətləndirmə sistemidir.\r\n\r\nTürkiyə Universitetlərinə qəbul üçün müraciət edən tələbələr və qısaca Türk dili bacarıqlarını sənədləşdirmək istəyən hər kəs Türkcə Yetərlilik İmtahanına (TYS\'yə) girə bilər.\r\n\r\nBeynəlxalq standartlara uyğun olaraq hazırlanan Türkcə Yetərlilik İmtahanı \"Oxuma, Dinləmə, Yazma və Danışma (Müstəqil Danışıq, Qarşılıqlı Danışıq)\" hissələrindən ibarətdir. İmtahanı müvəffəqiyyətlə verən şəxslərə “Türkce Yeterlilik Belgesi” verilir.\r\n\r\nTYS imtahanı: oxuma 40, dinləmə 30, yazma 2, müstəqil danışma 1, qarşılıqlı danışma 7  sual olmaq üzrə cəmi 80 sualdan ibarətdir.', '.', '.', '', '', '90', 'Course', 'Active', 'tys.jpg', '.jpg'),
(3, 'YÖS kursları', '.', '.', 'YÖS (Yabancı Uyruklu Öğrenci Sınavı) - Türkiyə universitetlərində bakalavr pilləsində oxumaq istəyən xarici ölkə vətəndaşlarının verməli olduqları bir imtahandır.\r\n\r\nYÖS Məntiq və Riyaziyyat olmaqla 2 hissədən ibarətdir və ümumilikdə imtahana 80 sual (45 riyaziyyat, 35 məntiq) düşür. \r\n\r\nYÖS imtahanından yığıla biləcək maksimum nəticə 100 baldır. Əgər tələbə 60-dan yuxarı bal yığarsa bir sıra Universitetlərdə güzəştli təhsil haqqı ilə və ya ödənişsiz təhsil ala bilər.\r\n\r\nTürkiyədə tibb təhsili almaq üçün ən azı 95 bal yığmalısınız.\r\n\r\nAdətən imtahan nəticəsi 2 il etibarlı olur. Bir neçə universitet Bakıda bu imtahanı keçirdirlər.', '.', '.', '', '', '100', 'Course', 'Active', 'yos.jpg', '.jpg'),
(4, 'ALES kursları', '.', '.', 'ALES (Akademik personel ve Lisansüstü Eğitime giriş Sınavı) Türkiyədə magistr və doktorantura təhsili almaq istəyən şəxslərin verməli olduqları ən vacib imtahandır.\r\n\r\nRiyaziyyat və Türkcədən ibarət olmaqda ümumilikdə 160 sualı əhatə edir. Sözel 1, Sözel 2, Sayısal 1, Sayısal 2 olmaqla 4 bölmədən ibarət olan ALES imtahanında hər bölmədən 40 sual düşür.Tələbələr ixtisaslarına uyğun olan 120 sualı cavablandırmalıdırlar.\r\nİmtahana bakalavr, magistr məzunları və son kurs tələbələri müraciət edə bilərlər. İmtahan ildə iki dəfə Yaz (May ) və Payız (Noyabr) vaxtında keçirilir. \r\nİmtahandan toplamalı olduğunuz minimum bal 55-dir. ALES İmtahanın nəticəsi 3 il etibarlıdır. İmtahan test üsulu ilə keçirilir:', '.', '.', '', '', '120', 'Course', 'Active', 'ales.jpg', '.jpg'),
(5, 'YDS kursları', '.', '.    ', 'YDS (Yabancı Dil Sınavı) Türkiyə universitetlərində xarici dildə təhsil almaq istəyən tələbələr tərəfindən verilən xarici dil imtahanıdır.\r\n\r\nBu imtahan ildə 2 dəfə bahar və son bahar aylarında Türkiyədə keçirilir. YDS imtahan nəticəsi bütün universitetlər tərəfindən qəbul edilir. İmtahan ingilis dilindən başqa digər dillər üzrə də keçirilir.\r\n\r\nİmtahan 180 dəqiqə davam edir, 80 sualdan ibarətdir və 100 ballıq sistemlə qiymətləndirilir. İmtahan nəticəsinin etibarlılıq müddəti adətən 5 il, bəzi universitetlərdə isə öz daxili qanunvericiliklərinə görə müəyyən edilir.', '.', '.', '', '2022-09-22 00:00:00', '110', 'Course', 'Active', 'yds.jpg', '.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `acca`
--
ALTER TABLE `acca`
  ADD PRIMARY KEY (`ac_id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ad_id`);

--
-- Tablo için indeksler `all_courses`
--
ALTER TABLE `all_courses`
  ADD PRIMARY KEY (`a_id`);

--
-- Tablo için indeksler `colleagues`
--
ALTER TABLE `colleagues`
  ADD PRIMARY KEY (`cl_id`);

--
-- Tablo için indeksler `compcourse`
--
ALTER TABLE `compcourse`
  ADD PRIMARY KEY (`c_id`);

--
-- Tablo için indeksler `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cs_id`);

--
-- Tablo için indeksler `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`d_id`);

--
-- Tablo için indeksler `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Tablo için indeksler `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`l_id`);

--
-- Tablo için indeksler `prepearing`
--
ALTER TABLE `prepearing`
  ADD PRIMARY KEY (`pr_id`);

--
-- Tablo için indeksler `psychology`
--
ALTER TABLE `psychology`
  ADD PRIMARY KEY (`p_id`);

--
-- Tablo için indeksler `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_id`);

--
-- Tablo için indeksler `studyabrd`
--
ALTER TABLE `studyabrd`
  ADD PRIMARY KEY (`s_id`);

--
-- Tablo için indeksler `toefl`
--
ALTER TABLE `toefl`
  ADD PRIMARY KEY (`t_id`);

--
-- Tablo için indeksler `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`trg_id`);

--
-- Tablo için indeksler `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`tr_id`);

--
-- Tablo için indeksler `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`us_id`);

--
-- Tablo için indeksler `yos`
--
ALTER TABLE `yos`
  ADD PRIMARY KEY (`y_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `acca`
--
ALTER TABLE `acca`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `all_courses`
--
ALTER TABLE `all_courses`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `colleagues`
--
ALTER TABLE `colleagues`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `compcourse`
--
ALTER TABLE `compcourse`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `customers`
--
ALTER TABLE `customers`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `design`
--
ALTER TABLE `design`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `languages`
--
ALTER TABLE `languages`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `prepearing`
--
ALTER TABLE `prepearing`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `psychology`
--
ALTER TABLE `psychology`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `students`
--
ALTER TABLE `students`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `studyabrd`
--
ALTER TABLE `studyabrd`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `toefl`
--
ALTER TABLE `toefl`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `training`
--
ALTER TABLE `training`
  MODIFY `trg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `translation`
--
ALTER TABLE `translation`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `user_message`
--
ALTER TABLE `user_message`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `yos`
--
ALTER TABLE `yos`
  MODIFY `y_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
