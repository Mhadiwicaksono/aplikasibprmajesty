<?php

namespace App\Controllers;

use App\Models\model_inventaris\BCpkmModel;

class Inventaris extends BaseController
{
    protected $bcpkmmodel;
    public function __construct()
    {
        $this->bcpkmmodel = new BCpkmModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        echo view('/inventaris/index', $data);
    }


    // Inventaris BPRMGR Batam Center
    public function bc()
    {
        $data = [
            'title' => 'Batam Center'
        ];
        echo view('/inventaris/inv_bc/index', $data);
    }

    public function bc_pkm()
    {
        $data = [
            'title' => 'PKM',
            'db_bcpkm' => $this->bcpkmmodel->getAllbcpkm()
        ];
        echo view('/inventaris/inv_bc/bc_pkm', $data);
    }

    public function bc_pkm_detail($nomor_inventaris)
    {
        $data = [
            'title' => 'PKM',
            'db_bcpkm' => $this->bcpkmmodel->getbyNomorinventarisbcpkm($nomor_inventaris),
            'nomor_inventaris' => $nomor_inventaris
        ];
        echo view('/inventaris/inv_bc/bc_pkm_detail', $data);
    }

    public function ajax_edit_bcpkm($nomor_inventaris_bcpkm)
    {
        $data = $this->bcpkmmodel->getbyNomorinventarisbcpkm($nomor_inventaris_bcpkm);
        echo json_encode($data);
    }

    public function bc_prk()
    {
        $data = [
            'title' => 'PRK'
        ];
        echo view('/inventaris/inv_bc/bc_prk', $data);
    }

    public function bc_fno()
    {
        $data = [
            'title' => 'FNO'
        ];
        echo view('/inventaris/inv_bc/bc_fno', $data);
    }

    public function bc_fnb()
    {
        $data = [
            'title' => 'FNB'
        ];
        echo view('/inventaris/inv_bc/bc_fnb', $data);
    }
    // ==============================

}
