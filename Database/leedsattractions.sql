-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2015 at 01:05 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leedsattractions`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
`AreaID` int(11) NOT NULL,
  `AreaName` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AreaID`, `AreaName`) VALUES
(1, 'Chapel Allerton'),
(2, 'Hyde Park'),
(3, 'Kikstall'),
(4, 'Harewood'),
(5, 'City Centre'),
(6, 'Headingley');

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE IF NOT EXISTS `attraction` (
`AttractionID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Summary` text NOT NULL,
  `Description` text NOT NULL,
  `OpeningHours` text NOT NULL,
  `Type` int(11) NOT NULL,
  `Area` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `Start` datetime DEFAULT NULL,
  `End` datetime DEFAULT NULL,
  `AllDayEvent` tinyint(1) DEFAULT NULL,
  `ImageUrl` text NOT NULL,
  `VideoEmbed` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`AttractionID`, `Name`, `Summary`, `Description`, `OpeningHours`, `Type`, `Area`, `Address`, `Postcode`, `Email`, `Website`, `Telephone`, `Start`, `End`, `AllDayEvent`, `ImageUrl`, `VideoEmbed`) VALUES
(1, 'Leeds Corn Exchange', 'The Home of Boutique Shopping for independent retailers. Leeds Corn Exchange is one of Britain’s finest Victorian buildings and a Grade 1 listed structure.', 'Leeds Corn Exchange is one of Britain’s finest Victorian buildings and a Grade 1 listed structure. <h3>Our Heritage</h3><p>Designed by Cuthbert Brodrick and completed in 1864, Leeds Corn Exchange holds tremendous significance both as an architectural masterpiece and cultural icon.</p><p>Leeds Corn Exchange is proud to champion the very best in creative, innovative and independent retail enterprises, and the building’s striking features provide the backdrop for a unique shopping experience.</p><p> Now just one of three Corn Exchanges in the country which still operates in its traditional capacity as a centre for trade, Leeds Corn Exchange sits at the heart of the local community.</p>', 'Mon - Wed 10am - 6pm\r\nThur - 10am – 9pm\r\nFri - Sat 10am - 6pm\r\nSun - 10.30am - 4.30pm', 2, 5, 'Boar Lane Leeds,', 'LS1 2BL', '', 'http://www.leedscornexchange.co.uk/', '0113 234 0363', '2014-12-20 00:00:00', '2015-01-30 00:00:00', 1, 'images/New/corn_exchange.jpg', '<iframe width="100%" height="auto" src="http://www.youtube.com/embed/3ewOQHUvZGE" frameborder="0" allowfullscreen></iframe>'),
(2, 'Harewood House', 'Harewood sits at the heart of Yorkshire, one of the treasure houses of England, the house was built in the 18th century and has art collections... ', '<p>Harewood sits at the heart of Yorkshire, one of the treasure houses of England, the house was built in the 18th century and has art collections to rival the finest in the land in the setting of Yorkshire’s most beautiful landscape.</p> <h3>Harewood Estate</h3><p>Harewood is just as much about today as it is about history. There are exhibitions of contemporary art, an award-winning educational department, renowned Bird Garden and over 100 acres of exquisite gardens.</p><p>You can expect the unexpected at Harewood with special events and themed weekends throughout the season to surprise you.</p><p>Whether you want to visit the House and its wonderful collections, relax in the Gardens or play on the Playground, come to Harewood for a day of discovery...The Earl and Countess of Harewood</p>', 'Gardens, Grounds & Adventure Playground: 10am - 6pm\r\n\r\nBird Garden: 10am - 4pm\r\n\r\nHouse State Rooms: 12pm - 3pm \r\n\r\nHouse Below Stairs & Terrace Gallery: 11am - 4pm\r\n\r\nTerrace Café: 11am - 4pm\r\n\r\nCourtyard Café & Shop: 10am - 5.30pm\r\n\r\nBookshop: 11am - 3pm', 2, 4, 'Harewood Estate\r\nNorth Leeds', 'LS17 9LQ', 'info@harewood.org', 'http://harewood.org/', '0113 218 1010', '2014-12-30 00:00:00', '2015-01-20 00:00:00', 1, 'images/New/Harewood _House.jpg', '<iframe width="100%" height="auto" src="http://www.youtube.com/embed/w7ycyg0B0Fw" frameborder="0" allowfullscreen></iframe>'),
(3, 'Virgin Active ', 'Fitness Centre in the heart of Leeds, offering various gym, relaxation, swim and beauty sessions. Large swimming pool.', '<h3>Cardio</h3><p>Your heart is the centre of everything. With a stronger heart, you can pump oxygen-rich blood round your body faster, making it easier to both get and stay fit. Our huge range of cardio fitness training equipment is state-of-the-art. And great fun to use. We make sure you have everything you need to give your heart and lungs a great workout.</p><h3>Fixed Strength</h3><p>Fixed strength equipment focuses on specific muscle groups and provides an easy initiation into strength training. It’s perfect for building isolated muscle strength or size in a safe way as the machine guides your movement. And as muscle burns calories efficiently, it is a key part of your workout.</p><h3>Cable Strength</h3><p>Cable strength equipment is a great progression from fixed strength equipment and takes your strength training to the next level using multi-directional movement. It mimics the movement found in real situations and so works on a wider muscle group.</p><h3>TRX Suspension</h3><p>With literally hundreds of exercises available to work with, TRX Suspension training can take your workout to a totally new level.</p><h3>Power Plate Pro 6</h3><p>Combining cable resistance and vibration training, the Power Plate Pro 6™ allows you to perform a virtually limitless range of static and dynamic exercises.</p><h3>Kettlebells</h3><p>Kettlebells give you an intense workout combining strength, flexibility and cardio-training for an exceptional level of overall fitness.</p><h3>Swim</h2><p>Swimming is one of the best exercises around for strengthening your muscles, increasing your fitness and toning your body without putting any stress on your joints.</p><h3>Spa Area</h3><p>Take some time out for yourself in our revitalising spa areas. Relax muscles and evaporate stress, as you soak, stretch, breathe, float, luxuriate, and linger in pristine surroundings complete with Jacuzzi’s, saunas, steam rooms and relaxation lounges.</p><h3>Swim Lessons</h2><p>Whatever your experience as a swimmer, our qualified instructors will be able to help improve your technique, your fitness and your ability. We can also offer 1-2-1 lessons for adults.</p><h3>Computer Stations</h3><p>Keep up with your emails, top up your social status or check out the news at our free, fast wireless Internet stations.</p><h3>Free Wi-Fi</h3><p>All our clubs offer free wi-fi connection to the Internet, so you can surf while you work up a sweat.Health & Beauty</p><h3>Hair Salon</h3><p>Our superior hair salons offer a vast range of services, designed to ensure you always look your best. Hair facilities are open to members and non-members.', '24/7', 5, 5, 'Unit 21 \r\nThe Light \r\nThe Headrow \r\nLeeds ', 'LS1 8TL', '', 'http://www.virginactive.co.uk/clubs/leeds-light-centre', '', NULL, NULL, 1, 'images/New/Virgin-Active.jpg', ''),
(4, 'Roundhay Park', 'The Park has a scented for the blind, National Plant Collections, Canal Gardens, the Monet and Alhambra Gardens, plus Tropical World (also known as Butterfly Gardens... ', '<h3>Virtual Tour</h3><p>\r\nOur virtual tour of Roundhay Park shows and records all areas of the park since the 20th century. Extensive improvements which started in the late 1990''s stopped the decline of the park infrastructure and facilities just in time, and Leeds can now be proud of this great asset to the City.</p><p> Roundhay Park now covers over 700 acres of parkland, lakes and woodland and is one of the largest urban parks in the world. The Park has a scented for the blind, National Plant Collections, Canal Gardens, the Monet and Alhambra Gardens, plus Tropical World (also known as Butterfly Gardens and Butterfly World) which attracts visitors all year round.</p><p>Newly opened in 2005 is the Friends Garden, located alongside Canal Gardens and the Rainbow Garden. In the 21st century, following extensive renovations to the park a new area of award winning ''Chelsea Gardens'' has been created where gardens created for the Chelsea Show have been rebuilt for all to enjoy in the ''Speciality Gardens'' area just off Mansion Lane.</p>', 'Summer: 10am until 6pm (last admission at 5.30pm)\r\nWinter: 10am until 4pm (last admission at 3.30pm)', 1, 3, 'Princes'' Avenue, Roundhay Park', 'LS8 1DF', '', 'http://www.roundhaypark.org.uk', '+44 0113 218 1000', '2012-12-15 00:00:00', '2012-12-16 23:59:59', 1, 'images/New/Tropical_World.jpg', ''),
(5, 'Art''s Cafe', 'Arts is Leeds’s original Café Bar. Opened in September 1994, really the first of its genre in Leeds.', '<p>Arts is Leeds’s original Café Bar. Opened in September 1994, really the first of its genre in Leeds.</p><p>\r\n\r\nOffering around 50 covers, Arts has built a reputation on offering  exceptionally high quality and interesting cuisine in a relaxed and  friendly environment, at affordable prices where you can always be  assured of attentive and welcoming service. The atmosphere is  complemented by regular 6-weekly exhibitions of artwork by local and  regional artists on the walls.</p>\r\n\r\n<h4>A recipe from our chef:</h4>\r\n<pre>\r\n\r\nLemon & Thyme Bavarois\r\n\r\n    1 litre double cream\r\n    350 grams caster sugar\r\n    8 gelatine leaves\r\n    8 egg yolks\r\n    900mls whipped cream\r\n    Small sprig of thyme\r\n    Juice of 5 lemons\r\n</pre>\r\n<ul>\r\n<li>Soak the gelatine leaves in cold water until soft.</li> \r\n<li>Bring the milk lemon juice and thyme to boilingAdd the soaked gelatine to the milk mixture.</li>  \r\n<li>Pour the milk mixture on to the egg yolks whilst whisking.</li> \r\n<li>Put the mixture back on the heat and whisk until thick custard consistency. </li> <li>Pass the mixture into a chilled bowl and leave to cool to room temperature. </li> <li>Fold in the whipped cream and spoon into glasses or moulds and leave in the fridge to set.</li></ul>', '24/7', 3, 6, '42 Call Lane \r\nLeeds', 'LS1 6DT', '', 'http://www.artscafebar.com', '0113 243 8243', NULL, NULL, 1, 'images/New/leeds-art-cafe.jpg', ''),
(6, 'The Cliff Lawn', 'The Cliff Lawn'' provides superior guest accommodation as a bed and breakfast establishment in Leeds combined with a friendly personalised service.', '<p>Originally the Victorian home of a local mill owner, the property was converted to a Hotel some time ago. Purchased by the current owners in December 2007, the property has since gone through a continued program of improvements, refurbishment and modernisation.</p> This has resulted in the English Tourist Board upgrading the star rating from 3 to 4 star guest accommodation. We now have 21 rooms all with their own private bathroom/shower room and include Queen Rooms (6'' bed or can be split to 2 x 3'' twin room) King rooms (5'' bed), twin room ( 2 x 3'' beds), family rooms (one with 2 x 3'' and a bed settee, could be a small double, and one with a king size bed and 3'' bed), junior double (4''6" bed, which is normally let as a single but can be a small double if needed) and finally our standard single with a 3'' bed. Photos of all our rooms can be found on the ''rooms'' page.</p>\r\n\r\n<p>We are less than 1½ miles from the City Centre and, less than a mile from the main Parkinson building at the University, and in our opinion, the property enjoys very quiet surroundings, being set completely in our own grounds.</p> ', '24/7', 3, 2, 'Cliff Road\r\nHeadingley\r\nLeeds', 'LS6 2ET', 'enquiries@clifflawn-hotel.co.uk', 'http://www.clifflawn-hotel.co.uk/', '+44 (0)113 278 5442', '2014-12-01 00:00:00', '2014-12-31 00:00:00', 1, 'images/New/Leeds-Lights.jpg', ''),
(7, 'Grand Theatre', 'The Leeds Grand Theatre and Opera House was built in 1878. It is widely regarded as a major milestone in Victorian theatre building. ', '<p> The Leeds Grand Theatre and Opera House was built in 1878 in a backlash to the music hall tradition which was thought by ‘polite society’ to lower the tone of entertainment via the sort of humour presented in these pub-based establishments.The theatre was built on a site of approximately three quarters of an acre with a frontage on New Briggate of 56 yards, including the Assembly Rooms.</p>The theatre cost a total of £62,000 and took 13 months to build. <p>The architect, George Corson, was heavily influenced by his assistant James Robertson Watson who had undertaken a tour of Europe’s churches and theatres.Many of the design inspirations came from these continental influences, in particular the gothic, ecclesiastical spires. The exterior is in a mixture of Romanesque and Scottish baronial styles, while the interior has such gothic motifs as fan-vaulting and clustered columns.</p><p>The first performance at the theatre was Much Ado About Nothing on 18 November 1878 and stars that have trodden the boards over the years have included Sarah Bernhardt, Ellen Terry, Julie Andrews, Felicity Kendal, Morecambe and Wise and Laurence Olivier.</p><p>The Grand Theatre celebrated the 125th anniversary of its opening in 2003. It is widely regarded as a major milestone in Victorian theatre building.</p><p>Tours of the theatre are available to find out more about the history of this fascinating building.</p>', 'Mon - Sat  10am - 8pm ', 6, 1, ' 46 New Briggate, Leeds', 'LS1 6NZ', 'boxoffice@leedsgrandtheatre.com', 'http://www.leedsgrandtheatre.com/', '0844 848 2700', NULL, NULL, NULL, 'images/New/Leeds_Elland_Road.jpg', ''),
(8, 'Temple Newsam', 'One of the most celebrated historic houses in the country, this Tudor-Jacobean mansion has over forty restored rooms open to view.', 'One of the most celebrated historic houses in the country, this Tudor-Jacobean mansion has over forty restored rooms open to view. Over one million objects collected since 1819 give us all insights into the evolving natural world, human history and culture. These are collections which reflect Leeds as a vibrant and changing city and place Leeds in a global context. Through our collections we can discover and learn from the past in order that we might make sense of the present and prepare for the future. The collections in Leeds are particularly special - our collections of natural history, fine and decorative art and industrial history have been Designated as collections of national significance.', 'Weekends', 4, 6, 'Temple Newsam Road\r\nOff Selby Road\r\nLeeds', 'LS15 0AE', 'temple.newsam.house@leeds.gov.uk', 'http://www.leeds.gov.uk/museumsandgalleries/Pages/', '0113 336 7461 ', NULL, NULL, NULL, 'images/New/temple-newsam-.jpg', '-'),
(9, 'Kikstall Abbey', 'Kirkstall Abbey is a ruined Cistercian monastery in Kirkstall north-west of Leeds city centre in West Yorkshire, England. It is set in a public park on the north bank of the River Aire. It was founded c.1152.', '<h3>The building</3><p>The church is of the Cistercian type, with a short chancel, and transepts with three eastward chapels to each, divided by solid walls. The building is plain, the windows are unornamented, and the nave has no triforium. The cloister to the south occupies the whole length of the nave. On the east side stands the two-aisled chapter-house, between which and the south transept is a small sacristy, and on the other side two small apartments, one of which was probably the parlour. Beyond this is the calefactory or day-room of the monks. Above this whole range of building runs the monks'' dormitory, opening by stairs into the south transept of the church.</p><p>On the south side of the cloister there are the remains of the old refectory, running, as in Benedictine houses, from east to west, and the new refectory, which, with the increase of the inmates of the house, superseded it, stretching, as is usual in Cistercian houses, from north to south. Adjacent to this apartment are the remains of the kitchen, pantry and buttery. The arches of the lavatory are to be seen near the refectory entrance. The western side of the cloister is occupied by vaulted cellars, supporting on the upper story the dormitory of the lay brothers </p>', '7/24', 4, 3, 'Kirkstall\r\nLeeds', 'LS5 3EH', 'kirkstall.abbey@leeds.gov.uk', 'http://www.leeds.gov.uk/museumsandgalleries/Pages/', '0113 230 5492', NULL, NULL, NULL, 'images/New/Kirkstall-Abbey.jpg', ''),
(10, 'Xscape', 'Leisure complex with snow slope, bowling alley and surf simulator, plus cinema and restaurants.', '<h3>Xscape Yorkshire, is the ultimate entertainment destination, where you can play eat and shop all under one roof!</h3></p>When here you will find the country’s biggest REAL snow slope, 2 rock climbing walls, an aerial assault course, indoor skateboard park, 4D golf course, Laserzone, bowling, adventure golf course, multiplex cinema, 17 bars and restaurants and 10 urban retail outlets all under one roof!</p><p>Plus – with free family entertainment every school holiday, Xscape Yorkshire really is the ULTIMATE ENTERTAINMENT DESTINATION in Yorkshire.</p> <h3>WE''RE WINNERS OF</h3><ul><li>- Business of the Year 06 Wakefield District Business Awards</li><li>- Best Tourism Experience 05 Yorkshire Tourist Board White Rose Awards</li> <li>- Best New UK Tourist Attraction 04 Group Leisure Industry Awards</li><li>- Best Regeneration Project 04 Retail & Leisure Property Awards</li><li>- Pro Yorkshire Tourism Award 04 Royal Institute Chartered Surveyors Awards</li> </ul><p>Xscape Yorkshire opened in October 2003 and now employs over 1000 people.Conveniently located at Junction 32 on the M62 for easy access from all over the country, the centre is built on a former colliery site on land that was left unstable and covered in spoil heaps when the pit closed.  Needing a development that would regenerate the site and attract investment into the area, X-Leisure invested £56 million into developing and constructing the 430,000 sq ft landmark building.</p><p>The scale of the centre is huge, it’s the size of six football pitches, and at 38m high you could fit nearly 4 double-decker buses on top of each other inside.</p>', 'Weekends', 5, 6, 'Colorado Way, Glasshoughton, Castleford', 'WF10 4TA', 'temple.newsam.house@leeds.gov.uk', 'www.xscape.co.uk/yorkshire', '0871 200 3221', NULL, NULL, NULL, 'images/New/visit_xscape.jpg', '-');

-- --------------------------------------------------------

--
-- Table structure for table `attr_rating`
--

CREATE TABLE IF NOT EXISTS `attr_rating` (
`ID` int(11) NOT NULL,
  `AttractionID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `attr_rating`
--

INSERT INTO `attr_rating` (`ID`, `AttractionID`, `Rating`) VALUES
(1, 2, 5),
(2, 1, 4),
(3, 1, 2),
(4, 3, 2),
(5, 3, 4),
(6, 1, 2),
(7, 1, 4),
(8, 1, 5),
(9, 4, 2),
(10, 4, 3),
(11, 4, 3),
(12, 7, 3),
(13, 7, 3),
(14, 7, 5),
(15, 5, 3),
(16, 1, 2),
(17, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`EventID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Summary` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Image` varchar(200) NOT NULL,
  `alt` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `Title`, `Summary`, `Description`, `Date`, `Image`, `alt`) VALUES
(1, 'Leeds Connections', 'The largest annual winter music festival of its kind and the UK''s premier celebration of Yorkshire music.', 'The largest annual winter music festival of its kind and the UK''s premier celebration of Yorkshire music.', '2015-01-15', 'images/New/Event_Leeds_1.jpg', 'Event_Leeds thumbnail Image'),
(2, 'Big Burns Supper', 'Nine days of music, theatre, comedy and much more.', 'Nine days of music, theatre, comedy and much more.', '2015-01-23', 'images/New/Event_Leeds_4.jpg', 'Event_Leeds_4 thumbnail Image'),
(3, 'Sainsbury''s Leeds International Match', 'Athletes from around Europe compete for the title.', 'Athletes from around Europe compete for the title.\r\nSainsbury''s Leeds International Match\r\nSport & Leisure\r\nEmirates Arena, 1000 London Road, Glasgow, Lanarkshire, G40 3HY\r\n\r\n  ', '2015-01-24', 'images/New/Event_Leeds_5.jpg', 'Sainsbury''s Leeds International Match thumbnail Image'),
(4, 'Up Helly Aa', 'The largest festival of fire in Europe attracts visitors from across the world and marks the end of Yuletide.', 'The largest festival of fire in Europe attracts visitors from across the world and marks the end of Yuletide.', '2015-02-11', 'images/New/Event_Leeds_6.jpg', 'Up Helly Aa thumbnail Image'),
(5, '\r\nRugby World Cup\r\n2015 Leeds \r\n', 'Leeds is a Host City for Rugby World Cup 2015 and will be hosting two international games at Elland Road during the pool rounds.', 'The ballot stage for tickets for Rugby World Cup 2015 is now complete, but there a still 300,000 tickets available, which are set to go on sale in a second wave from Monday November 24, 2014 for unsuc', '2015-09-26', 'images/New/Event_Leeds.jpg', 'Event Leeds image'),
(6, '\r\nLeeds Valentines Fair\r\nat Elland Road\r\n', 'The ever popular Leeds Valentines Fair is back at Elland Road this February. ', 'Roller Coasters, thrill rides, family rides, Dodgems, Twists, Waltzer’s and a huge firework display!\r\nFor further details see www.leedsvalentinesfair.co.uk/index.html', '2015-02-14', 'images/New/Event_Leeds_3.jpg', 'Leeds Valentines Fair image');

-- --------------------------------------------------------

--
-- Table structure for table `facilitieslink`
--

CREATE TABLE IF NOT EXISTS `facilitieslink` (
  `AttractionID` int(11) NOT NULL,
  `FacilityID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilitieslink`
--

INSERT INTO `facilitieslink` (`AttractionID`, `FacilityID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE IF NOT EXISTS `facility` (
`FacilityID` int(10) unsigned NOT NULL,
  `FacilityName` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`FacilityID`, `FacilityName`) VALUES
(1, 'Disability friendly'),
(2, 'Free entry'),
(3, 'Family friendly'),
(4, 'Cafe'),
(5, 'Shop');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `UserID` int(11) NOT NULL,
  `AttractionID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`UserID`, `AttractionID`, `Rating`) VALUES
(1, 1, 3),
(1, 1, 5),
(1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
`TypeID` int(11) NOT NULL,
  `TypeName` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`TypeID`, `TypeName`) VALUES
(1, 'Parks and Outdoors'),
(2, 'Historical Building'),
(3, 'Resorts'),
(4, 'Bars and Restaurants'),
(5, 'Sports Facility'),
(6, 'Concerts and Theatres');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`UserID` int(11) NOT NULL,
  `DisplayName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `HomePostcode` varchar(10) NOT NULL,
  `FavouriteAttraction` int(11) NOT NULL,
  `FavouriteArea` int(11) NOT NULL,
  `FavouriteType` int(11) NOT NULL,
  `Subscribed` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `DisplayName`, `Email`, `Password`, `LastLogin`, `HomePostcode`, `FavouriteAttraction`, `FavouriteArea`, `FavouriteType`, `Subscribed`) VALUES
(1, 'Marc', 'm.fabri@leedsmet.ac.uk', 'password', NULL, 'LS6 3HE', 1, 1, 1, 1),
(3, 'Test', 'test@test.com', 'test', NULL, 'LS63TT', 2, 2, 2, 0),
(4, 'ana', 'ana@home.com', 'ana', NULL, 'LS1 1AA', 0, 0, 0, 0),
(5, 'ana', 'ana@home.com', '111', NULL, 'aq2 qw3', 0, 0, 0, 0),
(6, 'Kinn12', 'chief@mail.com', '1234567', NULL, 'YO30 8DF', 0, 0, 0, 0),
(7, '', 'mani@me.com', '', NULL, '', 0, 0, 0, 0),
(8, '', 'uwa@yahoo.com', '', NULL, '', 0, 0, 0, 0),
(9, '', 'par@ui.com', '', NULL, '', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`AreaID`);

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
 ADD PRIMARY KEY (`AttractionID`);

--
-- Indexes for table `attr_rating`
--
ALTER TABLE `attr_rating`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
 ADD PRIMARY KEY (`FacilityID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
 ADD PRIMARY KEY (`TypeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
MODIFY `AreaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
MODIFY `AttractionID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `attr_rating`
--
ALTER TABLE `attr_rating`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
MODIFY `FacilityID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
