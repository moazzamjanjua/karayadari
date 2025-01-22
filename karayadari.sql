-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2025 at 09:15 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u287804375_karayadari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jawad Ahmad', 'jawadahmad6588@gmail.com', '$2y$10$/0HyPhYHrPmMt/JQCFWzmuC/f4OIPujPUwaXq0csOjEuma6RUP/pm', NULL, NULL),
(2, 'Moazzam Hussain', 'moazzamjanjua92@gmail.com', '$2y$10$a9/5PbelSih47pvFsjHSleh8/w4V7MEp5oN/Zduth5XnqIfWjnLkG', NULL, NULL),
(3, 'Shahzad Aslam', 'shahzadaslam198@gmail.com', '$2y$10$pW2R2UV41K.7QRSvH2FFx.aB.2BP8yg15Sl9k7rtBJSufo7Po/drm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `resume_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `email`, `phone`, `position`, `resume_path`, `created_at`, `updated_at`) VALUES
(10, 'Samra jamil', 'samramirzamirza86@gmail.com', '03126433297', 'Communication Manager', 'https://karayadari.online/storage/resumes/W1MNBarFLJQ34a41IoRUKvugiJUXwdW92SecTWdP.pdf', '2024-10-24 12:34:05', '2024-10-24 12:34:05'),
(11, 'Abeeha Batool', 'abeeha.batool2002@gmail.com', '0317 7073579', 'Communication Manager', 'https://karayadari.online/storage/resumes/2EklGvOloqpYyxEnWVJTbM1WP6IHuL8UmYtYhCzQ.pdf', '2024-10-24 18:24:53', '2024-10-24 18:24:53'),
(12, 'Fiza Hassan', 'fizahira55@gmail.com', '03186834317', 'Marketing Specialist', 'https://karayadari.online/storage/resumes/fJFY640iCuXDXmCoItqkwRXpjMsCMQa42Nz906M3.pdf', '2024-10-24 18:45:43', '2024-10-24 18:45:43'),
(13, 'Musarrat Rasheed', 'asadmishu60@gmail.com', '03276361345', 'Social Media Manager', 'https://karayadari.online/storage/resumes/LOC3aR1xtrvEsZ6jfv3OeEWzLZJPXgF7xUR1OSI8.pdf', '2024-10-24 21:49:11', '2024-10-24 21:49:11'),
(14, 'Ayesha Nasir', 'ayeshadhillon840@gmail.com', '0325 8392574', 'Social Media Manager', 'https://karayadari.online/storage/resumes/MGiGimYgGOIcMb6ktmUqMVFVMSWFBAKg1hBFGZTl.pdf', '2024-10-25 13:30:04', '2024-10-25 13:30:04'),
(15, 'Hadia shafique', 'hadiashafique444@gmail.com', '03194149950', 'Social Media Manager', 'https://karayadari.online/storage/resumes/oMTMcIQLZLog76dBkgYl46JOEjankJE9JuEAbf10.pdf', '2024-10-31 16:52:24', '2024-10-31 16:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `city_id`, `city_name`, `created_at`, `updated_at`) VALUES
(5, 'Riaz Colony', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-30 19:00:00'),
(7, 'Uni chowk', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(13, 'Commercial Area', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(14, 'Satellite Town', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(27, 'Goheer Town ', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(28, 'Darbar Pulli ', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(29, 'Model Town C', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(30, 'Faisal Colony', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(31, 'Gulistan  Colony', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(32, 'Qasim Town', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(33, 'Riaz colony Street 1', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(34, 'Bahawal Chowk', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(35, 'One Unit chowk', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(36, 'sadar Pulli', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(37, 'Madina Town', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(38, 'Gullberg Colony', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43'),
(39, 'Mela Gali', 1, 'Bahawalpur', '2024-05-30 19:00:00', '2024-05-31 09:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_content` text DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blog_tags` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_slug`, `blog_content`, `blog_image`, `created_at`, `updated_at`, `blog_tags`) VALUES
(36, 'Top 5 Affordable Hostels In Bahawalpur For Students And Professionals', 'top-5-affordable-hostels-in-bahawalpur-for-students-and-professionals', '<p><strong>Top 5 Affordable Hostels in Bahawalpur for Students and Professionals</strong></p>\r\n<p><strong>Introduction:</strong></p>\r\n<p><strong>Bahawalpur</strong>, known for its historical heritage and growing educational institutions, attracts thousands of students and professionals each year. With universities like <a title=\"Near Uni Chock Bahawlpur\" href=\"https://www.iub.edu.pk/\" target=\"_blank\" rel=\"noopener\">Islamia University of Bahawalpur (IUB)</a> and <a href=\"https://qamc.edu.pk/\" target=\"_blank\" rel=\"noopener\"><strong>Quaid-e-Azam Medical College</strong></a>, the demand for comfortable and affordable accommodations has skyrocketed. Finding a suitable hostel can be a challenge, especially for newcomers. To ease the search, we&rsquo;ve compiled a list of some reliable and affordable hostels in Bahawalpur.</p>\r\n<p>1.<strong>Zahoor Palace Boys Hostel</strong></p>\r\n<p><strong>Location</strong>: <strong><a title=\"Zahore Place\" href=\"../../hostel/zahoor-palace\" target=\"_blank\" rel=\"noopener\">Qasim Town Street Number 2 Bahawalpur</a></strong></p>\r\n<p>Zahoor Place Boys Hostel offers spacious rooms, high-speed Wi-Fi, and 24/7 security. The hostel provides meal plans and laundry services, making it ideal for students looking for convenience at an affordable price.</p>\r\n<p><strong>Key Features:</strong></p>\r\n<ul>\r\n<li>24/7 security surveillance</li>\r\n<li>Shared study rooms</li>\r\n<li>In-house cafeteria</li>\r\n</ul>\r\n<p><strong>2. Zainab Girls Hostel&nbsp;</strong></p>\r\n<p><strong>Location</strong>:&nbsp;<a title=\"zainab girls hostel\" href=\"../../hostel/zainab-girls-hostel\" target=\"_blank\" rel=\"noopener\"><strong>Riaz Colony Street Number 1 near Masjid Khatm e Nubawat</strong></a></p>\r\n<p>Zainab Girls&nbsp; Hostel is known for its modern amenities and comfortable environment. Students appreciate the clean living conditions, along with regular maintenance and backup power during load-shedding hours.</p>\r\n<p><strong>Key Features:</strong></p>\r\n<ul>\r\n<li>Backup power generator</li>\r\n<li>Fresh Drinking Water</li>\r\n<li>Weekly cleaning services</li>\r\n<li>High Speed Wifi</li>\r\n</ul>\r\n<p><strong>3. Ayeesha Maryam Girls Hostel&nbsp;</strong></p>\r\n<p><strong>Location</strong>:&nbsp;<a title=\"ayeesha maryam girls hostel\" href=\"../../hostel/ayeesha-maryam-girls-hostal-in-bahawalpur\" target=\"_blank\" rel=\"noopener\"><strong>Riaz Colony Street Number 1 Masjid Khatm e Nubawat</strong></a></p>\r\n<p>This hostel is popular among medical students for its proximity to educational institutions. It provides all basic facilities, including Wi-Fi and a common lounge, for group study sessions or relaxation.</p>\r\n<p><strong>Key Features:</strong></p>\r\n<ul>\r\n<li>Proximity to key educational institutes</li>\r\n<li>Water Cooler&nbsp;</li>\r\n<li>Attach Separate Washroom</li>\r\n<li>High-speed internet</li>\r\n<li>Furnished common areas</li>\r\n</ul>\r\n<p><strong>4. Star Boys Hostel</strong></p>\r\n<p><strong>Location</strong>:&nbsp;<a title=\"star hostel\" href=\"../../hostel/star-hostel-2-in-bahawalpur\" target=\"_blank\" rel=\"noopener\"><strong>Qasim Town Street No 10 Bahawalpur</strong></a></p>\r\n<p>Star Boys Hostel&nbsp; have three branch start 1, 2 and 3 and caters to both students and young professionals. Its affordable rent structure and well-maintained environment make it a top choice for those on a budget.</p>\r\n<p><strong>Key Features:</strong></p>\r\n<ul>\r\n<li>Affordable rates</li>\r\n<li>Laundry and meal services</li>\r\n<li>Safe and friendly environment</li>\r\n<li>Filter Water Plant</li>\r\n<li>Attach and separate Washroom</li>\r\n</ul>\r\n<p><strong>5. Hashmi Boys Hostel</strong></p>\r\n<p><strong>Location</strong>:&nbsp;<a title=\"hashmi boys hostel\" href=\"../../hostel/hashmi-boys-hostel-in-bahawalpur\" target=\"_blank\" rel=\"noopener\"><strong>Goheer Town, main road Near Alama Iqbal College Bahawalpu</strong></a></p>\r\n<p>Hashmi Boys Hostel provides a quiet environment suitable for serious students. The hostel management ensures cleanliness, discipline, and basic comfort, offering both single and shared rooms.</p>\r\n<p><strong>Key Features:</strong></p>\r\n<ul>\r\n<li>Single and shared rooms available</li>\r\n<li>24/7 water and electricity supply</li>\r\n<li>CCTV-monitored premises</li>\r\n</ul>\r\n<p><strong>Summary</strong> :</p>\r\n<p><strong>Bahawalpur</strong> offers a variety of <a title=\"all-hostel\" href=\"../../all-hostels\" target=\"_blank\" rel=\"noopener\">hostels</a> catering to students and professionals with different needs and budgets. Whether you&rsquo;re looking for a basic and affordable setup or a more premium experience, the hostels mentioned above provide reliable accommodations. As <strong>Bahawalpur</strong> continues to grow, the demand for well-managed hostels will increase, making it essential to book early and secure a spot in your preferred location.</p>', 'https://karayadari.online/storage/blog_image/1729527413.png', '2024-10-21 16:16:53', '2024-10-24 17:59:30', '[\"karayadari\",\"hostels in pakistan\",\"affordable hostels\",\"student accommodations \"]'),
(37, 'The Condition Of Hostels In Bahawalpur: A Glimpse Into Student Life', 'the-condition-of-hostels-in-bahawalpur:-a-glimpse-into-student-life', '<p><strong>The Condition of Hostels in Bahawalpur: A Glimpse into Student Life</strong></p>\r\n<p><strong>Introduction:</strong></p>\r\n<p>Bahawalpur, a historic gem in southern Punjab, Pakistan, is renowned for its cultural heritage and vibrant landscapes. In recent years, the city has evolved into a thriving educational hub, home to prestigious institutions such as <a title=\"Islamia University of Bahawalpur\" href=\"https://www.iub.edu.pk/\" target=\"_blank\" rel=\"noopener\">Islamia University of Bahawalpur (IUB)</a>, <a title=\"Quaid-e-Azam Medical College\" href=\"https://qamc.edu.pk/\" target=\"_blank\" rel=\"noopener\">Quaid-e-Azam Medical College</a>, and several others. This influx of students has fueled a growing demand for hostel accommodations. However, the state of hostels in Bahawalpur is a mixed bag, with both positive aspects and significant challenges.</p>\r\n<p><strong>Accommodation Quality: Diverse Experiences</strong></p>\r\n<p>Hostel conditions in Bahawalpur vary widely, offering a blend of modern facilities and basic, no-frills accommodations. Some hostels, particularly private ones catering to affluent students, provide comfortable amenities such as:</p>\r\n<ul>\r\n<li>Clean rooms with proper ventilation</li>\r\n<li>Wi-Fi connectivity</li>\r\n<li>Laundry services</li>\r\n<li>Air-conditioned common rooms</li>\r\n</ul>\r\n<p>However, budget-friendly hostels&mdash;popular among students from rural areas&mdash;often lag behind in terms of quality. Overcrowding, poor hygiene, and inconsistent water supply are common challenges in low-cost accommodations, making it difficult for students to focus on their studies.</p>\r\n<p><strong>Safety and Security: A Growing Concern</strong></p>\r\n<p>Most hostels in Bahawalpur take basic security measures, such as:</p>\r\n<ul>\r\n<li>Installing CCTV cameras</li>\r\n<li>Hiring night guards for surveillance</li>\r\n</ul>\r\n<p>However, budget accommodations may offer inadequate security, leading to concerns about theft and safety, especially for students living far from their families. Female students, in particular, often look for hostels with strict security protocols, but not all hostels meet these standards.</p>\r\n<p><strong>Affordability vs. Comfort</strong></p>\r\n<p>For students coming from rural areas, affordability is the key factor when choosing a hostel. While cheaper hostels are available, they often sacrifice comfort and cleanliness. Students who can afford higher fees enjoy better facilities, such as uninterrupted power supply and access to clean drinking water. On the other hand, students in economical hostels face frequent power outages, unreliable internet services, and cramped living spaces, adding to their stress during exams.</p>\r\n<p><strong>Amenities and Their Impact</strong></p>\r\n<p>The availability of essential amenities like stable Wi-Fi, electricity backup, and water filtration systems varies from hostel to hostel. Premium hostels maintain higher standards and ensure these facilities are always available. However, budget hostels often struggle with maintenance, affecting the overall student experience. With inconsistent internet, students have to find other solutions to stay on top of their academic tasks.</p>\r\n<p><strong>Room for Improvement in Bahawalpur&rsquo;s Hostel System</strong></p>\r\n<p>While the growing number of hostels reflects the increasing demand for student accommodation, the city still has a long way to go in improving its hostel infrastructure. There is a pressing need for:</p>\r\n<ul>\r\n<li>Better regulation and inspection of hostels to ensure minimum living standards.</li>\r\n<li>Awareness programs to encourage hostel owners to improve hygiene and security measures.</li>\r\n<li>Investment in affordable yet comfortable accommodations for students from underprivileged backgrounds.</li>\r\n</ul>\r\n<p><strong>Summary: Striking a Balance between Cost and Comfort</strong></p>\r\n<p>The hostel situation in Bahawalpur presents both opportunities and challenges. Students willing to pay higher rents enjoy better living conditions, while others have to make do with basic accommodations. Improving the standards in budget-friendly hostels could significantly enhance the student experience, making Bahawalpur a more attractive destination for both local and outstation students.</p>\r\n<p>With the right investment and focus on affordable, secure, and well-maintained hostels, Bahawalpur can cater to the growing needs of its student population and continue to thrive as an educational hub in South Punjab.</p>', 'https://karayadari.online/storage/blog_image/1729581789.jpg', '2024-10-22 07:23:09', '2024-10-24 17:59:45', '[\"professional housing\",\"bahawalpur hostels\",\"pakistan startups\" , \"Cheap Hostels Bahawalpur\" , \"Hostel Life Bahawalpur\"]'),
(38, 'Revolutionizing Student Accommodation With Karayadari: A Hassle-free Solution', 'revolutionizing-student-accommodation-with-karayadari:-a-hassle-free-solution', '<p><strong>Revolutionizing Student Accommodation with Karayadari: A Hassle-Free Solution</strong></p>\r\n<p>Finding safe, affordable, and verified hostels can be a daunting task, especially for students and professionals moving to new cities. Karayadari is designed to simplify this process by offering a platform where users can discover reliable hostel options without the usual stress of searching. Whether you are a student or a working professional, Karayadari connects you directly with hostel owners, ensuring a seamless accommodation experience.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Challenges in Finding the Right Hostel</strong></p>\r\n<p>Many students and professionals face common hurdles when looking for a suitable place to stay:</p>\r\n<p>1-Lack of Verified Information: Most listings are incomplete or misleading, making it hard to choose.</p>\r\n<p>2-Trust Issues: Without prior recommendations or verified reviews, it&rsquo;s difficult to rely on a hostel&rsquo;s promises.</p>\r\n<p>3-Time-Consuming Search: Visiting multiple hostels personally can take days, wasting valuable time and effort.</p>\r\n<p>These issues often make relocation a frustrating experience, especially for newcomers.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>How Karayadari Simplifies the Search</strong></p>\r\n<p>Karayadari addresses these challenges by offering a user-friendly platform with verified listings. Here&rsquo;s how it works:</p>\r\n<p><strong>Verified Hostels</strong>: Hostels listed on Karayadari go through a verification process to ensure the safety and satisfaction of residents.</p>\r\n<p><strong>Direct Communication:</strong> Tenants can chat directly with hostel owners to clarify any queries and finalize deals without middlemen.</p>\r\n<p><strong>Affordable Options:</strong> Users can search for <a title=\"all hostels\" href=\"../../all-hostels\">hostels</a> based on their budget, with service charges as low as Rs. 200 per person or Rs. 500 per room.</p>\r\n<p><strong>Free Listing for Owners: </strong>Hostel owners can list their properties for free initially, allowing them to reach more potential tenants.</p>\r\n<p><strong>Future Plans: </strong>Scaling and Expanding Services</p>\r\n<p>As <a title=\"karayadari website\" href=\"../../\">Karayadari</a> builds trust with its customers, we plan to introduce service charges for hostel owners while maintaining affordable rates for tenants. Our goal is to create a transparent marketplace for accommodation, where both tenants and owners benefit from fair and efficient services.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Join the Revolution with Karayadari</strong></p>\r\n<p>Relocating to a new city shouldn&rsquo;t be stressful. <a title=\"karayadarai website\" href=\"../../\">Karayadari</a> aims to eliminate the guesswork from finding the right accommodation, ensuring that students and professionals feel safe, comfortable, and connected from day one. Whether you are looking for a single bed or an entire room, Karayadari makes the process smooth, quick, and reliable.</p>\r\n<p>&nbsp;</p>', 'https://karayadari.online/storage/blog_image/1729585582.png', '2024-10-22 08:26:22', '2024-10-24 18:00:00', '[\"Clean Hostels\", \"Private Hostel Rooms\",\"Bahawalpur Hostel Reviews\", \"Top-Rated Hostels\" ]'),
(39, 'Karayadari – Revolutionizing Hostel Accommodation In Pakistan', 'karayadari-–-revolutionizing-hostel-accommodation-in-pakistan', '<p><strong>Karayadari &ndash; Revolutionizing Hostel Accommodation in Pakistan</strong></p>\r\n<p><strong>Introduction</strong></p>\r\n<p>Finding reliable and affordable accommodation can be a challenging task for students and professionals. Karayadari aims to solve this problem by offering verified hostel listings with transparent pricing, ensuring comfort, safety, and accessibility. This platform bridges the gap between hostel owners and tenants, providing direct communication and fostering trust.</p>\r\n<p><strong>The Current Hostel Landscape</strong></p>\r\n<p>In growing cities like Bahawalpur, hostels play a critical role in meeting accommodation needs, especially for students from universities such as the Islamia University of Bahawalpur (IUB) and medical colleges. However, the quality of hostels varies significantly, with some offering high-end facilities and others struggling with maintenance and overcrowding.</p>\r\n<p><strong>Karayadari&rsquo;s Unique Solution</strong></p>\r\n<p><strong>Verified Listings: </strong>Ensuring each hostel is reviewed and verified before being listed on the platform.</p>\r\n<p><strong>Direct Communication: </strong>Hostel owners and tenants can directly communicate to clarify any queries, making the process smoother and more transparent.</p>\r\n<p><strong>Affordable Service Fees:</strong> Tenants pay a small fee, while listing remains free for hostel owners initially. Future plans include service charges for owners as the platform grows.</p>\r\n<p><strong>The Future of Karayadari</strong></p>\r\n<p>With plans to expand beyond Bahawalpur to other major cities in Pakistan, Karayadari aims to become a go-to solution for accommodation needs. It is actively working towards partnerships and improving amenities by building trust between tenants and hostel owners.</p>\r\n<p>&nbsp;</p>\r\n<p>Summary:</p>\r\n<p><a href=\"../../\" target=\"_blank\" rel=\"noopener\">Karayadari</a> is not just a platform but a movement to improve the quality of hostel accommodations in Pakistan. Through trust, transparency, and user-friendly technology, it aims to provide students and professionals with peace of mind, enabling them to focus on their personal and professional growth.</p>\r\n<p>&nbsp;</p>\r\n<p>Tags:</p>\r\n<p>#Karayadari #HostelsInPakistan #AffordableHostels #StudentAccommodations #ProfessionalHousing #BahawalpurHostels #PakistanStartups</p>', 'https://karayadari.online/storage/blog_image/1729594215.png', '2024-10-22 10:50:15', '2024-10-24 17:31:17', '[]'),
(47, 'The Future Of Renting With Karayadari: Transforming The Rental Experience In Pakistan', 'the-future-of-renting-with-karayadari-transforming-the-rental-experience-in-pakistan', '<p>Karayadari is revolutionizing the rental landscape, offering a seamless platform that connects tenants with property owners. Whether you&rsquo;re looking for your next home, office space, or shop, Karayadari provides a smooth and trustworthy experience, bridging gaps with modern solutions.<br /><br /><strong>Why Karayadari Stands Out?</strong></p>\r\n<p><strong>User-Friendly Platform: </strong>Easily browse and connect with property owners without intermediaries.</p>\r\n<p><strong>Verified Listings: </strong>Ensuring authenticity by offering only vetted properties.</p>\r\n<p><strong>Transparent Fees: </strong>A fair 5% service fee only when a rental is finalized.</p>\r\n<p><strong>Tailored for All Users:</strong> Property search and management are simplified for both tenants and landlords.</p>\r\n<p><strong>Future Plans: </strong>Soon, landlords will also enjoy additional services, making it a complete rental management platform.</p>\r\n<p>&nbsp;</p>\r\n<p>Challenges in the Traditional Rental Market.<br /><br />In Pakistan, especially in developing cities, tenants often struggle with limited property information, hidden fees, and unreliable agents. Karayadari addresses these challenges by building trust, providing verified options, and promoting transparency.<br /><br /></p>\r\n<p><strong>How Karayadari Benefits Both Tenants and Landlords?</strong></p>\r\n<p><strong>For Tenants:</strong> They can avoid middlemen and access detailed listings that include photos, rent terms, and owner contact.</p>\r\n<p><strong>For Landlords: </strong>Managing tenants and rent collection becomes easier with a structured, modern approach.</p>\r\n<p>&nbsp;</p>', 'https://karayadari.online/storage/blog_image/1729849577.png', '2024-10-25 09:46:17', '2024-10-25 09:46:17', '[\"karayadari-rental-platform-pakistan\",\"future-of-renting-in-pakistan\",\"verified-rental-listings-pakistan\",\"pakistans-top-rental-marketplace\",\"user-friendly-rental-solutions-pakistan\"]'),
(48, 'Hostel Facilities In Bahawalpur: What To Expect In Affordable Vs. Premium Hostels', 'hostel-facilities-in-bahawalpur-what-to-expect-in-affordable-vs-premium-hostels', '<p>Bahawalpur, a vibrant city in South Punjab, offers a variety of <a title=\"all-hostels\" href=\"https://karayadari.online/all-hostels\" target=\"_blank\" rel=\"noopener\">hostels</a> catering to students and working professionals. However, the facilities vary significantly depending on location and cost. Here\'s a comparison of what you can expect from affordable hostels versus premium ones in prime areas.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Affordable Hostels in Local Areas</strong></p>\r\n<p><strong>Basic Amenities:</strong> Bed, cupboard, and fan.</p>\r\n<p><strong>Shared Rooms: </strong>Often 3-4 people per room to cut costs.</p>\r\n<p><strong>Limited Internet: </strong>Wi-Fi access with limited speed and data.</p>\r\n<p><strong>Meals:</strong> Basic breakfast and dinner included in the rent, with fixed menus.</p>\r\n<p><strong>Security: </strong>Simple gate locks, minimal CCTV coverage.</p>\r\n<p><strong>Hygiene:</strong> Common washrooms and minimal cleaning services.</p>\r\n<p>These <a title=\"all-hostels\" href=\"https://karayadari.online/all-hostels\" target=\"_blank\" rel=\"noopener\">hostels</a> are popular among students, especially those attending The Islamia University of Bahawalpur (IUB) or nearby coaching centers.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Premium Hostels in Upscale Areas</strong></p>\r\n<p><strong>Private and Semi-Private Rooms:</strong> Options for individual or double occupancy with air conditioning.</p>\r\n<p><strong>High-Speed Wi-Fi:</strong> Dedicated internet for uninterrupted studying or work.</p>\r\n<p><strong>Cafeteria or In-House Cooking:</strong> Custom meal plans with healthier options.</p>\r\n<p><strong>Laundry and Cleaning Services: </strong>Daily or weekly laundry services included.</p>\r\n<p><strong>24/7 Security:</strong> Guards, CCTV monitoring, and biometric access.</p>\r\n<p><strong>Entertainment and Study Areas:</strong> Common lounges with TV, books, or dedicated study spaces.</p>\r\n<p>These hostels are generally located near Model Town, Trust Colony, or other premium areas. They cater to students and professionals seeking comfort and safety.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Choosing the Right Hostel !</strong></p>\r\n<p><strong>Budget:</strong> Affordable <a title=\"all-hostels\" href=\"https://karayadari.online/all-hostels\" target=\"_blank\" rel=\"noopener\">hostels</a> are great if you\'re looking for basic facilities, but if comfort and personal space matter, a premium option is better.</p>\r\n<p><strong>Location:</strong> Staying close to your institution or workplace reduces commuting costs.</p>\r\n<p><strong>Hygiene and Security:</strong> Prioritize these factors to ensure peace of mind, especially if you plan to stay for a longer duration.</p>\r\n<p>Whether you\'re a student or a working professional, Bahawalpur\'s hostel options cater to different needs and budgets. Explore your options to find a hostel that matches your expectations. If you need more guidance or have questions about finding the right place, visit <a title=\"Karayadari offical website\" href=\"https://karayadari.online/\" target=\"_blank\" rel=\"noopener\">IUB Main Library Basement, Regional Plan9 Center</a> for assistance.</p>', 'https://karayadari.online/storage/blog_image/1729856141.png', '2024-10-25 11:35:41', '2024-10-25 11:35:41', '[\"premium-hostel-facilities\",\"iub-student-accommodation-best-hostels-south-punjab\",\"student-housing-pakistan\"]'),
(49, 'Girls Hostel In Pakistan | Karayadari', 'girls-hostel-in-pakistan-karayadari', '<p><strong>Girls&rsquo; hostels</strong> are an important attribute of female education, since safe and comfortable accommodation is still a significant problem in many countries, especially in terms of training for girls in large cities, where educational institutions are largely concentrated. This way, girls hostel accommodation provides the different opportunities that guarantees the young women from all background a secure place for their academic pursuit. These hostels offer students from local and distant areas a home,(girls hostel near me) shelter, comfort and a place to fee</p>\r\n<p><strong>Security and Safety</strong></p>\r\n<p>&nbsp;One of the primary concerns for a <a href=\"https://karayadari.online/result?category=girls+hostel\" target=\"_blank\" rel=\"noopener\">girls\' hostel</a> in Islamabad and lahore is security. Hostels are typically equipped with 24/7 security personnel, CCTV cameras, and controlled access systems to ensure that only authorized individuals can enter the premises. Many <a href=\"https://karayadari.online/all-hostels\" target=\"_blank\" rel=\"noopener\">hostels</a> have strict curfew policies and visitor regulations to maintain a safe atmosphere. Additionally, most hostels have a warden or resident caretaker who is responsible for the safety and well-being of the residents. In case of emergencies, there is often a well-defined protocol, ensuring students feel secure at all times.</p>\r\n<p><strong>modation and Facilities&nbsp;&nbsp;</strong></p>\r\n<p>&nbsp;Rooms in a <a href=\"https://karayadari.online/result?category=girls+hostel\" target=\"_blank\" rel=\"noopener\">girls\' hostel</a> can range from single occupancy to shared accommodations, depending on the preferences and budget of the students. Each room is usually furnished with essential items such as beds, study desks, wardrobes, and sometimes private bathrooms. Common areas like lounges, study rooms, and recreational areas provide students with spaces to relax, study, or socialize outside of their rooms. Many hostels also offer Wi-Fi, laundry services, and air-conditioning or heating, creating a comfortable environment conducive to both studying and relaxation.</p>\r\n<p><strong>Meals and Nutrition</strong></p>\r\n<p><strong>&nbsp;Most girls\' </strong>hostel including those in Karachi and AM collage <a href=\"https://karayadari.online/result?category=girls+hostel\" target=\"_blank\" rel=\"noopener\">girls hostel</a> in Rawalpindi have in mess that provides nutritious and hygienic meals, typically catering to different dietary preferences. Breakfast, lunch, and dinner are served at fixed times, often with an emphasis on balanced meals that are beneficial for students\' health. In some hostels, the menu is curated with input from the residents to ensure they enjoy their meals. Additionally, snacks and beverages are often available, and some hostels may have small kitchens where residents can prepare their own food if they wish.</p>\r\n<p>&nbsp;<strong>Academic Support and Study Environment</strong></p>\r\n<p>&nbsp;A conducive environment for academic growth is a priority in girls\' hostels particularly in girls hostels in Rawalpindi . Many hostels provide designated study rooms or libraries where residents can focus on their studies without distractions. Some hostels even organize group study sessions or tutoring sessions, offering academic support when needed. Quiet hours may be enforced to ensure a peaceful atmosphere that encourages learning and concentration.</p>\r\n<p><strong>&nbsp;Social and Recreational Activities&nbsp;</strong></p>\r\n<p><strong>&nbsp;Girls\' hostels</strong> such as those in Rawalpindi or central London are designed not only for studying but also for fostering social interactions and friendships among residents. They often organize events, workshops, and recreational activities such as yoga classes, sports, movie nights, and cultural celebrations. These activities help students bond, relieve stress, and maintain a healthy work-life balance. The shared spaces in the hostel, such as lounges or gardens, provide a perfect setting for students to relax, interact, for student both in Rawalpindi and central London ,girls hostel offer a convenient and supportive environment to balance academic and recreational pursuits</p>\r\n<p><strong>Healthcare and Well-being</strong></p>\r\n<p>&nbsp;Most <a href=\"https://karayadari.online/result?category=girls+hostel\" target=\"_blank\" rel=\"noopener\">girls hostels</a>, including those like the one at UET KSK, offer basic healthcare support, such as a first-aid kit or an on-call doctor. Hostels are also attentive to the mental well-being of residents, often providing access to counseling services or helplines in case students need support. Regular wellness programs, including fitness sessions or stress-management workshops, are common in hostels, helping students to maintain a healthy lifestyle.</p>\r\n<p><strong>Conclusion</strong></p>\r\n<p>&nbsp;In summary, a <a href=\"https://karayadari.online/result?category=girls+hostel\" target=\"_blank\" rel=\"noopener\">girls\' hostel </a>is much more than just a place to stay; it is a holistic community where young women are supported in their educational journeys. From security and comfort to opportunities for personal growth, hostels strive to create an atmosphere that fosters independence, resilience, and academic excellence, providing a nurturing environment for girls to thrive academically and personally.</p>', 'https://karayadari.online/storage/blog_image/1731662665.jpg', '2024-11-15 09:24:25', '2024-11-15 09:24:25', '[\"girls-hostel\",\"girls-near-me\",\"girls-hostel-in-islamabad\",\"girls-hostel-in-lahore\",\"girls-hostel-in-karachi\"]');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'boys hostel', '', '2024-08-12 06:03:08', '2024-08-12 06:03:08'),
(2, 'girls hostel', '', '2024-08-12 06:02:52', '2024-08-12 06:02:52'),
(3, 'guest house', '', '2024-08-12 06:01:35', '2024-08-12 06:01:35'),
(4, 'luxury hostel', '', '2024-08-12 06:02:31', '2024-08-12 06:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Bahawalpur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `created_at`, `updated_at`, `name`, `number`, `subject`, `message`) VALUES
(13, '2024-11-07 06:12:38', '2024-11-07 06:12:38', 'Jawad ahmad', '03086316926', 'hostel detaiL', 'YOU NEED TO MORE APPROVEMENT IN THIS SECTION');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feed_backs`
--

CREATE TABLE `feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feed_backs`
--

INSERT INTO `feed_backs` (`id`, `number`, `name`, `city`, `message`, `created_at`, `updated_at`) VALUES
(2, '030300030003', 'Shahzad Aslam', 'Uch Sharif', 'I love how user-friendly the Karayadari platform is! The filters helped me narrow down my choices, and I found a hostel with all the amenities I wanted.', '2024-09-24 02:08:51', '2024-09-24 02:08:51'),
(4, '03086315926', 'Jawad Ahmad', 'Kahror Pakka', 'Karayadari made my search for a hostel in Bahawalpur so much easier! I found a place that met all my needs within minutes. Highly recommend!', '2024-09-24 02:18:23', '2024-09-24 02:18:23'),
(5, '5', 'Muazzam Hussain', 'Layyah', 'As a newcomer to Bahawalpur, I was overwhelmed with options. Thanks to Karayadari, I found a safe and affordable hostel quickly. Great service!', '2024-09-24 02:24:09', '2024-09-24 02:24:09'),
(6, '234242342342', 'Muhammad Muzamil', 'Bahawalpur', 'Karayadari helped me connect with other students living in the hostel I chose. It\'s great to have a sense of community right from the start!', '2024-09-24 02:08:51', '2024-09-24 02:08:51'),
(7, '234242342342', 'Muhammad kashif', 'Bahawalpur', 'I appreciate the detailed information on each listing. Karayadari provided insights into the facilities, prices, and even reviews from other students.', '2024-09-24 02:08:51', '2024-09-24 02:08:51'),
(8, '03086315926', 'Ali', 'Pipla Wala', 'Karayadari made my search for a hostel in Bahawalpur so much easier! I found a place that met all my needs within minutes. Highly recommend!', '2024-09-24 02:18:23', '2024-09-24 02:18:23'),
(12, NULL, 'Maryam Jabbar', 'Lodhran', 'Best Platform Specially for Out of city Students', '2024-09-28 12:50:38', '2024-09-28 12:50:38'),
(13, NULL, 'Furhan Waris', 'Multan', 'Bhut acha platform hai !', '2024-09-28 12:51:07', '2024-09-28 12:51:07'),
(14, NULL, 'kinza hasmi', 'fort abbas', 'This platform helps a lot .. Thanks Karayadari team.', '2024-09-28 15:48:06', '2024-09-28 15:48:06'),
(15, NULL, 'MUHAMMAD USMAN', 'BAHAWALPUR', 'Every GOOD SERVICE', '2024-09-30 05:48:58', '2024-09-30 05:48:58'),
(16, NULL, 'Muhammad shahbaz', 'Khanbela', 'I belong to poor family. I need this scolarship eagerly. Give me one chance. Thank you.', '2024-09-30 14:04:56', '2024-09-30 14:04:56'),
(19, NULL, 'Jafar Ameen', 'bahawalpur', 'Add bilal manzil hostel goheer town in the list', '2024-10-01 07:35:32', '2024-10-01 07:35:32'),
(20, NULL, 'Meerab Shehzad', 'Multan', 'vwey Helpfull.', '2024-10-01 11:25:15', '2024-10-01 11:25:15'),
(21, NULL, 'Dildar Hussain', 'Bahawalpur', 'Bhut acha platform hai new comer k lia', '2024-10-01 12:47:07', '2024-10-01 12:47:07'),
(22, NULL, 'Fazal ur Rehman', 'Bahawalpur', 'No', '2024-10-02 07:14:55', '2024-10-02 07:14:55'),
(23, NULL, 'Javeria Hassan', 'Multan', 'Good Platform', '2024-10-03 03:26:15', '2024-10-03 03:26:15'),
(24, NULL, 'Ali Hassan', 'Ali Pur', 'Thanks Karayadari to find me best hostal', '2024-10-03 03:27:06', '2024-10-03 03:27:06'),
(25, NULL, 'Momina tabassum', 'Yazman', 'I want a girls hostel', '2024-10-03 13:50:45', '2024-10-03 13:50:45'),
(26, NULL, 'Afzal ur Rehman Hostel', 'BAHAWALPUR', 'Corner building with furnished airy comfortable rooms with all modern utilities on economical range. Ph.0322-6529854. 0300-6843204.', '2024-10-03 20:21:08', '2024-10-03 20:21:08'),
(27, NULL, 'Muhammad Zakir', 'Bahawalpur', 'Assalam o Alaikum\r\nMenay jawad bhai se Hostel k about service li Masha Allah jawad bhai ne achi service di aur Acha corporate kia \r\nJazakalllah Allah Pak Apk kaam mein Barqat Ata farmaaye', '2024-10-04 11:35:57', '2024-10-04 11:35:57'),
(28, NULL, 'Sehar Askani', 'Dg Khan', 'Best Service in Bahawalpur.', '2024-10-05 08:42:56', '2024-10-05 08:42:56'),
(29, NULL, 'Zahea kanwal', 'Wahari', 'Appreciated Karayadari team', '2024-10-05 08:48:01', '2024-10-05 08:48:01'),
(30, NULL, 'Anoosha Ramzan', 'Gaily Wal', 'Best platform !', '2024-10-05 08:53:54', '2024-10-05 08:53:54'),
(31, NULL, 'Sammaya Choudary', 'Sargodha', 'One of my friend send me a link of karayadari. I just visit it and find best hostel in my desired location thanks Karayadari Team!', '2024-10-05 09:14:26', '2024-10-05 09:14:26'),
(32, NULL, 'Atka Dawood', 'Bhawlpur', '...', '2024-10-05 22:09:17', '2024-10-05 22:09:17'),
(33, NULL, 'Hassan Raza', 'Bahawalpur', 'Mujh 1 kmra chahiy on unat KY kreeb', '2024-10-06 03:06:03', '2024-10-06 03:06:03'),
(34, NULL, 'Mohsin Khan', 'Mailsi', 'Assalam o alaikum!\r\nSir I\'m a disabled person from islamia university of Bahawalpur \r\nI needed to the hostel', '2024-10-06 11:57:23', '2024-10-06 11:57:23'),
(35, NULL, 'Ayeesha', 'Bahawalnagar', 'Please more Girls hostel .Overall good services', '2024-10-06 13:50:40', '2024-10-06 13:50:40'),
(37, '03080488627', 'Ahtasham', 'Hasilpur', 'Good', '2024-10-10 16:27:56', '2024-10-10 16:27:56'),
(38, '03446256246', 'suleman', 'Layyah', 'Appreciated', '2024-10-11 12:15:47', '2024-10-11 12:15:47'),
(39, '03216542331', 'Adeel Hussain', 'Hasil Pur', 'New Initiative new ideas and new platform Good work Team Karayadari', '2024-10-11 12:27:24', '2024-10-11 12:27:24'),
(40, '03432123321', 'Samandar khan', 'Rajan pur', 'I need luxury hostel for my son', '2024-10-12 19:18:40', '2024-10-12 19:18:40'),
(41, '03471020438', 'Muhammad Asif', 'Bhawalpur', 'Seek boys hostel', '2024-10-18 05:26:48', '2024-10-18 05:26:48'),
(42, '03453287632', 'Ahmad Hassan', 'Multan', 'please Expand this other cities', '2024-10-29 08:50:40', '2024-10-29 08:50:40'),
(45, '03258392574', 'Ayesha', 'Bahawalpur', 'Its is quite good', '2024-10-30 07:14:12', '2024-10-30 07:14:12'),
(46, '03011021927', 'Majid', 'vehari', 'good platforms for students', '2024-10-30 11:38:41', '2024-10-30 11:38:41'),
(47, '03260339529', 'Tahir', 'Liaqat Pur', 'best Platform', '2024-10-30 12:11:37', '2024-10-30 12:11:37'),
(48, '03260339529', 'Tahir', 'Liaqat Pur', 'best Platform', '2024-10-30 12:12:05', '2024-10-30 12:12:05'),
(49, '03411859704', 'Munir Ahmad', 'Bahawalpur', 'Hostel', '2024-10-31 10:20:40', '2024-10-31 10:20:40'),
(50, '03487803388', 'Ch imran', 'Rawalpindi', 'Great initiative 👍', '2024-11-08 08:23:30', '2024-11-08 08:23:30'),
(51, '03017952090', 'Muhammad Tanveer', 'Bahawalpur', 'Good work keep it up its need in Bahawalpur ass koi platform nhi jdr students easily apni zurarat or location ke mutabk apna hostel book kr skyy apny gher bethh k AP ne acha platform bnayia hei students or jobs holders kehyle preshani he khytem kr dee', '2024-11-13 08:53:30', '2024-11-13 08:53:30'),
(62, '03166035692', 'Anees', 'Bahawalpure', 'I want to get two girls space in this hostel', '2024-12-08 13:29:41', '2024-12-08 13:29:41'),
(63, '03443467798', 'Rakhshanda khurshid', 'Chunian District Kasur', 'Will provide you', '2024-12-14 13:25:32', '2024-12-14 13:25:32'),
(64, '03126821817', 'Musarat', 'Bahawalpur', 'Need a rent house 5000 per month near uni chowk', '2024-12-29 14:49:02', '2024-12-29 14:49:02'),
(65, '03007933746', 'Salman khan', 'Bahawal nager', 'Didjhrkso', '2025-01-03 07:54:10', '2025-01-03 07:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `owner_number` varchar(255) DEFAULT NULL,
  `owner_email` varchar(255) DEFAULT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `hostel_address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `hostel_location` varchar(255) DEFAULT NULL,
  `hostel_front_image` varchar(255) DEFAULT NULL,
  `hostel_detail` text NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `num_rooms` int(11) DEFAULT NULL,
  `wifi` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `water_supply` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `hostel_price` int(11) DEFAULT NULL,
  `best_hostel` tinyint(1) NOT NULL DEFAULT 0,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `top_rated_hostel` tinyint(1) NOT NULL DEFAULT 0,
  `featured_hostel` tinyint(1) NOT NULL DEFAULT 0,
  `homepage` tinyint(1) NOT NULL DEFAULT 0,
  `hostel_video` varchar(255) DEFAULT NULL,
  `is_booked` tinyint(1) DEFAULT 0,
  `required_capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `owner_id`, `owner_number`, `owner_email`, `hostel_name`, `hostel_address`, `city`, `area`, `hostel_location`, `hostel_front_image`, `hostel_detail`, `capacity`, `email`, `num_rooms`, `wifi`, `security`, `water_supply`, `created_at`, `updated_at`, `category_name`, `slug`, `hostel_price`, `best_hostel`, `is_verified`, `is_approved`, `top_rated_hostel`, `featured_hostel`, `homepage`, `hostel_video`, `is_booked`, `required_capacity`) VALUES
(41, 7, '03006818128', 'imran@gmail.com', 'IMRAN BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Goheer Town ', 'Goheer Town Near University Chowk Bahawalpur', 'https://karayadari.online/storage/hostel_images/1726725370.jpg', 'Imran Boys Hostel, located at University Chowk, Bahawalpur, provides basic accommodation without a reliable water supply. While it offers other amenities like Wi-Fi and security, the lack of water might be a concern. Its proximity to universities makes it convenient for students despite this limitation.', 12, NULL, 3, '1', '1', '1', '2024-09-19 05:56:10', '2024-09-19 05:56:10', 'Boys Hostel', 'imran-boys-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/imran_boys_hostel.mp4', 0, NULL),
(42, 6, '03006716319', 'm377766@gmail.com', 'HAMDAAN BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Goheer Town ', 'Goheer Town Near Sadar Puli Bahawalpur', 'https://karayadari.online/storage/hostel_images/1726731300.jpg', 'Hamdaan Boys Hostel in Goheer Town, Bahawalpur, offers comfortable lodging near University Chowk. With amenities like Wi-Fi, security, and water supply, it\'s ideal for students. The hostel\'s location makes commuting to nearby universities convenient.', 30, NULL, 7, '1', '1', '1', '2024-09-19 07:35:00', '2024-09-19 07:35:00', 'Boys Hostel', 'hamdaan-boys-hostel-in-bahawalpur', 4000, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/hamdaan_boys_hostel.mp4', 0, NULL),
(43, 9, '03019192977', 'toheed@gmail.com', 'MOHSAN BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Goheer Town', 'Ghoeer town gali number 1 Near Sadar puli', 'https://karayadari.online/storage/hostel_images/1726732720.jpg', 'Mohsan Boys Hostel, located in Ghoeer Town, Gali Number 1, offers a comfortable living environment with 10 rooms and a capacity of 35 residents. Each room is available for Rs. 14,000, with monthly charges of Rs. 3,500 per person. The hostel provides essential facilities, including high-speed WiFi, solar-powered electricity, water coolers, and attached washrooms in every room. Ideal for students and working individuals, this hostel ensures a peaceful and well-equipped stay for all its residents.', 35, NULL, 10, '1', '1', '1', '2024-09-19 07:58:40', '2024-09-19 07:58:40', 'Boys Hostel', 'mohsan-boys-hostel', 3500, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/mohsin_boys_hostel.mp4', 0, NULL),
(44, 8, '03015588488', 'zehra@gmail.com', 'ZAHRA GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Goheer Town', 'Goheer Town, main road Near Alama Iqbal College Bahawalpur', 'https://karayadari.online/storage/hostel_images/1726733497.jpg', 'Zahra Girls Hostel in Goheer Town, Bahawalpur, is located on the main road near Allama Iqbal College. It offers amenities like Wi-Fi, security, and water supply, making it ideal for students. Its prime location ensures easy access to nearby educational institutions.', 50, NULL, 10, '1', '1', '1', '2024-09-19 08:11:37', '2024-09-19 08:11:37', 'Girls Hostel', 'zahra-girls-hostel', 4000, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/zahra_girls_hostel.mp4', 0, NULL),
(45, 10, '03000125244', 'basit@gmail.com', 'HASHMI BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Goheer Town', 'Goheer Town, main road Near Alama Iqbal College Bahawalpur', 'https://karayadari.online/storage/hostel_images/1726737845.jpg', 'Hashmi Boys Hostel in Goheer Town, Bahawalpur, is situated on the main road near Allama Iqbal College. The hostel provides essential amenities such as Wi-Fi, security, and water supply, making it suitable for students. Its convenient location offers easy access to nearby colleges and universities.', NULL, NULL, NULL, '1', '1', '1', '2024-09-19 09:24:05', '2024-09-19 09:24:05', 'Boys Hostel', 'hashmi-boys-hostel-in-bahawalpur', 4000, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/hashmi_boys_hostel_ghoheer_town.mp4', 0, NULL),
(46, 11, '03027960955', 'raaz@gmail.com', 'MEDICAL STUDENTS BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Uni chowk', 'University Chowk Bahawalpur', 'https://karayadari.online/storage/hostel_images/1726769584.jpg', 'Medical Students Boys Hostel at University Chowk, Bahawalpur, offers comfortable accommodation tailored for medical students. With essential amenities like Wi-Fi, 24/7 security, and water supply, it provides a supportive environment for focused study. Its prime location near medical institutions makes commuting easy and convenient.', 60, NULL, 12, '1', '1', '1', '2024-09-19 18:13:04', '2024-09-19 18:13:04', 'Boys Hostel', 'medical-students-boys-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/medical_student_boys_hostel.mp4', 0, NULL),
(47, 12, '03077712009', 'ajmal@gmail.com', 'ABBASI BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Uni chowk', 'University Chowk Bahawalpur', 'https://karayadari.online/storage/hostel_images/1726771929.jpg', 'Abbasi Boys Hostel at University Chowk, Bahawalpur, offers basic accommodation without additional facilities like Wi-Fi or security. Its central location near educational institutions makes it convenient for students despite the lack of amenities. Ideal for those seeking a budget-friendly option.', 12, NULL, 4, '0', '0', '0', '2024-09-19 18:52:09', '2024-09-19 18:52:09', 'Boys Hostel', 'abbasi-boys-hostel-in-bahawalpur', 2000, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/abbasi_boys_hostel.mp4', 0, NULL),
(48, 13, '03007876300', 'deen@gmail.com', 'BABAR BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Darbar Pulli', 'Darbar Pulli University Chowk Bahawalpur', 'https://karayadari.online/storage/hostel_images/1726815426.jpg', 'Babar Boys Hostel at Darbar Puli, near University Chowk in Bahawalpur, provides a range of amenities including Wi-Fi, security, and electricity. However, filtered water is not available. Its convenient location makes it a suitable option for students seeking nearby accommodation.Babar Boys Hostel at Darbar Puli, near University Chowk in Bahawalpur, provides a range of amenities including Wi-Fi, security, and electricity. However, filtered water is not available. Its convenient location makes it a suitable option for students seeking nearby accommodation.', 30, NULL, 7, '1', '1', '0', '2024-09-20 06:57:06', '2024-09-20 06:57:06', 'Boys Hostel', 'babar-boys-hostel-in-bahawalpur', 4000, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/babar_boys_hostel.mp4', 0, NULL),
(49, 14, '03116075469', 'aaa@gmail.com', 'BISMILLAH BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Darbar Pulli', 'Darbar Mahal Khakwani Colony Gali Number 2', 'https://karayadari.online/storage/hostel_images/1726823727.jpg', 'Bismillah Boys Hostel in Darbar Mahal, Khakwani Colony, Gali Number 2, Bahawalpur, offers comfortable lodging with essential facilities like Wi-Fi and security. Its location in a quiet residential area ensures a peaceful environment, making it ideal for students. The hostel is conveniently situated for access to nearby educational institutions.', 35, NULL, 9, '1', '1', '1', '2024-09-20 09:15:27', '2024-09-20 09:15:27', 'boys hostel', 'bismillah-boys-hostel-in-bahawalpur', 3000, 0, 1, 1, 0, 1, 0, NULL, 0, NULL),
(51, 16, '03197810830', 'zahid@gmail.com', 'PAHORE  BOYS HOSTEL IN BAHWALPUR', NULL, 'Bahawalpur', 'Model Town C', 'Model Town C Shadrah High School', 'https://karayadari.online/storage/hostel_images/1727081068.jpg', 'Pahore Boys Hostel offers a comfortable and secure living space for students. Each room is fully furnished, featuring a bed, study table, and ample storage. The hostel ensures a peaceful study environment with 24/7 security, so you can focus on your education without worry.', 45, NULL, 7, '1', '1', '1', '2024-09-23 08:44:28', '2024-09-23 08:44:28', 'boys hostel', 'pahore--boys-hostel-in-bahwalpur', 3500, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/PAHORE_BOYS_HOSTEL_IN_BAHWALPUR.mp4', 0, NULL),
(52, 17, '03063286400', 'zafar@gmail.com', 'HANIF BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Goheer Town', 'Goheer Town Near Sadar Puli Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727110869.jpg', 'Hanif Boys Hostel offers a clean, secure, and comfortable stay for students in Bahawalpur. With Wi-Fi, 24/7 security, and furnished rooms, it\'s a great place to live.\r\nLocated near local markets and institutions, it provides a peaceful environment for study and easy access to daily needs.', 60, NULL, 15, '1', '1', '1', '2024-09-23 17:01:10', '2024-09-23 17:01:10', 'boys hostel', 'hanif-boys-hostel-in-bahawalpur', 3500, 0, 0, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/hanif_boys_hostel.mp4', 0, NULL),
(54, 18, '03444443371', 'mimran@gmail.com', 'IMRAN BOYS HOSTEL  IN BAHAWALPUR', NULL, 'Bahawalpur', 'Goheer Town ', 'Goheer Town ', 'https://karayadari.online/storage/hostel_images/1727111311.jpg', 'Imran Boys Hostel provides a safe and affordable living space for students in Bahawalpur. Equipped with essential amenities like Wi-Fi, clean rooms, and security, it ensures a comfortable stay.\r\nIts location near educational institutions and local markets makes it a convenient choice for students.', 35, NULL, 8, '1', '1', '1', '2024-09-23 17:08:31', '2024-09-23 17:08:31', 'boys hostel', 'imran-boys-hostel--in-bahawalpur', 3500, 0, 0, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/imran_boys_hostel_molvi.mp4', 0, NULL),
(55, 19, '03088117576', 'rehmatullah@gmail.com', 'REHMAT BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Goheer Town', 'Goheer Town Near Sadar Puli Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727112725.jpg', 'Rehmat Boys Hostel is a great option for students, offering a comfortable and secure environment. With 17 spacious rooms, it provides essential amenities like Wi-Fi, clean water, and 24/7 security.\r\nIts location near universities and public transport makes it a convenient and well-suited choice for students.', 90, NULL, 17, '1', '1', '1', '2024-09-23 17:32:05', '2024-09-23 17:32:05', 'boys hostel', 'rehmat-boys-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/rehmat_boys_hostel.mp4', 0, NULL),
(56, 20, '03011939922', 'ideal@gmail.com', 'IDEAL GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Commercial Area', 'ear panda ice cream, commerical area Satellite Town, Bahawalpur, Punjab', 'https://karayadari.online/storage/hostel_images/1727113605.jpg', 'Ideal Girls Hostel in Bahawalpur located in the Commercial Area of Satellite Town, Ideal Girls Hostel provides a safe and comfortable living environment for female students. With modern amenities and easy access to nearby universities, it\'s a popular choice for those seeking convenience and security.', 35, NULL, 10, '1', '1', '1', '2024-09-23 17:46:45', '2024-09-23 17:46:45', 'Girls Hostel', 'ideal-girls-hostel-in-bahawalpur', 4500, 0, 0, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/ideal_girl_hostel.mp4', 0, NULL),
(57, 21, '03009682154', 'baber@gmail.com', 'BABAR GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Riaz Colony', 'Riaz Colony Street 0 , Near Bahawal Chowk, Bahawalpur', 'https://karayadari.online/storage/hostel_images/IMG_20241003_122900_384.jpg', 'Babar Girls Hostel is  near to Bahawal Chowk. It offers a safe and comfortable environment for female students. The hostel provides essential facilities such as Wi-Fi, security, and clean living spaces.', 50, NULL, 12, '1', '1', '1', '2024-09-25 15:34:18', '2024-09-25 15:34:18', 'Girls Hostel', 'babar-girls-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 0, 0, NULL, 0, 0),
(58, 22, '03215153113', 'kaneez@gmail.com', 'KANEEZ FATIMA GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Riaz Colony', 'Street 2 , Riaz Colony , Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727279093.jpg', 'Kaneez Fatima Girls Hostel is situated in Bahawalpur\'s Riaz Colony, on Street 2. The hostel offers a peaceful atmosphere for female residents. It features spacious rooms, 24/7 security, and nearby access to essential services.', 30, NULL, 6, '1', '1', '1', '2024-09-25 15:44:53', '2024-09-25 15:44:53', 'Girls Hostel', 'kaneez-fatima-girls-hostel-in-bahawalpur', 5000, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/kanz_fatima_girls_riazcolony.mp4', 0, NULL),
(59, 23, '03008809069', 'abdullah@gmail.com', 'HOSTEL 1 BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Faisal Colony', 'Faisal Colony Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727280423.jpg', 'Hostel 1 Boys Hostel  in Bahawalpur, providing comfortable accommodations for male students. The hostel offers well-maintained rooms, a secure environment, and basic amenities like Wi-Fi and regular cleaning services.', 28, NULL, 8, '1', '1', '0', '2024-09-25 16:07:03', '2024-09-25 16:07:03', 'boys hostel', 'hostel-1-boys-hostel-in-bahawalpur', 3200, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/Hostel_1_boys hostel.mp4', 0, NULL),
(60, 24, '03009684856', 'zohan@gmail.com', 'ZOHAN BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Faisal Colony', 'Faisal Colony Bahwalpur', 'https://karayadari.online/storage/hostel_images/1727281689.jpg', 'Zohan Boys Hostel in Bahawalpur offers affordable and comfortable living for male students. The hostel provides clean rooms, 24/7 security, and essential facilities like Wi-Fi and laundry services for a convenient stay.', 30, NULL, 8, '1', '1', '1', '2024-09-25 16:28:09', '2024-09-25 16:28:09', 'boys hostel', 'zohan-boys-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 0, 1, 'https://karayadari.online/storage/hostel_videos/zohan_boys_faisal.mp4', 0, NULL),
(61, 25, '03458738032', 'superior@gmail.com', 'SUPERIOR GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Riaz Colony', 'Riaz Colony Street 2 , Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727282831.jpg', 'Superior Girls Hostel in Bahawalpur provides a safe and homely environment for female students. The hostel features well-furnished rooms, round-the-clock security, and facilities like Wi-Fi and clean water supply to ensure a comfortable living experience.', 20, NULL, 5, '1', '1', '1', '2024-09-25 16:47:11', '2024-09-25 16:47:11', 'Girls Hostel', 'superior-girls-hostel-in-bahawalpur', 4000, 1, 1, 1, 0, 0, 0, NULL, 0, NULL),
(64, 26, '03000272720', 'info@executivegirlshostel.com', 'EXECUTIVE GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Faisal Colony', 'Girls College Rd, Faisal Colony Sharqi', 'https://karayadari.online/storage/hostel_images/1727286691.JPG', 'Executive Girls Hostel offers a perfect blend of comfort, security, and convenience for female students and working professionals. Nestled in a serene and safe environment, the hostel is designed to provide a peaceful and productive atmosphere while ensuring that all modern-day amenities are within easy reach.', 90, NULL, 21, '1', '1', '1', '2024-09-25 17:51:31', '2024-09-25 17:51:31', 'Girls Hostel', 'executive-girls-hostel-in-bahawalpur', 4499, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/executive_girls_hostel.mp4', 0, NULL),
(66, 28, '03007802265', 'starhostel@gmail.com', 'STAR HOSTEL 1 IN BAHAWALPUR', NULL, 'Bahawalpur', 'Gulistan  Colony', 'Gulistan Colony by National Bank University Chowk Road Bahawalpur', 'https://karayadari.online/storage/hostel_images/star_hostel_1.jpg', 'Star Hostel 1 in Bahawalpur offers affordable and comfortable accommodation for students. The hostel provides clean, well-maintained rooms, reliable security, and basic amenities like Wi-Fi and daily housekeeping for a hassle-free stay.', 100, NULL, 28, '1', '1', '1', '2024-09-26 19:06:27', '2024-09-26 19:10:04', 'boys hostel', 'star-hostel-1-in-bahawalpur', 3500, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/star_hostel_1.mp4', 0, NULL),
(67, 28, '03007802265', 'starhostel@gmail.com', 'STAR HOSTEL 2 IN BAHAWALPUR', NULL, 'Bahawalpur', 'Qasim Town', 'Qasim Town Street No !0 Bahawalpur', 'https://karayadari.online/storage/hostel_images/star_hostel_2.jpg', 'Star Hostel 2 in Bahawalpur provides a cozy and affordable stay for students. The hostel offers spacious rooms, 24/7 security, and essential services such as Wi-Fi and laundry, ensuring a comfortable living experience.', 60, NULL, 16, '1', '1', '1', '2024-09-26 19:24:30', '2024-09-26 19:24:30', 'boys hostel', 'star-hostel-2-in-bahawalpur', 3500, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/star_hostel_2.mp4', 0, NULL),
(68, 28, '03007802265', 'starhostel@gmail.com', 'STAR HOSTEL 3 IN BAHAWALPUR', NULL, 'Bahawalpur', 'Qasim Town', 'Qasim Town Street No 6 Bahawalpur', 'https://karayadari.online/storage/hostel_images/star_hostel_3.jpg', 'Star Hostel 3 in Bahawalpur offers budget-friendly accommodations for students. It provides clean rooms, dependable security, and necessary amenities like Wi-Fi and regular cleaning services, making it a convenient option for a comfortable stay.', 50, NULL, 12, '1', '1', '1', '2024-09-26 19:32:34', '2024-09-26 19:32:34', 'boys hostel', 'star-hostel-3-in-bahawalpur', 3500, 1, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/star_hostel_3.mp4', 0, NULL),
(69, 29, '03008146245', 'bahawal@gmail.com', 'BAHAWAL BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Gulistan  Colony', 'Gulistan  Colony University Chowk Bahawalpur', 'https://karayadari.online/storage/hostel_images/bahawal_boys_hostel.jpg', 'Bahawal Boys Hostel in Bahawalpur offers a secure and comfortable living space for male students. The hostel features well-maintained rooms, 24/7 security, and essential amenities such as Wi-Fi and a clean environment, ensuring a peaceful stay for its residents.', 80, NULL, 26, '1', '1', '1', '2024-09-26 19:56:05', '2024-09-26 19:56:05', 'boys hostel', 'bahawal-boys-hostel-in-bahawalpur', 3500, 1, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/bahawal_boys_hostel.mp4', 0, NULL),
(70, 29, '03008146245', 'bahawal@gmail.com', 'BAHAWAL GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Gulistan  Colony', 'Gulistan  Colony University Chowk Bahawalpur', 'https://karayadari.online/storage/hostel_images/bahawal_girls_hostel.jpg', 'Bahawal Girls Hostel in Bahawalpur offers a safe and welcoming environment for female students. The hostel provides comfortable rooms, round-the-clock security, and essential amenities like Wi-Fi and a clean water supply to ensure a pleasant stay.', 20, NULL, 5, '1', '1', '1', '2024-09-26 20:14:35', '2024-09-26 20:14:35', 'Girls Hostel', 'bahawal-girls-hostel-in-bahawalpur', 4500, 1, 1, 1, 0, 1, 0, 'https://karayadari.online/storage/hostel_videos/bahawal_girls_hostel.mp4', 0, NULL),
(71, 27, '03042296309', 'faisal@gmail.com', 'ALMEER BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Gulistan  Colony', 'Gulistan Colony by National Bank University Chowk Road Bahawalpur', 'https://karayadari.online/storage/hostel_images/almeer_boys_hostel.jpg', 'Almeer Boys Hostel in Bahawalpur provides basic accommodations for male students. However, it currently lacks electricity, which may affect access to certain services like lighting and fans. Despite this, the hostel offers affordable rooms and a safe environment.', 24, NULL, 7, '1', '1', '1', '2024-09-26 20:25:51', '2024-09-26 20:25:51', 'boys hostel', 'almeer-boys-hostel-in-bahawalpur', 3000, 1, 1, 1, 0, 0, 1, 'https://karayadari.online/storage/hostel_videos/almeer_boys_hostel.mp4', 0, NULL),
(74, 30, '03196400335', 'ishal@gmail.com', 'ISHAL GIRLS HOSTAL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Qasim Town', 'Qasim Town Street Number 10 Bahawalpur', 'https://karayadari.online/storage/hostel_images/ishal_girl_hostel.jpg', 'Ishal Girls Hostel ek aramdaah aur mehfooz rehaishi jagah hai. 🌟 Yahan **high-speed Wi-Fi** 🖥️, mustahkam bijli ka intezam ⚡ aur **water cooler** 💧 ki sahulat mojood hai. Kamray **hawadar** 🏠 aur roshni se pur hain, har kamray ke sath **attach washroom** 🚿 diya gaya hai. Yeh hostel araam, privacy aur zaroori sahulaton ke liye behtareen intekhab hai. ✅', 19, NULL, 4, '1', '1', '1', '2024-09-27 10:44:23', '2024-09-27 10:44:23', 'Girls Hostel', 'ishal-girls-hostal-in-bahawalpur', 5000, 0, 1, 1, 0, 0, 0, NULL, 0, NULL),
(75, 31, '03007985938', 'ayeesha@gmail.com', 'AYEESHA MARYAM GIRLS HOSTAL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Riaz colony Street 1', 'Riaz Colony Street Number 1 Masjid Khatm e Nubawat', 'https://karayadari.online/storage/hostel_images/ayeesha_maryam_girls_hostel.jpg', 'Ayesha Maryam Girls Hostel ek aramdaah aur mehfooz rehaishi jagah hai. 🌟 Yahan high-speed Wi-Fi 🖥️, mustahkam bijli ka intezam ⚡ aur water cooler 💧 ki sahulat mojood hai. Kamray hawadar 🏠 aur roshni se pur hain, har kamray ke sath attach washroom 🚿 diya gaya hai. Yeh hostel araam, privacy aur zaroori sahulaton ke liye behtareen intekhab hai. ✅', 110, NULL, 16, '1', '1', '1', '2024-09-27 11:05:16', '2024-09-27 11:05:16', 'Girls Hostel', 'ayeesha-maryam-girls-hostal-in-bahawalpur', 4500, 1, 1, 1, 0, 0, 1, 'https://karayadari.online/storage/hostel_videos/ayesha_marym_girl_hostel_street1_riaz.mp4', 0, NULL),
(76, 32, '03008780888', 'zainab@gmail.com', 'ZAINAB GIRLS HOSTEL IN BAHAWLPUR', NULL, 'Bahawalpur', 'Riaz colony Street 1', 'Riaz Colony Street Number 1 near Masjid Khatm e Nubawat', 'https://karayadari.online/storage/hostel_images/1727437066.jpg', 'Zainab Girls Hostel offers a comfortable and secure living environment. 🌟 It provides high-speed Wi-Fi 🖥️, ensuring seamless internet access, along with a reliable electricity backup ⚡ to avoid any power interruptions. The hostel is equipped with clean water coolers 💧 for fresh drinking water. Rooms are spacious and well-ventilated 🏠, offering a bright and airy atmosphere. Each room comes with an attached washroom 🚿, ensuring privacy and convenience for the residents. Zainab Girls Hostel is an excellent choice for those seeking comfort, security, and essential facilities. ✅', 50, NULL, 13, '1', '1', '1', '2024-09-27 11:37:47', '2024-09-27 11:37:47', 'Girls Hostel', 'zainab-girls-hostel', 4000, 1, 1, 1, 0, 0, 1, 'https://karayadari.online/storage/hostel_videos/zainub_girl_hostel_street1_riaz.mp4', 0, NULL),
(78, 33, '03018334204', 'khan@gmail.com', 'KHAN BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Gulistan  Colony', 'Gulistan Colony by National Bank University Chowk Road Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727664611.jpg', 'Gulistan Colony, located near National Bank on University Chowk Road in Bahawalpur, is a well-known residential area. It offers convenient access to nearby universities and essential services. The colony is a popular choice for students and families due to its central location and peaceful environment.', 20, NULL, 5, '1', '1', '0', '2024-09-30 02:50:11', '2024-09-30 02:50:11', 'boys hostel', 'khan-boys-hostel-in-bahawalpur', 3500, 0, 0, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/khan_boys_shahzad_saeed.mp4', 0, NULL),
(79, 34, '03126806872', 'hijab@gmail.com', 'Al HIJAB GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Gulistan  Colony', 'University Chowk, Gulistan Colony, Street No:2', 'https://karayadari.online/storage/hostel_images/1727674547.jpg', '✨ Facilities:\n- 24/7 Hot Water (Geezer)\n- Dedicated Female Warden\n- Security Cameras for Your Safety.Comfortably Furnished & Carpeted Rooms\n- Well-Ventilated Building\n- Peaceful and Secure Environment\n- Clean and Hygienic Washrooms\n- Fully Equipped Kitchen with Sui Gas\n- WiFi, UPS, and Freezer Access\n- Affordable Rent: Only 4500 per head\n      5000 per head With  Metress \n\nExperience a comfortable and secure stay while focusing on your studies in a peaceful atmosphere. Join Alhijab Girls Hostel today!', 36, NULL, 9, '1', '1', '1', '2024-09-30 05:35:48', '2024-09-30 05:35:48', 'Girls Hostel', 'alhijab-girls-hostel-in-bahawalpur', 4500, 1, 1, 1, 0, 0, 1, 'https://karayadari.online/storage/hostel_videos/hijab_girls_hostel.mp4', 0, NULL),
(80, 35, '03042828477', 'zahoor@gmail.com', 'ZAHOOR PALACE IN BAHAWALPUR', NULL, 'Bahawalpur', 'Qasim Town', 'Qasim Town Street Number 2 Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727676187.jpg', 'Zahoor Palace is a premium hostel offering a peaceful and secure living experience. 🌟 It features high-speed Wi-Fi 🖥️ for uninterrupted connectivity and a stable electricity backup system ⚡ to prevent any power outages. The hostel provides clean drinking water through well-maintained water coolers 💧. The rooms are spacious, well-ventilated 🏠, and filled with natural light, creating a comfortable environment. Every room comes with an attached washroom 🚿, ensuring both privacy and convenience. Zahoor Palace is an ideal choice for those looking for a serene and fully equipped living space. ✅', 90, NULL, 24, '1', '1', '1', '2024-09-30 06:03:07', '2024-09-30 06:03:07', 'boys hostel', 'zahoor-palace', 4000, 1, 1, 1, 0, 0, 1, 'https://karayadari.online/storage/hostel_videos/zahoor_palace_boys_hostel.mp4', 0, NULL),
(81, 36, '03085368787', 'city@gmail.com', 'CITY GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Riaz colony Street 1', 'Riaz Colony Street Number 1 Masjid Khatm e Nubawat', 'https://karayadari.online/storage/hostel_images/1727676839.jpg', 'City Girls Hostel provides a safe and comfortable living space. 🌟 With high-speed Wi-Fi 🖥️ available throughout the hostel, residents can enjoy seamless internet access. The hostel has a dependable electricity backup system ⚡ to ensure continuous power supply. Clean water coolers 💧 are provided for fresh drinking water. Rooms are spacious, airy 🏠, and designed to offer a pleasant atmosphere. Each room includes an attached washroom 🚿 for added convenience and privacy. City Girls Hostel is an excellent choice for those seeking a well-equipped and secure living environment. ✅', 70, NULL, 12, '1', '1', '1', '2024-09-30 06:14:00', '2024-09-30 06:14:00', 'Girls Hostel', 'city-girls-hostel', 5000, 0, 1, 1, 0, 0, 1, NULL, 0, NULL),
(82, 37, '03052652199', 'aleena@gmail.com', 'ALEENA GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Gulistan  Colony', 'Gulistan Colony Street number 3', 'https://karayadari.online/storage/hostel_images/aleena_girls_hostel.jpg', 'Aleena Girls Hostel offers a comfortable and secure environment. 🌟 It provides high-speed Wi-Fi 🖥️, reliable electricity ⚡, and clean water coolers 💧. The rooms are airy 🏠 and come with attached washrooms 🚿, ensuring privacy and convenience. Ideal for a peaceful stay. ✅', 22, NULL, 4, '1', '1', '1', '2024-09-30 06:53:16', '2024-09-30 06:53:16', 'Girls Hostel', 'aleena-girls-hostel-in-bahawalpur', 4500, 0, 1, 1, 0, 0, 1, 'https://karayadari.online/storage/hostel_videos/aleena_girls_hostel.mp4', 0, NULL),
(97, 39, '03089060016', 'kashif@gmail.com', 'KASHIF BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Riaz Colony', 'Riaz Colony Street 0 , Near Bahawal Chowk, Bahawal...', 'https://karayadari.online/storage/hostel_images/1727978710.jpg', 'Kashif Boys Hostel is a comfortable and secure place for students.\r\nIt offers spacious rooms with essential amenities like Wi-Fi and 24/7 security.\r\nLocated near the main market, it\'s convenient for daily needs.', 11, NULL, 2, '1', '1', '1', '2024-10-03 18:05:10', '2024-10-03 18:05:10', 'boys hostel', 'kashif-boys-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/kashif_boys.mp4', 0, 0),
(98, 40, '03053489193', 'ahmad@gmail.com', 'AHMAD BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Qasim Town', 'Qasim Town Street Number 10 Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727979507.jpg', 'Ahmad Boys Hostel in Bahawalpur provides a comfortable and secure environment for students.\r\nThe hostel offers well-furnished rooms with essential amenities like Wi-Fi, security, and clean water.\r\nLocated near educational institutions, it’s a convenient choice for students in Bahawalpur.', 60, NULL, 12, '1', '1', '1', '2024-10-03 18:18:27', '2024-10-03 18:22:01', 'boys hostel', 'ahmad-boys-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/ahmad_boys_street10.mp4', 0, 4),
(99, 41, '03002458808', 'rehan@gmail.com', 'REHAN BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Bahawal Chowk', 'Bahawal Chowk , Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727980651.jpg', 'Rehan Boys Hostel in Bahawalpur offers a peaceful and student-friendly atmosphere.\r\nIt provides clean and spacious rooms with facilities like Wi-Fi, 24/7 security, and uninterrupted water supply.\r\nSituated close to major universities, it’s ideal for students seeking a comfortable stay.', 70, NULL, 19, '1', '1', '1', '2024-10-03 18:37:31', '2024-10-03 18:37:31', 'boys hostel', 'rehan-boys-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/rehan_boys_bahawal.mp4', 0, 30),
(100, 42, '03342493939', 'alied@gmail.com', 'ALLIED BOYS HOSTAL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Bahawal Chowk', 'Bahawal Chowk, Bahawalpur', 'https://karayadari.online/storage/hostel_images/1727981216.jpg', 'Allied Boys Hostel in Bahawalpur provides a modern and comfortable living experience for students.\r\nIt features fully furnished rooms with amenities like high-speed Wi-Fi, 24/7 security, and a clean environment.\r\nConveniently located near educational institutions, it ensures easy access to all essential services.', 35, NULL, 8, '1', '1', '1', '2024-10-03 18:46:56', '2024-10-03 18:46:56', 'boys hostel', 'allied-boys-hostal-in-bahawalpur', 3300, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/alied_boys_bahawal.mp4', 0, 5),
(101, 44, '03008931410', 'creative@gmail.com', 'CREATIVE GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'Uni chowk', 'Universty Chowk near old book center Gulistan Colony 1', 'https://karayadari.online/storage/hostel_images/creative_girls_hostel.jpg', 'Creative Girls Hostel offers the following facilities...\n\n🌐 High-speed Wi-Fi\n⚡ Reliable electricity with backup\n💧 Clean water coolers\n🏠 Spacious and well-ventilated rooms\n🚿 Attached washrooms for convenience\nThis hostel provides a comfortable and secure living environment with essential amenities. ✅', 57, NULL, 8, '1', '1', '1', '2024-10-06 14:50:43', '2024-10-08 07:16:10', 'Girls Hostel', 'creative-girls-hostel-in-bahawalpur', 4000, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/creative_girls_hostel.mp4', 0, 40),
(102, 46, '03027790007', 'musawar@gmail.com', 'AL-MUSAWAR BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'One Unit chowk', 'One Unit Chock Near Gate Number 1 Islamic Colony', 'https://karayadari.online/storage/hostel_images/1728377405.jpg', 'Al-Musawar Boys Hostel offers the following amenities...\n\n🌐 High-speed Wi-Fi for uninterrupted internet access\n⚡ Reliable electricity with backup\n💧 Clean drinking water through water coolers\n🛏️ Spacious and well-ventilated rooms\n🚿 Attached washrooms for added convenience\nThis hostel ensures a comfortable and safe living environment with all the necessary facilities. ✅', 40, NULL, 9, '1', '1', '1', '2024-10-08 08:50:07', '2024-10-08 08:55:12', 'boys hostel', 'al-musawar-boys-hostel-in-bahawalpur', 3500, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/al_musawar_boys_oneunit.mp4', 0, 5),
(103, 47, '03027790007', 'jiblay@gmail.com', 'JIBLA HOUSE GIRLS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'One Unit chowk', 'One Unit Chock Rafee Qamar Road', 'https://karayadari.online/storage/hostel_images/1728379117.jpg', 'Jibla Girls Hostel provides the following facilities..\r\n\r\n🌐 High-speed Wi-Fi\r\n⚡ Stable electricity with backup\r\n💧 Clean water coolers\r\n🏠 Airy and spacious rooms\r\n🚿 Attached washrooms for convenience\r\nIt offers a comfortable, secure, and well-equipped environment for residents. ✅', 25, NULL, 5, '1', '1', '1', '2024-10-08 09:18:38', '2024-10-08 09:50:07', 'Girls Hostel', 'jibla-house-girls-hostel-in-bahawalpur', 5000, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/jibla_girls_hostel.mp4', 0, 12),
(104, 48, '03047256544', 'shoib@gmail.com', 'SHOIB BOYS HOSTEL IN BAHAWALPUR', NULL, 'Bahawalpur', 'One Unit chowk', 'One Unit Chock Rafee Qamar road', 'https://karayadari.online/storage/hostel_images/1728381764.jpg', 'Shoib Boys Hostel offers the following amenities..\r\n\r\n🌐 High-speed Wi-Fi\r\n⚡ Reliable electricity with backup\r\n💧 Clean drinking water through water coolers\r\n🏠 Spacious and well-ventilated rooms\r\n🚿 Attached washrooms for convenience', 6, NULL, 3, '1', '1', '1', '2024-10-08 10:02:45', '2024-10-08 10:04:11', 'boys hostel', 'shoib-boys-hostel-in-bahawalpur', 4000, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/shoaib_boys_2_required.mp4', 0, 2),
(105, 53, '03006823020', '03006823020@gmail.com', 'CITY EXECUTIVE HOSTEL FOR BOYS AND PROFESSIONALS', NULL, 'Bahawalpur', 'sadar Pulli', 'Saddar pulli, Bahawalpur, Pakistan', 'https://karayadari.online/storage/hostel_images/1729066470.png', 'City Executive Hostel for Boys and Professionals - Saddar Pulli, Bahawalpur\r\n\r\nLocated near Saddar Pulli, Bahawalpur, City Executive Hostel offers an ideal living space for boys and professionals. The hostel provides essential amenities such as high-speed Wi-Fi, 24/7 security, and a reliable water supply, ensuring both comfort and safety. With its convenient location and professional atmosphere, it is well-suited for students and working professionals looking for a peaceful and well-maintained accommodation in Bahawalpur', NULL, NULL, NULL, '1', '1', '1', '2024-10-16 08:14:31', '2024-10-17 10:24:14', 'boys hostel', 'city-executive-hostel-for-boys-and-professionals', 3500, 0, 0, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/1729066470.mp4', 0, NULL),
(106, 52, '03090662201', 'ayesha@gmai.com', 'AYESHA WOMEN HOSTEL', NULL, 'Bahawalpur', 'Riaz Colony', 'Street No 1, Riaz Colony, Bahawalpur, Punjab 63100, Pakistan', 'https://karayadari.online/storage/hostel_images/1729099154.jpg', 'Ayesha Women Hostel - Bahawalpur\r\n\r\nLocated at Street No 1, Riaz Colony, Bahawalpur, Punjab 63100, Ayesha Women Hostel provides a safe and comfortable living environment for female students and working women. The hostel offers essential facilities such as high-speed Wi-Fi for uninterrupted online access, 24/7 security to ensure the safety of residents, and a reliable water supply. With a convenient location and essential amenities, it serves as an ideal option for those seeking a peaceful and secure accommodation in Bahawalpur.', NULL, NULL, NULL, '1', '1', '1', '2024-10-16 17:19:17', '2024-10-17 10:24:45', 'Girls Hostel', 'ayesha-women-hostel', 4000, 0, 0, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/1729099154.mp4', 0, NULL),
(123, 58, '03006569412', '03006569412@gmail.com', 'VIP BOYS HOSTEL BAHAWALPUR', NULL, 'Bahawalpur', 'Madina Town', 'Madina Town, Bahawalpur, Punjab 63100, Pakistan', 'https://karayadari.online/storage/hostel_images/1729160472.jpg', 'VIP Boys Hostel - Madina Town, Bahawalpur\r\n\r\nLocated in Madina Town, Bahawalpur, Punjab 63100, the VIP Boys Hostel offers a premium living experience for male students and professionals. The hostel provides high-quality amenities including Wi-Fi, 24/7 security, and a consistent water supply, ensuring a comfortable and secure environment for its residents. With its convenient location and modern facilities, this hostel is ideal for those seeking a peaceful and well-maintained place to stay in Bahawalpur.', NULL, NULL, NULL, '1', '1', '1', '2024-10-17 10:21:14', '2024-10-17 10:28:59', 'boys hostel', 'vip-boys-hostel-bahawalpur', 3500, 0, 1, 1, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/1729160472.mp4', 0, NULL),
(125, 59, '03017734143', '03017734143@gmail.com', 'STUDENT SAFE ZONE - BOYS HOSTEL', NULL, 'Bahawalpur', 'Gulberg Colony', 'Back Side Hafiz Medical Store, Baghdad Campus Road, Mela Gali, Gulberg Colony, Bahawalpur, Punjab 63100, Pakistan', 'https://karayadari.online/storage/hostel_images/1729588006.jpg', 'Student Safe Zone Boys Hostel - Gulberg Colony, Bahawalpur\r\n\r\nSituated behind Hafiz Medical Store on Baghdad Campus Road, Mela Gali, Gulberg Colony, Bahawalpur, Punjab 63100, the Student Safe Zone Boys Hostel offers a secure and comfortable living option for male students. The hostel ensures safety with 24/7 security, provides essential facilities such as high-speed Wi-Fi and a continuous water supply, and is located conveniently close to shops and academic institutions. It\'s an excellent choice for students looking for an affordable and peaceful place to stay in Bahawalpur.', NULL, NULL, NULL, '1', '1', '1', '2024-10-22 09:06:46', '2024-10-22 10:39:26', 'boys hostel', 'student-safe-zone---boys-hostel', 3500, 0, 0, 1, 1, 0, 1, NULL, 0, NULL),
(126, 61, '03047860411', '03047860411@gmail.com', 'HANIF BOYS HOSTEL BRANCH 3', NULL, 'Bahawalpur', 'Darbar Pulli', 'Back side to, Darbar Mahal, near to moon academy, Darbar Mahal Town Faisal Colony Sharqi, Bahawalpur, Punjab 63100, Pakistan', 'https://karayadari.online/storage/hostel_images/1729589198.jpg', 'Hanif Boys Hostel Branch 3 - Darbar Mahal Town, Bahawalpur\r\n\r\nLocated behind Darbar Mahal and near Moon Academy in Darbar Mahal Town, Faisal Colony Sharqi, Bahawalpur, Punjab 63100, Hanif Boys Hostel Branch 3 offers a comfortable and secure environment for students and professionals. The hostel provides essential amenities like high-speed Wi-Fi, round-the-clock security, and a consistent water supply. With its proximity to educational institutions and key landmarks, it is an ideal choice for those seeking convenient and reliable accommodation in Bahawalpur.', NULL, NULL, NULL, '1', '1', '1', '2024-10-22 09:26:38', '2024-10-22 10:39:08', 'boys hostel', 'hanif-boys-hostel-branch-3', 3500, 0, 0, 1, 0, 0, 1, NULL, 0, NULL),
(127, 62, '03027544497', '03027544497@gmail.com', 'DIVINE GROUP OF GIRLS HOSTEL', NULL, 'Bahawalpur', 'Riaz Colony', 'Riaz Colony, St 4, near wapda ground, Bankers Colony Faisal Colony, Bahawalpur, Punjab 63100, Pakistan', 'https://karayadari.online/storage/hostel_images/1729589981.jpg', 'Divine Group of Girls Hostel - Riaz Colony, Bahawalpur\r\n\r\nLocated in Riaz Colony, Street 4, near WAPDA Ground in Bankers Colony, Faisal Colony, Bahawalpur, Punjab 63100, the Divine Group of Girls Hostel offers a secure and comfortable living space for female students and professionals. The hostel provides essential facilities such as reliable Wi-Fi, 24/7 security, and a continuous water supply, ensuring a peaceful and convenient stay. Its close proximity to educational institutions and local amenities makes it an ideal choice for those looking for safe accommodation in Bahawalpur.', NULL, NULL, NULL, '1', '1', '1', '2024-10-22 09:39:41', '2024-10-22 10:39:18', 'Girls Hostel', 'divine-group-of-girls-hostel', 3500, 0, 1, 1, 0, 0, 1, '', 0, NULL),
(160, 10, '03000125244', 'basit@gmail.com', '1', NULL, 'islamabad', 'dc chowk', '1', 'https://karayadari.online/storage/hostel_images/1731994836.jpg', '1', NULL, NULL, NULL, '1', '1', '1', '2024-11-19 05:40:36', '2024-11-19 05:40:36', 'boys hostel', '1', 1, 0, 0, 0, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/1731994836.mp4', 0, NULL),
(161, 72, '03231751900', 'sultanabdullah7717@gmail.com', 'CLASSIC EMPLOYEES HOSTEL', NULL, 'Bahawalpur', 'Faisal Colony Girls College Road, Opposite to Hamdani Shopping Mall Bahawalpur.', 'Faisal Colony Girls College Road, Opposite to Hamdani Shopping Mall and Aslam Hotel. On the Main Road. Street Number 4.', 'https://karayadari.online/storage/hostel_images/1735130974.jpeg', 'Classic Employees Hostel\r\nNeat and Clean Atmosphere\r\nElectricity\r\nSolar Facility\r\nUPS\r\nSui Gas\r\nInternet/WiFi\r\nAll Educational institutes are in the range of 1km\r\nS.E College\r\nIUB\r\nS.D High School\r\nTechnical High School\r\nFareed Gate\r\nStadium\r\nBus Terminal\r\nFood Cafe\r\nHospital\r\nBook Shops all are within range of 1km\r\nAll types of facilities are available.', 40, NULL, 9, '1', '1', '1', '2024-12-25 12:49:34', '2024-12-25 12:49:34', 'boys hostel', 'classic-employees-hostel', 3500, 0, 0, 0, 0, 0, 0, 'https://karayadari.online/storage/hostel_videos/1735130974.mp4', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_rooms`
--

CREATE TABLE `hostel_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hostel_id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `room_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`room_images`)),
  `room_type` varchar(255) NOT NULL,
  `floor_number` varchar(255) NOT NULL,
  `room_size` int(11) NOT NULL,
  `current_occupancy` int(11) NOT NULL,
  `required_occupancy` int(11) NOT NULL,
  `wifi` tinyint(1) NOT NULL DEFAULT 0,
  `filter_water` tinyint(1) NOT NULL DEFAULT 0,
  `gas` tinyint(1) NOT NULL DEFAULT 0,
  `chair` tinyint(1) NOT NULL DEFAULT 0,
  `almaira` tinyint(1) NOT NULL DEFAULT 0,
  `table` tinyint(1) NOT NULL DEFAULT 0,
  `fan` tinyint(1) NOT NULL DEFAULT 0,
  `ac` tinyint(1) NOT NULL DEFAULT 0,
  `geyser` tinyint(1) NOT NULL DEFAULT 0,
  `washroom` varchar(255) NOT NULL,
  `room_detail` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2024_03_11_110755_create_product_catagory_table', 2),
(6, '2024_03_11_113004_create_product_list_table', 3),
(16, '2014_10_12_000000_create_users_table', 4),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(18, '2019_08_19_000000_create_failed_jobs_table', 4),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(20, '2024_03_11_113256_create_category_list_table', 4),
(21, '2024_03_11_121124_create_admins_table', 4),
(22, '2024_03_11_122227_create_category_lists_table', 4),
(23, '2024_03_11_172820_add_column_to_category_list', 4),
(24, '2024_03_11_174732_create_category_lists_table', 5),
(25, '2024_03_11_175017_create_category_list_table', 6),
(26, '2024_03_12_170011_create_customer_register_table', 7),
(31, '2024_03_13_164127_create_user_register_table', 8),
(32, '2024_03_14_092821_add_column_to_user_register_table', 8),
(33, '2024_05_14_100618_create_seller_register_table', 9),
(34, '2024_05_29_165709_create_owner_register_table', 10),
(35, '2024_05_30_102305_add_column_to_owner_register_table', 11),
(36, '2024_05_31_080603_create_cities_table', 12),
(37, '2024_05_31_081215_create_areas_table', 13),
(38, '2024_06_03_070046_create_owner_hostels_table', 14),
(39, '2024_06_05_071401_create_owner_hostels_table', 15),
(40, '2024_06_05_073930_create_owner_register_table', 15),
(41, '2024_06_09_091612_create_owner_hostels_table', 16),
(42, '2024_06_09_104933_create_owner_rooms_table', 17),
(43, '2024_06_09_105426_create_owner_rooms_table', 18),
(44, '2024_06_10_075916_create_owner_hostels_table', 19),
(45, '2024_06_10_081340_create_owner_rooms_table', 20),
(46, '2024_06_10_083438_create_owner_rooms_table', 21),
(47, '2024_07_31_085300_add_column_to_users_table', 21),
(48, '2024_08_01_070135_create_owners_table', 22),
(49, '2024_08_01_092407_create_owners_table', 23),
(50, '2024_08_01_093638_create_owners_table', 24),
(51, '2024_08_02_074021_create_hostels_table', 25),
(52, '2024_08_05_072542_create_owners_table', 26),
(53, '2024_08_06_073314_create_hostels_table', 27),
(54, '2024_08_07_085419_create_hostel_rooms_table', 28),
(55, '2024_08_07_105418_create_hostel_rooms_table', 29),
(56, '2024_08_19_085517_add_column_to_hostels_table', 30),
(57, '2024_08_19_092719_drop_category_name_from_hostels_table', 31),
(58, '2024_08_19_092941_drop_category_name_from_hostels_table', 32),
(59, '2024_08_19_093115_add_column_to_hostels_table', 33),
(60, '2024_08_20_091333_add_price_to_hostel_rooms_table', 34),
(61, '2024_08_21_054425_drop_room_price_from_hostel_rooms_table', 35),
(62, '2024_08_21_055123_add_room_price_to_hostel_rooms_table', 36),
(63, '2024_08_21_071815_drop_category_name_from_hostels_table', 37),
(64, '2024_08_21_075358_add_column_to_hostels_table', 38),
(65, '2024_08_23_081610_remove_columns_from_hostels_table', 39),
(66, '2024_08_23_081730_add_column_to_hostels_table', 40),
(67, '2024_08_24_072738_remove_columns_from_hostels_table', 41),
(68, '2024_08_24_073407_remove_columns_from_hostels_table', 42),
(69, '2024_08_24_073751_remove_columns_from_hostels_table', 43),
(73, '2024_08_24_074612_add_column_to_hostels_table', 44),
(74, '2024_08_24_100911_remove_columns_from_hostels_table', 45),
(75, '2024_08_24_101427_drop_hostel_video_from_hostels_table', 46),
(76, '2024_08_24_111433_add_column_to_hostels_table', 47),
(77, '2024_08_24_111606_drop_hostel_price_from_hostels_table', 47),
(78, '2024_08_24_113113_drop_slug_from_hostels_table', 48),
(79, '2024_08_24_120719_remove_columns_from_hostels_table', 49),
(81, '2024_08_24_131505_add_column_to_hostels_table', 50),
(82, '2024_08_24_150708_remove_columns_from_hostels_table', 51),
(83, '2024_08_24_150820_add_column_to_hostels_table', 52),
(86, '2024_08_27_081025_create_reviews_table', 53),
(87, '2024_09_02_132706_add_column_to_hostels_table', 54),
(88, '2024_09_09_092148_add_column_to_hostels_table', 55);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_country` varchar(255) DEFAULT NULL,
  `owner_city` varchar(50) DEFAULT NULL,
  `owner_number` varchar(50) NOT NULL,
  `owner_address` varchar(50) DEFAULT NULL,
  `owner_image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `owner_name`, `owner_email`, `owner_country`, `owner_city`, `owner_number`, `owner_address`, `owner_image`, `password`, `created_at`, `updated_at`) VALUES
(6, 'Muhammad Sadiq', 'm377766@gmail.com', 'Pakistan', 'Bahwalpur', '03006716319', 'Gohar Town Bahawalpur', NULL, '$2y$12$T0cTswoG4g1tCj0Ko.xx1OBYxOf/vl3JoxmRwkN4osYRdvMKkA/rO', '2024-09-18 14:50:41', '2024-09-18 15:06:21'),
(7, 'Muhammad Imran', 'imran@gmail.com', 'Pakistan', 'Bahwalpur', '03006818128', 'Goheer Town Bahawalpur', NULL, '$2y$12$ZDicxj2XuutC/qVmTjcV2.oOAZ1MzO89tOJ3qwXCCtTpcKp/Yz1We', '2024-09-18 15:11:10', '2024-09-19 05:14:53'),
(8, 'Hassan Malik', 'zehra@gmail.com', 'Pakistan', 'Bahwalpur', '03015588488', 'Goheer Town Bahawalpur', NULL, '$2y$12$g03x/YzEj7u8GUDnw..IU.FnBzLgUGaUzBNbHux.Owf4Ag96lTpGK', '2024-09-19 06:41:06', '2024-09-19 07:54:55'),
(9, 'Mohammad Toheed', 'toheed@gmail.com', 'Pakistan', 'Bahwalpur', '03019192977', 'Goheer Town Bahawalpur', 'WhatsApp Image 2024-09-18 at 16.48.09_92c1be19.jpg', '$2y$12$y0M92LjJpOcwEOaNkg.diOVDyOG2pQXD4ClwwmqJAd5tn6mEI89wC', '2024-09-19 08:19:20', '2024-09-19 08:23:14'),
(10, 'Basit Hashmi', 'basit@gmail.com', 'Pakistan', 'Bahwalpur', '03000125244', 'Goheer Town Bahawalpur', NULL, '$2y$12$TPrgDO06I6rergyDMoK2s.JWW6lMIaLN5qKy26WpyHV6B0JE2zKW2', '2024-09-19 08:57:28', '2024-09-19 08:58:53'),
(11, 'Raaz Khan', 'raaz@gmail.com', 'Pakistan', 'Bahawalpur', '03027960955', 'University Chowk Bahawalpur', NULL, '$2y$12$8opQoz2IMWNOcYDVMaHvdOhZxIBqv2/aURbjlRMjIwtgLEU5LZvxG', '2024-09-19 11:06:56', '2024-09-19 17:32:18'),
(12, 'Ajmal Khan', 'ajmal@gmail.com', 'Pakistan', 'Bahawalpur', '03077712009', 'University Chowk Bahawalpur', NULL, '$2y$12$YT52zS1105Dh9ZtHirLisOG3g4hUz/Lc.3LJizMv6qx/7ZdOVdPf.', '2024-09-19 18:45:06', '2024-09-19 18:54:52'),
(13, 'Deen Muhammad', 'deen@gmail.com', 'Pakistan', 'Bahawalpur', '03007876300', 'Darbar Pulli Bahawalpur', NULL, '$2y$12$7FiyGK06bcjhVNY2yEEB2uYNE/Ha4i6R/ZyoPj7NWi4G4u/Uf9Vs2', '2024-09-20 06:34:50', '2024-09-20 06:38:42'),
(14, 'unkowwn', 'aaa@gmail.com', NULL, NULL, '03116075469', NULL, NULL, '$2y$12$EHo66NORvoW3q3Pxj7/FAOdPAzpAsF5SpSKBTiokSoG980CxJfX9C', '2024-09-20 09:06:30', '2024-09-20 09:06:30'),
(15, 'Muhammad Mubeen', 'mubeen150m@gmail.com', NULL, NULL, '03030714150', NULL, NULL, '$2y$12$tFQYtQwJ1gQj6CaxXgBh2e.cxHVEn7EFwJxeMkF38a/43RhSiNEUe', '2024-09-22 06:30:40', '2024-09-22 06:30:40'),
(16, 'Zahid Ali', 'zahid@gmail.com', 'Pakistan', 'Bahawalpur', '03197810830', 'Ahmad Ali Lar', NULL, '$2y$12$UgZZ9sfsAJEDYSX.kxvjHuowKosM7HgwN0Y8uOJzh8RQ5fks8jNha', '2024-09-23 08:27:49', '2024-09-23 08:45:23'),
(17, 'Muhammad Zafar', 'zafar@gmail.com', 'Pakistan', 'Bahawalpur', '03063286400', 'Goheer Town', NULL, '$2y$12$Bftdb.teGEBOcnjHOr8JoOLs1uDj/ZHfWZKwEdhTlAteQ7B0bfbXu', '2024-09-23 16:54:32', '2024-09-23 16:57:29'),
(18, 'Muhammad Imran', 'mimran@gmail.com', NULL, NULL, '03444443371', NULL, NULL, '$2y$12$JyIqNgGhVivhS4tqxpH3/.w8XIibvOOtDBRMRRtWQB.jj6iLd67zW', '2024-09-23 17:03:35', '2024-09-23 17:03:35'),
(19, 'Sir Rehmatullah', 'rehmatullah@gmail.com', NULL, NULL, '03088117576', NULL, NULL, '$2y$12$cA4.4vn5tuo3YBeCZSFUkeMkXBSAO2O/bDInrtvuoeSsSYocC5OGy', '2024-09-23 17:27:39', '2024-09-23 17:27:39'),
(20, 'Ideal Girls Hostel', 'ideal@gmail.com', 'pakistan', 'Bahawalpur', '03011939922', 'commerical area Satellite Town, Bahawalpur', NULL, '$2y$12$9Xg38H3az0qkMLfhZGP3uOSJArm2nPSgr5x05MofF.Zk4CoVzkiB6', '2024-09-23 17:42:09', '2024-09-23 17:43:27'),
(21, 'Baber Girls Hostal', 'baber@gmail.com', 'Pakistan', 'Bahawalpur', '03009682154', 'Bahawal Chowk', NULL, '$2y$12$RoVtWLrmVa7RWACWg6fP0ennt8wpIDzAedV2KXXbOvYataAAtGtYS', '2024-09-25 10:11:18', '2024-09-25 15:15:06'),
(22, 'Kaneez Fatima Girl Hostel', 'kaneez@gmail.com', 'Pakistan', 'Bahawalpur', '03215153113', 'Riaz Colony Street 2', NULL, '$2y$12$kIUzyyUD0s9cekNhElRNJu1ONYZbMWWIPu8mTq0UFIsjQMwR5Q.V.', '2024-09-25 15:37:52', '2024-09-25 15:38:48'),
(23, 'Muhammad Abdullah', 'abdullah@gmail.com', NULL, NULL, '03008809069', 'Pull Diwan', NULL, '$2y$12$VUtQ5HHsv7JfhSw4CQ/leuoBgcMoNmAFxUle.3XeQP327382WW.D2', '2024-09-25 16:00:15', '2024-09-25 16:01:10'),
(24, 'Zohan Boys Hostel', 'zohan@gmail.com', NULL, NULL, '03009684856', 'Faisal Colony', NULL, '$2y$12$LSRqlgTeJ1AizZA10G.3cusNi8uTGgiCONbcAdzjN8mbz90KFY8dW', '2024-09-25 16:21:44', '2024-09-25 16:24:46'),
(25, 'Superior Girls Hostel', 'superior@gmail.com', NULL, NULL, '03458738032', 'Street 2 Riaz Colony', NULL, '$2y$12$HOPSWhO8X0nG5J7FvmNggOkIt3eChDhvrCaBoRYCX7ojmf81RV.ja', '2024-09-25 16:43:24', '2024-09-25 16:43:59'),
(26, 'Executive Girl Hostel', 'info@executivegirlshostel.com', NULL, NULL, '03000272720', NULL, NULL, '$2y$12$zEIYmbldZiq3pXrjQipQP.AFwiF9Bo.Ljiah8OWr3Sr0Z1XpUteoa', '2024-09-25 17:38:36', '2024-09-25 17:38:36'),
(27, 'Faisal Rehman', 'faisal@gmail.com', NULL, NULL, '03042296309', NULL, '1727407535.png', '$2y$12$nMHutSB7rwaEU/0rgjG9oeqn.CT49.ZhqVKOiX9P1bykk9N/Hc0mW', '2024-09-26 17:45:17', '2024-09-27 03:25:35'),
(28, 'Star Hostel', 'starhostel@gmail.com', 'Pakistan', 'Bahawalpur', '03007802265', NULL, NULL, '$2y$12$BHBehKVqPfSkv5VE0m49Zu15mLH6wYzMrilBU/bZJcWhz4mSfezR6', '2024-09-26 18:46:03', '2024-09-26 19:35:51'),
(29, 'Bahawal Hostel', 'bahawal@gmail.com', NULL, NULL, '03008146245', NULL, NULL, '$2y$12$GzQCCQCFaZSbNp2rzUJ/1eYoWm4Svup.SuvfQ2GkdYTELrkfwq6ku', '2024-09-26 19:53:06', '2024-09-26 19:53:06'),
(30, 'ishal girls hostel', 'ishal@gmail.com', NULL, NULL, '03196400335', NULL, NULL, '$2y$12$o.KC9fVDK0sYDS.3SbScpeJNkEillph9lbtIi9nQnlDvsBhsEQnWO', '2024-09-27 10:36:35', '2024-09-27 10:36:35'),
(31, 'ayeesha maryam girls hostal', 'ayeesha@gmail.com', NULL, NULL, '03007985938', NULL, NULL, '$2y$12$MLM0PJ4R3E57yxcv5LqzXedk1tpQ4S8BYqGVPfJSyNz9pYStIQRum', '2024-09-27 11:00:48', '2024-09-27 11:00:48'),
(32, 'zainab hostal hammad', 'zainab@gmail.com', NULL, NULL, '03008780888', NULL, NULL, '$2y$12$6DfzFsHH0MGuHjA5tptPB.bbM1qBXe4B08d.ihQQk72/lGGCti26u', '2024-09-27 11:24:44', '2024-09-27 11:24:44'),
(33, 'khan boys hostel', 'khan@gmail.com', NULL, NULL, '03018334204', NULL, NULL, '$2y$12$YPbFZeYw8tWW1NHjb20MNOfBTvZ2OuoTHRWuQCP/WlxP9jYxmBQQm', '2024-09-30 02:45:43', '2024-09-30 02:45:43'),
(34, 'hijab girls hostal', 'hijab@gmail.com', NULL, NULL, '03126806872', NULL, NULL, '$2y$12$X0qurOZPifSUdY6El7V4peHKQmb055paOR1MzQkICcWmx2ZPguila', '2024-09-30 05:06:52', '2024-09-30 05:06:52'),
(35, 'zahoor palace', 'zahoor@gmail.com', NULL, NULL, '03042828477', NULL, NULL, '$2y$12$ZPTa2XA6PYuvXxbZ/Q5Gk.7bKyRn4xDsWfe7IWRqK75pyvKhO9eIW', '2024-09-30 05:57:24', '2024-09-30 05:57:24'),
(36, 'city hostal', 'city@gmail.com', NULL, NULL, '03085368787', NULL, NULL, '$2y$12$qfyp491cuEhiDwh0AAxQxut.7JYPg85MmUCPNZxRSizVproCkweWS', '2024-09-30 06:09:30', '2024-09-30 06:09:30'),
(37, 'aleena girls hostel', 'aleena@gmail.com', NULL, NULL, '03052652199', NULL, NULL, '$2y$12$DtCKlMP0R1lTk9QM2ZUZ8eJfRtEQkSrDmHhkZsr5VkzTeFHYx89.S', '2024-09-30 06:44:35', '2024-09-30 06:44:35'),
(38, 'Moazzam Hussain', 'A@gmail.com', 'Pakistan', 'Bahawelpur', '03078379364', 'ivelpur', NULL, '$2y$12$Xjgd8hB2EG7bxKXDlT3ps.3u78XQR437f2x81N/Y7t6PAtbIhUb8K', '2024-10-01 04:48:28', '2024-10-29 08:05:58'),
(39, 'Kashif Boys Hostel', 'kashif@gmail.com', NULL, NULL, '03089060016', NULL, NULL, '$2y$12$bd98kNyOb/GU8SSyO0tJ6eW6U6tjOcMm1cDk3aKkvXdLofok1QMUe', '2024-10-03 17:36:53', '2024-10-03 17:36:53'),
(40, 'Ahmad boys hostel', 'ahmad@gmail.com', NULL, NULL, '03053489193', NULL, NULL, '$2y$12$PTzQMjZuCR102UML5KIWD.GJCBNgDgizlsnV4gYMjC7KLsi.81xjW', '2024-10-03 18:14:36', '2024-10-03 18:14:36'),
(41, 'Rehan boys hostel', 'rehan@gmail.com', NULL, NULL, '03002458808', NULL, NULL, '$2y$12$XoMHBE7unlpKWwz/7Vnnb.hVlmTteppzhrcIuyinzugZlHQcPNKU.', '2024-10-03 18:34:03', '2024-10-03 18:34:03'),
(42, 'Allied boys hostal', 'alied@gmail.com', NULL, NULL, '03342493939', NULL, NULL, '$2y$12$kykE.YcaZ0klFBFXVBglpOhJNG0gGFUODU2TKqJkgTLpe0Mzoy6fy', '2024-10-03 18:44:20', '2024-10-03 18:44:20'),
(43, 'Haji', 'haji123@gmail.com', NULL, NULL, '2323', NULL, NULL, '$2y$12$h/3sP1147lzKaJG/W0/OiuQ8WvsiTVJFTp1DJsE67S19yuVVI9/a2', '2024-10-05 05:37:15', '2024-10-05 05:37:15'),
(44, 'Creative Girls Hostal', 'creative@gmail.com', NULL, NULL, '03008931410', NULL, NULL, '$2y$12$bEPlyHyyj/McXXh49Jku2OATwKVrXnZUXt.80yllU6.wJLQL9T.ri', '2024-10-06 14:31:36', '2024-10-06 14:31:36'),
(45, 'Al-Musawar Hostel', 'musawar@gmail.com', NULL, NULL, '03469380585', NULL, NULL, '$2y$12$sK5MDOTup02iqTjRepXmNeSrGR602HCdTCbAWRLfxrZ7zMoDZEfNC', '2024-10-08 08:38:21', '2024-10-08 08:38:21'),
(46, 'Al-Musawar Hostel', 'jibla@gmail.com', NULL, NULL, '03469380585', NULL, NULL, '$2y$12$hP/3oQUGUf.qTLJcirrhse0cbQ0aQnqhNzpi6bd/rZQFxciMAPvoW', '2024-10-08 08:48:08', '2024-10-08 08:52:30'),
(47, 'jibla house', 'jiblay@gmail.com', NULL, NULL, '03027790007', NULL, NULL, '$2y$12$75v7H4Z09YPH14TbELqJH.aJ00jl76s6I18qJJQfcgMXUSUiteg1a', '2024-10-08 08:58:59', '2024-10-08 08:58:59'),
(48, 'Shoib hostel', 'shoib@gmail.com', NULL, NULL, '03047256544', NULL, NULL, '$2y$12$UshFwbiO2zO5Tb4OBPNzbeRy0Ou4WPP1IwTzLz9Y5u5esj/tq.sDK', '2024-10-08 09:55:51', '2024-10-08 09:55:51'),
(52, 'Ayesha Women Hostel', 'ayesha@gmai.com', NULL, NULL, '03090662201', NULL, NULL, '$2y$12$jZjvN3by6Z18fHzuBDD1yeLlN0QG.T8pl7Gh9kRjS0qxCJAPt9y6S', '2024-10-16 07:54:40', '2024-10-16 07:54:40'),
(53, 'City Executive Hostel For Boys and Professionals', '03006823020@gmail.com', NULL, NULL, '03006823020', NULL, NULL, '$2y$12$futcf1dq/b9cdEp3XFzfXuzHfm0XeaKV3bUdgGuVL.hgH5D/ZoNCa', '2024-10-16 08:07:59', '2024-10-16 08:07:59'),
(56, 'city girls hostel', 'city2@gmail.com', NULL, NULL, '03215281231', NULL, NULL, '$2y$10$LkWK2nII8rUYPtK9bpNSg.Bl9p.DcfUx6nfIfqtk90RzBivudMNAK', '2024-10-17 10:10:17', '2024-10-17 10:10:17'),
(58, 'VIP Boys Hostel Bahawalpur', '03006569412@gmail.com', NULL, NULL, '03006569412', NULL, NULL, '$2y$12$oHPVKuHhR9GZ5L2owAvkVuR.vb.PE8CgoskRs0uhp2FR3nwyr1ryG', '2024-10-17 10:16:05', '2024-10-17 10:16:05'),
(59, 'Student Safe Zone - Boys Hostel', '03017734143@gmail.com', NULL, NULL, '03017734143', NULL, NULL, '$2y$12$p.EYuRFa71c7nMSqvSm0Lu/M9FyUeLI6OoX8YF094CnKywF4SbG0e', '2024-10-17 10:26:28', '2024-10-17 10:26:28'),
(60, 'VIP Boys Hostel Bahawalpur', '0300656@gmail.com', NULL, NULL, '03006569412', NULL, NULL, '$2y$12$18Al097.P4P59tSATWikDuUX11eeP1E8AbA7ppdjts0tzXKz/9TRK', '2024-10-22 07:13:08', '2024-10-22 07:13:08'),
(61, 'HANIF BOYS HOSTEL BRANCH 3', '03047860411@gmail.com', NULL, NULL, '03047860411', NULL, NULL, '$2y$12$iFWjxyuGDAQIyzyM0lGlKum.PFyRVoZwXsDxuJ0BBSuO59CkUcZnS', '2024-10-22 09:23:54', '2024-10-22 09:23:54'),
(62, 'Divine group of girls hostel', '03027544497@gmail.com', NULL, NULL, '03027544497', NULL, NULL, '$2y$12$G1tsgBNZUYd8VhuoFLZn3eG.BsFzMLUoyGEaNEyIrw1FLUBcSWwWW', '2024-10-22 09:32:14', '2024-10-22 09:32:14'),
(63, 'City Girls hostel', '03215281231@gmail.com', NULL, NULL, '03215281231', NULL, NULL, '$2y$12$t5cNky8fUNx9G.pLTPLb.OLah2XmCMvnnveQjp8cTufbYONklAOpq', '2024-10-22 09:43:09', '2024-10-22 09:43:09'),
(69, 'w', 'moazzamjanjua92@gmail.com', NULL, NULL, '1', NULL, NULL, '$2y$12$9zzVu64aIDyZIADJyyKnl.u7dEBs2Ie1JrBHlZJVAlqCbZvwjD5AW', '2024-10-30 04:48:46', '2024-10-30 04:48:46'),
(70, 'rao', 'raomuzammil95@gmail.com', NULL, NULL, '563', NULL, NULL, '$2y$12$syY3flaLLCfTCABa9ZSmhOQbS2ydW2bHrUhEjkQWJyWEK1dh9d.Hu', '2024-10-30 16:13:58', '2024-10-30 16:13:58'),
(71, 'avii', 'avii12@gmail.com', NULL, NULL, '123', NULL, NULL, '$2y$12$DrGJ/5jjv7P.qGyRMon9u.TXaBhlzzpMHP4xNgGzGllLaOErF98/i', '2024-11-04 15:56:47', '2024-11-04 15:56:47'),
(72, 'Azhar Awan', 'sultanabdullah7717@gmail.com', 'Pakistan', 'Bahawalpur', '03231751900', 'Faisal Colony Girls College Road, Bahawalpur', NULL, '$2y$12$y6mpk4279VmfiEqg5mpEfu89szbGOeAZl7i72bbuqSJasTU4dPF76', '2024-12-25 12:21:22', '2024-12-25 12:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hostel_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `hostel_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(26, 11, 41, 5, 'Best Hostel , Highly Recommended !!', '2024-09-19 06:16:43', '2024-09-19 06:16:43'),
(27, 13, 51, 5, 'Very Good Hostel', '2024-09-23 08:52:41', '2024-09-23 08:52:41'),
(28, 27, 51, 5, 'Best hostel with all required facilities', '2024-09-23 08:53:30', '2024-09-23 08:53:30'),
(29, 30, 51, 5, 'Bhut Acha Hostel h !!', '2024-09-24 05:26:03', '2024-09-24 05:26:03'),
(30, 30, 48, 5, 'V.Good Hostel', '2024-09-24 05:28:03', '2024-09-24 05:28:03'),
(31, 30, 46, 5, 'All in One Hostel ..', '2024-09-24 05:29:29', '2024-09-24 05:29:29'),
(32, 33, 56, 5, 'higly recommended  hostel...', '2024-09-25 10:57:43', '2024-09-25 10:57:43'),
(33, 47, 70, 5, 'This hostel is very good', '2024-10-02 06:35:19', '2024-10-02 06:35:19'),
(34, 22, 76, 4, 'Amazing stay, highly recommend!', '2024-10-02 07:32:53', '2024-10-02 07:32:53'),
(37, 22, 71, 4, 'Bhut acha hostel h bs parking nhi haii 😑', '2024-10-02 08:03:51', '2024-10-02 08:03:51'),
(38, 47, 66, 5, 'good', '2024-10-03 09:39:51', '2024-10-03 09:39:51'),
(43, 22, 41, 4, 'Amazing', '2024-10-13 10:57:38', '2024-10-13 10:57:38'),
(44, 65, 42, 1, 'best!!', '2024-10-14 17:38:49', '2024-10-14 17:38:49'),
(45, 65, 69, 2, 'best', '2024-10-15 17:55:23', '2024-10-15 17:55:23'),
(46, 65, 61, 1, 'amazing 😍🤩', '2024-10-15 18:06:45', '2024-10-15 18:06:45'),
(47, 65, 71, 2, '😍', '2024-10-15 18:07:31', '2024-10-15 18:07:31'),
(48, 65, 41, 5, 'best!!', '2024-10-17 18:43:10', '2024-10-17 18:43:10'),
(49, 65, 43, 4, 'amazing!!', '2024-10-18 15:25:35', '2024-10-18 15:25:35'),
(50, 65, 70, 4, 'amazing!!', '2024-10-19 07:16:52', '2024-10-19 07:16:52'),
(51, 65, 80, 4, 'amazing hostel!!', '2024-10-19 19:32:22', '2024-10-19 19:32:22'),
(52, 65, 48, 4, 'vip hostel', '2024-10-20 06:25:56', '2024-10-20 06:25:56'),
(53, 65, 55, 4, 'vip boys hostel', '2024-10-20 06:32:57', '2024-10-20 06:32:57'),
(54, 65, 49, 4, 'good place', '2024-10-20 06:43:23', '2024-10-20 06:43:23'),
(55, 65, 59, 4, 'nice place!!', '2024-10-20 06:49:15', '2024-10-20 06:49:15'),
(56, 65, 60, 4, 'best hostel', '2024-10-20 15:50:58', '2024-10-20 15:50:58'),
(57, 65, 46, 4, 'best hostel', '2024-10-20 15:57:55', '2024-10-20 15:57:55'),
(58, 47, 126, 5, 'Good', '2024-11-17 15:05:01', '2024-11-17 15:05:01'),
(59, 97, 80, 1, 'd', '2024-12-08 16:44:33', '2024-12-08 16:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_image` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `postal/zipcode` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_image`, `country`, `phone`, `postal/zipcode`, `city`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'admin', 'admin@gmail.com', NULL, 'admin', NULL, NULL, NULL, NULL, NULL, '$2y$12$LflFXc4sU/Koz11y/95H4O8c2A2tQ4E7xxNzXDAiFJ9wAsDGIpMy2', NULL, '2024-08-29 00:50:52', '2024-08-29 00:50:52'),
(10, 'alia', 'alia@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$2EOHCldNtLZjJJph/7aW/.CXWpcJDU8gr8cdTXWzmhYWKjzSJmFqC', NULL, '2024-08-29 01:06:17', '2024-08-29 01:06:17'),
(11, 'moazzam hussain', 'moazzamjanjua92@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$PsVaTabu4qCBiDc6.FeCBuvPxN4XHcjiBDrjFGvaC1PtrlZBpG9mm', NULL, '2024-09-06 04:56:08', '2024-09-06 04:56:08'),
(13, 'moazzam hussain', 'moazzamjanjua92864684@gmail.com', NULL, NULL, '03468763576', NULL, NULL, NULL, NULL, '$2y$12$VdFyJXckKb5ofY/E20w01OIF6gzl216O0SbVgKOIrK3FyGRqJHjWa', NULL, '2024-09-12 01:46:52', '2024-09-12 01:46:52'),
(14, 'Janjua Ali', 'janjua92@gmail.com', NULL, NULL, '03468763576', NULL, NULL, NULL, NULL, '$2y$12$HHJGuoB4Yd7u9xitc5lWFesvua9tm7lhYhTBtPNw96yODyKkPgTgC', NULL, '2024-09-12 01:52:34', '2024-09-12 01:52:34'),
(15, 'Muzammal Hussain', 'hwywhwhahw4@gmail.com', NULL, 'Pk', NULL, NULL, NULL, NULL, NULL, '$2y$12$qsFA449B9yVsOWkRc3jaGO.zEBhqePoUtGhy4DIVKzUcpAI0/ONFm', NULL, '2024-09-14 01:45:24', '2024-09-14 01:45:24'),
(16, 'Haider Ali', 'Haider@email.com', NULL, NULL, '03465245342', NULL, NULL, NULL, NULL, '$2y$12$TqvdIZ4iQQm7e4luikU3XuoS4VrCfneFVRq0prGBi.4CxyijMyuqS', NULL, '2024-09-14 08:37:50', '2024-09-14 08:37:50'),
(17, 'Haider Ali', 'haider@gmail.com', '1726303651.jpg', NULL, '03465245342', NULL, NULL, NULL, NULL, '$2y$12$5DAEtlKVTTf1aGu.yr.3Ve3idC8/8SYQOMAPBnBLv3LHIXL5vvSxi', NULL, '2024-09-14 08:38:25', '2024-09-14 08:47:31'),
(18, 'Shami', 'thed2948@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$G796N4QOEc7YvMT0vkah7eiWFJ3AhJffdm4j8g3AeB4Ogk5RNtgRy', NULL, '2024-09-20 03:26:58', '2024-09-20 03:26:58'),
(19, 'Malik Hammad', 'hammadengineer1@gmail.com', NULL, NULL, '03245362014', NULL, NULL, NULL, NULL, '$2y$12$OqsdIG.dA5mj7ASHlSYSb.EoddciaVljOCC8nGOtfV7F4CjvVkNie', NULL, '2024-09-21 08:43:17', '2024-09-21 08:43:17'),
(20, 'Ali Raza', 'Zeeshan@gmail.com', NULL, NULL, '0235632', NULL, NULL, NULL, NULL, '$2y$12$yQY4yeHgutOWwnbhJxMMwe/U4Lc9SerBSbDyR3T21LzGUJ1qOiQI6', NULL, '2024-09-23 07:10:30', '2024-09-23 07:10:30'),
(21, 'Ali Raza', 'Zeeshan1@gmail.com', NULL, NULL, '0235632', NULL, NULL, NULL, NULL, '$2y$12$d0U/6KrI8FaISS/GdyP7OegwG1qHCAMfbihryjPkt0Uh0GCAmgiZK', NULL, '2024-09-23 07:11:21', '2024-09-23 07:11:21'),
(22, 'Jawad ali', 'jsdjsdj@gmail.com', NULL, NULL, '84368', NULL, NULL, NULL, NULL, '$2y$12$dUeYV7Jx6Oxe5SPV..5hbeCdlDIvsBtg61u9FmP4XSfReXdd/fQOC', NULL, '2024-09-23 07:19:51', '2024-09-23 07:19:51'),
(23, 'WAJAHAT HUSSAIN', 'wajahatpahore6@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$Esn2SGJmF.tRSM/duu25duVYF60CuQNdnqRCZBDXQjjl3NoXsqBoS', NULL, '2024-09-23 07:36:40', '2024-09-23 07:36:40'),
(26, 'MOAZZAM HUSSAIN', NULL, NULL, NULL, '03468763576', NULL, NULL, NULL, NULL, '$2y$12$V0utfhq9yW.gnegOKKlS3O8RABUwFVYN2umQiEF4ylBgyv1TC3oFa', NULL, '2024-09-23 08:52:06', '2024-09-23 08:52:06'),
(27, 'Farhan Zafar', NULL, NULL, NULL, '0327-2903972', NULL, NULL, NULL, NULL, '$2y$12$mMTp0SKZOugOsqq9j1b5Fewq7qQ3WK2Ny2hadub/8sHOK.SvbHKsu', NULL, '2024-09-23 08:52:37', '2024-09-23 08:52:37'),
(28, 'majid', 'majidrazzaq990@gmail.com', NULL, NULL, '03011021927', NULL, NULL, NULL, NULL, '$2y$12$vCZM1RCdjqeCGIlqPiAx2emCERA04h6y8/3KeQzD5BnaqE1KndMIm', NULL, '2024-09-23 10:48:24', '2024-09-23 10:48:24'),
(29, 'rao', 'raomuzammil985@gmail.com', NULL, NULL, '03219635632', NULL, NULL, NULL, NULL, '$2y$12$1Kebuj0c38Sx75V0tBccMOwktRdWeg09St.lGUmVKOFEXvo/oDUpO', NULL, '2024-09-23 16:43:49', '2024-09-23 16:43:49'),
(30, 'M.Adil Ishtiaq', NULL, NULL, NULL, '03128071213', NULL, NULL, NULL, NULL, '$2y$12$8QKQVorL9eKSA6pSqh7ld.UxXlJq4fv7JW.DRpv25LeCk4.T5IG2u', NULL, '2024-09-24 05:25:33', '2024-09-24 05:25:33'),
(31, 'rao', 'rao985@gmail.com', NULL, NULL, '03219635632', NULL, NULL, NULL, NULL, '$2y$12$8bFtUX/FGyAqa6veFUrA0OmPdXi5VdAE9sXWzqWIkQDC2Ap2RFCvG', NULL, '2024-09-24 08:33:47', '2024-09-24 08:33:47'),
(32, 'MOAZZAM HUSSAIN', 'm@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$PFxegLgIGsVRxTGTqUdYY.nMVr8lKWMRyOfgZBk3zfjD7vcyhTBpa', NULL, '2024-09-25 09:51:03', '2024-09-25 09:51:03'),
(33, 'kiran', NULL, NULL, 'Pakistan', '03086315925', NULL, NULL, NULL, NULL, '$2y$12$bbTEJoCDXvB/cUJ/xL8SwOsxfNCIO91WmOYqsuSl5oW8OI4o7L3cu', NULL, '2024-09-25 10:52:13', '2024-09-25 10:52:13'),
(34, 'Maviz Afzal Afzal Khan', NULL, NULL, 'Pakistan', '03427264151', NULL, NULL, NULL, NULL, '$2y$12$Odk9LJzBiDQzqkbj/1A6ke90oEsV9RWrPyUI3y1cjcIzn7F5zVxma', NULL, '2024-09-25 18:12:54', '2024-09-25 18:12:54'),
(35, 'Fazal ur Rehman', NULL, NULL, 'Pakistan', '03042724071', NULL, NULL, NULL, NULL, '$2y$12$Cd4T5PYIvFId7NdKhQYBzeqYtDqaJTesOMTJDX2pNIi9W91oBrwM2', NULL, '2024-09-26 01:01:23', '2024-09-26 01:01:23'),
(36, 'mo', 'moazzamjanjua92000@gmail.com', '1727407650.png', NULL, '11', NULL, NULL, NULL, NULL, '$2y$12$PwZ4pBaE1HQ9qGLg2EEWOeKFO6eo8KB8nqvqj8N2vnfgVCc/OVdwm', NULL, '2024-09-27 03:27:03', '2024-09-29 12:32:22'),
(37, 'Rana Mehrab', NULL, NULL, 'Pakistan', '03029845842', NULL, NULL, NULL, NULL, '$2y$12$8iyS0bJj7PnFqCpE.gfRQ.2Ldimk7adq6F1X/twbTI2f8C4pTA7PW', NULL, '2024-09-28 04:45:03', '2024-09-28 04:45:03'),
(38, 'Saad', NULL, NULL, 'Pakistan', '03401687781', NULL, NULL, NULL, NULL, '$2y$12$XfV3ARgKefO0lrts6fZrf.9zSFsIGV1DaAysf8tbAuz1Z8bGDY59C', NULL, '2024-09-28 06:05:40', '2024-09-28 06:05:40'),
(39, 'yty', NULL, NULL, 'r', '12', NULL, NULL, NULL, NULL, '$2y$12$5WCVHml/iay3SHaKjAuMGeXN8MNbvEudG9jIJM0j/c2ZqASz0gcva', NULL, '2024-09-28 10:54:49', '2024-09-28 10:54:49'),
(40, 'jd', NULL, NULL, 'r', '3', NULL, NULL, NULL, NULL, '$2y$12$MDVZ3HzJRRgTUl6dA7DubeYNfmytpEdhHdyUB4ACAggEzptSRfW1q', NULL, '2024-09-28 15:33:56', '2024-09-28 15:33:56'),
(41, 'Muhammad Zubair', NULL, NULL, 'Pakistan', '03051823361', NULL, NULL, NULL, NULL, '$2y$12$zqiZcioI4tP.sW7M.ix9e.9trig55hQqJqjo4L9OuMabbF6ZOXeOu', NULL, '2024-09-29 09:17:56', '2024-09-29 09:17:56'),
(42, 'Wajahat Hussain', NULL, NULL, 'Pakistan', '03093621899', NULL, NULL, NULL, NULL, '$2y$12$KNVaJpUQruYPjCY9vFmr2uKVuFghqkvJXr/yqR3LwDIXqbkMX2Sbi', NULL, '2024-09-29 18:41:17', '2024-09-29 18:41:17'),
(45, 'Fazeel Asghar', NULL, NULL, 'Pakistan', '03126690033', NULL, NULL, NULL, NULL, '$2y$12$JQyt/86DLNcIPjjVCikdmu/7XlTzJw1TyCKJGp4EhSygqoB5NavVC', NULL, '2024-10-01 06:17:57', '2024-10-01 06:17:57'),
(46, 'sheeda', 'realjafarameen@gmail.com', NULL, NULL, '03017838307', NULL, NULL, NULL, NULL, '$2y$12$tj1yPvLk8belqdF86c9Bf.EUnb3dvEH8iF8lZhlbDFGDSNf37VQa.', NULL, '2024-10-01 07:30:46', '2024-10-01 07:30:46'),
(47, 'Farah Sami', NULL, '1731572322.jpeg', 'j', '1', NULL, NULL, NULL, NULL, '$2y$12$d7yb/d66WIb7Au1fNVJ4W.St9zkYwHIEd40YUsaX/zmL6NqvASsNC', NULL, '2024-10-02 06:35:02', '2024-11-14 08:18:42'),
(48, 'rao', 'raom985@gmail.com', NULL, NULL, '03219635632', NULL, NULL, NULL, NULL, '$2y$12$l1E1CqCob1ey5.w1SfSghu2BRfc3Uv6XY4if9LcMgrvLW0kb2.tp.', NULL, '2024-10-02 18:47:43', '2024-10-02 18:47:43'),
(49, 'muzammil', 'muz985@gmail.com', NULL, NULL, '03217377563', NULL, NULL, NULL, NULL, '$2y$12$Elb1oQ76BU/m0HMTMiNB4e/yPcuftLZ6W1fpmhmyJGGRfmdjxwgPC', NULL, '2024-10-03 06:35:29', '2024-10-03 06:35:29'),
(50, 'majid', 'majid990@gmail.com', NULL, NULL, '03011021927', NULL, NULL, NULL, NULL, '$2y$12$Xx0Q9y5xjH0.NfFuAr8XrOXD0Ezk283Snjm0NTY7eQaQRFsHXlSFm', NULL, '2024-10-03 06:49:44', '2024-10-03 06:49:44'),
(51, 'majid', 'maji990@gmail.com', NULL, NULL, '03011021927', NULL, NULL, NULL, NULL, '$2y$12$A474xSPem9C8afuCxIU3DOkhi4WKcrfdfZmqz6YAsImmyX7pjAMk2', NULL, '2024-10-03 06:51:11', '2024-10-03 06:51:11'),
(52, 'majid', 'qaz@gmail.com', NULL, NULL, '03219635632', NULL, NULL, NULL, NULL, '$2y$12$63QUG0gjjgUPpIwkfMUuCuxICHwXMYuk5rc3gWg5DuiGV9.2DT3zO', NULL, '2024-10-03 06:53:42', '2024-10-03 06:53:42'),
(53, 'muzammil', 'qwe@gmail.com', NULL, NULL, '03219635632', NULL, NULL, NULL, NULL, '$2y$12$XzxDHt4MN4QBx6wUzLqaT.41FnKDjC/oS6B4DP7COomKzlU4pJxAm', NULL, '2024-10-03 07:09:46', '2024-10-03 07:09:46'),
(54, 'muzammil', 'asad@gmail.com', NULL, NULL, '03219635632', NULL, NULL, NULL, NULL, '$2y$12$J45a5voX92zxGlKihwKD4e6jFtv/BwkKKHobZbklIXmrr4/3vBeWy', NULL, '2024-10-03 07:15:56', '2024-10-03 07:15:56'),
(55, 'hania', 'hania@gmail.com', NULL, NULL, '03434547153', NULL, NULL, NULL, NULL, '$2y$12$uBrtktOjE33Wm3RkRkDsd.oxTg5KxTneYDuFy7HrQ74QCopmxFUIG', NULL, '2024-10-03 07:57:48', '2024-10-03 07:57:48'),
(56, 'Shahzad', NULL, NULL, 'Pakistan', '03084302948', NULL, NULL, NULL, NULL, '$2y$12$XIlL1xwPULyHUyfS8fPLoucOy7XgZwDf1aH4mai4J3OP7ek2rRtbm', NULL, '2024-10-04 07:26:39', '2024-10-04 07:26:39'),
(57, 'Musharraf Aziz', NULL, NULL, 'Pakistan', '03370495351', NULL, NULL, NULL, NULL, '$2y$12$RPbn.QMqxFQPcslFPPOJNuxg2wI7UfKBCt2QAEAsKU6gOdmNBMfTi', NULL, '2024-10-04 14:46:10', '2024-10-04 14:46:10'),
(58, 'Atka Dawood', NULL, NULL, 'Pakistan', '03247553946', NULL, NULL, NULL, NULL, '$2y$12$mMxAJVeAPg4x4ZDhYOWAyucFgOV9cn/nPdlo5cFMKswPT3Hc0brpq', NULL, '2024-10-05 22:31:32', '2024-10-05 22:31:32'),
(59, 'rao', 'ma12@gmail.com', NULL, NULL, '03219635632', NULL, NULL, NULL, NULL, '$2y$12$lugF2ZYij2KtLNPp1d9Z4udvIJIaoib.3AuxsdmPgfAPAijgHX7Re', NULL, '2024-10-07 07:25:27', '2024-10-07 07:25:27'),
(60, 'aliiii', 'gfgf@gmail.com', NULL, NULL, '1', NULL, NULL, NULL, NULL, '$2y$12$lNflWYVkMWSbPpEDM8NgYufUaS/eagpncl9mn01mk0l4DPWNP1Oz.', NULL, '2024-10-07 09:49:20', '2024-10-07 09:49:20'),
(61, 'aliiii', 'hghgdh@gmail.com', NULL, NULL, '155', NULL, NULL, NULL, NULL, '$2y$12$8BXvfLZjtMAJrmeveHyVReAb.rDyxrRWzBMWDsET5i9Jm/U/Bn9r.', NULL, '2024-10-07 09:51:30', '2024-10-07 09:51:30'),
(62, 'rao', 'rm985@gmail.com', NULL, NULL, '1234567890', NULL, NULL, NULL, NULL, '$2y$12$mhHmDVA5XuSJID2Kf/VB1uFCvDYfmNXbBFZKuQgiD.YNdX6bjHa9S', NULL, '2024-10-07 10:29:24', '2024-10-07 10:29:24'),
(63, 'MUZAMMIL HUSSAIN', 'raomuzammil95@gmail.com', NULL, NULL, '03219635632', NULL, NULL, NULL, NULL, '$2y$12$gBPE5lOjEbH8MbWVNQ6Fd.9bgRFOsKXcbyWp9bywHwcsw/dZ1xyKm', NULL, '2024-10-08 06:34:52', '2024-10-08 06:34:52'),
(64, 'n', 'raomuzammi5@gmail.com', NULL, NULL, '122', NULL, NULL, NULL, NULL, '$2y$12$YqkYQBJWK4katvOv6qLbyuzPSMCQ6FGbwaZzTHaNQvzmhQ4zK2wXe', NULL, '2024-10-08 06:36:38', '2024-10-08 06:36:38'),
(65, 'rao', 'r@gmail.com', NULL, NULL, '632', NULL, NULL, NULL, NULL, '$2y$12$jjv1.HRarhAqkBYbvaaQHecb89voV.y6tnM6438ZKr2fZbRPCHR0W', NULL, '2024-10-08 06:53:51', '2024-10-08 06:53:51'),
(66, 'rao', 'r1@gmail.com', NULL, NULL, '632', NULL, NULL, NULL, NULL, '$2y$12$LqeCd1n1VgF.EQNo6Ve.XeodcWdNY5.THVVPZxRmax2lA4zbCjj7m', NULL, '2024-10-08 16:21:43', '2024-10-08 16:21:43'),
(67, 'rao', 'm1@gmail.com', NULL, NULL, '632', NULL, NULL, NULL, NULL, '$2y$12$wk3NcKIASYbfMqLlK8nkROf6HUNkDgtb0S6LUHvCUA8QLMBkyxRH2', NULL, '2024-10-09 02:57:04', '2024-10-09 02:57:04'),
(68, 'rao', 'm2@gmail.com', NULL, NULL, '632', NULL, NULL, NULL, NULL, '$2y$12$yHvFUidU8Lp/vC5P1DLUoOtGpHja172gkGCSVsVbmqi.7uL9Ji092', NULL, '2024-10-10 08:31:01', '2024-10-10 08:31:01'),
(69, 'Muhammad Ahtasham Naveed', NULL, NULL, 'Pakistan', '03080488627', NULL, NULL, NULL, NULL, '$2y$12$mmgbFnl0I.zUe390cBk6JuDUBaDdArJ0mvcTRXgF0SbGWyavvQMty', NULL, '2024-10-10 17:18:36', '2024-10-10 17:18:36'),
(70, 'rao', 'm3@gmail.com', NULL, NULL, '632', NULL, NULL, NULL, NULL, '$2y$12$.lXjcxsjVxocvcfUAN7ogONnIGYcc9XgYuPa9tS9KuvOkY3IWMi92', NULL, '2024-10-11 02:06:49', '2024-10-11 02:06:49'),
(71, 'rao', 'm4@gmail.com', NULL, NULL, '632', NULL, NULL, NULL, NULL, '$2y$12$1khHYMr6JaOyY0IyrMPvweGgEW/Kn78VKJgbLpCIqeoW4XEerynpC', NULL, '2024-10-11 04:25:40', '2024-10-11 04:25:40'),
(72, 'rao', 'm5@gmail.com', NULL, NULL, '632', NULL, NULL, NULL, NULL, '$2y$12$kOKW29Ez0He6/TtyrtFd.O7XP7bqpr0vVUtdMN3pmj9IkMKTGRmLW', NULL, '2024-10-11 04:58:47', '2024-10-11 04:58:47'),
(76, 'Muhammad Asif', NULL, NULL, 'Pakistan', '03471020438', NULL, NULL, NULL, NULL, '$2y$12$fCaKhqRtQRkR//gHWhpqx.uvjT9j8whvzIhdAhzIO2qoJeDGGVMcG', NULL, '2024-10-18 05:29:41', '2024-10-18 05:29:41'),
(79, 'Ch Umar Farooq', NULL, NULL, 'Pakistan', '03179986558', NULL, NULL, NULL, NULL, '$2y$12$wiqYonsjwzIRL1uQOLyS9uvSq.daOZ6xDGLklasysJp9TQ//kLHNm', NULL, '2024-10-23 03:41:41', '2024-10-23 03:41:41'),
(80, 'Chaudhary Ehtisham', NULL, NULL, 'Pakistan', '03056835192', NULL, NULL, NULL, NULL, '$2y$12$r5zWfVBL0bxjEMdHF5WuV.O1lxApDInm3Wy6HbMhEEYTUZx9seV/i', NULL, '2024-10-28 07:28:52', '2024-10-28 07:28:52'),
(81, 'Zaigham basheer', NULL, NULL, 'Pakistan', '03116252027', NULL, NULL, NULL, NULL, '$2y$12$fU8HXbyuq0f1Ue9EGdi9BuXU6vhCpVjO/WfluuwwO9fcGsP75nNGy', NULL, '2024-10-29 10:45:41', '2024-10-29 10:45:41'),
(82, 'Ayesha nasir', NULL, NULL, 'Pakistan', '03258392574', NULL, NULL, NULL, NULL, '$2y$12$Sb1tyA5L8Rft0JG6qnBzbuvCryuX76bynIShOmSs2UI.p3oOkw0Qi', NULL, '2024-10-30 07:15:55', '2024-10-30 07:15:55'),
(83, 'Munir Ahmad', NULL, NULL, 'Bahawalpur', '03411859704', NULL, NULL, NULL, NULL, '$2y$12$D5HsNb7Wk0Ak3O1/r7eVwOdU6fIPwU09/WPz7.A2XGa8iM2ryKMuK', NULL, '2024-10-31 10:21:39', '2024-10-31 10:21:39'),
(84, 'amZZPDnBHyN', 'ariciacerdan1@hotmail.com', NULL, NULL, '2703425318', NULL, NULL, NULL, NULL, '$2y$12$./fxpaVC4zW7MMSzthyBCeCO4UX9tXh3JppALIMXUf6WCAXV85JfC', NULL, '2024-11-01 14:10:48', '2024-11-01 14:10:48'),
(85, 'avii', 'avii12@gmail.com', NULL, NULL, '123', NULL, NULL, NULL, NULL, '$2y$12$hCbiYMxajTkjRFyu/9Qhu.nYKyCfqARuHDtSwtWJpBy5csL7wG9yG', NULL, '2024-11-04 16:09:21', '2024-11-04 16:09:21'),
(86, 'EcVXfsQfa', 'mcclutaski53@gmail.com', NULL, NULL, '7618423049', NULL, NULL, NULL, NULL, '$2y$12$660WdCr4j.YSpdec8J1HyenFK4lspLwK/zA5FjozAnj3W2C7H709i', NULL, '2024-11-07 06:05:48', '2024-11-07 06:05:48'),
(87, 'Muhammad Tanveer', NULL, NULL, 'Pakistan', '03017952090', NULL, NULL, NULL, NULL, '$2y$12$bvs2SDpktkSFMaiW7YTKHuOaXP6LJXmiypgQcf6t7toKNKMeK9TI2', NULL, '2024-11-13 08:54:36', '2024-11-13 08:54:36'),
(88, 'IDVAcgOXMoyvscW', 'gklifford7290@gmail.com', NULL, NULL, '6713258176', NULL, NULL, NULL, NULL, '$2y$12$.BSBmsz74bw3tIu0nwumm.02syOjY4umTQ6LU2gW3OIunUoExNZwK', NULL, '2024-11-18 04:06:16', '2024-11-18 04:06:16'),
(89, 'piclsUjK', 'museramalandrccolo@yahoo.com', NULL, NULL, '7779735315', NULL, NULL, NULL, NULL, '$2y$12$5iimP/1m7bOIj3ElYJ1gXeOuY2N6Q3SDKypeB2eVYPoOHvap2Bh0K', NULL, '2024-11-20 06:05:56', '2024-11-20 06:05:56'),
(90, 'noor', NULL, NULL, 'pakistan', '03251638983', NULL, NULL, NULL, NULL, '$2y$12$/PZUXomvEVEVxyJDJJWD4.KwvYgDlTGpXORzXADlpV5kGihJ.6q2.', NULL, '2024-11-20 17:39:49', '2024-11-20 17:39:49'),
(91, 'LGyrnjdgFPydyBQ', 'hendrikjmh@gmail.com', NULL, NULL, '5906068402', NULL, NULL, NULL, NULL, '$2y$12$/Au.J3so7ivW7bqMmZ9NmODJBI4urljnZIUnO1qxGZAYI9xWpZWhK', NULL, '2024-11-23 09:43:05', '2024-11-23 09:43:05'),
(92, 'JJpIkzFU', 'kaloskykryscynski@yahoo.com', NULL, NULL, '9817606337', NULL, NULL, NULL, NULL, '$2y$12$lF1cRp3KWGoIJenXcKQOnO3stEdWdngqBJfps6KGAxK/zA4Z4ZibK', NULL, '2024-11-24 09:33:40', '2024-11-24 09:33:40'),
(93, 'ecBUShSTQSoDOp', 'jenevabto28@gmail.com', NULL, NULL, '9691810378', NULL, NULL, NULL, NULL, '$2y$12$jVnON65j/FVhmxLjV9ItEu5mOOPvF7Mk6wBpCMX4qsymj6eIbEnOC', NULL, '2024-11-25 05:51:37', '2024-11-25 05:51:37'),
(94, 'UKlRkVYUNWBB', 'kerenzam1995@gmail.com', NULL, NULL, '8238893395', NULL, NULL, NULL, NULL, '$2y$12$BnyVhwXQA7hk25rACGt6qe5Ma4ichdhc6tgJoopi/PftQvcdqamlO', NULL, '2024-12-05 15:06:17', '2024-12-05 15:06:17'),
(95, 'zGfFMMFDIGZZpZK', 'kgjfrajcbuiils@yahoo.com', NULL, NULL, '5345485494', NULL, NULL, NULL, NULL, '$2y$12$FfDIYKSzpPbErZITwDeZqugm8xOaCXIHBmJjzNzLwtljpaW/sgCQi', NULL, '2024-12-07 06:08:33', '2024-12-07 06:08:33'),
(96, 'Basit Saeed Muhammad', 'mrbasitsaeed@gmail.com', NULL, NULL, '03158381008', NULL, NULL, NULL, NULL, '$2y$12$DeyHPa.dFyJn5dMn7w9UAOY4nJbo5qh4iHvgnGbyEoU7h.B27ZNhi', NULL, '2024-12-08 07:28:53', '2024-12-08 07:28:53'),
(97, 'Ahmad Abdullah', NULL, NULL, 'Pakistan', '03227001018', NULL, NULL, NULL, NULL, '$2y$12$PD/BjCW3itGkTrEAnT1E6.6.pJWplmsCNyLbPBecU8djGMY2CJRBC', NULL, '2024-12-08 16:34:31', '2024-12-08 16:34:31'),
(98, 'Usman', NULL, NULL, 'Pakistan', '03452157132', NULL, NULL, NULL, NULL, '$2y$12$4QCV7XAJfkJ8mzM/qtKPje.mwe40dlJMHUMKqDyQvsgTDF2mn0G1m', NULL, '2024-12-08 16:43:39', '2024-12-08 16:43:39'),
(99, 'bwglhmDTKY', 'nabsheonarain@yahoo.com', NULL, NULL, '8391695496', NULL, NULL, NULL, NULL, '$2y$12$dstIG4Wp67vrkcziwozTS.HqbzZJYkZMsuuerEj/4qEtdrk0Pl6Z2', NULL, '2024-12-14 21:33:24', '2024-12-14 21:33:24'),
(100, 'Abdullah Azhar', 'sultanabdullah7717@gmail.com', NULL, NULL, '03231751900', NULL, NULL, NULL, NULL, '$2y$12$imYlSiKE6Lg6sDgUDdRiu.5k/.WLVMLX9ZplhPoHp2YxU4nFcfQfm', NULL, '2024-12-25 12:19:21', '2024-12-25 12:19:21'),
(101, 'Ehtisham Khalid', NULL, NULL, 'Pakistan', '03036567785', NULL, NULL, NULL, NULL, '$2y$12$8T5O2ZiuxutJnVm6L/UWTefqplVPVkY7ITwNm5Ec2HfLbQ2Zv/Xla', NULL, '2024-12-30 06:34:14', '2024-12-30 06:34:14'),
(102, 'Ahmad daha', NULL, NULL, 'Pakistan', '03005285788', NULL, NULL, NULL, NULL, '$2y$12$D/TkDAQgR361I1tGdUMKPevbNTKRMKgDF2ruzqz0svBuQKprgHI0C', NULL, '2025-01-05 19:41:18', '2025-01-05 19:41:18'),
(103, 'Muhammad Ali Hassan', NULL, NULL, 'Pakistan', '03362546254', NULL, NULL, NULL, NULL, '$2y$12$k8nvrdaiyHxPgNJCsLktqe8IAX1W2YT10vay5JNd1HnuPLILTRqmq', NULL, '2025-01-13 09:47:25', '2025-01-13 09:47:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_city_id_foreign` (`city_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_blog_slug_unique` (`blog_slug`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feed_backs`
--
ALTER TABLE `feed_backs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostels_slug_unique` (`slug`),
  ADD KEY `hostels_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel_rooms_hostel_id_foreign` (`hostel_id`),
  ADD KEY `hostel_rooms_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_hostel_id_foreign` (`hostel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed_backs`
--
ALTER TABLE `feed_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hostels`
--
ALTER TABLE `hostels`
  ADD CONSTRAINT `hostels_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  ADD CONSTRAINT `hostel_rooms_hostel_id_foreign` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hostel_rooms_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_hostel_id_foreign` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
