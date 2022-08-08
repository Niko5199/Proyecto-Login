<?php

$mysqli = require 'Connection.php';


class SQLquery
{
    public function __construct()
    {
        $this->mysqli = $GLOBALS['mysqli'];
    }

    public function SELECT()
    {
        $result = $this->mysqli->query('SELECT * FROM usuario');
        return $result;
    }
    public function ADD(string $LastName, string $FirstName, string $Email, string $Password)
    {
        $md5Pass = md5($Password);
        $query = ("INSERT INTO usuario(LastName, FirstName, Email, Password)
                                        VALUES ('${LastName}', '${FirstName}', '${Email}', '${md5Pass}' )");
        if ($this->mysqli->query($query) === TRUE) echo "Usuario creado";
        else echo "Error";
    }
    public function DELETE(int $UsuarioID)
    {
        $query = "DELETE FROM usuario WHERE UsuarioID = ${UsuarioID}";

        if ($this->mysqli->query($query) === TRUE) echo "Record deleted successfully";
        else echo "Error deleting record: ";
    }
    public function UPDATE(string $LastName, string $FirstName, string $Email, int $UsuarioID)
    {
        $query = "UPDATE usuario SET LastName='${LastName}', FirstName='${FirstName}', Email='${Email}' WHERE UsuarioId=${UsuarioID}";

        if ($this->mysqli->query($query) === TRUE) echo "Record updated successfully";
        else echo "Error updating record: ";
    }
}

// $Obj = new SQLquery();
// $Obj->ADD('Cabrera', 'Luisa', 'luisa@gmail.com', 'luisa123');
