<!-- <header>
<link rel="stylesheet" href="../public/css/style--header.css">
</header> -->
<div class="header__top">
       <div class="header__top--navbar">
           <ul class="top__navbar">
               <!-- <a href="http://localhost:8080/project--ttu/register/" class="top__navbar--item"><li>Register</li></a>
               <a href="http://localhost:8080/project--ttu/login/" class="top__navbar--item"><li>Sign in/join</li></a> -->
               <a href="" class="top__navbar--item"><li>đời sống sinh viên</li></a>
               <a href="" class="top__navbar--item"><li>giảng viên/nhân viên</li></a>
               <a href="" class="top__navbar--item"><li>cựu sinh viên</li></a>
               <a href="" class="top__navbar--item"><li>liên hệ</li></a>
               <a href="" class="top__navbar--item"><img src="../public/image/vi.png" alt=""> <i class="fas fa-chevron-down"></i></a>
           </ul>
       </div>
   </div>

   <div class="header__bottom">
                    
       <div class="header__bottom--logo">
           <a href="http://localhost:8080/project--ttu/home/">
               <img src="../public/image/logo-ttuVN123.png" alt="" class="img_responsive">
           </a>
       </div>

      <div class="header__bottom--navbar">
           <ul class="bottom__navbar">

                <li>  <a href="#"> giới thiệu </a>  <i class="fas fa-chevron-down"></i>   </li>
                <li>  <a href="#"> tuyển sinh </a>                                        </li>
                <li>  <a href="#"> đào tạo    </a>                                        </li>
                <li>  <a href="#"> nghiên cứu </a>  <i class="fas fa-chevron-down"></i>   </li>
                <li>  <a href="#"> các khoa   </a>  <i class="fas fa-chevron-down"></i>   </li>
                <li>
                   <a href="http://localhost:8080/project--ttu/news/"> tin tức&sự kiện</a>
                   <i class="fas fa-chevron-down"></i>
                   <ul class="subnav">

                            <!-- Đoạn mã php móc bảng groupnews(nhóm tin) trong db ra                         -->
                        <?php
                            while($r = mysqli_fetch_array($data["gr"])) {
                                $id = $r['id_groupnews'];
                                $name = $r['name_groupnews'];
                                echo "<li> <a href='http://localhost:8080/project--ttu/news/'> $name </a> </li>";
                            }
                        ?>
                        
                   </ul>
                </li>
               <li>  <a href="#"> đóng góp </a>  </li>
               <li>  <a href="#"> <i class="fas fa-search"></i> </a>  </li>

           </ul>
        </div>
  </div>