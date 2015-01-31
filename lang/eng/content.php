<?php
$shortContent = new ContentController();
return array(
	
	'KnowAboutUs' => 'Know About Us',
	'WhoWeAre' => 'Who We Are',
	'WhoWeAreShort' => $shortContent->show(ContentKey::$WHO_WE_ARE,Language::english()),
	'OurAdvantages' => 'Our Advantages',
    'OurAdvantagesShort' => $shortContent->show(ContentKey::$OUR_ADVANTAGE,Language::english()),
	'OurExpertise' => 'Our Expertise',
	'ContactWithUs' => 'Contact With Us',
	'NewAndPublication' => 'News And Publication',
    'InformationTechnology' => 'Information Technology',	
	'OurExpertiseContent1' => 'Consulting',
	'OurExpertiseContent2' => 'IT Management.',
	'OurExpertiseContent3' => 'Project Management & coordination.',
	'OurExpertiseContent4' => 'Global networking.',
	'OurExpertiseContent5' => 'Continental Interlacing.',
	'OurExpertiseContent6' => 'Trade Optimization',
	'TEL' => 'Tel',
	'MAIL' => 'Mail' ,
	'EMAIL' => 'Email',
	'YOUR_EMAIL' => 'You Email',
	'GET_IN_TOUCH' => 'Get In Touch',
	'MESSAGE' => 'Message',
	'SEND'  => 'Send',
	'OUR_CLIENT' => 'Our Client',
	'OUR_TEAM' => 'Our Team',
	'VIEW_DETAIL' => 'View Detail'

);
?>