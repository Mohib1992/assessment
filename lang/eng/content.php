<?php
$shortContent = new ContentController();
return array(
	
	'KnowAboutUs' => 'Know About Us',
	'WhoWeAre' => 'Who We Are',
	'WhoWeAreShort' => $shortContent->show(ContentKey::$HOW_WE_ARE,Language::english()),
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
	'OurExpertiseContent6' => 'Trade Optimization'
);
?>