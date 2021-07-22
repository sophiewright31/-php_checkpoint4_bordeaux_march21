<?php

namespace App\DataFixtures;

use App\Entity\Style;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StyleFixtures extends Fixture
{
    const STYLES = [
        'Spring',
        'Summer',
        'Fall',
        'Winter',
        'Night Out',
        'Chic',
        'Classic',
        'Homewear',
        'Sport',
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::STYLES as $key => $styleName) {
            $style = new Style();
            $style->setName($styleName);

            $manager->persist($style);
            $this->addReference('style_' . $key, $style);
        }
        $manager->flush();
    }
}
