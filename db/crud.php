<?php
    class crud{
        private $db;
        function __construct($conn){
            $this-> db = $conn;
        }




public function insertSubs($fname,$lname, $email, $home, $gender, $destination){
    try {
        $result = $this->getSubsByEmail($email);
        if($result['num'] > 0)
        {  
        return false;
        }
                else{
                    $sql ="INSERT INTO subs(firstname, lastname, email, home, gender, avatar) 
                    VALUES (:fname, :lname, :email, :home, :gender, :avatar)";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindparam(':fname', $fname);
                    $stmt->bindparam(':lname', $lname);
                    $stmt->bindparam(':email', $email);
                    $stmt->bindparam(':home', $home);
                    $stmt->bindparam(':gender', $gender);
                    $stmt->bindparam(':avatar', $destination);
                    $stmt->execute();
                    return true;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        

        public function getSubs(){    
            try{        
                $sql = "select * from `subs`";
                $result = $this->db->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getSubsDetails($id){
            try{
                $sql = "SELECT * FROM subs WHERE sub_id = :id";

                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        //update subscriber record
        public function editSubs($id, $fname, $lname, $email, $home, $gender){
            try{
                $sql = "UPDATE subs SET firstname = :fname, lastname = :lname, email = :email,
                            home = :home, gender = :gender WHERE sub_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':home', $home);
                $stmt->bindparam(':gender', $gender);
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        //delete subscriber
        public function deleteSubs($id){
            try{
                $sql = "DELETE from subs WHERE sub_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }

        public function getSubsByEmail($email){
            try{
                $sql = "SELECT COUNT(*) AS num FROM subs WHERE email = :email";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':email', $email);

                $stmt->execute();
                $result = $stmt->fetch();
                return $result;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

    }


?>