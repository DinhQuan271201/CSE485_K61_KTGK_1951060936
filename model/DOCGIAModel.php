<?php
require_once 'config/db.php';
class DOCGIAModal{
    private $madg;
    private $hovaten;
    private $namsinh;
    private $nghenghiep;
    private $ngaycapthe;
    private $ngayhethan;
    private $diachi;
    public function getAllBD(){
        $conn = $this->connectDb();
        $sql = "SELECT * FROM DOCGIA";
        $result = mysqli_query($conn, $sql);
        $arr_bd = [];
        if(mysqli_num_rows($result)>0){
            $arr_bd = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $arr_bd;
    }
    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO DOCGIA(madg, hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi)
        VALUES ('{$param['hovaten']}', '{$param['gioitinh']}', '{$param['namsinh']}', '{$param['nghenghiep']}', '{$param['ngaycapthe']}', '{$param['ngayhethan']}', '{$param['diachi']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }
    public function connectDb() {
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }
    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
    public function getBDById($madg = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM DOCGIA WHERE madg={$madg}";
        $results = mysqli_query($connection, $querySelect);
        $bdArr = [];
        if (mysqli_num_rows($results) > 0) {
            $bds = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $bdArr = $bds[0];
        }
        $this->closeDb($connection);

        return $bdArr;
    }
    public function update($bd = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE DOCGIA
        SET hovaten = '{$bd['hovaten']}',gioitinh = '{$bd['gioitinh']}', namsinh = '{$bd['namsinh']}', nghenghiep = '{$bd['nghenghiep']}', ngaycapthe = '{$bd['ngaycapthe']}', ngayhethan = '{$bd['ngayhethan']}'  WHERE diachi = {$bd['diachi']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }
    public function delete($madg = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM DOCGIA WHERE madg = {$madg}";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }
}

?>