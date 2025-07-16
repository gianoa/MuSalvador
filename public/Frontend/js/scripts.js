    window.onload = function(){ 

//-------------------------------------------------------------------
// Effect SWIPER PLUGIN
//-------------------------------------------------------------------
        const swiper = new Swiper('.tumb-character', {
          centeredSlides: true,
          loop: true,
          autoplay: true,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
              slidesPerView: 3,
              spaceBetween: 40
          },
          480: {
              slidesPerView: 3,
              spaceBetween: 100
          },
          768: {
              slidesPerView: 4,
              spaceBetween: 120
          },
          1024: {
              slidesPerView: 3,
              spaceBetween: 166
          },
          1366: {
              slidesPerView: 6,
              spaceBetween: 114
          },
          1440: {
              slidesPerView: 6,
              spaceBetween: 100
          },
          1700: {
              slidesPerView: 6,
              spaceBetween: 136
          }
      }
  });

        var images = document.getElementsByTagName("img");
        for(var i = 0 ; i < images.length ; i++) {
            images[i].classList.add('no-drag');
            images[i].setAttribute('no-drag', 'on');
            images[i].setAttribute('draggable', 'false');
            images[i].addEventListener('dragstart', function( event ) {
                event.preventDefault();
            }, false);  
        }

    }


/*-------------------------------------------------------*/
/* EFECTO MENU HEADER MOVIL
/*-------------------------------------------------------*/

    $('#menu-icon').click(function(e){
        e.preventDefault();
        $('.animate1').toggleClass('line1');
        $('.animate2').toggleClass('line2');
        $('.animate3').toggleClass('line3');
        $('.list-menu').slideToggle();
        $('.dark-cover').toggleClass('black-screen');
        $('body').toggleClass('stop-scrolling');
    })

    $('#dark-cover').click(function(e){
        $(this).toggleClass('black-screen');
        $('.animate1').toggleClass('line1');
        $('.animate2').toggleClass('line2');
        $('.animate3').toggleClass('line3');
        $('.list-menu').slideUp();
        $('body').removeClass('stop-scrolling');
    })



    if($(window).width()>991){
        $('.list-menu').show();
    }else{
        $('nav ul li').unbind('mouseenter mouseleave');
    }



    $(window).resize(function(){
        if($(window).width()>991){
            $('.list-menu').show();
            $('#dark-cover').removeClass('black-screen');
            $('body').removeClass('stop-scrolling');
        }else{
            $('nav ul li').unbind('mouseenter mouseleave');

        }

    })


//-------------------------------------------------------------------
// Effect Parallax javascript Pure;
//-------------------------------------------------------------------
    const sections = document.querySelectorAll('.section');
    let scrollY = window.scrollY;

    function updateParallax(){
        sections.forEach(section => {
            const image = section.querySelector('.parallax-image');
            const speed = parseFloat(section.dataset.speed);
            const offsetTop = section.offsetTop;
            const height = section.offsetHeight;

            const distance = scrollY - offsetTop;

            if (scrollY + window.innerHeight >= offsetTop && scrollY <= offsetTop + height){
                image.style.transform = `translateY(${distance * speed}px)`
            }
        });
        requestAnimationFrame(updateParallax);
    }

    window.addEventListener('scroll', () => {
      scrollY = window.scrollY;
  });

    requestAnimationFrame(updateParallax);


//-------------------------------------------------------------------
// SLICK SLIDER PLUGIN;
//-------------------------------------------------------------------

    $('.slick-img').slick({

     prevArrow: '<button class="slick-prev"><img src="public/Frontend/img/arrow-right.png" alt="Prev"></button>',
     nextArrow: '<button class="slick-next"><img src="public/Frontend/img/arrow-left.png" alt="Next"></button>',
     dots: true,
     arrows: true,
     infinite: true,
     autoplay: true,
     autoplaySpeed : 2000

 });

//-------------------------------------------------------------------
// Effect SMOOTH SCROLL
//-------------------------------------------------------------------

    SmoothScroll({
          // Scrolling Core
          animationTime: 1000, // [ms]
          stepSize: 100, // [px]

          // Acceleration
          accelerationDelta: 50, // 50
          accelerationMax: 2, // 3

          // Keyboard Settings
          keyboardSupport: false, // option
          arrowScroll: 50, // [px]

          // Pulse (less tweakable)
          // ratio of "tail" to "acceleration"
          pulseAlgorithm: true,
          pulseScale: 4,
          pulseNormalize: 1,

          // Other
          touchpadSupport: false, // ignore touchpad by default
          fixedBackground: true,
          excluded          : ''  
      });



/*-------------------------------------------------------*/
/* EFECTO PARALLAX HEADER
/*-------------------------------------------------------*/

    const characterGC = document.querySelector("#img__gc");
    const characterSM = document.querySelector("#img__sm");
    const rocas = document.querySelector("#img__rocas");
    const logo = document.querySelector("#img__logo");
    const fondo = document.querySelector("#img__background");
    const buttom = document.querySelector("#img__buttom");
    const nav = document.getElementById("nav__bars");


    window.addEventListener("scroll",() =>{
     let scroll = window.scrollY;

     characterGC.style.left = -scroll * 0.2 + "px";
     characterSM.style.right = -scroll * 0.2 + "px";
     logo.style.bottom = scroll *0.2 + "px";

     var scrolly = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

     buttom.style.opacity = Math.max(0, Math.min(1, -scrolly / 350 + 2));

     // console.log(-scrolly / 350 + 2);
     // console.log(scrolly);
     // console.log(buttom.style.opacity);

     if($(window).width()>991){
        if(scroll > 600) {
            nav.classList.add('stick');
        }else{
            nav.classList.remove('stick');
        }
    }


    $(window).resize(function(){
        if($(window).width()>991){
            if(scroll > 600) {
                nav.classList.add('stick');
            }else{
                nav.classList.remove('stick');
            }
        }else{
            nav.classList.remove('stick');
        }
    })
})


/*-------------------------------------------------------*/
/*  HORA LOCAL EN TIEMPO REAL
/*-------------------------------------------------------*/

    let hrs = document.getElementById('set_hour');
    let min = document.getElementById('set_minute');
    let sec = document.getElementById('set_second');



    setInterval(() => {
        let currentTime = new Date();
        hrs.innerHTML = (currentTime.getHours() < 10 ? "0" : "") + currentTime.getHours();
        min.innerHTML = (currentTime.getMinutes() < 10 ? "0" : "") + currentTime.getMinutes();
        sec.innerHTML = (currentTime.getSeconds() < 10 ? "0" : "") + currentTime.getSeconds();
    },1000)



//-------------------------------------------------------------------
// ShowTooglePassword
//-------------------------------------------------------------------

    document.addEventListener("DOMContentLoaded", () => {
      const fields = document.querySelectorAll(".input-content");

      fields.forEach(field => {
        const input = field.querySelector(".password-indents");
        const icon = field.querySelector(".toggle-password");

        // Asegúrate de que ambos existan
        if (input && icon) {
          icon.addEventListener("click", () => {
            if (input.type === "password") {
              input.type = "text";
              icon.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
          } else {
              input.type = "password";
              icon.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
          }
      });
      }
  });
  });
//-------------------------------------------------------------------
// Acordeon Efecto ListRanking
//-------------------------------------------------------------------


  //   window.addEventListener("DOMContentLoaded", () => {
  //       const allButtons = document.querySelectorAll('.aside-main-title');
  //       const allSublists = document.querySelectorAll('.aside-main-sublist');

  //   //Abrir el primero al inicio

  //       if (allButtons.length > 0 && allSublists.length > 0) {
  //           const firstButton = allButtons[0];
  //           const firstSublist = firstButton.nextElementSibling;

  //           firstSublist.style.maxHeight = firstSublist.scrollHeight + 'px';
  //           firstButton.classList.add("title-active");

  //           const icon = firstButton.querySelector(".icon-toggle");
  //           if (icon) {
  //             icon.classList.remove("fa-plus");
  //             icon.classList.add("fa-minus-square");
  //         }

  //       //Acordeon sin cerrar el actual al hacer click

  //         allButtons.forEach(button =>{
  //           button.addEventListener("click", () => {
  //               const currentSublist = button.nextElementSibling;
  //               const isAlreadyActive = button.classList.contains('title-active');

  //               if (isAlreadyActive) return;

  //               //cerrar los demas
  //               allSublists.forEach(sublist => {
  //                   sublist.style.maxHeight = null;
  //               })

  //               allButtons.forEach(btn => {
  //                   btn.classList.remove('title-active');
  //                   const icon = btn.querySelector(".icon-toggle");
  //                   if (icon) {
  //                       icon.classList.add('fa-plus');
  //                       icon.classList.remove('fa-minus-square');
  //                   }

  //               })

  //           // Abrir el boton actual

  //               currentSublist.style.maxHeight = currentSublist.scrollHeight + "px";
  //               button.classList.add('title-active');

  //               const icon = button.querySelector('.icon-toggle');
  //               if (icon) {
  //                   icon.classList.remove('fa-plus');
  //                   icon.classList.add('fa-minus-square');
  //               }

  //           })

  //       })  

  //     }


  // });


  //   document.querySelectorAll('.aside-main-title').forEach(button => {
  //     button.addEventListener('click', () => {
  //       const sublist = button.nextElementSibling;

  //   // Si ya está abierto
  //       if (sublist.style.maxHeight) {
  //         sublist.style.maxHeight = null;
  //         button.classList.remove('title-active'); 
  //     } else {
  //         sublist.style.maxHeight = sublist.scrollHeight + 'px';
  //         button.classList.add('title-active'); 
  //     }
  // });
  // });



    window.addEventListener("DOMContentLoaded", () =>{

     const allButtons = document.querySelectorAll('.aside-main-title');
     // const allSublist = document.querySelector('.aside-main-sublist');

     if (allButtons.length > 0) {
        const screnWidth = window.innerWidth;


        for(let i=0 ; i < allButtons.length; i++){
            let itemButtons = allButtons[i];
            let itemSublist = itemButtons.nextElementSibling;

            if (screnWidth <= 991) {
                if(i === 0){
                    itemSublist.style.maxHeight = itemSublist.scrollHeight + "px";
                    itemButtons.classList.add('title-active');
                }else{
                    itemSublist.style.maxHeight = null;
                    itemButtons.classList.remove('title-active');
                }

            } else{
                // En resoluciones mayores a 991px, todos activos
             itemSublist.style.maxHeight = itemSublist.scrollHeight + "px";
             itemButtons.classList.add('title-active');

         }


     }

     allButtons.forEach(btn =>{
        btn.addEventListener('click',() =>{
            const currentSublist = btn.nextElementSibling;

            if(currentSublist.style.maxHeight){
                currentSublist.style.maxHeight = null;
                btn.classList.remove('title-active');
            }else{
                currentSublist.style.maxHeight = currentSublist.scrollHeight + "px";
                btn.classList.add('title-active');
            }
        })

    })

 }

})

//-------------------------------------------------------------------
// EFECTO SLIDER CHARACTERS
//-------------------------------------------------------------------
    document.addEventListener("DOMContentLoaded", () => {

     const characterBox = document.querySelector(".character-box");


     if (characterBox) {
        setInitialCharacterBars();
    }


    function setInitialCharacterBars() {
        const barAttack = characterBox.querySelector(".bar-attack");
        const barDefense = characterBox.querySelector(".bar-defense");
        const barAgility = characterBox.querySelector(".bar-agility");
        const barHp = characterBox.querySelector(".bar-hp");

        if (barAttack) barAttack.style.width = "85%";
        if (barDefense) barDefense.style.width = "58%";
        if (barAgility) barAgility.style.width = "58%";
        if (barHp) barHp.style.width = "58%";
    }





    const layerA = document.getElementById('layerA');
    const layerB = document.getElementById('layerB');

    let currentLayer = layerA;
    let nextLayer = layerB;

    //funcion que actualiza el contenido de un layer

    function fillCharacterContent(layer, data){

       layer.querySelector("#char-name").textContent = data.name;
       layer.querySelector("#char-subtitle").textContent = data.subtitle;
       layer.querySelector("#char-description").textContent = data.description;
       layer.querySelector("#char-image").src = data.img;

       layer.querySelector("#stat-attack").textContent = data.attack + "%";
       layer.querySelector("#stat-defense").textContent = data.defense + "%";
       layer.querySelector("#stat-agility").textContent = data.agility + "%";
       layer.querySelector("#stat-hp").textContent = data.hp + "%";

       animateBar(".bar-attack", data.attack);
       animateBar(".bar-defense", data.defense);
       animateBar(".bar-agility", data.agility);
       animateBar(".bar-hp", data.hp);
   }

   function animateBar(selector, value) {
      const bar = nextLayer.querySelector(selector);
      if (!bar) return;

  // Reset a 0 sin transición
      bar.style.transition = "none";
      bar.style.width = "0%";

  // Forzar repintado (truco mágico)
      void bar.offsetWidth;

  // Activar transición de nuevo
      bar.style.transition = "width 0.6s ease";
      bar.style.width = value + "%";
  }


     let currentCharacterId = null; // identificador del personaje actual


     document.querySelectorAll(".tumb-character-list").forEach(thumb => {
        thumb.addEventListener("click", () => {


         const data = {
            name: thumb.dataset.name,
            subtitle: thumb.dataset.subtitle,
            description: thumb.dataset.description,
            img: thumb.dataset.img,
            attack: thumb.dataset.attack,
            defense: thumb.dataset.defense,
            agility: thumb.dataset.agility,
            hp: thumb.dataset.hp,
        }

        const clickedId = thumb.dataset.name;
        if (clickedId === currentCharacterId) return;

        currentCharacterId = clickedId;
        document.querySelectorAll(".tumb-character-list").forEach(el => {
          el.classList.remove("active");
      });

                // Agregar 'active' al thumbnail clicado
        thumb.classList.add("active");


            //rellenar el next Layer
        fillCharacterContent(nextLayer, data);

            //CrossFade
        currentLayer.classList.remove("active");
        currentLayer.classList.add("inactive");

        nextLayer.classList.remove("inactive");
        nextLayer.classList.add("active");

            //intercamviar capas
        [currentLayer, nextLayer] = [nextLayer, currentLayer];

    })
    })

 });


//-------------------------------------------------------------------
// Zona Horaria UTC Y LOCAL
//-------------------------------------------------------------------

    document.addEventListener("DOMContentLoaded", () =>{
        const utcTimeEl = document.getElementById("utc-time");
        const utcDateEl = document.getElementById("utc-date");

        const localTimeEl = document.getElementById("local-time");
        const localDateEl = document.getElementById("local-date");

        function updateClock(){
            const now = new Date();

            const utcHours = String(now.getUTCHours()).padStart(2,'0');
            const utcMinutes = String(now.getUTCMinutes()).padStart(2,'0');


            const utcDateStr = now.toLocaleDateString("en-US", {
                timeZone: "UTC",
                month: "short",
                day: "2-digit",
                year: "numeric"

            });

            utcTimeEl.textContent = `${utcHours}:${utcMinutes}`;
            utcDateEl.textContent = `${utcDateStr} (UTC)`;

          //Local
            
            const localHours = String(now.getHours()).padStart(2,'0');
            const localMinutes = String(now.getMinutes()).padStart(2,'0');
            const localDateStr = now.toLocaleDateString("en-US",{
                timeZone:Intl.DateTimeFormat().resolvedOptions().timeZone,
                month:"short",
                day:"2-digit",
                year:"numeric"
            })

            const localZone = Intl.DateTimeFormat().resolvedOptions().timeZone;


            localTimeEl.textContent = `${localHours}:${localMinutes}`;
            localDateEl.textContent = `${localDateStr} (${localZone})`;


        }


        updateClock();

        setInterval(() => {
            updateClock()
        },1000);


    }) 


 //-------------------------------------------------------------------
// Intersec Observer
//-------------------------------------------------------------------



    function createObserver(callback, threshold = 0.3) {
        return new IntersectionObserver(callback, { threshold });
    }

    document.addEventListener("DOMContentLoaded", () => {

        const boxes = document.querySelectorAll(".box-observer");
        const observers = {};
        let observersActive = false;

        function handleIntersect(entries, observer) {
          entries.forEach(entry => {
            const el = entry.target;
            const delay = el.dataset.delay || 0;

            if (entry.isIntersecting && !el.classList.contains("visible")) {
              el.style.transitionDelay = `${delay}s`;
              el.classList.add("visible");
              observer.unobserve(el); // Solo se anima una vez
          }
      });
      }


      function activateObservers(){
        boxes.forEach(box => {
          const threshold = parseFloat(box.dataset.threshold) || 0.3;

    // Si no hay observer para este threshold, lo creamos y guardamos
          if (!observers[threshold]) {
            observers[threshold] = createObserver(handleIntersect, threshold);
        }

        observers[threshold].observe(box);
    });
        observersActive = true;
    }

    function deactivateObservers(){
       Object.values(observers).forEach(observer => observer.disconnect());
       boxes.forEach(box => {
        box.classList.remove("visible");
        box.style.transitionDelay = "0s";
    });
       observersActive = false;
   }

  function checkViewportAndToggleObservers(){
    const isDesktop = window.innerWidth > 991;
    if (isDesktop && !observersActive) {
        activateObservers();
    }else if(!isDesktop && observersActive){
        deactivateObservers();
    }
  }

  //initial
  checkViewportAndToggleObservers();

  window.addEventListener("resize",() => {
    checkViewportAndToggleObservers();
  })

       
    // Reset si vuelves al top (solo en modo desktop)
   window.addEventListener("scroll", () => {
    if (window.scrollY === 0) {
      boxes.forEach(box => {
        box.classList.remove("visible");
        box.style.transitionDelay = "0s";
    });

      // Re-observar con el threshold adecuado
      boxes.forEach(box => {
        const threshold = parseFloat(box.dataset.threshold) || 0.3;

        if (!observers[threshold]) {
          observers[threshold] = createObserver(handleIntersect, threshold);
      }

      observers[threshold].observe(box);
  });
  }
});
});