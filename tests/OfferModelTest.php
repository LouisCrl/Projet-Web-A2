<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Models\OfferModel;
require_once 'src/Models/OfferModel.php';
use App\Models\FileDatabase;
require_once 'src/Models/FileDatabase.php';

class OfferModelTest extends TestCase {
    public function testGetOffer() {
        $offerModel = new OfferModel(new FileDatabase('OFFERS', ['TITLE', 'RELEASE_DATE', 'CITY', 'GRADE', 'BEGIN_DATE', 'DURATION', 'RENUMBER', 'DESCRIPTION', 'ID_COMPANY']));
        $offer = $offerModel->getOffer(1);
        $this->assertSame($offer['ID'], '1');
        $this->assertSame($offer['TITLE'], 'Engineer, electronics');
        $this->assertSame($offer['RELEASE_DATE'], '25/09/2014');
        $this->assertSame($offer['CITY'], 'Joshuatown');
        $this->assertSame($offer['GRADE'], 'several');
        $this->assertSame($offer['BEGIN_DATE'], '28/07/1984');
        $this->assertSame($offer['DURATION'], '4');
        $this->assertSame($offer['RENUMBER'], '2102.25');
        $this->assertSame($offer['DESCRIPTION'], 'Should respond short start word teacher.');
        $this->assertSame($offer['ID_COMPANY'], '44');
    }

    public function testGetAllOffers() {
        $offerModel = new OfferModel(new FileDatabase('OFFERS', ['TITLE', 'RELEASE_DATE', 'CITY', 'GRADE', 'BEGIN_DATE', 'DURATION', 'RENUMBER', 'DESCRIPTION', 'ID_COMPANY']));
        $offers = $offerModel->getAllOffers();
        $this->assertCount(50, $offers);
    }

    public function testUpdateOffer() {
        $offerModel = new OfferModel(new FileDatabase('OFFERS', ['TITLE', 'RELEASE_DATE', 'CITY', 'GRADE', 'BEGIN_DATE', 'DURATION', 'RENUMBER', 'DESCRIPTION', 'ID_COMPANY']));
        $offer = $offerModel->getOffer(3);
        $this->assertSame($offer['ID'], '3');
        $this->assertSame($offer['TITLE'], 'Surveyor, land/geomatics');
        $this->assertSame($offer['RELEASE_DATE'], '15/09/2016');
        $this->assertSame($offer['CITY'], 'Darrellport');
        $this->assertSame($offer['GRADE'], 'professor');
        $this->assertSame($offer['BEGIN_DATE'], '06/02/1975');
        $this->assertSame($offer['DURATION'], '11');
        $this->assertSame($offer['RENUMBER'], '1668.33');
        $this->assertSame($offer['DESCRIPTION'], 'Rest north age PM them on window.');
        $this->assertSame($offer['ID_COMPANY'], '39');
        $offerModel->updateOffer(3, "Surveyor, land/geomatics", "15/09/2016", "Darrellport", "professor", "06/02/1975", "11", "1668.33", "Updated description", "39");
        $offer = $offerModel->getOffer(3);
        $this->assertSame($offer['ID'], '3');
        $this->assertSame($offer['TITLE'], 'Surveyor, land/geomatics');
        $this->assertSame($offer['RELEASE_DATE'], '15/09/2016');
        $this->assertSame($offer['CITY'], 'Darrellport');
        $this->assertSame($offer['GRADE'], 'professor');
        $this->assertSame($offer['BEGIN_DATE'], '06/02/1975');
        $this->assertSame($offer['DURATION'], '11');
        $this->assertSame($offer['RENUMBER'], '1668.33');
        $this->assertSame($offer['DESCRIPTION'], 'Updated description');
        $this->assertSame($offer['ID_COMPANY'], '39');
        $offerModel->updateOffer(3, "Surveyor, land/geomatics", "15/09/2016", "Darrellport", "professor", "06/02/1975", "11", "1668.33", "Rest north age PM them on window.", "39");
    }
}