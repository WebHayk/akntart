<!doctype html>
<html lang="hy">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "stylesheet" href = "assets/css/style.css">
	<link rel = "stylesheet" href = "assets/css/wowanimate.css">
	<link rel = "stylesheet" href = "assets/fonts/style.css">
	<script src = "assets/js/wow.min.js"></script>
	<script>new WOW().init();</script>
    <title>Գլխավոր</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

<?php include 'header.php' ?>
 
<section class = "main_block">
    <div class = "main_content d-flex align-items-start justify-content-between">
        <div class = "main_left_block">
			<div class = "main_info_block wow fadeInLeft" data-wow-duration="1.2s">
                 <p class = "main_title fw-bolder lh-base">Մշակի՛ր նկարներ ու կոտրի՛ր կարծրատիպեր</p>
				 <p class = "main_description lh-base">ՀՀ-ում առաջին պրոֆեսիոնալ օնլայն գործիքը նկարներ մշակելու համար։</p>
				   <div class = "main_button_group d-lg-flex d-md-flex align-items-center">
				   		<a href = "editor.php" class = "start_button rounded-pill text-decoration-none">Սկսել աշխատանքը</a>
						<p><a href = "work.php" class = "view_more text-decoration-underline">Դիտել այլ աշխատանքներ</a></p>
				   </div>
				   <div class = "review_block">
				   		<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  							<div class="carousel-inner">
    							<div class="carousel-item active" data-bs-interval="4000">
      								<div class = "review_item rounded bg-white">
                                          <div class = "d-flex align-items-center">
                                              <img src = "assets/images/review_one.svg">
											    <div class = "user_info">
                                                     <p class = "user_name fw-bolder">Գարեգին Դավթյան</p>
													 <p class = "user_work">UX/UI designer</p>
												</div>
										  </div>
										  <div class = "user_info_description">
												<p class = "lh-base">Բավականին հարմարավետ գործիք է: Մշակեցի մոտ 10 նկար և գոհ եմ արդյունքներից։ Կշարունակեմ օգտվել:</p>
										  </div>
									</div>
    							</div>
    							<div class="carousel-item" data-bs-interval="4000">
      								<div class = "review_item rounded bg-white">
                                          <div class = "d-flex align-items-center">
                                              <img src = "assets/images/review_two.svg">
											    <div class = "user_info">
                                                     <p class = "user_name fw-bolder">Արևիկ Խաչատրյան</p>
													 <p class = "user_work">Վեբ ծրագրավորող</p>
												</div>
										  </div>
										  <div class = "user_info_description">
												<p class = "lh-base">Շնորհակալ եմ այսպիսի հետաքրքիր գործիք ստեղծելու համար։ Թուու՜յն;</p>
										  </div>
									</div>
    							</div>
    							<div class="carousel-item" data-bs-interval="4000">
								    <div class = "review_item rounded bg-white">
                                          <div class = "d-flex align-items-center">
                                              <img src = "assets/images/review_three.svg">
											    <div class = "user_info">
                                                     <p class = "user_name fw-bolder">Արզուման Մելիքյան</p>
													 <p class = "user_work">"SSS"-ի անդամ</p>
												</div>
										  </div>
										  <div class = "user_info_description">
												<p class = "lh-base">Հետաքրքիր է օգտվել հայկական արտադրության այսպիսի կայքից։</p>
										  </div>
									</div>
    							</div>
  							</div>
						</div>
				    </div>
			  </div>
		</div>
		<div class = "main_right_block wow fadeInRight" data-wow-duration="1.2s">
            <img src = "assets/images/images-group.svg">
		</div>
	</div>
</section>

<?php include 'footer.php' ?>
