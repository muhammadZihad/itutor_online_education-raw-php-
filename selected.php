<?php
include 'mysql.php';
$title="";
if(isset($_POST['search'])){
    $search = $_POST['keyword'];
    $title=$search;
}

include 'header.php';

?>

    
        <!-- Recent Uploads area-->

    <div class="container">
        <!-- <div class="row heading_big">
            <div class="col">
                <h2 class="big_h text-center">Level 1 <span>Term 3</span></h2>
            </div>
        </div> -->

        <div class="row heading_big">
            <div class="col">
                <h2 class="big_h text-center">Searching for <span><?php echo $search;?></span></h2>
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
   <!-- <div class="container">
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
   </div> -->
   
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
   
<?php 
    include 'footer.php';

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