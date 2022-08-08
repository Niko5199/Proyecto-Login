<?php
require 'Sql.php';

class Usuario
{
    public function __construct(string $LastName, string $FirstName, string $Email, string $Password)
    {
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->Sqlquery = new SQLquery();
    }

    public function SelectUsers()
    {
        $result = $this->Sqlquery->SELECT();
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <th scope='row'>${row['UsuarioId']}</th>
                <td>${row['LastName']}</td>
                <td>${row['FirstName']}</td>
                <td>${row['Email']}</td>
            </tr>
            ";
        }
    }
    public function AddUser()
    {
        $this->Sqlquery->ADD($this->LastName, $this->FirstName, $this->Email, $this->Password);
    }
    public function DeleteUser($UsuarioID)
    {
        $this->Sqlquery->DELETE($UsuarioID);
    }
    public function UpdateUser(string $LastName, string $FirstName, string $Email, int $UsuarioID)
    {
        $this->Sqlquery->UPDATE($LastName, $FirstName, $Email, $UsuarioID);
    }
}

$Obj = new Usuario('Rojas', 'Arturo', 'rojasrosetearturo@gmail.com', 'arturo123');


// $Obj->AddUser();
// $Obj->SelectUsers();
// $Obj->DeleteUser(2);

$Obj->UpdateUser('Linares', 'Luis', 'luislinares@outlook.com', 1);
