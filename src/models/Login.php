<?php
require_once(realpath(MODEL_PATH . '/User.php'));

class Login extends Model {

  public function checkLogin() {
    $user = User::getOne(['email' => $this->email]);
    if($user){
      if($user->end_date){
        throw new AppException('Usuário Desligado da Empresa.');
      }
      if(password_verify($this->password, $user->password)){
        return $user;
      }
    }
    throw new AppException('Usuário e/ou Senha inválidos.');
  }
}
