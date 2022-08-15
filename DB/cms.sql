-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 10:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(5, 'Kandy'),
(6, 'Galle'),
(7, 'Anuradhapura');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `img`, `content`, `date`, `category_id`) VALUES
(73, 'Pinnawala Elephant Orphanage', 'pinnawala.jpg', 'This one\'s considered amongst the best places to visit in Kandy for those who are fascinated by the wildlife! Plan a day out with wild Asian elephants at Pinnawala Elephant Orphanage. This is a -popular breeding ground of 90 plus elephants who stay in their natural habitat. Watch these adorable elephants bathe, play around, and feed them fruits. Tourists can see them when they take a tour around the orphanage to see the majestic animals. If you are in Kandy visiting places, then this spot is perfect if you want to have a small picnic along with your friends or family.\r\n\r\nPinnawala is the place where abandoned elephants are raised. Not only orphans but also elephants who are seriously injured or those who get aloof from their group are given proper shelter & care at the orphanage. The place is situated in the Pinnawala village present in the Sabaragamuwa Province of Sri Lanka. The orphanage was started in 1975 by the Sri Lanka Department of Wildlife Conservation. The place has evolved into an amazing tourist destination in recent years. The elephants are kept quite well and you may definitely see that while at this place. The orphanage also accepts elephants that are donated to them and they bring them back to their health. The elephants have mahouts for them who give them baths and proper food on a timely basis. If you’re looking for natural bathing places in Kandy, then this is it!\r\n\r\nEntrance Fee: INR 1300\r\nFamous For: Wildlife tours', '2021-08-19', 5),
(85, 'Temple Of Tooth Relic', 'temple.jpg', 'Considered as one of the most important temples of Buddhists in Sri Lanka, the Temple of Tooth Relic is located to the north of Kandy Lake and is one of the most remarkable places to visit in Kandy Sri Lanka. The sacred tooth of Lord Buddha enshrined in the temple makes it one of the popular Kandy tourist places. The room housing the tooth is open to devotees to offer their prayers. However, nobody gets to see the tooth because it is kept in a golden casket inside a stupa-like structure. The temple is housed in the royal palace complex of the former Kingdom of Kandy. One of the best places to see in Kandy, this temple is of great importance due to the belief of the country on the tooth. The temple has rituals thrice a day. The temple was designated a UNESCO World Heritage Site 1988. The temple still stands strong even after facing attacks twice.\r\n\r\nAlong with the outside, tourists need to visit the inside of the temple to actually appreciate the architecture. There are holes in the walls which contain lamps lit using coconut oil. Tourists need to pay the entry fees and they should visit between 5:30 AM and 8:00 PM.\r\n\r\nEntrance Fee: INR 1500\r\nFamous For: Architecture', '2022-01-17', 5),
(86, 'Knuckles Mountain Range', 'nuckles.jpg', 'This is one of the top places to visit in Kandy Resembling the shape of a knuckle of a clenched fist from the top, the Knuckles Mountain Range is probably one of the most scenic Kandy tourist attractions. The mountain Range in the region towards the northern end of Sri Lankan highlands (39 km from Kandy) is the place to be. Perfect place to try your hands-on adventure traveling and camping, the Knuckles Mountain Range spans from Matale to Kandy and is a treat for the nature lovers. Look around and embrace the wilderness brought to you by sprawling grasslands, jagged peaks, torrents of streams, and gushing waterfalls. Enjoy the series of painted canvas around.\r\n\r\nThe best view of the range is the thick clouds that gather in the higher Montane area. Hiking is considered to be one of the best things to do in Sri Lanka. Adventurous tourists can try their hands at hiking to visit the cloud forests which house a lot of the flora and fauna of the place. They are mostly unique to the place and you cannot find them in the rest of the island country. If you want to reach the highest point of the terrain, then you need to climb 1863 m above the sea level.\r\n\r\nAnother key wildlife attraction of the place are lizards which include the unique Crestless lizard, Kangaroo lizard, and Pygmy lizard. People who want to enjoy serious trekking may take part in the 3-day guided trekking tour which lasts for more than 40 KM and takes them through some of the main areas. This mountain range is undoubtedly considered to be one of the best places to visit in Kandy\r\nThe great biodiversity of the Knuckles brings you wild boar, spotted deer, giant squirrel, barking deer, purple-faced leaf monkey, and mongoose.\r\n\r\nEntrance Fee: No entry fee\r\nFamous For: Wildlife tours', '2022-01-17', 5),
(87, 'Royal Botanical Garden', 'garden.jpg', 'This place is counted as one of the best Kandy attractions. Spanning over 60 hectares, the Royal Botanical Garden is largest and one of the best places to visit in Kandy with a-hidden charm to explore. Situated in Peradeniya, the place is quite close to the Mahaweli River. Along with the most striking orchids, you can find more than 4000 species of plants in this Botanical Garden. You should definitely visit the National Herbarium of Sri Lanka which is attached to this Royal Botanical Garden. Tourists may tour the whole 147 acres of the garden to spend their day. The garden isnt something new as it was created in 1821 when it contained mostly coffee and cinnamon plants. Do check out the Cannonball Tree present in this garden which King George V of the United Kingdom and Queen Mary planted in 1901.\r\n\r\nThe garden is also an ideal place to plan a picnic with family and friends. However, romantic couples can be mostly seen hanging around the garden area. The cab drivers in Kandy mostly offer to cover Botanical Garden along with Pinnawala Elephant Orphanage or the Kandy temple to make it a Kandy sightseeing tour. The park remains open from 7:30 AM to 5 PM. You can consider this as one of the amazing places to visit in Kandy for couples.\r\n\r\nEntrance Fee: INR 1500\r\nFamous For: Nature Scene and Herbarium', '2022-01-17', 5),
(88, 'Kandy Lake', 'lake.jpg', 'Adjoining most of the popular tourist places in Kandy and eateries with lake view, the Kandy Lake is certainly among the best places to visit in Kandy, Sri Lanka. An ideal place to spend hours during your lazy vacation, the lake offers stunning nature views around it and is a perfect romantic sojourn for a romantic couple visiting the place. The lake, existing since 1807, has a flurry of idyllic places and historical structures around.\r\n\r\nThe lake is also known as the Kiri Muhuda or the Sea of Milk and is an artificial lake. Being in the heart of the city and beside some of the famous attractions of Kandy, it is a popular tourist site. There is also an island in the middle of the lake. Around the lake is built the Wakulla Bamma or the Clouds Wall which increases the beauty of it. If you are in Kandy visiting places, tourists can also see the Ulpan or Queens Bathing Pavilion which is a party in the Kandy Lake.\r\n\r\nEntrance Fee: INR 1500\r\nFamous For: Leisure walking trails', '2022-01-17', 5),
(89, 'Horton Plains National Park Ohiya', 'Horton-Plains-National-Park-Ohiya.jpg', 'If you want to witness the most majestic wildlife of Sri Lanka, this is the place for you! This national park is a treat to travellers fond of mystical beauty of nature. The valley shadowed by the two mountains Kirigalpotta and Totapola; Sri Lankaâ€™s second and third largest mountains. This place is often stated as Worldâ€™s end because of the surprisingly formed waterfall, mist-filled lakes and the variety of plants and animals found here. The wide variety of flora and fauna makes the place even more special. The ethereal feeling offered by the place becomes prominent, especially in the morning.\r\n\r\nEntrance Fee: INR 30\r\nFamous For: Wildlife Tours', '2022-01-17', 5),
(90, 'Galle Fort', 'galleport.jpg', 'Commonly referred to as the Dutch Fort, this is one of the most beautiful Galle attractions for being an extraordinary historical and archaeological site. Initially constructed by Portuguese in the late 16th century, later it was fortified by the Dutch somewhere near 17th century. It brings together archeology, architecture, and history with a buzzing ambiance of shops, cafes, and stores luring tourists from around the world to visit this fort. One of the most highly rated places to visit in the Galle fort is the Galle lighthouse and Mansion museum.\r\n\r\nLocation: Southern Sri Lankan Coast in the Bay of Galle\r\nTimings: Open 24 hours a day', '2022-01-17', 6),
(91, 'National Museum of Galle', 'National-Museum-of-Galle.jpg', 'While Sri Lanka as it exists today is a relatively young nation, the civilization that inhabited this part of the world is centuries old. If you want an insight into this rich and vibrant past of Sri Lanka, one of the top places to visit in Galle town is the National Museum of Colombo. It offers the visitors to look into a cross section of Sri Lankas entire history, artwork and relics from the Anuradhapura Kingdom, dating back to 4th century B.C.\r\n\r\nLocation: Church St, Galle 80000, Sri Lanka\r\nOpening Hours: 9am-6pm\r\nTickets: 35 Rs for an adult, 20 Rs for a child', '2022-01-17', 6),
(92, 'Galle Lighthouse', 'Galle-Lighthouse.jpg', 'Your Galle sightseeing tour wonâ€™t be complete without a visit to the popular Galle Lighthouse. Nestled within the Galle Fort, this lighthouse is gorgeous. The stunning design and architecture and the vibe it radiates are unforgettable. You can see the far off oceans which face the oldest lighthouse in Sri Lanka.\r\n\r\nLocation: Galle 80000, Sri Lanka\r\nTimings: Open 24 hours\r\nEntry Fee: Free', '2022-01-17', 6),
(93, 'Abhayagiri Dagoba', 'Abhayagiri-Dagoba.jpg', 'Leaving Anuradhapura without exploring any dagobas is like a sin that you might not want to commit. This colossal dagoba can be dated back to the 1st century BC. The original height of Abhayagiri Dagoba was 100 meters owing to which it was one of the greatest structures in the world then. After reconstruction and preservation of this place, the height has been restored to 75 meters. The name of this place literally translates into the â€˜Fearless Hillâ€™ or â€˜Hill of Protectionâ€™. You will find a slab with Buddhaâ€™s footprint and some moonstones.\r\n\r\nLocation: Watawandana Rd, Anuradhapura, Sri Lanka\r\nBest known for: Massive structure and Buddhaâ€™s footprints\r\nDistance from Colombo: 203.7 km\r\nThings to do: Find peace!', '2022-01-17', 7),
(94, 'Sri Maha Bodhi', 'Sri-Maha-Bodhi-sri-lanka.jpg', 'Jaya Sri Maha Bodhi is among the most ancient trees in Sri Lanka that even today are thriving in the Mahamewna Gardens of Anuradhapura. This special tree is said to have grown out of a cutting that was brought here from Bodh Gaya in India. It is believed that it has been brought from the very same place where Gautama Buddha had attained enlightenment, thus making it one of the most popular places to visit at Anuradhapura for pilgrims and spiritual souls. It was cared for by the ancient kings and queens of Sri Lanka, as well as many Buddhist leaders. Flourishing even in the harshest of conditions, this tree is said to have such tranquil beauty that it instills a sense of calm and peace in visitors.\r\n\r\nLocation: Thuparama Dagoba, Anuradhapura, Sri Lanka\r\nBest known for: Incredibly long life and peaceful aura\r\nDistance from Colombo: 200 km\r\nThings to do: Spend a day amidst the purest form of nature!', '2022-01-17', 7),
(95, 'Ruwanwelisaya', 'Ruwanwelisaya-sri-lanka.jpg', 'Ruwanwelisaya Stupa is among the largest stupas (also called dagobas) in Sri Lanka and one of the most prominent places to visit in Anuradhapura, Sri Lanka. Built long ago by King Dutugamunu, this beautiful stupa is nestled right in the heart of the heritage city of Anuradhapura. Also called Maha Stupa, this adorned structure is over 338 feet tall and has large paved courts as well as platforms that all add a unique architectural touch to this magnificent structure. Recent renovations have earned this shrine the privilege of being one of the most revered sanctums of worship in Anuradhapura.\r\n\r\nLocation: Abhayawewa Rd, Anuradhapura, Sri Lanka\r\nBest known for: Overwhelming structure and architecture\r\nDistance from Colombo: 200.6 km\r\nThings to do: Admire the structure, seek blessings', '2022-01-17', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'saumya', 'sewwandi', 'saumya@gmail.com', '0f7e44a922df352c05c5f73cb40ba115', '0774274787', 'No 277/A, Dalwatigama, Welamboda', 'kandy'),
(2, 'saw', 'seww', 'saw@gmail.com', '0f7e44a922df352c05c5f73cb40ba115', '0774274787', 'No 277/A, Dalwatigama, Welamboda', 'kandy'),
(8, 'eeew', 'wcc', 'saws1@gmail.com', '0f7e44a922df352c05c5f73cb40ba115', '0774274787', 'No 277/A, Dalwatigama, Welamboda', 'kkkk'),
(9, 'kkk', 'llll', 'sawg@gmail.com', '0f7e44a922df352c05c5f73cb40ba115', '0774274787', 'No 277/A, Dalwatigama, Welamboda', 'kkkkkkk'),
(10, 'Dasuni', 'Dissanayake', 'dasunisadeesha5@gmail.com', '$2y$10$TX26KLUKyD0497jyWJe8Tu/Yx3qvy56jOo/wnjFokQUbYoEwSEaUO', '0720982310', 'No.83, polwaga janapadaya, ampara, apartment', 'weranketago'),
(11, 'Dasuni', 'Dissanayake', 'lorainacademy@gmail.com', '$2y$10$cna7yMOxwhKVQ/wY7vDuGuSf.S4fddvyIKOdrnuUV9WgqaNm..bmW', '0752446807', 'No.83, polwaga janapadaya, ampara, apartment', 'ampara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`category_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
