<?php
// File: app/Controllers/Debug.php - Buat controller khusus untuk debugging

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class Debug extends BaseController
{
    public function test_database()
    {
        echo "<h2>Database Connection Test</h2>";
        
        try {
            $db = \Config\Database::connect();
            echo "✓ Database connected successfully<br>";
            
            // Test kategori table
            echo "<h3>Testing Kategori Table</h3>";
            $query = $db->query("SHOW TABLES LIKE 'kategori'");
            if ($query->getNumRows() > 0) {
                echo "✓ Table 'kategori' exists<br>";
                
                $query = $db->query("SELECT * FROM kategori");
                $results = $query->getResultArray();
                echo "Records found: " . count($results) . "<br>";
                echo "<pre>";
                print_r($results);
                echo "</pre>";
            } else {
                echo "✗ Table 'kategori' does not exist<br>";
            }
            
            // Test artikel table
            echo "<h3>Testing Artikel Table</h3>";
            $query = $db->query("SHOW TABLES LIKE 'artikel'");
            if ($query->getNumRows() > 0) {
                echo "✓ Table 'artikel' exists<br>";
                
                $query = $db->query("DESCRIBE artikel");
                $structure = $query->getResultArray();
                echo "Table structure:<br>";
                echo "<pre>";
                print_r($structure);
                echo "</pre>";
            } else {
                echo "✗ Table 'artikel' does not exist<br>";
            }
            
            // Test models
            echo "<h3>Testing Models</h3>";
            try {
                $kategoriModel = new KategoriModel();
                $categories = $kategoriModel->findAll();
                echo "✓ KategoriModel works. Found " . count($categories) . " categories<br>";
            } catch (\Exception $e) {
                echo "✗ KategoriModel error: " . $e->getMessage() . "<br>";
            }
            
            try {
                $artikelModel = new ArtikelModel();
                $articles = $artikelModel->findAll();
                echo "✓ ArtikelModel works. Found " . count($articles) . " articles<br>";
            } catch (\Exception $e) {
                echo "✗ ArtikelModel error: " . $e->getMessage() . "<br>";
            }
            
        } catch (\Exception $e) {
            echo "✗ Database connection failed: " . $e->getMessage() . "<br>";
        }
    }
    
    public function test_validation()
    {
        echo "<h2>Validation Test</h2>";
        
        // Simulate form data
        $testData = [
            'judul' => 'Test Artikel',
            'isi' => 'Ini adalah isi artikel test yang cukup panjang untuk memenuhi validasi minimum.',
            'id_kategori' => '1'
        ];
        
        echo "Test data:<br>";
        echo "<pre>";
        print_r($testData);
        echo "</pre>";
        
        $validation = \Config\Services::validation();
        $rules = [
            'judul' => 'required|min_length[3]|max_length[200]',
            'isi' => 'required|min_length[10]',
            'id_kategori' => 'required|integer|is_not_unique[kategori.id_kategori]'
        ];
        
        $validation->setRules($rules);
        
        if ($validation->run($testData)) {
            echo "✓ Validation passed<br>";
        } else {
            echo "✗ Validation failed:<br>";
            echo "<pre>";
            print_r($validation->getErrors());
            echo "</pre>";
        }
    }
}