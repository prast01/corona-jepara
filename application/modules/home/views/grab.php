<?php
function grab($url)
{
    // get / mengambil content berdasarkan url yang akan di curi datanya
    $content = file_get_contents($url);
    //
    // STEP 1 mengambil syntax pembuka
    $first_step = explode("<!-- content -->", $content);
    //
    // STEP 2 mengambil syntax penutup
    $second_step = explode('<div class="td-pb-span8 td-main-content">', $first_step[1]);
    //
    // STEP 3 mengambil syntax penutup
    $third_step = explode('<div class="page-nav td-pb-padding-side">', $second_step[1]);
    //
    // Replace syntax </tbody> dengan </tbody></table>
    $text1 = $third_step[0];
    //Tampilkan 
    return $text1;
}
function grab3($url)
{
    // get / mengambil content berdasarkan url yang akan di curi datanya
    $content = file_get_contents($url);
    //
    // STEP 1 mengambil syntax pembuka
    $first_step = explode("<!-- big grid -->", $content);
    //
    // STEP 2 mengambil syntax penutup
    $second_step = explode('<div class="td-main-content-wrap td-container-wrap">', $first_step[1]);
    //
    // Replace syntax </tbody> dengan </tbody></table>
    $text1 = $second_step[0];
    //Tampilkan 
    return $text1;
}
function grab2($url)
{
    // get / mengambil content berdasarkan url yang akan di curi datanya
    $content = file_get_contents($url);
    //
    // STEP 1 mengambil syntax pembuka
    $first_step = explode('<meta name="twitter:card" content="summary_large_image" />', $content);
    //
    // STEP 2 mengambil syntax penutup
    $second_step = explode('</head>', $first_step[1]);
    //
    // Replace syntax </tbody> dengan </tbody></table>
    $text1 = $second_step[0];
    //Tampilkan 
    return $text1;
}
// URL TARGET
$url = 'https://jepara.go.id/category/berita-umum/';
//end

echo grab2($url);
echo grab3($url);
?>
<div class="td-main-content-wrap td-container-wrap">
    <div class="td-container">

        <div class="td-pb-row">
            <div class="td-pb-span12 td-main-content">
                <?php
                echo grab($url);
                ?>
            </div>
        </div>
    </div>