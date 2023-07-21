<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::truncate();

        $countries =[
            [
              'id'=>1,
              'country_code'=>'AF',
              'name'=>'Afghanistan',
              'phonecode'=>93
            ],
            [
              'id'=>2,
              'country_code'=>'AL',
              'name'=>'Albania',
              'phonecode'=>355
            ],
            [
              'id'=>3,
              'country_code'=>'DZ',
              'name'=>'Algeria',
              'phonecode'=>213
                ],
        [
              'id'=>4,
              'country_code'=>'AS',
              'name'=>'American Samoa',
              'phonecode'=>1684
                ],
        [
              'id'=>5,
              'country_code'=>'AD',
              'name'=>'Andorra',
              'phonecode'=>376
                ],
        [
              'id'=>6,
              'country_code'=>'AO',
              'name'=>'Angola',
              'phonecode'=>244
                ],
        [
              'id'=>7,
              'country_code'=>'AI',
              'name'=>'Anguilla',
              'phonecode'=>1264
                ],
        [
              'id'=>8,
              'country_code'=>'AQ',
              'name'=>'Antarctica',
              'phonecode'=>0
                ],
        [
              'id'=>9,
              'country_code'=>'AG',
              'name'=>'Antigua And Barbuda',
              'phonecode'=>1268
                ],
        [
              'id'=>10,
              'country_code'=>'AR',
              'name'=>'Argentina',
              'phonecode'=>54
                ],
        [
              'id'=>11,
              'country_code'=>'AM',
              'name'=>'Armenia',
              'phonecode'=>374
                ],
        [
              'id'=>12,
              'country_code'=>'AW',
              'name'=>'Aruba',
              'phonecode'=>297
                ],
        [
              'id'=>13,
              'country_code'=>'AU',
              'name'=>'Australia',
              'phonecode'=>61
                ],
        [
              'id'=>14,
              'country_code'=>'AT',
              'name'=>'Austria',
              'phonecode'=>43
                ],
        [
              'id'=>15,
              'country_code'=>'AZ',
              'name'=>'Azerbaijan',
              'phonecode'=>994
                ],
        [
              'id'=>16,
              'country_code'=>'BS',
              'name'=>'Bahamas The',
              'phonecode'=>1242
                ],
        [
              'id'=>17,
              'country_code'=>'BH',
              'name'=>'Bahrain',
              'phonecode'=>973
                ],
        [
              'id'=>18,
              'country_code'=>'BD',
              'name'=>'Bangladesh',
              'phonecode'=>880
                ],
        [
              'id'=>19,
              'country_code'=>'BB',
              'name'=>'Barbados',
              'phonecode'=>1246
                ],
        [
              'id'=>20,
              'country_code'=>'BY',
              'name'=>'Belarus',
              'phonecode'=>375
                ],
        [
              'id'=>21,
              'country_code'=>'BE',
              'name'=>'Belgium',
              'phonecode'=>32
                ],
        [
              'id'=>22,
              'country_code'=>'BZ',
              'name'=>'Belize',
              'phonecode'=>501
                ],
        [
              'id'=>23,
              'country_code'=>'BJ',
              'name'=>'Benin',
              'phonecode'=>229
                ],
        [
              'id'=>24,
              'country_code'=>'BM',
              'name'=>'Bermuda',
              'phonecode'=>1441
                ],
        [
              'id'=>25,
              'country_code'=>'BT',
              'name'=>'Bhutan',
              'phonecode'=>975
                ],
        [
              'id'=>26,
              'country_code'=>'BO',
              'name'=>'Bolivia',
              'phonecode'=>591
                ],
        [
              'id'=>27,
              'country_code'=>'BA',
              'name'=>'Bosnia and Herzegovina',
              'phonecode'=>387
                ],
        [
              'id'=>28,
              'country_code'=>'BW',
              'name'=>'Botswana',
              'phonecode'=>267
                ],
        [
              'id'=>29,
              'country_code'=>'BV',
              'name'=>'Bouvet Island',
              'phonecode'=>0
                ],
        [
              'id'=>30,
              'country_code'=>'BR',
              'name'=>'Brazil',
              'phonecode'=>55
                ],
        [
              'id'=>31,
              'country_code'=>'IO',
              'name'=>'British Indian Ocean Territory',
              'phonecode'=>246
                ],
        [
              'id'=>32,
              'country_code'=>'BN',
              'name'=>'Brunei',
              'phonecode'=>673
                ],
        [
              'id'=>33,
              'country_code'=>'BG',
              'name'=>'Bulgaria',
              'phonecode'=>359
                ],
        [
              'id'=>34,
              'country_code'=>'BF',
              'name'=>'Burkina Faso',
              'phonecode'=>226
                ],
        [
              'id'=>35,
              'country_code'=>'BI',
              'name'=>'Burundi',
              'phonecode'=>257
                ],
        [
              'id'=>36,
              'country_code'=>'KH',
              'name'=>'Cambodia',
              'phonecode'=>855
                ],
        [
              'id'=>37,
              'country_code'=>'CM',
              'name'=>'Cameroon',
              'phonecode'=>237
                ],
        [
              'id'=>38,
              'country_code'=>'CA',
              'name'=>'Canada',
              'phonecode'=>1
                ],
        [
              'id'=>39,
              'country_code'=>'CV',
              'name'=>'Cape Verde',
              'phonecode'=>238
                ],
        [
              'id'=>40,
              'country_code'=>'KY',
              'name'=>'Cayman Islands',
              'phonecode'=>1345
                ],
        [
              'id'=>41,
              'country_code'=>'CF',
              'name'=>'Central African Republic',
              'phonecode'=>236
                ],
        [
              'id'=>42,
              'country_code'=>'TD',
              'name'=>'Chad',
              'phonecode'=>235
                ],
        [
              'id'=>43,
              'country_code'=>'CL',
              'name'=>'Chile',
              'phonecode'=>56
                ],
        [
              'id'=>44,
              'country_code'=>'CN',
              'name'=>'China',
              'phonecode'=>86
                ],
        [
              'id'=>45,
              'country_code'=>'CX',
              'name'=>'Christmas Island',
              'phonecode'=>61
                ],
        [
              'id'=>46,
              'country_code'=>'CC',
              'name'=>'Cocos (Keeling) Islands',
              'phonecode'=>672
                ],
        [
              'id'=>47,
              'country_code'=>'CO',
              'name'=>'Colombia',
              'phonecode'=>57
                ],
        [
              'id'=>48,
              'country_code'=>'KM',
              'name'=>'Comoros',
              'phonecode'=>269
                ],
        [
              'id'=>49,
              'country_code'=>'CG',
              'name'=>'Republic Of The Congo',
              'phonecode'=>242
                ],
        [
              'id'=>50,
              'country_code'=>'CD',
              'name'=>'Democratic Republic Of The Congo',
              'phonecode'=>242
                ],
        [
              'id'=>51,
              'country_code'=>'CK',
              'name'=>'Cook Islands',
              'phonecode'=>682
                ],
        [
              'id'=>52,
              'country_code'=>'CR',
              'name'=>'Costa Rica',
              'phonecode'=>506
                ],
        [
              'id'=>53,
              'country_code'=>'CI',
              'name'=>'Cote D Ivoire (Ivory Coast)',
              'phonecode'=>225
                ],
        [
              'id'=>54,
              'country_code'=>'HR',
              'name'=>'Croatia (Hrvatska)',
              'phonecode'=>385
                ],
        [
              'id'=>55,
              'country_code'=>'CU',
              'name'=>'Cuba',
              'phonecode'=>53
                ],
        [
              'id'=>56,
              'country_code'=>'CY',
              'name'=>'Cyprus',
              'phonecode'=>357
                ],
        [
              'id'=>57,
              'country_code'=>'CZ',
              'name'=>'Czech Republic',
              'phonecode'=>420
                ],
        [
              'id'=>58,
              'country_code'=>'DK',
              'name'=>'Denmark',
              'phonecode'=>45
                ],
        [
              'id'=>59,
              'country_code'=>'DJ',
              'name'=>'Djibouti',
              'phonecode'=>253
                ],
        [
              'id'=>60,
              'country_code'=>'DM',
              'name'=>'Dominica',
              'phonecode'=>1767
                ],
        [
              'id'=>61,
              'country_code'=>'DO',
              'name'=>'Dominican Republic',
              'phonecode'=>1809
                ],
        [
              'id'=>62,
              'country_code'=>'TP',
              'name'=>'East Timor',
              'phonecode'=>670
                ],
        [
              'id'=>63,
              'country_code'=>'EC',
              'name'=>'Ecuador',
              'phonecode'=>593
                ],
        [
              'id'=>64,
              'country_code'=>'EG',
              'name'=>'Egypt',
              'phonecode'=>20
                ],
        [
              'id'=>65,
              'country_code'=>'SV',
              'name'=>'El Salvador',
              'phonecode'=>503
                ],
        [
              'id'=>66,
              'country_code'=>'GQ',
              'name'=>'Equatorial Guinea',
              'phonecode'=>240
                ],
        [
              'id'=>67,
              'country_code'=>'ER',
              'name'=>'Eritrea',
              'phonecode'=>291
                ],
        [
              'id'=>68,
              'country_code'=>'EE',
              'name'=>'Estonia',
              'phonecode'=>372
                ],
        [
              'id'=>69,
              'country_code'=>'ET',
              'name'=>'Ethiopia',
              'phonecode'=>251
                ],
        [
              'id'=>70,
              'country_code'=>'XA',
              'name'=>'External Territories of Australia',
              'phonecode'=>61
                ],
        [
              'id'=>71,
              'country_code'=>'FK',
              'name'=>'Falkland Islands',
              'phonecode'=>500
                ],
        [
              'id'=>72,
              'country_code'=>'FO',
              'name'=>'Faroe Islands',
              'phonecode'=>298
                ],
        [
              'id'=>73,
              'country_code'=>'FJ',
              'name'=>'Fiji Islands',
              'phonecode'=>679
                ],
        [
              'id'=>74,
              'country_code'=>'FI',
              'name'=>'Finland',
              'phonecode'=>358
                ],
        [
              'id'=>75,
              'country_code'=>'FR',
              'name'=>'France',
              'phonecode'=>33
                ],
        [
              'id'=>76,
              'country_code'=>'GF',
              'name'=>'French Guiana',
              'phonecode'=>594
                ],
        [
              'id'=>77,
              'country_code'=>'PF',
              'name'=>'French Polynesia',
              'phonecode'=>689
                ],
        [
              'id'=>78,
              'country_code'=>'TF',
              'name'=>'French Southern Territories',
              'phonecode'=>0
                ],
        [
              'id'=>79,
              'country_code'=>'GA',
              'name'=>'Gabon',
              'phonecode'=>241
                ],
        [
              'id'=>80,
              'country_code'=>'GM',
              'name'=>'Gambia The',
              'phonecode'=>220
                ],
        [
              'id'=>81,
              'country_code'=>'GE',
              'name'=>'Georgia',
              'phonecode'=>995
                ],
        [
              'id'=>82,
              'country_code'=>'DE',
              'name'=>'Germany',
              'phonecode'=>49
                ],
        [
              'id'=>83,
              'country_code'=>'GH',
              'name'=>'Ghana',
              'phonecode'=>233
                ],
        [
              'id'=>84,
              'country_code'=>'GI',
              'name'=>'Gibraltar',
              'phonecode'=>350
                ],
        [
              'id'=>85,
              'country_code'=>'GR',
              'name'=>'Greece',
              'phonecode'=>30
                ],
        [
              'id'=>86,
              'country_code'=>'GL',
              'name'=>'Greenland',
              'phonecode'=>299
                ],
        [
              'id'=>87,
              'country_code'=>'GD',
              'name'=>'Grenada',
              'phonecode'=>1473
                ],
        [
              'id'=>88,
              'country_code'=>'GP',
              'name'=>'Guadeloupe',
              'phonecode'=>590
                ],
        [
              'id'=>89,
              'country_code'=>'GU',
              'name'=>'Guam',
              'phonecode'=>1671
                ],
        [
              'id'=>90,
              'country_code'=>'GT',
              'name'=>'Guatemala',
              'phonecode'=>502
                ],
        [
              'id'=>91,
              'country_code'=>'XU',
              'name'=>'Guernsey and Alderney',
              'phonecode'=>44
                ],
        [
              'id'=>92,
              'country_code'=>'GN',
              'name'=>'Guinea',
              'phonecode'=>224
                ],
        [
              'id'=>93,
              'country_code'=>'GW',
              'name'=>'Guinea-Bissau',
              'phonecode'=>245
                ],
        [
              'id'=>94,
              'country_code'=>'GY',
              'name'=>'Guyana',
              'phonecode'=>592
                ],
        [
              'id'=>95,
              'country_code'=>'HT',
              'name'=>'Haiti',
              'phonecode'=>509
                ],
        [
              'id'=>96,
              'country_code'=>'HM',
              'name'=>'Heard and McDonald Islands',
              'phonecode'=>0
                ],
        [
              'id'=>97,
              'country_code'=>'HN',
              'name'=>'Honduras',
              'phonecode'=>504
                ],
        [
              'id'=>98,
              'country_code'=>'HK',
              'name'=>'Hong Kong S.A.R.',
              'phonecode'=>852
                ],
        [
              'id'=>99,
              'country_code'=>'HU',
              'name'=>'Hungary',
              'phonecode'=>36
                ],
        [
              'id'=>100,
              'country_code'=>'IS',
              'name'=>'Iceland',
              'phonecode'=>354
                ],
        [
              'id'=>101,
              'country_code'=>'IN',
              'name'=>'India',
              'phonecode'=>91
                ],
        [
              'id'=>102,
              'country_code'=>'id',
              'name'=>'Indonesia',
              'phonecode'=>62
                ],
        [
              'id'=>103,
              'country_code'=>'IR',
              'name'=>'Iran',
              'phonecode'=>98
                ],
        [
              'id'=>104,
              'country_code'=>'IQ',
              'name'=>'Iraq',
              'phonecode'=>964
                ],
        [
              'id'=>105,
              'country_code'=>'IE',
              'name'=>'Ireland',
              'phonecode'=>353
                ],
        [
              'id'=>106,
              'country_code'=>'IL',
              'name'=>'Israel',
              'phonecode'=>972
                ],
        [
              'id'=>107,
              'country_code'=>'IT',
              'name'=>'Italy',
              'phonecode'=>39
                ],
        [
              'id'=>108,
              'country_code'=>'JM',
              'name'=>'Jamaica',
              'phonecode'=>1876
                ],
        [
              'id'=>109,
              'country_code'=>'JP',
              'name'=>'Japan',
              'phonecode'=>81
                ],
        [
              'id'=>110,
              'country_code'=>'XJ',
              'name'=>'Jersey',
              'phonecode'=>44
                ],
        [
              'id'=>111,
              'country_code'=>'JO',
              'name'=>'Jordan',
              'phonecode'=>962
                ],
        [
              'id'=>112,
              'country_code'=>'KZ',
              'name'=>'Kazakhstan',
              'phonecode'=>7
                ],
        [
              'id'=>113,
              'country_code'=>'KE',
              'name'=>'Kenya',
              'phonecode'=>254
                ],
        [
              'id'=>114,
              'country_code'=>'KI',
              'name'=>'Kiribati',
              'phonecode'=>686
                ],
        [
              'id'=>115,
              'country_code'=>'KP',
              'name'=>'Korea North',
              'phonecode'=>850
                ],
        [
              'id'=>116,
              'country_code'=>'KR',
              'name'=>'Korea South',
              'phonecode'=>82
                ],
        [
              'id'=>117,
              'country_code'=>'KW',
              'name'=>'Kuwait',
              'phonecode'=>965
                ],
        [
              'id'=>118,
              'country_code'=>'KG',
              'name'=>'Kyrgyzstan',
              'phonecode'=>996
                ],
        [
              'id'=>119,
              'country_code'=>'LA',
              'name'=>'Laos',
              'phonecode'=>856
                ],
        [
              'id'=>120,
              'country_code'=>'LV',
              'name'=>'Latvia',
              'phonecode'=>371
                ],
        [
              'id'=>121,
              'country_code'=>'LB',
              'name'=>'Lebanon',
              'phonecode'=>961
                ],
        [
              'id'=>122,
              'country_code'=>'LS',
              'name'=>'Lesotho',
              'phonecode'=>266
                ],
        [
              'id'=>123,
              'country_code'=>'LR',
              'name'=>'Liberia',
              'phonecode'=>231
                ],
        [
              'id'=>124,
              'country_code'=>'LY',
              'name'=>'Libya',
              'phonecode'=>218
                ],
        [
              'id'=>125,
              'country_code'=>'LI',
              'name'=>'Liechtenstein',
              'phonecode'=>423
                ],
        [
              'id'=>126,
              'country_code'=>'LT',
              'name'=>'Lithuania',
              'phonecode'=>370
                ],
        [
              'id'=>127,
              'country_code'=>'LU',
              'name'=>'Luxembourg',
              'phonecode'=>352
                ],
        [
              'id'=>128,
              'country_code'=>'MO',
              'name'=>'Macau S.A.R.',
              'phonecode'=>853
                ],
        [
              'id'=>129,
              'country_code'=>'MK',
              'name'=>'Macedonia',
              'phonecode'=>389
                ],
        [
              'id'=>130,
              'country_code'=>'MG',
              'name'=>'Madagascar',
              'phonecode'=>261
                ],
        [
              'id'=>131,
              'country_code'=>'MW',
              'name'=>'Malawi',
              'phonecode'=>265
                ],
        [
              'id'=>132,
              'country_code'=>'MY',
              'name'=>'Malaysia',
              'phonecode'=>60
                ],
        [
              'id'=>133,
              'country_code'=>'MV',
              'name'=>'Maldives',
              'phonecode'=>960
                ],
        [
              'id'=>134,
              'country_code'=>'ML',
              'name'=>'Mali',
              'phonecode'=>223
                ],
        [
              'id'=>135,
              'country_code'=>'MT',
              'name'=>'Malta',
              'phonecode'=>356
                ],
        [
              'id'=>136,
              'country_code'=>'XM',
              'name'=>'Man (Isle of)',
              'phonecode'=>44
                ],
        [
              'id'=>137,
              'country_code'=>'MH',
              'name'=>'Marshall Islands',
              'phonecode'=>692
                ],
        [
              'id'=>138,
              'country_code'=>'MQ',
              'name'=>'Martinique',
              'phonecode'=>596
                ],
        [
              'id'=>139,
              'country_code'=>'MR',
              'name'=>'Mauritania',
              'phonecode'=>222
                ],
        [
              'id'=>140,
              'country_code'=>'MU',
              'name'=>'Mauritius',
              'phonecode'=>230
                ],
        [
              'id'=>141,
              'country_code'=>'YT',
              'name'=>'Mayotte',
              'phonecode'=>269
                ],
        [
              'id'=>142,
              'country_code'=>'MX',
              'name'=>'Mexico',
              'phonecode'=>52
                ],
        [
              'id'=>143,
              'country_code'=>'FM',
              'name'=>'Micronesia',
              'phonecode'=>691
                ],
        [
              'id'=>144,
              'country_code'=>'MD',
              'name'=>'Moldova',
              'phonecode'=>373
                ],
        [
              'id'=>145,
              'country_code'=>'MC',
              'name'=>'Monaco',
              'phonecode'=>377
                ],
        [
              'id'=>146,
              'country_code'=>'MN',
              'name'=>'Mongolia',
              'phonecode'=>976
                ],
        [
              'id'=>147,
              'country_code'=>'MS',
              'name'=>'Montserrat',
              'phonecode'=>1664
                ],
        [
              'id'=>148,
              'country_code'=>'MA',
              'name'=>'Morocco',
              'phonecode'=>212
                ],
        [
              'id'=>149,
              'country_code'=>'MZ',
              'name'=>'Mozambique',
              'phonecode'=>258
                ],
        [
              'id'=>150,
              'country_code'=>'MM',
              'name'=>'Myanmar',
              'phonecode'=>95
                ],
        [
              'id'=>151,
              'country_code'=>'NA',
              'name'=>'Namibia',
              'phonecode'=>264
                ],
        [
              'id'=>152,
              'country_code'=>'NR',
              'name'=>'Nauru',
              'phonecode'=>674
                ],
        [
              'id'=>153,
              'country_code'=>'NP',
              'name'=>'Nepal',
              'phonecode'=>977
                ],
        [
              'id'=>154,
              'country_code'=>'AN',
              'name'=>'Netherlands Antilles',
              'phonecode'=>599
                ],
        [
              'id'=>155,
              'country_code'=>'NL',
              'name'=>'Netherlands The',
              'phonecode'=>31
                ],
        [
              'id'=>156,
              'country_code'=>'NC',
              'name'=>'New Caledonia',
              'phonecode'=>687
                ],
        [
              'id'=>157,
              'country_code'=>'NZ',
              'name'=>'New Zealand',
              'phonecode'=>64
                ],
        [
              'id'=>158,
              'country_code'=>'NI',
              'name'=>'Nicaragua',
              'phonecode'=>505
                ],
        [
              'id'=>159,
              'country_code'=>'NE',
              'name'=>'Niger',
              'phonecode'=>227
                ],
        [
              'id'=>160,
              'country_code'=>'NG',
              'name'=>'Nigeria',
              'phonecode'=>234
                ],
        [
              'id'=>161,
              'country_code'=>'NU',
              'name'=>'Niue',
              'phonecode'=>683
                ],
        [
              'id'=>162,
              'country_code'=>'NF',
              'name'=>'Norfolk Island',
              'phonecode'=>672
                ],
        [
              'id'=>163,
              'country_code'=>'MP',
              'name'=>'Northern Mariana Islands',
              'phonecode'=>1670
                ],
        [
              'id'=>164,
              'country_code'=>'NO',
              'name'=>'Norway',
              'phonecode'=>47
                ],
        [
              'id'=>165,
              'country_code'=>'OM',
              'name'=>'Oman',
              'phonecode'=>968
                ],
        [
              'id'=>166,
              'country_code'=>'PK',
              'name'=>'Pakistan',
              'phonecode'=>92
                ],
        [
              'id'=>167,
              'country_code'=>'PW',
              'name'=>'Palau',
              'phonecode'=>680
                ],
        [
              'id'=>168,
              'country_code'=>'PS',
              'name'=>'Palestinian Territory Occupied',
              'phonecode'=>970
                ],
        [
              'id'=>169,
              'country_code'=>'PA',
              'name'=>'Panama',
              'phonecode'=>507
                ],
        [
              'id'=>170,
              'country_code'=>'PG',
              'name'=>'Papua new Guinea',
              'phonecode'=>675
                ],
        [
              'id'=>171,
              'country_code'=>'PY',
              'name'=>'Paraguay',
              'phonecode'=>595
                ],
        [
              'id'=>172,
              'country_code'=>'PE',
              'name'=>'Peru',
              'phonecode'=>51
                ],
        [
              'id'=>173,
              'country_code'=>'PH',
              'name'=>'Philippines',
              'phonecode'=>63
                ],
        [
              'id'=>174,
              'country_code'=>'PN',
              'name'=>'Pitcairn Island',
              'phonecode'=>0
                ],
        [
              'id'=>175,
              'country_code'=>'PL',
              'name'=>'Poland',
              'phonecode'=>48
                ],
        [
              'id'=>176,
              'country_code'=>'PT',
              'name'=>'Portugal',
              'phonecode'=>351
                ],
        [
              'id'=>177,
              'country_code'=>'PR',
              'name'=>'Puerto Rico',
              'phonecode'=>1787
                ],
        [
              'id'=>178,
              'country_code'=>'QA',
              'name'=>'Qatar',
              'phonecode'=>974
                ],
        [
              'id'=>179,
              'country_code'=>'RE',
              'name'=>'Reunion',
              'phonecode'=>262
                ],
        [
              'id'=>180,
              'country_code'=>'RO',
              'name'=>'Romania',
              'phonecode'=>40
                ],
        [
              'id'=>181,
              'country_code'=>'RU',
              'name'=>'Russia',
              'phonecode'=>70
                ],
        [
              'id'=>182,
              'country_code'=>'RW',
              'name'=>'Rwanda',
              'phonecode'=>250
                ],
        [
              'id'=>183,
              'country_code'=>'SH',
              'name'=>'Saint Helena',
              'phonecode'=>290
                ],
        [
              'id'=>184,
              'country_code'=>'KN',
              'name'=>'Saint Kitts And Nevis',
              'phonecode'=>1869
                ],
        [
              'id'=>185,
              'country_code'=>'LC',
              'name'=>'Saint Lucia',
              'phonecode'=>1758
                ],
        [
              'id'=>186,
              'country_code'=>'PM',
              'name'=>'Saint Pierre and Miquelon',
              'phonecode'=>508
                ],
        [
              'id'=>187,
              'country_code'=>'VC',
              'name'=>'Saint Vincent And The Grenadines',
              'phonecode'=>1784
                ],
        [
              'id'=>188,
              'country_code'=>'WS',
              'name'=>'Samoa',
              'phonecode'=>684
                ],
        [
              'id'=>189,
              'country_code'=>'SM',
              'name'=>'San Marino',
              'phonecode'=>378
                ],
        [
              'id'=>190,
              'country_code'=>'ST',
              'name'=>'Sao Tome and Principe',
              'phonecode'=>239
                ],
        [
              'id'=>191,
              'country_code'=>'SA',
              'name'=>'Saudi Arabia',
              'phonecode'=>966
                ],
        [
              'id'=>192,
              'country_code'=>'SN',
              'name'=>'Senegal',
              'phonecode'=>221
                ],
        [
              'id'=>193,
              'country_code'=>'RS',
              'name'=>'Serbia',
              'phonecode'=>381
                ],
        [
              'id'=>194,
              'country_code'=>'SC',
              'name'=>'Seychelles',
              'phonecode'=>248
                ],
        [
              'id'=>195,
              'country_code'=>'SL',
              'name'=>'Sierra Leone',
              'phonecode'=>232
                ],
        [
              'id'=>196,
              'country_code'=>'SG',
              'name'=>'Singapore',
              'phonecode'=>65
                ],
        [
              'id'=>197,
              'country_code'=>'SK',
              'name'=>'Slovakia',
              'phonecode'=>421
                ],
        [
              'id'=>198,
              'country_code'=>'SI',
              'name'=>'Slovenia',
              'phonecode'=>386
                ],
        [
              'id'=>199,
              'country_code'=>'XG',
              'name'=>'Smaller Territories of the UK',
              'phonecode'=>44
                ],
        [
              'id'=>200,
              'country_code'=>'SB',
              'name'=>'Solomon Islands',
              'phonecode'=>677
                ],
        [
              'id'=>201,
              'country_code'=>'SO',
              'name'=>'Somalia',
              'phonecode'=>252
                ],
        [
              'id'=>202,
              'country_code'=>'ZA',
              'name'=>'South Africa',
              'phonecode'=>27
                ],
        [
              'id'=>203,
              'country_code'=>'GS',
              'name'=>'South Georgia',
              'phonecode'=>0
                ],
        [
              'id'=>204,
              'country_code'=>'SS',
              'name'=>'South Sudan',
              'phonecode'=>211
                ],
        [
              'id'=>205,
              'country_code'=>'ES',
              'name'=>'Spain',
              'phonecode'=>34
                ],
        [
              'id'=>206,
              'country_code'=>'LK',
              'name'=>'Sri Lanka',
              'phonecode'=>94
                ],
        [
              'id'=>207,
              'country_code'=>'SD',
              'name'=>'Sudan',
              'phonecode'=>249
                ],
        [
              'id'=>208,
              'country_code'=>'SR',
              'name'=>'Suricountry_name',
              'phonecode'=>597
                ],
        [
              'id'=>209,
              'country_code'=>'SJ',
              'name'=>'Svalbard And Jan Mayen Islands',
              'phonecode'=>47
                ],
        [
              'id'=>210,
              'country_code'=>'SZ',
              'name'=>'Swaziland',
              'phonecode'=>268
                ],
        [
              'id'=>211,
              'country_code'=>'SE',
              'name'=>'Sweden',
              'phonecode'=>46
                ],
        [
              'id'=>212,
              'country_code'=>'CH',
              'name'=>'Switzerland',
              'phonecode'=>41
                ],
        [
              'id'=>213,
              'country_code'=>'SY',
              'name'=>'Syria',
              'phonecode'=>963
                ],
        [
              'id'=>214,
              'country_code'=>'TW',
              'name'=>'Taiwan',
              'phonecode'=>886
                ],
        [
              'id'=>215,
              'country_code'=>'TJ',
              'name'=>'Tajikistan',
              'phonecode'=>992
                ],
        [
              'id'=>216,
              'country_code'=>'TZ',
              'name'=>'Tanzania',
              'phonecode'=>255
                ],
        [
              'id'=>217,
              'country_code'=>'TH',
              'name'=>'Thailand',
              'phonecode'=>66
                ],
        [
              'id'=>218,
              'country_code'=>'TG',
              'name'=>'Togo',
              'phonecode'=>228
                ],
        [
              'id'=>219,
              'country_code'=>'TK',
              'name'=>'Tokelau',
              'phonecode'=>690
                ],
        [
              'id'=>220,
              'country_code'=>'TO',
              'name'=>'Tonga',
              'phonecode'=>676
                ],
        [
              'id'=>221,
              'country_code'=>'TT',
              'name'=>'Trincountry_idad And Tobago',
              'phonecode'=>1868
                ],
        [
              'id'=>222,
              'country_code'=>'TN',
              'name'=>'Tunisia',
              'phonecode'=>216
                ],
        [
              'id'=>223,
              'country_code'=>'TR',
              'name'=>'Turkey',
              'phonecode'=>90
                ],
        [
              'id'=>224,
              'country_code'=>'TM',
              'name'=>'Turkmenistan',
              'phonecode'=>7370
                ],
        [
              'id'=>225,
              'country_code'=>'TC',
              'name'=>'Turks And Caicos Islands',
              'phonecode'=>1649
                ],
        [
              'id'=>226,
              'country_code'=>'TV',
              'name'=>'Tuvalu',
              'phonecode'=>688
                ],
        [
              'id'=>227,
              'country_code'=>'UG',
              'name'=>'Uganda',
              'phonecode'=>256
                ],
        [
              'id'=>228,
              'country_code'=>'UA',
              'name'=>'Ukraine',
              'phonecode'=>380
                ],
        [
              'id'=>229,
              'country_code'=>'AE',
              'name'=>'United Arab Emirates',
              'phonecode'=>971
                ],
        [
              'id'=>230,
              'country_code'=>'GB',
              'name'=>'United Kingdom',
              'phonecode'=>44
                ],
        [
              'id'=>231,
              'country_code'=>'US',
              'name'=>'United States',
              'phonecode'=>1
                ],
        [
              'id'=>232,
              'country_code'=>'UM',
              'name'=>'United States Minor Outlying Islands',
              'phonecode'=>1
                ],
        [
              'id'=>233,
              'country_code'=>'UY',
              'name'=>'Uruguay',
              'phonecode'=>598
                ],
        [
              'id'=>234,
              'country_code'=>'UZ',
              'name'=>'Uzbekistan',
              'phonecode'=>998
                ],
        [
              'id'=>235,
              'country_code'=>'VU',
              'name'=>'Vanuatu',
              'phonecode'=>678
                ],
        [
              'id'=>236,
              'country_code'=>'VA',
              'name'=>'Vatican City State (Holy See)',
              'phonecode'=>39
                ],
        [
              'id'=>237,
              'country_code'=>'VE',
              'name'=>'Venezuela',
              'phonecode'=>58
                ],
        [
              'id'=>238,
              'country_code'=>'VN',
              'name'=>'Vietnam',
              'phonecode'=>84
                ],
        [
              'id'=>239,
              'country_code'=>'VG',
              'name'=>'Virgin Islands (British)',
              'phonecode'=>1284
                ],
        [
              'id'=>240,
              'country_code'=>'VI',
              'name'=>'Virgin Islands (US)',
              'phonecode'=>1340
                ],
        [
              'id'=>241,
              'country_code'=>'WF',
              'name'=>'Wallis And Futuna Islands',
              'phonecode'=>681
                ],
        [
              'id'=>242,
              'country_code'=>'EH',
              'name'=>'Western Sahara',
              'phonecode'=>212
                ],
        [
              'id'=>243,
              'country_code'=>'YE',
              'name'=>'Yemen',
              'phonecode'=>967
                ],
        [
              'id'=>244,
              'country_code'=>'YU',
              'name'=>'Yugoslavia',
              'phonecode'=>38
                ],
        [
              'id'=>245,
              'country_code'=>'ZM',
              'name'=>'Zambia',
              'phonecode'=>260
                ],
        [
              'id'=>246,
              'country_code'=>'ZW',
              'name'=>'Zimbabwe',
              'phonecode'=>26
                ],
          ];

        foreach ($countries as $country) {
            Country::create($country);
        }
        // Country::insert($countries);
    }
}
