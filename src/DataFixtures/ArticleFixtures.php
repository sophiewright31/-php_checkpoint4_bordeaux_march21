<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    private Slugify $slugify;

    public function __construct(Slugify $slugify) {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setName('Tweed Blazer');
        $article1->setSlug($this->slugify->generate($article1->getName()));
        $article1->setType($this->getReference('type_0'));
        $article1->setDescription('Short Tweed Blazer with perl buttons');
        $article1->setBrand('Parisian');
        $article1->setSize('36');
        $article1->setPicture('https://images.asos-media.com/products/parisian-blazer-court-en-tweed-avec-boutons-effet-perle/12388123-1-black?$n_1280w$&wid=1125&fit=constrain');
        $article1->setBuyingYear(2019);
        $article1->setAvailability('Available');
        $article1->setLocation('Bordeaux');
        $article1->addColor($this->getReference('color_0'));
        $article1->addColor($this->getReference('color_11'));
        $article1->addStyle($this->getReference('style_5'));
        $article1->addStyle($this->getReference('style_2'));
        $article1->addStyle($this->getReference('style_4'));
        $manager->persist($article1);
        $this->addReference('article_1', $article1);

        $article2 = new Article();
        $article2->setName('Pastel Green Dress');
        $article2->setSlug($this->slugify->generate($article2->getName()));
        $article2->setType($this->getReference('type_1'));
        $article2->setDescription('Short dress cache-coeur with lace');
        $article2->setBrand('Asos Design');
        $article2->setSize('36');
        $article2->setPicture('https://images.asos-media.com/products/asos-design-robe-courte-cache-cur-avec-dentelle-jupe-superposee-et-taille-drapee/12384072-1-sagegreen?$n_240w$&wid=120&fit=constrain');
        $article2->setBuyingYear(2020);
        $article2->setAvailability('Laundry');
        $article2->setLocation('Bordeaux');
        $article2->addColor($this->getReference('color_4'));
        $article2->addStyle($this->getReference('style_5'));
        $article2->addStyle($this->getReference('style_0'));
        $manager->persist($article2);
        $this->addReference('article_2', $article2);

        $article3 = new Article();
        $article3->setName('Floral Red Jumpsuit');
        $article3->setSlug($this->slugify->generate($article3->getName()));
        $article3->setType($this->getReference('type_2'));
        $article3->setDescription('Short floral red jumpsuit with long sleeves');
        $article3->setBrand('H&M');
        $article3->setSize('34');
        $article3->setPicture('https://i.ebayimg.com/images/g/Ua4AAOSwQJ1eoLzm/s-l64.jpg');
        $article3->setBuyingYear(2019);
        $article3->setAvailability('Available');
        $article3->setLocation('Bordeaux');
        $article3->addColor($this->getReference('color_9'));
        $article3->addStyle($this->getReference('style_1'));
        $manager->persist($article3);
        $this->addReference('article_3', $article3);

        $article4 = new Article();
        $article4->setName('Short Floral Top');
        $article4->setSlug($this->slugify->generate($article4->getName()));
        $article4->setType($this->getReference('type_3'));
        $article4->setDescription('Short floral top Bardot Style');
        $article4->setBrand('Missguided');
        $article4->setSize('34');
        $article4->setPicture('https://images.asos-media.com/products/missguided-crop-top-bardot-style-champetre-blanc-fleuri/11706829-1-white?$n_240w$&wid=120&fit=constrain');
        $article4->setBuyingYear(2019);
        $article4->setAvailability('Available');
        $article4->setLocation('Bordeaux');
        $article4->addColor($this->getReference('color_11'));
        $article4->addStyle($this->getReference('style_1'));
        $article4->addStyle($this->getReference('style_7'));
        $manager->persist($article4);
        $this->addReference('article_4', $article4);

        $article5 = new Article();
        $article5->setName('Logo T-shirt');
        $article5->setSlug($this->slugify->generate($article5->getName()));
        $article5->setType($this->getReference('type_4'));
        $article5->setDescription('T-Shirt with logo');
        $article5->setBrand('Noisy May');
        $article5->setSize('S');
        $article5->setPicture('https://images.asos-media.com/products/image/9000622-1-brightwhite?wid=400');
        $article5->setBuyingYear(2018);
        $article5->setAvailability('Available');
        $article5->setLocation('Bordeaux');
        $article5->addColor($this->getReference('color_11'));
        $manager->persist($article5);
        $this->addReference('article_5', $article5);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TypeFixtures::class,
            StyleFixtures::class,
            ColorFixtures::class,
        ];
    }
}
