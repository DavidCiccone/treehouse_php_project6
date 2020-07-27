<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{

    private $data = [
            'id' => 0,
            'title' => 'my new title',
            'website' => 'https://www.google.com',
            'email' => 'email@test.com',
            'twitter' => 'twitterAccount'
            ]; 

//Write tests for the ListingBasic class to ensure that all three Exception messages are returned as expected.
   /** @test */
   public function listingBasicMustHaveValidData()
   {
       $this->expectExceptionMessage('Unable to create a listing, data unavailable');
       $listing = new ListingBasic();
   }

   /** @test */
   public function listingBasicMustHaveValidDataId()
   {
       $id = ['id' => 0];
       $this->expectExceptionMessage('Unable to create a listing, invalid title');
       $listingId = new ListingBasic($id);       
   }

    /** @test */
    public function listingBasicMustHaveValidDataTitle()
    {
        $title = ['title' => 'my new title'];
        $this->expectExceptionMessage('Unable to create a listing, invalid id');
        $listingTitle = new ListingBasic($title);  
    }
    
//Write a test for the ListingBasic class to ensure that an Object is created when passing the minimum, id and title. 
    
    /** @test */
    public function listingBasicCreatesObjectWhenPassingIdAndTitle()
    {
        $data = [
                 'id' => 0,
                 'title' => 'my new title'
                ];
        $this->assertIsObject(new ListingBasic($this->data));
        
    }

//Write a test for the ListingBasic class to ensure that getStatus method returns 'basic'.
     
    /** @test */
    public function listingBasicgetStatusReturnsBasic()
    {     
        $listing = new ListingBasic($this->data);
        $this->assertEquals('basic', $listing->getStatus());       
    }
    
//Write a test for the ListingBasic class to ensure that the get method for each property is returning the expected results: id, title, website, email, twitter.
       
     /** @test */
     public function listingBasicReturnExpectedResults()
     {     
         $listing = new ListingBasic($this->data);
         $this->assertEquals(0, $listing->getId(), 'id not working');
         $this->assertEquals('my new title', $listing->getTitle(), 'title not working');
         $this->assertEquals('https://www.google.com', $listing->getWebsite(), 'website not working');
         $this->assertEquals('email@test.com', $listing->getEmail(), 'email not working');
         $this->assertEquals('twitterAccount', $listing->getTwitter(), 'twitter not working');        
     }

}
