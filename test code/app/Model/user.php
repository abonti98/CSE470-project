<?php
namespace App\Models;
class User
{
	//
}

2. Create a "UserTest.php" file inside "tests" and the following code :
<?php
class UserTest extends \PHPUnit\Framework\TestCase
{
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\User;
		$user->setFirstName('Billy');
		$this->assertEquals($user->getFirstName(), 'Billy');
	}
}
