<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CurrencyTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
      DB::table('currencies')->truncate();
      DB::table('currencies')->insert(['entity' => "AFGHANISTAN", 'currency' => "Afghani", 'code' => "AFN"]);
      DB::table('currencies')->insert(['entity' => "ALAND ISLANDS", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "ALBANIA", 'currency' => "Lek", 'code' => "ALL"]);
      DB::table('currencies')->insert(['entity' => "ALGERIA", 'currency' => "Algerian Dinar", 'code' => "DZD"]);
      DB::table('currencies')->insert(['entity' => "AMERICAN SAMOA ", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "ANDORRA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "ANGOLA", 'currency' => "Kwanza", 'code' => "AOA"]);
      DB::table('currencies')->insert(['entity' => "ANGUILLA", 'currency' => "East Caribbean Dollar", 'code' => "XCD"]);
      DB::table('currencies')->insert(['entity' => "ANTARCTICA", 'currency' => "No universal currenc", 'code' => "N/A"]);
      DB::table('currencies')->insert(['entity' => "ANTIGUA AND BARBUDA", 'currency' => "East Caribbean Dollar", 'code' => "XCD"]);
      DB::table('currencies')->insert(['entity' => "ARGENTINA", 'currency' => "Argentine Peso", 'code' => "ARS"]);
      DB::table('currencies')->insert(['entity' => "ARMENIA", 'currency' => "Armenian Dram", 'code' => "AMD"]);
      DB::table('currencies')->insert(['entity' => "ARUBA", 'currency' => "Aruban Florin", 'code' => "AWG"]);
      DB::table('currencies')->insert(['entity' => "AUSTRALIA", 'currency' => "Australian Dollar", 'code' => "AUD"]);
      DB::table('currencies')->insert(['entity' => "AUSTRIA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "AZERBAIJAN", 'currency' => "Azerbaijanian Manat", 'code' => "AZN"]);
      DB::table('currencies')->insert(['entity' => "BAHAMAS (THE)", 'currency' => "Bahamian Dollar", 'code' => "BSD"]);
      DB::table('currencies')->insert(['entity' => "BAHRAIN", 'currency' => "Bahraini Dinar", 'code' => "BHD"]);
      DB::table('currencies')->insert(['entity' => "BANGLADESH", 'currency' => "Taka", 'code' => "BDT"]);
      DB::table('currencies')->insert(['entity' => "BARBADOS", 'currency' => "Barbados Dollar", 'code' => "BBD"]);
      DB::table('currencies')->insert(['entity' => "BELARUS", 'currency' => "Belarusian Ruble", 'code' => "BYN"]);
      DB::table('currencies')->insert(['entity' => "BELARUS", 'currency' => "Belarusian Ruble", 'code' => "BYR"]);
      DB::table('currencies')->insert(['entity' => "BELGIUM", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "BELIZE", 'currency' => "Belize Dollar", 'code' => "BZD"]);
      DB::table('currencies')->insert(['entity' => "BENIN", 'currency' => "CFA Franc BCEAO", 'code' => "XOF"]);
      DB::table('currencies')->insert(['entity' => "BERMUDA", 'currency' => "Bermudian Dollar", 'code' => "BMD"]);
      DB::table('currencies')->insert(['entity' => "BHUTAN", 'currency' => "Indian Rupee", 'code' => "INR"]);
      DB::table('currencies')->insert(['entity' => "BHUTAN", 'currency' => "Ngultrum", 'code' => "BTN"]);
      DB::table('currencies')->insert(['entity' => "BOLIVIA (PLURINATIONAL STATE OF)", 'currency' => "Boliviano", 'code' => "BOB"]);
      DB::table('currencies')->insert(['entity' => "BOLIVIA (PLURINATIONAL STATE OF)", 'currency' => "Mvdol", 'code' => "BOV"]);
      DB::table('currencies')->insert(['entity' => "BONAIRE, SINT EUSTATIUS AND SABA", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "BOSNIA AND HERZEGOVINA", 'currency' => "Convertible Mark", 'code' => "BAM"]);
      DB::table('currencies')->insert(['entity' => "BOTSWANA", 'currency' => "Pula", 'code' => "BWP"]);
      DB::table('currencies')->insert(['entity' => "BOUVET ISLAND", 'currency' => "Norwegian Krone", 'code' => "NOK"]);
      DB::table('currencies')->insert(['entity' => "BRAZIL", 'currency' => "Brazilian Real", 'code' => "BRL"]);
      DB::table('currencies')->insert(['entity' => "BRITISH INDIAN OCEAN TERRITORY (THE)", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "BRUNEI DARUSSALAM", 'currency' => "Brunei Dollar", 'code' => "BND"]);
      DB::table('currencies')->insert(['entity' => "BULGARIA", 'currency' => "Bulgarian Lev", 'code' => "BGN"]);
      DB::table('currencies')->insert(['entity' => "BURKINA FASO", 'currency' => "CFA Franc BCEAO", 'code' => "XOF"]);
      DB::table('currencies')->insert(['entity' => "BURUNDI", 'currency' => "Burundi Franc", 'code' => "BIF"]);
      DB::table('currencies')->insert(['entity' => "CABO VERDE", 'currency' => "Cabo Verde Escudo", 'code' => "CVE"]);
      DB::table('currencies')->insert(['entity' => "CAMBODIA", 'currency' => "Riel", 'code' => "KHR"]);
      DB::table('currencies')->insert(['entity' => "CAMEROON", 'currency' => "CFA Franc BEAC", 'code' => "XAF"]);
      DB::table('currencies')->insert(['entity' => "CANADA", 'currency' => "Canadian Dollar", 'code' => "CAD"]);
      DB::table('currencies')->insert(['entity' => "CAYMAN ISLANDS (THE)", 'currency' => "Cayman Islands Dollar", 'code' => "KYD"]);
      DB::table('currencies')->insert(['entity' => "CENTRAL AFRICAN REPUBLIC (THE)", 'currency' => "CFA Franc BEAC", 'code' => "XAF"]);
      DB::table('currencies')->insert(['entity' => "CHAD", 'currency' => "CFA Franc BEAC", 'code' => "XAF"]);
      DB::table('currencies')->insert(['entity' => "CHILE", 'currency' => "Chilean Peso", 'code' => "CLP"]);
      DB::table('currencies')->insert(['entity' => "CHILE", 'currency' => "Unidad de Fomento", 'code' => "CLF"]);
      DB::table('currencies')->insert(['entity' => "CHINA", 'currency' => "Yuan Renminbi", 'code' => "CNY"]);
      DB::table('currencies')->insert(['entity' => "CHRISTMAS ISLAND", 'currency' => "Australian Dollar", 'code' => "AUD"]);
      DB::table('currencies')->insert(['entity' => "COCOS (KEELING) ISLANDS (THE)", 'currency' => "Australian Dollar", 'code' => "AUD"]);
      DB::table('currencies')->insert(['entity' => "COLOMBIA", 'currency' => "Colombian Peso", 'code' => "COP"]);
      DB::table('currencies')->insert(['entity' => "COLOMBIA", 'currency' => "Unidad de Valor Real", 'code' => "COU"]);
      DB::table('currencies')->insert(['entity' => "COMOROS (THE)", 'currency' => "Comoro Franc", 'code' => "KMF"]);
      DB::table('currencies')->insert(['entity' => "CONGO (THE DEMOCRATIC REPUBLIC OF THE)", 'currency' => "Congolese Franc", 'code' => "CDF"]);
      DB::table('currencies')->insert(['entity' => "CONGO (THE)", 'currency' => "CFA Franc BEAC", 'code' => "XAF"]);
      DB::table('currencies')->insert(['entity' => "COOK ISLANDS (THE)", 'currency' => "New Zealand Dollar", 'code' => "NZD"]);
      DB::table('currencies')->insert(['entity' => "COSTA RICA", 'currency' => "Costa Rican Colon", 'code' => "CRC"]);
      DB::table('currencies')->insert(['entity' => "CÔTE D'IVOIRE", 'currency' => "CFA Franc BCEAO", 'code' => "XOF"]);
      DB::table('currencies')->insert(['entity' => "CROATIA", 'currency' => "Kuna", 'code' => "HRK"]);
      DB::table('currencies')->insert(['entity' => "CUBA", 'currency' => "Cuban Peso", 'code' => "CUP"]);
      DB::table('currencies')->insert(['entity' => "CUBA", 'currency' => "Peso Convertible", 'code' => "CUC"]);
      DB::table('currencies')->insert(['entity' => "CURAÇAO", 'currency' => "Netherlands Antillean Guilder", 'code' => "ANG"]);
      DB::table('currencies')->insert(['entity' => "CYPRUS", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "CZECH REPUBLIC (THE)", 'currency' => "Czech Koruna", 'code' => "CZK"]);
      DB::table('currencies')->insert(['entity' => "DENMARK", 'currency' => "Danish Krone", 'code' => "DKK"]);
      DB::table('currencies')->insert(['entity' => "DJIBOUTI", 'currency' => "Djibouti Franc", 'code' => "DJF"]);
      DB::table('currencies')->insert(['entity' => "DOMINICA", 'currency' => "East Caribbean Dollar", 'code' => "XCD"]);
      DB::table('currencies')->insert(['entity' => "DOMINICAN REPUBLIC (THE)", 'currency' => "Dominican Peso", 'code' => "DOP"]);
      DB::table('currencies')->insert(['entity' => "ECUADOR", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "EGYPT", 'currency' => "Egyptian Pound", 'code' => "EGP"]);
      DB::table('currencies')->insert(['entity' => "EL SALVADOR", 'currency' => "El Salvador Colon", 'code' => "SVC"]);
      DB::table('currencies')->insert(['entity' => "EL SALVADOR", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "EQUATORIAL GUINEA", 'currency' => "CFA Franc BEAC", 'code' => "XAF"]);
      DB::table('currencies')->insert(['entity' => "ERITREA", 'currency' => "Nakfa", 'code' => "ERN"]);
      DB::table('currencies')->insert(['entity' => "ESTONIA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "ETHIOPIA", 'currency' => "Ethiopian Birr", 'code' => "ETB"]);
      DB::table('currencies')->insert(['entity' => "EUROPEAN UNION", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "FALKLAND ISLANDS (THE) [MALVINAS]", 'currency' => "Falkland Islands Pound", 'code' => "FKP"]);
      DB::table('currencies')->insert(['entity' => "FAROE ISLANDS (THE)", 'currency' => "Danish Krone", 'code' => "DKK"]);
      DB::table('currencies')->insert(['entity' => "FIJI", 'currency' => "Fiji Dollar", 'code' => "FJD"]);
      DB::table('currencies')->insert(['entity' => "FINLAND", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "FRANCE", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "FRENCH GUIANA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "FRENCH POLYNESIA", 'currency' => "CFP Franc", 'code' => "XPF"]);
      DB::table('currencies')->insert(['entity' => "FRENCH SOUTHERN TERRITORIES (THE)", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "GABON", 'currency' => "CFA Franc BEAC", 'code' => "XAF"]);
      DB::table('currencies')->insert(['entity' => "GAMBIA (THE)", 'currency' => "Dalasi", 'code' => "GMD"]);
      DB::table('currencies')->insert(['entity' => "GEORGIA", 'currency' => "Lari", 'code' => "GEL"]);
      DB::table('currencies')->insert(['entity' => "GERMANY", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "GHANA", 'currency' => "Ghana Cedi", 'code' => "GHS"]);
      DB::table('currencies')->insert(['entity' => "GIBRALTAR", 'currency' => "Gibraltar Pound", 'code' => "GIP"]);
      DB::table('currencies')->insert(['entity' => "GREECE", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "GREENLAND", 'currency' => "Danish Krone", 'code' => "DKK"]);
      DB::table('currencies')->insert(['entity' => "GRENADA", 'currency' => "East Caribbean Dollar", 'code' => "XCD"]);
      DB::table('currencies')->insert(['entity' => "GUADELOUPE", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "GUAM", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "GUATEMALA", 'currency' => "Quetzal", 'code' => "GTQ"]);
      DB::table('currencies')->insert(['entity' => "GUERNSEY", 'currency' => "Pound Sterling", 'code' => "GBP"]);
      DB::table('currencies')->insert(['entity' => "GUINEA", 'currency' => "Guinea Franc", 'code' => "GNF"]);
      DB::table('currencies')->insert(['entity' => "GUINEA-BISSAU", 'currency' => "CFA Franc BCEAO", 'code' => "XOF"]);
      DB::table('currencies')->insert(['entity' => "GUYANA", 'currency' => "Guyana Dollar", 'code' => "GYD"]);
      DB::table('currencies')->insert(['entity' => "HAITI", 'currency' => "Gourde", 'code' => "HTG"]);
      DB::table('currencies')->insert(['entity' => "HAITI", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "HEARD ISLAND AND McDONALD ISLANDS", 'currency' => "Australian Dollar", 'code' => "AUD"]);
      DB::table('currencies')->insert(['entity' => "HOLY SEE (THE)", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "HONDURAS", 'currency' => "Lempira", 'code' => "HNL"]);
      DB::table('currencies')->insert(['entity' => "HONG KONG", 'currency' => "Hong Kong Dollar", 'code' => "HKD"]);
      DB::table('currencies')->insert(['entity' => "HUNGARY", 'currency' => "Forint", 'code' => "HUF"]);
      DB::table('currencies')->insert(['entity' => "ICELAND", 'currency' => "Iceland Krona", 'code' => "ISK"]);
      DB::table('currencies')->insert(['entity' => "INDIA", 'currency' => "Indian Rupee", 'code' => "INR"]);
      DB::table('currencies')->insert(['entity' => "INDONESIA", 'currency' => "Rupiah", 'code' => "IDR"]);
      DB::table('currencies')->insert(['entity' => "INTERNATIONAL MONETARY FUND (IMF) ", 'currency' => "SDR (Special Drawing Right)", 'code' => "XDR"]);
      DB::table('currencies')->insert(['entity' => "IRAN (ISLAMIC REPUBLIC OF)", 'currency' => "Iranian Rial", 'code' => "IRR"]);
      DB::table('currencies')->insert(['entity' => "IRAQ", 'currency' => "Iraqi Dinar", 'code' => "IQD"]);
      DB::table('currencies')->insert(['entity' => "IRELAND", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "ISLE OF MAN", 'currency' => "Pound Sterling", 'code' => "GBP"]);
      DB::table('currencies')->insert(['entity' => "ISRAEL", 'currency' => "New Israeli Sheqel", 'code' => "ILS"]);
      DB::table('currencies')->insert(['entity' => "ITALY", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "JAMAICA", 'currency' => "Jamaican Dollar", 'code' => "JMD"]);
      DB::table('currencies')->insert(['entity' => "JAPAN", 'currency' => "Yen", 'code' => "JPY"]);
      DB::table('currencies')->insert(['entity' => "JERSEY", 'currency' => "Pound Sterling", 'code' => "GBP"]);
      DB::table('currencies')->insert(['entity' => "JORDAN", 'currency' => "Jordanian Dinar", 'code' => "JOD"]);
      DB::table('currencies')->insert(['entity' => "KAZAKHSTAN", 'currency' => "Tenge", 'code' => "KZT"]);
      DB::table('currencies')->insert(['entity' => "KENYA", 'currency' => "Kenyan Shilling", 'code' => "KES"]);
      DB::table('currencies')->insert(['entity' => "KIRIBATI", 'currency' => "Australian Dollar", 'code' => "AUD"]);
      DB::table('currencies')->insert(['entity' => "KOREA (THE DEMOCRATIC PEOPLE’S REPUBLIC OF)", 'currency' => "North Korean Won", 'code' => "KPW"]);
      DB::table('currencies')->insert(['entity' => "KOREA (THE REPUBLIC OF)", 'currency' => "Won", 'code' => "KRW"]);
      DB::table('currencies')->insert(['entity' => "KUWAIT", 'currency' => "Kuwaiti Dinar", 'code' => "KWD"]);
      DB::table('currencies')->insert(['entity' => "KYRGYZSTAN", 'currency' => "Som", 'code' => "KGS"]);
      DB::table('currencies')->insert(['entity' => "LAO PEOPLE’S DEMOCRATIC REPUBLIC (THE)", 'currency' => "Kip", 'code' => "LAK"]);
      DB::table('currencies')->insert(['entity' => "LATVIA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "LEBANON", 'currency' => "Lebanese Pound", 'code' => "LBP"]);
      DB::table('currencies')->insert(['entity' => "LESOTHO", 'currency' => "Loti", 'code' => "LSL"]);
      DB::table('currencies')->insert(['entity' => "LESOTHO", 'currency' => "Rand", 'code' => "ZAR"]);
      DB::table('currencies')->insert(['entity' => "LIBERIA", 'currency' => "Liberian Dollar", 'code' => "LRD"]);
      DB::table('currencies')->insert(['entity' => "LIBYA", 'currency' => "Libyan Dinar", 'code' => "LYD"]);
      DB::table('currencies')->insert(['entity' => "LIECHTENSTEIN", 'currency' => "Swiss Franc", 'code' => "CHF"]);
      DB::table('currencies')->insert(['entity' => "LITHUANIA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "LUXEMBOURG", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "MACAO", 'currency' => "Pataca", 'code' => "MOP"]);
      DB::table('currencies')->insert(['entity' => "MACEDONIA (THE FORMER YUGOSLAV REPUBLIC OF)", 'currency' => "Denar", 'code' => "MKD"]);
      DB::table('currencies')->insert(['entity' => "MADAGASCAR", 'currency' => "Malagasy Ariary", 'code' => "MGA"]);
      DB::table('currencies')->insert(['entity' => "MALAWI", 'currency' => "Malawi Kwacha", 'code' => "MWK"]);
      DB::table('currencies')->insert(['entity' => "MALAYSIA", 'currency' => "Malaysian Ringgit", 'code' => "MYR"]);
      DB::table('currencies')->insert(['entity' => "MALDIVES", 'currency' => "Rufiyaa", 'code' => "MVR"]);
      DB::table('currencies')->insert(['entity' => "MALI", 'currency' => "CFA Franc BCEAO", 'code' => "XOF"]);
      DB::table('currencies')->insert(['entity' => "MALTA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "MARSHALL ISLANDS (THE)", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "MARTINIQUE", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "MAURITANIA", 'currency' => "Ouguiya", 'code' => "MRO"]);
      DB::table('currencies')->insert(['entity' => "MAURITIUS", 'currency' => "Mauritius Rupee", 'code' => "MUR"]);
      DB::table('currencies')->insert(['entity' => "MAYOTTE", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "MEMBER COUNTRIES OF THE AFRICAN DEVELOPMENT BANK GROUP", 'currency' => "ADB Unit of Account", 'code' => "XUA"]);
      DB::table('currencies')->insert(['entity' => "MEXICO", 'currency' => "Mexican Peso", 'code' => "MXN"]);
      DB::table('currencies')->insert(['entity' => "MEXICO", 'currency' => "Mexican Unidad de Inversion (UDI)", 'code' => "MXV"]);
      DB::table('currencies')->insert(['entity' => "MICRONESIA (FEDERATED STATES OF)", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "MOLDOVA (THE REPUBLIC OF)", 'currency' => "Moldovan Leu", 'code' => "MDL"]);
      DB::table('currencies')->insert(['entity' => "MONACO", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "MONGOLIA", 'currency' => "Tugrik", 'code' => "MNT"]);
      DB::table('currencies')->insert(['entity' => "MONTENEGRO", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "MONTSERRAT", 'currency' => "East Caribbean Dollar", 'code' => "XCD"]);
      DB::table('currencies')->insert(['entity' => "MOROCCO", 'currency' => "Moroccan Dirham", 'code' => "MAD"]);
      DB::table('currencies')->insert(['entity' => "MOZAMBIQUE", 'currency' => "Mozambique Metical", 'code' => "MZN"]);
      DB::table('currencies')->insert(['entity' => "MYANMAR", 'currency' => "Kyat", 'code' => "MMK"]);
      DB::table('currencies')->insert(['entity' => "NAMIBIA", 'currency' => "Namibia Dollar", 'code' => "NAD"]);
      DB::table('currencies')->insert(['entity' => "NAMIBIA", 'currency' => "Rand", 'code' => "ZAR"]);
      DB::table('currencies')->insert(['entity' => "NAURU", 'currency' => "Australian Dollar", 'code' => "AUD"]);
      DB::table('currencies')->insert(['entity' => "NEPAL", 'currency' => "Nepalese Rupee", 'code' => "NPR"]);
      DB::table('currencies')->insert(['entity' => "NETHERLANDS (THE)", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "NEW CALEDONIA", 'currency' => "CFP Franc", 'code' => "XPF"]);
      DB::table('currencies')->insert(['entity' => "NEW ZEALAND", 'currency' => "New Zealand Dollar", 'code' => "NZD"]);
      DB::table('currencies')->insert(['entity' => "NICARAGUA", 'currency' => "Cordoba Oro", 'code' => "NIO"]);
      DB::table('currencies')->insert(['entity' => "NIGER (THE)", 'currency' => "CFA Franc BCEAO", 'code' => "XOF"]);
      DB::table('currencies')->insert(['entity' => "NIGERIA", 'currency' => "Naira", 'code' => "NGN"]);
      DB::table('currencies')->insert(['entity' => "NIUE", 'currency' => "New Zealand Dollar", 'code' => "NZD"]);
      DB::table('currencies')->insert(['entity' => "NORFOLK ISLAND", 'currency' => "Australian Dollar", 'code' => "AUD"]);
      DB::table('currencies')->insert(['entity' => "NORTHERN MARIANA ISLANDS (THE)", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "NORWAY", 'currency' => "Norwegian Krone", 'code' => "NOK"]);
      DB::table('currencies')->insert(['entity' => "OMAN", 'currency' => "Rial Omani", 'code' => "OMR"]);
      DB::table('currencies')->insert(['entity' => "PAKISTAN", 'currency' => "Pakistan Rupee", 'code' => "PKR"]);
      DB::table('currencies')->insert(['entity' => "PALAU", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "PALESTINE, STATE OF", 'currency' => "No universal currenc", 'code' => "N/A"]);
      DB::table('currencies')->insert(['entity' => "PANAMA", 'currency' => "Balboa", 'code' => "PAB"]);
      DB::table('currencies')->insert(['entity' => "PANAMA", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "PAPUA NEW GUINEA", 'currency' => "Kina", 'code' => "PGK"]);
      DB::table('currencies')->insert(['entity' => "PARAGUAY", 'currency' => "Guarani", 'code' => "PYG"]);
      DB::table('currencies')->insert(['entity' => "PERU", 'currency' => "Sol", 'code' => "PEN"]);
      DB::table('currencies')->insert(['entity' => "PHILIPPINES (THE)", 'currency' => "Philippine Peso", 'code' => "PHP"]);
      DB::table('currencies')->insert(['entity' => "PITCAIRN", 'currency' => "New Zealand Dollar", 'code' => "NZD"]);
      DB::table('currencies')->insert(['entity' => "POLAND", 'currency' => "Zloty", 'code' => "PLN"]);
      DB::table('currencies')->insert(['entity' => "PORTUGAL", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "PUERTO RICO", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "QATAR", 'currency' => "Qatari Rial", 'code' => "QAR"]);
      DB::table('currencies')->insert(['entity' => "RÉUNION", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "ROMANIA", 'currency' => "Romanian Leu", 'code' => "RON"]);
      DB::table('currencies')->insert(['entity' => "RUSSIAN FEDERATION (THE)", 'currency' => "Russian Ruble", 'code' => "RUB"]);
      DB::table('currencies')->insert(['entity' => "RWANDA", 'currency' => "Rwanda Franc", 'code' => "RWF"]);
      DB::table('currencies')->insert(['entity' => "SAINT BARTHÉLEMY", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA", 'currency' => "Saint Helena Pound", 'code' => "SHP"]);
      DB::table('currencies')->insert(['entity' => "SAINT KITTS AND NEVIS", 'currency' => "East Caribbean Dollar", 'code' => "XCD"]);
      DB::table('currencies')->insert(['entity' => "SAINT LUCIA", 'currency' => "East Caribbean Dollar", 'code' => "XCD"]);
      DB::table('currencies')->insert(['entity' => "SAINT MARTIN (FRENCH PART)", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "SAINT PIERRE AND MIQUELON", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "SAINT VINCENT AND THE GRENADINES", 'currency' => "East Caribbean Dollar", 'code' => "XCD"]);
      DB::table('currencies')->insert(['entity' => "SAMOA", 'currency' => "Tala", 'code' => "WST"]);
      DB::table('currencies')->insert(['entity' => "SAN MARINO", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "SAO TOME AND PRINCIPE", 'currency' => "Dobra", 'code' => "STD"]);
      DB::table('currencies')->insert(['entity' => "SAUDI ARABIA", 'currency' => "Saudi Riyal", 'code' => "SAR"]);
      DB::table('currencies')->insert(['entity' => "SENEGAL", 'currency' => "CFA Franc BCEAO", 'code' => "XOF"]);
      DB::table('currencies')->insert(['entity' => "SERBIA", 'currency' => "Serbian Dinar", 'code' => "RSD"]);
      DB::table('currencies')->insert(['entity' => "SEYCHELLES", 'currency' => "Seychelles Rupee", 'code' => "SCR"]);
      DB::table('currencies')->insert(['entity' => "SIERRA LEONE", 'currency' => "Leone", 'code' => "SLL"]);
      DB::table('currencies')->insert(['entity' => "SINGAPORE", 'currency' => "Singapore Dollar", 'code' => "SGD"]);
      DB::table('currencies')->insert(['entity' => "SINT MAARTEN (DUTCH PART)", 'currency' => "Netherlands Antillean Guilder", 'code' => "ANG"]);
      DB::table('currencies')->insert(['entity' => "SISTEMA UNITARIO DE COMPENSACION REGIONAL DE PAGOS \"SUCRE\"", 'currency' => "Sucre", 'code' => "XSU"]);
      DB::table('currencies')->insert(['entity' => "SLOVAKIA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "SLOVENIA", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "SOLOMON ISLANDS", 'currency' => "Solomon Islands Dollar", 'code' => "SBD"]);
      DB::table('currencies')->insert(['entity' => "SOMALIA", 'currency' => "Somali Shilling", 'code' => "SOS"]);
      DB::table('currencies')->insert(['entity' => "SOUTH AFRICA", 'currency' => "Rand", 'code' => "ZAR"]);
      DB::table('currencies')->insert(['entity' => "SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS", 'currency' => "No universal currenc", 'code' => "N/A"]);
      DB::table('currencies')->insert(['entity' => "SOUTH SUDAN", 'currency' => "South Sudanese Pound", 'code' => "SSP"]);
      DB::table('currencies')->insert(['entity' => "SPAIN", 'currency' => "Euro", 'code' => "EUR"]);
      DB::table('currencies')->insert(['entity' => "SRI LANKA", 'currency' => "Sri Lanka Rupee", 'code' => "LKR"]);
      DB::table('currencies')->insert(['entity' => "SUDAN (THE)", 'currency' => "Sudanese Pound", 'code' => "SDG"]);
      DB::table('currencies')->insert(['entity' => "SURINAME", 'currency' => "Surinam Dollar", 'code' => "SRD"]);
      DB::table('currencies')->insert(['entity' => "SVALBARD AND JAN MAYEN", 'currency' => "Norwegian Krone", 'code' => "NOK"]);
      DB::table('currencies')->insert(['entity' => "SWAZILAND", 'currency' => "Lilangeni", 'code' => "SZL"]);
      DB::table('currencies')->insert(['entity' => "SWEDEN", 'currency' => "Swedish Krona", 'code' => "SEK"]);
      DB::table('currencies')->insert(['entity' => "SWITZERLAND", 'currency' => "Swiss Franc", 'code' => "CHF"]);
      DB::table('currencies')->insert(['entity' => "SWITZERLAND", 'currency' => "WIR Euro", 'code' => "CHE"]);
      DB::table('currencies')->insert(['entity' => "SWITZERLAND", 'currency' => "WIR Franc", 'code' => "CHW"]);
      DB::table('currencies')->insert(['entity' => "SYRIAN ARAB REPUBLIC", 'currency' => "Syrian Pound", 'code' => "SYP"]);
      DB::table('currencies')->insert(['entity' => "TAIWAN (PROVINCE OF CHINA)", 'currency' => "New Taiwan Dollar", 'code' => "TWD"]);
      DB::table('currencies')->insert(['entity' => "TAJIKISTAN", 'currency' => "Somoni", 'code' => "TJS"]);
      DB::table('currencies')->insert(['entity' => "TANZANIA, UNITED REPUBLIC OF", 'currency' => "Tanzanian Shilling", 'code' => "TZS"]);
      DB::table('currencies')->insert(['entity' => "THAILAND", 'currency' => "Baht", 'code' => "THB"]);
      DB::table('currencies')->insert(['entity' => "TIMOR-LESTE", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "TOGO", 'currency' => "CFA Franc BCEAO", 'code' => "XOF"]);
      DB::table('currencies')->insert(['entity' => "TOKELAU", 'currency' => "New Zealand Dollar", 'code' => "NZD"]);
      DB::table('currencies')->insert(['entity' => "TONGA", 'currency' => "Pa’anga", 'code' => "TOP"]);
      DB::table('currencies')->insert(['entity' => "TRINIDAD AND TOBAGO", 'currency' => "Trinidad and Tobago Dollar", 'code' => "TTD"]);
      DB::table('currencies')->insert(['entity' => "TUNISIA", 'currency' => "Tunisian Dinar", 'code' => "TND"]);
      DB::table('currencies')->insert(['entity' => "TURKEY", 'currency' => "Turkish Lira", 'code' => "TRY"]);
      DB::table('currencies')->insert(['entity' => "TURKMENISTAN", 'currency' => "Turkmenistan New Manat", 'code' => "TMT"]);
      DB::table('currencies')->insert(['entity' => "TURKS AND CAICOS ISLANDS (THE)", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "TUVALU", 'currency' => "Australian Dollar", 'code' => "AUD"]);
      DB::table('currencies')->insert(['entity' => "UGANDA", 'currency' => "Uganda Shilling", 'code' => "UGX"]);
      DB::table('currencies')->insert(['entity' => "UKRAINE", 'currency' => "Hryvnia", 'code' => "UAH"]);
      DB::table('currencies')->insert(['entity' => "UNITED ARAB EMIRATES (THE)", 'currency' => "UAE Dirham", 'code' => "AED"]);
      DB::table('currencies')->insert(['entity' => "UNITED KINGDOM OF GREAT BRITAIN AND NORTHERN IRELAND (THE)", 'currency' => "Pound Sterling", 'code' => "GBP"]);
      DB::table('currencies')->insert(['entity' => "UNITED STATES MINOR OUTLYING ISLANDS (THE)", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "UNITED STATES OF AMERICA (THE)", 'currency' => "US Dollar", 'code' => "USD", "status" => "ACT"]);
      DB::table('currencies')->insert(['entity' => "UNITED STATES OF AMERICA (THE)", 'currency' => "US Dollar (Next day)", 'code' => "USN"]);
      DB::table('currencies')->insert(['entity' => "URUGUAY", 'currency' => "Peso Uruguayo", 'code' => "UYU"]);
      DB::table('currencies')->insert(['entity' => "URUGUAY", 'currency' => "Uruguay Peso en Unidades Indexadas (URUIURUI)", 'code' => "UYI"]);
      DB::table('currencies')->insert(['entity' => "UZBEKISTAN", 'currency' => "Uzbekistan Sum", 'code' => "UZS"]);
      DB::table('currencies')->insert(['entity' => "VANUATU", 'currency' => "Vatu", 'code' => "VUV"]);
      DB::table('currencies')->insert(['entity' => "VENEZUELA (BOLIVARIAN REPUBLIC OF)", 'currency' => "Bolívar", 'code' => "VEF", "status" => "ACT"]);
      DB::table('currencies')->insert(['entity' => "VIET NAM", 'currency' => "Dong", 'code' => "VND"]);
      DB::table('currencies')->insert(['entity' => "VIRGIN ISLANDS (BRITISH)", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "VIRGIN ISLANDS (U.S.)", 'currency' => "US Dollar", 'code' => "USD"]);
      DB::table('currencies')->insert(['entity' => "WALLIS AND FUTUNA", 'currency' => "CFP Franc", 'code' => "XPF"]);
      DB::table('currencies')->insert(['entity' => "WESTERN SAHARA", 'currency' => "Moroccan Dirham", 'code' => "MAD"]);
      DB::table('currencies')->insert(['entity' => "YEMEN", 'currency' => "Yemeni Rial", 'code' => "YER"]);
      DB::table('currencies')->insert(['entity' => "ZAMBIA", 'currency' => "Zambian Kwacha", 'code' => "ZMW"]);
      DB::table('currencies')->insert(['entity' => "ZIMBABWE", 'currency' => "Zimbabwe Dollar", 'code' => "ZWL"]);

    }

}