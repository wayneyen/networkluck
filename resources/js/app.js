require('./bootstrap')
import 'alpinejs'

import { createApp } from 'vue'
import PriceTable from './components/price-table.vue'
createApp({
  components: {
    PriceTable: PriceTable
  }
}).mount('#price')

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

window.menu = () => {
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
        window.history.pushState('', '', '#' + dom)
      } else {
        this.open = false
        this.$nextTick(() => { location.href = '#' + dom })
      }
    }
  }
}

window.mycase = () => {
  return {
    cases: [
      { name: '凡豆伴', img: '/images/fandou.png', href: 'javascript: void(0)', target: '_self' },
      { name: '仕達威', img: '/images/shidawei.png', href: 'javascript: void(0)', target: '_self' },
      { name: '先天下', img: '/images/goldfish.png', href: 'javascript: void(0)', target: '_self' },
      { name: '文湖寶翠', img: '/images/web33.jpg', href: 'https://www.bestwonhu.com/', target: '_blank' },
      { name: 'ELBAMOTOR', img: '/images/web36.jpg', href: 'https://www.elba-union.com/', target: '_blank' },
      { name: '麗晶診所', img: '/images/web23.jpg', href: 'https://www.regentbeauty.com.tw/', target: '_blank' },
      { name: '研醫明美學', img: '/images/web24.jpg', href: 'https://www.yanyim.com/', target: '_blank' },
      { name: '朱冠州皮膚科', img: '/images/web28.jpg', href: 'javascript: void(0)', target: '_self' },
      { name: '微笑特攻隊', img: '/images/web06.jpg', href: 'javascript: void(0)', target: '_self' },
      { name: 'Iseeyou 摩力無限', img: '/images/web25.jpg', href: 'javascript: void(0)', target: '_self' },
      { name: '安泰眼科', img: '/images/web43.jpg', href: 'http://www.entie.com.tw/', target: '_blank' },
      { name: '長青牙醫聯盟', img: '/images/web38.jpg', href: 'javascript: void(0)', target: '_self' },
      { name: '渔夫之宝', img: '/images/web17.jpg', href: 'javascript: void(0)', target: '_self' },
      { name: '英特有限公司', img: '/images/web55.jpg', href: 'javascript: void(0)', target: '_self' },
      { name: '創業大道加盟', img: '/images/web60.jpg', href: 'javascript: void(0)', target: '_self' }
    ]
  }
}

if (theme === 'dark') {
  let htmlClasses = document.querySelector('html').classList
  htmlClasses.add('dark')
} else {
  let themeSwitcherClasses = document.getElementById('themeSwitcher').classList
  themeSwitcherClasses.toggle('text-gray-400')
  themeSwitcherClasses.toggle('text-yellow-400')
}

(function() {

})()

