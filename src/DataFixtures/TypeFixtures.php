<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Type;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TypeFixtures extends Fixture implements DependentFixtureInterface
{
    /*public const NAMES = [
        'Blazers',
        'Dresses',
        'Jumpsuits',
        'Tops',
        'T-Shirts',
        'Trousers',
        'Shorts',
        'Skirts',
        'Swimwears',
        'Jackets',
        'Coats',
        'Shoes',
        'Bags',
        'Jewellery',
        'Scarves',
        'Eyewear',
        'Hair Accessories',
        'Headwear',
        'Other',
    ];*/
    public function load(ObjectManager $manager)
    {
        /*foreach (self::NAMES as $key => $typeName) {
            $type = new Type();
            $type->setName($typeName);
            $type->setCategory($this->getReference('category_0'));
            $manager->persist($type);

            $this->addReference('type_' . $key, $type);
        }*/
        $type0 = new Type();
        $type0->setName('Blazers');
        $type0->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 0, $type0);
        $manager->persist($type0);

        $type1 = new Type();
        $type1->setName('Dresses');
        $type1->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 1, $type1);
        $manager->persist($type1);

        $type2 = new Type();
        $type2->setName('Jumpsuits');
        $type2->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 2, $type2);
        $manager->persist($type2);

        $type3 = new Type();
        $type3->setName('Tops');
        $type3->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 3, $type3);
        $manager->persist($type3);

        $type4 = new Type();
        $type4->setName('T-Shirts');
        $type4->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 4, $type4);
        $manager->persist($type4);

        $type5 = new Type();
        $type5->setName('Trousers');
        $type5->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 5, $type5);
        $manager->persist($type5);

        $type6 = new Type();
        $type6->setName('Shorts');
        $type6->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 6, $type6);
        $manager->persist($type6);

        $type7 = new Type();
        $type7->setName('Skirts');
        $type7->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 7, $type7);
        $manager->persist($type7);

        $type8 = new Type();
        $type8->setName('Swimwears');
        $type8->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 8, $type8);
        $manager->persist($type8);

        $type9 = new Type();
        $type9->setName('Jackets');
        $type9->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 9, $type9);
        $manager->persist($type9);

        $type10 = new Type();
        $type10->setName('Coats');
        $type10->setCategory($this->getReference('category_0'));
        $this->addReference('type_' . 10, $type10);
        $manager->persist($type10);

        $type11 = new Type();
        $type11->setName('Shoes');
        $type11->setCategory($this->getReference('category_1'));
        $this->addReference('type_' . 11, $type11);
        $manager->persist($type11);

        $type12 = new Type();
        $type12->setName('Bags');
        $type12->setCategory($this->getReference('category_1'));
        $this->addReference('type_' . 12, $type12);
        $manager->persist($type12);

        $type13 = new Type();
        $type13->setName('Jewellery');
        $type13->setCategory($this->getReference('category_1'));
        $manager->persist($type13);
        $this->addReference('type_' . 13, $type13);

        $type14 = new Type();
        $type14->setName('Scarves');
        $type14->setCategory($this->getReference('category_1'));
        $this->addReference('type_' . 14, $type14);
        $manager->persist($type14);

        $type15 = new Type();
        $type15->setName('Eyewear');
        $type15->setCategory($this->getReference('category_1'));
        $this->addReference('type_' . 15, $type15);
        $manager->persist($type15);

        $type16 = new Type();
        $type16->setName('Hair Accessories');
        $type16->setCategory($this->getReference('category_1'));
        $this->addReference('type_' . 16, $type16);
        $manager->persist($type16);

        $type17 = new Type();
        $type17->setName('Headwear');
        $type17->setCategory($this->getReference('category_1'));
        $this->addReference('type_' . 17, $type17);
        $manager->persist($type17);

        $type18 = new Type();
        $type18->setName('Other');
        $type18->setCategory($this->getReference('category_1'));
        $this->addReference('type_' . 18, $type18);
        $manager->persist($type18);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          CategoryFixtures::class,
        ];
    }
}
