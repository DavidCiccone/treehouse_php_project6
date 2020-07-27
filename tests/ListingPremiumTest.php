<?php

require __DIR__ .'/../classes/ListingPremium.php';
require __DIR__ .'/../classes/ListingFeatured.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    private $data = [
        'id' => 0,
        'title' => 'my new title',
        'website' => 'https://www.google.com',
        'email' => 'email@test.com',
        'twitter' => 'twitterAccount',
        'description' => 'This is a description'
        ];

//Write a test for the ListingPremium class to ensure that getStatus method returns 'premium'.
   
   /** @test */
   public function listingPremiumReturnsPremium()
   {
      
      $listing = new ListingPremium($this->data);
      $this->assertEquals('premium', $listing->getStatus());
   }

//Write a test for the ListingPremium class to ensure that getDescription method returns the expected results.   

   /** @test */
   public function listingPremiumReturnsDescription()
   {
      
      $listing = new ListingPremium($this->data);
      $this->assertEquals('This is a description', $listing->getDescription(), 'Description not working'); 
   }
   

}
