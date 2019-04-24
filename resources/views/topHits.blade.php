<!DOCTYPE html>

<!-- To get the source code upgrade to a Pro plan and Export code https://www.animaapp.com/pricing - Sample Exported Code: https://medium.com/sketch-app-sources/how-to-export-sketch-to-html-65c427b3aa3a -->


<html>

<head>
  <link rel="shortcut icon" type=image/png href=https://animaproject.s3.amazonaws.com/home/favicon.png> <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <style>
    @font-face {
      font-family: "SFProText-Semibold";
      src: url('https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb711d1c5322c00090d23c9/fonts/SF-Pro-Text-Semibold.otf') format("opentype");
    }

    @font-face {
      font-family: "SFProDisplay-Medium";
      src: url('https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/fonts/SF-Pro-Display-Medium.otf') format("opentype");
    }

    @font-face {
      font-family: "SFProDisplay-Regular";
      src: url('https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb711d1c5322c00090d23c9/fonts/SF-Pro-Display-Regular.otf') format("opentype");
    }

    @font-face {
      font-family: "SFProDisplay-Bold";
      src: url('https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb711d1c5322c00090d23c9/fonts/SF-Pro-Display-Bold.otf') format("opentype");
    }

    .tophit {
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

    .tophit .iphonexelements {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 812px;
      width: 375px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexhomeindicatorhomeindicatoronlight {
      background-color: rgba(255, 255, 255, 0.0);
      top: 778px;
      height: 34px;
      width: 375px;
      position: absolute;
      margin: 0;
      left: 0;
      overflow: hidden;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .06
    }

    .tophit .iphonexelements .iphonexhomeindicatorhomeindicatoronlight .background {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 34px;
      width: 375px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexhomeindicatorhomeindicatoronlight .rectangle24 {
      background-color: rgba(0, 0, 0, 1.0);
      top: 20px;
      height: 5px;
      width: 134px;
      position: absolute;
      margin: 0;
      left: 121px;
      border-radius: 2px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 21px;
      width: 340px;
      position: absolute;
      margin: 0;
      left: 18px;
      overflow: hidden;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .background {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 21px;
      width: 340px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 4px;
      height: 21px;
      width: 340px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .battery {
      background-color: rgba(255, 255, 255, 0.0);
      top: 4px;
      height: 12px;
      width: 25px;
      position: absolute;
      margin: 0;
      left: 315px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .battery .border {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 12px;
      box-sizing: border-box;
      width: 22px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 2px;
      border-style: solid;
      border-width: 1px;
      border-color: rgba(0, 0, 0, 1.0);
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .35
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .battery .cap {
      background-color: rgba(255, 255, 255, 0.0);
      top: 4px;
      height: 4px;
      width: 1px;
      position: absolute;
      margin: 0;
      left: 23px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .4
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .battery .capacity {
      background-color: rgba(0, 0, 0, 1.0);
      top: 2px;
      height: 7px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 2px;
      border-radius: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .wifi {
      background-color: rgba(255, 255, 255, 0.0);
      top: 4px;
      height: 11px;
      width: 15px;
      position: absolute;
      margin: 0;
      left: 295px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .cellularconnection {
      background-color: rgba(255, 255, 255, 0.0);
      top: 5px;
      height: 11px;
      width: 17px;
      position: absolute;
      margin: 0;
      left: 273px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .timestyle {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 21px;
      width: 54px;
      position: absolute;
      margin: 0;
      left: 0;
      overflow: hidden;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .timestyle .background1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 21px;
      width: 54px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .iphonexelements .iphonexstatusbarsstatusbarblack .iphonexstatusbarsstatusbarblack1 .timestyle .u21b3time {
      background-color: rgba(255, 255, 255, 0.0);
      top: 3px;
      height: auto;
      width: 54px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProText-Semibold', Helvetica, Arial, serif;
      font-size: 14.0px;
      color: rgba(0, 0, 0, 1.0);
      text-align: center;
      letter-spacing: -.28px;
      line-height: 16.0px
    }

    .tophit .content {
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

    .tophit .content .bg {
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

    .tophit .content .profileimage {
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

    .tophit .content .profileimage .profileimage1 {
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

    .tophit .content .topoftheweek {
      background-color: rgba(255, 255, 255, 0.0);
      top: 196px;
      height: 335px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 29px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .toptitle {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 35px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .toptitle .button {
      background-color: rgba(255, 255, 255, 0.0);
      top: 1px;
      height: 15px;
      width: 48px;
      position: absolute;
      margin: 0;
      left: 264px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .toptitle .button .seeall {
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
      font-size: 13.0px;
      color: rgba(40, 193, 181, 1.0);
      text-align: left;
      line-height: 15.0px
    }

    .tophit .content .topoftheweek .toptitle .subtitle {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 16px;
      width: 97px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .toptitle .subtitle .topoftheweek1 {
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
      font-size: 14.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 16.0px
    }

    .tophit .content .topoftheweek .toptitle .divider {
      background-color: rgba(255, 255, 255, 0.0);
      top: 33px;
      height: 2px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .toptitle .divider .line4 {
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

    .tophit .content .topoftheweek .a1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 50px;
      height: 85px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a1 .trackimage {
      background-color: rgba(238, 238, 238, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      overflow: hidden;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a1 .trackimage .mask {
      background-color: rgba(238, 238, 238, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a1 .trackimage .bitmap {
      background-color: rgba(255, 255, 255, 0.0);
      top: -11px;
      height: 146px;
      width: 97px;
      position: absolute;
      margin: 0;
      left: -5px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a1 .nameandartist {
      background-color: rgba(255, 255, 255, 0.0);
      top: 18px;
      height: 49px;
      width: 126px;
      position: absolute;
      margin: 0;
      left: 100px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a1 .nameandartist .novemberrain {
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

    .tophit .content .topoftheweek .a1 .nameandartist .gunsnroses {
      background-color: rgba(255, 255, 255, 0.0);
      top: 31px;
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

    .tophit .content .topoftheweek .a1 .button {
      background-color: rgba(255, 255, 255, 0.0);
      top: 30px;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 256px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a1 .button .buttonbg {
      background-color: rgba(40, 193, 181, 1.0);
      top: 0;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 12px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a1 .button .get {
      background-color: rgba(255, 255, 255, 0.0);
      top: 6px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 18px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Bold', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .tophit .content .topoftheweek .a2 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 150px;
      height: 85px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a2 .trackimage {
      background-color: rgba(238, 238, 238, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      overflow: hidden;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a2 .trackimage .mask {
      background-color: rgba(238, 238, 238, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a2 .trackimage .bitmap {
      background-color: rgba(255, 255, 255, 0.0);
      top: -14px;
      height: 122px;
      width: 95px;
      position: absolute;
      margin: 0;
      left: -6px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a2 .nameandartist {
      background-color: rgba(255, 255, 255, 0.0);
      top: 18px;
      height: 49px;
      width: 112px;
      position: absolute;
      margin: 0;
      left: 100px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a2 .nameandartist .chopsuey {
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

    .tophit .content .topoftheweek .a2 .nameandartist .systemofadown {
      background-color: rgba(255, 255, 255, 0.0);
      top: 31px;
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

    .tophit .content .topoftheweek .a2 .button {
      background-color: rgba(255, 255, 255, 0.0);
      top: 30px;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 256px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a2 .button .buttonbg {
      background-color: rgba(40, 193, 181, 1.0);
      top: 0;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 12px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a2 .button .get {
      background-color: rgba(255, 255, 255, 0.0);
      top: 6px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 18px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Bold', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .tophit .content .topoftheweek .a3 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 250px;
      height: 85px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a3 .trackimage {
      background-color: rgba(238, 238, 238, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      overflow: hidden;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a3 .trackimage .mask {
      background-color: rgba(238, 238, 238, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a3 .trackimage .bitmap {
      background-color: rgba(255, 255, 255, 0.0);
      top: -28px;
      height: 138px;
      width: 92px;
      position: absolute;
      margin: 0;
      left: -4px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a3 .nameandartist {
      background-color: rgba(255, 255, 255, 0.0);
      top: 18px;
      height: 49px;
      width: 110px;
      position: absolute;
      margin: 0;
      left: 100px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a3 .nameandartist .thetroopers {
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

    .tophit .content .topoftheweek .a3 .nameandartist .ironmaiden {
      background-color: rgba(255, 255, 255, 0.0);
      top: 31px;
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

    .tophit .content .topoftheweek .a3 .button {
      background-color: rgba(255, 255, 255, 0.0);
      top: 30px;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 256px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a3 .button .buttonbg {
      background-color: rgba(40, 193, 181, 1.0);
      top: 0;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 12px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweek .a3 .button .get {
      background-color: rgba(255, 255, 255, 0.0);
      top: 6px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 18px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Bold', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .tophit .content .topoftheweekcopy {
      background-color: rgba(255, 255, 255, 0.0);
      top: 582px;
      height: 335px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 29px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .toptitle {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 35px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .toptitle .button {
      background-color: rgba(255, 255, 255, 0.0);
      top: 1px;
      height: 15px;
      width: 48px;
      position: absolute;
      margin: 0;
      left: 264px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .toptitle .button .seeall {
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
      font-size: 13.0px;
      color: rgba(40, 193, 181, 1.0);
      text-align: left;
      line-height: 15.0px
    }

    .tophit .content .topoftheweekcopy .toptitle .subtitle {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 16px;
      width: 70px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .toptitle .subtitle .alltimehits {
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
      font-size: 14.0px;
      color: rgba(51, 51, 51, 1.0);
      text-align: left;
      line-height: 16.0px
    }

    .tophit .content .topoftheweekcopy .toptitle .divider {
      background-color: rgba(255, 255, 255, 0.0);
      top: 33px;
      height: 2px;
      width: 317px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .toptitle .divider .line4 {
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

    .tophit .content .topoftheweekcopy .a1 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 50px;
      height: 85px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a1 .trackimage {
      background-color: rgba(239, 239, 239, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      overflow: hidden;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a1 .trackimage .mask {
      background-color: rgba(239, 239, 239, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a1 .trackimage .bitmap {
      background-color: rgba(255, 255, 255, 0.0);
      top: -36px;
      height: 135px;
      width: 90px;
      position: absolute;
      margin: 0;
      left: -4px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .8
    }

    .tophit .content .topoftheweekcopy .a1 .nameandartist {
      background-color: rgba(255, 255, 255, 0.0);
      top: 18px;
      height: 49px;
      width: 122px;
      position: absolute;
      margin: 0;
      left: 100px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a1 .nameandartist .heavenu2019sdoor {
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

    .tophit .content .topoftheweekcopy .a1 .nameandartist .gunsnroses {
      background-color: rgba(255, 255, 255, 0.0);
      top: 31px;
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

    .tophit .content .topoftheweekcopy .a1 .button {
      background-color: rgba(255, 255, 255, 0.0);
      top: 30px;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 256px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a1 .button .rectangle3 {
      background-color: rgba(40, 193, 181, 1.0);
      top: 0;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 12px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a1 .button .get {
      background-color: rgba(255, 255, 255, 0.0);
      top: 6px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 18px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Bold', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .tophit .content .topoftheweekcopy .a2 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 150px;
      height: 85px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a2 .image {
      background-color: rgba(238, 238, 238, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a2 .nameandartist {
      background-color: rgba(255, 255, 255, 0.0);
      top: 18px;
      height: 49px;
      width: 112px;
      position: absolute;
      margin: 0;
      left: 100px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a2 .nameandartist .chopsuey {
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

    .tophit .content .topoftheweekcopy .a2 .nameandartist .systemofadown {
      background-color: rgba(255, 255, 255, 0.0);
      top: 31px;
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

    .tophit .content .topoftheweekcopy .a2 .button {
      background-color: rgba(255, 255, 255, 0.0);
      top: 30px;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 256px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a2 .button .rectangle3 {
      background-color: rgba(255, 89, 117, 1.0);
      top: 0;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 12px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a2 .button .get {
      background-color: rgba(255, 255, 255, 0.0);
      top: 6px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 18px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Bold', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .tophit .content .topoftheweekcopy .a3 {
      background-color: rgba(255, 255, 255, 0.0);
      top: 250px;
      height: 85px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 1px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a3 .image {
      background-color: rgba(238, 238, 238, 1.0);
      top: 0;
      height: 85px;
      width: 85px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 5px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a3 .nameandartist {
      background-color: rgba(255, 255, 255, 0.0);
      top: 18px;
      height: 49px;
      width: 110px;
      position: absolute;
      margin: 0;
      left: 100px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a3 .nameandartist .thetroopers {
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

    .tophit .content .topoftheweekcopy .a3 .nameandartist .ironmaiden {
      background-color: rgba(255, 255, 255, 0.0);
      top: 31px;
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

    .tophit .content .topoftheweekcopy .a3 .button {
      background-color: rgba(255, 255, 255, 0.0);
      top: 30px;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 256px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a3 .button .rectangle3 {
      background-color: rgba(255, 89, 117, 1.0);
      top: 0;
      height: 25px;
      width: 59px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 12px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .topoftheweekcopy .a3 .button .get {
      background-color: rgba(255, 255, 255, 0.0);
      top: 6px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 18px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Bold', Helvetica, Arial, serif;
      font-size: 12.0px;
      color: rgba(255, 255, 255, 1.0);
      text-align: left;
      line-height: 14.0px
    }

    .tophit .content .search {
      background-color: rgba(255, 255, 255, 0.0);
      top: 125px;
      height: 40px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 30px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .search .rectangle {
      background-color: rgba(215, 215, 215, 1.0);
      top: 0;
      height: 40px;
      width: 315px;
      position: absolute;
      margin: 0;
      left: 0;
      border-radius: 20px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      opacity: .09
    }

    .tophit .content .search .shape {
      background-color: rgba(255, 255, 255, 0.0);
      top: 11px;
      height: 18px;
      width: 18px;
      position: absolute;
      margin: 0;
      left: 15px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .content .search .searchinstore {
      background-color: rgba(255, 255, 255, 0.0);
      top: 12px;
      height: auto;
      width: auto;
      position: absolute;
      margin: 0;
      left: 43px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0);
      font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
      font-size: 14.0px;
      color: rgba(215, 215, 215, 1.0);
      text-align: left;
      line-height: 16.0px
    }

    .tophit .tabbar {
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

    .tophit .tabbar .tabbarbg {
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

    .tophit .tabbar .menuitems {
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

    .tophit .tabbar .menuitems .browse {
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

    .tophit .tabbar .menuitems .browse .tophit1 {
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
      line-height: 14.0px;
      white-space: nowrap;
    }

    .tophit .tabbar .menuitems .browse .icon {
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

    .tophit .tabbar .menuitems .browse .icon .shape {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 18px;
      width: 20px;
      position: absolute;
      margin: 0;
      left: 0;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .tabbar .menuitems .alltracks {
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

    .tophit .tabbar .menuitems .alltracks .alltracks1 {
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

    .tophit .tabbar .menuitems .alltracks .icon {
      background-color: rgba(255, 255, 255, 0.0);
      top: 0;
      height: 21px;
      width: 21px;
      position: absolute;
      margin: 0;
      left: 15px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .tabbar .menuitems .alltracks .icon .shape {
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

    .tophit .tabbar .menuitems .alltracks .icon .shape1 {
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

    .tophit .tabbar .menuitems .alltracks .icon .shape2 {
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

    .tophit .tabbar .menuitems .playlists {
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

    .tophit .tabbar .menuitems .playlists .playlists1 {
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

    .tophit .tabbar .menuitems .playlists .icon {
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

    .tophit .tabbar .menuitems .playlists .icon .shape {
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

    .tophit .tabbar .menuitems .search {
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

    .tophit .tabbar .menuitems .search .search1 {
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

    .tophit .tabbar .menuitems .search .icon {
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

    .tophit .tabbar .menuitems .search .icon .shape {
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

    .tophit .title {
      background-color: rgba(255, 255, 255, 0.0);
      top: 58px;
      height: 38px;
      width: 101px;
      position: absolute;
      margin: 0;
      left: 137px;
      -ms-transform: rotate(0);
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tophit .title .tophit1 {
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

    .tophit .iconmenu {
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

    .tophit .iconmenu .iconmenu1 {
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
 background: rgba(255, 255, 255, 1.0);"><input type=hidden id=anPageName name=page value=tophit>
  <div class=tophit>
    <div style="width: 375px; height: 100%; position:relative; margin:auto;">
      <div class=iphonexelements>
        <div class=iphonexhomeindicatorhomeindicatoronlight>
          <div class=background></div>
          <div class=rectangle24></div>
        </div>
        <div class=iphonexstatusbarsstatusbarblack>
          <div class=background></div>
          <div class=iphonexstatusbarsstatusbarblack1>
            <div class=battery>
              <div class=border></div><img class=cap src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-cap@2x.png> <div class=capacity>
            </div>
          </div><img class=wifi src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-wifi@2x.png> <img class=cellularconnection src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb711d1c5322c00090d23c9/img/holo-music-playlist-copy-cellular-connection@2x.png> <div class=timestyle>
          <div class=background1></div>
          <div class=u21b3time><span class="span1">9:4</span><span class="span2">1</span></div>
        </div>
      </div>
    </div>
  </div>
  <div class=content>
    <div class=bg></div>
    <div class=profileimage><img class=profileimage1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-profile-image@2x.png> </div> <div class=topoftheweek>
      <div class=toptitle>
        <div class=button>
          <div class=seeall>SEE ALL</div>
        </div>
        <div class=subtitle>
          <div class=topoftheweek1>Top of the week</div>
        </div>
        <div class=divider><img class=line4 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> </div> </div> <div class=a1>
          <div class=trackimage>
            <div class=mask></div><img class=bitmap src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78715c5322c000d852688/img/top-hit-bitmap@2x.png> </div> <div class=nameandartist>
            <div class=novemberrain>November Rain</div>
            <div class=gunsnroses>Guns n Roses</div>
          </div>
          <div class=button>
            <div class=buttonbg></div>
            <div class=get>GET</div>
          </div>
        </div>
        <div class=a2>
          <div class=trackimage>
            <div class=mask></div><img class=bitmap src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78715c5322c000d852688/img/top-hit-bitmap-1@2x.png> </div> <div class=nameandartist>
            <div class=chopsuey>Chop Suey</div>
            <div class=systemofadown>System of a down</div>
          </div>
          <div class=button>
            <div class=buttonbg></div>
            <div class=get>GET</div>
          </div>
        </div>
        <div class=a3>
          <div class=trackimage>
            <div class=mask></div><img class=bitmap src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78715c5322c000d852688/img/top-hit-bitmap-2@2x.png> </div> <div class=nameandartist>
            <div class=thetroopers>The Troopers</div>
            <div class=ironmaiden>Iron Maiden</div>
          </div>
          <div class=button>
            <div class=buttonbg></div>
            <div class=get>GET</div>
          </div>
        </div>
      </div>
      <div class=topoftheweekcopy>
        <div class=toptitle>
          <div class=button>
            <div class=seeall>SEE ALL</div>
          </div>
          <div class=subtitle>
            <div class=alltimehits>All time hits</div>
          </div>
          <div class=divider><img class=line4 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png> </div> </div> <div class=a1>
            <div class=trackimage>
              <div class=mask></div><img class=bitmap src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78715c5322c000d852688/img/top-hit-bitmap-3@2x.png> </div> <div class=nameandartist>
              <div class=heavenu2019sdoor>Heaven’s Door</div>
              <div class=gunsnroses>Guns n Roses</div>
            </div>
            <div class=button>
              <div class=rectangle3></div>
              <div class=get>GET</div>
            </div>
          </div>
          <div class=a2>
            <div class=image></div>
            <div class=nameandartist>
              <div class=chopsuey>Chop Suey</div>
              <div class=systemofadown>System of a down</div>
            </div>
            <div class=button>
              <div class=rectangle3></div>
              <div class=get>GET</div>
            </div>
          </div>
          <div class=a3>
            <div class=image></div>
            <div class=nameandartist>
              <div class=thetroopers>The Troopers</div>
              <div class=ironmaiden>Iron Maiden</div>
            </div>
            <div class=button>
              <div class=rectangle3></div>
              <div class=get>GET</div>
            </div>
          </div>
        </div>
        <div class=search>
          <div class=rectangle></div><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78715c5322c000d852688/img/top-hit-shape@2x.png> <div class=searchinstore>Search in store
        </div>
      </div>
    </div>
    <div class=tabbar>
      <div class=tabbarbg></div>
      <div class=menuitems>
        <div class=browse>
          <a href="topHits">
            <div class=tophit1>Top Hits</div>
            <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78715c5322c000d852688/img/top-hit-shape-1@2x.png> </div> </div> <div class=alltracks>
          </a>
          <a href="allTracks">
            <div class=alltracks1>All tracks</div>
            <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-shape-1@2x.png> <img class=shape1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-shape-2@2x.png> <img class=shape2 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-shape-3@2x.png> </div> </div> <div class=playlists>
          </a>
          <a href="playlists">
            <div class=playlists1>Playlists</div>
            <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-4@2x.png> </div> </div> <div class=search>
          </a>
          <div class=search1>Search</div>
          <div class=icon><img class=shape src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-shape-5@2x.png> </div> </div> </div> </div> <div class=title>
            <div class=tophit1>Top Hit</div>
          </div>
          <div class=iconmenu><img class=iconmenu1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78a0ec5322c000d852696/img/playlist-iconmenu@2x.png> </div> </div> </div> <script>anima_isHidden=function(e){if(!(e instanceof HTMLElement))return!1;if(getComputedStyle(e).display=="none")return!0;else if(e.parentNode&&anima_isHidden(e.parentNode))return!0;return!1};anima_loadAsyncSrcForTag=function(tag){var elements=document.getElementsByTagName(tag);var toLoad=[];for(var i=0;i<elements.length;i++){var e=elements[i];var src=e.getAttribute("src");var loaded=(src!=undefined&&src.length>0&&src!='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');if(loaded)continue;var asyncSrc=e.getAttribute("anima-src");if(asyncSrc==undefined||asyncSrc.length==0)continue;if(anima_isHidden(e))continue;toLoad.push(e)}
              toLoad.sort(function(a,b){return anima_getTop(a)-anima_getTop(b)});for(var i=0;i<toLoad.length;i++){var e=toLoad[i];var asyncSrc=e.getAttribute("anima-src");e.setAttribute("src",asyncSrc)}};anima_pauseHiddenVideos=function(tag){var elements=document.getElementsByTagName("video");for(var i=0;i<elements.length;i++){var e=elements[i];var isPlaying=!!(e.currentTime>0&&!e.paused&&!e.ended&&e.readyState>2);var isHidden=anima_isHidden(e);if(!isPlaying&&!isHidden&&e.getAttribute("autoplay")=="autoplay"){e.play()}
                else if(isPlaying&&isHidden){e.pause()}}};anima_loadAsyncSrc=function(tag){anima_loadAsyncSrcForTag("img");anima_loadAsyncSrcForTag("iframe");anima_loadAsyncSrcForTag("video");anima_pauseHiddenVideos()};var anima_getTop=function(e){var top=0;do{top+=e.offsetTop||0;e=e.offsetParent}while(e);return top};anima_loadAsyncSrc();anima_old_onResize=window.onresize;anima_new_onResize=undefined;anima_updateOnResize=function(){if(anima_new_onResize==undefined||window.onresize!=anima_new_onResize){anima_new_onResize=function(x){if(anima_old_onResize!=undefined)anima_old_onResize(x);anima_loadAsyncSrc()}
                window.onresize=anima_new_onResize;setTimeout(function(){anima_updateOnResize()},3000)}};anima_updateOnResize();setTimeout(function(){anima_loadAsyncSrc()},200)</script>
                <script src=launchpad-js/launchpad-banner.js async></script>
</body>

</html>