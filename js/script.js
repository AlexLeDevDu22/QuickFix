//navbar
var leftbarActive=false;
function navbarScroll() {
  let currentScrollPos = window.scrollY;
  const containerHightNavbar = document.getElementById("container-hight-navbar");
  const containerWhiteNavbar = document.getElementById("container-white-navbar");
  const containerWhiteDownNavbar = document.getElementById("container-white-navbar-down");
  const containerWhiteHightNavbar = document.getElementById("container-white-navbar-hight")
  console.log(currentScrollPos)
  if (currentScrollPos < 200) {
    containerWhiteNavbar.style.right="100%";
    containerHightNavbar.style.left=0
    if (leftbarActive==false){
      highNavbar.classList.remove("with-leftbar")
      highNavbar.style.left="";
    } else {
      highNavbar.classList.add("with-leftbar")
    }
  } else {
    containerWhiteNavbar.style.right="0";
    containerHightNavbar.style.left = "100%";
    containerWhiteHightNavbar.style.left=""
    if (leftbarActive==false){
      containerWhiteHightNavbar.classList.remove("with-leftbar")
    } else {
      containerWhiteHightNavbar.classList.add("with-leftbar")
    }
  }
  if (currentScrollPos>200 && currentScrollPos>400 && leftbarActive==false) {
    containerWhiteDownNavbar.style.left = 0;
  } else {
    containerWhiteDownNavbar.style.left = "200%";
  }
}
//showing left navbar
const hightHamburgerButton=document.getElementById('hight-hamburger-button')
const containerWhiteHamburgerButton=document.getElementById('container-white-hamburger-button')
const leftNavbar=document.getElementById('left-navbar')
const highNavbar=document.getElementById('container-hight-navbar')
const whiteNavbarHight=document.getElementById('container-white-navbar-hight')
const whiteNavbarDown=document.getElementById('container-white-navbar-down')
hightHamburgerButton.addEventListener('click', function() {
  leftNavbar.classList.add('active');
  hightHamburgerButton.style.opacity=0;
  containerWhiteHamburgerButton.style.opacity=0;
  hightHamburgerButton.style.display="none";
  containerWhiteHamburgerButton.style.display="none";
  highNavbar.classList.add("with-leftbar")
  whiteNavbarDown.style.opacity=0;
  leftbarActive=true;
});
containerWhiteHamburgerButton.addEventListener('click', function() {
  leftNavbar.classList.add('active');
  containerWhiteHamburgerButton.style.opacity=0;
  hightHamburgerButton.style.opacity=0;
  containerWhiteHamburgerButton.style.display="none";
  hightHamburgerButton.style.display='none';
  whiteNavbarHight.classList.add("with-leftbar")
  whiteNavbarDown.style.opacity=0;
  leftbarActive=true;
});
document.getElementById('close-btn').addEventListener('click', function() {
  leftNavbar.classList.remove('active');
  highNavbar.classList.remove('with-leftbar');
  whiteNavbarHight.classList.remove("with-leftbar")
  hightHamburgerButton.style.opacity=1;
  containerWhiteHamburgerButton.style.opacity=1;
  hightHamburgerButton.style.display="";
  containerWhiteHamburgerButton.style.display='';
  whiteNavbarDown.style.opacity=1;
  leftbarActive=false;
});
//popular service showing
const popularsServicesShowing = function() {
    const handleIntersection = function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.intersectionRatio >= 1) {
                entry.target.classList.add("main-title-visible");
                observer.unobserve(entry.target);
            }
        });
    };

    document.querySelectorAll(".main-title-invisible").forEach(function(element) {
        const observer = new IntersectionObserver((entries) => handleIntersection(entries, observer), { root: null, rootMargin: "0px", threshold: 1 });
        observer.observe(element);
    });
};
//popular service deplacement
function scrollLeft() {
    function animate() {
        document.querySelector(".container-populars-proAsks-mooving").style.right = window.scrollY/4+"px";
        requestAnimationFrame(animate);
    }
    animate();
}
//adding in EventListener
document.addEventListener("DOMContentLoaded", function() {
    popularsServicesShowing();
    scrollLeft();
    window.onscroll = navbarScroll;
})



//tempo
window.addEventListener('load', function() {
    // Utilisez window.scrollTo pour faire défiler jusqu'en bas
    //window.scrollTo(0, document.body.scrollHeight);
  });