<html>

<head>
  <style>
    @font-face {
      font-family: "SFProDisplay-Regular";
      src: url('css/fonts/SF Pro/SF-Pro-Display-Medium.otf') format("opentype");
    }
    @font-face {
      font-family: "SFProDisplay-Medium";
      src: url('css/fonts/SF Pro/SF-Pro-Display-Regular.otf') format("opentype");
    }
    .nowplaying {
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
    .nowplaying .tabbar {
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
    .nowplaying .tabbar .tabbarbg {
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
    .nowplaying .tabbar .menuitems {
    background-color: rgba(255, 255, 255, 0.0);
    top: 11px;
    height: 41px;
    width: 319px;
    position: absolute;
    margin: 0;
    left: 26px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .tabbar .menuitems .browse {
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
    .nowplaying .tabbar .menuitems .browse .browse1 {
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
    .nowplaying .tabbar .menuitems .browse .icon {
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
    .nowplaying .tabbar .menuitems .browse .icon .shape {
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
    .nowplaying .tabbar .menuitems .alltracks {
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
    .nowplaying .tabbar .menuitems .alltracks .alltracks1 {
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
    .nowplaying .tabbar .menuitems .alltracks .icon {
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
    .nowplaying .tabbar .menuitems .alltracks .icon .shape {
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
    .nowplaying .tabbar .menuitems .alltracks .icon .shape1 {
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
    .nowplaying .tabbar .menuitems .alltracks .icon .shape2 {
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
    .nowplaying .tabbar .menuitems .playlists {
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
    .nowplaying .tabbar .menuitems .playlists .playlists1 {
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
    .nowplaying .tabbar .menuitems .playlists .icon {
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
    .nowplaying .tabbar .menuitems .playlists .icon .shape {
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
    .nowplaying .tabbar .menuitems .search {
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
    .nowplaying .tabbar .menuitems .search .search1 {
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
    .nowplaying .tabbar .menuitems .search .icon {
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
    .nowplaying .tabbar .menuitems .search .icon .shape {
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
    .nowplaying .maincontent {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 727px;
    width: 375px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .bg {
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
    .nowplaying .maincontent .controls {
    background-color: rgba(255, 255, 255, 0.0);
    top: 582px;
    height: 122px;
    width: 315px;
    position: absolute;
    margin: 0;
    left: 29px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols {
    background-color: rgba(255, 255, 255, 0.0);
    top: 44px;
    height: 78px;
    width: 128px;
    position: absolute;
    margin: 0;
    left: 188px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .next {
    background-color: rgba(255, 255, 255, 0.0);
    top: 22px;
    height: 19px;
    width: 18px;
    position: absolute;
    margin: 0;
    left: 110px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .next .shapecopy {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 18px;
    width: 14px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .next .line {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 19px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 15px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .prev {
    background-color: rgba(255, 255, 255, 0.0);
    top: 22px;
    height: 19px;
    width: 16px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .prev .shapecopy {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 18px;
    width: 12px;
    position: absolute;
    margin: 0;
    left: 4px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .prev .line {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 19px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .play {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 78px;
    width: 78px;
    position: absolute;
    margin: 0;
    left: 24px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .play .oval {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 78px;
    width: 78px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .maincontrols .play .shape {
    background-color: rgba(255, 255, 255, 0.0);
    top: 21px;
    height: 20px;
    width: 16px;
    position: absolute;
    margin: 0;
    left: 33px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .volume {
    background-color: rgba(255, 255, 255, 0.0);
    top: 22px;
    height: 106px;
    width: 26px;
    position: absolute;
    margin: 0;
    left: 40px;
    -ms-transform: rotate(-270deg);
    -webkit-transform: rotate(-270deg);
    transform: rotate(-270deg)
    }
    .nowplaying .maincontent .controls .volume .group6 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 106px;
    width: 26px;
    position: relative;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .volume .group6 .line3 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 106px;
    width: 6px;
    position: absolute;
    margin: 0;
    left: 10px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .volume .group6 .line3copy {
    background-color: rgba(255, 255, 255, 0.0);
    top: 40px;
    height: 66px;
    width: 6px;
    position: absolute;
    margin: 0;
    left: 10px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .volume .group6 .oval2 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 30px;
    height: 26px;
    width: 26px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .repeat {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 18px;
    width: 16px;
    position: absolute;
    margin: 0;
    left: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: .15
    }
    .nowplaying .maincontent .controls .repeat .shape {
    background-color: rgba(255, 255, 255, 0.0);
    top: 10px;
    height: 8px;
    width: 15px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .repeat .shape1 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 8px;
    width: 15px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .shuffle {
    background-color: rgba(255, 255, 255, 0.0);
    top: 1px;
    height: 16px;
    width: 23px;
    position: absolute;
    margin: 0;
    left: 293px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: .15
    }
    .nowplaying .maincontent .controls .shuffle .shape {
    background-color: rgba(255, 255, 255, 0.0);
    top: 2px;
    height: 13px;
    width: 22px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .shuffle .shape1 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 11px;
    height: 2px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .shuffle .shape2 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 6px;
    width: 6px;
    position: absolute;
    margin: 0;
    left: 17px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .controls .shuffle .shape3 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 2px;
    height: 4px;
    width: 5px;
    position: absolute;
    margin: 0;
    left: 11px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar {
    background-color: rgba(255, 255, 255, 0.0);
    top: 479px;
    height: 73px;
    width: 315px;
    position: absolute;
    margin: 0;
    left: 30px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 45px;
    width: 315px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 17px;
    height: 12px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 0;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy {
    background-color: rgba(40, 193, 181, 1.0);
    top: 14px;
    height: 18px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 6px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy2 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 12px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy3 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 3px;
    height: 40px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 18px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy4 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 15px;
    height: 15px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 24px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy5 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 30px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy6 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 8px;
    height: 30px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 36px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy7 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 3px;
    height: 40px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 42px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy8 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 48px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy9 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 5px;
    height: 36px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 54px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy10 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 60px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy11 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 3px;
    height: 40px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 66px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy12 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 72px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy13 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 8px;
    height: 31px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 78px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy14 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 8px;
    height: 30px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 84px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy15 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 90px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy16 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 0;
    height: 45px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 96px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy33 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 14px;
    height: 18px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 102px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy32 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 5px;
    height: 36px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 108px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy31 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 6px;
    height: 32px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 114px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy30 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 120px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy29 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 126px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy28 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 5px;
    height: 35px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 132px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy27 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 15px;
    height: 15px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 138px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy26 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 6px;
    height: 33px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 144px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy25 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 150px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy24 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 0;
    height: 45px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 156px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy23 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 162px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy22 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 168px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy21 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 15px;
    height: 15px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 174px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy20 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 5px;
    height: 35px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 180px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy19 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 9px;
    height: 27px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 186px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy18 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 4px;
    height: 39px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 192px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy17 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 198px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy50 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 6px;
    height: 33px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 204px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy49 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 9px;
    height: 27px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 210px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy48 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 8px;
    height: 30px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 216px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy47 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 222px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy46 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 8px;
    height: 31px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 228px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy45 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 15px;
    height: 15px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 234px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy44 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 240px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy43 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 246px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy42 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 252px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy41 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 5px;
    height: 36px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 258px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy40 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 264px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy39 {
    background-color: rgba(40, 193, 181, 1.0);
    top: 15px;
    height: 15px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 270px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy38 {
    background-color: rgba(215, 215, 215, 1.0);
    top: 8px;
    height: 30px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 276px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy37 {
    background-color: rgba(215, 215, 215, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 282px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy36 {
    background-color: rgba(215, 215, 215, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 288px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy35 {
    background-color: rgba(215, 215, 215, 1.0);
    top: 15px;
    height: 15px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 294px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy34 {
    background-color: rgba(215, 215, 215, 1.0);
    top: 12px;
    height: 22px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 300px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy51 {
    background-color: rgba(215, 215, 215, 1.0);
    top: 8px;
    height: 31px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 306px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .seekbar1 .rectangle4copy52 {
    background-color: rgba(215, 215, 215, 1.0);
    top: 13px;
    height: 21px;
    width: 3px;
    position: absolute;
    margin: 0;
    left: 312px;
    border-radius: 1px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .duration {
    background-color: rgba(255, 255, 255, 0.0);
    top: 59px;
    height: 14px;
    width: 315px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .seekbar .duration .a0336 {
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
    font-size: 12.0px;
    color: rgba(182, 182, 182, 1.0);
    text-align: left;
    line-height: 14.0px
    }
    .nowplaying .maincontent .seekbar .duration .a0122 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: auto;
    width: auto;
    position: absolute;
    margin: 0;
    left: 285px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0);
    font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
    font-size: 12.0px;
    color: rgba(183, 183, 183, 1.0);
    text-align: left;
    line-height: 14.0px
    }
    .nowplaying .maincontent .nowplayingdetails {
    background-color: rgba(255, 255, 255, 0.0);
    top: 352px;
    height: 90px;
    width: 190px;
    position: absolute;
    margin: 0;
    left: 82px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .nowplayingdetails .nowplaying1 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: auto;
    width: auto;
    position: absolute;
    margin: 0;
    left: 59px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0);
    font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
    font-size: 16.0px;
    color: rgba(51, 51, 51, 1.0);
    text-align: left;
    line-height: 19.0px
    }
    .nowplaying .maincontent .nowplayingdetails .inismonaeluveiti {
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
    font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
    font-size: 22.0px;
    color: rgba(51, 51, 51, 1.0);
    text-align: left;
    line-height: 26.0px
    }
    .nowplaying .maincontent .nowplayingdetails .eluveitie {
    background-color: rgba(255, 255, 255, 0.0);
    top: 71px;
    height: auto;
    width: auto;
    position: absolute;
    margin: 0;
    left: 74px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0);
    font-family: 'SFProDisplay-Regular', Helvetica, Arial, serif;
    font-size: 16.0px;
    color: rgba(51, 51, 51, 1.0);
    text-align: left;
    line-height: 19.0px
    }
    .nowplaying .maincontent .artistimage {
    background-color: rgba(255, 255, 255, 0.0);
    top: 137px;
    height: 180px;
    width: 180px;
    position: absolute;
    margin: 0;
    left: 98px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .artistimage .artistimage1 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 180px;
    width: 180px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .backlink {
    background-color: rgba(255, 255, 255, 0.0);
    top: 65px;
    height: 24px;
    width: 99px;
    position: absolute;
    margin: 0;
    left: 28px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .backlink .playlist {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: auto;
    width: auto;
    position: absolute;
    margin: 0;
    left: 39px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0);
    font-family: 'SFProDisplay-Medium', Helvetica, Arial, serif;
    font-size: 20.0px;
    color: rgba(51, 51, 51, 1.0);
    text-align: left;
    line-height: 24.0px
    }
    .nowplaying .maincontent .backlink .icon {
    background-color: rgba(255, 255, 255, 0.0);
    top: 8px;
    height: 16px;
    width: 28px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .backlink .icon .line2 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 7px;
    height: 2px;
    width: 26px;
    position: absolute;
    margin: 0;
    left: 2px;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .backlink .icon .path2 {
    background-color: rgba(255, 255, 255, 0.0);
    top: 0;
    height: 16px;
    width: 10px;
    position: absolute;
    margin: 0;
    left: 0;
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0)
    }
    .nowplaying .maincontent .profileimage {
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
    .nowplaying .maincontent .profileimage .profileimage1 {
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
  <link rel="shortcut icon" type=image/png href="images/favicon.png">
  <meta name=author content="Musically by Pancho">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Playing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" type="text/css" media="screen" href="css/music-views.css">
  <link href="css/fonts/fontawesome/all.css" rel="stylesheet">
  <script src="js/music-views.js" defer="true"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="margin: 0;
  background: rgba(255, 255, 255, 1.0);">
  <div class=nowplaying>
    <div style="width: 375px; height: 100%; position:relative; margin:auto;">
      <div class=maincontent>
        <div class=bg></div>
        <div class=controls>
          <div class=maincontrols>
            <div class=next>
              <img class=shapecopy src="images/forward-button.png">
            </div>
            <div class=prev>
              <img class=shapecopy src="images/back-button.png"> 
              <img class=line src="images/line-vertical.png">
            </div>
            <div class=play>
              <img class=oval src="images/play-button-oval.png">
              <img class=shape src="images/play-button.png">
            </div>
          </div>
          <div class=volume>
            <div class=group6>
              <img class=line3 src="images/volume-vertical-line.png"> 
              <img class=line3copy src="images/volume-vertical-line-copy.png">
              <img class=oval2 src="images/volume-button.png">
            </div>
          </div>
          <div class=repeat>
            <img class=shape src="images/repeat1.png">
            <img class=shape1 src="images/repeat2.png">
          </div>
          <div class=shuffle>
            <img class=shape src="images/shuffle1.png">
            <img class=shape1 src="images/shuffle2.png">
            <img class=shape2 src="images/shuffle3.png">
            <img class=shape3 src="images/shuffle4.png">
          </div>
        </div>
        <div class=seekbar>
          <div class=seekbar1>
            <div class=rectangle4></div>
            <div class=rectangle4copy></div>
            <div class=rectangle4copy2></div>
            <div class=rectangle4copy3></div>
            <div class=rectangle4copy4></div>
            <div class=rectangle4copy5></div>
            <div class=rectangle4copy6></div>
            <div class=rectangle4copy7></div>
            <div class=rectangle4copy8></div>
            <div class=rectangle4copy9></div>
            <div class=rectangle4copy10></div>
            <div class=rectangle4copy11></div>
            <div class=rectangle4copy12></div>
            <div class=rectangle4copy13></div>
            <div class=rectangle4copy14></div>
            <div class=rectangle4copy15></div>
            <div class=rectangle4copy16></div>
            <div class=rectangle4copy33></div>
            <div class=rectangle4copy32></div>
            <div class=rectangle4copy31></div>
            <div class=rectangle4copy30></div>
            <div class=rectangle4copy29></div>
            <div class=rectangle4copy28></div>
            <div class=rectangle4copy27></div>
            <div class=rectangle4copy26></div>
            <div class=rectangle4copy25></div>
            <div class=rectangle4copy24></div>
            <div class=rectangle4copy23></div>
            <div class=rectangle4copy22></div>
            <div class=rectangle4copy21></div>
            <div class=rectangle4copy20></div>
            <div class=rectangle4copy19></div>
            <div class=rectangle4copy18></div>
            <div class=rectangle4copy17></div>
            <div class=rectangle4copy50></div>
            <div class=rectangle4copy49></div>
            <div class=rectangle4copy48></div>
            <div class=rectangle4copy47></div>
            <div class=rectangle4copy46></div>
            <div class=rectangle4copy45></div>
            <div class=rectangle4copy44></div>
            <div class=rectangle4copy43></div>
            <div class=rectangle4copy42></div>
            <div class=rectangle4copy41></div>
            <div class=rectangle4copy40></div>
            <div class=rectangle4copy39></div>
            <div class=rectangle4copy38></div>
            <div class=rectangle4copy37></div>
            <div class=rectangle4copy36></div>
            <div class=rectangle4copy35></div>
            <div class=rectangle4copy34></div>
            <div class=rectangle4copy51></div>
            <div class=rectangle4copy52></div>
          </div>
          <div class=duration>
            <div class=a0336>03:36</div>
            <div class=a0122>01:22</div>
          </div>
        </div>
        <div class=nowplayingdetails>
          <div class=nowplaying1>Now Playing</div>
          <div class=inismonaeluveiti>Inis Mona - Eluveitie</div>
          <div class=eluveitie>Eluveitie</div>
        </div>
        <div class=artistimage><img class=artistimage1 src="images/covers/Bright - The Album.jpg"> </div>
        

        <div class=backlink>
          <div class=playlist>Playlist</div>
          <div class=icon>
            <!-- <img class=line2 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-line-2@2x.png> 
            <img class=path2 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-path-2@2x.png> -->
          </div>
        </div>
        <!-- <div class=profileimage>
          <img class=profileimage1 src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-profile-image@2x.png>
        </div> -->
      </div>
    </div>
  </div>
  <!-- <footer class="footer">
    <a class="anchor" onclick="footerGoTo('/topHits', 'Top Hits')">
      <div class="icon">
        <img class="shape" src="images/top-hits.png">
      </div>
      <span class="icon-caption">Top Hits</span>
    </a>
    <a class="anchor" onclick="footerGoTo('/allTracks', 'All Tracks')">
      <div class="icon">
        <img class="shape" src="images/all-tracks.png">
      </div>
      <span class="icon-caption">All Tracks</span>
    </a>
    <a class="anchor" onclick="footerGoTo('/playlists', 'Playlists')">
      <div class="icon">
        <img class="shape" src="images/playlists-white.png">
      </div>
      <span class="icon-caption">Playlists</span>
    </a>
    <a class="anchor" href="#">
      <div class="icon">
        <img class="shape" src="images/search.png">
      </div>
      <span class="icon-caption">Search</span>
    </a>
  </footer> -->
</body>
</html>