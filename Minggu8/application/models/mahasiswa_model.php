<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Mareta Gadis','Prodi'=>'TIF'],
        ['Nama'=>'Sakinah Putri','Prodi'=>'MIF'],
        ['Nama'=>'Dwi Wardhani','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
}