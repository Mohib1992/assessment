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
);
?>