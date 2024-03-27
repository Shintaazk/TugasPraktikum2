<?php 
class nilai_mahasiswa {
    public $nim, $matkul, $nilai;
    function __construct($nim,$matkul,$nilai) {
        $this->nim = $nim;
        $this->matkul = $matkul ;
        $this->nilai = $nilai;
    
    } 
    public function kelulusan() {
        return $this->nilai < 55? "Tidak Lulus" : "Lulus";
    }
    public function hasil() {
        if($this->nilai>0 && $this->nilai <= 45){
            return "E";
        }elseif ($this->nilai<= 65) {
            return "D";
        }elseif ($this->nilai<= 80) {
            return "B";      
        }elseif ($this->nilai<= 100) {
            return "A";
        }else {
            return "Nilai Tidak Valid";
        }

    }
    
}
?>