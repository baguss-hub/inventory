<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Data Admin/User
$route['user'] = 'user_controller/index';
$route['user/tambah'] = 'user_controller/tambah_user';
$route['user/hapus/(:num)'] = 'user_controller/hapus_user/$1';
$route['user/ubah/(:num)'] = 'user_controller/ubah_user/$1';

//Data Kategori
$route['kategori'] = 'kategori_controller/index';
$route['kategori/tambah'] = 'kategori_controller/tambah_kategori';
$route['kategori/hapus/(:num)'] = 'kategori_controller/hapus_kategori/$1';
$route['kategori/ubah/(:num)'] = 'kategori_controller/ubah_kategori/$1';

//Data Barang
$route['barang'] = 'barang_controller/index';
$route['barang/tambah'] = 'barang_controller/tambah_barang';
$route['barang/hapus/(:num)'] = 'barang_controller/hapus_barang/$1';
$route['barang/ubah/(:num)'] = 'barang_controller/ubah_barang/$1';

//Data Barang Masuk
$route['barang_masuk'] = 'barang_masuk_controller/index';
$route['barang_masuk/tambah'] = 'barang_masuk_controller/tambah_barang_masuk';

//Data Barang Keluar
$route['barang_keluar'] = 'barang_keluar_controller/index';
$route['barang_keluar/tambah'] = 'barang_keluar_controller/tambah_barang_keluar';

//Data Laporan Barang Masuk
$route['laporan_barang_masuk'] = 'laporan_barang_masuk_controller/index';
$route['laporan_barang_masuk/cetak'] = 'laporan_barang_masuk_controller/cetak'; 

//Data Laporan Barang Keluar
$route['laporan_barang_keluar'] = 'laporan_barang_keluar_controller/index';
$route['laporan_barang_keluar/cetak'] = 'laporan_barang_keluar_controller/cetak';