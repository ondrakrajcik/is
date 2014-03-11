<?php

namespace App;

use Nette,Model;
use Nette\Application\UI;

/**
 * Sign in/out presenters.
 */
class SignPresenter extends BasePresenter
{
    
    protected function createComponentSignInForm(){
        $form = new UI\Form;
        $form->addText("nick","Jméno")
                ->setAttribute("class","textField form-control");
        $form->addPassword("password","Heslo")
                ->setAttribute("class","textField form-control");
        $form->addSubmit("submit","Přihlásit se")
                ->setAttribute("class","submitButton btn btn-default");
        $form->onSuccess[] = array($this, 'signInFormSubmitted');
        return $form;
    }

    public function SignInFormSubmitted(UI\Form $form){
        $values = $form->getValues();
        $nick = $values->nick;
        $password = $values->password;
        $this->user->setExpiration(0,TRUE);// odhlasi uzivatele po zavreni prohlizece
        try
        {
           $this->user->login($nick,$password);
            $this->flashMessage("Přihlášen");
           $this->redirect('Homepage:default');

        }catch(Nette\Security\AuthenticationException $e){

            if($e->getMessage() == "Invalid password.")
            {
                $this->flashMessage("Zadal jste špatné heslo.");
            }
            else if($e->getMessage() == "User not found.")
            {
                $this->flashMessage("Zadaný uživatel neexistuje.");
            }
        }
    }

    public function actionOut(){
            $this->getUser()->logout();
            $this->flashMessage('Byl jste odhlášen');
            $this->redirect('login');
    }

}
