<?php include_once "db.php"?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="medias.css">
    <script src="jquery-3.5.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f56d5f2e0f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="wrapper_head">
            <div id="header_top">
                <div class="left_part"> 
                    <div class="flag_icon">
                        <img src="images\flags_PNG14592.png" alt="USA flag" class="usa_flag">
                        <span>USA/EN</span>
                    </div>

                    <div class="ground_shipping">
                        <span>FREE GROUND SHIPPING. <a href="">SEE DETAILS.</a></span>
                    </div>
                </div>

                <div class="right_part">
                    <div class="addition">
                        <a href="">SITE MAP</a>
                        <i class="fas fa-map-marker-alt"></i>
                        <i class="far fa-heart"></i>
                        <a href="">SIGN IN</a>  
                    </div>
                </div>
            </div>

            <article id="wrapper_menu_container">
                <img src="images\128-1284497_logo-yeticoolers-white-yeti-logo-white-png-transparent.png" class="logo" alt="YETI logo">
                <ul class="list_container">
                    <div class="list_sub_wrapper" id="sub_list_header">
                        <li class="li_coolers"><a href="">COOLERS</a><span id="coolers"></span>
                            <ul class="sub_coolers" id="coolers_list">
                                <li class="li_heading"><a href="">HARD COOLERS</a>
                                    <ul>
                                        <?php
                                            while($row=$result->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row["Hard Coolers"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">SOFT COOLERS</a>
                                    <ul>
                                    <?php
                                        while($row2=$result2->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row2["Soft Coolers"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CUSTOM HARD COOLERS</a>
                                    <ul>
                                    <?php
                                        while($row3=$result3->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row3["Custom Hard Coolers"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CORPORATE COOLER LOGO PROGRAM</a>
                                    <ul>
                                    <?php
                                        while($row4=$result4->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row4["Custom Hard Coolers"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw53d6c59f/images/campaigns-2020/roadie-24-launch/200259-Roadie24Launch-Website-HmPg-NavSpotlight.jpg" alt="Select to shop the Roadie 24 Hard Cooler" class="menu_img">
                                        <h3>SHOP THE NEW ROADIE 24 HARD COOLER</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_drinkware"><a href="">DRINKWARE</a><span id="drinkware"></span>
                            <ul class="sub_drinkware" id="drinkware_list">
                                <li class="li_heading"><a href="">RAMBLERS</a>
                                    <ul>
                                        <?php
                                            while($row5=$result5->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row5["Ramblers"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">ACCESSORIES</a>
                                    <ul>
                                    <?php
                                        while($row6=$result6->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row6["Access"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CUSTOM DRINKWARE</a>
                                    <ul>
                                    <?php
                                        while($row7=$result7->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row7["Custom Drink"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CORPORATE DRINKWARE SALES</a>
                                    <ul>
                                    <?php
                                        while($row8=$result8->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row8["Corporate Drinkware Sales"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dwe9170b33/images/campaigns-2020/rambler-26oz-cup/191419-Rambler-26-oz-Cup-Launch-1H-2020-Endemic-White-26ozCup-03-Nav-230x140.jpg" alt="Select to shop the Rambler 26 oz Stackable Cup" class="menu_img">
                                        <h3>ONE UP YOUR CUP:<br> INTRODUCING THE RAMBLER 26 OZ. STACKABLE CUP</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_bags"><a href="">BAGS</a><span id="bags"></span>
                            <ul class="sub_bags" id="bags_list">
                                <li class="li_heading"><a href="">WATERPROOF BAGS</a>
                                    <ul>
                                        <?php
                                            while($row9=$result9->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row9["Waterproof Bags"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">EVERYDAY BAGS</a>
                                    <ul>
                                    <?php
                                        while($row10=$result10->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row10["Everyday Bags"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw1b74cd51/images/campaigns-2020/daytrip-lunch-box/191449-Daytrip-LunchBox-Nav-Spotlight-230x140.jpg" alt="Select to shop the new Daytrip Lunch Box" class="menu_img">
                                        <h3>SHOP THE NEW DAYTRIP LUNCH BOX</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_gear"><a href="">GEAR</a><span id="gear"></span>
                            <ul class="sub_gear" id="gear_list">
                                <li class="li_heading"><a href="">CARGO</a>
                                    <ul>
                                        <?php
                                            while($row11=$result11->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row11["Cargo"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">OUTDOOR LIVING</a>
                                    <ul>
                                    <?php
                                        while($row12=$result12->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row12["Outdoor Living"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">PETS</a>
                                    <ul> 
                                        <?php 
                                            while($row13=$result13->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row13["Pets"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">APPAREL</a>
                                    <ul>
                                    <?php
                                        while($row14=$result14->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row14["Apparel"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">ACCESSORIES</a>
                                    <ul>
                                    <?php
                                        while($row15=$result15->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row15["Accessories"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw64b0dfd9/images/campaigns-2020/panga-spotlight/200437-Panga-Dry-Bags-Nav-Spotlight.jpg" alt="Select to shop waterproof dry bags" class="menu_img">
                                        <h3>SELECT TO SHOP WATERPROOF DRY BAGS</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_custom"><a href="">CUSTOM</a><span id="custom"></span>
                            <ul class="sub_custom" id="custom_list">
                                <li class="li_heading"><a href="">CUSTOM DRINKWARE</a>
                                    <ul>
                                        <?php
                                            while($row16=$result16->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row16["Custom Drinkware"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li> 
                                <li class="li_heading"><a href="">CUSTOM HARD COOLERS</a>
                                    <ul>
                                    <?php
                                        while($row17=$result17->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row17["Custom H Collers"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">DOG BOWLS</a>  
                                    <ul>
                                    <?php
                                        while($row18=$result18->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row18["Dog Bowls"]."</li></a>";
                                        }
                                        ?> 
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CORPORATE SALES</a>   
                                    <ul>
                                    <?php
                                        while($row19=$result19->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row19["Corporate Sales"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://cdn.dynamicyield.com/api/8768341/images/37983adae3426__nav-test-custom.jpg" alt="dyNav|tundra|collegiate" class="menu_img">
                                        <h3>SHOP COLLEGIATE COOLERS</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_yeti"><a href="">THIS IS YETI</a><span id="yeti"></span>
                            <ul class="sub_yeti" id="yeti_list">
                                <li class="li_heading"><a href="">OUR STORY</a>
                                    <ul>
                                        <?php
                                            while($row20=$result20->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row20["Our Story"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li> 
                                <li class="li_heading"><a href="">STORIES</a>
                                    <ul>
                                    <?php
                                        while($row21=$result21->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row21["Stories"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">STORES</a>  
                                    <ul>
                                    <?php
                                        while($row22=$result22->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row22["Stores"]."</li></a>";
                                        }
                                        ?> 
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw6d008cd6/images/campaigns-2020/yeti-plus/200022_YETI+_NavSpotlight_230x140.jpg" alt="Select to stream YETI+ videos of streams" class="menu_img">
                                        <h3>STREAM THE STREAMS NOW</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_sales">CORPORATE SALES</li>
                        <li class="li_arrivals">NEW ARRIVALS</li>
                    </div>

                    <section class="search_cart">
                        <span class="search_span">SEARCH <i class="fas fa-search"></i></span>
                        <div>CART <span class="cart_square">0</span></div>
                    </section> 

                    <section id="menu_bars" onclick="showMenu()">
                        <span><i class="fas fa-bars"></i></span>
                    </section>
                </ul>
            </article>

            <article id="wrapper_menu_container_hidden">
                <img src="images\128-1284497_logo-yeticoolers-white-yeti-logo-white-png-transparent.png" class="logo" alt="YETI logo">
                <ul class="list_container">
                    <div class="list_sub_wrapper">
                        <li class="li_coolers"><a href="">COOLERS</a>
                            <ul class="sub_coolers">
                                <li class="li_heading"><a href="">HARD COOLERS</a>
                                    <ul>
                                        <?php
                                            while($row=$result->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row["Hard Coolers"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">SOFT COOLERS</a>
                                    <ul>
                                    <?php
                                        while($row2=$result2->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row2["Soft Coolers"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CUSTOM HARD COOLERS</a>
                                    <ul>
                                    <?php
                                        while($row3=$result3->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row3["Custom Hard Coolers"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CORPORATE COOLER LOGO PROGRAM</a>
                                    <ul>
                                    <?php
                                        while($row4=$result4->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row4["Custom Hard Coolers"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw53d6c59f/images/campaigns-2020/roadie-24-launch/200259-Roadie24Launch-Website-HmPg-NavSpotlight.jpg" alt="Select to shop the Roadie 24 Hard Cooler" class="menu_img">
                                        <h3>SHOP THE NEW ROADIE 24 HARD COOLER</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_drinkware"><a href="">DRINKWARE</a>
                            <ul class="sub_drinkware">
                                <li class="li_heading"><a href="">RAMBLERS</a>
                                    <ul>
                                        <?php
                                            while($row5=$result5->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row5["Ramblers"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">ACCESSORIES</a>
                                    <ul>
                                    <?php
                                        while($row6=$result6->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row6["Access"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CUSTOM DRINKWARE</a>
                                    <ul>
                                    <?php
                                        while($row7=$result7->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row7["Custom Drink"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CORPORATE DRINKWARE SALES</a>
                                    <ul>
                                    <?php
                                        while($row8=$result8->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row8["Corporate Drinkware Sales"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dwe9170b33/images/campaigns-2020/rambler-26oz-cup/191419-Rambler-26-oz-Cup-Launch-1H-2020-Endemic-White-26ozCup-03-Nav-230x140.jpg" alt="Select to shop the Rambler 26 oz Stackable Cup" class="menu_img">
                                        <h3>ONE UP YOUR CUP:<br> INTRODUCING THE RAMBLER 26 OZ. STACKABLE CUP</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_bags"><a href="">BAGS</a>
                            <ul class="sub_bags">
                                <li class="li_heading"><a href="">WATERPROOF BAGS</a>
                                    <ul>
                                        <?php
                                            while($row9=$result9->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row9["Waterproof Bags"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">EVERYDAY BAGS</a>
                                    <ul>
                                    <?php
                                        while($row10=$result10->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row10["Everyday Bags"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw1b74cd51/images/campaigns-2020/daytrip-lunch-box/191449-Daytrip-LunchBox-Nav-Spotlight-230x140.jpg" alt="Select to shop the new Daytrip Lunch Box" class="menu_img">
                                        <h3>SHOP THE NEW DAYTRIP LUNCH BOX</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_gear"><a href="">GEAR</a>
                            <ul class="sub_gear">
                                <li class="li_heading"><a href="">CARGO</a>
                                    <ul>
                                        <?php
                                            while($row11=$result11->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row11["Cargo"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">OUTDOOR LIVING</a>
                                    <ul>
                                    <?php
                                        while($row12=$result12->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row12["Outdoor Living"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">PETS</a>
                                    <ul> 
                                        <?php 
                                            while($row13=$result13->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row13["Pets"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">APPAREL</a>
                                    <ul>
                                    <?php
                                        while($row14=$result14->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row14["Apparel"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">ACCESSORIES</a>
                                    <ul>
                                    <?php
                                        while($row15=$result15->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row15["Accessories"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw64b0dfd9/images/campaigns-2020/panga-spotlight/200437-Panga-Dry-Bags-Nav-Spotlight.jpg" alt="Select to shop waterproof dry bags" class="menu_img">
                                        <h3>SELECT TO SHOP WATERPROOF DRY BAGS</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_custom"><a href="">CUSTOM</a>
                            <ul class="sub_custom">
                                <li class="li_heading"><a href="">CUSTOM DRINKWARE</a>
                                    <ul>
                                        <?php
                                            while($row16=$result16->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row16["Custom Drinkware"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li> 
                                <li class="li_heading"><a href="">CUSTOM HARD COOLERS</a>
                                    <ul>
                                    <?php
                                        while($row17=$result17->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row17["Custom H Collers"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">DOG BOWLS</a>  
                                    <ul>
                                    <?php
                                        while($row18=$result18->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row18["Dog Bowls"]."</li></a>";
                                        }
                                        ?> 
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">CORPORATE SALES</a>   
                                    <ul>
                                    <?php
                                        while($row19=$result19->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row19["Corporate Sales"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://cdn.dynamicyield.com/api/8768341/images/37983adae3426__nav-test-custom.jpg" alt="dyNav|tundra|collegiate" class="menu_img">
                                        <h3>SHOP COLLEGIATE COOLERS</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_yeti"><a href="">THIS IS YETI</a>
                            <ul class="sub_yeti">
                                <li class="li_heading"><a href="">OUR STORY</a>
                                    <ul>
                                        <?php
                                            while($row20=$result20->fetch_assoc()){
                                                echo '<a href=""><li class="li_elem">'.$row20["Our Story"]."</li></a>";
                                            }
                                        ?>
                                    </ul>
                                </li> 
                                <li class="li_heading"><a href="">STORIES</a>
                                    <ul>
                                    <?php
                                        while($row21=$result21->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row21["Stories"]."</li></a>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="li_heading"><a href="">STORES</a>  
                                    <ul>
                                    <?php
                                        while($row22=$result22->fetch_assoc()){
                                            echo '<a href=""><li class="li_elem">'.$row22["Stores"]."</li></a>";
                                        }
                                        ?> 
                                    </ul>
                                </li>

                                <section class="menu_img_section">
                                    <a href="">
                                        <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw6d008cd6/images/campaigns-2020/yeti-plus/200022_YETI+_NavSpotlight_230x140.jpg" alt="Select to stream YETI+ videos of streams" class="menu_img">
                                        <h3>STREAM THE STREAMS NOW</h3>
                                    </a>
                                </section>
                            </ul>
                        </li>

                        <li class="li_sales">CORPORATE SALES</li>
                        <li class="li_arrivals">NEW ARRIVALS</li>
                    </div>

                    <section class="search_cart">
                        <span>SEARCH <i class="fas fa-search"></i></span>
                        <div>CART <span class="cart_square">0</span></div>
                    </section> 
                </ul>
            </article>

            <div class="wrapper_gif">
                <div class="gif_container">
                <img class="gif_main" alt="Select to shop the YETI Panga Dry Bags"  src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dwbb7dd872/images/homepage/2020/7-5-20-Panga-Bags-Spotlight/200437-Panga-Dry-Bags-HomepageHero-1600x550-GIF.gif">
                </div>
            </div>
        </div>
    </header>

    <main> 
        <div class="wrapper_main_slider">
            <section class="heading">PICK UP WHERE YOU LEFT OFF</section>  
            <article id="slider_main_products">
                <section id="firstPage">
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dwfe0f65a2/images/pdp-Tundra/Roadie-24/navy/200259-Roadie-24-Campaign-Website-Assets-Navy-Front-Handle-Down-1680x1204.jpg?sw=440" class="product_img" alt="Roadie 24 Hard Cooler">
                            <h2>ROADIE 24 HARD COOLER</h2>
                        </a>
                    </section>
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dwb86b11b2/images/pdp-Hopper/Hopper-Flip-12/Navy/191242-Website-Assets-Studio-Navy-Flip-12-F-wStrap-1680x1024.jpg?sw=440" class="product_img" alt="Hopper Flip 12 Soft Cooler">
                            <h2>HOPPER FLIP 12 SOFT COOLER</h2>
                        </a>
                    </section>
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dw8cebb769/images/pdp-Daytrip/lunch-box/navy/191449-Daytrip-Lunchbox-Navy-Front-1680x1024-2.jpg?sw=440" class="product_img" alt="Daytrip lunch box">
                            <h2>DAYTRIP LUNCH BOX</h2>
                        </a>
                    </section>
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dw9d2a6035/images/pdp-Rambler/Rambler-Tumbler-20oz/Graphite/191461-PVD-Campaign-Website-Assets-Studio-R20-Graphite-OH-1680x1024.jpg?sw=440" class="product_img" alt="Rambler 20 oz Tumbler with MagSlider Lid">
                            <h2>RAMBLER 20 OZ TUMBLER WITH MAG SLIDER LID</h2>
                        </a>
                    </section> 
                </section>

                <section id="secondPage">
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dw9d2a6035/images/pdp-Rambler/Rambler-Tumbler-20oz/Graphite/191461-PVD-Campaign-Website-Assets-Studio-R20-Graphite-OH-1680x1024.jpg?sw=440" class="product_img" alt="Rambler 20 oz Tumbler with MagSlider Lid">
                            <h2>RAMBLER 20 OZ TUMBLER WITH MAG SLIDER LID</h2>
                        </a>
                    </section> 
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dw9b372eb1/images/pdp-Rambler/Rambler-Tumbler-30oz/Copper/191461-PVD-Campaign-Website-Assets-Studio-30oz-Tumbler-OH-Copper-1680x1024.jpg?sw=440" class="product_img" alt="Rambler 30 oz Tumbler with MagSlider Lid">
                            <h2>RAMBLER 30 OZ TUMBLER WITH MAG SLIDER LID</h2>
                        </a>
                    </section>
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dw0e8930bf/images/Accessories/For%20Hard%20Cooler/roadie-24/200259-Roadie-24-Launch-Campaign-Studio-Houdini-Accessory-Hat-Trick-Solo-Front-Tilt-1680x1024.jpg?sw=440" class="product_img" alt="Roadie 24 basket">
                            <h2>ROADIE 24 BASKET</h2>
                        </a>
                    </section>
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dwa4c72352/images/pdp-Rambler/Rambler-Mug-24-oz/Graphite/191461-PVD-Campaign-Website-Assets-Studio-24oz-Graphite-F-1680x1024.jpg?sw=440" class="product_img" alt="Rumbler 24 oz mug with standard lid">
                            <h2>RUMBLER 24 OZ MUG WITH STANDARD LID</h2>
                        </a>
                    </section>
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dwab12b618/images/pdp-Rambler/Rambler-Colster-2.0/Graphite/191461-PVD-Campaign-Website-Assets-Studio-Colster-Front-Graphite-1680x1024.jpg?sw=440" class="product_img" alt="Rumbler 12 oz colster can insulator">
                            <h2>RUMBLER 12 OZ COLSTER CAN INSULATOR</h2>
                        </a>
                    </section>
                </section>

                <section id="thirdPage">
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dwa4c72352/images/pdp-Rambler/Rambler-Mug-24-oz/Graphite/191461-PVD-Campaign-Website-Assets-Studio-24oz-Graphite-F-1680x1024.jpg?sw=440" class="product_img" alt="Rumbler 24 oz mug with standard lid">
                            <h2>RUMBLER 24 OZ MUG WITH STANDARD LID</h2>
                        </a>
                    </section>
                    <section class="main_products">
                        <a href="">
                            <img src="https://www.yeti.com/dw/image/v2/BBRN_PRD/on/demandware.static/-/Sites-masterCatalog_Yeti/default/dwab12b618/images/pdp-Rambler/Rambler-Colster-2.0/Graphite/191461-PVD-Campaign-Website-Assets-Studio-Colster-Front-Graphite-1680x1024.jpg?sw=440" class="product_img" alt="Rumbler 12 oz colster can insulator">
                            <h2>RUMBLER 12 OZ COLSTER CAN INSULATOR</h2>
                        </a>
                    </section>
                </section>
            </article>

            <div class="dots">  
                <button id="btn1"></button>   
                <button id="btn2"></button>
                <button id="btn3"></button>
            </div>
        </div>

        <div class="order_landing_sections">
            <div class="wrapper_orders">
                <div class="parent_f">
                    <section class="first_section">
                        <h1>ANYTHING AND EVERYTHING</h1>     
                        <h4>THIS CARRYALL ALL IS ANYTHING YOU NEED IT TO BE. GEAR BAG? GREAT. GROCERY HOLDER? COOL. WETSUIT CARRIER? WHY THE HELL NOT.</h3>
                    </section>
                </div>
 
                <div class="parent_s">
                    <section class="second_section"> 
                        <h1>HIGHT QUALITY. LOW MAINTENANCE.</h1>  
                        <h4>UPGRADE YOUR EVERYDAY, LEAKY WATER BOTTLE TO SOMETHING THAT WILL ACTUALLY LAST. SHOP BOTTLES.</h4>
                    </section>  
                </div>

                <div class="parent_t">
                    <section class="third_section">
                        <h1>HEAVY-DUTY SOFT COOLERS.</h1>
                        <h4>EXTREME INSULATION IS THE BARE MINIMUM REQUIREMENT FOR EVERY COOLER WE MAKE - AND WE NEVER STOP THERE.</h4>
                    </section>
                </div>
                
                <div class="parent_fo">
                    <section class="fourth_section">
                        <h1>LOOK, NO HANDS</h1>
                        <h4>FREE UP YOUR HANDS WITH THE RAMBLER BOTTLE SLING. AWAILABLE IN TWO SIZES.</h4>
                    </section>
                </div>

                <div class="parent_fif">
                    <section class="fifth_section">
                        <h1>LAY LOW IN EPIC PLACES</h1>
                        <h4>WHO KNEW ROCKY RIVERBANKS COULD FEEL SO COMFY. SHOP THE LOWLANDS BLANKETS.</h4>
                    </section>
                </div>

                <section class="sixth_section">
                    <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dwc890b943/images/bftw-200x142.png" alt="Built for the wild" class="slogan">
                </section>
            </div>
        </div>

        <div class="history_container">
            <article class="wrapper_bottom">
                <section class="history">
                    <p>
                        In 2006, we founded YETI Coolers with a simple mission: build the hard cooler we’d use every day. We've since expanded into other outdoor product categories, 
                        yet never given up on our mission to build products to improve your time in the wild.
                    </p>

                    <p>
                        Product innovation and firsthand experience in the field continue to be our basis of expansion into designing ultra-durable and portable soft coolers, 
                        insulated drinkware, waterproof and everyday bags and backpacks, dog bowls and beds, and other outdoor gear, each with its own line of accessories. Every 
                        YETI product performs when it matters most—whether that be a trip into the remote Alaskan wilderness, chasing tarpon on the Florida coast, even just in the backyard with friends.
                    </p>
                </section>
            </article>
        </div>
    </main>

    <footer>
        <div class="wrapper_footer">
            <div class="footer_container">
                <div class="sign_up">
                    <section>
                        <h2>SIGN ME UP</h2>
                        <p>BE THE FIRST TO KNOW ABOUT NEW PRODUCTS, FILMS, AND EVENTS.</p>
                    </section>

                    <form id="sign_up_form">
                        <div class="form_wrapper">
                            <input id="email" type="email" placeholder="YOUR EMAIL">
                            <div class="submit">
                                <button id="submit_btn"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <nav class="footer_menu">
                    <ul class="footer_list">
                        <li class="footer_main_li"  onclick="supportShow()">SUPPORT <i class="fas fa-chevron-up" id="supportI"></i>
                            <?php 
                                echo '<ul class="footer_sub_ul" id="supportUl">';
                                    while($cust = $custSupp->fetch_assoc())
                                    {
                                    echo '<li class="footer_li_elem"><a href="">'.$cust["Customer Support"].'</a></li>';
                                    }
                                echo '</ul>';
                            ?>
                        </li>

                        <li class="footer_main_li"  onclick="companyShow()">COMPANY<i class="fas fa-chevron-up" id="companyI"></i>
                            <?php 
                                echo '<ul class="footer_sub_ul" id="companyUl">';
                                    while($company = $com->fetch_assoc())
                                    {
                                    echo '<li class="footer_li_elem"><a href="">'.$company["Company"].'</a></li>';
                                    }
                                echo '</ul>';
                            ?>
                        </li>

                        <li class="footer_main_li"  onclick="storesShow()">STORES<i class="fas fa-chevron-up" id="storesI"></i> 
                            <?php  
                                echo '<ul class="footer_sub_ul" id="storesUl">';
                                    while($stores = $str->fetch_assoc())
                                    {
                                    echo '<li class="footer_li_elem"><a href="">'.$stores["Stores"].'</a></li>';
                                    }
                                echo '</ul>';
                            ?>
                        </li>

                        <li class="footer_main_li" onclick="privacyShow()">PRIVACY & COMPLIANCE<i class="fas fa-chevron-up" id="privacyI"></i>
                            <?php 
                                echo '<ul class="footer_sub_ul" id="privacyUl">';
                                    while($privacy = $pc->fetch_assoc())
                                    {
                                    echo '<li class="footer_li_elem"><a href="">'.$privacy["Privacy & Compliance"].'</a></li>';
                                    }
                                echo '</ul>';
                            ?>
                        </li>    
                    </ul>
                </nav>

                <div class="copyright">
                    <p>&copy; <?php echo date("Y") ?> YETI COOLERS, LLC. ALL RIGHTS RESERVED</p>

                    <div class="social_net_icons">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-spotify"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>