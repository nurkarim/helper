<?php

namespace App\CustomClass;

class GlobalHelper
{

    

    public static function yaerList()
    {
        $year=[
          [
            'id'=>'2016',
          ],
          [
            'id'=>'2017',
          ],
          [
            'id'=>'2018',
          ],
          [
            'id'=>'2019',
          ],
          [
            'id'=>'2020',
          ],
          [
            'id'=>'2021',
          ],
          [
            'id'=>'2022',
          ],
          [
            'id'=>'2023',
          ],
          [
            'id'=>'2024',
          ],
          [
            'id'=>'2025',
          ],
          [
            'id'=>'2026',
          ]
        ];
        return $year;
    }


    public static function timezoneList()
    {
        $regions = array(
            'Africa' => \DateTimeZone::AFRICA,
            'America' => \DateTimeZone::AMERICA,
            'Antarctica' => \DateTimeZone::ANTARCTICA,
            'Asia' => \DateTimeZone::ASIA,
            'Atlantic' => \DateTimeZone::ATLANTIC,
            'Europe' => \DateTimeZone::EUROPE,
            'Indian' => \DateTimeZone::INDIAN,
            'Pacific' => \DateTimeZone::PACIFIC
        );
        
        $timezones = array();
        foreach ($regions as $name => $mask) {
            $zones = \DateTimeZone::listIdentifiers($mask);
            foreach ($zones as $timezone) {
                // Lets sample the time there right now
                $time = new \DateTime(NULL, new \DateTimeZone($timezone));
                // Us dumb Americans can't handle millitary time
                $ampm = $time->format('H') > 12 ? ' (' . $time->format('h:i A') . ')' : '';
                // Remove region name and add a sample time
                $timezones[$name][$timezone] = substr($timezone, strlen($name) + 1);
            }
        }
        return $timezones;
    }

    public static function sync($url, $compiledFile, $lang)
    {
        try {
            $indexPage = file_get_contents(url($url . '/' . $lang));
            $fileHandeler = fopen($compiledFile, 'w');
            fwrite($fileHandeler, $indexPage);
            fclose($fileHandeler);
            return true;
        } catch (\Exception $e) {
            return $e;
        }

    }
    public static function country()
    {
        $country=[
            [
                'id'=>1,
                'code'=>'AF',
                'name'=>'Afghanistan',
            ],
            [
                'id'=>2,
                'code'=>'AX',
                'name'=>'Åland Islands',
            ], 
            [
                'id'=>3,
                'code'=>'DZ',
                'name'=>'Algeria',
            ],
            [
                'id'=>4,
                'code'=>'AS',
                'name'=>'American Samoa',
            ],
            [
                'id'=>5,
                'code'=>'AD',
                'name'=>'Andorra',
            ],
            [
                'id'=>6,
                'code'=>'AO',
                'name'=>'Angola',
            ],
            [
                'id'=>7,
                'code'=>'AI',
                'name'=>'Anguilla',
            ],
            [
                'id'=>8,
                'code'=>'AQ',
                'name'=>'Antarctica',
            ],
            [
                'id'=>9,
                'code'=>'AG',
                'name'=>'Antigua and Barbuda',
            ],
            [
                'id'=>10,
                'code'=>'AR',
                'name'=>'Argentina',
            ],
            [
                'id'=>11,
                'code'=>'AM',
                'name'=>'Armenia',
            ],
            [
                'id'=>12,
                'code'=>'AW',
                'name'=>'ArubaAustralia',
            ],
            [
                'id'=>13,
                'code'=>'AU',
                'name'=>'Australia',
            ],
            [
                'id'=>14,
                'code'=>'AT',
                'name'=>'Austria',
            ],
            [
                'id'=>15,
                'code'=>'AZ',
                'name'=>'Azerbaijan',
            ],
            [
                'id'=>16,
                'code'=>'BS',
                'name'=>'Bahamas',
            ],
            [
                'id'=>17,
                'code'=>'BH',
                'name'=>'Bahrain',
            ],
            [
                'id'=>18,
                'code'=>'BD',
                'name'=>'Bangladesh',
            ],
            [
                'id'=>19,
                'code'=>'BB',
                'name'=>'Barbados',
            ],[
                'id'=>20,
                'code'=>'BY',
                'name'=>'BelarusBelgiumBEBZ',
            ],
            [
                'id'=>21,
                'code'=>'BEBZ',
                'name'=>'BelgiumBEBZ',
            ],
            [
                'id'=>22,
                'code'=>'BZ',
                'name'=>'Belize',
            ],
            [
                'id'=>23,
                'code'=>'BJ',
                'name'=>'BeninBM',
            ],
            [
                'id'=>24,
                'code'=>'BM',
                'name'=>'Bermuda',
            ],
            [
                'id'=>25,
                'code'=>'BT',
                'name'=>'Bhutan',
            ],
            [
                'id'=>26,
                'code'=>'BO',
                'name'=>'Bolivia, Plurinational State of',
            ],
            [
                'id'=>27,
                'code'=>'BA',
                'name'=>'Bosnia and Herzegovina',
            ],
            [
                'id'=>28,
                'code'=>'BW',
                'name'=>'Botswana',
            ],
            [
                'id'=>29,
                'code'=>'BV',
                'name'=>'Bouvet Island',
            ],
            [
                'id'=>30,
                'code'=>'BR',
                'name'=>'Brazil',
            ],
            [
                'id'=>31,
                'code'=>'IO',
                'name'=>'British Indian Ocean',
            ],
            [
                'id'=>32,
                'code'=>'BN',
                'name'=>'Brunei DarussalamBN',
            ],
            [
                'id'=>33,
                'code'=>'BG',
                'name'=>'Bulgaria',
            ],
            [
                'id'=>34,
                'code'=>'BF',
                'name'=>'Burkina Faso',
            ],
            [
                'id'=>35,
                'code'=>'BI',
                'name'=>'Burundi',
            ],
            [
                'id'=>36,
                'code'=>'KH',
                'name'=>'Cambodia',
            ],
            [
                'id'=>37,
                'code'=>'CM',
                'name'=>'Cameroon',
            ],
            [
                'id'=>38,
                'code'=>'CA',
                'name'=>'Canada',
            ],
            [
                'id'=>39,
                'code'=>'CV',
                'name'=>'Cape Verde',
            ],
            [
                'id'=>40,
                'code'=>'KY',
                'name'=>'Cayman Islands',
            ], [
                'id'=>41,
                'code'=>'CF',
                'name'=>'Central African Republic',
            ], [
                'id'=>42,
                'code'=>'TD',
                'name'=>'Chad',
            ], [
                'id'=>43,
                'code'=>'CL',
                'name'=>'Chile',
            ], [
                'id'=>44,
                'code'=>'CN',
                'name'=>'China',
            ], [
                'id'=>45,
                'code'=>'CX',
                'name'=>'Christmas Island',
            ], [
                'id'=>46,
                'code'=>'CC',
                'name'=>'Cocos (Keeling) Islands',
            ], [
                'id'=>47,
                'code'=>'CO',
                'name'=>'Colombia',
            ], [
                'id'=>48,
                'code'=>'KM',
                'name'=>'Comoros',
            ], [
                'id'=>50,
                'code'=>'CG',
                'name'=>'Congo',
            ], [
                'id'=>51,
                'code'=>'CD',
                'name'=>'Congo, The Democratic Republic of the',
            ],[
                'id'=>52,
                'code'=>'CK',
                'name'=>'Cook Islands',
            ],[
                'id'=>53,
                'code'=>'CR',
                'name'=>'Costa Rica',
            ],[
                'id'=>54,
                'code'=>'CI',
                'name'=>'Côte dIvoire',
            ],[
                'id'=>55,
                'code'=>'HR',
                'name'=>'Croatia',
            ],[
                'id'=>56,
                'code'=>'CU',
                'name'=>'Cuba',
            ],[
                'id'=>57,
                'code'=>'CY',
                'name'=>'Cyprus',
            ],[
                'id'=>58,
                'code'=>'CZ',
                'name'=>'Czech Republic',
            ],[
                'id'=>59,
                'code'=>'DK',
                'name'=>'Denmark',
            ],[
                'id'=>60,
                'code'=>'DJ',
                'name'=>'Djibouti',
            ],[
                'id'=>61,
                'code'=>'DM',
                'name'=>'Dominica',
            ],[
                'id'=>62,
                'code'=>'DO',
                'name'=>'Dominican Republic',
            ],[
                'id'=>63,
                'code'=>'EC',
                'name'=>'Ecuador',
            ],[
                'id'=>64,
                'code'=>'',
                'name'=>'',
            ],[
                'id'=>65,
                'code'=>'EG',
                'name'=>'Egypt',
            ],[
                'id'=>66,
                'code'=>'SV',
                'name'=>'El Salvador',
            ],[
                'id'=>67,
                'code'=>'GQ',
                'name'=>'Equatorial Guinea',
            ],[
                'id'=>68,
                'code'=>'ER',
                'name'=>'Eritrea',
            ],[
                'id'=>69,
                'code'=>'EE',
                'name'=>'Estonia',
            ],[
                'id'=>70,
                'code'=>'ET',
                'name'=>'Ethiopia',
            ],[
                'id'=>71,
                'code'=>'FK',
                'name'=>'Falkland Islands (Malvinas)',
            ],[
                'id'=>72,
                'code'=>'FO',
                'name'=>'Faroe Islands',
            ],[
                'id'=>73,
                'code'=>'FJ',
                'name'=>'Fiji',
            ],[
                'id'=>74,
                'code'=>'FI',
                'name'=>'Finland',
            ],[
                'id'=>75,
                'code'=>'FR',
                'name'=>'France',
            ],[
                'id'=>76,
                'code'=>'GF',
                'name'=>'French Guiana',
            ],[
                'id'=>77,
                'code'=>'PF',
                'name'=>'French Polynesia',
            ],[
                'id'=>78,
                'code'=>'TF',
                'name'=>'French Southern Territories',
            ],[
                'id'=>79,
                'code'=>'GA',
                'name'=>'Gabon',
            ],[
                'id'=>80,
                'code'=>'GM',
                'name'=>'Gambia',
            ],[
                'id'=>81,
                'code'=>'GE',
                'name'=>'Georgia',
            ],[
                'id'=>82,
                'code'=>'DE',
                'name'=>'Germany',
            ],[
                'id'=>83,
                'code'=>'GH',
                'name'=>'Ghana',
            ],[
                'id'=>84,
                'code'=>'GI',
                'name'=>'Gibraltar',
            ],[
                'id'=>85,
                'code'=>'GR',
                'name'=>'Greece',
            ],[
                'id'=>86,
                'code'=>'GL',
                'name'=>'Greenland',
            ],[
                'id'=>87,
                'code'=>'GD',
                'name'=>'Grenada',
            ],[
                'id'=>88,
                'code'=>'GP',
                'name'=>'Guadeloupe',
            ],[
                'id'=>89,
                'code'=>'GU',
                'name'=>'Guam',
            ],[
                'id'=>90,
                'code'=>'GT',
                'name'=>'Guatemala',
            ],

    
        ];
        return $country;
    }

    public static function countryList()
    {
        $country_array = array(
                "AF" => "Afghanistan",
                "AL" => "Albania",
                "DZ" => "Algeria",
                "AS" => "American Samoa",
                "AD" => "Andorra",
                "AO" => "Angola",
                "AI" => "Anguilla",
                "AQ" => "Antarctica",
                "AG" => "Antigua and Barbuda",
                "AR" => "Argentina",
                "AM" => "Armenia",
                "AW" => "Aruba",
                "AU" => "Australia",
                "AT" => "Austria",
                "AZ" => "Azerbaijan",
                "BS" => "Bahamas",
                "BH" => "Bahrain",
                "BD" => "Bangladesh",
                "BB" => "Barbados",
                "BY" => "Belarus",
                "BE" => "Belgium",
                "BZ" => "Belize",
                "BJ" => "Benin",
                "BM" => "Bermuda",
                "BT" => "Bhutan",
                "BO" => "Bolivia",
                "BA" => "Bosnia and Herzegovina",
                "BW" => "Botswana",
                "BV" => "Bouvet Island",
                "BR" => "Brazil",
                "BQ" => "British Antarctic Territory",
                "IO" => "British Indian Ocean Territory",
                "VG" => "British Virgin Islands",
                "BN" => "Brunei",
                "BG" => "Bulgaria",
                "BF" => "Burkina Faso",
                "BI" => "Burundi",
                "KH" => "Cambodia",
                "CM" => "Cameroon",
                "CA" => "Canada",
                "CT" => "Canton and Enderbury Islands",
                "CV" => "Cape Verde",
                "KY" => "Cayman Islands",
                "CF" => "Central African Republic",
                "TD" => "Chad",
                "CL" => "Chile",
                "CN" => "China",
                "CX" => "Christmas Island",
                "CC" => "Cocos [Keeling] Islands",
                "CO" => "Colombia",
                "KM" => "Comoros",
                "CG" => "Congo - Brazzaville",
                "CD" => "Congo - Kinshasa",
                "CK" => "Cook Islands",
                "CR" => "Costa Rica",
                "HR" => "Croatia",
                "CU" => "Cuba",
                "CY" => "Cyprus",
                "CZ" => "Czech Republic",
                "CI" => "Côte d’Ivoire",
                "DK" => "Denmark",
                "DJ" => "Djibouti",
                "DM" => "Dominica",
                "DO" => "Dominican Republic",
                "NQ" => "Dronning Maud Land",
                "DD" => "East Germany",
                "EC" => "Ecuador",
                "EG" => "Egypt",
                "SV" => "El Salvador",
                "GQ" => "Equatorial Guinea",
                "ER" => "Eritrea",
                "EE" => "Estonia",
                "ET" => "Ethiopia",
                "FK" => "Falkland Islands",
                "FO" => "Faroe Islands",
                "FJ" => "Fiji",
                "FI" => "Finland",
                "FR" => "France",
                "GF" => "French Guiana",
                "PF" => "French Polynesia",
                "TF" => "French Southern Territories",
                "FQ" => "French Southern and Antarctic Territories",
                "GA" => "Gabon",
                "GM" => "Gambia",
                "GE" => "Georgia",
                "DE" => "Germany",
                "GH" => "Ghana",
                "GI" => "Gibraltar",
                "GR" => "Greece",
                "GL" => "Greenland",
                "GD" => "Grenada",
                "GP" => "Guadeloupe",
                "GU" => "Guam",
                "GT" => "Guatemala",
                "GG" => "Guernsey",
                "GN" => "Guinea",
                "GW" => "Guinea-Bissau",
                "GY" => "Guyana",
                "HT" => "Haiti",
                "HM" => "Heard Island and McDonald Islands",
                "HN" => "Honduras",
                "HK" => "Hong Kong SAR China",
                "HU" => "Hungary",
                "IS" => "Iceland",
                "IN" => "India",
                "ID" => "Indonesia",
                "IR" => "Iran",
                "IQ" => "Iraq",
                "IE" => "Ireland",
                "IM" => "Isle of Man",
                "IL" => "Israel",
                "IT" => "Italy",
                "JM" => "Jamaica",
                "JP" => "Japan",
                "JE" => "Jersey",
                "JT" => "Johnston Island",
                "JO" => "Jordan",
                "KZ" => "Kazakhstan",
                "KE" => "Kenya",
                "KI" => "Kiribati",
                "KW" => "Kuwait",
                "KG" => "Kyrgyzstan",
                "LA" => "Laos",
                "LV" => "Latvia",
                "LB" => "Lebanon",
                "LS" => "Lesotho",
                "LR" => "Liberia",
                "LY" => "Libya",
                "LI" => "Liechtenstein",
                "LT" => "Lithuania",
                "LU" => "Luxembourg",
                "MO" => "Macau SAR China",
                "MK" => "Macedonia",
                "MG" => "Madagascar",
                "MW" => "Malawi",
                "MY" => "Malaysia",
                "MV" => "Maldives",
                "ML" => "Mali",
                "MT" => "Malta",
                "MH" => "Marshall Islands",
                "MQ" => "Martinique",
                "MR" => "Mauritania",
                "MU" => "Mauritius",
                "YT" => "Mayotte",
                "FX" => "Metropolitan France",
                "MX" => "Mexico",
                "FM" => "Micronesia",
                "MI" => "Midway Islands",
                "MD" => "Moldova",
                "MC" => "Monaco",
                "MN" => "Mongolia",
                "ME" => "Montenegro",
                "MS" => "Montserrat",
                "MA" => "Morocco",
                "MZ" => "Mozambique",
                "MM" => "Myanmar [Burma]",
                "NA" => "Namibia",
                "NR" => "Nauru",
                "NP" => "Nepal",
                "NL" => "Netherlands",
                "AN" => "Netherlands Antilles",
                "NT" => "Neutral Zone",
                "NC" => "New Caledonia",
                "NZ" => "New Zealand",
                "NI" => "Nicaragua",
                "NE" => "Niger",
                "NG" => "Nigeria",
                "NU" => "Niue",
                "NF" => "Norfolk Island",
                "KP" => "North Korea",
                "VD" => "North Vietnam",
                "MP" => "Northern Mariana Islands",
                "NO" => "Norway",
                "OM" => "Oman",
                "PC" => "Pacific Islands Trust Territory",
                "PK" => "Pakistan",
                "PW" => "Palau",
                "PS" => "Palestinian Territories",
                "PA" => "Panama",
                "PZ" => "Panama Canal Zone",
                "PG" => "Papua New Guinea",
                "PY" => "Paraguay",
                "YD" => "People's Democratic Republic of Yemen",
                "PE" => "Peru",
                "PH" => "Philippines",
                "PN" => "Pitcairn Islands",
                "PL" => "Poland",
                "PT" => "Portugal",
                "PR" => "Puerto Rico",
                "QA" => "Qatar",
                "RO" => "Romania",
                "RU" => "Russia",
                "RW" => "Rwanda",
                "RE" => "Réunion",
                "BL" => "Saint Barthélemy",
                "SH" => "Saint Helena",
                "KN" => "Saint Kitts and Nevis",
                "LC" => "Saint Lucia",
                "MF" => "Saint Martin",
                "PM" => "Saint Pierre and Miquelon",
                "VC" => "Saint Vincent and the Grenadines",
                "WS" => "Samoa",
                "SM" => "San Marino",
                "SA" => "Saudi Arabia",
                "SN" => "Senegal",
                "RS" => "Serbia",
                "CS" => "Serbia and Montenegro",
                "SC" => "Seychelles",
                "SL" => "Sierra Leone",
                "SG" => "Singapore",
                "SK" => "Slovakia",
                "SI" => "Slovenia",
                "SB" => "Solomon Islands",
                "SO" => "Somalia",
                "ZA" => "South Africa",
                "GS" => "South Georgia and the South Sandwich Islands",
                "KR" => "South Korea",
                "ES" => "Spain",
                "LK" => "Sri Lanka",
                "SD" => "Sudan",
                "SR" => "Suriname",
                "SJ" => "Svalbard and Jan Mayen",
                "SZ" => "Swaziland",
                "SE" => "Sweden",
                "CH" => "Switzerland",
                "SY" => "Syria",
                "ST" => "São Tomé and Príncipe",
                "TW" => "Taiwan",
                "TJ" => "Tajikistan",
                "TZ" => "Tanzania",
                "TH" => "Thailand",
                "TL" => "Timor-Leste",
                "TG" => "Togo",
                "TK" => "Tokelau",
                "TO" => "Tonga",
                "TT" => "Trinidad and Tobago",
                "TN" => "Tunisia",
                "TR" => "Turkey",
                "TM" => "Turkmenistan",
                "TC" => "Turks and Caicos Islands",
                "TV" => "Tuvalu",
                "UM" => "U.S. Minor Outlying Islands",
                "PU" => "U.S. Miscellaneous Pacific Islands",
                "VI" => "U.S. Virgin Islands",
                "UG" => "Uganda",
                "UA" => "Ukraine",
                "SU" => "Union of Soviet Socialist Republics",
                "AE" => "United Arab Emirates",
                "GB" => "United Kingdom",
                "US" => "United States",
                "ZZ" => "Unknown or Invalid Region",
                "UY" => "Uruguay",
                "UZ" => "Uzbekistan",
                "VU" => "Vanuatu",
                "VA" => "Vatican City",
                "VE" => "Venezuela",
                "VN" => "Vietnam",
                "WK" => "Wake Island",
                "WF" => "Wallis and Futuna",
                "EH" => "Western Sahara",
                "YE" => "Yemen",
                "ZM" => "Zambia",
                "ZW" => "Zimbabwe",
                "AX" => "Åland Islands",
                );
                return $country_array;
    }

     public static function month()
    {
        $name = [
            [
                'id' =>'01',
                'name'=>'Jan',
            ], 
            [
                'id' =>'02',
                'name'=>'Feb',
            ], 
            [
            'id' =>'03',
            'name'=>'Mar',
            ],
            [
                'id' =>'04',
                'name'=>'Apr',
            ], 
            [
                'id' =>'05',
                'name'=>'May',
            ],
            [
                'id' =>'06',
                'name'=>'Jun',
            ],
            [
                'id' =>'07',
                'name'=>'Jul',
            ],
            [
                'id' =>'08',
                'name'=>'Aug',
            ],
            [ 
                'id' =>'09',
                'name'=>'Sep',
            ],
            [
                'id' =>'10',
                'name'=>'Oct',
            ],
            [
                'id' =>'11',
                'name'=>'Nov',
            ],
            [
                'id' =>'12',
                'name'=>'Dec',
            ]
        ];
        return $name;
    }

}