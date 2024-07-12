
document.addEventListener("DOMContentLoaded", function () {
  // استهداف العنصر الذي سيتم إخفاؤه
  var elementToHide = document.getElementById('elementToHide');

  // إخفاء العنصر بعد 3 ثوانٍ
  setTimeout(function () {
    elementToHide.style.display = 'none'; // إخفاء العنصر بتعيين display إلى 'none'
  }, 3000); // بعد 3 ثوانٍ

  // استهداف العنصر الذي سيتم عرضه
  var elementToAnimate = document.getElementById('elementToAnimate');

  // عرض العنصر بعد 3 ثوانٍ
  setTimeout(function () {
    elementToAnimate.classList.remove('hidden'); // إزالة الكلاس 'hidden' لعرض العنصر
  }, 3000); // بعد 3 ثوانٍ
});
$(document).ready(function () {
  setTimeout(function () {
    $('#part1').addClass('animate__fadeOutDown').one('animationend', function () {
      $(this).addClass('hidden');
      $('#part2').removeClass('hidden').addClass('animate__fadeInDown');
    });
  }, 2500); // 3000 ميلي ثانية (3 ثواني)
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var img = document.querySelector('.img1');
    img.classList.add('visible');
  }, 1000); // 3000 milliseconds = 3 seconds
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var img = document.querySelector('.img4');
    img.classList.add('visible');
  }, 1000);
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var img = document.querySelector('.img5');
    img.classList.add('visible');
  }, 2000);
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var img = document.querySelector('.img2');
    img.classList.add('visible');
  }, 2000);
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var img = document.querySelector('.img3');
    img.classList.add('visible');
  }, 3000);
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var img = document.querySelector('.img6');
    img.classList.add('visible');
  }, 3000);
});

AOS.init();
