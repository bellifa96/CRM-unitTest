<?php


namespace App\Tests\Entity;


use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
   public function testUser(){

     $user = new User();
     $user->setFirstName('oussama');
     $user->setLastName('bellifa');
     $user->setAge('13');
     $user->setEmail('osm@live.fr');

     $this->assertNotEmpty($user->getFirstName());
     $this->assertNotEmpty($user->getLastName());
     $this->assertEquals('oussama',$user->getFirstName());
     $this->assertEquals('bellifa',$user->getLastName());
     $this->assertEquals('13',$user->getAge());
     $this->assertEquals('osm@live.fr',$user->getEmail());
     $this->assertGreaterThanOrEqual('13',$user->getAge());
     $this->assertRegExp('/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/',$user->getEmail());
     $this->assertEquals(true,$this->isValid($user));
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
