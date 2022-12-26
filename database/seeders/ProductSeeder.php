<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    DB::table('products')->insert([
        [
        'model_name' => 'J-1',
        'more_details' => 'Jacket',
        'texture' => 'leather',
        'color' => 'black , red , pink',
        'size' => '38 , 40 , 42',
        'height' => '50 cm',
        'price' => '250000',
        'sale' => '2%',
        'image_url' => 'https://assetscdn1.paytm.com/images/catalog/product/A/AP/APPLEATHER-RETANARE622320E69A9DD/1563101367120_0..jpg?imwidth=282&impolicy=hq'
    ],[
        'model_name' => 'J-2',
        'more_details' => 'Jacket',
        'texture' => 'fur',
        'color' => 'black , red , pink',
        'size' => '38 , 40 , 42',
        'height' => '50 cm',
        'price' => '250000',
        'sale' => '2%',
        'image_url' => 'N'
    ],

    [
        'model_name' => 'J-3',
        'more_details' => 'dress',
        'texture' => 'wool',
        'color' => 'black , red , pink',
        'size' => '38 , 40 , 42',
        'height' => '120 cm',
        'price' => '150000',
        'sale' => '5%',
        'image_url' => 'https://www4.assets-gap.com/webcontent/0050/563/105/cn50563105.jpg?q=h&w=178'
    ],
    [
        'model_name' => 'P-1',
        'more_details' => 'pant',
        'texture' => 'soft',
        'color' => 'black , red , pink',
        'size' => '38 , 40 , 42',
        'height' => '50 cm',
        'price' => '70000',
        'sale' => '2%',
        'image_url' => 'https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/productimage/2020/10/11/f3b7eb35-ea09-4bd6-b0e7-9de4157b14bd1602370012077-1.jpg'
    ],

    [
        'model_name' => 'H-2',
        'more_details' => 'hijab',
        'texture' => 'soft',
        'color' => 'black , red , pink',
        'size' => '38 , 40 , 42',
        'height' => '50 cm',
        'price' => '70000',
        'sale' => '2%',
        'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1mTzLOLR9gUuApqwdeQBkOck5KYYNc640gNRe5j2njTT90zIOvkrBQ3DvHntL1Q-Ssco&usqp=CAU'
    ],
    [
        'model_name' => 'H-3',
        'more_details' => 'hijab',
        'texture' => 'soft',
        'color' => 'black , red , pink',
        'size' => '38 , 40 , 42',
        'height' => '50 cm',
        'price' => '70000',
        'sale' => '2%',
        'image_url' => 'https://i0.wp.com/www.almuheet.net/wp-content/uploads/%D8%B5%D9%88%D8%B1-%D9%84%D9%81%D8%A7%D8%AA-%D8%AD%D8%AC%D8%A7%D8%A8-%D8%AC%D8%AF%D9%8A%D8%AF%D8%A9-2021-%D9%88%D9%85%D8%AA%D9%85%D9%8A%D8%B2%D8%A9-%D8%AC%D8%AF%D8%A7%D9%8B1.jpg'
    ],
        [
            'model_name' => 'H-4',
            'more_details' => 'hijab',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsoz96gVBfBb4OyL5sENGncCPntVvy2NEu6Xua34G7qLVAWPVEkb6oJ3VfZPzaea_ckaE&usqp=CAU'
        ],
        [
            'model_name' => 'P-2',
            'more_details' => 'pant',
            'texture' => 'jens',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '55000',
            'sale' => '4%',
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeqq80e_Q1wcWRaUKiT3DIqh3OoGlx0qHt83mVwTg7cskMguV7udnuimAoA_uXHpHKJVU&usqp=CAU'
        ],
        [
            'model_name' => 'P-3',
            'more_details' => 'pant',
            'texture' => 'leather',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '90000',
            'sale' => '10%',
            'image_url' => 'https://n.nordstrommedia.com/id/sr3/d754079c-d9db-4324-b61b-7f33b14f8ccb.jpeg?h=365&w=240&dpr=2'
        ],
        [
            'model_name' => 'D-1',
            'more_details' => 'dress',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '120 cm',
            'price' => '150000',
            'sale' => '5%',
            'image_url' => 'https://assets.ajio.com/medias/sys_master/root/20220303/gPoS/621fd5e4f997dd03e2fdcb73/purvaja_black_%26_peach_striped_round-neck_empire_dress.jpg'
        ],
        [
            'model_name' => 'D-2',
            'more_details' => 'dress',
            'texture' => 'chamois',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '120 cm',
            'price' => '300000',
            'sale' => '2%',
            'image_url' => 'https://i.etsystatic.com/6122605/r/il/209495/1228570877/il_570xN.1228570877_4x0e.jpg'
        ],

        [
            'model_name' => 'S-2',
            'more_details' => 'sweater',
            'texture' => 'wool',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://i.etsystatic.com/24826174/r/il/366bca/2799172821/il_570xN.2799172821_1d0n.jpg'
        ],

        [
            'model_name' => 'S-4',
            'more_details' => 'sweater',
            'texture' => 'wool',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://cdn.media.amplience.net/i/brooksbrothers/WY00974_CREAM?$medium$&unsharp=1,.01,60,20'
        ],
        [
            'model_name' => 'S-5',
            'more_details' => 'sweater',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://rukminim1.flixcart.com/image/332/398/k3dc7m80/sweater/j/a/4/xl-tta1000144-tokyo-talkies-original-imafmgnngjcbhkbs.jpeg?q=50'
        ],

        [
            'model_name' => 'SK-1',
            'more_details' => 'skirt',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://static.glamourbrand.in/skirts-ladies/13776665_3a236_512.jpg'
        ],

        [
            'model_name' => 'SK-2',
            'more_details' => 'skirt',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://i.etsystatic.com/18506233/r/il/d9f458/2480245036/il_fullxfull.2480245036_c7al.jpg'
        ],

        [
            'model_name' => 'SK-3',
            'more_details' => 'skirt',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://image.winudf.com/v2/image/Y29tLk1vZGVyblNraXJ0RGVzaWduLmdvemFsaV9zY3JlZW5fNV80cThuNzUwag/screen-5.jpg?fakeurl=1&type=.jpg'
        ],

        [
            'model_name' => 'J-4',
            'more_details' => 'jacket',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://www.hijabfashioninspiration.com/wp-content/uploads/2020/11/123717733_539933233651967_3442768097083660209_n-819x1024.jpg'
        ],

        [
            'model_name' => 'J-5',
            'more_details' => 'jacket',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://i.pinimg.com/736x/c7/a8/8e/c7a88e86ab0de121ac6cbd0586665890.jpg'
        ],

        [
            'model_name' => 'J-6',
            'more_details' => 'jacket',
            'texture' => 'soft',
            'color' => 'black , red , pink',
            'size' => '38 , 40 , 42',
            'height' => '50 cm',
            'price' => '70000',
            'sale' => '2%',
            'image_url' => 'https://i.pinimg.com/originals/10/72/35/1072352e3aa262da7e22e2c7322b89ba.jpg'
        ],



    ]);




    }
}
