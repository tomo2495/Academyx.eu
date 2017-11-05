<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(https://www.academyx.eu/wp-content/uploads/2015/05/3d_graf-2600x600.jpg);">
            <div class="slide-content">
                <h1>PONUKA SOFTVÉROV PRE 3D GRAFIKU</h1>
                <p class>Ponuka širokých paliet programov pre NURBS a polygonálne modelovanie.</p>
                <a href="/pre-3d-modelovanie" class="btn btn-primary btn-lg">Prejsť na ponuku</a>
            </div>
        </div>
        <div class="swiper-slide" style="background-image:url(https://www.academyx.eu/wp-content/uploads/2017/10/2d_grafika-2600x600.jpg);">
            <div class="slide-content">
                <h1>PONUKA SOFTVÉROV PRE 2D GRAFIKU</h1>
                <p class>Komplexná ponuka programov pre editáciu rastrovej a vektorovej grafiky.</p>
                <a href="/pre-2d-grafiku-a-cad" class="btn btn-primary btn-lg">Prejsť na ponuku</a>
            </div>
        </div>
        <div class="swiper-slide" style="background-image:url(https://www.academyx.eu/wp-content/uploads/2017/10/learning-e1430768333917-2600x600.jpg);">
            <div class="slide-content">
                <h1>PONUKA ŠKOLENÍ 2D A 3D GRAFIKY</h1>
                <p class>Ponuka Školení a konzultácií z oblastí počítačovej 2D a 3D grafiky. Školiteľmi sú špecialisti s dlhoročnými skúsenosťami z praxe.</p>
                <a href="/kurzy" class="btn btn-primary btn-lg">Prejsť na ponuku</a>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <!--div class="swiper-pagination"></div-->
    
    <!-- Add navigation buttons -->
    <div class="button-prev fa fa-chevron-left"></div>
    <div class="button-next fa fa-chevron-right"></div>
</div>
<script>
//initialize swiper
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    lazyLoading: true,
    grabCursor: true,
    autoplay: 5000,
    loop: true,
    speed:1000,
    autoplayDisableOnInteraction: false,
    effect: 'fade',
    prevButton: '.button-prev',
    nextButton: '.button-next',
});
</script>
