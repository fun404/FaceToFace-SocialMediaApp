<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/profilepage.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css"> -->
    <link rel="stylesheet" type="text/css" href="css/fontawesomebrand.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <link rel="stylesheet" type="text/css" href="css/googleapiFamilyMatarialIcon.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css"> -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">

    <script type="text/javascript" src="js/upload.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>



    <script type="text/javascript">
    // $(document).ready(function(){
    //     $('input[type="file"]').change(function(e){
    //         var fileName = e.target.files[0].name;

    //         console.log(fileName);
    //         alert('The file "' + fileName +  '" has been selected.');
    //         $("#imgid").attr("src",fileName);
    //     });
    // });

// function readURL(input) {
//   if (input.files && input.files[0]) {
//     var reader = new FileReader();
    
//     reader.onload = function(e) {
//       $('#imgid').attr('src', e.target.result);
//     }
//     console.log(e.target.result);
    
//     reader.readAsDataURL(input.files[0]);
//   }
// }

// $("#imgInp").change(function() {
//     console.log();
//   readURL(this);
// });
</script>
    <?php 
    session_start();
    require_once("process.php");
    $GLOBALS['globalEmail'] = $_SESSION["email"] or die('you should die');
    $GLOBALS['register'] =displayData('register','email',$globalEmail);
    ?> 
    <main>
            <div id="device-bar-1">
                <button></button>
                <button></button>
                <button></button>
            </div>
            <header>
                <div class="tb">
                    <div class="td" id="logo">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    <div class="td" id="search-form">
                        <form method="get" action="#">
                            <input type="text" placeholder="Search Facebook">
                            <button type="submit"><i class="material-icons">search</i></button>
                        </form>
                    </div>
                    <div class="td" id="f-name-l"><span>
                        <?php if(isset($_SESSION["userName"]))
                                { echo $_SESSION["userName"];} 
                        ?>'s facebook</span></div>
                    <div class="td" id="i-links">
                        <div class="tb">
                            <div class="td" id="m-td">
                                <div class="tb">
                                    <span class="td"><i class="material-icons">person_add</i></span>
                                    <span class="td"><i class="material-icons">chat_bubble</i></span>
                                    <span class="td m-active"><i class="material-icons">notifications</i></span>
                                </div>
                            </div>
                            <div class="td">
                                <a href="#" id="p-link">
                                    <?php 
                                            $columArray =  displayData('pics','uid',$globalEmail);
                                               if  ($columArray[3] != '') 
                                                {
                                                echo "<img src='$columArray[3]' alt='profile image'>";
                                                }
                                                elseif ($columArray[3] == '')
                                                    {
                                                        if ($register[6] == "female") 
                                                        {
                                                            echo "<img src='images/default-profile-picture-female-1.png' alt='user\'s profile picture'>";
                                                        }
                                                        elseif ($register[6] == "male") 
                                                        {
                                                            echo "<img src='images/default-profile-picture-male-1.png' alt='user\'s profile picture'>";
                                                        }
                                                        elseif ($register[6] == "others") 
                                                        {
                                                            echo "<img src='images/cool-facebook-default-profile-picture-specialcharacter-1.png' alt='user\'s profile picture'>";
                                                        }
                                                    }
                                        ?>
                                    <!-- <img src="http://k007.kiwi6.com/hotlink/82vlhl43nx/fbme.jpg"> -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div id="profile-upper">
                <div id="profile-banner-image">

                    <?php 
                    $columArray =  displayData('pics','uid',$globalEmail);
                       if  ($columArray[2] != '') 
                            {
                            echo "<img src='$columArray[2]' alt='profile image'>";
                            }
                            elseif ($columArray[2] == '')
                            {
                               
                                    echo "<img src='images/not.jpg' style='padding-top:200px;' alt='user\'s profile picture' >";
                                
                            }
                    ?>
                    <!-- <img src="http://k003.kiwi6.com/hotlink/iszu69wcec/fbg.jpg" alt="Banner image"> -->
                </div>
                <div id="profile-d">
                    <div id="profile-pic">
                        <?php 
                        $columArray =  displayData('pics','uid',$globalEmail);
                       if  ($columArray[3] != '') 
                            {
                            echo "<img id='imgid' src='$columArray[3]' alt='profile image'>";
                            }
                            elseif ($columArray[3] == '')
                            {
                                if ($register[6] == "female") 
                                {
                                    echo "<img id='imgid' src='images/default-profile-picture-female-1.png' alt='user\'s profile picture";
                                }
                                elseif ($register[6] == "male") 
                                {
                                    echo "<img id='imgid' src='images/default-profile-picture-male-1.png' alt='user\'s profile picture";
                                }
                                elseif ($register[6] == "others") 
                                {
                                    echo "<img id='imgid' src='images/cool-facebook-default-profile-picture-specialcharacter-1.png' alt='user\'s profile picture";
                                }
                            }
                        
                        // else
                        // {
                        //     if (displayData('register','email',$email) == 'female') {
                        //     echo "<img src='images/default-profile-picture-female-1' alt=''>";
                        //     }
                        //     if (displayData('register','email',$email) == 'male') {
                        //     echo "<img src='images/default-profile-picture-male-1' alt=''>";
                        //     }
                        // }
                               ?>
                        <!-- <img src="http://k007.kiwi6.com/hotlink/82vlhl43nx/fbme.jpg">     -->
                    </div>
                    <div id="u-name">
                         <?php 
                            if(isset($_SESSION["userName"]))
                                { echo $_SESSION["userName"];}
                            else
                                header("location:index.php");
                         ?>
                    </div>
                    <div class="tb" id="m-btns">
                        <div class="td">
                            <div class="m-btn"><i class="material-icons">format_list_bulleted</i><span>Activity log</span></div>
                        </div>
                        <div class="td">
                            <div class="m-btn"><i class="material-icons">lock</i><span>Privacy</span></div>
                        </div>
                    </div>
                    <div id="edit-profile"><i class="material-icons">camera_alt</i></div>
                </div>
                <div id="black-grd"></div>
            </div>
            <div id="main-content">
                <div class="tb">
                    <div class="td" id="l-col">                   
                        <div class="l-cnt">
                            <form method="post" action="upload.php" enctype="multipart/form-data" onsubmit="return checkpic()">
                                <input type="file"  name="pic"  value="select image" id="imgInp"/>
                                <input type="submit" class="upload" name="uploadpp" value="upload as profile pic"   style="cursor:pointer">
                                <span><input type="submit" class="upload" name="uploadcp" value="upload as cover pic"></span>
                           <!-- onclick="checkpic()" -->
                            </form>
                        </div>
                        <div class="l-cnt l-mrg">
                            <div class="cnt-label">
                                <i class="l-i" id="l-i-p"></i>
                                <span>Photos</span>
                                <div class="lb-action" id="b-i"><i class="material-icons">keyboard_arrow_down</i></div>
                            </div>
                            <div id="photos">
                                <div class="tb">
                                    <!-- <div class="tr"> -->
                                        <?php 
                                            //     $i=0;
                                            // // $columArray =  displayData('gallary','uid',$globalEmail);
                                            //     $mycon = connect();
                                            //     $query="select * from `gallary` where `uid` = '".$globalEmail."'";
                                            //     $result = mysqli_query($mycon,$query)or die("failed to fetch object");
                                            // // foreach ($result as $key) {
                                            // while ($key = mysqli_fetch_array($result))  {
                                            //     if($i<3)
                                            //     {
                                            //          echo "<div class='td'><img src='".$key[2]."' alt='gallary'  height='100px' width='100'></div>";
                                            //          $i++;
                                            //     }
                                               
                                            // else
                                            // {
                                            //       echo "</div> <div class='tr'><div class='td'><img src='".$key[2]."' alt='gallary'  height='100px' width='100'></div>";
                                            //       $i=0;
                                            // }
                                            //     # code...
                                            // }
                                        ?>
                                        <div class="tr">
                                            <?php 
                                                $i =0;
                                                $mycon = connect();
                                                $query="select * from `gallary` where `uid` = '".$globalEmail."'";
                                                $result = mysqli_query($mycon,$query)or die("failed to fetch object");
                                                while ($key=mysqli_fetch_array($result)) 
                                                {
                                                    if ($i<3) 
                                                    {
                                            ?>

                                            <div class="td"><img src='<?="$key[2]"?>' alt='gallary'  height='100px' width='100'></div>

                                            <?php
                                                    $i++;
                                                    }
                                                    else
                                                    {
                                            ?>
                                        </div>
                                        <div class="tr">
                                            <div class="td"><img src='<?="$key[2]"?>' alt='gallary'  height='100px' width='100'></div>
                                        </div>

                                                        <?php
                                                        $i=0;
                                                    }
                                                }
                                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="l-cnt l-mrg" >
                            <div class="cnt-label">
                                <i class="l-i" id="l-i-k"></i>
                                <span>Did You Know<i id="k-nm">1</i></span>
                            </div>
                            <div>
                                <div class="q-ad-c">
                                    <a href="#" class="q-ad">
                                        <img src="https://static.xx.fbcdn.net/images/emoji.php/v9/fca/1/24/1f4ab.png">
                                        <span>My favorite superhero is...</span>
                                    </a>
                                </div>
                                <div class="q-ad-c">
                                    <a href="#" class="q-ad" id="add_q">
                                        <i class="material-icons">add</i>
                                        <span>Add Answer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="t-box">
                            <a href="#">Privacy</a> <a href="#">Terms</a> <a href="#">Advertising</a> <a href="#">Ad Choices</a> <a href="#">Cookies</a> <span id="t-more">More<i class="material-icons">arrow_drop_down</i></span>
                            <div id="cpy-nt">Facebook &copy; <span id="curr-year"></span></div>
                        </div>
                    </div>
                    <div class="td" id="m-col">
                        <div class="m-mrg" id="p-tabs">
                            <div class="tb">
                                <div class="td">
                                    <div class="tb" id="p-tabs-m">
                                        <div class="td active"><i class="material-icons">av_timer</i><span>TIMELINE</span></div>
                                        <div class="td"><i class="material-icons">people</i><span>FRIENDS</span></div>
                                        <div class="td"><i class="material-icons">photo</i><span>PHOTOS</span></div>
                                        <div class="td"><i class="material-icons">explore</i><span>ABOUT</span></div>
                                        <div class="td"><i class="material-icons">archive</i><span>ARCHIVE</span></div>
                                    </div>
                                </div>
                                <div class="td" id="p-tab-m"><i class="material-icons">keyboard_arrow_down</i></div>
                            </div>
                        </div>
                        <div class="m-mrg" id="composer">
                            <div id="c-tabs-cvr">
                                <div class="tb" id="c-tabs">
                                    <div class="td active"><i class="material-icons">subject</i><span>Make Post</span></div>
                                    <div class="td"><i class="material-icons">camera_enhance</i><span>Photo/Video</span></div>
                                    <div class="td"><i class="material-icons">videocam</i><span>Live Video</span></div>
                                    <div class="td"><i class="material-icons">event</i><span>Life Event</span></div>
                                </div>
                            </div>
                            <div id="c-c-main">
                                <div class="tb">
                                    <div class="td" id="p-c-i">
                                        <?php 
                                            $columArray =  displayData('pics','uid',$globalEmail);
                                               if  ($columArray[3] != '') 
                                                {
                                                echo "<img src='$columArray[3]' alt='profile image'>";
                                                }
                                                elseif ($columArray[3] == '')
                                                {
                                                    if ($register[6] == "female") 
                                                    {
                                                        echo "<img src='images/default-profile-picture-female-1.png' alt='user\'s profile picture'>";
                                                    }
                                                    elseif ($register[6] == "male") 
                                                    {
                                                        echo "<img src='images/default-profile-picture-male-1.png' alt='user\'s profile picture'>";
                                                    }
                                                    elseif ($register[6] == "others") 
                                                    {
                                                        echo "<img src='images/cool-facebook-default-profile-picture-specialcharacter-1.png' alt='user\'s profile picture'>";
                                                    }
                                                }
                                                else echo "";
                                        ?>
                                        <!-- <img src="http://k007.kiwi6.com/hotlink/82vlhl43nx/fbme.jpg" alt="Profile pic"> -->
                                    </div>
                                    <div class="td" id="c-inp">
                                        <input type="text" id="idd" placeholder="What's on your mind?">
                                    </div>
                                </div>
                                <div id="insert_emoji"><i class="material-icons">insert_emoticon</i></div>
                            </div>
                        </div>
                        <div>
                            <div class="post">
                                <div class="tb">
                                    <a href="#" class="td p-p-pic"><img src="http://k007.kiwi6.com/hotlink/k8phd6z9a0/fbbro.jpg" alt="Rajeev's profile pic"></a>
                                    <div class="td p-r-hdr">
                                        <div class="p-u-info">
                                            <a href="#">Rajeev Singh</a> shared a memory with <a href="#">Himalaya Singh</a> 
                                        </div>
                                        <div class="p-dt">
                                            <i class="material-icons">calendar_today</i>
                                            <span>January 28, 2015</span>
                                        </div>
                                    </div>
                                    <div class="td p-opt"><i class="material-icons">keyboard_arrow_down</i></div>
                                </div>
                                <a href="#" class="p-cnt-v">
                                    <img src="http://k003.kiwi6.com/hotlink/ksd27hdjlh/p1.jpg">
                                </a>
                                <div>
                                    <div class="p-acts">
                                        <div class="p-act like"><i class="material-icons">thumb_up_alt</i><span>25</span></div>
                                        <div class="p-act comment"><i class="material-icons">comment</i><span>1</span></div>
                                        <div class="p-act share"><i class="material-icons">reply</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="loading"><i class="material-icons">autorenew</i></div>
                    </div>
                    <div class="td" id="r-col">
                        <div id="chat-bar">
                            <div id="chat-lb"><i class="material-icons">contacts</i><span>Contacts</span></div>
                            <div id="cts">
                                <div class="on-ct active">
                                    <a href="#"><img src="http://k007.kiwi6.com/hotlink/apktixi9bz/fbot.jpg"></a>
                                </div>
                                <div class="on-ct active">
                                    <a href="#"><img src="http://k007.kiwi6.com/hotlink/5q8emmtisc/fbog.jpg"></a>
                                </div>
                                <div class="on-ct">
                                    <a href="#"><img src="http://k007.kiwi6.com/hotlink/apktixi9bz/fbot.jpg"></a>
                                </div>
                                <div class="on-ct active">
                                    <a href="#"><img src="http://k007.kiwi6.com/hotlink/5q8emmtisc/fbog.jpg"></a>
                                </div>
                                <div class="on-ct active">
                                    <a href="#"><img src="http://k007.kiwi6.com/hotlink/apktixi9bz/fbot.jpg"></a>
                                </div>
                                <div class="on-ct">
                                    <a href="#"><img src="http://k007.kiwi6.com/hotlink/apktixi9bz/fbot.jpg"></a>
                                </div>
                                <div class="on-ct">
                                    <a href="#"><img src="http://k007.kiwi6.com/hotlink/5q8emmtisc/fbog.jpg"></a>
                                </div>
                                <div class="on-ct" id="ct-sett"><i class="material-icons">settings</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="device-bar-2"><i class="fab fa-apple"></i></div>
    </main>
</body>
<script type="text/javascript">

</script>

</html>