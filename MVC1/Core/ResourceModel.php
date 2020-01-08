<?php
    namespace Main\Core;

    use Main\Core\ResourceModelInterface;
    use PDO;
    use Main\Config\Database;
    use Main\Core\Model;

    class ResourceModel implements ResourceModelInterface
    {
        private $table;
        private $id;
        private $model;

        public function _init($table,$id,$model)
        {
            $this->table=$table;
            $this->id=$id;
            $this->model=$model;
        }

        public function save($model)
        {
            $conn=Database::getBdd();
            $prop=$this->model->getProperties();
            $key="";
            $value="";
            
          
            foreach($prop as $k=>$v)
            {
                $key .= $k.", ";
                $value .= "'".$v."', " ;
            }

            $sql = "INSERT INTO " .$this->table. " (".trim($key,", ").") VALUES (".trim($value,", "). ")";
            echo $sql;
            $stmt=$conn->prepare($sql);
            return $stmt->execute();
        }

        public function delete($id)
        {
            $conn=Database::getBdd();
            $sql="DELETE FROM ".$this->table." WHERE  ".$this->id."=?";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(1,$id);
            return $stmt->execute();
        }

        public function getSingleInfo($id)
        {
            $conn=Database::getBdd();
            $sql="SELECT * FROM ".$this->table." WHERE ".$this->id."=?";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(1,$id);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetch();
        }

        public function getFull()
        {
            $conn=Database::getBdd();
            $sql="SELECT * FROM ".$this->table;
            $stmt=$conn->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function edit($id)
        {
            $str = $this->model->getProperties();
            $update='';
            foreach ($str as $key => $value) {
                $update .=$key . " = '" . $value . "', ";   
            }
            $sql = "UPDATE ".$this->table." SET ".trim($update,", ") . " WHERE ".$this->id . " = ?;";
            $req = Database::getBdd()->prepare($sql);
    
            return $req->execute([$id]);
        }

        public function search($pattern)
        {
            $conn=Database::getBdd();
            $sql="SELECT * FROM ".$this->table." WHERE name LIKE ?";
            $param="%".$pattern."%";
            $stmt=$conn->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute([$param]);
            return $stmt->fetchAll();
        }

        public function getNumber()
        {
            $conn=Database::getBdd();
            $sql="SELECT COUNT(*) FROM ".$this->table;
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        }
        

    }