<?php

interface IUserProvider{
    public function getUserData(): array;
}

//API Externa
class OldApis {
    public function fetchUserData(): array {
        $data = file_get_contents('data_old.json');
        $array_data = json_decode($data, true);
        return $array_data; //[]
    }
}

class NewAPIUser extends OldApis{

}

//esta clase se encargara de adaptar la informacion de la API externa
class UserAdapter implements IUserProvider{
    private OldApis $oldApi; //validando que solo va recibir una instancia de OldApis
    public string $email;

    public function __construct(OldApis $oldApi)
    {
        $this->oldApi = $oldApi;
    }

    public function getUserData(): array
    {
        //codigo que necesitas para que la informacion se adapte
        $old_data = $this->oldApi->fetchUserData(); //[]
        return [
            'name' => $old_data['first_name'] . ' ' . $old_data['last_name'],
            'contact' => $old_data['phone']
        ];
    }
}

class ProviderUserMyAPI{

    //relacionarse con el adaptador
    public function getUserData(IUserProvider $provider){
        return $provider->getUserData();
    }
}

//prueba
$apiExterna = new OldApis();

$adaptador = new UserAdapter($apiExterna);
$data = $adaptador->getUserData();
echo json_encode($data, true);

//prueba
$miApi = new ProviderUserMyAPI();
$data2 = $miApi->getUserData(new UserAdapter($apiExterna));
echo json_encode($data2, true);