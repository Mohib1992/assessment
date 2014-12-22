<?php
$shortContent = new ContentController();
return array(
	
	'KnowAboutUs' => 'Know About Us',
	'WhoWeAre' => 'Who We Are',
	'WhoWeAreShort' => $shortContent->show(ContentKey::$HOW_WE_ARE,Language::german()),
	'OurAdvantages' => 'Our Advantages',
    'OurAdvantagesShort' => $shortContent->show(ContentKey::$OUR_ADVANTAGE,Language::german()),
	'OurExpertise' => 'Our Expertise',
	'ContactWithUs' => 'Contact With Us',
	'NewAndPublication' => 'New And Publication',
    'InformationTechnology' => 'Information Technology',
);
?>