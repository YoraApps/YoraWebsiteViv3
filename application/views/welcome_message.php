<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <title>Web Development Company | Web Design Company Bangalore</title>
    <meta name="description" content="Top Web development company in Bangalore. Specialized web design company with latest optimization technique for large scale web and mobile apps. We offer MEAN stack development, cloud application development, eCommerce website development." />
    <meta name="keywords" content="Web Development Company, Web Design Company Bangalore, Best Web development company in Bangalore, Web Design & Development Company India" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="scUx3URu2DR2skJkK2JxUGD6LDZIJbuV7tVwY0XOi0w" />
    <meta name="msvalidate.01" content="8D798A32D69E85B6C978CA014C2CDE48" />
    <meta name="Author" content=" YORA TECH.com" />
    <meta property="og:title" content="Web development company" />
    <meta property="og:image" content="img src="assets/img/yoralogo.png" />
    <meta property="og:site_name" content=" YORA TECH" />
    <meta property="og:description" content="Web Development, Digital Marketing, Mobile App Development, Web Hosting, Branding " />
    <style>
        .flex-container a:active, .flexslider a:active, .flex-container a:focus, .flexslider a:focus {
            outline: 0;
        }

        .slides, .flex-control-nav, .flex-direction-nav {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .flexslider {
            margin: 0;
            padding: 0;
        }

            .flexslider .slides > li {
                display: none;
                -webkit-backface-visibility: hidden;
            }

            .flexslider .slides img {
                width: 100%;
                display: block;
            }

        .flex-pauseplay span {
            text-transform: capitalize;
        }

        .slides:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        html[xmlns] .slides {
            display: block;
        }

        * html .slides {
            height: 1%;
        }

        .no-js .slides > li:first-child {
            display: block;
        }

        .flexslider {
            margin: 0 0 20px;
            background: #fff;
            position: relative;
            zoom: 1;
        }

        .flex-viewport {
            max-height: 2000px;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
        }

        .loading .flex-viewport {
            max-height: 300px;
        }

        .flexslider .slides {
            zoom: 1;
        }

        .carousel li {
            margin-right: 5px;
        }

        .flex-direction-nav {
            *height: 0;
        }

            .flex-direction-nav .flex-next {
                background-position: 100% 0;
                right: -36px;
            }

            .flex-direction-nav .flex-prev {
                left: -36px;
            }

        .flexslider:hover .flex-next {
            opacity: .8;
            right: 5px;
        }

        .flexslider:hover .flex-prev {
            opacity: .8;
            left: 5px;
        }

            .flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover {
                opacity: 1;
            }

        .flex-direction-nav .flex-disabled {
            opacity: .3 !important;
            filter: alpha(opacity=30);
            cursor: default;
        }

        .flex-control-nav {
            width: 100%;
            position: absolute;
            bottom: -40px;
            text-align: center;
        }

            .flex-control-nav li {
                margin: 0 6px;
                display: inline-block;
                zoom: 1;
                *display: inline;
            }

        .flex-control-paging li a {
            width: 11px;
            height: 11px;
            display: block;
            background: #666;
            background: rgba(0,0,0,.5);
            cursor: pointer;
            text-indent: -9999px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            -o-border-radius: 20px;
            border-radius: 20px;
            box-shadow: inset 0 0 3px rgba(0,0,0,.3);
        }

            .flex-control-paging li a:hover {
                background: #333;
                background: rgba(0,0,0,.7);
            }

            .flex-control-paging li a.flex-active {
                background: #000;
                background: rgba(0,0,0,.9);
                cursor: default;
            }

        .flex-control-thumbs {
            margin: 5px 0 0;
            position: static;
            overflow: hidden;
        }

            .flex-control-thumbs li {
                width: 25%;
                float: left;
                margin: 0;
            }

            .flex-control-thumbs img {
                width: 100%;
                display: block;
                opacity: .7;
                cursor: pointer;
            }

                .flex-control-thumbs img:hover {
                    opacity: 1;
                }

            .flex-control-thumbs .flex-active {
                opacity: 1;
                cursor: default;
            }

        .dropdown-submenu {
            list-style: none;
        }

        .flexslider {
            margin: 0 0 20px 0;
            background: transparent;
            border: 0;
            position: relative;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            zoom: 1;
        }

            .flexslider .slides img {
                width: auto;
            }

        .flex-direction-nav {
            *height: 0;
        }

            .flex-direction-nav a {
                width: 21px;
                height: 21px;
                margin-top: -10px;
                display: block;
                background: transparent;
                position: absolute;
                top: 50%;
                z-index: 10;
                cursor: pointer;
                text-indent: 0;
                font-size: 0;
                color: transparent;
                opacity: 1;
                -webkit-transition: all .3s ease;
            }

            .flex-direction-nav .flex-next {
                background: transparent;
                right: 0;
            }

            .flex-direction-nav .flex-prev {
                background: transparent;
                left: 0;
            }

        .flexslider:hover .flex-next {
            opacity: 1;
            right: 0;
        }

        .flexslider:hover .flex-prev {
            opacity: 1;
            left: 0;
        }

            .flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover {
                opacity: 1;
            }

        .flex-direction-nav .flex-disabled {
            opacity: 1 !important;
            filter: alpha(opacity=100);
            cursor: default;
        }

        .flexslider.flexCarousel img {
            border: 1px solid #e6e6e6;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -moz-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            box-shadow: 0 2px 0 rgba(0,0,0,.03);
            padding: 0;
            margin: 0;
        }

        .flexslider.flexCarousel .flex-direction-nav a, .flexslider.flexLinear .flex-direction-nav a, .flexslider.fadeFlex .flex-direction-nav a {
            background: #ebebeb;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15),0 2px 0 rgba(0,0,0,.03);
            -moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15),0 2px 0 rgba(0,0,0,.03);
            box-shadow: inset 0 -1px 0 rgba(0,0,0,.15),0 2px 0 rgba(0,0,0,.03);
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .flexslider.flexCarousel .flex-direction-nav .flex-next, .flexslider.flexLinear .flex-direction-nav .flex-next, .flexslider.fadeFlex .flex-direction-nav .flex-next {
            right: 0;
            top: -52px;
        }

            .flexslider.flexCarousel .flex-direction-nav .flex-next.flex-disabled, .flexslider.flexLinear .flex-direction-nav .flex-next.flex-disabled, .flexslider.fadeFlex .flex-direction-nav .flex-next.flex-disabled {
                background-color: #f6f6f6;
                -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.05),0 2px 0 rgba(0,0,0,.03);
                -moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,.05),0 2px 0 rgba(0,0,0,.03);
                box-shadow: inset 0 -1px 0 rgba(0,0,0,.05),0 2px 0 rgba(0,0,0,.03);
            }

                .flexslider.flexCarousel .flex-direction-nav .flex-next.flex-disabled:after, .flexslider.flexLinear .flex-direction-nav .flex-next.flex-disabled:after, .flexslider.fadeFlex .flex-direction-nav .flex-next.flex-disabled:after {
                    color: #c7c7c7;
                }

            .flexslider.flexCarousel .flex-direction-nav .flex-next:after, .flexslider.flexLinear .flex-direction-nav .flex-next:after, .flexslider.fadeFlex .flex-direction-nav .flex-next:after {
                color: #737373;
                font: 10px/1em 'Glyphicons Halflings';
                content: '>';
                position: absolute;
                left: 5px;
                top: 5px;
            }

        .flexslider.flexCarousel .flex-direction-nav .flex-prev, .flexslider.flexLinear .flex-direction-nav .flex-prev, .flexslider.fadeFlex .flex-direction-nav .flex-prev {
            left: auto;
            right: 26px;
            top: -52px;
        }

            .flexslider.flexCarousel .flex-direction-nav .flex-prev.flex-disabled, .flexslider.flexLinear .flex-direction-nav .flex-prev.flex-disabled, .flexslider.fadeFlex .flex-direction-nav .flex-prev.flex-disabled {
                background-color: #f6f6f6;
                -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.05),0 2px 0 rgba(0,0,0,.03);
                -moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,.05),0 2px 0 rgba(0,0,0,.03);
                box-shadow: inset 0 -1px 0 rgba(0,0,0,.05),0 2px 0 rgba(0,0,0,.03);
            }

                .flexslider.flexCarousel .flex-direction-nav .flex-prev.flex-disabled:after, .flexslider.flexLinear .flex-direction-nav .flex-prev.flex-disabled:after, .flexslider.fadeFlex .flex-direction-nav .flex-prev.flex-disabled:after {
                    color: #c7c7c7;
                }

            .flexslider.flexCarousel .flex-direction-nav .flex-prev:after, .flexslider.flexLinear .flex-direction-nav .flex-prev:after, .flexslider.fadeFlex .flex-direction-nav .flex-prev:after {
                color: #737373;
                font: 10px/1em 'Glyphicons Halflings';
                content: "<";
                position: absolute;
                left: 6px;
                top: 5px;
                font-weight: bolder;
            }

        .flexslider.flexFull .flex-direction-nav a, .flexslider.flexContent .flex-direction-nav a {
            display: block;
            width: 45px;
            height: 45px;
            margin: -22px 0 0 0;
            background: #333;
            position: absolute;
            top: 50%;
            z-index: 10;
            cursor: pointer;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-indent: 0;
            font-size: 0;
            color: transparent;
            opacity: 1;
            -webkit-transition: all .3s ease;
        }

            .flexslider.flexFull .flex-direction-nav a.flex-prev:hover, .flexslider.flexFull .flex-direction-nav a.flex-next:hover, .flexslider.flexContent .flex-direction-nav a.flex-prev:hover, .flexslider.flexContent .flex-direction-nav a.flex-next:hover {
                background: #29bbf2;
            }

            .flexslider.flexFull .flex-direction-nav a.flex-prev:after, .flexslider.flexFull .flex-direction-nav a.flex-next:after, .flexslider.flexContent .flex-direction-nav a.flex-prev:after, .flexslider.flexContent .flex-direction-nav a.flex-next:after {
                font: 16px/1em 'Glyphicons Halflings';
                left: 16px;
                top: 16px;
                font-style: normal;
                position: absolute;
                display: inline-block;
                color: #fff;
                font-weight: bolder;
            }

            .flexslider.flexFull .flex-direction-nav a.flex-prev:after, .flexslider.flexContent .flex-direction-nav a.flex-prev:after {
                content: "<";
            }

            .flexslider.flexFull .flex-direction-nav a.flex-next:after, .flexslider.flexContent .flex-direction-nav a.flex-next:after {
                content: '>';
            }

        .flexslider.flexFull {
            margin-top: 0;
        }

            .flexslider.flexFull .flex-control-nav {
                bottom: 14px;
            }

            .flexslider.flexFull .flex-control-paging li a {
                background: #737373;
            }

                .flexslider.flexFull .flex-control-paging li a.flex-active, .flexslider.flexFull .flex-control-paging li a:hover {
                    background: #333;
                }

            .flexslider.flexFull .pagination ul > li.prev > a {
                position: relative;
            }

                .flexslider.flexFull .pagination ul > li.prev > a:after {
                    font: 12px/1em 'Glyphicons Halflings';
                    font-size: 10px;
                    left: 12px;
                    top: 12px;
                    content: "\e079";
                    font-style: normal;
                    position: absolute;
                    display: inline-block;
                    color: #737373;
                }

            .flexslider.flexFull .container {
                position: relative;
            }

            .flexslider.flexFull .flowContent {
                position: absolute;
                bottom: 20px;
                left: 0;
            }

            .flexslider.flexFull .easyBox {
                max-width: 300px;
                background: #333;
                background: rgba(51,51,51,.3);
                border: 0;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }

                .flexslider.flexFull .easyBox * {
                    color: #fff;
                }

            .flexslider.flexFull .container.leftUp .flowContent {
                top: 20px;
                left: 0;
                bottom: auto;
                right: auto;
            }

            .flexslider.flexFull .container.leftDown .flowContent {
                top: auto;
                left: 0;
                bottom: 20px;
                right: auto;
            }

            .flexslider.flexFull .container.rightUp .flowContent {
                top: 20px;
                left: auto;
                bottom: auto;
                right: 0;
            }

            .flexslider.flexFull .container.rightDown .flowContent {
                top: auto;
                left: auto;
                bottom: 20px;
                right: 0;
            }

            .flexslider.flexFull .container.inCenter .flowContent {
                top: 50%;
                margin-top: -90px;
                left: 50%;
                margin-left: -150px;
                right: auto;
                bottom: auto;
            }

            .flexslider.flexFull .container {
                height: 400px;
            }

        .flexslider.flexContent {
            margin: 0;
        }

            .flexslider.flexContent .container {
                position: static;
            }

            .flexslider.flexContent li > div {
                min-height: 310px;
                padding: 45px 0;
            }

            .flexslider.flexContent .flex-direction-nav a {
                opacity: 0;
            }

            .flexslider.flexContent:hover .flex-direction-nav a {
                opacity: 1;
            }

            .flexslider.flexContent .backColor2 {
                background: #fcfcfc;
                min-height: 310px;
            }

        .mappcontainer {
            background: #00a0d7 !important;
            padding: 30px 0;
            color: #fff;
        }

            .mappcontainer h4 {
                text-align: center;
                font-size: 36px;
                color: #FFF;
                padding: 20px 0;
                line-height: 40px;
                ;
                font-family: 'Roboto',sans-serif;
                font-weight: 100;
                font-style: normal;
            }

            .mappcontainer p {
                color: #FFF;
                font-size: 14px;
            }

        .btn {
            color: #fff;
            background: #00a0d7;
            border: 1px solid #FFF;
            margin: 20px 0;
        }

        .ratingValue {
            font-size: 22px;
        }

        canvas {
            display: block;
            vertical-align: bottom;
        }

        .count-particles {
            background: #002;
            position: absolute;
            top: 48px;
            left: 0;
            width: 80px;
            color: #13E8E9;
            font-size: .8em;
            text-align: left;
            text-indent: 4px;
            line-height: 14px;
            padding-bottom: 2px;
            font-family: Helvetica,Arial,sans-serif;
            font-weight: 700;
        }

        .js-count-particles {
            font-size: 1.1em;
        }

        #stats, .count-particles {
            -webkit-user-select: none;
            margin-top: 5px;
            margin-left: 5px;
        }

        #stats {
            border-radius: 3px 3px 0 0;
            overflow: hidden;
        }

        .count-particles {
            border-radius: 0 0 3px 3px;
        }

        .vivpart {
            height: 400px;
        }

        #particles-js {
            width: 100%;
            height: 100%;
            background-color: #000000;
            background-image: url('');
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
        }

        .vivc {
            z-index: 999;
            position: relative;
            bottom: 360px;
        }

        .viv-text {
            color: #fff;
            text-align: center;
            font-family: 'Roboto',sans-serif;
            font-size: 60px;
            font-weight: 100;
            line-height: 60px;
        }

        .years {
            text-align: center;
            margin-top: 25px;
            font-family: 'Roboto',sans-serif;
            font-size: 22px;
            font-weight: 400;
            line-height: 28px;
        }

        .years2 {
            margin-top: 10px;
        }

        .years3 {
            text-align: center;
            margin-top: 25px;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1px;
            padding-bottom: 20px;
        }

        .margTop30px {
            margin-top: 30px;
        }

        .our-service {
            margin-top: 30px;
        }

            .our-service .single-service {
                text-align: center;
                float: left;
                width: 32.3333333333%;
                position: relative;
                border-bottom: 1px solid #f1f1f1;
            }

                .our-service .single-service .icon {
                    padding: 68px 0;
                }

                .our-service .single-service.border_right {
                    border-right: 1px solid #f1f1f1;
                }

        .our-service_home .practise_item_wrapper {
            margin-top: 30px;
        }

        .our-service .practise_item_wrapper {
            margin-top: 30px;
            border-bottom: none;
        }

        .our-service .service-item.border_top {
            border-top: 1px solid #f1f1f1;
        }

        .our-service .single-service .icon span:before {
            font-size: 62px;
        }

        .our-service .single-service .icon h4 {
            position: relative;
            margin-top: 20px;
            font-size: 14px;
        }

        .our-service .single-service .hover_overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #00c4fc;
            color: #fff;
            text-align: center;
            padding-top: 0;
            transform: scale(.8);
            -webkit-transform: scale(.8);
            -moz-transform: scale(.8);
            -ms-transform: scale(.8);
            -o-transform: scale(.8);
            opacity: 0;
            visibility: hidden;
        }

            .our-service .single-service .hover_overlay h4 {
                color: #fff;
                margin-top: 80px;
            }

            .our-service .single-service .hover_overlay a {
                color: #fff;
                line-height: 36px;
                width: 115px;
                text-align: center;
                border: 1px solid #fff;
                margin-top: 30px;
                padding: 10px;
            }

        .our-service .single-service:hover .hover_overlay {
            transform: scale(1,1);
            -webkit-transform: scale(1,1);
            -moz-transform: scale(1,1);
            -ms-transform: scale(1,1);
            -o-transform: scale(1,1);
            opacity: 1;
            visibility: visible;
        }

        .noborBtm {
            border-bottom: none !important;
        }

        .cta {
            margin: 0 auto;
            text-align: center;
        }

        .mappcontainer {
            background: #00a0d7 !important;
            padding: 30px 0;
            color: #fff;
        }

            .mappcontainer h4 {
                text-align: center;
                font-size: 36px;
                color: #FFF;
                padding: 20px 0;
                line-height: 40px;
                ;
                font-family: 'Roboto',sans-serif;
                font-weight: 100;
                font-style: normal;
            }

            .mappcontainer p {
                color: #FFF;
                font-size: 14px;
            }

        .btn {
            color: #fff;
            background: #00a0d7;
            border: 1px solid #FFF;
            margin: 20px 0;
        }

        .ratingValue {
            font-size: 22px;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: local('Roboto Thin'),local('Roboto-Thin'),url(https://fonts.gstatic.com/s/roboto/v16/ty9dfvLAziwdqQ2dHoyjphTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
            unicode-range: U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: local('Roboto Thin'),local('Roboto-Thin'),url(https://fonts.gstatic.com/s/roboto/v16/frNV30OaYdlFRtH2VnZZdhTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
            unicode-range: U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: local('Roboto Thin'),local('Roboto-Thin'),url(https://fonts.gstatic.com/s/roboto/v16/gwVJDERN2Amz39wrSoZ7FxTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: local('Roboto Thin'),local('Roboto-Thin'),url(https://fonts.gstatic.com/s/roboto/v16/aZMswpodYeVhtRvuABJWvBTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: local('Roboto Thin'),local('Roboto-Thin'),url(https://fonts.gstatic.com/s/roboto/v16/VvXUGKZXbHtX_S_VCTLpGhTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
            unicode-range: U+0102-0103,U+1EA0-1EF9,U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: local('Roboto Thin'),local('Roboto-Thin'),url(https://fonts.gstatic.com/s/roboto/v16/e7MeVAyvogMqFwwl61PKhBTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
            unicode-range: U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: local('Roboto Thin'),local('Roboto-Thin'),url(https://fonts.gstatic.com/s/roboto/v16/2tsd397wLxj96qwHyNIkxPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'),local('Roboto-Regular'),url(https://fonts.gstatic.com/s/roboto/v16/ek4gzZ-GeXAPcSbHtCeQI_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'),local('Roboto-Regular'),url(https://fonts.gstatic.com/s/roboto/v16/mErvLBYg_cXG3rLvUsKT_fesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'),local('Roboto-Regular'),url(https://fonts.gstatic.com/s/roboto/v16/-2n2p-_Y08sg57CNWQfKNvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'),local('Roboto-Regular'),url(https://fonts.gstatic.com/s/roboto/v16/u0TOpm082MNkS5K0Q4rhqvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'),local('Roboto-Regular'),url(https://fonts.gstatic.com/s/roboto/v16/NdF9MtnOpLzo-noMoG0miPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0102-0103,U+1EA0-1EF9,U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'),local('Roboto-Regular'),url(https://fonts.gstatic.com/s/roboto/v16/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'),local('Roboto-Regular'),url(https://fonts.gstatic.com/s/roboto/v16/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2');
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'),local('Roboto-Bold'),url(https://fonts.gstatic.com/s/roboto/v16/77FXFjRbGzN4aCrSFhlh3hJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'),local('Roboto-Bold'),url(https://fonts.gstatic.com/s/roboto/v16/isZ-wbCXNKAbnjo6_TwHThJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'),local('Roboto-Bold'),url(https://fonts.gstatic.com/s/roboto/v16/UX6i4JxQDm3fVTc1CPuwqhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'),local('Roboto-Bold'),url(https://fonts.gstatic.com/s/roboto/v16/jSN2CGVDbcVyCnfJfjSdfBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'),local('Roboto-Bold'),url(https://fonts.gstatic.com/s/roboto/v16/PwZc-YbIL414wB9rB1IAPRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0102-0103,U+1EA0-1EF9,U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'),local('Roboto-Bold'),url(https://fonts.gstatic.com/s/roboto/v16/97uahxiqZRoncBaCEI3aWxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'),local('Roboto-Bold'),url(https://fonts.gstatic.com/s/roboto/v16/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, nav, section {
            display: block;
        }

        audio, canvas, video {
            display: inline-block;
            *display: inline;
            *zoom: 1;
        }

        html {
            font-size: 100%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        a:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        a:hover, a:active {
            outline: 0;
        }

        sub, sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline;
        }

        sup {
            top: -.5em;
        }

        sub {
            bottom: -.25em;
        }

        img {
            max-width: 99%;
            width: auto \9;
            height: auto;
            vertical-align: middle;
            border: 0;
            -ms-interpolation-mode: bicubic;
        }

        #map_canvas img, .google-maps img {
            max-width: none;
        }

        button, input, select, textarea {
            margin: 0;
            font-size: 100%;
            vertical-align: middle;
        }

        button, input {
            *overflow: visible;
            line-height: normal;
        }

            button::-moz-focus-inner, input::-moz-focus-inner {
                padding: 0;
                border: 0;
            }

            button, html input[type="button"], input[type="reset"], input[type="submit"] {
                -webkit-appearance: button;
                cursor: pointer;
            }

            label, select, button, input[type="button"], input[type="reset"], input[type="submit"], input[type="radio"], input[type="checkbox"] {
                cursor: pointer;
            }

            input[type="search"] {
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                -webkit-appearance: textfield;
            }

                input[type="search"]::-webkit-search-decoration, input[type="search"]::-webkit-search-cancel-button {
                    -webkit-appearance: none;
                }

        textarea {
            overflow: auto;
            vertical-align: top;
        }

        @media print {
            * {
                text-shadow: none !important;
                color: #000 !important;
                background: transparent !important;
                box-shadow: none !important;
            }

            a, a:visited {
                text-decoration: underline;
            }

                a[href]:after {
                    content: " (" attr(href) ")";
                }

            abbr[title]:after {
                content: " (" attr(title) ")";
            }

            .ir a:after, a[href^="javascript:"]:after, a[href^="#"]:after {
                content: "";
            }

            pre, blockquote {
                border: 1px solid #999;
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

            tr, img {
                page-break-inside: avoid;
            }

            img {
                max-width: 100% !important;
            }

            @page {
                margin: .5cm;
            }

            p, h2, h3 {
                orphans: 3;
                widows: 3;
            }

            h2, h3 {
                page-break-after: avoid;
            }
        }

        .clearfix {
            *zoom: 1;
        }

            .clearfix:before, .clearfix:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .clearfix:after {
                clear: both;
            }

        .hide-text {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .input-block-level {
            display: block;
            width: 100%;
            min-height: 31px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Roboto',sans-serif;
            font-size: 13px;
            line-height: 21px;
            color: #595959;
            background-color: #fff;
        }

        a {
            color: #333;
            text-decoration: none;
        }

            a:hover {
                color: #29bbf2;
                text-decoration: underline;
            }

        .img-rounded {
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }

        .img-polaroid {
            padding: 4px;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0,0,0,.2);
            -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.1);
            -moz-box-shadow: 0 1px 3px rgba(0,0,0,.1);
            box-shadow: 0 1px 3px rgba(0,0,0,.1);
        }

        .img-circle {
            -webkit-border-radius: 500px;
            -moz-border-radius: 500px;
            border-radius: 500px;
        }

        .row {
            margin-left: -20px;
            *zoom: 1;
        }

            .row:before, .row:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .row:after {
                clear: both;
            }

            .row:before, .row:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .row:after {
                clear: both;
            }

        [class*="span"] {
            float: left;
            min-height: 1px;
            margin-left: 20px;
        }

        .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
            width: 940px;
        }

        .span12 {
            width: 940px;
        }

        .span11 {
            width: 860px;
        }

        .span10 {
            width: 780px;
        }

        .span9 {
            width: 700px;
        }

        .span8 {
            width: 620px;
        }

        .span7 {
            width: 540px;
        }

        .span6 {
            width: 460px;
        }

        .span5 {
            width: 380px;
        }

        .span4 {
            width: 300px;
        }

        .span3 {
            width: 220px;
        }

        .span2 {
            width: 140px;
        }

        .span1 {
            width: 60px;
        }

        .offset12 {
            margin-left: 980px;
        }

        .offset11 {
            margin-left: 900px;
        }

        .offset10 {
            margin-left: 820px;
        }

        .offset9 {
            margin-left: 740px;
        }

        .offset8 {
            margin-left: 660px;
        }

        .offset7 {
            margin-left: 580px;
        }

        .offset6 {
            margin-left: 500px;
        }

        .offset5 {
            margin-left: 420px;
        }

        .offset4 {
            margin-left: 340px;
        }

        .offset3 {
            margin-left: 260px;
        }

        .offset2 {
            margin-left: 180px;
        }

        .offset1 {
            margin-left: 100px;
        }

        .row {
            margin-left: -20px;
            *zoom: 1;
        }

            .row:before, .row:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .row:after {
                clear: both;
            }

            .row:before, .row:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .row:after {
                clear: both;
            }

        [class*="span"] {
            float: left;
            min-height: 1px;
            margin-left: 20px;
        }

        .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
            width: 940px;
        }

        .span12 {
            width: 940px;
        }

        .span11 {
            width: 860px;
        }

        .span10 {
            width: 780px;
        }

        .span9 {
            width: 700px;
        }

        .span8 {
            width: 620px;
        }

        .span7 {
            width: 540px;
        }

        .span6 {
            width: 460px;
        }

        .span5 {
            width: 380px;
        }

        .span4 {
            width: 300px;
        }

        .span3 {
            width: 220px;
        }

        .span2 {
            width: 140px;
        }

        .span1 {
            width: 60px;
        }

        .offset12 {
            margin-left: 980px;
        }

        .offset11 {
            margin-left: 900px;
        }

        .offset10 {
            margin-left: 820px;
        }

        .offset9 {
            margin-left: 740px;
        }

        .offset8 {
            margin-left: 660px;
        }

        .offset7 {
            margin-left: 580px;
        }

        .offset6 {
            margin-left: 500px;
        }

        .offset5 {
            margin-left: 420px;
        }

        .offset4 {
            margin-left: 340px;
        }

        .offset3 {
            margin-left: 260px;
        }

        .offset2 {
            margin-left: 180px;
        }

        .offset1 {
            margin-left: 100px;
        }

        .row-fluid {
            width: 100%;
            *zoom: 1;
        }

            .row-fluid:before, .row-fluid:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .row-fluid:after {
                clear: both;
            }

            .row-fluid:before, .row-fluid:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .row-fluid:after {
                clear: both;
            }

            .row-fluid [class*="span"] {
                display: block;
                width: 100%;
                min-height: 31px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                float: left;
                margin-left: 2.1276595744681%;
                *margin-left: 2.0744680851064%;
            }

                .row-fluid [class*="span"]:first-child {
                    margin-left: 0;
                }

            .row-fluid .controls-row [class*="span"] + [class*="span"] {
                margin-left: 2.1276595744681%;
            }

            .row-fluid .span12 {
                width: 100%;
                *width: 99.946808510638%;
            }

            .row-fluid .span11 {
                width: 91.489361702128%;
                *width: 91.436170212766%;
            }

            .row-fluid .span10 {
                width: 82.978723404255%;
                *width: 82.925531914894%;
            }

            .row-fluid .span9 {
                width: 74.468085106383%;
                *width: 74.414893617021%;
            }

            .row-fluid .span8 {
                width: 65.957446808511%;
                *width: 65.904255319149%;
            }

            .row-fluid .span7 {
                width: 57.446808510638%;
                *width: 57.393617021277%;
            }

            .row-fluid .span6 {
                width: 48.936170212766%;
                *width: 48.882978723404%;
            }

            .row-fluid .span5 {
                width: 40.425531914894%;
                *width: 40.372340425532%;
            }

            .row-fluid .span4 {
                width: 31.914893617021%;
                *width: 31.86170212766%;
            }

            .row-fluid .span3 {
                width: 23.404255319149%;
                *width: 23.351063829787%;
            }

            .row-fluid .span2 {
                width: 14.893617021277%;
                *width: 14.840425531915%;
            }

            .row-fluid .span1 {
                width: 6.3829787234043%;
                *width: 6.3297872340426%;
            }

            .row-fluid .offset12 {
                margin-left: 104.25531914894%;
                *margin-left: 104.14893617021%;
            }

                .row-fluid .offset12:first-child {
                    margin-left: 102.12765957447%;
                    *margin-left: 102.02127659574%;
                }

            .row-fluid .offset11 {
                margin-left: 95.744680851064%;
                *margin-left: 95.63829787234%;
            }

                .row-fluid .offset11:first-child {
                    margin-left: 93.617021276596%;
                    *margin-left: 93.510638297872%;
                }

            .row-fluid .offset10 {
                margin-left: 87.234042553191%;
                *margin-left: 87.127659574468%;
            }

                .row-fluid .offset10:first-child {
                    margin-left: 85.106382978723%;
                    *margin-left: 85%;
                }

            .row-fluid .offset9 {
                margin-left: 78.723404255319%;
                *margin-left: 78.617021276596%;
            }

                .row-fluid .offset9:first-child {
                    margin-left: 76.595744680851%;
                    *margin-left: 76.489361702128%;
                }

            .row-fluid .offset8 {
                margin-left: 70.212765957447%;
                *margin-left: 70.106382978723%;
            }

                .row-fluid .offset8:first-child {
                    margin-left: 68.085106382979%;
                    *margin-left: 67.978723404255%;
                }

            .row-fluid .offset7 {
                margin-left: 61.702127659574%;
                *margin-left: 61.595744680851%;
            }

                .row-fluid .offset7:first-child {
                    margin-left: 59.574468085106%;
                    *margin-left: 59.468085106383%;
                }

            .row-fluid .offset6 {
                margin-left: 53.191489361702%;
                *margin-left: 53.085106382979%;
            }

                .row-fluid .offset6:first-child {
                    margin-left: 51.063829787234%;
                    *margin-left: 50.957446808511%;
                }

            .row-fluid .offset5 {
                margin-left: 44.68085106383%;
                *margin-left: 44.574468085106%;
            }

                .row-fluid .offset5:first-child {
                    margin-left: 42.553191489362%;
                    *margin-left: 42.446808510638%;
                }

            .row-fluid .offset4 {
                margin-left: 36.170212765957%;
                *margin-left: 36.063829787234%;
            }

                .row-fluid .offset4:first-child {
                    margin-left: 34.042553191489%;
                    *margin-left: 33.936170212766%;
                }

            .row-fluid .offset3 {
                margin-left: 27.659574468085%;
                *margin-left: 27.553191489362%;
            }

                .row-fluid .offset3:first-child {
                    margin-left: 25.531914893617%;
                    *margin-left: 25.425531914894%;
                }

            .row-fluid .offset2 {
                margin-left: 19.148936170213%;
                *margin-left: 19.042553191489%;
            }

                .row-fluid .offset2:first-child {
                    margin-left: 17.021276595745%;
                    *margin-left: 16.914893617021%;
                }

            .row-fluid .offset1 {
                margin-left: 10.63829787234%;
                *margin-left: 10.531914893617%;
            }

                .row-fluid .offset1:first-child {
                    margin-left: 8.5106382978723%;
                    *margin-left: 8.4042553191489%;
                }

        .row-fluid {
            width: 100%;
            *zoom: 1;
        }

            .row-fluid:before, .row-fluid:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .row-fluid:after {
                clear: both;
            }

            .row-fluid:before, .row-fluid:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .row-fluid:after {
                clear: both;
            }

            .row-fluid [class*="span"] {
                display: block;
                width: 100%;
                min-height: 31px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                float: left;
                margin-left: 2.1276595744681%;
                *margin-left: 2.0744680851064%;
            }

                .row-fluid [class*="span"]:first-child {
                    margin-left: 0;
                }

            .row-fluid .controls-row [class*="span"] + [class*="span"] {
                margin-left: 2.1276595744681%;
            }

            .row-fluid .span12 {
                width: 100%;
                *width: 99.946808510638%;
            }

            .row-fluid .span11 {
                width: 91.489361702128%;
                *width: 91.436170212766%;
            }

            .row-fluid .span10 {
                width: 82.978723404255%;
                *width: 82.925531914894%;
            }

            .row-fluid .span9 {
                width: 74.468085106383%;
                *width: 74.414893617021%;
            }

            .row-fluid .span8 {
                width: 65.957446808511%;
                *width: 65.904255319149%;
            }

            .row-fluid .span7 {
                width: 57.446808510638%;
                *width: 57.393617021277%;
            }

            .row-fluid .span6 {
                width: 48.936170212766%;
                *width: 48.882978723404%;
            }

            .row-fluid .span5 {
                width: 40.425531914894%;
                *width: 40.372340425532%;
            }

            .row-fluid .span4 {
                width: 31.914893617021%;
                *width: 31.86170212766%;
            }

            .row-fluid .span3 {
                width: 23.404255319149%;
                *width: 23.351063829787%;
            }

            .row-fluid .span2 {
                width: 14.893617021277%;
                *width: 14.840425531915%;
            }

            .row-fluid .span1 {
                width: 6.3829787234043%;
                *width: 6.3297872340426%;
            }

            .row-fluid .offset12 {
                margin-left: 104.25531914894%;
                *margin-left: 104.14893617021%;
            }

                .row-fluid .offset12:first-child {
                    margin-left: 102.12765957447%;
                    *margin-left: 102.02127659574%;
                }

            .row-fluid .offset11 {
                margin-left: 95.744680851064%;
                *margin-left: 95.63829787234%;
            }

                .row-fluid .offset11:first-child {
                    margin-left: 93.617021276596%;
                    *margin-left: 93.510638297872%;
                }

            .row-fluid .offset10 {
                margin-left: 87.234042553191%;
                *margin-left: 87.127659574468%;
            }

                .row-fluid .offset10:first-child {
                    margin-left: 85.106382978723%;
                    *margin-left: 85%;
                }

            .row-fluid .offset9 {
                margin-left: 78.723404255319%;
                *margin-left: 78.617021276596%;
            }

                .row-fluid .offset9:first-child {
                    margin-left: 76.595744680851%;
                    *margin-left: 76.489361702128%;
                }

            .row-fluid .offset8 {
                margin-left: 70.212765957447%;
                *margin-left: 70.106382978723%;
            }

                .row-fluid .offset8:first-child {
                    margin-left: 68.085106382979%;
                    *margin-left: 67.978723404255%;
                }

            .row-fluid .offset7 {
                margin-left: 61.702127659574%;
                *margin-left: 61.595744680851%;
            }

                .row-fluid .offset7:first-child {
                    margin-left: 59.574468085106%;
                    *margin-left: 59.468085106383%;
                }

            .row-fluid .offset6 {
                margin-left: 53.191489361702%;
                *margin-left: 53.085106382979%;
            }

                .row-fluid .offset6:first-child {
                    margin-left: 51.063829787234%;
                    *margin-left: 50.957446808511%;
                }

            .row-fluid .offset5 {
                margin-left: 44.68085106383%;
                *margin-left: 44.574468085106%;
            }

                .row-fluid .offset5:first-child {
                    margin-left: 42.553191489362%;
                    *margin-left: 42.446808510638%;
                }

            .row-fluid .offset4 {
                margin-left: 36.170212765957%;
                *margin-left: 36.063829787234%;
            }

                .row-fluid .offset4:first-child {
                    margin-left: 34.042553191489%;
                    *margin-left: 33.936170212766%;
                }

            .row-fluid .offset3 {
                margin-left: 27.659574468085%;
                *margin-left: 27.553191489362%;
            }

                .row-fluid .offset3:first-child {
                    margin-left: 25.531914893617%;
                    *margin-left: 25.425531914894%;
                }

            .row-fluid .offset2 {
                margin-left: 19.148936170213%;
                *margin-left: 19.042553191489%;
            }

                .row-fluid .offset2:first-child {
                    margin-left: 17.021276595745%;
                    *margin-left: 16.914893617021%;
                }

            .row-fluid .offset1 {
                margin-left: 10.63829787234%;
                *margin-left: 10.531914893617%;
            }

                .row-fluid .offset1:first-child {
                    margin-left: 8.5106382978723%;
                    *margin-left: 8.4042553191489%;
                }

            [class*="span"].hide, .row-fluid [class*="span"].hide {
                display: none;
            }

            [class*="span"].pull-right, .row-fluid [class*="span"].pull-right {
                float: right;
            }

        .container {
            margin-right: auto;
            margin-left: auto;
            *zoom: 1;
        }

            .container:before, .container:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .container:after {
                clear: both;
            }

            .container:before, .container:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .container:after {
                clear: both;
            }

        .container-fluid {
            padding-right: 20px;
            padding-left: 20px;
            *zoom: 1;
        }

            .container-fluid:before, .container-fluid:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .container-fluid:after {
                clear: both;
            }

            .container-fluid:before, .container-fluid:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .container-fluid:after {
                clear: both;
            }

        p {
            margin: 0 0 10.5px;
        }

        .lead {
            margin-bottom: 21px;
            font-size: 19.5px;
            font-weight: 200;
            line-height: 31.5px;
        }

        small {
            font-size: 85%;
        }

        strong {
            font-weight: 700;
        }

        em {
            font-style: italic;
        }

        cite {
            font-style: normal;
        }

        .muted {
            color: #999;
        }

        a.muted:hover {
            color: gray;
        }

        .text-warning {
            color: #c09853;
        }

        a.text-warning:hover {
            color: #a47e3c;
        }

        .text-error {
            color: #b94a48;
        }

        a.text-error:hover {
            color: #953b39;
        }

        .text-info {
            color: #3a87ad;
        }

        a.text-info:hover {
            color: #2d6987;
        }

        .text-success {
            color: #468847;
        }

        a.text-success:hover {
            color: #356635;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 10.5px 0;
            font-weight: 400;
            line-height: 21px;
            color: inherit;
            text-rendering: optimizelegibility;
            font-family: inherit;
        }

            h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
                font-weight: 400;
                line-height: 1;
                color: #999;
            }

        h1, h2, h3 {
            line-height: 42px;
        }

        h1 {
            font-size: 35.75px;
        }

        h2 {
            font-size: 29.25px;
        }

        h3 {
            font-size: 22.75px;
        }

        h4 {
            font-size: 16.25px;
        }

        h5 {
            font-size: 13px;
        }

        h6 {
            font-size: 11.05px;
        }

        h1 small {
            font-size: 22.75px;
        }

        h2 small {
            font-size: 16.25px;
        }

        h3 small {
            font-size: 13px;
        }

        h4 small {
            font-size: 13px;
        }

        .page-header {
            padding-bottom: 9.5px;
            margin: 21px 0 31.5px;
            border-bottom: 1px solid #eee;
        }

        ul, ol {
            padding: 0;
            margin: 0 0 10.5px 25px;
        }

            ul ul, ul ol, ol ol, ol ul {
                margin-bottom: 0;
            }

        li {
            line-height: 21px;
        }

        ul.unstyled, ol.unstyled {
            margin-left: 0;
            list-style: none;
        }

        ul.inline, ol.inline {
            margin-left: 0;
            list-style: none;
        }

            ul.inline > li, ol.inline > li {
                display: inline-block;
                padding-left: 5px;
                padding-right: 5px;
            }

        dl {
            margin-bottom: 21px;
        }

        dt, dd {
            line-height: 21px;
        }

        dt {
            font-weight: 700;
        }

        dd {
            margin-left: 10.5px;
        }

        .dl-horizontal {
            *zoom: 1;
        }

            .dl-horizontal:before, .dl-horizontal:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .dl-horizontal:after {
                clear: both;
            }

            .dl-horizontal:before, .dl-horizontal:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .dl-horizontal:after {
                clear: both;
            }

            .dl-horizontal dt {
                float: left;
                width: 160px;
                clear: left;
                text-align: right;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .dl-horizontal dd {
                margin-left: 180px;
            }

        hr {
            margin: 21px 0;
            border: 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #fff;
        }

        abbr[title], abbr[data-original-title] {
            cursor: help;
            border-bottom: 1px dotted #999;
        }

        abbr.initialism {
            font-size: 90%;
            text-transform: uppercase;
        }

        blockquote {
            padding: 0 0 0 15px;
            margin: 0 0 21px;
            border-left: 5px solid #eee;
        }

            blockquote p {
                margin-bottom: 0;
                font-size: 16px;
                line-height: 26.25px;
            }

            blockquote small {
                display: block;
                line-height: 21px;
                color: #999;
            }

                blockquote small:before {
                    content: '\2014 \00A0';
                }

            blockquote.pull-right {
                float: right;
                padding-right: 15px;
                padding-left: 0;
                border-right: 5px solid #eee;
                border-left: 0;
            }

                blockquote.pull-right p, blockquote.pull-right small {
                    text-align: right;
                }

                    blockquote.pull-right small:before {
                        content: '';
                    }

                    blockquote.pull-right small:after {
                        content: '\00A0 \2014';
                    }

            q:before, q:after, blockquote:before, blockquote:after {
                content: "";
            }

        address {
            display: block;
            margin-bottom: 21px;
            font-style: normal;
            line-height: 21px;
        }

        code, pre {
            padding: 0 3px 2px;
            font-family: Monaco,Menlo,Consolas,"Courier New",monospace;
            font-size: 11px;
            color: #333;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        code {
            padding: 2px 4px;
            color: #d14;
            background-color: #f7f7f9;
            border: 1px solid #e1e1e8;
            white-space: nowrap;
        }

        pre {
            display: block;
            padding: 10px;
            margin: 0 0 10.5px;
            font-size: 12px;
            line-height: 21px;
            word-break: break-all;
            word-wrap: break-word;
            white-space: pre;
            white-space: pre-wrap;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border: 1px solid rgba(0,0,0,.15);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

            pre.prettyprint {
                margin-bottom: 21px;
            }

            pre code {
                padding: 0;
                color: inherit;
                white-space: pre;
                white-space: pre-wrap;
                background-color: transparent;
                border: 0;
            }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll;
        }

        form {
            margin: 0 0 21px;
        }

        fieldset {
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            display: block;
            width: 100%;
            padding: 0;
            margin-bottom: 21px;
            font-size: 19.5px;
            line-height: 42px;
            color: #333;
            border: 0;
            border-bottom: 1px solid #e5e5e5;
        }

            legend small {
                font-size: 15.75px;
                color: #999;
            }

        label, input, button, select, textarea {
            font-size: 13px;
            font-weight: 400;
            line-height: 21px;
        }

        input, button, select, textarea {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
            display: inline-block;
            height: 21px;
            padding: 4px 6px;
            margin-bottom: 10.5px;
            font-size: 13px;
            line-height: 21px;
            color: #555;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            vertical-align: middle;
        }

        input, textarea, .uneditable-input {
            width: 206px;
        }

        textarea {
            height: auto;
        }

        textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
            background-color: #fff;
            border: 1px solid #e6e6e6;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border linear .2s,box-shadow linear .2s;
            -moz-transition: border linear .2s,box-shadow linear .2s;
            -o-transition: border linear .2s,box-shadow linear .2s;
            transition: border linear .2s,box-shadow linear .2s;
        }

            textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus {
                border-color: rgba(82,168,236,.8);
                outline: 0;
                outline: thin dotted \9;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
                -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
            }

        input[type="radio"], input[type="checkbox"] {
            margin: 4px 0 0;
            *margin-top: 0;
            margin-top: 1px \9;
            line-height: normal;
        }

        input[type="file"], input[type="image"], input[type="submit"], input[type="reset"], input[type="button"], input[type="radio"], input[type="checkbox"] {
            width: auto;
        }

        select, input[type="file"] {
            height: 31px;
            *margin-top: 4px;
            line-height: 31px;
        }

        select {
            width: 220px;
            border: 1px solid #e6e6e6;
            background-color: #fff;
        }

            select[multiple], select[size] {
                height: auto;
            }

            select:focus, input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
                outline: thin dotted #333;
                outline: 5px auto -webkit-focus-ring-color;
                outline-offset: -2px;
            }

        .uneditable-input, .uneditable-textarea {
            color: #999;
            background-color: #fcfcfc;
            border-color: #e6e6e6;
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.025);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.025);
            box-shadow: inset 0 1px 2px rgba(0,0,0,.025);
            cursor: not-allowed;
        }

        .uneditable-input {
            overflow: hidden;
            white-space: nowrap;
        }

        .uneditable-textarea {
            width: auto;
            height: auto;
        }

        input:-moz-placeholder, textarea:-moz-placeholder {
            color: #999;
        }

        input:-ms-input-placeholder, textarea:-ms-input-placeholder {
            color: #999;
        }

        input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
            color: #999;
        }

        input:-moz-placeholder, textarea:-moz-placeholder {
            color: #999;
        }

        input:-ms-input-placeholder, textarea:-ms-input-placeholder {
            color: #999;
        }

        input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
            color: #999;
        }

        .radio, .checkbox {
            min-height: 21px;
            padding-left: 20px;
        }

            .radio input[type="radio"], .checkbox input[type="checkbox"] {
                float: left;
                margin-left: -20px;
            }

        .controls > .radio:first-child, .controls > .checkbox:first-child {
            padding-top: 5px;
        }

        .radio.inline, .checkbox.inline {
            display: inline-block;
            padding-top: 5px;
            margin-bottom: 0;
            vertical-align: middle;
        }

            .radio.inline + .radio.inline, .checkbox.inline + .checkbox.inline {
                margin-left: 10px;
            }

        .input-mini {
            width: 60px;
        }

        .input-small {
            width: 90px;
        }

        .input-medium {
            width: 150px;
        }

        .input-large {
            width: 210px;
        }

        .input-xlarge {
            width: 270px;
        }

        .input-xxlarge {
            width: 530px;
        }

        input[class*="span"], select[class*="span"], textarea[class*="span"], .uneditable-input[class*="span"], .row-fluid input[class*="span"], .row-fluid select[class*="span"], .row-fluid textarea[class*="span"], .row-fluid .uneditable-input[class*="span"] {
            float: none;
            margin-left: 0;
        }

        .input-append input[class*="span"], .input-append .uneditable-input[class*="span"], .input-prepend input[class*="span"], .input-prepend .uneditable-input[class*="span"], .row-fluid input[class*="span"], .row-fluid select[class*="span"], .row-fluid textarea[class*="span"], .row-fluid .uneditable-input[class*="span"], .row-fluid .input-prepend [class*="span"], .row-fluid .input-append [class*="span"] {
            display: inline-block;
        }

        input, textarea, .uneditable-input {
            margin-left: 0;
        }

        .controls-row [class*="span"] + [class*="span"] {
            margin-left: 20px;
        }

        input.span12, textarea.span12, .uneditable-input.span12 {
            width: 926px;
        }

        input.span11, textarea.span11, .uneditable-input.span11 {
            width: 846px;
        }

        input.span10, textarea.span10, .uneditable-input.span10 {
            width: 766px;
        }

        input.span9, textarea.span9, .uneditable-input.span9 {
            width: 686px;
        }

        input.span8, textarea.span8, .uneditable-input.span8 {
            width: 606px;
        }

        input.span7, textarea.span7, .uneditable-input.span7 {
            width: 526px;
        }

        input.span6, textarea.span6, .uneditable-input.span6 {
            width: 446px;
        }

        input.span5, textarea.span5, .uneditable-input.span5 {
            width: 366px;
        }

        input.span4, textarea.span4, .uneditable-input.span4 {
            width: 286px;
        }

        input.span3, textarea.span3, .uneditable-input.span3 {
            width: 206px;
        }

        input.span2, textarea.span2, .uneditable-input.span2 {
            width: 126px;
        }

        input.span1, textarea.span1, .uneditable-input.span1 {
            width: 46px;
        }

        input, textarea, .uneditable-input {
            margin-left: 0;
        }

        .controls-row [class*="span"] + [class*="span"] {
            margin-left: 20px;
        }

        input.span12, textarea.span12, .uneditable-input.span12 {
            width: 926px;
        }

        input.span11, textarea.span11, .uneditable-input.span11 {
            width: 846px;
        }

        input.span10, textarea.span10, .uneditable-input.span10 {
            width: 766px;
        }

        input.span9, textarea.span9, .uneditable-input.span9 {
            width: 686px;
        }

        input.span8, textarea.span8, .uneditable-input.span8 {
            width: 606px;
        }

        input.span7, textarea.span7, .uneditable-input.span7 {
            width: 526px;
        }

        input.span6, textarea.span6, .uneditable-input.span6 {
            width: 446px;
        }

        input.span5, textarea.span5, .uneditable-input.span5 {
            width: 366px;
        }

        input.span4, textarea.span4, .uneditable-input.span4 {
            width: 286px;
        }

        input.span3, textarea.span3, .uneditable-input.span3 {
            width: 206px;
        }

        input.span2, textarea.span2, .uneditable-input.span2 {
            width: 126px;
        }

        input.span1, textarea.span1, .uneditable-input.span1 {
            width: 46px;
        }

        .controls-row {
            *zoom: 1;
        }

            .controls-row:before, .controls-row:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .controls-row:after {
                clear: both;
            }

            .controls-row:before, .controls-row:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .controls-row:after {
                clear: both;
            }

            .controls-row [class*="span"], .row-fluid .controls-row [class*="span"] {
                float: left;
            }

            .controls-row .checkbox[class*="span"], .controls-row .radio[class*="span"] {
                padding-top: 5px;
            }

        input[disabled], select[disabled], textarea[disabled], input[readonly], select[readonly], textarea[readonly] {
            cursor: not-allowed;
            background-color: #eee;
        }

        input[type="radio"][disabled], input[type="checkbox"][disabled], input[type="radio"][readonly], input[type="checkbox"][readonly] {
            background-color: transparent;
        }

        input:focus:invalid, textarea:focus:invalid, select:focus:invalid {
            color: #b94a48;
            border-color: #ee5f5b;
        }

            input:focus:invalid:focus, textarea:focus:invalid:focus, select:focus:invalid:focus {
                border-color: #e9322d;
                -webkit-box-shadow: 0 0 6px #f8b9b7;
                -moz-box-shadow: 0 0 6px #f8b9b7;
                box-shadow: 0 0 6px #f8b9b7;
            }

        .form-actions {
            padding: 20px 20px 21px;
            margin-top: 21px;
            margin-bottom: 21px;
            background-color: #f5f5f5;
            border-top: 1px solid #e5e5e5;
            *zoom: 1;
        }

            .form-actions:before, .form-actions:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .form-actions:after {
                clear: both;
            }

            .form-actions:before, .form-actions:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .form-actions:after {
                clear: both;
            }

        .help-block, .help-inline {
            color: #7f7f7f;
        }

        .help-block {
            display: block;
            margin-bottom: 10.5px;
        }

        .help-inline {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            vertical-align: middle;
            padding-left: 5px;
        }

        .input-append, .input-prepend {
            margin-bottom: 5px;
            font-size: 0;
            white-space: nowrap;
        }

            .input-append input, .input-append select, .input-append .uneditable-input, .input-append .dropdown-menu, .input-prepend input, .input-prepend select, .input-prepend .uneditable-input, .input-prepend .dropdown-menu {
                font-size: 13px;
            }

            .input-append input, .input-append select, .input-append .uneditable-input, .input-prepend input, .input-prepend select, .input-prepend .uneditable-input {
                position: relative;
                margin-bottom: 0;
                *margin-left: 0;
                vertical-align: top;
                -webkit-border-radius: 0 4px 4px 0;
                -moz-border-radius: 0 4px 4px 0;
                border-radius: 0 4px 4px 0;
            }

                .input-append input:focus, .input-append select:focus, .input-append .uneditable-input:focus, .input-prepend input:focus, .input-prepend select:focus, .input-prepend .uneditable-input:focus {
                    z-index: 2;
                }

            .input-append .add-on, .input-prepend .add-on {
                display: inline-block;
                width: auto;
                height: 21px;
                min-width: 16px;
                padding: 4px 5px;
                font-size: 13px;
                font-weight: 400;
                line-height: 21px;
                text-align: center;
                text-shadow: 0 1px 0 #fff;
                background-color: #eee;
                border: 1px solid #ccc;
            }

            .input-append .add-on, .input-append .btn, .input-append .btn-group > .dropdown-toggle, .input-prepend .add-on, .input-prepend .btn, .input-prepend .btn-group > .dropdown-toggle {
                vertical-align: top;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
            }

            .input-append .active, .input-prepend .active {
                background-color: #a9dba9;
                border-color: #46a546;
            }

            .input-prepend .add-on, .input-prepend .btn {
                margin-right: -1px;
            }

                .input-prepend .add-on:first-child, .input-prepend .btn:first-child {
                    -webkit-border-radius: 4px 0 0 4px;
                    -moz-border-radius: 4px 0 0 4px;
                    border-radius: 4px 0 0 4px;
                }

            .input-append input, .input-append select, .input-append .uneditable-input {
                -webkit-border-radius: 4px 0 0 4px;
                -moz-border-radius: 4px 0 0 4px;
                border-radius: 4px 0 0 4px;
            }

                .input-append input + .btn-group .btn:last-child, .input-append select + .btn-group .btn:last-child, .input-append .uneditable-input + .btn-group .btn:last-child {
                    -webkit-border-radius: 0 4px 4px 0;
                    -moz-border-radius: 0 4px 4px 0;
                    border-radius: 0 4px 4px 0;
                }

            .input-append .add-on, .input-append .btn, .input-append .btn-group {
                margin-left: -1px;
            }

                .input-append .add-on:last-child, .input-append .btn:last-child, .input-append .btn-group:last-child > .dropdown-toggle {
                    -webkit-border-radius: 0 4px 4px 0;
                    -moz-border-radius: 0 4px 4px 0;
                    border-radius: 0 4px 4px 0;
                }

            .input-prepend.input-append input, .input-prepend.input-append select, .input-prepend.input-append .uneditable-input {
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
            }

                .input-prepend.input-append input + .btn-group .btn, .input-prepend.input-append select + .btn-group .btn, .input-prepend.input-append .uneditable-input + .btn-group .btn {
                    -webkit-border-radius: 0 4px 4px 0;
                    -moz-border-radius: 0 4px 4px 0;
                    border-radius: 0 4px 4px 0;
                }

            .input-prepend.input-append .add-on:first-child, .input-prepend.input-append .btn:first-child {
                margin-right: -1px;
                -webkit-border-radius: 4px 0 0 4px;
                -moz-border-radius: 4px 0 0 4px;
                border-radius: 4px 0 0 4px;
            }

            .input-prepend.input-append .add-on:last-child, .input-prepend.input-append .btn:last-child {
                margin-left: -1px;
                -webkit-border-radius: 0 4px 4px 0;
                -moz-border-radius: 0 4px 4px 0;
                border-radius: 0 4px 4px 0;
            }

            .input-prepend.input-append .btn-group:first-child {
                margin-left: 0;
            }

        input.search-query {
            padding-right: 14px;
            padding-right: 4px \9;
            padding-left: 14px;
            padding-left: 4px \9;
            margin-bottom: 0;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
        }

        .form-search .input-append .search-query, .form-search .input-prepend .search-query {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .form-search .input-append .search-query {
            -webkit-border-radius: 14px 0 0 14px;
            -moz-border-radius: 14px 0 0 14px;
            border-radius: 14px 0 0 14px;
        }

        .form-search .input-append .btn {
            -webkit-border-radius: 0 14px 14px 0;
            -moz-border-radius: 0 14px 14px 0;
            border-radius: 0 14px 14px 0;
        }

        .form-search .input-prepend .search-query {
            -webkit-border-radius: 0 14px 14px 0;
            -moz-border-radius: 0 14px 14px 0;
            border-radius: 0 14px 14px 0;
        }

        .form-search .input-prepend .btn {
            -webkit-border-radius: 14px 0 0 14px;
            -moz-border-radius: 14px 0 0 14px;
            border-radius: 14px 0 0 14px;
        }

        .form-search input, .form-search textarea, .form-search select, .form-search .help-inline, .form-search .uneditable-input, .form-search .input-prepend, .form-search .input-append, .form-inline input, .form-inline textarea, .form-inline select, .form-inline .help-inline, .form-inline .uneditable-input, .form-inline .input-prepend, .form-inline .input-append, .form-horizontal input, .form-horizontal textarea, .form-horizontal select, .form-horizontal .help-inline, .form-horizontal .uneditable-input, .form-horizontal .input-prepend, .form-horizontal .input-append {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            margin-bottom: 0;
            vertical-align: middle;
        }

        .form-search .hide, .form-inline .hide, .form-horizontal .hide {
            display: none;
        }

        .form-search label, .form-inline label, .form-search .btn-group, .form-inline .btn-group {
            display: inline-block;
        }

        .form-search .input-append, .form-inline .input-append, .form-search .input-prepend, .form-inline .input-prepend {
            margin-bottom: 0;
        }

        .form-search .radio, .form-search .checkbox, .form-inline .radio, .form-inline .checkbox {
            padding-left: 0;
            margin-bottom: 0;
            vertical-align: middle;
        }

            .form-search .radio input[type="radio"], .form-search .checkbox input[type="checkbox"], .form-inline .radio input[type="radio"], .form-inline .checkbox input[type="checkbox"] {
                float: left;
                margin-right: 3px;
                margin-left: 0;
            }

        .control-group {
            margin-bottom: 10.5px;
        }

        legend + .control-group {
            margin-top: 21px;
            -webkit-margin-top-collapse: separate;
        }

        .form-horizontal .control-group {
            margin-bottom: 21px;
            *zoom: 1;
        }

            .form-horizontal .control-group:before, .form-horizontal .control-group:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .form-horizontal .control-group:after {
                clear: both;
            }

            .form-horizontal .control-group:before, .form-horizontal .control-group:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .form-horizontal .control-group:after {
                clear: both;
            }

        .form-horizontal .control-label {
            float: left;
            width: 160px;
            padding-top: 5px;
            text-align: right;
        }

        .form-horizontal .controls {
            *display: inline-block;
            *padding-left: 20px;
            margin-left: 180px;
            *margin-left: 0;
        }

            .form-horizontal .controls:first-child {
                *padding-left: 180px;
            }

        .form-horizontal .help-block {
            margin-bottom: 0;
        }

        .form-horizontal input + .help-block, .form-horizontal select + .help-block, .form-horizontal textarea + .help-block, .form-horizontal .uneditable-input + .help-block, .form-horizontal .input-prepend + .help-block, .form-horizontal .input-append + .help-block {
            margin-top: 10.5px;
        }

        .form-horizontal .form-actions {
            padding-left: 180px;
        }

        table {
            max-width: 100%;
            background-color: transparent;
            border-collapse: collapse;
            border-spacing: 0;
        }

        .table {
            width: 100%;
            margin-bottom: 21px;
        }

            .table th, .table td {
                padding: 8px;
                line-height: 21px;
                text-align: left;
                vertical-align: top;
                border-top: 1px solid #ddd;
            }

            .table th {
                font-weight: 700;
            }

            .table thead th {
                vertical-align: bottom;
            }

            .table caption + thead tr:first-child th, .table caption + thead tr:first-child td, .table colgroup + thead tr:first-child th, .table colgroup + thead tr:first-child td, .table thead:first-child tr:first-child th, .table thead:first-child tr:first-child td {
                border-top: 0;
            }

            .table tbody + tbody {
                border-top: 2px solid #ddd;
            }

            .table .table {
                background-color: #fff;
            }

        .table-condensed th, .table-condensed td {
            padding: 4px 5px;
        }

        .table-bordered {
            border: 1px solid #ddd;
            border-collapse: separate;
            *border-collapse: collapse;
            border-left: 0;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

            .table-bordered th, .table-bordered td {
                border-left: 1px solid #ddd;
            }

            .table-bordered caption + thead tr:first-child th, .table-bordered caption + tbody tr:first-child th, .table-bordered caption + tbody tr:first-child td, .table-bordered colgroup + thead tr:first-child th, .table-bordered colgroup + tbody tr:first-child th, .table-bordered colgroup + tbody tr:first-child td, .table-bordered thead:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child td {
                border-top: 0;
            }

            .table-bordered thead:first-child tr:first-child > th:first-child, .table-bordered tbody:first-child tr:first-child > td:first-child {
                -webkit-border-top-left-radius: 4px;
                -moz-border-radius-topleft: 4px;
                border-top-left-radius: 4px;
            }

            .table-bordered thead:first-child tr:first-child > th:last-child, .table-bordered tbody:first-child tr:first-child > td:last-child {
                -webkit-border-top-right-radius: 4px;
                -moz-border-radius-topright: 4px;
                border-top-right-radius: 4px;
            }

            .table-bordered thead:last-child tr:last-child > th:first-child, .table-bordered tbody:last-child tr:last-child > td:first-child, .table-bordered tfoot:last-child tr:last-child > td:first-child {
                -webkit-border-bottom-left-radius: 4px;
                -moz-border-radius-bottomleft: 4px;
                border-bottom-left-radius: 4px;
            }

            .table-bordered thead:last-child tr:last-child > th:last-child, .table-bordered tbody:last-child tr:last-child > td:last-child, .table-bordered tfoot:last-child tr:last-child > td:last-child {
                -webkit-border-bottom-right-radius: 4px;
                -moz-border-radius-bottomright: 4px;
                border-bottom-right-radius: 4px;
            }

            .table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
                -webkit-border-bottom-left-radius: 0;
                -moz-border-radius-bottomleft: 0;
                border-bottom-left-radius: 0;
            }

            .table-bordered tfoot + tbody:last-child tr:last-child td:last-child {
                -webkit-border-bottom-right-radius: 0;
                -moz-border-radius-bottomright: 0;
                border-bottom-right-radius: 0;
            }

            .table-bordered caption + thead tr:first-child th:first-child, .table-bordered caption + tbody tr:first-child td:first-child, .table-bordered colgroup + thead tr:first-child th:first-child, .table-bordered colgroup + tbody tr:first-child td:first-child {
                -webkit-border-top-left-radius: 4px;
                -moz-border-radius-topleft: 4px;
                border-top-left-radius: 4px;
            }

            .table-bordered caption + thead tr:first-child th:last-child, .table-bordered caption + tbody tr:first-child td:last-child, .table-bordered colgroup + thead tr:first-child th:last-child, .table-bordered colgroup + tbody tr:first-child td:last-child {
                -webkit-border-top-right-radius: 4px;
                -moz-border-radius-topright: 4px;
                border-top-right-radius: 4px;
            }

        .table-striped tbody > tr:nth-child(odd) > td, .table-striped tbody > tr:nth-child(odd) > th {
            background-color: #f9f9f9;
        }

        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color: #f5f5f5;
        }

        table td[class*="span"], table th[class*="span"], .row-fluid table td[class*="span"], .row-fluid table th[class*="span"] {
            display: table-cell;
            float: none;
            margin-left: 0;
        }

        .table td.span1, .table th.span1 {
            float: none;
            width: 44px;
            margin-left: 0;
        }

        .table td.span2, .table th.span2 {
            float: none;
            width: 124px;
            margin-left: 0;
        }

        .table td.span3, .table th.span3 {
            float: none;
            width: 204px;
            margin-left: 0;
        }

        .table td.span4, .table th.span4 {
            float: none;
            width: 284px;
            margin-left: 0;
        }

        .table td.span5, .table th.span5 {
            float: none;
            width: 364px;
            margin-left: 0;
        }

        .table td.span6, .table th.span6 {
            float: none;
            width: 444px;
            margin-left: 0;
        }

        .table td.span7, .table th.span7 {
            float: none;
            width: 524px;
            margin-left: 0;
        }

        .table td.span8, .table th.span8 {
            float: none;
            width: 604px;
            margin-left: 0;
        }

        .table td.span9, .table th.span9 {
            float: none;
            width: 684px;
            margin-left: 0;
        }

        .table td.span10, .table th.span10 {
            float: none;
            width: 764px;
            margin-left: 0;
        }

        .table td.span11, .table th.span11 {
            float: none;
            width: 844px;
            margin-left: 0;
        }

        .table td.span12, .table th.span12 {
            float: none;
            width: 924px;
            margin-left: 0;
        }

        .table tbody tr.success td {
            background-color: #dff0d8;
        }

        .table tbody tr.error td {
            background-color: #f2dede;
        }

        .table tbody tr.warning td {
            background-color: #fcf8e3;
        }

        .table tbody tr.info td {
            background-color: #d9edf7;
        }

        .table-hover tbody tr.success:hover td {
            background-color: #d0e9c6;
        }

        .table-hover tbody tr.error:hover td {
            background-color: #ebcccc;
        }

        .table-hover tbody tr.warning:hover td {
            background-color: #faf2cc;
        }

        .table-hover tbody tr.info:hover td {
            background-color: #c4e3f3;
        }

        .dropup, .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            *margin-bottom: -3px;
        }

            .dropdown-toggle:active, .open .dropdown-toggle {
                outline: 0;
            }

        .caret {
            display: inline-block;
            width: 0;
            height: 0;
            vertical-align: top;
            border-top: 4px solid #000;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
            content: "";
        }

        .dropdown .caret {
            margin-top: 8px;
            margin-left: 2px;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            list-style: none;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid #e6e6e6;
            *border-right-width: 2px;
            *border-bottom-width: 2px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
            -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding;
            background-clip: padding-box;
        }

            .dropdown-menu.pull-right {
                right: 0;
                left: auto;
            }

            .dropdown-menu .divider {
                *width: 100%;
                height: 1px;
                margin: 9.5px 1px;
                *margin: -5px 0 5px;
                overflow: hidden;
                background-color: #e5e5e5;
                border-bottom: 1px solid #fff;
            }

            .dropdown-menu li > a {
                display: block;
                padding: 3px 20px;
                clear: both;
                font-weight: 400;
                line-height: 21px;
                color: #595959;
                white-space: nowrap;
            }

                .dropdown-menu li > a:hover, .dropdown-menu li > a:focus, .dropdown-submenu:hover > a {
                    text-decoration: none;
                    color: #29bbf2;
                    background-color: #f7f7f7;
                    background-image: -moz-linear-gradient(top,#fcfcfc,#efefef);
                    background-image: -webkit-gradient(linear,0 0,0 100%,from(#fcfcfc),to(#efefef));
                    background-image: -webkit-linear-gradient(top,#fcfcfc,#efefef);
                    background-image: -o-linear-gradient(top,#fcfcfc,#efefef);
                    background-image: linear-gradient(to bottom,#fcfcfc,#efefef);
                    background-repeat: repeat-x;
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcfcfc',endColorstr='#ffefefef',GradientType=0);
                }

            .dropdown-menu .active > a, .dropdown-menu .active > a:hover {
                color: #29bbf2;
                text-decoration: none;
                outline: 0;
                background-color: #f7f7f7;
                background-image: -moz-linear-gradient(top,#fcfcfc,#efefef);
                background-image: -webkit-gradient(linear,0 0,0 100%,from(#fcfcfc),to(#efefef));
                background-image: -webkit-linear-gradient(top,#fcfcfc,#efefef);
                background-image: -o-linear-gradient(top,#fcfcfc,#efefef);
                background-image: linear-gradient(to bottom,#fcfcfc,#efefef);
                background-repeat: repeat-x;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcfcfc',endColorstr='#ffefefef',GradientType=0);
            }

            .dropdown-menu .disabled > a, .dropdown-menu .disabled > a:hover {
                color: #999;
            }

                .dropdown-menu .disabled > a:hover {
                    text-decoration: none;
                    background-color: transparent;
                    background-image: none;
                    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
                    cursor: default;
                }

        .open {
            *z-index: 1000;
        }

            .open > .dropdown-menu {
                display: block;
            }

        .pull-right > .dropdown-menu {
            right: 0;
            left: auto;
        }

        .dropup .caret, .navbar-fixed-bottom .dropdown .caret {
            border-top: 0;
            border-bottom: 4px solid #000;
            content: "";
        }

        .dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-bottom: 1px;
        }

        .dropdown-submenu {
            position: relative;
        }

            .dropdown-submenu > .dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover > .dropdown-menu {
                display: block;
            }

        .dropup .dropdown-submenu > .dropdown-menu {
            top: auto;
            bottom: 0;
            margin-top: 0;
            margin-bottom: -2px;
            -webkit-border-radius: 5px 5px 5px 0;
            -moz-border-radius: 5px 5px 5px 0;
            border-radius: 5px 5px 5px 0;
        }

        .dropdown-submenu > a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #ccc;
            margin-top: 5px;
            margin-right: -10px;
        }

        .dropdown-submenu:hover > a:after {
            border-left-color: #29bbf2;
        }

        .dropdown-submenu.pull-left {
            float: none;
        }

            .dropdown-submenu.pull-left > .dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }

        .dropdown .dropdown-menu .nav-header {
            padding-left: 20px;
            padding-right: 20px;
        }

        .typeahead {
            z-index: 1051;
            margin-top: 2px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .well {
            min-height: 20px;
            padding: 19px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
        }

            .well blockquote {
                border-color: #ddd;
                border-color: rgba(0,0,0,.15);
            }

        .well-large {
            padding: 24px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }

        .well-small {
            padding: 9px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -moz-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear;
        }

            .fade.in {
                opacity: 1;
            }

        .collapse {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition: height .35s ease;
            -moz-transition: height .35s ease;
            -o-transition: height .35s ease;
            transition: height .35s ease;
        }

            .collapse.in {
                height: auto;
            }

        .close {
            float: right;
            font-size: 20px;
            font-weight: 700;
            line-height: 21px;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .2;
            filter: alpha(opacity=20);
        }

            .close:hover {
                color: #000;
                text-decoration: none;
                cursor: pointer;
                opacity: .4;
                filter: alpha(opacity=40);
            }

        button.close {
            padding: 0;
            cursor: pointer;
            background: transparent;
            border: 0;
            -webkit-appearance: none;
        }

        .btn {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            padding: 4px 12px;
            margin-bottom: 0;
            font-size: 13px;
            line-height: 21px;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            color: #333;
            text-shadow: 0 1px 1px rgba(255,255,255,.75);
            background-color: #eaeaea;
            background-image: -moz-linear-gradient(top,#ececec,#e6e6e6);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#ececec),to(#e6e6e6));
            background-image: -webkit-linear-gradient(top,#ececec,#e6e6e6);
            background-image: -o-linear-gradient(top,#ececec,#e6e6e6);
            background-image: linear-gradient(to bottom,#ececec,#e6e6e6);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffececec',endColorstr='#ffe6e6e6',GradientType=0);
            border-color: #e6e6e6 #e6e6e6 silver;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #e6e6e6;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            border: 1px solid rgba(0,0,0,0);
            *border: 0;
            border-bottom-color: rgba(0,0,0,0);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            *margin-left: .3em;
            -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);
            box-shadow: inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);
        }

            .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] {
                color: #333;
                background-color: #e6e6e6;
                *background-color: #d9d9d9;
            }

            .btn:active, .btn.active {
                background-color: #cdcdcd; \9
            }

            .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] {
                color: #333;
                background-color: #e6e6e6;
                *background-color: #d9d9d9;
            }

            .btn:active, .btn.active {
                background-color: #cdcdcd; \9
            }

            .btn:first-child {
                *margin-left: 0;
            }

            .btn:first-child {
                *margin-left: 0;
            }

            .btn:hover {
                color: #333;
                text-decoration: none;
                background-position: 0 -15px;
                -webkit-transition: background-position .1s linear;
                -moz-transition: background-position .1s linear;
                -o-transition: background-position .1s linear;
                transition: background-position .1s linear;
            }

            .btn:focus {
                outline: thin dotted #333;
                outline: 5px auto -webkit-focus-ring-color;
                outline-offset: -2px;
            }

            .btn.active, .btn:active {
                background-image: none;
                outline: 0;
                -webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);
                box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);
            }

            .btn.disabled, .btn[disabled] {
                cursor: default;
                background-image: none;
                opacity: .65;
                filter: alpha(opacity=65);
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }

        .btn-large {
            padding: 11px 19px;
            font-size: 16.25px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }

            .btn-large [class^="icon-"], .btn-large [class*=" icon-"] {
                margin-top: 4px;
            }

        .btn-small {
            padding: 2px 10px;
            font-size: 11.05px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

            .btn-small [class^="icon-"], .btn-small [class*=" icon-"] {
                margin-top: 0;
            }

        .btn-mini [class^="icon-"], .btn-mini [class*=" icon-"] {
            margin-top: -1px;
        }

        .btn-mini {
            padding: 0 6px;
            font-size: 9.75px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .btn-block {
            display: block;
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

            .btn-block + .btn-block {
                margin-top: 5px;
            }

        input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block {
            width: 100%;
        }

        .btn-primary.active, .btn-warning.active, .btn-danger.active, .btn-success.active, .btn-info.active, .btn-inverse.active {
            color: rgba(255,255,255,.75);
        }

        .btn {
            border-color: #c5c5c5;
            border-color: rgba(0,0,0,.15) rgba(0,0,0,.15) rgba(0,0,0,.25);
        }

        .btn-primary {
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #3cc5f4;
            background-image: -moz-linear-gradient(top,#48cbf5,#2abbf2);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#48cbf5),to(#2abbf2));
            background-image: -webkit-linear-gradient(top,#48cbf5,#2abbf2);
            background-image: -o-linear-gradient(top,#48cbf5,#2abbf2);
            background-image: linear-gradient(to bottom,#48cbf5,#2abbf2);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff48cbf5',endColorstr='#ff2abbf2',GradientType=0);
            border-color: #2abbf2 #2abbf2 #0c91c4;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #2abbf2;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
                color: #fff;
                background-color: #2abbf2;
                *background-color: #12b3f1;
            }

            .btn-primary:active, .btn-primary.active {
                background-color: #0da3dc; \9
            }

            .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
                color: #fff;
                background-color: #2abbf2;
                *background-color: #12b3f1;
            }

            .btn-primary:active, .btn-primary.active {
                background-color: #0da3dc; \9
            }

        .btn-warning {
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #f89839;
            background-image: -moz-linear-gradient(top,#f9a245,#f78a28);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#f9a245),to(#f78a28));
            background-image: -webkit-linear-gradient(top,#f9a245,#f78a28);
            background-image: -o-linear-gradient(top,#f9a245,#f78a28);
            background-image: linear-gradient(to bottom,#f9a245,#f78a28);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff9a245',endColorstr='#fff78a28',GradientType=0);
            border-color: #f78a28 #f78a28 #cb6408;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #f78a28;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-warning:hover, .btn-warning:active, .btn-warning.active, .btn-warning.disabled, .btn-warning[disabled] {
                color: #fff;
                background-color: #f78a28;
                *background-color: #f67d0f;
            }

            .btn-warning:active, .btn-warning.active {
                background-color: #e47008; \9
            }

            .btn-warning:hover, .btn-warning:active, .btn-warning.active, .btn-warning.disabled, .btn-warning[disabled] {
                color: #fff;
                background-color: #f78a28;
                *background-color: #f67d0f;
            }

            .btn-warning:active, .btn-warning.active {
                background-color: #e47008; \9
            }

        .btn-danger {
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #f04040;
            background-image: -moz-linear-gradient(top,#f24c4c,#ed2e2e);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#f24c4c),to(#ed2e2e));
            background-image: -webkit-linear-gradient(top,#f24c4c,#ed2e2e);
            background-image: -o-linear-gradient(top,#f24c4c,#ed2e2e);
            background-image: linear-gradient(to bottom,#f24c4c,#ed2e2e);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff24c4c',endColorstr='#ffed2e2e',GradientType=0);
            border-color: #ed2e2e #ed2e2e #be1010;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #ed2e2e;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-danger:hover, .btn-danger:active, .btn-danger.active, .btn-danger.disabled, .btn-danger[disabled] {
                color: #fff;
                background-color: #ed2e2e;
                *background-color: #eb1717;
            }

            .btn-danger:active, .btn-danger.active {
                background-color: #d61212; \9
            }

            .btn-danger:hover, .btn-danger:active, .btn-danger.active, .btn-danger.disabled, .btn-danger[disabled] {
                color: #fff;
                background-color: #ed2e2e;
                *background-color: #eb1717;
            }

            .btn-danger:active, .btn-danger.active {
                background-color: #d61212; \9
            }

        .btn-success {
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #69ca3f;
            background-image: -moz-linear-gradient(top,#75d04b,#57c22d);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#75d04b),to(#57c22d));
            background-image: -webkit-linear-gradient(top,#75d04b,#57c22d);
            background-image: -o-linear-gradient(top,#75d04b,#57c22d);
            background-image: linear-gradient(to bottom,#75d04b,#57c22d);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff75d04b',endColorstr='#ff57c22d',GradientType=0);
            border-color: #57c22d #57c22d #3b841f;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #57c22d;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-success:hover, .btn-success:active, .btn-success.active, .btn-success.disabled, .btn-success[disabled] {
                color: #fff;
                background-color: #57c22d;
                *background-color: #4ead28;
            }

            .btn-success:active, .btn-success.active {
                background-color: #449923; \9
            }

            .btn-success:hover, .btn-success:active, .btn-success.active, .btn-success.disabled, .btn-success[disabled] {
                color: #fff;
                background-color: #57c22d;
                *background-color: #4ead28;
            }

            .btn-success:active, .btn-success.active {
                background-color: #449923; \9
            }

        .btn-info {
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #0067b2;
            background-image: -moz-linear-gradient(top,#0073ba,#0055a7);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#0073ba),to(#0055a7));
            background-image: -webkit-linear-gradient(top,#0073ba,#0055a7);
            background-image: -o-linear-gradient(top,#0073ba,#0055a7);
            background-image: linear-gradient(to bottom,#0073ba,#0055a7);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0073ba',endColorstr='#ff0055a7',GradientType=0);
            border-color: #0055a7 #0055a7 #002e5b;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #0055a7;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-info:hover, .btn-info:active, .btn-info.active, .btn-info.disabled, .btn-info[disabled] {
                color: #fff;
                background-color: #0055a7;
                *background-color: #00488e;
            }

            .btn-info:active, .btn-info.active {
                background-color: #003b74; \9
            }

            .btn-info:hover, .btn-info:active, .btn-info.active, .btn-info.disabled, .btn-info[disabled] {
                color: #fff;
                background-color: #0055a7;
                *background-color: #00488e;
            }

            .btn-info:active, .btn-info.active {
                background-color: #003b74; \9
            }

        .btn-inverse {
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #474747;
            background-image: -moz-linear-gradient(top,#535353,#343434);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#535353),to(#343434));
            background-image: -webkit-linear-gradient(top,#535353,#343434);
            background-image: -o-linear-gradient(top,#535353,#343434);
            background-image: linear-gradient(to bottom,#535353,#343434);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff535353',endColorstr='#ff343434',GradientType=0);
            border-color: #343434 #343434 #0e0e0e;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #343434;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-inverse:hover, .btn-inverse:active, .btn-inverse.active, .btn-inverse.disabled, .btn-inverse[disabled] {
                color: #fff;
                background-color: #343434;
                *background-color: #272727;
            }

            .btn-inverse:active, .btn-inverse.active {
                background-color: #1b1b1b; \9
            }

            .btn-inverse:hover, .btn-inverse:active, .btn-inverse.active, .btn-inverse.disabled, .btn-inverse[disabled] {
                color: #fff;
                background-color: #343434;
                *background-color: #272727;
            }

            .btn-inverse:active, .btn-inverse.active {
                background-color: #1b1b1b; \9
            }

        button.btn, input[type="submit"].btn {
            *padding-top: 3px;
            *padding-bottom: 3px;
        }

            button.btn::-moz-focus-inner, input[type="submit"].btn::-moz-focus-inner {
                padding: 0;
                border: 0;
            }

            button.btn.btn-large, input[type="submit"].btn.btn-large {
                *padding-top: 7px;
                *padding-bottom: 7px;
            }

            button.btn.btn-small, input[type="submit"].btn.btn-small {
                *padding-top: 3px;
                *padding-bottom: 3px;
            }

            button.btn.btn-mini, input[type="submit"].btn.btn-mini {
                *padding-top: 1px;
                *padding-bottom: 1px;
            }

        .btn-link, .btn-link:active, .btn-link[disabled] {
            background-color: transparent;
            background-image: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .btn-link {
            border-color: transparent;
            cursor: pointer;
            color: #333;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

            .btn-link:hover {
                color: #29bbf2;
                text-decoration: underline;
                background-color: transparent;
            }

            .btn-link[disabled]:hover {
                color: #333;
                text-decoration: none;
            }

        .btn-group {
            position: relative;
            display: inline-block;
            *display: inline;
            *zoom: 1;
            font-size: 0;
            vertical-align: middle;
            white-space: nowrap;
            *margin-left: .3em;
        }

            .btn-group:first-child {
                *margin-left: 0;
            }

            .btn-group:first-child {
                *margin-left: 0;
            }

            .btn-group + .btn-group {
                margin-left: 5px;
            }

        .btn-toolbar {
            font-size: 0;
            margin-top: 10.5px;
            margin-bottom: 10.5px;
        }

            .btn-toolbar > .btn + .btn, .btn-toolbar > .btn-group + .btn, .btn-toolbar > .btn + .btn-group {
                margin-left: 5px;
            }

        .btn-group > .btn {
            position: relative;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

            .btn-group > .btn + .btn {
                margin-left: -1px;
            }

        .btn-group > .btn, .btn-group > .dropdown-menu, .btn-group > .popover {
            font-size: 13px;
        }

        .btn-group > .btn-mini {
            font-size: 9.75px;
        }

        .btn-group > .btn-small {
            font-size: 11.05px;
        }

        .btn-group > .btn-large {
            font-size: 16.25px;
        }

        .btn-group > .btn:first-child {
            margin-left: 0;
            -webkit-border-top-left-radius: 4px;
            -moz-border-radius-topleft: 4px;
            border-top-left-radius: 4px;
            -webkit-border-bottom-left-radius: 4px;
            -moz-border-radius-bottomleft: 4px;
            border-bottom-left-radius: 4px;
        }

        .btn-group > .btn:last-child, .btn-group > .dropdown-toggle {
            -webkit-border-top-right-radius: 4px;
            -moz-border-radius-topright: 4px;
            border-top-right-radius: 4px;
            -webkit-border-bottom-right-radius: 4px;
            -moz-border-radius-bottomright: 4px;
            border-bottom-right-radius: 4px;
        }

        .btn-group > .btn.large:first-child {
            margin-left: 0;
            -webkit-border-top-left-radius: 6px;
            -moz-border-radius-topleft: 6px;
            border-top-left-radius: 6px;
            -webkit-border-bottom-left-radius: 6px;
            -moz-border-radius-bottomleft: 6px;
            border-bottom-left-radius: 6px;
        }

        .btn-group > .btn.large:last-child, .btn-group > .large.dropdown-toggle {
            -webkit-border-top-right-radius: 6px;
            -moz-border-radius-topright: 6px;
            border-top-right-radius: 6px;
            -webkit-border-bottom-right-radius: 6px;
            -moz-border-radius-bottomright: 6px;
            border-bottom-right-radius: 6px;
        }

        .btn-group > .btn:hover, .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active {
            z-index: 2;
        }

        .btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle {
            outline: 0;
        }

        .btn-group > .btn + .dropdown-toggle {
            padding-left: 8px;
            padding-right: 8px;
            -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.125),inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: inset 1px 0 0 rgba(255,255,255,.125),inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);
            box-shadow: inset 1px 0 0 rgba(255,255,255,.125),inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);
            *padding-top: 5px;
            *padding-bottom: 5px;
        }

        .btn-group > .btn-mini + .dropdown-toggle {
            padding-left: 5px;
            padding-right: 5px;
            *padding-top: 2px;
            *padding-bottom: 2px;
        }

        .btn-group > .btn-small + .dropdown-toggle {
            *padding-top: 5px;
            *padding-bottom: 4px;
        }

        .btn-group > .btn-large + .dropdown-toggle {
            padding-left: 12px;
            padding-right: 12px;
            *padding-top: 7px;
            *padding-bottom: 7px;
        }

        .btn-group.open .dropdown-toggle {
            background-image: none;
            -webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);
            box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);
        }

        .btn-group.open .btn.dropdown-toggle {
            background-color: #e6e6e6;
        }

        .btn-group.open .btn-primary.dropdown-toggle {
            background-color: #2abbf2;
        }

        .btn-group.open .btn-warning.dropdown-toggle {
            background-color: #f78a28;
        }

        .btn-group.open .btn-danger.dropdown-toggle {
            background-color: #ed2e2e;
        }

        .btn-group.open .btn-success.dropdown-toggle {
            background-color: #57c22d;
        }

        .btn-group.open .btn-info.dropdown-toggle {
            background-color: #0055a7;
        }

        .btn-group.open .btn-inverse.dropdown-toggle {
            background-color: #343434;
        }

        .btn .caret {
            margin-top: 8px;
            margin-left: 0;
        }

        .btn-mini .caret, .btn-small .caret, .btn-large .caret {
            margin-top: 6px;
        }

        .btn-large .caret {
            border-left-width: 5px;
            border-right-width: 5px;
            border-top-width: 5px;
        }

        .dropup .btn-large .caret {
            border-bottom-width: 5px;
        }

        .btn-primary .caret, .btn-warning .caret, .btn-danger .caret, .btn-info .caret, .btn-success .caret, .btn-inverse .caret {
            border-top-color: #fff;
            border-bottom-color: #fff;
        }

        .btn-group-vertical {
            display: inline-block;
            *display: inline;
            *zoom: 1;
        }

            .btn-group-vertical > .btn {
                display: block;
                float: none;
                max-width: 100%;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
            }

                .btn-group-vertical > .btn + .btn {
                    margin-left: 0;
                    margin-top: -1px;
                }

                .btn-group-vertical > .btn:first-child {
                    -webkit-border-radius: 4px 4px 0 0;
                    -moz-border-radius: 4px 4px 0 0;
                    border-radius: 4px 4px 0 0;
                }

                .btn-group-vertical > .btn:last-child {
                    -webkit-border-radius: 0 0 4px 4px;
                    -moz-border-radius: 0 0 4px 4px;
                    border-radius: 0 0 4px 4px;
                }

            .btn-group-vertical > .btn-large:first-child {
                -webkit-border-radius: 6px 6px 0 0;
                -moz-border-radius: 6px 6px 0 0;
                border-radius: 6px 6px 0 0;
            }

            .btn-group-vertical > .btn-large:last-child {
                -webkit-border-radius: 0 0 6px 6px;
                -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
            }

        .alert {
            padding: 8px 35px 8px 14px;
            margin-bottom: 21px;
            text-shadow: 0 1px 0 rgba(255,255,255,.5);
            background-color: #fcf8e3;
            border: 1px solid #fbeed5;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

            .alert, .alert h4 {
                color: #c09853;
            }

                .alert h4 {
                    margin: 0;
                }

                .alert .close {
                    position: relative;
                    top: -2px;
                    right: -21px;
                    line-height: 21px;
                }

        .alert-success {
            background-color: #dff0d8;
            border-color: #d6e9c6;
            color: #468847;
        }

            .alert-success h4 {
                color: #468847;
            }

        .alert-danger, .alert-error {
            border-color: #eed3d7;
            color: red;
        }

            .alert-danger h4, .alert-error h4 {
                color: #b94a48;
            }

        .alert-info {
            background-color: #d9edf7;
            border-color: #bce8f1;
            color: #3a87ad;
        }

            .alert-info h4 {
                color: #3a87ad;
            }

        .alert-block {
            padding-top: 14px;
            padding-bottom: 14px;
        }

            .alert-block > p, .alert-block > ul {
                margin-bottom: 0;
            }

            .alert-block p + p {
                margin-top: 5px;
            }

        .nav {
            margin-left: 0;
            margin-bottom: 21px;
            list-style: none;
        }

            .nav > li > a {
                display: block;
            }

                .nav > li > a:hover {
                    text-decoration: none;
                    background-color: #eee;
                }

                .nav > li > a > img {
                    max-width: none;
                }

            .nav > .pull-right {
                float: right;
            }

        .nav-header {
            display: block;
            padding: 3px 15px;
            font-size: 11px;
            font-weight: 700;
            line-height: 21px;
            color: #999;
            text-shadow: 0 1px 0 rgba(255,255,255,.5);
            text-transform: uppercase;
        }

        .nav li + .nav-header {
            margin-top: 9px;
        }

        .nav-list {
            padding-left: 15px;
            padding-right: 15px;
            margin-bottom: 0;
        }

            .nav-list > li > a, .nav-list .nav-header {
                margin-left: -15px;
                margin-right: -15px;
                text-shadow: 0 1px 0 rgba(255,255,255,.5);
            }

            .nav-list > li > a {
                padding: 3px 15px;
            }

            .nav-list > .active > a, .nav-list > .active > a:hover {
                color: #fff;
                text-shadow: 0 -1px 0 rgba(0,0,0,.2);
                background-color: #333;
            }

            .nav-list [class^="icon-"], .nav-list [class*=" icon-"] {
                margin-right: 2px;
            }

            .nav-list .divider {
                *width: 100%;
                height: 1px;
                margin: 9.5px 1px;
                *margin: -5px 0 5px;
                overflow: hidden;
                background-color: #e5e5e5;
                border-bottom: 1px solid #fff;
            }

        .nav-tabs, .nav-pills {
            *zoom: 1;
        }

            .nav-tabs:before, .nav-tabs:after, .nav-pills:before, .nav-pills:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .nav-tabs:after, .nav-pills:after {
                clear: both;
            }

            .nav-tabs:before, .nav-tabs:after, .nav-pills:before, .nav-pills:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .nav-tabs:after, .nav-pills:after {
                clear: both;
            }

            .nav-tabs > li, .nav-pills > li {
                float: left;
            }

                .nav-tabs > li > a, .nav-pills > li > a {
                    padding-right: 12px;
                    padding-left: 12px;
                    margin-right: 2px;
                    line-height: 14px;
                }

        .nav-tabs {
            border-bottom: 1px solid #ddd;
        }

            .nav-tabs > li {
                margin-bottom: -1px;
            }

                .nav-tabs > li > a {
                    padding-top: 8px;
                    padding-bottom: 8px;
                    line-height: 21px;
                    border: 1px solid transparent;
                    -webkit-border-radius: 4px 4px 0 0;
                    -moz-border-radius: 4px 4px 0 0;
                    border-radius: 4px 4px 0 0;
                }

                    .nav-tabs > li > a:hover {
                        border-color: #eee #eee #ddd;
                    }

            .nav-tabs > .active > a, .nav-tabs > .active > a:hover {
                color: #555;
                background-color: #fff;
                border: 1px solid #ddd;
                border-bottom-color: transparent;
                cursor: default;
            }

        .nav-pills > li > a {
            padding-top: 8px;
            padding-bottom: 8px;
            margin-top: 2px;
            margin-bottom: 2px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .nav-pills > .active > a, .nav-pills > .active > a:hover {
            color: #fff;
            background-color: #333;
        }

        .nav-stacked > li {
            float: none;
        }

            .nav-stacked > li > a {
                margin-right: 0;
            }

        .nav-tabs.nav-stacked {
            border-bottom: 0;
        }

            .nav-tabs.nav-stacked > li > a {
                border: 1px solid #ddd;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
            }

            .nav-tabs.nav-stacked > li:first-child > a {
                -webkit-border-top-right-radius: 4px;
                -moz-border-radius-topright: 4px;
                border-top-right-radius: 4px;
                -webkit-border-top-left-radius: 4px;
                -moz-border-radius-topleft: 4px;
                border-top-left-radius: 4px;
            }

            .nav-tabs.nav-stacked > li:last-child > a {
                -webkit-border-bottom-right-radius: 4px;
                -moz-border-radius-bottomright: 4px;
                border-bottom-right-radius: 4px;
                -webkit-border-bottom-left-radius: 4px;
                -moz-border-radius-bottomleft: 4px;
                border-bottom-left-radius: 4px;
            }

            .nav-tabs.nav-stacked > li > a:hover {
                border-color: #ddd;
                z-index: 2;
            }

        .nav-pills.nav-stacked > li > a {
            margin-bottom: 3px;
        }

        .nav-pills.nav-stacked > li:last-child > a {
            margin-bottom: 1px;
        }

        .nav-tabs .dropdown-menu {
            -webkit-border-radius: 0 0 6px 6px;
            -moz-border-radius: 0 0 6px 6px;
            border-radius: 0 0 6px 6px;
        }

        .nav-pills .dropdown-menu {
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }

        .nav .dropdown-toggle .caret {
            border-top-color: #333;
            border-bottom-color: #333;
            margin-top: 6px;
        }

        .nav .dropdown-toggle:hover .caret {
            border-top-color: #29bbf2;
            border-bottom-color: #29bbf2;
        }

        .nav-tabs .dropdown-toggle .caret {
            margin-top: 8px;
        }

        .nav .active .dropdown-toggle .caret {
            border-top-color: #fff;
            border-bottom-color: #fff;
        }

        .nav-tabs .active .dropdown-toggle .caret {
            border-top-color: #555;
            border-bottom-color: #555;
        }

        .nav > .dropdown.active > a:hover {
            cursor: pointer;
        }

        .nav-tabs .open .dropdown-toggle, .nav-pills .open .dropdown-toggle, .nav > li.dropdown.open.active > a:hover {
            color: #fff;
            background-color: #999;
            border-color: #999;
        }

        .nav li.dropdown.open .caret, .nav li.dropdown.open.active .caret, .nav li.dropdown.open a:hover .caret {
            border-top-color: #fff;
            border-bottom-color: #fff;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .tabs-stacked .open > a:hover {
            border-color: #999;
        }

        .tabbable {
            *zoom: 1;
        }

            .tabbable:before, .tabbable:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .tabbable:after {
                clear: both;
            }

            .tabbable:before, .tabbable:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .tabbable:after {
                clear: both;
            }

        .tab-content {
            overflow: auto;
        }

        .tabs-below > .nav-tabs, .tabs-right > .nav-tabs, .tabs-left > .nav-tabs {
            border-bottom: 0;
        }

        .tab-content > .tab-pane, .pill-content > .pill-pane {
            display: none;
        }

        .tab-content > .active, .pill-content > .active {
            display: block;
        }

        .tabs-below > .nav-tabs {
            border-top: 1px solid #ddd;
        }

            .tabs-below > .nav-tabs > li {
                margin-top: -1px;
                margin-bottom: 0;
            }

                .tabs-below > .nav-tabs > li > a {
                    -webkit-border-radius: 0 0 4px 4px;
                    -moz-border-radius: 0 0 4px 4px;
                    border-radius: 0 0 4px 4px;
                }

                    .tabs-below > .nav-tabs > li > a:hover {
                        border-bottom-color: transparent;
                        border-top-color: #ddd;
                    }

            .tabs-below > .nav-tabs > .active > a, .tabs-below > .nav-tabs > .active > a:hover {
                border-color: transparent #ddd #ddd #ddd;
            }

        .tabs-left > .nav-tabs > li, .tabs-right > .nav-tabs > li {
            float: none;
        }

            .tabs-left > .nav-tabs > li > a, .tabs-right > .nav-tabs > li > a {
                min-width: 74px;
                margin-right: 0;
                margin-bottom: 3px;
            }

        .tabs-left > .nav-tabs {
            float: left;
            margin-right: 19px;
            border-right: 1px solid #ddd;
        }

            .tabs-left > .nav-tabs > li > a {
                margin-right: -1px;
                -webkit-border-radius: 4px 0 0 4px;
                -moz-border-radius: 4px 0 0 4px;
                border-radius: 4px 0 0 4px;
            }

                .tabs-left > .nav-tabs > li > a:hover {
                    border-color: #eee #ddd #eee #eee;
                }

            .tabs-left > .nav-tabs .active > a, .tabs-left > .nav-tabs .active > a:hover {
                border-color: #ddd transparent #ddd #ddd;
                *border-right-color: #fff;
            }

        .tabs-right > .nav-tabs {
            float: right;
            margin-left: 19px;
            border-left: 1px solid #ddd;
        }

            .tabs-right > .nav-tabs > li > a {
                margin-left: -1px;
                -webkit-border-radius: 0 4px 4px 0;
                -moz-border-radius: 0 4px 4px 0;
                border-radius: 0 4px 4px 0;
            }

                .tabs-right > .nav-tabs > li > a:hover {
                    border-color: #eee #eee #eee #ddd;
                }

            .tabs-right > .nav-tabs .active > a, .tabs-right > .nav-tabs .active > a:hover {
                border-color: #ddd #ddd #ddd transparent;
                *border-left-color: #fff;
            }

        .nav > .disabled > a {
            color: #999;
        }

            .nav > .disabled > a:hover {
                text-decoration: none;
                background-color: transparent;
                cursor: default;
            }

        .navbar {
            overflow: visible;
            margin-bottom: 21px;
            *position: relative;
            *z-index: 2;
        }

        .navbar-inner {
            min-height: 82px;
            padding-left: 20px;
            padding-right: 20px;
            background-color: #fff;
            background-image: -moz-linear-gradient(top,#fff,#fff);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#fff));
            background-image: -webkit-linear-gradient(top,#fff,#fff);
            background-image: -o-linear-gradient(top,#fff,#fff);
            background-image: linear-gradient(to bottom,#fff,#fff);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffffffff',GradientType=0);
            border: 1px solid #fff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.065);
            -moz-box-shadow: 0 1px 4px rgba(0,0,0,.065);
            box-shadow: 0 1px 4px rgba(0,0,0,.065);
            *zoom: 1;
        }

            .navbar-inner:before, .navbar-inner:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .navbar-inner:after {
                clear: both;
            }

            .navbar-inner:before, .navbar-inner:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .navbar-inner:after {
                clear: both;
            }

        .navbar .container {
            width: auto;
        }

        .nav-collapse.collapse {
            height: auto;
            overflow: visible;
        }

        .navbar .brand {
            float: left;
            display: block;
            padding: 10.5px 20px 10.5px;
            margin-left: -20px;
            font-size: 20px;
            font-weight: 200;
            color: #333;
            text-shadow: 0 1px 0 #fff;
        }

            .navbar .brand:hover {
                text-decoration: none;
            }

        .navbar-text {
            margin-bottom: 0;
            line-height: 82px;
            color: #333;
        }

        .navbar-link {
            color: #333;
        }

            .navbar-link:hover {
                color: #29bbf2;
            }

        .navbar .divider-vertical {
            height: 82px;
            margin: 0 9px;
            border-left: 1px solid #fff;
            border-right: 1px solid #fff;
        }

        .navbar .btn, .navbar .btn-group {
            margin-top: 0;
        }

            .navbar .btn-group .btn, .navbar .input-prepend .btn, .navbar .input-append .btn {
                margin-top: 0;
            }

        .navbar-form {
            margin-bottom: 0;
            *zoom: 1;
        }

            .navbar-form:before, .navbar-form:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .navbar-form:after {
                clear: both;
            }

            .navbar-form:before, .navbar-form:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .navbar-form:after {
                clear: both;
            }

            .navbar-form input, .navbar-form select, .navbar-form .radio, .navbar-form .checkbox {
                margin-top: 26px;
            }

            .navbar-form input, .navbar-form select, .navbar-form .btn {
                display: inline-block;
                margin-bottom: 0;
            }

                .navbar-form input[type="image"], .navbar-form input[type="checkbox"], .navbar-form input[type="radio"] {
                    margin-top: 3px;
                }

            .navbar-form .input-append, .navbar-form .input-prepend {
                margin-top: 5px;
                white-space: nowrap;
            }

                .navbar-form .input-append input, .navbar-form .input-prepend input {
                    margin-top: 0;
                }

        .navbar-search {
            position: relative;
            float: left;
            margin-top: 26px;
            margin-bottom: 0;
        }

            .navbar-search .search-query {
                margin-bottom: 0;
                padding: 4px 14px;
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                font-size: 13px;
                font-weight: 400;
                line-height: 1;
                -webkit-border-radius: 15px;
                -moz-border-radius: 15px;
                border-radius: 15px;
            }

        .navbar-static-top {
            position: static;
            margin-bottom: 0;
        }

            .navbar-static-top .navbar-inner {
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
            }

        .navbar-fixed-top, .navbar-fixed-bottom {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030;
            margin-bottom: 0;
        }

            .navbar-fixed-top .navbar-inner, .navbar-static-top .navbar-inner {
                border-width: 0 0 1px;
            }

            .navbar-fixed-bottom .navbar-inner {
                border-width: 1px 0 0;
            }

            .navbar-fixed-top .navbar-inner, .navbar-fixed-bottom .navbar-inner {
                padding-left: 0;
                padding-right: 0;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
            }

            .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
                width: 940px;
            }

        .navbar-fixed-top {
            top: 0;
        }

            .navbar-fixed-top .navbar-inner, .navbar-static-top .navbar-inner {
                -webkit-box-shadow: 0 1px 10px rgba(0,0,0,.1);
                -moz-box-shadow: 0 1px 10px rgba(0,0,0,.1);
                box-shadow: 0 1px 10px rgba(0,0,0,.1);
            }

        .navbar-fixed-bottom {
            bottom: 0;
        }

            .navbar-fixed-bottom .navbar-inner {
                -webkit-box-shadow: 0 -1px 10px rgba(0,0,0,.1);
                -moz-box-shadow: 0 -1px 10px rgba(0,0,0,.1);
                box-shadow: 0 -1px 10px rgba(0,0,0,.1);
            }

        .navbar .nav {
            position: relative;
            left: 0;
            display: block;
            float: left;
            margin: 0 10px 0 0;
        }

            .navbar .nav.pull-right {
                float: right;
                margin-right: 0;
            }

            .navbar .nav > li {
                float: left;
            }

                .navbar .nav > li > a {
                    float: none;
                    padding: 30.5px 15px 30.5px;
                    color: #333;
                    text-decoration: none;
                    text-shadow: 0 1px 0 #fff;
                }

            .navbar .nav .dropdown-toggle .caret {
                margin-top: 8px;
            }

            .navbar .nav > li > a:focus, .navbar .nav > li > a:hover {
                background-color: transparent;
                color: #29bbf2;
                text-decoration: none;
            }

            .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus {
                color: #29bbf2;
                text-decoration: none;
                background-color: transparent;
                -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.125);
                -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.125);
                box-shadow: inset 0 3px 8px rgba(0,0,0,.125);
            }

        .navbar .btn-navbar {
            display: none;
            float: right;
            padding: 14px 17px;
            margin-left: 5px;
            margin-right: 5px;
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #f2f2f2;
            background-image: -moz-linear-gradient(top,#f2f2f2,#f2f2f2);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#f2f2f2),to(#f2f2f2));
            background-image: -webkit-linear-gradient(top,#f2f2f2,#f2f2f2);
            background-image: -o-linear-gradient(top,#f2f2f2,#f2f2f2);
            background-image: linear-gradient(to bottom,#f2f2f2,#f2f2f2);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2f2f2',endColorstr='#fff2f2f2',GradientType=0);
            border-color: #f2f2f2 #f2f2f2 #ccc;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #f2f2f2;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.075);
            -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.075);
            box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.075);
        }

            .navbar .btn-navbar:hover, .navbar .btn-navbar:active, .navbar .btn-navbar.active, .navbar .btn-navbar.disabled, .navbar .btn-navbar[disabled] {
                color: #fff;
                background-color: #f2f2f2;
                *background-color: #e6e6e6;
            }

            .navbar .btn-navbar:active, .navbar .btn-navbar.active {
                background-color: #d9d9d9; \9
            }

            .navbar .btn-navbar:hover, .navbar .btn-navbar:active, .navbar .btn-navbar.active, .navbar .btn-navbar.disabled, .navbar .btn-navbar[disabled] {
                color: #fff;
                background-color: #f2f2f2;
                *background-color: #e6e6e6;
            }

            .navbar .btn-navbar:active, .navbar .btn-navbar.active {
                background-color: #d9d9d9; \9
            }

            .navbar .btn-navbar .icon-bar {
                display: block;
                width: 18px;
                height: 2px;
                background-color: #f5f5f5;
                -webkit-border-radius: 1px;
                -moz-border-radius: 1px;
                border-radius: 1px;
                -webkit-box-shadow: 0 1px 0 rgba(0,0,0,.25);
                -moz-box-shadow: 0 1px 0 rgba(0,0,0,.25);
                box-shadow: 0 1px 0 rgba(0,0,0,.25);
            }

        .btn-navbar .icon-bar + .icon-bar {
            margin-top: 3px;
        }

        .navbar .nav > li > .dropdown-menu:before {
            content: '';
            display: inline-block;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: 7px solid #ccc;
            border-bottom-color: #e6e6e6;
            position: absolute;
            top: -7px;
            left: 9px;
        }

        .navbar .nav > li > .dropdown-menu:after {
            content: '';
            display: inline-block;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #fff;
            position: absolute;
            top: -6px;
            left: 10px;
        }

        .navbar-fixed-bottom .nav > li > .dropdown-menu:before {
            border-top: 7px solid #ccc;
            border-top-color: #e6e6e6;
            border-bottom: 0;
            bottom: -7px;
            top: auto;
        }

        .navbar-fixed-bottom .nav > li > .dropdown-menu:after {
            border-top: 6px solid #fff;
            border-bottom: 0;
            bottom: -6px;
            top: auto;
        }

        .navbar .nav li.dropdown > a:hover .caret {
            border-top-color: #29bbf2;
            border-bottom-color: #29bbf2;
        }

        .navbar .nav li.dropdown.open > .dropdown-toggle, .navbar .nav li.dropdown.active > .dropdown-toggle, .navbar .nav li.dropdown.open.active > .dropdown-toggle {
            background-color: transparent;
            color: #29bbf2;
        }

        .navbar .nav li.dropdown > .dropdown-toggle .caret {
            border-top-color: #333;
            border-bottom-color: #333;
        }

        .navbar .nav li.dropdown.open > .dropdown-toggle .caret, .navbar .nav li.dropdown.active > .dropdown-toggle .caret, .navbar .nav li.dropdown.open.active > .dropdown-toggle .caret {
            border-top-color: #29bbf2;
            border-bottom-color: #29bbf2;
        }

        .navbar .pull-right > li > .dropdown-menu, .navbar .nav > li > .dropdown-menu.pull-right {
            left: auto;
            right: 0;
        }

            .navbar .pull-right > li > .dropdown-menu:before, .navbar .nav > li > .dropdown-menu.pull-right:before {
                left: auto;
                right: 12px;
            }

            .navbar .pull-right > li > .dropdown-menu:after, .navbar .nav > li > .dropdown-menu.pull-right:after {
                left: auto;
                right: 13px;
            }

            .navbar .pull-right > li > .dropdown-menu .dropdown-menu, .navbar .nav > li > .dropdown-menu.pull-right .dropdown-menu {
                left: auto;
                right: 100%;
                margin-left: 0;
                margin-right: -1px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }

        .navbar-inverse .navbar-inner {
            background-color: #1b1b1b;
            background-image: -moz-linear-gradient(top,#222,#111);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#222),to(#111));
            background-image: -webkit-linear-gradient(top,#222,#111);
            background-image: -o-linear-gradient(top,#222,#111);
            background-image: linear-gradient(to bottom,#222,#111);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff222222',endColorstr='#ff111111',GradientType=0);
            border-color: #252525;
        }

        .navbar-inverse .brand, .navbar-inverse .nav > li > a {
            color: #999;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
        }

            .navbar-inverse .brand:hover, .navbar-inverse .nav > li > a:hover {
                color: #fff;
            }

        .navbar-inverse .brand {
            color: #999;
        }

        .navbar-inverse .navbar-text {
            color: #999;
        }

        .navbar-inverse .nav > li > a:focus, .navbar-inverse .nav > li > a:hover {
            background-color: transparent;
            color: #fff;
        }

        .navbar-inverse .nav .active > a, .navbar-inverse .nav .active > a:hover, .navbar-inverse .nav .active > a:focus {
            color: #fff;
            background-color: #111;
        }

        .navbar-inverse .navbar-link {
            color: #999;
        }

            .navbar-inverse .navbar-link:hover {
                color: #fff;
            }

        .navbar-inverse .divider-vertical {
            border-left-color: #111;
            border-right-color: #222;
        }

        .navbar-inverse .nav li.dropdown.open > .dropdown-toggle, .navbar-inverse .nav li.dropdown.active > .dropdown-toggle, .navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle {
            background-color: #111;
            color: #fff;
        }

        .navbar-inverse .nav li.dropdown > a:hover .caret {
            border-top-color: #fff;
            border-bottom-color: #fff;
        }

        .navbar-inverse .nav li.dropdown > .dropdown-toggle .caret {
            border-top-color: #999;
            border-bottom-color: #999;
        }

        .navbar-inverse .nav li.dropdown.open > .dropdown-toggle .caret, .navbar-inverse .nav li.dropdown.active > .dropdown-toggle .caret, .navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle .caret {
            border-top-color: #fff;
            border-bottom-color: #fff;
        }

        .navbar-inverse .navbar-search .search-query {
            color: #fff;
            background-color: #515151;
            border-color: #111;
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1),0 1px 0 rgba(255,255,255,.15);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1),0 1px 0 rgba(255,255,255,.15);
            box-shadow: inset 0 1px 2px rgba(0,0,0,.1),0 1px 0 rgba(255,255,255,.15);
            -webkit-transition: none;
            -moz-transition: none;
            -o-transition: none;
            transition: none;
        }

            .navbar-inverse .navbar-search .search-query:-moz-placeholder {
                color: #ccc;
            }

            .navbar-inverse .navbar-search .search-query:-ms-input-placeholder {
                color: #ccc;
            }

            .navbar-inverse .navbar-search .search-query::-webkit-input-placeholder {
                color: #ccc;
            }

            .navbar-inverse .navbar-search .search-query:-moz-placeholder {
                color: #ccc;
            }

            .navbar-inverse .navbar-search .search-query:-ms-input-placeholder {
                color: #ccc;
            }

            .navbar-inverse .navbar-search .search-query::-webkit-input-placeholder {
                color: #ccc;
            }

            .navbar-inverse .navbar-search .search-query:focus, .navbar-inverse .navbar-search .search-query.focused {
                padding: 5px 15px;
                color: #333;
                text-shadow: 0 1px 0 #fff;
                background-color: #fff;
                border: 0;
                -webkit-box-shadow: 0 0 3px rgba(0,0,0,.15);
                -moz-box-shadow: 0 0 3px rgba(0,0,0,.15);
                box-shadow: 0 0 3px rgba(0,0,0,.15);
                outline: 0;
            }

        .navbar-inverse .btn-navbar {
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #0e0e0e;
            background-image: -moz-linear-gradient(top,#151515,#040404);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#151515),to(#040404));
            background-image: -webkit-linear-gradient(top,#151515,#040404);
            background-image: -o-linear-gradient(top,#151515,#040404);
            background-image: linear-gradient(to bottom,#151515,#040404);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff151515',endColorstr='#ff040404',GradientType=0);
            border-color: #040404 #040404 #000;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #040404;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .navbar-inverse .btn-navbar:hover, .navbar-inverse .btn-navbar:active, .navbar-inverse .btn-navbar.active, .navbar-inverse .btn-navbar.disabled, .navbar-inverse .btn-navbar[disabled] {
                color: #fff;
                background-color: #040404;
                *background-color: #000;
            }

            .navbar-inverse .btn-navbar:active, .navbar-inverse .btn-navbar.active {
                background-color: #000; \9
            }

            .navbar-inverse .btn-navbar:hover, .navbar-inverse .btn-navbar:active, .navbar-inverse .btn-navbar.active, .navbar-inverse .btn-navbar.disabled, .navbar-inverse .btn-navbar[disabled] {
                color: #fff;
                background-color: #040404;
                *background-color: #000;
            }

            .navbar-inverse .btn-navbar:active, .navbar-inverse .btn-navbar.active {
                background-color: #000; \9
            }

        .breadcrumb {
            padding: 8px 15px;
            margin: 0 0 21px;
            list-style: none;
            background-color: #f5f5f5;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

            .breadcrumb > li {
                display: inline-block;
                *display: inline;
                *zoom: 1;
                text-shadow: 0 1px 0 #fff;
            }

                .breadcrumb > li > .divider {
                    padding: 0 5px;
                    color: #ccc;
                }

            .breadcrumb > .active {
                color: #999;
            }

        .pagination {
            margin: 21px 0;
        }

            .pagination ul {
                display: inline-block;
                *display: inline;
                *zoom: 1;
                margin-left: 0;
                margin-bottom: 0;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }

                .pagination ul > li {
                    display: inline;
                }

                    .pagination ul > li > a, .pagination ul > li > span {
                        float: left;
                        padding: 4px 12px;
                        line-height: 21px;
                        text-decoration: none;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-left-width: 0;
                    }

                        .pagination ul > li > a:hover, .pagination ul > .active > a, .pagination ul > .active > span {
                            background-color: #f5f5f5;
                        }

                .pagination ul > .active > a, .pagination ul > .active > span {
                    color: #999;
                    cursor: default;
                }

                .pagination ul > .disabled > span, .pagination ul > .disabled > a, .pagination ul > .disabled > a:hover {
                    color: #999;
                    background-color: transparent;
                    cursor: default;
                }

                .pagination ul > li:first-child > a, .pagination ul > li:first-child > span {
                    border-left-width: 1px;
                    -webkit-border-top-left-radius: 4px;
                    -moz-border-radius-topleft: 4px;
                    border-top-left-radius: 4px;
                    -webkit-border-bottom-left-radius: 4px;
                    -moz-border-radius-bottomleft: 4px;
                    border-bottom-left-radius: 4px;
                }

                .pagination ul > li:last-child > a, .pagination ul > li:last-child > span {
                    -webkit-border-top-right-radius: 4px;
                    -moz-border-radius-topright: 4px;
                    border-top-right-radius: 4px;
                    -webkit-border-bottom-right-radius: 4px;
                    -moz-border-radius-bottomright: 4px;
                    border-bottom-right-radius: 4px;
                }

        .pagination-centered {
            text-align: center;
        }

        .pagination-right {
            text-align: right;
        }

        .pagination-large ul > li > a, .pagination-large ul > li > span {
            padding: 11px 19px;
            font-size: 16.25px;
        }

        .pagination-large ul > li:first-child > a, .pagination-large ul > li:first-child > span {
            -webkit-border-top-left-radius: 6px;
            -moz-border-radius-topleft: 6px;
            border-top-left-radius: 6px;
            -webkit-border-bottom-left-radius: 6px;
            -moz-border-radius-bottomleft: 6px;
            border-bottom-left-radius: 6px;
        }

        .pagination-large ul > li:last-child > a, .pagination-large ul > li:last-child > span {
            -webkit-border-top-right-radius: 6px;
            -moz-border-radius-topright: 6px;
            border-top-right-radius: 6px;
            -webkit-border-bottom-right-radius: 6px;
            -moz-border-radius-bottomright: 6px;
            border-bottom-right-radius: 6px;
        }

        .pagination-mini ul > li:first-child > a, .pagination-mini ul > li:first-child > span, .pagination-small ul > li:first-child > a, .pagination-small ul > li:first-child > span {
            -webkit-border-top-left-radius: 3px;
            -moz-border-radius-topleft: 3px;
            border-top-left-radius: 3px;
            -webkit-border-bottom-left-radius: 3px;
            -moz-border-radius-bottomleft: 3px;
            border-bottom-left-radius: 3px;
        }

        .pagination-mini ul > li:last-child > a, .pagination-mini ul > li:last-child > span, .pagination-small ul > li:last-child > a, .pagination-small ul > li:last-child > span {
            -webkit-border-top-right-radius: 3px;
            -moz-border-radius-topright: 3px;
            border-top-right-radius: 3px;
            -webkit-border-bottom-right-radius: 3px;
            -moz-border-radius-bottomright: 3px;
            border-bottom-right-radius: 3px;
        }

        .pagination-small ul > li > a, .pagination-small ul > li > span {
            padding: 2px 10px;
            font-size: 11.05px;
        }

        .pagination-mini ul > li > a, .pagination-mini ul > li > span {
            padding: 0 6px;
            font-size: 9.75px;
        }

        .pager {
            margin: 21px 0;
            list-style: none;
            text-align: center;
            *zoom: 1;
        }

            .pager:before, .pager:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .pager:after {
                clear: both;
            }

            .pager:before, .pager:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .pager:after {
                clear: both;
            }

            .pager li {
                display: inline;
            }

                .pager li > a, .pager li > span {
                    display: inline-block;
                    padding: 5px 14px;
                    background-color: #fff;
                    border: 1px solid #ddd;
                    -webkit-border-radius: 15px;
                    -moz-border-radius: 15px;
                    border-radius: 15px;
                }

                    .pager li > a:hover {
                        text-decoration: none;
                        background-color: #f5f5f5;
                    }

            .pager .next > a, .pager .next > span {
                float: right;
            }

            .pager .previous > a, .pager .previous > span {
                float: left;
            }

            .pager .disabled > a, .pager .disabled > a:hover, .pager .disabled > span {
                color: #999;
                background-color: #fff;
                cursor: default;
            }

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
        }

            .modal-backdrop.fade {
                opacity: 0;
            }

                .modal-backdrop, .modal-backdrop.fade.in {
                    opacity: .8;
                    filter: alpha(opacity=80);
                }

        .modal {
            position: fixed;
            top: 10%;
            left: 50%;
            z-index: 1050;
            width: 560px;
            margin-left: -280px;
            background-color: #fff;
            border: 1px solid #999;
            border: 1px solid rgba(0,0,0,.3);
            *border: 1px solid #999;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            -webkit-box-shadow: 0 3px 7px rgba(0,0,0,.3);
            -moz-box-shadow: 0 3px 7px rgba(0,0,0,.3);
            box-shadow: 0 3px 7px rgba(0,0,0,.3);
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding-box;
            background-clip: padding-box;
            outline: 0;
        }

            .modal.fade {
                -webkit-transition: opacity .3s linear,top .3s ease-out;
                -moz-transition: opacity .3s linear,top .3s ease-out;
                -o-transition: opacity .3s linear,top .3s ease-out;
                transition: opacity .3s linear,top .3s ease-out;
                top: -25%;
            }

                .modal.fade.in {
                    top: 10%;
                }

        .modal-header {
            padding: 9px 15px;
            border-bottom: 1px solid #eee;
        }

            .modal-header .close {
                margin-top: 2px;
            }

            .modal-header h3 {
                margin: 0;
                line-height: 30px;
            }

        .modal-body {
            position: relative;
            overflow-y: auto;
            max-height: 400px;
            padding: 15px;
        }

        .modal-form {
            margin-bottom: 0;
        }

        .modal-footer {
            padding: 14px 15px 15px;
            margin-bottom: 0;
            text-align: right;
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
            -webkit-border-radius: 0 0 6px 6px;
            -moz-border-radius: 0 0 6px 6px;
            border-radius: 0 0 6px 6px;
            -webkit-box-shadow: inset 0 1px 0 #fff;
            -moz-box-shadow: inset 0 1px 0 #fff;
            box-shadow: inset 0 1px 0 #fff;
            *zoom: 1;
        }

            .modal-footer:before, .modal-footer:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .modal-footer:after {
                clear: both;
            }

            .modal-footer:before, .modal-footer:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .modal-footer:after {
                clear: both;
            }

            .modal-footer .btn + .btn {
                margin-left: 5px;
                margin-bottom: 0;
            }

            .modal-footer .btn-group .btn + .btn {
                margin-left: -1px;
            }

            .modal-footer .btn-block + .btn-block {
                margin-left: 0;
            }

        .tooltip {
            position: absolute;
            z-index: 1030;
            display: block;
            visibility: visible;
            padding: 5px;
            font-size: 11px;
            opacity: 0;
            filter: alpha(opacity=0);
        }

            .tooltip.in {
                opacity: .8;
                filter: alpha(opacity=80);
            }

            .tooltip.top {
                margin-top: -3px;
            }

            .tooltip.right {
                margin-left: 3px;
            }

            .tooltip.bottom {
                margin-top: 3px;
            }

            .tooltip.left {
                margin-left: -3px;
            }

        .tooltip-inner {
            max-width: 200px;
            padding: 3px 8px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            background-color: #000;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .tooltip-arrow {
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
        }

        .tooltip.top .tooltip-arrow {
            bottom: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000;
        }

        .tooltip.right .tooltip-arrow {
            top: 50%;
            left: 0;
            margin-top: -5px;
            border-width: 5px 5px 5px 0;
            border-right-color: #000;
        }

        .tooltip.left .tooltip-arrow {
            top: 50%;
            right: 0;
            margin-top: -5px;
            border-width: 5px 0 5px 5px;
            border-left-color: #000;
        }

        .tooltip.bottom .tooltip-arrow {
            top: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000;
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1010;
            display: none;
            width: 236px;
            padding: 1px;
            text-align: left;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border: 1px solid rgba(0,0,0,.2);
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
            -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            white-space: normal;
        }

            .popover.top {
                margin-top: -10px;
            }

            .popover.right {
                margin-left: 10px;
            }

            .popover.bottom {
                margin-top: 10px;
            }

            .popover.left {
                margin-left: -10px;
            }

        .popover-title {
            margin: 0;
            padding: 8px 14px;
            font-size: 14px;
            font-weight: 400;
            line-height: 18px;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            -webkit-border-radius: 5px 5px 0 0;
            -moz-border-radius: 5px 5px 0 0;
            border-radius: 5px 5px 0 0;
        }

        .popover-content {
            padding: 9px 14px;
        }

        .popover .arrow, .popover .arrow:after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
        }

        .popover .arrow {
            border-width: 11px;
        }

            .popover .arrow:after {
                border-width: 10px;
                content: "";
            }

        .popover.top .arrow {
            left: 50%;
            margin-left: -11px;
            border-bottom-width: 0;
            border-top-color: #999;
            border-top-color: rgba(0,0,0,.25);
            bottom: -11px;
        }

            .popover.top .arrow:after {
                bottom: 1px;
                margin-left: -10px;
                border-bottom-width: 0;
                border-top-color: #fff;
            }

        .popover.right .arrow {
            top: 50%;
            left: -11px;
            margin-top: -11px;
            border-left-width: 0;
            border-right-color: #999;
            border-right-color: rgba(0,0,0,.25);
        }

            .popover.right .arrow:after {
                left: 1px;
                bottom: -10px;
                border-left-width: 0;
                border-right-color: #fff;
            }

        .popover.bottom .arrow {
            left: 50%;
            margin-left: -11px;
            border-top-width: 0;
            border-bottom-color: #999;
            border-bottom-color: rgba(0,0,0,.25);
            top: -11px;
        }

            .popover.bottom .arrow:after {
                top: 1px;
                margin-left: -10px;
                border-top-width: 0;
                border-bottom-color: #fff;
            }

        .popover.left .arrow {
            top: 50%;
            right: -11px;
            margin-top: -11px;
            border-right-width: 0;
            border-left-color: #999;
            border-left-color: rgba(0,0,0,.25);
        }

            .popover.left .arrow:after {
                right: 1px;
                border-right-width: 0;
                border-left-color: #fff;
                bottom: -10px;
            }

        .thumbnails {
            margin-left: -20px;
            list-style: none;
            *zoom: 1;
        }

            .thumbnails:before, .thumbnails:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .thumbnails:after {
                clear: both;
            }

            .thumbnails:before, .thumbnails:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .thumbnails:after {
                clear: both;
            }

        .row-fluid .thumbnails {
            margin-left: 0;
        }

        .thumbnails > li {
            float: left;
            margin-bottom: 21px;
            margin-left: 20px;
        }

        .thumbnail {
            display: block;
            padding: 4px;
            line-height: 21px;
            border: 1px solid #ddd;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.055);
            -moz-box-shadow: 0 1px 3px rgba(0,0,0,.055);
            box-shadow: 0 1px 3px rgba(0,0,0,.055);
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        a.thumbnail:hover {
            border-color: #333;
            -webkit-box-shadow: 0 1px 4px rgba(0,105,214,.25);
            -moz-box-shadow: 0 1px 4px rgba(0,105,214,.25);
            box-shadow: 0 1px 4px rgba(0,105,214,.25);
        }

        .thumbnail > img {
            display: block;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .thumbnail .caption {
            padding: 9px;
            color: #555;
        }

        .media, .media-body {
            overflow: hidden;
            *overflow: visible;
            zoom: 1;
        }

            .media, .media .media {
                margin-top: 15px;
            }

                .media:first-child {
                    margin-top: 0;
                }

        .media-object {
            display: block;
        }

        .media-heading {
            margin: 0 0 5px;
        }

        .media .pull-left {
            margin-right: 10px;
        }

        .media .pull-right {
            margin-left: 10px;
        }

        .media-list {
            margin-left: 0;
            list-style: none;
        }

        .label, .badge {
            display: inline-block;
            padding: 2px 4px;
            font-size: 10.998px;
            font-weight: 700;
            line-height: 14px;
            color: #fff;
            vertical-align: baseline;
            white-space: nowrap;
            text-shadow: 0 -1px 0 rgba(0,0,0,.25);
            background-color: #999;
        }

        .label {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .badge {
            padding-left: 9px;
            padding-right: 9px;
            -webkit-border-radius: 9px;
            -moz-border-radius: 9px;
            border-radius: 9px;
        }

            .label:empty, .badge:empty {
                display: none;
            }

        a.label:hover, a.badge:hover {
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }

        .label-important, .badge-important {
            background-color: #b94a48;
        }

            .label-important[href], .badge-important[href] {
                background-color: #953b39;
            }

        .label-warning, .badge-warning {
            background-color: #f89406;
        }

            .label-warning[href], .badge-warning[href] {
                background-color: #c67605;
            }

        .label-success, .badge-success {
            background-color: #468847;
        }

            .label-success[href], .badge-success[href] {
                background-color: #356635;
            }

        .label-info, .badge-info {
            background-color: #3a87ad;
        }

            .label-info[href], .badge-info[href] {
                background-color: #2d6987;
            }

        .label-inverse, .badge-inverse {
            background-color: #333;
        }

            .label-inverse[href], .badge-inverse[href] {
                background-color: #1a1a1a;
            }

        .btn .label, .btn .badge {
            position: relative;
            top: -1px;
        }

        .btn-mini .label, .btn-mini .badge {
            top: 0;
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @-moz-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @-ms-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @-o-keyframes progress-bar-stripes {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 40px 0;
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }

            to {
                background-position: 0 0;
            }
        }

        .accordion {
            margin-bottom: 21px;
        }

        .accordion-group {
            margin-bottom: 2px;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .accordion-heading {
            border-bottom: 0;
        }

            .accordion-heading .accordion-toggle {
                display: block;
                padding: 8px 15px;
            }

        .accordion-toggle {
            cursor: pointer;
        }

        .accordion-inner {
            padding: 9px 15px;
            border-top: 1px solid #e5e5e5;
        }

        .pull-right {
            float: right;
        }

        .pull-left {
            float: left;
        }

        .hide {
            display: none;
        }

        .show {
            display: block;
        }

        .invisible {
            visibility: hidden;
        }

        .affix {
            position: fixed;
        }

        .clearfix {
            *zoom: 1;
        }

            .clearfix:before, .clearfix:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .clearfix:after {
                clear: both;
            }

        .hide-text {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .input-block-level {
            display: block;
            width: 100%;
            min-height: 31px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .hidden {
            display: none;
            visibility: hidden;
        }

        .visible-phone {
            display: none !important;
        }

        .visible-tablet {
            display: none !important;
        }

        .hidden-desktop {
            display: none !important;
        }

        .visible-desktop {
            display: inherit !important;
        }

        @media(min-width:768px) and (max-width:979px) {
            .hidden-desktop {
                display: inherit !important;
            }

            .visible-desktop {
                display: none !important;
            }

            .visible-tablet {
                display: inherit !important;
            }

            .hidden-tablet {
                display: none !important;
            }
        }

        @media(max-width:767px) {
            .hidden-desktop {
                display: inherit !important;
            }

            .visible-desktop {
                display: none !important;
            }

            .visible-phone {
                display: inherit !important;
            }

            .hidden-phone {
                display: none !important;
            }
        }

        @media(min-width:1200px) {
            .row {
                margin-left: -20px;
                *zoom: 1;
            }

                .row:before, .row:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row:after {
                    clear: both;
                }

                .row:before, .row:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row:after {
                    clear: both;
                }

            [class*="span"] {
                float: left;
                min-height: 1px;
                margin-left: 20px;
            }

            .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
                width: 940px;
            }

            .span12 {
                width: 940px;
            }

            .span11 {
                width: 860px;
            }

            .span10 {
                width: 780px;
            }

            .span9 {
                width: 700px;
            }

            .span8 {
                width: 620px;
            }

            .span7 {
                width: 540px;
            }

            .span6 {
                width: 460px;
            }

            .span5 {
                width: 380px;
            }

            .span4 {
                width: 300px;
            }

            .span3 {
                width: 220px;
            }

            .span2 {
                width: 140px;
            }

            .span1 {
                width: 60px;
            }

            .offset12 {
                margin-left: 980px;
            }

            .offset11 {
                margin-left: 900px;
            }

            .offset10 {
                margin-left: 820px;
            }

            .offset9 {
                margin-left: 740px;
            }

            .offset8 {
                margin-left: 660px;
            }

            .offset7 {
                margin-left: 580px;
            }

            .offset6 {
                margin-left: 500px;
            }

            .offset5 {
                margin-left: 420px;
            }

            .offset4 {
                margin-left: 340px;
            }

            .offset3 {
                margin-left: 260px;
            }

            .offset2 {
                margin-left: 180px;
            }

            .offset1 {
                margin-left: 100px;
            }

            .row {
                margin-left: -20px;
                *zoom: 1;
            }

                .row:before, .row:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row:after {
                    clear: both;
                }

                .row:before, .row:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row:after {
                    clear: both;
                }

            [class*="span"] {
                float: left;
                min-height: 1px;
                margin-left: 20px;
            }

            .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
                width: 940px;
            }

            .span12 {
                width: 940px;
            }

            .span11 {
                width: 860px;
            }

            .span10 {
                width: 780px;
            }

            .span9 {
                width: 700px;
            }

            .span8 {
                width: 620px;
            }

            .span7 {
                width: 540px;
            }

            .span6 {
                width: 460px;
            }

            .span5 {
                width: 380px;
            }

            .span4 {
                width: 300px;
            }

            .span3 {
                width: 220px;
            }

            .span2 {
                width: 140px;
            }

            .span1 {
                width: 60px;
            }

            .offset12 {
                margin-left: 980px;
            }

            .offset11 {
                margin-left: 900px;
            }

            .offset10 {
                margin-left: 820px;
            }

            .offset9 {
                margin-left: 740px;
            }

            .offset8 {
                margin-left: 660px;
            }

            .offset7 {
                margin-left: 580px;
            }

            .offset6 {
                margin-left: 500px;
            }

            .offset5 {
                margin-left: 420px;
            }

            .offset4 {
                margin-left: 340px;
            }

            .offset3 {
                margin-left: 260px;
            }

            .offset2 {
                margin-left: 180px;
            }

            .offset1 {
                margin-left: 100px;
            }

            .row-fluid {
                width: 100%;
                *zoom: 1;
            }

                .row-fluid:before, .row-fluid:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row-fluid:after {
                    clear: both;
                }

                .row-fluid:before, .row-fluid:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row-fluid:after {
                    clear: both;
                }

                .row-fluid [class*="span"] {
                    display: block;
                    width: 100%;
                    min-height: 31px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    float: left;
                    margin-left: 2.1276595744681%;
                    *margin-left: 2.0744680851064%;
                }

                    .row-fluid [class*="span"]:first-child {
                        margin-left: 0;
                    }

                .row-fluid .controls-row [class*="span"] + [class*="span"] {
                    margin-left: 2.1276595744681%;
                }

                .row-fluid .span12 {
                    width: 100%;
                    *width: 99.946808510638%;
                }

                .row-fluid .span11 {
                    width: 91.489361702128%;
                    *width: 91.436170212766%;
                }

                .row-fluid .span10 {
                    width: 82.978723404255%;
                    *width: 82.925531914894%;
                }

                .row-fluid .span9 {
                    width: 74.468085106383%;
                    *width: 74.414893617021%;
                }

                .row-fluid .span8 {
                    width: 65.957446808511%;
                    *width: 65.904255319149%;
                }

                .row-fluid .span7 {
                    width: 57.446808510638%;
                    *width: 57.393617021277%;
                }

                .row-fluid .span6 {
                    width: 48.936170212766%;
                    *width: 48.882978723404%;
                }

                .row-fluid .span5 {
                    width: 40.425531914894%;
                    *width: 40.372340425532%;
                }

                .row-fluid .span4 {
                    width: 31.914893617021%;
                    *width: 31.86170212766%;
                }

                .row-fluid .span3 {
                    width: 23.404255319149%;
                    *width: 23.351063829787%;
                }

                .row-fluid .span2 {
                    width: 14.893617021277%;
                    *width: 14.840425531915%;
                }

                .row-fluid .span1 {
                    width: 6.3829787234043%;
                    *width: 6.3297872340426%;
                }

                .row-fluid .offset12 {
                    margin-left: 104.25531914894%;
                    *margin-left: 104.14893617021%;
                }

                    .row-fluid .offset12:first-child {
                        margin-left: 102.12765957447%;
                        *margin-left: 102.02127659574%;
                    }

                .row-fluid .offset11 {
                    margin-left: 95.744680851064%;
                    *margin-left: 95.63829787234%;
                }

                    .row-fluid .offset11:first-child {
                        margin-left: 93.617021276596%;
                        *margin-left: 93.510638297872%;
                    }

                .row-fluid .offset10 {
                    margin-left: 87.234042553191%;
                    *margin-left: 87.127659574468%;
                }

                    .row-fluid .offset10:first-child {
                        margin-left: 85.106382978723%;
                        *margin-left: 85%;
                    }

                .row-fluid .offset9 {
                    margin-left: 78.723404255319%;
                    *margin-left: 78.617021276596%;
                }

                    .row-fluid .offset9:first-child {
                        margin-left: 76.595744680851%;
                        *margin-left: 76.489361702128%;
                    }

                .row-fluid .offset8 {
                    margin-left: 70.212765957447%;
                    *margin-left: 70.106382978723%;
                }

                    .row-fluid .offset8:first-child {
                        margin-left: 68.085106382979%;
                        *margin-left: 67.978723404255%;
                    }

                .row-fluid .offset7 {
                    margin-left: 61.702127659574%;
                    *margin-left: 61.595744680851%;
                }

                    .row-fluid .offset7:first-child {
                        margin-left: 59.574468085106%;
                        *margin-left: 59.468085106383%;
                    }

                .row-fluid .offset6 {
                    margin-left: 53.191489361702%;
                    *margin-left: 53.085106382979%;
                }

                    .row-fluid .offset6:first-child {
                        margin-left: 51.063829787234%;
                        *margin-left: 50.957446808511%;
                    }

                .row-fluid .offset5 {
                    margin-left: 44.68085106383%;
                    *margin-left: 44.574468085106%;
                }

                    .row-fluid .offset5:first-child {
                        margin-left: 42.553191489362%;
                        *margin-left: 42.446808510638%;
                    }

                .row-fluid .offset4 {
                    margin-left: 36.170212765957%;
                    *margin-left: 36.063829787234%;
                }

                    .row-fluid .offset4:first-child {
                        margin-left: 34.042553191489%;
                        *margin-left: 33.936170212766%;
                    }

                .row-fluid .offset3 {
                    margin-left: 27.659574468085%;
                    *margin-left: 27.553191489362%;
                }

                    .row-fluid .offset3:first-child {
                        margin-left: 25.531914893617%;
                        *margin-left: 25.425531914894%;
                    }

                .row-fluid .offset2 {
                    margin-left: 19.148936170213%;
                    *margin-left: 19.042553191489%;
                }

                    .row-fluid .offset2:first-child {
                        margin-left: 17.021276595745%;
                        *margin-left: 16.914893617021%;
                    }

                .row-fluid .offset1 {
                    margin-left: 10.63829787234%;
                    *margin-left: 10.531914893617%;
                }

                    .row-fluid .offset1:first-child {
                        margin-left: 8.5106382978723%;
                        *margin-left: 8.4042553191489%;
                    }

            .row-fluid {
                width: 100%;
                *zoom: 1;
            }

                .row-fluid:before, .row-fluid:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row-fluid:after {
                    clear: both;
                }

                .row-fluid:before, .row-fluid:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row-fluid:after {
                    clear: both;
                }

                .row-fluid [class*="span"] {
                    display: block;
                    width: 100%;
                    min-height: 31px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    float: left;
                    margin-left: 2.1276595744681%;
                    *margin-left: 2.0744680851064%;
                }

                    .row-fluid [class*="span"]:first-child {
                        margin-left: 0;
                    }

                .row-fluid .controls-row [class*="span"] + [class*="span"] {
                    margin-left: 2.1276595744681%;
                }

                .row-fluid .span12 {
                    width: 100%;
                    *width: 99.946808510638%;
                }

                .row-fluid .span11 {
                    width: 91.489361702128%;
                    *width: 91.436170212766%;
                }

                .row-fluid .span10 {
                    width: 82.978723404255%;
                    *width: 82.925531914894%;
                }

                .row-fluid .span9 {
                    width: 74.468085106383%;
                    *width: 74.414893617021%;
                }

                .row-fluid .span8 {
                    width: 65.957446808511%;
                    *width: 65.904255319149%;
                }

                .row-fluid .span7 {
                    width: 57.446808510638%;
                    *width: 57.393617021277%;
                }

                .row-fluid .span6 {
                    width: 48.936170212766%;
                    *width: 48.882978723404%;
                }

                .row-fluid .span5 {
                    width: 40.425531914894%;
                    *width: 40.372340425532%;
                }

                .row-fluid .span4 {
                    width: 31.914893617021%;
                    *width: 31.86170212766%;
                }

                .row-fluid .span3 {
                    width: 21.404255319149%;
                    *width: 21.351063829787%;
                }

                .row-fluid .span2 {
                    width: 14.893617021277%;
                    *width: 14.840425531915%;
                }

                .row-fluid .span1 {
                    width: 6.3829787234043%;
                    *width: 6.3297872340426%;
                }

                .row-fluid .offset12 {
                    margin-left: 104.25531914894%;
                    *margin-left: 104.14893617021%;
                }

                    .row-fluid .offset12:first-child {
                        margin-left: 102.12765957447%;
                        *margin-left: 102.02127659574%;
                    }

                .row-fluid .offset11 {
                    margin-left: 95.744680851064%;
                    *margin-left: 95.63829787234%;
                }

                    .row-fluid .offset11:first-child {
                        margin-left: 93.617021276596%;
                        *margin-left: 93.510638297872%;
                    }

                .row-fluid .offset10 {
                    margin-left: 87.234042553191%;
                    *margin-left: 87.127659574468%;
                }

                    .row-fluid .offset10:first-child {
                        margin-left: 85.106382978723%;
                        *margin-left: 85%;
                    }

                .row-fluid .offset9 {
                    margin-left: 78.723404255319%;
                    *margin-left: 78.617021276596%;
                }

                    .row-fluid .offset9:first-child {
                        margin-left: 76.595744680851%;
                        *margin-left: 76.489361702128%;
                    }

                .row-fluid .offset8 {
                    margin-left: 70.212765957447%;
                    *margin-left: 70.106382978723%;
                }

                    .row-fluid .offset8:first-child {
                        margin-left: 68.085106382979%;
                        *margin-left: 67.978723404255%;
                    }

                .row-fluid .offset7 {
                    margin-left: 61.702127659574%;
                    *margin-left: 61.595744680851%;
                }

                    .row-fluid .offset7:first-child {
                        margin-left: 59.574468085106%;
                        *margin-left: 59.468085106383%;
                    }

                .row-fluid .offset6 {
                    margin-left: 53.191489361702%;
                    *margin-left: 53.085106382979%;
                }

                    .row-fluid .offset6:first-child {
                        margin-left: 51.063829787234%;
                        *margin-left: 50.957446808511%;
                    }

                .row-fluid .offset5 {
                    margin-left: 44.68085106383%;
                    *margin-left: 44.574468085106%;
                }

                    .row-fluid .offset5:first-child {
                        margin-left: 42.553191489362%;
                        *margin-left: 42.446808510638%;
                    }

                .row-fluid .offset4 {
                    margin-left: 36.170212765957%;
                    *margin-left: 36.063829787234%;
                }

                    .row-fluid .offset4:first-child {
                        margin-left: 34.042553191489%;
                        *margin-left: 33.936170212766%;
                    }

                .row-fluid .offset3 {
                    margin-left: 27.659574468085%;
                    *margin-left: 27.553191489362%;
                }

                    .row-fluid .offset3:first-child {
                        margin-left: 25.531914893617%;
                        *margin-left: 25.425531914894%;
                    }

                .row-fluid .offset2 {
                    margin-left: 19.148936170213%;
                    *margin-left: 19.042553191489%;
                }

                    .row-fluid .offset2:first-child {
                        margin-left: 17.021276595745%;
                        *margin-left: 16.914893617021%;
                    }

                .row-fluid .offset1 {
                    margin-left: 10.63829787234%;
                    *margin-left: 10.531914893617%;
                }

                    .row-fluid .offset1:first-child {
                        margin-left: 8.5106382978723%;
                        *margin-left: 8.4042553191489%;
                    }

            input, textarea, .uneditable-input {
                margin-left: 0;
            }

            .controls-row [class*="span"] + [class*="span"] {
                margin-left: 20px;
            }

            input.span12, textarea.span12, .uneditable-input.span12 {
                width: 926px;
            }

            input.span11, textarea.span11, .uneditable-input.span11 {
                width: 846px;
            }

            input.span10, textarea.span10, .uneditable-input.span10 {
                width: 766px;
            }

            input.span9, textarea.span9, .uneditable-input.span9 {
                width: 686px;
            }

            input.span8, textarea.span8, .uneditable-input.span8 {
                width: 606px;
            }

            input.span7, textarea.span7, .uneditable-input.span7 {
                width: 526px;
            }

            input.span6, textarea.span6, .uneditable-input.span6 {
                width: 446px;
            }

            input.span5, textarea.span5, .uneditable-input.span5 {
                width: 366px;
            }

            input.span4, textarea.span4, .uneditable-input.span4 {
                width: 286px;
            }

            input.span3, textarea.span3, .uneditable-input.span3 {
                width: 206px;
            }

            input.span2, textarea.span2, .uneditable-input.span2 {
                width: 126px;
            }

            input.span1, textarea.span1, .uneditable-input.span1 {
                width: 46px;
            }

            input, textarea, .uneditable-input {
                margin-left: 0;
            }

            .controls-row [class*="span"] + [class*="span"] {
                margin-left: 20px;
            }

            input.span12, textarea.span12, .uneditable-input.span12 {
                width: 926px;
            }

            input.span11, textarea.span11, .uneditable-input.span11 {
                width: 846px;
            }

            input.span10, textarea.span10, .uneditable-input.span10 {
                width: 766px;
            }

            input.span9, textarea.span9, .uneditable-input.span9 {
                width: 686px;
            }

            input.span8, textarea.span8, .uneditable-input.span8 {
                width: 606px;
            }

            input.span7, textarea.span7, .uneditable-input.span7 {
                width: 526px;
            }

            input.span6, textarea.span6, .uneditable-input.span6 {
                width: 446px;
            }

            input.span5, textarea.span5, .uneditable-input.span5 {
                width: 366px;
            }

            input.span4, textarea.span4, .uneditable-input.span4 {
                width: 286px;
            }

            input.span3, textarea.span3, .uneditable-input.span3 {
                width: 206px;
            }

            input.span2, textarea.span2, .uneditable-input.span2 {
                width: 126px;
            }

            input.span1, textarea.span1, .uneditable-input.span1 {
                width: 46px;
            }

            .thumbnails {
                margin-left: -20px;
            }

                .thumbnails > li {
                    margin-left: 20px;
                }

            .row-fluid .thumbnails {
                margin-left: 0;
            }
        }

        @media(min-width:768px) and (max-width:979px) {
            .row {
                margin-left: -20px;
                *zoom: 1;
            }

                .row:before, .row:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row:after {
                    clear: both;
                }

                .row:before, .row:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row:after {
                    clear: both;
                }

            [class*="span"] {
                float: left;
                min-height: 1px;
                margin-left: 20px;
            }

            .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
                width: 724px;
            }

            .span12 {
                width: 724px;
            }

            .span11 {
                width: 662px;
            }

            .span10 {
                width: 600px;
            }

            .span9 {
                width: 538px;
            }

            .span8 {
                width: 476px;
            }

            .span7 {
                width: 414px;
            }

            .span6 {
                width: 352px;
            }

            .span5 {
                width: 290px;
            }

            .span4 {
                width: 228px;
            }

            .span3 {
                width: 166px;
            }

            .span2 {
                width: 104px;
            }

            .span1 {
                width: 42px;
            }

            .offset12 {
                margin-left: 764px;
            }

            .offset11 {
                margin-left: 702px;
            }

            .offset10 {
                margin-left: 640px;
            }

            .offset9 {
                margin-left: 578px;
            }

            .offset8 {
                margin-left: 516px;
            }

            .offset7 {
                margin-left: 454px;
            }

            .offset6 {
                margin-left: 392px;
            }

            .offset5 {
                margin-left: 330px;
            }

            .offset4 {
                margin-left: 268px;
            }

            .offset3 {
                margin-left: 206px;
            }

            .offset2 {
                margin-left: 144px;
            }

            .offset1 {
                margin-left: 82px;
            }

            .row {
                margin-left: -20px;
                *zoom: 1;
            }

                .row:before, .row:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row:after {
                    clear: both;
                }

                .row:before, .row:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row:after {
                    clear: both;
                }

            [class*="span"] {
                float: left;
                min-height: 1px;
                margin-left: 20px;
            }

            .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
                width: 724px;
            }

            .span12 {
                width: 724px;
            }

            .span11 {
                width: 662px;
            }

            .span10 {
                width: 600px;
            }

            .span9 {
                width: 538px;
            }

            .span8 {
                width: 476px;
            }

            .span7 {
                width: 414px;
            }

            .span6 {
                width: 352px;
            }

            .span5 {
                width: 290px;
            }

            .span4 {
                width: 228px;
            }

            .span3 {
                width: 166px;
            }

            .span2 {
                width: 104px;
            }

            .span1 {
                width: 42px;
            }

            .offset12 {
                margin-left: 764px;
            }

            .offset11 {
                margin-left: 702px;
            }

            .offset10 {
                margin-left: 640px;
            }

            .offset9 {
                margin-left: 578px;
            }

            .offset8 {
                margin-left: 516px;
            }

            .offset7 {
                margin-left: 454px;
            }

            .offset6 {
                margin-left: 392px;
            }

            .offset5 {
                margin-left: 330px;
            }

            .offset4 {
                margin-left: 268px;
            }

            .offset3 {
                margin-left: 206px;
            }

            .offset2 {
                margin-left: 144px;
            }

            .offset1 {
                margin-left: 82px;
            }

            .row-fluid {
                width: 100%;
                *zoom: 1;
            }

                .row-fluid:before, .row-fluid:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row-fluid:after {
                    clear: both;
                }

                .row-fluid:before, .row-fluid:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row-fluid:after {
                    clear: both;
                }

                .row-fluid [class*="span"] {
                    display: block;
                    width: 100%;
                    min-height: 31px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    float: left;
                    margin-left: 2.7624309392265%;
                    *margin-left: 2.7092394498648%;
                }

                    .row-fluid [class*="span"]:first-child {
                        margin-left: 0;
                    }

                .row-fluid .controls-row [class*="span"] + [class*="span"] {
                    margin-left: 2.7624309392265%;
                }

                .row-fluid .span12 {
                    width: 100%;
                    *width: 99.946808510638%;
                }

                .row-fluid .span11 {
                    width: 91.436464088398%;
                    *width: 91.383272599036%;
                }

                .row-fluid .span10 {
                    width: 82.872928176796%;
                    *width: 82.819736687434%;
                }

                .row-fluid .span9 {
                    width: 74.309392265193%;
                    *width: 74.256200775832%;
                }

                .row-fluid .span8 {
                    width: 65.745856353591%;
                    *width: 65.692664864229%;
                }

                .row-fluid .span7 {
                    width: 57.182320441989%;
                    *width: 57.129128952627%;
                }

                .row-fluid .span6 {
                    width: 48.618784530387%;
                    *width: 48.565593041025%;
                }

                .row-fluid .span5 {
                    width: 40.055248618785%;
                    *width: 40.002057129423%;
                }

                .row-fluid .span4 {
                    width: 31.491712707182%;
                    *width: 31.438521217821%;
                }

                .row-fluid .span3 {
                    width: 22.92817679558%;
                    *width: 22.874985306218%;
                }

                .row-fluid .span2 {
                    width: 14.364640883978%;
                    *width: 14.311449394616%;
                }

                .row-fluid .span1 {
                    width: 5.8011049723757%;
                    *width: 5.747913483014%;
                }

                .row-fluid .offset12 {
                    margin-left: 105.52486187845%;
                    *margin-left: 105.41847889973%;
                }

                    .row-fluid .offset12:first-child {
                        margin-left: 102.76243093923%;
                        *margin-left: 102.6560479605%;
                    }

                .row-fluid .offset11 {
                    margin-left: 96.961325966851%;
                    *margin-left: 96.854942988127%;
                }

                    .row-fluid .offset11:first-child {
                        margin-left: 94.198895027624%;
                        *margin-left: 94.092512048901%;
                    }

                .row-fluid .offset10 {
                    margin-left: 88.397790055249%;
                    *margin-left: 88.291407076525%;
                }

                    .row-fluid .offset10:first-child {
                        margin-left: 85.635359116022%;
                        *margin-left: 85.528976137299%;
                    }

                .row-fluid .offset9 {
                    margin-left: 79.834254143646%;
                    *margin-left: 79.727871164923%;
                }

                    .row-fluid .offset9:first-child {
                        margin-left: 77.07182320442%;
                        *margin-left: 76.965440225696%;
                    }

                .row-fluid .offset8 {
                    margin-left: 71.270718232044%;
                    *margin-left: 71.164335253321%;
                }

                    .row-fluid .offset8:first-child {
                        margin-left: 68.508287292818%;
                        *margin-left: 68.401904314094%;
                    }

                .row-fluid .offset7 {
                    margin-left: 62.707182320442%;
                    *margin-left: 62.600799341719%;
                }

                    .row-fluid .offset7:first-child {
                        margin-left: 59.944751381215%;
                        *margin-left: 59.838368402492%;
                    }

                .row-fluid .offset6 {
                    margin-left: 54.14364640884%;
                    *margin-left: 54.037263430116%;
                }

                    .row-fluid .offset6:first-child {
                        margin-left: 51.381215469613%;
                        *margin-left: 51.27483249089%;
                    }

                .row-fluid .offset5 {
                    margin-left: 45.580110497238%;
                    *margin-left: 45.473727518514%;
                }

                    .row-fluid .offset5:first-child {
                        margin-left: 42.817679558011%;
                        *margin-left: 42.711296579288%;
                    }

                .row-fluid .offset4 {
                    margin-left: 37.016574585635%;
                    *margin-left: 36.910191606912%;
                }

                    .row-fluid .offset4:first-child {
                        margin-left: 34.254143646409%;
                        *margin-left: 34.147760667685%;
                    }

                .row-fluid .offset3 {
                    margin-left: 28.453038674033%;
                    *margin-left: 28.34665569531%;
                }

                    .row-fluid .offset3:first-child {
                        margin-left: 25.690607734807%;
                        *margin-left: 25.584224756083%;
                    }

                .row-fluid .offset2 {
                    margin-left: 19.889502762431%;
                    *margin-left: 19.783119783708%;
                }

                    .row-fluid .offset2:first-child {
                        margin-left: 17.127071823204%;
                        *margin-left: 17.020688844481%;
                    }

                .row-fluid .offset1 {
                    margin-left: 11.325966850829%;
                    *margin-left: 11.219583872105%;
                }

                    .row-fluid .offset1:first-child {
                        margin-left: 8.5635359116022%;
                        *margin-left: 8.4571529328788%;
                    }

            .row-fluid {
                width: 100%;
                *zoom: 1;
            }

                .row-fluid:before, .row-fluid:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row-fluid:after {
                    clear: both;
                }

                .row-fluid:before, .row-fluid:after {
                    display: table;
                    content: "";
                    line-height: 0;
                }

                .row-fluid:after {
                    clear: both;
                }

                .row-fluid [class*="span"] {
                    display: block;
                    width: 100%;
                    min-height: 31px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    float: left;
                    margin-left: 2.7624309392265%;
                    *margin-left: 2.7092394498648%;
                }

                    .row-fluid [class*="span"]:first-child {
                        margin-left: 0;
                    }

                .row-fluid .controls-row [class*="span"] + [class*="span"] {
                    margin-left: 2.7624309392265%;
                }

                .row-fluid .span12 {
                    width: 100%;
                    *width: 99.946808510638%;
                }

                .row-fluid .span11 {
                    width: 91.436464088398%;
                    *width: 91.383272599036%;
                }

                .row-fluid .span10 {
                    width: 82.872928176796%;
                    *width: 82.819736687434%;
                }

                .row-fluid .span9 {
                    width: 74.309392265193%;
                    *width: 74.256200775832%;
                }

                .row-fluid .span8 {
                    width: 65.745856353591%;
                    *width: 65.692664864229%;
                }

                .row-fluid .span7 {
                    width: 57.182320441989%;
                    *width: 57.129128952627%;
                }

                .row-fluid .span6 {
                    width: 48.618784530387%;
                    *width: 48.565593041025%;
                }

                .row-fluid .span5 {
                    width: 40.055248618785%;
                    *width: 40.002057129423%;
                }

                .row-fluid .span4 {
                    width: 31.491712707182%;
                    *width: 31.438521217821%;
                }

                .row-fluid .span3 {
                    width: 22.92817679558%;
                    *width: 22.874985306218%;
                }

                .row-fluid .span2 {
                    width: 14.364640883978%;
                    *width: 14.311449394616%;
                }

                .row-fluid .span1 {
                    width: 5.8011049723757%;
                    *width: 5.747913483014%;
                }

                .row-fluid .offset12 {
                    margin-left: 105.52486187845%;
                    *margin-left: 105.41847889973%;
                }

                    .row-fluid .offset12:first-child {
                        margin-left: 102.76243093923%;
                        *margin-left: 102.6560479605%;
                    }

                .row-fluid .offset11 {
                    margin-left: 96.961325966851%;
                    *margin-left: 96.854942988127%;
                }

                    .row-fluid .offset11:first-child {
                        margin-left: 94.198895027624%;
                        *margin-left: 94.092512048901%;
                    }

                .row-fluid .offset10 {
                    margin-left: 88.397790055249%;
                    *margin-left: 88.291407076525%;
                }

                    .row-fluid .offset10:first-child {
                        margin-left: 85.635359116022%;
                        *margin-left: 85.528976137299%;
                    }

                .row-fluid .offset9 {
                    margin-left: 79.834254143646%;
                    *margin-left: 79.727871164923%;
                }

                    .row-fluid .offset9:first-child {
                        margin-left: 77.07182320442%;
                        *margin-left: 76.965440225696%;
                    }

                .row-fluid .offset8 {
                    margin-left: 71.270718232044%;
                    *margin-left: 71.164335253321%;
                }

                    .row-fluid .offset8:first-child {
                        margin-left: 68.508287292818%;
                        *margin-left: 68.401904314094%;
                    }

                .row-fluid .offset7 {
                    margin-left: 62.707182320442%;
                    *margin-left: 62.600799341719%;
                }

                    .row-fluid .offset7:first-child {
                        margin-left: 59.944751381215%;
                        *margin-left: 59.838368402492%;
                    }

                .row-fluid .offset6 {
                    margin-left: 54.14364640884%;
                    *margin-left: 54.037263430116%;
                }

                    .row-fluid .offset6:first-child {
                        margin-left: 51.381215469613%;
                        *margin-left: 51.27483249089%;
                    }

                .row-fluid .offset5 {
                    margin-left: 45.580110497238%;
                    *margin-left: 45.473727518514%;
                }

                    .row-fluid .offset5:first-child {
                        margin-left: 42.817679558011%;
                        *margin-left: 42.711296579288%;
                    }

                .row-fluid .offset4 {
                    margin-left: 37.016574585635%;
                    *margin-left: 36.910191606912%;
                }

                    .row-fluid .offset4:first-child {
                        margin-left: 34.254143646409%;
                        *margin-left: 34.147760667685%;
                    }

                .row-fluid .offset3 {
                    margin-left: 28.453038674033%;
                    *margin-left: 28.34665569531%;
                }

                    .row-fluid .offset3:first-child {
                        margin-left: 25.690607734807%;
                        *margin-left: 25.584224756083%;
                    }

                .row-fluid .offset2 {
                    margin-left: 19.889502762431%;
                    *margin-left: 19.783119783708%;
                }

                    .row-fluid .offset2:first-child {
                        margin-left: 17.127071823204%;
                        *margin-left: 17.020688844481%;
                    }

                .row-fluid .offset1 {
                    margin-left: 11.325966850829%;
                    *margin-left: 11.219583872105%;
                }

                    .row-fluid .offset1:first-child {
                        margin-left: 8.5635359116022%;
                        *margin-left: 8.4571529328788%;
                    }

            input, textarea, .uneditable-input {
                margin-left: 0;
            }

            .controls-row [class*="span"] + [class*="span"] {
                margin-left: 20px;
            }

            input.span12, textarea.span12, .uneditable-input.span12 {
                width: 710px;
            }

            input.span11, textarea.span11, .uneditable-input.span11 {
                width: 648px;
            }

            input.span10, textarea.span10, .uneditable-input.span10 {
                width: 586px;
            }

            input.span9, textarea.span9, .uneditable-input.span9 {
                width: 524px;
            }

            input.span8, textarea.span8, .uneditable-input.span8 {
                width: 462px;
            }

            input.span7, textarea.span7, .uneditable-input.span7 {
                width: 400px;
            }

            input.span6, textarea.span6, .uneditable-input.span6 {
                width: 338px;
            }

            input.span5, textarea.span5, .uneditable-input.span5 {
                width: 276px;
            }

            input.span4, textarea.span4, .uneditable-input.span4 {
                width: 214px;
            }

            input.span3, textarea.span3, .uneditable-input.span3 {
                width: 152px;
            }

            input.span2, textarea.span2, .uneditable-input.span2 {
                width: 90px;
            }

            input.span1, textarea.span1, .uneditable-input.span1 {
                width: 28px;
            }

            input, textarea, .uneditable-input {
                margin-left: 0;
            }

            .controls-row [class*="span"] + [class*="span"] {
                margin-left: 20px;
            }

            input.span12, textarea.span12, .uneditable-input.span12 {
                width: 710px;
            }

            input.span11, textarea.span11, .uneditable-input.span11 {
                width: 648px;
            }

            input.span10, textarea.span10, .uneditable-input.span10 {
                width: 586px;
            }

            input.span9, textarea.span9, .uneditable-input.span9 {
                width: 524px;
            }

            input.span8, textarea.span8, .uneditable-input.span8 {
                width: 462px;
            }

            input.span7, textarea.span7, .uneditable-input.span7 {
                width: 400px;
            }

            input.span6, textarea.span6, .uneditable-input.span6 {
                width: 338px;
            }

            input.span5, textarea.span5, .uneditable-input.span5 {
                width: 276px;
            }

            input.span4, textarea.span4, .uneditable-input.span4 {
                width: 214px;
            }

            input.span3, textarea.span3, .uneditable-input.span3 {
                width: 152px;
            }

            input.span2, textarea.span2, .uneditable-input.span2 {
                width: 90px;
            }

            input.span1, textarea.span1, .uneditable-input.span1 {
                width: 28px;
            }
        }

        @media(max-width:767px) {
            body {
                padding-left: 20px;
                padding-right: 20px;
            }

            .navbar-fixed-top, .navbar-fixed-bottom, .navbar-static-top {
                margin-left: -20px;
                margin-right: -20px;
            }

            .container-fluid {
                padding: 0;
            }

            .dl-horizontal dt {
                float: none;
                clear: none;
                width: auto;
                text-align: left;
            }

            .dl-horizontal dd {
                margin-left: 0;
            }

            .container {
                width: auto;
            }

            .row-fluid {
                width: 100%;
            }

            .row, .thumbnails {
                margin-left: 0;
            }

                .thumbnails > li {
                    float: none;
                    margin-left: 0;
                }

            [class*="span"], .uneditable-input[class*="span"], .row-fluid [class*="span"] {
                float: none;
                display: block;
                width: 100%;
                margin-left: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .span12, .row-fluid .span12 {
                width: 100%;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .row-fluid [class*="offset"]:first-child {
                margin-left: 0;
            }

            .input-large, .input-xlarge, .input-xxlarge, input[class*="span"], select[class*="span"], textarea[class*="span"], .uneditable-input {
                display: block;
                width: 100%;
                min-height: 31px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .input-prepend input, .input-append input, .input-prepend input[class*="span"], .input-append input[class*="span"] {
                display: inline-block;
                width: auto;
            }

            .controls-row [class*="span"] + [class*="span"] {
                margin-left: 0;
            }

            .modal {
                position: fixed;
                top: 20px;
                left: 20px;
                right: 20px;
                width: auto;
                margin: 0;
            }

                .modal.fade {
                    top: -100px;
                }

                    .modal.fade.in {
                        top: 20px;
                    }
        }

        @media(max-width:480px) {
            .nav-collapse {
                -webkit-transform: translate3d(0,0,0);
            }

            .page-header h1 small {
                display: block;
                line-height: 21px;
            }

            input[type="checkbox"], input[type="radio"] {
                border: 1px solid #ccc;
            }

            .form-horizontal .control-label {
                float: none;
                width: auto;
                padding-top: 0;
                text-align: left;
            }

            .form-horizontal .controls {
                margin-left: 0;
            }

            .form-horizontal .control-list {
                padding-top: 0;
            }

            .form-horizontal .form-actions {
                padding-left: 10px;
                padding-right: 10px;
            }

            .media .pull-left, .media .pull-right {
                float: none;
                display: block;
                margin-bottom: 10px;
            }

            .media-object {
                margin-right: 0;
                margin-left: 0;
            }

            .modal {
                top: 10px;
                left: 10px;
                right: 10px;
            }

            .modal-header .close {
                padding: 10px;
                margin: -10px;
            }

            .carousel-caption {
                position: static;
            }

            .flexslider, .digital-images {
                display: none !important;
            }
        }

        @media(max-width:979px) {
            body {
                padding-top: 0;
            }

            .navbar-fixed-top, .navbar-fixed-bottom {
                position: static;
            }

            .navbar-fixed-top {
                margin-bottom: 21px;
            }

            .navbar-fixed-bottom {
                margin-top: 21px;
            }

                .navbar-fixed-top .navbar-inner, .navbar-fixed-bottom .navbar-inner {
                    padding: 5px;
                }

            .navbar .container {
                width: auto;
                padding: 0;
            }

            .navbar .brand {
                padding-left: 10px;
                padding-right: 10px;
                margin: 0 0 0 -5px;
            }

            .nav-collapse {
                clear: both;
            }

                .nav-collapse .nav {
                    float: none;
                    margin: 0 0 10.5px;
                }

                    .nav-collapse .nav > li {
                        float: none;
                    }

                        .nav-collapse .nav > li > a {
                            margin-bottom: 2px;
                        }

                    .nav-collapse .nav > .divider-vertical {
                        display: none;
                    }

                    .nav-collapse .nav .nav-header {
                        color: #333;
                        text-shadow: none;
                    }

                    .nav-collapse .nav > li > a, .nav-collapse .dropdown-menu a {
                        padding: 9px 15px;
                        font-weight: 700;
                        color: #333;
                        -webkit-border-radius: 3px;
                        -moz-border-radius: 3px;
                        border-radius: 3px;
                    }

                .nav-collapse .btn {
                    padding: 4px 10px 4px;
                    font-weight: 400;
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    border-radius: 4px;
                }

                .nav-collapse .dropdown-menu li + li a {
                    margin-bottom: 2px;
                }

                .nav-collapse .nav > li > a:hover, .nav-collapse .dropdown-menu a:hover {
                    background-color: #fff;
                }

            .navbar-inverse .nav-collapse .nav > li > a, .navbar-inverse .nav-collapse .dropdown-menu a {
                color: #999;
            }

                .navbar-inverse .nav-collapse .nav > li > a:hover, .navbar-inverse .nav-collapse .dropdown-menu a:hover {
                    background-color: #111;
                }

            .nav-collapse.in .btn-group {
                margin-top: 5px;
                padding: 0;
            }

            .nav-collapse .dropdown-menu {
                position: static;
                top: auto;
                left: auto;
                float: none;
                display: none;
                max-width: none;
                margin: 0 15px;
                padding: 0;
                background-color: transparent;
                border: 0;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }

            .nav-collapse .open > .dropdown-menu {
                display: block;
            }

            .nav-collapse .dropdown-menu:before, .nav-collapse .dropdown-menu:after {
                display: none;
            }

            .nav-collapse .dropdown-menu .divider {
                display: none;
            }

            .nav-collapse .nav > li > .dropdown-menu:before, .nav-collapse .nav > li > .dropdown-menu:after {
                display: none;
            }

            .nav-collapse .navbar-form, .nav-collapse .navbar-search {
                float: none;
                padding: 10.5px 15px;
                margin: 10.5px 0;
                border-top: 1px solid #fff;
                border-bottom: 1px solid #fff;
                -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);
                -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);
                box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);
            }

            .navbar-inverse .nav-collapse .navbar-form, .navbar-inverse .nav-collapse .navbar-search {
                border-top-color: #111;
                border-bottom-color: #111;
            }

            .navbar .nav-collapse .nav.pull-right {
                float: none;
                margin-left: 0;
            }

            .nav-collapse, .nav-collapse.collapse {
                overflow: hidden;
                height: 0;
            }

            .navbar .btn-navbar {
                display: block;
            }

            .navbar-static .navbar-inner {
                padding-left: 10px;
                padding-right: 10px;
            }
        }

        @media(min-width:980px) {
            .nav-collapse.collapse {
                height: auto !important;
                overflow: visible !important;
            }
        }

        html {
            overflow-y: -moz-scrollbars-vertical;
            overflow-y: scroll;
            -ms-overflow-y: scroll;
        }

        body {
            font-family: 'Roboto',sans-serif;
            font-weight: 400;
            background: #fff;
        }

            body.boxed #boxedWrapper {
                width: 1020px;
                margin: 0 auto;
                background: #fff;
                -webkit-box-shadow: 3px 0 0 rgba(0,0,0,.03),-3px 0 0 rgba(0,0,0,.03);
                -moz-box-shadow: 3px 0 0 rgba(0,0,0,.03),-3px 0 0 rgba(0,0,0,.03);
                box-shadow: 3px 0 0 rgba(0,0,0,.03),-3px 0 0 rgba(0,0,0,.03);
            }

        a {
            color: #333;
        }

            a:hover {
                text-decoration: none;
                color: #29bbf2;
            }

        .unusual {
            color: #29bbf2;
        }

            .unusual:hover {
                color: #595959;
            }

        .light1 {
            color: #29bbf2;
        }

        .light2 {
            color: #fff;
            background: #29bbf2;
            padding: 2px;
        }

        .light3 {
            color: #fff;
            background: #333;
            padding: 2px;
        }

        .light4 {
            background: #e6e6e6;
            padding: 2px;
        }

        .dropcap:first-letter {
            font-size: 69px;
            line-height: .8em;
            padding-right: 5px;
            margin-top: 2px;
            color: #29bbf2;
            float: left;
        }

        strong {
            font-weight: 700;
        }

        hr {
            height: 1px;
            padding: 0;
            margin: 5px 0;
            background: #e6e6e6;
            border: 0;
        }

        .halflings, .glyphicons {
            padding: 0;
        }

            .halflings i:before, .glyphicons i:before {
                color: #737373;
            }

        .doCenter .ch_wrapper {
            margin: 0 auto;
        }

        .contenthover {
            background: #29bbf2;
            height: 100%;
            width: 100%;
        }

            .contenthover a {
                display: block;
                height: 100%;
                width: 100%;
            }

            .contenthover .halflings {
                top: 50%;
                left: 50%;
                margin: -26px 0 0 -22px !important;
                position: absolute;
            }

                .contenthover .halflings i:before {
                    font-size: 48px !important;
                    color: #fff !important;
                }

        .row-fluid.topSpace {
            margin-top: 10px;
        }

        .doLeft {
            text-align: left;
        }

        .doCenter {
            text-align: center;
        }

        .doRight {
            text-align: right;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #333;
        }

        .huge {
            font-size: 28px;
            line-height: 36px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .big {
            font-size: 24px;
            line-height: 34px;
            margin: 15px 0 10px 0;
        }

        .twoLines {
            font-size: 18px;
            line-height: 27px;
            margin: 0 0 20px 0;
        }

            .twoLines:after {
                content: " ";
                display: block;
                width: 100%;
                height: 2px;
                border: 0;
                border-top: 1px solid #e6e6e6;
                border-bottom: 1px solid #e6e6e6;
                margin-top: 8px;
            }

        .subTitle {
            font-size: 18px;
            line-height: 25px;
            margin: 0 0 14px 0;
            font-weight: 600;
        }

        .light {
            font-size: 18px;
            line-height: 25px;
            font-weight: 400;
        }

        .medium {
            font-size: 16px;
            margin-bottom: 16px;
        }

        .usual {
            font-size: 14px;
            line-height: 21px;
        }

        .tiny {
            font-size: 11px;
            font-style: italic;
            color: #595959;
        }

        .normal {
            list-style: none;
            margin: 0 0 15px 0;
        }

            .normal li {
                position: relative;
                padding: 4px 0 4px 20px;
            }

                .normal li:before {
                    content: "\e013";
                    font-size: 10px;
                    color: #29bbf2;
                    position: absolute;
                    left: 0;
                    top: 14px;
                    font: 11px/1em 'Glyphicons Halflings';
                    font-style: normal;
                }

                .normal li:after {
                    content: " ";
                    position: absolute;
                    left: 0;
                    right: 0;
                    top: 0;
                    height: 1px;
                }

                .normal li:first-child:after {
                    border-top: 0;
                }

            .normal.chevron-right li:before {
                content: "\e080";
            }

            .normal.arrow-right li:before {
                content: "\e092";
            }

            .normal.star li:before {
                content: "\e006";
            }

            .normal.dot li:before {
                content: "\25BE \0020";
                font-family: "Arial",sans-serif;
                font-size: 24px;
                top: 4px;
            }

            .normal.gtn li:before {
                content: '>';
                font-style: normal;
                color: #b3b3b3;
                font-size: 12px;
                top: 11px;
            }

        ul.socialIcons {
            list-style: none;
            margin: 0;
            *zoom: 1;
        }

            ul.socialIcons:before, ul.socialIcons:after {
                display: table;
                content: "";
                line-height: 0;
            }

            ul.socialIcons:after {
                clear: both;
            }

            ul.socialIcons:before, ul.socialIcons:after {
                display: table;
                content: "";
                line-height: 0;
            }

            ul.socialIcons:after {
                clear: both;
            }

            ul.socialIcons li {
                float: left;
                margin: 0 0 20px 15px;
            }

                ul.socialIcons li a {
                    width: 32px;
                    height: 32px;
                    display: block;
                }

            ul.socialIcons .glyphicons i:before {
                color: #999;
                font-size: 20px;
            }

            ul.socialIcons .glyphicons:hover i:before {
                color: inherit;
            }

        .navbar .brand {
            font-size: 29px;
            font-weight: 400;
            color: #333;
            text-shadow: none;
            text-transform: uppercase;
        }

            .navbar .brand:hover {
                text-decoration: none;
            }

            .navbar .brand span {
                font-weight: 700;
                color: #29bbf2;
            }

        .navbar-static-top .navbar-inner {
            background: #fff;
            border: 0;
            border-top: 2px solid #e6e6e6;
            border-bottom: 1px solid #e6e6e6;
            -webkit-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -moz-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .navbar .nav > li > a {
            padding: 30.5px 19px 30.5px;
            text-shadow: none;
            font-size: 16px;
            border-top: 2px solid transparent;
            margin-top: -2px;
        }

        .navbar .nav > li:hover > a {
            border-top: 2px solid #29bbf2;
            color: #29bbf2;
        }

        .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-top: 2px solid #29bbf2;
            color: #29bbf2;
        }

        .navbar .nav li.dropdown.open > .dropdown-toggle, .navbar .nav li.dropdown.active > .dropdown-toggle, .navbar .nav li.dropdown.open.active > .dropdown-toggle {
            color: #29bbf2;
        }

        .navbar .nav.pull-right {
            margin-right: 19px;
        }

        .dropdown .caret {
            margin-top: 8px;
            margin-left: 2px;
        }

        .navbar .btn-navbar {
            background: #29bbf2;
        }

        .dropdown-menu {
            position: absolute;
            min-width: 160px;
            padding: 0;
            margin: 0;
            list-style: none;
            background-color: #fff;
            border: 1px solid #e6e6e6;
            border-bottom: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -moz-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding;
            background-clip: padding-box;
        }

            .dropdown-menu li > a {
                display: block;
                padding: 9px 20px;
                clear: both;
                font-weight: 400;
                line-height: 21px;
                color: #595959;
                white-space: nowrap;
                border-bottom: 1px solid #e6e6e6;
            }

                .dropdown-menu li > a:hover, .dropdown-menu li > a:focus, .dropdown-submenu:hover > a {
                    color: #29bbf2;
                    background: #fcfcfc;
                    filter: none;
                }

            .dropdown-menu .active > a, .dropdown-menu .active > a:hover {
                color: #29bbf2;
                outline: 0;
                background: #fcfcfc;
                filter: none;
            }

        .navbar .pull-right > li > .dropdown-menu, .navbar .nav > li > .dropdown-menu.pull-right {
            left: 0;
            right: auto;
        }

        .dropdown-submenu > a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #ccc;
            margin-top: 5px;
            margin-right: -10px;
        }

        .dropdown-submenu:hover > a:after {
            border-left-color: #29bbf2;
        }

        .navbar .nav > li > .dropdown-menu:before {
            display: none;
        }

        .navbar .nav > li > .dropdown-menu:after {
            display: none;
        }

        li.dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu .dropdown-menu {
            left: 100%;
            position: absolute;
            top: 0;
            visibility: hidden;
            margin-top: -1px;
        }

        .dropdown-menu li:hover > .dropdown-menu {
            visibility: visible;
            display: block;
        }

        .navbar .pull-right > li > .dropdown-menu .dropdown-menu, .navbar .nav > li > .dropdown-menu.pull-right .dropdown-menu {
            right: auto;
            left: 100%;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .dropdown-submenu > a:after {
            margin-top: 6px;
        }

        .titleBox {
            background: #fcfcfc;
            border-bottom: 1px solid #e6e6e6;
            padding: 5px 0;
            min-height: 70px;
        }

        .easyBox {
            border: 1px solid #e6e6e6;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -moz-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            box-shadow: 0 2px 0 rgba(0,0,0,.03);
            padding: 30px;
            margin: 5px 0 10px 0;
            display: inline-block;
            *zoom: 1;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
        }

            .easyBox:before, .easyBox:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .easyBox:after {
                clear: both;
            }

            .easyBox:before, .easyBox:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .easyBox:after {
                clear: both;
            }

            .easyBox.narrow {
                padding: 20px 40px 10px 40px;
            }

                .easyBox.narrow * {
                    margin-bottom: 5px;
                }

            .easyBox.usual {
                padding: 20px 20px 10px 20px;
            }

            .easyBox.flat {
                padding: 0;
                margin: 5px;
                display: block;
            }

                .easyBox.flat img {
                    -webkit-border-top-right-radius: 3px;
                    -moz-border-radius-topright: 3px;
                    border-top-right-radius: 3px;
                    -webkit-border-top-left-radius: 3px;
                    -moz-border-radius-topleft: 3px;
                    border-top-left-radius: 3px;
                }

                .easyBox.flat .btn-link {
                    border-bottom: 1px solid #e6e6e6;
                    padding: 14px 9px;
                    font-size: 14px;
                }

                .easyBox.flat .halflings {
                    margin: 11px 9px;
                }

                    .easyBox.flat .halflings.half {
                        width: 50%;
                        margin: 0;
                        padding: 13px 5px;
                        float: left;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                        border-left: 1px solid transparent;
                        border-right: 1px solid #e6e6e6;
                    }

                        .easyBox.flat .halflings.half + .halflings {
                            border-left: 1px solid #e6e6e6;
                            border-right: 1px solid transparent;
                            margin-left: -1px;
                        }

            .easyBox ul.socialIcons {
                margin: 15px 5px 5px -5px;
            }

                .easyBox ul.socialIcons li {
                    margin: 0 0 10px 12px;
                }

                .easyBox ul.socialIcons .glyphicons i:before {
                    color: #ccc;
                    font-size: 20px;
                }

                .easyBox ul.socialIcons .glyphicons:hover i:before {
                    color: #737373;
                }

        .space {
            padding: 5px 10px;
        }

        .big-space {
            padding: 20px 0 25px 0;
        }

        .metaText.halflings {
            margin: 7px 20px 7px 0;
            font-size: 11px;
            line-height: 17px;
            font-style: italic;
            color: gray;
        }

            .metaText.halflings i:before {
                font-size: 10px;
                color: #ccc;
                position: static;
                padding-right: 5px;
            }

        .metaIcon.halflings {
            margin: 0;
            width: 18px;
            height: 18px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background: #ccc;
            margin-right: 10px;
            line-height: 18px;
            float: left;
        }

            .metaIcon.halflings i:before {
                position: absolute;
                top: 4px;
                left: 5px;
                color: #fff;
                font-size: 9px;
            }

        .metaTitle.halflings {
            padding-left: 25px;
        }

            .metaTitle.halflings i:before {
                top: 4px;
                font-size: 16px;
                color: inherit;
            }

        .iconBox {
            padding-left: 45px;
            position: relative;
            margin-bottom: 20px;
        }

            .iconBox .glyphicons {
                position: absolute;
                left: 0;
                top: 0;
            }

        .bubbleBox {
            margin-bottom: 50px;
            *zoom: 1;
        }

            .bubbleBox:before, .bubbleBox:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .bubbleBox:after {
                clear: both;
            }

            .bubbleBox:before, .bubbleBox:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .bubbleBox:after {
                clear: both;
            }

            .bubbleBox p {
                font-size: 14px;
                line-height: 24px;
            }

            .bubbleBox span.author {
                position: relative;
                z-index: 2;
                color: #333;
            }

            .bubbleBox .easyBox {
                padding: 20px;
                position: relative;
            }

                .bubbleBox .easyBox:before {
                    content: ' ';
                    position: absolute;
                    width: 0;
                    height: 0;
                    left: 20px;
                    bottom: -26px;
                    border: 13px solid;
                    border-color: #e6e6e6 transparent transparent #e6e6e6;
                    border-color: #e6e6e6 rgba(255,255,255,0) rgba(255,255,255,0) #e6e6e6;
                }

                .bubbleBox .easyBox:after {
                    content: ' ';
                    position: absolute;
                    width: 0;
                    height: 0;
                    left: 21px;
                    bottom: -23px;
                    border: 12px solid;
                    border-color: #fff transparent transparent #fff;
                    border-color: #fff rgba(255,255,255,0) rgba(255,255,255,0) #fff;
                }

            .bubbleBox.quotes .fontello.icon-quote-left {
                top: -5px;
                left: -52px;
            }

        blockquote {
            margin: 15px 0 25px 46px;
            border: 0;
            position: relative;
            font-size: 14px;
            line-height: 24px;
            padding: 0 0 0 6px;
        }

            blockquote .fontello {
                color: #e5e5e5;
                font-size: 36px;
                position: absolute;
            }

                blockquote .fontello.icon-quote-left {
                    top: 1px;
                    left: -52px;
                }

                blockquote .fontello.icon-quote-right {
                    bottom: 17px;
                    right: -15px;
                }

        .contactBox p {
            position: relative;
            padding-left: 22px;
        }

        .contactBox a {
            color: #29bbf2;
        }

            .contactBox a:hover {
                color: #595959;
            }

        .contactBox .halflings {
            left: -22px;
            top: -11px;
        }

            .contactBox .halflings i:before {
                color: #ccc;
            }

        .twitterBox p {
            position: relative;
            padding-left: 27px;
        }

        .twitterBox a {
            color: #29bbf2;
        }

        .twitterBox .glyphicons {
            left: -27px;
            top: -11px;
        }

            .twitterBox .glyphicons i:before {
                font-size: 18px;
                color: #ccc;
            }

        .twitterBox .time {
            font-style: italic;
            font-size: 11px;
            display: block;
            margin: 3px 0 25px 0;
            color: #737373;
        }

        input, button, select, textarea {
            font-family: 'Roboto',sans-serif;
        }

        label span {
            color: gray;
        }

        textarea {
            resize: none;
            height: 200px;
        }

        form .row-fluid {
            margin-bottom: 10px;
        }

        textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
            background-color: #fff;
            border: 1px solid #e6e6e6;
            -webkit-box-shadow: inset 0 3px 0 rgba(0,0,0,.03);
            -moz-box-shadow: inset 0 3px 0 rgba(0,0,0,.03);
            box-shadow: inset 0 3px 0 rgba(0,0,0,.03);
            -webkit-transition: border linear .2s,box-shadow linear .2s;
            -moz-transition: border linear .2s,box-shadow linear .2s;
            -o-transition: border linear .2s,box-shadow linear .2s;
            transition: border linear .2s,box-shadow linear .2s;
            min-height: 34px !important;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

            textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus {
                border-color: #ccc;
                outline: 0;
                outline: thin dotted \9;
                -webkit-box-shadow: inset 0 3px 0 rgba(0,0,0,.03);
                -moz-box-shadow: inset 0 3px 0 rgba(0,0,0,.03);
                box-shadow: inset 0 3px 0 rgba(0,0,0,.03);
            }

        .btn {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            padding: 12px 30px;
            font-weight: 600;
            margin-bottom: 0;
            font-size: 16px;
            line-height: 18px;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            color: #737373;
            text-shadow: none;
            background-color: #eaeaea;
            background-image: -moz-linear-gradient(top,#ececec,#e6e6e6);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#ececec),to(#e6e6e6));
            background-image: -webkit-linear-gradient(top,#ececec,#e6e6e6);
            background-image: -o-linear-gradient(top,#ececec,#e6e6e6);
            background-image: linear-gradient(to bottom,#ececec,#e6e6e6);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffececec',endColorstr='#ffe6e6e6',GradientType=0);
            border-color: #e6e6e6 #e6e6e6 silver;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #e6e6e6;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            border: 0;
            *border: 0;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            *margin-left: .3em;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15),0 2px 0 rgba(0,0,0,.03);
            -moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15),0 2px 0 rgba(0,0,0,.03);
            box-shadow: inset 0 -1px 0 rgba(0,0,0,.15),0 2px 0 rgba(0,0,0,.03);
        }

            .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] {
                color: #737373;
                background-color: #e6e6e6;
                *background-color: #d9d9d9;
            }

            .btn:active, .btn.active {
                background-color: #cdcdcd; \9
            }

            .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] {
                color: #737373;
                background-color: #e6e6e6;
                *background-color: #d9d9d9;
            }

            .btn:active, .btn.active {
                background-color: #cdcdcd; \9
            }

            .btn:first-child {
                *margin-left: 0;
            }

            .btn:first-child {
                *margin-left: 0;
            }

            .btn:hover {
                color: #737373;
                text-decoration: none;
                background-position: 0 -21px;
                -webkit-transition: background-position .1s linear;
                -moz-transition: background-position .1s linear;
                -o-transition: background-position .1s linear;
                transition: background-position .1s linear;
            }

            .btn:focus {
                outline: thin dotted #333;
                outline: 5px auto -webkit-focus-ring-color;
                outline-offset: -2px;
            }

            .btn.active, .btn:active {
                background-image: none;
                outline: 0;
                -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.15),0 0 0 rgba(0,0,0,0);
                -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,.15),0 0 0 rgba(0,0,0,0);
                box-shadow: inset 0 1px 0 rgba(0,0,0,.15),0 0 0 rgba(0,0,0,0);
            }

            .btn.disabled, .btn[disabled] {
                cursor: default;
                background-image: none;
                opacity: .65;
                filter: alpha(opacity=65);
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }

        .btn-large {
            padding: 16px 38px;
            font-size: 21px;
        }

            .btn-large [class^="icon-"], .btn-large [class*=" icon-"] {
                margin-top: 4px;
            }

        .btn-small {
            padding: 8px 19px;
            font-size: 13px;
        }

            .btn-small [class^="icon-"], .btn-small [class*=" icon-"] {
                margin-top: 0;
            }

        .btn-mini [class^="icon-"], .btn-mini [class*=" icon-"] {
            margin-top: -1px;
        }

        .btn-mini {
            padding: 0 6px;
            font-size: 9.75px;
        }

        .btn-block {
            display: block;
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

            .btn-block + .btn-block {
                margin-top: 5px;
            }

        input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block {
            width: 100%;
        }

        .btn-primary.active, .btn-warning.active, .btn-danger.active, .btn-success.active, .btn-info.active, .btn-inverse.active {
            color: rgba(255,255,255,.75);
        }

        .btn {
            border-color: #c5c5c5;
            border-color: rgba(0,0,0,.15) rgba(0,0,0,.15) rgba(0,0,0,.25);
        }

        .btn-primary {
            color: #fff;
            text-shadow: none;
            background-color: #3cc5f4;
            background-image: -moz-linear-gradient(top,#48cbf5,#2abbf2);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#48cbf5),to(#2abbf2));
            background-image: -webkit-linear-gradient(top,#48cbf5,#2abbf2);
            background-image: -o-linear-gradient(top,#48cbf5,#2abbf2);
            background-image: linear-gradient(to bottom,#48cbf5,#2abbf2);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff48cbf5',endColorstr='#ff2abbf2',GradientType=0);
            border-color: #2abbf2 #2abbf2 #0c91c4;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #2abbf2;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
                color: #fff;
                background-color: #2abbf2;
                *background-color: #12b3f1;
            }

            .btn-primary:active, .btn-primary.active {
                background-color: #0da3dc; \9
            }

            .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
                color: #fff;
                background-color: #2abbf2;
                *background-color: #12b3f1;
            }

            .btn-primary:active, .btn-primary.active {
                background-color: #0da3dc; \9
            }

        .btn-warning {
            color: #fff;
            text-shadow: none;
            background-color: #f89839;
            background-image: -moz-linear-gradient(top,#f9a245,#f78a28);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#f9a245),to(#f78a28));
            background-image: -webkit-linear-gradient(top,#f9a245,#f78a28);
            background-image: -o-linear-gradient(top,#f9a245,#f78a28);
            background-image: linear-gradient(to bottom,#f9a245,#f78a28);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff9a245',endColorstr='#fff78a28',GradientType=0);
            border-color: #f78a28 #f78a28 #cb6408;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #f78a28;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-warning:hover, .btn-warning:active, .btn-warning.active, .btn-warning.disabled, .btn-warning[disabled] {
                color: #fff;
                background-color: #f78a28;
                *background-color: #f67d0f;
            }

            .btn-warning:active, .btn-warning.active {
                background-color: #e47008; \9
            }

            .btn-warning:hover, .btn-warning:active, .btn-warning.active, .btn-warning.disabled, .btn-warning[disabled] {
                color: #fff;
                background-color: #f78a28;
                *background-color: #f67d0f;
            }

            .btn-warning:active, .btn-warning.active {
                background-color: #e47008; \9
            }

        .btn-danger {
            color: #fff;
            text-shadow: none;
            background-color: #f04040;
            background-image: -moz-linear-gradient(top,#f24c4c,#ed2e2e);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#f24c4c),to(#ed2e2e));
            background-image: -webkit-linear-gradient(top,#f24c4c,#ed2e2e);
            background-image: -o-linear-gradient(top,#f24c4c,#ed2e2e);
            background-image: linear-gradient(to bottom,#f24c4c,#ed2e2e);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff24c4c',endColorstr='#ffed2e2e',GradientType=0);
            border-color: #ed2e2e #ed2e2e #be1010;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #ed2e2e;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-danger:hover, .btn-danger:active, .btn-danger.active, .btn-danger.disabled, .btn-danger[disabled] {
                color: #fff;
                background-color: #ed2e2e;
                *background-color: #eb1717;
            }

            .btn-danger:active, .btn-danger.active {
                background-color: #d61212; \9
            }

            .btn-danger:hover, .btn-danger:active, .btn-danger.active, .btn-danger.disabled, .btn-danger[disabled] {
                color: #fff;
                background-color: #ed2e2e;
                *background-color: #eb1717;
            }

            .btn-danger:active, .btn-danger.active {
                background-color: #d61212; \9
            }

        .btn-success {
            color: #fff;
            text-shadow: none;
            background-color: #69ca3f;
            background-image: -moz-linear-gradient(top,#75d04b,#57c22d);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#75d04b),to(#57c22d));
            background-image: -webkit-linear-gradient(top,#75d04b,#57c22d);
            background-image: -o-linear-gradient(top,#75d04b,#57c22d);
            background-image: linear-gradient(to bottom,#75d04b,#57c22d);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff75d04b',endColorstr='#ff57c22d',GradientType=0);
            border-color: #57c22d #57c22d #3b841f;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #57c22d;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-success:hover, .btn-success:active, .btn-success.active, .btn-success.disabled, .btn-success[disabled] {
                color: #fff;
                background-color: #57c22d;
                *background-color: #4ead28;
            }

            .btn-success:active, .btn-success.active {
                background-color: #449923; \9
            }

            .btn-success:hover, .btn-success:active, .btn-success.active, .btn-success.disabled, .btn-success[disabled] {
                color: #fff;
                background-color: #57c22d;
                *background-color: #4ead28;
            }

            .btn-success:active, .btn-success.active {
                background-color: #449923; \9
            }

        .btn-info {
            color: #fff;
            text-shadow: none;
            background-color: #0067b2;
            background-image: -moz-linear-gradient(top,#0073ba,#0055a7);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#0073ba),to(#0055a7));
            background-image: -webkit-linear-gradient(top,#0073ba,#0055a7);
            background-image: -o-linear-gradient(top,#0073ba,#0055a7);
            background-image: linear-gradient(to bottom,#0073ba,#0055a7);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0073ba',endColorstr='#ff0055a7',GradientType=0);
            border-color: #0055a7 #0055a7 #002e5b;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #0055a7;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-info:hover, .btn-info:active, .btn-info.active, .btn-info.disabled, .btn-info[disabled] {
                color: #fff;
                background-color: #0055a7;
                *background-color: #00488e;
            }

            .btn-info:active, .btn-info.active {
                background-color: #003b74; \9
            }

            .btn-info:hover, .btn-info:active, .btn-info.active, .btn-info.disabled, .btn-info[disabled] {
                color: #fff;
                background-color: #0055a7;
                *background-color: #00488e;
            }

            .btn-info:active, .btn-info.active {
                background-color: #003b74; \9
            }

        .btn-inverse {
            color: #fff;
            text-shadow: none;
            background-color: #474747;
            background-image: -moz-linear-gradient(top,#535353,#343434);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#535353),to(#343434));
            background-image: -webkit-linear-gradient(top,#535353,#343434);
            background-image: -o-linear-gradient(top,#535353,#343434);
            background-image: linear-gradient(to bottom,#535353,#343434);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff535353',endColorstr='#ff343434',GradientType=0);
            border-color: #343434 #343434 #0e0e0e;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #343434;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-inverse:hover, .btn-inverse:active, .btn-inverse.active, .btn-inverse.disabled, .btn-inverse[disabled] {
                color: #fff;
                background-color: #343434;
                *background-color: #272727;
            }

            .btn-inverse:active, .btn-inverse.active {
                background-color: #1b1b1b; \9
            }

            .btn-inverse:hover, .btn-inverse:active, .btn-inverse.active, .btn-inverse.disabled, .btn-inverse[disabled] {
                color: #fff;
                background-color: #343434;
                *background-color: #272727;
            }

            .btn-inverse:active, .btn-inverse.active {
                background-color: #1b1b1b; \9
            }

        .btn-1 {
            color: #fff;
            text-shadow: none;
            background-color: #ffbf00;
            background-image: -moz-linear-gradient(top,#ffc500,#ffb500);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#ffc500),to(#ffb500));
            background-image: -webkit-linear-gradient(top,#ffc500,#ffb500);
            background-image: -o-linear-gradient(top,#ffc500,#ffb500);
            background-image: linear-gradient(to bottom,#ffc500,#ffb500);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffc500',endColorstr='#ffffb500',GradientType=0);
            border-color: #ffb500 #ffb500 #b37f00;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #ffb500;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-1:hover, .btn-1:active, .btn-1.active, .btn-1.disabled, .btn-1[disabled] {
                color: #fff;
                background-color: #ffb500;
                *background-color: #e6a300;
            }

            .btn-1:active, .btn-1.active {
                background-color: #cc9100; \9
            }

            .btn-1:hover, .btn-1:active, .btn-1.active, .btn-1.disabled, .btn-1[disabled] {
                color: #fff;
                background-color: #ffb500;
                *background-color: #e6a300;
            }

            .btn-1:active, .btn-1.active {
                background-color: #cc9100; \9
            }

        .btn-2 {
            color: #fff;
            text-shadow: none;
            background-color: #b070e4;
            background-image: -moz-linear-gradient(top,#b87ce7,#a45edf);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#b87ce7),to(#a45edf));
            background-image: -webkit-linear-gradient(top,#b87ce7,#a45edf);
            background-image: -o-linear-gradient(top,#b87ce7,#a45edf);
            background-image: linear-gradient(to bottom,#b87ce7,#a45edf);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffb87ce7',endColorstr='#ffa45edf',GradientType=0);
            border-color: #a45edf #a45edf #7f28c9;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #a45edf;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-2:hover, .btn-2:active, .btn-2.active, .btn-2.disabled, .btn-2[disabled] {
                color: #fff;
                background-color: #a45edf;
                *background-color: #9849db;
            }

            .btn-2:active, .btn-2.active {
                background-color: #8c33d7; \9
            }

            .btn-2:hover, .btn-2:active, .btn-2.active, .btn-2.disabled, .btn-2[disabled] {
                color: #fff;
                background-color: #a45edf;
                *background-color: #9849db;
            }

            .btn-2:active, .btn-2.active {
                background-color: #8c33d7; \9
            }

        .btn-3 {
            color: #fff;
            text-shadow: none;
            background-color: #f360b9;
            background-image: -moz-linear-gradient(top,#f56cc0,#f14dae);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#f56cc0),to(#f14dae));
            background-image: -webkit-linear-gradient(top,#f56cc0,#f14dae);
            background-image: -o-linear-gradient(top,#f56cc0,#f14dae);
            background-image: linear-gradient(to bottom,#f56cc0,#f14dae);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff56cc0',endColorstr='#fff14dae',GradientType=0);
            border-color: #f14dae #f14dae #e0128c;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #f14dae;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-3:hover, .btn-3:active, .btn-3.active, .btn-3.disabled, .btn-3[disabled] {
                color: #fff;
                background-color: #f14dae;
                *background-color: #ef35a3;
            }

            .btn-3:active, .btn-3.active {
                background-color: #ed1e98; \9
            }

            .btn-3:hover, .btn-3:active, .btn-3.active, .btn-3.disabled, .btn-3[disabled] {
                color: #fff;
                background-color: #f14dae;
                *background-color: #ef35a3;
            }

            .btn-3:active, .btn-3.active {
                background-color: #ed1e98; \9
            }

        .btn-4 {
            color: #fff;
            text-shadow: none;
            background-color: #9e8161;
            background-image: -moz-linear-gradient(top,#a78c6d,#90704e);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#a78c6d),to(#90704e));
            background-image: -webkit-linear-gradient(top,#a78c6d,#90704e);
            background-image: -o-linear-gradient(top,#a78c6d,#90704e);
            background-image: linear-gradient(to bottom,#a78c6d,#90704e);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffa78c6d',endColorstr='#ff90704e',GradientType=0);
            border-color: #90704e #90704e #5e4933;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #90704e;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-4:hover, .btn-4:active, .btn-4.active, .btn-4.disabled, .btn-4[disabled] {
                color: #fff;
                background-color: #90704e;
                *background-color: #7f6345;
            }

            .btn-4:active, .btn-4.active {
                background-color: #6f563c; \9
            }

            .btn-4:hover, .btn-4:active, .btn-4.active, .btn-4.disabled, .btn-4[disabled] {
                color: #fff;
                background-color: #90704e;
                *background-color: #7f6345;
            }

            .btn-4:active, .btn-4.active {
                background-color: #6f563c; \9
            }

        .btn-5 {
            color: #fff;
            text-shadow: none;
            background-color: #009191;
            background-image: -moz-linear-gradient(top,#009b9b,#008181);
            background-image: -webkit-gradient(linear,0 0,0 100%,from(#009b9b),to(#008181));
            background-image: -webkit-linear-gradient(top,#009b9b,#008181);
            background-image: -o-linear-gradient(top,#009b9b,#008181);
            background-image: linear-gradient(to bottom,#009b9b,#008181);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff009b9b',endColorstr='#ff008181',GradientType=0);
            border-color: #008181 #008181 #003535;
            border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
            *background-color: #008181;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

            .btn-5:hover, .btn-5:active, .btn-5.active, .btn-5.disabled, .btn-5[disabled] {
                color: #fff;
                background-color: #008181;
                *background-color: #006868;
            }

            .btn-5:active, .btn-5.active {
                background-color: #004e4e; \9
            }

            .btn-5:hover, .btn-5:active, .btn-5.active, .btn-5.disabled, .btn-5[disabled] {
                color: #fff;
                background-color: #008181;
                *background-color: #006868;
            }

            .btn-5:active, .btn-5.active {
                background-color: #004e4e; \9
            }

        .btn-clear {
            background: transparent;
            border: 1px solid #e6e6e6;
        }

            .btn-clear:hover, .btn-clear:active {
                background: transparent;
                border: 1px solid #e6e6e6;
                color: #29bbf2;
            }

        .btn-small.metaIcon {
            padding: 0;
            margin: 0 0 0 10px;
        }

            .btn-small.metaIcon .halflings {
                display: block;
                height: 34px;
                width: 34px;
            }

                .btn-small.metaIcon .halflings i:before {
                    font-size: 10px;
                    left: 13px;
                    top: 12px;
                }

        button.btn, input[type="submit"].btn {
            *padding-top: 3px;
            *padding-bottom: 3px;
        }

            button.btn::-moz-focus-inner, input[type="submit"].btn::-moz-focus-inner {
                padding: 0;
                border: 0;
            }

            button.btn.btn-large, input[type="submit"].btn.btn-large {
                *padding-top: 7px;
                *padding-bottom: 7px;
            }

            button.btn.btn-small, input[type="submit"].btn.btn-small {
                *padding-top: 3px;
                *padding-bottom: 3px;
            }

            button.btn.btn-mini, input[type="submit"].btn.btn-mini {
                *padding-top: 1px;
                *padding-bottom: 1px;
            }

        .btn-link, .btn-link:active, .btn-link[disabled] {
            background-color: transparent;
            background-image: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .btn-link {
            border-color: transparent;
            cursor: pointer;
            color: #333;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

            .btn-link:hover {
                color: #29bbf2;
                text-decoration: none;
                background-color: transparent;
            }

            .btn-link[disabled]:hover {
                color: #333;
                text-decoration: none;
            }

        .btn.halflings {
            padding-right: 40px;
            position: relative;
        }

            .btn.halflings i:before {
                left: auto;
                top: 17px;
                right: 23px;
                font-size: 10px;
                color: inherit !important;
            }

        .btn.glyphicons {
            padding-right: 50px;
        }

            .btn.glyphicons i:before {
                left: auto;
                top: 9px;
                right: 10px;
                font-size: 24px;
                color: inherit;
            }

        .row-fluid .nivoWrapper .container {
            width: auto;
        }

            .row-fluid .nivoWrapper .container .nivo-directionNav a {
                opacity: 1;
            }

        iframe {
            border: 0;
        }

        .accordion-heading .accordion-toggle {
            padding: 15px 15px 15px 0;
            line-height: 19px;
        }

            .accordion-heading .accordion-toggle .halflings.metaIcon {
                margin-bottom: 5px;
            }

            .accordion-heading .accordion-toggle.active {
                color: #29bbf2;
            }

                .accordion-heading .accordion-toggle.active .halflings.metaIcon {
                    background: #29bbf2;
                }

                    .accordion-heading .accordion-toggle.active .halflings.metaIcon i:before {
                        content: "\2212";
                        left: 4px;
                    }

        .accordion .accordion-group {
            border: 0;
            border-bottom: 1px solid #e6e6e6;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .accordion .accordion-inner {
            border: 0;
            padding: 0 0 5px 0;
        }

        .nav-tabs {
            border-bottom: 1px solid #e6e6e6;
            border-left: 1px solid #e6e6e6;
            margin-bottom: 0;
        }

        .tab-content {
            border: 1px solid #e6e6e6;
            padding: 20px;
            border-top: 0;
            -webkit-border-bottom-right-radius: 3px;
            -moz-border-radius-bottomright: 3px;
            border-bottom-right-radius: 3px;
            -webkit-border-bottom-left-radius: 3px;
            -moz-border-radius-bottomleft: 3px;
            border-bottom-left-radius: 3px;
            -webkit-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -moz-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            box-shadow: 0 2px 0 rgba(0,0,0,.03);
        }

        .nav-tabs > li {
            margin-bottom: -1px;
        }

            .nav-tabs > li > a {
                padding: 12px 20px;
                background: #fafafa;
                line-height: 21px;
                border: 1px solid #e6e6e6;
                border-left: 0;
                margin-right: 0;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
            }

                .nav-tabs > li > a:hover {
                    border-color: #eee #eee #ddd;
                    background-color: #fff;
                }

        .nav-tabs > .active > a, .nav-tabs > .active > a:hover {
            background-color: #fff;
            border-top-color: #29bbf2;
            border-bottom-color: transparent;
            border-left: 0;
            color: #29bbf2;
            cursor: default;
        }

        .alert {
            position: relative;
            padding: 18px 48px;
            -webkit-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -moz-box-shadow: 0 2px 0 rgba(0,0,0,.03);
            box-shadow: 0 2px 0 rgba(0,0,0,.03);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background: #fdf4bd;
            color: #8c834c;
            border-color: #f2df67;
        }

            .alert p {
                margin: 0;
            }

            .alert strong {
                font-weight: 600;
            }

            .alert:before {
                position: absolute;
                left: 14px;
                top: 5px;
                font: 24px/2em 'Glyphicons Halflings';
                font-style: normal;
                color: inherit;
                content: "\e101";
            }

            .alert.alert-success:before {
                content: "\e084";
            }

            .alert.alert-info:before {
                content: "\e086";
            }

            .alert.alert-error:before {
                content: "";
            }

            .alert.alert-success {
                background: #daeec0;
                color: #54732c;
                border-color: #b5dd81;
            }

            .alert.alert-info {
                background: #d4ebf6;
                color: #397a99;
                border-color: #a9d7ed;
            }

            .alert.alert-error {
                background: #fce2e3;
                color: #e54034;
                border-color: #f8babc;
            }

            .alert .close {
                top: 0;
            }

        .sectionFaq {
            padding: 50px 0 0 0;
        }

        .blogContainer {
            margin-right: 20px;
        }

        .bDescription p {
            margin-top: 10px;
        }

        .blogItem {
            margin-bottom: 80px;
            *zoom: 1;
        }

            .blogItem:before, .blogItem:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .blogItem:after {
                clear: both;
            }

            .blogItem:before, .blogItem:after {
                display: table;
                content: "";
                line-height: 0;
            }

            .blogItem:after {
                clear: both;
            }

            .blogItem .light {
                margin-top: 0;
            }

            .blogItem .bPhoto {
                margin-bottom: 20px;
                display: inline-block;
                width: 100%;
            }

                .blogItem .bPhoto.mediumImage {
                    width: 220px;
                    margin: 0 20px 20px 0;
                    float: left;
                }

        .audiojs {
            margin: 30px 0;
            width: 100%;
        }

            .audiojs .scrubber {
                width: 74%;
            }

            .audiojs .progress {
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
                background: #29bbf2;
                border: 0;
                margin: 0;
            }

            .audiojs p {
                margin-top: 0;
            }

        .tagcloud {
            margin-left: -10px;
        }

            .tagcloud a {
                margin: 0 0 10px 10px;
                background: transparent;
                border: 1px solid #e6e6e6;
            }

                .tagcloud a:hover, .tagcloud a:active {
                    background: transparent;
                    border: 1px solid #e6e6e6;
                    color: #29bbf2;
                }

        ul.commentList {
            margin: 0 0 75px 0;
        }

            ul.commentList li {
                list-style: none;
                position: relative;
            }

                ul.commentList li li {
                    margin-left: 80px;
                }

            ul.commentList ol {
                list-style: none;
                margin: 0;
            }

            ul.commentList .avatar {
                position: absolute;
                left: 0;
                top: 4px;
            }

            ul.commentList p {
                padding-left: 80px;
            }

            ul.commentList .author {
                display: block;
                color: #333;
                margin: 0 0 5px 0;
                font-size: 14px;
                padding-left: 80px;
            }

            ul.commentList .date {
                display: block;
                color: gray;
                font-style: italic;
                font-size: 11px;
                margin: 0 0 8px 0;
                padding-left: 80px;
            }

                ul.commentList .date a {
                    color: #29bbf2;
                }

            ul.commentList hr {
                margin: 25px 0;
            }

        .breadcrumb {
            padding: 0;
            margin: 23px 17px 16px 2px;
            list-style: none;
            background: transparent;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

            .breadcrumb > li {
                padding: 0 2px 0 2px;
                display: inline-block;
                *display: inline;
                *zoom: 1;
                text-shadow: none;
                font-size: 11px;
                font-style: italic;
            }

                .breadcrumb > li > .divider {
                    padding: 0 5px;
                    color: #ccc;
                }

            .breadcrumb > .active {
                color: #999;
            }

            .breadcrumb a {
                position: relative;
                color: #29bbf2;
            }

            .breadcrumb > li + li a:before {
                content: '>';
                padding-right: 3px;
                color: #b3b3b3;
                font: 9px/1em 'Glyphicons Halflings';
                font-style: normal;
            }

        #toTop {
            font-family: 'Roboto',sans-serif;
            font-weight: 700;
            display: none;
            text-decoration: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            overflow: hidden;
            padding: 0;
            width: 69px;
            height: 69px;
            border: 0;
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat -164px -610px;
        }

        #toTopHover {
            font-family: 'Roboto',sans-serif;
            font-weight: 700;
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat left top -164px -610px;
            padding: 0;
            width: 69px;
            height: 69px;
            display: block;
            overflow: hidden;
            float: left;
            opacity: 0;
            -moz-opacity: 0;
            filter: alpha(opacity=0);
        }

        #toTop:active, #toTop:focus {
            outline: 0;
        }

        #footer h1, #footer h2, #footer h3, #footer h4, #footer h5, #footer h6, #footer span {
            color: #fff;
        }

        #footer .brand {
            font-size: 12px;
            text-transform: uppercase;
            margin: 10px 0 4px;
        }

            #footer .brand span {
                font-weight: 700;
            }

        #footer p {
            color: #999;
        }

        #footer a {
            color: #fff;
        }

            #footer a:hover {
                color: #fff;
            }

        #footer i:before {
            color: #595959;
        }

        #footer a:hover i:before {
            color: #fff !important;
        }

        #footer .footNotes {
            padding-top: 10px;
            background: #111;
        }

            #footer .footNotes p {
                margin: 5px 0 20px 0;
            }

        @media(max-width:1020px) {
            body.boxed #boxedWrapper {
                width: auto;
                margin-left: auto;
                margin-right: auto;
            }

            .nivoWrapper .container {
                width: auto;
                padding: 0;
            }
        }

        @media(max-width:979px) {
            .navbar .nav > li > a {
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
                margin-top: 0;
                padding: 20px 19px 20px;
            }

            .nav-collapse .dropdown-menu {
                display: block;
            }

            .dropdown-menu .dropdown-menu {
                position: static;
                visibility: visible;
                margin-left: 20px !important;
            }

            .dropdown-submenu > a:after {
                display: none;
                background: 0;
            }

            .nav-collapse .nav > li > a, .nav-collapse .dropdown-menu a {
                padding: 9px 15px;
                font-weight: 400;
                color: #333;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
                border: 0;
                border-top: 2px solid transparent;
            }

            .dropdown-menu li > a:hover, .dropdown-menu li > a:focus, .dropdown-submenu:hover > a {
                background: transparent;
            }

            ul.socialIcons {
                margin-right: 40px;
            }

            .container {
                width: auto;
                padding: 0 20px;
            }

            .faqMenu {
                position: static;
                width: auto;
                top: 0;
                margin-bottom: 30px;
            }

            .priceBox {
                margin: 5px !important;
                width: 230px !important;
            }

            .audiojs {
                margin: 30px 0;
                width: 300px;
            }

                .audiojs .scrubber {
                    width: 44%;
                }
        }

        @media(max-width:767px) {
            body {
                padding: 0;
            }

            .navbar-fixed-top, .navbar-fixed-bottom, .navbar-static-top {
                margin-right: 0;
                margin-left: 0;
            }

            .flickr_badge > div {
                max-width: 300px;
            }

            ul.portfolioList.col2 li, ul.portfolioList.col3 li, ul.portfolioList.col4 li {
                width: 100%;
            }

            .blogContainer {
                margin-right: 0;
            }

            .blogItem .bPhoto.mediumImage {
                width: 100%;
                margin: 0 0 20px 0;
                float: none;
            }

            .container > .row-fluid > [class*="span"] {
                margin-bottom: 25px;
            }

            .easyBox.flat {
                width: 220px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media(max-width:480px) {
            .our-service .single-service:hover .hover_overlay h4 a {
                border: none !important;
                padding: 0;
                line-height: 22px;
            }

            ul.commentList li li {
                margin-left: 35px;
            }

            .pretty-table table td, .pretty-table table th {
                padding: 5px;
            }
        }

        .facebook {
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat -7px -2015px;
        }

        .twitter {
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat -47px -2014px;
        }

        .google_plus {
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat -87px -2015px;
        }

        .linked_in {
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat -127px -2015px;
        }

        .pinterest {
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat -166px -2014px;
        }

        .help {
            margin: 3px 0 0 5px;
            width: 29px;
            height: 29px;
            float: left;
        }

        .ui-tooltip {
            font-size: .8em;
            max-width: 200px;
            border: 1px solid #c93;
            padding: 8px 12px;
            line-height: 1.3em;
            background: #ffc;
            -moz-box-shadow: 1px 1px 2px #ddd;
            -webkit-box-shadow: 1px 1px 2px #ddd;
            box-shadow: 1px 1px 2px #ddd;
            float: left;
            display: none;
            position: absolute;
            margin-top: -26px;
            margin-left: 36px;
        }

        form .err {
            color: #fff;
            margin: 5px 0 4px 0;
            border-radius: 4px;
            display: none;
            padding: 3px 4px;
            float: right;
            font-family: 'Roboto',sans-serif;
            font-weight: 400;
            font-size: 14px;
            min-width: 30%;
            text-align: center;
        }

        form #captchaimg {
            display: block;
            border: 1px solid #a1a1a1;
            margin-bottom: 7px;
        }

        .service-block {
            text-align: center;
            position: relative;
            cursor: pointer;
            margin-top: 50px;
            -webkit-transition: all .5s ease-out;
            -moz-transition: all .5s ease-out;
            -o-transition: all .5s ease-out;
            -ms-transition: all .5s ease-out;
            transition: all .5s ease-out;
        }

            .service-block:hover {
                background: #00a0db;
            }

        .service-block_2 {
            text-align: left;
            position: relative;
            cursor: pointer;
            margin-top: 20px;
            margin-bottom: 20px;
            -webkit-transition: all .5s ease-out;
            -moz-transition: all .5s ease-out;
            -o-transition: all .5s ease-out;
            -ms-transition: all .5s ease-out;
            transition: all .5s ease-out;
        }

        .stylish {
            position: relative;
        }

        .service-block_2 .stylish {
            position: absolute;
            top: 5px;
        }

        .style3 .service-block_2 {
            margin-top: 30px;
        }

        .home8 .breadcrumbs {
            display: none;
        }

        .home8 .span9.social-icons {
            margin-right: 20px;
        }

        .style7.left_content {
            float: left;
            margin-left: 50px;
            margin-top: 0;
        }

        .home8 .left_content h4 {
            font-size: 24px;
            line-height: 44px;
        }

        .service-block_2 .style {
            margin-top: 0;
            position: relative;
        }

        .service-content {
            padding: 5px 10px 10px 30px;
            margin-left: 30px;
            margin-top: -7px;
        }

        .stylish span {
            color: #fff;
            position: absolute;
            top: 50%;
            margin-top: -50%;
        }

        .stylish > span {
            color: #fff;
            font-size: 24px;
            line-height: 23px;
            text-align: center;
            background-color: #00a0db;
            border-radius: 50% 50% 50% 50%;
            display: block;
            height: 25px;
            left: 0;
            margin: 0;
            padding: 18px;
            position: absolute;
            top: 0;
            width: 25px;
        }

        .service-block_2 .stylish > span {
            color: #fff;
            font-size: 24px;
            line-height: 23px;
            text-align: center;
            background-color: #00a0db;
            border-radius: 50% 50% 50% 50%;
            display: block;
            height: 22px;
            left: 0;
            margin: 0;
            padding: 15px;
            position: absolute;
            top: 0;
            width: 22px;
        }

        .style {
            margin-top: -29px;
            position: relative;
        }

        .stylish {
            display: inline-block;
            height: 60px;
            line-height: 100px;
            position: relative;
            text-align: center;
            text-decoration: none;
            width: 60px;
            z-index: 9;
        }

        .service-block p {
            padding: 10px;
            color: #383838;
            line-height: 22px;
        }

        .service-block h4 {
            padding: 10px;
        }

        .service-block:hover h4 {
            color: #fff;
        }

        .service-content:hover {
            background: #00a0db;
        }

        .service-block:hover p {
            color: #fff;
        }

        .service-content:hover h4, .service-content:hover h4 a {
            color: #fff;
        }

        .service-content:hover p {
            color: #fff;
        }

        .wdd {
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat center;
            background-position: 0 -1802px;
            width: 32px;
            height: 40px;
        }

        .seo {
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat center;
            background-position: 0 -1906px;
            width: 32px;
            height: 40px;
        }

        .web-domain {
            background: url(http://www.yora.xyz/CodeIgniter/assets/images/ YORA TECH-sprites.png) no-repeat center;
            background-position: -151px -2px;
            width: 32px;
            height: 40px;
        }

        .topMargin {
            margin-top: 40px;
        }

        p a, li a {
            color: #00a0d7;
        }

            p a:hover, li a:hover {
                text-decoration: underline;
            }

        .contact-box {
            background: none repeat scroll 0 0 #f6f6f7;
            border: 1px solid #EEE;
            float: left;
            margin-bottom: 3%;
            margin-top: 3%;
            padding: 15px 0;
            position: relative;
            text-transform: uppercase;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

            .contact-box h4 {
                margin: 10px 40px;
                float: left;
            }

            .contact-box a.active-button {
                float: right;
                margin-right: 20px;
            }

        a.active-button {
            padding: 10px 10px;
            color: #fff;
            text-transform: uppercase;
            background: #00a0db;
        }

        .artviv {
            background-color: #fafafa;
            border-bottom: 3px solid #e2e2e2;
            margin-left: 2px;
            padding: 15px 20px;
            position: relative;
            z-index: 0;
        }

        .custsuccess {
            color: #f90;
        }

        .g-recaptcha {
            -webkit-transform: scale(.77);
            -moz-transform: scale(.77);
            -ms-transform: scale(.77);
            -o-transform: scale(.77);
            transform: scale(.77) !important;
            -webkit-transform-origin: 0 0;
            -moz-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            -o-transform-origin: 0 0;
            transform-origin: 0 0;
        }

        .form-group {
            margin-bottom: 20px;
            display: block;
        }

        select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
            width: 100%;
        }

        @media (max-width:992px) and (min-width:320px) {
            #rc-imageselect, .g-recaptcha {
                transform: scale(.65) !important;
                -webkit-transform: scale(.77);
                transform-origin: 0 0;
                -webkit-transform-origin: 0 0;
            }

            .form-control {
                display: block !important;
                width: 100% !important;
                height: 34px !important;
                padding: 6px 12px !important;
                font-size: 14px !important;
                line-height: 1.42857143 !important;
                color: #555 !important;
                background-color: #fff !important;
                background-image: none !important;
                border: 1px solid #ccc !important;
                border-radius: 4px !important;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075) !important;
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075) !important;
                -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s !important;
                -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
                transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
            }

            .form_custom {
                width: 100% !important;
                overflow: hidden !important;
            }

            .form-control1 {
                width: 100%;
            }
}
    </style>
    <style>
        .floating-box {
            float: left;
            width: 250px;
            height: 75px;
            margin: 10px;

        }

        .after-box {
            clear: left;

        }
    </style>
    <script defer src="assets/js/modernizr-2.6.1.min.js"></script>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="canonical" href="http://www.yora.xyz/CodeIgniter/" />
    <link rel="amphtml" href="http://www.yora.xyz/CodeIgniter/amp/" />
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <div id="boxedWrapper">
        <div class="navbar navbar-static-top">
            <div class="navbar-inner">

              <div class="floating-box"><img src="assets/images/yoralogo.jpg" /></div>
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>


                       <!-- <a class="brand" href="./"><img src="img/yoralogo.png" alt="Web Development Company" title="Web Development Company" width="253" height="101" /></a> -->
                        <div class="nav-collapse">

                         <!--<div><a class="brand" style="margin-left:-266px;width:177px" href="./"><img src="img/coollogo_com-864586.png" /><div></div></a></div>-->
 <ul class="nav pull-right">
   <li class='digital-images active dropdown'> <a href="http://www.yora.xyz/CodeIgniter" class="dropdown-toggle">Home</a></li>
   <li class=" dropdown">
      <a href="http://www.yora.xyz/CodeIgniter/index.php/service" class="dropdown-toggle">Service</a>
      <ul class="dropdown-menu">
         <li class="dropdown-submenu">
            <a href="http://www.yora.xyz/CodeIgniter/index.php/service/digitalmarketing">Digital Marketing</a>
            <ul class="digital-images dropdown-menu unstyled">
               <li>
                  <a href="http://www.yora.xyz/CodeIgniter/index.php/service/searchengineoptimization">Search Engine Optimization (SEO)</a>
               </li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/searchenginemarketing">Search Engine Marketing (SEM)</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/ppcmanagementservices">PPC Management service</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/appstoreoptimization">App Store Optimization (ASO)</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/webanalytics">Web Analytics</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/socialmediaoptimization">Social Media Optimization (SMO)</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/onlinereputationmanagement">Online Reputation Management (ORM)</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/affiliatemarketing">Affiliate Marketing</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/contentmarketing">Content Marketing</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/emailmarketing">Email Marketing</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/smsmarketing">SMS Marketing</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/socialmediamarketing">Social Media Marketing</a></li>
            </ul>
         </li>
         <li class="dropdown-submenu">
            <a href="http://www.yora.xyz/CodeIgniter/index.php/service/webportaldevelopment">Web Portal Development</a>
            <ul class="digital-images dropdown-menu unstyled">
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/realestateportal">Real Estate Portal Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/mobilewebsitedevelopment">Mobile Website Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/webapplicationdevelopment">Web Application Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/b2bandb2cecommerceportal">B2B &amp; B2C eCommerce Portal</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/contentmanagementsystem">Content Management System (CMS)</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/mvcarchitecture">MVC Architecture</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/travelportaldevelopment">Travel Portal Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/classifiedsportaldevelopment">Classifieds Portal Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/yellowpagesportaldevelopment">Yellow Pages Portal Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/newsportaldevelopment">News Portal Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/jobportaldevelopment">Job Portal Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/educationportaldevelopment">Education Portal Development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/paymentgatewayintegration">Payment Gateway Integration</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/phonegapappsdevelopment">PhoneGap Apps Development</a></li>
            </ul>
         </li>
         <li class="dropdown-submenu">
            <a href="http://www.yora.xyz/CodeIgniter/index.php/service/mobileappsdevelopment">Mobile Apps Development</a>
            <ul class="digital-images dropdown-menu unstyled">
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/androidappsdevelopment">Android Apps development</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/iphoneappsdevelopment">iPhone Apps development</a></li>
            </ul>
         </li>
         <li class="digital-images dropdown-submenu">
            <a href="http://www.yora.xyz/CodeIgniter/index.php/service/responsivewebdesign">Responsive Web Design</a>
            <ul class="dropdown-menu unstyled">
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/webtemplatedesign">Web Template Design</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/companylogographicsdesign">Company Logo/Graphics Design</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/newsletterdesign">Newsletter Design</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/blogdesign">Blog Design</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/customwebsitedesign">Custom Website Design</a></li>
            </ul>
         </li>
         <li class="dropdown-submenu">
            <a href="http://www.yora.xyz/CodeIgniter/index.php/service/contentwriting">Content Writing</a>
            <ul class="digital-images dropdown-menu unstyled">
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/webcontentwriting">Web Content Writing</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/seocontentwriting">SEO Content Writing</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/articlewriting">Article Writing</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/blogposting">Blog Posting</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/forumposting">Forum Posting</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/websitecopywriting">Website Copy Writing</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/pressreleasewriting">Press Release Writing</a></li>
            </ul>
         </li>
         <li class="dropdown-submenu">
            <a href="http://www.yora.xyz/CodeIgniter/index.php/service/webhostinganddomain">Web Hosting &amp; Domain</a>
            <ul class="digital-images dropdown-menu unstyled">
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/windowshosting">Windows Hosting</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/vpshosting">VPS Hosting</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/dedicatedservers">Dedicated Servers</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/domainregistration">Domain Registration</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/namesuggestiontool">Name Suggestion Tool</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/sslcertificates">SSL Certificates</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/whoislookup">Whois Lookup</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/resellerhosting">Reseller Hosting</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/emailhosting">Email Hosting</a></li>
            </ul>
         </li>
         <li class="dropdown-submenu">
            <a href="http://www.yora.xyz/CodeIgniter/index.php/service/webservice">Web service</a>
            <ul class="digital-images dropdown-menu unstyled">
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/restfulservice">RESTful service</a></li>
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/apiserviceprovider">API service Provider</a></li>
            </ul>
         </li>
         <li class="dropdown-submenu">
            <a href="http://www.yora.xyz/CodeIgniter/index.php/service/corporatetraining">Corporate Training</a>
            <ul class="digital-images dropdown-menu unstyled">
               <li><a href="http://www.yora.xyz/CodeIgniter/index.php/service/digitalmarketingcourses">Digital Marketing Courses</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li>
   <li> <a href="http://www.yora.xyz/CodeIgniter/index.php/portfolio" class="dropdown-toggle">Portfolio</a> </li>
   <li> <a href="http://www.yora.xyz/CodeIgniter/index.php/developers">Developers</a> </li>
   <li> <a href="http://www.yora.xyz/CodeIgniter/index.php/careers" class="dropdown-toggle">Careers</a> </li>
   <li> <a href="http://www.yora.xyz/CodeIgniter/index.php/contactus">Contact</a> </li>
</ul>
</div>
</div>
            </div>
        </div>
        <div class="container"></div>
        <div class="row-fluid digital-images vivpart">
            <!-- <img src="assets/images/ YORA TECH--home-page-slider6.jpg" height="450" width="1920" alt="Digital marketing company" class="img-responsive"> -->
            <div id="particles-js">

            </div>
            <div class="vivc">
                <div class="viv-text">CLOUD, WEB, MOBILE, BRANDING &amp; <br> DIGITAL MARKETING</div>
                <div class="years">5 YEARS IN DIGITAL WORLD</div>
                <div class="years years2">GET IN TOUCH, WE MIGHT JUST BE A GOOD FIT</div>
                <div class="years3">CLOUD . WEB . MOBILE . DEVELOPMENT . DIGITAL MARKETING</div>
                <div class="cta">
                    <a href="http://www.yora.xyz/CodeIgniter/index.php/contactus" class="btn btn-warning cta-btn">Contact Us</a>
                </div>
            </div>
        </div>

        <section class="container our-service m-top0">
            <div class="span4"></div>
            <div class="practise_item_wrapper m-top0">
                <div class="service-item clearfix">
                    <div class="single-service border_right">
                        <div class="icon">
                            <h4>Cloud Application Development</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="Cloud Application Development" href="http://www.yora.xyz/CodeIgniter/cloudapplicationdevelopmentcompany">Cloud Application Development</a></h4>
                        </div>
                    </div>

                    <div class="single-service border_right">
                        <div class="icon">
                            <h4>Node Js Apps Development</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="Node Js Apps Development" href="http://www.yora.xyz/CodeIgniter/nodejsdevelopmentcompany">Node.js Apps Development</a></h4>
                        </div>
                    </div>

                    <div class="single-service">
                        <div class="icon">
                            <h4>MEAN Stack Apps Development</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="MEAN Stack Apps Development" href="http://www.yora.xyz/CodeIgniter/meanstackdevelopmentcompany">MEAN Stack Apps Development</a></h4>
                        </div>
                    </div>

                    <div class="single-service border_right">
                        <div class="icon">
                            <h4>Cloud Computing</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="Cloud Computing" href="http://www.yora.xyz/CodeIgniter/cloudcomputingcompany">Cloud Computing</a></h4>
                        </div>
                    </div>

                    <div class="single-service border_right">
                        <div class="icon">
                            <h4>Branding Design</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="Branding Design" href="javascript:void(0);">Branding Design</a></h4>
                        </div>
                    </div>

                    <div class="single-service">
                        <div class="icon">
                            <h4>Digital Marketing</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="Digital Marketing Company" href="http://www.yora.xyz/CodeIgniter/digitalmarketing">Digital Marketing</a></h4>
                        </div>
                    </div>

                    <div class="single-service border_right noborBtm">
                        <div class="icon">
                            <h4>Web Portal Development</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="Web Portal Development" href="http://www.yora.xyz/CodeIgniter/webportaldevelopment">Web Portal Development</a></h4>
                        </div>
                    </div>

                    <div class="single-service border_right noborBtm">
                        <div class="icon">
                            <h4>E-commerce Website Development</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="E-commerce Website Development" href="http://www.yora.xyz/CodeIgniter/ecommercewebsitedesigninbangalore">E-commerce Website Development</a></h4>
                        </div>
                    </div>

                    <div class="single-service noborBtm">
                        <div class="icon">
                            <h4>Mobile Apps Development</h4>
                        </div>
                        <div class="hover_overlay transition4s">
                            <h4><a title="Mobile Apps Development" href="http://www.yora.xyz/CodeIgniter/mobileappsdevelopment">Mobile Apps Development</a></h4>
                        </div>
                    </div>

                </div> <!-- End .service-item -->
            </div> <!-- End .practise_item_wrapper -->
        </section>
        <div class="row-fluid topSpace mappcontainer doCenter" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <div class="container">
                <h4>Call <span itemprop="telephone"><a href="tel:+91-9535881835">+91-9535881835</a></span> For Your Web Strategy + Design Reviews Now.</h4>
            </div>
        </div>
        <div class="container">
            <div class="row-fluid margTop30px digital-images">
                <div class="span12">
                    <h2 class="twoLines">Web Development, Web Design, Hosting, Digital Marketing</h2>
                </div>
            </div>
            <div class="row-fluid topSpace digital-images">
                <div class="flexslider flexLinear">
                    <ul class="slides">
                        <li>
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/johari-shop-logo.png" alt="johari shop" title="johari shop" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Johari Shop</a> <span class="halflings tag metaText">Web Development, Web Design</span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/decorpot-logo.png" alt="Decorpot" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Decorpot, Bangalore</a> <span class="halflings tag metaText"> Web Development </span>
                                    </div>
                                </div>

                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/ms-logo.png" alt="ms" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Metric Stream, Bangalore</a> <span class="halflings tag metaText">Web Development, Web Design</span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/ipr-arena.png" alt="IPRARENA" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">IPRARENA, Bangalore</a> <span class="halflings tag metaText"> Web Development, Web Design </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/meratransport.png" alt="meratransport" title="meratransport" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Mera Transport, Bangalore</a> <span class="halflings tag metaText"> Web Development, Web Design </span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/enigma-cg-logo.jpg" alt="enigma-cg" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Enigma CG, Bangalore</a> <span class="halflings tag metaText"> Web Design </span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/cashsutra-logo.png" alt="CashSutra" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">CashSutra, Bangalore</a> <span class="halflings tag metaText"> Web Development </span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/iampl-logo.png" alt="The International Aerospace Manufacturing, Bangalore" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">IAMPL, Bangalore</a> <span class="halflings tag metaText"> Web Development, Web Design </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/sefee-logo.png" alt="Sefee" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Sefee India, Bangalore</a> <span class="halflings tag metaText"> Web Development, Web Design </span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/fincare.png" alt="Fincare, Bangalore" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Fincare, Bangalore</a> <span class="halflings tag metaText"> Web Design </span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/globe-moving-logo.png" alt="Globe Moving, Bangalore" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Globe Moving, Bangalore</a> <span class="halflings tag metaText"> Web Design </span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="easyBox flat doCenter">
                                        <img src="http://www.yora.xyz/CodeIgniter/assets/images/desijodi-logo.png" alt="Desi Jodi" class="contentoverlay img-responsive" width="218" height="159">
                                        <div class="contenthover"> <a href="javascript:void(0)"><span class="halflings plus"></span></a> </div>
                                        <a href="javascript:void(0)" class="btn-link btn-block">Desijodi</a> <span class="halflings tag metaText"> Web Development, Web Design </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row-fluid topSpace mappcontainer doCenter">
            <h4>Having trouble finding a true Web Development Company!</h4>
            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <span itemprop="ratingValue" class="ratingValue">4.8</span>
                <span itemprop="bestRating">/ 5</span>
                based on <span itemprop="reviewCount">55</span> user ratings
            </div>
            <p>Web development company in Bangalore</p>
            <a href="http://www.yora.xyz/CodeIgniter/contact" class="btn btn-primary halflings chevron-right">Contact us today</a>
        </div>
        <div class="container">
            <div class="row-fluid margTop30px digital-images">
                <div class="span6">
                    <h4 class="twoLines">Insight</h4>
                    <div class="row-fluid">
                        <div class="span6">
                            <h6 class="usual"><a href="javascript:void(0)">Information</a></h6>
                            <p>The age of browsing the Internet aimlessly is over! The Internet has replaced a busy market now. So, make the best use of it by converting your website into an attractive responsive &amp; interactive showroom that displays all your products along with the services you offer beautifully. This will help in keeping your clients informed while your online sales go up. </p>
                        </div>
                        <div class="span6">
                            <h6 class="usual"><a href="javascript:void(0)">IT</a></h6>
                            <p>Achieving your business goals is quite impossible without the aid of information Technology today. Right from advertising to marketing your products and converting your leads there is just no area left that can do without technology. It is little wonder therefore that online activities like posting on forums, blogging, and social media interaction have been identified as business promoting tools.</p>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <h5 class="twoLines digital-images">What Clients Say</h5>
                    <div class="flexslider fadeFlex">
                        <ul class="slides">
                            <li>
                                <div class="bubbleBox quotes">
                                    <blockquote class="easyBox">
                                        <span class="fontello icon-quote-left"></span>
                                        <p>It was a very excited and thrilled to work with the team of " YORA TECH" - Web Development Company for my project. One among the most effective team work add guiding from start to end of the project. Experienced a very proactive approach, professionally sound, a prompt email/call response, an honest and polite way of customer service. </p>
                                        <span class="fontello icon-quote-right"></span>
                                    </blockquote>
                                    <span class="pull-right author">Joseph, Bangalore</span>
                                </div>
                            </li>
                            <li>
                                <div class="bubbleBox quotes">
                                    <blockquote class="easyBox">
                                        <span class="fontello icon-quote-left"></span>
                                        <p>A great Web Development Company, Bangalore with team work and dedicated effort in delivering vast concepts and solutions for web design features. I really appreciate your work and "all the best for your future prospects". </p>
                                        <span class="fontello icon-quote-right"></span>
                                    </blockquote>
                                    <span class="pull-right author">Prashant, Bangalore</span>
                                </div>
                            </li>
                            <li>
                                <div class="bubbleBox quotes">
                                    <blockquote class="easyBox">
                                        <span class="fontello icon-quote-left"></span>
                                        <p>Enjoyed working with innovators and creators for my web page. The project was well executed in needed stipulated time, a piece of outstanding work without and an inexpensive budget constraint without compromising on the quality. Looking forward to work in future to avail services with this Web Development Company in Bangalore. </p>
                                        <span class="fontello icon-quote-right"></span>
                                    </blockquote>
                                    <span class="pull-right author">Ashok, Bangalore</span>
                                </div>
                            </li>
                            <li>
                                <div class="bubbleBox quotes">
                                    <blockquote class="easyBox">
                                        <span class="fontello icon-quote-left"></span>
                                        <p>I would really like to take this opportunity to thank the team of  YORA TECH in providing excellent service and maintaining the client relationship. At this juncture, I would also recommend businesses opportunities to the team of  YORA TECH to flourish. Its, one of the best Web Design Company Bangalore that can help, by promoting and marketing your portal on an international level.</p>
                                        <span class="fontello icon-quote-right"></span>
                                    </blockquote>
                                    <span class="pull-right author">Jenifer, Bangalore</span>
                                </div>
                            </li>
                            <li>
                                <div class="bubbleBox quotes">
                                    <blockquote class="easyBox">
                                        <span class="fontello icon-quote-left"></span>
                                        <p>Kudos to the team at  YORA TECH. Our requirement was swiftly well understood and serviced. They are a very well organized and efficient team. Unlike many teams that just know the job, but don't understand business,  YORA TECH Web Development Company, Bangalore goes beyond their duty and exactly match up with the business need. We highly recommend  YORA TECH.. Co-founder - Medi Bridge India Pvt. Ltd.</p>
                                        <span class="fontello icon-quote-right"></span>
                                    </blockquote>
                                    <span class="pull-right author">J. Caleb, Bangalore</span>
                                </div>
                            </li>
                            <li>
                                <div class="bubbleBox quotes">
                                    <blockquote class="easyBox">
                                        <span class="fontello icon-quote-left"></span>
                                        <p>Our experiences in terms of the services provided by this Web Development Company, Bangalore are outstanding. The process of getting response to our concerns, query, Web design and work process was of high-quality. The entire Web desing team of  YORA TECH are quick at their work and highly cooperative and helpful. We really appreciate your fortitude in every step. We expect and hope for the same experience once again in near future.</p>
                                        <span class="fontello icon-quote-right"></span>
                                    </blockquote>
                                    <span class="pull-right author">Indian Educational Services, Bangalore</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid mappcontainer doCenter margTop30px" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <div class="container">
                <h4>Cloud Application Development Company, Experts in AWS, Microsoft Azure, Google App Engine, Heroku, Digital Ocean.</h4>
            </div>
        </div>
        <div class="row-fluid">
            <div class="container">
                <div class="row-fluid margTop30px">
                    <div class="span12">
                        <div class="container">
                            <div class="pull-left span9">
                                <h1 class="subTitle">Web Development Company in Bangalore, <a title="Hosting" href="http://www.yora.xyz/CodeIgniter/webhostinganddomain">Hosting</a> &amp; <a title="Email marketing" href="http://www.yora.xyz/CodeIgniter/email-marketing">Email marketing</a></h1>
                                <p>The name  YORA TECH come to mind when one thinks of Web Designing and Web development company in Bangalore. It is one of the leading companies in Bangalore that also helps its clients with web hosting and Digital marketing thanks to its professional team of skilled technology experts. </p>
                                <p><a title="Web Portal Development" href="http://www.yora.xyz/CodeIgniter/webportaldevelopment">Web Portal Development</a>: We capture your ideas and utilize them practically in order to give you a great looking web site that is 100% functional and customized as per your needs. The latest  and applications are blended seamlessly in the web portal that can be used effectively to carve a niche for your business while catering to your clients worldwide successfully.</p>
                                <p><a title="MEAN Stack Development" href="http://www.yora.xyz/CodeIgniter/meanstackdevelopmentcompany">MEAN Stack Development</a>: Many of smart business leaders with heaps of talent recognize that they need help to bring their development project idea to fruition. That�s where Mean Stack Development Company,  YORA TECH comes in.  Whether you need to develop an app or a custom website, we�ll do the job for you with great panache.</p>
                                <p><a title="Digital Marketing" href="http://www.yora.xyz/CodeIgniter/digitalmarketing">Digital Marketing</a>: Get ready to welcome increased number of visitors to your website and rejoice in converting the leads effectively via unique digital marketing strategies. The top professionals of our core team will enable you to have direction wherein you have an edge over your business rivals thanks to the best optimization techniques and a unique PPC model.</p>
                                <p><a title="Responsive Web Design" href="http://www.yora.xyz/CodeIgniter/responsivewebdesign">Responsive Web Design</a>: Enjoy sharing your website with thousands of prospective customers courtesy responsive web design that provides for optimal viewing across smart devices. We ensure that your superior content reaches your target audience providing them with an excellent viewer experience no matter how small or big the device is.</p>
                                <p>We offer you a package of <a title="Search Engine Optimization" href="http://www.yora.xyz/CodeIgniter/searchengineoptimization">SEO</a>, <a title="web services" href="http://www.yora.xyz/CodeIgniter/web-services">web services</a> that includes but is not limited to <a title="Responsive Web Design" href="http://www.yora.xyz/CodeIgniter/responsive-web-design">Responsive Web Design</a>, Web Hosting <a title="PPC Management Services" href="http://www.yora.xyz/CodeIgniter/ppc-management-services">PPC Management Services</a>, <a title="SSL certificate integration" href="http://www.yora.xyz/CodeIgniter/ssl-certificates">SSL certificate integration</a>, <a title="Ecommerce Website Design" href="http://www.yora.xyz/CodeIgniter/ecommerce-website-design-in-bangalore">Ecommerce Website Design</a>, <a title="Ecommerce Website Design" href="http://www.yora.xyz/CodeIgniter/payment-gateway-integration">Payment Gateway Integration</a>, Web Portal Development, SMS Marketing and Digital Marketing. You are welcome to request the following services from us too�</p><p><a title="E Mail Marketing" href="http://www.yora.xyz/CodeIgniter/email-marketing">E Mail Marketing</a> � We will help you to reach your target audience by adopting an effective strategy for email marketing that our skilled team undertakes as a part of the marketing strategy. <a title="Bulk SMS marketing" href="http://www.yora.xyz/CodeIgniter/sms-marketing">Bulk SMS marketing</a> is coupled with bulk emails to aid you in reaching out to prospective customers.</p>
                                <p><a title="Real Estate Portal Development" href="http://www.yora.xyz/CodeIgniter/realestateportal">Real Estate Portal Development</a>- We have both skill and experience on our side when it comes to creating innovative websites that cuts across all domains in business. We also offer cost effective <a title="Real Estate website design" href="http://www.yora.xyz/CodeIgniter/real-estate-website-design">Real Estate website design</a>, <a title="Jewelry Website Development" href="http://www.yora.xyz/CodeIgniter/jewelry-website-development">Jewelry Website Development</a>, <a title="Jewelry E-commerce Website Design" href="http://www.yora.xyz/CodeIgniter/jewelry-e-commerce-website-design">Jewelry E-commerce Website Design</a>, cloud hosting and <a title="Social Media Optimization" href="http://www.yora.xyz/CodeIgniter/social-media-optimization">SMO</a> although portal development for real estate remains our forte.</p><p><a title="Mobile Apps Development" href="http://www.yora.xyz/CodeIgniter/mobile-apps-development">Mobile Apps Development</a> � Development of mobile apps for your business will help you to connect with your clients in an engaging and effective manner. We have the expertise in utilizing open source software for mobile apps development that will enable you to take the lead in your business.</p>
                            </div><div class="pull-right span3">
                                <h3 class="twoLines">Our scope of work:</h3>
                                <ul class="normal dot">
                                    <li>Tailor made solutions backed by the most advanced technology and aimed at exceeding customer expectations.</li>
                                    <li>Unwavering focus on customer satisfaction throughout the project cycle, keeping a close watch on each stage of the project.</li>
                                    <li>We work with our customers as their partners and keep them abreast about the progress of the project through regular reporting.</li>
                                    <li>Streamlined workflow that yields high value and end to end soltions for the assigned project.</li>
                                    <li>Competitive rate of services 'without compromising' on quality.</li>
                                    <li>The user experience of all the websites developed by us has proved to be highly effective and will definitely help you to turn your business around by increasing the profits considerably.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row-fluid topSpace digital-images">
                    <div class="span6">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1">Business Approach </a></li>
                            <li class=""><a data-toggle="tab" href="#tab2">Quality Service </a></li>
                            <li class=""><a data-toggle="tab" href="#tab3">Motto </a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">We are considered to be the top web development company in Bangalore for a reason. Our promise to deliver remains solid as we never brag unnecessarily about our capabilities while explaining the services offered. Customer remains the King for us and we chalk out the business plans while keeping your future requirements in mind. It helps to meet urgent deadlines successfully with the aid of practical and innovative solutions. This approach is highly effective in staying ahead of competition and provides us with the confidence needed to provide the best possible solution to our clients.</div>
                            <div id="tab2" class="tab-pane">Quality solutions is responsible for the elevation of  YORA TECH to the position of one of the leading companies providing the best web designs and web development solutions in Bangalore. Sure, we happen to be flexible and try to provide cost effective solutions for all our clients but it is never by compromising on quality. As a web development company in Bangalore our solutions have been excellent so far and will continue to remain so as we believe that quality should be the main focus of our company. It does not pay to be mediocre ever this principle has succeeded in helping us to beat competition effectively. </div>
                            <div id="tab3" class="tab-pane"> YORA TECH is recognized as one of the leading web development company in Bangalore. It has endeared itself to its clients who find it akin to a guiding force that keeps the desired web campaign on path thereby allowing the clients to reach their goals steadfastly. We listen closely to your ideas and envision them practically in order to provide the best solution for your needs. Our team makes use of their experience along with the latest tech tools so that the viewer is rewarded with an enriching web experience. It also helps you to reach your business goals and increase your profitability.</div>
                        </div>
                    </div>
                    <div class="span6">
                        <h3 class="twoLines">"Why Choose Us?"</h3>
                        <p>As the best Web Development Company in Bangalore we offer</p>
                        <ul class="normal dot">
                            <li>Short and assured turnaround time - we never fail on deliveries.</li>
                            <li>Most rational return on investment - we pay back in the best possible manner.</li>
                            <li>We take complete ownership of the project from end to end till it is delivered.</li>
                            <li>Adopt the best practices of business and deploy the most advanced technological tools.</li>
                            <li>We remain attached to the projects even beyond delivery and are ready to hold your hand whenever you need us.</li>
                        </ul>
                    </div>
                </div>
                <p><strong>Blog and Logo Designing</strong> � We are adept at creating quality blog content as well designing the blogs for your website that would appeal to the user. We also follow Golden ratio for designing a proper logo for your company that will stand out in a crowd and create a distinct identity for your business.</p><p>Keep your trust in us as we design and develop your website according to your requirements. Our technical skills as well as the vast experience in handling marketing has resulted in catapulting us to the top position amongst all the Web Development company in Bangalore. We have been successful because we believe in keeping our promises and our simple but highly effective websites are known to interest the viewers greatly as the design is eye catching with the navigation easy making it a comfortable experience. We help your clients browse through your website with minimal fuss during reading or navigation irrespective of the device being used.</p>
            </div>
        </div>

        <div class="row-fluid topSpace mappcontainer doCenter" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <h4>Experts in Large Scale Application development! ENGAGE &amp; EXPERIENCE.</h4>
        </div>
        <div id="footer">
            <div class="footNotes">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span3">
                            <h4 class="brand"><span>V</span>ivanta </h4>
                            <ul class="normal dot">
                                <li><a title="About us" href="http://www.yora.xyz/CodeIgniter/aboutus">About us</a></li>
                                <li><a title="Why  YORA TECH" href="http://www.yora.xyz/CodeIgniter/why- YORA TECH-">Why  YORA TECH</a></li>
                                <li><a title="What we do" href="http://www.yora.xyz/CodeIgniter/whatwedo">What we do</a></li>
                                <li><a title="Portfolio" href="http://www.yora.xyz/CodeIgniter/portfolio" class="dropdown-toggle">Portfolio</a></li>
                                <li><a title="Careers" href="http://www.yora.xyz/CodeIgniter/careers">Careers</a></li>
                                <li><a title="Contact Us" href="http://www.yora.xyz/CodeIgniter/contact">Contact Us</a></li>
                                <li><a title="Services" href="http://www.yora.xyz/CodeIgniter/service">Services</a></li>
                                <li><a title="Sitemap" href="http://www.yora.xyz/CodeIgniter/sitemap">Sitemap</a></li>
                            </ul>
                        </div>
                        <div class="span3">
                            <h4 class="brand"><a title="Web Portal Development" href="http://www.yora.xyz/CodeIgniter/webportaldevelopment"><span>Web</span> Portal Development</a></h4>
                            <h4 class="brand"><a title="Responsive Web Designing" href="http://www.yora.xyz/CodeIgniter/responsivewebdesign"><span>Responsive Web</span> Designing</a></h4>
                            <h4 class="brand"><a title="Web Hosting and Domain" href="http://www.yora.xyz/CodeIgniter/webhostinganddomain"><span>Web</span> Hosting and Domain</a></h4>
                            <h4 class="brand"><a title="Web Services" href="http://www.yora.xyz/CodeIgniter/webservices"><span>Web</span> Services</a></h4>
                            <h4 class="brand"><a title="Domain Registration" href="http://www.yora.xyz/CodeIgniter/domainregistraion"><span>Domain</span> Registration</a></h4>
                        </div>
                        <div class="span3">
                            <h4 class="brand"><a title="Digital Marketing Company" href="http://www.yora.xyz/CodeIgniter/digitalmarketing"><span>Digital</span> Marketing</a></h4>
                            <h4 class="brand"><a title="Mobile Apps Development" href="http://www.yora.xyz/CodeIgniter/mobileappsdevelopment"><span>Mobile Apps</span> Development</a></h4>
                            <h4 class="brand"><a title="Content Writing" href="http://www.yora.xyz/CodeIgniter/contentwriting"><span>Content</span> Writing</a></h4>
                            <h4 class="brand"><a title="Corporate Training" href="http://www.yora.xyz/CodeIgniter/corporatetraining"><span>Corporate</span> Training</a></h4>
                        </div>
                        <div class="span3">
                            <div class="contact_info" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <div class="phone">
                                    <h5>Phone:</h5>
                                    <span itemprop="telephone"><a title="Call +91-7795572832" href="tel:+91-93535881835">+91-93535881835</a></span>,<br>
                                    <!--<span itemprop="telephone"><a title="Call +91-7899908051" href="tel:+91-7899908051">+91-7899908051</a></span>-->
                                </div>
                                <div class="mail">
                                    <h5>Mail:</h5>
                                    <span itemprop="email"><a title="Mail to Info@yora.xyz" href="mailto:Info@yora.xyz">Info@yora.xyz</a> </span>
                                </div>
                                <div class="adress">
                                    <h5>Address:</h5>
                                    <span itemprop="streetAddress">YORA TECH </span>
                                    <span itemprop="addressLocality">#50,SGR COLLEGE ROAD</span>
                                    <span itemprop="addressLocality1">MUNNEKOLALA,  MARATHAHALLI EXTN, NEAR ST MARATHOMA CHURCH</span>
                                    <span itemprop="addressRegion">Karnataka, Bengaluru</span>
                                    <span itemprop="postalCode">560037</span>
                                </div>
                            </div>
                        </div>

                        <div class="span12">
                            <div class="span6">
                                <p class="pull-left"> &copy; 2018  YORA TECH: <a title="Web development company" href="http://www.yora.xyz/CodeIgniter/">Web development company</a></p>
                            </div>
                            <div class="span6 pull-right">
                                <ul class="socialIcons">
                                    <li><a href="https://www.facebook.com/YORA-773572426171151/" class="glyphicons facebook" data-toggle="tooltip" title="Facebook" target="_blank"><i></i></a></li>
                                    <li><a href="https://twitter.com/YoraTech" class="glyphicons twitter" data-toggle="tooltip" title="Twitter" target="_blank"><i></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/yora-tech-274913160/" target="_blank" class="glyphicons linked_in" data-toggle="tooltip" title="LinkedIn"><i></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" id="toTop">
            <span id="toTopHover">Up</span>
        </a>
    </div>
    <script defer src="assets/js/one.js"></script>
    <script>var gaJsHost=(("https:"==document.location.protocol)?"https://ssl.":"http://www.");GLUE_SCRIPT;var ga=document.createElement("script");ga.;ga.async=true;ga.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ga,s);</script>
    <script>try{var pageTracker=_modpagespeed_getRewriteTracker("UA-41188548-1");pageTracker._trackPageview();}catch(err){}</script>
    <script>$(function(){function c(){b--;if(b===0){}}var a=$("img");var b=a.length;a.each(function(){if(this.complete){c.call(this);}else{$(this).one("load",c);}});});</script>
    <script>

var pJS=function(tag_id,params){var canvas_el=document.querySelector('#'+tag_id+' > .particles-js-canvas-el');this.pJS={canvas:{el:canvas_el,w:canvas_el.offsetWidth,h:canvas_el.offsetHeight},particles:{number:{value:400,density:{enable:!0,value_area:800}},color:{value:'#fff'},shape:{type:'circle',stroke:{width:0,color:'#ff0000'},polygon:{nb_sides:5},image:{src:'',width:100,height:100}},opacity:{value:1,random:!1,anim:{enable:!1,speed:2,opacity_min:0,sync:!1}},size:{value:20,random:!1,anim:{enable:!1,speed:20,size_min:0,sync:!1}},line_linked:{enable:!0,distance:100,color:'#fff',opacity:1,width:1},move:{enable:!0,speed:2,direction:'none',random:!1,straight:!1,out_mode:'out',bounce:!1,attract:{enable:!1,rotateX:3000,rotateY:3000}},array:[]},interactivity:{detect_on:'canvas',events:{onhover:{enable:!0,mode:'grab'},onclick:{enable:!0,mode:'push'},resize:!0},modes:{grab:{distance:100,line_linked:{opacity:1}},bubble:{distance:200,size:80,duration:0.4},repulse:{distance:200,duration:0.4},push:{particles_nb:4},remove:{particles_nb:2}},mouse:{}},retina_detect:!1,fn:{interact:{},modes:{},vendors:{}},tmp:{}};var pJS=this.pJS;if(params){Object.deepExtend(pJS,params)}
pJS.tmp.obj={size_value:pJS.particles.size.value,size_anim_speed:pJS.particles.size.anim.speed,move_speed:pJS.particles.move.speed,line_linked_distance:pJS.particles.line_linked.distance,line_linked_width:pJS.particles.line_linked.width,mode_grab_distance:pJS.interactivity.modes.grab.distance,mode_bubble_distance:pJS.interactivity.modes.bubble.distance,mode_bubble_size:pJS.interactivity.modes.bubble.size,mode_repulse_distance:pJS.interactivity.modes.repulse.distance};pJS.fn.retinaInit=function(){if(pJS.retina_detect&&window.devicePixelRatio>1){pJS.canvas.pxratio=window.devicePixelRatio;pJS.tmp.retina=!0}
else{pJS.canvas.pxratio=1;pJS.tmp.retina=!1}
pJS.canvas.w=pJS.canvas.el.offsetWidth*pJS.canvas.pxratio;pJS.canvas.h=pJS.canvas.el.offsetHeight*pJS.canvas.pxratio;pJS.particles.size.value=pJS.tmp.obj.size_value*pJS.canvas.pxratio;pJS.particles.size.anim.speed=pJS.tmp.obj.size_anim_speed*pJS.canvas.pxratio;pJS.particles.move.speed=pJS.tmp.obj.move_speed*pJS.canvas.pxratio;pJS.particles.line_linked.distance=pJS.tmp.obj.line_linked_distance*pJS.canvas.pxratio;pJS.interactivity.modes.grab.distance=pJS.tmp.obj.mode_grab_distance*pJS.canvas.pxratio;pJS.interactivity.modes.bubble.distance=pJS.tmp.obj.mode_bubble_distance*pJS.canvas.pxratio;pJS.particles.line_linked.width=pJS.tmp.obj.line_linked_width*pJS.canvas.pxratio;pJS.interactivity.modes.bubble.size=pJS.tmp.obj.mode_bubble_size*pJS.canvas.pxratio;pJS.interactivity.modes.repulse.distance=pJS.tmp.obj.mode_repulse_distance*pJS.canvas.pxratio};pJS.fn.canvasInit=function(){pJS.canvas.ctx=pJS.canvas.el.getContext('2d')};pJS.fn.canvasSize=function(){pJS.canvas.el.width=pJS.canvas.w;pJS.canvas.el.height=pJS.canvas.h;if(pJS&&pJS.interactivity.events.resize){window.addEventListener('resize',function(){pJS.canvas.w=pJS.canvas.el.offsetWidth;pJS.canvas.h=pJS.canvas.el.offsetHeight;if(pJS.tmp.retina){pJS.canvas.w*=pJS.canvas.pxratio;pJS.canvas.h*=pJS.canvas.pxratio}
pJS.canvas.el.width=pJS.canvas.w;pJS.canvas.el.height=pJS.canvas.h;if(!pJS.particles.move.enable){pJS.fn.particlesEmpty();pJS.fn.particlesCreate();pJS.fn.particlesDraw();pJS.fn.vendors.densityAutoParticles()}
pJS.fn.vendors.densityAutoParticles()})}};pJS.fn.canvasPaint=function(){pJS.canvas.ctx.fillRect(0,0,pJS.canvas.w,pJS.canvas.h)};pJS.fn.canvasClear=function(){pJS.canvas.ctx.clearRect(0,0,pJS.canvas.w,pJS.canvas.h)};pJS.fn.particle=function(color,opacity,position){this.radius=(pJS.particles.size.random?Math.random():1)*pJS.particles.size.value;if(pJS.particles.size.anim.enable){this.size_status=!1;this.vs=pJS.particles.size.anim.speed/100;if(!pJS.particles.size.anim.sync){this.vs=this.vs*Math.random()}}
this.x=position?position.x:Math.random()*pJS.canvas.w;this.y=position?position.y:Math.random()*pJS.canvas.h;if(this.x>pJS.canvas.w-this.radius*2)this.x=this.x-this.radius;else if(this.x<this.radius*2)this.x=this.x+this.radius;if(this.y>pJS.canvas.h-this.radius*2)this.y=this.y-this.radius;else if(this.y<this.radius*2)this.y=this.y+this.radius;if(pJS.particles.move.bounce){pJS.fn.vendors.checkOverlap(this,position)}
this.color={};if(typeof(color.value)=='object'){if(color.value instanceof Array){var color_selected=color.value[Math.floor(Math.random()*pJS.particles.color.value.length)];this.color.rgb=hexToRgb(color_selected)}else{if(color.value.r!=undefined&&color.value.g!=undefined&&color.value.b!=undefined){this.color.rgb={r:color.value.r,g:color.value.g,b:color.value.b}}
if(color.value.h!=undefined&&color.value.s!=undefined&&color.value.l!=undefined){this.color.hsl={h:color.value.h,s:color.value.s,l:color.value.l}}}}
else if(color.value=='random'){this.color.rgb={r:(Math.floor(Math.random()*(255-0+1))+0),g:(Math.floor(Math.random()*(255-0+1))+0),b:(Math.floor(Math.random()*(255-0+1))+0)}}
else if(typeof(color.value)=='string'){this.color=color;this.color.rgb=hexToRgb(this.color.value)}
this.opacity=(pJS.particles.opacity.random?Math.random():1)*pJS.particles.opacity.value;if(pJS.particles.opacity.anim.enable){this.opacity_status=!1;this.vo=pJS.particles.opacity.anim.speed/100;if(!pJS.particles.opacity.anim.sync){this.vo=this.vo*Math.random()}}
var velbase={}
switch(pJS.particles.move.direction){case 'top':velbase={x:0,y:-1};break;case 'top-right':velbase={x:0.5,y:-0.5};break;case 'right':velbase={x:1,y:-0};break;case 'bottom-right':velbase={x:0.5,y:0.5};break;case 'bottom':velbase={x:0,y:1};break;case 'bottom-left':velbase={x:-0.5,y:1};break;case 'left':velbase={x:-1,y:0};break;case 'top-left':velbase={x:-0.5,y:-0.5};break;default:velbase={x:0,y:0};break}
if(pJS.particles.move.straight){this.vx=velbase.x;this.vy=velbase.y;if(pJS.particles.move.random){this.vx=this.vx*(Math.random());this.vy=this.vy*(Math.random())}}else{this.vx=velbase.x+Math.random()-0.5;this.vy=velbase.y+Math.random()-0.5}
this.vx_i=this.vx;this.vy_i=this.vy;var shape_type=pJS.particles.shape.type;if(typeof(shape_type)=='object'){if(shape_type instanceof Array){var shape_selected=shape_type[Math.floor(Math.random()*shape_type.length)];this.shape=shape_selected}}else{this.shape=shape_type}
if(this.shape=='image'){var sh=pJS.particles.shape;this.img={src:sh.image.src,ratio:sh.image.width/sh.image.height}
if(!this.img.ratio)this.img.ratio=1;if(pJS.tmp.img_type=='svg'&&pJS.tmp.source_svg!=undefined){pJS.fn.vendors.createSvgImg(this);if(pJS.tmp.pushing){this.img.loaded=!1}}}};pJS.fn.particle.prototype.draw=function(){var p=this;if(p.radius_bubble!=undefined){var radius=p.radius_bubble}else{var radius=p.radius}
if(p.opacity_bubble!=undefined){var opacity=p.opacity_bubble}else{var opacity=p.opacity}
if(p.color.rgb){var color_value='rgba('+p.color.rgb.r+','+p.color.rgb.g+','+p.color.rgb.b+','+opacity+')'}else{var color_value='hsla('+p.color.hsl.h+','+p.color.hsl.s+'%,'+p.color.hsl.l+'%,'+opacity+')'}
pJS.canvas.ctx.fillStyle=color_value;pJS.canvas.ctx.beginPath();switch(p.shape){case 'circle':pJS.canvas.ctx.arc(p.x,p.y,radius,0,Math.PI*2,!1);break;case 'edge':pJS.canvas.ctx.rect(p.x-radius,p.y-radius,radius*2,radius*2);break;case 'triangle':pJS.fn.vendors.drawShape(pJS.canvas.ctx,p.x-radius,p.y+radius/1.66,radius*2,3,2);break;case 'polygon':pJS.fn.vendors.drawShape(pJS.canvas.ctx,p.x-radius/(pJS.particles.shape.polygon.nb_sides/3.5),p.y-radius/(2.66/3.5),radius*2.66/(pJS.particles.shape.polygon.nb_sides/3),pJS.particles.shape.polygon.nb_sides,1);break;case 'star':pJS.fn.vendors.drawShape(pJS.canvas.ctx,p.x-radius*2/(pJS.particles.shape.polygon.nb_sides/4),p.y-radius/(2*2.66/3.5),radius*2*2.66/(pJS.particles.shape.polygon.nb_sides/3),pJS.particles.shape.polygon.nb_sides,2);break;case 'image':function draw(){pJS.canvas.ctx.drawImage(img_obj,p.x-radius,p.y-radius,radius*2,radius*2/p.img.ratio)}
if(pJS.tmp.img_type=='svg'){var img_obj=p.img.obj}else{var img_obj=pJS.tmp.img_obj}
if(img_obj){draw()}
break}
pJS.canvas.ctx.closePath();if(pJS.particles.shape.stroke.width>0){pJS.canvas.ctx.strokeStyle=pJS.particles.shape.stroke.color;pJS.canvas.ctx.lineWidth=pJS.particles.shape.stroke.width;pJS.canvas.ctx.stroke()}
pJS.canvas.ctx.fill()};pJS.fn.particlesCreate=function(){for(var i=0;i<pJS.particles.number.value;i++){pJS.particles.array.push(new pJS.fn.particle(pJS.particles.color,pJS.particles.opacity.value))}};pJS.fn.particlesUpdate=function(){for(var i=0;i<pJS.particles.array.length;i++){var p=pJS.particles.array[i];if(pJS.particles.move.enable){var ms=pJS.particles.move.speed/2;p.x+=p.vx*ms;p.y+=p.vy*ms}
if(pJS.particles.opacity.anim.enable){if(p.opacity_status==!0){if(p.opacity>=pJS.particles.opacity.value)p.opacity_status=!1;p.opacity+=p.vo}else{if(p.opacity<=pJS.particles.opacity.anim.opacity_min)p.opacity_status=!0;p.opacity-=p.vo}
if(p.opacity<0)p.opacity=0}
if(pJS.particles.size.anim.enable){if(p.size_status==!0){if(p.radius>=pJS.particles.size.value)p.size_status=!1;p.radius+=p.vs}else{if(p.radius<=pJS.particles.size.anim.size_min)p.size_status=!0;p.radius-=p.vs}
if(p.radius<0)p.radius=0}
if(pJS.particles.move.out_mode=='bounce'){var new_pos={x_left:p.radius,x_right:pJS.canvas.w,y_top:p.radius,y_bottom:pJS.canvas.h}}else{var new_pos={x_left:-p.radius,x_right:pJS.canvas.w+p.radius,y_top:-p.radius,y_bottom:pJS.canvas.h+p.radius}}
if(p.x-p.radius>pJS.canvas.w){p.x=new_pos.x_left;p.y=Math.random()*pJS.canvas.h}
else if(p.x+p.radius<0){p.x=new_pos.x_right;p.y=Math.random()*pJS.canvas.h}
if(p.y-p.radius>pJS.canvas.h){p.y=new_pos.y_top;p.x=Math.random()*pJS.canvas.w}
else if(p.y+p.radius<0){p.y=new_pos.y_bottom;p.x=Math.random()*pJS.canvas.w}
switch(pJS.particles.move.out_mode){case 'bounce':if(p.x+p.radius>pJS.canvas.w)p.vx=-p.vx;else if(p.x-p.radius<0)p.vx=-p.vx;if(p.y+p.radius>pJS.canvas.h)p.vy=-p.vy;else if(p.y-p.radius<0)p.vy=-p.vy;break}
if(isInArray('grab',pJS.interactivity.events.onhover.mode)){pJS.fn.modes.grabParticle(p)}
if(isInArray('bubble',pJS.interactivity.events.onhover.mode)||isInArray('bubble',pJS.interactivity.events.onclick.mode)){pJS.fn.modes.bubbleParticle(p)}
if(isInArray('repulse',pJS.interactivity.events.onhover.mode)||isInArray('repulse',pJS.interactivity.events.onclick.mode)){pJS.fn.modes.repulseParticle(p)}
if(pJS.particles.line_linked.enable||pJS.particles.move.attract.enable){for(var j=i+1;j<pJS.particles.array.length;j++){var p2=pJS.particles.array[j];if(pJS.particles.line_linked.enable){pJS.fn.interact.linkParticles(p,p2)}
if(pJS.particles.move.attract.enable){pJS.fn.interact.attractParticles(p,p2)}
if(pJS.particles.move.bounce){pJS.fn.interact.bounceParticles(p,p2)}}}}};pJS.fn.particlesDraw=function(){pJS.canvas.ctx.clearRect(0,0,pJS.canvas.w,pJS.canvas.h);pJS.fn.particlesUpdate();for(var i=0;i<pJS.particles.array.length;i++){var p=pJS.particles.array[i];p.draw()}};pJS.fn.particlesEmpty=function(){pJS.particles.array=[]};pJS.fn.particlesRefresh=function(){cancelRequestAnimFrame(pJS.fn.checkAnimFrame);cancelRequestAnimFrame(pJS.fn.drawAnimFrame);pJS.tmp.source_svg=undefined;pJS.tmp.img_obj=undefined;pJS.tmp.count_svg=0;pJS.fn.particlesEmpty();pJS.fn.canvasClear();pJS.fn.vendors.start()};pJS.fn.interact.linkParticles=function(p1,p2){var dx=p1.x-p2.x,dy=p1.y-p2.y,dist=Math.sqrt(dx*dx+dy*dy);if(dist<=pJS.particles.line_linked.distance){var opacity_line=pJS.particles.line_linked.opacity-(dist/(1/pJS.particles.line_linked.opacity))/pJS.particles.line_linked.distance;if(opacity_line>0){var color_line=pJS.particles.line_linked.color_rgb_line;pJS.canvas.ctx.strokeStyle='rgba('+color_line.r+','+color_line.g+','+color_line.b+','+opacity_line+')';pJS.canvas.ctx.lineWidth=pJS.particles.line_linked.width;pJS.canvas.ctx.beginPath();pJS.canvas.ctx.moveTo(p1.x,p1.y);pJS.canvas.ctx.lineTo(p2.x,p2.y);pJS.canvas.ctx.stroke();pJS.canvas.ctx.closePath()}}};pJS.fn.interact.attractParticles=function(p1,p2){var dx=p1.x-p2.x,dy=p1.y-p2.y,dist=Math.sqrt(dx*dx+dy*dy);if(dist<=pJS.particles.line_linked.distance){var ax=dx/(pJS.particles.move.attract.rotateX*1000),ay=dy/(pJS.particles.move.attract.rotateY*1000);p1.vx-=ax;p1.vy-=ay;p2.vx+=ax;p2.vy+=ay}}
pJS.fn.interact.bounceParticles=function(p1,p2){var dx=p1.x-p2.x,dy=p1.y-p2.y,dist=Math.sqrt(dx*dx+dy*dy),dist_p=p1.radius+p2.radius;if(dist<=dist_p){p1.vx=-p1.vx;p1.vy=-p1.vy;p2.vx=-p2.vx;p2.vy=-p2.vy}}
pJS.fn.modes.pushParticles=function(nb,pos){pJS.tmp.pushing=!0;for(var i=0;i<nb;i++){pJS.particles.array.push(new pJS.fn.particle(pJS.particles.color,pJS.particles.opacity.value,{'x':pos?pos.pos_x:Math.random()*pJS.canvas.w,'y':pos?pos.pos_y:Math.random()*pJS.canvas.h}))
if(i==nb-1){if(!pJS.particles.move.enable){pJS.fn.particlesDraw()}
pJS.tmp.pushing=!1}}};pJS.fn.modes.removeParticles=function(nb){pJS.particles.array.splice(0,nb);if(!pJS.particles.move.enable){pJS.fn.particlesDraw()}}
pJS.fn.modes.bubbleParticle=function(p){if(pJS.interactivity.events.onhover.enable&&isInArray('bubble',pJS.interactivity.events.onhover.mode)){var dx_mouse=p.x-pJS.interactivity.mouse.pos_x,dy_mouse=p.y-pJS.interactivity.mouse.pos_y,dist_mouse=Math.sqrt(dx_mouse*dx_mouse+dy_mouse*dy_mouse),ratio=1-dist_mouse/pJS.interactivity.modes.bubble.distance;function init(){p.opacity_bubble=p.opacity;p.radius_bubble=p.radius}
if(dist_mouse<=pJS.interactivity.modes.bubble.distance){if(ratio>=0&&pJS.interactivity.status=='mousemove'){if(pJS.interactivity.modes.bubble.size!=pJS.particles.size.value){if(pJS.interactivity.modes.bubble.size>pJS.particles.size.value){var size=p.radius+(pJS.interactivity.modes.bubble.size*ratio);if(size>=0){p.radius_bubble=size}}else{var dif=p.radius-pJS.interactivity.modes.bubble.size,size=p.radius-(dif*ratio);if(size>0){p.radius_bubble=size}else{p.radius_bubble=0}}}
if(pJS.interactivity.modes.bubble.opacity!=pJS.particles.opacity.value){if(pJS.interactivity.modes.bubble.opacity>pJS.particles.opacity.value){var opacity=pJS.interactivity.modes.bubble.opacity*ratio;if(opacity>p.opacity&&opacity<=pJS.interactivity.modes.bubble.opacity){p.opacity_bubble=opacity}}else{var opacity=p.opacity-(pJS.particles.opacity.value-pJS.interactivity.modes.bubble.opacity)*ratio;if(opacity<p.opacity&&opacity>=pJS.interactivity.modes.bubble.opacity){p.opacity_bubble=opacity}}}}}else{init()}
if(pJS.interactivity.status=='mouseleave'){init()}}
else if(pJS.interactivity.events.onclick.enable&&isInArray('bubble',pJS.interactivity.events.onclick.mode)){if(pJS.tmp.bubble_clicking){var dx_mouse=p.x-pJS.interactivity.mouse.click_pos_x,dy_mouse=p.y-pJS.interactivity.mouse.click_pos_y,dist_mouse=Math.sqrt(dx_mouse*dx_mouse+dy_mouse*dy_mouse),time_spent=(new Date().getTime()-pJS.interactivity.mouse.click_time)/1000;if(time_spent>pJS.interactivity.modes.bubble.duration){pJS.tmp.bubble_duration_end=!0}
if(time_spent>pJS.interactivity.modes.bubble.duration*2){pJS.tmp.bubble_clicking=!1;pJS.tmp.bubble_duration_end=!1}}
function process(bubble_param,particles_param,p_obj_bubble,p_obj,id){if(bubble_param!=particles_param){if(!pJS.tmp.bubble_duration_end){if(dist_mouse<=pJS.interactivity.modes.bubble.distance){if(p_obj_bubble!=undefined)var obj=p_obj_bubble;else var obj=p_obj;if(obj!=bubble_param){var value=p_obj-(time_spent*(p_obj-bubble_param)/pJS.interactivity.modes.bubble.duration);if(id=='size')p.radius_bubble=value;if(id=='opacity')p.opacity_bubble=value}}else{if(id=='size')p.radius_bubble=undefined;if(id=='opacity')p.opacity_bubble=undefined}}else{if(p_obj_bubble!=undefined){var value_tmp=p_obj-(time_spent*(p_obj-bubble_param)/pJS.interactivity.modes.bubble.duration),dif=bubble_param-value_tmp;value=bubble_param+dif;if(id=='size')p.radius_bubble=value;if(id=='opacity')p.opacity_bubble=value}}}}
if(pJS.tmp.bubble_clicking){process(pJS.interactivity.modes.bubble.size,pJS.particles.size.value,p.radius_bubble,p.radius,'size');process(pJS.interactivity.modes.bubble.opacity,pJS.particles.opacity.value,p.opacity_bubble,p.opacity,'opacity')}}};pJS.fn.modes.repulseParticle=function(p){if(pJS.interactivity.events.onhover.enable&&isInArray('repulse',pJS.interactivity.events.onhover.mode)&&pJS.interactivity.status=='mousemove'){var dx_mouse=p.x-pJS.interactivity.mouse.pos_x,dy_mouse=p.y-pJS.interactivity.mouse.pos_y,dist_mouse=Math.sqrt(dx_mouse*dx_mouse+dy_mouse*dy_mouse);var normVec={x:dx_mouse/dist_mouse,y:dy_mouse/dist_mouse},repulseRadius=pJS.interactivity.modes.repulse.distance,velocity=100,repulseFactor=clamp((1/repulseRadius)*(-1*Math.pow(dist_mouse/repulseRadius,2)+1)*repulseRadius*velocity,0,50);var pos={x:p.x+normVec.x*repulseFactor,y:p.y+normVec.y*repulseFactor}
if(pJS.particles.move.out_mode=='bounce'){if(pos.x-p.radius>0&&pos.x+p.radius<pJS.canvas.w)p.x=pos.x;if(pos.y-p.radius>0&&pos.y+p.radius<pJS.canvas.h)p.y=pos.y}else{p.x=pos.x;p.y=pos.y}}
else if(pJS.interactivity.events.onclick.enable&&isInArray('repulse',pJS.interactivity.events.onclick.mode)){if(!pJS.tmp.repulse_finish){pJS.tmp.repulse_count++;if(pJS.tmp.repulse_count==pJS.particles.array.length){pJS.tmp.repulse_finish=!0}}
if(pJS.tmp.repulse_clicking){var repulseRadius=Math.pow(pJS.interactivity.modes.repulse.distance/6,3);var dx=pJS.interactivity.mouse.click_pos_x-p.x,dy=pJS.interactivity.mouse.click_pos_y-p.y,d=dx*dx+dy*dy;var force=-repulseRadius/d*1;function process(){var f=Math.atan2(dy,dx);p.vx=force*Math.cos(f);p.vy=force*Math.sin(f);if(pJS.particles.move.out_mode=='bounce'){var pos={x:p.x+p.vx,y:p.y+p.vy}
if(pos.x+p.radius>pJS.canvas.w)p.vx=-p.vx;else if(pos.x-p.radius<0)p.vx=-p.vx;if(pos.y+p.radius>pJS.canvas.h)p.vy=-p.vy;else if(pos.y-p.radius<0)p.vy=-p.vy}}
if(d<=repulseRadius){process()}}else{if(pJS.tmp.repulse_clicking==!1){p.vx=p.vx_i;p.vy=p.vy_i}}}}
pJS.fn.modes.grabParticle=function(p){if(pJS.interactivity.events.onhover.enable&&pJS.interactivity.status=='mousemove'){var dx_mouse=p.x-pJS.interactivity.mouse.pos_x,dy_mouse=p.y-pJS.interactivity.mouse.pos_y,dist_mouse=Math.sqrt(dx_mouse*dx_mouse+dy_mouse*dy_mouse);if(dist_mouse<=pJS.interactivity.modes.grab.distance){var opacity_line=pJS.interactivity.modes.grab.line_linked.opacity-(dist_mouse/(1/pJS.interactivity.modes.grab.line_linked.opacity))/pJS.interactivity.modes.grab.distance;if(opacity_line>0){var color_line=pJS.particles.line_linked.color_rgb_line;pJS.canvas.ctx.strokeStyle='rgba('+color_line.r+','+color_line.g+','+color_line.b+','+opacity_line+')';pJS.canvas.ctx.lineWidth=pJS.particles.line_linked.width;pJS.canvas.ctx.beginPath();pJS.canvas.ctx.moveTo(p.x,p.y);pJS.canvas.ctx.lineTo(pJS.interactivity.mouse.pos_x,pJS.interactivity.mouse.pos_y);pJS.canvas.ctx.stroke();pJS.canvas.ctx.closePath()}}}};pJS.fn.vendors.eventsListeners=function(){if(pJS.interactivity.detect_on=='window'){pJS.interactivity.el=window}else{pJS.interactivity.el=pJS.canvas.el}
if(pJS.interactivity.events.onhover.enable||pJS.interactivity.events.onclick.enable){pJS.interactivity.el.addEventListener('mousemove',function(e){if(pJS.interactivity.el==window){var pos_x=e.clientX,pos_y=e.clientY}
else{var pos_x=e.offsetX||e.clientX,pos_y=e.offsetY||e.clientY}
pJS.interactivity.mouse.pos_x=pos_x;pJS.interactivity.mouse.pos_y=pos_y;if(pJS.tmp.retina){pJS.interactivity.mouse.pos_x*=pJS.canvas.pxratio;pJS.interactivity.mouse.pos_y*=pJS.canvas.pxratio}
pJS.interactivity.status='mousemove'});pJS.interactivity.el.addEventListener('mouseleave',function(e){pJS.interactivity.mouse.pos_x=null;pJS.interactivity.mouse.pos_y=null;pJS.interactivity.status='mouseleave'})}
if(pJS.interactivity.events.onclick.enable){pJS.interactivity.el.addEventListener('click',function(){pJS.interactivity.mouse.click_pos_x=pJS.interactivity.mouse.pos_x;pJS.interactivity.mouse.click_pos_y=pJS.interactivity.mouse.pos_y;pJS.interactivity.mouse.click_time=new Date().getTime();if(pJS.interactivity.events.onclick.enable){switch(pJS.interactivity.events.onclick.mode){case 'push':if(pJS.particles.move.enable){pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb,pJS.interactivity.mouse)}else{if(pJS.interactivity.modes.push.particles_nb==1){pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb,pJS.interactivity.mouse)}
else if(pJS.interactivity.modes.push.particles_nb>1){pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb)}}
break;case 'remove':pJS.fn.modes.removeParticles(pJS.interactivity.modes.remove.particles_nb);break;case 'bubble':pJS.tmp.bubble_clicking=!0;break;case 'repulse':pJS.tmp.repulse_clicking=!0;pJS.tmp.repulse_count=0;pJS.tmp.repulse_finish=!1;setTimeout(function(){pJS.tmp.repulse_clicking=!1},pJS.interactivity.modes.repulse.duration*1000)
break}}})}};pJS.fn.vendors.densityAutoParticles=function(){if(pJS.particles.number.density.enable){var area=pJS.canvas.el.width*pJS.canvas.el.height/1000;if(pJS.tmp.retina){area=area/(pJS.canvas.pxratio*2)}
var nb_particles=area*pJS.particles.number.value/pJS.particles.number.density.value_area;var missing_particles=pJS.particles.array.length-nb_particles;if(missing_particles<0)pJS.fn.modes.pushParticles(Math.abs(missing_particles));else pJS.fn.modes.removeParticles(missing_particles)}};pJS.fn.vendors.checkOverlap=function(p1,position){for(var i=0;i<pJS.particles.array.length;i++){var p2=pJS.particles.array[i];var dx=p1.x-p2.x,dy=p1.y-p2.y,dist=Math.sqrt(dx*dx+dy*dy);if(dist<=p1.radius+p2.radius){p1.x=position?position.x:Math.random()*pJS.canvas.w;p1.y=position?position.y:Math.random()*pJS.canvas.h;pJS.fn.vendors.checkOverlap(p1)}}};pJS.fn.vendors.createSvgImg=function(p){var svgXml=pJS.tmp.source_svg,rgbHex=/#([0-9A-F]{3,6})/gi,coloredSvgXml=svgXml.replace(rgbHex,function(m,r,g,b){if(p.color.rgb){var color_value='rgba('+p.color.rgb.r+','+p.color.rgb.g+','+p.color.rgb.b+','+p.opacity+')'}else{var color_value='hsla('+p.color.hsl.h+','+p.color.hsl.s+'%,'+p.color.hsl.l+'%,'+p.opacity+')'}
return color_value});var svg=new Blob([coloredSvgXml],{type:'image/svg+xml;charset=utf-8'}),DOMURL=window.URL||window.webkitURL||window,url=DOMURL.createObjectURL(svg);var img=new Image();img.addEventListener('load',function(){p.img.obj=img;p.img.loaded=!0;DOMURL.revokeObjectURL(url);pJS.tmp.count_svg++});img.src=url};pJS.fn.vendors.destroypJS=function(){cancelAnimationFrame(pJS.fn.drawAnimFrame);canvas_el.remove();pJSDom=null};pJS.fn.vendors.drawShape=function(c,startX,startY,sideLength,sideCountNumerator,sideCountDenominator){var sideCount=sideCountNumerator*sideCountDenominator;var decimalSides=sideCountNumerator/sideCountDenominator;var interiorAngleDegrees=(180*(decimalSides-2))/decimalSides;var interiorAngle=Math.PI-Math.PI*interiorAngleDegrees/180;c.save();c.beginPath();c.translate(startX,startY);c.moveTo(0,0);for(var i=0;i<sideCount;i++){c.lineTo(sideLength,0);c.translate(sideLength,0);c.rotate(interiorAngle)}
c.fill();c.restore()};pJS.fn.vendors.exportImg=function(){window.open(pJS.canvas.el.toDataURL('image/png'),'_blank')};pJS.fn.vendors.loadImg=function(type){pJS.tmp.img_error=undefined;if(pJS.particles.shape.image.src!=''){if(type=='svg'){var xhr=new XMLHttpRequest();xhr.open('GET',pJS.particles.shape.image.src);xhr.onreadystatechange=function(data){if(xhr.readyState==4){if(xhr.status==200){pJS.tmp.source_svg=data.currentTarget.response;pJS.fn.vendors.checkBeforeDraw()}else{console.log('Error pJS - Image not found');pJS.tmp.img_error=!0}}}
xhr.send()}else{var img=new Image();img.addEventListener('load',function(){pJS.tmp.img_obj=img;pJS.fn.vendors.checkBeforeDraw()});img.src=pJS.particles.shape.image.src}}else{console.log('Error pJS - No image.src');pJS.tmp.img_error=!0}};pJS.fn.vendors.draw=function(){if(pJS.particles.shape.type=='image'){if(pJS.tmp.img_type=='svg'){if(pJS.tmp.count_svg>=pJS.particles.number.value){pJS.fn.particlesDraw();if(!pJS.particles.move.enable)cancelRequestAnimFrame(pJS.fn.drawAnimFrame);else pJS.fn.drawAnimFrame=requestAnimFrame(pJS.fn.vendors.draw)}else{if(!pJS.tmp.img_error)pJS.fn.drawAnimFrame=requestAnimFrame(pJS.fn.vendors.draw)}}else{if(pJS.tmp.img_obj!=undefined){pJS.fn.particlesDraw();if(!pJS.particles.move.enable)cancelRequestAnimFrame(pJS.fn.drawAnimFrame);else pJS.fn.drawAnimFrame=requestAnimFrame(pJS.fn.vendors.draw)}else{if(!pJS.tmp.img_error)pJS.fn.drawAnimFrame=requestAnimFrame(pJS.fn.vendors.draw)}}}else{pJS.fn.particlesDraw();if(!pJS.particles.move.enable)cancelRequestAnimFrame(pJS.fn.drawAnimFrame);else pJS.fn.drawAnimFrame=requestAnimFrame(pJS.fn.vendors.draw)}};pJS.fn.vendors.checkBeforeDraw=function(){if(pJS.particles.shape.type=='image'){if(pJS.tmp.img_type=='svg'&&pJS.tmp.source_svg==undefined){pJS.tmp.checkAnimFrame=requestAnimFrame(check)}else{cancelRequestAnimFrame(pJS.tmp.checkAnimFrame);if(!pJS.tmp.img_error){pJS.fn.vendors.init();pJS.fn.vendors.draw()}}}else{pJS.fn.vendors.init();pJS.fn.vendors.draw()}};pJS.fn.vendors.init=function(){pJS.fn.retinaInit();pJS.fn.canvasInit();pJS.fn.canvasSize();pJS.fn.canvasPaint();pJS.fn.particlesCreate();pJS.fn.vendors.densityAutoParticles();pJS.particles.line_linked.color_rgb_line=hexToRgb(pJS.particles.line_linked.color)};pJS.fn.vendors.start=function(){if(isInArray('image',pJS.particles.shape.type)){pJS.tmp.img_type=pJS.particles.shape.image.src.substr(pJS.particles.shape.image.src.length-3);pJS.fn.vendors.loadImg(pJS.tmp.img_type)}else{pJS.fn.vendors.checkBeforeDraw()}};pJS.fn.vendors.eventsListeners();pJS.fn.vendors.start()};Object.deepExtend=function(destination,source){for(var property in source){if(source[property]&&source[property].constructor&&source[property].constructor===Object){destination[property]=destination[property]||{};arguments.callee(destination[property],source[property])}else{destination[property]=source[property]}}
return destination};window.requestAnimFrame=(function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(callback){window.setTimeout(callback,1000/60)}})();window.cancelRequestAnimFrame=(function(){return window.cancelAnimationFrame||window.webkitCancelRequestAnimationFrame||window.mozCancelRequestAnimationFrame||window.oCancelRequestAnimationFrame||window.msCancelRequestAnimationFrame||clearTimeout})();function hexToRgb(hex){var shorthandRegex=/^#?([a-f\d])([a-f\d])([a-f\d])$/i;hex=hex.replace(shorthandRegex,function(m,r,g,b){return r+r+g+g+b+b});var result=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);return result?{r:parseInt(result[1],16),g:parseInt(result[2],16),b:parseInt(result[3],16)}:null};function clamp(number,min,max){return Math.min(Math.max(number,min),max)};function isInArray(value,array){return array.indexOf(value)>-1}
window.pJSDom=[];window.particlesJS=function(tag_id,params){if(typeof(tag_id)!='string'){params=tag_id;tag_id='particles-js'}
if(!tag_id){tag_id='particles-js'}
var pJS_tag=document.getElementById(tag_id),pJS_canvas_class='particles-js-canvas-el',exist_canvas=pJS_tag.getElementsByClassName(pJS_canvas_class);if(exist_canvas.length){while(exist_canvas.length>0){pJS_tag.removeChild(exist_canvas[0])}}
var canvas_el=document.createElement('canvas');canvas_el.className=pJS_canvas_class;canvas_el.style.width="100%";canvas_el.style.height="100%";var canvas=document.getElementById(tag_id).appendChild(canvas_el);if(canvas!=null){pJSDom.push(new pJS(tag_id,params))}};window.particlesJS.load=function(tag_id,path_config_json,callback){var xhr=new XMLHttpRequest();xhr.open('GET',path_config_json);xhr.onreadystatechange=function(data){if(xhr.readyState==4){if(xhr.status==200){var params=JSON.parse(data.currentTarget.response);window.particlesJS(tag_id,params);if(callback)callback()}else{console.log('Error pJS - XMLHttpRequest status: '+xhr.status);console.log('Error pJS - File config not found')}}};xhr.send()}</script>
    <script> particlesJS('particles-js',{"particles":{"number":{"value":80,"density":{"enable":!0,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":!1,"anim":{"enable":!1,"speed":1,"opacity_min":0.1,"sync":!1}},"size":{"value":5,"random":!0,"anim":{"enable":!1,"speed":40,"size_min":0.1,"sync":!1}},"line_linked":{"enable":!0,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":!0,"speed":6,"direction":"none","random":!1,"straight":!1,"out_mode":"out","attract":{"enable":!1,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":!0,"mode":"repulse"},"onclick":{"enable":!0,"mode":"push"},"resize":!0},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":!0,"config_demo":{"hide_card":!1,"background_color":"#b61924","background_image":"","background_position":"50% 50%","background_repeat":"no-repeat","background_size":"cover"}})</script>
    <script>var count_particles,stats,update;stats=new Stats;stats.setMode(0);stats.domElement.style.position='absolute';stats.domElement.style.left='0px';stats.domElement.style.top='0px';document.body.appendChild(stats.domElement);count_particles=document.querySelector('.js-count-particles');update=function(){stats.begin();stats.end();if(window.pJSDom[0].pJS.particles&&window.pJSDom[0].pJS.particles.array){count_particles.innerText=window.pJSDom[0].pJS.particles.array.length}requestAnimationFrame(update)};requestAnimationFrame(update)</script>
</body>
</html>
