-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 12:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pristine`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_projects`
--

CREATE TABLE `all_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_services`
--

CREATE TABLE `all_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_services`
--

INSERT INTO `all_services` (`id`, `title`, `subtitle`, `description`, `image`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'OUR SERVICES', 'OUR SERVICES', '<p>At <strong>Ofrima Energy Services Limited</strong>, we are committed to delivering comprehensive and innovative solutions to meet the diverse needs of the oil and gas sector. With our years of experience and expertise, multi-skilled personnel, innovative technology and team work.</p>\r\n\r\n<p>We offer a wide range of services tailored to optimize operations, enhance safety, and maximize efficiency. Our dedication to excellence and customer satisfaction makes us your trusted partner in the oil and gas industry.</p>', 'oesl_injector_coil.jpg', 'our-services', 0, NULL, '2024-04-08 15:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `blog_cat_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author_id`, `blog_cat_id`, `name`, `description`, `image`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Understanding Common Eye Diseases', '<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>Understanding Common Eye Diseases</strong></span></span></p>\r\n\r\n<p>Eye health is crucial for overall well-being, yet many of us take our vision for granted until problems arise. Understanding common eye diseases can help us recognize symptoms early, seek timely treatment, and take preventive measures to protect our sight. Here, we explore some of the most prevalent eye diseases, their causes, symptoms, and available treatments.</p>\r\n\r\n<p><strong>1. Cataracts</strong><br />\r\nCataracts are a leading cause of vision impairment, particularly in older adults. This condition involves the clouding of the eye&#39;s natural lens, which lies behind the iris and the pupil.</p>\r\n\r\n<p>- Causes: Aging, prolonged exposure to ultraviolet light, diabetes, smoking, and eye injuries.<br />\r\n- Symptoms: Blurry vision, difficulty seeing at night, sensitivity to light and glare, seeing &quot;halos&quot; around lights, and fading or yellowing of colors.<br />\r\n- Treatment: Cataract surgery, where the cloudy lens is removed and replaced with an artificial lens, is highly effective.</p>\r\n\r\n<p><strong>2. Glaucoma</strong><br />\r\nGlaucoma is a group of eye conditions that damage the optic nerve, often due to high intraocular pressure. It is a leading cause of blindness in people over the age of 60.</p>\r\n\r\n<p>- Causes: Increased pressure in the eye, age, family history, medical conditions like diabetes and high blood pressure, and long-term steroid use.<br />\r\n- Symptoms: Gradual loss of peripheral vision, tunnel vision in advanced stages, eye pain, nausea, and seeing halos around lights.<br />\r\n- Treatment: Eye drops, oral medications, laser treatment, and surgery to lower eye pressure.</p>\r\n\r\n<p><strong>3. Macular Degeneration</strong><br />\r\nAge-related macular degeneration (AMD) affects the macula, the central part of the retina, and is a common cause of vision loss in older adults.</p>\r\n\r\n<p>- Causes: Age, genetics, smoking, high blood pressure, and high cholesterol.<br />\r\n- Symptoms: Blurred or reduced central vision, difficulty reading or recognizing faces, and seeing straight lines as wavy or distorted.<br />\r\n- Treatment: While there is no cure, treatments include dietary supplements, anti-VEGF injections, laser therapy, and lifestyle changes to slow progression.</p>\r\n\r\n<p><strong>4. Diabetic Retinopathy</strong><br />\r\nThis condition affects individuals with diabetes, leading to damage to the blood vessels in the retina.</p>\r\n\r\n<p>- Causes: Chronic high blood sugar levels.<br />\r\n- Symptoms: Floaters, blurred vision, dark or empty areas in vision, and vision loss.<br />\r\n- Treatment: Better blood sugar management, laser treatment, vitrectomy, and anti-VEGF injections.</p>\r\n\r\n<p><strong>5. Dry Eye Syndrome</strong><br />\r\nDry eye occurs when the eyes do not produce enough tears or when the tears evaporate too quickly.</p>\r\n\r\n<p>- Causes: Aging, hormonal changes, autoimmune diseases, certain medications, and environmental factors.<br />\r\n- Symptoms: Stinging or burning sensation, scratchiness, sensitivity to light, and blurred vision.<br />\r\n- Treatment: Artificial tears, prescription eye drops, lifestyle changes, and procedures to block tear ducts to reduce tear drainage.</p>\r\n\r\n<p>Preventive Measures and Regular Check-Ups<br />\r\nMaintaining good eye health involves regular eye check-ups, especially if you are at risk for these conditions. Here are some general tips to keep your eyes healthy:</p>\r\n\r\n<p>- Protect your eyes: Wear sunglasses that block UV rays and safety glasses when necessary.<br />\r\n- Healthy diet: Eat a balanced diet rich in leafy greens, fish high in omega-3 fatty acids, and vitamins A, C, and E.<br />\r\n- Avoid smoking: Smoking increases the risk of eye diseases.<br />\r\n- Manage health conditions: Keep conditions like diabetes and hypertension under control.<br />\r\n- Regular eye exams: Early detection can help manage eye diseases effectively.</p>\r\n\r\n<p><strong>Conclusion</strong><br />\r\nUnderstanding common eye diseases is the first step toward protecting your vision. By recognizing symptoms early and seeking appropriate treatment, you can maintain good eye health and quality of life. Remember, regular eye exams and a healthy lifestyle are key to preventing and managing these conditions. Your vision is invaluable&mdash;take care of it!</p>', 'ophthalmologist-patient-trying-new-glasses.jpg', 'understanding-common-eye-diseases', 0, NULL, '2024-07-01 05:52:20'),
(2, 1, 2, 'The Importance of Health Education and Awareness', '<p>Health education and awareness are cornerstones of improving public health and fostering healthier communities. By empowering individuals with knowledge, we can prevent diseases, promote wellness, and enhance the quality of life for all. In this post, we&rsquo;ll delve into why health education is essential, explore its benefits, and highlight effective strategies for raising awareness.</p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>&nbsp;Why Health Education Matters</strong></span></p>\r\n\r\n<p>Health education provides people with the information they need to make informed decisions about their health. It covers a broad spectrum, from nutrition and physical activity to disease prevention and management. Here are key reasons why health education is crucial:</p>\r\n\r\n<p><strong>1. Prevention of Diseases:</strong> Knowledge about how diseases spread and how to prevent them can significantly reduce the incidence of illnesses. For example, educating communities about hygiene practices, vaccination, and safe drinking water can prevent outbreaks of infectious diseases.</p>\r\n\r\n<p><strong>2. Promoting Healthy Lifestyles: </strong>Health education encourages people to adopt healthier lifestyles. Understanding the importance of a balanced diet, regular exercise, and avoiding harmful habits like smoking and excessive drinking can lead to better long-term health outcomes.</p>\r\n\r\n<p><strong>3. Early Detection and Management:</strong> Awareness campaigns about symptoms and early signs of diseases like cancer, diabetes, and hypertension can lead to earlier diagnosis and treatment, improving survival rates and quality of life.</p>\r\n\r\n<p><strong>4. Empowering Communities:</strong> Education empowers individuals to take control of their health. When communities are well-informed, they are better equipped to advocate for their health needs and seek out necessary services.</p>\r\n\r\n<p><strong>5. Reducing Healthcare Costs:</strong> Preventive health education can reduce the burden on healthcare systems by decreasing the number of people who need medical treatment for preventable conditions.</p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>&nbsp;Benefits of Health Education</strong></span></span></p>\r\n\r\n<p>The impact of health education extends far beyond individual health. It has broader social and economic benefits, including:</p>\r\n\r\n<p><strong>- Enhanced Public Health:</strong> A well-informed public can contribute to overall societal well-being by reducing the spread of diseases and improving general health standards.<br />\r\n<strong>- Economic Savings:</strong> Preventing disease and promoting health can lead to significant savings in healthcare costs, both for individuals and for governments.<br />\r\n<strong>- Improved Productivity:</strong> Healthy individuals are more productive, leading to better outcomes at work and in daily life.<br />\r\n<strong>- Social Equity:</strong> Health education can bridge gaps in health disparities by providing all segments of society with the knowledge they need to stay healthy.</p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>&nbsp;Effective Strategies for Health Education and Awareness</strong></span></span></p>\r\n\r\n<p>To maximize the impact of health education, it&rsquo;s essential to use effective strategies tailored to the target audience. Here are some proven methods:</p>\r\n\r\n<p><strong>1. Community Outreach Programs:</strong> Organizing workshops, seminars, and health fairs in local communities can directly engage people and provide valuable information in an accessible format.</p>\r\n\r\n<p><strong>2. School-Based Education:</strong> Implementing health education in school curricula ensures that children learn healthy habits early, which they can carry into adulthood.</p>\r\n\r\n<p><strong>3. Media Campaigns:</strong> Utilizing television, radio, social media, and print media can reach a broad audience and reinforce health messages. Creative and relatable content can increase engagement and retention of information.</p>\r\n\r\n<p><strong>4. Partnerships with Local Organizations:</strong> Collaborating with local NGOs, religious institutions, and community leaders can enhance trust and credibility, making health messages more effective.</p>\r\n\r\n<p><strong>5. Interactive and Engaging Materials:</strong> Using infographics, videos, and interactive activities can make health education more engaging and easier to understand.</p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>&nbsp;Conclusion</strong></span></p>\r\n\r\n<p>Health education and awareness are pivotal in building healthier communities and reducing the burden of disease. By equipping individuals with the knowledge they need to make informed health choices, we can foster a culture of wellness and prevention. Whether through community outreach, school programs, or media campaigns, effective health education strategies can lead to a healthier, more informed, and empowered society. Let&rsquo;s prioritize health education to pave the way for a brighter, healthier future for all.</p>', 'pristine7.jpg', 'the-importance-of-health-education-and-awareness', 0, NULL, '2024-06-23 03:55:02'),
(4, 1, 3, 'Protecting Communities from a Silent Killer', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Malaria remains one of the most pressing health issues worldwide, particularly in tropical and subtropical regions. Despite significant progress in reducing malaria cases and deaths, it continues to pose a severe threat to millions. Understanding malaria, its transmission, and the measures we can take to prevent and control it is essential for safeguarding communities. This blog post delves into the importance of malaria prevention and control and highlights effective strategies to combat this deadly disease.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#c0392b\"><strong><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;Understanding Malaria</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Malaria is caused by Plasmodium parasites, which are transmitted to humans through the bites of infected female Anopheles mosquitoes. Once inside the human body, the parasites travel to the liver, where they mature and multiply, eventually infecting red blood cells. This can lead to a range of symptoms, from mild to severe, including fever, chills, headache, muscle pain, and, in severe cases, organ failure and death.</span></span></p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;The Global Impact of Malaria</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Malaria affects hundreds of millions of people annually, with the majority of cases and deaths occurring in sub-Saharan Africa. Vulnerable groups, such as young children, pregnant women, and individuals with weakened immune systems, are at higher risk. The disease not only causes immense human suffering but also has significant economic impacts, including healthcare costs and lost productivity.</span></span></p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;Effective Strategies for Malaria Prevention</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Preventing malaria involves a combination of personal protective measures, communitywide interventions, and ongoing public health efforts. Here are key strategies for malaria prevention:</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>1. Use of InsecticideTreated Nets (ITNs)</strong><br />\r\n&nbsp; &nbsp; What They Are: ITNs are bed nets treated with insecticides that repel or kill mosquitoes.<br />\r\n&nbsp; &nbsp; Why They Work: Sleeping under an ITN can reduce malaria transmission by preventing mosquito bites and killing mosquitoes that come into contact with the net.<br />\r\n&nbsp; &nbsp; Implementation: Ensuring widespread distribution and use of ITNs, particularly in highrisk areas, is crucial.</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>2. Indoor Residual Spraying (IRS)</strong><br />\r\n&nbsp; &nbsp; What It Is: IRS involves spraying the inside walls of homes with insecticides.<br />\r\n&nbsp; &nbsp; Why It Works: Mosquitoes that rest on treated surfaces are killed, reducing the mosquito population and interrupting transmission.<br />\r\n&nbsp; &nbsp; Implementation: Regular spraying campaigns, especially before peak malaria transmission seasons, can be highly effective.</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>3. Antimalarial Medications</strong><br />\r\n&nbsp; &nbsp; What They Are: Medications that can prevent malaria infection (prophylaxis) or treat the disease.<br />\r\n&nbsp; &nbsp; Why They Work: Prophylactic medications can be taken by travelers or people living in highrisk areas to prevent infection. Treatment medications cure infected individuals and reduce transmission.<br />\r\n&nbsp; &nbsp; Implementation: Ensuring access to and proper use of antimalarial drugs, particularly in endemic regions, is essential.</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>4. Environmental Management</strong><br />\r\n&nbsp; &nbsp; What It Is: Reducing mosquito breeding sites by managing water sources and improving sanitation.<br />\r\n&nbsp; &nbsp; Why It Works: Mosquitoes breed in stagnant water. Eliminating breeding sites can significantly reduce mosquito populations.<br />\r\n&nbsp; &nbsp; Implementation: Community efforts to drain standing water, cover water storage containers, and maintain clean environments are key.</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>5. Health Education and Community Engagement</strong><br />\r\n&nbsp; &nbsp; What It Is: Educating communities about malaria prevention and control measures.<br />\r\n&nbsp; &nbsp; Why It Works: Informed communities are more likely to adopt protective behaviors and support public health initiatives.<br />\r\n&nbsp; &nbsp; Implementation: Conducting awareness campaigns, distributing educational materials, and involving community leaders in outreach efforts.</span></span></p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;The Role of Public Health Efforts</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Governments, NGOs, and international organizations play a crucial role in malaria prevention and control. Key actions include:</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>&nbsp;Surveillance and Monitoring:</strong> Tracking malaria cases and mosquito populations to identify outbreaks and target interventions.<br />\r\n<strong>&nbsp;Research and Development: </strong>Investing in the development of new tools, such as vaccines, improved diagnostics, and more effective insecticides.<br />\r\n<strong>&nbsp;Funding and Resources: </strong>Securing adequate funding to support malaria control programs and ensure the availability of necessary resources.</span></span></p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;Conclusion</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Malaria prevention and control require a multifaceted approach that combines individual actions, community efforts, and robust public health strategies. We can significantly reduce the burden of malaria by utilizing tools like insecticide-treated nets, indoor residual spraying, antimalarial medications, and environmental management. Health education and community engagement are vital for ensuring that these measures are widely adopted and sustained. </span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Together, we can protect vulnerable populations, reduce malaria transmission, and move closer to a malaria-free world. Let&rsquo;s commit to taking action and making a difference in the fight against this deadly disease.</span></span></p>', 'africa-humanitarian-aid-doctor-taking-care-patient.jpg', 'protecting-communities-from-a-silent-killer', 0, NULL, '2024-07-01 05:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Eye Health and Vision Care.', 'Eye Health and Vision Care', 'eye-health-and-vision-care', NULL, '2024-06-23 03:44:39'),
(2, 'Health Education and Awareness.', 'Health Education and Awareness', 'health-education-and-awareness', NULL, '2024-06-23 03:44:49'),
(3, 'Malaria Prevention and Control.', 'Malaria Prevention and Control', 'malaria-prevention-and-control', NULL, '2024-06-23 03:44:57'),
(4, 'Medical Supply Distribution and Infrastructure.', 'Medical Supply Distribution and Infrastructure', 'medical-supply-distribution-and-infrastructure', NULL, '2024-06-23 03:45:07'),
(5, 'Community Health and Wellness Initiatives.', 'Community Health and Wellness Initiatives', 'community-health-and-wellness-initiatives', NULL, '2024-06-23 03:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Godwin  Tombrown', 'godwintombrown3020@gmail.com', '06077731420', 'Enquiry Mail Testing', 'Hello Pristine NGO, How can i be part of this movement!', 0, '2024-06-30 15:36:57', '2024-06-30 15:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `deleteblogs`
--

CREATE TABLE `deleteblogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `blog_cat_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deleteblogs`
--

INSERT INTO `deleteblogs` (`id`, `author_id`, `blog_cat_id`, `name`, `description`, `image`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Community Development', '<p><em>Health and wellness</em>&nbsp;are both terms that have been used interchangeably, however, they have two distinct meanings. The biggest difference is in their end goal.</p>', '202406100758arm.jpg', 'community-development', 0, '2024-06-10 09:13:13', '2024-06-10 09:13:13');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `gallery_cat_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `author_id`, `gallery_cat_id`, `name`, `description`, `image`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Health Services', '<p>Health is&nbsp;<strong>a state of complete physical mental and social well-being</strong></p>', 'pristine_slide1.jpg', 'health-services', 0, NULL, '2024-06-25 23:33:33'),
(2, 1, 3, 'Health Services', '<p>Health is&nbsp;<strong>a state of complete physical mental and social well-being</strong>. It&#39;s not only the absence of disease. ​ A person is said to be healthy when he/she is free of any type of disease (infectious/deficiency) when he/she is mentally happy and healthy, and when his/her social relationships are healthy in society.</p>', '202406121957HS.jpg', 'health-services', 0, NULL, NULL),
(3, 1, 3, 'Health Service', '<p>Community Service</p>', '202406260036plef_med_outreach1.jpg', 'health-service', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Rural Development', 'Rural Development', 'rural-development', NULL, NULL),
(2, 'Impact and Community', 'Impact and Community', 'impact-and-community', NULL, NULL),
(3, 'Health Services', 'Health Services', 'health-services', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_29_160726_create_settings_table', 2),
(6, '2024_04_01_042805_create_services_table', 3),
(7, '2024_04_01_043317_create_service_categories_table', 4),
(8, '2024_04_01_104850_create_sliders_table', 5),
(9, '2024_04_03_200617_create_project_categories_table', 6),
(10, '2024_04_03_213706_create_projects_table', 7),
(11, '2024_04_05_092038_create_team_categories_table', 8),
(12, '2024_04_05_102607_create_teams_table', 9),
(13, '2024_04_08_142740_create_all_services_table', 10),
(14, '2024_04_09_120049_create_all_projects_table', 11),
(15, '2024_04_15_060320_create_contacts_table', 12),
(18, '2024_06_08_051518_create_blogs_table', 13),
(19, '2024_06_08_051625_create_blog_categories_table', 13),
(20, '2024_06_12_050545_create_galleries_table', 14),
(21, '2024_06_12_050604_create_gallery_categories_table', 14);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_cat_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_cat_id`, `title`, `subtitle`, `description`, `image`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'Lillian Kemp', NULL, '<p>Description</p>', '202404032212Capture,,.PNG', 'lillian-kemp', 0, 1, NULL, '2024-04-05 02:51:17'),
(2, 3, 'Explorations', NULL, '<p><strong>Well Development:</strong> Designing and drilling production wells to extract oil or gas from reservoirs.</p>\r\n\r\n<p><br />\r\n<strong>Enhanced Oil Recovery (EOR): </strong>Implementing EOR techniques such as water injection, gas injection, or chemical flooding to increase oil recovery from mature fields.</p>\r\n\r\n<p><strong>Gas Processing:</strong> Constructing facilities to separate, treat, and process natural gas for sale or further transportation.</p>', 'IMG_20131216_082156.jpg', 'explorations', 0, 0, NULL, '2024-04-11 04:08:53'),
(3, 1, 'Production', NULL, '<p><strong>Seismic Surveys</strong>: Conducting seismic surveys to identify potential hydrocarbon reservoirs beneath the earth&#39;s surface.</p>\r\n\r\n<p><strong>Exploratory Drilling:</strong> Drilling exploration wells to confirm the presence of oil or gas reserves.</p>\r\n\r\n<p><strong>Reservoir Characterization</strong>: Using advanced technologies to analyze reservoir properties and estimate reserves</p>', 'Capture.PNG', 'production', 0, 0, NULL, '2024-04-11 04:09:14'),
(4, 6, 'Projects', NULL, '<p><strong>Ofrima Energy Services Limited,</strong> we approach every project with a commitment to excellence, innovation, and sustainability. Our team of industry experts combines cutting-edge technology with decades of experience to overcome challenges, maximize efficiency, and drive success. From conception phase to project completion, we strive to exceed expectations and deliver exceptional results.</p>', '202404101024oesl-breadcrumbs-bg.png', 'projects', 1, 0, NULL, '2024-04-10 09:45:15'),
(5, 7, 'PVT ANALYSIS', NULL, '<p><strong>Our PVT analysis</strong> empowers you to make informed decisions about well completion, artificial lift selection, and reservoir development. &nbsp;Gain a competitive edge with our in-depth PVT analysis services and unlock the full potential of your valuable resources.</p>\r\n\r\n<p>Fuel smarter reservoir management decisions with our comprehensive PVT (Pressure-Volume-Temperature) analysis services. &nbsp;</p>\r\n\r\n<p><strong>PVT analysis</strong> is a cornerstone of oil and gas exploration and production, providing crucial insights into the behavior of reservoir fluids under varying pressure and temperature conditions.</p>', '202404182359IMG_20140513_142806.jpg', 'pvt-analysis', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `description`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Production', 'Production', 'production', NULL, 0, NULL, '2024-04-10 10:28:57'),
(2, 'Infrastructure', 'Infrastructure', 'infrastructure', NULL, 0, NULL, '2024-04-10 10:29:25'),
(3, 'Explorations', 'Explorations', 'explorations', NULL, 0, NULL, '2024-04-10 10:26:14'),
(4, 'Industrial construction', 'Construction\r\nIndustrial construction projects  update change', 'industrial-construction', NULL, 1, NULL, '2024-04-10 10:28:28'),
(5, 'QHSE Commitment', 'QHSE Commitment', 'qhse-commitment', NULL, 0, NULL, '2024-04-10 10:31:24'),
(6, 'Project Overview', 'Project Overview', 'project-overview', NULL, 0, NULL, NULL),
(7, 'PVT Analysis', 'PVT Analysis', 'pvt-analysis', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_cat_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_cat_id`, `name`, `description`, `image`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'EYE HOSPITAL', '<p><span style=\"font-size:16px\"><span style=\"color:#c0392b\"><strong>Overview</strong></span></span></p>\r\n\r\n<p>Our Eye Institute Hospital is at the forefront of providing comprehensive eye care services to underserved communities. We are dedicated to preventing and treating vision impairments through a range of medical, surgical, and outreach programs. Our state-of-the-art facilities and experienced medical professionals ensure that patients receive the highest quality care.</p>\r\n\r\n<p><strong>Services Offered</strong></p>\r\n\r\n<p><strong>1. Vision Screenings</strong><br />\r\n&nbsp; &nbsp;- Regular eye exams and vision screenings are critical for early detection of eye conditions. We conduct extensive outreach programs to offer free or affordable vision screenings in remote and underserved areas.</p>\r\n\r\n<p><strong>2. Treatment of Eye Diseases</strong><br />\r\n&nbsp; &nbsp;- Our hospital treats a variety of eye diseases, including glaucoma, diabetic retinopathy, and macular degeneration. We use advanced diagnostic tools and treatment protocols to manage these conditions effectively.</p>\r\n\r\n<p><strong>3. Surgical Interventions</strong><br />\r\n&nbsp; &nbsp;- We perform life-changing surgeries such as cataract removal, corneal transplants, and retinal repairs. These surgeries are often provided at low or no cost to patients who cannot afford them, helping restore sight and improve quality of life.</p>\r\n\r\n<p><strong>4. Pediatric Eye Care</strong><br />\r\n&nbsp; &nbsp;- We offer specialized eye care services for children, addressing issues such as amblyopia (lazy eye), strabismus (crossed eyes), and congenital cataracts. Early intervention is key to preventing lifelong vision problems.</p>\r\n\r\n<p><strong>5. Outreach and Education</strong><br />\r\n&nbsp; &nbsp;- Our team conducts educational workshops and community outreach programs to raise awareness about eye health, prevention of eye diseases, and the importance of regular eye check-ups.</p>\r\n\r\n<p><strong>Impact</strong></p>\r\n\r\n<p>Since its inception, our Eye Institute Hospital has performed hundreds of sight-restoring surgeries and provided essential eye care to countless individuals. Through our outreach programs, we have educated communities about eye health and improved access to necessary treatments, significantly enhancing the quality of life for many.<br />\r\n&nbsp;</p>', 'ophthalmologist-patient-trying-new-glasses.jpg', 'eye-hospital', 0, 0, NULL, '2024-07-01 05:46:37'),
(2, 2, 'HEALTH EDUCATION', '<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>Overview</strong></span></span></p>\r\n\r\n<p>Health education is a cornerstone of our efforts at Pristine Life Enhancement Foundation. We believe that informed individuals are empowered to make better health choices. Our comprehensive health education programs aim to provide communities with the knowledge and skills they need to maintain and improve their health.</p>\r\n\r\n<p><strong>Programs Offered</strong></p>\r\n\r\n<p><strong>1. Workshops and Seminars</strong><br />\r\n&nbsp; &nbsp;- We organize workshops and seminars on various health topics, including nutrition, hygiene, disease prevention, and mental health. These sessions are designed to be interactive and informative, encouraging community participation.</p>\r\n\r\n<p><strong>2. School Health Programs</strong><br />\r\n&nbsp; &nbsp;- Our school health programs aim to educate children and adolescents about healthy lifestyles. We provide age-appropriate information on topics such as personal hygiene, nutrition, physical activity, and sexual health.</p>\r\n\r\n<p><strong>3. Community Outreach</strong><br />\r\n&nbsp; &nbsp;- We conduct community outreach initiatives, such as health fairs and mobile clinics, to bring health education directly to people in remote and underserved areas. These events often include free health screenings and consultations.</p>\r\n\r\n<p><strong>4. Health Literacy Campaigns</strong><br />\r\n&nbsp; &nbsp;- Our health literacy campaigns use various media, including brochures, posters, social media, and local radio, to disseminate important health information. We aim to reach a broad audience with messages that are clear, accurate, and actionable.</p>\r\n\r\n<p><strong>5. Training for Health Workers</strong><br />\r\n&nbsp; &nbsp;- We provide training and capacity-building programs for local health workers, equipping them with the latest knowledge and best practices in health education. This ensures a sustainable impact as these trained professionals continue to educate their communities.</p>\r\n\r\n<p><strong>Impact</strong></p>\r\n\r\n<p>Our health education programs have reached thousands of individuals, fostering a culture of health awareness and proactive health management.</p>\r\n\r\n<p>By empowering people with knowledge, we have helped reduce the incidence of preventable diseases and improved overall community health.<br />\r\n&nbsp;</p>', 'pristine7.jpg', 'health-education', 0, 0, NULL, '2024-06-22 07:51:38'),
(3, 4, 'Kieran Mbappe', '<p>Hello Project Testing Update</p>', '202404032206IMG-20200926-WA0030.jpg', 'kieran-mbappe', 0, 1, NULL, '2024-04-05 08:18:23'),
(4, 4, 'MALARIA CONTROL', '<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>Overview</strong></span></span></p>\r\n\r\n<p>Malaria remains a major health challenge in many parts of the world. At Pristine Life Enhancement Foundation, we are committed to reducing the burden of malaria through comprehensive control and prevention strategies. Our programs aim to protect vulnerable populations, particularly children and pregnant women, who are most at risk.</p>\r\n\r\n<p><strong>Programs Offered</strong></p>\r\n\r\n<p><strong>1. Distribution of Mosquito Nets</strong><br />\r\n&nbsp; &nbsp;- We distribute long-lasting insecticidal nets (LLINs) to households in malaria-endemic areas. These nets provide a protective barrier against mosquito bites, significantly reducing the risk of malaria transmission.</p>\r\n\r\n<p><strong>2. Indoor Residual Spraying (IRS)</strong><br />\r\n&nbsp; &nbsp;- Our teams conduct indoor residual spraying in homes and community buildings to kill mosquitoes and reduce their population. This method is highly effective in controlling the spread of malaria.</p>\r\n\r\n<p><strong>3. Malaria Education Campaigns</strong><br />\r\n&nbsp; &nbsp;- We run educational campaigns to raise awareness about malaria prevention and treatment. These campaigns include information on the importance of using mosquito nets, seeking prompt medical attention for fever, and maintaining a clean environment to reduce mosquito breeding sites.</p>\r\n\r\n<p><strong>4. Rapid Diagnostic Testing (RDT)</strong><br />\r\n&nbsp; &nbsp;- We provide rapid diagnostic testing for malaria in remote and underserved areas, ensuring early and accurate diagnosis. Early detection is crucial for effective treatment and reducing the spread of the disease.</p>\r\n\r\n<p><strong>5. Treatment and Medical Support</strong><br />\r\n&nbsp; &nbsp;- We ensure that those diagnosed with malaria receive appropriate treatment. Our programs supply antimalarial medications and support local healthcare providers in managing malaria cases effectively.</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#c0392b\"><strong>Impact</strong></span></span></p>\r\n\r\n<p>Our malaria control programs have had a significant impact, reducing the incidence of malaria in targeted communities. By distributing mosquito nets, conducting indoor spraying, and providing education and medical support, we have saved countless lives and improved health outcomes in regions heavily affected by malaria.<br />\r\n&nbsp;</p>', 'plef_med_outreach.jpg', 'malaria-control', 0, 0, NULL, '2024-06-22 07:49:51'),
(5, 5, 'MEDICAL SUPPLY FACILITIES', '<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>Overview</strong></span></span></p>\r\n\r\n<p>Access to essential medical supplies is critical for effective healthcare delivery. At Pristine Life Enhancement Foundation, we work tirelessly to ensure that healthcare facilities and individuals in need receive the medical supplies necessary to provide quality care.</p>\r\n\r\n<p><strong>Programs Offered</strong></p>\r\n\r\n<p><strong>1. Medical Supply Distribution</strong><br />\r\n&nbsp; &nbsp;- We collect and distribute a wide range of medical supplies, including bandages, gloves, syringes, and diagnostic equipment, to healthcare facilities in underserved areas. These supplies are crucial for day-to-day medical operations and emergency care.</p>\r\n\r\n<p><strong>2. Donations of Medicines</strong><br />\r\n&nbsp; &nbsp;- Our organization sources and distributes essential medicines, including antibiotics, antimalarials, and vaccines, to healthcare centers and patients in need. Access to these medications is vital for treating various health conditions and preventing outbreaks.</p>\r\n\r\n<p><strong>3. Equipment Donations</strong><br />\r\n&nbsp; &nbsp;- We provide hospitals and clinics with necessary medical equipment, such as ultrasound machines, X-ray machines, and surgical instruments. These donations enhance the capacity of these facilities to deliver comprehensive medical care.</p>\r\n\r\n<p><strong>4. Emergency Response Supplies</strong><br />\r\n&nbsp; &nbsp;- In times of crisis, such as natural disasters or disease outbreaks, we mobilize quickly to provide emergency medical supplies and support. Our rapid response helps mitigate the impact of such events and saves lives.</p>\r\n\r\n<p><strong>5. Capacity Building</strong><br />\r\n&nbsp; &nbsp;- We conduct training programs for healthcare workers on the proper use and maintenance of medical equipment and supplies. This ensures that donated items are used effectively and sustainably.</p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>Impact</strong></span></span></p>\r\n\r\n<p>Our medical supply and donations program has strengthened healthcare systems in numerous underserved communities. By providing essential supplies and equipment, we have improved the quality of care that healthcare facilities can offer, leading to better health outcomes for countless individuals.</p>\r\n\r\n<p>Our support has been particularly vital in emergencies, where timely medical supplies can make the difference between life and death.</p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Join Us</strong></span></p>\r\n\r\n<p>Your support can make a significant difference in the lives of those who need it most. By contributing to the Pristine Life Enhancement Foundation, you help us continue and expand our vital programs.</p>\r\n\r\n<p><span style=\"color:#c0392b\"><em>Together, we can create healthier, stronger communities and bring hope to those in need. Join us in making a lasting impact today.</em></span></p>', 'pristine4.jpg', 'medical-supply-facilities', 0, 0, NULL, '2024-06-22 07:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `description`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'EYE INSTITUTE HOSPITAL', 'Eye Institute Hospital', 'eye-institute-hospital', 0, NULL, '2024-07-01 05:17:35'),
(2, 'Health Education', 'Health Education', 'health-education', 0, NULL, '2024-06-22 07:10:45'),
(3, 'Brenden Coleman is my man', 'Et occaecat aut aspe', 'brenden-coleman-is-my-man', 1, NULL, '2024-04-04 14:50:24'),
(4, 'Malaria Control', 'Malaria Control', 'malaria-control', 0, NULL, '2024-06-22 07:11:14'),
(5, 'Medical Supply and Donations', 'Medical Supply and Donations', 'medical-supply-and-donations', 0, NULL, '2024-06-22 07:11:46'),
(6, 'PROJECT & PROGRAM MGT.', 'At the heart of every project lies the need for meticulous planning, strategic execution, and agile adaptation to changing circumstances', 'project-program-mgt', 0, NULL, NULL),
(7, 'PROCUREMENT SERVICES', 'PROCUREMENT SERVICES', 'procurement-services', 0, NULL, NULL),
(8, 'WELLHEAD MAINTENANCE', 'WELLHEAD MAINTENANCE', 'wellhead-maintenance', 0, NULL, NULL),
(9, 'QHSE', 'QHSE Commitment', 'qhse', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(255) DEFAULT NULL,
  `sitetitle` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `about_descript` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `core_value` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `sitetitle`, `email`, `email2`, `phone`, `phone2`, `about`, `about_descript`, `vision`, `mission`, `core_value`, `about_image`, `address`, `address2`, `facebook`, `instagram`, `twitter`, `linkedin`, `googleplus`, `logo`, `banner`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pristine Life Enhancement Foundation', 'Xander Rojas', 'info@pleafoundation.org', NULL, '08032033792', '08089442646', '<p><span style=\"color:#c0392b\"><strong>Pristine Life Enhancement Foundation</strong></span> is a dedicated Non-Governmental Organization with a mission to enhance the quality of life for underserved communities through comprehensive healthcare services. Founded on the core values of compassion, integrity, and excellence, our organization focuses on providing critical health interventions in areas that need them the most.</p>\r\n\r\n<p>We are passionate about making a tangible difference and fostering healthier, more resilient communities.</p>', '<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong><span style=\"background-color:null\">Our Programs</span></strong></span></span></p>\r\n\r\n<p><strong>1. Eye Institute Hospital</strong><br />\r\n&nbsp; &nbsp; Our Eye Institute Hospital offers state-of-the-art eye care services, including vision screenings, treatments for eye diseases, and lifechanging surgeries for cataracts and other conditions. We aim to restore sight and improve the quality of life for those suffering from visual impairments.<br />\r\n&nbsp; &nbsp;<br />\r\n<strong>2. Health Education</strong><br />\r\n&nbsp; &nbsp; We believe that knowledge is power. Our health education programs are designed to inform and empower individuals with essential health knowledge. We conduct workshops, seminars, and community outreach initiatives to promote preventive care and healthy living practices.</p>\r\n\r\n<p><strong>3. Malaria Control</strong><br />\r\n&nbsp; &nbsp; Malaria remains a significant health challenge in many communities. Our malaria control initiatives focus on distributing mosquito nets, providing antimalarial medications, and conducting community education campaigns to reduce the incidence of malaria and save lives.</p>\r\n\r\n<p><strong>4. Medical Supply and Donations</strong><br />\r\n&nbsp; &nbsp; Access to essential medical supplies is crucial for effective healthcare delivery. We collect and distribute vital medical supplies to healthcare facilities and individuals in need, ensuring that they have the necessary tools to provide quality care.</p>\r\n\r\n<p><span style=\"color:#c0392b\"><strong>Our Impact</strong></span></p>\r\n\r\n<p>Since our founding, the Pristine Life Enhancement Foundation has made significant strides in improving health outcomes for countless individuals. Our Eye Institute Hospital has performed thousands of sight-restoring surgeries, our health education programs have reached numerous communities, and our malaria control efforts have significantly reduced the incidence of the disease. Through the provision of medical supplies, we have bolstered the capacity of healthcare facilities, ensuring that more people receive the care they need.</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#c0392b\"><strong>Why Support Us?</strong></span></span></p>\r\n\r\n<p><strong>1. Proven Track Record</strong><br />\r\n&nbsp; &nbsp; Our initiatives have consistently delivered measurable results, positively impacting lives and health outcomes in the communities we serve. Your support helps us continue and expand these successful programs.</p>\r\n\r\n<p><strong>2. Transparency and Accountability</strong><br />\r\n&nbsp; &nbsp; We are committed to maintaining the highest standards of transparency and accountability. We provide regular updates and detailed reports on our activities and finances, ensuring that your contributions are used effectively and efficiently.</p>\r\n\r\n<p><strong>3. Sustainable Solutions</strong><br />\r\n&nbsp; &nbsp; We focus on creating sustainable health solutions that have a lasting impact. Our programs are designed to empower communities, promoting long-term health and well-being beyond immediate interventions.</p>\r\n\r\n<p><strong>4. Community Centered Approach</strong><br />\r\n&nbsp; &nbsp; We work closely with local communities, understanding their unique needs and tailoring our programs accordingly. This ensures that our interventions are relevant, culturally sensitive, and effective.</p>\r\n\r\n<p><strong>5. Dedicated Team</strong><br />\r\n&nbsp; &nbsp; Our team of healthcare professionals, educators, and volunteers are passionate and dedicated to our mission. Their expertise and commitment drive the success of our programs and ensure that we deliver highquality care and education.</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#c0392b\"><strong>Join Us</strong></span></span></p>\r\n\r\n<p>We invite you to join us in our mission to enhance life through better health. Your support can make a significant difference, enabling us to reach more individuals and communities in need. There are many ways to get involved:</p>\r\n\r\n<p><strong>&nbsp;Donate:</strong> Your financial contributions allow us to fund our programs and reach more people.<br />\r\n<strong>&nbsp;Volunteer:</strong> Offer your time and skills to support our initiatives and make a hands-on impact.<br />\r\n<strong>&nbsp;Partner:</strong> Collaborate with us as a corporate or organizational partner to amplify our efforts and resources.</p>\r\n\r\n<p>Together, we can create a world where quality healthcare is accessible.</p>\r\n\r\n<p><span style=\"color:#c0392b\"><em>Join Pristine Life Enhancement Foundation in making a lasting difference today.</em></span></p>', 'Our vision is to create a world where every individual has access to quality healthcare, free from preventable diseases, and empowered with the knowledge to lead a healthy life.', 'Our mission is to enhance the quality of life in underserved communities by providing accessible eye care, health education, malaria control, and essential medical supplies.', 'Excellence: We strive for excellence in our programs and services, continually improving our methods to provide the best possible healthcare and education.', 'about1.jpg', 'Plot 12 Timothy Lane, Rumuola.\r\nPort Harcourt, Rivers State. Nigeria', NULL, 'https://web.facebook.com/pristinelifeenhancementfoundation', NULL, NULL, NULL, NULL, 'Prestine.png', 'plef_bg.jpg', NULL, NULL, NULL, '2024-06-30 15:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `color`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Empower Futures', NULL, 'Unlock potential and create opportunities for a brighter tomorrow', 'pristine3.jpg', 0, NULL, '2024-06-16 13:59:40'),
(2, 'Health for All', NULL, 'Help us bring essential medical services to underserved communities', 'about1.jpg', 0, NULL, '2024-06-16 14:00:30'),
(3, 'Transform Lives', NULL, 'Be a part of building resilient and thriving rural communities', 'pristine2.jpg', 0, NULL, '2024-06-16 14:01:01'),
(4, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(5, 'Make an Impact', NULL, 'Your donation helps us empower and uplift communities in need', 'pristine_slide1.jpg', 0, NULL, '2024-06-16 14:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_category_id`, `name`, `description`, `image`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Colby Chapman Title Update', '<p>Id deleniti veniam Description Update</p>', '202404051132IMG_7549.JPG', 'colby-chapman-title-update', 0, NULL, '2024-04-05 10:52:21'),
(2, 3, 'Acton Mcmahon Twou now ok', '<p>Dolor omnis magni vo updated now okay!</p>', '202404051134IMG_7550.JPG', 'acton-mcmahon-twou-now-ok', 0, NULL, '2024-04-05 11:20:21'),
(3, 1, 'Zachary Cole', '<p>Zachary Cole</p>', '202404051225Capture.PNG', 'zachary-cole', 1, NULL, '2024-04-05 11:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `team_categories`
--

CREATE TABLE `team_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_categories`
--

INSERT INTO `team_categories` (`id`, `name`, `description`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Colby Chapman', 'Id deleniti veniam', 'colby-chapman', 0, NULL, NULL),
(2, 'Acton Mcmahon', 'Dolor omnis magni vo updated now', 'acton-mcmahon', 0, NULL, '2024-04-05 09:24:37'),
(3, 'Delilah Whitley change', 'Labore doloribus ea', 'delilah-whitley-change', 0, NULL, '2024-04-05 09:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` enum('admin','agent','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `phone`, `address`, `photo`, `role`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@plef.com', NULL, '$2y$12$OGyLBFGPdh2bZkM3zx/X2O9vRxsONiCe3P1AO1K9/D5XrKSNGtyvK', '09022431200', 'Nigeria', 'pristine1.jpg', 'admin', 'active', 0, NULL, NULL, '2024-06-18 20:08:44'),
(2, 'Agent', 'agent', 'agent@oesl.com', NULL, '$2y$12$OGyLBFGPdh2bZkM3zx/X2O9vRxsONiCe3P1AO1K9/D5XrKSNGtyvK', NULL, NULL, NULL, 'agent', 'active', 0, NULL, NULL, NULL),
(3, 'User', 'user', 'user@oesl.com', NULL, '$2y$12$mpeDmt0t6Ma8lAzXKVW88edXicGA3atHD7STwHGoJ6Fnuh9.eR6H2', NULL, NULL, NULL, 'user', 'active', 0, NULL, NULL, NULL),
(4, 'Tom', 'tombrown', 'tombrowngodwin@gmail.com', NULL, '$2y$10$6P98.cDNpZFi9IA2JWkICuYcMrRKsFIFYVOCg9WR0GjUKRx8rEwD.', '1223444566', 'Nigeria', NULL, 'admin', 'active', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_projects`
--
ALTER TABLE `all_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_services`
--
ALTER TABLE `all_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleteblogs`
--
ALTER TABLE `deleteblogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_categories`
--
ALTER TABLE `team_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `all_projects`
--
ALTER TABLE `all_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_services`
--
ALTER TABLE `all_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deleteblogs`
--
ALTER TABLE `deleteblogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_categories`
--
ALTER TABLE `team_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
