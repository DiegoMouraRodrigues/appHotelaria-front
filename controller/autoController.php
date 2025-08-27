    <?php
    require_once __DIR__ . "/../model/UserModel.php";
    

    class autoController{
        public static function login($conn, $data){
            $data ['email'] = trim ($data['email']);
            $data ['senha'] = trim ($data['senha']);

            //confirmar se tem algum campo vazio
            if (empty($data['email']) || empty($data['senha']) ) {
                return jsonResponse([
                    "status"=>"erro",
                    "message"=>"preecha todos os campos!!"
                ], 401);
            }
            $user = Usermodel:: validateUser($conn, $data["email"], $data["senha"]);
            if($user){
                return jsonResponse([
                    "id"=>$user['id'],
                    "nome"=>$user['nome'],
                    "email"=>$user['email'],
                    "permissao" =>$user['cargo']
            ]);
            }else{
                return jsonResponse( ["resposta"=> "deu merda"], 401);
        }
    }

}


?>