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

    .alltracks {
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

    .alltracks .tabbar {
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

    .alltracks .tabbar .tabbarbg {
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

    .alltracks .tabbar .menuitems {
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

    .alltracks .tabbar .menuitems .browse {
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

    .alltracks .tabbar .menuitems .browse .browse1 {
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

    .alltracks .tabbar .menuitems .browse .icon {
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

    .alltracks .tabbar .menuitems .browse .icon .shape {
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

    .alltracks .tabbar .menuitems .alltracks1 {
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

    .alltracks .tabbar .menuitems .alltracks1 .alltracks2 {
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

    .alltracks .tabbar .menuitems .alltracks1 .icon {
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

    .alltracks .tabbar .menuitems .alltracks1 .icon .shape {
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

    .alltracks .tabbar .menuitems .alltracks1 .icon .shape1 {
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

    .alltracks .tabbar .menuitems .alltracks1 .icon .shape2 {
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

    .alltracks .tabbar .menuitems .playlists {
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

    .alltracks .tabbar .menuitems .playlists .playlists1 {
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

    .alltracks .tabbar .menuitems .playlists .icon {
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

    .alltracks .tabbar .menuitems .playlists .icon .shape {
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

    .alltracks .tabbar .menuitems .search {
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

    .alltracks .tabbar .menuitems .search .search1 {
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

    .alltracks .tabbar .menuitems .search .icon {
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

    .alltracks .tabbar .menuitems .search .icon .shape {
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

    .alltracks .maincontent {
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

    .alltracks .maincontent .pagemask {
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

    .alltracks .maincontent .tracks {
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

    .alltracks .maincontent .tracks .dividers {
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

    .alltracks .maincontent .tracks .dividers .line4 {
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

    .alltracks .maincontent .tracks .dividers .line4copy {
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

    .alltracks .maincontent .tracks .dividers .line4copy2 {
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

    .alltracks .maincontent .tracks .dividers .line4copy3 {
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

    .alltracks .maincontent .tracks .dividers .line4copy4 {
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

    .alltracks .maincontent .tracks .dividers .line4copy5 {
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

    .alltracks .maincontent .tracks .a1 {
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

    .alltracks .maincontent .tracks .a1 .acastlefullofras {
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

    .alltracks .maincontent .tracks .a1 .deeppurple {
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

    .alltracks .maincontent .tracks .a1 .a0532 {
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

    .alltracks .maincontent .tracks .a2 {
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

    .alltracks .maincontent .tracks .a2 .achangeofseasons {
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

    .alltracks .maincontent .tracks .a2 .dreamtheater {
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

    .alltracks .maincontent .tracks .a2 .a0452 {
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

    .alltracks .maincontent .tracks .a3 {
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

    .alltracks .maincontent .tracks .a3 .adayinthelife {
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

    .alltracks .maincontent .tracks .a3 .thebeatles {
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

    .alltracks .maincontent .tracks .a3 .a0345 {
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

    .alltracks .maincontent .tracks .a4 {
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

    .alltracks .maincontent .tracks .a4 .adoorintosummer {
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

    .alltracks .maincontent .tracks .a4 .joesatriani {
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

    .alltracks .maincontent .tracks .a4 .a0548 {
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

    .alltracks .maincontent .tracks .a5 {
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

    .alltracks .maincontent .tracks .a5 .agreatdayforfree {
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

    .alltracks .maincontent .tracks .a5 .pinkfloyd {
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

    .alltracks .maincontent .tracks .a5 .a0838 {
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

    .alltracks .maincontent .tracks .a6 {
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

    .alltracks .maincontent .tracks .a6 .ahousedivided {
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

    .alltracks .maincontent .tracks .a6 .megadeth {
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

    .alltracks .maincontent .tracks .a6 .a0426 {
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

    .alltracks .maincontent .tracks .a7 {
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

    .alltracks .maincontent .tracks .a7 .alittlemore {
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

    .alltracks .maincontent .tracks .a7 .skillet {
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

    .alltracks .maincontent .tracks .a7 .a0352 {
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

    .alltracks .maincontent .title {
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

    .alltracks .maincontent .title .alltracks1 {
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
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 32.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: center;
      line-height: 38.0px
    }

    .alltracks .maincontent .iconmenu {
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

    .alltracks .maincontent .iconmenu .iconmenu1 {
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

    .alltracks .maincontent .profileimage {
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

    .alltracks .maincontent .profileimage .profileimage1 {
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
 background: rgba(255, 255, 255, 1.0);"><input type=hidden id=anPageName name=page value=alltracks>
  <div class=alltracks>
    <div style="width: 375px; height: 100%; position:relative; margin:auto;">
      <div class=tabbar>
        <div class=tabbarbg></div>
        <div class=menuitems>
          <div class=browse>
            <a href="topHits">
              <div class=browse1>Top Hits</div>
              <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape@2x.png> </div> </div> <div class=alltracks1>
            </a>
            <a href="allTracks">
              <div class=alltracks2>All tracks</div>
              <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-1@2x.png> <img class=shape1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-2@2x.png> <img class=shape2 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-3@2x.png> </div> </div> <div class=playlists>
            </a>
            <a href="playlists">
              <div class=playlists1>Playlists</div>
              <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-4@2x.png> </div> </div> <div class=search>
            </a>
            <div class=search1>Search</div>
            <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-5@2x.png> </div> </div> </div> </div> <div class=maincontent>
              <div class=pagemask></div>
              <div class=tracks>
                <div class=dividers><img class=line4 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> <img class=line4copy src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy.png> <img class=line4copy2 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> <img class=line4copy3 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> <img class=line4copy4 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-4.png> <img class=line4copy5 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> </div> <div class=a1>
                  <div class=acastlefullofras>A Castle Full of Rascals</div>
                  <div class=deeppurple>Deep Purple</div>
                  <div class=a0532>05:32</div>
                </div>
                <div class=a2>
                  <div class=achangeofseasons>A Change of Seasons</div>
                  <div class=dreamtheater>Dream Theater</div>
                  <div class=a0452>04:52</div>
                </div>
                <div class=a3>
                  <div class=adayinthelife>A Day in the Life</div>
                  <div class=thebeatles>The Beatles</div>
                  <div class=a0345>03:45</div>
                </div>
                <div class=a4>
                  <div class=adoorintosummer>A Door into Summer</div>
                  <div class=joesatriani>Joe Satriani</div>
                  <div class=a0548>05:48</div>
                </div>
                <div class=a5>
                  <div class=agreatdayforfree>A Great Day for Freedom</div>
                  <div class=pinkfloyd>Pink Floyd</div>
                  <div class=a0838>08:38</div>
                </div>
                <div class=a6>
                  <div class=ahousedivided>A House Divided</div>
                  <div class=megadeth>Megadeth</div>
                  <div class=a0426>04:26</div>
                </div>
                <div class=a7>
                  <div class=alittlemore>A Little More</div>
                  <div class=skillet>Skillet</div>
                  <div class=a0352>03:52</div>
                </div>
              </div>
              <div class=title>
                <div class=alltracks1>All Tracks</div>
              </div>
              <div class=iconmenu><img class=iconmenu1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78a0ec5322c000d852696/img/playlist-iconmenu@2x.png> </div> <div class=profileimage><img class=profileimage1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-profile-image@2x.png> </div> </div> </div> </div> <script>anima_isHidden=function(e){if(!(e instanceof HTMLElement))return!1;if(getComputedStyle(e).display=="none")return!0;else if(e.parentNode&&anima_isHidden(e.parentNode))return!0;return!1};anima_loadAsyncSrcForTag=function(tag){var elements=document.getElementsByTagName(tag);var toLoad=[];for(var i=0;i<elements.length;i++){var e=elements[i];var src=e.getAttribute("src");var loaded=(src!=undefined&&src.length>0&&src!='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');if(loaded)continue;var asyncSrc=e.getAttribute("anima-src");if(asyncSrc==undefined||asyncSrc.length==0)continue;if(anima_isHidden(e))continue;toLoad.push(e)}
                  toLoad.sort(function(a,b){return anima_getTop(a)-anima_getTop(b)});for(var i=0;i<toLoad.length;i++){var e=toLoad[i];var asyncSrc=e.getAttribute("anima-src");e.setAttribute("src",asyncSrc)}};anima_pauseHiddenVideos=function(tag){var elements=document.getElementsByTagName("video");for(var i=0;i<elements.length;i++){var e=elements[i];var isPlaying=!!(e.currentTime>0&&!e.paused&&!e.ended&&e.readyState>2);var isHidden=anima_isHidden(e);if(!isPlaying&&!isHidden&&e.getAttribute("autoplay")=="autoplay"){e.play()}
                    else if(isPlaying&&isHidden){e.pause()}}};anima_loadAsyncSrc=function(tag){anima_loadAsyncSrcForTag("img");anima_loadAsyncSrcForTag("iframe");anima_loadAsyncSrcForTag("video");anima_pauseHiddenVideos()};var anima_getTop=function(e){var top=0;do{top+=e.offsetTop||0;e=e.offsetParent}while(e);return top};anima_loadAsyncSrc();anima_old_onResize=window.onresize;anima_new_onResize=undefined;anima_updateOnResize=function(){if(anima_new_onResize==undefined||window.onresize!=anima_new_onResize){anima_new_onResize=function(x){if(anima_old_onResize!=undefined)anima_old_onResize(x);anima_loadAsyncSrc()}
                    window.onresize=anima_new_onResize;setTimeout(function(){anima_updateOnResize()},3000)}};anima_updateOnResize();setTimeout(function(){anima_loadAsyncSrc()},200)</script>
                    <script src=js/launchpad-banner.js async></script>
</body>

</html>