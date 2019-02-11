<?php Class User extends CI_Model
{
    function login($user_password)
    {
$StatusInd="A";
$this->db->select("CONCAT(Surname, ' ', Firstname, ' ', Othernames) AS fullname,Email, Privilages,StatusInd,FirstLogin,Password ");
$this->db->from('users');
//$this->db->join('roles','roles.roleName=userAccounts.roleID');
$this -> db -> where('Password', $user_password);
$this -> db -> where('StatusInd', $StatusInd);

        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>


