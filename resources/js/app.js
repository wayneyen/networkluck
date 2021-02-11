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

