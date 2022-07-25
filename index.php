<?php

// Include Configuration File

require_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="js/checkout.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
        /*! CSS Used from: https://gws.genetech.us/templates/default/css/vendor.css?ver=6.4.2 */
        *,
        :after,
        :before {
            box-sizing: border-box;
        }

        section {
            display: block;
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important;
        }

        h2,
        h4,
        h5 {
            margin-bottom: .5rem;
            margin-top: 0;
        }

        p {
            margin-bottom: 1rem;
            margin-top: 0;
        }

        ul {
            margin-bottom: 1rem;
        }

        ul {
            margin-top: 0;
        }

        b {
            font-weight: bolder;
        }

        label {
            display: inline-block;
            margin-bottom: .5rem;
        }

        button {
            border-radius: 0;
        }

        button:focus:not(:focus-visible) {
            outline: 0;
        }

        button,
        input,
        select {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        select {
            word-wrap: normal;
        }

        [type=button],
        [type=submit],
        button {
            -webkit-appearance: button;
        }

        [type=button]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        h2,
        h4,
        h5 {
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: .5rem;
        }

        h2 {
            font-size: 2rem;
        }

        h4 {
            font-size: 1.5rem;
        }

        h5 {
            font-size: 1.25rem;
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
        }

        @media (min-width:576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-left: -15px;
            margin-right: -15px;
        }

        .col-md-6,
        .col-md-12,
        .col-sm-6 {
            padding-left: 15px;
            padding-right: 15px;
            position: relative;
            width: 100%;
        }

        @media (min-width:576px) {
            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width:768px) {
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .form-control {
            background-clip: padding-box;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            color: #495057;
            display: block;
            font-size: 1rem;
            font-weight: 400;
            height: calc(1.5em + .75rem + 2px);
            line-height: 1.5;
            padding: .375rem .75rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            width: 100%;
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control {
                transition: none;
            }
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0;
        }

        .form-control:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057;
        }

        .form-control:focus {
            background-color: #fff;
            border-color: #80bdff;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25);
            color: #495057;
            outline: 0;
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control:disabled {
            background-color: #e9ecef;
            opacity: 1;
        }

        .btn {
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem;
            color: #212529;
            display: inline-block;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            padding: .375rem .75rem;
            text-align: center;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
        }

        @media (prefers-reduced-motion:reduce) {
            .btn {
                transition: none;
            }
        }

        .btn:hover {
            color: #212529;
            text-decoration: none;
        }

        .btn:focus {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25);
            outline: 0;
        }

        .btn:disabled {
            opacity: .65;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-primary:focus,
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
            color: #fff;
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5);
        }

        .btn-primary:disabled {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:focus,
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
            color: #fff;
        }

        .btn-secondary:focus {
            box-shadow: 0 0 0 .2rem hsla(208, 6%, 54%, .5);
        }

        .btn-secondary:disabled {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }

        .close {
            color: #000;
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            opacity: .5;
            text-shadow: 0 1px 0 #fff;
        }

        .close:hover {
            color: #000;
            text-decoration: none;
        }

        button.close {
            background-color: transparent;
            border: 0;
            padding: 0;
        }

        .modal {
            display: none;
            height: 100%;
            left: 0;
            outline: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1050;
        }

        .modal-dialog {
            margin: .5rem;
            pointer-events: none;
            position: relative;
            width: auto;
        }

        .modal-content {
            background-clip: padding-box;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            display: flex;
            flex-direction: column;
            outline: 0;
            pointer-events: auto;
            position: relative;
            width: 100%;
        }

        .modal-header {
            align-items: flex-start;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px);
            display: flex;
            justify-content: space-between;
            padding: 1rem;
        }

        .modal-header .close {
            margin: -1rem -1rem -1rem auto;
            padding: 1rem;
        }

        .modal-title {
            line-height: 1.5;
            margin-bottom: 0;
        }

        .modal-body {
            flex: 1 1 auto;
            padding: 1rem;
            position: relative;
        }

        .modal-footer {
            align-items: center;
            border-bottom-left-radius: calc(.3rem - 1px);
            border-bottom-right-radius: calc(.3rem - 1px);
            border-top: 1px solid #dee2e6;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            padding: .75rem;
        }

        .modal-footer>* {
            margin: .25rem;
        }

        @media (min-width:576px) {
            .modal-dialog {
                margin: 1.75rem auto;
                max-width: 500px;
            }
        }

        .d-none {
            display: none !important;
        }

        .d-flex {
            display: flex !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .pb-1 {
            padding-bottom: .25rem !important;
        }

        .pb-2 {
            padding-bottom: .5rem !important;
        }

        @media print {

            *,
            :after,
            :before {
                box-shadow: none !important;
                text-shadow: none !important;
            }

            h2,
            p {
                orphans: 3;
                widows: 3;
            }

            h2 {
                page-break-after: avoid;
            }

            .container {
                min-width: 992px !important;
            }
        }

        .select2-container {
            box-sizing: border-box;
            display: inline-block;
            margin: 0;
            position: relative;
            vertical-align: middle;
        }

        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 28px;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            overflow: hidden;
            padding-left: 8px;
            padding-right: 20px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* .select2-hidden-accessible{height:1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;white-space:nowrap!important;width:1px!important;} */
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 4px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 28px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 26px;
            position: absolute;
            right: 1px;
            top: 1px;
            width: 20px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #888 transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0;
            height: 0;
            left: 50%;
            margin-left: -4px;
            margin-top: -2px;
            position: absolute;
            top: 50%;
            width: 0;
        }

        ::selection {
            background: #3d4e60;
            color: #fff;
        }

        ::-moz-selection {
            background: #3d4e60;
            color: #fff;
        }

        button:focus,
        input:focus {
            outline: none;
            text-decoration: none;
        }

        h2,
        h4,
        h5 {
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            -ms-font-smoothing: antialiased;
            -o-font-smoothing: antialiased;
            color: #283557;
            font-family: Nunito, sans-serif;
            font-weight: 500;
        }

        h2 {
            font-size: 36px;
            font-weight: 700;
        }

        @media (max-width:1200px) {
            h2 {
                font-size: 28px;
            }
        }

        h5 {
            font-size: 1.9em;
        }

        label,
        p {
            font-weight: 400;
        }

        p {
            color: #858b9a;
            font-size: 14px;
            line-height: normal;
            margin: 0 0 15px;
        }

        ul {
            list-style: none;
            margin: 0;
        }

        ul {
            padding: 0;
        }

        li {
            list-style: none;
            margin-bottom: 0;
            position: relative;
        }

        input[type=submit] {
            transition: all .2s ease-out;
            -webkit-transition: all .2s ease-out;
            -moz-transition: all .2s ease-out;
            -ms-transition: all .2s ease-out;
            -o-transition: all .2s ease-out;
        }

        .sec-head {
            text-align: center;
        }

        .app-btns {
            border: none;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            color: #fff;
            display: inline-block;
            font-size: 14px;
            font-weight: 800;
            line-height: 56px;
            padding: 0 35px;
            text-decoration: none;
            text-transform: uppercase;
        }

        @media (max-width:1200px) {
            .app-btns {
                font-size: 12px;
                line-height: 48px;
                padding: 0 28px;
            }
        }

        .app-btns:hover {
            color: #fff;
            text-decoration: none;
        }

        .app-btns.primary {
            background: #C53B27;
            border: 1px solid #C53B27;
        }

        .app-btns.primary:hover {
            background: #ffffff;
            border: 1px solid #C53B27;
            color: #C53B27;
        }

        .form-wrapper {
            display: block;
            padding: 40px;
        }

        @media (max-width:767px) {
            .form-wrapper {
                padding: 30px 25px;
            }
        }

        .form-elem {
            padding-bottom: 20px;
            position: relative;
        }

        .form-elem label {
            color: #283456;
            font-size: 14px;
            font-weight: 600;
            margin: 0;
        }

        .form-elem .select2 {
            width: 100% !important;
        }

        .form-elem .form-control {
            border: 1px solid #dee2ee;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            -ms-border-radius: 6px;
            -o-border-radius: 6px;
            font-size: 14px;
            height: 42px;
        }

        .form-elem .form-control:focus {
            box-shadow: none;
            outline: none;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #cbcfe1;
            border-radius: 6px;
            height: 42px;
            width: 100%;
        }

        .select2-container--default .select2-selection--single:focus {
            border: 1px solid #cbcfe1;
            outline: none;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #666e8e;
            font-size: 14px;
            line-height: 42px;
            padding-left: 18px;
            padding-right: 28px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
            right: 10px;
        }

        .inline-heading {
            display: block;
            margin-bottom: 15px;
            position: relative;
        }

        .inline-heading:before {
            border-top: 1px solid #e3e5e9;
            content: "";
            display: block;
            height: 1px;
            position: absolute;
            right: 0;
            top: 12px;
            width: 98%;
        }

        .inline-heading h4 {
            background: #fff;
            color: #282f38;
            display: inline-block;
            font-size: 16px;
            font-weight: 700;
            margin: 0;
            padding-right: 13px;
            position: relative;
            z-index: 2;
        }

        @media (max-width:767px) {
            .select2-container {
                width: 100% !important;
            }
        }

        .cm-box-holder {
            background: #fff;
            border: 1px solid #e0e3f1;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            -ms-border-radius: 6px;
            -o-border-radius: 6px;
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, .05);
            display: block;
            margin-top: 21px;
        }

        .cm-box-holder .form-wrapper {
            padding: 36px;
        }

        .cart-pages-wrapper {
            padding: 40px 0;
        }

        .cart-status-bar {
            display: block;
            margin: auto;
            max-width: 915px;
            padding: 50px 30px;
            position: relative;
            text-align: center;
        }

        .cart-status-bar .cart-status-rail {
            align-items: center;
            background: url(https://gws.genetech.us/templates/default/images/signup/cart-status-rail-bg.png) repeat-x;
            display: flex;
            flex-direction: row;
            height: 13px;
            justify-content: space-between;
            max-width: 100%;
            position: relative;
        }

        .cart-status-bar .cart-status-rail:before {
            background: url(https://gws.genetech.us/templates/default/images/signup/cart-status-start-node.png) no-repeat;
            content: "";
            display: block;
            height: 23px;
            left: -2px;
            position: absolute;
            top: -5px;
            width: 22px;
        }

        .cart-status-bar .cart-status-rail:after {
            background: url(https://gws.genetech.us/templates/default/images/signup/cart-status-end-node.png) no-repeat;
            content: "";
            display: block;
            height: 23px;
            position: absolute;
            right: -2px;
            top: -5px;
            width: 23px;
        }

        .cart-status-bar .cart-status-nodes {
            background: url(https://gws.genetech.us/templates/default/images/signup/cart-status-inner-nodes.png) no-repeat 50%;
            display: block;
            height: 36px;
            position: relative;
            width: 36px;
            z-index: 3;
        }

        .cart-status-bar .cart-status-nodes.end,
        .cart-status-bar .cart-status-nodes.start {
            background: none;
        }

        .cart-status-bar .cart-status-nodes.now {
            background: url(https://gws.genetech.us/templates/default/images/signup/cart-status-ends-bg.png) no-repeat 50%;
            top: -1px;
        }

        .cart-status-bar .cart-status-nodes.done {
            background: url(https://gws.genetech.us/templates/default/images/signup/cart-stats-done-first-node.png) no-repeat 50%;
            top: 0;
        }

        .cart-status-bar .cart-status-nodes.done.first-step {
            background: url(https://gws.genetech.us/templates/default/images/signup/cart-stats-done-first-node.png) no-repeat 50%;
            top: -1px;
        }

        .cart-status-bar .cart-status-nodes.first-step {
            left: -9px;
        }

        .cart-status-bar .cart-status-nodes.active .cart-status-label {
            color: #C53B27;
        }

        .cart-status-bar .cart-status-nodes .cart-status-label {
            color: #838899;
            display: block;
            font-size: 14px;
            left: -55px;
            line-height: 16px;
            position: relative;
            text-align: center;
            top: -20px;
            width: 140px;
        }

        @media (max-width:576px) {
            .cart-status-bar .cart-status-nodes .cart-status-label {
                align-items: center;
                display: flex;
                flex-direction: column;
                font-size: 12px;
                height: 25px;
                justify-content: center;
                left: -12px;
                line-height: 14px;
                top: -30px;
                width: 60px;
            }
        }

        .cart-status-bar .inner-rail {
            background: url(https://gws.genetech.us/templates/default/images/signup/cart-status-inner-rail-bg.png) repeat-x;
            bottom: 0;
            display: block;
            flex-grow: 1;
            height: 6px;
            left: 35px;
            margin: auto;
            position: absolute;
            top: -1px;
            width: 18%;
        }

        .cart-status-bar .inner-rail.step2 {
            width: 30%;
        }

        .cart-status-bar .inner-rail.step2.of3steps {
            width: 46%;
        }

        .config-product-section {
            display: flex;
            flex-direction: row;
            margin-top: 30px;
        }

        @media (max-width:767px) {
            .config-product-section {
                display: block;
            }
        }

        .config-product-section .cm-box-holder {
            margin: 0;
            width: 100%;
        }

        .config-product-section .summary-info {
            display: block;
            flex-shrink: 0;
            margin-left: 26px;
            width: 293px;
        }

        @media (max-width:767px) {
            .config-product-section .summary-info {
                margin-left: 0;
                margin-top: 20px;
                width: 100%;
            }
        }

        .config-product-section .summary-info .summary-holder {
            background: #f3f5f8;
            border: 1px solid #e0e3f1;
        }

        .config-product-section .summary-info .summary-holder,
        .config-product-section .summary-info .summary-holder .head {
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            -ms-border-radius: 6px;
            -o-border-radius: 6px;
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, .05);
        }

        .config-product-section .summary-info .summary-holder .head {
            background: #fff;
            padding: 20px 25px;
        }

        .config-product-section .summary-info .summary-holder .head h4 {
            font-size: 20px;
            font-weight: 700;
            margin: 0;
        }

        .config-product-section .summary-info .summary-holder .summery-cont {
            display: block;
            padding: 15px 25px;
        }

        .config-product-section .summary-info .summary-holder .summery-cont ul li {
            border-top: 1px solid #d3d7db;
            display: block;
            padding: 10px 0;
        }

        .config-product-section .summary-info .summary-holder .summery-cont ul li:first-child {
            border-top: none;
        }

        .config-product-section .summary-info .summary-holder .summery-cont ul li h5 {
            color: #282f38;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 0;
        }

        .config-product-section .summary-info .summary-holder .summery-cont ul li .summary-amount {
            color: #384060;
            font-size: 12px;
            font-weight: 900;
        }

        .config-product-section .summary-info .summary-holder .summery-cont ul li p {
            color: #384060;
            font-size: 14px;
            margin-bottom: 0;
        }

        .config-product-section .summary-info .summary-holder .summery-cont ul li p span {
            color: #838899;
            display: block;
            font-size: 12px;
        }

        .config-product-section .summary-info .summary-holder .summery-fees {
            background: #fff;
            display: block;
            padding: 15px 25px;
        }

        .config-product-section .summary-info .summary-holder .summery-fees ul li {
            display: block;
            padding: 2px 0;
        }

        .config-product-section .summary-info .summary-holder .summery-fees ul li .summary-amount {
            color: #384060;
            font-size: 12px;
            font-weight: 900;
        }

        .config-product-section .summary-info .summary-holder .summery-fees ul li p {
            color: #384060;
            font-size: 14px;
            margin-bottom: 0;
        }

        .config-product-section .summary-info .summary-holder .summery-bottom {
            background: #fff;
            display: block;
            padding: 15px 25px 25px;
            position: relative;
            text-align: center;
        }

        .config-product-section .summary-info .summary-holder .summery-bottom:before {
            background: #dde0e1;
            content: "";
            display: block;
            height: 1px;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            width: 81%;
        }

        .config-product-section .summary-info .summary-holder .summery-bottom p {
            color: #838899;
            font-size: 14px;
        }

        .config-product-section .summary-info .summary-holder .summery-bottom p span {
            color: #0b2c85;
            display: block;
            font-size: 24px;
            font-weight: 700;
        }

        .config-product-section .summary-info .summary-holder .summery-bottom .app-btns {
            padding: 0 50px;
        }

        /*! CSS Used fontfaces */
        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOOaBXso.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIMeaBXso.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofINeaB.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOOaBXso.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIMeaBXso.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofINeaB.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOOaBXso.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIMeaBXso.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofINeaB.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOOaBXso.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIMeaBXso.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofINeaB.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOOaBXso.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIMeaBXso.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofINeaB.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOOaBXso.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIMeaBXso.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/nunito/v24/XRXV3I6Li01BKofINeaB.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
</head>

<body>
    <section class="cart-pages-wrapper page-wrapper">
        <div class="container">
            <form action="http://localhost/stripe_payment/product-configuration.php" method="POST" id="submitForm" novalidate=""><input type="hidden" name="formId" value="configureProduct"><input type="hidden" name="product" value="1"><input type="hidden" name="couponCode" value="">
                <div class="config-product-section item-wrapper">
                    <div class="cm-box-holder">
                        <div class="form-wrapper pb-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-elem">
                                        <input type="hidden" id="hidden_value" value="<?php echo $itemPrice;?>" name="total_amount" />
                                        <label>Select Billing Cycle:</label>
                                        <select data-width="100%" class="form-control normalSelect2 paymentTerm cart-item select2-hidden-accessible" name="paymentterm" data-select2-id="select2-data-1-wetr" tabindex="-1" aria-hidden="true">
                                            <option selected="" value="12" data-price="<?php echo '$' . $itemPrice; ?>" data-term="1 Year" data-term-id="12" data-setupfee="0.00" data-saved="-" class="currency-option" data-select2-id="select2-data-3-zhzf"><?php echo '$' . $itemPrice; ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-heading">
                                <h4>Configure Product</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-elem">
                                        <label for="Domain Name">Domain Name</label>
                                        <input type="text" name="CT_12" value="" id="CT_12" class="form-control" data-parsley-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="inline-heading">
                                <h4>Product Addons</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-6" data-select2-id="select2-data-12-0mfy">
                                    <div class="form-elem" data-select2-id="select2-data-11-0zav">
                                        <label class="pb-1">Dedicated IP</label>
                                        <select name="addonSelect_3" id="select_price" class="form-control normalSelect2 cart-item addonItem select2-hidden-accessible" data-addon-id="3" data-select2-id="select2-data-4-r1ep" tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="selected" class="currency-option-addon" data-price="0" data-setupfee="0.00" data-term="1 Year" data-term-id="12" data-select2-id="select2-data-6-jst8">None</option>
                                            <option value="<?php echo $dedicated; ?>" class="currency-option-addon" data-price="50" data-setupfee="0" data-term="1 Year" data-term-id="12" data-select2-id="select2-data-15-k42w"><?php echo '$' . $dedicated; ?></option>
                                        </select></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-sm-6" data-select2-id="select2-data-18-g7pp">
                                    <div class="form-elem" data-select2-id="select2-data-17-myqq">
                                        <label class="pb-1">SSL</label>
                                        <select name="addonSelect_2" id="ssl_select" class="form-control normalSelect2 cart-item addonItem select2-hidden-accessible" data-addon-id="2" data-select2-id="select2-data-7-nzjg" tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="selected" class="currency-option-addon" data-price="0" data-setupfee="0" data-term="1 Year" data-term-id="12" data-select2-id="select2-data-9-erd3">None</option>
                                            <option value="<?php echo $ssl; ?>" class="currency-option-addon" data-price="20" data-setupfee="0.00" data-term="1 Year" data-term-id="12" data-select2-id="select2-data-19-8gpu"><?php echo '$' . $ssl; ?></option>
                                        </select></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            let dedicated_value = 0;
                            let ssl_value = 0;
                            let total_value = <?php echo $itemPrice; ?>;
                            $('#select_price').change(function() {
                                let total_value = <?php echo $itemPrice; ?>;
                                dedicated_value = parseInt(this.value)
                                total_value = parseInt(total_value)  + parseInt(ssl_value) + parseInt(dedicated_value)
                                $('#dedicated_amount').text(dedicated_value)
                                $('#total_amount').text(total_value)
                                $('#dueToday').text(total_value)
                                $("#hidden_value").val(total_value);
                            })
                            
                            $('#ssl_select').change(function() {
                                let total_value = <?php echo $itemPrice; ?>;
                                ssl_value = this.value
                                total_value = parseInt(total_value)  + parseInt(ssl_value) + parseInt(dedicated_value)
                                $('#ssl_amount').text(ssl_value)
                                $('#total_amount').text(total_value)
                                $('#dueToday').text(total_value)
                                $("#hidden_value").val(total_value);
                            })
                            
                        });
                    </script>
                    <div class="summary-info">
                        <div class="summary-holder">
                            <div class="head">
                                <h4>Order Summary</h4>
                            </div>
                            <div class="summery-cont">
                                <ul>
                                    <li class="d-flex justify-content-between align-items-center package">
                                        <h5>Pro</h5>
                                        <span class="summary-amount"><?php echo '$' . $itemPrice; ?></span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center addon" data-addon-id="3">
                                        <p><span>Dedicated IP</span></p>
                                        <span class="summary-amount" id="dedicated_amount">$0.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center addon" data-addon-id="2">
                                        <p><span>SSL</span></p>
                                        <span class="summary-amount" id="ssl_amount">$0.00</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="summery-fees">
                                <ul>
                                    <li class="d-flex justify-content-between align-items-center term">
                                        <p>1 Year:</p><span class="summary-amount termTotal" id="total_amount"><?php echo '$' . $itemPrice; ?></span>
                                    </li>
                                    <li class="d-none" id="termHolder"></li>
                                </ul>
                            </div>
                            <div class="summery-bottom">
                                <p>
                                    <span id="dueToday"><?php echo '$' . $itemPrice; ?></span>
                                    Total Due Today
                                </p>
                                <input type="submit" class="app-btns primary continue" id="continue-button" value="Continue">
                            </div>
                        </div>
                    </div>

                    <div class="modal" tabindex="-1" role="dialog" id="couponModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        Coupon Code </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <input placeholder="Coupon Code" type="text" id="couponCode" class="form-control" value="0">
                                    <input type="hidden" name="item-id">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="couponSubmitButton">
                                        Submit </button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><input type="hidden" name="sessionHash" value="d7f073c91d7eb4960f5018bb34ea9f3e">
            </form>
        </div>
    </section>
</body>


</html>