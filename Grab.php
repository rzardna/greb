<!-- Script by kristiandes.com Original -->
<html>
<style>
<!-- Ini style CSS saja untuk mempercantik tampilan -->
body{
font-family: verdana,arial,sans-serif;
font-size:13px;
color:#333333;
}
</style>
<!-- Ini style CSS table bawaan gilabola.com silahkan improve sesuai selera untuk mempercantik tampilan -->
<link rel='stylesheet' id='tablepress-default-css'  href='http://gilabola.com/wp-content/plugins/tablepress/css/default.min.css?ver=1.9' type='text/css' media='all' />
<body>

<?php
// URL TARGET
$url = 'http://http://aisyah.khatzzu.pro';
//end
// get / mengambil content berdasarkan url yang akan di curi datanya
$content = file_get_contents($url);
//
// STEP 1 mengambil syntax pembuka
$first_step = explode( '</strong></p>' , $content );
//
// STEP 2 mengambil syntax penutup
$second_step = explode("</table>" , $first_step[1] );
//
// Replace syntax </tbody> dengan </tbody></table>
$text1 = str_replace('</tbody>', '</tbody></table>', $second_step[0]);
//Tampilkan 
echo "$text1";
?>
</body>
</html>
