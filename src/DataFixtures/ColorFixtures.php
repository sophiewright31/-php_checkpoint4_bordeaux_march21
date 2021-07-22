<?php

namespace App\DataFixtures;

use App\Entity\Color;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ColorFixtures extends Fixture
{
    const COLORS = [
        'Black',
        'Blue',
        'Brown',
        'Cream',
        'Green',
        'Grey',
        'Orange',
        'Pink',
        'Purple',
        'Red',
        'Yellow',
        'White',
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::COLORS as $key => $colorName) {
            $color = new Color();
            $color->setName($colorName);

            $manager->persist($color);
            $this->addReference('color_' . $key, $color);
        }
        $manager->flush();
    }
}
