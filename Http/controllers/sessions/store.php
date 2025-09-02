<?php
use Core\App;
use Core\Database;
use Http\Forms\LoginForm;
use Core\Authenticator;


$db = App::resolve(Database::class);

    $form=LoginForm::validate( $attributes=[
    'email'=>$_POST['email'],
    'password'=>$_POST['password']
]);
$signedIn=(new Authenticator)->attempt($attributes['email'], $attributes['password']);


if(!$signedIn) {
    $form->error('email', 'No Matching User Found')
->throw();

}
    redirect('/');




