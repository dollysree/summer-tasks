-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 07:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'India doing great, no one talks about it: Donald Trump', 'india-doing-great,no-one-talks-about-it\r\n', 'WASHINGTON: Republican presidential front runner Donald Trump has commented on India for the first time after he entered the presidential race, saying that the country is doing great and no one is talking about it.\r\n\r\n"India is doing great," Trump told in an interview on Monday.\r\n\r\nAfter hitting the presidential campaign trial, this is the first time that Trump gave a glimpse into his thought about India, even as he has been openly critical about many countries like China, Mexico and Japan in many of his speeches. "That was the beginning of China. That was the beginning of India, when India -- by the way, India is doing great. Nobody talks about it. And I have big jobs going up in India. But India is doing great," Trump said.\r\n\r\nBut that was the beginning of China. That was the beginning of India. Look at everything I told you. Everything I told you is all right, whether it''s Iraq, whether it''s Iran, whether it''s China, whether it''s India, whether it''s Japan," Trump said referring to his CNN interview in September 2007.\r\n\r\n"Just look at this country. We have gone from this tremendous power that was respected all over the world to somewhat of a laughing stock," he said.\r\n\r\n"All of a sudden, people are talking about China and India and other places, even from an economic standpoint. America has come down a long way, a long way. The United States has come down a long way, and it''s very, very sad. We''re not respected, he added.'),
(2, 'Ties with China priority of India''s foreign policy: SM.Krishna', 'ties-with-china-priority-of-india''s-foreign-policy:-sm.krishna', 'BEIJING: India today told China that it sees improving bilateral ties as a priority of its foreign policy and expressed desire to expand strategic cooperation, setting aside concerns here over future direction of the relations in the backdrop of the big US push into the Asia-Pacific region.\r\n\r\nConveying a strong message about India''s intention to firm up ties with China, visiting External Affairs Minister S M Krishna told Chinese Vice Premier Li Keqiang that it is important for both the countries to build trust and understanding to maintain strong and healthy relationship. \r\n\r\n"I conveyed to him that our relations with China are a priority in India''s foreign policy and we believe that India-China relations will be one of the most important bilateral relationships in the 21st century," Krishna told the Indian media here after a 45-minute meeting with Li, who is widely tipped to take over as Prime Minister next year after the leadership change in the ruling CPC. \r\n\r\n"I indicated that India desires to expand the strategic and cooperative partnership that exists between our countries. It is important for us to continue building better understanding and trust between us since that will help to maintain a strong and healthy relationship between India and China," he said. \r\n\r\nHis assertion about India''s desire to build friendship with China comes after US announcement about a major push into the Asia-Pacific, specially the South China Sea, where China is grappling with maritime disputes with a host of countries. \r\n\r\nChinese analysts feel that the US is wooing India in a bid to counter China''s growing influence in Asia-Pacific. \r\n\r\nUS Defence Secretary Leon Panetta, who announced Washington''s plans to deploy 60 per cent of US naval assets in the Asia-Pacific in the next few years raising strong concerns in Beijing, is currently in India seeking to strength US-India military ties.'),
(5, 'World''s largest cargo aircraft Antonov An-225 lands at Hyderabad airport', 'world''s-largest-cargo-aircraft-antonov-an-225-lands-at-hyderabad-airport', 'Hyderabad: The world''s largest cargo aircraft - Antonov An-225 Mriya, which was scheduled to make its first landing in India this week, arrived at the Rajiv Gandhi International airport here on Friday.\r\n\r\nThe wide body An-225 aircraft, is powered by six turbofan engines and is the longest and heaviest airplane ever built, with a maximum takeoff weight of 640 tonnes. It also has the largest wingspan of any aircraft in operational service.\r\n\r\nSpecially built to undertake transcontinental route airlifting load between 180 230 tonnes, the aircraft landed here from Turkmenistan.\r\n\r\nReliance Defence had last month signed a strategic partnership agreement with Antonov company of Ukraine for assembly, manufacture and MRO of Antonov platforms in India, both for the commercial and the military market.\r\n\r\nReliance Defence, together with Antonov will jointly address various requirements including 50-80 seat passenger aircraft programme of the HAL, in its basic configuration and in all its variants such as transport, maritime patrol and other military roles, the company said in a statement.\r\n\r\nAn class of aircraft has long served the Indian Air Force and Navy for over five decades. Currently, the IAF has more than 100 An-32 aircraft on its inventory having completed its last life cycle upgrade will be due for replacements.\r\n\r\nThe partnership agreement would provide the benefits of quality and low cost solution for 50-80 seater aircraft through its core competencies, it said adding that the joint venture envisages design and manufacture of the medium lift dual use turbofan aircraft in India with transfer of niche technologies.'),
(6, 'Woman allegedly raped at Infosys campus in Pune', 'woman-allegedly-raped-at-infosys-campus-in-pune', 'Two Pune Infosys campus employees were arrested on Tuesday in connection with an alleged rape of a woman.\r\n\r\nAccording to the police, the woman cashier working at a canteen in Pune Infosys was allegedly raped by two persons inside the canteen.\r\n\r\nThe victim, who works as a cashier at the Infosys Phase 1 campus canteen, was allegedly raped on December 27 by two housekeepers.\r\n\r\nAn FIR has been lodged against the two and the police is investigating the matter.\r\n\r\nAccording to reports, one of the two accused had raped the woman in the lavatory while the other captured the scene on mobile.\r\n\r\nThe accused had also threatened the victim not to inform others about the incident else they would make the clips public.\r\n\r\nReacting to the incident, Infosys said in a statement that the company is working closely with the police to aid their investigation.\r\n\r\n"We have stringent security measures and have a zero tolerance policy against sexual harassment extending to contractual staff too. The company will take necessary action as per policy," Infosys statement said.'),
(7, 'Salman Khan''s ''hit-&-run victim'' moves Supreme Court', 'salman-khan''s-''hit-&-run-victim''-moves-supreme-court', 'NEW DELHI: Niyamat Shaikh, who was allegedly hit by Salman Khan''s car in 2002, has approached the Supreme Court challenging the actor''s acquittal in the hit-and-run case in which one person was killed and four others were injured.\r\n\r\nShaikh pleaded that his plea should also be heard while deciding the appeal filed by the Maharashtra government against Khan''s acquittal. Seeking compensation, the petitioner, claiming to be a daily wage-earner, said the accident left him with permanent disability with no regular source of earning. He contended that his family members have been leading a miserable life as he was the sole bread-earner and that the court should direct compensation for their loss.\r\n\r\nHe said in his petition that victims of a crime were an integral part of the justice delivery system and he should also be heard. He also contended that the trial court and HC completely ignored the provision of Sections 357 and 357 A of CrPC which provided for compensation to victims of crime.\r\n\r\nFamily members of the victim who lost his life when Khan''s vehicle allegedly ran over him have also approached the apex court against the Bombay high court order acquitting Khan and also sought compensation.'),
(8, ' Get passport in a week by giving four documents', 'get-passport-in-a-week-by-giving-four-documents', 'PUNE: The ministry of external affairs has announced two major changes that will fast-track the process for first-time passport applicants and make it more convenient to secure an appointment at the local passport seva kendra.\r\n\r\nCitizens will be granted a fresh passport under the normal category in a week if their applications are accompanied by three documents - copies of Aadhaar card, electoral photo identity card (EPIC) and PAN card - besides an affidavit in the format of Annexure-I (declaration of citizenship, family details and no criminal record).\r\n\r\nUntil now, the process would take a month, with the police verification eating up a lot of time.\r\n\r\nPolice verification of such applications will be conducted after the passport is issued. There will be no extra charge for the service, a statement issued by the ministry said. The process is subject to online validation of the Aadhaar number while processing and an approval from the granting officer.\r\n\r\nIn addition, EPIC and PAN cards may also be validated, if required, through respective databases in real time, before the application is approved. Besides, passports may also be impounded and revoked later, in case of adverse police reports.\r\n\r\nThe idea of the upgrade is to liberalise the process without compromising on security, explained Anil Kumar Sobti, director of the passport division in the ministry. "There are plenty of inbuilt safeguards in our system which can instantly spot fake identities and forgeries. Most importantly, our system is linked to the Aadhaar database which helps conduct real-time verification of the applicant while s/he is still at the passport seva kendra," he said.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
