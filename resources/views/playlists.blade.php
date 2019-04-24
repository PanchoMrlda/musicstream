<!DOCTYPE html>

<!-- To get the source code upgrade to a Pro plan and Export code https://www.animaapp.com/pricing - Sample Exported Code: https://medium.com/sketch-app-sources/how-to-export-sketch-to-html-65c427b3aa3a -->


<html>

<head>
  <link rel="shortcut icon" type=image/png href=https://animaproject.s3.amazonaws.com/home/favicon.png> <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <style>
    @font-face {
      font-family: "SFProDisplay-Regular";
      src: url('https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb711d1c5322c00090d23c9/fonts/SF-Pro-Display-Regular.otf') format("opentype");
    }

    @font-face {
      font-family: "SFProDisplay-Medium";
      src: url('https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/fonts/SF-Pro-Display-Medium.otf') format("opentype");
    }

    .playlist {
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

    .playlist .tabbar {
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

    .playlist .tabbar .tabbarbg {
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

    .playlist .tabbar .menuitems {
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

    .playlist .tabbar .menuitems .browse {
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

    .playlist .tabbar .menuitems .browse .browse1 {
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
      line-height: 14.0px;
      white-space: nowrap;
    }

    .playlist .tabbar .menuitems .browse .icon {
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

    .playlist .tabbar .menuitems .browse .icon .shape {
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

    .playlist .tabbar .menuitems .alltracks {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 41px;
      width: 46px;
      position: absolute;
      margin: 0;
      left: 89px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .tabbar .menuitems .alltracks .alltracks1 {
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
      opacity: .25;
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(0, 0, 0, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .playlist .tabbar .menuitems .alltracks .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 21px;
      width: 21px;
      position: absolute;
      margin: 0;
      left: 15px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .85
    }

    .playlist .tabbar .menuitems .alltracks .icon .shape {
      background-color: rgba(255, 255, 255, 0.0);
      top: 8px;
      height: 2px;
      width: 5px;
      position: absolute;
      margin: 0;
      left: 8px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25
    }

    .playlist .tabbar .menuitems .alltracks .icon .shape1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 2px;
      height: 19px;
      width: 19px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25
    }

    .playlist .tabbar .menuitems .alltracks .icon .shape2 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 19px;
      width: 19px;
      position: absolute;
      margin: 0;
      left: 2px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .25
    }

    .playlist .tabbar .menuitems .playlists {
      background-color: rgba(255, 255, 255, 0.0);
      top: 2px;
      height: 39px;
      width: 43px;
      position: absolute;
      margin: 0;
      left: 184px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .tabbar .menuitems .playlists .playlists1 {
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
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .playlist .tabbar .menuitems .playlists .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 15px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .tabbar .menuitems .playlists .icon .shape {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .tabbar .menuitems .search {
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

    .playlist .tabbar .menuitems .search .search1 {
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

    .playlist .tabbar .menuitems .search .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 9px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .85
    }

    .playlist .tabbar .menuitems .search .icon .shape {
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

    .playlist .maincontent {
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

    .playlist .maincontent .pagemask {
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

    .playlist .maincontent .songs {
      background-color: rgba(255, 255, 255, 0.0);
      top: 276px;
      height: 510px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 29px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a1playing {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 54px;
      width: 316px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a1playing .inismona {
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
      color: rgba(40, 193, 181, 1.0);
      text-align: left;
      line-height: 23.0px
    }

    .playlist .maincontent .songs .a1playing .eluveitie {
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
      color: rgba(40, 193, 181, 1.0);
      text-align: left;
      line-height: 18.0px
    }

    .playlist .maincontent .songs .a1playing .pause {
      background-color: rgba(255, 255, 255, 0.0);
      top: 8px;
      height: 38px;
      width: 38px;
      position: absolute;
      margin: 0;
      left: 278px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a1playing .pause .oval {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 38px;
      width: 38px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a1playing .pause .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 12px;
      height: 14px;
      width: 10px;
      position: absolute;
      margin: 0;
      left: 14px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a1playing .pause .icon .line {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 14px;
      width: 4px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a1playing .pause .icon .linecopy {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 14px;
      width: 4px;
      position: absolute;
      margin: 0;
      left: 6px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a2 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 88px;
      height: 54px;
      width: 182px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a2 .hallowedbethyname {
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

    .playlist .maincontent .songs .a2 .ironmaiden {
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

    .playlist .maincontent .songs .a3 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 175px;
      height: 54px;
      width: 81px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a3 .tillwedie {
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

    .playlist .maincontent .songs .a3 .slipknot {
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

    .playlist .maincontent .songs .a4 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 263px;
      height: 54px;
      width: 110px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a4 .fadetoblack {
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

    .playlist .maincontent .songs .a4 .metallica {
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

    .playlist .maincontent .songs .a5 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 351px;
      height: 54px;
      width: 109px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a5 .paradisecity {
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

    .playlist .maincontent .songs .a5 .gunsnroses {
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

    .playlist .maincontent .songs .a6 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 438px;
      height: 54px;
      width: 173px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .songs .a6 .herecomestherain {
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

    .playlist .maincontent .songs .a6 .hypnogaja {
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

    .playlist .maincontent .songs .dividers {
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

    .playlist .maincontent .songs .dividers .line4 {
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

    .playlist .maincontent .songs .dividers .line4copy {
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

    .playlist .maincontent .songs .dividers .line4copy2 {
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

    .playlist .maincontent .songs .dividers .line4copy3 {
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

    .playlist .maincontent .songs .dividers .line4copy4 {
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

    .playlist .maincontent .songs .dividers .line4copy5 {
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

    .playlist .maincontent .lists {
      background-color: rgba(255, 255, 255, 0.0);
      top: 136px;
      height: 119px;
      width: 425px;
      position: absolute;
      margin: 0;
      left: 18px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .fav {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 119px;
      width: 119px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .fav .oval6 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 119px;
      width: 119px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .fav .fav1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 38px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 43px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 20.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 24.0px
    }

    .playlist .maincontent .lists .rock {
      background-color: rgba(255, 255, 255, 0.0);
      top: 4px;
      height: 95px;
      width: 95px;
      position: absolute;
      margin: 0;
      left: 122px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .rock .oval6 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 95px;
      width: 95px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .rock .rock1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 34px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 25px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 20.0px;
      color: rgba(40, 193, 181, 1.0);
      text-align: left;
      line-height: 24.0px
    }

    .playlist .maincontent .lists .folk {
      background-color: rgba(255, 255, 255, 0.0);
      top: 4px;
      height: 95px;
      width: 95px;
      position: absolute;
      margin: 0;
      left: 232px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .folk .oval6 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 95px;
      width: 95px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .folk .folk1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 34px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 28px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 20.0px;
      color: rgba(40, 193, 181, 1.0);
      text-align: left;
      line-height: 24.0px
    }

    .playlist .maincontent .lists .pop {
      background-color: rgba(255, 255, 255, 0.0);
      top: 4px;
      height: 95px;
      width: 95px;
      position: absolute;
      margin: 0;
      left: 342px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .pop .oval6 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 95px;
      width: 95px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .lists .pop .pop1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 34px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 30px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
      font-size: 20.0px;
      color: rgba(255, 89, 117, 1.0);
      text-align: left;
      line-height: 24.0px
    }

    .playlist .maincontent .title {
      background-color: rgba(255, 255, 255, 0.0);
      top: 58px;
      height: 38px;
      width: 99px;
      position: absolute;
      margin: 0;
      left: 138px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .title .playlist1 {
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

    .playlist .maincontent .profileimage {
      background-color: rgba(255, 255, 255, 0.0);
      top: 62px;
      height: 35px;
      width: 35px;
      position: absolute;
      margin: 0;
      left: 310px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .playlist .maincontent .profileimage .profileimage1 {
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

    .playlist .maincontent .iconmenu {
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

    .playlist .maincontent .iconmenu .iconmenu1 {
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
  <meta name=author content="Launchpad by Anima">
</head>

<body style="margin: 0;
 background: rgba(255, 255, 255, 1.0);"><input type=hidden id=anPageName name=page value=playlist>
  <div class=playlist>
    <div style="width: 375px; height: 100%; position:relative; margin:auto;">
      <div class=tabbar>
        <div class=tabbarbg></div>
        <div class=menuitems>
          <div class=browse>
            <a href="topHits">
              <div class=browse1>Top Hits</div>
              <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape@2x.png> </div> </div> <div class=alltracks>
            </a>
            <a href="allTracks">
              <div class=alltracks1>All tracks</div>
              <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-shape-1@2x.png> <img class=shape1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-shape-2@2x.png> <img class=shape2 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-shape-3@2x.png> </div> </div> <div class=playlists>
            </a>
            <a href="playlists">
              <div class=playlists1>Playlists</div>
              <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-shape-4@2x.png> </div> </div> <div class=search>
            </a>
            <div class=search1>Search</div>
            <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-5@2x.png> </div> </div> </div> </div> <div class=maincontent>
              <div class=pagemask></div>
              <div class=songs>
                <div class=a1playing>
                  <div class=inismona>Inis Mona</div>
                  <div class=eluveitie>Eluveitie</div>
                  <div class=pause><img class=oval src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb73862c5322c00090d265e/img/playlist-oval@2x.png> <div class=icon><img class=line src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb73862c5322c00090d265e/img/playlist-line-copy@2x.png> <img class=linecopy src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb73862c5322c00090d265e/img/playlist-line-copy@2x.png> </div> </div> </div> <div class=a2>
                    <div class=hallowedbethyname>Hallowed be thy name</div>
                    <div class=ironmaiden>Iron Maiden</div>
                  </div>
                  <div class=a3>
                    <div class=tillwedie>Till we die</div>
                    <div class=slipknot>Slipknot</div>
                  </div>
                  <div class=a4>
                    <div class=fadetoblack>Fade to black</div>
                    <div class=metallica>Metallica</div>
                  </div>
                  <div class=a5>
                    <div class=paradisecity>Paradise City</div>
                    <div class=gunsnroses>Guns n Roses</div>
                  </div>
                  <div class=a6>
                    <div class=herecomestherain>Here Comes the Rain</div>
                    <div class=hypnogaja>Hypnogaja</div>
                  </div>
                  <div class=dividers><img class=line4 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> <img class=line4copy src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy.png> <img class=line4copy2 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> <img class=line4copy3 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> <img class=line4copy4 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-4.png> <img class=line4copy5 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> </div> </div> <div class=lists>
                    <div class=fav><img class=oval6 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb73862c5322c00090d265e/img/playlist-oval-6@2x.png> <div class=fav1>Fav</div>
                  </div>
                  <div class=rock><img class=oval6 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb73862c5322c00090d265e/img/playlist-oval-6-2@2x.png> <div class=rock1>Rock</div>
                </div>
                <div class=folk><img class=oval6 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb73862c5322c00090d265e/img/playlist-oval-6-2@2x.png> <div class=folk1>Folk</div>
              </div>
              <div class=pop><img class=oval6 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb73862c5322c00090d265e/img/playlist-oval-6-2@2x.png> <div class=pop1>Pop</div>
            </div>
          </div>
          <div class=title>
            <div class=playlist1>Playlist</div>
          </div>
          <div class=profileimage><img class=profileimage1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-profile-image@2x.png> </div> <div class=iconmenu><img class=iconmenu1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78a0ec5322c000d852696/img/playlist-iconmenu@2x.png> </div> </div> </div> </div> <script>anima_isHidden=function(e){if(!(e instanceof HTMLElement))return!1;if(getComputedStyle(e).display=="none")return!0;else if(e.parentNode&&anima_isHidden(e.parentNode))return!0;return!1};anima_loadAsyncSrcForTag=function(tag){var elements=document.getElementsByTagName(tag);var toLoad=[];for(var i=0;i<elements.length;i++){var e=elements[i];var src=e.getAttribute("src");var loaded=(src!=undefined&&src.length>0&&src!='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');if(loaded)continue;var asyncSrc=e.getAttribute("anima-src");if(asyncSrc==undefined||asyncSrc.length==0)continue;if(anima_isHidden(e))continue;toLoad.push(e)}
              toLoad.sort(function(a,b){return anima_getTop(a)-anima_getTop(b)});for(var i=0;i<toLoad.length;i++){var e=toLoad[i];var asyncSrc=e.getAttribute("anima-src");e.setAttribute("src",asyncSrc)}};anima_pauseHiddenVideos=function(tag){var elements=document.getElementsByTagName("video");for(var i=0;i<elements.length;i++){var e=elements[i];var isPlaying=!!(e.currentTime>0&&!e.paused&&!e.ended&&e.readyState>2);var isHidden=anima_isHidden(e);if(!isPlaying&&!isHidden&&e.getAttribute("autoplay")=="autoplay"){e.play()}
                else if(isPlaying&&isHidden){e.pause()}}};anima_loadAsyncSrc=function(tag){anima_loadAsyncSrcForTag("img");anima_loadAsyncSrcForTag("iframe");anima_loadAsyncSrcForTag("video");anima_pauseHiddenVideos()};var anima_getTop=function(e){var top=0;do{top+=e.offsetTop||0;e=e.offsetParent}while(e);return top};anima_loadAsyncSrc();anima_old_onResize=window.onresize;anima_new_onResize=undefined;anima_updateOnResize=function(){if(anima_new_onResize==undefined||window.onresize!=anima_new_onResize){anima_new_onResize=function(x){if(anima_old_onResize!=undefined)anima_old_onResize(x);anima_loadAsyncSrc()}
                window.onresize=anima_new_onResize;setTimeout(function(){anima_updateOnResize()},3000)}};anima_updateOnResize();setTimeout(function(){anima_loadAsyncSrc()},200)</script>
                <script src=launchpad-js/launchpad-banner.js async></script>
</body>

</html>