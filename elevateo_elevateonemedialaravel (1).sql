-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2026 at 12:47 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elevateo_elevateonemedialaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_heading`, `description`, `image`, `button_link`, `status`, `button_text`, `created_at`, `updated_at`) VALUES
(1, 'Global Premium PR Agency with 15+ Years of Excellence.', 'Elevating Brands, CXOs, and Corporate Reputation.', 'We blend creativity with strategy to build stories that resonate, building emotional bridges between your brand and your audience.', 'uploads/banners/2026/05/02/4dca9a1f-034d-456a-a335-cc3ecdb48f72_1777716217.webp', 'https://elevateonemedia.com', 'active', 'Get Started', '2026-04-16 23:33:03', '2026-05-02 04:33:40'),
(5, 'We Take You From Unknown to KNOWN', 'Premium PR for CXOs, Corporates & Visionaries.', 'From behind the scenes to front-page features — we elevate CXOs, corporates, and visionaries with premium PR.', 'uploads/banners/2026/05/02/e93b8689-1934-4500-9d6b-5d76012fb991_1777703439.webp', 'https://elevateonemedia.com', 'active', 'Get Started', '2026-04-16 00:11:01', '2026-05-02 01:00:39'),
(6, 'Shaping Reputations for Over 15 Years', 'Elevating Brands, CXOs, and Corporate Reputation.', 'Welcome to Elevate One Media — your trusted partner for premium public relations, strategic storytelling, and impactful media presence.', 'uploads/banners/2026/05/02/04fa6098-5245-4601-91da-b3818a7eb4bc_1777716301.webp', 'https://elevateonemedia.com/dev/public/project-enquiries', 'active', 'Contact Us', '2026-04-02 04:35:01', '2026-05-02 04:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `career_applications`
--

CREATE TABLE `career_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_letter` text COLLATE utf8mb4_unicode_ci,
  `status` enum('new','reviewed','rejected','shortlisted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_applications`
--

INSERT INTO `career_applications` (`id`, `job_id`, `name`, `email`, `phone`, `resume`, `cover_letter`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 'Pawan Kumar', 'pawan@mirashka.com', '07992373163', 'pawan-kumar_1775796158.docx', 'tete', 'shortlisted', '2026-04-09 23:12:38', '2026-04-17 00:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `career_jobs`
--

CREATE TABLE `career_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` enum('full-time','part-time','internship','contract') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'full-time',
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `responsibilities` longtext COLLATE utf8mb4_unicode_ci,
  `requirements` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `last_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_jobs`
--

INSERT INTO `career_jobs` (`id`, `title`, `slug`, `department`, `location`, `job_type`, `experience`, `salary_range`, `description`, `responsibilities`, `requirements`, `status`, `last_date`, `created_at`, `updated_at`) VALUES
(1, 'Senior PR Manager', 'senior-pr-manager', 'Marketing', 'Noida, India', 'full-time', '5+ years', NULL, 'Lead our PR initiatives', NULL, NULL, 'active', NULL, '2026-04-09 22:20:55', '2026-04-09 22:20:55'),
(2, 'PR Executive', 'pr-executive', 'Public Relations', 'Mumbai, India', 'full-time', '2-4 years', '₹5-8 LPA', 'Support the PR team in executing communications campaigns and maintaining client relationships.', 'Assist in drafting press releases and media materials. Monitor media coverage and generate reports. Coordinate with media houses for coverage. Support event coordination. Maintain media lists and databases.', '2-4 years of PR experience. Excellent writing skills. Strong attention to detail. Ability to work under deadlines. Mass Communication/Journalism degree preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-10 02:34:14'),
(3, 'Media Relations Specialist', 'media-relations-specialist', 'Media', 'Delhi NCR', 'full-time', '3-5 years', '₹8-12 LPA', 'Build and maintain strong relationships with media contacts to secure optimal coverage for clients.', 'Cultivate relationships with journalists and editors. Pitch stories to media outlets. Organize press conferences and media briefings. Track and analyze media coverage. Develop media kits and press materials.', '3-5 years in media relations. Extensive media network in India. Excellent pitching and negotiation skills. Strong analytical abilities. Journalism/Communications background.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(4, 'Content Writer', 'content-writer', 'Content', 'Noida, India', 'full-time', '2-3 years', '₹4-6 LPA', 'Create compelling content for various platforms including websites, blogs, social media, and marketing materials.', 'Write engaging content for digital platforms. Create thought leadership articles. Develop social media content calendars. Edit and proofread content. Collaborate with design team.', '2-3 years of content writing experience. Exceptional writing and editing skills. Understanding of SEO best practices. Portfolio of published work. English/Humanities degree preferred.', 'active', '2026-04-24', '2026-04-09 22:30:21', '2026-04-10 00:13:28'),
(5, 'Senior Content Strategist', 'senior-content-strategist', 'Content', 'Bangalore, India', 'full-time', '5-7 years', '₹12-18 LPA', 'Develop comprehensive content strategies that align with brand objectives and drive audience engagement.', 'Create content strategy roadmaps. Define content governance frameworks. Analyze content performance metrics. Lead content ideation sessions. Collaborate with cross-functional teams.', '5-7 years in content strategy. Proven experience in B2B content. Data-driven approach to content. Strong project management skills. Journalism/Marketing degree.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(6, 'Digital Marketing Manager', 'digital-marketing-manager', 'Marketing', 'Noida, India', 'full-time', '4-6 years', '₹10-16 LPA', 'Plan and execute digital marketing campaigns to drive brand awareness and lead generation.', 'Manage digital advertising campaigns. Optimize SEO/SEM strategies. Analyze campaign performance metrics. Manage social media advertising budgets. Coordinate with creative team.', '4-6 years in digital marketing. Google Ads and Analytics certified. Experience with marketing automation. Strong analytical skills. MBA in Marketing preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(7, 'Social Media Executive', 'social-media-executive', 'Social Media', 'Mumbai, India', 'full-time', '1-3 years', '₹3-5 LPA', 'Manage social media presence and create engaging content across various platforms.', 'Create and schedule social media posts. Monitor social media channels. Respond to comments and messages. Track social media metrics. Stay updated on social media trends.', '1-3 years social media experience. Knowledge of all major platforms. Excellent writing skills. Creative mindset. Journalism/Marketing degree.', 'inactive', NULL, '2026-04-09 22:30:21', '2026-04-13 14:24:09'),
(8, 'Brand Communications Lead', 'brand-communications-lead', 'Brand', 'Noida, India', 'full-time', '7-10 years', '₹20-30 LPA', 'Lead brand communications initiatives and ensure consistent brand voice across all channels.', 'Define brand communication strategy. Ensure brand consistency. Lead brand campaigns. Manage brand guidelines. Oversee brand positioning.', '7-10 years in brand management. Experience with global brands. Strong strategic thinking. Excellent leadership skills. MBA in Brand/Marketing required.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(9, 'Client Servicing Manager', 'client-servicing-manager', 'Client Services', 'Delhi NCR', 'full-time', '4-6 years', '₹10-14 LPA', 'Manage client relationships and ensure delivery of PR services exceed expectations.', 'Act as primary client contact. Manage client expectations. Coordinate internal teams. Handle escalations professionally. Drive client satisfaction.', '4-6 years in client servicing. Excellent relationship management. Strong presentation skills. PR/Marketing background. MBA preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(10, 'Graphic Designer', 'graphic-designer', 'Design', 'Noida, India', 'full-time', '2-4 years', '₹4-7 LPA', 'Create visually appealing designs for marketing materials, social media, and client presentations.', 'Design social media graphics. Create presentation decks. Design marketing collateral. Collaborate with content team. Maintain brand consistency.', '2-4 years graphic design experience. Proficiency in Adobe Creative Suite. Portfolio required. Understanding of design principles. Visual Communications degree preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(11, 'Video Editor', 'video-editor', 'Media', 'Noida, India', 'full-time', '2-5 years', '₹5-9 LPA', 'Edit video content for social media, websites, and promotional materials.', 'Edit video content. Add effects and transitions. Create short-form videos. Manage video libraries. Work with creative team.', '2-5 years video editing experience. Proficiency in Premiere Pro. Understanding of social formats. Creative eye for details. Portfolio required.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(12, 'PR Intern', 'pr-intern', 'Public Relations', 'Noida, India', 'internship', 'Fresher', '₹10,000-15,000/month', 'Gain hands-on experience in PR while supporting the team with various tasks.', 'Research media contacts. Assist in press release writing. Monitor media coverage. Coordinate meeting logistics. Support event preparation.', 'Currently pursuing/completed degree. Strong writing skills. Eager to learn. Good communication skills. Journalism/Mass Comm students preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(13, 'Copywriter', 'copywriter', 'Content', 'Mumbai, India', 'full-time', '2-4 years', '₹5-8 LPA', 'Write persuasive copy for advertising campaigns, websites, and marketing materials.', 'Write advertising copy. Create tagline concepts. Develop brand voice guidelines. Write for digital platforms. Collaborate with creative team.', '2-4 years copywriting experience. Strong portfolio of ad copy. Creative thinking. Understanding of marketing. English/Journalism degree.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(14, 'Media Analyst', 'media-analyst', 'Analytics', 'Noida, India', 'full-time', '2-3 years', '₹5-7 LPA', 'Analyze media coverage and provide insights to improve PR strategies.', 'Track media coverage. Generate analytics reports. Provide media insights. Monitor competitor coverage. Use media monitoring tools.', '2-3 years in media analysis. Proficiency in analytics tools. Strong Excel skills. Attention to detail. Statistics/Marketing degree.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(15, 'Account Director', 'account-director', 'Client Services', 'Delhi NCR', 'full-time', '10-15 years', '₹30-45 LPA', 'Lead strategic client relationships and drive business growth for major accounts.', 'Manage senior client relationships. Lead strategic planning. Drive revenue growth. Mentor team members. Handle high-level negotiations.', '10-15 years in PR/Communications. Experience with Fortune 500 clients. Strong business acumen. Executive presence. MBA from top institute preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(16, 'SEO Specialist', 'seo-specialist', 'Digital', 'Noida, India', 'full-time', '2-4 years', '₹4-7 LPA', 'Optimize client websites and content for search engines to improve organic visibility.', 'Conduct SEO audits. Optimize on-page content. Build backlinks. Track keyword rankings. Report SEO performance.', '2-4 years SEO experience. Knowledge of Google algorithms. Experience with SEO tools. Strong analytical skills. Digital Marketing degree preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(17, 'Events Manager', 'events-manager', 'Events', 'Noida, India', 'full-time', '4-6 years', '₹8-12 LPA', 'Plan and execute corporate events, product launches, and press conferences.', 'Plan event logistics. Coordinate with vendors. Manage event budgets. Oversee event execution. Post-event analysis.', '4-6 years event management experience. Strong organizational skills. Vendor management experience. Budget handling. Hospitality/Management degree.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(18, 'Communications Consultant', 'communications-consultant', 'Consulting', 'Remote', 'contract', '5-8 years', '₹15-25 LPA', 'Provide expert communications counsel to enterprise clients on strategic initiatives.', 'Advise on communication strategy. Conduct communication audits. Train spokespersons. Develop crisis protocols. Review communication materials.', '5-8 years consulting experience. Strong analytical skills. Excellent presentation. PR agency background. MBA preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(19, 'Press Release Writer', 'press-release-writer', 'Content', 'Work from Home', 'part-time', '1-3 years', '₹3-5 LPA', 'Write compelling press releases for various industries and announcements.', 'Write newsworthy press releases. Follow AP style guidelines. Meet quick turnaround times. Work with client teams. Edit based on feedback.', '1-3 years PR writing experience. Strong AP style knowledge. Fast writer. Attention to detail. Journalism degree preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(20, 'Crisis Communications Expert', 'crisis-communications-expert', 'Public Relations', 'Delhi NCR', 'full-time', '8-12 years', '₹25-40 LPA', 'Guide clients through reputational crises with strategic communications response.', 'Develop crisis response plans. Manage crisis situations. Train spokespersons. Coordinate with legal teams. Monitor crisis developments.', '8-12 years crisis experience. Experience in corporate crises. Calm under pressure. Strong media contacts. Communications/PR degree.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(21, 'Thought Leadership Consultant', 'thought-leadership-consultant', 'Consulting', 'Noida, India', 'contract', '6-10 years', '₹20-35 LPA', 'Help executives build their personal brand and establish thought leadership in their industries.', 'Develop thought leadership strategies. Ghostwrite executive content. Create speaking opportunities. Build personal brand presence. Measure thought leadership impact.', '6-10 years in communications. Experience with C-suite clients. Exceptional writing skills. Understanding of LinkedIn. Business/Media degree.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(22, 'Community Manager', 'community-manager', 'Social Media', 'Bangalore, India', 'full-time', '2-4 years', '₹5-8 LPA', 'Build and engage online communities around brands on social media platforms.', 'Manage brand communities. Moderate community discussions. Respond to queries. Identify brand advocates. Track engagement metrics.', '2-4 years community management. Excellent communication skills. Social media expertise. Customer service background. Marketing degree preferred.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(23, 'Research Analyst', 'research-analyst', 'Analytics', 'Noida, India', 'full-time', '1-2 years', '₹3-5 LPA', 'Conduct research to support PR strategies and media campaigns.', 'Research industry trends. Analyze media landscape. Prepare briefing documents. Support strategy development. Track competitor activities.', '1-2 years research experience. Strong analytical skills. Proficiency in MS Office. Research methodology knowledge. Any graduate degree.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(24, 'CXO Ghostwriter', 'cxo-ghostwriter', 'Content', 'Remote', 'contract', '5-10 years', '₹18-30 LPA', 'Write articles, speeches, and opinion pieces for C-suite executives and founders.', 'Ghostwrite executive articles. Develop speech content. Create LinkedIn posts. Maintain executive voice. Conduct interview research.', '5-10 years writing experience. Portfolio of executive content. Ability to match executive voice. Fast turnaround capability. Journalism/Literature degree.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21'),
(25, 'Photography Intern', 'photography-intern', 'Media', 'Noida, India', 'internship', 'Fresher', '₹8,000-12,000/month', 'Assist with photography for events, corporate shoots, and social media content.', 'Assist in photo shoots. Edit photos for web. Organize photo library. Support event coverage. Maintain photography gear.', 'Knowledge of DSLR photography. Basic photo editing skills. Eager to learn. Own camera preferred. Photography/Design background.', 'active', NULL, '2026-04-09 22:30:21', '2026-04-09 22:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `challenge` longtext COLLATE utf8mb4_unicode_ci,
  `solution` longtext COLLATE utf8mb4_unicode_ci,
  `strategy` longtext COLLATE utf8mb4_unicode_ci,
  `results` longtext COLLATE utf8mb4_unicode_ci,
  `impact_highlights` longtext COLLATE utf8mb4_unicode_ci,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_coverage` longtext COLLATE utf8mb4_unicode_ci,
  `reach` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_studies`
--

INSERT INTO `case_studies` (`id`, `title`, `slug`, `client_name`, `industry`, `short_description`, `challenge`, `solution`, `strategy`, `results`, `impact_highlights`, `featured_image`, `media_coverage`, `reach`, `status`, `created_at`, `updated_at`, `image_one`, `image_two`, `image_three`, `image_four`) VALUES
(1, 'Immersive Tech-Driven Campaign for Tanishq', 'immersive-tech-driven-campaign-for-tanishq', 'Tanishq', 'Luxury Jewellery Retail', 'Tanishq transformed traditional jewellery marketing by leveraging immersive technologies like holography, AR/VR, and anamorphic displays. The campaign created large-scale, visually striking public experiences that showcased craftsmanship while deeply engaging audiences. By blending storytelling with innovation, the brand elevated its perception and achieved strong recall during peak buying seasons.', 'The primary challenge was to shift consumer perception from conventional jewellery retail to a more experiential and modern brand identity. The jewellery industry traditionally depends heavily on in-store experiences, where customer engagement is limited to physical touchpoints and visual merchandising. This made it difficult to create large-scale public engagement or generate excitement beyond retail environments. Tanishq needed to break this barrier by taking the brand experience outside stores and into high-visibility public spaces.\r\n\r\nAdditionally, introducing advanced technologies such as holography and anamorphic displays in the Indian market posed a significant challenge, as these formats were relatively new and unfamiliar to audiences. Educating consumers while simultaneously delivering a seamless and premium experience required careful planning and execution.', 'To address the challenge, a multi-layered approach was implemented combining immersive technology with strong storytelling and high-impact public installations. Jewellery was taken beyond traditional retail spaces into premium, high-footfall locations using formats like holography, AR/VR experiences, and anamorphic displays. Each activation was designed to be visually engaging and socially shareable, ensuring both physical and digital impact. A strong PR and media amplification strategy further extended reach across national and international platforms, positioning Tanishq as an innovation-led luxury brand.', 'The strategy focused on merging storytelling with immersive technologies to deliver memorable brand experiences. Premium high-footfall locations were selected to maximize visibility and audience engagement. Campaigns were carefully aligned with key cultural and buying moments such as Akshaya Tritiya and wedding seasons to enhance relevance. A strong media amplification and social sharing plan ensured the campaign reached beyond physical installations, reinforcing Tanishq’s premium and innovative brand positioning.', 'The campaign successfully positioned Tanishq as a pioneer in immersive jewellery marketing. It generated widespread visibility through innovative executions and strong media presence. The brand experienced enhanced recall, increased engagement, and strengthened perception as a forward-thinking luxury leader. The integration of technology and storytelling created memorable consumer experiences that translated into long-term brand value.', '100+ media features\r\n3.5 Crore+ reach\r\nHigh social media engagement\r\nImmersive tech-led campaigns\r\nStrong brand recall\r\nGlobal media recognition', 'uploads/case-study/2026/04/09/f65dd38e-8d68-4a0a-bd4d-efc684c4fbbc_1775734855.jpg', 'The campaign received extensive coverage across top-tier national and international platforms. Global publications like The Drum, AV Interactive, and B&T Australia featured the innovation, while Indian media including Exchange4Media, afaqs!, Impact, and MediaBrief amplified its reach. The campaign also gained strong traction across LinkedIn, Instagram, and other social platforms, driving organic engagement and visibility.', 'PR & Experiential Campaign', 1, '2026-04-09 00:49:18', '2026-04-09 06:10:55', 'uploads/case-study/2026/04/09/b36b7bfe-ce7f-476f-b1a4-aa2e234050da_1775734714.jpg', 'uploads/case-study/2026/04/09/6e2fafdc-94b3-4493-a06d-c1d42ca94098_1775734715.jpg', 'uploads/case-study/2026/04/09/ec09c576-cb7c-4e5a-bb1f-dcf2c051ec40_1775734715.jpg', 'uploads/case-study/2026/04/09/b93d543c-377e-40b1-acf2-bfdcc51ca24e_1775734715.jpg'),
(2, 'ALLEN CAREER INSTITUTE — COMPLETE CASE STUDY', 'allen-career-institute-complete-case-study', 'ALLEN CAREER INSTITUTE', 'Education / Test Preparation', 'From Kota to Delhi — Amplifying India\'s Most Trusted Coaching Brand with Strategic PR\r\nIndustry: Education / Test Preparation | Reach: Brand PR, Topper Promotion & Expansion Campaign', '<p>Despite ALLEN\'s legendary status in Kota, the Delhi-NCR coaching market presented unique and formidable challenges:</p>\n<ul>\n<li><strong>New Market, New Trust:</strong> Delhi parents and students were deeply loyal to established local coaching brands. ALLEN needed to rapidly build credibility and awareness in a hyper-competitive market with thousands of coaching centres.</li>\n<li><strong>Simultaneous Multi-Front Launch:</strong> 11 centres were being launched across geographically diverse locations &mdash; each needing local relevance and city-wide awareness at the same time.</li>\n<li><strong>Validating Quality Through Results:</strong> The most powerful proof point in the coaching industry is student results. The campaign needed to convert JEE Main 2023 topper achievements into maximum media visibility &mdash; quickly, before the news cycle moved on.</li>\n<li><strong>Standing Out in a Crowded News Cycle:</strong> The JEE Main 2023 result declaration created a burst of competing announcements from FIITJEE, Resonance, Aakash, and other institutes. ALLEN\'s story needed to break through the clutter and dominate the narrative.</li>\n<li><strong>Building Parent-Facing Authority:</strong> Unlike youth brands, coaching PR must equally address parents &mdash; who are the primary decision-makers. Media placements needed to appear in publications that parents trust: Times of India, The Week, PTI, Hindustan Times, and The Hans India.</li>\n<li><strong>Speed of Execution:</strong> Result-based PR campaigns have a 24&ndash;72 hour window. The press release needed to go live, get amplified across 70+ platforms, and generate measurable traction within days of the NTA announcing the JEE Main 2023 results.</li>\n</ul>', '<p>Elevate One Media crafted a precision-executed, topper-centric PR strategy timed to the minute with the NTA\'s JEE Main 2023 result declaration on April 29, 2023. The core insight: in the competitive coaching market, <strong>one genuine topper story is worth more than a hundred advertisements</strong>. Our strategy was to make Malay Kedia\'s achievement not just a press release &mdash; but a national proof point for ALLEN Delhi\'s quality.</p>\n<p><strong>Key Actions Executed:</strong></p>\n<ul>\n<li><strong>Crafted a Compelling Press Release</strong> headlined <em>\"ALLEN Delhi\'s Malay Gets All India Rank-4\"</em> &mdash; strategically framing the AIR-4 achievement as a validation of ALLEN Delhi\'s classroom programme, positioning the branch as already delivering Kota-level results within its very first year in Delhi-NCR<a href=\"#fn1\"><sup>[1]</sup></a></li>\n<li><strong>Developed a rich student profile</strong> including Malay Kedia\'s personal background (Ghaziabad resident, perfect 300/300 score, 99% in Class 10, NTSE Scholar, KVPY AIR-6) to create a relatable, multi-dimensional human interest story<a href=\"#fn2\"><sup>[2]</sup></a></li>\n<li><strong>Pitched to PTI (Press Trust of India)</strong>, securing wire syndication that automatically pushed the story to hundreds of downstream publications &mdash; maximising reach with a single high-authority placement<a href=\"#fn3\"><sup>[3]</sup></a></li>\n<li><strong>Secured placement in The Week</strong> (DA 78, 10.46 lakh monthly traffic) &mdash; reaching the premium, decision-making parent demographic<a href=\"#fn3\"><sup>[3]</sup></a></li>\n<li><strong>Achieved Devdiscourse/PTI coverage</strong> (DA 61, 9.29 lakh monthly traffic) providing additional PTI wire amplification<a href=\"#fn3\"><sup>[3]</sup></a></li>\n<li><strong>Placed in Times of India</strong> (via NewsVoir syndication) &mdash; India\'s largest English newspaper &mdash; giving the story maximum credibility and organic search visibility<a href=\"#fn4\"><sup>[4]</sup></a></li>\n<li><strong>Amplified via WebIndia123</strong> (DA 69, 38.8 lakh monthly traffic) for mass digital reach<a href=\"#fn3\"><sup>[3]</sup></a></li>\n<li><strong>Distributed to DailyHunt</strong> (DA 60, 1.48 crore+ monthly traffic) &mdash; India\'s largest news aggregator &mdash; ensuring the story reached vernacular and semi-urban audiences<a href=\"#fn3\"><sup>[3]</sup></a></li>\n<li><strong>Coordinated parallel social media amplification</strong> via ALLEN\'s official Facebook, Instagram, Twitter/X channels, turning the press release into a multi-platform brand moment<a href=\"#fn5\"><sup>[5]</sup></a><a href=\"#fn6\"><sup>[6]</sup></a></li>\n<li><strong>Total Release Date: May 1, 2023</strong> &mdash; executed with a 77-publication simultaneous blast within 48 hours of the result declaration<a href=\"#fn3\"><sup>[3]</sup></a></li>\n</ul>', '<p>Beyond the topper-led campaign, Elevate One Media anchored ALLEN Delhi\'s brand entry in the NCR market through a sustained, multi-wave PR programme running throughout early 2023. This broader campaign focused on positioning ALLEN not merely as a new entrant, but as <strong>India\'s most result-driven coaching institution, now available at the doorstep of Delhi-NCR students</strong>.</p>\n<p><strong>Key Actions Executed:</strong></p>\n<ul>\n<li><strong>Delhi-NCR Expansion Launch PR (February 2023):</strong> Executed a high-impact press campaign around ALLEN\'s launch of 11 simultaneous study centres in Delhi-NCR, with an orientation session at Siri Fort Auditorium, New Delhi. Coverage secured in <strong>Times of India, Education Times, Hindustan Times Syndication, 5 Dariya News</strong> and 20+ regional publications<a href=\"#fn7\"><sup>[7]</sup></a><a href=\"#fn8\"><sup>[8]</sup></a></li>\n<li><strong>Positioned ALLEN Director Rajesh Maheshwari</strong> as a thought leader with direct quotes in national media, articulating ALLEN\'s vision for Delhi-NCR: <em>\"The principles and quality education with which Allen works hard in Kota will work hard in Delhi as well\"</em><a href=\"#fn8\"><sup>[8]</sup></a></li>\n<li><strong>ALLEN Digital Live Courses Launch (March 2023):</strong> Amplified the admission announcement for ALLEN Digital\'s online live courses across <strong>Business Standard (DA 93), The Print (DA 87), and The Week (DA 78)</strong> &mdash; reaching both offline and digital education audiences simultaneously<a href=\"#fn9\"><sup>[9]</sup></a></li>\n<li><strong>Leveraged Economic Times platform</strong> when the Finance Minister visited ALLEN Career Institute\'s Kota campus, generating brand association with national policy-level conversations<a href=\"#fn9\"><sup>[9]</sup></a></li>\n<li><strong>Maintained a consistent media presence</strong> through ALLEN\'s official news portal (<a href=\"http://news.allen.in\">allen.in</a>) alongside third-party PR placements &mdash; creating a complementary owned and earned media strategy<a href=\"#fn10\"><sup>[10]</sup></a></li>\n<li><strong>Cross-platform approach:</strong> Coordinated all PR with ALLEN\'s social media channels (Facebook: 6M+ followers, Instagram, YouTube: 1.83M subscribers) for maximum amplification &mdash; each press placement was shared, reshared, and transformed into video content and topper testimonials<a href=\"#fn11\"><sup>[11]</sup></a></li>\n</ul>', '<p><strong>Result 01:</strong></p>\n<p><strong>77+ Media Placements in a Single Campaign</strong> &mdash; The JEE Main 2023 topper PR campaign for ALLEN Delhi achieved coverage across 77 online publications including PTI, The Week, Times of India, The Hans India, DailyHunt, and WebIndia123, generating a combined reach of <strong>6+ crore potential monthly readers</strong> within 48 hours of release</p>\n<p><strong>Result 02:</strong></p>\n<p><strong>Pan-India Brand Credibility Established from Day One</strong> &mdash; ALLEN Delhi\'s topper story dominated the JEE Main 2023 result news cycle, with coverage spanning DA 21 to DA 78 publications, securing both mass reach and premium authority placements simultaneously &mdash; positioning ALLEN Delhi as the #1 coaching brand to produce top-5 rankers in its very first operational year in Delhi-NCR</p>\n<p><strong>Result 03:</strong></p>\n<p><strong>Multi-Wave Earned Media Throughout 2023</strong> &mdash; From the Delhi-NCR expansion launch in February to JEE Main toppers in May and JEE Advanced results in June, Elevate One Media\'s PR strategy kept ALLEN in the national news cycle consistently &mdash; with additional coverages in Business Standard, The Print, Education Times, Careers360, and 100+ online publications across the year</p>', 'Elevate One Media\'s strategic PR campaign for ALLEN Career Institute Delhi delivered a textbook example of result-amplification PR — turning a genuine academic achievement into a national brand moment. By deploying a precision-timed, multi-publication press release strategy within 48 hours of the JEE Main 2023 result declaration, we ensured that ALLEN Delhi\'s very first topper story — Malay Kedia\'s perfect 300/300 score and AIR-4 — reached over 6 crore potential readers across India\'s most trusted news platforms. The campaign not only validated ALLEN\'s academic excellence in the Delhi-NCR market but established an earned media framework that continued generating coverage throughout 2023, from the February 11-centre expansion launch to the June JEE Advanced results. For a brand entering a new and fiercely competitive market, this consistent national media presence translated directly into parent trust, student enrolments, and ALLEN Delhi\'s rapid establishment as the region\'s most credible coaching destination.', 'uploads/case-study/2026/05/02/e0acaffb-4d4d-4d31-9d21-2f2bb4439bd8_1777713131.webp', NULL, 'Brand PR, Topper Promotion & Expansion Campaign', 1, '2026-05-02 03:42:12', '2026-05-02 03:42:12', NULL, NULL, NULL, NULL),
(3, 'BMW India Case Study', 'bmw-india-case-study', 'BMW India', 'Luxury Automotive', 'Driving India\'s Luxury Automotive Narrative — A Decade of Premium PR for BMW India\r\nIndustry: Luxury Automotive | Reach: Pan-India PR & Media Relations', 'The luxury automobile segment in India is defined by perception as much as performance. BMW India faced a three-dimensional challenge: first, to break through India\'s deeply conservative automotive media landscape and make premium launches feel culturally relevant to Indian audiences. Second, to sustain media momentum and brand recall across multiple launches in a short span — from compact SUVs to flagship convertibles — without diluting the exclusivity of the BMW brand. Third, to build national credibility for BMW India\'s manufacturing story — demonstrating that a globally prestigious brand could produce world-class cars on Indian soil. Each launch required a bespoke narrative, the right media mix, and editorial relationships strong enough to drive front-page and primetime placement — consistently, across years.', 'Elevate One Media developed a sustained, relationship-led PR mandate for BMW India — one that treated each launch not as a standalone event but as a chapter in a premium brand story. We crafted bespoke press strategies for each vehicle — tailoring narratives to the vehicle\'s positioning (aspirational entry-SUV for the X1, open-top lifestyle for the 6 Series Convertible, innovation-first for the i8). Our team deployed a multi-platform outreach strategy spanning print, broadcast, digital auto media, and lifestyle publications, ensuring BMW India earned editorial coverage — not just paid placement — in India\'s most-read national titles including The Economic Times, Hindustan Times, Business Standard, Autocar India, and NDTV Auto.', 'The strategy was built on three pillars: Narrative Precision (each model had a distinct story — performance, lifestyle, innovation, or national pride), Relationship Capital (deep journalist and editor relationships ensured quality placements, not just volume), and Milestone Amplification (events like the BMW Plant Chennai 10,000th car rollout were transformed into national manufacturing pride stories). Key cultural moments — Auto Expo, festive seasons, luxury lifestyle events — were leveraged for maximum visibility. Celebrity associations such as Sachin Tendulkar\'s involvement in the BMW X5 launch added mass media amplification. Every campaign was measured not just by clip count but by sentiment, message pull-through, and brand positioning impact.', '<table>\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><strong>11 High-Profile PR Campaigns Executed</strong> &mdash; Including BMW X1, BMW Mini, BMW X3, BMW X5, BMW 520d, BMW 6 Series Convertible, BMW i8, BMW Motorrad India operations, BMW Financial Services, BMW Navigation Professional, and BMW Plant Chennai 10,000th Car milestone &mdash; each generating front-page and primetime national coverage.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>500+ National &amp; Lifestyle Media Placements</strong> &mdash; Consistent editorial placements across India\'s top automotive, business, and lifestyle media titles including The Economic Times<a href=\"#fn2\"><sup>[2]</sup></a>, Business Standard<a href=\"#fn7\"><sup>[7]</sup></a>, Times of India<a href=\"#fn8\"><sup>[8]</sup></a>, Autocar India<a href=\"#fn9\"><sup>[9]</sup></a>, NDTV Auto, Hindustan Times, and Car India<a href=\"#fn3\"><sup>[3]</sup></a> &mdash; with every major launch receiving same-day coverage across platforms.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>BMW India Established as India\'s #1 Premium Auto Brand</strong> &mdash; Through sustained PR, BMW India retained market leadership in the luxury segment through its most aggressive product expansion phase, with the BMW Plant Chennai rollout of the 10,000th car<a href=\"#fn4\"><sup>[4]</sup></a> becoming a landmark national manufacturing story covered by PTI, ET, Business Standard, and all major wire services.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Elevate One Media\'s decade-long engagement with BMW India stands as one of the most comprehensive premium automotive PR partnerships in India\'s communications history. From the thrill of the BMW X1\'s Indian debut and Sachin Tendulkar unveiling the BMW i8 at Auto Expo 2014, to the intimate grandeur of the 6 Series Convertible launch at Udaipur\'s Leela Palace, every campaign was engineered to create cultural moments, not just media moments. The result: BMW India became synonymous with aspirational luxury, engineering excellence, and a premium India story.[3][5]', 'uploads/case-study/2026/05/02/539adbc9-7478-4550-a9a4-cb729b9e1206_1777720013.webp', '<p>Below are the <strong>verified mainline media coverage links</strong> your team should feature in the media gallery slider:</p> <table> <tbody> <tr> <td> <p>#</p> </td> <td> <p>Publication</p> </td> <td> <p>Story</p> </td> <td> <p>Link</p> </td> </tr> <tr> <td> <p>1</p> </td> <td> <p>Economic Times Auto</p> </td> <td> <p>BMW X5 Launched in India at ₹70.9 Lakh</p> </td> <td> <p><a href=\"https://economictimes.com/auto/2014-bmw-x5-launched-with-more-features/power/slideshow/35729104.cms\">https://economictimes.com/auto/2014-bmw-x5-launched-with-more-features/power/slideshow/35729104.cms</a></p> </td> </tr> <tr> <td> <p>2</p> </td> <td> <p>Motown India</p> </td> <td> <p>BMW Plant Chennai rolls out 10,000th car</p> </td> <td> <p><a href=\"https://www.motownindia.com/Bureau/Auto-Industry/663/BMW-India-facility-rolls-out-the-10000th-car\">https://www.motownindia.com/Bureau/Auto-Industry/663/BMW-India-facility-rolls-out-the-10000th-car</a></p> </td> </tr> <tr> <td> <p>3</p> </td> <td> <p>CarWale</p> </td> <td> <p>BMW Group launches BMW Financial Services in India</p> </td> <td> <p><a href=\"https://www.carwale.com/hi/news/bmw-group-launches-bmw-financial-services-in-india/\">https://www.carwale.com/hi/news/bmw-group-launches-bmw-financial-services-in-india/</a></p> </td> </tr> <tr> <td> <p>4</p> </td> <td> <p>Car India</p> </td> <td> <p>BMW 6 Series Convertible launched in Udaipur</p> </td> <td> <p><a href=\"https://carindia.in/bmw-6-series-launched/\">https://carindia.in/bmw-6-series-launched/</a></p> </td> </tr> <tr> <td> <p>5</p> </td> <td> <p>Autocar India</p> </td> <td> <p>BMW Motorrad commences India operations</p> </td> <td> <p><a href=\"https://www.autocarindia.com/bike-news/bmw-motorrad-404646\">https://www.autocarindia.com/bike-news/bmw-motorrad-404646</a></p> </td> </tr> <tr> <td> <p>6</p> </td> <td> <p>Autocar India / CNBC</p> </td> <td> <p>BMW i8 showcased, 3 Series GT launched at Auto Expo 2014</p> </td> <td> <p><a href=\"https://www.autocarindia.com/car-news/bmw-3gt-371723\">https://www.autocarindia.com/car-news/bmw-3gt-371723</a></p> </td> </tr> <tr> <td> <p>7</p> </td> <td> <p>BMW Press India</p> </td> <td> <p>BMW 520d launched in India</p> </td> <td> <p><a href=\"https://www.press.bmwgroup.com/india/article/detail/T0367733EN/the-new-bmw-520d-launched-in-india\">https://www.press.bmwgroup.com/india/article/detail/T0367733EN/the-new-bmw-520d-launched-in-india</a></p> </td> </tr> <tr> <td> <p>8</p> </td> <td> <p>BMW Press India</p> </td> <td> <p>BMW Financial Services India</p> </td> <td> <p><a href=\"https://www.press.bmwgroup.com/india/article/detail/T0367768EN/bmw-group-launches-bmw-financial-services-in-india\">https://www.press.bmwgroup.com/india/article/detail/T0367768EN/bmw-group-launches-bmw-financial-services-in-india</a></p> </td> </tr> <tr> <td> <p>9</p> </td> <td> <p>ZigWheels</p> </td> <td> <p>BMW Navigation Professional India</p> </td> <td> <p><a href=\"https://www.zigwheels.com/news-features/news/the-bmw-navigation-professional/7008/\">https://www.zigwheels.com/news-features/news/the-bmw-navigation-professional/7008/</a></p> </td> </tr> <tr> <td> <p>10</p> </td> <td> <p>MotorBeam</p> </td> <td> <p>2012 BMW X3 Launched in India</p> </td> <td> <p><a href=\"https://www.motorbeam.com/2012-bmw-x3-launched-in-india/\">https://www.motorbeam.com/2012-bmw-x3-launched-in-india/</a></p> </td> </tr> </tbody> </table>', 'Pan-India PR & Media Relations', 1, '2026-05-02 05:36:59', '2026-05-02 05:36:59', NULL, 'uploads/case-study/2026/05/02/915a256e-4b6c-49f6-bc9a-b96cb2c6727f_1777720017.webp', NULL, 'uploads/case-study/2026/05/02/400c8323-9373-44ef-b918-2de4c0487f06_1777720018.webp');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_media`
--

CREATE TABLE `case_study_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_study_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_study_media`
--

INSERT INTO `case_study_media` (`id`, `case_study_id`, `image`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 1, '1775715558_69d744e6eda68.jpg', 1, '2026-04-09 00:49:19', '2026-04-09 00:49:19'),
(2, 1, '1775715559_69d744e70318f.jpg', 2, '2026-04-09 00:49:19', '2026-04-09 00:49:19'),
(3, 1, '1775715559_69d744e7041a1.jpg', 3, '2026-04-09 00:49:19', '2026-04-09 00:49:19'),
(4, 1, '1775715559_69d744e705399.jpg', 4, '2026-04-09 00:49:19', '2026-04-09 00:49:19'),
(5, 1, '1775715559_69d744e705f85.jpg', 5, '2026-04-09 00:49:19', '2026-04-09 00:49:19'),
(6, 2, 'uploads/case-study-gallery/2026/05/02/49738af3-01b2-4eb7-9887-0570f0efa658_1777713132.webp', 1, '2026-05-02 03:42:13', '2026-05-02 03:42:13'),
(7, 2, 'uploads/case-study-gallery/2026/05/02/d0879a0e-811a-487e-98e6-ae9723ff3ae6_1777713133.webp', 2, '2026-05-02 03:42:13', '2026-05-02 03:42:13'),
(8, 3, 'uploads/case-study-gallery/2026/05/02/cff2d8bd-ad51-4b8a-8475-1d25facf79b5_1777720019.webp', 1, '2026-05-02 05:37:00', '2026-05-02 05:37:00'),
(9, 3, 'uploads/case-study-gallery/2026/05/02/d51dfac0-b0c4-4ad4-aff5-34705ac7835f_1777720020.webp', 2, '2026-05-02 05:37:00', '2026-05-02 05:37:00'),
(10, 3, 'uploads/case-study-gallery/2026/05/02/db127e7c-5761-4aee-b26a-462f4ec5fe03_1777720020.webp', 3, '2026-05-02 05:37:00', '2026-05-02 05:37:00'),
(11, 3, 'uploads/case-study-gallery/2026/05/02/e9294f80-c6c6-4645-8fcb-0d086b76a596_1777720020.webp', 4, '2026-05-02 05:37:02', '2026-05-02 05:37:02'),
(12, 3, 'uploads/case-study-gallery/2026/05/02/2c633609-d455-4a44-aa3f-66d60d421c39_1777720022.webp', 5, '2026-05-02 05:37:04', '2026-05-02 05:37:04'),
(13, 3, 'uploads/case-study-gallery/2026/05/02/fb236fd7-cfde-400b-9db6-a60fae8ced66_1777720024.webp', 6, '2026-05-02 05:37:05', '2026-05-02 05:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_status` enum('pending','sent','failed','retrying') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `email_attempts` tinyint(4) NOT NULL DEFAULT '0',
  `email_last_error` text COLLATE utf8mb4_unicode_ci,
  `email_sent_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `phone`, `email`, `company_name`, `message`, `email_status`, `email_attempts`, `email_last_error`, `email_sent_at`, `created_at`, `updated_at`) VALUES
(1, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'mirashka', 'test', 'sent', 1, NULL, '2026-04-08 10:25:21', '2026-04-08 10:17:18', '2026-04-08 10:25:21'),
(2, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'mirashka', 'test12', 'sent', 1, NULL, '2026-04-09 06:57:59', '2026-04-08 10:28:37', '2026-04-09 06:57:59'),
(3, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'mirashka', 'test', 'sent', 1, NULL, '2026-04-10 15:29:24', '2026-04-10 15:29:19', '2026-04-10 15:29:24'),
(4, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'test', 'test', 'pending', 0, NULL, NULL, '2026-04-13 03:42:55', '2026-04-13 03:42:55'),
(5, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'mirashka', 'test', 'sent', 1, NULL, '2026-04-13 03:46:20', '2026-04-13 03:46:07', '2026-04-13 03:46:20'),
(6, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'mirashka', 'test', 'sent', 1, NULL, '2026-04-13 03:46:25', '2026-04-13 03:46:20', '2026-04-13 03:46:25'),
(7, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'mirashka', 'test', 'sent', 1, NULL, '2026-04-13 03:48:25', '2026-04-13 03:48:20', '2026-04-13 03:48:25'),
(8, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'mirashka', 'test', 'sent', 1, NULL, '2026-04-16 07:38:08', '2026-04-16 07:37:54', '2026-04-16 07:38:08'),
(9, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'mirashka', 'test', 'sent', 1, NULL, '2026-04-16 07:38:18', '2026-04-16 07:38:09', '2026-04-16 07:38:18'),
(10, 'Pawan Kumar', '07992373163', 'pawan@mirashka.com', 'Testing Server 2', 'test done', 'sent', 1, NULL, '2026-04-17 04:07:20', '2026-04-17 04:07:16', '2026-04-17 04:07:20'),
(11, 'vijay kumar', '08923005483', 'vijayraaz2621@gmail.com', 'Mirashka', 's', 'sent', 1, NULL, '2026-04-24 04:44:21', '2026-04-24 04:44:17', '2026-04-24 04:44:21'),
(12, 'vijay kumar', '08923005483', 'vijayraaz2621@gmail.com', 'Mirashka', 'test', 'sent', 1, NULL, '2026-05-04 06:02:06', '2026-05-04 06:02:02', '2026-05-04 06:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `email_logs`
--

CREATE TABLE `email_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead_id` bigint(20) UNSIGNED NOT NULL,
  `to_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('sent','failed','retrying') COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempt` tinyint(4) NOT NULL DEFAULT '1',
  `error_message` text COLLATE utf8mb4_unicode_ci,
  `sent_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_logs`
--

INSERT INTO `email_logs` (`id`, `lead_type`, `lead_id`, `to_email`, `subject`, `template`, `status`, `attempt`, `error_message`, `sent_at`, `created_at`, `updated_at`) VALUES
(1, 'ContactForm', 1, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-08 10:25:21', '2026-04-08 10:25:21', '2026-04-08 10:25:21'),
(2, 'ContactForm', 2, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-09 06:57:59', '2026-04-09 06:57:59', '2026-04-09 06:57:59'),
(3, 'WebinarRegistration', 1, 'pawan@mirashka.com', 'Webinar Registration Confirmed - The CXO Influence Blueprint: Building Authority in the Age of AI & Media', 'webinar-confirmation', 'sent', 1, NULL, '2026-04-09 06:57:59', '2026-04-09 06:57:59', '2026-04-09 06:57:59'),
(4, 'ContactForm', 3, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-10 15:29:23', '2026-04-10 15:29:23', '2026-04-10 15:29:23'),
(5, 'ContactForm', 5, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-13 03:46:20', '2026-04-13 03:46:20', '2026-04-13 03:46:20'),
(6, 'ContactForm', 6, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-13 03:46:25', '2026-04-13 03:46:25', '2026-04-13 03:46:25'),
(7, 'ContactForm', 7, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-13 03:48:25', '2026-04-13 03:48:25', '2026-04-13 03:48:25'),
(8, 'ContactForm', 8, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-16 07:38:08', '2026-04-16 07:38:08', '2026-04-16 07:38:08'),
(9, 'ContactForm', 9, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-16 07:38:18', '2026-04-16 07:38:18', '2026-04-16 07:38:18'),
(10, 'ContactForm', 10, 'pawan@mirashka.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-17 04:07:20', '2026-04-17 04:07:20', '2026-04-17 04:07:20'),
(11, 'ContactForm', 11, 'vijayraaz2621@gmail.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-04-24 04:44:21', '2026-04-24 04:44:21', '2026-04-24 04:44:21'),
(12, 'ContactForm', 12, 'vijayraaz2621@gmail.com', 'Thank you for contacting us', 'contact-user', 'sent', 1, NULL, '2026-05-04 06:02:06', '2026-05-04 06:02:06', '2026-05-04 06:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'c4d63b70-a288-42b3-8f75-4e66fcfd1cff', 'database', 'image-optimization', '{\"uuid\":\"c4d63b70-a288-42b3-8f75-4e66fcfd1cff\",\"displayName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":3,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":\"60\",\"timeout\":120,\"retryUntil\":1775734057,\"data\":{\"commandName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"command\":\"O:25:\\\"App\\\\Jobs\\\\OptimizeImageJob\\\":2:{s:7:\\\"imageId\\\";i:2;s:5:\\\"queue\\\";s:18:\\\"image-optimization\\\";}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\OptimizeImageJob has been attempted too many times. in C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\MaxAttemptsExceededException.php:24\nStack trace:\n#0 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(785): Illuminate\\Queue\\MaxAttemptsExceededException::forJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(519): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#2 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)\n#3 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'image-optimizat...\', Object(Illuminate\\Queue\\WorkerOptions))\n#6 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'image-optimizat...\')\n#7 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#8 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#13 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#15 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(1106): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\xampp\\htdocs\\elevateonemedia\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2026-04-09 06:17:12'),
(2, '20209532-aa05-423a-86dd-82a7bb1f11d3', 'database', 'image-optimization', '{\"uuid\":\"20209532-aa05-423a-86dd-82a7bb1f11d3\",\"displayName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":3,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":\"60\",\"timeout\":120,\"retryUntil\":1775734071,\"data\":{\"commandName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"command\":\"O:25:\\\"App\\\\Jobs\\\\OptimizeImageJob\\\":2:{s:7:\\\"imageId\\\";i:3;s:5:\\\"queue\\\";s:18:\\\"image-optimization\\\";}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\OptimizeImageJob has been attempted too many times. in C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\MaxAttemptsExceededException.php:24\nStack trace:\n#0 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(785): Illuminate\\Queue\\MaxAttemptsExceededException::forJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(519): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#2 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)\n#3 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'image-optimizat...\', Object(Illuminate\\Queue\\WorkerOptions))\n#6 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'image-optimizat...\')\n#7 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#8 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#13 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#15 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(1106): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\xampp\\htdocs\\elevateonemedia\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2026-04-09 06:17:12'),
(3, 'dfdfcfe7-7996-48f4-b564-861f665ae4fc', 'database', 'image-optimization', '{\"uuid\":\"dfdfcfe7-7996-48f4-b564-861f665ae4fc\",\"displayName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":3,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":\"60\",\"timeout\":120,\"retryUntil\":1775734165,\"data\":{\"commandName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"command\":\"O:25:\\\"App\\\\Jobs\\\\OptimizeImageJob\\\":2:{s:7:\\\"imageId\\\";i:4;s:5:\\\"queue\\\";s:18:\\\"image-optimization\\\";}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\OptimizeImageJob has been attempted too many times. in C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\MaxAttemptsExceededException.php:24\nStack trace:\n#0 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(785): Illuminate\\Queue\\MaxAttemptsExceededException::forJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(519): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#2 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)\n#3 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'image-optimizat...\', Object(Illuminate\\Queue\\WorkerOptions))\n#6 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'image-optimizat...\')\n#7 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#8 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#13 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#15 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(1106): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\xampp\\htdocs\\elevateonemedia\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\xampp\\htdocs\\elevateonemedia\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2026-04-09 06:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `image_optimizations`
--

CREATE TABLE `image_optimizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `original_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Original image path relative to storage',
  `optimized_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Optimized WebP path',
  `thumbnail_300` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '300px thumbnail path',
  `thumbnail_600` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '600px thumbnail path',
  `thumbnail_1200` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1200px thumbnail path',
  `original_size` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Original file size in bytes',
  `optimized_size` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Optimized file size in bytes',
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` int(10) UNSIGNED DEFAULT NULL,
  `height` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('pending','processing','completed','failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `error_message` text COLLATE utf8mb4_unicode_ci,
  `optimizable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optimizable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_optimizations`
--

INSERT INTO `image_optimizations` (`id`, `original_path`, `optimized_path`, `thumbnail_300`, `thumbnail_600`, `thumbnail_1200`, `original_size`, `optimized_size`, `mime_type`, `width`, `height`, `status`, `error_message`, `optimizable_type`, `optimizable_id`, `created_at`, `updated_at`) VALUES
(7, 'uploads/banners/2026/04/09/496684f0-ba73-4372-aa8e-8a4c60112b5c_1775734386.jpg', 'uploads/banners/2026/04/09/optimized/496684f0-ba73-4372-aa8e-8a4c60112b5c_1775734386.webp', 'uploads/banners/2026/04/09/optimized/496684f0-ba73-4372-aa8e-8a4c60112b5c_1775734386_w300.webp', 'uploads/banners/2026/04/09/optimized/496684f0-ba73-4372-aa8e-8a4c60112b5c_1775734386_w600.webp', NULL, 1351512, 221838, 'image/png', 1200, 1536, 'completed', NULL, 'App\\Models\\Banner', 3, '2026-04-09 06:03:07', '2026-04-09 06:17:13'),
(14, 'uploads/case-study/2026/04/09/b36b7bfe-ce7f-476f-b1a4-aa2e234050da_1775734714.jpg', 'uploads/case-study/2026/04/09/optimized/b36b7bfe-ce7f-476f-b1a4-aa2e234050da_1775734714.webp', 'uploads/case-study/2026/04/09/optimized/b36b7bfe-ce7f-476f-b1a4-aa2e234050da_1775734714_w300.webp', 'uploads/case-study/2026/04/09/optimized/b36b7bfe-ce7f-476f-b1a4-aa2e234050da_1775734714_w600.webp', NULL, 235178, 220586, 'image/jpeg', 1200, 1072, 'completed', NULL, 'App\\Models\\CaseStudy', 1, '2026-04-09 06:08:35', '2026-04-09 06:17:14'),
(15, 'uploads/case-study/2026/04/09/6e2fafdc-94b3-4493-a06d-c1d42ca94098_1775734715.jpg', 'uploads/case-study/2026/04/09/optimized/6e2fafdc-94b3-4493-a06d-c1d42ca94098_1775734715.webp', 'uploads/case-study/2026/04/09/optimized/6e2fafdc-94b3-4493-a06d-c1d42ca94098_1775734715_w300.webp', 'uploads/case-study/2026/04/09/optimized/6e2fafdc-94b3-4493-a06d-c1d42ca94098_1775734715_w600.webp', NULL, 110147, 120724, 'image/jpeg', 1200, 869, 'completed', NULL, 'App\\Models\\CaseStudy', 1, '2026-04-09 06:08:35', '2026-04-09 06:17:15'),
(16, 'uploads/case-study/2026/04/09/ec09c576-cb7c-4e5a-bb1f-dcf2c051ec40_1775734715.jpg', 'uploads/case-study/2026/04/09/optimized/ec09c576-cb7c-4e5a-bb1f-dcf2c051ec40_1775734715.webp', 'uploads/case-study/2026/04/09/optimized/ec09c576-cb7c-4e5a-bb1f-dcf2c051ec40_1775734715_w300.webp', 'uploads/case-study/2026/04/09/optimized/ec09c576-cb7c-4e5a-bb1f-dcf2c051ec40_1775734715_w600.webp', NULL, 140716, 63724, 'image/jpeg', 883, 592, 'completed', NULL, 'App\\Models\\CaseStudy', 1, '2026-04-09 06:08:35', '2026-04-09 06:17:16'),
(17, 'uploads/case-study/2026/04/09/b93d543c-377e-40b1-acf2-bfdcc51ca24e_1775734715.jpg', 'uploads/case-study/2026/04/09/optimized/b93d543c-377e-40b1-acf2-bfdcc51ca24e_1775734715.webp', 'uploads/case-study/2026/04/09/optimized/b93d543c-377e-40b1-acf2-bfdcc51ca24e_1775734715_w300.webp', 'uploads/case-study/2026/04/09/optimized/b93d543c-377e-40b1-acf2-bfdcc51ca24e_1775734715_w600.webp', NULL, 77075, 109476, 'image/jpeg', 883, 592, 'completed', NULL, 'App\\Models\\CaseStudy', 1, '2026-04-09 06:08:35', '2026-04-09 06:17:16'),
(19, 'uploads/case-study/2026/04/09/f65dd38e-8d68-4a0a-bd4d-efc684c4fbbc_1775734855.jpg', 'uploads/case-study/2026/04/09/optimized/f65dd38e-8d68-4a0a-bd4d-efc684c4fbbc_1775734855.webp', 'uploads/case-study/2026/04/09/optimized/f65dd38e-8d68-4a0a-bd4d-efc684c4fbbc_1775734855_w300.webp', 'uploads/case-study/2026/04/09/optimized/f65dd38e-8d68-4a0a-bd4d-efc684c4fbbc_1775734855_w600.webp', NULL, 94431, 114106, 'image/jpeg', 1200, 805, 'completed', NULL, 'App\\Models\\CaseStudy', 1, '2026-04-09 06:10:55', '2026-04-09 06:17:17'),
(20, 'uploads/podcast/2026/04/09/14fd09bc-cd58-425d-b2e7-6f2ae4057287_1775735646.png', NULL, NULL, NULL, NULL, 1714464, NULL, 'image/png', NULL, NULL, 'pending', NULL, 'App\\Models\\Podcast', 1, '2026-04-09 06:24:06', '2026-04-09 06:24:06'),
(21, 'uploads/webinar/2026/04/09/8104ce12-6057-409b-aa71-61fa9124e029_1775735742.png', NULL, NULL, NULL, NULL, 1351512, NULL, 'image/png', NULL, NULL, 'pending', NULL, 'App\\Models\\webinar', 1, '2026-04-09 06:25:42', '2026-04-09 06:25:42'),
(22, 'uploads/banners/2026/04/09/a527f403-d023-4dbf-a8e1-b07da330f019_1775735843.png', NULL, NULL, NULL, NULL, 1351512, NULL, 'image/png', NULL, NULL, 'pending', NULL, 'App\\Models\\Banner', 2, '2026-04-09 06:27:23', '2026-04-09 06:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(3, 'default', '{\"uuid\":\"2c96980b-9456-4c23-825a-bea906fa0c78\",\"displayName\":\"App\\\\Mail\\\\AdminContactMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:25:\\\"App\\\\Mail\\\\AdminContactMail\\\":3:{s:7:\\\"contact\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:22:\\\"App\\\\Models\\\\ContactForm\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:25:\\\"elevateonemedia@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1775663721, 1775663721),
(42, 'image-optimization', '{\"uuid\":\"045888d9-0f4e-462a-ae7c-c64f44750131\",\"displayName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":3,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":\"60\",\"timeout\":120,\"retryUntil\":1775739246,\"data\":{\"commandName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"command\":\"O:25:\\\"App\\\\Jobs\\\\OptimizeImageJob\\\":2:{s:7:\\\"imageId\\\";i:20;s:5:\\\"queue\\\";s:18:\\\"image-optimization\\\";}\"}}', 0, NULL, 1775735646, 1775735646),
(43, 'image-optimization', '{\"uuid\":\"fe65b6ec-4ed0-4d39-9b7e-394f36463593\",\"displayName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":3,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":\"60\",\"timeout\":120,\"retryUntil\":1775739342,\"data\":{\"commandName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"command\":\"O:25:\\\"App\\\\Jobs\\\\OptimizeImageJob\\\":2:{s:7:\\\"imageId\\\";i:21;s:5:\\\"queue\\\";s:18:\\\"image-optimization\\\";}\"}}', 0, NULL, 1775735742, 1775735742),
(44, 'image-optimization', '{\"uuid\":\"fc881644-8e23-4658-94eb-524b19bfd6ee\",\"displayName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":3,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":\"60\",\"timeout\":120,\"retryUntil\":1775739443,\"data\":{\"commandName\":\"App\\\\Jobs\\\\OptimizeImageJob\",\"command\":\"O:25:\\\"App\\\\Jobs\\\\OptimizeImageJob\\\":2:{s:7:\\\"imageId\\\";i:22;s:5:\\\"queue\\\";s:18:\\\"image-optimization\\\";}\"}}', 0, NULL, 1775735843, 1775735843),
(45, 'default', '{\"uuid\":\"21ec69dd-e2ff-4753-a646-319d1776dac5\",\"displayName\":\"App\\\\Mail\\\\UserContactMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:24:\\\"App\\\\Mail\\\\UserContactMail\\\":3:{s:7:\\\"contact\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:22:\\\"App\\\\Models\\\\ContactForm\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"pawan@mirashka.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1775737679, 1775737679),
(46, 'default', '{\"uuid\":\"f1c947f1-35cf-4e2a-bb84-5afb732239c8\",\"displayName\":\"App\\\\Mail\\\\AdminContactMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:25:\\\"App\\\\Mail\\\\AdminContactMail\\\":3:{s:7:\\\"contact\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:22:\\\"App\\\\Models\\\\ContactForm\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:25:\\\"elevateonemedia@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1775737679, 1775737679),
(47, 'default', '{\"uuid\":\"76109832-7e67-4ca3-a6ca-f25d0f11d9e7\",\"displayName\":\"App\\\\Mail\\\\WebinarConfirmationMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:32:\\\"App\\\\Mail\\\\WebinarConfirmationMail\\\":3:{s:12:\\\"registration\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:30:\\\"App\\\\Models\\\\WebinarRegistration\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:1:{i:0;s:7:\\\"webinar\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"pawan@mirashka.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1775737679, 1775737679),
(48, 'default', '{\"uuid\":\"2d6ff2fd-371c-4b7d-8157-aa28db64b15d\",\"displayName\":\"App\\\\Mail\\\\WebinarAdminNotificationMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:37:\\\"App\\\\Mail\\\\WebinarAdminNotificationMail\\\":3:{s:12:\\\"registration\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:30:\\\"App\\\\Models\\\\WebinarRegistration\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:1:{i:0;s:7:\\\"webinar\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:25:\\\"elevateonemedia@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1775737679, 1775737679);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_01_01_000001_create_users_table', 1),
(5, '2026_01_30_065916_create_contact_forms_table', 1),
(6, '2026_01_30_070813_create_podcast_table', 1),
(7, '2026_01_30_071810_create_banners_table', 1),
(8, '2026_01_30_072150_create_webinars_table', 1),
(9, '2026_01_30_074106_update_webinars_table', 1),
(10, '2026_01_30_074211_update_contact_forms_table', 1),
(11, '2026_01_30_074248_update_banners_table', 1),
(12, '2026_01_30_074319_update_podcast_table', 1),
(13, '2026_02_04_101334_add_sub_heading_to_banners_table', 1),
(14, '2026_02_04_112652_add_status_to_banners_table', 1),
(15, '2026_02_05_123404_create_jobs_table', 1),
(16, '2026_02_06_090543_create_roles_table', 1),
(17, '2026_02_06_090728_add_role_status_fields_to_users_table', 1),
(18, '2026_03_11_062606_create_case_studies_table', 1),
(19, '2026_03_11_171558_change_media_coverage_column_in_case_studies_table', 1),
(20, '2026_03_12_110009_add_extra_images_to_case_studies_table', 1),
(21, '2026_03_18_114517_create_teams_table', 1),
(22, '2026_03_18_114519_create_team_social_links_table', 1),
(23, '2026_03_18_114522_create_team_visions_table', 1),
(24, '2026_03_18_114524_create_team_achievements_table', 1),
(25, '2026_03_18_115221_create_team_galleries_table', 1),
(26, '2026_03_18_133432_add_status_to_teams_table', 1),
(27, '2026_03_19_115433_add_slug_to_teams_table', 1),
(28, '2026_04_02_120000_add_performance_indexes', 1),
(29, '2026_04_06_000001_upgrade_webinars_table', 1),
(30, '2026_04_06_000002_create_webinar_registrations_table', 1),
(31, '2026_04_06_000003_add_webinar_details_columns', 1),
(32, '2026_04_07_000001_add_email_status_to_contact_forms_table', 1),
(33, '2026_04_07_000002_add_email_status_to_webinar_registrations_table', 1),
(34, '2026_04_07_000003_create_email_logs_table', 1),
(35, '2026_04_08_000001_add_status_to_podcast_table', 1),
(36, '2026_04_08_000002_add_social_fields_to_users_table', 1),
(37, '2026_04_08_000003_add_user_fields_to_users_table', 1),
(38, '2026_04_08_000004_add_soft_deletes_to_users_table', 1),
(39, '2026_04_08_000005_create_case_study_media_table', 1),
(40, '2026_04_08_000006_add_position_to_teams_table', 1),
(41, '2026_04_09_000001_create_image_optimizations_table', 2),
(42, '2026_04_09_000002_add_optimizable_columns_to_image_optimizations_table', 3),
(43, '2024_01_01_000001_create_career_jobs_table', 4),
(44, '2024_01_01_000002_create_career_applications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('pawankumar.devop@gmail.com', '$2y$12$R/4knhAJUr9DzauLQ.8oMeaNouwJbnaPV46nP7m.smYnzee32GCQS', '2026-04-16 05:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id`, `tittle`, `description`, `publish_date`, `image`, `audio`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Voice of Leadership: Inside the Minds of India’s Top CXOs', 'A premium podcast series where industry leaders share insights on leadership, media presence, business growth, and building authority in a competitive world.', '2026-04-09', 'uploads/podcast/2026/04/09/14fd09bc-cd58-425d-b2e7-6f2ae4057287_1775735646.png', '1775722792_1770188120_file_example_MP3_700KB (1).mp3', 'active', '2026-04-09 02:49:52', '2026-04-09 06:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2026-04-08 07:34:09', '2026-04-08 07:34:09'),
(2, 'user', 'User', '2026-04-08 07:34:09', '2026-04-08 07:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `contact_cta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `slug`, `designation`, `image`, `short_tagline`, `description`, `contact_cta_link`, `created_at`, `updated_at`, `status`, `position`) VALUES
(21, 'Manoj Barman', 'manoj-barman', 'Founder & Managing Director', 'uploads/team/2026/05/02/1c411a3c-0f1c-4f5e-98db-bb44f5b7cd2e_1777707019.webp', 'Vision-led leadership. Reputation-driven growth', 'Manoj Barman is the driving force behind the organization, bringing a sharp strategic vision and a deep understanding of reputation-led communication. As Founder & Managing Director, he has built the firm on the principles of credibility, insight, and long-term value creation. With a strong focus on aligning communication with business objectives, Manoj has led the company to deliver impactful narratives that resonate with stakeholders across industries. His leadership reflects a balance of entrepreneurial agility and structured thinking, enabling the organization to navigate evolving media landscapes with confidence and precision.', NULL, '2026-03-27 01:06:02', '2026-05-02 02:00:21', 1, 1),
(22, 'Divya Barman', 'divya-barman', 'Director – PR & Media', 'uploads/team/2026/04/09/divya-burman.png', 'Strategic PR. Market Influence. Reputation That Moves Business.', 'Divya Burman is a visionary leader in the PR and media landscape with over 15 years of industry expertise. As Director – PR & Media, she leads strategic communication, high-level client acquisition, and media relations with a focus on building powerful, market-moving brand reputations.\r\n\r\nSince beginning her leadership journey in 2009, Divya has successfully managed complex PR operations and led high-performance media relations teams across diverse sectors. Her strength lies in combining strategic thinking with execution excellence—ensuring that every campaign not only enhances brand visibility but also aligns with core business objectives.', NULL, '2026-03-27 01:18:46', '2026-04-09 06:40:03', 1, 4),
(23, 'Ritu Bhardwaj', 'ritu-bhardwaj', 'Director – Content', 'uploads/team/2026/04/09/42f57e68-00da-4063-a076-5abc4a052513_1775736789.webp', 'Crafting stories that connect', 'Ritu Bhardwaj leads the content function with a strong emphasis on strategic storytelling and narrative depth. As Director – Content, she is responsible for shaping compelling communication frameworks that align brand messaging with business objectives. Her expertise lies in transforming complex ideas into clear, engaging, and impactful content that resonates with diverse audiences. With a keen eye for detail and consistency, she ensures that every piece of communication reflects the brand’s voice, purpose, and positioning across platforms.', NULL, '2026-03-27 01:47:23', '2026-04-09 06:43:09', 1, 3),
(24, 'Neeraj Pandey', 'neeraj-pandey', 'Director – Media', 'uploads/team/2026/04/09/83b8ef08-bdc8-4d5e-9b68-53e6128a9459_1775736757.webp', 'Strategic reach. Meaningful visibility.', 'Neeraj Pandey leads the media function with a strong focus on strategic outreach, media planning, and relationship management. As Director – Media, he plays a critical role in ensuring that brand stories reach the right platforms, audiences, and moments for maximum impact. With a deep understanding of the media landscape, he specializes in identifying high-value opportunities that enhance visibility and credibility. His approach is rooted in precision, timing, and alignment with broader communication objectives, enabling consistent and meaningful media presence for clients.', NULL, '2026-03-27 01:49:43', '2026-04-09 06:42:38', 1, 5),
(25, 'Rishabh', 'rishabh', 'Director – Strategy', 'uploads/team/2026/04/09/d719c9dc-b4a9-4cf1-b23d-73129b9e1480_1775736725.webp', 'Enterprise Growth. Strategic Clarity. Measurable Impact', 'Rishabh Mishra is an enterprise growth leader and transformation strategist with over 15+ years of experience across Microsoft, PwC, and Blue Prism. He operates at the intersection of enterprise growth, go-to-market strategy, and business transformation, helping organizations bring clarity before they invest in change.\r\n\r\nOver the years, Rishabh has observed a consistent gap—organizations investing in automation, technology, and change without fully understanding their internal readiness, alignment, or actual need. His work focuses on bridging that gap through structured thinking and diagnostic-led strategy.\r\n\r\nHis approach combines deep industry understanding with data-backed insights to help organizations identify real problem areas, avoid premature or misaligned transformation, and drive outcome-focused growth.', NULL, '2026-03-27 01:58:41', '2026-04-09 06:42:06', 1, 2),
(27, 'Tulika', 'tulika', 'Vice President – Events', 'uploads/team/2026/04/09/c36d2d58-fffb-4645-ba1e-0e9d04abb813_1775736696.webp', 'Creating experiences that resonate.', 'Tulika leads the events function with a strong focus on creating impactful and experience-driven brand engagements. As Vice President – Events, she specializes in conceptualizing and executing events that go beyond logistics to deliver meaningful brand interactions. Her expertise lies in translating communication objectives into immersive experiences that connect with audiences and leave a lasting impression. With a keen eye for detail and execution excellence, she ensures that every event aligns with the brand’s narrative, positioning, and overall communication strategy.', NULL, '2026-03-27 02:01:58', '2026-04-09 06:41:36', 1, 6),
(28, 'Ayush', 'ayush', 'Business Development Lead', 'uploads/team/2026/04/09/0ba3d202-454c-444f-ae17-d0b4be6096aa_1775736670.webp', 'Driving growth through relationships.', 'Ayush leads the business development function with a strong focus on growth, client relationships, and strategic partnerships. As Business Development Lead, he is responsible for identifying new opportunities, building meaningful connections, and expanding the organization’s market presence. His approach is centered on understanding client needs and aligning them with the firm’s capabilities to deliver value-driven solutions. With a proactive and relationship-oriented mindset, he plays a key role in driving sustainable growth and strengthening the company’s business pipeline.', NULL, '2026-03-27 02:03:40', '2026-04-09 06:41:10', 1, 8),
(29, 'Akansha Ohri', 'akansha-ohri', 'Senior Account Manager', 'uploads/team/2026/04/09/akansha.png', 'Strategic Relationships. Media Impact. Growth That Converts', 'Akansha Ohri is a seasoned PR professional with over 8 years of experience in driving high-impact media campaigns and building strong, long-term client relationships. As Senior Account Manager, she plays a critical role in managing strategic accounts, strengthening media presence, and identifying growth opportunities for brands and leadership profiles.\r\n\r\nHer expertise lies in strategic media relations and business development, where she combines market understanding with execution precision to deliver measurable visibility and brand authority. She has consistently worked with CXOs and corporate brands to enhance their positioning through well-crafted narratives and targeted media outreach.\r\n\r\nAt Elevate One Media, Akansha leads cross-functional coordination to ensure that communication strategies are not only creatively strong but also aligned with business objectives—driving both reputation and results.', NULL, '2026-03-27 02:06:32', '2026-05-01 01:42:35', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `team_achievements`
--

CREATE TABLE `team_achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_galleries`
--

CREATE TABLE `team_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_galleries`
--

INSERT INTO `team_galleries` (`id`, `team_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 21, 'uploads/team-gallery/2026/04/13/c3cb03d9-5c04-4698-bf10-6b4bd733d35e_1776063251.webp', '2026-04-13 01:24:13', '2026-04-13 01:24:13'),
(2, 21, 'uploads/team-gallery/2026/04/13/c76f3276-683d-4819-a11b-0ee73c7c7339_1776063253.webp', '2026-04-13 01:24:13', '2026-04-13 01:24:13'),
(3, 21, 'uploads/team-gallery/2026/04/13/967fe5f3-d78b-44b5-917d-4829e787d18b_1776063253.webp', '2026-04-13 01:24:13', '2026-04-13 01:24:13'),
(4, 21, 'uploads/team-gallery/2026/04/13/03c82a0b-5f16-464c-aa51-bcdf9c0e678e_1776063253.webp', '2026-04-13 01:24:13', '2026-04-13 01:24:13'),
(5, 21, 'uploads/team-gallery/2026/04/13/b3b6c890-a715-4213-bf1d-2b003fa3fc78_1776063253.webp', '2026-04-13 01:24:14', '2026-04-13 01:24:14'),
(6, 27, 'uploads/team-gallery/2026/04/13/e259faf2-515b-4a2f-8cab-e286c764ebc9_1776063847.webp', '2026-04-13 01:34:08', '2026-04-13 01:34:08'),
(7, 27, 'uploads/team-gallery/2026/04/13/171d72a1-c000-483e-b5b4-a052222c8417_1776063848.webp', '2026-04-13 01:34:08', '2026-04-13 01:34:08'),
(8, 27, 'uploads/team-gallery/2026/04/13/b0ebc67e-4d45-4140-bc68-e2fddac6dd02_1776063848.webp', '2026-04-13 01:34:08', '2026-04-13 01:34:08'),
(9, 27, 'uploads/team-gallery/2026/04/13/118e7fa0-68c8-4267-9952-6afd6debdc92_1776063848.webp', '2026-04-13 01:34:08', '2026-04-13 01:34:08'),
(10, 27, 'uploads/team-gallery/2026/04/13/fa656a30-1654-434c-88cd-ddace294c259_1776063848.webp', '2026-04-13 01:34:08', '2026-04-13 01:34:08'),
(11, 27, 'uploads/team-gallery/2026/04/13/8c115a96-d62c-4462-bc02-8f14d1dc5c6a_1776063848.webp', '2026-04-13 01:34:08', '2026-04-13 01:34:08'),
(12, 27, 'uploads/team-gallery/2026/04/13/82a1b353-8775-498d-9366-6dad317dac94_1776063849.webp', '2026-04-13 01:34:09', '2026-04-13 01:34:09'),
(13, 23, 'uploads/team-gallery/2026/04/13/5d469455-f1ff-4c51-a308-ed1a725798da_1776063872.webp', '2026-04-13 01:34:32', '2026-04-13 01:34:32'),
(14, 23, 'uploads/team-gallery/2026/04/13/5774886a-3598-4e55-85f5-c682bb3cc698_1776063872.webp', '2026-04-13 01:34:32', '2026-04-13 01:34:32'),
(15, 23, 'uploads/team-gallery/2026/04/13/c4b1cc69-60a0-4281-ad5c-46e73dd3fefa_1776063872.webp', '2026-04-13 01:34:32', '2026-04-13 01:34:32'),
(16, 23, 'uploads/team-gallery/2026/04/13/81c2947a-424c-4ef0-8d91-8dc1c6823677_1776063872.webp', '2026-04-13 01:34:32', '2026-04-13 01:34:32'),
(17, 23, 'uploads/team-gallery/2026/04/13/47b7da50-2df3-48a5-8783-095aa6c61aa6_1776063872.webp', '2026-04-13 01:34:32', '2026-04-13 01:34:32'),
(18, 28, 'uploads/team-gallery/2026/04/13/0b0fc569-5236-4f91-9945-2a48fa4ec614_1776063900.webp', '2026-04-13 01:35:00', '2026-04-13 01:35:00'),
(19, 28, 'uploads/team-gallery/2026/04/13/a40a1f66-e810-44c9-8af4-1851c49c1fdd_1776063900.webp', '2026-04-13 01:35:01', '2026-04-13 01:35:01'),
(20, 28, 'uploads/team-gallery/2026/04/13/73157728-ac57-454a-b2fd-09c12c9a1b19_1776063901.webp', '2026-04-13 01:35:01', '2026-04-13 01:35:01'),
(21, 28, 'uploads/team-gallery/2026/04/13/5b38ee9b-6ae3-414e-ad02-8160728bad10_1776063901.webp', '2026-04-13 01:35:01', '2026-04-13 01:35:01'),
(22, 28, 'uploads/team-gallery/2026/04/13/c493428d-95f7-4d26-b6bf-bc52b241cc18_1776063901.webp', '2026-04-13 01:35:01', '2026-04-13 01:35:01'),
(23, 28, 'uploads/team-gallery/2026/04/13/35707f72-3b6d-4bbb-947c-9188aa1102a5_1776063901.webp', '2026-04-13 01:35:01', '2026-04-13 01:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `team_social_links`
--

CREATE TABLE `team_social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_social_links`
--

INSERT INTO `team_social_links` (`id`, `team_id`, `facebook`, `instagram`, `linkedin`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 21, NULL, NULL, NULL, NULL, '2026-04-09 00:02:35', '2026-04-09 00:02:35'),
(2, 25, NULL, NULL, NULL, NULL, '2026-04-09 00:03:28', '2026-04-09 00:03:28'),
(3, 28, NULL, NULL, NULL, NULL, '2026-04-09 00:03:54', '2026-04-09 00:03:54'),
(4, 29, NULL, NULL, NULL, NULL, '2026-04-09 00:05:19', '2026-04-09 00:05:19'),
(5, 27, NULL, NULL, NULL, NULL, '2026-04-09 00:05:53', '2026-04-09 00:05:53'),
(6, 24, NULL, NULL, NULL, NULL, '2026-04-09 00:07:59', '2026-04-09 00:07:59'),
(7, 23, NULL, NULL, NULL, NULL, '2026-04-09 00:08:49', '2026-04-09 00:08:49'),
(8, 22, NULL, NULL, NULL, NULL, '2026-04-09 00:09:16', '2026-04-09 00:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `team_visions`
--

CREATE TABLE `team_visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_visions`
--

INSERT INTO `team_visions` (`id`, `team_id`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 21, 'uploads/team-vision/2026/04/09/f46cc3b3-ea85-412a-b42d-8e1d2a004629_1775736542.webp', 'Manoj envisions building a future-ready communications firm that goes beyond traditional public relations to become a strategic partner for brands. His focus is on shaping meaningful narratives, strengthening stakeholder trust, and ensuring that communication plays a central role in business decision-making, not just brand visibility. He is committed to fostering an organization that blends strategic thinking with creative excellence, where every communication initiative is insight-driven and outcome-focused. By continuously evolving with industry trends and stakeholder expectations, his vision is to position the firm as a trusted partner for businesses seeking long-term reputation capital and sustained growth', '2026-04-09 00:02:35', '2026-04-13 01:36:00'),
(2, 25, 'uploads/team-vision/2026/04/09/a1fd433a-96e2-4077-8e7e-488f3d39090e_1775736726.webp', 'Rishabh envisions building a strategy-first approach to growth and transformation where every decision is driven by clarity, insight, and structured thinking. His focus is on designing frameworks that not only solve immediate challenges but also create long-term alignment between business, technology, and human capabilities. By integrating research, analytics, and evolving market dynamics, he aims to enable organizations to navigate complexity with confidence. His vision is to establish clarity as the foundation of every transformation—ensuring smarter decisions, stronger execution, and measurable outcomes.', '2026-04-09 00:03:28', '2026-04-09 06:42:07'),
(3, 28, 'uploads/team-vision/2026/04/09/4b24669a-e81a-461d-ad34-c784d58fea87_1775736670.webp', NULL, '2026-04-09 00:03:54', '2026-04-09 06:41:11'),
(4, 29, 'uploads/team-vision/2026/04/09/cb0e7b35-3e55-4f9a-9fb3-9af7dc7f855b_1775736635.webp', 'Akansha envisions building a client-centric PR ecosystem where relationships, strategy, and execution come together to create meaningful and measurable brand impact. Her focus is on strengthening the connection between brands and their audiences through strategic media engagement, consistent communication, and insight-driven planning. She believes that successful PR is not just about visibility, but about creating credibility, trust, and sustained relevance in an ever-evolving media landscape. She aims to continuously refine media strategies by integrating market trends, audience behavior, and business goals—ensuring that every campaign delivers both immediate results and long-term value. At the core of her vision is the commitment to building partnerships that go beyond service delivery—fostering collaboration, trust, and shared growth with every client.', '2026-04-09 00:05:19', '2026-04-09 06:40:36'),
(5, 27, 'uploads/team-vision/2026/04/09/65165ff0-f47d-45d3-a3b1-a0bd722f14c2_1775736696.webp', 'Tulika envisions events as powerful platforms for storytelling and stakeholder engagement, where every interaction contributes to building stronger brand connections. Her focus is on designing experiences that are not only memorable but also strategically aligned with communication goals and audience expectations. She aims to evolve event strategies by integrating creativity, technology, and audience insights to deliver more immersive and impactful experiences. Her vision is to position events as a key driver of brand perception, engagement, and long-term relationship building.', '2026-04-09 00:05:53', '2026-04-09 06:41:37'),
(6, 24, 'uploads/team-vision/2026/04/09/94e7f218-b562-4458-8f46-b6978459b073_1775736758.webp', 'Neeraj envisions a media approach that goes beyond placements to create sustained influence and relevance for brands. His focus is on building strong, trust-based media relationships and leveraging them to deliver impactful storytelling that aligns with both brand and audience expectations. He aims to continuously adapt media strategies in line with evolving consumption patterns, integrating traditional media with emerging platforms. His vision is to position media not just as a channel, but as a strategic lever for shaping perception, strengthening reputation, and driving long-term brand value.', '2026-04-09 00:07:59', '2026-04-09 06:42:38'),
(7, 23, 'uploads/team-vision/2026/04/09/dec914a5-5110-4087-abe8-efadc3c00a77_1775736789.webp', 'Ritu envisions building a content ecosystem where storytelling becomes a powerful driver of brand perception and engagement. Her focus is on creating narratives that are not only creative but also rooted in strategy, ensuring they deliver measurable value and long-term impact. She aims to elevate content from a support function to a core strategic asset, integrating it seamlessly with PR, media, and brand communication efforts. Her vision is to create meaningful, insight-led content that builds credibility, fosters trust, and strengthens brand identity in an ever-evolving digital landscape.', '2026-04-09 00:08:49', '2026-04-09 06:43:09'),
(8, 22, 'uploads/team-vision/2026/04/09/723f2cc2-bcb4-4329-b4f8-bac75471b02e_1775736603.webp', 'Divya envisions redefining the role of public relations from a support function to a core strategic driver of business growth and brand authority. Her vision is to build a communication ecosystem where every narrative is intentional, every media interaction is purposeful, and every campaign contributes to long-term reputation capital. She believes that in an increasingly crowded and fast-moving media landscape, true differentiation comes not from visibility alone, but from clarity of message, consistency of positioning, and depth of influence. She aims to create integrated PR frameworks that seamlessly align storytelling with business strategy—bridging the gap between brand perception and real market impact. By combining media intelligence, audience understanding, and evolving communication trends, she focuses on building systems that are scalable, measurable, and future-ready.', '2026-04-09 00:09:16', '2026-04-09 06:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT '2',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','suspended') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `phone`, `company_name`, `email_verified_at`, `password`, `status`, `industry`, `remember_token`, `created_at`, `updated_at`, `approved_at`, `last_login_at`, `is_active`, `provider`, `provider_id`, `deleted_at`) VALUES
(2, 1, 'Admin User', 'admin', 'kartik@mirashka.com', '+91 98765 43210', 'Elevate One Media', '2026-04-08 07:35:00', '$2y$10$xNq7Od8DbDwlYo2PYP2ss.cgO9w/uz.QpQ4WiG5Io6v0HbyKZy4E6', 'approved', 'Media', NULL, '2026-04-08 07:35:01', '2026-04-08 07:35:01', '2026-04-08 07:35:01', NULL, 1, NULL, NULL, NULL),
(3, 2, 'John Doe', 'johndoe', 'user@demo.com', '+91 98765 43211', 'Tech Solutions Pvt Ltd', '2026-04-08 07:35:01', '$2y$12$PZLxygYUXJBOeJH85LVBZO7YrGaXsMo8x.Zc2d40c7pDWyDVcMTjK', 'approved', 'Technology', NULL, '2026-04-08 07:35:02', '2026-04-10 02:43:40', '2026-04-10 02:43:40', NULL, 1, NULL, NULL, NULL),
(27, 2, 'Pawan Kumar', 'admin@', 'pawankr3163@gmail.com', '07992373163', 'mirashka', NULL, '$2y$12$VSjBGh8vGx3AgO8zRIDZwe.vF3OnXYSmaWXX5lW418ZiPf2oWrUym', 'approved', NULL, NULL, '2026-04-10 15:32:14', '2026-04-13 14:24:38', NULL, NULL, 1, NULL, NULL, '2026-04-13 14:24:38'),
(28, 2, 'Pawan Kumar', 'vijayraaz2621', 'vijayraaz2621@gmail.com', '7992373163', 'mirashka', NULL, '$2y$12$nLX/glL5LmzKqAM0jX90wuXwCtsrREjDzCQgCQWY6BiMVOO93hCli', 'approved', NULL, NULL, '2026-04-16 02:08:42', '2026-04-16 02:08:42', NULL, NULL, 1, NULL, NULL, NULL),
(29, 2, 'Dev Kumar', 'Dev@12345', 'pawankumar.devop@gmail.com', '7992373163', 'mirashka', NULL, '$2y$12$VO9QooNlU14n8K5wMmtJN.lmWfkXI1gtaCi8lWQB5tu84f8ODpkr6', 'suspended', NULL, NULL, '2026-04-16 03:26:00', '2026-04-16 06:48:28', NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webinars`
--

CREATE TABLE `webinars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_attend` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `what_you_get` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speaker_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaker_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resources` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upcoming',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webinars`
--

INSERT INTO `webinars` (`id`, `title`, `description`, `why_attend`, `features`, `what_you_get`, `start_date`, `start_time`, `timezone`, `duration`, `meeting_link`, `speaker_name`, `speaker_designation`, `host_name`, `image`, `resources`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'The CXO Influence Blueprint: Building Authority in the Age of AI & Media', 'In today’s hyper-connected world, CXOs are not just leaders—they are brands. This webinar reveals how top executives leverage media, storytelling, and AI-driven insights to build influence, credibility, and long-term authority across industries.', '[\"Learn how CXOs become industry thought leaders\",\"Understand media visibility vs credibility\",\"Discover LinkedIn authority strategies\",\"Gain insights into AI-powered personal branding\",\"Learn real case studies from top brands\"]', '[\"Live CXO branding framework\",\"Real PR campaign breakdown\",\"Media positioning strategies\",\"Interactive Q&A session\"]', '[\"CXO Branding Checklist\",\"LinkedIn Growth Playbook\",\"PR Strategy Template\",\"Access to recording\"]', '2026-04-10', '11:00:00', 'Asia/Kolkata', '60 min', 'https://zoom.us/j/123456789', 'Manoj Barman', 'Founder & Strategic Communication Expert', NULL, 'uploads/webinar/2026/04/09/8104ce12-6057-409b-aa71-61fa9124e029_1775735742.png', 'PDF + PPT + Case Study Docs', 'upcoming', 1, '2026-04-09 02:16:24', '2026-04-09 06:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `webinar_registrations`
--

CREATE TABLE `webinar_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `webinar_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('registered','attended','no_show') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'registered',
  `email_sent_at` timestamp NULL DEFAULT NULL,
  `reminder_sent_at` timestamp NULL DEFAULT NULL,
  `email_status` enum('pending','sent','failed','retrying') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `email_attempts` tinyint(4) NOT NULL DEFAULT '0',
  `email_last_error` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webinar_registrations`
--

INSERT INTO `webinar_registrations` (`id`, `webinar_id`, `name`, `email`, `phone`, `company`, `job_title`, `industry`, `country`, `status`, `email_sent_at`, `reminder_sent_at`, `email_status`, `email_attempts`, `email_last_error`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pawan Kumar', 'pawan@mirashka.com', '+917992373163', 'mirashka', 'CEO', 'Media', NULL, 'registered', '2026-04-09 06:57:59', NULL, 'pending', 1, NULL, '2026-04-09 02:58:24', '2026-04-09 06:57:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_status_created_at_idx` (`status`,`created_at`);

--
-- Indexes for table `career_applications`
--
ALTER TABLE `career_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `career_applications_job_id_status_index` (`job_id`,`status`);

--
-- Indexes for table `career_jobs`
--
ALTER TABLE `career_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `career_jobs_slug_unique` (`slug`);

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `case_studies_slug_unique` (`slug`),
  ADD KEY `case_studies_status_industry_idx` (`status`,`industry`),
  ADD KEY `case_studies_created_at_idx` (`created_at`);

--
-- Indexes for table `case_study_media`
--
ALTER TABLE `case_study_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_study_media_case_study_id_foreign` (`case_study_id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_forms_created_at_idx` (`created_at`);

--
-- Indexes for table `email_logs`
--
ALTER TABLE `email_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_logs_lead_type_lead_id_index` (`lead_type`,`lead_id`),
  ADD KEY `email_logs_status_created_at_index` (`status`,`created_at`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image_optimizations`
--
ALTER TABLE `image_optimizations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_optimizations_original_path_unique` (`original_path`),
  ADD KEY `image_optimizations_status_index` (`status`),
  ADD KEY `image_optimizations_created_at_index` (`created_at`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_slug_unique` (`slug`);

--
-- Indexes for table `team_achievements`
--
ALTER TABLE `team_achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_achievements_team_id_foreign` (`team_id`);

--
-- Indexes for table `team_galleries`
--
ALTER TABLE `team_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_galleries_team_id_foreign` (`team_id`);

--
-- Indexes for table `team_social_links`
--
ALTER TABLE `team_social_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_social_links_team_id_foreign` (`team_id`);

--
-- Indexes for table `team_visions`
--
ALTER TABLE `team_visions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_visions_team_id_foreign` (`team_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_provider_id_index` (`provider_id`);

--
-- Indexes for table `webinars`
--
ALTER TABLE `webinars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webinars_status_start_date_idx` (`status`,`start_date`);

--
-- Indexes for table `webinar_registrations`
--
ALTER TABLE `webinar_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `webinar_registrations_webinar_id_email_unique` (`webinar_id`,`email`),
  ADD KEY `webinar_registrations_webinar_id_email_index` (`webinar_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `career_applications`
--
ALTER TABLE `career_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_jobs`
--
ALTER TABLE `career_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_study_media`
--
ALTER TABLE `case_study_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `email_logs`
--
ALTER TABLE `email_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image_optimizations`
--
ALTER TABLE `image_optimizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `team_achievements`
--
ALTER TABLE `team_achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_galleries`
--
ALTER TABLE `team_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `team_social_links`
--
ALTER TABLE `team_social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team_visions`
--
ALTER TABLE `team_visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `webinars`
--
ALTER TABLE `webinars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webinar_registrations`
--
ALTER TABLE `webinar_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `career_applications`
--
ALTER TABLE `career_applications`
  ADD CONSTRAINT `career_applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `career_jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `case_study_media`
--
ALTER TABLE `case_study_media`
  ADD CONSTRAINT `case_study_media_case_study_id_foreign` FOREIGN KEY (`case_study_id`) REFERENCES `case_studies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_achievements`
--
ALTER TABLE `team_achievements`
  ADD CONSTRAINT `team_achievements_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_galleries`
--
ALTER TABLE `team_galleries`
  ADD CONSTRAINT `team_galleries_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_social_links`
--
ALTER TABLE `team_social_links`
  ADD CONSTRAINT `team_social_links_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_visions`
--
ALTER TABLE `team_visions`
  ADD CONSTRAINT `team_visions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `webinar_registrations`
--
ALTER TABLE `webinar_registrations`
  ADD CONSTRAINT `webinar_registrations_webinar_id_foreign` FOREIGN KEY (`webinar_id`) REFERENCES `webinars` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
