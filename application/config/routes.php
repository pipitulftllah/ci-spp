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

$route['admin']= 'admin/overview';
$route['admin/kelas/delete/(:num)']= 'admin/kelas/deleteKelas/$1';
$route['admin/kelas/edit/(:num)']= 'admin/kelas/editKelas/$1';
$route['admin/kelas/update/(:num)']= 'admin/kelas/updateKelas/$1';
$route['admin/kompetensi_keahlian/delete/(:num)']= 'admin/kompetensi_keahlian/deleteKompetensi_Keahlian/$1';
$route['admin/kompetensi_keahlian/edit/(:num)']= 'admin/kompetensi_keahlian/editKompetensi_Keahlian/$1';
$route['admin/kompetensi_keahlian/update/(:num)']= 'admin/kompetensi_keahlian/updateKompetensi_Keahlian/$1';
$route['admin/spp/delete/(:num)']= 'admin/spp/deleteSpp/$1';
$route['admin/spp/edit/(:num)']= 'admin/spp/editSpp/$1';
$route['admin/spp/update/(:num)']= 'admin/spp/updateSpp/$1';
$route['admin/siswa/delete/(:num)']= 'admin/siswa/deleteSiswa/$1';
$route['admin/siswa/edit/(:num)']= 'admin/siswa/editSiswa/$1';
$route['admin/siswa/update/(:num)']= 'admin/siswa/updateSiswa/$1';
$route['admin/petugas/delete/(:num)']= 'admin/petugas/deletePetugas/$1';
$route['admin/petugas/edit/(:num)']= 'admin/petugas/editPetugas/$1';
$route['admin/petugas/update/(:num)']= 'admin/petugas/updatePetugas/$1';
$route['admin/pembayaran/delete/(:num)']= 'admin/pembayaran/deletePembayaran/$1';
$route['admin/pembayaran/edit/(:num)']= 'admin/pembayaran/editPembayaran/$1';
$route['admin/pembayaran/update/(:num)']= 'admin/pembayaran/updatePembayaran/$1';
