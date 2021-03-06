<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./reset.css" rel="stylesheet">
    <!-- <link href="./normalize.css" rel="stylesheet"> -->
    <link href="./style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Enriqueta:400,700" rel="stylesheet">
    <link rel="stylesheet" href="//player.ooyala.com/static/v4/stable/4.24.9/skin-plugin/html5-skin.min.css" />
    <script src="//player.ooyala.com/static/v4/stable/4.24.9/core.min.js"></script>
    <script src="//player.ooyala.com/static/v4/stable/4.24.9/video-plugin/main_html5.min.js"></script>
    <script src="//player.ooyala.com/static/v4/stable/4.24.9/skin-plugin/html5-skin.min.js"></script>
    <title>Document</title>
    <style type="text/css">
        .oo-state-screen-poster { background: url('./images/Group 2@3x.jpg') no-repeat center !important; background-size: cover !important; }
    </style>
</head>
<body>
    <div class="page">
        <header class="header">
            <div class="container">
                <p class="header_phone">(000) 000-0000</p>
                <img class="header_logo" src="./images/logo@3x.png">

            </div>

        </header>
        <div class="container">
            <div class="sound_header header_heading">
                <img class="sound_icon" src="./images/sound icon@3x.png">
                <span class="sound_text">MAKE SURE YOUR SOUND IS ON</span>
                <img class="sound_icon" src="./images/sound icon@3x.png">
            </div>
            <div class="">
                <div class="ooyalaVideo video">
                    <div class="container">
                        <?php if($nw=='tba' || $nw=='ob'){ ?>
                            <p class="ooyalaVideo_title"><img src="images/speaker.png" alt="Orange speaker image" class="ooyalaVideo_speaker">MAKE SURE YOUR SPEAKERS ARE ON<img src="images/speaker.png" alt="Orange speaker image" class="ooyalaVideo_speaker ooyalaVideo_speaker-right"> | Use arrow keys to FF and RW</p>
                        <?php } ?>
                        <!-- HN_Morning_Renew_VSL_190214A -->
                        <div id="ooyalaplayer"></div>
                        <script>
                            var playerParam = {
                                <?php if($nw=="tba" || $nw=='ob'){ ?>
                                "autoplay": false,
                                <?php } else { ?>
                                "autoplay": false,
                                <?php } ?>
                                "pcode": "10dWoyOiRdfvU7_dtqC0xxCpUulF",
                                "playerBrandingId": "3eb33b74f97840679f6901d6bbf5abe0",
                                "skin": {
                                    "inline": {
                                        "startScreen": {
                                            "showDescription": false
                                        },
                                        "general": {
                                            "watermark": {
                                                "imageResource": {
                                                    "url": "https://player.ooyala.com/static/v4/stable/4.5.5/skin-plugin/assets/images/ooyala-watermark.png","androidResource" : "logo","iosResource" : "logo"
                                                }
                                            },
                                            "loadingImage": {
                                                "imageResource": {
                                                    "url": "https://player.ooyala.com/static/v4/stable/4.5.5/skin-plugin/assets/images/loader_svg.svg"
                                                }
                                            }
                                        }
                                    }
                                }
                            };

                        var mplayer, mesb, dur, title;
                        OO.ready(function() {
                            var lastTriggerPos;
                            var contentId = "prMmE5aDE6JhnSKTk1jHnDPo8-lSXbWq";
                            mplayer = OO.Player.create('ooyalaplayer', contentId, playerParam);
                            mplayer.mb.subscribe(OO.EVENTS.PLAYBACK_READY, contentId, function(eventName) {
                                title = mplayer.getCurrentItemTitle();
                                var vData = mplayer.getItem();
                                dur = parseInt(vData.time);
                            });
                            window.setInterval(function(){
                                mplayer.mb.subscribe(OO.EVENTS.PLAYHEAD_TIME_CHANGED, contentId, function(eventName) {
                                    phPos = parseInt(mplayer.getPlayheadTime());
                                        // phPos is the time in seconds BUTTON TIME: 37:02
                                        if(phPos > 2222) {
                                            $('.ooyalaVideo_button').css('display', 'block');
                                        }
                                })
                            }, 2000);
                        });

                        </script>
                    </div>
                </div><!-- end .ooyalaVideo -->
            </div>
            <button class="container next_step">NEXT STEP</button>
            <div class=" doctor">
                <img class="doctor_img" src="./images/DrR photo1x.png">
                <div class="doctor_title">
                    <h1 class="doctor_heading header_heading">DR. MELINA</h1>
                    <h2 class="nutritionalist">Nutritionalist</h2>
                </div>
                <div class="doctor_bio">
                    <p>Eum in adhuc mollis, eos id ignota eirmod argumentum. Etiam antiopam splendide quo ea, error decore concludaturque est no, justo putant ne has. Usu ne percipit deterruisset, in omnis oportere pri, nam an vidisse propriae inimicus. Eum in adhuc mollis, eos id ignota eirmod argumentum.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="info_header">
            <h1 class="header_heading">IN THIS PRESENTATION YOU'RE GOING TO LEARN:</h1>
        </div>
        <div class="info_info container">
            <div class="info_points">
                <ul class="info_ul">
                    <li class="info_li">3-step Energy & <br/> Digestive Health Protocol.</li>
                    <li class="info_li">How to avoid caffeine-crashes</li>
                </ul>
            </div>
            <div class="info_points">
                <ul class="info_ul">
                    <li class="info_li">How many times a day you should actually be "eliminating".</li>
                    <li class="info_li">What the digestive system craves first thing in the morning.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="citations container">
        <h2 class="citations_header">CITATIONS:</h1>
        <div class="citations_text">
            <p>Salvati E. Tubular duplication of the colon:. Disease of the Colon and Rectum. 1971;14(3):206-212.</p>
            <p>Yeldham C. Living History: Cooking and Fire. Petits Propos Culinaires. 2007;84:121-126.</p>
            <p>Cordain L, et. al. Origins and evolution of the Western diet: health implications for the 21st century. American Journal of Clinical Nutrition. 2005;81(2):341-354.</p>
            <p>Logan F. A History Of The Church In The Middle Ages. London: Routledge; 2013.</p>
            <p>Naum Jasny , "The Daily Bread of the Ancient Greeks and Romans," Osiris 9 (1950): 227-253.</p>
            <p>Mayyasi A. Why Cereal Has Such Aggressive Marketing. The Atlantic. 2016.</p>
            <p>Smith A. Food And Drink In American History: A "Full Course" Encyclopedia. Denver, CO: ABC-CLIO; 2013.</p>
            <p>Colleary, E. How Bacon and Eggs Became the American Breakfast. The American Table. 2012. Available at: http://www.americantable.org/2012/07/how-bacon-and-eggs-became-the-american-breakfast/. Accessed December 13, 2017.</p>
            <p>Dunn R. The Hidden Truths about Calories. Scientific American. 2012.</p>
            <p>Bakalar N. A High-Fat Diet May Lead to Daytime Sleepiness. The New York Times. 2016. Available at: https://well.blogs.nytimes.com/2016/04/21/a-high-fat-diet-may-lead-to-daytime-sleepiness/?_r=0. Accessed December 14, 2017.</p>
            <p>Ensure® Original Milk Chocolate Nutrition Shake | Complete Nutrition Info. Ensurecom. Available at: https://ensure.com/nutrition-products/ensure-original. Accessed December 14, 2017</p>
            <p>Snickers®. Snickerscom. 2017. Available at: https://www.snickers.com/Nutritional-Info#SnickersFunSize. Accessed December 14, 2017.</p>
            <p>Ganguly R, Pierce G. Trans fat involvement in cardiovascular disease. Molecular Nutrition & Food Research. 2012;56(7):1090-1096. doi:10.1002/mnfr.201100700.</p>
            <p>Azadbakht L, Kimiagar M, Mehrabi Y, Esmaillzadeh A, Hu F, Willett W. Soy Consumption, Markers of Inflammation, and Endothelial Function: A cross-over study in postmenopausal women with the metabolic syndrome. Diabetes Care. 2007;30(4):967-973. doi:10.2337/dc06-2126.</p>
            <p>Melnik B. Evidence for Acne-Promoting Effects of Milk and Other Insulinotropic Dairy Products. Milk and Milk Products in Human Nutrition. 2011:131-145. doi:10.1159/000325580.</p>
            <p> .</p>
        </div>
    </div>
    <footer class="container">
        <h2 class="footer_title container">© 2018 Heartland Nutrients</h2>
        <div class="footer_text">
            <p>
                These statements haven't been evaluated by the Food & Drug Administration. These products aren't intended to help diagnose, treat, cure, or prevent any disease. Use only as directed. Consult your healthcare provider before using supplements. The information provided herein is intended for your general knowledge only and is not intended to be, nor is it, medical advice or a substitute for medical advice, nor is this information intended to be, nor is it, treatment for specific medical conditions. You should not use this information to treat, diagnose, or attempt to cure a health problem or disease. If you have, or suspect you have, a specific medical condition or disease, please consult your healthcare provider. Please consult your pediatrician before you give this product to a child under 18 years of age.
            </p>
        </div>
        <h2 class="footer_privacy container">Privacy | Terms & Conditions</h2>
    </footer>
    
</body>
</html>