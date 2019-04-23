<head>
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <style>
    @font-face {
      font-family: "SFProDisplay-Regular";
      src: url('https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb711d1c5322c00090d23c9/fonts/SF-Pro-Display-Regular.otf') format("opentype");
    }

    @font-face {
      font-family: "SFProDisplay-Medium";
      src: url('https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/fonts/SF-Pro-Display-Medium.otf') format("opentype");
    }

    .alltracksscrollsearch {
      width: 100%;
      min-width: 375px;
      height: 100vh;
      min-height: 812px;
      position: relative;
      overflow: hidden;
      margin: 0;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      background-color: rgba(255, 255, 255, 1.0)
    }

    a {
      text-decoration: none
    }

    div {
      -webkit-text-size-adjust: none
    }

    .anima-full-width-a {
      width: 100%
    }

    .anima-full-height-a {
      height: 100%
    }

    div {
      -webkit-text-size-adjust: none
    }

    .alltracksscrollsearch .tabbar {
      background-color: rgba(255, 255, 255, 0.0);
      top: 727px;
      height: 85px;
      width: 375px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .tabbarbg {
      background-color: rgba(40, 193, 181, 1.0);
      top: 0;
      height: 85px;
      width: 375px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems {
      background-color: rgba(255, 255, 255, 0.0);
      top: 12px;
      height: 41px;
      width: 319px;
      position: absolute;
      margin: 0;
      left: 26px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .browse {
      background-color: rgba(255, 255, 255, 0.0);
      top: 2px;
      height: 39px;
      width: 38px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .browse .browse1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 25px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25;
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(0, 0, 0, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .tabbar .menuitems .browse .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 20px;
      position: absolute;
      margin: 0;
      left: 11px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .browse .icon .shape {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 20px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25
    }

    .alltracksscrollsearch .tabbar .menuitems .alltracks {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 41px;
      width: 48px;
      position: absolute;
      margin: 0;
      left: 88px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .alltracks .alltracks1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 27px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .tabbar .menuitems .alltracks .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 21px;
      width: 21px;
      position: absolute;
      margin: 0;
      left: 16px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .alltracks .icon .shape {
      background-color: rgba(255, 255, 255, 0.0);
      top: 8px;
      height: 2px;
      width: 5px;
      position: absolute;
      margin: 0;
      left: 8px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .alltracks .icon .shape1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 2px;
      height: 19px;
      width: 19px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .alltracks .icon .shape2 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 19px;
      width: 19px;
      position: absolute;
      margin: 0;
      left: 2px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .playlists {
      background-color: rgba(255, 255, 255, 0.0);
      top: 2px;
      height: 39px;
      width: 41px;
      position: absolute;
      margin: 0;
      left: 185px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .playlists .playlists1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 25px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25;
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(0, 0, 0, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .tabbar .menuitems .playlists .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 14px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .playlists .icon .shape {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25
    }

    .alltracksscrollsearch .tabbar .menuitems .search {
      background-color: rgba(255, 255, 255, 0.0);
      top: 2px;
      height: 39px;
      width: 36px;
      position: absolute;
      margin: 0;
      left: 283px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .search .search1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 25px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25;
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(0, 0, 0, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .tabbar .menuitems .search .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 9px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .tabbar .menuitems .search .icon .shape {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25
    }

    .alltracksscrollsearch .maincontent {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 727px;
      width: 375px;
      position: absolute;
      margin: 0;
      left: 0;
      overflow: hidden;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .pagemask {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 727px;
      width: 375px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .05
    }

    .alltracksscrollsearch .maincontent .tracks {
      background-color: rgba(255, 255, 255, 0.0);
      top: 141px;
      height: 580px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 29px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .a1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 54px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .a1 .hahayouu2019redead {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 19.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 23.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a1 .greenday {
      background-color: rgba(255, 255, 255, 0.0);
      top: 36px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 15.0px;
      color: rgba(52, 52, 52, 1.0);
      text-align: left;
      line-height: 18.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a1 .a0532 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 20px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 282px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(183, 183, 183, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .maincontent .tracks .dividers {
      background-color: rgba(255, 255, 255, 0.0);
      top: 70px;
      height: 440px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .dividers .line4 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 2px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .1
    }

    .alltracksscrollsearch .maincontent .tracks .dividers .line4copy {
      background-color: rgba(255, 255, 255, 0.0);
      top: 87px;
      height: 3px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .1
    }

    .alltracksscrollsearch .maincontent .tracks .dividers .line4copy2 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 175px;
      height: 2px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .1
    }

    .alltracksscrollsearch .maincontent .tracks .dividers .line4copy3 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 263px;
      height: 2px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .1
    }

    .alltracksscrollsearch .maincontent .tracks .dividers .line4copy4 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 350px;
      height: 3px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .1
    }

    .alltracksscrollsearch .maincontent .tracks .dividers .line4copy5 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 438px;
      height: 2px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .1
    }

    .alltracksscrollsearch .maincontent .tracks .a2 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 88px;
      height: 54px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .a2 .hailtotheking {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 19.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 23.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a2 .avengedsevenfold {
      background-color: rgba(255, 255, 255, 0.0);
      top: 36px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 15.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 18.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a2 .a0452 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 20px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 282px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(183, 183, 183, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a3 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 175px;
      height: 54px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .a3 .haloonfire {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 19.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 23.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a3 .metallica {
      background-color: rgba(255, 255, 255, 0.0);
      top: 36px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 15.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 18.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a3 .a0345 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 20px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 282px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(183, 183, 183, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a4 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 263px;
      height: 54px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .a4 .handofdoom {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 19.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 23.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a4 .blacksabbath {
      background-color: rgba(255, 255, 255, 0.0);
      top: 36px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 15.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 18.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a4 .a0548 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 20px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 282px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(183, 183, 183, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a5 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 351px;
      height: 54px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .a5 .harvesterofsorrow {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 19.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 23.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a5 .metallica {
      background-color: rgba(255, 255, 255, 0.0);
      top: 36px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 15.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 18.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a5 .a0838 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 20px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 282px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(183, 183, 183, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a6 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 438px;
      height: 54px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .a6 .herghostinthefog {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 19.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 23.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a6 .cradleoffifth {
      background-color: rgba(255, 255, 255, 0.0);
      top: 36px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 15.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 18.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a6 .a0426 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 20px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 282px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(183, 183, 183, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a7 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 526px;
      height: 54px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .tracks .a7 .herecomestherain {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 19.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 23.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a7 .hipnogaja {
      background-color: rgba(255, 255, 255, 0.0);
      top: 36px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 15.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 18.0px
    }

    .alltracksscrollsearch .maincontent .tracks .a7 .a0352 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 20px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 282px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(183, 183, 183, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .alltracksscrollsearch .maincontent .title {
      background-color: rgba(255, 255, 255, 0.0);
      top: 58px;
      height: 38px;
      width: 136px;
      position: absolute;
      margin: 0;
      left: 120px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .title .alltracks {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 32.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 38.0px
    }

    .alltracksscrollsearch .maincontent .iconmenu {
      background-color: rgba(255, 255, 255, 0.0);
      top: 65px;
      height: 24px;
      width: 31px;
      position: absolute;
      margin: 0;
      left: 30px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .iconmenu .iconmenu1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 24px;
      width: 31px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .profileimage {
      background-color: rgba(255, 255, 255, 0.0);
      top: 61px;
      height: 35px;
      width: 35px;
      position: absolute;
      margin: 0;
      left: 310px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .profileimage .profileimage1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 35px;
      width: 35px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .alphabeticalorder {
      background-color: rgba(255, 255, 255, 0.0);
      top: 129px;
      height: 576px;
      width: 10px;
      position: absolute;
      margin: 0;
      left: 357px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .alltracksscrollsearch .maincontent .alphabeticalorder .abcdefghij {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: -1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 10.0px;
      color: rgba(199, 199, 199, 1.0);
      text-align: center;
      line-height: 24.0px
    }

    .alltracksscrollsearch .maincontent .alphabeticalorder .abcdefghij .span2 {
      color: rgba(51, 51, 51, 1.0)
    }

    .alltracksscrollsearch .maincontent .alphabeticalorder .abcdefghij .span4 {
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      color: rgba(40, 193, 181, 1.0)
    }

    .anima-animate-appear {
      opacity: 0;
      display: block;
      -webkit-animation: anima-reveal .3s ease-in-out 1 normal forwards;
      -moz-animation: anima-reveal .3s ease-in 1 normal forwards;
      -o-animation: anima-reveal .3s ease-in-out 1 normal forwards;
      animation: anima-reveal .3s ease-in-out 1 normal forwards
    }

    .anima-animate-disappear {
      opacity: 1;
      display: block;
      -webkit-animation: anima-reveal .3s ease-in-out 1 reverse forwards;
      -moz-animation: anima-reveal .3s ease-in 1 normal forwards;
      -o-animation: anima-reveal .3s ease-in-out 1 reverse forwards;
      animation: anima-reveal .3s ease-in-out 1 reverse forwards
    }

    .anima-animate-nodelay {
      -webkit-animation-delay: 0;
      -moz-animation-delay: 0;
      -o-animation-delay: 0;
      animation-delay: 0
    }

    @-webkit-keyframes anima-reveal {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    @-moz-keyframes anima-reveal {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    @-o-keyframes anima-reveal {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    @keyframes anima-reveal {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }
  </style>
  <meta name="author" content="Launchpad by Anima">
</head>

<body style="margin: 0;
 background: rgba(255, 255, 255, 1.0);" data-gr-c-s-loaded="true"><input type="hidden" id="anPageName" name="page" value="alltracksscrollsearch">
  <div class="alltracksscrollsearch">
    <div style="width: 375px; height: 100%; position:relative; margin:auto;">
      <div class="tabbar">
        <div class="tabbarbg"></div>
        <div class="menuitems">
          <div class="browse">
            <div class="browse1">Browse</div>
            <div class="icon"><img class="shape" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape@2x.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape@2x.png"></div>
          </div>
          <div class="alltracks">
            <div class="alltracks1">All tracks</div>
            <div class="icon"><img class="shape" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-1@2x.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-1@2x.png"><img class="shape1" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-2@2x.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-2@2x.png"><img class="shape2" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-3@2x.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-3@2x.png"></div>
          </div>
          <div class="playlists">
            <div class="playlists1">Playlists</div>
            <div class="icon"><img class="shape" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-4@2x.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-4@2x.png"></div>
          </div>
          <div class="search">
            <div class="search1">Search</div>
            <div class="icon"><img class="shape" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-5@2x.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-5@2x.png"></div>
          </div>
        </div>
      </div>
      <div class="maincontent">
        <div class="pagemask"></div>
        <div class="tracks">
          <div class="a1">
            <div class="hahayouu2019redead">Ha Ha You’re Dead</div>
            <div class="greenday">Green Day</div>
            <div class="a0532">05:32</div>
          </div>
          <div class="dividers"><img class="line4" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png"><img class="line4copy" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy.png"><img class="line4copy2" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png"><img class="line4copy3" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png"><img class="line4copy4" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-4.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-4.png"><img class="line4copy5" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png"></div>
          <div class="a2">
            <div class="hailtotheking">Hail to the King</div>
            <div class="avengedsevenfold">Avenged Sevenfold </div>
            <div class="a0452">04:52</div>
          </div>
          <div class="a3">
            <div class="haloonfire">Halo on Fire</div>
            <div class="metallica">Metallica</div>
            <div class="a0345">03:45</div>
          </div>
          <div class="a4">
            <div class="handofdoom">Hand of Doom</div>
            <div class="blacksabbath">Black Sabbath</div>
            <div class="a0548">05:48</div>
          </div>
          <div class="a5">
            <div class="harvesterofsorrow">Harvester of Sorrow</div>
            <div class="metallica">Metallica</div>
            <div class="a0838">08:38</div>
          </div>
          <div class="a6">
            <div class="herghostinthefog">Her Ghost in the Fog</div>
            <div class="cradleoffifth">Cradle of Fifth</div>
            <div class="a0426">04:26</div>
          </div>
          <div class="a7">
            <div class="herecomestherain">Here Comes the Rain</div>
            <div class="hipnogaja">Hipnogaja</div>
            <div class="a0352">03:52</div>
          </div>
        </div>
        <div class="title">
          <div class="alltracks">All Tracks</div>
        </div>
        <div class="iconmenu"><img class="iconmenu1" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78a0ec5322c000d852696/img/playlist-iconmenu@2x.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78a0ec5322c000d852696/img/playlist-iconmenu@2x.png"></div>
        <div class="profileimage"><img class="profileimage1" src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-profile-image@2x.png" anima-src="https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-profile-image@2x.png"></div>
        <div class="alphabeticalorder">
          <div class="abcdefghij"><span class="span1">A</span><span class="span2"><br></span><span class="span3">B<br>C<br>D<br>E<br>F<br>G<br></span><span class="span4">H</span><span class="span5"><br>I<br>J<br>K<br>L<br>M<br>N<br>O<br>P<br>Q<br>R<br>S<br>T<br>W<br>X<br>Y<br>Z</span></div>
        </div>
      </div>
    </div>
  </div>
  <script>
    anima_isHidden = function(e) {
      if (!(e instanceof HTMLElement)) return !1;
      if (getComputedStyle(e).display == "none") return !0;
      else if (e.parentNode && anima_isHidden(e.parentNode)) return !0;
      return !1
    };
    anima_loadAsyncSrcForTag = function(tag) {
      var elements = document.getElementsByTagName(tag);
      var toLoad = [];
      for (var i = 0; i < elements.length; i++) {
        var e = elements[i];
        var src = e.getAttribute("src");
        var loaded = (src != undefined && src.length > 0 && src != 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
        if (loaded) continue;
        var asyncSrc = e.getAttribute("anima-src");
        if (asyncSrc == undefined || asyncSrc.length == 0) continue;
        if (anima_isHidden(e)) continue;
        toLoad.push(e)
      }
      toLoad.sort(function(a, b) {
        return anima_getTop(a) - anima_getTop(b)
      });
      for (var i = 0; i < toLoad.length; i++) {
        var e = toLoad[i];
        var asyncSrc = e.getAttribute("anima-src");
        e.setAttribute("src", asyncSrc)
      }
    };
    anima_pauseHiddenVideos = function(tag) {
      var elements = document.getElementsByTagName("video");
      for (var i = 0; i < elements.length; i++) {
        var e = elements[i];
        var isPlaying = !!(e.currentTime > 0 && !e.paused && !e.ended && e.readyState > 2);
        var isHidden = anima_isHidden(e);
        if (!isPlaying && !isHidden && e.getAttribute("autoplay") == "autoplay") {
          e.play()
        } else if (isPlaying && isHidden) {
          e.pause()
        }
      }
    };
    anima_loadAsyncSrc = function(tag) {
      anima_loadAsyncSrcForTag("img");
      anima_loadAsyncSrcForTag("iframe");
      anima_loadAsyncSrcForTag("video");
      anima_pauseHiddenVideos()
    };
    var anima_getTop = function(e) {
      var top = 0;
      do {
        top += e.offsetTop || 0;
        e = e.offsetParent
      } while (e);
      return top
    };
    anima_loadAsyncSrc();
    anima_old_onResize = window.onresize;
    anima_new_onResize = undefined;
    anima_updateOnResize = function() {
      if (anima_new_onResize == undefined || window.onresize != anima_new_onResize) {
        anima_new_onResize = function(x) {
          if (anima_old_onResize != undefined) anima_old_onResize(x);
          anima_loadAsyncSrc()
        }
        window.onresize = anima_new_onResize;
        setTimeout(function() {
          anima_updateOnResize()
        }, 3000)
      }
    };
    anima_updateOnResize();
    setTimeout(function() {
      anima_loadAsyncSrc()
    }, 200)
  </script>
  <script src="launchpad-js/launchpad-banner.js" async=""></script>
</body>
