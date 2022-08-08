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

    public function AddUser()
    {
        $result = $this->Sqlquery->SELECT();
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <th scope='row'>${row['UsuarioId']}</th>
                <td>${row['LastName']}</td>
                <td>${row['FirstName']}</td>
                <td>${row['Email']}</td>
            </tr>
            ";
        }
    }
}

$Obj = new Usuario('Rojas', 'Josue', 'paredesjosue77', 'admin123');
$Obj->AddUser();
