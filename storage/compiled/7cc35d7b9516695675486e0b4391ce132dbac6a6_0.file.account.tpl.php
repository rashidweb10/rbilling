<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:29:29
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c8191578c5_75095585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cc35d7b9516695675486e0b4391ce132dbac6a6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/account.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c8191578c5_75095585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41509468763b9c818cd5ff4_07453818', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202576143163b9c81912db00_84415461', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "head"} */
class Block_41509468763b9c818cd5ff4_07453818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_41509468763b9c818cd5ff4_07453818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        @charset "UTF-8";
        /*!
 * Bootstrap  v5.2.2 (https://getbootstrap.com/)
 * Copyright 2011-2022 The Bootstrap Authors
 * Copyright 2011-2022 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
        :root {
            --bs-blue: #1d3b53;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #e83e8c;
            --bs-red: #d6293e;
            --bs-orange: #fd7e14;
            --bs-yellow: #f7c32e;
            --bs-green: #0cbc87;
            --bs-teal: #20c997;
            --bs-cyan: #17a2b8;
            --bs-black: #000;
            --bs-white: #fff;
            --bs-gray: #747579;
            --bs-gray-dark: #0b0a12;
            --bs-gray-100: #f5f5f6;
            --bs-gray-200: #dfdfe3;
            --bs-gray-300: #c5c5c7;
            --bs-gray-400: #96969a;
            --bs-gray-500: #85878a;
            --bs-gray-600: #747579;
            --bs-gray-700: #5e5e5f;
            --bs-gray-800: #0b0a12;
            --bs-gray-900: #0b0a12;
            --bs-primary: #5143d9;
            --bs-white: #fff;
            --bs-secondary: #85878a;
            --bs-success: #0cbc87;
            --bs-info: #17a2b8;
            --bs-warning: #f7c32e;
            --bs-danger: #d6293e;
            --bs-light: #f5f5f6;
            --bs-dark: #0b0a12;
            --bs-orange: #fd7e14;
            --bs-mode: #fff;
            --bs-primary-rgb: 81, 67, 217;
            --bs-white-rgb: 255, 255, 255;
            --bs-secondary-rgb: 133, 135, 138;
            --bs-success-rgb: 12, 188, 135;
            --bs-info-rgb: 23, 162, 184;
            --bs-warning-rgb: 247, 195, 46;
            --bs-danger-rgb: 214, 41, 62;
            --bs-light-rgb: 245, 245, 246;
            --bs-dark-rgb: 11, 10, 18;
            --bs-orange-rgb: 253, 126, 20;
            --bs-mode-rgb: 255, 255, 255;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-body-color-rgb: 116, 117, 121;
            --bs-body-bg-rgb: 255, 255, 255;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --bs-body-font-family: DM Sans, sans-serif;
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #747579;
            --bs-body-bg: #fff;
            --bs-border-width: 1px;
            --bs-border-style: solid;
            --bs-border-color: var(--bs-gray-200);
            --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
            --bs-border-radius: 0.5rem;
            --bs-border-radius-sm: 0.4rem;
            --bs-border-radius-lg: 1rem;
            --bs-border-radius-xl: 1.5rem;
            --bs-border-radius-2xl: 2rem;
            --bs-border-radius-pill: 50rem;
            --bs-link-color: var(--bs-primary);
            --bs-link-hover-color: #4136ae;
            --bs-code-color: #d63384;
            --bs-highlight-bg: #fff3cd;
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        hr {
            margin: 1rem 0;
            color: #85878a;
            border: 0;
            border-top: 1px solid;
            opacity: 0.25;
        }

        h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            line-height: 1.25;
            color: var(--bs-gray-900);
        }

        h1, .h1 {
            font-size: calc(1.475rem + 2.7vw);
        }
        @media (min-width: 1200px) {
            h1, .h1 {
                font-size: 3.5rem;
            }
        }

        h2, .h2 {
            font-size: calc(1.425rem + 2.1vw);
        }
        @media (min-width: 1200px) {
            h2, .h2 {
                font-size: 3rem;
            }
        }

        h3, .h3 {
            font-size: calc(1.355rem + 1.26vw);
        }
        @media (min-width: 1200px) {
            h3, .h3 {
                font-size: 2.3rem;
            }
        }

        h4, .h4 {
            font-size: calc(1.3rem + 0.6vw);
        }
        @media (min-width: 1200px) {
            h4, .h4 {
                font-size: 1.75rem;
            }
        }

        h5, .h5 {
            font-size: calc(1.255rem + 0.06vw);
        }
        @media (min-width: 1200px) {
            h5, .h5 {
                font-size: 1.3rem;
            }
        }

        h6, .h6 {
            font-size: 1rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        abbr[title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        ol,
        ul {
            padding-left: 2rem;
        }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 700;
        }

        dd {
            margin-bottom: 0.5rem;
            margin-left: 0;
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b,
        strong {
            font-weight: bolder;
        }

        small, .small {
            font-size: 0.875em !important;
        }

        mark, .mark {
            padding: 0.1875em;
            background-color: var(--bs-highlight-bg);
        }

        sub,
        sup {
            position: relative;
            font-size: 0.75em;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        a {
            color: var(--bs-link-color);
            text-decoration: none;
        }
        a:hover {
            color: #0056b3;
            text-decoration: none;
        }
        a {
            -webkit-transition: all 0.3s ease-in-out;
            /* transition: all 0.3s ease-in-out; */
        }
        a {
            color: var(--bs-link-color);
            text-decoration: none;
        }
        a:hover {
            color: var(--bs-link-hover-color);
        }

        a:not([href]):not([class]), a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: var(--bs-font-monospace);
            font-size: 1em;
        }

        pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            font-size: 0.875em;
        }
        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
        }

        code {
            font-size: 0.875em;
            color: var(--bs-code-color);
            word-wrap: break-word;
        }
        a > code {
            color: inherit;
        }

        kbd {
            padding: 0.1875rem 0.375rem;
            font-size: 0.875em;
            color: var(--bs-body-bg);
            background-color: var(--bs-body-color);
            border-radius: 0.4rem;
        }
        kbd kbd {
            padding: 0;
            font-size: 1em;
        }

        figure {
            margin: 0 0 1rem;
        }

        img,
        svg {
            vertical-align: middle;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        caption {
            padding-top: 1rem;
            padding-bottom: 1rem;
            color: #6c757d;
            text-align: left;
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent;
        }

        thead,
        tbody,
        tfoot,
        tr,
        td,
        th {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }

        label {
            display: inline-block;
        }

        button {
            border-radius: 0;
        }

        button:focus:not(:focus-visible) {
            outline: 0;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        select {
            text-transform: none;
        }

        [role=button] {
            cursor: pointer;
        }

        select {
            word-wrap: normal;
        }
        select:disabled {
            opacity: 1;
        }

        [list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
            display: none !important;
        }

        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
        }
        button:not(:disabled),
        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled) {
            cursor: pointer;
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        textarea {
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            float: left;
            width: 100%;
            padding: 0;
            margin-bottom: 0.5rem;
            font-size: calc(1.275rem + 0.3vw);
            line-height: inherit;
        }
        @media (min-width: 1200px) {
            legend {
                font-size: 1.5rem;
            }
        }
        legend + * {
            clear: left;
        }

        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-year-field {
            padding: 0;
        }

        ::-webkit-inner-spin-button {
            height: auto;
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield;
        }

        /* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        ::file-selector-button {
            font: inherit;
            -webkit-appearance: button;
        }

        output {
            display: inline-block;
        }

        iframe {
            border: 0;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        progress {
            vertical-align: baseline;
        }

        [hidden] {
            display: none !important;
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 400;
        }

        .display-1 {
            font-size: calc(1.725rem + 5.7vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-1 {
                font-size: 6rem;
            }
        }

        .display-2 {
            font-size: calc(1.675rem + 5.1vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-2 {
                font-size: 5.5rem;
            }
        }

        .display-3 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-3 {
                font-size: 5rem;
            }
        }

        .display-4 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-4 {
                font-size: 4.5rem;
            }
        }

        .display-5 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-5 {
                font-size: 4rem;
            }
        }

        .display-6 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-6 {
                font-size: 3.5rem;
            }
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
        }

        .list-inline-item {
            display: inline-block;
        }
        .list-inline-item:not(:last-child) {
            margin-right: 0.5rem;
        }

        .initialism {
            font-size: 0.875em;
            text-transform: uppercase;
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        .blockquote > :last-child {
            margin-bottom: 0;
        }

        .blockquote-footer {
            margin-top: -1rem;
            margin-bottom: 1rem;
            font-size: 0.875em;
            color: #6c757d;
        }
        .blockquote-footer::before {
            content: "— ";
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid var(--bs-border-color);
            border-radius: 0.375rem;
            max-width: 100%;
            height: auto;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .figure-caption {
            font-size: 0.875em;
            color: #6c757d;
        }

        .container,
        .container-fluid,
        .container-xxl,
        .container-xl,
        .container-lg,
        .container-md,
        .container-sm {
            --bs-gutter-x: 1.875rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container-sm, .container {
                max-width: 96%;
            }
        }
        @media (min-width: 768px) {
            .container-md, .container-sm, .container {
                max-width: 94%;
            }
        }
        @media (min-width: 992px) {
            .container-lg, .container-md, .container-sm, .container {
                max-width: 94%;
            }
        }
        @media (min-width: 1200px) {
            .container-xl, .container-lg, .container-md, .container-sm, .container {
                max-width: 1140px;
            }
        }
        @media (min-width: 1400px) {
            .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
                max-width: 1200px;
            }
        }
        .row {
            --bs-gutter-x: 1.875rem;
            --bs-gutter-y: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-0.5 * var(--bs-gutter-x));
            margin-left: calc(-0.5 * var(--bs-gutter-x));
        }
        .row > * {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-top: var(--bs-gutter-y);
        }

        .col {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .row-cols-auto > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-1 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-2 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-3 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.3333333333%;
        }

        .row-cols-4 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-5 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-6 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.6666666667%;
        }

        .col-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333333%;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66666667%;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333333%;
        }

        .col-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 41.66666667%;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .col-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 58.33333333%;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66666667%;
        }

        .col-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 75%;
        }

        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 83.33333333%;
        }

        .col-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 91.66666667%;
        }

        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-1 {
            margin-left: 8.33333333%;
        }

        .offset-2 {
            margin-left: 16.66666667%;
        }

        .offset-3 {
            margin-left: 25%;
        }

        .offset-4 {
            margin-left: 33.33333333%;
        }

        .offset-5 {
            margin-left: 41.66666667%;
        }

        .offset-6 {
            margin-left: 50%;
        }

        .offset-7 {
            margin-left: 58.33333333%;
        }

        .offset-8 {
            margin-left: 66.66666667%;
        }

        .offset-9 {
            margin-left: 75%;
        }

        .offset-10 {
            margin-left: 83.33333333%;
        }

        .offset-11 {
            margin-left: 91.66666667%;
        }

        .g-0,
        .gx-0 {
            --bs-gutter-x: 0;
        }

        .g-0,
        .gy-0 {
            --bs-gutter-y: 0;
        }

        .g-1,
        .gx-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-1,
        .gy-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-2,
        .gx-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-2,
        .gy-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-3,
        .gx-3 {
            --bs-gutter-x: 1rem;
        }

        .g-3,
        .gy-3 {
            --bs-gutter-y: 1rem;
        }

        .g-4,
        .gx-4 {
            --bs-gutter-x: 1.6rem;
        }

        .g-4,
        .gy-4 {
            --bs-gutter-y: 1.6rem;
        }

        .g-5,
        .gx-5 {
            --bs-gutter-x: 3rem;
        }

        .g-5,
        .gy-5 {
            --bs-gutter-y: 3rem;
        }

        .g-6,
        .gx-6 {
            --bs-gutter-x: 3.5rem;
        }

        .g-6,
        .gy-6 {
            --bs-gutter-y: 3.5rem;
        }

        .g-7,
        .gx-7 {
            --bs-gutter-x: 4rem;
        }

        .g-7,
        .gy-7 {
            --bs-gutter-y: 4rem;
        }

        .g-8,
        .gx-8 {
            --bs-gutter-x: 8rem;
        }

        .g-8,
        .gy-8 {
            --bs-gutter-y: 8rem;
        }

        .g-9,
        .gx-9 {
            --bs-gutter-x: 11rem;
        }

        .g-9,
        .gy-9 {
            --bs-gutter-y: 11rem;
        }

        @media (min-width: 576px) {
            .col-sm {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }
            .row-cols-sm-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .row-cols-sm-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .row-cols-sm-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .row-cols-sm-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }
            .row-cols-sm-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .row-cols-sm-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }
            .row-cols-sm-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }
            .col-sm-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .col-sm-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }
            .col-sm-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }
            .col-sm-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .col-sm-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }
            .col-sm-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }
            .col-sm-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .col-sm-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }
            .col-sm-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }
            .col-sm-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }
            .col-sm-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }
            .col-sm-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }
            .col-sm-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .offset-sm-0 {
                margin-left: 0;
            }
            .offset-sm-1 {
                margin-left: 8.33333333%;
            }
            .offset-sm-2 {
                margin-left: 16.66666667%;
            }
            .offset-sm-3 {
                margin-left: 25%;
            }
            .offset-sm-4 {
                margin-left: 33.33333333%;
            }
            .offset-sm-5 {
                margin-left: 41.66666667%;
            }
            .offset-sm-6 {
                margin-left: 50%;
            }
            .offset-sm-7 {
                margin-left: 58.33333333%;
            }
            .offset-sm-8 {
                margin-left: 66.66666667%;
            }
            .offset-sm-9 {
                margin-left: 75%;
            }
            .offset-sm-10 {
                margin-left: 83.33333333%;
            }
            .offset-sm-11 {
                margin-left: 91.66666667%;
            }
            .g-sm-0,
            .gx-sm-0 {
                --bs-gutter-x: 0;
            }
            .g-sm-0,
            .gy-sm-0 {
                --bs-gutter-y: 0;
            }
            .g-sm-1,
            .gx-sm-1 {
                --bs-gutter-x: 0.25rem;
            }
            .g-sm-1,
            .gy-sm-1 {
                --bs-gutter-y: 0.25rem;
            }
            .g-sm-2,
            .gx-sm-2 {
                --bs-gutter-x: 0.5rem;
            }
            .g-sm-2,
            .gy-sm-2 {
                --bs-gutter-y: 0.5rem;
            }
            .g-sm-3,
            .gx-sm-3 {
                --bs-gutter-x: 1rem;
            }
            .g-sm-3,
            .gy-sm-3 {
                --bs-gutter-y: 1rem;
            }
            .g-sm-4,
            .gx-sm-4 {
                --bs-gutter-x: 1.6rem;
            }
            .g-sm-4,
            .gy-sm-4 {
                --bs-gutter-y: 1.6rem;
            }
            .g-sm-5,
            .gx-sm-5 {
                --bs-gutter-x: 3rem;
            }
            .g-sm-5,
            .gy-sm-5 {
                --bs-gutter-y: 3rem;
            }
            .g-sm-6,
            .gx-sm-6 {
                --bs-gutter-x: 3.5rem;
            }
            .g-sm-6,
            .gy-sm-6 {
                --bs-gutter-y: 3.5rem;
            }
            .g-sm-7,
            .gx-sm-7 {
                --bs-gutter-x: 4rem;
            }
            .g-sm-7,
            .gy-sm-7 {
                --bs-gutter-y: 4rem;
            }
            .g-sm-8,
            .gx-sm-8 {
                --bs-gutter-x: 8rem;
            }
            .g-sm-8,
            .gy-sm-8 {
                --bs-gutter-y: 8rem;
            }
            .g-sm-9,
            .gx-sm-9 {
                --bs-gutter-x: 11rem;
            }
            .g-sm-9,
            .gy-sm-9 {
                --bs-gutter-y: 11rem;
            }
        }
        @media (min-width: 768px) {
            .col-md {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }
            .row-cols-md-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .row-cols-md-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .row-cols-md-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .row-cols-md-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }
            .row-cols-md-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .row-cols-md-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }
            .row-cols-md-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }
            .col-md-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .col-md-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }
            .col-md-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }
            .col-md-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .col-md-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }
            .col-md-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }
            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .col-md-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }
            .col-md-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }
            .col-md-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }
            .col-md-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }
            .col-md-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }
            .col-md-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .offset-md-0 {
                margin-left: 0;
            }
            .offset-md-1 {
                margin-left: 8.33333333%;
            }
            .offset-md-2 {
                margin-left: 16.66666667%;
            }
            .offset-md-3 {
                margin-left: 25%;
            }
            .offset-md-4 {
                margin-left: 33.33333333%;
            }
            .offset-md-5 {
                margin-left: 41.66666667%;
            }
            .offset-md-6 {
                margin-left: 50%;
            }
            .offset-md-7 {
                margin-left: 58.33333333%;
            }
            .offset-md-8 {
                margin-left: 66.66666667%;
            }
            .offset-md-9 {
                margin-left: 75%;
            }
            .offset-md-10 {
                margin-left: 83.33333333%;
            }
            .offset-md-11 {
                margin-left: 91.66666667%;
            }
            .g-md-0,
            .gx-md-0 {
                --bs-gutter-x: 0;
            }
            .g-md-0,
            .gy-md-0 {
                --bs-gutter-y: 0;
            }
            .g-md-1,
            .gx-md-1 {
                --bs-gutter-x: 0.25rem;
            }
            .g-md-1,
            .gy-md-1 {
                --bs-gutter-y: 0.25rem;
            }
            .g-md-2,
            .gx-md-2 {
                --bs-gutter-x: 0.5rem;
            }
            .g-md-2,
            .gy-md-2 {
                --bs-gutter-y: 0.5rem;
            }
            .g-md-3,
            .gx-md-3 {
                --bs-gutter-x: 1rem;
            }
            .g-md-3,
            .gy-md-3 {
                --bs-gutter-y: 1rem;
            }
            .g-md-4,
            .gx-md-4 {
                --bs-gutter-x: 1.6rem;
            }
            .g-md-4,
            .gy-md-4 {
                --bs-gutter-y: 1.6rem;
            }
            .g-md-5,
            .gx-md-5 {
                --bs-gutter-x: 3rem;
            }
            .g-md-5,
            .gy-md-5 {
                --bs-gutter-y: 3rem;
            }
            .g-md-6,
            .gx-md-6 {
                --bs-gutter-x: 3.5rem;
            }
            .g-md-6,
            .gy-md-6 {
                --bs-gutter-y: 3.5rem;
            }
            .g-md-7,
            .gx-md-7 {
                --bs-gutter-x: 4rem;
            }
            .g-md-7,
            .gy-md-7 {
                --bs-gutter-y: 4rem;
            }
            .g-md-8,
            .gx-md-8 {
                --bs-gutter-x: 8rem;
            }
            .g-md-8,
            .gy-md-8 {
                --bs-gutter-y: 8rem;
            }
            .g-md-9,
            .gx-md-9 {
                --bs-gutter-x: 11rem;
            }
            .g-md-9,
            .gy-md-9 {
                --bs-gutter-y: 11rem;
            }
        }
        @media (min-width: 992px) {
            .col-lg {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }
            .row-cols-lg-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .row-cols-lg-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .row-cols-lg-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .row-cols-lg-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }
            .row-cols-lg-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .row-cols-lg-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }
            .row-cols-lg-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }
            .col-lg-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .col-lg-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }
            .col-lg-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }
            .col-lg-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .col-lg-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }
            .col-lg-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }
            .col-lg-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .col-lg-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }
            .col-lg-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }
            .col-lg-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }
            .col-lg-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }
            .col-lg-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }
            .col-lg-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .offset-lg-0 {
                margin-left: 0;
            }
            .offset-lg-1 {
                margin-left: 8.33333333%;
            }
            .offset-lg-2 {
                margin-left: 16.66666667%;
            }
            .offset-lg-3 {
                margin-left: 25%;
            }
            .offset-lg-4 {
                margin-left: 33.33333333%;
            }
            .offset-lg-5 {
                margin-left: 41.66666667%;
            }
            .offset-lg-6 {
                margin-left: 50%;
            }
            .offset-lg-7 {
                margin-left: 58.33333333%;
            }
            .offset-lg-8 {
                margin-left: 66.66666667%;
            }
            .offset-lg-9 {
                margin-left: 75%;
            }
            .offset-lg-10 {
                margin-left: 83.33333333%;
            }
            .offset-lg-11 {
                margin-left: 91.66666667%;
            }
            .g-lg-0,
            .gx-lg-0 {
                --bs-gutter-x: 0;
            }
            .g-lg-0,
            .gy-lg-0 {
                --bs-gutter-y: 0;
            }
            .g-lg-1,
            .gx-lg-1 {
                --bs-gutter-x: 0.25rem;
            }
            .g-lg-1,
            .gy-lg-1 {
                --bs-gutter-y: 0.25rem;
            }
            .g-lg-2,
            .gx-lg-2 {
                --bs-gutter-x: 0.5rem;
            }
            .g-lg-2,
            .gy-lg-2 {
                --bs-gutter-y: 0.5rem;
            }
            .g-lg-3,
            .gx-lg-3 {
                --bs-gutter-x: 1rem;
            }
            .g-lg-3,
            .gy-lg-3 {
                --bs-gutter-y: 1rem;
            }
            .g-lg-4,
            .gx-lg-4 {
                --bs-gutter-x: 1.6rem;
            }
            .g-lg-4,
            .gy-lg-4 {
                --bs-gutter-y: 1.6rem;
            }
            .g-lg-5,
            .gx-lg-5 {
                --bs-gutter-x: 3rem;
            }
            .g-lg-5,
            .gy-lg-5 {
                --bs-gutter-y: 3rem;
            }
            .g-lg-6,
            .gx-lg-6 {
                --bs-gutter-x: 3.5rem;
            }
            .g-lg-6,
            .gy-lg-6 {
                --bs-gutter-y: 3.5rem;
            }
            .g-lg-7,
            .gx-lg-7 {
                --bs-gutter-x: 4rem;
            }
            .g-lg-7,
            .gy-lg-7 {
                --bs-gutter-y: 4rem;
            }
            .g-lg-8,
            .gx-lg-8 {
                --bs-gutter-x: 8rem;
            }
            .g-lg-8,
            .gy-lg-8 {
                --bs-gutter-y: 8rem;
            }
            .g-lg-9,
            .gx-lg-9 {
                --bs-gutter-x: 11rem;
            }
            .g-lg-9,
            .gy-lg-9 {
                --bs-gutter-y: 11rem;
            }
        }
        @media (min-width: 1200px) {
            .col-xl {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }
            .row-cols-xl-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .row-cols-xl-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .row-cols-xl-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .row-cols-xl-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }
            .row-cols-xl-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .row-cols-xl-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }
            .row-cols-xl-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }
            .col-xl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .col-xl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }
            .col-xl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }
            .col-xl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .col-xl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }
            .col-xl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }
            .col-xl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .col-xl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }
            .col-xl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }
            .col-xl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }
            .col-xl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }
            .col-xl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }
            .col-xl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .offset-xl-0 {
                margin-left: 0;
            }
            .offset-xl-1 {
                margin-left: 8.33333333%;
            }
            .offset-xl-2 {
                margin-left: 16.66666667%;
            }
            .offset-xl-3 {
                margin-left: 25%;
            }
            .offset-xl-4 {
                margin-left: 33.33333333%;
            }
            .offset-xl-5 {
                margin-left: 41.66666667%;
            }
            .offset-xl-6 {
                margin-left: 50%;
            }
            .offset-xl-7 {
                margin-left: 58.33333333%;
            }
            .offset-xl-8 {
                margin-left: 66.66666667%;
            }
            .offset-xl-9 {
                margin-left: 75%;
            }
            .offset-xl-10 {
                margin-left: 83.33333333%;
            }
            .offset-xl-11 {
                margin-left: 91.66666667%;
            }
            .g-xl-0,
            .gx-xl-0 {
                --bs-gutter-x: 0;
            }
            .g-xl-0,
            .gy-xl-0 {
                --bs-gutter-y: 0;
            }
            .g-xl-1,
            .gx-xl-1 {
                --bs-gutter-x: 0.25rem;
            }
            .g-xl-1,
            .gy-xl-1 {
                --bs-gutter-y: 0.25rem;
            }
            .g-xl-2,
            .gx-xl-2 {
                --bs-gutter-x: 0.5rem;
            }
            .g-xl-2,
            .gy-xl-2 {
                --bs-gutter-y: 0.5rem;
            }
            .g-xl-3,
            .gx-xl-3 {
                --bs-gutter-x: 1rem;
            }
            .g-xl-3,
            .gy-xl-3 {
                --bs-gutter-y: 1rem;
            }
            .g-xl-4,
            .gx-xl-4 {
                --bs-gutter-x: 1.6rem;
            }
            .g-xl-4,
            .gy-xl-4 {
                --bs-gutter-y: 1.6rem;
            }
            .g-xl-5,
            .gx-xl-5 {
                --bs-gutter-x: 3rem;
            }
            .g-xl-5,
            .gy-xl-5 {
                --bs-gutter-y: 3rem;
            }
            .g-xl-6,
            .gx-xl-6 {
                --bs-gutter-x: 3.5rem;
            }
            .g-xl-6,
            .gy-xl-6 {
                --bs-gutter-y: 3.5rem;
            }
            .g-xl-7,
            .gx-xl-7 {
                --bs-gutter-x: 4rem;
            }
            .g-xl-7,
            .gy-xl-7 {
                --bs-gutter-y: 4rem;
            }
            .g-xl-8,
            .gx-xl-8 {
                --bs-gutter-x: 8rem;
            }
            .g-xl-8,
            .gy-xl-8 {
                --bs-gutter-y: 8rem;
            }
            .g-xl-9,
            .gx-xl-9 {
                --bs-gutter-x: 11rem;
            }
            .g-xl-9,
            .gy-xl-9 {
                --bs-gutter-y: 11rem;
            }
        }
        @media (min-width: 1400px) {
            .col-xxl {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }
            .row-cols-xxl-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .row-cols-xxl-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .row-cols-xxl-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .row-cols-xxl-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }
            .row-cols-xxl-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .row-cols-xxl-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }
            .row-cols-xxl-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }
            .col-xxl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }
            .col-xxl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }
            .col-xxl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }
            .col-xxl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }
            .col-xxl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }
            .col-xxl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }
            .col-xxl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }
            .col-xxl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }
            .col-xxl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }
            .col-xxl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }
            .col-xxl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }
            .col-xxl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }
            .col-xxl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }
            .offset-xxl-0 {
                margin-left: 0;
            }
            .offset-xxl-1 {
                margin-left: 8.33333333%;
            }
            .offset-xxl-2 {
                margin-left: 16.66666667%;
            }
            .offset-xxl-3 {
                margin-left: 25%;
            }
            .offset-xxl-4 {
                margin-left: 33.33333333%;
            }
            .offset-xxl-5 {
                margin-left: 41.66666667%;
            }
            .offset-xxl-6 {
                margin-left: 50%;
            }
            .offset-xxl-7 {
                margin-left: 58.33333333%;
            }
            .offset-xxl-8 {
                margin-left: 66.66666667%;
            }
            .offset-xxl-9 {
                margin-left: 75%;
            }
            .offset-xxl-10 {
                margin-left: 83.33333333%;
            }
            .offset-xxl-11 {
                margin-left: 91.66666667%;
            }
            .g-xxl-0,
            .gx-xxl-0 {
                --bs-gutter-x: 0;
            }
            .g-xxl-0,
            .gy-xxl-0 {
                --bs-gutter-y: 0;
            }
            .g-xxl-1,
            .gx-xxl-1 {
                --bs-gutter-x: 0.25rem;
            }
            .g-xxl-1,
            .gy-xxl-1 {
                --bs-gutter-y: 0.25rem;
            }
            .g-xxl-2,
            .gx-xxl-2 {
                --bs-gutter-x: 0.5rem;
            }
            .g-xxl-2,
            .gy-xxl-2 {
                --bs-gutter-y: 0.5rem;
            }
            .g-xxl-3,
            .gx-xxl-3 {
                --bs-gutter-x: 1rem;
            }
            .g-xxl-3,
            .gy-xxl-3 {
                --bs-gutter-y: 1rem;
            }
            .g-xxl-4,
            .gx-xxl-4 {
                --bs-gutter-x: 1.6rem;
            }
            .g-xxl-4,
            .gy-xxl-4 {
                --bs-gutter-y: 1.6rem;
            }
            .g-xxl-5,
            .gx-xxl-5 {
                --bs-gutter-x: 3rem;
            }
            .g-xxl-5,
            .gy-xxl-5 {
                --bs-gutter-y: 3rem;
            }
            .g-xxl-6,
            .gx-xxl-6 {
                --bs-gutter-x: 3.5rem;
            }
            .g-xxl-6,
            .gy-xxl-6 {
                --bs-gutter-y: 3.5rem;
            }
            .g-xxl-7,
            .gx-xxl-7 {
                --bs-gutter-x: 4rem;
            }
            .g-xxl-7,
            .gy-xxl-7 {
                --bs-gutter-y: 4rem;
            }
            .g-xxl-8,
            .gx-xxl-8 {
                --bs-gutter-x: 8rem;
            }
            .g-xxl-8,
            .gy-xxl-8 {
                --bs-gutter-y: 8rem;
            }
            .g-xxl-9,
            .gx-xxl-9 {
                --bs-gutter-x: 11rem;
            }
            .g-xxl-9,
            .gy-xxl-9 {
                --bs-gutter-y: 11rem;
            }
        }
        .table {
            --bs-table-color: var(--bs-body-color);
            --bs-table-bg: transparent;
            --bs-table-border-color: var(--bs-border-color);
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: var(--bs-body-color);
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: var(--bs-body-color);
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: var(--bs-body-color);
            --bs-table-hover-bg: rgba(11, 10, 18, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: var(--bs-table-color);
            vertical-align: top;
            border-color: var(--bs-table-border-color);
        }
        .table > :not(caption) > * > * {
            padding: 1rem 0.5rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }
        .table > tbody {
            vertical-align: inherit;
        }
        .table > thead {
            vertical-align: bottom;
        }

        .table-group-divider {
            border-top: 2px solid var(--bs-gray-500);
        }

        .caption-top {
            caption-side: top;
        }

        .table-sm > :not(caption) > * > * {
            padding: 0.25rem 0.25rem;
        }

        .table-bordered > :not(caption) > * {
            border-width: 1px 0;
        }
        .table-bordered > :not(caption) > * > * {
            border-width: 0 1px;
        }

        .table-borderless > :not(caption) > * > * {
            border-bottom-width: 0;
        }
        .table-borderless > :not(:first-child) {
            border-top-width: 0;
        }

        .table-striped > tbody > tr:nth-of-type(odd) > * {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
        }

        .table-striped-columns > :not(caption) > tr > :nth-child(even) {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
        }

        .table-active {
            --bs-table-accent-bg: var(--bs-table-active-bg);
            color: var(--bs-table-active-color);
        }

        .table-hover > tbody > tr:hover > * {
            --bs-table-accent-bg: var(--bs-table-hover-bg);
            color: var(--bs-table-hover-color);
        }

        .table-primary {
            --bs-table-color: #000;
            --bs-table-bg: #cfe2ff;
            --bs-table-border-color: #bacbe6;
            --bs-table-striped-bg: #c5d7f2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bacbe6;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfd1ec;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }

        .table-secondary {
            --bs-table-color: #000;
            --bs-table-bg: #e2e3e5;
            --bs-table-border-color: #cbccce;
            --bs-table-striped-bg: #d7d8da;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #cbccce;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #d1d2d4;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }

        .table-success {
            --bs-table-color: #000;
            --bs-table-bg: #d1e7dd;
            --bs-table-border-color: #bcd0c7;
            --bs-table-striped-bg: #c7dbd2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bcd0c7;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #c1d6cc;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }

        .table-info {
            --bs-table-color: #000;
            --bs-table-bg: #cff4fc;
            --bs-table-border-color: #badce3;
            --bs-table-striped-bg: #c5e8ef;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #badce3;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfe2e9;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }

        .table-warning {
            --bs-table-color: #000;
            --bs-table-bg: #fff3cd;
            --bs-table-border-color: #e6dbb9;
            --bs-table-striped-bg: #f2e7c3;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e6dbb9;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #ece1be;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }

        .table-danger {
            --bs-table-color: #000;
            --bs-table-bg: #f8d7da;
            --bs-table-border-color: #dfc2c4;
            --bs-table-striped-bg: #eccccf;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfc2c4;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5c7ca;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }

        .table-light {
            --bs-table-color: #000;
            --bs-table-bg: #f8f9fa;
            --bs-table-border-color: #dfe0e1;
            --bs-table-striped-bg: #ecedee;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfe0e1;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5e6e7;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }

        .table-dark {
            --bs-table-color: #fff;
            --bs-table-bg: #212529;
            --bs-table-border-color: #373b3e;
            --bs-table-striped-bg: #2c3034;
            --bs-table-striped-color: #fff;
            --bs-table-active-bg: #373b3e;
            --bs-table-active-color: #fff;
            --bs-table-hover-bg: #323539;
            --bs-table-hover-color: #fff;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        @media (max-width: 767.98px) {
            .table-responsive-md {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        @media (max-width: 991.98px) {
            .table-responsive-lg {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        @media (max-width: 1399.98px) {
            .table-responsive-xxl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 400;
            color: var(--bs-gray-500);
        }

        .col-form-label {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-gray-500);
        }

        .col-form-label-lg {
            padding-top: calc(0.8rem + 1px);
            padding-bottom: calc(0.8rem + 1px);
            font-size: 1rem;
        }

        .col-form-label-sm {
            padding-top: calc(0.4rem + 1px);
            padding-bottom: calc(0.4rem + 1px);
            font-size: 0.8125rem;
        }

        .form-text {
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #6c757d;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-gray-900);
            background-color: var(--bs-body-bg);
            background-clip: padding-box;
            border: 1px solid var(--bs-gray-300);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.5rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-control {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-control[type=file] {
            overflow: hidden;
        }
        .form-control[type=file]:not(:disabled):not([readonly]) {
            cursor: pointer;
        }
        .form-control:focus {
            color: var(--bs-gray-900);
            background-color: var(--bs-body-bg);
            border-color: rgba(var(--bs-primary-rgb), 0.7);
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
            box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
        }
        .form-control::-webkit-date-and-time-value {
            height: 1.5em;
        }
        .form-control::-webkit-input-placeholder {
            color: var(--bs-gray-400);
            opacity: 1;
        }
        .form-control::-moz-placeholder {
            color: var(--bs-gray-400);
            opacity: 1;
        }
        .form-control:-ms-input-placeholder {
            color: var(--bs-gray-400);
            opacity: 1;
        }
        .form-control::-ms-input-placeholder {
            color: var(--bs-gray-400);
            opacity: 1;
        }
        .form-control::placeholder {
            color: var(--bs-gray-400);
            opacity: 1;
        }
        .form-control:disabled {
            background-color: var(--bs-gray-200);
            border-color: #ced4da;
            opacity: 1;
        }
        .form-control::file-selector-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-control::file-selector-button {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #dde0e3;
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.5rem 0;
            margin-bottom: 0;
            line-height: 1.5;
            color: #212529;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
        }
        .form-control-plaintext:focus {
            outline: 0;
        }
        .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0;
        }

        .form-control-sm {
            min-height: calc(1.25em + 0.8rem + 2px);
            padding: 0.4rem 0.8rem;
            font-size: 0.8125rem;
            border-radius: 0.4rem;
        }
        .form-control-sm::file-selector-button {
            padding: 0.4rem 0.8rem;
            margin: -0.4rem -0.8rem;
            -webkit-margin-end: 0.8rem;
            margin-inline-end: 0.8rem;
        }

        .form-control-lg {
            min-height: calc(1.25em + 1.6rem + 2px);
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            border-radius: 1rem;
        }
        .form-control-lg::file-selector-button {
            padding: 0.8rem 1.5rem;
            margin: -0.8rem -1.5rem;
            -webkit-margin-end: 1.5rem;
            margin-inline-end: 1.5rem;
        }

        textarea.form-control {
            min-height: calc(1.5em + 1rem + 2px);
        }
        textarea.form-control-sm {
            min-height: calc(1.25em + 0.8rem + 2px);
        }
        textarea.form-control-lg {
            min-height: calc(1.25em + 1.6rem + 2px);
        }

        .form-control-color {
            width: 3rem;
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem;
        }
        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer;
        }
        .form-control-color::-moz-color-swatch {
            border: 0 !important;
            border-radius: 0.5rem;
        }
        .form-control-color::-webkit-color-swatch {
            border-radius: 0.5rem;
        }
        .form-control-color.form-control-sm {
            height: calc(1.25em + 0.8rem + 2px);
        }
        .form-control-color.form-control-lg {
            height: calc(1.25em + 1.6rem + 2px);
        }

        .form-select {
            display: block;
            width: 100%;
            padding: 0.5rem 2.25rem 0.5rem 1rem;
            -moz-padding-start: calc(1rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-gray-900);
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23747579' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: 0.5rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-select {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-select:focus {
            border-color: rgba(var(--bs-primary-rgb), 0.7);
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
            box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
        }
        .form-select[multiple], .form-select[size]:not([size="1"]) {
            padding-right: 1rem;
            background-image: none;
        }
        .form-select:disabled {
            background-color: #e9ecef;
            border-color: #ced4da;
        }
        .form-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 var(--bs-gray-900);
        }

        .form-select-sm {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            font-size: 0.875rem;
            border-radius: 0.25rem;
        }

        .form-select-lg {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            font-size: 1.25rem;
            border-radius: 0.5rem;
        }

        .form-check {
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5em;
            margin-bottom: 0.125rem;
        }
        .form-check .form-check-input {
            float: left;
            margin-left: -1.5em;
        }

        .form-check-reverse {
            padding-right: 1.5em;
            padding-left: 0;
            text-align: right;
        }
        .form-check-reverse .form-check-input {
            float: right;
            margin-right: -1.5em;
            margin-left: 0;
        }

        .form-check-input {
            width: 1em;
            height: 1em;
            margin-top: 0.25em;
            vertical-align: top;
            background-color: var(--bs-gray-200);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid var(--bs-gray-200);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            print-color-adjust: exact;
        }
        .form-check-input[type=checkbox] {
            border-radius: 0.25em;
        }
        .form-check-input[type=radio] {
            border-radius: 50%;
        }
        .form-check-input:active {
            -webkit-filter: brightness(90%);
            filter: brightness(90%);
        }
        .form-check-input:focus {
            border-color: rgba(var(--bs-primary-rgb), 0.7);
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
            box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
        }
        .form-check-input:checked {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }
        .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
        }
        .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
        }
        .form-check-input[type=checkbox]:indeterminate {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
        }
        .form-check-input:disabled {
            pointer-events: none;
            -webkit-filter: none;
            filter: none;
            opacity: 0.5;
        }
        .form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
            cursor: default;
            opacity: 0.5;
        }

        .form-switch {
            padding-left: 0;
        }
        .form-switch .form-check-input {
            width: 2em;
            margin-left: 0;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
            background-position: left center;
            border-radius: 2em;
            -webkit-transition: background-position 0.15s ease-in-out;
            transition: background-position 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-switch .form-check-input {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2385878a'/%3e%3c/svg%3e");
        }
        .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
        }
        .form-switch.form-check-reverse {
            padding-right: 0;
            padding-left: 0;
        }
        .form-switch.form-check-reverse .form-check-input {
            margin-right: 0;
            margin-left: 0;
        }

        .form-check-inline {
            display: inline-block;
            margin-right: 1rem;
        }

        .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }
        .btn-check[disabled] + .btn, .btn-check:disabled + .btn {
            pointer-events: none;
            -webkit-filter: none;
            filter: none;
            opacity: 0.65;
        }

        .form-range {
            width: 100%;
            height: 1.5rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .form-range:focus {
            outline: 0;
        }
        .form-range:focus::-webkit-slider-thumb {
            -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0 rgba(var(--bs-primary), 0.25);
            box-shadow: 0 0 0 1px #fff, 0 0 0 0 rgba(var(--bs-primary), 0.25);
        }
        .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0 rgba(var(--bs-primary), 0.25);
        }
        .form-range::-moz-focus-outer {
            border: 0;
        }
        .form-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: var(--bs-primary);
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-range::-webkit-slider-thumb:active {
            background-color: #b6d4fe;
        }
        .form-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
        }
        .form-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: var(--bs-primary);
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none;
            }
        }
        .form-range::-moz-range-thumb:active {
            background-color: #b6d4fe;
        }
        .form-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
        }
        .form-range:disabled {
            pointer-events: none;
        }
        .form-range:disabled::-webkit-slider-thumb {
            background-color: #85878a;
        }
        .form-range:disabled::-moz-range-thumb {
            background-color: #85878a;
        }

        .form-floating {
            position: relative;
        }
        .form-floating > .form-control,
        .form-floating > .form-control-plaintext,
        .form-floating > .form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }
        .form-floating > label {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 1rem 0.75rem;
            overflow: hidden;
            text-align: start;
            text-overflow: ellipsis;
            white-space: nowrap;
            pointer-events: none;
            border: 1px solid transparent;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-floating > label {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-floating > .form-control,
        .form-floating > .form-control-plaintext {
            padding: 1rem 0.75rem;
        }
        .form-floating > .form-control::-webkit-input-placeholder, .form-floating > .form-control-plaintext::-webkit-input-placeholder {
            color: transparent;
        }
        .form-floating > .form-control::-moz-placeholder, .form-floating > .form-control-plaintext::-moz-placeholder {
            color: transparent;
        }
        .form-floating > .form-control:-ms-input-placeholder, .form-floating > .form-control-plaintext:-ms-input-placeholder {
            color: transparent;
        }
        .form-floating > .form-control::-ms-input-placeholder, .form-floating > .form-control-plaintext::-ms-input-placeholder {
            color: transparent;
        }
        .form-floating > .form-control::placeholder,
        .form-floating > .form-control-plaintext::placeholder {
            color: transparent;
        }
        .form-floating > .form-control:not(:-moz-placeholder-shown), .form-floating > .form-control-plaintext:not(:-moz-placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-control:not(:-ms-input-placeholder), .form-floating > .form-control-plaintext:not(:-ms-input-placeholder) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown),
        .form-floating > .form-control-plaintext:focus,
        .form-floating > .form-control-plaintext:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-control:-webkit-autofill,
        .form-floating > .form-control-plaintext:-webkit-autofill {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-select {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-floating > .form-control:not(:-ms-input-placeholder) ~ label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label,
        .form-floating > .form-control-plaintext ~ label,
        .form-floating > .form-select ~ label {
            opacity: 0.65;
            -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-floating > .form-control:-webkit-autofill ~ label {
            opacity: 0.65;
            -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-floating > .form-control-plaintext ~ label {
            border-width: 1px 0;
        }

        .input-group {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }
        .input-group > .form-control,
        .input-group > .form-select,
        .input-group > .form-floating {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
        }
        .input-group > .form-control:focus,
        .input-group > .form-select:focus,
        .input-group > .form-floating:focus-within {
            z-index: 5;
        }
        .input-group .btn {
            position: relative;
            z-index: 2;
        }
        .input-group .btn:focus {
            z-index: 5;
        }

        .input-group-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-gray-500);
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid var(--bs-gray-300);
            border-radius: 0.5rem;
        }

        .input-group-lg > .form-control,
        .input-group-lg > .form-select,
        .input-group-lg > .input-group-text,
        .input-group-lg > .btn {
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            border-radius: 1rem;
        }

        .input-group-sm > .form-control,
        .input-group-sm > .form-select,
        .input-group-sm > .input-group-text,
        .input-group-sm > .btn {
            padding: 0.4rem 0.8rem;
            font-size: 0.8125rem;
            border-radius: 0.4rem;
        }

        .input-group-lg > .form-select,
        .input-group-sm > .form-select {
            padding-right: 3.25rem;
        }

        .input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        .input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3),
        .input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-control,
        .input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-select {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        .input-group.has-validation > .dropdown-toggle:nth-last-child(n+4),
        .input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-control,
        .input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-select {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .input-group > .form-floating:not(:first-child) > .form-control,
        .input-group > .form-floating:not(:first-child) > .form-select {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #198754;
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #fff;
            background-color: rgba(25, 135, 84, 0.9);
            border-radius: 0.375rem;
        }

        .was-validated :valid ~ .valid-feedback,
        .was-validated :valid ~ .valid-tooltip,
        .is-valid ~ .valid-feedback,
        .is-valid ~ .valid-tooltip {
            display: block;
        }

        .was-validated .form-control:valid, .form-control.is-valid {
            border-color: #198754;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
            border-color: #198754;
            -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
            box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
        }

        .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        .was-validated .form-select:valid, .form-select.is-valid {
            border-color: #198754;
        }
        .was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
            padding-right: 4.125rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23747579' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-position: right 0.75rem center, center right 2.25rem;
            background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .was-validated .form-select:valid:focus, .form-select.is-valid:focus {
            border-color: #198754;
            -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
            box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
        }

        .was-validated .form-control-color:valid, .form-control-color.is-valid {
            width: calc(3rem + calc(1.5em + 0.75rem));
        }

        .was-validated .form-check-input:valid, .form-check-input.is-valid {
            border-color: #198754;
        }
        .was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
            background-color: #198754;
        }
        .was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
            -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
            box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
        }
        .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
            color: #198754;
        }

        .form-check-inline .form-check-input ~ .valid-feedback {
            margin-left: 0.5em;
        }

        .was-validated .input-group > .form-control:not(:focus):valid, .input-group > .form-control:not(:focus).is-valid,
        .was-validated .input-group > .form-select:not(:focus):valid,
        .input-group > .form-select:not(:focus).is-valid,
        .was-validated .input-group > .form-floating:not(:focus-within):valid,
        .input-group > .form-floating:not(:focus-within).is-valid {
            z-index: 3;
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #fff;
            background-color: rgba(220, 53, 69, 0.9);
            border-radius: 0.375rem;
        }

        .was-validated :invalid ~ .invalid-feedback,
        .was-validated :invalid ~ .invalid-tooltip,
        .is-invalid ~ .invalid-feedback,
        .is-invalid ~ .invalid-tooltip {
            display: block;
        }

        .was-validated .form-control:invalid, .form-control.is-invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
            border-color: #dc3545;
            -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
        }

        .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        .was-validated .form-select:invalid, .form-select.is-invalid {
            border-color: #dc3545;
        }
        .was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
            padding-right: 4.125rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23747579' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-position: right 0.75rem center, center right 2.25rem;
            background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
            border-color: #dc3545;
            -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
        }

        .was-validated .form-control-color:invalid, .form-control-color.is-invalid {
            width: calc(3rem + calc(1.5em + 0.75rem));
        }

        .was-validated .form-check-input:invalid, .form-check-input.is-invalid {
            border-color: #dc3545;
        }
        .was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
            background-color: #dc3545;
        }
        .was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
            -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
        }
        .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
            color: #dc3545;
        }

        .form-check-inline .form-check-input ~ .invalid-feedback {
            margin-left: 0.5em;
        }

        .was-validated .input-group > .form-control:not(:focus):invalid, .input-group > .form-control:not(:focus).is-invalid,
        .was-validated .input-group > .form-select:not(:focus):invalid,
        .input-group > .form-select:not(:focus).is-invalid,
        .was-validated .input-group > .form-floating:not(:focus-within):invalid,
        .input-group > .form-floating:not(:focus-within).is-invalid {
            z-index: 4;
        }

        .btn {
            --bs-btn-padding-x: 1rem;
            --bs-btn-padding-y: 0.5rem;
            --bs-btn-font-family: ;
            --bs-btn-font-size: 1rem;
            --bs-btn-font-weight: 700;
            --bs-btn-line-height: 1.5;
            --bs-btn-color: #747579;
            --bs-btn-bg: transparent;
            --bs-btn-border-width: 1px;
            --bs-btn-border-color: transparent;
            --bs-btn-border-radius: 0.5rem;
            --bs-btn-hover-border-color: transparent;
            --bs-btn-box-shadow: none;
            --bs-btn-disabled-opacity: 0.65;
            --bs-btn-focus-box-shadow: 0 0 0 0 rgba(var(--bs-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            font-family: var(--bs-btn-font-family);
            font-size: var(--bs-btn-font-size);
            font-weight: var(--bs-btn-font-weight);
            line-height: var(--bs-btn-line-height);
            color: var(--bs-btn-color);
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
            border-radius: var(--bs-btn-border-radius);
            background-color: var(--bs-btn-bg);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .btn {
                -webkit-transition: none;
                transition: none;
            }
        }
        .btn:hover {
            color: var(--bs-btn-hover-color);
            background-color: var(--bs-btn-hover-bg);
            border-color: var(--bs-btn-hover-border-color);
        }
        .btn-check + .btn:hover {
            color: var(--bs-btn-color);
            background-color: var(--bs-btn-bg);
            border-color: var(--bs-btn-border-color);
        }
        .btn:focus-visible {
            color: var(--bs-btn-hover-color);
            background-color: var(--bs-btn-hover-bg);
            border-color: var(--bs-btn-hover-border-color);
            outline: 0;
            -webkit-box-shadow: var(--bs-btn-focus-box-shadow);
            box-shadow: var(--bs-btn-focus-box-shadow);
        }
        .btn-check:focus-visible + .btn {
            border-color: var(--bs-btn-hover-border-color);
            outline: 0;
            -webkit-box-shadow: var(--bs-btn-focus-box-shadow);
            box-shadow: var(--bs-btn-focus-box-shadow);
        }
        .btn-check:checked + .btn, :not(.btn-check) + .btn:active, .btn:first-child:active, .btn.active, .btn.show {
            color: var(--bs-btn-active-color);
            background-color: var(--bs-btn-active-bg);
            border-color: var(--bs-btn-active-border-color);
        }
        .btn-check:checked + .btn:focus-visible, :not(.btn-check) + .btn:active:focus-visible, .btn:first-child:active:focus-visible, .btn.active:focus-visible, .btn.show:focus-visible {
            -webkit-box-shadow: var(--bs-btn-focus-box-shadow);
            box-shadow: var(--bs-btn-focus-box-shadow);
        }
        .btn:disabled, .btn.disabled, fieldset:disabled .btn {
            color: var(--bs-btn-disabled-color);
            pointer-events: none;
            background-color: var(--bs-btn-disabled-bg);
            border-color: var(--bs-btn-disabled-border-color);
            opacity: var(--bs-btn-disabled-opacity);
        }

        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #5143d9;
            --bs-btn-border-color: #5143d9;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #4539b8;
            --bs-btn-hover-border-color: #4136ae;
            --bs-btn-focus-shadow-rgb: 107, 95, 223;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #4136ae;
            --bs-btn-active-border-color: #3d32a3;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #5143d9;
            --bs-btn-disabled-border-color: #5143d9;
        }

        .btn-white {
            --bs-btn-color: #000;
            --bs-btn-bg: #fff;
            --bs-btn-border-color: #fff;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: white;
            --bs-btn-hover-border-color: white;
            --bs-btn-focus-shadow-rgb: 217, 217, 217;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: white;
            --bs-btn-active-border-color: white;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #000;
            --bs-btn-disabled-bg: #fff;
            --bs-btn-disabled-border-color: #fff;
        }

        .btn-secondary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #85878a;
            --bs-btn-border-color: #85878a;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #717375;
            --bs-btn-hover-border-color: #6a6c6e;
            --bs-btn-focus-shadow-rgb: 151, 153, 156;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #6a6c6e;
            --bs-btn-active-border-color: #646568;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #85878a;
            --bs-btn-disabled-border-color: #85878a;
        }

        .btn-success {
            --bs-btn-color: #fff;
            --bs-btn-bg: #0cbc87;
            --bs-btn-border-color: #0cbc87;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #0aa073;
            --bs-btn-hover-border-color: #0a966c;
            --bs-btn-focus-shadow-rgb: 48, 198, 153;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #0a966c;
            --bs-btn-active-border-color: #098d65;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #0cbc87;
            --bs-btn-disabled-border-color: #0cbc87;
        }

        .btn-info {
            --bs-btn-color: #fff;
            --bs-btn-bg: #17a2b8;
            --bs-btn-border-color: #17a2b8;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #148a9c;
            --bs-btn-hover-border-color: #128293;
            --bs-btn-focus-shadow-rgb: 58, 176, 195;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #128293;
            --bs-btn-active-border-color: #117a8a;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #17a2b8;
            --bs-btn-disabled-border-color: #17a2b8;
        }

        .btn-warning {
            --bs-btn-color: #000;
            --bs-btn-bg: #f7c32e;
            --bs-btn-border-color: #f7c32e;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #f8cc4d;
            --bs-btn-hover-border-color: #f8c943;
            --bs-btn-focus-shadow-rgb: 210, 166, 39;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #f9cf58;
            --bs-btn-active-border-color: #f8c943;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #000;
            --bs-btn-disabled-bg: #f7c32e;
            --bs-btn-disabled-border-color: #f7c32e;
        }

        .btn-danger {
            --bs-btn-color: #fff;
            --bs-btn-bg: #d6293e;
            --bs-btn-border-color: #d6293e;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #b62335;
            --bs-btn-hover-border-color: #ab2132;
            --bs-btn-focus-shadow-rgb: 220, 73, 91;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #ab2132;
            --bs-btn-active-border-color: #a11f2f;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #d6293e;
            --bs-btn-disabled-border-color: #d6293e;
        }

        .btn-light {
            --bs-btn-color: #000;
            --bs-btn-bg: #f5f5f6;
            --bs-btn-border-color: #f5f5f6;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #d0d0d1;
            --bs-btn-hover-border-color: #c4c4c5;
            --bs-btn-focus-shadow-rgb: 208, 208, 209;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #c4c4c5;
            --bs-btn-active-border-color: #b8b8b9;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #000;
            --bs-btn-disabled-bg: #f5f5f6;
            --bs-btn-disabled-border-color: #f5f5f6;
        }

        .btn-dark {
            --bs-btn-color: #fff;
            --bs-btn-bg: #0b0a12;
            --bs-btn-border-color: #0b0a12;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #302f36;
            --bs-btn-hover-border-color: #23232a;
            --bs-btn-focus-shadow-rgb: 48, 47, 54;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #3c3b41;
            --bs-btn-active-border-color: #23232a;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #0b0a12;
            --bs-btn-disabled-border-color: #0b0a12;
        }

        .btn-orange {
            --bs-btn-color: #fff;
            --bs-btn-bg: #fd7e14;
            --bs-btn-border-color: #fd7e14;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #d76b11;
            --bs-btn-hover-border-color: #ca6510;
            --bs-btn-focus-shadow-rgb: 253, 145, 55;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #ca6510;
            --bs-btn-active-border-color: #be5f0f;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #fd7e14;
            --bs-btn-disabled-border-color: #fd7e14;
        }

        .btn-mode {
            --bs-btn-color: #000;
            --bs-btn-bg: #fff;
            --bs-btn-border-color: #fff;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: white;
            --bs-btn-hover-border-color: white;
            --bs-btn-focus-shadow-rgb: 217, 217, 217;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: white;
            --bs-btn-active-border-color: white;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #000;
            --bs-btn-disabled-bg: #fff;
            --bs-btn-disabled-border-color: #fff;
        }

        .btn-outline-primary {
            --bs-btn-color: #5143d9;
            --bs-btn-border-color: #5143d9;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #5143d9;
            --bs-btn-hover-border-color: #5143d9;
            --bs-btn-focus-shadow-rgb: 81, 67, 217;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #5143d9;
            --bs-btn-active-border-color: #5143d9;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #5143d9;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #5143d9;
            --bs-gradient: none;
        }

        .btn-outline-white {
            --bs-btn-color: #fff;
            --bs-btn-border-color: #fff;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #fff;
            --bs-btn-hover-border-color: #fff;
            --bs-btn-focus-shadow-rgb: 255, 255, 255;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #fff;
            --bs-btn-active-border-color: #fff;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #fff;
            --bs-gradient: none;
        }

        .btn-outline-secondary {
            --bs-btn-color: #85878a;
            --bs-btn-border-color: #85878a;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #85878a;
            --bs-btn-hover-border-color: #85878a;
            --bs-btn-focus-shadow-rgb: 133, 135, 138;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #85878a;
            --bs-btn-active-border-color: #85878a;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #85878a;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #85878a;
            --bs-gradient: none;
        }

        .btn-outline-success {
            --bs-btn-color: #0cbc87;
            --bs-btn-border-color: #0cbc87;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #0cbc87;
            --bs-btn-hover-border-color: #0cbc87;
            --bs-btn-focus-shadow-rgb: 12, 188, 135;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #0cbc87;
            --bs-btn-active-border-color: #0cbc87;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #0cbc87;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #0cbc87;
            --bs-gradient: none;
        }

        .btn-outline-info {
            --bs-btn-color: #17a2b8;
            --bs-btn-border-color: #17a2b8;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #17a2b8;
            --bs-btn-hover-border-color: #17a2b8;
            --bs-btn-focus-shadow-rgb: 23, 162, 184;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #17a2b8;
            --bs-btn-active-border-color: #17a2b8;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #17a2b8;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #17a2b8;
            --bs-gradient: none;
        }

        .btn-outline-warning {
            --bs-btn-color: #f7c32e;
            --bs-btn-border-color: #f7c32e;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #f7c32e;
            --bs-btn-hover-border-color: #f7c32e;
            --bs-btn-focus-shadow-rgb: 247, 195, 46;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #f7c32e;
            --bs-btn-active-border-color: #f7c32e;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #f7c32e;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #f7c32e;
            --bs-gradient: none;
        }

        .btn-outline-danger {
            --bs-btn-color: #d6293e;
            --bs-btn-border-color: #d6293e;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #d6293e;
            --bs-btn-hover-border-color: #d6293e;
            --bs-btn-focus-shadow-rgb: 214, 41, 62;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #d6293e;
            --bs-btn-active-border-color: #d6293e;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #d6293e;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #d6293e;
            --bs-gradient: none;
        }

        .btn-outline-light {
            --bs-btn-color: #f5f5f6;
            --bs-btn-border-color: #f5f5f6;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #f5f5f6;
            --bs-btn-hover-border-color: #f5f5f6;
            --bs-btn-focus-shadow-rgb: 245, 245, 246;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #f5f5f6;
            --bs-btn-active-border-color: #f5f5f6;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #f5f5f6;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #f5f5f6;
            --bs-gradient: none;
        }

        .btn-outline-dark {
            --bs-btn-color: #0b0a12;
            --bs-btn-border-color: #0b0a12;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #0b0a12;
            --bs-btn-hover-border-color: #0b0a12;
            --bs-btn-focus-shadow-rgb: 11, 10, 18;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #0b0a12;
            --bs-btn-active-border-color: #0b0a12;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #0b0a12;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #0b0a12;
            --bs-gradient: none;
        }

        .btn-outline-orange {
            --bs-btn-color: #fd7e14;
            --bs-btn-border-color: #fd7e14;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #fd7e14;
            --bs-btn-hover-border-color: #fd7e14;
            --bs-btn-focus-shadow-rgb: 253, 126, 20;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #fd7e14;
            --bs-btn-active-border-color: #fd7e14;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fd7e14;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #fd7e14;
            --bs-gradient: none;
        }

        .btn-outline-mode {
            --bs-btn-color: #fff;
            --bs-btn-border-color: #fff;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #fff;
            --bs-btn-hover-border-color: #fff;
            --bs-btn-focus-shadow-rgb: 255, 255, 255;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #fff;
            --bs-btn-active-border-color: #fff;
            --bs-btn-active-shadow: none;
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #fff;
            --bs-gradient: none;
        }

        .btn-link {
            --bs-btn-font-weight: 500;
            --bs-btn-color: var(--bs-link-color);
            --bs-btn-bg: transparent;
            --bs-btn-border-color: transparent;
            --bs-btn-hover-color: var(--bs-link-hover-color);
            --bs-btn-hover-border-color: transparent;
            --bs-btn-active-color: var(--bs-link-hover-color);
            --bs-btn-active-border-color: transparent;
            --bs-btn-disabled-color: var(--bs-gray-400);
            --bs-btn-disabled-border-color: transparent;
            --bs-btn-box-shadow: none;
            --bs-btn-focus-shadow-rgb: 107, 95, 223;
            text-decoration: none;
        }
        .btn-link:focus-visible {
            color: var(--bs-btn-color);
        }
        .btn-link:hover {
            color: var(--bs-btn-hover-color);
        }

        .btn-lg, .btn-group-lg > .btn {
            --bs-btn-padding-y: 0.8rem;
            --bs-btn-padding-x: 1.5rem;
            --bs-btn-font-size: 1rem;
            --bs-btn-border-radius: 1rem;
        }

        .btn-sm, .btn-group-sm > .btn {
            --bs-btn-padding-y: 0.4rem;
            --bs-btn-padding-x: 0.8rem;
            --bs-btn-font-size: 0.8125rem;
            --bs-btn-border-radius: 0.4rem;
        }

        .fade {
            -webkit-transition: opacity 0.15s linear;
            transition: opacity 0.15s linear;
        }
        @media (prefers-reduced-motion: reduce) {
            .fade {
                -webkit-transition: none;
                transition: none;
            }
        }
        .fade:not(.show) {
            opacity: 0;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            -webkit-transition: height 0.35s ease;
            transition: height 0.35s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                -webkit-transition: none;
                transition: none;
            }
        }
        .collapsing.collapse-horizontal {
            width: 0;
            height: auto;
            -webkit-transition: width 0.35s ease;
            transition: width 0.35s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .collapsing.collapse-horizontal {
                -webkit-transition: none;
                transition: none;
            }
        }

        .dropup,
        .dropend,
        .dropdown,
        .dropstart,
        .dropup-center,
        .dropdown-center {
            position: relative;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }
        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }
        .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropdown-menu {
            --bs-dropdown-zindex: 1000;
            --bs-dropdown-min-width: 15rem;
            --bs-dropdown-padding-x: 0.8rem;
            --bs-dropdown-padding-y: 1rem;
            --bs-dropdown-spacer: 0;
            --bs-dropdown-font-size: 1rem;
            --bs-dropdown-color: var(--bs-body-color);
            --bs-dropdown-bg: var(--bs-body-bg);
            --bs-dropdown-border-color: var(--bs-border-color);
            --bs-dropdown-border-radius: 0.5rem;
            --bs-dropdown-border-width: 0;
            --bs-dropdown-inner-border-radius: calc(0.375rem - 1px);
            --bs-dropdown-divider-bg: var(--bs-gray-200);
            --bs-dropdown-divider-margin-y: 0.5rem;
            --bs-dropdown-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
            --bs-dropdown-link-color: var(--bs-gray-600);
            --bs-dropdown-link-hover-color: var(--bs-primary);
            --bs-dropdown-link-hover-bg: rgba(var(--bs-primary-rgb), 0.1);
            --bs-dropdown-link-active-color: var(--bs-primary);
            --bs-dropdown-link-active-bg: rgba(var(--bs-primary-rgb), 0.1);
            --bs-dropdown-link-disabled-color: var(--bs-gray-600);
            --bs-dropdown-item-padding-x: 1rem;
            --bs-dropdown-item-padding-y: 0.4rem;
            --bs-dropdown-header-color: var(--bs-gray-800);
            --bs-dropdown-header-padding-x: 1rem;
            --bs-dropdown-header-padding-y: 0.5rem;
            position: absolute;
            z-index: var(--bs-dropdown-zindex);
            display: none;
            min-width: var(--bs-dropdown-min-width);
            padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
            margin: 0;
            font-size: var(--bs-dropdown-font-size);
            color: var(--bs-dropdown-color);
            text-align: left;
            list-style: none;
            background-color: var(--bs-dropdown-bg);
            background-clip: padding-box;
            border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
            border-radius: var(--bs-dropdown-border-radius);
        }
        .dropdown-menu[data-bs-popper] {
            top: 100%;
            left: 0;
            margin-top: var(--bs-dropdown-spacer);
        }

        .dropdown-menu-start {
            --bs-position: start;
        }
        .dropdown-menu-start[data-bs-popper] {
            right: auto;
            left: 0;
        }

        .dropdown-menu-end {
            --bs-position: end;
        }
        .dropdown-menu-end[data-bs-popper] {
            right: 0;
            left: auto;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-start {
                --bs-position: start;
            }
            .dropdown-menu-sm-start[data-bs-popper] {
                right: auto;
                left: 0;
            }
            .dropdown-menu-sm-end {
                --bs-position: end;
            }
            .dropdown-menu-sm-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        @media (min-width: 768px) {
            .dropdown-menu-md-start {
                --bs-position: start;
            }
            .dropdown-menu-md-start[data-bs-popper] {
                right: auto;
                left: 0;
            }
            .dropdown-menu-md-end {
                --bs-position: end;
            }
            .dropdown-menu-md-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        @media (min-width: 992px) {
            .dropdown-menu-lg-start {
                --bs-position: start;
            }
            .dropdown-menu-lg-start[data-bs-popper] {
                right: auto;
                left: 0;
            }
            .dropdown-menu-lg-end {
                --bs-position: end;
            }
            .dropdown-menu-lg-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        @media (min-width: 1200px) {
            .dropdown-menu-xl-start {
                --bs-position: start;
            }
            .dropdown-menu-xl-start[data-bs-popper] {
                right: auto;
                left: 0;
            }
            .dropdown-menu-xl-end {
                --bs-position: end;
            }
            .dropdown-menu-xl-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        @media (min-width: 1400px) {
            .dropdown-menu-xxl-start {
                --bs-position: start;
            }
            .dropdown-menu-xxl-start[data-bs-popper] {
                right: auto;
                left: 0;
            }
            .dropdown-menu-xxl-end {
                --bs-position: end;
            }
            .dropdown-menu-xxl-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        .dropup .dropdown-menu[data-bs-popper] {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: var(--bs-dropdown-spacer);
        }
        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0;
            border-right: 0.3em solid transparent;
            border-bottom: 0.3em solid;
            border-left: 0.3em solid transparent;
        }
        .dropup .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropend .dropdown-menu[data-bs-popper] {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: var(--bs-dropdown-spacer);
        }
        .dropend .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid;
        }
        .dropend .dropdown-toggle:empty::after {
            margin-left: 0;
        }
        .dropend .dropdown-toggle::after {
            vertical-align: 0;
        }

        .dropstart .dropdown-menu[data-bs-popper] {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: var(--bs-dropdown-spacer);
        }
        .dropstart .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
        }
        .dropstart .dropdown-toggle::after {
            display: none;
        }
        .dropstart .dropdown-toggle::before {
            display: inline-block;
            margin-right: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0.3em solid;
            border-bottom: 0.3em solid transparent;
        }
        .dropstart .dropdown-toggle:empty::after {
            margin-left: 0;
        }
        .dropstart .dropdown-toggle::before {
            vertical-align: 0;
        }

        .dropdown-divider {
            height: 0;
            margin: var(--bs-dropdown-divider-margin-y) 0;
            overflow: hidden;
            border-top: 1px solid var(--bs-dropdown-divider-bg);
            opacity: 1;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
            clear: both;
            font-weight: 500;
            color: var(--bs-dropdown-link-color);
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }
        .dropdown-item:hover, .dropdown-item:focus {
            color: var(--bs-dropdown-link-hover-color);
            background-color: var(--bs-dropdown-link-hover-bg);
        }
        .dropdown-item.active, .dropdown-item:active {
            color: var(--bs-dropdown-link-active-color);
            text-decoration: none;
            background-color: var(--bs-dropdown-link-active-bg);
        }
        .dropdown-item.disabled, .dropdown-item:disabled {
            color: var(--bs-dropdown-link-disabled-color);
            pointer-events: none;
            background-color: transparent;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-header {
            display: block;
            padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
            margin-bottom: 0;
            font-size: 0.875rem;
            color: var(--bs-dropdown-header-color);
            white-space: nowrap;
        }

        .dropdown-item-text {
            display: block;
            padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
            color: var(--bs-dropdown-link-color);
        }

        .dropdown-menu-dark {
            --bs-dropdown-color: var(--bs-gray-300);
            --bs-dropdown-bg: var(--bs-gray-800);
            --bs-dropdown-border-color: var(--bs-border-color);
            --bs-dropdown-box-shadow: ;
            --bs-dropdown-link-color: var(--bs-gray-300);
            --bs-dropdown-link-hover-color: #fff;
            --bs-dropdown-divider-bg: rgba(255, 255, 255, 0.1);
            --bs-dropdown-link-hover-bg: rgba(var(--bs-primary-rgb), 0.1);
            --bs-dropdown-link-active-color: var(--bs-primary);
            --bs-dropdown-link-active-bg: rgba(var(--bs-primary-rgb), 0.1);
            --bs-dropdown-link-disabled-color: var(--bs-gray-500);
            --bs-dropdown-header-color: var(--bs-gray-500);
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle;
        }
        .btn-group > .btn,
        .btn-group-vertical > .btn {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }
        .btn-group > .btn-check:checked + .btn,
        .btn-group > .btn-check:focus + .btn,
        .btn-group > .btn:hover,
        .btn-group > .btn:focus,
        .btn-group > .btn:active,
        .btn-group > .btn.active,
        .btn-group-vertical > .btn-check:checked + .btn,
        .btn-group-vertical > .btn-check:focus + .btn,
        .btn-group-vertical > .btn:hover,
        .btn-group-vertical > .btn:focus,
        .btn-group-vertical > .btn:active,
        .btn-group-vertical > .btn.active {
            z-index: 1;
        }

        .btn-toolbar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .btn-toolbar .input-group {
            width: auto;
        }

        .btn-group {
            border-radius: 0.5rem;
        }
        .btn-group > :not(.btn-check:first-child) + .btn,
        .btn-group > .btn-group:not(:first-child) {
            margin-left: -1px;
        }
        .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
        .btn-group > .btn.dropdown-toggle-split:first-child,
        .btn-group > .btn-group:not(:last-child) > .btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .btn-group > .btn:nth-child(n+3),
        .btn-group > :not(.btn-check) + .btn,
        .btn-group > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .dropdown-toggle-split {
            padding-right: 0.75rem;
            padding-left: 0.75rem;
        }
        .dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
            margin-left: 0;
        }
        .dropstart .dropdown-toggle-split::before {
            margin-right: 0;
        }

        .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
            padding-right: 0.6rem;
            padding-left: 0.6rem;
        }

        .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
            padding-right: 1.125rem;
            padding-left: 1.125rem;
        }

        .btn-group-vertical {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        .btn-group-vertical > .btn,
        .btn-group-vertical > .btn-group {
            width: 100%;
        }
        .btn-group-vertical > .btn:not(:first-child),
        .btn-group-vertical > .btn-group:not(:first-child) {
            margin-top: -1px;
        }
        .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
        .btn-group-vertical > .btn-group:not(:last-child) > .btn {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .btn-group-vertical > .btn ~ .btn,
        .btn-group-vertical > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav {
            --bs-nav-link-padding-x: 0.75rem;
            --bs-nav-link-padding-y: 1rem;
            --bs-nav-link-font-weight: ;
            --bs-nav-link-color: #747579;
            --bs-nav-link-hover-color: var(--bs-link-hover-color);
            --bs-nav-link-disabled-color: var(--bs-gray-500) !important;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            font-size: var(--bs-nav-link-font-size);
            font-weight: var(--bs-nav-link-font-weight);
            color: var(--bs-nav-link-color);
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .nav-link {
                -webkit-transition: none;
                transition: none;
            }
        }
        .nav-link:hover, .nav-link:focus {
            color: var(--bs-nav-link-hover-color);
        }
        .nav-link.disabled {
            color: var(--bs-nav-link-disabled-color);
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            --bs-nav-tabs-border-width: 1px;
            --bs-nav-tabs-border-color: var(--bs-gray-200);
            --bs-nav-tabs-border-radius: 0.5rem;
            --bs-nav-tabs-link-hover-border-color: #dfdfe3 #dfdfe3 var(--bs-gray-200);
            --bs-nav-tabs-link-active-color: #5e5e5f;
            --bs-nav-tabs-link-active-bg: #fff;
            --bs-nav-tabs-link-active-border-color: #c5c5c7 #c5c5c7 #fff;
            border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
        }
        .nav-tabs .nav-link {
            margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
            background: none;
            border: var(--bs-nav-tabs-border-width) solid transparent;
            border-top-left-radius: var(--bs-nav-tabs-border-radius);
            border-top-right-radius: var(--bs-nav-tabs-border-radius);
        }
        .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
            isolation: isolate;
            border-color: var(--bs-nav-tabs-link-hover-border-color);
        }
        .nav-tabs .nav-link.disabled, .nav-tabs .nav-link:disabled {
            color: var(--bs-nav-link-disabled-color);
            background-color: transparent;
            border-color: transparent;
        }
        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: var(--bs-nav-tabs-link-active-color);
            background-color: var(--bs-nav-tabs-link-active-bg);
            border-color: var(--bs-nav-tabs-link-active-border-color);
        }
        .nav-tabs .dropdown-menu {
            margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills {
            --bs-nav-pills-border-radius: 0.5rem;
            --bs-nav-pills-link-active-color: #fff;
            --bs-nav-pills-link-active-bg: var(--bs-primary);
        }
        .nav-pills .nav-link {
            background: none;
            border: 0;
            border-radius: var(--bs-nav-pills-border-radius);
        }
        .nav-pills .nav-link:disabled {
            color: var(--bs-nav-link-disabled-color);
            background-color: transparent;
            border-color: transparent;
        }
        .nav-pills .nav-link.active,
        .nav-pills .show > .nav-link {
            color: var(--bs-nav-pills-link-active-color);
            background-color: var(--bs-nav-pills-link-active-bg);
        }

        .nav-fill > .nav-link,
        .nav-fill .nav-item {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center;
        }

        .nav-justified > .nav-link,
        .nav-justified .nav-item {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center;
        }

        .nav-fill .nav-item .nav-link,
        .nav-justified .nav-item .nav-link {
            width: 100%;
        }

        .tab-content > .tab-pane {
            display: none;
        }
        .tab-content > .active {
            display: block;
        }

        .navbar {
            --bs-navbar-padding-x: 0;
            --bs-navbar-padding-y: 0;
            --bs-navbar-color: #0b0a12;
            --bs-navbar-hover-color: var(--bs-primary);
            --bs-navbar-disabled-color: rgba(0, 0, 0, 0.3);
            --bs-navbar-active-color: var(--bs-primary);
            --bs-navbar-brand-padding-y: 30px;
            --bs-navbar-brand-margin-end: 1rem;
            --bs-navbar-brand-font-size: 1.25rem;
            --bs-navbar-brand-color: rgba(0, 0, 0, 0.9);
            --bs-navbar-brand-hover-color: rgba(0, 0, 0, 0.9);
            --bs-navbar-nav-link-padding-x: 1rem;
            --bs-navbar-toggler-padding-y: 0.25rem;
            --bs-navbar-toggler-padding-x: 0;
            --bs-navbar-toggler-font-size: 1.25rem;
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            --bs-navbar-toggler-border-color: rgba(0, 0, 0, 0.1);
            --bs-navbar-toggler-border-radius: 0.375rem;
            --bs-navbar-toggler-focus-width: 0;
            --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
        }
        .navbar > .container,
        .navbar > .container-fluid,
        .navbar > .container-sm,
        .navbar > .container-md,
        .navbar > .container-lg,
        .navbar > .container-xl,
        .navbar > .container-xxl {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: inherit;
            flex-wrap: inherit;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .navbar-brand {
            padding-top: var(--bs-navbar-brand-padding-y);
            padding-bottom: var(--bs-navbar-brand-padding-y);
            margin-right: var(--bs-navbar-brand-margin-end);
            font-size: var(--bs-navbar-brand-font-size);
            color: var(--bs-navbar-brand-color);
            white-space: nowrap;
        }
        .navbar-brand:hover, .navbar-brand:focus {
            color: var(--bs-navbar-brand-hover-color);
        }

        .navbar-nav {
            --bs-nav-link-padding-x: 0;
            --bs-nav-link-padding-y: 1rem;
            --bs-nav-link-font-weight: ;
            --bs-nav-link-color: var(--bs-navbar-color);
            --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
            --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }
        .navbar-nav .show > .nav-link,
        .navbar-nav .nav-link.active {
            color: var(--bs-navbar-active-color);
        }
        .navbar-nav .dropdown-menu {
            position: static;
        }

        .navbar-text {
            padding-top: 1rem;
            padding-bottom: 1rem;
            color: var(--bs-navbar-color);
        }
        .navbar-text a,
        .navbar-text a:hover,
        .navbar-text a:focus {
            color: var(--bs-navbar-active-color);
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .navbar-toggler {
            padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
            font-size: var(--bs-navbar-toggler-font-size);
            line-height: 1;
            color: var(--bs-navbar-color);
            background-color: transparent;
            border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
            border-radius: var(--bs-navbar-toggler-border-radius);
            -webkit-transition: var(--bs-navbar-toggler-transition);
            transition: var(--bs-navbar-toggler-transition);
        }
        @media (prefers-reduced-motion: reduce) {
            .navbar-toggler {
                -webkit-transition: none;
                transition: none;
            }
        }
        .navbar-toggler:hover {
            text-decoration: none;
        }
        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            -webkit-box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
            box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-image: var(--bs-navbar-toggler-icon-bg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .navbar-nav-scroll {
            max-height: var(--bs-scroll-height, 75vh);
            overflow-y: auto;
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-sm .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x);
            }
            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-sm .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-sm .navbar-toggler {
                display: none;
            }
            .navbar-expand-sm .offcanvas {
                position: static;
                z-index: auto;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                -webkit-transform: none !important;
                transform: none !important;
                -webkit-transition: none;
                transition: none;
            }
            .navbar-expand-sm .offcanvas .offcanvas-header {
                display: none;
            }
            .navbar-expand-sm .offcanvas .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        @media (min-width: 768px) {
            .navbar-expand-md {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-md .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x);
            }
            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-md .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-md .navbar-toggler {
                display: none;
            }
            .navbar-expand-md .offcanvas {
                position: static;
                z-index: auto;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                -webkit-transform: none !important;
                transform: none !important;
                -webkit-transition: none;
                transition: none;
            }
            .navbar-expand-md .offcanvas .offcanvas-header {
                display: none;
            }
            .navbar-expand-md .offcanvas .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        @media (min-width: 992px) {
            .navbar-expand-lg {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-lg .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x);
            }
            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-lg .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-lg .navbar-toggler {
                display: none;
            }
            .navbar-expand-lg .offcanvas {
                position: static;
                z-index: auto;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                -webkit-transform: none !important;
                transform: none !important;
                -webkit-transition: none;
                transition: none;
            }
            .navbar-expand-lg .offcanvas .offcanvas-header {
                display: none;
            }
            .navbar-expand-lg .offcanvas .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        @media (min-width: 1200px) {
            .navbar-expand-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-xl .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x);
            }
            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-xl .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-xl .navbar-toggler {
                display: none;
            }
            .navbar-expand-xl .offcanvas {
                position: static;
                z-index: auto;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                -webkit-transform: none !important;
                transform: none !important;
                -webkit-transition: none;
                transition: none;
            }
            .navbar-expand-xl .offcanvas .offcanvas-header {
                display: none;
            }
            .navbar-expand-xl .offcanvas .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        @media (min-width: 1400px) {
            .navbar-expand-xxl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-xxl .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x);
            }
            .navbar-expand-xxl .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-xxl .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-xxl .navbar-toggler {
                display: none;
            }
            .navbar-expand-xxl .offcanvas {
                position: static;
                z-index: auto;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                -webkit-transform: none !important;
                transform: none !important;
                -webkit-transition: none;
                transition: none;
            }
            .navbar-expand-xxl .offcanvas .offcanvas-header {
                display: none;
            }
            .navbar-expand-xxl .offcanvas .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        .navbar-expand {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .navbar-expand .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand .navbar-nav .nav-link {
            padding-right: var(--bs-navbar-nav-link-padding-x);
            padding-left: var(--bs-navbar-nav-link-padding-x);
        }
        .navbar-expand .navbar-nav-scroll {
            overflow: visible;
        }
        .navbar-expand .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
        .navbar-expand .navbar-toggler {
            display: none;
        }
        .navbar-expand .offcanvas {
            position: static;
            z-index: auto;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: auto !important;
            height: auto !important;
            visibility: visible !important;
            background-color: transparent !important;
            border: 0 !important;
            -webkit-transform: none !important;
            transform: none !important;
            -webkit-transition: none;
            transition: none;
        }
        .navbar-expand .offcanvas .offcanvas-header {
            display: none;
        }
        .navbar-expand .offcanvas .offcanvas-body {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            padding: 0;
            overflow-y: visible;
        }

        .navbar-dark {
            --bs-navbar-color: #fff;
            --bs-navbar-hover-color: var(--bs-primary) !important;
            --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
            --bs-navbar-active-color: var(--bs-primary) !important;
            --bs-navbar-brand-color: #fff;
            --bs-navbar-brand-hover-color: #fff;
            --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .card {
            --bs-card-spacer-y: 1.25rem;
            --bs-card-spacer-x: 1.25rem;
            --bs-card-title-spacer-y: 0.5rem;
            --bs-card-border-width: 0;
            --bs-card-border-color: var(--bs-border-color);
            --bs-card-border-radius: 1rem;
            --bs-card-box-shadow: ;
            --bs-card-inner-border-radius: 1rem;
            --bs-card-cap-padding-y: 1.25rem;
            --bs-card-cap-padding-x: 1.25rem;
            --bs-card-cap-bg: var(--bs-mode);
            --bs-card-cap-color: ;
            --bs-card-height: ;
            --bs-card-color: ;
            --bs-card-bg: var(--bs-mode);
            --bs-card-img-overlay-padding: 1.25rem;
            --bs-card-group-margin: 0.9375rem;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            height: var(--bs-card-height);
            word-wrap: break-word;
            background-color: var(--bs-card-bg);
            background-clip: border-box;
            border: var(--bs-card-border-width) solid var(--bs-card-border-color);
            border-radius: var(--bs-card-border-radius);
        }
        .card > hr {
            margin-right: 0;
            margin-left: 0;
        }
        .card > .list-group {
            border-top: inherit;
            border-bottom: inherit;
        }
        .card > .list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: var(--bs-card-inner-border-radius);
            border-top-right-radius: var(--bs-card-inner-border-radius);
        }
        .card > .list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: var(--bs-card-inner-border-radius);
            border-bottom-left-radius: var(--bs-card-inner-border-radius);
        }
        .card > .card-header + .list-group,
        .card > .list-group + .card-footer {
            border-top: 0;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
            color: var(--bs-card-color);
        }

        .card-title {
            margin-bottom: var(--bs-card-title-spacer-y);
        }

        .card-subtitle {
            margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link + .card-link {
            margin-left: var(--bs-card-spacer-x);
        }

        .card-header {
            padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
            margin-bottom: 0;
            color: var(--bs-card-cap-color);
            background-color: var(--bs-card-cap-bg);
            border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
        }
        .card-header:first-child {
            border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
        }

        .card-footer {
            padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
            color: var(--bs-card-cap-color);
            background-color: var(--bs-card-cap-bg);
            border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
        }
        .card-footer:last-child {
            border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
        }

        .card-header-tabs {
            margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
            margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
            margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
            border-bottom: 0;
        }
        .card-header-tabs .nav-link.active {
            background-color: var(--bs-card-bg);
            border-bottom-color: var(--bs-card-bg);
        }

        .card-header-pills {
            margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
            margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: var(--bs-card-img-overlay-padding);
            border-radius: var(--bs-card-inner-border-radius);
        }

        .card-img,
        .card-img-top,
        .card-img-bottom {
            width: 100%;
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: var(--bs-card-inner-border-radius);
            border-top-right-radius: var(--bs-card-inner-border-radius);
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: var(--bs-card-inner-border-radius);
            border-bottom-left-radius: var(--bs-card-inner-border-radius);
        }

        .card-group > .card {
            margin-bottom: var(--bs-card-group-margin);
        }
        @media (min-width: 576px) {
            .card-group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }
            .card-group > .card {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0;
            }
            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0;
            }
            .card-group > .card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            .card-group > .card:not(:last-child) .card-img-top,
            .card-group > .card:not(:last-child) .card-header {
                border-top-right-radius: 0;
            }
            .card-group > .card:not(:last-child) .card-img-bottom,
            .card-group > .card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0;
            }
            .card-group > .card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .card-group > .card:not(:first-child) .card-img-top,
            .card-group > .card:not(:first-child) .card-header {
                border-top-left-radius: 0;
            }
            .card-group > .card:not(:first-child) .card-img-bottom,
            .card-group > .card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0;
            }
        }

        .accordion {
            --bs-accordion-color: var(--bs-body-color);
            --bs-accordion-bg: #fff;
            --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
            --bs-accordion-border-color: var(--bs-border-color);
            --bs-accordion-border-width: 1px;
            --bs-accordion-border-radius: 0.375rem;
            --bs-accordion-inner-border-radius: calc(0.375rem - 1px);
            --bs-accordion-btn-padding-x: 1.25rem;
            --bs-accordion-btn-padding-y: 1rem;
            --bs-accordion-btn-color: #212529;
            --bs-accordion-btn-bg: var(--bs-accordion-bg);
            --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --bs-accordion-btn-icon-width: 1.25rem;
            --bs-accordion-btn-icon-transform: rotate(-180deg);
            --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
            --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23493cc3'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --bs-accordion-btn-focus-border-color: none;
            --bs-accordion-btn-focus-box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
            --bs-accordion-body-padding-x: 1.25rem;
            --bs-accordion-body-padding-y: 1rem;
            --bs-accordion-active-color: #493cc3;
            --bs-accordion-active-bg: #e7f1ff;
        }

        .accordion-button {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
            font-size: 1rem;
            color: var(--bs-accordion-btn-color);
            text-align: left;
            background-color: var(--bs-accordion-btn-bg);
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            -webkit-transition: var(--bs-accordion-transition);
            transition: var(--bs-accordion-transition);
        }
        @media (prefers-reduced-motion: reduce) {
            .accordion-button {
                -webkit-transition: none;
                transition: none;
            }
        }
        .accordion-button:not(.collapsed) {
            color: var(--bs-accordion-active-color);
            background-color: var(--bs-accordion-active-bg);
            -webkit-box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
            box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
        }
        .accordion-button:not(.collapsed)::after {
            background-image: var(--bs-accordion-btn-active-icon);
            -webkit-transform: var(--bs-accordion-btn-icon-transform);
            transform: var(--bs-accordion-btn-icon-transform);
        }
        .accordion-button::after {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: var(--bs-accordion-btn-icon-width);
            height: var(--bs-accordion-btn-icon-width);
            margin-left: auto;
            content: "";
            background-image: var(--bs-accordion-btn-icon);
            background-repeat: no-repeat;
            background-size: var(--bs-accordion-btn-icon-width);
            -webkit-transition: var(--bs-accordion-btn-icon-transition);
            transition: var(--bs-accordion-btn-icon-transition);
        }
        @media (prefers-reduced-motion: reduce) {
            .accordion-button::after {
                -webkit-transition: none;
                transition: none;
            }
        }
        .accordion-button:hover {
            z-index: 2;
        }
        .accordion-button:focus {
            z-index: 3;
            border-color: var(--bs-accordion-btn-focus-border-color);
            outline: 0;
            -webkit-box-shadow: var(--bs-accordion-btn-focus-box-shadow);
            box-shadow: var(--bs-accordion-btn-focus-box-shadow);
        }

        .accordion-header {
            margin-bottom: 0;
        }

        .accordion-item {
            color: var(--bs-accordion-color);
            background-color: var(--bs-accordion-bg);
            border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
        }
        .accordion-item:first-of-type {
            border-top-left-radius: var(--bs-accordion-border-radius);
            border-top-right-radius: var(--bs-accordion-border-radius);
        }
        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: var(--bs-accordion-inner-border-radius);
            border-top-right-radius: var(--bs-accordion-inner-border-radius);
        }
        .accordion-item:not(:first-of-type) {
            border-top: 0;
        }
        .accordion-item:last-of-type {
            border-bottom-right-radius: var(--bs-accordion-border-radius);
            border-bottom-left-radius: var(--bs-accordion-border-radius);
        }
        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
            border-bottom-left-radius: var(--bs-accordion-inner-border-radius);
        }
        .accordion-item:last-of-type .accordion-collapse {
            border-bottom-right-radius: var(--bs-accordion-border-radius);
            border-bottom-left-radius: var(--bs-accordion-border-radius);
        }

        .accordion-body {
            padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
        }

        .accordion-flush .accordion-collapse {
            border-width: 0;
        }
        .accordion-flush .accordion-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }
        .accordion-flush .accordion-item:first-child {
            border-top: 0;
        }
        .accordion-flush .accordion-item:last-child {
            border-bottom: 0;
        }
        .accordion-flush .accordion-item .accordion-button, .accordion-flush .accordion-item .accordion-button.collapsed {
            border-radius: 0;
        }

        .breadcrumb {
            --bs-breadcrumb-padding-x: 0;
            --bs-breadcrumb-padding-y: 0.5rem;
            --bs-breadcrumb-margin-bottom: 1rem;
            --bs-breadcrumb-font-size: 0.8125rem;
            --bs-breadcrumb-bg: transparent;
            --bs-breadcrumb-border-radius: ;
            --bs-breadcrumb-divider-color: var(--bs-gray-500);
            --bs-breadcrumb-item-padding-x: 0.8rem;
            --bs-breadcrumb-item-active-color: var(--bs-gray-500);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
            margin-bottom: var(--bs-breadcrumb-margin-bottom);
            font-size: var(--bs-breadcrumb-font-size);
            list-style: none;
            background-color: var(--bs-breadcrumb-bg);
            border-radius: var(--bs-breadcrumb-border-radius);
        }

        .breadcrumb-item + .breadcrumb-item {
            padding-left: var(--bs-breadcrumb-item-padding-x);
        }
        .breadcrumb-item + .breadcrumb-item::before {
            float: left;
            padding-right: var(--bs-breadcrumb-item-padding-x);
            color: var(--bs-breadcrumb-divider-color);
            content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
        }
        .breadcrumb-item.active {
            color: var(--bs-breadcrumb-item-active-color);
        }

        .pagination {
            --bs-pagination-padding-x: 1rem;
            --bs-pagination-padding-y: 0.7rem;
            --bs-pagination-font-size: 1rem;
            --bs-pagination-color: var(--bs-gray-600);
            --bs-pagination-bg: #fff;
            --bs-pagination-border-width: 1px;
            --bs-pagination-border-color: var(--bs-gray-300);
            --bs-pagination-border-radius: 0.5rem;
            --bs-pagination-hover-color: var(--bs-white);
            --bs-pagination-hover-bg: var(--bs-primary);
            --bs-pagination-hover-border-color: var(--bs-primary);
            --bs-pagination-focus-color: var(--bs-link-hover-color);
            --bs-pagination-focus-bg: var(--bs-gray-200);
            --bs-pagination-focus-box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
            --bs-pagination-active-color: #fff;
            --bs-pagination-active-bg: var(--bs-primary);
            --bs-pagination-active-border-color: var(--bs-primary);
            --bs-pagination-disabled-color: var(--bs-gray-400);
            --bs-pagination-disabled-bg: #fff;
            --bs-pagination-disabled-border-color: var(--bs-gray-300);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
        }

        .page-link {
            position: relative;
            display: block;
            padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
            font-size: var(--bs-pagination-font-size);
            color: var(--bs-pagination-color);
            background-color: var(--bs-pagination-bg);
            border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .page-link {
                -webkit-transition: none;
                transition: none;
            }
        }
        .page-link:hover {
            z-index: 2;
            color: var(--bs-pagination-hover-color);
            background-color: var(--bs-pagination-hover-bg);
            border-color: var(--bs-pagination-hover-border-color);
        }
        .page-link:focus {
            z-index: 3;
            color: var(--bs-pagination-focus-color);
            background-color: var(--bs-pagination-focus-bg);
            outline: 0;
            -webkit-box-shadow: var(--bs-pagination-focus-box-shadow);
            box-shadow: var(--bs-pagination-focus-box-shadow);
        }
        .page-link.active, .active > .page-link {
            z-index: 3;
            color: var(--bs-pagination-active-color);
            background-color: var(--bs-pagination-active-bg);
            border-color: var(--bs-pagination-active-border-color);
        }
        .page-link.disabled, .disabled > .page-link {
            color: var(--bs-pagination-disabled-color);
            pointer-events: none;
            background-color: var(--bs-pagination-disabled-bg);
            border-color: var(--bs-pagination-disabled-border-color);
        }

        .page-item:not(:first-child) .page-link {
            margin-left: -1px;
        }
        .page-item:first-child .page-link {
            border-top-left-radius: var(--bs-pagination-border-radius);
            border-bottom-left-radius: var(--bs-pagination-border-radius);
        }
        .page-item:last-child .page-link {
            border-top-right-radius: var(--bs-pagination-border-radius);
            border-bottom-right-radius: var(--bs-pagination-border-radius);
        }

        .pagination-lg {
            --bs-pagination-padding-x: 1.5rem;
            --bs-pagination-padding-y: 0.75rem;
            --bs-pagination-font-size: 1.2rem;
            --bs-pagination-border-radius: 0.5rem;
        }

        .pagination-sm {
            --bs-pagination-padding-x: 0.5rem;
            --bs-pagination-padding-y: 0.25rem;
            --bs-pagination-font-size: 0.875rem;
            --bs-pagination-border-radius: 0.25rem;
        }

        .badge {
            --bs-badge-padding-x: 0.65em;
            --bs-badge-padding-y: 0.35em;
            --bs-badge-font-size: 0.85em;
            --bs-badge-font-weight: 400;
            --bs-badge-color: #fff;
            --bs-badge-border-radius: 0.375rem;
            display: inline-block;
            padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
            font-size: var(--bs-badge-font-size);
            font-weight: var(--bs-badge-font-weight);
            line-height: 1;
            color: var(--bs-badge-color);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: var(--bs-badge-border-radius);
        }
        .badge:empty {
            display: none;
        }

        .btn .badge {
            position: relative;
            top: -1px;
        }

        .alert {
            --bs-alert-bg: transparent;
            --bs-alert-padding-x: 1rem;
            --bs-alert-padding-y: 1rem;
            --bs-alert-margin-bottom: 1rem;
            --bs-alert-color: inherit;
            --bs-alert-border-color: transparent;
            --bs-alert-border: 1px solid var(--bs-alert-border-color);
            --bs-alert-border-radius: 0.375rem;
            position: relative;
            padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
            margin-bottom: var(--bs-alert-margin-bottom);
            color: var(--bs-alert-color);
            background-color: var(--bs-alert-bg);
            border: var(--bs-alert-border);
            border-radius: var(--bs-alert-border-radius);
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 700;
        }

        .alert-dismissible {
            padding-right: 3rem;
        }
        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: 1.25rem 1rem;
        }

        .alert-primary {
            --bs-alert-color: #312882;
            --bs-alert-bg: #dcd9f7;
            --bs-alert-border-color: #cbc7f4;
        }
        .alert-primary .alert-link {
            color: #272068;
        }

        .alert-white {
            --bs-alert-color: #999999;
            --bs-alert-bg: white;
            --bs-alert-border-color: white;
        }
        .alert-white .alert-link {
            color: #7a7a7a;
        }

        .alert-secondary {
            --bs-alert-color: #505153;
            --bs-alert-bg: #e7e7e8;
            --bs-alert-border-color: #dadbdc;
        }
        .alert-secondary .alert-link {
            color: #404142;
        }

        .alert-success {
            --bs-alert-color: #077151;
            --bs-alert-bg: #cef2e7;
            --bs-alert-border-color: #b6ebdb;
        }
        .alert-success .alert-link {
            color: #065a41;
        }

        .alert-info {
            --bs-alert-color: #0e616e;
            --bs-alert-bg: #d1ecf1;
            --bs-alert-border-color: #b9e3ea;
        }
        .alert-info .alert-link {
            color: #0b4e58;
        }

        .alert-warning {
            --bs-alert-color: #94751c;
            --bs-alert-bg: #fdf3d5;
            --bs-alert-border-color: #fdedc0;
        }
        .alert-warning .alert-link {
            color: #765e16;
        }

        .alert-danger {
            --bs-alert-color: #801925;
            --bs-alert-bg: #f7d4d8;
            --bs-alert-border-color: #f3bfc5;
        }
        .alert-danger .alert-link {
            color: #66141e;
        }

        .alert-light {
            --bs-alert-color: #939394;
            --bs-alert-bg: #fdfdfd;
            --bs-alert-border-color: #fcfcfc;
        }
        .alert-light .alert-link {
            color: #767676;
        }

        .alert-dark {
            --bs-alert-color: #07060b;
            --bs-alert-bg: #ceced0;
            --bs-alert-border-color: #b6b6b8;
        }
        .alert-dark .alert-link {
            color: #060509;
        }

        .alert-orange {
            --bs-alert-color: #984c0c;
            --bs-alert-bg: #ffe5d0;
            --bs-alert-border-color: #fed8b9;
        }
        .alert-orange .alert-link {
            color: #7a3d0a;
        }

        .alert-mode {
            --bs-alert-color: #999999;
            --bs-alert-bg: white;
            --bs-alert-border-color: white;
        }
        .alert-mode .alert-link {
            color: #7a7a7a;
        }

        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem;
            }
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem;
            }
        }
        .progress {
            --bs-progress-height: 1rem;
            --bs-progress-font-size: 0.75rem;
            --bs-progress-bg: var(--bs-gray-200);
            --bs-progress-border-radius: 0.375rem;
            --bs-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
            --bs-progress-bar-color: #fff;
            --bs-progress-bar-bg: #0d6efd;
            --bs-progress-bar-transition: width 0.6s ease;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: var(--bs-progress-height);
            overflow: hidden;
            font-size: var(--bs-progress-font-size);
            background-color: var(--bs-progress-bg);
            border-radius: var(--bs-progress-border-radius);
        }

        .progress-bar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: hidden;
            color: var(--bs-progress-bar-color);
            text-align: center;
            white-space: nowrap;
            background-color: var(--bs-progress-bar-bg);
            -webkit-transition: var(--bs-progress-bar-transition);
            transition: var(--bs-progress-bar-transition);
        }
        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                -webkit-transition: none;
                transition: none;
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: var(--bs-progress-height) var(--bs-progress-height);
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes;
        }
        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none;
            }
        }

        .list-group {
            --bs-list-group-color: var(--bs-gray-600);
            --bs-list-group-bg: transparent;
            --bs-list-group-border-color: rgba(0, 0, 0, 0.125);
            --bs-list-group-border-width: 1px;
            --bs-list-group-border-radius: 0.5rem;
            --bs-list-group-item-padding-x: 1rem;
            --bs-list-group-item-padding-y: 0.5rem;
            --bs-list-group-action-color: #495057;
            --bs-list-group-action-hover-color: var(--bs-gray-700);
            --bs-list-group-action-hover-bg: rgba(var(--bs-primary-rgb), 0.1);
            --bs-list-group-action-active-color: var(--bs-gray-700);
            --bs-list-group-action-active-bg: rgba(var(--bs-primary-rgb), 0.1);
            --bs-list-group-disabled-color: #6c757d;
            --bs-list-group-disabled-bg: #fff;
            --bs-list-group-active-color: #fff;
            --bs-list-group-active-bg: var(--bs-primary);
            --bs-list-group-active-border-color: var(--bs-primary);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: var(--bs-list-group-border-radius);
        }

        .list-group-numbered {
            list-style-type: none;
            counter-reset: section;
        }
        .list-group-numbered > .list-group-item::before {
            content: counters(section, ".") ". ";
            counter-increment: section;
        }

        .list-group-item-action {
            width: 100%;
            color: var(--bs-list-group-action-color);
            text-align: inherit;
        }
        .list-group-item-action:hover, .list-group-item-action:focus {
            z-index: 1;
            color: var(--bs-list-group-action-hover-color);
            text-decoration: none;
            background-color: var(--bs-list-group-action-hover-bg);
        }
        .list-group-item-action:active {
            color: var(--bs-list-group-action-active-color);
            background-color: var(--bs-list-group-action-active-bg);
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
            color: var(--bs-list-group-color);
            background-color: var(--bs-list-group-bg);
            border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
        }
        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }
        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit;
        }
        .list-group-item.disabled, .list-group-item:disabled {
            color: var(--bs-list-group-disabled-color);
            pointer-events: none;
            background-color: var(--bs-list-group-disabled-bg);
        }
        .list-group-item.active {
            z-index: 2;
            color: var(--bs-list-group-active-color);
            background-color: var(--bs-list-group-active-bg);
            border-color: var(--bs-list-group-active-border-color);
        }
        .list-group-item + .list-group-item {
            border-top-width: 0;
        }
        .list-group-item + .list-group-item.active {
            margin-top: calc(-1 * var(--bs-list-group-border-width));
            border-top-width: var(--bs-list-group-border-width);
        }

        .list-group-horizontal {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .list-group-horizontal > .list-group-item:first-child:not(:last-child) {
            border-bottom-left-radius: var(--bs-list-group-border-radius);
            border-top-right-radius: 0;
        }
        .list-group-horizontal > .list-group-item:last-child:not(:first-child) {
            border-top-right-radius: var(--bs-list-group-border-radius);
            border-bottom-left-radius: 0;
        }
        .list-group-horizontal > .list-group-item.active {
            margin-top: 0;
        }
        .list-group-horizontal > .list-group-item + .list-group-item {
            border-top-width: var(--bs-list-group-border-width);
            border-left-width: 0;
        }
        .list-group-horizontal > .list-group-item + .list-group-item.active {
            margin-left: calc(-1 * var(--bs-list-group-border-width));
            border-left-width: var(--bs-list-group-border-width);
        }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-sm > .list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0;
            }
            .list-group-horizontal-sm > .list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-sm > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-sm > .list-group-item + .list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0;
            }
            .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
                margin-left: calc(-1 * var(--bs-list-group-border-width));
                border-left-width: var(--bs-list-group-border-width);
            }
        }
        @media (min-width: 768px) {
            .list-group-horizontal-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-md > .list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0;
            }
            .list-group-horizontal-md > .list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-md > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-md > .list-group-item + .list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0;
            }
            .list-group-horizontal-md > .list-group-item + .list-group-item.active {
                margin-left: calc(-1 * var(--bs-list-group-border-width));
                border-left-width: var(--bs-list-group-border-width);
            }
        }
        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-lg > .list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0;
            }
            .list-group-horizontal-lg > .list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-lg > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-lg > .list-group-item + .list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0;
            }
            .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
                margin-left: calc(-1 * var(--bs-list-group-border-width));
                border-left-width: var(--bs-list-group-border-width);
            }
        }
        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-xl > .list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0;
            }
            .list-group-horizontal-xl > .list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-xl > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-xl > .list-group-item + .list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0;
            }
            .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
                margin-left: calc(-1 * var(--bs-list-group-border-width));
                border-left-width: var(--bs-list-group-border-width);
            }
        }
        @media (min-width: 1400px) {
            .list-group-horizontal-xxl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-xxl > .list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0;
            }
            .list-group-horizontal-xxl > .list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-xxl > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-xxl > .list-group-item + .list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0;
            }
            .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
                margin-left: calc(-1 * var(--bs-list-group-border-width));
                border-left-width: var(--bs-list-group-border-width);
            }
        }
        .list-group-flush {
            border-radius: 0;
        }
        .list-group-flush > .list-group-item {
            border-width: 0 0 var(--bs-list-group-border-width);
        }
        .list-group-flush > .list-group-item:last-child {
            border-bottom-width: 0;
        }

        .list-group-item-primary {
            color: #312882;
            background-color: #dcd9f7;
        }
        .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
            color: #312882;
            background-color: #c6c3de;
        }
        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #312882;
            border-color: #312882;
        }

        .list-group-item-white {
            color: #999999;
            background-color: white;
        }
        .list-group-item-white.list-group-item-action:hover, .list-group-item-white.list-group-item-action:focus {
            color: #999999;
            background-color: #e6e6e6;
        }
        .list-group-item-white.list-group-item-action.active {
            color: #fff;
            background-color: #999999;
            border-color: #999999;
        }

        .list-group-item-secondary {
            color: #505153;
            background-color: #e7e7e8;
        }
        .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
            color: #505153;
            background-color: #d0d0d1;
        }
        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #505153;
            border-color: #505153;
        }

        .list-group-item-success {
            color: #077151;
            background-color: #cef2e7;
        }
        .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
            color: #077151;
            background-color: #b9dad0;
        }
        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #077151;
            border-color: #077151;
        }

        .list-group-item-info {
            color: #0e616e;
            background-color: #d1ecf1;
        }
        .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
            color: #0e616e;
            background-color: #bcd4d9;
        }
        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #0e616e;
            border-color: #0e616e;
        }

        .list-group-item-warning {
            color: #94751c;
            background-color: #fdf3d5;
        }
        .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
            color: #94751c;
            background-color: #e4dbc0;
        }
        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #94751c;
            border-color: #94751c;
        }

        .list-group-item-danger {
            color: #801925;
            background-color: #f7d4d8;
        }
        .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
            color: #801925;
            background-color: #debfc2;
        }
        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #801925;
            border-color: #801925;
        }

        .list-group-item-light {
            color: #939394;
            background-color: #fdfdfd;
        }
        .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
            color: #939394;
            background-color: #e4e4e4;
        }
        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #939394;
            border-color: #939394;
        }

        .list-group-item-dark {
            color: #07060b;
            background-color: #ceced0;
        }
        .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
            color: #07060b;
            background-color: #b9b9bb;
        }
        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #07060b;
            border-color: #07060b;
        }

        .list-group-item-orange {
            color: #984c0c;
            background-color: #ffe5d0;
        }
        .list-group-item-orange.list-group-item-action:hover, .list-group-item-orange.list-group-item-action:focus {
            color: #984c0c;
            background-color: #e6cebb;
        }
        .list-group-item-orange.list-group-item-action.active {
            color: #fff;
            background-color: #984c0c;
            border-color: #984c0c;
        }

        .list-group-item-mode {
            color: #999999;
            background-color: white;
        }
        .list-group-item-mode.list-group-item-action:hover, .list-group-item-mode.list-group-item-action:focus {
            color: #999999;
            background-color: #e6e6e6;
        }
        .list-group-item-mode.list-group-item-action.active {
            color: #fff;
            background-color: #999999;
            border-color: #999999;
        }

        .btn-close {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: 0.25em 0.25em;
            color: #0b0a12;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230b0a12'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            border-radius: 0.5rem;
            opacity: 0.5;
        }
        .btn-close:hover {
            color: #0b0a12;
            text-decoration: none;
            opacity: 0.75;
        }
        .btn-close:focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
            box-shadow: 0 0 0 0 rgba(var(--bs-primary), 0.25);
            opacity: 1;
        }
        .btn-close:disabled, .btn-close.disabled {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 0.25;
        }

        .btn-close-white {
            -webkit-filter: invert(1) grayscale(100%) brightness(200%);
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        .toast {
            --bs-toast-zindex: 1090;
            --bs-toast-padding-x: 0.75rem;
            --bs-toast-padding-y: 0.5rem;
            --bs-toast-spacing: 1.5rem;
            --bs-toast-max-width: 350px;
            --bs-toast-font-size: 0.875rem;
            --bs-toast-color: ;
            --bs-toast-bg: rgba(255, 255, 255, 0.85);
            --bs-toast-border-width: 1px;
            --bs-toast-border-color: var(--bs-border-color-translucent);
            --bs-toast-border-radius: 0.375rem;
            --bs-toast-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --bs-toast-header-color: #6c757d;
            --bs-toast-header-bg: rgba(255, 255, 255, 0.85);
            --bs-toast-header-border-color: rgba(0, 0, 0, 0.05);
            width: var(--bs-toast-max-width);
            max-width: 100%;
            font-size: var(--bs-toast-font-size);
            color: var(--bs-toast-color);
            pointer-events: auto;
            background-color: var(--bs-toast-bg);
            background-clip: padding-box;
            border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
            -webkit-box-shadow: var(--bs-toast-box-shadow);
            box-shadow: var(--bs-toast-box-shadow);
            border-radius: var(--bs-toast-border-radius);
        }
        .toast.showing {
            opacity: 0;
        }
        .toast:not(.show) {
            display: none;
        }

        .toast-container {
            --bs-toast-zindex: 1090;
            position: absolute;
            z-index: var(--bs-toast-zindex);
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            pointer-events: none;
        }
        .toast-container > :not(:last-child) {
            margin-bottom: var(--bs-toast-spacing);
        }

        .toast-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
            color: var(--bs-toast-header-color);
            background-color: var(--bs-toast-header-bg);
            background-clip: padding-box;
            border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
            border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
            border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
        }
        .toast-header .btn-close {
            margin-right: calc(-0.5 * var(--bs-toast-padding-x));
            margin-left: var(--bs-toast-padding-x);
        }

        .toast-body {
            padding: var(--bs-toast-padding-x);
            word-wrap: break-word;
        }

        .modal {
            --bs-modal-zindex: 1055;
            --bs-modal-width: 500px;
            --bs-modal-padding: 1rem;
            --bs-modal-margin: 0.5rem;
            --bs-modal-color: ;
            --bs-modal-bg: #fff;
            --bs-modal-border-color: var(--bs-border-color-translucent);
            --bs-modal-border-width: 0;
            --bs-modal-border-radius: 0.5rem;
            --bs-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --bs-modal-inner-border-radius: 0.5rem;
            --bs-modal-header-padding-x: 1rem;
            --bs-modal-header-padding-y: 1rem;
            --bs-modal-header-padding: 1rem 1rem;
            --bs-modal-header-border-color: var(--bs-border-color);
            --bs-modal-header-border-width: 1px;
            --bs-modal-title-line-height: 1.5;
            --bs-modal-footer-gap: 0.5rem;
            --bs-modal-footer-bg: ;
            --bs-modal-footer-border-color: var(--bs-border-color);
            --bs-modal-footer-border-width: 1px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--bs-modal-zindex);
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: var(--bs-modal-margin);
            pointer-events: none;
        }
        .modal.fade .modal-dialog {
            -webkit-transition: -webkit-transform 0.3s ease-out;
            transition: -webkit-transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px);
        }
        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                -webkit-transition: none;
                transition: none;
            }
        }
        .modal.show .modal-dialog {
            -webkit-transform: none;
            transform: none;
        }
        .modal.modal-static .modal-dialog {
            -webkit-transform: scale(1.02);
            transform: scale(1.02);
        }

        .modal-dialog-scrollable {
            height: calc(100% - var(--bs-modal-margin) * 2);
        }
        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden;
        }
        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }

        .modal-dialog-centered {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - var(--bs-modal-margin) * 2);
        }

        .modal-content {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            color: var(--bs-modal-color);
            pointer-events: auto;
            background-color: var(--bs-modal-bg);
            background-clip: padding-box;
            border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
            border-radius: var(--bs-modal-border-radius);
            outline: 0;
        }

        .modal-backdrop {
            --bs-backdrop-zindex: 1050;
            --bs-backdrop-bg: #000;
            --bs-backdrop-opacity: 0.5;
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--bs-backdrop-zindex);
            width: 100vw;
            height: 100vh;
            background-color: var(--bs-backdrop-bg);
        }
        .modal-backdrop.fade {
            opacity: 0;
        }
        .modal-backdrop.show {
            opacity: var(--bs-backdrop-opacity);
        }

        .modal-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: var(--bs-modal-header-padding);
            border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
            border-top-left-radius: var(--bs-modal-inner-border-radius);
            border-top-right-radius: var(--bs-modal-inner-border-radius);
        }
        .modal-header .btn-close {
            padding: calc(var(--bs-modal-header-padding-y) * 0.5) calc(var(--bs-modal-header-padding-x) * 0.5);
            margin: calc(-0.5 * var(--bs-modal-header-padding-y)) calc(-0.5 * var(--bs-modal-header-padding-x)) calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
        }

        .modal-title {
            margin-bottom: 0;
            line-height: var(--bs-modal-title-line-height);
        }

        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: var(--bs-modal-padding);
        }

        .modal-footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
            background-color: var(--bs-modal-footer-bg);
            border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
            border-bottom-right-radius: var(--bs-modal-inner-border-radius);
            border-bottom-left-radius: var(--bs-modal-inner-border-radius);
        }
        .modal-footer > * {
            margin: calc(var(--bs-modal-footer-gap) * 0.5);
        }

        @media (min-width: 576px) {
            .modal {
                --bs-modal-margin: 1.75rem;
                --bs-modal-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            }
            .modal-dialog {
                max-width: var(--bs-modal-width);
                margin-right: auto;
                margin-left: auto;
            }
            .modal-sm {
                --bs-modal-width: 300px;
            }
        }
        @media (min-width: 992px) {
            .modal-lg,
            .modal-xl {
                --bs-modal-width: 800px;
            }
        }
        @media (min-width: 1200px) {
            .modal-xl {
                --bs-modal-width: 1140px;
            }
        }
        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }
        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }
        .modal-fullscreen .modal-header,
        .modal-fullscreen .modal-footer {
            border-radius: 0;
        }
        .modal-fullscreen .modal-body {
            overflow-y: auto;
        }

        @media (max-width: 575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-sm-down .modal-header,
            .modal-fullscreen-sm-down .modal-footer {
                border-radius: 0;
            }
            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto;
            }
        }
        @media (max-width: 767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-md-down .modal-header,
            .modal-fullscreen-md-down .modal-footer {
                border-radius: 0;
            }
            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto;
            }
        }
        @media (max-width: 991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-lg-down .modal-header,
            .modal-fullscreen-lg-down .modal-footer {
                border-radius: 0;
            }
            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto;
            }
        }
        @media (max-width: 1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-xl-down .modal-header,
            .modal-fullscreen-xl-down .modal-footer {
                border-radius: 0;
            }
            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto;
            }
        }
        @media (max-width: 1399.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-xxl-down .modal-header,
            .modal-fullscreen-xxl-down .modal-footer {
                border-radius: 0;
            }
            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto;
            }
        }
        .tooltip {
            --bs-tooltip-zindex: 1080;
            --bs-tooltip-max-width: 200px;
            --bs-tooltip-padding-x: 0.5rem;
            --bs-tooltip-padding-y: 0.25rem;
            --bs-tooltip-margin: ;
            --bs-tooltip-font-size: 0.6875rem;
            --bs-tooltip-color: #fff;
            --bs-tooltip-bg: #000;
            --bs-tooltip-border-radius: 0.375rem;
            --bs-tooltip-opacity: 0.9;
            --bs-tooltip-arrow-width: 0.8rem;
            --bs-tooltip-arrow-height: 0.4rem;
            z-index: var(--bs-tooltip-zindex);
            display: block;
            padding: var(--bs-tooltip-arrow-height);
            margin: var(--bs-tooltip-margin);
            font-family: "DM Sans", sans-serif;
            font-style: normal;
            font-weight: 500;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            white-space: normal;
            word-spacing: normal;
            line-break: auto;
            font-size: var(--bs-tooltip-font-size);
            word-wrap: break-word;
            opacity: 0;
        }
        .tooltip.show {
            opacity: var(--bs-tooltip-opacity);
        }
        .tooltip .tooltip-arrow {
            display: block;
            width: var(--bs-tooltip-arrow-width);
            height: var(--bs-tooltip-arrow-height);
        }
        .tooltip .tooltip-arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
            bottom: 0;
        }
        .bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
            top: -1px;
            border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
            border-top-color: var(--bs-tooltip-bg);
        }

        /* rtl:begin:ignore */
        .bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
            left: 0;
            width: var(--bs-tooltip-arrow-height);
            height: var(--bs-tooltip-arrow-width);
        }
        .bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
            right: -1px;
            border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
            border-right-color: var(--bs-tooltip-bg);
        }

        /* rtl:end:ignore */
        .bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
            top: 0;
        }
        .bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
            bottom: -1px;
            border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
            border-bottom-color: var(--bs-tooltip-bg);
        }

        /* rtl:begin:ignore */
        .bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
            right: 0;
            width: var(--bs-tooltip-arrow-height);
            height: var(--bs-tooltip-arrow-width);
        }
        .bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
            left: -1px;
            border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
            border-left-color: var(--bs-tooltip-bg);
        }

        /* rtl:end:ignore */
        .tooltip-inner {
            max-width: var(--bs-tooltip-max-width);
            padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
            color: var(--bs-tooltip-color);
            text-align: center;
            background-color: var(--bs-tooltip-bg);
            border-radius: var(--bs-tooltip-border-radius);
        }

        .popover {
            --bs-popover-zindex: 1070;
            --bs-popover-max-width: 200px;
            --bs-popover-font-size: 0.875rem;
            --bs-popover-bg: #fff;
            --bs-popover-border-width: 1px;
            --bs-popover-border-color: rgba(0, 0, 0, 0.2);
            --bs-popover-border-radius: 0.5rem;
            --bs-popover-inner-border-radius: calc(0.5rem - 1px);
            --bs-popover-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --bs-popover-header-padding-x: 1rem;
            --bs-popover-header-padding-y: 0.5rem;
            --bs-popover-header-font-size: 1rem;
            --bs-popover-header-color: var(--bs-gray-900);
            --bs-popover-header-bg: #f0f0f0;
            --bs-popover-body-padding-x: 1rem;
            --bs-popover-body-padding-y: 1rem;
            --bs-popover-body-color: #212529;
            --bs-popover-arrow-width: 1rem;
            --bs-popover-arrow-height: 0.5rem;
            --bs-popover-arrow-border: var(--bs-popover-border-color);
            z-index: var(--bs-popover-zindex);
            display: block;
            max-width: var(--bs-popover-max-width);
            font-family: "DM Sans", sans-serif;
            font-style: normal;
            font-weight: 500;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            white-space: normal;
            word-spacing: normal;
            line-break: auto;
            font-size: var(--bs-popover-font-size);
            word-wrap: break-word;
            background-color: var(--bs-popover-bg);
            background-clip: padding-box;
            border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
            border-radius: var(--bs-popover-border-radius);
        }
        .popover .popover-arrow {
            display: block;
            width: var(--bs-popover-arrow-width);
            height: var(--bs-popover-arrow-height);
        }
        .popover .popover-arrow::before, .popover .popover-arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
            border-width: 0;
        }

        .bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
            bottom: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
        }
        .bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before, .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
            border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
        }
        .bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
            bottom: 0;
            border-top-color: var(--bs-popover-arrow-border);
        }
        .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
            bottom: var(--bs-popover-border-width);
            border-top-color: var(--bs-popover-bg);
        }

        /* rtl:begin:ignore */
        .bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
            left: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
            width: var(--bs-popover-arrow-height);
            height: var(--bs-popover-arrow-width);
        }
        .bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before, .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
            border-width: calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
        }
        .bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
            left: 0;
            border-right-color: var(--bs-popover-arrow-border);
        }
        .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
            left: var(--bs-popover-border-width);
            border-right-color: var(--bs-popover-bg);
        }

        /* rtl:end:ignore */
        .bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
            top: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
        }
        .bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before, .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
            border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
        }
        .bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
            top: 0;
            border-bottom-color: var(--bs-popover-arrow-border);
        }
        .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
            top: var(--bs-popover-border-width);
            border-bottom-color: var(--bs-popover-bg);
        }
        .bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: var(--bs-popover-arrow-width);
            margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
            content: "";
            border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg);
        }

        /* rtl:begin:ignore */
        .bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
            right: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
            width: var(--bs-popover-arrow-height);
            height: var(--bs-popover-arrow-width);
        }
        .bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before, .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
            border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
        }
        .bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
            right: 0;
            border-left-color: var(--bs-popover-arrow-border);
        }
        .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
            right: var(--bs-popover-border-width);
            border-left-color: var(--bs-popover-bg);
        }

        /* rtl:end:ignore */
        .popover-header {
            padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
            margin-bottom: 0;
            font-size: var(--bs-popover-header-font-size);
            color: var(--bs-popover-header-color);
            background-color: var(--bs-popover-header-bg);
            border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
            border-top-left-radius: var(--bs-popover-inner-border-radius);
            border-top-right-radius: var(--bs-popover-inner-border-radius);
        }
        .popover-header:empty {
            display: none;
        }

        .popover-body {
            padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
            color: var(--bs-popover-body-color);
        }

        .carousel {
            position: relative;
        }

        .carousel.pointer-event {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        .carousel-inner::after {
            display: block;
            clear: both;
            content: "";
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: -webkit-transform 0.6s ease-in-out;
            transition: -webkit-transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .carousel-item {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        /* rtl:begin:ignore */
        .carousel-item-next:not(.carousel-item-start),
        .active.carousel-item-end {
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        .carousel-item-prev:not(.carousel-item-end),
        .active.carousel-item-start {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }

        /* rtl:end:ignore */
        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-property: opacity;
            transition-property: opacity;
            -webkit-transform: none;
            transform: none;
        }
        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-start,
        .carousel-fade .carousel-item-prev.carousel-item-end {
            z-index: 1;
            opacity: 1;
        }
        .carousel-fade .active.carousel-item-start,
        .carousel-fade .active.carousel-item-end {
            z-index: 0;
            opacity: 0;
            -webkit-transition: opacity 0s 0.6s;
            transition: opacity 0s 0.6s;
        }
        @media (prefers-reduced-motion: reduce) {
            .carousel-fade .active.carousel-item-start,
            .carousel-fade .active.carousel-item-end {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: none;
            border: 0;
            opacity: 0.5;
            -webkit-transition: opacity 0.15s ease;
            transition: opacity 0.15s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .carousel-control-prev,
            .carousel-control-next {
                -webkit-transition: none;
                transition: none;
            }
        }
        .carousel-control-prev:hover, .carousel-control-prev:focus,
        .carousel-control-next:hover,
        .carousel-control-next:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: 0.9;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%;
        }

        /* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 0;
            margin-right: 15%;
            margin-bottom: 1rem;
            margin-left: 15%;
            list-style: none;
        }
        .carousel-indicators [data-bs-target] {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            padding: 0;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: 0.5;
            -webkit-transition: opacity 0.6s ease;
            transition: opacity 0.6s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .carousel-indicators [data-bs-target] {
                -webkit-transition: none;
                transition: none;
            }
        }
        .carousel-indicators .active {
            opacity: 1;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 1.25rem;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
        }

        .carousel-dark .carousel-control-prev-icon,
        .carousel-dark .carousel-control-next-icon {
            -webkit-filter: invert(1) grayscale(100);
            filter: invert(1) grayscale(100);
        }
        .carousel-dark .carousel-indicators [data-bs-target] {
            background-color: #000;
        }
        .carousel-dark .carousel-caption {
            color: #000;
        }

        .spinner-grow,
        .spinner-border {
            display: inline-block;
            width: var(--bs-spinner-width);
            height: var(--bs-spinner-height);
            vertical-align: var(--bs-spinner-vertical-align);
            border-radius: 50%;
            -webkit-animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
            animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
        }

        @-webkit-keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg) /* rtl:ignore */;
                transform: rotate(360deg) /* rtl:ignore */;
            }
        }

        @keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg) /* rtl:ignore */;
                transform: rotate(360deg) /* rtl:ignore */;
            }
        }
        .spinner-border {
            --bs-spinner-width: 2rem;
            --bs-spinner-height: 2rem;
            --bs-spinner-vertical-align: -0.125em;
            --bs-spinner-border-width: 0.25em;
            --bs-spinner-animation-speed: 0.75s;
            --bs-spinner-animation-name: spinner-border;
            border: var(--bs-spinner-border-width) solid currentcolor;
            border-right-color: transparent;
        }

        .spinner-border-sm {
            --bs-spinner-width: 1rem;
            --bs-spinner-height: 1rem;
            --bs-spinner-border-width: 0.2em;
        }

        @-webkit-keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .spinner-grow {
            --bs-spinner-width: 2rem;
            --bs-spinner-height: 2rem;
            --bs-spinner-vertical-align: -0.125em;
            --bs-spinner-animation-speed: 0.75s;
            --bs-spinner-animation-name: spinner-grow;
            background-color: currentcolor;
            opacity: 0;
        }

        .spinner-grow-sm {
            --bs-spinner-width: 1rem;
            --bs-spinner-height: 1rem;
        }

        @media (prefers-reduced-motion: reduce) {
            .spinner-border,
            .spinner-grow {
                --bs-spinner-animation-speed: 1.5s;
            }
        }
        .offcanvas, .offcanvas-xxl, .offcanvas-xl, .offcanvas-lg, .offcanvas-md, .offcanvas-sm {
            --bs-offcanvas-zindex: 1045;
            --bs-offcanvas-width: 300px;
            --bs-offcanvas-height: 100%;
            --bs-offcanvas-padding-x: 1.875rem;
            --bs-offcanvas-padding-y: 1rem;
            --bs-offcanvas-color: ;
            --bs-offcanvas-bg: #fff;
            --bs-offcanvas-border-width: 1px;
            --bs-offcanvas-border-color: var(--bs-border-color-translucent);
            --bs-offcanvas-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm {
                position: fixed;
                bottom: 0;
                z-index: var(--bs-offcanvas-zindex);
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                -webkit-transition: -webkit-transform 0.3s ease-in-out;
                transition: -webkit-transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
            }
        }
        @media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-sm {
                -webkit-transition: none;
                transition: none;
            }
        }
        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }
        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }
        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }
        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
        }
        @media (max-width: 575.98px) {
            .offcanvas-sm.showing, .offcanvas-sm.show:not(.hiding) {
                -webkit-transform: none;
                transform: none;
            }
        }
        @media (max-width: 575.98px) {
            .offcanvas-sm.showing, .offcanvas-sm.hiding, .offcanvas-sm.show {
                visibility: visible;
            }
        }
        @media (min-width: 576px) {
            .offcanvas-sm {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important;
            }
            .offcanvas-sm .offcanvas-header {
                display: none;
            }
            .offcanvas-sm .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md {
                position: fixed;
                bottom: 0;
                z-index: var(--bs-offcanvas-zindex);
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                -webkit-transition: -webkit-transform 0.3s ease-in-out;
                transition: -webkit-transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
            }
        }
        @media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-md {
                -webkit-transition: none;
                transition: none;
            }
        }
        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }
        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }
        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }
        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
        }
        @media (max-width: 767.98px) {
            .offcanvas-md.showing, .offcanvas-md.show:not(.hiding) {
                -webkit-transform: none;
                transform: none;
            }
        }
        @media (max-width: 767.98px) {
            .offcanvas-md.showing, .offcanvas-md.hiding, .offcanvas-md.show {
                visibility: visible;
            }
        }
        @media (min-width: 768px) {
            .offcanvas-md {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important;
            }
            .offcanvas-md .offcanvas-header {
                display: none;
            }
            .offcanvas-md .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg {
                position: fixed;
                bottom: 0;
                z-index: var(--bs-offcanvas-zindex);
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                -webkit-transition: -webkit-transform 0.3s ease-in-out;
                transition: -webkit-transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
            }
        }
        @media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-lg {
                -webkit-transition: none;
                transition: none;
            }
        }
        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }
        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }
        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }
        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
        }
        @media (max-width: 991.98px) {
            .offcanvas-lg.showing, .offcanvas-lg.show:not(.hiding) {
                -webkit-transform: none;
                transform: none;
            }
        }
        @media (max-width: 991.98px) {
            .offcanvas-lg.showing, .offcanvas-lg.hiding, .offcanvas-lg.show {
                visibility: visible;
            }
        }
        @media (min-width: 992px) {
            .offcanvas-lg {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important;
            }
            .offcanvas-lg .offcanvas-header {
                display: none;
            }
            .offcanvas-lg .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl {
                position: fixed;
                bottom: 0;
                z-index: var(--bs-offcanvas-zindex);
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                -webkit-transition: -webkit-transform 0.3s ease-in-out;
                transition: -webkit-transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
            }
        }
        @media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-xl {
                -webkit-transition: none;
                transition: none;
            }
        }
        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }
        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }
        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }
        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
        }
        @media (max-width: 1199.98px) {
            .offcanvas-xl.showing, .offcanvas-xl.show:not(.hiding) {
                -webkit-transform: none;
                transform: none;
            }
        }
        @media (max-width: 1199.98px) {
            .offcanvas-xl.showing, .offcanvas-xl.hiding, .offcanvas-xl.show {
                visibility: visible;
            }
        }
        @media (min-width: 1200px) {
            .offcanvas-xl {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important;
            }
            .offcanvas-xl .offcanvas-header {
                display: none;
            }
            .offcanvas-xl .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl {
                position: fixed;
                bottom: 0;
                z-index: var(--bs-offcanvas-zindex);
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                -webkit-transition: -webkit-transform 0.3s ease-in-out;
                transition: -webkit-transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out;
                transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
            }
        }
        @media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-xxl {
                -webkit-transition: none;
                transition: none;
            }
        }
        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }
        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }
        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }
        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
        }
        @media (max-width: 1399.98px) {
            .offcanvas-xxl.showing, .offcanvas-xxl.show:not(.hiding) {
                -webkit-transform: none;
                transform: none;
            }
        }
        @media (max-width: 1399.98px) {
            .offcanvas-xxl.showing, .offcanvas-xxl.hiding, .offcanvas-xxl.show {
                visibility: visible;
            }
        }
        @media (min-width: 1400px) {
            .offcanvas-xxl {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important;
            }
            .offcanvas-xxl .offcanvas-header {
                display: none;
            }
            .offcanvas-xxl .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        .offcanvas {
            position: fixed;
            bottom: 0;
            z-index: var(--bs-offcanvas-zindex);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 100%;
            color: var(--bs-offcanvas-color);
            visibility: hidden;
            background-color: var(--bs-offcanvas-bg);
            background-clip: padding-box;
            outline: 0;
            -webkit-transition: -webkit-transform 0.3s ease-in-out;
            transition: -webkit-transform 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .offcanvas {
                -webkit-transition: none;
                transition: none;
            }
        }
        .offcanvas.offcanvas-start {
            top: 0;
            left: 0;
            width: var(--bs-offcanvas-width);
            border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .offcanvas.offcanvas-end {
            top: 0;
            right: 0;
            width: var(--bs-offcanvas-width);
            border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }
        .offcanvas.offcanvas-top {
            top: 0;
            right: 0;
            left: 0;
            height: var(--bs-offcanvas-height);
            max-height: 100%;
            border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .offcanvas.offcanvas-bottom {
            right: 0;
            left: 0;
            height: var(--bs-offcanvas-height);
            max-height: 100%;
            border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
        }
        .offcanvas.showing, .offcanvas.show:not(.hiding) {
            -webkit-transform: none;
            transform: none;
        }
        .offcanvas.showing, .offcanvas.hiding, .offcanvas.show {
            visibility: visible;
        }

        .offcanvas-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }
        .offcanvas-backdrop.fade {
            opacity: 0;
        }
        .offcanvas-backdrop.show {
            opacity: 0.5;
        }

        .offcanvas-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
        }
        .offcanvas-header .btn-close {
            padding: calc(var(--bs-offcanvas-padding-y) * 0.5) calc(var(--bs-offcanvas-padding-x) * 0.5);
            margin-top: calc(-0.5 * var(--bs-offcanvas-padding-y));
            margin-right: calc(-0.5 * var(--bs-offcanvas-padding-x));
            margin-bottom: calc(-0.5 * var(--bs-offcanvas-padding-y));
        }

        .offcanvas-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .offcanvas-body {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
            overflow-y: auto;
        }

        .placeholder {
            display: inline-block;
            min-height: 1em;
            vertical-align: middle;
            cursor: wait;
            background-color: currentcolor;
            opacity: 0.5;
        }
        .placeholder.btn::before {
            display: inline-block;
            content: "";
        }

        .placeholder-xs {
            min-height: 0.6em;
        }

        .placeholder-sm {
            min-height: 0.8em;
        }

        .placeholder-lg {
            min-height: 1.2em;
        }

        .placeholder-glow .placeholder {
            -webkit-animation: placeholder-glow 2s ease-in-out infinite;
            animation: placeholder-glow 2s ease-in-out infinite;
        }

        @-webkit-keyframes placeholder-glow {
            50% {
                opacity: 0.2;
            }
        }

        @keyframes placeholder-glow {
            50% {
                opacity: 0.2;
            }
        }
        .placeholder-wave {
            -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
            mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
            -webkit-mask-size: 200% 100%;
            mask-size: 200% 100%;
            -webkit-animation: placeholder-wave 2s linear infinite;
            animation: placeholder-wave 2s linear infinite;
        }

        @-webkit-keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%;
            }
        }

        @keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%;
            }
        }
        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .text-bg-primary {
            color: #fff !important;
            background-color: RGBA(81, 67, 217, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-white {
            color: #000 !important;
            background-color: RGBA(255, 255, 255, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-secondary {
            color: #fff !important;
            background-color: RGBA(133, 135, 138, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-success {
            color: #fff !important;
            background-color: RGBA(12, 188, 135, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-info {
            color: #fff !important;
            background-color: RGBA(23, 162, 184, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-warning {
            color: #000 !important;
            background-color: RGBA(247, 195, 46, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-danger {
            color: #fff !important;
            background-color: RGBA(214, 41, 62, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-light {
            color: #000 !important;
            background-color: RGBA(245, 245, 246, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-dark {
            color: #fff !important;
            background-color: RGBA(11, 10, 18, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-orange {
            color: #fff !important;
            background-color: RGBA(253, 126, 20, var(--bs-bg-opacity, 1)) !important;
        }

        .text-bg-mode {
            color: #000 !important;
            background-color: RGBA(255, 255, 255, var(--bs-bg-opacity, 1)) !important;
        }

        .link-primary {
            color: #5143d9 !important;
        }
        .link-primary:hover, .link-primary:focus {
            color: #4136ae !important;
        }

        .link-white {
            color: #fff !important;
        }
        .link-white:hover, .link-white:focus {
            color: white !important;
        }

        .link-secondary {
            color: #85878a !important;
        }
        .link-secondary:hover, .link-secondary:focus {
            color: #6a6c6e !important;
        }

        .link-success {
            color: #0cbc87 !important;
        }
        .link-success:hover, .link-success:focus {
            color: #0a966c !important;
        }

        .link-info {
            color: #17a2b8 !important;
        }
        .link-info:hover, .link-info:focus {
            color: #128293 !important;
        }

        .link-warning {
            color: #f7c32e !important;
        }
        .link-warning:hover, .link-warning:focus {
            color: #f9cf58 !important;
        }

        .link-danger {
            color: #d6293e !important;
        }
        .link-danger:hover, .link-danger:focus {
            color: #ab2132 !important;
        }

        .link-light {
            color: #f5f5f6 !important;
        }
        .link-light:hover, .link-light:focus {
            color: #f7f7f8 !important;
        }

        .link-dark {
            color: #0b0a12 !important;
        }
        .link-dark:hover, .link-dark:focus {
            color: #09080e !important;
        }

        .link-orange {
            color: #fd7e14 !important;
        }
        .link-orange:hover, .link-orange:focus {
            color: #ca6510 !important;
        }

        .link-mode {
            color: #fff !important;
        }
        .link-mode:hover, .link-mode:focus {
            color: white !important;
        }

        .ratio {
            position: relative;
            width: 100%;
        }
        .ratio::before {
            display: block;
            padding-top: var(--bs-aspect-ratio);
            content: "";
        }
        .ratio > * {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .ratio-1x1 {
            --bs-aspect-ratio: 100%;
        }

        .ratio-4x3 {
            --bs-aspect-ratio: 75%;
        }

        .ratio-16x9 {
            --bs-aspect-ratio: 56.25%;
        }

        .ratio-21x9 {
            --bs-aspect-ratio: 42.8571428571%;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .sticky-bottom {
            position: sticky;
            bottom: 0;
            z-index: 1020;
        }

        @media (min-width: 576px) {
            .sticky-sm-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
            .sticky-sm-bottom {
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }
        @media (min-width: 768px) {
            .sticky-md-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
            .sticky-md-bottom {
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }
        @media (min-width: 992px) {
            .sticky-lg-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
            .sticky-lg-bottom {
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }
        @media (min-width: 1200px) {
            .sticky-xl-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
            .sticky-xl-bottom {
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }
        @media (min-width: 1400px) {
            .sticky-xxl-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
            .sticky-xxl-bottom {
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }
        .hstack {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-item-align: stretch;
            align-self: stretch;
        }

        .vstack {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-item-align: stretch;
            align-self: stretch;
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: "";
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .vr {
            display: inline-block;
            -ms-flex-item-align: stretch;
            align-self: stretch;
            width: 1px;
            min-height: 1em;
            background-color: currentcolor;
            opacity: 0.25;
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        .float-start {
            float: left !important;
        }

        .float-end {
            float: right !important;
        }

        .float-none {
            float: none !important;
        }

        .opacity-0 {
            opacity: 0 !important;
        }

        .opacity-25 {
            opacity: 0.25 !important;
        }

        .opacity-50 {
            opacity: 0.5 !important;
        }

        .opacity-75 {
            opacity: 0.75 !important;
        }

        .opacity-100 {
            opacity: 1 !important;
        }

        .overflow-auto {
            overflow: auto !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .overflow-visible {
            overflow: visible !important;
        }

        .overflow-scroll {
            overflow: scroll !important;
        }

        .d-inline {
            display: inline !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-block {
            display: block !important;
        }

        .d-grid {
            display: grid !important;
        }

        .d-table {
            display: table !important;
        }

        .d-table-row {
            display: table-row !important;
        }

        .d-table-cell {
            display: table-cell !important;
        }

        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-none {
            display: none !important;
        }

        .shadow {
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1) !important;
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1) !important;
        }

        .shadow-sm {
            -webkit-box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15) !important;
            box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15) !important;
        }

        .shadow-lg {
            -webkit-box-shadow: 0 1rem 3rem rgba(29, 58, 83, 0.15) !important;
            box-shadow: 0 1rem 3rem rgba(29, 58, 83, 0.15) !important;
        }

        .shadow-none {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .position-static {
            position: static !important;
        }

        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .position-fixed {
            position: fixed !important;
        }

        .position-sticky {
            position: sticky !important;
        }

        .top-0 {
            top: 0 !important;
        }

        .top-50 {
            top: 50% !important;
        }

        .top-100 {
            top: 100% !important;
        }

        .bottom-0 {
            bottom: 0 !important;
        }

        .bottom-50 {
            bottom: 50% !important;
        }

        .bottom-100 {
            bottom: 100% !important;
        }

        .start-0 {
            left: 0 !important;
        }

        .start-50 {
            left: 50% !important;
        }

        .start-100 {
            left: 100% !important;
        }

        .end-0 {
            right: 0 !important;
        }

        .end-50 {
            right: 50% !important;
        }

        .end-100 {
            right: 100% !important;
        }

        .translate-middle {
            -webkit-transform: translate(-50%, -50%) !important;
            transform: translate(-50%, -50%) !important;
        }

        .translate-middle-x {
            -webkit-transform: translateX(-50%) !important;
            transform: translateX(-50%) !important;
        }

        .translate-middle-y {
            -webkit-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .border {
            border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-top {
            border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        .border-end {
            border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
        }

        .border-end-0 {
            border-right: 0 !important;
        }

        .border-bottom {
            border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-start {
            border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
        }

        .border-start-0 {
            border-left: 0 !important;
        }

        .border-primary {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important;
        }

        .border-white {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important;
        }

        .border-secondary {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important;
        }

        .border-success {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
        }

        .border-info {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
        }

        .border-warning {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important;
        }

        .border-danger {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important;
        }

        .border-light {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important;
        }

        .border-dark {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
        }

        .border-orange {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-orange-rgb), var(--bs-border-opacity)) !important;
        }

        .border-mode {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-mode-rgb), var(--bs-border-opacity)) !important;
        }

        .border-1 {
            --bs-border-width: 1px;
        }

        .border-2 {
            --bs-border-width: 2px;
        }

        .border-3 {
            --bs-border-width: 3px;
        }

        .border-4 {
            --bs-border-width: 4px;
        }

        .border-5 {
            --bs-border-width: 5px;
        }

        .border-opacity-10 {
            --bs-border-opacity: 0.1;
        }

        .border-opacity-25 {
            --bs-border-opacity: 0.25;
        }

        .border-opacity-50 {
            --bs-border-opacity: 0.5;
        }

        .border-opacity-75 {
            --bs-border-opacity: 0.75;
        }

        .border-opacity-100 {
            --bs-border-opacity: 1;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .vw-100 {
            width: 100vw !important;
        }

        .min-vw-100 {
            min-width: 100vw !important;
        }

        .h-25 {
            height: 25% !important;
        }

        .h-50 {
            height: 50% !important;
        }

        .h-75 {
            height: 75% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .mh-100 {
            max-height: 100% !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .min-vh-100 {
            min-height: 100vh !important;
        }

        .flex-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .justify-content-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .justify-content-evenly {
            -webkit-box-pack: space-evenly !important;
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
        }

        .align-items-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .order-first {
            -webkit-box-ordinal-group: 0 !important;
            -ms-flex-order: -1 !important;
            order: -1 !important;
        }

        .order-0 {
            -webkit-box-ordinal-group: 1 !important;
            -ms-flex-order: 0 !important;
            order: 0 !important;
        }

        .order-1 {
            -webkit-box-ordinal-group: 2 !important;
            -ms-flex-order: 1 !important;
            order: 1 !important;
        }

        .order-2 {
            -webkit-box-ordinal-group: 3 !important;
            -ms-flex-order: 2 !important;
            order: 2 !important;
        }

        .order-3 {
            -webkit-box-ordinal-group: 4 !important;
            -ms-flex-order: 3 !important;
            order: 3 !important;
        }

        .order-4 {
            -webkit-box-ordinal-group: 5 !important;
            -ms-flex-order: 4 !important;
            order: 4 !important;
        }

        .order-5 {
            -webkit-box-ordinal-group: 6 !important;
            -ms-flex-order: 5 !important;
            order: 5 !important;
        }

        .order-last {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important;
        }

        .m-0 {
            margin: 0 !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .m-2 {
            margin: 0.5rem !important;
        }

        .m-3 {
            margin: 1rem !important;
        }

        .m-4 {
            margin: 1.6rem !important;
        }

        .m-5 {
            margin: 3rem !important;
        }

        .m-6 {
            margin: 3.5rem !important;
        }

        .m-7 {
            margin: 4rem !important;
        }

        .m-8 {
            margin: 8rem !important;
        }

        .m-9 {
            margin: 11rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mx-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-4 {
            margin-right: 1.6rem !important;
            margin-left: 1.6rem !important;
        }

        .mx-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .mx-6 {
            margin-right: 3.5rem !important;
            margin-left: 3.5rem !important;
        }

        .mx-7 {
            margin-right: 4rem !important;
            margin-left: 4rem !important;
        }

        .mx-8 {
            margin-right: 8rem !important;
            margin-left: 8rem !important;
        }

        .mx-9 {
            margin-right: 11rem !important;
            margin-left: 11rem !important;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-4 {
            margin-top: 1.6rem !important;
            margin-bottom: 1.6rem !important;
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-6 {
            margin-top: 3.5rem !important;
            margin-bottom: 3.5rem !important;
        }

        .my-7 {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .my-8 {
            margin-top: 8rem !important;
            margin-bottom: 8rem !important;
        }

        .my-9 {
            margin-top: 11rem !important;
            margin-bottom: 11rem !important;
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-1 {
            margin-top: 0.25rem !important;
        }

        .mt-2 {
            margin-top: 0.5rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mt-4 {
            margin-top: 1.6rem !important;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .mt-6 {
            margin-top: 3.5rem !important;
        }

        .mt-7 {
            margin-top: 4rem !important;
        }

        .mt-8 {
            margin-top: 8rem !important;
        }

        .mt-9 {
            margin-top: 11rem !important;
        }

        .mt-auto {
            margin-top: auto !important;
        }

        .me-0 {
            margin-right: 0 !important;
        }

        .me-1 {
            margin-right: 0.25rem !important;
        }

        .me-2 {
            margin-right: 0.5rem !important;
        }

        .me-3 {
            margin-right: 1rem !important;
        }

        .me-4 {
            margin-right: 1.6rem !important;
        }

        .me-5 {
            margin-right: 3rem !important;
        }

        .me-6 {
            margin-right: 3.5rem !important;
        }

        .me-7 {
            margin-right: 4rem !important;
        }

        .me-8 {
            margin-right: 8rem !important;
        }

        .me-9 {
            margin-right: 11rem !important;
        }

        .me-auto {
            margin-right: auto !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4 {
            margin-bottom: 1.6rem !important;
        }

        .mb-5 {
            margin-bottom: 3rem !important;
        }

        .mb-6 {
            margin-bottom: 3.5rem !important;
        }

        .mb-7 {
            margin-bottom: 4rem !important;
        }

        .mb-8 {
            margin-bottom: 8rem !important;
        }

        .mb-9 {
            margin-bottom: 11rem !important;
        }

        .mb-auto {
            margin-bottom: auto !important;
        }

        .ms-0 {
            margin-left: 0 !important;
        }

        .ms-1 {
            margin-left: 0.25rem !important;
        }

        .ms-2 {
            margin-left: 0.5rem !important;
        }

        .ms-3 {
            margin-left: 1rem !important;
        }

        .ms-4 {
            margin-left: 1.6rem !important;
        }

        .ms-5 {
            margin-left: 3rem !important;
        }

        .ms-6 {
            margin-left: 3.5rem !important;
        }

        .ms-7 {
            margin-left: 4rem !important;
        }

        .ms-8 {
            margin-left: 8rem !important;
        }

        .ms-9 {
            margin-left: 11rem !important;
        }

        .ms-auto {
            margin-left: auto !important;
        }

        .m-n1 {
            margin: -0.25rem !important;
        }

        .m-n2 {
            margin: -0.5rem !important;
        }

        .m-n3 {
            margin: -1rem !important;
        }

        .m-n4 {
            margin: -1.6rem !important;
        }

        .m-n5 {
            margin: -3rem !important;
        }

        .m-n6 {
            margin: -3.5rem !important;
        }

        .m-n7 {
            margin: -4rem !important;
        }

        .m-n8 {
            margin: -8rem !important;
        }

        .m-n9 {
            margin: -11rem !important;
        }

        .mx-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important;
        }

        .mx-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important;
        }

        .mx-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important;
        }

        .mx-n4 {
            margin-right: -1.6rem !important;
            margin-left: -1.6rem !important;
        }

        .mx-n5 {
            margin-right: -3rem !important;
            margin-left: -3rem !important;
        }

        .mx-n6 {
            margin-right: -3.5rem !important;
            margin-left: -3.5rem !important;
        }

        .mx-n7 {
            margin-right: -4rem !important;
            margin-left: -4rem !important;
        }

        .mx-n8 {
            margin-right: -8rem !important;
            margin-left: -8rem !important;
        }

        .mx-n9 {
            margin-right: -11rem !important;
            margin-left: -11rem !important;
        }

        .my-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-n4 {
            margin-top: -1.6rem !important;
            margin-bottom: -1.6rem !important;
        }

        .my-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important;
        }

        .my-n6 {
            margin-top: -3.5rem !important;
            margin-bottom: -3.5rem !important;
        }

        .my-n7 {
            margin-top: -4rem !important;
            margin-bottom: -4rem !important;
        }

        .my-n8 {
            margin-top: -8rem !important;
            margin-bottom: -8rem !important;
        }

        .my-n9 {
            margin-top: -11rem !important;
            margin-bottom: -11rem !important;
        }

        .mt-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-n3 {
            margin-top: -1rem !important;
        }

        .mt-n4 {
            margin-top: -1.6rem !important;
        }

        .mt-n5 {
            margin-top: -3rem !important;
        }

        .mt-n6 {
            margin-top: -3.5rem !important;
        }

        .mt-n7 {
            margin-top: -4rem !important;
        }

        .mt-n8 {
            margin-top: -8rem !important;
        }

        .mt-n9 {
            margin-top: -11rem !important;
        }

        .me-n1 {
            margin-right: -0.25rem !important;
        }

        .me-n2 {
            margin-right: -0.5rem !important;
        }

        .me-n3 {
            margin-right: -1rem !important;
        }

        .me-n4 {
            margin-right: -1.6rem !important;
        }

        .me-n5 {
            margin-right: -3rem !important;
        }

        .me-n6 {
            margin-right: -3.5rem !important;
        }

        .me-n7 {
            margin-right: -4rem !important;
        }

        .me-n8 {
            margin-right: -8rem !important;
        }

        .me-n9 {
            margin-right: -11rem !important;
        }

        .mb-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-n4 {
            margin-bottom: -1.6rem !important;
        }

        .mb-n5 {
            margin-bottom: -3rem !important;
        }

        .mb-n6 {
            margin-bottom: -3.5rem !important;
        }

        .mb-n7 {
            margin-bottom: -4rem !important;
        }

        .mb-n8 {
            margin-bottom: -8rem !important;
        }

        .mb-n9 {
            margin-bottom: -11rem !important;
        }

        .ms-n1 {
            margin-left: -0.25rem !important;
        }

        .ms-n2 {
            margin-left: -0.5rem !important;
        }

        .ms-n3 {
            margin-left: -1rem !important;
        }

        .ms-n4 {
            margin-left: -1.6rem !important;
        }

        .ms-n5 {
            margin-left: -3rem !important;
        }

        .ms-n6 {
            margin-left: -3.5rem !important;
        }

        .ms-n7 {
            margin-left: -4rem !important;
        }

        .ms-n8 {
            margin-left: -8rem !important;
        }

        .ms-n9 {
            margin-left: -11rem !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .p-1 {
            padding: 0.25rem !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .p-4 {
            padding: 1.6rem !important;
        }

        .p-5 {
            padding: 3rem !important;
        }

        .p-6 {
            padding: 3.5rem !important;
        }

        .p-7 {
            padding: 4rem !important;
        }

        .p-8 {
            padding: 8rem !important;
        }

        .p-9 {
            padding: 11rem !important;
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-4 {
            padding-right: 1.6rem !important;
            padding-left: 1.6rem !important;
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .px-6 {
            padding-right: 3.5rem !important;
            padding-left: 3.5rem !important;
        }

        .px-7 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
        }

        .px-8 {
            padding-right: 8rem !important;
            padding-left: 8rem !important;
        }

        .px-9 {
            padding-right: 11rem !important;
            padding-left: 11rem !important;
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-4 {
            padding-top: 1.6rem !important;
            padding-bottom: 1.6rem !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .py-6 {
            padding-top: 3.5rem !important;
            padding-bottom: 3.5rem !important;
        }

        .py-7 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .py-8 {
            padding-top: 8rem !important;
            padding-bottom: 8rem !important;
        }

        .py-9 {
            padding-top: 11rem !important;
            padding-bottom: 11rem !important;
        }

        .pt-0 {
            padding-top: 0 !important;
        }

        .pt-1 {
            padding-top: 0.25rem !important;
        }

        .pt-2 {
            padding-top: 0.5rem !important;
        }

        .pt-3 {
            padding-top: 1rem !important;
        }

        .pt-4 {
            padding-top: 1.6rem !important;
        }

        .pt-5 {
            padding-top: 3rem !important;
        }

        .pt-6 {
            padding-top: 3.5rem !important;
        }

        .pt-7 {
            padding-top: 4rem !important;
        }

        .pt-8 {
            padding-top: 8rem !important;
        }

        .pt-9 {
            padding-top: 11rem !important;
        }

        .pe-0 {
            padding-right: 0 !important;
        }

        .pe-1 {
            padding-right: 0.25rem !important;
        }

        .pe-2 {
            padding-right: 0.5rem !important;
        }

        .pe-3 {
            padding-right: 1rem !important;
        }

        .pe-4 {
            padding-right: 1.6rem !important;
        }

        .pe-5 {
            padding-right: 3rem !important;
        }

        .pe-6 {
            padding-right: 3.5rem !important;
        }

        .pe-7 {
            padding-right: 4rem !important;
        }

        .pe-8 {
            padding-right: 8rem !important;
        }

        .pe-9 {
            padding-right: 11rem !important;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .pb-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-3 {
            padding-bottom: 1rem !important;
        }

        .pb-4 {
            padding-bottom: 1.6rem !important;
        }

        .pb-5 {
            padding-bottom: 3rem !important;
        }

        .pb-6 {
            padding-bottom: 3.5rem !important;
        }

        .pb-7 {
            padding-bottom: 4rem !important;
        }

        .pb-8 {
            padding-bottom: 8rem !important;
        }

        .pb-9 {
            padding-bottom: 11rem !important;
        }

        .ps-0 {
            padding-left: 0 !important;
        }

        .ps-1 {
            padding-left: 0.25rem !important;
        }

        .ps-2 {
            padding-left: 0.5rem !important;
        }

        .ps-3 {
            padding-left: 1rem !important;
        }

        .ps-4 {
            padding-left: 1.6rem !important;
        }

        .ps-5 {
            padding-left: 3rem !important;
        }

        .ps-6 {
            padding-left: 3.5rem !important;
        }

        .ps-7 {
            padding-left: 4rem !important;
        }

        .ps-8 {
            padding-left: 8rem !important;
        }

        .ps-9 {
            padding-left: 11rem !important;
        }

        .gap-0 {
            gap: 0 !important;
        }

        .gap-1 {
            gap: 0.25rem !important;
        }

        .gap-2 {
            gap: 0.5rem !important;
        }

        .gap-3 {
            gap: 1rem !important;
        }

        .gap-4 {
            gap: 1.6rem !important;
        }

        .gap-5 {
            gap: 3rem !important;
        }

        .gap-6 {
            gap: 3.5rem !important;
        }

        .gap-7 {
            gap: 4rem !important;
        }

        .gap-8 {
            gap: 8rem !important;
        }

        .gap-9 {
            gap: 11rem !important;
        }

        .font-monospace {
            font-family: var(--bs-font-monospace) !important;
        }

        .fs-1 {
            font-size: calc(1.475rem + 2.7vw) !important;
        }

        .fs-2 {
            font-size: calc(1.425rem + 2.1vw) !important;
        }

        .fs-3 {
            font-size: calc(1.355rem + 1.26vw) !important;
        }

        .fs-4 {
            font-size: calc(1.3rem + 0.6vw) !important;
        }

        .fs-5 {
            font-size: calc(1.255rem + 0.06vw) !important;
        }

        .fs-6 {
            font-size: 1rem !important;
        }

        .fst-italic {
            font-style: italic !important;
        }

        .fst-normal {
            font-style: normal !important;
        }

        .fw-light {
            font-weight: 400 !important;
        }

        .fw-lighter {
            font-weight: lighter !important;
        }

        .fw-normal {
            font-weight: 500 !important;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .fw-semibold {
            font-weight: 600 !important;
        }

        .fw-bolder {
            font-weight: bolder !important;
        }

        .lh-1 {
            line-height: 1 !important;
        }

        .lh-sm {
            line-height: 1.25 !important;
        }

        .lh-base {
            line-height: 1.5 !important;
        }

        .lh-lg {
            line-height: 2 !important;
        }

        .text-start {
            text-align: left !important;
        }

        .text-end {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .text-decoration-underline {
            text-decoration: underline !important;
        }

        .text-decoration-line-through {
            text-decoration: line-through !important;
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        /* rtl:begin:remove */
        .text-break {
            word-wrap: break-word !important;
            word-break: break-word !important;
        }

        /* rtl:end:remove */
        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
        }

        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
        }

        .text-success {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
        }

        .text-info {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
        }

        .text-warning {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
        }

        .text-danger {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
        }

        .text-light {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
        }

        .text-dark {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
        }

        .text-orange {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-orange-rgb), var(--bs-text-opacity)) !important;
        }

        .text-mode {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-mode-rgb), var(--bs-text-opacity)) !important;
        }

        .text-black {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
        }

        .text-body {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
        }

        .text-muted {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), 0.75) !important;
        }

        .text-black-50 {
            --bs-text-opacity: 1;
            color: rgba(0, 0, 0, 0.5) !important;
        }

        .text-white-50 {
            --bs-text-opacity: 1;
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-reset {
            --bs-text-opacity: 1;
            color: inherit !important;
        }

        .text-opacity-25 {
            --bs-text-opacity: 0.25;
        }

        .text-opacity-50 {
            --bs-text-opacity: 0.5;
        }

        .text-opacity-75 {
            --bs-text-opacity: 0.75;
        }

        .text-opacity-100 {
            --bs-text-opacity: 1;
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-white {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-secondary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-success {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-info {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-warning {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-danger {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-light {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-orange {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-orange-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-mode {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-mode-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-black {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-body {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-transparent {
            --bs-bg-opacity: 1;
            background-color: transparent !important;
        }

        .bg-opacity-10 {
            --bs-bg-opacity: 0.1;
        }

        .bg-opacity-25 {
            --bs-bg-opacity: 0.25;
        }

        .bg-opacity-50 {
            --bs-bg-opacity: 0.5;
        }

        .bg-opacity-75 {
            --bs-bg-opacity: 0.75;
        }

        .bg-opacity-100 {
            --bs-bg-opacity: 1;
        }

        .bg-gradient {
            background-image: var(--bs-gradient) !important;
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important;
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important;
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
        }

        .pe-none {
            pointer-events: none !important;
        }

        .pe-auto {
            pointer-events: auto !important;
        }

        .rounded {
            border-radius: var(--bs-border-radius) !important;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .rounded-1 {
            border-radius: var(--bs-border-radius-sm) !important;
        }

        .rounded-2 {
            border-radius: var(--bs-border-radius) !important;
        }

        .rounded-3 {
            border-radius: var(--bs-border-radius-lg) !important;
        }

        .rounded-4 {
            border-radius: var(--bs-border-radius-xl) !important;
        }

        .rounded-5 {
            border-radius: var(--bs-border-radius-2xl) !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: var(--bs-border-radius-pill) !important;
        }

        .rounded-top {
            border-top-left-radius: var(--bs-border-radius) !important;
            border-top-right-radius: var(--bs-border-radius) !important;
        }

        .rounded-end {
            border-top-right-radius: var(--bs-border-radius) !important;
            border-bottom-right-radius: var(--bs-border-radius) !important;
        }

        .rounded-bottom {
            border-bottom-right-radius: var(--bs-border-radius) !important;
            border-bottom-left-radius: var(--bs-border-radius) !important;
        }

        .rounded-start {
            border-bottom-left-radius: var(--bs-border-radius) !important;
            border-top-left-radius: var(--bs-border-radius) !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        @media (min-width: 576px) {
            .float-sm-start {
                float: left !important;
            }
            .float-sm-end {
                float: right !important;
            }
            .float-sm-none {
                float: none !important;
            }
            .d-sm-inline {
                display: inline !important;
            }
            .d-sm-inline-block {
                display: inline-block !important;
            }
            .d-sm-block {
                display: block !important;
            }
            .d-sm-grid {
                display: grid !important;
            }
            .d-sm-table {
                display: table !important;
            }
            .d-sm-table-row {
                display: table-row !important;
            }
            .d-sm-table-cell {
                display: table-cell !important;
            }
            .d-sm-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }
            .d-sm-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
            .d-sm-none {
                display: none !important;
            }
            .flex-sm-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }
            .flex-sm-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }
            .flex-sm-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }
            .flex-sm-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }
            .flex-sm-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }
            .flex-sm-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }
            .flex-sm-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }
            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }
            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }
            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }
            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }
            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }
            .justify-content-sm-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }
            .justify-content-sm-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }
            .justify-content-sm-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }
            .justify-content-sm-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }
            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }
            .justify-content-sm-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }
            .align-items-sm-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }
            .align-items-sm-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }
            .align-items-sm-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }
            .align-items-sm-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }
            .align-items-sm-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }
            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }
            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }
            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }
            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }
            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }
            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }
            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }
            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }
            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }
            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }
            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }
            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
            .order-sm-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }
            .order-sm-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }
            .order-sm-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }
            .order-sm-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }
            .order-sm-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }
            .order-sm-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }
            .order-sm-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }
            .order-sm-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }
            .m-sm-0 {
                margin: 0 !important;
            }
            .m-sm-1 {
                margin: 0.25rem !important;
            }
            .m-sm-2 {
                margin: 0.5rem !important;
            }
            .m-sm-3 {
                margin: 1rem !important;
            }
            .m-sm-4 {
                margin: 1.6rem !important;
            }
            .m-sm-5 {
                margin: 3rem !important;
            }
            .m-sm-6 {
                margin: 3.5rem !important;
            }
            .m-sm-7 {
                margin: 4rem !important;
            }
            .m-sm-8 {
                margin: 8rem !important;
            }
            .m-sm-9 {
                margin: 11rem !important;
            }
            .m-sm-auto {
                margin: auto !important;
            }
            .mx-sm-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }
            .mx-sm-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }
            .mx-sm-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }
            .mx-sm-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }
            .mx-sm-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }
            .mx-sm-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }
            .mx-sm-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }
            .mx-sm-7 {
                margin-right: 4rem !important;
                margin-left: 4rem !important;
            }
            .mx-sm-8 {
                margin-right: 8rem !important;
                margin-left: 8rem !important;
            }
            .mx-sm-9 {
                margin-right: 11rem !important;
                margin-left: 11rem !important;
            }
            .mx-sm-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }
            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }
            .my-sm-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }
            .my-sm-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }
            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }
            .my-sm-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }
            .my-sm-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }
            .my-sm-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }
            .my-sm-7 {
                margin-top: 4rem !important;
                margin-bottom: 4rem !important;
            }
            .my-sm-8 {
                margin-top: 8rem !important;
                margin-bottom: 8rem !important;
            }
            .my-sm-9 {
                margin-top: 11rem !important;
                margin-bottom: 11rem !important;
            }
            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }
            .mt-sm-0 {
                margin-top: 0 !important;
            }
            .mt-sm-1 {
                margin-top: 0.25rem !important;
            }
            .mt-sm-2 {
                margin-top: 0.5rem !important;
            }
            .mt-sm-3 {
                margin-top: 1rem !important;
            }
            .mt-sm-4 {
                margin-top: 1.6rem !important;
            }
            .mt-sm-5 {
                margin-top: 3rem !important;
            }
            .mt-sm-6 {
                margin-top: 3.5rem !important;
            }
            .mt-sm-7 {
                margin-top: 4rem !important;
            }
            .mt-sm-8 {
                margin-top: 8rem !important;
            }
            .mt-sm-9 {
                margin-top: 11rem !important;
            }
            .mt-sm-auto {
                margin-top: auto !important;
            }
            .me-sm-0 {
                margin-right: 0 !important;
            }
            .me-sm-1 {
                margin-right: 0.25rem !important;
            }
            .me-sm-2 {
                margin-right: 0.5rem !important;
            }
            .me-sm-3 {
                margin-right: 1rem !important;
            }
            .me-sm-4 {
                margin-right: 1.6rem !important;
            }
            .me-sm-5 {
                margin-right: 3rem !important;
            }
            .me-sm-6 {
                margin-right: 3.5rem !important;
            }
            .me-sm-7 {
                margin-right: 4rem !important;
            }
            .me-sm-8 {
                margin-right: 8rem !important;
            }
            .me-sm-9 {
                margin-right: 11rem !important;
            }
            .me-sm-auto {
                margin-right: auto !important;
            }
            .mb-sm-0 {
                margin-bottom: 0 !important;
            }
            .mb-sm-1 {
                margin-bottom: 0.25rem !important;
            }
            .mb-sm-2 {
                margin-bottom: 0.5rem !important;
            }
            .mb-sm-3 {
                margin-bottom: 1rem !important;
            }
            .mb-sm-4 {
                margin-bottom: 1.6rem !important;
            }
            .mb-sm-5 {
                margin-bottom: 3rem !important;
            }
            .mb-sm-6 {
                margin-bottom: 3.5rem !important;
            }
            .mb-sm-7 {
                margin-bottom: 4rem !important;
            }
            .mb-sm-8 {
                margin-bottom: 8rem !important;
            }
            .mb-sm-9 {
                margin-bottom: 11rem !important;
            }
            .mb-sm-auto {
                margin-bottom: auto !important;
            }
            .ms-sm-0 {
                margin-left: 0 !important;
            }
            .ms-sm-1 {
                margin-left: 0.25rem !important;
            }
            .ms-sm-2 {
                margin-left: 0.5rem !important;
            }
            .ms-sm-3 {
                margin-left: 1rem !important;
            }
            .ms-sm-4 {
                margin-left: 1.6rem !important;
            }
            .ms-sm-5 {
                margin-left: 3rem !important;
            }
            .ms-sm-6 {
                margin-left: 3.5rem !important;
            }
            .ms-sm-7 {
                margin-left: 4rem !important;
            }
            .ms-sm-8 {
                margin-left: 8rem !important;
            }
            .ms-sm-9 {
                margin-left: 11rem !important;
            }
            .ms-sm-auto {
                margin-left: auto !important;
            }
            .m-sm-n1 {
                margin: -0.25rem !important;
            }
            .m-sm-n2 {
                margin: -0.5rem !important;
            }
            .m-sm-n3 {
                margin: -1rem !important;
            }
            .m-sm-n4 {
                margin: -1.6rem !important;
            }
            .m-sm-n5 {
                margin: -3rem !important;
            }
            .m-sm-n6 {
                margin: -3.5rem !important;
            }
            .m-sm-n7 {
                margin: -4rem !important;
            }
            .m-sm-n8 {
                margin: -8rem !important;
            }
            .m-sm-n9 {
                margin: -11rem !important;
            }
            .mx-sm-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }
            .mx-sm-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }
            .mx-sm-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }
            .mx-sm-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }
            .mx-sm-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }
            .mx-sm-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }
            .mx-sm-n7 {
                margin-right: -4rem !important;
                margin-left: -4rem !important;
            }
            .mx-sm-n8 {
                margin-right: -8rem !important;
                margin-left: -8rem !important;
            }
            .mx-sm-n9 {
                margin-right: -11rem !important;
                margin-left: -11rem !important;
            }
            .my-sm-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }
            .my-sm-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }
            .my-sm-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }
            .my-sm-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }
            .my-sm-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }
            .my-sm-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }
            .my-sm-n7 {
                margin-top: -4rem !important;
                margin-bottom: -4rem !important;
            }
            .my-sm-n8 {
                margin-top: -8rem !important;
                margin-bottom: -8rem !important;
            }
            .my-sm-n9 {
                margin-top: -11rem !important;
                margin-bottom: -11rem !important;
            }
            .mt-sm-n1 {
                margin-top: -0.25rem !important;
            }
            .mt-sm-n2 {
                margin-top: -0.5rem !important;
            }
            .mt-sm-n3 {
                margin-top: -1rem !important;
            }
            .mt-sm-n4 {
                margin-top: -1.6rem !important;
            }
            .mt-sm-n5 {
                margin-top: -3rem !important;
            }
            .mt-sm-n6 {
                margin-top: -3.5rem !important;
            }
            .mt-sm-n7 {
                margin-top: -4rem !important;
            }
            .mt-sm-n8 {
                margin-top: -8rem !important;
            }
            .mt-sm-n9 {
                margin-top: -11rem !important;
            }
            .me-sm-n1 {
                margin-right: -0.25rem !important;
            }
            .me-sm-n2 {
                margin-right: -0.5rem !important;
            }
            .me-sm-n3 {
                margin-right: -1rem !important;
            }
            .me-sm-n4 {
                margin-right: -1.6rem !important;
            }
            .me-sm-n5 {
                margin-right: -3rem !important;
            }
            .me-sm-n6 {
                margin-right: -3.5rem !important;
            }
            .me-sm-n7 {
                margin-right: -4rem !important;
            }
            .me-sm-n8 {
                margin-right: -8rem !important;
            }
            .me-sm-n9 {
                margin-right: -11rem !important;
            }
            .mb-sm-n1 {
                margin-bottom: -0.25rem !important;
            }
            .mb-sm-n2 {
                margin-bottom: -0.5rem !important;
            }
            .mb-sm-n3 {
                margin-bottom: -1rem !important;
            }
            .mb-sm-n4 {
                margin-bottom: -1.6rem !important;
            }
            .mb-sm-n5 {
                margin-bottom: -3rem !important;
            }
            .mb-sm-n6 {
                margin-bottom: -3.5rem !important;
            }
            .mb-sm-n7 {
                margin-bottom: -4rem !important;
            }
            .mb-sm-n8 {
                margin-bottom: -8rem !important;
            }
            .mb-sm-n9 {
                margin-bottom: -11rem !important;
            }
            .ms-sm-n1 {
                margin-left: -0.25rem !important;
            }
            .ms-sm-n2 {
                margin-left: -0.5rem !important;
            }
            .ms-sm-n3 {
                margin-left: -1rem !important;
            }
            .ms-sm-n4 {
                margin-left: -1.6rem !important;
            }
            .ms-sm-n5 {
                margin-left: -3rem !important;
            }
            .ms-sm-n6 {
                margin-left: -3.5rem !important;
            }
            .ms-sm-n7 {
                margin-left: -4rem !important;
            }
            .ms-sm-n8 {
                margin-left: -8rem !important;
            }
            .ms-sm-n9 {
                margin-left: -11rem !important;
            }
            .p-sm-0 {
                padding: 0 !important;
            }
            .p-sm-1 {
                padding: 0.25rem !important;
            }
            .p-sm-2 {
                padding: 0.5rem !important;
            }
            .p-sm-3 {
                padding: 1rem !important;
            }
            .p-sm-4 {
                padding: 1.6rem !important;
            }
            .p-sm-5 {
                padding: 3rem !important;
            }
            .p-sm-6 {
                padding: 3.5rem !important;
            }
            .p-sm-7 {
                padding: 4rem !important;
            }
            .p-sm-8 {
                padding: 8rem !important;
            }
            .p-sm-9 {
                padding: 11rem !important;
            }
            .px-sm-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }
            .px-sm-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }
            .px-sm-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }
            .px-sm-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }
            .px-sm-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }
            .px-sm-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }
            .px-sm-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }
            .px-sm-7 {
                padding-right: 4rem !important;
                padding-left: 4rem !important;
            }
            .px-sm-8 {
                padding-right: 8rem !important;
                padding-left: 8rem !important;
            }
            .px-sm-9 {
                padding-right: 11rem !important;
                padding-left: 11rem !important;
            }
            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
            .py-sm-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }
            .py-sm-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }
            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }
            .py-sm-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }
            .py-sm-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }
            .py-sm-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }
            .py-sm-7 {
                padding-top: 4rem !important;
                padding-bottom: 4rem !important;
            }
            .py-sm-8 {
                padding-top: 8rem !important;
                padding-bottom: 8rem !important;
            }
            .py-sm-9 {
                padding-top: 11rem !important;
                padding-bottom: 11rem !important;
            }
            .pt-sm-0 {
                padding-top: 0 !important;
            }
            .pt-sm-1 {
                padding-top: 0.25rem !important;
            }
            .pt-sm-2 {
                padding-top: 0.5rem !important;
            }
            .pt-sm-3 {
                padding-top: 1rem !important;
            }
            .pt-sm-4 {
                padding-top: 1.6rem !important;
            }
            .pt-sm-5 {
                padding-top: 3rem !important;
            }
            .pt-sm-6 {
                padding-top: 3.5rem !important;
            }
            .pt-sm-7 {
                padding-top: 4rem !important;
            }
            .pt-sm-8 {
                padding-top: 8rem !important;
            }
            .pt-sm-9 {
                padding-top: 11rem !important;
            }
            .pe-sm-0 {
                padding-right: 0 !important;
            }
            .pe-sm-1 {
                padding-right: 0.25rem !important;
            }
            .pe-sm-2 {
                padding-right: 0.5rem !important;
            }
            .pe-sm-3 {
                padding-right: 1rem !important;
            }
            .pe-sm-4 {
                padding-right: 1.6rem !important;
            }
            .pe-sm-5 {
                padding-right: 3rem !important;
            }
            .pe-sm-6 {
                padding-right: 3.5rem !important;
            }
            .pe-sm-7 {
                padding-right: 4rem !important;
            }
            .pe-sm-8 {
                padding-right: 8rem !important;
            }
            .pe-sm-9 {
                padding-right: 11rem !important;
            }
            .pb-sm-0 {
                padding-bottom: 0 !important;
            }
            .pb-sm-1 {
                padding-bottom: 0.25rem !important;
            }
            .pb-sm-2 {
                padding-bottom: 0.5rem !important;
            }
            .pb-sm-3 {
                padding-bottom: 1rem !important;
            }
            .pb-sm-4 {
                padding-bottom: 1.6rem !important;
            }
            .pb-sm-5 {
                padding-bottom: 3rem !important;
            }
            .pb-sm-6 {
                padding-bottom: 3.5rem !important;
            }
            .pb-sm-7 {
                padding-bottom: 4rem !important;
            }
            .pb-sm-8 {
                padding-bottom: 8rem !important;
            }
            .pb-sm-9 {
                padding-bottom: 11rem !important;
            }
            .ps-sm-0 {
                padding-left: 0 !important;
            }
            .ps-sm-1 {
                padding-left: 0.25rem !important;
            }
            .ps-sm-2 {
                padding-left: 0.5rem !important;
            }
            .ps-sm-3 {
                padding-left: 1rem !important;
            }
            .ps-sm-4 {
                padding-left: 1.6rem !important;
            }
            .ps-sm-5 {
                padding-left: 3rem !important;
            }
            .ps-sm-6 {
                padding-left: 3.5rem !important;
            }
            .ps-sm-7 {
                padding-left: 4rem !important;
            }
            .ps-sm-8 {
                padding-left: 8rem !important;
            }
            .ps-sm-9 {
                padding-left: 11rem !important;
            }
            .gap-sm-0 {
                gap: 0 !important;
            }
            .gap-sm-1 {
                gap: 0.25rem !important;
            }
            .gap-sm-2 {
                gap: 0.5rem !important;
            }
            .gap-sm-3 {
                gap: 1rem !important;
            }
            .gap-sm-4 {
                gap: 1.6rem !important;
            }
            .gap-sm-5 {
                gap: 3rem !important;
            }
            .gap-sm-6 {
                gap: 3.5rem !important;
            }
            .gap-sm-7 {
                gap: 4rem !important;
            }
            .gap-sm-8 {
                gap: 8rem !important;
            }
            .gap-sm-9 {
                gap: 11rem !important;
            }
            .text-sm-start {
                text-align: left !important;
            }
            .text-sm-end {
                text-align: right !important;
            }
            .text-sm-center {
                text-align: center !important;
            }
        }
        @media (min-width: 768px) {
            .float-md-start {
                float: left !important;
            }
            .float-md-end {
                float: right !important;
            }
            .float-md-none {
                float: none !important;
            }
            .d-md-inline {
                display: inline !important;
            }
            .d-md-inline-block {
                display: inline-block !important;
            }
            .d-md-block {
                display: block !important;
            }
            .d-md-grid {
                display: grid !important;
            }
            .d-md-table {
                display: table !important;
            }
            .d-md-table-row {
                display: table-row !important;
            }
            .d-md-table-cell {
                display: table-cell !important;
            }
            .d-md-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }
            .d-md-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
            .d-md-none {
                display: none !important;
            }
            .flex-md-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }
            .flex-md-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }
            .flex-md-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }
            .flex-md-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }
            .flex-md-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }
            .flex-md-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }
            .flex-md-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }
            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }
            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }
            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }
            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }
            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }
            .justify-content-md-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }
            .justify-content-md-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }
            .justify-content-md-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }
            .justify-content-md-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }
            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }
            .justify-content-md-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }
            .align-items-md-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }
            .align-items-md-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }
            .align-items-md-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }
            .align-items-md-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }
            .align-items-md-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }
            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }
            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }
            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }
            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }
            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }
            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }
            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }
            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }
            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }
            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }
            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }
            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
            .order-md-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }
            .order-md-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }
            .order-md-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }
            .order-md-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }
            .order-md-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }
            .order-md-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }
            .order-md-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }
            .order-md-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }
            .m-md-0 {
                margin: 0 !important;
            }
            .m-md-1 {
                margin: 0.25rem !important;
            }
            .m-md-2 {
                margin: 0.5rem !important;
            }
            .m-md-3 {
                margin: 1rem !important;
            }
            .m-md-4 {
                margin: 1.6rem !important;
            }
            .m-md-5 {
                margin: 3rem !important;
            }
            .m-md-6 {
                margin: 3.5rem !important;
            }
            .m-md-7 {
                margin: 4rem !important;
            }
            .m-md-8 {
                margin: 8rem !important;
            }
            .m-md-9 {
                margin: 11rem !important;
            }
            .m-md-auto {
                margin: auto !important;
            }
            .mx-md-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }
            .mx-md-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }
            .mx-md-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }
            .mx-md-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }
            .mx-md-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }
            .mx-md-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }
            .mx-md-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }
            .mx-md-7 {
                margin-right: 4rem !important;
                margin-left: 4rem !important;
            }
            .mx-md-8 {
                margin-right: 8rem !important;
                margin-left: 8rem !important;
            }
            .mx-md-9 {
                margin-right: 11rem !important;
                margin-left: 11rem !important;
            }
            .mx-md-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }
            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }
            .my-md-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }
            .my-md-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }
            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }
            .my-md-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }
            .my-md-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }
            .my-md-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }
            .my-md-7 {
                margin-top: 4rem !important;
                margin-bottom: 4rem !important;
            }
            .my-md-8 {
                margin-top: 8rem !important;
                margin-bottom: 8rem !important;
            }
            .my-md-9 {
                margin-top: 11rem !important;
                margin-bottom: 11rem !important;
            }
            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }
            .mt-md-0 {
                margin-top: 0 !important;
            }
            .mt-md-1 {
                margin-top: 0.25rem !important;
            }
            .mt-md-2 {
                margin-top: 0.5rem !important;
            }
            .mt-md-3 {
                margin-top: 1rem !important;
            }
            .mt-md-4 {
                margin-top: 1.6rem !important;
            }
            .mt-md-5 {
                margin-top: 3rem !important;
            }
            .mt-md-6 {
                margin-top: 3.5rem !important;
            }
            .mt-md-7 {
                margin-top: 4rem !important;
            }
            .mt-md-8 {
                margin-top: 8rem !important;
            }
            .mt-md-9 {
                margin-top: 11rem !important;
            }
            .mt-md-auto {
                margin-top: auto !important;
            }
            .me-md-0 {
                margin-right: 0 !important;
            }
            .me-md-1 {
                margin-right: 0.25rem !important;
            }
            .me-md-2 {
                margin-right: 0.5rem !important;
            }
            .me-md-3 {
                margin-right: 1rem !important;
            }
            .me-md-4 {
                margin-right: 1.6rem !important;
            }
            .me-md-5 {
                margin-right: 3rem !important;
            }
            .me-md-6 {
                margin-right: 3.5rem !important;
            }
            .me-md-7 {
                margin-right: 4rem !important;
            }
            .me-md-8 {
                margin-right: 8rem !important;
            }
            .me-md-9 {
                margin-right: 11rem !important;
            }
            .me-md-auto {
                margin-right: auto !important;
            }
            .mb-md-0 {
                margin-bottom: 0 !important;
            }
            .mb-md-1 {
                margin-bottom: 0.25rem !important;
            }
            .mb-md-2 {
                margin-bottom: 0.5rem !important;
            }
            .mb-md-3 {
                margin-bottom: 1rem !important;
            }
            .mb-md-4 {
                margin-bottom: 1.6rem !important;
            }
            .mb-md-5 {
                margin-bottom: 3rem !important;
            }
            .mb-md-6 {
                margin-bottom: 3.5rem !important;
            }
            .mb-md-7 {
                margin-bottom: 4rem !important;
            }
            .mb-md-8 {
                margin-bottom: 8rem !important;
            }
            .mb-md-9 {
                margin-bottom: 11rem !important;
            }
            .mb-md-auto {
                margin-bottom: auto !important;
            }
            .ms-md-0 {
                margin-left: 0 !important;
            }
            .ms-md-1 {
                margin-left: 0.25rem !important;
            }
            .ms-md-2 {
                margin-left: 0.5rem !important;
            }
            .ms-md-3 {
                margin-left: 1rem !important;
            }
            .ms-md-4 {
                margin-left: 1.6rem !important;
            }
            .ms-md-5 {
                margin-left: 3rem !important;
            }
            .ms-md-6 {
                margin-left: 3.5rem !important;
            }
            .ms-md-7 {
                margin-left: 4rem !important;
            }
            .ms-md-8 {
                margin-left: 8rem !important;
            }
            .ms-md-9 {
                margin-left: 11rem !important;
            }
            .ms-md-auto {
                margin-left: auto !important;
            }
            .m-md-n1 {
                margin: -0.25rem !important;
            }
            .m-md-n2 {
                margin: -0.5rem !important;
            }
            .m-md-n3 {
                margin: -1rem !important;
            }
            .m-md-n4 {
                margin: -1.6rem !important;
            }
            .m-md-n5 {
                margin: -3rem !important;
            }
            .m-md-n6 {
                margin: -3.5rem !important;
            }
            .m-md-n7 {
                margin: -4rem !important;
            }
            .m-md-n8 {
                margin: -8rem !important;
            }
            .m-md-n9 {
                margin: -11rem !important;
            }
            .mx-md-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }
            .mx-md-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }
            .mx-md-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }
            .mx-md-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }
            .mx-md-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }
            .mx-md-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }
            .mx-md-n7 {
                margin-right: -4rem !important;
                margin-left: -4rem !important;
            }
            .mx-md-n8 {
                margin-right: -8rem !important;
                margin-left: -8rem !important;
            }
            .mx-md-n9 {
                margin-right: -11rem !important;
                margin-left: -11rem !important;
            }
            .my-md-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }
            .my-md-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }
            .my-md-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }
            .my-md-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }
            .my-md-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }
            .my-md-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }
            .my-md-n7 {
                margin-top: -4rem !important;
                margin-bottom: -4rem !important;
            }
            .my-md-n8 {
                margin-top: -8rem !important;
                margin-bottom: -8rem !important;
            }
            .my-md-n9 {
                margin-top: -11rem !important;
                margin-bottom: -11rem !important;
            }
            .mt-md-n1 {
                margin-top: -0.25rem !important;
            }
            .mt-md-n2 {
                margin-top: -0.5rem !important;
            }
            .mt-md-n3 {
                margin-top: -1rem !important;
            }
            .mt-md-n4 {
                margin-top: -1.6rem !important;
            }
            .mt-md-n5 {
                margin-top: -3rem !important;
            }
            .mt-md-n6 {
                margin-top: -3.5rem !important;
            }
            .mt-md-n7 {
                margin-top: -4rem !important;
            }
            .mt-md-n8 {
                margin-top: -8rem !important;
            }
            .mt-md-n9 {
                margin-top: -11rem !important;
            }
            .me-md-n1 {
                margin-right: -0.25rem !important;
            }
            .me-md-n2 {
                margin-right: -0.5rem !important;
            }
            .me-md-n3 {
                margin-right: -1rem !important;
            }
            .me-md-n4 {
                margin-right: -1.6rem !important;
            }
            .me-md-n5 {
                margin-right: -3rem !important;
            }
            .me-md-n6 {
                margin-right: -3.5rem !important;
            }
            .me-md-n7 {
                margin-right: -4rem !important;
            }
            .me-md-n8 {
                margin-right: -8rem !important;
            }
            .me-md-n9 {
                margin-right: -11rem !important;
            }
            .mb-md-n1 {
                margin-bottom: -0.25rem !important;
            }
            .mb-md-n2 {
                margin-bottom: -0.5rem !important;
            }
            .mb-md-n3 {
                margin-bottom: -1rem !important;
            }
            .mb-md-n4 {
                margin-bottom: -1.6rem !important;
            }
            .mb-md-n5 {
                margin-bottom: -3rem !important;
            }
            .mb-md-n6 {
                margin-bottom: -3.5rem !important;
            }
            .mb-md-n7 {
                margin-bottom: -4rem !important;
            }
            .mb-md-n8 {
                margin-bottom: -8rem !important;
            }
            .mb-md-n9 {
                margin-bottom: -11rem !important;
            }
            .ms-md-n1 {
                margin-left: -0.25rem !important;
            }
            .ms-md-n2 {
                margin-left: -0.5rem !important;
            }
            .ms-md-n3 {
                margin-left: -1rem !important;
            }
            .ms-md-n4 {
                margin-left: -1.6rem !important;
            }
            .ms-md-n5 {
                margin-left: -3rem !important;
            }
            .ms-md-n6 {
                margin-left: -3.5rem !important;
            }
            .ms-md-n7 {
                margin-left: -4rem !important;
            }
            .ms-md-n8 {
                margin-left: -8rem !important;
            }
            .ms-md-n9 {
                margin-left: -11rem !important;
            }
            .p-md-0 {
                padding: 0 !important;
            }
            .p-md-1 {
                padding: 0.25rem !important;
            }
            .p-md-2 {
                padding: 0.5rem !important;
            }
            .p-md-3 {
                padding: 1rem !important;
            }
            .p-md-4 {
                padding: 1.6rem !important;
            }
            .p-md-5 {
                padding: 3rem !important;
            }
            .p-md-6 {
                padding: 3.5rem !important;
            }
            .p-md-7 {
                padding: 4rem !important;
            }
            .p-md-8 {
                padding: 8rem !important;
            }
            .p-md-9 {
                padding: 11rem !important;
            }
            .px-md-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }
            .px-md-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }
            .px-md-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }
            .px-md-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }
            .px-md-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }
            .px-md-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }
            .px-md-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }
            .px-md-7 {
                padding-right: 4rem !important;
                padding-left: 4rem !important;
            }
            .px-md-8 {
                padding-right: 8rem !important;
                padding-left: 8rem !important;
            }
            .px-md-9 {
                padding-right: 11rem !important;
                padding-left: 11rem !important;
            }
            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
            .py-md-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }
            .py-md-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }
            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }
            .py-md-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }
            .py-md-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }
            .py-md-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }
            .py-md-7 {
                padding-top: 4rem !important;
                padding-bottom: 4rem !important;
            }
            .py-md-8 {
                padding-top: 8rem !important;
                padding-bottom: 8rem !important;
            }
            .py-md-9 {
                padding-top: 11rem !important;
                padding-bottom: 11rem !important;
            }
            .pt-md-0 {
                padding-top: 0 !important;
            }
            .pt-md-1 {
                padding-top: 0.25rem !important;
            }
            .pt-md-2 {
                padding-top: 0.5rem !important;
            }
            .pt-md-3 {
                padding-top: 1rem !important;
            }
            .pt-md-4 {
                padding-top: 1.6rem !important;
            }
            .pt-md-5 {
                padding-top: 3rem !important;
            }
            .pt-md-6 {
                padding-top: 3.5rem !important;
            }
            .pt-md-7 {
                padding-top: 4rem !important;
            }
            .pt-md-8 {
                padding-top: 8rem !important;
            }
            .pt-md-9 {
                padding-top: 11rem !important;
            }
            .pe-md-0 {
                padding-right: 0 !important;
            }
            .pe-md-1 {
                padding-right: 0.25rem !important;
            }
            .pe-md-2 {
                padding-right: 0.5rem !important;
            }
            .pe-md-3 {
                padding-right: 1rem !important;
            }
            .pe-md-4 {
                padding-right: 1.6rem !important;
            }
            .pe-md-5 {
                padding-right: 3rem !important;
            }
            .pe-md-6 {
                padding-right: 3.5rem !important;
            }
            .pe-md-7 {
                padding-right: 4rem !important;
            }
            .pe-md-8 {
                padding-right: 8rem !important;
            }
            .pe-md-9 {
                padding-right: 11rem !important;
            }
            .pb-md-0 {
                padding-bottom: 0 !important;
            }
            .pb-md-1 {
                padding-bottom: 0.25rem !important;
            }
            .pb-md-2 {
                padding-bottom: 0.5rem !important;
            }
            .pb-md-3 {
                padding-bottom: 1rem !important;
            }
            .pb-md-4 {
                padding-bottom: 1.6rem !important;
            }
            .pb-md-5 {
                padding-bottom: 3rem !important;
            }
            .pb-md-6 {
                padding-bottom: 3.5rem !important;
            }
            .pb-md-7 {
                padding-bottom: 4rem !important;
            }
            .pb-md-8 {
                padding-bottom: 8rem !important;
            }
            .pb-md-9 {
                padding-bottom: 11rem !important;
            }
            .ps-md-0 {
                padding-left: 0 !important;
            }
            .ps-md-1 {
                padding-left: 0.25rem !important;
            }
            .ps-md-2 {
                padding-left: 0.5rem !important;
            }
            .ps-md-3 {
                padding-left: 1rem !important;
            }
            .ps-md-4 {
                padding-left: 1.6rem !important;
            }
            .ps-md-5 {
                padding-left: 3rem !important;
            }
            .ps-md-6 {
                padding-left: 3.5rem !important;
            }
            .ps-md-7 {
                padding-left: 4rem !important;
            }
            .ps-md-8 {
                padding-left: 8rem !important;
            }
            .ps-md-9 {
                padding-left: 11rem !important;
            }
            .gap-md-0 {
                gap: 0 !important;
            }
            .gap-md-1 {
                gap: 0.25rem !important;
            }
            .gap-md-2 {
                gap: 0.5rem !important;
            }
            .gap-md-3 {
                gap: 1rem !important;
            }
            .gap-md-4 {
                gap: 1.6rem !important;
            }
            .gap-md-5 {
                gap: 3rem !important;
            }
            .gap-md-6 {
                gap: 3.5rem !important;
            }
            .gap-md-7 {
                gap: 4rem !important;
            }
            .gap-md-8 {
                gap: 8rem !important;
            }
            .gap-md-9 {
                gap: 11rem !important;
            }
            .text-md-start {
                text-align: left !important;
            }
            .text-md-end {
                text-align: right !important;
            }
            .text-md-center {
                text-align: center !important;
            }
        }
        @media (min-width: 992px) {
            .float-lg-start {
                float: left !important;
            }
            .float-lg-end {
                float: right !important;
            }
            .float-lg-none {
                float: none !important;
            }
            .d-lg-inline {
                display: inline !important;
            }
            .d-lg-inline-block {
                display: inline-block !important;
            }
            .d-lg-block {
                display: block !important;
            }
            .d-lg-grid {
                display: grid !important;
            }
            .d-lg-table {
                display: table !important;
            }
            .d-lg-table-row {
                display: table-row !important;
            }
            .d-lg-table-cell {
                display: table-cell !important;
            }
            .d-lg-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }
            .d-lg-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
            .d-lg-none {
                display: none !important;
            }
            .flex-lg-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }
            .flex-lg-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }
            .flex-lg-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }
            .flex-lg-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }
            .flex-lg-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }
            .flex-lg-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }
            .flex-lg-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }
            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }
            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }
            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }
            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }
            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }
            .justify-content-lg-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }
            .justify-content-lg-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }
            .justify-content-lg-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }
            .justify-content-lg-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }
            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }
            .justify-content-lg-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }
            .align-items-lg-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }
            .align-items-lg-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }
            .align-items-lg-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }
            .align-items-lg-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }
            .align-items-lg-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }
            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }
            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }
            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }
            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }
            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }
            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }
            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }
            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }
            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }
            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }
            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }
            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
            .order-lg-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }
            .order-lg-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }
            .order-lg-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }
            .order-lg-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }
            .order-lg-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }
            .order-lg-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }
            .order-lg-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }
            .order-lg-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }
            .m-lg-0 {
                margin: 0 !important;
            }
            .m-lg-1 {
                margin: 0.25rem !important;
            }
            .m-lg-2 {
                margin: 0.5rem !important;
            }
            .m-lg-3 {
                margin: 1rem !important;
            }
            .m-lg-4 {
                margin: 1.6rem !important;
            }
            .m-lg-5 {
                margin: 3rem !important;
            }
            .m-lg-6 {
                margin: 3.5rem !important;
            }
            .m-lg-7 {
                margin: 4rem !important;
            }
            .m-lg-8 {
                margin: 8rem !important;
            }
            .m-lg-9 {
                margin: 11rem !important;
            }
            .m-lg-auto {
                margin: auto !important;
            }
            .mx-lg-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }
            .mx-lg-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }
            .mx-lg-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }
            .mx-lg-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }
            .mx-lg-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }
            .mx-lg-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }
            .mx-lg-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }
            .mx-lg-7 {
                margin-right: 4rem !important;
                margin-left: 4rem !important;
            }
            .mx-lg-8 {
                margin-right: 8rem !important;
                margin-left: 8rem !important;
            }
            .mx-lg-9 {
                margin-right: 11rem !important;
                margin-left: 11rem !important;
            }
            .mx-lg-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }
            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }
            .my-lg-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }
            .my-lg-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }
            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }
            .my-lg-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }
            .my-lg-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }
            .my-lg-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }
            .my-lg-7 {
                margin-top: 4rem !important;
                margin-bottom: 4rem !important;
            }
            .my-lg-8 {
                margin-top: 8rem !important;
                margin-bottom: 8rem !important;
            }
            .my-lg-9 {
                margin-top: 11rem !important;
                margin-bottom: 11rem !important;
            }
            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }
            .mt-lg-0 {
                margin-top: 0 !important;
            }
            .mt-lg-1 {
                margin-top: 0.25rem !important;
            }
            .mt-lg-2 {
                margin-top: 0.5rem !important;
            }
            .mt-lg-3 {
                margin-top: 1rem !important;
            }
            .mt-lg-4 {
                margin-top: 1.6rem !important;
            }
            .mt-lg-5 {
                margin-top: 3rem !important;
            }
            .mt-lg-6 {
                margin-top: 3.5rem !important;
            }
            .mt-lg-7 {
                margin-top: 4rem !important;
            }
            .mt-lg-8 {
                margin-top: 8rem !important;
            }
            .mt-lg-9 {
                margin-top: 11rem !important;
            }
            .mt-lg-auto {
                margin-top: auto !important;
            }
            .me-lg-0 {
                margin-right: 0 !important;
            }
            .me-lg-1 {
                margin-right: 0.25rem !important;
            }
            .me-lg-2 {
                margin-right: 0.5rem !important;
            }
            .me-lg-3 {
                margin-right: 1rem !important;
            }
            .me-lg-4 {
                margin-right: 1.6rem !important;
            }
            .me-lg-5 {
                margin-right: 3rem !important;
            }
            .me-lg-6 {
                margin-right: 3.5rem !important;
            }
            .me-lg-7 {
                margin-right: 4rem !important;
            }
            .me-lg-8 {
                margin-right: 8rem !important;
            }
            .me-lg-9 {
                margin-right: 11rem !important;
            }
            .me-lg-auto {
                margin-right: auto !important;
            }
            .mb-lg-0 {
                margin-bottom: 0 !important;
            }
            .mb-lg-1 {
                margin-bottom: 0.25rem !important;
            }
            .mb-lg-2 {
                margin-bottom: 0.5rem !important;
            }
            .mb-lg-3 {
                margin-bottom: 1rem !important;
            }
            .mb-lg-4 {
                margin-bottom: 1.6rem !important;
            }
            .mb-lg-5 {
                margin-bottom: 3rem !important;
            }
            .mb-lg-6 {
                margin-bottom: 3.5rem !important;
            }
            .mb-lg-7 {
                margin-bottom: 4rem !important;
            }
            .mb-lg-8 {
                margin-bottom: 8rem !important;
            }
            .mb-lg-9 {
                margin-bottom: 11rem !important;
            }
            .mb-lg-auto {
                margin-bottom: auto !important;
            }
            .ms-lg-0 {
                margin-left: 0 !important;
            }
            .ms-lg-1 {
                margin-left: 0.25rem !important;
            }
            .ms-lg-2 {
                margin-left: 0.5rem !important;
            }
            .ms-lg-3 {
                margin-left: 1rem !important;
            }
            .ms-lg-4 {
                margin-left: 1.6rem !important;
            }
            .ms-lg-5 {
                margin-left: 3rem !important;
            }
            .ms-lg-6 {
                margin-left: 3.5rem !important;
            }
            .ms-lg-7 {
                margin-left: 4rem !important;
            }
            .ms-lg-8 {
                margin-left: 8rem !important;
            }
            .ms-lg-9 {
                margin-left: 11rem !important;
            }
            .ms-lg-auto {
                margin-left: auto !important;
            }
            .m-lg-n1 {
                margin: -0.25rem !important;
            }
            .m-lg-n2 {
                margin: -0.5rem !important;
            }
            .m-lg-n3 {
                margin: -1rem !important;
            }
            .m-lg-n4 {
                margin: -1.6rem !important;
            }
            .m-lg-n5 {
                margin: -3rem !important;
            }
            .m-lg-n6 {
                margin: -3.5rem !important;
            }
            .m-lg-n7 {
                margin: -4rem !important;
            }
            .m-lg-n8 {
                margin: -8rem !important;
            }
            .m-lg-n9 {
                margin: -11rem !important;
            }
            .mx-lg-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }
            .mx-lg-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }
            .mx-lg-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }
            .mx-lg-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }
            .mx-lg-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }
            .mx-lg-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }
            .mx-lg-n7 {
                margin-right: -4rem !important;
                margin-left: -4rem !important;
            }
            .mx-lg-n8 {
                margin-right: -8rem !important;
                margin-left: -8rem !important;
            }
            .mx-lg-n9 {
                margin-right: -11rem !important;
                margin-left: -11rem !important;
            }
            .my-lg-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }
            .my-lg-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }
            .my-lg-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }
            .my-lg-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }
            .my-lg-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }
            .my-lg-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }
            .my-lg-n7 {
                margin-top: -4rem !important;
                margin-bottom: -4rem !important;
            }
            .my-lg-n8 {
                margin-top: -8rem !important;
                margin-bottom: -8rem !important;
            }
            .my-lg-n9 {
                margin-top: -11rem !important;
                margin-bottom: -11rem !important;
            }
            .mt-lg-n1 {
                margin-top: -0.25rem !important;
            }
            .mt-lg-n2 {
                margin-top: -0.5rem !important;
            }
            .mt-lg-n3 {
                margin-top: -1rem !important;
            }
            .mt-lg-n4 {
                margin-top: -1.6rem !important;
            }
            .mt-lg-n5 {
                margin-top: -3rem !important;
            }
            .mt-lg-n6 {
                margin-top: -3.5rem !important;
            }
            .mt-lg-n7 {
                margin-top: -4rem !important;
            }
            .mt-lg-n8 {
                margin-top: -8rem !important;
            }
            .mt-lg-n9 {
                margin-top: -11rem !important;
            }
            .me-lg-n1 {
                margin-right: -0.25rem !important;
            }
            .me-lg-n2 {
                margin-right: -0.5rem !important;
            }
            .me-lg-n3 {
                margin-right: -1rem !important;
            }
            .me-lg-n4 {
                margin-right: -1.6rem !important;
            }
            .me-lg-n5 {
                margin-right: -3rem !important;
            }
            .me-lg-n6 {
                margin-right: -3.5rem !important;
            }
            .me-lg-n7 {
                margin-right: -4rem !important;
            }
            .me-lg-n8 {
                margin-right: -8rem !important;
            }
            .me-lg-n9 {
                margin-right: -11rem !important;
            }
            .mb-lg-n1 {
                margin-bottom: -0.25rem !important;
            }
            .mb-lg-n2 {
                margin-bottom: -0.5rem !important;
            }
            .mb-lg-n3 {
                margin-bottom: -1rem !important;
            }
            .mb-lg-n4 {
                margin-bottom: -1.6rem !important;
            }
            .mb-lg-n5 {
                margin-bottom: -3rem !important;
            }
            .mb-lg-n6 {
                margin-bottom: -3.5rem !important;
            }
            .mb-lg-n7 {
                margin-bottom: -4rem !important;
            }
            .mb-lg-n8 {
                margin-bottom: -8rem !important;
            }
            .mb-lg-n9 {
                margin-bottom: -11rem !important;
            }
            .ms-lg-n1 {
                margin-left: -0.25rem !important;
            }
            .ms-lg-n2 {
                margin-left: -0.5rem !important;
            }
            .ms-lg-n3 {
                margin-left: -1rem !important;
            }
            .ms-lg-n4 {
                margin-left: -1.6rem !important;
            }
            .ms-lg-n5 {
                margin-left: -3rem !important;
            }
            .ms-lg-n6 {
                margin-left: -3.5rem !important;
            }
            .ms-lg-n7 {
                margin-left: -4rem !important;
            }
            .ms-lg-n8 {
                margin-left: -8rem !important;
            }
            .ms-lg-n9 {
                margin-left: -11rem !important;
            }
            .p-lg-0 {
                padding: 0 !important;
            }
            .p-lg-1 {
                padding: 0.25rem !important;
            }
            .p-lg-2 {
                padding: 0.5rem !important;
            }
            .p-lg-3 {
                padding: 1rem !important;
            }
            .p-lg-4 {
                padding: 1.6rem !important;
            }
            .p-lg-5 {
                padding: 3rem !important;
            }
            .p-lg-6 {
                padding: 3.5rem !important;
            }
            .p-lg-7 {
                padding: 4rem !important;
            }
            .p-lg-8 {
                padding: 8rem !important;
            }
            .p-lg-9 {
                padding: 11rem !important;
            }
            .px-lg-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }
            .px-lg-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }
            .px-lg-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }
            .px-lg-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }
            .px-lg-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }
            .px-lg-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }
            .px-lg-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }
            .px-lg-7 {
                padding-right: 4rem !important;
                padding-left: 4rem !important;
            }
            .px-lg-8 {
                padding-right: 8rem !important;
                padding-left: 8rem !important;
            }
            .px-lg-9 {
                padding-right: 11rem !important;
                padding-left: 11rem !important;
            }
            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
            .py-lg-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }
            .py-lg-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }
            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }
            .py-lg-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }
            .py-lg-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }
            .py-lg-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }
            .py-lg-7 {
                padding-top: 4rem !important;
                padding-bottom: 4rem !important;
            }
            .py-lg-8 {
                padding-top: 8rem !important;
                padding-bottom: 8rem !important;
            }
            .py-lg-9 {
                padding-top: 11rem !important;
                padding-bottom: 11rem !important;
            }
            .pt-lg-0 {
                padding-top: 0 !important;
            }
            .pt-lg-1 {
                padding-top: 0.25rem !important;
            }
            .pt-lg-2 {
                padding-top: 0.5rem !important;
            }
            .pt-lg-3 {
                padding-top: 1rem !important;
            }
            .pt-lg-4 {
                padding-top: 1.6rem !important;
            }
            .pt-lg-5 {
                padding-top: 3rem !important;
            }
            .pt-lg-6 {
                padding-top: 3.5rem !important;
            }
            .pt-lg-7 {
                padding-top: 4rem !important;
            }
            .pt-lg-8 {
                padding-top: 8rem !important;
            }
            .pt-lg-9 {
                padding-top: 11rem !important;
            }
            .pe-lg-0 {
                padding-right: 0 !important;
            }
            .pe-lg-1 {
                padding-right: 0.25rem !important;
            }
            .pe-lg-2 {
                padding-right: 0.5rem !important;
            }
            .pe-lg-3 {
                padding-right: 1rem !important;
            }
            .pe-lg-4 {
                padding-right: 1.6rem !important;
            }
            .pe-lg-5 {
                padding-right: 3rem !important;
            }
            .pe-lg-6 {
                padding-right: 3.5rem !important;
            }
            .pe-lg-7 {
                padding-right: 4rem !important;
            }
            .pe-lg-8 {
                padding-right: 8rem !important;
            }
            .pe-lg-9 {
                padding-right: 11rem !important;
            }
            .pb-lg-0 {
                padding-bottom: 0 !important;
            }
            .pb-lg-1 {
                padding-bottom: 0.25rem !important;
            }
            .pb-lg-2 {
                padding-bottom: 0.5rem !important;
            }
            .pb-lg-3 {
                padding-bottom: 1rem !important;
            }
            .pb-lg-4 {
                padding-bottom: 1.6rem !important;
            }
            .pb-lg-5 {
                padding-bottom: 3rem !important;
            }
            .pb-lg-6 {
                padding-bottom: 3.5rem !important;
            }
            .pb-lg-7 {
                padding-bottom: 4rem !important;
            }
            .pb-lg-8 {
                padding-bottom: 8rem !important;
            }
            .pb-lg-9 {
                padding-bottom: 11rem !important;
            }
            .ps-lg-0 {
                padding-left: 0 !important;
            }
            .ps-lg-1 {
                padding-left: 0.25rem !important;
            }
            .ps-lg-2 {
                padding-left: 0.5rem !important;
            }
            .ps-lg-3 {
                padding-left: 1rem !important;
            }
            .ps-lg-4 {
                padding-left: 1.6rem !important;
            }
            .ps-lg-5 {
                padding-left: 3rem !important;
            }
            .ps-lg-6 {
                padding-left: 3.5rem !important;
            }
            .ps-lg-7 {
                padding-left: 4rem !important;
            }
            .ps-lg-8 {
                padding-left: 8rem !important;
            }
            .ps-lg-9 {
                padding-left: 11rem !important;
            }
            .gap-lg-0 {
                gap: 0 !important;
            }
            .gap-lg-1 {
                gap: 0.25rem !important;
            }
            .gap-lg-2 {
                gap: 0.5rem !important;
            }
            .gap-lg-3 {
                gap: 1rem !important;
            }
            .gap-lg-4 {
                gap: 1.6rem !important;
            }
            .gap-lg-5 {
                gap: 3rem !important;
            }
            .gap-lg-6 {
                gap: 3.5rem !important;
            }
            .gap-lg-7 {
                gap: 4rem !important;
            }
            .gap-lg-8 {
                gap: 8rem !important;
            }
            .gap-lg-9 {
                gap: 11rem !important;
            }
            .text-lg-start {
                text-align: left !important;
            }
            .text-lg-end {
                text-align: right !important;
            }
            .text-lg-center {
                text-align: center !important;
            }
        }
        @media (min-width: 1200px) {
            .float-xl-start {
                float: left !important;
            }
            .float-xl-end {
                float: right !important;
            }
            .float-xl-none {
                float: none !important;
            }
            .d-xl-inline {
                display: inline !important;
            }
            .d-xl-inline-block {
                display: inline-block !important;
            }
            .d-xl-block {
                display: block !important;
            }
            .d-xl-grid {
                display: grid !important;
            }
            .d-xl-table {
                display: table !important;
            }
            .d-xl-table-row {
                display: table-row !important;
            }
            .d-xl-table-cell {
                display: table-cell !important;
            }
            .d-xl-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }
            .d-xl-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
            .d-xl-none {
                display: none !important;
            }
            .flex-xl-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }
            .flex-xl-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }
            .flex-xl-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }
            .flex-xl-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }
            .flex-xl-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }
            .flex-xl-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }
            .flex-xl-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }
            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }
            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }
            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }
            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }
            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }
            .justify-content-xl-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }
            .justify-content-xl-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }
            .justify-content-xl-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }
            .justify-content-xl-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }
            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }
            .justify-content-xl-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }
            .align-items-xl-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }
            .align-items-xl-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }
            .align-items-xl-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }
            .align-items-xl-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }
            .align-items-xl-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }
            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }
            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }
            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }
            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }
            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }
            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }
            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }
            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }
            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }
            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }
            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }
            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
            .order-xl-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }
            .order-xl-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }
            .order-xl-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }
            .order-xl-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }
            .order-xl-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }
            .order-xl-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }
            .order-xl-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }
            .order-xl-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }
            .m-xl-0 {
                margin: 0 !important;
            }
            .m-xl-1 {
                margin: 0.25rem !important;
            }
            .m-xl-2 {
                margin: 0.5rem !important;
            }
            .m-xl-3 {
                margin: 1rem !important;
            }
            .m-xl-4 {
                margin: 1.6rem !important;
            }
            .m-xl-5 {
                margin: 3rem !important;
            }
            .m-xl-6 {
                margin: 3.5rem !important;
            }
            .m-xl-7 {
                margin: 4rem !important;
            }
            .m-xl-8 {
                margin: 8rem !important;
            }
            .m-xl-9 {
                margin: 11rem !important;
            }
            .m-xl-auto {
                margin: auto !important;
            }
            .mx-xl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }
            .mx-xl-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }
            .mx-xl-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }
            .mx-xl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }
            .mx-xl-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }
            .mx-xl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }
            .mx-xl-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }
            .mx-xl-7 {
                margin-right: 4rem !important;
                margin-left: 4rem !important;
            }
            .mx-xl-8 {
                margin-right: 8rem !important;
                margin-left: 8rem !important;
            }
            .mx-xl-9 {
                margin-right: 11rem !important;
                margin-left: 11rem !important;
            }
            .mx-xl-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }
            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }
            .my-xl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }
            .my-xl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }
            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }
            .my-xl-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }
            .my-xl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }
            .my-xl-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }
            .my-xl-7 {
                margin-top: 4rem !important;
                margin-bottom: 4rem !important;
            }
            .my-xl-8 {
                margin-top: 8rem !important;
                margin-bottom: 8rem !important;
            }
            .my-xl-9 {
                margin-top: 11rem !important;
                margin-bottom: 11rem !important;
            }
            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }
            .mt-xl-0 {
                margin-top: 0 !important;
            }
            .mt-xl-1 {
                margin-top: 0.25rem !important;
            }
            .mt-xl-2 {
                margin-top: 0.5rem !important;
            }
            .mt-xl-3 {
                margin-top: 1rem !important;
            }
            .mt-xl-4 {
                margin-top: 1.6rem !important;
            }
            .mt-xl-5 {
                margin-top: 3rem !important;
            }
            .mt-xl-6 {
                margin-top: 3.5rem !important;
            }
            .mt-xl-7 {
                margin-top: 4rem !important;
            }
            .mt-xl-8 {
                margin-top: 8rem !important;
            }
            .mt-xl-9 {
                margin-top: 11rem !important;
            }
            .mt-xl-auto {
                margin-top: auto !important;
            }
            .me-xl-0 {
                margin-right: 0 !important;
            }
            .me-xl-1 {
                margin-right: 0.25rem !important;
            }
            .me-xl-2 {
                margin-right: 0.5rem !important;
            }
            .me-xl-3 {
                margin-right: 1rem !important;
            }
            .me-xl-4 {
                margin-right: 1.6rem !important;
            }
            .me-xl-5 {
                margin-right: 3rem !important;
            }
            .me-xl-6 {
                margin-right: 3.5rem !important;
            }
            .me-xl-7 {
                margin-right: 4rem !important;
            }
            .me-xl-8 {
                margin-right: 8rem !important;
            }
            .me-xl-9 {
                margin-right: 11rem !important;
            }
            .me-xl-auto {
                margin-right: auto !important;
            }
            .mb-xl-0 {
                margin-bottom: 0 !important;
            }
            .mb-xl-1 {
                margin-bottom: 0.25rem !important;
            }
            .mb-xl-2 {
                margin-bottom: 0.5rem !important;
            }
            .mb-xl-3 {
                margin-bottom: 1rem !important;
            }
            .mb-xl-4 {
                margin-bottom: 1.6rem !important;
            }
            .mb-xl-5 {
                margin-bottom: 3rem !important;
            }
            .mb-xl-6 {
                margin-bottom: 3.5rem !important;
            }
            .mb-xl-7 {
                margin-bottom: 4rem !important;
            }
            .mb-xl-8 {
                margin-bottom: 8rem !important;
            }
            .mb-xl-9 {
                margin-bottom: 11rem !important;
            }
            .mb-xl-auto {
                margin-bottom: auto !important;
            }
            .ms-xl-0 {
                margin-left: 0 !important;
            }
            .ms-xl-1 {
                margin-left: 0.25rem !important;
            }
            .ms-xl-2 {
                margin-left: 0.5rem !important;
            }
            .ms-xl-3 {
                margin-left: 1rem !important;
            }
            .ms-xl-4 {
                margin-left: 1.6rem !important;
            }
            .ms-xl-5 {
                margin-left: 3rem !important;
            }
            .ms-xl-6 {
                margin-left: 3.5rem !important;
            }
            .ms-xl-7 {
                margin-left: 4rem !important;
            }
            .ms-xl-8 {
                margin-left: 8rem !important;
            }
            .ms-xl-9 {
                margin-left: 11rem !important;
            }
            .ms-xl-auto {
                margin-left: auto !important;
            }
            .m-xl-n1 {
                margin: -0.25rem !important;
            }
            .m-xl-n2 {
                margin: -0.5rem !important;
            }
            .m-xl-n3 {
                margin: -1rem !important;
            }
            .m-xl-n4 {
                margin: -1.6rem !important;
            }
            .m-xl-n5 {
                margin: -3rem !important;
            }
            .m-xl-n6 {
                margin: -3.5rem !important;
            }
            .m-xl-n7 {
                margin: -4rem !important;
            }
            .m-xl-n8 {
                margin: -8rem !important;
            }
            .m-xl-n9 {
                margin: -11rem !important;
            }
            .mx-xl-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }
            .mx-xl-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }
            .mx-xl-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }
            .mx-xl-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }
            .mx-xl-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }
            .mx-xl-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }
            .mx-xl-n7 {
                margin-right: -4rem !important;
                margin-left: -4rem !important;
            }
            .mx-xl-n8 {
                margin-right: -8rem !important;
                margin-left: -8rem !important;
            }
            .mx-xl-n9 {
                margin-right: -11rem !important;
                margin-left: -11rem !important;
            }
            .my-xl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }
            .my-xl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }
            .my-xl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }
            .my-xl-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }
            .my-xl-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }
            .my-xl-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }
            .my-xl-n7 {
                margin-top: -4rem !important;
                margin-bottom: -4rem !important;
            }
            .my-xl-n8 {
                margin-top: -8rem !important;
                margin-bottom: -8rem !important;
            }
            .my-xl-n9 {
                margin-top: -11rem !important;
                margin-bottom: -11rem !important;
            }
            .mt-xl-n1 {
                margin-top: -0.25rem !important;
            }
            .mt-xl-n2 {
                margin-top: -0.5rem !important;
            }
            .mt-xl-n3 {
                margin-top: -1rem !important;
            }
            .mt-xl-n4 {
                margin-top: -1.6rem !important;
            }
            .mt-xl-n5 {
                margin-top: -3rem !important;
            }
            .mt-xl-n6 {
                margin-top: -3.5rem !important;
            }
            .mt-xl-n7 {
                margin-top: -4rem !important;
            }
            .mt-xl-n8 {
                margin-top: -8rem !important;
            }
            .mt-xl-n9 {
                margin-top: -11rem !important;
            }
            .me-xl-n1 {
                margin-right: -0.25rem !important;
            }
            .me-xl-n2 {
                margin-right: -0.5rem !important;
            }
            .me-xl-n3 {
                margin-right: -1rem !important;
            }
            .me-xl-n4 {
                margin-right: -1.6rem !important;
            }
            .me-xl-n5 {
                margin-right: -3rem !important;
            }
            .me-xl-n6 {
                margin-right: -3.5rem !important;
            }
            .me-xl-n7 {
                margin-right: -4rem !important;
            }
            .me-xl-n8 {
                margin-right: -8rem !important;
            }
            .me-xl-n9 {
                margin-right: -11rem !important;
            }
            .mb-xl-n1 {
                margin-bottom: -0.25rem !important;
            }
            .mb-xl-n2 {
                margin-bottom: -0.5rem !important;
            }
            .mb-xl-n3 {
                margin-bottom: -1rem !important;
            }
            .mb-xl-n4 {
                margin-bottom: -1.6rem !important;
            }
            .mb-xl-n5 {
                margin-bottom: -3rem !important;
            }
            .mb-xl-n6 {
                margin-bottom: -3.5rem !important;
            }
            .mb-xl-n7 {
                margin-bottom: -4rem !important;
            }
            .mb-xl-n8 {
                margin-bottom: -8rem !important;
            }
            .mb-xl-n9 {
                margin-bottom: -11rem !important;
            }
            .ms-xl-n1 {
                margin-left: -0.25rem !important;
            }
            .ms-xl-n2 {
                margin-left: -0.5rem !important;
            }
            .ms-xl-n3 {
                margin-left: -1rem !important;
            }
            .ms-xl-n4 {
                margin-left: -1.6rem !important;
            }
            .ms-xl-n5 {
                margin-left: -3rem !important;
            }
            .ms-xl-n6 {
                margin-left: -3.5rem !important;
            }
            .ms-xl-n7 {
                margin-left: -4rem !important;
            }
            .ms-xl-n8 {
                margin-left: -8rem !important;
            }
            .ms-xl-n9 {
                margin-left: -11rem !important;
            }
            .p-xl-0 {
                padding: 0 !important;
            }
            .p-xl-1 {
                padding: 0.25rem !important;
            }
            .p-xl-2 {
                padding: 0.5rem !important;
            }
            .p-xl-3 {
                padding: 1rem !important;
            }
            .p-xl-4 {
                padding: 1.6rem !important;
            }
            .p-xl-5 {
                padding: 3rem !important;
            }
            .p-xl-6 {
                padding: 3.5rem !important;
            }
            .p-xl-7 {
                padding: 4rem !important;
            }
            .p-xl-8 {
                padding: 8rem !important;
            }
            .p-xl-9 {
                padding: 11rem !important;
            }
            .px-xl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }
            .px-xl-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }
            .px-xl-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }
            .px-xl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }
            .px-xl-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }
            .px-xl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }
            .px-xl-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }
            .px-xl-7 {
                padding-right: 4rem !important;
                padding-left: 4rem !important;
            }
            .px-xl-8 {
                padding-right: 8rem !important;
                padding-left: 8rem !important;
            }
            .px-xl-9 {
                padding-right: 11rem !important;
                padding-left: 11rem !important;
            }
            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
            .py-xl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }
            .py-xl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }
            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }
            .py-xl-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }
            .py-xl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }
            .py-xl-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }
            .py-xl-7 {
                padding-top: 4rem !important;
                padding-bottom: 4rem !important;
            }
            .py-xl-8 {
                padding-top: 8rem !important;
                padding-bottom: 8rem !important;
            }
            .py-xl-9 {
                padding-top: 11rem !important;
                padding-bottom: 11rem !important;
            }
            .pt-xl-0 {
                padding-top: 0 !important;
            }
            .pt-xl-1 {
                padding-top: 0.25rem !important;
            }
            .pt-xl-2 {
                padding-top: 0.5rem !important;
            }
            .pt-xl-3 {
                padding-top: 1rem !important;
            }
            .pt-xl-4 {
                padding-top: 1.6rem !important;
            }
            .pt-xl-5 {
                padding-top: 3rem !important;
            }
            .pt-xl-6 {
                padding-top: 3.5rem !important;
            }
            .pt-xl-7 {
                padding-top: 4rem !important;
            }
            .pt-xl-8 {
                padding-top: 8rem !important;
            }
            .pt-xl-9 {
                padding-top: 11rem !important;
            }
            .pe-xl-0 {
                padding-right: 0 !important;
            }
            .pe-xl-1 {
                padding-right: 0.25rem !important;
            }
            .pe-xl-2 {
                padding-right: 0.5rem !important;
            }
            .pe-xl-3 {
                padding-right: 1rem !important;
            }
            .pe-xl-4 {
                padding-right: 1.6rem !important;
            }
            .pe-xl-5 {
                padding-right: 3rem !important;
            }
            .pe-xl-6 {
                padding-right: 3.5rem !important;
            }
            .pe-xl-7 {
                padding-right: 4rem !important;
            }
            .pe-xl-8 {
                padding-right: 8rem !important;
            }
            .pe-xl-9 {
                padding-right: 11rem !important;
            }
            .pb-xl-0 {
                padding-bottom: 0 !important;
            }
            .pb-xl-1 {
                padding-bottom: 0.25rem !important;
            }
            .pb-xl-2 {
                padding-bottom: 0.5rem !important;
            }
            .pb-xl-3 {
                padding-bottom: 1rem !important;
            }
            .pb-xl-4 {
                padding-bottom: 1.6rem !important;
            }
            .pb-xl-5 {
                padding-bottom: 3rem !important;
            }
            .pb-xl-6 {
                padding-bottom: 3.5rem !important;
            }
            .pb-xl-7 {
                padding-bottom: 4rem !important;
            }
            .pb-xl-8 {
                padding-bottom: 8rem !important;
            }
            .pb-xl-9 {
                padding-bottom: 11rem !important;
            }
            .ps-xl-0 {
                padding-left: 0 !important;
            }
            .ps-xl-1 {
                padding-left: 0.25rem !important;
            }
            .ps-xl-2 {
                padding-left: 0.5rem !important;
            }
            .ps-xl-3 {
                padding-left: 1rem !important;
            }
            .ps-xl-4 {
                padding-left: 1.6rem !important;
            }
            .ps-xl-5 {
                padding-left: 3rem !important;
            }
            .ps-xl-6 {
                padding-left: 3.5rem !important;
            }
            .ps-xl-7 {
                padding-left: 4rem !important;
            }
            .ps-xl-8 {
                padding-left: 8rem !important;
            }
            .ps-xl-9 {
                padding-left: 11rem !important;
            }
            .gap-xl-0 {
                gap: 0 !important;
            }
            .gap-xl-1 {
                gap: 0.25rem !important;
            }
            .gap-xl-2 {
                gap: 0.5rem !important;
            }
            .gap-xl-3 {
                gap: 1rem !important;
            }
            .gap-xl-4 {
                gap: 1.6rem !important;
            }
            .gap-xl-5 {
                gap: 3rem !important;
            }
            .gap-xl-6 {
                gap: 3.5rem !important;
            }
            .gap-xl-7 {
                gap: 4rem !important;
            }
            .gap-xl-8 {
                gap: 8rem !important;
            }
            .gap-xl-9 {
                gap: 11rem !important;
            }
            .text-xl-start {
                text-align: left !important;
            }
            .text-xl-end {
                text-align: right !important;
            }
            .text-xl-center {
                text-align: center !important;
            }
        }
        @media (min-width: 1400px) {
            .float-xxl-start {
                float: left !important;
            }
            .float-xxl-end {
                float: right !important;
            }
            .float-xxl-none {
                float: none !important;
            }
            .d-xxl-inline {
                display: inline !important;
            }
            .d-xxl-inline-block {
                display: inline-block !important;
            }
            .d-xxl-block {
                display: block !important;
            }
            .d-xxl-grid {
                display: grid !important;
            }
            .d-xxl-table {
                display: table !important;
            }
            .d-xxl-table-row {
                display: table-row !important;
            }
            .d-xxl-table-cell {
                display: table-cell !important;
            }
            .d-xxl-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }
            .d-xxl-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
            .d-xxl-none {
                display: none !important;
            }
            .flex-xxl-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }
            .flex-xxl-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }
            .flex-xxl-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }
            .flex-xxl-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }
            .flex-xxl-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }
            .flex-xxl-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }
            .flex-xxl-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }
            .flex-xxl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }
            .flex-xxl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }
            .flex-xxl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }
            .flex-xxl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }
            .flex-xxl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }
            .justify-content-xxl-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }
            .justify-content-xxl-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }
            .justify-content-xxl-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }
            .justify-content-xxl-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }
            .justify-content-xxl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }
            .justify-content-xxl-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }
            .align-items-xxl-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }
            .align-items-xxl-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }
            .align-items-xxl-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }
            .align-items-xxl-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }
            .align-items-xxl-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }
            .align-content-xxl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }
            .align-content-xxl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }
            .align-content-xxl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }
            .align-content-xxl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }
            .align-content-xxl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }
            .align-content-xxl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }
            .align-self-xxl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }
            .align-self-xxl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }
            .align-self-xxl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }
            .align-self-xxl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }
            .align-self-xxl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }
            .align-self-xxl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
            .order-xxl-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }
            .order-xxl-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }
            .order-xxl-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }
            .order-xxl-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }
            .order-xxl-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }
            .order-xxl-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }
            .order-xxl-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }
            .order-xxl-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }
            .m-xxl-0 {
                margin: 0 !important;
            }
            .m-xxl-1 {
                margin: 0.25rem !important;
            }
            .m-xxl-2 {
                margin: 0.5rem !important;
            }
            .m-xxl-3 {
                margin: 1rem !important;
            }
            .m-xxl-4 {
                margin: 1.6rem !important;
            }
            .m-xxl-5 {
                margin: 3rem !important;
            }
            .m-xxl-6 {
                margin: 3.5rem !important;
            }
            .m-xxl-7 {
                margin: 4rem !important;
            }
            .m-xxl-8 {
                margin: 8rem !important;
            }
            .m-xxl-9 {
                margin: 11rem !important;
            }
            .m-xxl-auto {
                margin: auto !important;
            }
            .mx-xxl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }
            .mx-xxl-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }
            .mx-xxl-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }
            .mx-xxl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }
            .mx-xxl-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }
            .mx-xxl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }
            .mx-xxl-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }
            .mx-xxl-7 {
                margin-right: 4rem !important;
                margin-left: 4rem !important;
            }
            .mx-xxl-8 {
                margin-right: 8rem !important;
                margin-left: 8rem !important;
            }
            .mx-xxl-9 {
                margin-right: 11rem !important;
                margin-left: 11rem !important;
            }
            .mx-xxl-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }
            .my-xxl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }
            .my-xxl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }
            .my-xxl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }
            .my-xxl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }
            .my-xxl-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }
            .my-xxl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }
            .my-xxl-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }
            .my-xxl-7 {
                margin-top: 4rem !important;
                margin-bottom: 4rem !important;
            }
            .my-xxl-8 {
                margin-top: 8rem !important;
                margin-bottom: 8rem !important;
            }
            .my-xxl-9 {
                margin-top: 11rem !important;
                margin-bottom: 11rem !important;
            }
            .my-xxl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }
            .mt-xxl-0 {
                margin-top: 0 !important;
            }
            .mt-xxl-1 {
                margin-top: 0.25rem !important;
            }
            .mt-xxl-2 {
                margin-top: 0.5rem !important;
            }
            .mt-xxl-3 {
                margin-top: 1rem !important;
            }
            .mt-xxl-4 {
                margin-top: 1.6rem !important;
            }
            .mt-xxl-5 {
                margin-top: 3rem !important;
            }
            .mt-xxl-6 {
                margin-top: 3.5rem !important;
            }
            .mt-xxl-7 {
                margin-top: 4rem !important;
            }
            .mt-xxl-8 {
                margin-top: 8rem !important;
            }
            .mt-xxl-9 {
                margin-top: 11rem !important;
            }
            .mt-xxl-auto {
                margin-top: auto !important;
            }
            .me-xxl-0 {
                margin-right: 0 !important;
            }
            .me-xxl-1 {
                margin-right: 0.25rem !important;
            }
            .me-xxl-2 {
                margin-right: 0.5rem !important;
            }
            .me-xxl-3 {
                margin-right: 1rem !important;
            }
            .me-xxl-4 {
                margin-right: 1.6rem !important;
            }
            .me-xxl-5 {
                margin-right: 3rem !important;
            }
            .me-xxl-6 {
                margin-right: 3.5rem !important;
            }
            .me-xxl-7 {
                margin-right: 4rem !important;
            }
            .me-xxl-8 {
                margin-right: 8rem !important;
            }
            .me-xxl-9 {
                margin-right: 11rem !important;
            }
            .me-xxl-auto {
                margin-right: auto !important;
            }
            .mb-xxl-0 {
                margin-bottom: 0 !important;
            }
            .mb-xxl-1 {
                margin-bottom: 0.25rem !important;
            }
            .mb-xxl-2 {
                margin-bottom: 0.5rem !important;
            }
            .mb-xxl-3 {
                margin-bottom: 1rem !important;
            }
            .mb-xxl-4 {
                margin-bottom: 1.6rem !important;
            }
            .mb-xxl-5 {
                margin-bottom: 3rem !important;
            }
            .mb-xxl-6 {
                margin-bottom: 3.5rem !important;
            }
            .mb-xxl-7 {
                margin-bottom: 4rem !important;
            }
            .mb-xxl-8 {
                margin-bottom: 8rem !important;
            }
            .mb-xxl-9 {
                margin-bottom: 11rem !important;
            }
            .mb-xxl-auto {
                margin-bottom: auto !important;
            }
            .ms-xxl-0 {
                margin-left: 0 !important;
            }
            .ms-xxl-1 {
                margin-left: 0.25rem !important;
            }
            .ms-xxl-2 {
                margin-left: 0.5rem !important;
            }
            .ms-xxl-3 {
                margin-left: 1rem !important;
            }
            .ms-xxl-4 {
                margin-left: 1.6rem !important;
            }
            .ms-xxl-5 {
                margin-left: 3rem !important;
            }
            .ms-xxl-6 {
                margin-left: 3.5rem !important;
            }
            .ms-xxl-7 {
                margin-left: 4rem !important;
            }
            .ms-xxl-8 {
                margin-left: 8rem !important;
            }
            .ms-xxl-9 {
                margin-left: 11rem !important;
            }
            .ms-xxl-auto {
                margin-left: auto !important;
            }
            .m-xxl-n1 {
                margin: -0.25rem !important;
            }
            .m-xxl-n2 {
                margin: -0.5rem !important;
            }
            .m-xxl-n3 {
                margin: -1rem !important;
            }
            .m-xxl-n4 {
                margin: -1.6rem !important;
            }
            .m-xxl-n5 {
                margin: -3rem !important;
            }
            .m-xxl-n6 {
                margin: -3.5rem !important;
            }
            .m-xxl-n7 {
                margin: -4rem !important;
            }
            .m-xxl-n8 {
                margin: -8rem !important;
            }
            .m-xxl-n9 {
                margin: -11rem !important;
            }
            .mx-xxl-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }
            .mx-xxl-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }
            .mx-xxl-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }
            .mx-xxl-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }
            .mx-xxl-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }
            .mx-xxl-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }
            .mx-xxl-n7 {
                margin-right: -4rem !important;
                margin-left: -4rem !important;
            }
            .mx-xxl-n8 {
                margin-right: -8rem !important;
                margin-left: -8rem !important;
            }
            .mx-xxl-n9 {
                margin-right: -11rem !important;
                margin-left: -11rem !important;
            }
            .my-xxl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }
            .my-xxl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }
            .my-xxl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }
            .my-xxl-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }
            .my-xxl-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }
            .my-xxl-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }
            .my-xxl-n7 {
                margin-top: -4rem !important;
                margin-bottom: -4rem !important;
            }
            .my-xxl-n8 {
                margin-top: -8rem !important;
                margin-bottom: -8rem !important;
            }
            .my-xxl-n9 {
                margin-top: -11rem !important;
                margin-bottom: -11rem !important;
            }
            .mt-xxl-n1 {
                margin-top: -0.25rem !important;
            }
            .mt-xxl-n2 {
                margin-top: -0.5rem !important;
            }
            .mt-xxl-n3 {
                margin-top: -1rem !important;
            }
            .mt-xxl-n4 {
                margin-top: -1.6rem !important;
            }
            .mt-xxl-n5 {
                margin-top: -3rem !important;
            }
            .mt-xxl-n6 {
                margin-top: -3.5rem !important;
            }
            .mt-xxl-n7 {
                margin-top: -4rem !important;
            }
            .mt-xxl-n8 {
                margin-top: -8rem !important;
            }
            .mt-xxl-n9 {
                margin-top: -11rem !important;
            }
            .me-xxl-n1 {
                margin-right: -0.25rem !important;
            }
            .me-xxl-n2 {
                margin-right: -0.5rem !important;
            }
            .me-xxl-n3 {
                margin-right: -1rem !important;
            }
            .me-xxl-n4 {
                margin-right: -1.6rem !important;
            }
            .me-xxl-n5 {
                margin-right: -3rem !important;
            }
            .me-xxl-n6 {
                margin-right: -3.5rem !important;
            }
            .me-xxl-n7 {
                margin-right: -4rem !important;
            }
            .me-xxl-n8 {
                margin-right: -8rem !important;
            }
            .me-xxl-n9 {
                margin-right: -11rem !important;
            }
            .mb-xxl-n1 {
                margin-bottom: -0.25rem !important;
            }
            .mb-xxl-n2 {
                margin-bottom: -0.5rem !important;
            }
            .mb-xxl-n3 {
                margin-bottom: -1rem !important;
            }
            .mb-xxl-n4 {
                margin-bottom: -1.6rem !important;
            }
            .mb-xxl-n5 {
                margin-bottom: -3rem !important;
            }
            .mb-xxl-n6 {
                margin-bottom: -3.5rem !important;
            }
            .mb-xxl-n7 {
                margin-bottom: -4rem !important;
            }
            .mb-xxl-n8 {
                margin-bottom: -8rem !important;
            }
            .mb-xxl-n9 {
                margin-bottom: -11rem !important;
            }
            .ms-xxl-n1 {
                margin-left: -0.25rem !important;
            }
            .ms-xxl-n2 {
                margin-left: -0.5rem !important;
            }
            .ms-xxl-n3 {
                margin-left: -1rem !important;
            }
            .ms-xxl-n4 {
                margin-left: -1.6rem !important;
            }
            .ms-xxl-n5 {
                margin-left: -3rem !important;
            }
            .ms-xxl-n6 {
                margin-left: -3.5rem !important;
            }
            .ms-xxl-n7 {
                margin-left: -4rem !important;
            }
            .ms-xxl-n8 {
                margin-left: -8rem !important;
            }
            .ms-xxl-n9 {
                margin-left: -11rem !important;
            }
            .p-xxl-0 {
                padding: 0 !important;
            }
            .p-xxl-1 {
                padding: 0.25rem !important;
            }
            .p-xxl-2 {
                padding: 0.5rem !important;
            }
            .p-xxl-3 {
                padding: 1rem !important;
            }
            .p-xxl-4 {
                padding: 1.6rem !important;
            }
            .p-xxl-5 {
                padding: 3rem !important;
            }
            .p-xxl-6 {
                padding: 3.5rem !important;
            }
            .p-xxl-7 {
                padding: 4rem !important;
            }
            .p-xxl-8 {
                padding: 8rem !important;
            }
            .p-xxl-9 {
                padding: 11rem !important;
            }
            .px-xxl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }
            .px-xxl-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }
            .px-xxl-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }
            .px-xxl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }
            .px-xxl-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }
            .px-xxl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }
            .px-xxl-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }
            .px-xxl-7 {
                padding-right: 4rem !important;
                padding-left: 4rem !important;
            }
            .px-xxl-8 {
                padding-right: 8rem !important;
                padding-left: 8rem !important;
            }
            .px-xxl-9 {
                padding-right: 11rem !important;
                padding-left: 11rem !important;
            }
            .py-xxl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
            .py-xxl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }
            .py-xxl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }
            .py-xxl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }
            .py-xxl-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }
            .py-xxl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }
            .py-xxl-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }
            .py-xxl-7 {
                padding-top: 4rem !important;
                padding-bottom: 4rem !important;
            }
            .py-xxl-8 {
                padding-top: 8rem !important;
                padding-bottom: 8rem !important;
            }
            .py-xxl-9 {
                padding-top: 11rem !important;
                padding-bottom: 11rem !important;
            }
            .pt-xxl-0 {
                padding-top: 0 !important;
            }
            .pt-xxl-1 {
                padding-top: 0.25rem !important;
            }
            .pt-xxl-2 {
                padding-top: 0.5rem !important;
            }
            .pt-xxl-3 {
                padding-top: 1rem !important;
            }
            .pt-xxl-4 {
                padding-top: 1.6rem !important;
            }
            .pt-xxl-5 {
                padding-top: 3rem !important;
            }
            .pt-xxl-6 {
                padding-top: 3.5rem !important;
            }
            .pt-xxl-7 {
                padding-top: 4rem !important;
            }
            .pt-xxl-8 {
                padding-top: 8rem !important;
            }
            .pt-xxl-9 {
                padding-top: 11rem !important;
            }
            .pe-xxl-0 {
                padding-right: 0 !important;
            }
            .pe-xxl-1 {
                padding-right: 0.25rem !important;
            }
            .pe-xxl-2 {
                padding-right: 0.5rem !important;
            }
            .pe-xxl-3 {
                padding-right: 1rem !important;
            }
            .pe-xxl-4 {
                padding-right: 1.6rem !important;
            }
            .pe-xxl-5 {
                padding-right: 3rem !important;
            }
            .pe-xxl-6 {
                padding-right: 3.5rem !important;
            }
            .pe-xxl-7 {
                padding-right: 4rem !important;
            }
            .pe-xxl-8 {
                padding-right: 8rem !important;
            }
            .pe-xxl-9 {
                padding-right: 11rem !important;
            }
            .pb-xxl-0 {
                padding-bottom: 0 !important;
            }
            .pb-xxl-1 {
                padding-bottom: 0.25rem !important;
            }
            .pb-xxl-2 {
                padding-bottom: 0.5rem !important;
            }
            .pb-xxl-3 {
                padding-bottom: 1rem !important;
            }
            .pb-xxl-4 {
                padding-bottom: 1.6rem !important;
            }
            .pb-xxl-5 {
                padding-bottom: 3rem !important;
            }
            .pb-xxl-6 {
                padding-bottom: 3.5rem !important;
            }
            .pb-xxl-7 {
                padding-bottom: 4rem !important;
            }
            .pb-xxl-8 {
                padding-bottom: 8rem !important;
            }
            .pb-xxl-9 {
                padding-bottom: 11rem !important;
            }
            .ps-xxl-0 {
                padding-left: 0 !important;
            }
            .ps-xxl-1 {
                padding-left: 0.25rem !important;
            }
            .ps-xxl-2 {
                padding-left: 0.5rem !important;
            }
            .ps-xxl-3 {
                padding-left: 1rem !important;
            }
            .ps-xxl-4 {
                padding-left: 1.6rem !important;
            }
            .ps-xxl-5 {
                padding-left: 3rem !important;
            }
            .ps-xxl-6 {
                padding-left: 3.5rem !important;
            }
            .ps-xxl-7 {
                padding-left: 4rem !important;
            }
            .ps-xxl-8 {
                padding-left: 8rem !important;
            }
            .ps-xxl-9 {
                padding-left: 11rem !important;
            }
            .gap-xxl-0 {
                gap: 0 !important;
            }
            .gap-xxl-1 {
                gap: 0.25rem !important;
            }
            .gap-xxl-2 {
                gap: 0.5rem !important;
            }
            .gap-xxl-3 {
                gap: 1rem !important;
            }
            .gap-xxl-4 {
                gap: 1.6rem !important;
            }
            .gap-xxl-5 {
                gap: 3rem !important;
            }
            .gap-xxl-6 {
                gap: 3.5rem !important;
            }
            .gap-xxl-7 {
                gap: 4rem !important;
            }
            .gap-xxl-8 {
                gap: 8rem !important;
            }
            .gap-xxl-9 {
                gap: 11rem !important;
            }
            .text-xxl-start {
                text-align: left !important;
            }
            .text-xxl-end {
                text-align: right !important;
            }
            .text-xxl-center {
                text-align: center !important;
            }
        }
        @media (min-width: 1200px) {
            .fs-1 {
                font-size: 3.5rem !important;
            }
            .fs-2 {
                font-size: 3rem !important;
            }
            .fs-3 {
                font-size: 2.3rem !important;
            }
            .fs-4 {
                font-size: 1.75rem !important;
            }
            .fs-5 {
                font-size: 1.3rem !important;
            }
        }
        @media print {
            .d-print-inline {
                display: inline !important;
            }
            .d-print-inline-block {
                display: inline-block !important;
            }
            .d-print-block {
                display: block !important;
            }
            .d-print-grid {
                display: grid !important;
            }
            .d-print-table {
                display: table !important;
            }
            .d-print-table-row {
                display: table-row !important;
            }
            .d-print-table-cell {
                display: table-cell !important;
            }
            .d-print-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }
            .d-print-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
            .d-print-none {
                display: none !important;
            }
        }
        .min-w-auto {
            min-width: auto !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .h-15px {
            height: 15px !important;
        }

        .h-20px {
            height: 20px !important;
        }

        .h-30px {
            height: 30px !important;
        }

        .h-40px {
            height: 40px !important;
        }

        .h-50px {
            height: 50px !important;
        }

        .h-60px {
            height: 60px !important;
        }

        .h-70px {
            height: 70px !important;
        }

        .h-300px {
            height: 300px !important;
        }

        .h-400px {
            height: 400px !important;
        }

        .h-600px {
            height: 600px !important;
        }

        .w-30px {
            width: 30px !important;
        }

        .w-40px {
            width: 40px !important;
        }

        .w-80px {
            width: 80px !important;
        }

        .w-90px {
            width: 90px !important;
        }

        .w-100px {
            width: 100px !important;
        }

        .w-150px {
            width: 150px !important;
        }

        .bg-opacity-15 {
            --bs-bg-opacity: 0.15;
        }

        .fill-primary {
            fill: #5143d9 !important;
        }

        .fill-white {
            fill: #fff !important;
        }

        .fill-secondary {
            fill: #85878a !important;
        }

        .fill-success {
            fill: #0cbc87 !important;
        }

        .fill-info {
            fill: #17a2b8 !important;
        }

        .fill-warning {
            fill: #f7c32e !important;
        }

        .fill-danger {
            fill: #d6293e !important;
        }

        .fill-light {
            fill: #f5f5f6 !important;
        }

        .fill-dark {
            fill: #0b0a12 !important;
        }

        .fill-orange {
            fill: #fd7e14 !important;
        }

        .fill-mode {
            fill: var(--bs-mode) !important;
        }

        .fill-body {
            fill: var(--bs-body-bg) !important;
        }

        .fill-mode-inverse {
            fill: var(--bs-gray-900) !important;
        }

        .z-index-0 {
            z-index: 0 !important;
        }

        .z-index-1 {
            z-index: 1 !important;
        }

        .z-index-2 {
            z-index: 2 !important;
        }

        .z-index-9 {
            z-index: 9 !important;
        }

        .z-index-99 {
            z-index: 99 !important;
        }

        .z-index-n1 {
            z-index: -1 !important;
        }

        .z-index-n9 {
            z-index: -9 !important;
        }

        .rotate-10 {
            -webkit-transform: rotate(10deg) !important;
            transform: rotate(10deg) !important;
        }

        .rotate-180 {
            -webkit-transform: rotate(180deg) !important;
            transform: rotate(180deg) !important;
        }

        .border-dashed {
            border-style: dashed !important;
        }

        .lh-0 {
            line-height: 0 !important;
        }

        .opacity-0 {
            opacity: 0 !important;
        }

        .opacity-1 {
            opacity: 0.1 !important;
        }

        .opacity-2 {
            opacity: 0.2 !important;
        }

        .opacity-3 {
            opacity: 0.3 !important;
        }

        .opacity-4 {
            opacity: 0.4 !important;
        }

        .opacity-5 {
            opacity: 0.5 !important;
        }

        .opacity-6 {
            opacity: 0.6 !important;
        }

        .opacity-7 {
            opacity: 0.7 !important;
        }

        .opacity-8 {
            opacity: 0.8 !important;
        }

        .opacity-9 {
            opacity: 0.9 !important;
        }

        @media (min-width: 576px) {
            .vh-sm-100 {
                height: 100vh !important;
            }
            .h-sm-15px {
                height: 15px !important;
            }
            .h-sm-20px {
                height: 20px !important;
            }
            .h-sm-30px {
                height: 30px !important;
            }
            .h-sm-40px {
                height: 40px !important;
            }
            .h-sm-50px {
                height: 50px !important;
            }
            .h-sm-60px {
                height: 60px !important;
            }
            .h-sm-70px {
                height: 70px !important;
            }
            .h-sm-300px {
                height: 300px !important;
            }
            .h-sm-400px {
                height: 400px !important;
            }
            .h-sm-600px {
                height: 600px !important;
            }
        }
        @media (min-width: 768px) {
            .vh-md-100 {
                height: 100vh !important;
            }
            .h-md-15px {
                height: 15px !important;
            }
            .h-md-20px {
                height: 20px !important;
            }
            .h-md-30px {
                height: 30px !important;
            }
            .h-md-40px {
                height: 40px !important;
            }
            .h-md-50px {
                height: 50px !important;
            }
            .h-md-60px {
                height: 60px !important;
            }
            .h-md-70px {
                height: 70px !important;
            }
            .h-md-300px {
                height: 300px !important;
            }
            .h-md-400px {
                height: 400px !important;
            }
            .h-md-600px {
                height: 600px !important;
            }
        }
        @media (min-width: 992px) {
            .vh-lg-100 {
                height: 100vh !important;
            }
            .h-lg-15px {
                height: 15px !important;
            }
            .h-lg-20px {
                height: 20px !important;
            }
            .h-lg-30px {
                height: 30px !important;
            }
            .h-lg-40px {
                height: 40px !important;
            }
            .h-lg-50px {
                height: 50px !important;
            }
            .h-lg-60px {
                height: 60px !important;
            }
            .h-lg-70px {
                height: 70px !important;
            }
            .h-lg-300px {
                height: 300px !important;
            }
            .h-lg-400px {
                height: 400px !important;
            }
            .h-lg-600px {
                height: 600px !important;
            }
        }
        @media (min-width: 1200px) {
            .vh-xl-100 {
                height: 100vh !important;
            }
            .h-xl-15px {
                height: 15px !important;
            }
            .h-xl-20px {
                height: 20px !important;
            }
            .h-xl-30px {
                height: 30px !important;
            }
            .h-xl-40px {
                height: 40px !important;
            }
            .h-xl-50px {
                height: 50px !important;
            }
            .h-xl-60px {
                height: 60px !important;
            }
            .h-xl-70px {
                height: 70px !important;
            }
            .h-xl-300px {
                height: 300px !important;
            }
            .h-xl-400px {
                height: 400px !important;
            }
            .h-xl-600px {
                height: 600px !important;
            }
        }
        @media (min-width: 1400px) {
            .vh-xxl-100 {
                height: 100vh !important;
            }
            .h-xxl-15px {
                height: 15px !important;
            }
            .h-xxl-20px {
                height: 20px !important;
            }
            .h-xxl-30px {
                height: 30px !important;
            }
            .h-xxl-40px {
                height: 40px !important;
            }
            .h-xxl-50px {
                height: 50px !important;
            }
            .h-xxl-60px {
                height: 60px !important;
            }
            .h-xxl-70px {
                height: 70px !important;
            }
            .h-xxl-300px {
                height: 300px !important;
            }
            .h-xxl-400px {
                height: 400px !important;
            }
            .h-xxl-600px {
                height: 600px !important;
            }
        }
        .accordion .accordion-button {
            text-align: left;
        }

        .accordion .accordion-item {
            color: var(--bs-body-color);
        }
        .accordion.accordion-icon .accordion-header {
            position: relative;
        }
        .accordion.accordion-icon .accordion-header .accordion-button {
            background: transparent;
            font-size: inherit;
            border: none;
            padding-right: 2rem;
        }
        .accordion.accordion-icon .accordion-header .accordion-button:after {
            content: "";
            background: var(--bs-gray-800) !important;
            width: 10px;
            height: 2px;
            display: block;
            position: absolute;
            top: 47%;
            right: 20px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
            z-index: 9;
        }
        .accordion.accordion-icon .accordion-header .accordion-button:before {
            content: "";
            background: var(--bs-gray-800) !important;
            width: 10px;
            height: 2px;
            display: block;
            position: absolute;
            top: 47%;
            right: 20px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
            z-index: 9;
        }
        .accordion.accordion-icon .accordion-header .accordion-button[aria-expanded=false]:after {
            -webkit-transform: rotateZ(90deg);
            transform: rotateZ(90deg);
        }
        .accordion.accordion-icon .accordion-header .accordion-button[aria-expanded=true]:before {
            -webkit-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
        }
        .accordion.accordion-icon .accordion-collapse {
            border: none;
        }
        .accordion.accordion-icon .accordion-body {
            padding: 0.2rem 1rem 0.5rem 1rem;
        }

        .accordion.accordion-bg-light .accordion-item {
            border: none;
            background-color: transparent;
        }
        .accordion.accordion-bg-light .accordion-button {
            background-color: var(--bs-light) !important;
            color: var(--bs-gray-800) !important;
        }
        .accordion.accordion-bg-light .accordion-button:not(.collapsed) {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        @media (max-width: 575.98px) {
            .accordion-icon .accordion-body {
                padding: 0.6rem 0.5rem 0.5rem 0.5rem !important;
            }
            .accordion-header .accordion-button {
                padding-left: 1.3rem !important;
            }
        }
        .breadcrumb-item a {
            color: #747579;
        }
        .breadcrumb-item a:hover {
            color: var(--bs-primary);
        }

        .breadcrumb.breadcrumb-dark .breadcrumb-item a {
            color: var(--bs-gray-300);
        }
        .breadcrumb.breadcrumb-dark .breadcrumb-item a:hover {
            color: var(--bs-primary);
        }
        .breadcrumb.breadcrumb-dark .breadcrumb-item.active {
            color: var(--bs-gray-400);
        }

        .breadcrumb.breadcrumb-dots .breadcrumb-item + .breadcrumb-item::before {
            content: "•";
            font-size: 22px;
            line-height: 0;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .btn {
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
            outline: 0;
            margin-bottom: 6px;
        }

        .input-group .btn {
            margin-bottom: 0;
        }

        .btn-xs {
            padding: 0.4rem 0.6rem;
            font-size: 0.6rem;
            line-height: 1.2;
            border-radius: 0.4rem;
        }

        .btn-light {
            background: var(--bs-light);
            border-color: var(--bs-light);
            color: var(--bs-gray-900);
        }
        .btn-light.active, .btn-light:active, .btn-light:focus, .btn-light:hover {
            background: var(--bs-gray-200);
            border-color: var(--bs-gray-200);
            color: var(--bs-gray-900);
        }

        .btn-white {
            background: #fff;
            color: #0b0a12;
        }
        .btn-white.active, .btn-white:active, .btn-white:focus, .btn-white:hover {
            background: #dfdfe3;
            color: #0b0a12;
            border-color: #dfdfe3;
        }

        .btn-outline-white {
            background: transparent;
            border-color: #fff;
            color: #fff;
        }
        .btn-outline-white.active, .btn-outline-white:active, .btn-outline-white:focus, .btn-outline-white:hover {
            color: #0b0a12;
            background: #fff;
        }

        .btn-outline-light {
            background: transparent;
            border-color: #96969a;
            color: #747579;
        }
        .btn-outline-light:active, .btn-outline-light:hover, .btn-outline-light:focus {
            background: #c5c5c7;
            border-color: #c5c5c7;
            color: #0b0a12;
        }

        .btn-check:checked + .btn-outline-light {
            background: #96969a;
            border-color: #96969a;
            color: #0b0a12;
        }

        .btn-round {
            height: 40px;
            width: 40px;
            line-height: 40px;
            border-radius: 50%;
            padding: 0;
            text-align: center;
        }
        .btn-round i {
            margin: 0;
        }
        .btn-round .fa-play {
            padding-left: 3px;
        }
        .btn-round.btn-lg, .btn-group-lg > .btn-round.btn {
            height: 55px;
            width: 55px;
            line-height: 55px;
        }
        .btn-round.btn-sm, .btn-group-sm > .btn-round.btn {
            height: 32px;
            width: 32px;
            line-height: 30px;
        }
        .btn-round.btn-sm i, .btn-group-sm > .btn-round.btn i {
            font-size: 0.6rem;
        }
        .btn-round.btn-xs {
            height: 25px;
            width: 25px;
            line-height: 24px;
        }
        .btn-round.btn-xs i {
            font-size: 0.6rem;
        }

        /*rtl:raw:
.btn-round .fa-play{
  padding-left: 3px;
  padding-right: 0;
}
*/
        .btn-primary-soft {
            color: #5143d9;
            background-color: rgba(81, 67, 217, 0.1);
        }
        .btn-primary-soft:active, .btn-primary-soft:hover, .btn-primary-soft:focus {
            color: #fff;
            background-color: #5143d9;
            border-color: #5143d9;
        }

        .btn-white-soft {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .btn-white-soft:active, .btn-white-soft:hover, .btn-white-soft:focus {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-secondary-soft {
            color: #85878a;
            background-color: rgba(133, 135, 138, 0.1);
        }
        .btn-secondary-soft:active, .btn-secondary-soft:hover, .btn-secondary-soft:focus {
            color: #fff;
            background-color: #85878a;
            border-color: #85878a;
        }

        .btn-success-soft {
            color: #0cbc87;
            background-color: rgba(12, 188, 135, 0.1);
        }
        .btn-success-soft:active, .btn-success-soft:hover, .btn-success-soft:focus {
            color: #fff;
            background-color: #0cbc87;
            border-color: #0cbc87;
        }

        .btn-info-soft {
            color: #17a2b8;
            background-color: rgba(23, 162, 184, 0.1);
        }
        .btn-info-soft:active, .btn-info-soft:hover, .btn-info-soft:focus {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-warning-soft {
            color: #f7c32e;
            background-color: rgba(247, 195, 46, 0.1);
        }
        .btn-warning-soft:active, .btn-warning-soft:hover, .btn-warning-soft:focus {
            color: #000;
            background-color: #f7c32e;
            border-color: #f7c32e;
        }

        .btn-danger-soft {
            color: #d6293e;
            background-color: rgba(214, 41, 62, 0.1);
        }
        .btn-danger-soft:active, .btn-danger-soft:hover, .btn-danger-soft:focus {
            color: #fff;
            background-color: #d6293e;
            border-color: #d6293e;
        }

        .btn-light-soft {
            color: #f5f5f6;
            background-color: rgba(245, 245, 246, 0.1);
        }
        .btn-light-soft:active, .btn-light-soft:hover, .btn-light-soft:focus {
            color: #000;
            background-color: #f5f5f6;
            border-color: #f5f5f6;
        }

        .btn-dark-soft {
            color: #0b0a12;
            background-color: rgba(11, 10, 18, 0.1);
        }
        .btn-dark-soft:active, .btn-dark-soft:hover, .btn-dark-soft:focus {
            color: #fff;
            background-color: #0b0a12;
            border-color: #0b0a12;
        }

        .btn-orange-soft {
            color: #fd7e14;
            background-color: rgba(253, 126, 20, 0.1);
        }
        .btn-orange-soft:active, .btn-orange-soft:hover, .btn-orange-soft:focus {
            color: #fff;
            background-color: #fd7e14;
            border-color: #fd7e14;
        }

        .btn-mode-soft {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .btn-mode-soft:active, .btn-mode-soft:hover, .btn-mode-soft:focus {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-primary-soft-check:hover {
            background-color: rgba(var(--bs-primary-rgb), 0.2);
            border: 1px solid var(--bs-primary);
            color: var(--bs-primary);
        }

        .btn-check:active + .btn-primary-soft-check, .btn-check:checked + .btn-primary-soft-check, .btn-primary-soft-check.active, .btn-primary-soft-check:active, .show > .btn-primary-soft-check.dropdown-toggle {
            background-color: rgba(var(--bs-primary-rgb), 0.2);
            color: var(--bs-primary);
            border: 1px solid var(--bs-primary);
        }

        .btn-check:focus + .btn, .btn-round-shadow:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btn-dark-bg-check {
            border: 1px solid transparent !important;
        }

        .btn-check:active + .btn-dark-bg-check, .btn-check:checked + .btn-dark-bg-check, .btn-dark-bg-check.active, .btn-dark-bg-check:active, .show > .btn-dark-bg-check.dropdown-toggle {
            background-color: #0b0a12;
            color: #fff;
        }

        .btn-check:focus + .btn, .btn-round-shadow:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btn-more i {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .btn-more[aria-expanded=true] i {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform-origin: center;
            transform-origin: center;
        }
        .btn-more .see-more {
            display: block;
        }
        .btn-more .see-less {
            display: none;
        }
        .btn-more[aria-expanded=true] .see-more {
            display: none;
        }
        .btn-more[aria-expanded=true] .see-less {
            display: block;
        }

        .btn-flip-icon {
            position: absolute;
            left: 100%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        @media (max-width: 767.98px) {
            .btn-flip-icon {
                position: absolute;
                left: 50%;
                top: 100%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                margin-top: 0.5rem;
            }
            .btn-flip-icon i {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
        }
        .btn-primary-check:hover {
            background-color: var(--bs-primary);
            color: #fff;
            border: 1px solid var(--bs-primary);
        }

        .btn-check:active + .btn-primary-check, .btn-check:checked + .btn-primary-check, .btn-primary-check.active, .btn-primary-check:active, .show > .btn-primary-check.dropdown-toggle {
            background-color: var(--bs-primary);
            color: #fff;
            border: 1px solid var(--bs-primary);
        }

        .btn-dark-hover:hover {
            background-color: #0b0a12 !important;
            border-color: #0b0a12;
            color: #fff !important;
        }

        a.badge:hover {
            color: #fff;
        }

        .card.overflow-hidden, .tiny-slider.overflow-hidden {
            will-change: transform;
        }

        .card-header-title {
            margin-bottom: 0;
        }

        .card .card-img-overlay {
            z-index: 2;
        }

        .card.card-element-hover .hover-element {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            z-index: 9;
        }
        .card.card-element-hover:hover .hover-element {
            visibility: visible;
            opacity: 1;
        }

        .card.card-img-scale .card-img-scale-wrapper {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            position: relative;
            overflow: hidden;
        }
        .card.card-img-scale img {
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform: scale(1.001);
            transform: scale(1.001);
        }

        .card.card-img-scale:hover img {
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
        }

        .card-overlay-hover:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-color: #0b0a12;
            display: block;
        }

        .card-overlay-hover:hover:before {
            opacity: 0.5;
        }

        .card.card-hover-shadow {
            -webkit-box-shadow: 0px 3px 20px rgba(29, 58, 83, 0.08);
            box-shadow: 0px 3px 20px rgba(29, 58, 83, 0.08);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card.card-hover-shadow:hover {
            -webkit-transform: translateY(-4px);
            transform: translateY(-4px);
            -webkit-box-shadow: 0px 10px 30px rgba(29, 58, 83, 0.15);
            box-shadow: 0px 10px 30px rgba(29, 58, 83, 0.15);
        }

        .card-grid .card-grid-lg {
            height: 400px;
        }
        .card-grid .card-grid-sm {
            height: calc(200px - var(--bs-gutter-y) / 2);
        }

        @media (max-width: 767.98px) {
            .card-grid .card-grid-lg {
                height: 320px;
            }
        }
        .card-metro {
            overflow: hidden;
        }
        .card-metro .card-img-overlay {
            z-index: 2;
        }
        .card-metro .card-text, .card-metro img {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .card-metro:before {
            content: "";
            position: absolute;
            height: 70%;
            width: 100%;
            bottom: 0;
            background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgb(0, 0, 0)));
            background-image: linear-gradient(180deg, transparent, rgb(0, 0, 0));
            z-index: 1;
        }
        .card-metro:hover .card-text {
            margin-bottom: 10px;
        }
        .card-metro:hover .card-image img {
            -webkit-transform: scale(1.08);
            transform: scale(1.08);
        }

        .dropdown-item.active, .dropdown-item:active,
        .dropdown-item:hover, .dropdown-item:focus {
            border-radius: 0.5rem;
        }

        .dropdown-menu {
            padding-left: 10px;
            padding-right: 10px;
            z-index: 1100;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
        }

        .dropdown-menu-size-sm {
            min-width: 13rem;
        }

        .dropdown-menu-size-md {
            min-width: 22rem;
        }

        .dropdown-menu-size-lg {
            min-width: 30rem;
        }

        @media (max-width: 575.98px) {
            .dropdown-menu-size-md {
                min-width: 17rem;
                margin-right: -35px !important;
            }
            .dropdown-menu-size-sm {
                min-width: 13rem;
            }
        }
        .dropdown .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }

        .dropup .dropdown-toggle:after {
            content: "\f106";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }

        .dropstart .dropdown-toggle:before {
            content: "\f104";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }

        .dropend .dropdown-toggle:after {
            content: "\f105";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }

        @media (max-width: 991.98px) {
            .dropdown-width-lg {
                width: 100%;
                padding: 0;
            }
        }
        @media (min-width: 1200px) {
            .dropdown-width-lg {
                width: 40rem;
                padding: 0;
            }
        }
        @media (min-width: 1400px) {
            .dropdown-width-lg {
                width: 50rem;
                padding: 0;
            }
        }
        .dropdown-fullwidth .dropdown-menu {
            margin: 0 auto;
            left: 0;
            right: 0;
            padding: 1rem 0;
        }

        @media (min-width: 576px) {
            .dropdown-fullwidth {
                position: static;
            }
            .dropdown-fullwidth .dropdown-menu {
                max-width: 96%;
            }
        }
        @media (min-width: 768px) {
            .dropdown-fullwidth {
                position: static;
            }
            .dropdown-fullwidth .dropdown-menu {
                max-width: 94%;
            }
        }
        @media (min-width: 992px) {
            .dropdown-fullwidth {
                position: static;
            }
            .dropdown-fullwidth .dropdown-menu {
                max-width: 94%;
            }
        }
        @media (min-width: 1200px) {
            .dropdown-fullwidth {
                position: static;
            }
            .dropdown-fullwidth .dropdown-menu {
                max-width: 1140px;
            }
        }
        @media (min-width: 1400px) {
            .dropdown-fullwidth {
                position: static;
            }
            .dropdown-fullwidth .dropdown-menu {
                max-width: 1200px;
            }
        }
        .dropdown-menu-start {
            left: 0;
        }

        .dropdown-menu-end {
            right: 0;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-start {
                left: 0;
            }
            .dropdown-menu-sm-end {
                right: 0;
            }
        }
        @media (min-width: 768px) {
            .dropdown-menu-md-start {
                left: 0;
            }
            .dropdown-menu-md-end {
                right: 0;
            }
        }
        @media (min-width: 992px) {
            .dropdown-menu-lg-start {
                left: 0;
            }
            .dropdown-menu-lg-end {
                right: 0;
            }
        }
        @media (min-width: 1200px) {
            .dropdown-menu-xl-start {
                left: 0;
            }
            .dropdown-menu-xl-end {
                right: 0;
            }
        }
        @media (min-width: 1400px) {
            .dropdown-menu-xxl-start {
                left: 0;
            }
            .dropdown-menu-xxl-end {
                right: 0;
            }
        }
        .dropdown-menu.dropdown-animation.show {
            -webkit-animation-duration: 0.3s !important;
            animation-duration: 0.3s !important;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: dropdownslideIn;
            animation-name: dropdownslideIn;
            position: absolute !important;
            top: 100% !important;
            -webkit-transition: none;
            transition: none;
        }

        @keyframes dropdownslideIn {
            0% {
                -webkit-transform: translateY(1rem);
                transform: translateY(1rem);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0rem);
                transform: translateY(0rem);
                opacity: 1;
            }
            0% {
                -webkit-transform: translateY(1rem);
                transform: translateY(1rem);
                opacity: 0;
            }
        }
        @-webkit-keyframes dropdownslideIn {
            0% {
                -webkit-transform: transform;
                -webkit-opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                -webkit-opacity: 1;
            }
            0% {
                -webkit-transform: translateY(1rem);
                -webkit-opacity: 0;
            }
        }
        .list-group-borderless .list-group-item {
            border: none !important;
            padding: 0.425rem 0;
        }
        .list-group-borderless a.list-group-item:hover {
            background-color: transparent;
            color: var(--bs-primary);
        }

        .nav-pills .nav-link {
            cursor: pointer;
            padding: 0.5rem 1rem;
            color: var(--bs-primary);
            white-space: nowrap;
        }

        .nav.flex-column:not(.nav-pills) .nav-link {
            padding-left: 0;
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
        }

        @media (max-width: 991.98px) {
            .nav-responsive {
                overflow-x: scroll;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }
        }
        .nav.nav-divider a:not(.dropdown-item) {
            color: inherit;
        }
        .nav.nav-divider .nav-item + .nav-item:before {
            content: "•";
            color: inherit;
            padding-left: 0.65rem;
            padding-right: 0.75rem;
            opacity: 0.8;
        }
        .nav.nav-divider .nav-item {
            display: inline-block;
            vertical-align: middle;
        }
        .nav.nav-divider .nav-link {
            padding: 0;
            color: inherit;
        }

        .nav-pills-primary-soft .nav-item {
            padding: 0 !important;
            margin-right: 2px;
            margin-left: 2px;
            border-bottom: 0 !important;
        }
        .nav-pills-primary-soft .nav-link {
            padding: 0.5rem 0.8rem !important;
            color: var(--bs-gray-800);
            font-weight: 500;
            border-radius: 0.5rem;
        }
        .nav-pills-primary-soft .nav-link.active, .nav-pills-primary-soft .nav-link:hover {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }

        .nav-pills-primary-soft.flex-column .nav-item {
            margin-bottom: 3px;
            margin-right: 0;
        }

        .nav-pills-dark .nav-link {
            background-color: var(--bs-gray-200);
            color: var(--bs-gray-900);
            border: none;
            font-weight: 600;
        }

        .nav-pills-dark .nav-link.active, .nav-pills-dark .show > .nav-link {
            color: #fff;
            background-color: #0b0a12;
        }

        .nav.nav-bottom-line .nav-link {
            background: transparent;
            border: transparent;
            border-bottom: 3px solid transparent;
            font-weight: 600;
            padding: 0.6rem 0.75rem;
            white-space: nowrap;
        }
        .nav.nav-bottom-line .nav-link.active {
            background: transparent;
            color: var(--bs-primary);
            border-bottom: 3px solid var(--bs-primary);
        }

        .nav-pills-shadow .nav-item {
            padding: 0 !important;
            border-bottom: 0 !important;
        }
        .nav-pills-shadow .nav-link {
            padding: 0.5rem 0.8rem !important;
            color: var(--bs-body-color);
            font-weight: 500;
            border-radius: 0.5rem;
            white-space: nowrap;
            background-color: transparent;
            border: 1px solid transparent;
        }
        .nav-pills-shadow .nav-link:hover {
            color: var(--bs-gray-800);
        }
        .nav-pills-shadow .nav-link.active {
            color: var(--bs-gray-800);
            background-color: var(--bs-light);
            border: 1px solid var(--bs-gray-300);
        }
        .nav-pills-shadow .nav-link:focus-visible {
            outline: none !important;
        }

        .nav-pills-primary-soft.flex-column .nav-item {
            margin-bottom: 3px;
            margin-right: 0;
        }

        .navbar-expand-sm .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            font-size: 0.8rem;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-sm .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            font-size: 1rem;
        }
        .navbar-expand-sm .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 576px) {
            .navbar-expand-sm .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-sm .navbar-brand .navbar-brand-item {
                height: 40px;
                display: block;
                width: auto;
            }
            .navbar-expand-sm .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-sm .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-sm .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-sm .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                margin-left: 0.5rem;
            }
            .navbar-expand-sm .navbar-nav .dropdown .dropdown-submenu.dropstart:hover > .dropdown-menu {
                margin-right: 0.5rem;
            }
            .navbar-expand-sm .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-sm .navbar-nav.nav-active-line .show > .nav-link, .navbar-expand-sm .navbar-nav.nav-active-line .nav-link.active {
                color: var(--bs-navbar-active-color);
                border-bottom: 2px solid var(--bs-primary);
            }
            .navbar-expand-sm.navbar-divider {
                border-bottom: 1px solid var(--bs-gray-200);
            }
            .navbar-expand-sm .navbar-nav .nav-link {
                font-weight: 500;
            }
            .navbar-expand-sm .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: var(--bs-body-bg);
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                border-radius: inherit;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 575.98px) {
            .navbar-expand-sm .navbar-brand .navbar-brand-item {
                height: 30px;
            }
            .navbar-expand-sm .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-sm .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-sm .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: var(--bs-body-bg);
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-sm .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 20px;
            }
            .navbar-expand-sm .navbar-collapse .navbar-nav .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-sm.navbar-dark .nav-link {
                color: var(--bs-navbar-light-color);
            }
            .navbar-expand-sm.navbar-dark .nav-link:hover, .navbar-expand-sm.navbar-dark .nav-link:focus {
                color: var(--bs-nav-link-hover-color);
            }
            .navbar-expand-sm .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(var(--bs-gray-700), 0.5) !important;
            }
            .navbar-expand-sm .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-sm .navbar-toggler {
                border: none;
            }
            .navbar-expand-sm .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-sm .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-sm .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-sm .navbar-nav .dropdown-menu {
                border: 1px solid var(--bs-border-color);
                margin-top: 8px;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .navbar-expand-sm .navbar-nav.nav-primary-soft .nav-item .nav-link {
                padding: 0.5rem 0.75rem;
            }
            .navbar-expand-sm .navbar-nav.navbar-offcanvas-menu .nav-item {
                padding: 0.5rem 0;
            }
            .navbar-expand-sm .navbar-nav.navbar-offcanvas-menu .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-sm .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu {
                background: transparent;
                padding: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-left: solid 1px var(--bs-gray-200);
                border-radius: 0;
                margin-left: 8px;
            }
            .navbar-expand-sm .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item.active, .navbar-expand-sm .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item:hover {
                background: none !important;
            }
        }
        .navbar-expand-md .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            font-size: 0.8rem;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-md .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            font-size: 1rem;
        }
        .navbar-expand-md .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 768px) {
            .navbar-expand-md .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-md .navbar-brand .navbar-brand-item {
                height: 40px;
                display: block;
                width: auto;
            }
            .navbar-expand-md .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-md .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-md .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-md .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                margin-left: 0.5rem;
            }
            .navbar-expand-md .navbar-nav .dropdown .dropdown-submenu.dropstart:hover > .dropdown-menu {
                margin-right: 0.5rem;
            }
            .navbar-expand-md .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-md .navbar-nav.nav-active-line .show > .nav-link, .navbar-expand-md .navbar-nav.nav-active-line .nav-link.active {
                color: var(--bs-navbar-active-color);
                border-bottom: 2px solid var(--bs-primary);
            }
            .navbar-expand-md.navbar-divider {
                border-bottom: 1px solid var(--bs-gray-200);
            }
            .navbar-expand-md .navbar-nav .nav-link {
                font-weight: 500;
            }
            .navbar-expand-md .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: var(--bs-body-bg);
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                border-radius: inherit;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 767.98px) {
            .navbar-expand-md .navbar-brand .navbar-brand-item {
                height: 30px;
            }
            .navbar-expand-md .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-md .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-md .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: var(--bs-body-bg);
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-md .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 20px;
            }
            .navbar-expand-md .navbar-collapse .navbar-nav .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-md.navbar-dark .nav-link {
                color: var(--bs-navbar-light-color);
            }
            .navbar-expand-md.navbar-dark .nav-link:hover, .navbar-expand-md.navbar-dark .nav-link:focus {
                color: var(--bs-nav-link-hover-color);
            }
            .navbar-expand-md .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(var(--bs-gray-700), 0.5) !important;
            }
            .navbar-expand-md .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-md .navbar-toggler {
                border: none;
            }
            .navbar-expand-md .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-md .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-md .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-md .navbar-nav .dropdown-menu {
                border: 1px solid var(--bs-border-color);
                margin-top: 8px;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .navbar-expand-md .navbar-nav.nav-primary-soft .nav-item .nav-link {
                padding: 0.5rem 0.75rem;
            }
            .navbar-expand-md .navbar-nav.navbar-offcanvas-menu .nav-item {
                padding: 0.5rem 0;
            }
            .navbar-expand-md .navbar-nav.navbar-offcanvas-menu .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-md .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu {
                background: transparent;
                padding: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-left: solid 1px var(--bs-gray-200);
                border-radius: 0;
                margin-left: 8px;
            }
            .navbar-expand-md .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item.active, .navbar-expand-md .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item:hover {
                background: none !important;
            }
        }
        .navbar-expand-lg .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            font-size: 0.8rem;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-lg .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            font-size: 1rem;
        }
        .navbar-expand-lg .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-lg .navbar-brand .navbar-brand-item {
                height: 40px;
                display: block;
                width: auto;
            }
            .navbar-expand-lg .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-lg .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-lg .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-lg .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                margin-left: 0.5rem;
            }
            .navbar-expand-lg .navbar-nav .dropdown .dropdown-submenu.dropstart:hover > .dropdown-menu {
                margin-right: 0.5rem;
            }
            .navbar-expand-lg .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-lg .navbar-nav.nav-active-line .show > .nav-link, .navbar-expand-lg .navbar-nav.nav-active-line .nav-link.active {
                color: var(--bs-navbar-active-color);
                border-bottom: 2px solid var(--bs-primary);
            }
            .navbar-expand-lg.navbar-divider {
                border-bottom: 1px solid var(--bs-gray-200);
            }
            .navbar-expand-lg .navbar-nav .nav-link {
                font-weight: 500;
            }
            .navbar-expand-lg .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: var(--bs-body-bg);
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                border-radius: inherit;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 991.98px) {
            .navbar-expand-lg .navbar-brand .navbar-brand-item {
                height: 30px;
            }
            .navbar-expand-lg .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-lg .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-lg .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: var(--bs-body-bg);
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-lg .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 20px;
            }
            .navbar-expand-lg .navbar-collapse .navbar-nav .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-lg.navbar-dark .nav-link {
                color: var(--bs-navbar-light-color);
            }
            .navbar-expand-lg.navbar-dark .nav-link:hover, .navbar-expand-lg.navbar-dark .nav-link:focus {
                color: var(--bs-nav-link-hover-color);
            }
            .navbar-expand-lg .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(var(--bs-gray-700), 0.5) !important;
            }
            .navbar-expand-lg .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-lg .navbar-toggler {
                border: none;
            }
            .navbar-expand-lg .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-lg .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-lg .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                border: 1px solid var(--bs-border-color);
                margin-top: 8px;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .navbar-expand-lg .navbar-nav.nav-primary-soft .nav-item .nav-link {
                padding: 0.5rem 0.75rem;
            }
            .navbar-expand-lg .navbar-nav.navbar-offcanvas-menu .nav-item {
                padding: 0.5rem 0;
            }
            .navbar-expand-lg .navbar-nav.navbar-offcanvas-menu .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-lg .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu {
                background: transparent;
                padding: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-left: solid 1px var(--bs-gray-200);
                border-radius: 0;
                margin-left: 8px;
            }
            .navbar-expand-lg .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item.active, .navbar-expand-lg .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item:hover {
                background: none !important;
            }
        }
        .navbar-expand-xl .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            font-size: 0.8rem;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-xl .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            font-size: 1rem;
        }
        .navbar-expand-xl .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 1200px) {
            .navbar-expand-xl .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-xl .navbar-brand .navbar-brand-item {
                height: 40px;
                display: block;
                width: auto;
            }
            .navbar-expand-xl .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-xl .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-xl .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-xl .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                margin-left: 0.5rem;
            }
            .navbar-expand-xl .navbar-nav .dropdown .dropdown-submenu.dropstart:hover > .dropdown-menu {
                margin-right: 0.5rem;
            }
            .navbar-expand-xl .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-xl .navbar-nav.nav-active-line .show > .nav-link, .navbar-expand-xl .navbar-nav.nav-active-line .nav-link.active {
                color: var(--bs-navbar-active-color);
                border-bottom: 2px solid var(--bs-primary);
            }
            .navbar-expand-xl.navbar-divider {
                border-bottom: 1px solid var(--bs-gray-200);
            }
            .navbar-expand-xl .navbar-nav .nav-link {
                font-weight: 500;
            }
            .navbar-expand-xl .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: var(--bs-body-bg);
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                border-radius: inherit;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 1199.98px) {
            .navbar-expand-xl .navbar-brand .navbar-brand-item {
                height: 30px;
            }
            .navbar-expand-xl .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-xl .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-xl .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: var(--bs-body-bg);
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-xl .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 20px;
            }
            .navbar-expand-xl .navbar-collapse .navbar-nav .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-xl.navbar-dark .nav-link {
                color: var(--bs-navbar-light-color);
            }
            .navbar-expand-xl.navbar-dark .nav-link:hover, .navbar-expand-xl.navbar-dark .nav-link:focus {
                color: var(--bs-nav-link-hover-color);
            }
            .navbar-expand-xl .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(var(--bs-gray-700), 0.5) !important;
            }
            .navbar-expand-xl .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-xl .navbar-toggler {
                border: none;
            }
            .navbar-expand-xl .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-xl .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-xl .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-xl .navbar-nav .dropdown-menu {
                border: 1px solid var(--bs-border-color);
                margin-top: 8px;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .navbar-expand-xl .navbar-nav.nav-primary-soft .nav-item .nav-link {
                padding: 0.5rem 0.75rem;
            }
            .navbar-expand-xl .navbar-nav.navbar-offcanvas-menu .nav-item {
                padding: 0.5rem 0;
            }
            .navbar-expand-xl .navbar-nav.navbar-offcanvas-menu .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-xl .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu {
                background: transparent;
                padding: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-left: solid 1px var(--bs-gray-200);
                border-radius: 0;
                margin-left: 8px;
            }
            .navbar-expand-xl .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item.active, .navbar-expand-xl .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item:hover {
                background: none !important;
            }
        }
        .navbar-expand-xxl .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            font-size: 0.8rem;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-xxl .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            font-size: 1rem;
        }
        .navbar-expand-xxl .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 1400px) {
            .navbar-expand-xxl .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-xxl .navbar-brand .navbar-brand-item {
                height: 40px;
                display: block;
                width: auto;
            }
            .navbar-expand-xxl .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-xxl .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-xxl .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-xxl .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                margin-left: 0.5rem;
            }
            .navbar-expand-xxl .navbar-nav .dropdown .dropdown-submenu.dropstart:hover > .dropdown-menu {
                margin-right: 0.5rem;
            }
            .navbar-expand-xxl .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-xxl .navbar-nav.nav-active-line .show > .nav-link, .navbar-expand-xxl .navbar-nav.nav-active-line .nav-link.active {
                color: var(--bs-navbar-active-color);
                border-bottom: 2px solid var(--bs-primary);
            }
            .navbar-expand-xxl.navbar-divider {
                border-bottom: 1px solid var(--bs-gray-200);
            }
            .navbar-expand-xxl .navbar-nav .nav-link {
                font-weight: 500;
            }
            .navbar-expand-xxl .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: var(--bs-body-bg);
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                border-radius: inherit;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 1399.98px) {
            .navbar-expand-xxl .navbar-brand .navbar-brand-item {
                height: 30px;
            }
            .navbar-expand-xxl .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-xxl .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-xxl .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: var(--bs-body-bg);
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-xxl .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 20px;
            }
            .navbar-expand-xxl .navbar-collapse .navbar-nav .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-xxl.navbar-dark .nav-link {
                color: var(--bs-navbar-light-color);
            }
            .navbar-expand-xxl.navbar-dark .nav-link:hover, .navbar-expand-xxl.navbar-dark .nav-link:focus {
                color: var(--bs-nav-link-hover-color);
            }
            .navbar-expand-xxl .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(var(--bs-gray-700), 0.5) !important;
            }
            .navbar-expand-xxl .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-xxl .navbar-toggler {
                border: none;
            }
            .navbar-expand-xxl .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-xxl .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-xxl .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                border: 1px solid var(--bs-border-color);
                margin-top: 8px;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .navbar-expand-xxl .navbar-nav.nav-primary-soft .nav-item .nav-link {
                padding: 0.5rem 0.75rem;
            }
            .navbar-expand-xxl .navbar-nav.navbar-offcanvas-menu .nav-item {
                padding: 0.5rem 0;
            }
            .navbar-expand-xxl .navbar-nav.navbar-offcanvas-menu .nav-item .nav-link {
                padding: 0.25rem 0;
            }
            .navbar-expand-xxl .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu {
                background: transparent;
                padding: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-left: solid 1px var(--bs-gray-200);
                border-radius: 0;
                margin-left: 8px;
            }
            .navbar-expand-xxl .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item.active, .navbar-expand-xxl .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item:hover {
                background: none !important;
            }
        }
        .navbar-expand .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            font-size: 0.8rem;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            font-size: 1rem;
        }
        .navbar-expand .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 6 Free";
            right: 1rem;
            position: absolute;
        }
        .navbar-expand .navbar-top {
            z-index: 1100 !important;
        }
        .navbar-expand .navbar-brand .navbar-brand-item {
            height: 40px;
            display: block;
            width: auto;
        }
        .navbar-expand .navbar-nav .dropdown > .dropdown-menu {
            top: 120%;
            visibility: hidden;
            opacity: 0;
            display: block;
            -webkit-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
        }
        .navbar-expand .navbar-nav .dropdown:hover > .dropdown-menu {
            display: block;
            top: 100%;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .navbar-expand .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
            visibility: hidden;
            opacity: 0;
            display: block;
            -webkit-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
        }
        .navbar-expand .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
            display: block;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
            margin-left: 0.5rem;
        }
        .navbar-expand .navbar-nav .dropdown .dropdown-submenu.dropstart:hover > .dropdown-menu {
            margin-right: 0.5rem;
        }
        .navbar-expand .navbar-nav .dropdown > .dropdown-toggle:active {
            pointer-events: none;
        }
        .navbar-expand .navbar-nav.nav-active-line .show > .nav-link, .navbar-expand .navbar-nav.nav-active-line .nav-link.active {
            color: var(--bs-navbar-active-color);
            border-bottom: 2px solid var(--bs-primary);
        }
        .navbar-expand.navbar-divider {
            border-bottom: 1px solid var(--bs-gray-200);
        }
        .navbar-expand .navbar-nav .nav-link {
            font-weight: 500;
        }
        .navbar-expand .dropdown-menu .dropdown-toggle:after {
            position: absolute;
        }
        .navbar-expand .dropdown-menu-shadow-stacked {
            z-index: 5;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-submenu {
            z-index: unset !important;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-menu {
            z-index: -1;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-menu > * {
            z-index: 1;
            position: relative;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-menu:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background: var(--bs-body-bg);
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
            border-radius: inherit;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-menu li {
            position: relative;
        }
        .navbar-expand .navbar-brand .navbar-brand-item {
            height: 30px;
        }
        .navbar-expand .navbar-brand {
            padding: 20px 0;
        }
        .navbar-expand .navbar-nav-scroll {
            max-height: var(--bs-scroll-height, 65vh);
        }
        .navbar-expand .navbar-collapse {
            -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
            box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            background: var(--bs-body-bg);
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
        .navbar-expand .navbar-collapse .navbar-nav .nav-item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 8px 20px;
        }
        .navbar-expand .navbar-collapse .navbar-nav .nav-item .nav-link {
            padding: 0.25rem 0;
        }
        .navbar-expand.navbar-dark .nav-link {
            color: var(--bs-navbar-light-color);
        }
        .navbar-expand.navbar-dark .nav-link:hover, .navbar-expand.navbar-dark .nav-link:focus {
            color: var(--bs-nav-link-hover-color);
        }
        .navbar-expand .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
            background: rgba(var(--bs-gray-700), 0.5) !important;
        }
        .navbar-expand .navbar-collapse .navbar-nav .dropdown-toggle::after {
            position: absolute;
            right: 25px;
        }
        .navbar-expand .navbar-toggler {
            border: none;
        }
        .navbar-expand .offcanvas-body {
            padding: 1rem 0.875rem;
        }
        .navbar-expand .offcanvas-body .navbar-nav .nav-item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 8px 0;
        }
        .navbar-expand .offcanvas-body .navbar-nav .dropdown-toggle::after {
            position: absolute;
        }
        .navbar-expand .navbar-nav .dropdown-menu {
            border: 1px solid var(--bs-border-color);
            margin-top: 8px;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .navbar-expand .navbar-nav.nav-primary-soft .nav-item .nav-link {
            padding: 0.5rem 0.75rem;
        }
        .navbar-expand .navbar-nav.navbar-offcanvas-menu .nav-item {
            padding: 0.5rem 0;
        }
        .navbar-expand .navbar-nav.navbar-offcanvas-menu .nav-item .nav-link {
            padding: 0.25rem 0;
        }
        .navbar-expand .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu {
            background: transparent;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-left: solid 1px var(--bs-gray-200);
            border-radius: 0;
            margin-left: 8px;
        }
        .navbar-expand .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item.active, .navbar-expand .navbar-nav.navbar-offcanvas-menu .nav-item > .dropdown-menu .dropdown-item:hover {
            background: none !important;
        }

        @media (min-width: 1200px) {
            header.header-sticky-on {
                position: fixed;
                z-index: 1040;
                top: 0;
                left: 0;
                right: 0;
                background-color: var(--bs-body-bg);
                -webkit-animation: fadeInDown 0.5s;
                animation: fadeInDown 0.5s;
                width: 100%;
                border-bottom: 1px solid var(--bs-gray-200);
            }
            header.header-sticky-on .navbar-top {
                display: none !important;
            }
            header.header-sticky-on .navbar-brand {
                padding: 14px 0;
            }
            header.header-sticky-on .navbar-brand .navbar-brand-item {
                height: 35px;
            }
        }
        @-webkit-keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }
        .header-transparent {
            background: transparent;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }

        .navbar-toggler {
            padding: 10px 10px;
        }

        .navbar-toggler {
            padding: 10px 10px;
        }

        .navbar-toggler .navbar-toggler-animation {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-image: none;
            position: relative;
            height: 22px;
            width: 22px;
            display: inline-block;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .navbar-toggler .navbar-toggler-animation span {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
            height: 2px;
            background: var(--bs-navbar-color);
            display: block;
            position: absolute;
            width: 100%;
            border-radius: 30px;
        }

        .navbar-toggler .navbar-toggler-animation span:nth-child(1) {
            top: 10%;
        }

        .navbar-toggler .navbar-toggler-animation span:nth-child(2) {
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .navbar-toggler .navbar-toggler-animation span:nth-child(3) {
            bottom: 10%;
        }

        .navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(1) {
            -webkit-transform: rotateZ(45deg) translateY(-50%);
            transform: rotateZ(45deg) translateY(-50%);
            top: 49%;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            width: 100%;
        }

        .navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(2) {
            visibility: hidden;
            -webkit-transition: all 0s ease-in-out;
            transition: all 0s ease-in-out;
        }

        .navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(3) {
            -webkit-transform: rotateZ(-45deg) translateY(-50%);
            transform: rotateZ(-45deg) translateY(-50%);
            bottom: 42%;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            width: 100%;
        }

        .nav-notification {
            width: 2.6rem;
            height: 2.6rem;
            line-height: 2.6rem;
            text-align: center;
            font-size: 0.8rem;
        }

        @media (max-width: 575.98px) {
            .nav .nav-item .nav-notification {
                width: 2rem;
                height: 2rem;
                line-height: 2rem;
                font-size: 0.8rem;
            }
            .nav .nav-item .avatar {
                height: 2rem;
                width: 2rem;
            }
        }
        html.dark-mode .navbar-light-static .nav-link {
            color: #0b0a12 !important;
        }
        html.dark-mode .navbar-light-static .nav-link:hover, html.dark-mode .navbar-light-static .nav-link:focus {
            color: var(--bs-nav-link-hover-color) !important;
        }
        html.dark-mode .navbar-light-static .navbar-toggler .navbar-toggler-animation span {
            background-color: #0b0a12;
        }
        html.dark-mode .navbar-light-static .navbar-collapse.show .nav-link {
            color: var(--bs-nav-link-color) !important;
        }
        html.dark-mode .navbar-light-static .navbar-collapse.show .nav-link:hover, html.dark-mode .navbar-light-static .navbar-collapse.show .nav-link:focus {
            color: var(--bs-nav-link-hover-color) !important;
        }

        html.dark-mode header.header-sticky-on {
            border: 0;
        }
        html.dark-mode header.header-sticky-on .navbar-light-static .nav-link {
            color: var(--bs-nav-link-color) !important;
        }
        html.dark-mode header.header-sticky-on .navbar-light-static .nav-link:hover, html.dark-mode header.header-sticky-on .navbar-light-static .nav-link:focus {
            color: var(--bs-nav-link-hover-color) !important;
        }

        .pagination .page-item {
            margin-bottom: 5px;
            float: left;
        }

        .pagination-primary-soft {
            border: none;
            padding: 4px;
            border-radius: 0.5rem;
        }
        .pagination-primary-soft .page-item {
            margin: 3px;
        }
        .pagination-primary-soft .page-item.page-item.active .page-link {
            color: #fff;
            background-color: var(--bs-primary);
        }
        .pagination-primary-soft .page-link {
            border: transparent;
            border-radius: 0.5rem !important;
            color: var(--bs-gray-700);
            background-color: var(--bs-light);
        }
        .pagination-primary-soft .page-link:hover {
            z-index: 2;
            color: #fff;
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        .offcanvas-w-500px {
            width: 500px !important;
        }

        @media (max-width: 575.98px) {
            .offcanvas-w-500px {
                width: 300px !important;
            }
        }
        .progress {
            position: relative;
            overflow-x: visible;
            overflow-y: visible;
        }
        .progress .progress-bar {
            position: relative;
            overflow: visible;
            border-radius: 0.5rem;
        }
        .progress .progress-percent {
            color: #747579;
            font-weight: 500;
            line-height: 24px;
            position: absolute;
            right: 0;
            top: -24px;
            font-size: 12px;
        }
        .progress .progress-percent-simple {
            position: absolute;
            right: 0;
            top: -20px;
            font-size: 14px;
        }

        .progress.progress-percent-bg .progress-percent {
            background: var(--bs-dark);
            padding: 2px 5px;
            border-radius: 2px;
            color: var(--bs-body-bg);
            line-height: 16px;
            position: absolute;
            right: 0;
            top: -25px;
            font-size: 10px;
        }
        .progress.progress-percent-bg .progress-percent:before {
            border-top-color: var(--bs-dark);
            border-width: 5px;
            left: 50%;
            margin-left: -5px;
        }
        .progress.progress-percent-bg .progress-percent:after, .progress.progress-percent-bg .progress-percent:before {
            top: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }
        .progress.progress-percent-bg .progress-percent:after {
            border-top-color: var(--bs-dark);
            border-width: 4px;
            left: 50%;
            margin-left: -4px;
        }

        .progress.progress-xs {
            height: 3px;
        }
        .progress.progress-sm {
            height: 5px;
        }
        .progress.progress-md {
            height: 10px;
        }
        .progress.progress-lg {
            height: 16px;
        }
        .progress.progress-xl {
            height: 20px;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            height: 100%;
            overflow-x: hidden;
            z-index: 0;
            position: relative;
        }

        header {
            position: relative;
            z-index: 1020;
            background: var(--bs-body-bg);
        }

        a {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        h1 > a, h2 > a, h3 > a, h4 > a, h5 > a, h6 > a, .h1 > a, .h2 > a, .h3 > a, .h4 > a, .h5 > a, .h6 > a {
            color: var(--bs-gray-900);
        }
        h1 > a:hover, h2 > a:hover, h3 > a:hover, h4 > a:hover, h5 > a:hover, h6 > a:hover, .h1 > a:hover, .h2 > a:hover, .h3 > a:hover, .h4 > a:hover, .h5 > a:hover, .h6 > a:hover {
            color: var(--bs-primary);
        }

        img {
            max-width: 100%;
            height: auto;
        }

        video {
            background-size: cover;
            display: table-cell;
            vertical-align: middle;
            width: 100%;
        }

        section {
            padding-top: 3.5rem;
            padding-bottom: 2.8rem;
        }

        @media (max-width: 767.98px) {
            section {
                padding-top: 4rem;
                padding-bottom: 3rem;
            }
        }
        .table td, .table th {
            white-space: nowrap;
        }

        .table-compare td, .table-compare th {
            white-space: normal;
        }

        @media (min-width: 767.98px) {
            .table-shrink.table td, .table-shrink.table th {
                white-space: inherit;
            }
        }
        @media (max-width: 767.98px) {
            .table-shrink .table-responsive-title {
                width: 200px;
                white-space: normal;
            }
        }
        .bg-danger-soft-hover:hover, .bg-danger-soft-hover:active, .bg-danger-soft-hover:focus {
            background-color: rgba(214, 41, 62, 0.1) !important;
            color: #d6293e !important;
        }

        .bg-light-hover:hover, .bg-light-hover.active, .bg-light-hover:focus {
            background-color: var(--bs-light) !important;
        }

        .bg-overlay {
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        small,
        .small {
            font-weight: 400;
        }

        .smaller {
            font-size: 0.7em;
            font-weight: 400;
        }

        .dropcap {
            font-size: 4em;
            font-weight: bold;
            display: block;
            float: left;
            margin: 0.04em 0.2em 0 0;
            color: var(--bs-gray-900);
            line-height: 1;
        }

        .bg-blur {
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
        }

        .bg-facebook {
            background-color: #5d82d1;
            color: #fff;
            border: none;
        }
        .bg-facebook:hover, .bg-facebook:active, .bg-facebook:focus {
            background-color: #5475bc;
            color: #fff;
        }

        .text-facebook {
            color: #5d82d1;
        }
        .text-facebook:hover {
            color: #5475bc;
        }

        .bg-whatsapp {
            background-color: #25D366;
            color: #fff;
            border: none;
        }
        .bg-whatsapp:hover, .bg-whatsapp:active, .bg-whatsapp:focus {
            background-color: #21be5c;
            color: #fff;
        }

        .text-whatsapp {
            color: #25D366;
        }
        .text-whatsapp:hover {
            color: #21be5c;
        }

        .bg-instagram {
            background: #c22b72;
            color: #fff;
            border: none;
        }
        .bg-instagram:hover, .bg-instagram:active, .bg-instagram:focus {
            background-color: #af2767;
            color: #fff;
        }

        .text-instagram {
            color: #c22b72;
        }
        .text-instagram:hover {
            color: #af2767;
        }

        .bg-instagram-gradient {
            background: radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            color: #fff;
            background-size: 120% 120%;
            background-position: right bottom;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            border: 0;
        }
        .bg-instagram-gradient:hover, .bg-instagram-gradient:active, .bg-instagram-gradient:focus {
            background: radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            color: #fff;
            background-size: 100% 100%;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-position: left bottom;
        }

        .text-instagram-gradient {
            color: transparent;
            background: radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-size: 120% 120%;
        }
        .text-instagram-gradient:hover {
            color: transparent;
            background: radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background-clip: text;
            -webkit-background-clip: text;
            background-size: 100% 100%;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .bg-google {
            background-color: #3c7ff1;
            color: #fff;
            border: none;
        }
        .bg-google:hover, .bg-google:active, .bg-google:focus {
            background-color: #3672d9;
            color: #fff;
        }

        .text-google {
            color: #3c7ff1;
        }
        .text-google:hover {
            color: #3672d9;
        }

        .text-google-icon {
            background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .bg-twitter {
            background-color: #40bff5;
            color: #fff;
            border: none;
        }
        .bg-twitter:hover, .bg-twitter:active, .bg-twitter:focus {
            background-color: #3aacdd;
            color: #fff;
        }

        .text-twitter {
            color: #40bff5;
        }
        .text-twitter:hover {
            color: #3aacdd;
        }

        .bg-linkedin {
            background-color: #238cc8;
            color: #fff;
            border: none;
        }
        .bg-linkedin:hover, .bg-linkedin:active, .bg-linkedin:focus {
            background-color: #207eb4;
            color: #fff;
        }

        .text-linkedin {
            color: #238cc8;
        }
        .text-linkedin:hover {
            color: #207eb4;
        }

        .bg-youtube {
            background-color: #ff0000;
            color: #fff;
            border: none;
        }
        .bg-youtube:hover, .bg-youtube:active, .bg-youtube:focus {
            background-color: #e60000;
            color: #fff;
        }

        .text-youtube {
            color: #ff0000;
        }
        .text-youtube:hover {
            color: #e60000;
        }

        .form-check .form-check-input, .form-check .form-check-label {
            cursor: pointer;
        }

        .form-check.form-check-md .form-check-input {
            height: 1.3em;
            width: 1.3em;
            margin-top: 0.15em;
        }
        .form-check.form-check-md .form-check-input,
        .form-check.form-check-md .form-check-label {
            padding-left: 0.6em;
        }

        .form-switch.form-check-md .form-check-input {
            width: 2.4em;
        }
        .form-switch.form-check-lg .form-check-input {
            height: 2em;
            width: 4em;
            margin-top: 0.15em;
        }
        .form-switch.form-check-lg .form-check-input .form-check-input {
            width: 3.4em;
        }

        .form-check-light .form-check-input {
            background-color: var(--bs-gray-200);
            border: 0;
        }

        .form-check-light .form-check-input:checked {
            background-color: var(--bs-primary);
        }

        .form-fs-lg .form-control {
            font-weight: 500;
            font-size: 1.2rem;
        }

        .form-fs-md .form-control {
            font-weight: 500;
            font-size: 1rem;
        }

        .form-fs-sm .form-control {
            font-weight: 500;
            font-size: 0.875rem;
        }

        input[type=date]::-webkit-inner-spin-button,
        input[type=date]::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }

        .form-control-inline .form-control-inline-text {
            font-family: "Poppins", sans-serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.8;
            color: #0b0a12;
            margin: 0 1rem;
        }
        .form-control-inline .form-control {
            min-width: 200px;
            max-width: 700px;
            font-family: "Poppins", sans-serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.25;
            color: #0b0a12;
            text-align: center;
            border: 0;
            border-radius: 0;
            border-bottom: 2px dashed #0b0a12;
            padding: 0;
            padding-left: 1rem;
            padding-right: 2rem;
            background-color: transparent !important;
        }
        .form-control-inline .form-control::-webkit-input-placeholder {
            color: #0b0a12;
        }
        .form-control-inline .form-control::-moz-placeholder {
            color: #0b0a12;
        }
        .form-control-inline .form-control:-ms-input-placeholder {
            color: #0b0a12;
        }
        .form-control-inline .form-control::-ms-input-placeholder {
            color: #0b0a12;
        }
        .form-control-inline .form-control::placeholder {
            color: #0b0a12;
        }
        .form-control-inline .choices .choices__inner {
            min-width: 200px;
            max-width: 500px;
            border: 0;
            border-bottom: 2px dashed #0b0a12;
            border-radius: 0;
            padding: 0;
            text-align: left;
            background: transparent;
        }
        .form-control-inline .choices .choices__inner .choices__item {
            font-family: "Poppins", sans-serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.25;
            color: #0b0a12;
            text-align: center;
            padding-left: 1rem;
            padding-right: 2rem;
        }
        .form-control-inline .choices .choices__inner .choices__placeholder {
            color: #0b0a12 !important;
            opacity: 1;
        }
        .form-control-inline .choices .choices__list--dropdown {
            text-align: left;
        }
        .form-control-inline .choices.is-focused[data-type*=select-one] .choices__inner {
            border-color: #0b0a12 !important;
        }
        .form-control-inline .choices[aria-expanded=true] .choices__inner {
            border-radius: 0 !important;
        }
        .form-control-inline .choices[data-type*=select-one]:after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            font-size: 0.8rem;
            color: #0b0a12;
            background-image: none;
        }

        @media (max-width: 575.98px) {
            .form-control-inline .form-control-inline-text {
                font-size: 1.5rem;
                margin-top: 10px;
            }
            .form-control-inline .form-control {
                min-width: 0;
                font-size: 1.5rem;
                margin-top: 10px;
            }
            .form-control-inline .choices .choices__inner {
                min-width: 0;
            }
            .form-control-inline .choices .choices__inner .choices__item {
                font-size: 1.5rem !important;
            }
        }
        .form-control-border {
            width: 100%;
        }
        .form-control-border .form-label {
            background-color: var(--bs-mode);
            position: relative;
            z-index: 9;
            margin-left: 1rem;
            padding: 0 8px;
            border-radius: 0.5rem;
        }

        .form-control-bg-light .form-control {
            border-color: var(--bs-light) !important;
            background-color: var(--bs-light) !important;
        }
        .form-control-bg-light .form-control:focus {
            border-color: rgba(var(--bs-primary-rgb), 0.7) !important;
        }

        .form-border-bottom {
            border-bottom: 1px solid var(--bs-gray-300);
        }
        .form-border-bottom .form-control {
            border: none;
        }

        .form-icon-input {
            position: relative;
        }
        .form-icon-input .form-control {
            color: var(--bs-gray-900);
            background: var(--bs-light) !important;
            padding-left: 3.2rem;
        }
        .form-icon-input .form-control::-webkit-input-placeholder {
            color: var(--bs-gray-400);
        }
        .form-icon-input .form-control::-moz-placeholder {
            color: var(--bs-gray-400);
        }
        .form-icon-input .form-control:-ms-input-placeholder {
            color: var(--bs-gray-400);
        }
        .form-icon-input .form-control::-ms-input-placeholder {
            color: var(--bs-gray-400);
        }
        .form-icon-input .form-control::placeholder {
            color: var(--bs-gray-400);
        }
        .form-icon-input .form-icon {
            position: absolute;
            -webkit-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
            top: 50%;
            left: 0;
            padding-left: 1rem;
        }

        .form-border-transparent .form-control {
            color: var(--bs-gray-900);
            border: 1px solid transparent;
        }
        .form-border-transparent .form-control:focus {
            border-color: rgba(var(--bs-primary-rgb), 0.7);
        }

        .form-control-transparent .form-control {
            background: transparent !important;
        }

        .form-input-dropdown .form-control[aria-expanded=true] {
            border-radius: 0.5rem 0.5rem 0 0 !important;
            border-color: rgba(var(--bs-primary-rgb), 0.7);
        }
        .form-input-dropdown .form-control.form-control-lg[aria-expanded=true] {
            border-radius: 1rem 1rem 0 0 !important;
            border-color: rgba(var(--bs-primary-rgb), 0.7);
        }
        .form-input-dropdown .input-dropdown {
            border: 1px solid rgba(var(--bs-primary-rgb), 0.7) !important;
            border-radius: 0;
            border-bottom-left-radius: 0.5rem !important;
            border-bottom-right-radius: 0.5rem !important;
            margin-top: -4px !important;
        }

        .bg-mode {
            background: var(--bs-mode) !important;
        }

        .plyr__control--overlaid,
        .plyr--audio .plyr__control.plyr__tab-focus,
        .plyr--audio .plyr__control:hover,
        .plyr--audio .plyr__control[aria-expanded=true],
        .plyr--video .plyr__control.plyr__tab-focus,
        .plyr--video .plyr__control:hover,
        .plyr--video .plyr__control[aria-expanded=true],
        .plyr__menu__container .plyr__control[role=menuitemradio][aria-checked=true]:before {
            background: var(--bs-primary);
        }

        .plyr--full-ui input[type=range] {
            color: var(--bs-primary);
        }

        /* rtl:raw:
.glightbox-clean .gclose, .glightbox-modern .gclose{
  right: auto !important;
  left: 20px;
}
*/
        .nav-search .dropdown-menu {
            top: 120%;
            visibility: hidden;
            opacity: 0;
            display: block;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            width: 300px;
            left: auto;
            right: 0;
        }

        .nav-search .dropdown-menu.show {
            top: 100%;
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 575.98px) {
            .nav-search .dropdown-menu {
                width: 100%;
            }
        }
        .back-top {
            cursor: pointer;
            position: fixed !important;
            bottom: 40px;
            right: 40px;
            display: block;
            z-index: 99;
            visibility: hidden;
            opacity: 0;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background: var(--bs-primary);
            color: #fff;
            border-radius: 10%;
            width: 52px;
            height: 52px;
            line-height: 52px;
            text-align: center;
        }
        .back-top:before {
            content: "\f176";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .back-top:hover {
            background: var(--bs-link-hover-color);
            color: #fff;
        }
        .back-top.back-top-show {
            visibility: visible;
            opacity: 1;
            -webkit-transform: translateY(0%);
            transform: translateY(0%);
        }

        @media (max-width: 767.98px) {
            .back-top {
                bottom: 10px;
                right: 10px;
                width: 30px;
                height: 30px;
                line-height: 30px;
            }
            .back-top:before {
                font-size: 0.6rem;
            }
        }
        @media (max-width: 575.98px) {
            .back-top {
                display: none;
            }
        }
        /* rtl:raw:
  .rtl-flip {
    transform: scaleX(-1);
  }
  .rtl-flip.bi:before{
    transform: inherit;
  }
*/
        .bi.fa-fw {
            display: inline-block;
        }

        .preloader {
            background-color: #fff;
            position: fixed;
            z-index: 1190;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
        }
        .preloader .preloader-item {
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .animation-blink {
            -webkit-animation: blink 2s infinite;
            animation: blink 2s infinite;
        }

        @-webkit-keyframes blink {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        @keyframes blink {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        .notif-badge {
            width: 10px;
            height: 10px;
            background: #d6293e;
            border-radius: 50%;
            position: absolute;
            top: -1px;
            right: -1px;
            z-index: 1;
        }

        .notif-unread {
            background-color: var(--bs-light);
        }

        .position-lg-middle {
            position: absolute;
            top: 50%;
            left: 0;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        @media (max-width: 991.98px) {
            .position-lg-middle {
                position: relative;
                top: 0;
                left: 0;
                -webkit-transform: translate(0);
                transform: translate(0);
                margin-top: -4rem;
                margin: auto;
            }
        }
        .btn-position-md-middle {
            position: absolute;
            left: 100%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        @media (max-width: 767.98px) {
            .btn-position-md-middle {
                position: absolute;
                left: 50%;
                top: 100%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
        }
        .fakepasswordicon {
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
        }

        .fakepasswordicon.fa-eye:before {
            content: "\f06e" !important;
        }

        body.dashboard main {
            min-height: calc(100vh - 160px);
        }

        .uploadremove {
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            border: 0;
            padding: 0;
            background: #d6293e;
            border-radius: 50%;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .avatar {
            height: 3rem;
            width: 3rem;
            position: relative;
            display: inline-block !important;
        }

        .avatar-img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .avatar-group {
            padding: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .avatar-group > li {
            position: relative;
        }
        .avatar-group > li:not(:last-child) {
            margin-right: -0.8rem;
        }

        .avatar .avatar-name {
            margin-left: 7px;
        }

        .avatar-xs {
            height: 2.1875rem;
            width: 2.1875rem;
        }

        .avatar-sm {
            height: 2.5rem;
            width: 2.5rem;
        }

        .avatar-lg {
            height: 4rem;
            width: 4rem;
        }

        .avatar-xl {
            height: 5.125rem;
            width: 5.125rem;
        }

        .avatar-xxl {
            height: 5.125rem;
            width: 5.125rem;
        }
        @media (min-width: 768px) {
            .avatar-xxl {
                width: 8rem;
                height: 8rem;
            }
        }

        .avatar-xxxl {
            height: 8rem;
            width: 8rem;
        }
        @media (min-width: 768px) {
            .avatar-xxxl {
                width: 11rem;
                height: 11rem;
            }
        }

        .form-fs-lg .form-guest-selector {
            font-weight: 500;
            font-size: 1.2rem;
            color: var(--bs-gray-900);
        }

        .form-fs-md .form-guest-selector {
            font-weight: 500;
            font-size: 1rem;
            color: var(--bs-gray-900);
        }

        .form-fs-sm .form-guest-selector {
            font-weight: 500;
            font-size: 0.875rem;
            color: var(--bs-gray-900);
        }

        .form-control-border .form-guest-selector {
            margin-top: -1.2rem;
            padding-top: 1rem !important;
            padding-bottom: 0.8rem !important;
            color: var(--bs-gray-900);
        }

        .form-guest-selector[aria-expanded=true] {
            border-radius: 0.5rem 0.5rem 0 0 !important;
            border-color: rgba(var(--bs-primary-rgb), 0.7);
        }

        .form-guest-selector.form-control-lg[aria-expanded=true] {
            border-radius: 1rem 1rem 0 0 !important;
            border-color: rgba(var(--bs-primary-rgb), 0.7);
        }

        .guest-selector-dropdown {
            border: 1px solid rgba(var(--bs-primary-rgb), 0.7) !important;
            border-radius: 0;
            border-bottom-left-radius: 0.5rem !important;
            border-bottom-right-radius: 0.5rem !important;
            margin-top: -4px !important;
        }

        .guest-selector-count {
            min-width: 30px;
            text-align: center;
        }

        .navbar-mobile {
            display: none;
        }

        @media (max-width: 575.98px) {
            .navbar-mobile {
                display: block;
                background-color: var(--bs-mode);
                border-radius: 1rem 1rem 0 0 !important;
                width: 100%;
                position: fixed;
                left: 50%;
                bottom: 0;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
                z-index: 99999;
                padding: 0.5rem 2rem;
                -webkit-box-shadow: 0 1rem 3rem rgba(29, 58, 83, 0.5);
                box-shadow: 0 1rem 3rem rgba(29, 58, 83, 0.5);
            }
            .navbar-mobile .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }
            .navbar-mobile .nav-item {
                text-align: center;
            }
            .navbar-mobile .nav-item .nav-link {
                font-size: 1.3rem;
                color: var(--bs-body-color);
                padding: 0;
            }
            .navbar-mobile .nav-item .nav-link.active, .navbar-mobile .nav-item .nav-link:hover {
                color: var(--bs-navbar-active-color);
            }
            .navbar-mobile .nav-item .nav-link .nav-text {
                font-size: 0.6em;
                display: block;
            }
        }
        @media (max-width: 575.98px) {
            .has-navbar-mobile footer {
                padding-bottom: 4rem !important;
            }
        }
        .sidebar {
            position: relative;
            padding: 0;
            border-right: 1px solid var(--bs-border-color);
        }
        .sidebar.navbar-expand-sm .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item {
            padding: 0 !important;
            margin-right: 2px;
            margin-left: 2px;
            margin-bottom: 3px;
            border-bottom: 0 !important;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-link {
            padding: 0.5rem 0.8rem !important;
            color: var(--bs-gray-800);
            font-weight: 500;
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-link.active, .sidebar.navbar-expand-sm .sidebar-content .nav-link:hover {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .sidebar.navbar-expand-sm .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav .nav-link {
            color: var(--bs-gray-700);
            background: none;
            padding: 0.3rem 0.5rem !important;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav .nav-link.active {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav .nav-link:hover {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: var(--bs-gray-800);
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            margin-left: 1rem !important;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 576px) {
            .sidebar.navbar-expand-sm {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-sm .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-sm .navbar-brand {
                padding: 1.1rem;
            }
            .sidebar.navbar-expand-sm .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 575.98px) {
            .sidebar.navbar-expand-sm {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-sm .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-sm .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand-md .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item {
            padding: 0 !important;
            margin-right: 2px;
            margin-left: 2px;
            margin-bottom: 3px;
            border-bottom: 0 !important;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-link {
            padding: 0.5rem 0.8rem !important;
            color: var(--bs-gray-800);
            font-weight: 500;
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-link.active, .sidebar.navbar-expand-md .sidebar-content .nav-link:hover {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .sidebar.navbar-expand-md .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav .nav-link {
            color: var(--bs-gray-700);
            background: none;
            padding: 0.3rem 0.5rem !important;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav .nav-link.active {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav .nav-link:hover {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: var(--bs-gray-800);
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-md .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            margin-left: 1rem !important;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 768px) {
            .sidebar.navbar-expand-md {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-md .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-md .navbar-brand {
                padding: 1.1rem;
            }
            .sidebar.navbar-expand-md .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 767.98px) {
            .sidebar.navbar-expand-md {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-md .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-md .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand-lg .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item {
            padding: 0 !important;
            margin-right: 2px;
            margin-left: 2px;
            margin-bottom: 3px;
            border-bottom: 0 !important;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-link {
            padding: 0.5rem 0.8rem !important;
            color: var(--bs-gray-800);
            font-weight: 500;
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-link.active, .sidebar.navbar-expand-lg .sidebar-content .nav-link:hover {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .sidebar.navbar-expand-lg .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav .nav-link {
            color: var(--bs-gray-700);
            background: none;
            padding: 0.3rem 0.5rem !important;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav .nav-link.active {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav .nav-link:hover {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: var(--bs-gray-800);
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            margin-left: 1rem !important;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 992px) {
            .sidebar.navbar-expand-lg {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-lg .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-lg .navbar-brand {
                padding: 1.1rem;
            }
            .sidebar.navbar-expand-lg .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 991.98px) {
            .sidebar.navbar-expand-lg {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-lg .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-lg .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand-xl .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item {
            padding: 0 !important;
            margin-right: 2px;
            margin-left: 2px;
            margin-bottom: 3px;
            border-bottom: 0 !important;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-link {
            padding: 0.5rem 0.8rem !important;
            color: var(--bs-gray-800);
            font-weight: 500;
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-link.active, .sidebar.navbar-expand-xl .sidebar-content .nav-link:hover {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .sidebar.navbar-expand-xl .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav .nav-link {
            color: var(--bs-gray-700);
            background: none;
            padding: 0.3rem 0.5rem !important;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav .nav-link.active {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav .nav-link:hover {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: var(--bs-gray-800);
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            margin-left: 1rem !important;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 1200px) {
            .sidebar.navbar-expand-xl {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-xl .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-xl .navbar-brand {
                padding: 1.1rem;
            }
            .sidebar.navbar-expand-xl .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 1199.98px) {
            .sidebar.navbar-expand-xl {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-xl .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-xl .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand-xxl .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item {
            padding: 0 !important;
            margin-right: 2px;
            margin-left: 2px;
            margin-bottom: 3px;
            border-bottom: 0 !important;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-link {
            padding: 0.5rem 0.8rem !important;
            color: var(--bs-gray-800);
            font-weight: 500;
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-link.active, .sidebar.navbar-expand-xxl .sidebar-content .nav-link:hover {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .sidebar.navbar-expand-xxl .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav .nav-link {
            color: var(--bs-gray-700);
            background: none;
            padding: 0.3rem 0.5rem !important;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav .nav-link.active {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav .nav-link:hover {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: var(--bs-gray-800);
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            margin-left: 1rem !important;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 1400px) {
            .sidebar.navbar-expand-xxl {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-xxl .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-xxl .navbar-brand {
                padding: 1.1rem;
            }
            .sidebar.navbar-expand-xxl .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 1399.98px) {
            .sidebar.navbar-expand-xxl {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-xxl .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-xxl .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand {
            position: fixed;
            z-index: 1030;
            top: 0;
            left: 0;
            height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            position: absolute;
            left: -300px;
            height: 100vh;
            z-index: 9;
        }
        .sidebar.navbar-expand .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item {
            padding: 0 !important;
            margin-right: 2px;
            margin-left: 2px;
            margin-bottom: 3px;
            border-bottom: 0 !important;
        }
        .sidebar.navbar-expand .sidebar-content .nav-link {
            padding: 0.5rem 0.8rem !important;
            color: var(--bs-gray-800);
            font-weight: 500;
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand .sidebar-content .nav-link.active, .sidebar.navbar-expand .sidebar-content .nav-link:hover {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .sidebar.navbar-expand .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border-radius: 0.5rem;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav .nav-link {
            color: var(--bs-gray-700);
            background: none;
            padding: 0.3rem 0.5rem !important;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav .nav-link.active {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav .nav-link:hover {
            color: var(--bs-primary) !important;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: var(--bs-gray-800);
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: var(--bs-primary);
        }
        .sidebar.navbar-expand .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            margin-left: 1rem !important;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        .sidebar.navbar-expand .offcanvas {
            position: relative;
        }
        .sidebar.navbar-expand .navbar-brand {
            padding: 1.1rem;
        }
        .sidebar.navbar-expand .navbar-nav .nav-item {
            position: relative;
        }
        .sidebar.navbar-expand .navbar-brand {
            display: none;
        }
        .sidebar.navbar-expand .offcanvas .offcanvas-body .navbar-nav .nav-item {
            border-bottom: 0;
            padding: 0;
        }

        .sidebar-offcanvas-menu {
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border-radius: 0.5rem;
        }

        .top-bar {
            position: relative;
            padding: 1.6rem;
            border-bottom: 1px solid var(--bs-border-color);
        }

        @media (max-width: 991.98px) {
            .top-bar .navbar-expand-lg .navbar-collapse {
                padding: 0 10px;
            }
        }
        .page-content {
            position: relative;
            height: 100%;
            display: block;
        }
        .page-content .page-content-wrapper {
            min-height: 86vh;
            margin: 1.5rem 1.5rem;
            background: var(--bs-body-bg);
            border-radius: 6px;
            height: 100%;
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        @media (min-width: 1200px) {
            .page-content {
                margin-left: 16.25rem;
            }
        }
        @media (max-width: 575.98px) {
            .page-content .page-content-wrapper {
                margin: 1rem 0;
                padding: 1rem;
            }
        }
        .text-primary-hover a {
            color: #96969a;
        }
        .text-primary-hover a:hover {
            color: var(--bs-primary) !important;
        }

        a.text-primary-hover, button.text-primary-hover {
            color: #747579;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        a.text-primary-hover:hover, button.text-primary-hover:hover {
            color: var(--bs-primary) !important;
        }

        .text-primary-hover li {
            color: var(--bs-gray-400);
        }
        .text-primary-hover li:hover {
            color: var(--bs-primary) !important;
        }

        .font-base {
            font-family: "DM Sans", sans-serif !important;
        }

        .font-heading {
            font-family: "Poppins", sans-serif !important;
        }

        .grayscale {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            -webkit-transition: all 0.6s ease;
            transition: all 0.6s ease;
        }
        .grayscale:hover {
            filter: none;
            -webkit-filter: grayscale(0%);
        }

        .icon-sm {
            width: 1.5rem;
            height: 1.5rem;
            line-height: 1.5rem;
            text-align: center;
            font-size: 75%;
        }

        .icon-md {
            width: 2.6rem;
            height: 2.6rem;
            line-height: 2.6rem;
            text-align: center;
            font-size: 0.8rem;
        }

        .icon-lg {
            width: 3.5rem;
            height: 3.5rem;
            line-height: 3.5rem;
            text-align: center;
            font-size: 1.2rem;
        }

        .icon-xl {
            width: 4rem;
            height: 4rem;
            line-height: 4rem;
            text-align: center;
            font-size: 1.9rem;
        }

        .icon-xxl {
            width: 7rem;
            height: 7rem;
            line-height: 7rem;
            text-align: center;
            font-size: 2.5rem;
        }

        .choices {
            margin-bottom: 0;
        }
        .choices .choices__inner {
            background-color: var(--bs-body-bg);
            color: var(--bs-gray-900);
            border: 1px solid var(--bs-gray-300);
            line-height: 1.5;
            font-size: 1rem;
            border-radius: 0.5rem;
            min-height: auto;
            padding: 0.5rem 1rem !important;
        }
        .choices .choices__list--multiple .choices__item {
            background-color: var(--bs-gray-300);
            border: 1px solid var(--bs-gray-300);
            border-radius: 0.5rem;
            color: var(--bs-gray-600);
            padding: 1px 10px !important;
        }
        .choices .choices__list--dropdown {
            border: none;
            z-index: 1010;
            background-color: var(--bs-mode);
            border: 1px solid rgba(var(--bs-primary-rgb), 0.7) !important;
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            visibility: visible !important;
        }
        .choices .choices__list--dropdown .choices__item--selectable.is-highlighted {
            background-color: rgba(var(--bs-primary-rgb), 0.2);
            color: var(--bs-primary);
        }
        .choices .choices__list--dropdown,
        .choices .choices__list[aria-expanded] {
            margin-top: 0px;
        }
        .choices.is-open .choices__list--dropdown, .choices.is-open .choices__list[aria-expanded] {
            margin-top: -1px;
        }
        .choices .choices__list--dropdown .choices__item {
            color: var(--bs-gray-600) !important;
            font-size: 15px;
        }
        .choices .choices__list--dropdown .choices__item.choices__placeholder {
            color: var(--bs-gray-400) !important;
            opacity: 1 !important;
            font-size: 14px;
        }

        .choices.is-flipped .choices__list--dropdown {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .choices.is-flipped[data-type*=select-one] .choices__inner, .choices.is-flipped[data-type*=select-multiple] .choices__inner {
            border-radius: 0 0 0.5rem 0.5rem !important;
        }

        .choices.is-focused .choices__inner {
            border-color: rgba(var(--bs-primary-rgb), 0.7) !important;
        }

        .choices.is-focused[data-type*=select-one] .choices__inner, .choices.is-focused[data-type*=select-multiple] .choices__inner {
            border-color: rgba(var(--bs-primary-rgb), 0.7) !important;
        }

        .choices__input {
            background-color: transparent;
            color: var(--bs-gray-900);
        }

        .choices[data-type*=select-one] .choices__input {
            background: var(--bs-mode);
            color: var(--bs-body-color);
            border-color: var(--bs-gray-300) !important;
        }

        .choices__list--single {
            padding: 0;
        }

        .choices[data-type*=select-multiple] .choices__button, .choices[data-type*=text] .choices__button {
            border-left: 1px solid var(--bs-gray-500);
            background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==);
        }

        .choices[data-type*=select-one]:after {
            content: "";
            height: 12px;
            width: 12px;
            border: none;
            border-width: 5px;
            position: absolute;
            right: 11.5px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin-top: 0;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23747579' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center center;
        }

        .choices[data-type*=select-one].is-open:after {
            margin-top: 0;
        }

        .choices__list--dropdown .choices__item--selectable:after {
            content: none;
        }

        .choices__list--dropdown .choices__item--selectable {
            padding-right: 0;
        }

        .choices__list--dropdown .choices__item {
            padding: 4px 10px;
        }

        .choices[data-type*=select-one] .choices__input {
            padding: 10px;
        }

        .choices .choices__input {
            margin-bottom: 0;
            padding: 0;
        }

        .collapsing .choices__list--dropdown {
            display: none;
        }

        .collapse.show .choices__list--dropdown {
            display: block;
        }

        .choices[aria-expanded=true] .choices__inner {
            border-radius: 0.5rem 0.5rem 0 0 !important;
        }

        .choices__list--dropdown .choices__list {
            position: relative;
            max-height: 200px;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            will-change: scroll-position;
        }

        html[dir=rtl] .choices,
        html[dir=rtl] select option,
        html[dir=rtl] .choices__input {
            direction: rtl;
            unicode-bidi: bidi-override;
            text-align: left;
        }

        [dir=rtl] .choices__list--dropdown .choices__item--selectable {
            padding-left: 10px;
            padding-right: 0;
        }

        .choice-radius-0 .choices .choices__inner {
            border-radius: 0 !important;
        }

        .choice-radius-end .choices .choices__inner {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-right: 0;
        }
        .choice-radius-end .choices[aria-expanded=true] .choices__inner {
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }

        .choice-radius-start .choices .choices__inner {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-left: 0;
        }
        .choice-radius-start .choices[aria-expanded=true] .choices__inner {
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }

        .choices[data-type*=select-one] .choices__list > .choices__list > .choices__item--selectable {
            padding-right: 0px;
        }

        .choices[data-type*=select-one] .choices__list > .choices__list > .choices__item--selectable::after {
            display: none;
        }

        .form-fs-lg .choices .choices__inner {
            font-weight: 500;
            font-size: 1.2rem !important;
        }

        .form-fs-md .choices .choices__inner {
            font-weight: 500;
            font-size: 1rem;
        }

        .form-fs-sm .choices .choices__inner {
            font-weight: 500;
            font-size: 0.875rem;
        }

        .form-control-border .choices {
            margin-top: -1.2rem;
        }
        .form-control-border .choices .choices__inner {
            color: var(--bs-gray-900);
            padding-top: 1rem !important;
            padding-bottom: 0.8rem !important;
        }
        .form-control-border .choices .choices__list--dropdown {
            text-align: left;
        }
        .form-control-border .choices[data-type*=select-one]:after {
            display: none;
        }
        .form-control-border .choices .choices__placeholder {
            opacity: 0.5;
        }

        .form-border-bottom {
            border-bottom: 1px solid var(--bs-gray-300);
        }
        .form-border-bottom .choices .choices__inner {
            border: none;
        }

        .form-control-bg-light .choices .choices__inner {
            color: var(--bs-gray-900);
            border: 1px solid var(--bs-light);
            background-color: var(--bs-light) !important;
        }

        .form-size-lg .choices.is-open[data-type*=select-one] .choices__inner, .form-size-lg .choices.is-open[data-type*=select-multiple] .choices__inner {
            border-color: rgba(var(--bs-primary-rgb), 0.7) !important;
            border-radius: 1rem 1rem 0 0 !important;
        }
        .form-size-lg .choices .choices__inner {
            font-size: 1rem;
            border-radius: 1rem;
            min-height: calc(1.25em + 1.6rem + 2px) !important;
            padding: 0.8rem 1.5rem !important;
            line-height: 1.5 !important;
        }
        .form-size-lg .choices.is-flipped[data-type*=select-one] .choices__inner, .form-size-lg .choices.is-flipped[data-type*=select-multiple] .choices__inner {
            border-radius: 0 0 1rem 1rem !important;
        }

        .form-icon-input .choices .choices__inner {
            color: var(--bs-gray-900);
            background-color: var(--bs-light);
            padding-left: 3.2rem !important;
        }
        .form-icon-input .choices[data-type*=select-one]:after {
            display: none;
        }

        .form-border-transparent .choices .choices__inner {
            color: var(--bs-gray-900);
            border: 1px solid transparent;
        }

        .form-control-transparent .choices .choices__inner {
            background: transparent;
        }

        .form-mix-icon-input {
            position: relative;
        }
        .form-mix-icon-input .choices .choices__inner {
            padding-left: 2.7rem !important;
            padding-right: 2.5rem !important;
        }
        .form-mix-icon-input .choices[data-type*=select-one]:after {
            display: none;
        }

        .tns-outer {
            position: relative;
        }

        .tns-item {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .tiny-slider .item {
            position: relative;
        }

        .tns-controls [data-controls] {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 0.5rem;
            display: block;
            z-index: 9;
            text-align: center;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            border: none;
            margin: 0 10px;
        }
        .tns-controls [data-controls]:hover {
            background-color: var(--bs-primary);
            color: #fff;
        }
        .tns-controls [data-controls] i {
            line-height: inherit;
        }

        .tns-controls [data-controls=prev] {
            left: 0;
        }

        .tns-controls [data-controls=next] {
            right: 0;
        }

        /* rtl:raw:
.tiny-slider .tns-controls [data-controls]{
  transform: scaleX(-1) translateY(-50%);
}
.tiny-slider.arrow-creative .tns-controls [data-controls]{
  transform: scaleX(1) translateY(-50%);
}
.tns-visually-hidden {
  right: -10000em !important;
  left: 0 !important;
}
*/
        .arrow-dark [data-controls] {
            background: #0b0a12;
            color: #fff;
        }

        .arrow-white [data-controls] {
            background-color: #fff;
            color: var(--bs-body-color);
        }

        .arrow-border [data-controls] {
            border: 2px solid var(--bs-body-color);
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            line-height: 45px !important;
        }

        .arrow-border [data-controls]:hover {
            border: 2px solid var(--bs-gray-800);
            color: var(--bs-gray-800);
            background-color: var(--bs-body-bg);
        }

        .arrow-round [data-controls] {
            border-radius: 50%;
        }

        .arrow-blur [data-controls] {
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            background: rgba(0, 0, 0, 0.4) !important;
        }
        .arrow-blur [data-controls]:hover {
            -webkit-backdrop-filter: blur(0px);
            backdrop-filter: blur(0px);
            background: rgba(0, 0, 0, 0.4) !important;
        }
        .arrow-blur.arrow-white [data-controls] {
            background-color: rgba(var(--bs-body-bg-rgb), 0.2) !important;
            color: #fff;
        }

        .arrow-hover {
            overflow: hidden;
        }
        .arrow-hover [data-controls=prev] {
            left: -75px;
        }
        .arrow-hover [data-controls=next] {
            right: -75px;
        }
        .arrow-hover:hover [data-controls=prev] {
            left: 0px;
        }
        .arrow-hover:hover [data-controls=next] {
            right: 0px;
        }

        .arrow-xs .tns-controls [data-controls] {
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
            text-align: center;
        }

        .tns-nav {
            position: absolute;
            top: 100%;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            z-index: 10;
            width: auto;
            text-align: center;
            white-space: nowrap;
        }
        .tns-nav [data-nav] {
            position: relative;
            display: inline-block;
            margin: 0 4px;
            padding: 0;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            overflow: hidden;
            background-color: transparent;
            -webkit-box-shadow: inset 0 0 0 2px var(--bs-gray-500);
            box-shadow: inset 0 0 0 2px var(--bs-gray-500);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            border: 0;
        }
        .tns-nav [data-nav]:after {
            border-radius: 50%;
            overflow: hidden;
            content: "";
            position: absolute;
            bottom: 0;
            height: 0;
            left: 0;
            width: 100%;
            background-color: var(--bs-gray-500);
            -webkit-box-shadow: 0 0 1px var(--bs-gray-500);
            box-shadow: 0 0 1px var(--bs-gray-500);
            -webkit-transition: height 0.3s ease-in-out;
            transition: height 0.3s ease-in-out;
        }
        .tns-nav .tns-nav-active:after {
            height: 100%;
        }

        .dots-primary [data-nav] {
            background-color: rgba(var(--bs-primary-rgb), 0.3);
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .dots-primary [data-nav]:after {
            background-color: var(--bs-primary);
        }

        .stepper-outline .step-trigger:hover {
            background-color: transparent;
        }
        .stepper-outline .bs-stepper-circle {
            width: 3rem;
            height: 3rem;
            border-radius: 100%;
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border: 2px solid rgba(var(--bs-primary-rgb), 0.4);
            color: var(--bs-primary);
            line-height: 1.9rem;
        }
        .stepper-outline .line {
            background-color: var(--bs-gray-200);
        }
        .stepper-outline .bs-stepper-content {
            padding: 20px;
        }
        .stepper-outline .step.active .bs-stepper-circle {
            background-color: var(--bs-primary);
            color: #fff;
            border: none;
            line-height: 2rem;
        }
        .stepper-outline .step .bs-stepper-label {
            margin: 0;
        }
        .stepper-outline .step.active .bs-stepper-label {
            color: var(--bs-primary);
        }

        .step-trigger {
            padding: 5px;
        }
        .step-trigger:hover {
            text-decoration: none;
            background-color: transparent;
        }

        @media (max-width: 767.98px) {
            .stepper-outline .bs-stepper-circle {
                width: 2.5rem;
                height: 2.5rem;
                line-height: 1.4rem;
            }
            .stepper-outline .step.active .bs-stepper-circle {
                line-height: 1.6rem;
            }
            .stepper-outline .bs-stepper-content {
                padding: 5px;
            }
        }
        .ql-snow .ql-picker {
            color: var(--bs-gray-700);
        }
        .ql-snow .ql-fill, .ql-snow .ql-stroke.ql-fill {
            fill: var(--bs-gray-700);
        }
        .ql-snow .ql-stroke {
            stroke: var(--bs-gray-700);
        }

        .primary-slider [data-glightbox] {
            cursor: -webkit-zoom-in;
            cursor: zoom-in;
        }

        .splide-thumb {
            margin-top: 10px;
        }

        .splide-thumb > .splide__track > .splide__list > .splide__slide.is-active {
            -webkit-box-shadow: 0px 0px 0px 5px inset var(--bs-primary);
            box-shadow: 0px 0px 0px 5px inset var(--bs-primary);
            border: none;
        }

        .splide--nav > .splide__track > .splide__list > .splide__slide {
            border-radius: 5px;
            border: none;
        }

        .noUi-connect {
            background: var(--bs-primary);
        }

        .noUi-target {
            background: rgba(var(--bs-primary-rgb), 0.1);
            border-radius: 4px;
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .noUi-horizontal {
            height: 5px;
        }
        .noUi-horizontal .noUi-handle {
            width: 20px;
            height: 20px;
            right: -17px;
            top: -7px;
            cursor: e-resize;
            border-radius: 100%;
            border: 5px solid #fff;
            background: var(--bs-primary);
            -webkit-box-shadow: 0px 0px 0px 1px rgb(81, 67, 217);
            box-shadow: 0px 0px 0px 1px rgb(81, 67, 217);
        }
        .noUi-horizontal .noUi-handle:before, .noUi-horizontal .noUi-handle:after {
            display: none;
        }

        .noui-wrapper input[class*=input-with-] {
            background-color: transparent;
            border: none;
            color: var(--bs-primary);
            width: 70px;
        }

        .noui-wrapper input[class*=input-with-] {
            width: 100px;
        }

        .input-with-range-max {
            text-align: right;
        }

        .flatpickr-calendar {
            background: var(--bs-mode);
            border: 1px solid rgba(var(--bs-primary-rgb), 0.7) !important;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
            margin-top: -4px;
            border-radius: 0.5rem;
            border-radius: 0;
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .flatpickr-calendar:before, .flatpickr-calendar:after {
            display: none !important;
        }

        .flatpickr-current-month .flatpickr-monthDropdown-months, .flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
            background: var(--bs-mode);
            border-color: var(--bs-gray-200);
        }

        .flatpickr-calendar.arrowBottom:before, .flatpickr-calendar.arrowBottom:after {
            border-top-color: var(--bs-body-bg);
        }

        .flatpickr-calendar.arrowTop:before, .flatpickr-calendar.arrowTop:after, .flatpickr-current-month .numInputWrapper span.arrowUp:after {
            border-bottom-color: var(--bs-body-bg);
        }

        .flatpickr-current-month .numInputWrapper span.arrowDown:after {
            border-top-color: #85878a;
        }

        .flatpickr-current-month .numInputWrapper span.arrowUp:after {
            border-bottom-color: #85878a;
        }

        .flatpickr-calendar.arrowBottom {
            margin-top: 1px;
        }

        .flatpickr-months {
            position: relative;
        }

        .flatpickr-months .flatpickr-prev-month, .flatpickr-months .flatpickr-next-month {
            border-radius: 0.5rem;
            margin: 3px;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            padding: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .flatpickr-months .flatpickr-prev-month svg, .flatpickr-months .flatpickr-next-month svg {
            height: 12px;
            width: 12px;
        }
        .flatpickr-months .flatpickr-prev-month:hover, .flatpickr-months .flatpickr-next-month:hover {
            background: rgba(var(--bs-primary-rgb), 0.1);
        }
        .flatpickr-months .flatpickr-prev-month:hover svg, .flatpickr-months .flatpickr-next-month:hover svg {
            fill: #5143d9;
        }

        .flatpickr-day, span.flatpickr-weekday, .flatpickr-months .flatpickr-month {
            color: var(--bs-gray-400);
        }

        .flatpickr-day.flatpickr-disabled, .flatpickr-day.flatpickr-disabled:hover, .flatpickr-day.prevMonthDay, .flatpickr-day.nextMonthDay, .flatpickr-day.notAllowed, .flatpickr-day.notAllowed.prevMonthDay, .flatpickr-day.notAllowed.nextMonthDay {
            color: var(--bs-gray-300);
        }

        .flatpickr-months .flatpickr-prev-month, .flatpickr-months .flatpickr-next-month {
            fill: var(--bs-gray-400);
        }

        .flatpickr-day.today, .flatpickr-day.today:hover, .flatpickr-day.today:focus {
            background: rgba(var(--bs-primary-rgb), 0.1);
            color: #5143d9;
            border-color: rgba(var(--bs-primary-rgb), 0.1);
        }

        .flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange, .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.endRange.nextMonthDay {
            background: var(--bs-primary);
            color: #fff;
            border-color: var(--bs-primary);
        }

        .flatpickr-day.inRange, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day:hover, .flatpickr-day.prevMonthDay:hover, .flatpickr-day.nextMonthDay:hover, .flatpickr-day:focus, .flatpickr-day.prevMonthDay:focus, .flatpickr-day.nextMonthDay:focus {
            background: var(--bs-light);
            border-color: var(--bs-light);
            color: var(--bs-gray-400);
        }

        .flatpickr-day.today.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.nextMonthDay.today.inRange {
            background: rgba(var(--bs-primary-rgb), 0.1);
            color: var(--bs-primary);
            border-color: rgba(var(--bs-primary-rgb), 0.1);
        }

        .flatpickr-day.inRange {
            -webkit-box-shadow: -5px 0 0 var(--bs-light), 5px 0 0 var(--bs-light);
            box-shadow: -5px 0 0 var(--bs-light), 5px 0 0 var(--bs-light);
        }

        .flatpickr-day.selected.startRange + .endRange:not(:nth-child(7n+1)), .flatpickr-day.startRange.startRange + .endRange:not(:nth-child(7n+1)), .flatpickr-day.endRange.startRange + .endRange:not(:nth-child(7n+1)) {
            -webkit-box-shadow: -10px 0 0 var(--bs-primary);
            box-shadow: -10px 0 0 var(--bs-primary);
        }

        .flatpickr-input:disabled, .flatpickr-input[readonly] {
            background-color: var(--bs-body-bg);
        }

        .flatpickr-time input:hover, .flatpickr-time .flatpickr-am-pm:hover, .flatpickr-time input:focus, .flatpickr-time .flatpickr-am-pm:focus {
            background: var(--bs-light);
        }

        .flatpickr-calendar.hasTime .flatpickr-time {
            border-top-color: var(--bs-gray-200);
        }

        .flatpickr-current-month {
            font-size: 120%;
            padding: 9.48px 0 0 0;
            border-radius: 0.5rem;
        }

        .flatpickr-time input {
            color: var(--bs-gray-400);
        }
        .flatpickr-time .flatpickr-am-pm {
            color: var(--bs-gray-400);
        }

        @media (max-width: 575.98px) {
            .flatpickr-calendar.hasTime {
                width: 60%;
                min-width: 60%;
                max-width: 60%;
            }
        }
        .form-control-lg.flatpickr.active {
            border-radius: 1rem 1rem 0 0 !important;
        }

        .flatpickr.active {
            border-color: rgba(var(--bs-primary-rgb), 0.7) !important;
        }

        .form-fs-lg .flatpickr {
            font-weight: 500;
            font-size: 1.2rem;
        }

        .form-fs-md .flatpickr {
            font-weight: 500;
            font-size: 1rem;
        }

        .form-fs-sm .flatpickr {
            font-weight: 500;
            font-size: 0.875rem;
        }

        .form-control-border .flatpickr {
            margin-top: -1.2rem;
            padding-top: 1rem !important;
            padding-bottom: 0.8rem !important;
            color: var(--bs-gray-900) !important;
        }

        .form-control-bg-light .flatpickr {
            border: 1px solid transparent;
            background: var(--bs-light) !important;
            color: var(--bs-gray-900);
        }

        .form-border-bottom {
            border-bottom: 1px solid var(--bs-gray-300);
        }
        .form-border-bottom .flatpickr {
            border: none;
        }

        .flatpickr-input.active {
            border-radius: 0.5rem 0.5rem 0 0 !important;
        }

        .dropzone {
            min-height: auto;
            background: var(--bs-body-bg);
            border-radius: 0.5rem;
            border: 2px dashed var(--bs-gray-300);
        }

        .dropzone .dz-preview.dz-image-preview {
            background: var(--bs-body-bg);
        }

        .dropzone-custom {
            position: relative;
        }

        .dropzone-custom .dz-cover-preview {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0;
        }

        .dropzone-custom .dz-preview {
            min-height: auto;
            margin: 0;
            width: 100%;
        }

        .dropzone-custom.dropzone-cover .dz-message {
            padding: 6rem 2rem;
        }

        .dropzone-custom .dz-message {
            position: relative;
            padding: 2rem;
            margin: 0;
        }

        .dropzone-custom .dz-cover-preview .dz-cover-preview-wrap {
            position: absolute;
            height: 100%;
            width: 100%;
            border: 0 !important;
            overflow: hidden;
        }

        .dropzone-custom .dz-preview.dz-cover-preview .dz-cover-preview-img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 0.375rem;
        }

        .dropzone-custom.dropzone-cover.dz-file-processing .dz-message {
            display: none;
        }

        .dropzone-custom.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
            cursor: pointer;
        }

        .dropzone-custom.dropzone-cover.dz-max-files-reached .dz-message {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            opacity: 0;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            border-color: transparent;
        }

        .dropzone-custom.dropzone-cover.dz-max-files-reached:focus .dz-message, .dropzone.dropzone-cover.dz-max-files-reached:hover .dz-message {
            opacity: 1;
        }

        .dropzone-custom.dropzone-cover.dz-file-processing.dz-file-complete .dz-message {
            display: block;
        }

        .dropzone-custom.dropzone-cover .dz-preview.dz-cover-preview .dz-cover-preview-img {
            width: 100%;
            height: 100%;
        }

        .dropzone-custom.dropzone .dz-preview {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
        }

        .dark-mode {
            --bs-light: #2a2c31;
            --bs-gray-200: #464950;
            --bs-gray-300: #5f5f68;
            --bs-gray-400: #a1a1a8;
            --bs-gray-500: #bfc0c9;
            --bs-gray-600: #c5c6cc;
            --bs-gray-700: #ffffffb3;
            --bs-gray-800: #ffffffd9;
            --bs-gray-900: #fff;
            --bs-body-bg: #222529;
            --bs-body-bg-rgb: #222529;
            --bs-body-color: #a1a1a8;
            --bs-primary: #8e85e6 !important;
            --bs-primary-rgb: 142, 133, 230;
            --bs-link-hover-color:#7a6deb;
            --bs-mode:#191b1d;
            --bs-border-color: rgba(255, 255, 255, 0.07);
        }
        .dark-mode .navbar {
            --bs-navbar-color: var(--bs-gray-600);
            --bs-navbar-hover-color: var(--bs-primary);
            --bs-navbar-disabled-color: var(--bs-gray-400);
            --bs-navbar-active-color: var(--bs-primary);
        }
        .dark-mode .navbar-dark {
            --bs-navbar-color: var(--bs-gray-900);
        }
        .dark-mode .nav {
            --bs-nav-link-color: var(--bs-gray-600);
            --bs-nav-link-hover-color: var(--bs-primary);
        }
        .dark-mode .dropdown-menu {
            --bs-dropdown-bg: var(--bs-mode);
            --bs-dropdown-link-active-bg: rgba(var(--bs-primary-rgb), 0.1);
            --bs-dropdown-link-disabled-color: var(--bs-gray-200);
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid var(--bs-border-color);
        }
        .dark-mode .btn-primary {
            --bs-btn-bg: var(--bs-primary);
            --bs-btn-border-color: var(--bs-primary);
            --bs-btn-hover-bg: var(--bs-link-hover-color);
            --bs-btn-hover-border-color: var(--bs-link-hover-color);
            --bs-btn-active-bg: var(--bs-link-hover-color);
            --bs-btn-active-border-color: var(--bs-link-hover-color);
            --bs-btn-disabled-bg: var(--bs-primary);
        }
        .dark-mode .btn-outline-primary {
            --bs-btn-color: var(--bs-primary);
            --bs-btn-border-color: var(--bs-primary);
            --bs-btn-hover-bg: var(--bs-primary);
            --bs-btn-hover-border-color: var(--bs-primary);
            --bs-btn-active-bg: var(--bs-primary);
            --bs-btn-active-border-color: var(--bs-primary);
            --bs-btn-disabled-color: var(--bs-primary);
            --bs-btn-disabled-border-color: var(--bs-primary);
        }
        .dark-mode .btn-link {
            --bs-btn-hover-color: var(--bs-link-hover-color);
            --bs-btn-active-color: var(--bs-link-hover-color);
        }
        .dark-mode .modal {
            --bs-modal-bg: var(--bs-body-bg);
            --bs-modal-border-color: var(--bs-border-color-translucent);
            --bs-modal-footer-border-color: var(--bs-border-color);
        }
        .dark-mode .table-light {
            --bs-table-bg: var(--bs-light);
            --bs-table-color: var(--bs-gray-900);
        }
        .dark-mode .offcanvas, .dark-mode .offcanvas-xxl, .dark-mode .offcanvas-xl, .dark-mode .offcanvas-lg, .dark-mode .offcanvas-md, .dark-mode .offcanvas-sm {
            --bs-offcanvas-bg: var(--bs-body-bg);
        }
        .dark-mode .btn-primary-soft {
            color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .dark-mode .btn-primary-soft:hover, .dark-mode .btn-primary-soft:focus {
            color: #fff;
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }
        .dark-mode .fill-primary {
            fill: var(--bs-primary) !important;
        }
        .dark-mode .fill-body {
            fill: var(--bs-body-bg) !important;
        }
        .dark-mode .bg-light {
            background-color: var(--bs-light) !important;
        }
        .dark-mode .border-light {
            border-color: var(--bs-light) !important;
        }
        .dark-mode .bg-body {
            background-color: var(--bs-body-bg) !important;
        }
        .dark-mode .text-body {
            color: var(--bs-body-color) !important;
        }
        .dark-mode .bg-primary {
            background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity));
        }
        .dark-mode .border-primary {
            border-color: var(--bs-primary);
        }
        .dark-mode .text-primary {
            color: var(--bs-primary) !important;
        }
        .dark-mode .shadow, .dark-mode .shadow-lg, .dark-mode .shadow-sm {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }
        .dark-mode .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .dark-mode .btn-close {
            -webkit-filter: invert(1) grayscale(100%) brightness(300%);
            filter: invert(1) grayscale(100%) brightness(300%);
        }

        .modeswitch-wrap {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
        }
        .modeswitch-wrap .modeswitch-item {
            position: relative;
            width: 54px;
            height: 27px;
            padding: 6px;
            background: var(--bs-gray-800);
            border-radius: 60px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 16px;
            -webkit-transition: all 1s;
            transition: all 1s;
        }
        .modeswitch-wrap .modeswitch-item:before {
            content: "\f185";
            font-family: "Font Awesome 6 Free";
            font-weight: 700;
            position: absolute;
            color: #0b0a12;
        }
        .modeswitch-wrap .modeswitch-item:after {
            content: "\f186";
            font-family: "Font Awesome 6 Free";
            font-weight: 700;
            position: absolute;
            color: #fff;
            top: 4%;
            right: 15%;
        }
        .modeswitch-wrap .modeswitch-item .modeswitch-icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-transform: translateX(-14%);
            transform: translateX(-14%);
            height: 21px;
            width: 21px;
            background: #fff;
            border-radius: 50%;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
            font-size: 14px;
            color: #fff;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            z-index: 99;
        }

        .dark-mode .modeswitch-item {
            background: var(--bs-gray-400);
        }
        .dark-mode .modeswitch-item .modeswitch-icon {
            -webkit-transform: translateX(23px);
            transform: translateX(23px);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            background: #fff;
        }

        .modeswitch-mini {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
            display: block;
        }
        .modeswitch-mini .modeswitch-mini-item .modeswitch-mini-icon {
            font-size: 24px;
            color: #f7c32e;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }
        .modeswitch-mini .modeswitch-mini-item .modeswitch-mini-icon:before {
            content: "\f185";
            font-family: "Font Awesome 6 Free";
            font-weight: 700;
            border: none;
            line-height: 26px;
            text-align: center;
            display: block;
            width: 1.25rem;
        }

        .dark-mode .modeswitch-mini .modeswitch-mini-icon:before {
            content: "\f186";
            color: #fff;
        }

        .dark-mode-item {
            display: none !important;
        }

        .dark-mode .dark-mode-item {
            display: inline-block !important;
        }
        .dark-mode .light-mode-item {
            display: none !important;
        }

        /*User CSS*/
        /*# sourceMappingURL=style.css.map */
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "account_content"} */
class Block_195962638763b9c819154cf7_38299390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "account_content"} */
/* {block "content"} */
class Block_202576143163b9c81912db00_84415461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_202576143163b9c81912db00_84415461',
  ),
  'account_content' => 
  array (
    0 => 'Block_195962638763b9c819154cf7_38299390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section class="pt-3">
        <div class="container">
            <div class="row">
                <!-- Sidebar START -->
                <div class="col-lg-4 col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar" >
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header justify-content-end pb-2">
                            <button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>

                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-lg-0">
                            <div class="card bg-light w-100">

                                <!-- Edit profile button -->
                                <div class="position-absolute top-0 end-0 p-3">
                                    <a href="#" class="text-primary-hover" data-bs-toggle="tooltip" data-bs-title="Edit profile">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-3">
                                    <!-- Avatar and content -->
                                    <div class="text-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xl mb-2">

                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->img) {?>
                                                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->img;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" style="max-width: 130px;"class="rounded-circle m-t-xs img-fluid avatar-xl mb-4 avatar-img  border border-2 border-white" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                                            <?php } else { ?>
                                                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/ui/lib/img/default-user-avatar.png" class="rounded-circle shadow-2 img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                                            <?php }?>
                                        </div>
                                        <h6 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
</h6>
                                        <a href="#" class="text-reset text-primary-hover small"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</a>

                                        <hr>
                                    </div>

                                    <!-- Sidebar menu item START -->
                                    <ul class="nav nav-pills-primary-soft flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'dashboard') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dashboard/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home me-1 mb-1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                <?php ob_start();
echo __('Dashboard');
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>

                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'orders') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/hosting-orders/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart me-2 mb-1"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg><?php ob_start();
echo __('Orders');
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'invoices') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/invoices/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card me-1 mb-1"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                                <?php ob_start();
echo __(' Invoices');
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'quotes') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/quotes/"">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2 mb-1"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg><?php ob_start();
echo __("Quotes");
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'downloads') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/downloads/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file me-2 mb-1"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg><?php ob_start();
echo __('Documents');
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'kb') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/kb/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book me-2 mb-1"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg><?php ob_start();
echo __("Knowledgebase");
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'support') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/all/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle me-1 mb-1"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                <?php ob_start();
echo __(' Support');
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'profile') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/profile/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-2 mb-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><?php ob_start();
echo __("Profile");
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                        </li>
                                    </ul>
                                    <!-- Sidebar menu item END -->
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Sidebar END -->

                <!-- Main content START -->
                <div class="col-lg-8 col-xl-9">

                    <section class="">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195962638763b9c819154cf7_38299390', "account_content", $this->tplIndex);
?>

                    </section>




                </div>
                <!-- Main content END -->
            </div>
        </div>
    </section>

<?php
}
}
/* {/block "content"} */
}
