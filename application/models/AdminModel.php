<?php

class AdminModel extends CI_model
{


	function readUser()
	{
		$result = $this->db->get('user')->result();
		return $result;
	}


	function deleteUser($id)
	{
		$this->db->where('username', $id);
		if ($this->db->delete('user')) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}
	//FUNGSI BARU MULAI DARI SINI ------------------------------------------------------------------
	// Pelanggan ----------------------------------------
	function createPelanggan($data)
	{
		if ($this->db->insert('pelanggan', $data)) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}

	function readPelanggan($key)
	{
		$this->db->like('id_pelanggan', $key);
		$this->db->or_like('nama_pelanggan', $key);
		$result = $this->db->get('pelanggan')->result();
		return $result;
	}

	function updatePelangganbaru($data)
	{
		$this->db->where('id_pelanggan', $data['id_pelanggan']);
		$result = $this->db->update('pelanggan', $data);
		return $result;
	}

	function deletePelanggan($id)
	{
		$this->db->where('id_pelanggan', $id);
		if ($this->db->delete('pelanggan')) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}

	// Barang-----------------------------------
	function createBarang($data)
	{
		if ($this->db->insert('barang', $data)) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}
	function readBarang($produk, $key, $sort, $order)
	{
		$result = $this->db->query("SELECT*FROM barang WHERE produk LIKE '%$produk%' AND(nama_barang LIKE '%$key%' OR keterangan LIKE '%$key%' OR id_barang LIKE '%$key%') order by $sort $order")->result();


		// $result = $this->db->query("SELECT*FROM barang WHERE produk='$produk' 
		// 								AND(nama_barang LIKE '%$key%' OR keterangan LIKE '%$key%' OR id_barang LIKE '%$key%')")->result();
		return $result;
	}
	function updateBarang($data)
	{
		$this->db->where('id_barang', $data['id_barang']);
		$result = $this->db->update('barang', $data);
		return $result;
	}
	function deleteBarang($id)
	{
		$this->db->where('id_barang', $id);
		if ($this->db->delete('barang')) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}

	// Produk-----------------------------------
	function createProduk($data)
	{
		if ($this->db->insert('produk', $data)) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}
	function readProduk($key)
	{
		$this->db->like('produk', $key);
		$result = $this->db->get('produk')->result();
		return $result;
	}
	function updateProdukbaru($data)
	{
		$this->db->where('id', $data->id_produk[0]);
		$result = $this->db->update('produk', $data);
		return $result;
	}
	function deleteProduk($id)
	{
		$this->db->where('id', $id);
		if ($this->db->delete('produk')) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}

	// Orders-----------------------------------
	function createOrders($data)
	{
		if ($this->db->insert('orders', $data)) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}
	function readOrders($key, $tgl_awal, $tgl_akhir, $sort, $order)
	{
		$result = $this->db->query("SELECT * FROM orders WHERE (no_order LIKE '%$key%' or nama_pesanan like '%$key%') AND tgl_pesan BETWEEN '$tgl_awal' and '$tgl_akhir' order by $sort $order")->result();

		// $this->db->like('no_order', $key);
		// $result = $this->db->get('orders')->result();
		return $result;
	}
	function updateOrders($data)
	{
		$this->db->where('no_order', $data['no_order']);
		$result = $this->db->update('orders', $data);
		return $result;
	}
	function deleteOrders($id)
	{
		$this->db->where('no_order', $id);
		if ($this->db->delete('orders')) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}


	// Orders-----------------------------------
	function createOrdersItem($data)
	{
		if ($this->db->insert('orders_item', $data)) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}
	function readOrdersItem($key)
	{
		$this->db->like('no_order', $key);
		$result = $this->db->get('orders_item')->result();
		return $result;
	}
	function updateOrdersItem($data)
	{
		$this->db->where('no_order', $data->no_order[0]);
		$result = $this->db->update('orders_item', $data);
		return $result;
	}
	function deleteOrdersItem($id)
	{
		$this->db->where('no_order', $id);
		if ($this->db->delete('orders_item')) {
			return "berhasil";
		} else {
			return "gagal";
		}
	}
}
