<?php
class Buku
{
    private $id;
    private $judul;
    private $pengarang;
    private $tahunTerbit;

    public function __construct($judul, $pengarang, $tahunTerbit)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
    }

    // Getter dan Setter untuk setiap properti
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getPengarang()
    {
        return $this->pengarang;
    }

    public function setPengarang($pengarang)
    {
        $this->pengarang = $pengarang;
    }

    public function getTahunTerbit()
    {
        return $this->tahunTerbit;
    }

    public function setTahunTerbit($tahunTerbit)
    {
        $this->tahunTerbit = $tahunTerbit;
    }
}
?>