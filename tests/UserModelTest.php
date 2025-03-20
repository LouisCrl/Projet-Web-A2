<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Models\UserModel;
require_once 'src/Models/UserModel.php';
use App\Models\FileDatabase;
require_once 'src/Models/FileDatabase.php';

class UserModelTest extends TestCase{
    public function testGetUser(){
        $userModel = new UserModel(new FileDatabase('USERS', ['LASTNAME', 'FIRSTNAME','PASSWORD','MAIL','ID_ROLE']));
        $user = $userModel->getUser(1);
        $this->assertSame($user['ID'], '1');
        $this->assertSame($user['LASTNAME'], 'Pope');
        $this->assertSame($user['FIRSTNAME'], 'James');
        $this->assertSame($user['PASSWORD'], '@BFHdQlAQ0');
        $this->assertSame($user['MAIL'],'natashadominguez@gmail.com');
        $this->assertSame($user['ID_ROLE'], '1');
    }

    public function testGetAllUsers(){
        $userModel = new UserModel(new FileDatabase('USERS', ['LASTNAME', 'FIRSTNAME','PASSWORD','MAIL','ID_ROLE']));
        $users = $userModel->getAllUsers();
        $this->assertCount(50, $users);
    }

    public function testUpdateUser(){
        $userModel = new UserModel(new FileDatabase('USERS', ['LASTNAME', 'FIRSTNAME','PASSWORD','MAIL','ID_ROLE']));
        $user = $userModel->getUser(3);
        $this->assertSame($user['ID'], '3');
        $this->assertSame($user['LASTNAME'], 'Ballard');
        $this->assertSame($user['FIRSTNAME'], 'Louis');
        $this->assertSame($user['PASSWORD'], 's6uUyki_)7');
        $this->assertSame($user['MAIL'],'lindamoreno@ross.com');
        $this->assertSame($user['ID_ROLE'], '3');
        $userModel->updateUser(3,"Ballard","Tom","s6uUyki_)7","lindamoreno@ross.com","3");
        $user = $userModel->getUser(3);
        $this->assertSame($user['ID'], '3');
        $this->assertSame($user['LASTNAME'], 'Ballard');
        $this->assertSame($user['FIRSTNAME'], 'Tom');
        $this->assertSame($user['PASSWORD'], 's6uUyki_)7');
        $this->assertSame($user['MAIL'],'lindamoreno@ross.com');
        $this->assertSame($user['ID_ROLE'], '3');
        $userModel->updateUser(3,"Ballard","Louis","s6uUyki_)7","lindamoreno@ross.com","3");
    }
}