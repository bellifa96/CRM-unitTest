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
      $contact->setUser($this->testUser());
    }else return false;
    $this->assertEquals('coucou@gmail.com',$contact->getEmail());
    $this->assertRegExp('/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/',$contact->getEmail()) &&

    $this->assertEquals('yes',$contact->getFirstName());
    $this->assertEquals('no',$contact->getLastName());

    $this->assertEquals('09.01.02.03.08',$contact->getPhone());
    $this->assertEquals('tag',$contact->getTag());

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
