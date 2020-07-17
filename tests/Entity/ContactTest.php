<?php


namespace App\Tests\Entity;


use App\Entity\Contact;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{

  public function testContact(){
    $contact = new Contact();
    $contact->setEmail('coucou@gmail.com');
    $contact->setFirstName('yes');
    $contact->setLastName('no');
    $contact->setPhone('09.01.02.03.08');
    $contact->setTag('tag');
   if($this->testUser()){
      $this->assertEquals($contact->getUser(),$this->testUser());
    }
    $this->assertEquals('coucou@gmail.com',$contact->getEmail());
    $this->assertRegExp('/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/',$contact->getEmail()) &&

    $this->assertEquals('yes',$contact->getFirstName());
    $this->assertEquals('no',$contact->getLastName());

    $this->assertEquals('09.01.02.03.08',$contact->getPhone());
    $this->assertEquals('tag',$contact->getTag());
    $this->assertRegExp('/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/',$contact->getPhone());





    $contact1 = new Contact();
    $contact1->setEmail('coucgmail.com');
    $contact1->setFirstName(555);
    $contact1->setLastName(85);
    $contact1->setPhone('phone');
    $contact1->setTag('pas_tag');
    if($this->testUser()){
      $this->assertEquals($contact1->getUser(),$this->testUser());
    }
    $this->assertNotEquals('coucou@gmail.com',$contact1->getEmail());
    $this->assertNotRegExp('/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/',$contact1->getEmail()) &&
    $this->assertNotEquals('yes',$contact1->getFirstName());
    $this->assertNotEquals('no',$contact1->getLastName());

    $this->assertNotEquals('09.01.02.03.08',$contact1->getPhone());
    $this->assertNotEquals('tag',$contact1->getTag());
    $this->assertNotRegExp('/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/',$contact1->getPhone());

  }
  public function testUser(){

    $user = new User();
    $user->setFirstName('oussama');
    $user->setLastName('bellifa');
    $user->setAge('13');
    $user->setEmail('osm@live.fr');

   if( $this->assertNotEmpty($user->getFirstName()) &&
    $this->assertNotEmpty($user->getLastName()) &&
    $this->assertEquals('oussama',$user->getFirstName()) &&
    $this->assertEquals('bellifa',$user->getLastName()) &&
    $this->assertEquals('13',$user->getAge()) &&
    $this->assertEquals('osm@live.fr',$user->getEmail()) &&
    $this->assertGreaterThanOrEqual('13',$user->getAge()) &&
    $this->assertRegExp('/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/',$user->getEmail()) &&
    $this->assertEquals(true,$this->isValid($user)) ){

     return $user;
   }else return false;

  }

  public function isValid(User $user){
    if( empty($user->getFirstName()) || count_chars($user->getFirstName()) < 3 ){
      return "firstName is not valid";
    }
    if( empty($user->getLastName()) || count_chars($user->getLastName()) < 3 ){
      return "lastName is not valid ";
    }
    if( empty($user->getAge()) || !is_integer($user->getAge()) || $user->getAge() < 13 ){
      return "age is not valid ";
    }
    $expression = "/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/"  ;
    if( empty($user->getEmail()) || !filter_var($user->getEmail(),FILTER_VALIDATE_EMAIL) ){
      {
        return "email is not valid";
      }
    }
    return true;
  }
}
