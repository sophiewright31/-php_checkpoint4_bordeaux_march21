<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Type;
use App\Entity\Category;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TypeFixtures extends Fixture implements DependentFixtureInterface
{
    private Slugify $slugify;

    public function __construct(Slugify $slugify) {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        $type0 = new Type();
        $type0->setName('Blazers');
        $type0->setCategory($this->getReference('category_0'));
        $type0->setSlug($this->slugify->generate($type0->getName()));
        $this->addReference('type_' . 0, $type0);
        $manager->persist($type0);

        $type1 = new Type();
        $type1->setName('Dresses');
        $type1->setCategory($this->getReference('category_0'));
        $type1->setSlug($this->slugify->generate($type1->getName()));
        $this->addReference('type_' . 1, $type1);
        $manager->persist($type1);

        $type2 = new Type();
        $type2->setName('Jumpsuits');
        $type2->setCategory($this->getReference('category_0'));
        $type2->setSlug($this->slugify->generate($type2->getName()));
        $this->addReference('type_' . 2, $type2);
        $manager->persist($type2);

        $type3 = new Type();
        $type3->setName('Tops');
        $type3->setCategory($this->getReference('category_0'));
        $type3->setSlug($this->slugify->generate($type3->getName()));
        $this->addReference('type_' . 3, $type3);
        $manager->persist($type3);

        $type4 = new Type();
        $type4->setName('T-Shirts');
        $type4->setCategory($this->getReference('category_0'));
        $type4->setSlug($this->slugify->generate($type4->getName()));
        $this->addReference('type_' . 4, $type4);
        $manager->persist($type4);

        $type5 = new Type();
        $type5->setName('Trousers');
        $type5->setCategory($this->getReference('category_0'));
        $type5->setSlug($this->slugify->generate($type5->getName()));
        $this->addReference('type_' . 5, $type5);
        $manager->persist($type5);

        $type6 = new Type();
        $type6->setName('Shorts');
        $type6->setCategory($this->getReference('category_0'));
        $type6->setSlug($this->slugify->generate($type6->getName()));
        $this->addReference('type_' . 6, $type6);
        $manager->persist($type6);

        $type7 = new Type();
        $type7->setName('Skirts');
        $type7->setCategory($this->getReference('category_0'));
        $type7->setSlug($this->slugify->generate($type7->getName()));
        $this->addReference('type_' . 7, $type7);
        $manager->persist($type7);

        $type8 = new Type();
        $type8->setName('Swimwears');
        $type8->setCategory($this->getReference('category_0'));
        $type8->setSlug($this->slugify->generate($type8->getName()));
        $this->addReference('type_' . 8, $type8);
        $manager->persist($type8);

        $type9 = new Type();
        $type9->setName('Jackets');
        $type9->setCategory($this->getReference('category_0'));
        $type9->setSlug($this->slugify->generate($type9->getName()));
        $this->addReference('type_' . 9, $type9);
        $manager->persist($type9);

        $type10 = new Type();
        $type10->setName('Coats');
        $type10->setCategory($this->getReference('category_0'));
        $type10->setSlug($this->slugify->generate($type10->getName()));
        $this->addReference('type_' . 10, $type10);
        $manager->persist($type10);

        $type11 = new Type();
        $type11->setName('Shoes');
        $type11->setCategory($this->getReference('category_1'));
        $type11->setSlug($this->slugify->generate($type11->getName()));
        $this->addReference('type_' . 11, $type11);
        $manager->persist($type11);

        $type12 = new Type();
        $type12->setName('Bags');
        $type12->setCategory($this->getReference('category_1'));
        $type12->setSlug($this->slugify->generate($type12->getName()));
        $this->addReference('type_' . 12, $type12);
        $manager->persist($type12);

        $type13 = new Type();
        $type13->setName('Jewellery');
        $type13->setCategory($this->getReference('category_1'));
        $type13->setSlug($this->slugify->generate($type13->getName()));
        $manager->persist($type13);
        $this->addReference('type_' . 13, $type13);

        $type14 = new Type();
        $type14->setName('Scarves');
        $type14->setCategory($this->getReference('category_1'));
        $type14->setSlug($this->slugify->generate($type14->getName()));
        $this->addReference('type_' . 14, $type14);
        $manager->persist($type14);

        $type15 = new Type();
        $type15->setName('Eyewear');
        $type15->setCategory($this->getReference('category_1'));
        $type15->setSlug($this->slugify->generate($type15->getName()));
        $this->addReference('type_' . 15, $type15);
        $manager->persist($type15);

        $type16 = new Type();
        $type16->setName('Hair Accessories');
        $type16->setCategory($this->getReference('category_1'));
        $type16->setSlug($this->slugify->generate($type16->getName()));
        $this->addReference('type_' . 16, $type16);
        $manager->persist($type16);

        $type17 = new Type();
        $type17->setName('Headwear');
        $type17->setCategory($this->getReference('category_1'));
        $type17->setSlug($this->slugify->generate($type17->getName()));
        $this->addReference('type_' . 17, $type17);
        $manager->persist($type17);

        $type18 = new Type();
        $type18->setName('Other');
        $type18->setCategory($this->getReference('category_1'));
        $type18->setSlug($this->slugify->generate($type18->getName()));
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
