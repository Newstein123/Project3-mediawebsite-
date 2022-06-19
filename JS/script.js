// slider 

  const sliderContainer = document.querySelector('.slide-container')
const sliderRight = document.querySelector('.right-slide')
const sliderLeft = document.querySelector('.left-slide')
const sliderUpbutton = document.querySelector('.up-button')
const sliderDownbutton = document.querySelector('.down-button')
const sliderLength = sliderRight.querySelectorAll('div').length

let activeSlideindex =0;

sliderLeft.style.top = `-${(sliderLength-1) *100}vh`;

sliderUpbutton.addEventListener('click', () =>
  changeSlide('up')) 
sliderDownbutton.addEventListener('click', () =>
  changeSlide('down')) 


const changeSlide = (direction) => {

  const sliderHeight = sliderContainer.clientHeight
  console.log(sliderHeight)

  if(direction === 'up') {
      activeSlideindex++
      if(activeSlideindex > sliderLength - 1) {
          activeSlideindex = 0
      }
       }
    else if(direction === 'down') {
          activeSlideindex--
      if(activeSlideindex < 0) {
          activeSlideindex = sliderLength -1
      }
  }
  sliderRight.style.transform = `translateY(-${activeSlideindex * sliderHeight}px)`
  sliderLeft.style.transform = `translateY(${activeSlideindex * sliderHeight}px)`
}

  // Arrow 

window.onscroll = () => {
  if (window.scrollY >= 400) {
    document.querySelector(".arrow").style.opacity = "1";
  } else {
    document.querySelector(".arrow").style.opacity = "0";
  }
}
document.querySelector(".arrow").onclick = () => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
}
