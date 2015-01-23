<?php
$shortContent = new ContentController();
return array(
	
	'KnowAboutUs' => 'Über uns',
	'WhoWeAre' => ' Wer wir sind',
	'WhoWeAreShort' => $shortContent->show(ContentKey::$WHO_WE_ARE,Language::german()),
	'OurAdvantages' => 'Unsere Vorteile',
    'OurAdvantagesShort' => $shortContent->show(ContentKey::$OUR_ADVANTAGE,Language::german()),
	'OurExpertise' => 'Unsere Expertise',
	'ContactWithUs' => 'Kontakt',
	'NewAndPublication' => 'Neuigkeiten',
    'InformationTechnology' => 'Information Technology.',
	'OurExpertiseContent1' => 'Consulting.',
	'OurExpertiseContent2' => 'IT Management.',
	'OurExpertiseContent3' => 'Projektmanagement & Steuerung.',
	'OurExpertiseContent4' => 'Globales Netzwerk.',
	'OurExpertiseContent5' => 'Continental Interlacing.',
	'OurExpertiseContent6' => 'Handelsptimierung',
	'TEL' => 'Tel',
	'MAIL' => 'Email' ,
	'EMAIL' => 'Email',
	'GET_IN_TOUCH' => 'Kontaktaufnahme',
	'MESSAGE' => 'Nachricht',
	'OUR_CLIENT' => 'Unsere Kunden',
	'OUR_TEAM' => 'Unser Team',

);
?>