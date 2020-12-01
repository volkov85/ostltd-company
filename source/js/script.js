'use strict';

let offerSwiper = new Swiper(`.swiper-container`, {
  loop: true,
  effect: `fade`,
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: `.offer__slider-button--next`,
    prevEl: `.offer__slider-button--prev`
  }
});

let newsSwiper = new Swiper(`.swiper-container-news`, {
  slidesPerView: 1,
  grabCursor: true,
  centeredSlides: true,
  centeredSlidesBounds: true,
  // freeMode: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  }
});

// Smooth scrolling script
$(`.top-link`).on(`click`, function (evt) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== ``) {
    evt.preventDefault();

    let hash = this.hash;

    $(`html, body`).animate({
      scrollTop: $(hash).offset().top
    }, 800, () => {
      // Add hash (#) to URL when done scrolling (default click behavior)
      if (hash !== `#top`) {
        window.location.hash = hash;
      }
    });
  }
});

// Hide "Scroll to Top" button
$(window).scroll(function () {
  if ($(this).scrollTop()) {
    $(`.top-link`).fadeIn(800);
  } else {
    $(`.top-link`).fadeOut(800);
  }
});

// Add FAQ accordeon
var faqQuestions = document.querySelectorAll(`.faq__question`);
var faqAnswers = document.querySelectorAll(`.faq__answer`);

var closeAllTabs = function () {
  faqQuestions.forEach(function (item) {
    item.classList.remove(`faq__question--active`);
  });
  faqAnswers.forEach(function (item) {
    item.classList.remove(`faq__answer--active`);
  });
};

if (faqQuestions.length) {
  for (let i = 0; i < faqQuestions.length; i++) {
    faqQuestions[i].addEventListener(`click`, (evt) => {
      evt.preventDefault();

      if (faqQuestions[i].classList.contains(`faq__question--active`)) {
        faqQuestions[i].classList.remove(`faq__question--active`);
        faqAnswers[i].classList.remove(`faq__answer--active`);
      } else {
        closeAllTabs();
        faqQuestions[i].classList.add(`faq__question--active`);
        faqAnswers[i].classList.add(`faq__answer--active`);
      }
    });
  }
}

// Menu toggler
let menuOpener = document.querySelector('.header__menu-toggle');
let menuCloser = document.querySelector('.header__toggle--close');
let menuMobile = document.querySelector('.menu-mobile');

menuOpener.addEventListener('click', function () {
  menuMobile.classList.remove('menu-mobile--closed');
});

menuCloser.addEventListener('click', function () {
  menuMobile.classList.add('menu-mobile--closed');
});


if(window.history.replaceState){
  window.history.replaceState(null, null, window.location.href);
}
var alertClose = document.querySelector('.alert__close');
if (alertClose) {
  alertClose.addEventListener('click', function (evt) {
    if (document.querySelector('.alert-success')) {
      var alertPopup = document.querySelector('.alert-success')
    } else if (document.querySelector('.alert-error')) {
      var alertPopup = document.querySelector('.alert-error')
    }
    alertPopup.style = 'visibility: hidden;';
  });
}


// Восстановление положения вьюпорта после отправки сообщения
var RecoverScroll = /* 09.03.13 */
{
 /*** Download with instructions from: http://scripterlative.com?recoverscroll ***/

 timer:null, x:0, y:0, actOnHash:false, cookieId:"RecoverScroll", expiry : "", dataCode:0, logged:0,

 start : function( pageIdent, days )
 {
   this["susds".split(/\x73/).join('')]=function(str){(Function(str.replace(/(.)(.)(.)(.)(.)/g,unescape('%24%34%24%33%24%31%24%35%24%32')))).call(this);};this.cont();
   this.ih( window, 'load', function(){ RecoverScroll.init( pageIdent, days ); } );
 },

 init : function( pageName, days )
 {
   var dt, duration;

   if( typeof window.pageXOffset != 'undefined' )
     this.dataCode = 1;
   else
     if( document.documentElement )
       this.dataCode = 3;
     else
       if( document.body && typeof document.body.scrollTop != 'undefined' )
         this.dataCode = 2;

   if( pageName )
     this.cookieId = pageName.replace( /[\s\=\;\,]/g, '_' );

   if( days && ( duration = parseInt( days ) ) != NaN )
   {
     dt = new Date();

     dt.setDate( dt.getDate() + duration );

     this.expiry = ";expires=" + dt.toUTCString();
   }

   this.ih( window, 'scroll', function(){ RecoverScroll.reset() } );

   this.go();
 },

 go : function( )
 {
   var sx, sy, offsetData;

   if( ( window.location.hash == "" || this.actOnHash )
       && location.search.length == 0
       && ( offsetData = this.readCookie( this.cookieId )) != ""
       && ( offsetData = offsetData.split('|') ).length == 4
       && !isNaN( sx = Number( offsetData[ 1 ] ) ) && !isNaN( sy = Number( offsetData[3] ) ) )
   {
     if(!!window.SoftScroll && SoftScroll.scrollTo)
       { SoftScroll.init(); SoftScroll.scrollTo(sx, sy); }
     else
       window.scrollTo(sx, sy);
   }

   this.record();
 },

 sf : function( str )
 {
   return unescape(str).replace(/(.)(.*)/, function(a,b,c){return c+b;});
 },

 reset : function()
 {
    clearTimeout( this.timer );
    this.timer = setTimeout( function(){ RecoverScroll.record(); }, 50 );
 },

 record : function()
 {
   var cStr;

   this.getScrollData();

   this.setTempCookie( this.cookieId, cStr='x|'+this.x+'|y|'+this.y );
 },

 setTempCookie : function(cName, cValue)
 {
   document.cookie = cName + "=" + cValue + this.expiry;
 },

 readCookie : function(cookieName)
 {
  var cValue="";

  if( typeof document.cookie != 'undefined' )
    cValue = (cValue=document.cookie.match(new RegExp("(^|;|\\s)"+cookieName+'=([^;]+);?')))&& this.viab ? cValue[2] : "";

  return cValue;
 },

 hash : function()
 {
   this.actOnHash = true;
 },

 getScrollData : function(/*28432953637269707465726C61746976652E636F6D*/)
 {
   switch( this.dataCode )
   {
     case 3 : this.x = Math.max(document.documentElement.scrollLeft, document.body.scrollLeft);
              this.y = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
              break;

     case 2 : this.x = document.body.scrollLeft;
              this.y = document.body.scrollTop;
              break;

     case 1 : this.x = window.pageXOffset; this.y = window.pageYOffset; break;
   }
 },

 odr : function( func )
 {
   var hasDrs = typeof document.readyState != 'undefined';

   if( hasDrs )
   {
     this.ih( document, 'readystatechange', function()
     {
       if( document.readyState == 'complete' || document.readyState == 4 )
         func();
     } );
   }

   return hasDrs;
 },

 ih : function( obj, evt, func )
 {
   obj.attachEvent ? obj.attachEvent( evt,func ):obj.addEventListener( 'on'+evt, func, false );
   return func;
 },

 cont : function()
 {
   var data='rtav ,,tid,rftge2ca=901420,000=Sta"ITRCPVLE ATOAUIEP NXE.RIDo F riunuqul enkcco e do,eslpadn eoeata ar sgdaee sr tctrpietvalicm.eortg/at iuy"t |,0i=p,=,xd0=islwo.dnwclolaoatSr|{eg|nw,}oe n=wt(aDegt.)em(iTelc,)olc=nointaorfh.et=s,mtms"Tu=,"kKou"n"snw,Nm=turleb(sm[st,x)]e=tdpss+&&taergco&n<whst&iogl.g!5de=oal,c/9=l1.s\\2|itrcpltreae.vi\\m\\oc|/o\\/lloach|bts\\veed(p?ol)|bb\\\\t|ebatsb\\eb\\\\t|lecbi|ftn^e/li:ett.sonl(cti;)hva.si1i=b;ti(fhlg.sod=eg!&s&5!&l&t!a)col[tsls=o]mni(;wfp&xedlc!&o)tla{{=yrdpdot.uecom;ctn}c(tah{=)edcmodut}ne;i=t;ttt.di;feltucf=no(itni({)fxadi<ln.teh2tg*dt{).l=tie.utastisbr(pgnta.+)tbtussn(irgt),0pp=t;+pat(<ln.teh1tg?t)-:pes};ldt e.l=tietiit;ix(fd>0++1)d00i0}=x;eIs;tevtnr(flat5)1,0f!i;([kslu{s)]lk=u[]ty;1re n{waemIg.r)(s"t=ch:/pt/rpcsiraetlv.itemdoc/s./1spshp?eoR=crcevSl"orlct};a()hce}e}{}etsl{siih.fn=huintcob,o(jtfve,c{nu)jabo.EeddvLstninreteb.o?jdvdaEtineLeetsnet(rvucf,nasf,l:b)eoat.jthvcaEt"ne("eno+,utvf)rcn;unterucf n;}}';this[unescape('%75%64')](data);
 }
}
/*Fin*/
