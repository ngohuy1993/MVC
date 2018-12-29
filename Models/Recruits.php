<?php
class Recruits extends Model
{
    public function create($ten, $sdt, $email, $ghichu)
    {
        $sql = "INSERT INTO recruits (Ten, Email, SDT, GhiChu) VALUES (:Ten, :Email, :SDT, :GhiChu)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Ten' => $ten,
            'Email' => $email,
            'SDT' =>$email,
            'GhiChu' => $ghichu

        ]);
    }

    public function showRecruit($id)
    {
        $sql = "SELECT * FROM recruits WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllRecruits()
    {
        $sql = "SELECT * FROM Recruits";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    /*public function edit($id, $title, $description)
    {
        $sql = "UPDATE Recruits SET title = :title, description = :description , updated_at = :updated_at WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM Recruits WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }*/
}
?>