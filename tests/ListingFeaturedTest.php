<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
   private $data = [
      'id' => 0,
      'title' => 'my new title',
      'website' => 'https://www.google.com',
      'email' => 'email@test.com',
      'twitter' => 'twitterAccount',
      'coc' => 'my new content'
      ]; 


   //Write a test for the ListingFeatured class to ensure that getStatus method returns 'featured'.

   /** @test */
   public function listingFeaturedGetStatusReturnsFeatured()
   {
        $listing = new ListingFeatured($this->data);
        $this->assertEquals('featured', $listing->getStatus());  
   }
   
   //Write a test for the ListingFeatured class to ensure that getCoc method returns the expected results.

   /** @test */
   public function listingFeaturedGeCocResults()
   {
      $listing = new ListingFeatured($this->data);
      $this->assertEquals('my new content', $listing->getCoc());
   }

}
