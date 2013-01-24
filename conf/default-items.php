<?php
$ws_array = array();
$ws_array["lang_version"]=array("cht"=>$TPLMSG["LANG_CHT"],"chs"=>$TPLMSG['LANG_CHS'],"eng"=>$TPLMSG["LANG_ENG"],"jap"=>$TPLMSG["LANG_JAP"],"spa"=>$TPLMSG['LANG_SPA']);
$ws_array["order_status"]=array(0=>$TPLMSG["ORDER_NEW"],1=>$TPLMSG["ORDER_DEALING"],2=>$TPLMSG["ORDER_PRODUCTS_SEND"],3=>$TPLMSG["ORDER_COMPLETED"],9=>$TPLMSG["ORDER_CANCEL"],10=>$TPLMSG["ORDER_REJECT"]);
$ws_array["inquiry_status"]=array(0=>$TPLMSG["REPLY_NO"],1=>$TPLMSG["REPLY_YES"]);
$ws_array["contactus_status"]=array(0=>$TPLMSG["REPLY_NO"],1=>$TPLMSG["REPLY_YES"]);
$ws_array["images_type"]=array(".jpg",".gif",".png",".bmp");
$ws_array["service_term"]=array("st_contactus_term"=>$TPLMSG["CONTACTUS_TERM"],
                                "st_join_member_mail"=>$TPLMSG["JOIN_MEMBER_MAIL"],
                                "st_payment_term" => $TPLMSG["PAYMENT_TERM"],
                                "st_privacy_policy" => $TPLMSG["PRIVACY_POLICY"],
                                "st_service_term" => $TPLMSG["SERVICE_TERM"],
                                "st_shipping_term" => $TPLMSG["SHIPPING_TERM"],
                                "st_shopping_term" => $TPLMSG["SHOPPING_TERM"],
                                "st_inquiry_mail" => $TPLMSG["INQUIRY_MAIL"],
                                "st_order_mail" => $TPLMSG["ORDER_MAIL"]
                                );
$ws_array["service_term_left_cate"]=array("st_payment_term" => $TPLMSG["PAYMENT_TERM"],
                                          "st_privacy_policy" => $TPLMSG["PRIVACY_POLICY"],
                                          "st_service_term" => $TPLMSG["SERVICE_TERM"],
                                          "st_shipping_term" => $TPLMSG["SHIPPING_TERM"],
                                          "st_shopping_term" => $TPLMSG["SHOPPING_TERM"],
                                         );
$ws_array["front_page"]=array("index.html" => $TPLMSG["CUSTOM_INDEX_PAGE"],
                              "main.php" => $TPLMSG["SYSTEM_INDEX_PAGE"],
                              "aboutus.php"=>$TPLMSG["ABOUT_US"],
                              "news.php"=>$TPLMSG["NEWS"],
                              "products.php" =>$TPLMSG["PRODUCT_LIST"],
                              "faq.php" => $TPLMSG["FAQ"]
                             );

$ws_array["contactus_cate"]=array( 1 =>$TPLMSG['CONTACT_US_PRODUCTS'],2 =>$TPLMSG['CONTACT_ERROR_REPORTING'],3 =>$TPLMSG['CONTACT_SUGGESTION'],10=>$TPLMSG['CONTACT_US_OTHERS']);

$ws_array["epaper_order_cate"]=array( 1 =>$TPLMSG['EPAPER_ORDER_NORMAL'],2 =>$TPLMSG['EPAPER_ORDER_MEMBER'],3 =>$TPLMSG['EPAPER_ORDER_FIRST']);
$ws_array["ad_cate"]=array( 1 =>$TPLMSG['AD_UP_BANNER_580_120'],2 =>$TPLMSG['AD_SIDE_BUTTON_150_150'],3 =>$TPLMSG['AD_SIDE_BUTTON_150_50'],4 =>"首頁跑馬燈",5 =>"內頁跑馬燈");
$ws_array["payment_type"]=array( 0 =>$TPLMSG["PAYMENT_ATM"],1 =>$TPLMSG["PAYMENT_CASH_ON_DELIVERY"]);
$ws_array["main"]=array("aboutus" => $TPLMSG["ABOUT_US"],
                        "products" => $TPLMSG["PRODUCTS"],
                        "application" => $TPLMSG["APPLICATION"],
                        "stores" => $TPLMSG["STORES"],
                        "download" => $TPLMSG["DOWNLOAD"],
                        "news" => $TPLMSG["NEWS"],
                        "video" => $TPLMSG["VIDEO"],
                        "faq" => $TPLMSG["FAQ"],
                        "service" => $TPLMSG["SERVICE"],
                        "contactus" => $TPLMSG["CONTACT_US"],
                        "sitemap" => $TPLMSG["SITEMAP"]
                    );
$ws_array["left"]=array("aboutus" => $TPLMSG["ABOUT_US"],
                        "products" => $TPLMSG["PRODUCTS"],
                        "application" => $TPLMSG["APPLICATION"],
                        "stores" => $TPLMSG["STORES"],
                        "download" => $TPLMSG["DOWNLOAD"],
                        "news" => $TPLMSG["NEWS"],
                        "video" => $TPLMSG["VIDEO"],
                        "faq" => $TPLMSG["FAQ"],
                        "service" => $TPLMSG["SERVICE"],
                        "contactus" => $TPLMSG["CONTACT_US"],
                        "sitemap" => $TPLMSG["SITEMAP"]
                    );
$ws_array["left_desc"]=array("aboutus" => $TPLMSG["ABOUT_US_CATE_DESC"],
                        "products" => $TPLMSG["PRODUCTS_CATE_DESC"],
                        "application" => $TPLMSG["APPLICATION_CATE_DESC"],
                        "stores" => $TPLMSG["STORES_CATE_DESC"],
                        "download" => $TPLMSG["DOWNLOAD_CATE_DESC"],
                        "news" => $TPLMSG["NEWS_CATE_DESC"],
                        "video" => $TPLMSG["VIDEO_CATE_DESC"],
                        "faq" => $TPLMSG["FAQ_CATE_DESC"],
                        "service" => $TPLMSG["SERVICE_CATE_DESC"],
                        "contactus" => $TPLMSG["CONTACT_US_CATE_DESC"],
                        "sitemap" => $TPLMSG["SITEMAP_CATE_DESC"]
                    );

$ws_array["country_array"]=array(
"Afghanistan",
"Albania", 
"Algeria", 
"American Samoa", 
"Andorra", 
"Angola", 
"Anguilla", 
"Antarctica", 
"Antigua And Barbuda",
"Argentina", 
"Armenia", 
"Aruba", 
"Australia", 
"Austria", 
"Azerbaijan",
"Bahamas",
"Bahrain", 
"Bangladesh", 
"Barbados", 
"Belarus", 
"Belgium",
"Belize",
"Benin", 
"Bermuda", 
"Bhutan", 
"Bolivia", 
"Bosnia Hercegovina",
"Botswana", 
"Bouvet Island", 
"Brazil", 
"British Indian Ocean Territory", 
"Brunei Darussalam",
"Bulgaria", 
"Burkina Faso",
"Burundi", 
"Byelorussian SSR",
"Cambodia", 
"Cameroon", 
"Canada", 
"Cape Verde",
"Cayman Islands",
"Central African Republic",
"Chad", 
"Chile", 
"China", 
"Christmas Island",
"Cocos Islands",
"Colombia", 
"Comoros", 
"Congo", 
"Congo, The Democratic Republic Of",
"Cook Islands",
"Costa Rica",
"Cote D'Ivoire",
"Croatia", 
"Cuba", 
"Cyprus", 
"Czech Republic",
"Czechoslovakia",
"Denmark", 
"Djibouti", 
"Dominica", 
"Dominican Republic",
"East Timor",
"Ecuador", 
"Egypt", 
"El Salvador",
"England", 
"Equatorial Guinea",
"Eritrea", 
"Estonia", 
"Ethiopia", 
"Falkland Islands",
"Faroe Islands",
"Fiji", 
"Finland", 
"France", 
"French Guiana",
"French Polynesia",
"French Southern Territories",
"Gabon", 
"Gambia", 
"Georgia", 
"Germany", 
"Ghana", 
"Gibraltar", 
"Great Britain",
"Greece", 
"Greenland", 
"Grenada", 
"Guadeloupe", 
"Guam", 
"Guatemela", 
"Guernsey", 
"Guinea", 
"Guinea-Bissau",
"Guyana", 
"Haiti", 
"Heard and McDonald Islands",
"Honduras", 
"Hong Kong",
"Hungary", 
"Iceland", 
"India", 
"Indonesia", 
"Iran",
"Iraq", 
"Ireland", 
"Isle Of Man",
"Israel", 
"Italy", 
"Jamaica", 
"Japan", 
"Jersey", 
"Jordan", 
"Kazakhstan", 
"Kenya", 
"Kiribati", 
"Korea, Democratic People's Republic Of",
"Korea, Republic Of",
"Kuwait", 
"Kyrgyzstan", 
"Lao People's Democratic Republic",
"Latvia", 
"Lebanon", 
"Lesotho", 
"Liberia", 
"Libyan Arab Jamahiriya",
"Liechtenstein", 
"Lithuania", 
"Luxembourg", 
"Macau", 
"Macedonia", 
"Madagascar", 
"Malawi", 
"Malaysia", 
"Maldives", 
"Mali", 
"Malta", 
"Marshall Islands",
"Martinique", 
"Mauritania", 
"Mauritius", 
"Mayotte", 
"Mexico", 
"Micronesia, Federated States Of",
"Moldova, Republic Of",
"Monaco", 
"Mongolia", 
"Montserrat", 
"Morocco", 
"Mozambique", 
"Myanmar", 
"Namibia", 
"Nauru", 
"Nepal", 
"Netherlands", 
"Netherlands Antilles",
"Neutral Zone",
"New Caledonia",
"New Zealand",
"Nicaragua", 
"Niger", 
"Nigeria", 
"Niue", 
"Norfolk Island",
"Northern Mariana Islands",
"Norway", 
"Oman", 
"Pakistan", 
"Palau", 
"Panama", 
"Papua New Guinea",
"Paraguay", 
"Peru", 
"Philippines", 
"Pitcairn", 
"Poland", 
"Portugal", 
"Puerto Rico",
"Qatar", 
"Reunion", 
"Romania", 
"Russian Federation",
"Rwanda", 
"Saint Helena",
"Saint Kitts And Nevis",
"Saint Lucia",
"Saint Pierre and Miquelon",
"Saint Vincent and The Grenadines",
"Samoa", 
"San Marino",
"Sao Tome and Principe",
"Saudi Arabia",
"Senegal", 
"Seychelles", 
"Sierra Leone",
"Singapore", 
"Slovakia", 
"Slovenia", 
"Solomon Islands",
"Somalia", 
"South Africa",
"South Georgia and The Sandwich Islands",
"Spain", 
"Sri Lanka",
"Sudan", 
"Suriname", 
"Svalbard and JanMayen Islands",
"Swaziland", 
"Sweden", 
"Switzerland", 
"Syrian Arab Republic",
"Taiwan", 
"Tajikista", 
"Tanzania, United Republic Of",
"Thailand", 
"Togo", 
"Tokelau", 
"Tonga", 
"Trinidad and Tobago",
"Tunisia", 
"Turkey", 
"Turkmenistan", 
"Turks and Caicos Islands",
"Tuvalu", 
"Uganda", 
"Ukraine", 
"United Arab Emirates",
"United Kingdom",
"United States",
"United States Minor Outlying Islands",
"Uruguay", 
"USSR", 
"Uzbekistan", 
"Vanuatu", 
"Vatican City State",
"Venezuela", 
"Vietnam", 
"Virgin Islands (British)",
"Virgin Islands (U.S.)",
"Wallis and Futuna Islands",
"Western Sahara",
"Yemen, Republic of",
"Yugoslavia", 
"Zaire", 
"Zambia", 
"Zimbabwe");
?>