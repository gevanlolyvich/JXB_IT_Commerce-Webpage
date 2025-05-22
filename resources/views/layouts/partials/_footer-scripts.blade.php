   <!-- Js Plugins -->
   <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
   </script>
   <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
   <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('assets/js/main.js') }}"></script>
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <!-- Initialize Swiper -->
   <script>
       const progressCircle = document.querySelector(".autoplay-progress svg");
       const progressContent = document.querySelector(".autoplay-progress span");
       var swiper = new Swiper(".mySwiper", {
           spaceBetween: 30,
           centeredSlides: true,
           autoplay: {
               delay: 5000,
               disableOnInteraction: false
           },
           pagination: {
               el: ".swiper-pagination",
               clickable: true
           },
           on: {
               autoplayTimeLeft(s, time, progress) {
                   progressCircle.style.setProperty("--progress", 1 - progress);
                   progressContent.textContent = `${Math.ceil(time / 1000)}s`;
               }
           }
       });
   </script>

   <script>
       $(function() {
           $(window).scroll(function() {
               var top_offset = $(window).scrollTop();
               if (top_offset == 0) {
                   $('.header__info').slideDown('slow');
               } else {
                   $('.header__info').slideUp('slow');
               }
           })
       });
   </script>
   @stack('removeNavbar')
