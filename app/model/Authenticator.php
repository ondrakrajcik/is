<?php
use Nette\Security as NS;

class Authenticator extends Nette\Object implements NS\IAuthenticator
{
    public $database;

    function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    function authenticate(array $credentials)
    {
        list($username, $password) = $credentials;
        $row = $this->database->table('user')
            ->where('nick', $username)->fetch();

        if (!$row) {
            throw new NS\AuthenticationException('User not found.');
        }

        if ($row->password !== md5($password)) {
            throw new NS\AuthenticationException('Invalid password.');
        }

        return new NS\Identity($row->nick, "member", $row);
    }
}