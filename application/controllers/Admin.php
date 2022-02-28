<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        if (is_logged_in()) {
            redirect('auth');
        } else {
            $this->load->model('AdminModel');
            $this->load->helper(array('url', 'download'));
            date_default_timezone_set('Asia/Jakarta');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard CRD'
        ];

        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/dashboard', $data);
        }
    }

    public function orderdiproses()
    {
        $data = [
            'title' => 'Order Diproses'
        ];

        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/orderdiproses', $data);
        }
    }

    // ORDER BARU
    public function orderbaru()
    {
        $data = [
            'title' => 'Order Baru'
        ];

        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/orderbaru', $data);
        }
    }
    // END ORDER BARU

    //SEMUA ORDER

    public function semuaorder()
    {
        $data = [
            'title' => 'Semua Order'
        ];
        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/semuaorder', $data);
        }
    }

    //END SEMUA ORDER

    // PELANGGAN ------------------------------------------------------------------------------------------------------------------------

    public function pelanggan()
    {
        $data = [
            'title' => 'Pelanggan'
        ];
        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/pelanggan', $data);
        }
    }
    // END PELANGGAN -----------------------------------------------------------------------------------------------------------------------

    public function produk()
    {
        $data = [
            'title' => 'Produk'
        ];
        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/produk', $data);
        }
    }

    public function tabelproduk()
    {
        $produk = $this->input->get('produk');

        $data = [
            'title' => 'Produk',
            'produk' => $produk
        ];

        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/tabelproduk', $data);
        }
    }

    public function laporan()
    {
        $data = [
            'title' => 'Laporan'
        ];
        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/laporan', $data);
        }
    }

    function registrasi()
    {
        $data = [
            'title' => 'Registrasi'
        ];

        if ($_SESSION['role'] != 1) {
            $this->load->view('errors/error', $data);
        } else {
            $this->load->view('admin/registrasi', $data);
        }
    }

    public function createUser()
    {
        $data = [
            'title' => 'Registrasi'
        ];

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'required' => 'Masukan Username !',
            'is_unique' => 'Username Sudah Terdaftar !'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password1]', [
            'matches' => 'Password Tidak Sama !',
            'required' => 'Masukan Password !',
            'min_length' => 'Password Terlalu Pendek !'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]');

        $this->form_validation->set_rules('role', 'Role', 'is_natural_no_zero', [
            'is_natural_no_zero' => 'Pilih Role!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/registrasi', $data);
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => $this->input->post('role', true)
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Menambahkan User</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>'
            );

            redirect('admin/registrasi');
        }
    }

    function readUser()
    {
        $result = $this->AdminModel->readUser();
        echo json_encode($result);
    }

    function deleteUser()
    {
        $id = $this->input->post('id');

        $result = $this->AdminModel->deleteUser($id);
        echo json_encode($result);
    }
    //------FUNGSI BARU MULAI DARI SINI  [CRUD]-------------------------------------------------------------------

    // PELANGGAN-----------------------------------
    function createPelanggan()
    {
        $data = array(
            'id_pelanggan'   => $this->input->post('id'),
            'nama_pelanggan' => $this->input->post('nama'),
            'no_telp'        => $this->input->post('notelp'),
            'alamat'         => $this->input->post('alamat')
        );

        $result = $this->AdminModel->createPelanggan($data);
        echo json_encode($result);
    }

    function readPelanggan()
    {
        $key = $this->input->post('key');

        $result = $this->AdminModel->readPelanggan($key);
        echo json_encode($result);
    }

    function updatePelangganbaru()
    {
        $data = array(
            'id_pelanggan'   => $this->input->post('id'),
            'nama_pelanggan' => $this->input->post('nama'),
            'no_telp'        => $this->input->post('notelp'),
            'alamat'         => $this->input->post('alamat')
        );

        $result = $this->AdminModel->updatePelangganbaru($data);
        echo json_encode($result);
    }
    function deletePelanggan()
    {
        $id = $this->input->post('id');

        $result = $this->AdminModel->deletePelanggan($id);
        echo json_encode($result);
    }

    // Barang-----------------------------------
    function createBarang()
    {
        $data = array(
            'id_barang'   => $this->input->post('id'),
            'produk'      => $this->input->post('produk'),
            'nama_barang' => $this->input->post('nama'),
            'unit'        => $this->input->post('unit'),
            'harga'       => $this->input->post('harga'),
            'keterangan'  => $this->input->post('keterangan')
        );

        $result = $this->AdminModel->createBarang($data);
        echo json_encode($result);
    }
    function readBarang()
    {
        $produk = $this->input->post('produk');
        $key = $this->input->post('key');
        $sort = $this->input->post('sort');
        $order = $this->input->post('order');

        $result = $this->AdminModel->readBarang($produk, $key, $sort, $order);
        echo json_encode($result);
    }
    function updateBarang()
    {
        $data = array(
            'id_barang'   => $this->input->post('id'),
            'produk'      => $this->input->post('produk'),
            'nama_barang' => $this->input->post('nama'),
            'unit'        => $this->input->post('unit'),
            'harga'       => $this->input->post('harga'),
            'keterangan'  => $this->input->post('keterangan')
        );
        $result = $this->AdminModel->updateBarang($data);
        echo json_encode($result);
    }
    function deleteBarang()
    {
        $id = $this->input->post('id');

        $result = $this->AdminModel->deleteBarang($id);
        echo json_encode($result);
    }



    // Produk-----------------------------------
    function createProduk()
    {
        $data = array(
            'id_pelanggan'   => $this->input->post('id'),
            'nama_pelanggan' => $this->input->post('nama'),
            'no_telp'        => $this->input->post('notelp'),
            'alamat'         => $this->input->post('alamat')
        );

        $result = $this->AdminModel->createPelanggan($data);
        echo json_encode($result);
    }
    function readProduk()
    {
        $key = $this->input->post('key');

        $result = $this->AdminModel->readProduk($key);
        echo json_encode($result);
    }
    function updateProdukbaru()
    {
        $data = array(
            'id_pelanggan'   => $this->input->post('id'),
            'nama_pelanggan' => $this->input->post('nama'),
            'no_telp'        => $this->input->post('notelp'),
            'alamat'         => $this->input->post('alamat')
        );

        $result = $this->AdminModel->createProdukbaru($data);
        echo json_encode($result);
    }
    function deleteProduk()
    {
        $id = $this->input->post('id');

        $result = $this->AdminModel->deleteProduk($id);
        echo json_encode($result);
    }



    // Orders-----------------------------------

    // no: no,
    // nama: nama,
    // tglpesan: tglpesan,
    // tglselesai: tglselesai,
    // idpel: idpel,
    // totalbarang: totalbarang,
    // totalharga: totalharga,
    // uangmuka: uangmuka,
    // sisa: sisa,
    // status: status,
    // note: note
    function createOrders()
    {
        $now = date('Y-m-d H:i:s');
        $data = array(
            'no_order'     => $this->input->post('no'),
            'nama_pesanan' => $this->input->post('nama'),
            'tgl_pesan'    => $this->input->post('tglpesan'),
            'tgl_selesai'  => $this->input->post('tglselesai'),
            'id_pelanggan' => $this->input->post('idpel'),
            'total_barang' => $this->input->post('totalbarang'),
            'total_harga'  => $this->input->post('totalharga'),
            'uang_muka'    => $this->input->post('uangmuka'),
            'sisa'         => $this->input->post('sisa'),
            'status'       => $this->input->post('status'),
            'note'         => $this->input->post('note')
        );
        $result = $this->AdminModel->createOrders($data);
        echo json_encode($result);
    }


    function readOrders()
    {
        $key = $this->input->post('key');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $sort = $this->input->post('sort');
        $order = $this->input->post('order');


        $result = $this->AdminModel->readOrders($key, $tgl_awal, $tgl_akhir, $sort, $order);
        echo json_encode($result);
    }
    function updateOrders()
    {
        $data = array(
            'no_order'     => $this->input->post('no'),
            'nama_pesanan' => $this->input->post('nama'),
            'tgl_pesan'    => $this->input->post('tglpesan'),
            'tgl_selesai'  => $this->input->post('tglselesai'),
            'id_pelanggan' => $this->input->post('idpel'),
            'total_barang' => $this->input->post('totalbarang'),
            'total_harga'  => $this->input->post('totalharga'),
            'uang_muka'    => $this->input->post('uangmuka'),
            'sisa'         => $this->input->post('sisa'),
            'kontruksi'         => $this->input->post('kontruksi'),
            'driver'         => $this->input->post('driver'),
            'status'       => $this->input->post('status'),
            'note'         => $this->input->post('note')
        );

        $result = $this->AdminModel->updateOrders($data);
        echo json_encode($result);
    }
    function deleteOrders()
    {
        $id = $this->input->post('id');

        $result = $this->AdminModel->deleteOrders($id);
        echo json_encode($result);
    }

    // OrdersItem-----------------------------------
    function createOrdersItem()
    {
        $data = array(
            'no_order'    => $this->input->post('no'),
            'id_barang'   => $this->input->post('id'),
            'qty'         => $this->input->post('qty'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'unit'        => $this->input->post('unit'),
            'harga'       => $this->input->post('harga'),
            'jumlah'      => $this->input->post('jumlah')
        );

        $result = $this->AdminModel->createOrdersItem($data);
        echo json_encode($result);
    }
    function readOrdersItem()
    {
        $key = $this->input->post('key');

        $result = $this->AdminModel->readOrdersItem($key);
        echo json_encode($result);
    }
    function updateOrdersItem()
    {
        $data = array(
            'no_order'     => $this->input->post('no'),
            'id_barang' => $this->input->post('id'),
            'qty' => $this->input->post('qty'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah')
        );

        $result = $this->AdminModel->createOrdersItem($data);
        echo json_encode($result);
    }
    function deleteOrdersItem()
    {
        $id = $this->input->post('id');

        $result = $this->AdminModel->deleteOrdersItem($id);
        echo json_encode($result);
    }

    function getTimeDate()
    {
        $now = date('D d M Y H:i');
        echo json_encode($now);
    }


    function uploadNota()
    {
        /* Getting file name */
        $filename = $_FILES['file']['name'];

        /* Location */
        $location = 'public/pdf/nota/' . $filename;


        $uploadOk = 1;

        if ($uploadOk == 0) {
            echo 0;
        } else {
            /* Upload file */
            if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
                echo $location;
            } else {
                echo 0;
            }
        }
    }

    function uploadLaporan()
    {
        /* Getting file name */
        $filename = $_FILES['file']['name'];

        /* Location */
        $location = 'public/pdf/laporan/' . $filename;
        $uploadOk = 1;

        if ($uploadOk == 0) {
            echo 0;
        } else {
            /* Upload file */
            if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
                echo $location;
            } else {
                echo 0;
            }
        }
    }

    function downloadPdf()
    {
        $type = $this->input->post('type');
        $filename = $this->input->post('filename');
        $result = force_download('public/pdf/' . $type . '/' . $filename . '.pdf', NULL);
        echo json_encode($result);
    }
}
