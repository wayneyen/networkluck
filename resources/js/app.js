require('./bootstrap')
import 'alpinejs'

// setup theme
var theme = window.localStorage.theme

if (theme === '') {
  if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    theme = 'dark'
  } else {
    theme = 'light'
  }
}

window.switchTheme = () => {
  let htmlClasses = document.querySelector('html').classList
  let themeSwitcherClasses = document.getElementById('themeSwitcher').classList

  htmlClasses.toggle('light')
  htmlClasses.toggle('dark')
  themeSwitcherClasses.toggle('text-gray-400')
  themeSwitcherClasses.toggle('text-yellow-400')

  if (theme === 'light') {
    theme = 'dark'
  } else if (theme === 'dark') {
    theme = 'light'
  }

  window.localStorage.theme = theme
}

window.menu = function() {
  return {
    open: false,
    goto(dom) {
      if (window.screen.width >= 1024) {
        const domOffsetTop = document.getElementById(dom).offsetTop
        const headerOffsetHeight = document.getElementById('header').offsetHeight
        window.scrollTo({
          top: domOffsetTop - headerOffsetHeight,
          left: 0,
          behavior: 'smooth'
        })
      } else {
        this.open = false
        this.$nextTick(() => { location.href = '#' + dom })
      }
    }
  }
}

window.goto1111 = (dom) => {
  console.log(dom)
  this.open = false
  // const domOffsetTop = document.getElementById(dom).offsetTop
  // const headerOffsetHeight = window.screen.width >= 1024 ? document.getElementById('header').offsetHeight : 0
  // document.getElementById(dom).scrollIntoView(true)
  // window.scrollTo({
  //   top: domOffsetTop - headerOffsetHeight,
  //   left: 0,
  //   behavior: 'smooth'
  // })
}

(function() {
  if (theme === 'dark') {
    let htmlClasses = document.querySelector('html').classList
    htmlClasses.add('dark')
  } else {
    let themeSwitcherClasses = document.getElementById('themeSwitcher').classList
    themeSwitcherClasses.toggle('text-gray-400')
    themeSwitcherClasses.toggle('text-yellow-400')
  }
})()

