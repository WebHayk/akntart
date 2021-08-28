<!doctype html>
<html lang="hy">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "stylesheet" href = "assets/css/editor.css">
	<link rel = "stylesheet" href = "assets/fonts/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Գործիք</title>
  </head>
  <body id = "body">


   <div class = "modal-result" id = "resulting">
       <div class = "modal-result__content content">
           <div class = "content__header">
               <p class = "content__header__text">Ներբեռնումը հաջողությամբ ավարտվեց</p>
           </div>
           <div class = "content__body">
                <p class = "content-block__text">Կիսվի՛ր կայքով սոցիալական ցանցերում կայքի հետագա զարգացումը ապահովելու համար։ Շնորհակալություն։</p>
                <div class="input-group">
                    <input id="copyInput" type="text" readonly="" value="http://localhost/tumo-project/editor.php" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button onclick="copyFunction()" class="input-group-text" id="basic-addon2"><i class='bx bx-link'></i></button>
                </div>
                <p class="copy-result" id="copy-result"></p>
           </div>
           <div class = "content__footer">
                <a href="http://localhost/tumo-project/editor.php" class="continue_button">Շարունակել աշխատանքը</a>
           </div>
       </div>
   </div>           


      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <div class="main">
		
        <div class="Tools">
            <ul>
                <li>
                    <i class='bx bxs-brightness-half'></i>
                    <p>Պայծառություն</p>
                </li>
                <li>
                    <i class='bx bxs-brush' ></i>
                    <p>Խամրություն</p>
                </li>
                <li>
                    <i class='bx bxs-collection' ></i>
                    <p>Սև & Սպիտակ</p>
                </li>
                <li>
                    <i class='bx bxs-color-fill' ></i>
                    <p>Երանգ</p>
                </li>
                <li>
                    <i class='bx bxs-magic-wand' ></i>
                    <p>Հագեցվածություն</p>
                </li>
                <li data-bs-toggle="modal" data-bs-target="#afterEdition" onclick="Download_btn()" id = "download_btn">
                    <i class='bx bx-export' ></i>
                    <p>Ներբեռնել</p>
                </li>
            </ul>
        </div>
  
        <div class="content">
  
            <div class="choose_image">
                <div class="upload_img_box rounded">
                    <i class='bx bxs-image-add' ></i><br>
                    <input type="file" name="selectedImage" id="selectedImage" accept="image/jpeg, image/png">
                    <p id="hint">Ընտրել նկար թղթապանակից</p>
                </div>
            </div>
  
            <canvas id="image_canvas"></canvas>
          
          <div class="image_holder">
              <button id="remove_img_btn">&times;</button>
              <img src="" alt="Ներբեռնում..." id="image">
          </div>
  
          <div class="options">
              
            <div class="option">
                <input type="range" max="200" min="0" value="100" id="brightness" class="slider">
                <p id="brightVal" class="show_value">100</p>
            </div>
  
             <div class="option">
                <input type="range" max="40" min="0" value="0" id="blur" class="slider">
                <p id="blurVal" class="show_value">0</p>
            </div>
  
             <div class="option">
                <input type="range" max="100" min="0" value="0" id="greyScale" class="slider">
                <p id="greyVal" class="show_value">0</p>
            </div>
  
             <div class="option">
                <input type="range" max="100" min="0" value="0" id="hue" class="slider">
                <p id="hueVal" class="show_value">0</p>
            </div>
  
             <div class="option">
                <input type="range" max="100" min="1" value="1" id="saturation" class="slider">
                <p id="saturationVal" class="show_value">1</p>
            </div>
  
          </div>
  
          <button id="clearAll"><span>Վերականգնել</span><i class='bx bx-reset' ></i></button>
  
        </div>
  
      </div>
      
        <footer>
            <a href = "index.php">
                <div class = "back-block">
                    <i class='bx bx-left-arrow-alt'></i>
                    <span>Վերադառնալ սկիզբ</span>
                </div>
            </a>

            <div class="logo-block">
                <img src = "assets/images/logo-white.svg" alt = "">
            </div>
        </footer>

        <script src = "assets/js/script.js"></script>
    </body>
    </html>