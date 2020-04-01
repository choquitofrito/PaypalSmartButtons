<?php 

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
         $this->passwordEncoder = $passwordEncoder;
    }
    
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10 ; $i++){
            $user = new User();
            $user->setEmail ("user".$i."@lala.com"); // user1@lala.com, user2@lala.com etc....
            $user->setPassword($this->passwordEncoder->encodePassword(
                 $user,
                 'lepassword'.$i // lepassword1, lepassword2, etc...
             ));
            $manager->persist ($user);
        }
        $manager->flush();
    }
}
