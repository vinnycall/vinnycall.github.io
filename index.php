<?php
include 'includes/header.php';
include 'includes/get_images.php';


$images = getImagesFromFolder('images/')
?>


<section class="first_section">
    <div class="slideshow">
        <div class="carousel-wrapper">
            <div class="carousel-track">
                <?php foreach ($images as $img): ?>
                    <div class="carousel-slide">
                        <img src="<?= $img ?>" alt="Gallery Image" />
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
        <div class="carousel-dots"></div>
        <!-- Lightbox -->
        <div id="lightbox" class="hidden">
            <span class="close">&times;</span>
            <img id="lightbox-img" src="" alt="Zoomed Image">
        </div>
    </div>
    <br />

    <div class="opening_text">
        <div class="content">
            <div class="text">
                <h2>FIRE SHOWS and LED-SHOWS</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac efficitur ex. Phasellus pharetra erat non ultricies molestie. Quisque diam lacus, egestas eget orci vel, malesuada ultricies lorem. Morbi diam sapien, sodales in tristique at, tempor non justo. Suspendisse potenti. Integer iaculis, arcu at congue tristique, lorem risus vehicula nisl, vitae aliquam diam arcu vel nibh. Integer a ornare tellus. In mollis sodales est, ut tincidunt risus sodales et. Sed blandit nec ante id placerat. Donec vehicula ac leo vulputate sodales. Duis metus massa, faucibus ac tortor non, egestas efficitur risus. Nulla mollis tristique tellus vel porta. Donec libero lectus, sollicitudin sit amet ultricies id, bibendum sed mauris. Sed lorem quam, ultrices et porta nec, aliquet vel felis. Morbi non tellus vel augue consectetur mattis id vitae magna. Nam nec gravida ante.
                </p>
                <p>
                    Pellentesque placerat leo et justo imperdiet, vel dignissim nisl congue. Morbi sagittis nulla non magna dictum, sed dapibus enim ornare. Cras sit amet mauris sollicitudin, venenatis neque vel, bibendum velit. Nunc vestibulum lectus tellus, eu tincidunt ipsum ullamcorper sit amet. Morbi scelerisque eleifend nunc, quis fringilla orci auctor ac. Donec consequat lectus sit amet est condimentum, quis vulputate nulla accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam tincidunt mauris eu mollis tempus. Maecenas scelerisque magna nisi, eu ultrices velit tincidunt dictum. Phasellus convallis arcu elit, quis sollicitudin lectus tristique at.
                </p>
            </div>
            <img src="./images/img1.jpg">
        </div>
    </div>
    <br />
    <div class="">
        <div class="content">
        <img src="./images/img7.jpg">
            <div class="text">
                <h2>MORE INFO HERE</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac efficitur ex. Phasellus pharetra erat non ultricies molestie. Quisque diam lacus, egestas eget orci vel, malesuada ultricies lorem. Morbi diam sapien, sodales in tristique at, tempor non justo. Suspendisse potenti. Integer iaculis, arcu at congue tristique, lorem risus vehicula nisl, vitae aliquam diam arcu vel nibh. Integer a ornare tellus. In mollis sodales est, ut tincidunt risus sodales et. Sed blandit nec ante id placerat. Donec vehicula ac leo vulputate sodales. Duis metus massa, faucibus ac tortor non, egestas efficitur risus. Nulla mollis tristique tellus vel porta. Donec libero lectus, sollicitudin sit amet ultricies id, bibendum sed mauris. Sed lorem quam, ultrices et porta nec, aliquet vel felis. Morbi non tellus vel augue consectetur mattis id vitae magna. Nam nec gravida ante.
                </p>
                <p>
                    Pellentesque placerat leo et justo imperdiet, vel dignissim nisl congue. Morbi sagittis nulla non magna dictum, sed dapibus enim ornare. Cras sit amet mauris sollicitudin, venenatis neque vel, bibendum velit. Nunc vestibulum lectus tellus, eu tincidunt ipsum ullamcorper sit amet. Morbi scelerisque eleifend nunc, quis fringilla orci auctor ac. Donec consequat lectus sit amet est condimentum, quis vulputate nulla accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam tincidunt mauris eu mollis tempus. Maecenas scelerisque magna nisi, eu ultrices velit tincidunt dictum. Phasellus convallis arcu elit, quis sollicitudin lectus tristique at.
                </p>
            </div>
            
        </div>
    </div>


    <div class="opening_text">
        <div class="content">
            <div class="text">
                <h2>ANOTHER PIECE OF INFO</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac efficitur ex. Phasellus pharetra erat non ultricies molestie. Quisque diam lacus, egestas eget orci vel, malesuada ultricies lorem. Morbi diam sapien, sodales in tristique at, tempor non justo. Suspendisse potenti. Integer iaculis, arcu at congue tristique, lorem risus vehicula nisl, vitae aliquam diam arcu vel nibh. Integer a ornare tellus. In mollis sodales est, ut tincidunt risus sodales et. Sed blandit nec ante id placerat. Donec vehicula ac leo vulputate sodales. Duis metus massa, faucibus ac tortor non, egestas efficitur risus. Nulla mollis tristique tellus vel porta. Donec libero lectus, sollicitudin sit amet ultricies id, bibendum sed mauris. Sed lorem quam, ultrices et porta nec, aliquet vel felis. Morbi non tellus vel augue consectetur mattis id vitae magna. Nam nec gravida ante.
                </p>
                <p>
                    Pellentesque placerat leo et justo imperdiet, vel dignissim nisl congue. Morbi sagittis nulla non magna dictum, sed dapibus enim ornare. Cras sit amet mauris sollicitudin, venenatis neque vel, bibendum velit. Nunc vestibulum lectus tellus, eu tincidunt ipsum ullamcorper sit amet. Morbi scelerisque eleifend nunc, quis fringilla orci auctor ac. Donec consequat lectus sit amet est condimentum, quis vulputate nulla accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam tincidunt mauris eu mollis tempus. Maecenas scelerisque magna nisi, eu ultrices velit tincidunt dictum. Phasellus convallis arcu elit, quis sollicitudin lectus tristique at.
                </p>
            </div>
            <img src="./images/img2.jpg">
        </div>
    </div>
    <br />
    <div class="">
        <div class="content">
            <img src="./images/img8.jpg">
            <div class="text">
                <h2>INFO IS OVER 9000</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac efficitur ex. Phasellus pharetra erat non ultricies molestie. Quisque diam lacus, egestas eget orci vel, malesuada ultricies lorem. Morbi diam sapien, sodales in tristique at, tempor non justo. Suspendisse potenti. Integer iaculis, arcu at congue tristique, lorem risus vehicula nisl, vitae aliquam diam arcu vel nibh. Integer a ornare tellus. In mollis sodales est, ut tincidunt risus sodales et. Sed blandit nec ante id placerat. Donec vehicula ac leo vulputate sodales. Duis metus massa, faucibus ac tortor non, egestas efficitur risus. Nulla mollis tristique tellus vel porta. Donec libero lectus, sollicitudin sit amet ultricies id, bibendum sed mauris. Sed lorem quam, ultrices et porta nec, aliquet vel felis. Morbi non tellus vel augue consectetur mattis id vitae magna. Nam nec gravida ante.
                </p>
                <p>
                    Pellentesque placerat leo et justo imperdiet, vel dignissim nisl congue. Morbi sagittis nulla non magna dictum, sed dapibus enim ornare. Cras sit amet mauris sollicitudin, venenatis neque vel, bibendum velit. Nunc vestibulum lectus tellus, eu tincidunt ipsum ullamcorper sit amet. Morbi scelerisque eleifend nunc, quis fringilla orci auctor ac. Donec consequat lectus sit amet est condimentum, quis vulputate nulla accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam tincidunt mauris eu mollis tempus. Maecenas scelerisque magna nisi, eu ultrices velit tincidunt dictum. Phasellus convallis arcu elit, quis sollicitudin lectus tristique at.
                </p>
            </div>

        </div>
    </div>


</section>





<script src="js/carousel.js" defer></script>


<?php include 'includes/footer.php'; ?>