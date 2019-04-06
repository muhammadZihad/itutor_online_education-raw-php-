<?php include 'header.php';
include 'mysql.php';
if(isset($_POST['search'])){
    $search = $_POST['keyword'];
}


?>

    
        <!-- Recent Uploads area-->

    <div class="container">
        <div class="row heading_big">
            <div class="col">
                <h2 class="big_h text-center">Level 1 <span>Term 3</span></h2>
            </div>
        </div>
        <div class="row">

            <!--  single upload-->
            
            <?php
                $query="select post_init.post_id,post_init.title,post_init.rating,post_init.num_rating,users.name from post_init,users where LOWER(post_init.title) like '%$search%' and post_init.ins_id=users.id";
                $data = mysqli_query($conn,$query);
                
                while($post=mysqli_fetch_assoc($data)){
                ?>

                    <div class="col-md-3 col-sm-4">
                        <div class="single_recent_upld">
                            <div class="prevw"></div>
                            <div class="course_txt">
                                <h5><a href="<?php  echo "single.php?post_id=".$post['post_id'];   ?>"><?php  echo excerpt($post['title']);   ?></a></h5>
                                <p><i class="fas fa-user"></i><?php  echo $post['name'];   ?></p>
                                <div class="rate">
                                    <i class="fas fa-star"></i> <span class="rate_val"><?php  echo $post['rating']."  (".$post['num_rating'].")";   ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }

                $query="select post_init.post_id,post_init.title,post_init.rating,post_init.num_rating,users.name from post_init,users where post_init.keyword like '%$search%' and post_init.ins_id=users.id";
                $data = mysqli_query($conn,$query);
                
                while($post=mysqli_fetch_assoc($data)){
                ?>

                    <div class="col-md-3 col-sm-4">
                        <div class="single_recent_upld">
                            <div class="prevw"></div>
                            <div class="course_txt">
                                <h5><a href="<?php  echo "single.php?post_id=".$post['post_id'];   ?>"><?php  echo excerpt($post['title']);   ?></a></h5>
                                <p><i class="fas fa-user"></i><?php  echo $post['name'];   ?></p>
                                <div class="rate">
                                    <i class="fas fa-star"></i> <span class="rate_val"><?php  echo $post['rating']."  (".$post['num_rating'].")";   ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
            ?>

        </div>
    </div>
    
<!--    pagination-->
   <div class="container">
       <div class="row">
           <div class="col">
               		<div class="pagination">
			<ul>

				<li><li>
					<a href="#" >&laquo;</a>
				</li>

				<li>
					<a href="#" >1</a>
				</li>
				<li>
					<a href="#" >2</a>
				</li>
				<li>
					<a href="#" class="active">3</a>
				</li>
				<li>
					<a href="#" >4</a>
				</li>
				<li>
					<a href="#" >5</a>
				</li>
				<li>
					<a href="#" >&raquo;</a>
				</li>

			</ul>
		</div> 
           </div>
       </div>
   </div>
   
       <!--   Semister Subject Input Area-->
    <div class="sem_select_area selectd_cat_page">
        <div class="container">
            <form>
                <div class="row justify-content-center">
                    <form action="">
                        <div class="col-auto">
                            <div class="single_op">
                                <select class="custom-select">
                                  <option selected>Select Your Level</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="single_op">
                                <select class="custom-select">
                                  <option selected>Select Your Term</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="single_op">
                                <select class="custom-select">
                                  <option selected>Select Your Subject</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="btn sub_btn slcd_btn" type="submit">Go</button>
                        </div>
                </div>
                </form>
        </div>
    </div>
    
        <!--  Footer Area-->
    <div class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about_itutor">
                        <h5>About Itutor</h5>
                        <p>itutor is a free resource site for Students. Students can learn their subject from online. If you have skill you can also be an instructor here. The main goal of this site is to provide quality tutorial for students</p>
                    </div>
                </div>
                <div class="col">
                    <div class="footer_menu1">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Contact</a>
                            </li>
                            <li>
                                <a href="#!">About Us</a>
                            </li>
                            <li>
                                <a href="#!">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright_area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_copyright_txt">&copy; Saleheen & Zihad</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Footer Area-->

    <!-- End  Semister Subject Input Area-->
    
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php 
    function excerpt($title) {
        $cutOffLength=30;
        $charAtPosition = "";
        $titleLength = strlen($title);
    
        do {
            $cutOffLength++;
            $charAtPosition = substr($title, $cutOffLength, 1);
        } while ($cutOffLength < $titleLength && $charAtPosition != " ");
    
        return substr($title, 0, $cutOffLength) . '...';
    
    }
?>